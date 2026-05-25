<?php
namespace App\Http\Controllers\Admin;use App\Http\Controllers\Controller;use App\Models\TopupOrder;class OrderController extends Controller{public function index(){$orders=TopupOrder::with('user','game','package','provider')->latest()->paginate(20);return view('admin.orders.index',compact('orders'));}}
