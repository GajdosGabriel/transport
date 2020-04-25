<?php

namespace App\Http\Controllers;

use App\Order;
use App\Http\Requests\OrderRequest;
//use App\Mail\Order;
use Illuminate\Http\Request;

class OrderController extends Controller
{
    public function store(OrderRequest $request) {

        Order::create($request->except('agree'));

//        dd($request->all());
        \Mail::to('info@ld-transport.com')->send(new Order($request));

        return redirect()->route('home');

    }
}
