<?php
namespace App\Http\Controllers;use App\Models\Game;class GameController extends Controller{public function show(Game $game){$packages=$game->packages()->where('is_active',1)->orderBy('sort_order')->get();return view('store.game',compact('game','packages'));}}
