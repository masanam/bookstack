<?php

/**
 * Queue configuration options.
 *
 * Changes to these config files are not supported by BookStack and may break upon updates.
 * Configuration should be altered via the `.env` file or environment variables.
 * Do not edit this file unless you're happy to maintain any changes yourself.
 */

return [

    // Default driver to use for the queue
    // Options: sync, database, redis
    'default' => env('QUEUE_CONNECTION', 'sync'),

    // Queue connection configuration
    'connections' => [

        'sync' => [
            'driver' => 'sync',
        ],

        'database' => [
            'driver'       => 'database',
            'connection'   => null,
            'table'        => 'jobs',
            'queue'        => 'default',
            'retry_after'  => 90,
            'after_commit' => false,
        ],

        'redis' => [
            'driver'       => 'redis',
            'connection'   => 'default',
            'queue'        => env('REDIS_QUEUE', 'default'),
            'retry_after'  => 90,
            'block_for'    => null,
            'after_commit' => false,
        ],

    ],

    // Job batching
    'batching' => [
        'database' => 'mysql',
        'table' => 'job_batches',
    ],

    // Failed queue job logging
    'failed' => [
        'driver'   => 'database-uuids',
        'database' => 'mysql',
        'table'    => 'failed_jobs',
    ],

];
