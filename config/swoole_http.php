<?php

use Swoole\Table;

return [
    /*
    |--------------------------------------------------------------------------
    | HTTP server configurations.
    |--------------------------------------------------------------------------
    |
    | @see https://www.swoole.co.uk/docs/modules/swoole-server/configuration
    |
    */
    'server' => [
        'host' => env('SWOOLE_HTTP_HOST', '127.0.0.1'),
        'port' => env('SWOOLE_HTTP_PORT', '1215'),
        'options' => [
            'pid_file' => env('SWOOLE_HTTP_PID_FILE', base_path('storage/logs/swoole_http.pid')),
            'log_file' => env('SWOOLE_HTTP_LOG_FILE', base_path('storage/logs/swoole_http.log')),
            'daemonize' => env('SWOOLE_HTTP_DAEMONIZE', false),
            // Normally this value should be 1~4 times larger according to your cpu cores.
            'worker_num' => env('SWOOLE_HTTP_WORKER_NUM', 4),
            'task_worker_num' => env('SWOOLE_HTTP_TASK_WORKER_NUM', 4),
            // The data to receive can't be larger than buffer_output_size.
            'package_max_length' => 10 * 1024 * 1024,
            // The data to send can't be larger than buffer_output_size.
            'buffer_output_size' => 10 * 1024 * 1024
        ],
    ],

    /*
    |--------------------------------------------------------------------------
    | Enable to turn on websocket server.
    |--------------------------------------------------------------------------
    */
    'websocket' => [
        'enabled' => env('SWOOLE_HTTP_WEBSOCKET', false),
    ],

    /*
    |--------------------------------------------------------------------------
    | Laravel app will be cloned on every request.
    |--------------------------------------------------------------------------
    */
    'sandbox_mode' => env('SWOOLE_SANDBOX_MODE', true),

    /*
    |--------------------------------------------------------------------------
    | Console output will be transferred to response content if enabled.
    |--------------------------------------------------------------------------
    */
    'ob_output' => env('SWOOLE_OB_OUTPUT', true),

    /*
    |--------------------------------------------------------------------------
    | Providers here will be registered on every request.
    |--------------------------------------------------------------------------
    */
    'providers' => [
        // Illuminate\Auth\AuthServiceProvider::class,
    ],

    /*
    |--------------------------------------------------------------------------
    | Resolved facades here will be cleared on every request.
    |--------------------------------------------------------------------------
    */
    'facades' => [
        'auth', 'auth.driver', 'auth.password', 'request'
    ],

    /*
    |--------------------------------------------------------------------------
    | Instances here will be cleared on every request.
    |--------------------------------------------------------------------------
    */
    'instances' => [
        //
    ],

    /*
    |--------------------------------------------------------------------------
    | Define your swoole tables here.
    |
    | @see https://wiki.swoole.com/wiki/page/p-table.html
    |--------------------------------------------------------------------------
    */
    'tables' => [
        // 'table_name' => [
        //     'size' => 1024,
        //     'columns' => [
        //         ['name' => 'column_name', 'type' => Table::TYPE_STRING, 'size' => 1024],
        //     ]
        // ],
    ]
];
