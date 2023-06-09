<?php

use App\Models\User;
use Marjose123\FilamentWebhookServer\Models\FilamentWebhookServer;
use Marjose123\FilamentWebhookServer\Models\FilamentWebhookServerHistory;

return [
    /*
     *  Models that you want to be part of the webhooks options
     */
    'models'                            => [
        User::class,
    ],
    /*
     */
    'polling'                           => '10s',
    'webhook'                           => [
        'keep_history' => false,
    ],
    FilamentWebhookServer::class        => FilamentWebhookServer::class,
    FilamentWebhookServerHistory::class => FilamentWebhookServer::class,
];
