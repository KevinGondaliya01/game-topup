<?php
use Illuminate\Foundation\Application;
use Illuminate\Foundation\Configuration\Exceptions;
use Illuminate\Foundation\Configuration\Middleware;
use Illuminate\Validation\ValidationException;
use Symfony\Component\HttpKernel\Exception\NotFoundHttpException;
use App\Exceptions\FriendlyException;
use App\Http\Middleware\AdminMiddleware;
return Application::configure(basePath: dirname(__DIR__))
    ->withRouting(web: __DIR__.'/../routes/web.php', api: __DIR__.'/../routes/api.php', commands: __DIR__.'/../routes/console.php', health: '/up')
    ->withMiddleware(function (Middleware $middleware) { $middleware->alias(['admin' => AdminMiddleware::class]); $middleware->validateCsrfTokens(except: ['api/razorpay/webhook','api/provider/webhook']); })
    ->withExceptions(function (Exceptions $exceptions) {
        $exceptions->render(function (FriendlyException $e, $request) { return $request->expectsJson()? response()->json(['status'=>false,'message'=>$e->getMessage()],422) : back()->withInput()->with('error',$e->getMessage()); });
        $exceptions->render(function (ValidationException $e, $request) { return $request->expectsJson()? response()->json(['status'=>false,'message'=>$e->validator->errors()->first()],422) : back()->withInput()->withErrors($e->validator)->with('error',$e->validator->errors()->first()); });
        $exceptions->render(function (NotFoundHttpException $e, $request) { return $request->expectsJson()? response()->json(['message'=>'Not found'],404) : response()->view('errors.404', [], 404); });
    })->create();
