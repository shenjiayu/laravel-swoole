<?php

use Illuminate\Http\Request;
use SwooleTW\Http\Websocket\Facades\Websocket;

/*
|--------------------------------------------------------------------------
| Websocket Routes
|--------------------------------------------------------------------------
|
| Here is where you can register websocket events for your application.
|
*/

Websocket::on('connect', function ($websocket, Request $request) {
    // called while socket on connect
});

Websocket::on('close', function ($websocket) {
    // called while socket on close
});

Websocket::on('example', function ($websocket, $data) {
    $websocket->emit('message', $data);
});

// Websocket::on('test', 'ExampleController@method');