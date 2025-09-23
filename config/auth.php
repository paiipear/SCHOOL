<?php

return [
    'guards' => [
        'web' => [ // untuk admin & guru
            'driver' => 'session',
            'provider' => 'users',
        ],

        'student' => [ // untuk siswa
            'driver' => 'session',
            'provider' => 'students',
        ],
    ],

    'providers' => [
        'users' => [
            'driver' => 'eloquent',
            'model' => App\Models\User::class,
        ],

        'students' => [
            'driver' => 'eloquent',
            'model' => App\Models\Student::class,
        ],
    ],

    'password_timeout' => env('AUTH_PASSWORD_TIMEOUT', 10800),

];
