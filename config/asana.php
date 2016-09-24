<?php

return [

    /*
    |--------------------------------------------------------------------------
    | Asana Access Token
    |--------------------------------------------------------------------------
    |
    */

    'accessToken' => env('ASANA_TOKEN'),

    /*
    |--------------------------------------------------------------------------
    | Asana default workspace
    |--------------------------------------------------------------------------
    |
    */

    'workspaceId' => env('ASANA_DEV_WORKSPACE'),

    /*
    |--------------------------------------------------------------------------
    | Asana default project
    |--------------------------------------------------------------------------
    |
    */

    'projectId' => env('ASANA_DEV_PROJECT'),

    /*
    |--------------------------------------------------------------------------
    | Email Backup
    |--------------------------------------------------------------------------
    |
    | This is used if the new report request fails
    |
    */

    'email' => env('ASANA_DEV_EMAIL'),

];
