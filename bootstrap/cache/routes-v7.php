<?php

/*
|--------------------------------------------------------------------------
| Load The Cached Routes
|--------------------------------------------------------------------------
|
| Here we will decode and unserialize the RouteCollection instance that
| holds all of the route information for an application. This allows
| us to instantaneously load the entire route map into the router.
|
*/

app('router')->setCompiledRoutes(
    array (
  'compiled' => 
  array (
    0 => false,
    1 => 
    array (
      '/laravel-websockets' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::MdhKNWfdFcesoSlw',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/laravel-websockets/auth' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::pgps87w2pYjbE8lK',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/laravel-websockets/event' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::LtiTdD6P0LACBQo1',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/laravel-websockets/statistics' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::h7lWatITl5WLHlYn',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/sanctum/csrf-cookie' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::Mb9182oFtmp6fecj',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/broadcasting/auth' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::wv1JkjawXUhmMYZN',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'POST' => 1,
            'HEAD' => 2,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/api/auth/refresh' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::Mr8oqFyHAg7Bt4ov',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/api/auth/logout' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::cz44RIlhZnTe7QuI',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/api/auth/me' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::CbubJszHFtqGnJW2',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/api/auth/forgot-password' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::GyKV1xy6wMPHwtXm',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/api/auth/reset-password' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::HwR1fQ4DwsqdmHB1',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/api/auth/send-notification' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::17ezekFtzEsRLVCz',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/api/auth/IoT-devices/add-reading' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::GyyfAPVCcTreXxQa',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/api/auth/IoT-devices/change-flow-status' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::NVMsemLWgAVt5Kvr',
          ),
          1 => NULL,
          2 => 
          array (
            'PUT' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/api/auth/cms/get-content' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::5ddFBMvscw3Lx6fW',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/api/auth/admin/login' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::7DPIcWlqI98lz6hF',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/api/auth/admin/IoT-devices' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::yVMgJKf8Q0ZXfdtT',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
        1 => 
        array (
          0 => 
          array (
            '_route' => 'generated::beTXRDjCpOd7HmFJ',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/api/auth/admin/user' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::gUrRR7na4G63xY8w',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
        1 => 
        array (
          0 => 
          array (
            '_route' => 'generated::57IspvkKZX6E7lG6',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/api/auth/admin' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::pVu74xTY4WEiyVKG',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
        1 => 
        array (
          0 => 
          array (
            '_route' => 'generated::g5riVbNchpQGUV55',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/api/auth/user/login' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::Un6gjBLeb03Z6v0p',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/api/auth/user/register' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::xGwdFKmggwcN3pNO',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/api/auth/user/IoT-devices/associated-devices' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::lxfLo2YWxSh3ZFag',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/api/auth/user/show-profile' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::c0btwNF1hzdMqQm2',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/send-message' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::dZWXYhTCQTHfKAgT',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
    ),
    2 => 
    array (
      0 => '{^(?|/laravel\\-websockets/api/([^/]++)/statistics(*:51)|/api/auth/(?|admin/(?|IoT\\-devices/([^/]++)(?|(*:104))|user/([^/]++)(?|(*:129))|([^/]++)(?|(*:149)))|user/IoT\\-devices/(?|([^/]++)(*:188)|associate\\-user(*:211)|get\\-device\\-details(*:239)|change\\-power\\-status(*:268)))|/([^/]++)?(?|(*:291)|(?:/([^/]++))?(*:313)|(?:/([^/]++)(?:/([^/]++))?)?(*:349)|(?:/([^/]++)(?:/([^/]++)(?:/([^/]++))?)?)?(*:399)|(?:/([^/]++)(?:/([^/]++)(?:/([^/]++)(?:/([^/]++))?)?)?)?(*:463)))/?$}sDu',
    ),
    3 => 
    array (
      51 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::hv60vVjQGFg5sYkx',
          ),
          1 => 
          array (
            0 => 'appId',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      104 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::yPePpyFXuePylXyB',
          ),
          1 => 
          array (
            0 => 'id',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
        1 => 
        array (
          0 => 
          array (
            '_route' => 'generated::rHujPZMsG9oHRKl0',
          ),
          1 => 
          array (
            0 => 'id',
          ),
          2 => 
          array (
            'PUT' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
        2 => 
        array (
          0 => 
          array (
            '_route' => 'generated::CmnC7OAFdgkr17EL',
          ),
          1 => 
          array (
            0 => 'id',
          ),
          2 => 
          array (
            'DELETE' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      129 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::ZkIeaCjH2nxtCA1W',
          ),
          1 => 
          array (
            0 => 'id',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
        1 => 
        array (
          0 => 
          array (
            '_route' => 'generated::gjqkK0ZfuFWj6L60',
          ),
          1 => 
          array (
            0 => 'id',
          ),
          2 => 
          array (
            'PUT' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
        2 => 
        array (
          0 => 
          array (
            '_route' => 'generated::UMcCpXVQ3qpaiFJ4',
          ),
          1 => 
          array (
            0 => 'id',
          ),
          2 => 
          array (
            'DELETE' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      149 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::HqVgBZEA6LtpVqjY',
          ),
          1 => 
          array (
            0 => 'id',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
        1 => 
        array (
          0 => 
          array (
            '_route' => 'generated::FiiWJwX4HhZmZCy1',
          ),
          1 => 
          array (
            0 => 'id',
          ),
          2 => 
          array (
            'PUT' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
        2 => 
        array (
          0 => 
          array (
            '_route' => 'generated::MHKn5tz3RgTqCC09',
          ),
          1 => 
          array (
            0 => 'id',
          ),
          2 => 
          array (
            'DELETE' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      188 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::eKw5PDp3jytVbPoG',
          ),
          1 => 
          array (
            0 => 'token',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      211 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::wb7NxfwJGmBUEK5W',
          ),
          1 => 
          array (
          ),
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      239 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::hgwjS2mR5cJk1Yku',
          ),
          1 => 
          array (
          ),
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      268 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::Dq2G56XMmqjiUamB',
          ),
          1 => 
          array (
          ),
          2 => 
          array (
            'PUT' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      291 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::vWzCMhfIvnDUGDRs',
            'mainPath' => NULL,
          ),
          1 => 
          array (
            0 => 'mainPath',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      313 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::PoRJgCN4dhpCQUNJ',
            'mainPath' => NULL,
            'higherLevel' => NULL,
          ),
          1 => 
          array (
            0 => 'mainPath',
            1 => 'higherLevel',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      349 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::V5yUOsI3K4JTuAki',
            'mainPath' => NULL,
            'higherLevel' => NULL,
            'higherLevel2' => NULL,
          ),
          1 => 
          array (
            0 => 'mainPath',
            1 => 'higherLevel',
            2 => 'higherLevel2',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      399 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::j6KAW1CSxO18wU9y',
            'mainPath' => NULL,
            'higherLevel' => NULL,
            'higherLevel2' => NULL,
            'higherLevel3' => NULL,
          ),
          1 => 
          array (
            0 => 'mainPath',
            1 => 'higherLevel',
            2 => 'higherLevel2',
            3 => 'higherLevel3',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      463 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::dSyPMGuf9MxOunAt',
            'mainPath' => NULL,
            'higherLevel' => NULL,
            'higherLevel2' => NULL,
            'higherLevel3' => NULL,
            'higherLevel4' => NULL,
          ),
          1 => 
          array (
            0 => 'mainPath',
            1 => 'higherLevel',
            2 => 'higherLevel2',
            3 => 'higherLevel3',
            4 => 'higherLevel4',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
        1 => 
        array (
          0 => NULL,
          1 => NULL,
          2 => NULL,
          3 => NULL,
          4 => false,
          5 => false,
          6 => 0,
        ),
      ),
    ),
    4 => NULL,
  ),
  'attributes' => 
  array (
    'generated::MdhKNWfdFcesoSlw' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'laravel-websockets',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'BeyondCode\\LaravelWebSockets\\Dashboard\\Http\\Middleware\\Authorize',
        ),
        'uses' => 'BeyondCode\\LaravelWebSockets\\Dashboard\\Http\\Controllers\\ShowDashboard@__invoke',
        'controller' => 'BeyondCode\\LaravelWebSockets\\Dashboard\\Http\\Controllers\\ShowDashboard',
        'namespace' => NULL,
        'prefix' => 'laravel-websockets',
        'where' => 
        array (
        ),
        'as' => 'generated::MdhKNWfdFcesoSlw',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::hv60vVjQGFg5sYkx' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'laravel-websockets/api/{appId}/statistics',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'BeyondCode\\LaravelWebSockets\\Dashboard\\Http\\Middleware\\Authorize',
        ),
        'uses' => 'BeyondCode\\LaravelWebSockets\\Dashboard\\Http\\Controllers\\DashboardApiController@getStatistics',
        'controller' => 'BeyondCode\\LaravelWebSockets\\Dashboard\\Http\\Controllers\\DashboardApiController@getStatistics',
        'namespace' => NULL,
        'prefix' => 'laravel-websockets',
        'where' => 
        array (
        ),
        'as' => 'generated::hv60vVjQGFg5sYkx',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::pgps87w2pYjbE8lK' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'laravel-websockets/auth',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'BeyondCode\\LaravelWebSockets\\Dashboard\\Http\\Middleware\\Authorize',
        ),
        'uses' => 'BeyondCode\\LaravelWebSockets\\Dashboard\\Http\\Controllers\\AuthenticateDashboard@__invoke',
        'controller' => 'BeyondCode\\LaravelWebSockets\\Dashboard\\Http\\Controllers\\AuthenticateDashboard',
        'namespace' => NULL,
        'prefix' => 'laravel-websockets',
        'where' => 
        array (
        ),
        'as' => 'generated::pgps87w2pYjbE8lK',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::LtiTdD6P0LACBQo1' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'laravel-websockets/event',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'BeyondCode\\LaravelWebSockets\\Dashboard\\Http\\Middleware\\Authorize',
        ),
        'uses' => 'BeyondCode\\LaravelWebSockets\\Dashboard\\Http\\Controllers\\SendMessage@__invoke',
        'controller' => 'BeyondCode\\LaravelWebSockets\\Dashboard\\Http\\Controllers\\SendMessage',
        'namespace' => NULL,
        'prefix' => 'laravel-websockets',
        'where' => 
        array (
        ),
        'as' => 'generated::LtiTdD6P0LACBQo1',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::h7lWatITl5WLHlYn' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'laravel-websockets/statistics',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'BeyondCode\\LaravelWebSockets\\Statistics\\Http\\Middleware\\Authorize',
        ),
        'uses' => 'BeyondCode\\LaravelWebSockets\\Statistics\\Http\\Controllers\\WebSocketStatisticsEntriesController@store',
        'controller' => 'BeyondCode\\LaravelWebSockets\\Statistics\\Http\\Controllers\\WebSocketStatisticsEntriesController@store',
        'namespace' => NULL,
        'prefix' => 'laravel-websockets',
        'where' => 
        array (
        ),
        'as' => 'generated::h7lWatITl5WLHlYn',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::Mb9182oFtmp6fecj' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'sanctum/csrf-cookie',
      'action' => 
      array (
        'uses' => 'Laravel\\Sanctum\\Http\\Controllers\\CsrfCookieController@show',
        'controller' => 'Laravel\\Sanctum\\Http\\Controllers\\CsrfCookieController@show',
        'namespace' => NULL,
        'prefix' => 'sanctum',
        'where' => 
        array (
        ),
        'middleware' => 
        array (
          0 => 'web',
        ),
        'as' => 'generated::Mb9182oFtmp6fecj',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::wv1JkjawXUhmMYZN' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'POST',
        2 => 'HEAD',
      ),
      'uri' => 'broadcasting/auth',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
        ),
        'uses' => '\\Illuminate\\Broadcasting\\BroadcastController@authenticate',
        'controller' => '\\Illuminate\\Broadcasting\\BroadcastController@authenticate',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'excluded_middleware' => 
        array (
          0 => 'Illuminate\\Foundation\\Http\\Middleware\\VerifyCsrfToken',
        ),
        'as' => 'generated::wv1JkjawXUhmMYZN',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::Mr8oqFyHAg7Bt4ov' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'api/auth/refresh',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
        ),
        'uses' => 'App\\Http\\Controllers\\APIs\\AuthController@refresh',
        'controller' => 'App\\Http\\Controllers\\APIs\\AuthController@refresh',
        'namespace' => NULL,
        'prefix' => 'api/auth',
        'where' => 
        array (
        ),
        'as' => 'generated::Mr8oqFyHAg7Bt4ov',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::cz44RIlhZnTe7QuI' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'api/auth/logout',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
        ),
        'uses' => 'App\\Http\\Controllers\\APIs\\AuthController@logout',
        'controller' => 'App\\Http\\Controllers\\APIs\\AuthController@logout',
        'namespace' => NULL,
        'prefix' => 'api/auth',
        'where' => 
        array (
        ),
        'as' => 'generated::cz44RIlhZnTe7QuI',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::CbubJszHFtqGnJW2' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'api/auth/me',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
        ),
        'uses' => 'App\\Http\\Controllers\\APIs\\AuthController@me',
        'controller' => 'App\\Http\\Controllers\\APIs\\AuthController@me',
        'namespace' => NULL,
        'prefix' => 'api/auth',
        'where' => 
        array (
        ),
        'as' => 'generated::CbubJszHFtqGnJW2',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::GyKV1xy6wMPHwtXm' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'api/auth/forgot-password',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
        ),
        'uses' => 'App\\Http\\Controllers\\APIs\\NewPasswordController@forgotPassword',
        'controller' => 'App\\Http\\Controllers\\APIs\\NewPasswordController@forgotPassword',
        'namespace' => NULL,
        'prefix' => 'api/auth',
        'where' => 
        array (
        ),
        'as' => 'generated::GyKV1xy6wMPHwtXm',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::HwR1fQ4DwsqdmHB1' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'api/auth/reset-password',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
        ),
        'uses' => 'App\\Http\\Controllers\\APIs\\NewPasswordController@reset',
        'controller' => 'App\\Http\\Controllers\\APIs\\NewPasswordController@reset',
        'namespace' => NULL,
        'prefix' => 'api/auth',
        'where' => 
        array (
        ),
        'as' => 'generated::HwR1fQ4DwsqdmHB1',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::17ezekFtzEsRLVCz' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'api/auth/send-notification',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
        ),
        'uses' => 'App\\Http\\Controllers\\APIs\\Admin\\NotificationsController@sendNotificationToMobile',
        'controller' => 'App\\Http\\Controllers\\APIs\\Admin\\NotificationsController@sendNotificationToMobile',
        'namespace' => NULL,
        'prefix' => 'api/auth',
        'where' => 
        array (
        ),
        'as' => 'generated::17ezekFtzEsRLVCz',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::GyyfAPVCcTreXxQa' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'api/auth/IoT-devices/add-reading',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
        ),
        'uses' => 'App\\Http\\Controllers\\APIs\\User\\IoTDevicesController@addReading',
        'controller' => 'App\\Http\\Controllers\\APIs\\User\\IoTDevicesController@addReading',
        'namespace' => NULL,
        'prefix' => 'api/auth/IoT-devices',
        'where' => 
        array (
        ),
        'as' => 'generated::GyyfAPVCcTreXxQa',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::NVMsemLWgAVt5Kvr' => 
    array (
      'methods' => 
      array (
        0 => 'PUT',
      ),
      'uri' => 'api/auth/IoT-devices/change-flow-status',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
        ),
        'uses' => 'App\\Http\\Controllers\\APIs\\User\\IoTDevicesController@changeFlowStatus',
        'controller' => 'App\\Http\\Controllers\\APIs\\User\\IoTDevicesController@changeFlowStatus',
        'namespace' => NULL,
        'prefix' => 'api/auth/IoT-devices',
        'where' => 
        array (
        ),
        'as' => 'generated::NVMsemLWgAVt5Kvr',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::5ddFBMvscw3Lx6fW' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'api/auth/cms/get-content',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
        ),
        'uses' => 'App\\Http\\Controllers\\CMSController@getContent',
        'controller' => 'App\\Http\\Controllers\\CMSController@getContent',
        'namespace' => NULL,
        'prefix' => 'api/auth/cms',
        'where' => 
        array (
        ),
        'as' => 'generated::5ddFBMvscw3Lx6fW',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::7DPIcWlqI98lz6hF' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'api/auth/admin/login',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
        ),
        'uses' => 'App\\Http\\Controllers\\APIs\\AdminsController@login',
        'controller' => 'App\\Http\\Controllers\\APIs\\AdminsController@login',
        'namespace' => NULL,
        'prefix' => 'api/auth/admin',
        'where' => 
        array (
        ),
        'as' => 'generated::7DPIcWlqI98lz6hF',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::yVMgJKf8Q0ZXfdtT' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'api/auth/admin/IoT-devices',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'auth.guard:admin-api',
        ),
        'uses' => 'App\\Http\\Controllers\\APIs\\Admin\\AdminIoTDevicesController@getAllIoTDevices',
        'controller' => 'App\\Http\\Controllers\\APIs\\Admin\\AdminIoTDevicesController@getAllIoTDevices',
        'namespace' => NULL,
        'prefix' => 'api/auth/admin/IoT-devices',
        'where' => 
        array (
        ),
        'as' => 'generated::yVMgJKf8Q0ZXfdtT',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::yPePpyFXuePylXyB' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'api/auth/admin/IoT-devices/{id}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'auth.guard:admin-api',
        ),
        'uses' => 'App\\Http\\Controllers\\APIs\\Admin\\AdminIoTDevicesController@getIoTDevice',
        'controller' => 'App\\Http\\Controllers\\APIs\\Admin\\AdminIoTDevicesController@getIoTDevice',
        'namespace' => NULL,
        'prefix' => 'api/auth/admin/IoT-devices',
        'where' => 
        array (
        ),
        'as' => 'generated::yPePpyFXuePylXyB',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::beTXRDjCpOd7HmFJ' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'api/auth/admin/IoT-devices',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'auth.guard:admin-api',
        ),
        'uses' => 'App\\Http\\Controllers\\APIs\\Admin\\AdminIoTDevicesController@addIoTDevice',
        'controller' => 'App\\Http\\Controllers\\APIs\\Admin\\AdminIoTDevicesController@addIoTDevice',
        'namespace' => NULL,
        'prefix' => 'api/auth/admin/IoT-devices',
        'where' => 
        array (
        ),
        'as' => 'generated::beTXRDjCpOd7HmFJ',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::rHujPZMsG9oHRKl0' => 
    array (
      'methods' => 
      array (
        0 => 'PUT',
      ),
      'uri' => 'api/auth/admin/IoT-devices/{id}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'auth.guard:admin-api',
        ),
        'uses' => 'App\\Http\\Controllers\\APIs\\Admin\\AdminIoTDevicesController@updateIoTDevice',
        'controller' => 'App\\Http\\Controllers\\APIs\\Admin\\AdminIoTDevicesController@updateIoTDevice',
        'namespace' => NULL,
        'prefix' => 'api/auth/admin/IoT-devices',
        'where' => 
        array (
        ),
        'as' => 'generated::rHujPZMsG9oHRKl0',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::CmnC7OAFdgkr17EL' => 
    array (
      'methods' => 
      array (
        0 => 'DELETE',
      ),
      'uri' => 'api/auth/admin/IoT-devices/{id}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'auth.guard:admin-api',
        ),
        'uses' => 'App\\Http\\Controllers\\APIs\\Admin\\AdminIoTDevicesController@deleteIoTDevice',
        'controller' => 'App\\Http\\Controllers\\APIs\\Admin\\AdminIoTDevicesController@deleteIoTDevice',
        'namespace' => NULL,
        'prefix' => 'api/auth/admin/IoT-devices',
        'where' => 
        array (
        ),
        'as' => 'generated::CmnC7OAFdgkr17EL',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::gUrRR7na4G63xY8w' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'api/auth/admin/user',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'auth.guard:admin-api',
        ),
        'uses' => 'App\\Http\\Controllers\\APIs\\Admin\\AdminUsersController@getAllUsers',
        'controller' => 'App\\Http\\Controllers\\APIs\\Admin\\AdminUsersController@getAllUsers',
        'namespace' => NULL,
        'prefix' => 'api/auth/admin/user',
        'where' => 
        array (
        ),
        'as' => 'generated::gUrRR7na4G63xY8w',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::ZkIeaCjH2nxtCA1W' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'api/auth/admin/user/{id}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'auth.guard:admin-api',
        ),
        'uses' => 'App\\Http\\Controllers\\APIs\\Admin\\AdminUsersController@getUser',
        'controller' => 'App\\Http\\Controllers\\APIs\\Admin\\AdminUsersController@getUser',
        'namespace' => NULL,
        'prefix' => 'api/auth/admin/user',
        'where' => 
        array (
        ),
        'as' => 'generated::ZkIeaCjH2nxtCA1W',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::57IspvkKZX6E7lG6' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'api/auth/admin/user',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'auth.guard:admin-api',
        ),
        'uses' => 'App\\Http\\Controllers\\APIs\\Admin\\AdminUsersController@addUser',
        'controller' => 'App\\Http\\Controllers\\APIs\\Admin\\AdminUsersController@addUser',
        'namespace' => NULL,
        'prefix' => 'api/auth/admin/user',
        'where' => 
        array (
        ),
        'as' => 'generated::57IspvkKZX6E7lG6',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::gjqkK0ZfuFWj6L60' => 
    array (
      'methods' => 
      array (
        0 => 'PUT',
      ),
      'uri' => 'api/auth/admin/user/{id}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'auth.guard:admin-api',
        ),
        'uses' => 'App\\Http\\Controllers\\APIs\\Admin\\AdminUsersController@updateUser',
        'controller' => 'App\\Http\\Controllers\\APIs\\Admin\\AdminUsersController@updateUser',
        'namespace' => NULL,
        'prefix' => 'api/auth/admin/user',
        'where' => 
        array (
        ),
        'as' => 'generated::gjqkK0ZfuFWj6L60',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::UMcCpXVQ3qpaiFJ4' => 
    array (
      'methods' => 
      array (
        0 => 'DELETE',
      ),
      'uri' => 'api/auth/admin/user/{id}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'auth.guard:admin-api',
        ),
        'uses' => 'App\\Http\\Controllers\\APIs\\Admin\\AdminUsersController@deleteUser',
        'controller' => 'App\\Http\\Controllers\\APIs\\Admin\\AdminUsersController@deleteUser',
        'namespace' => NULL,
        'prefix' => 'api/auth/admin/user',
        'where' => 
        array (
        ),
        'as' => 'generated::UMcCpXVQ3qpaiFJ4',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::pVu74xTY4WEiyVKG' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'api/auth/admin',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'auth.guard:admin-api',
        ),
        'uses' => 'App\\Http\\Controllers\\APIs\\AdminsController@getAllAdmins',
        'controller' => 'App\\Http\\Controllers\\APIs\\AdminsController@getAllAdmins',
        'namespace' => NULL,
        'prefix' => 'api/auth/admin',
        'where' => 
        array (
        ),
        'as' => 'generated::pVu74xTY4WEiyVKG',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::HqVgBZEA6LtpVqjY' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'api/auth/admin/{id}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'auth.guard:admin-api',
        ),
        'uses' => 'App\\Http\\Controllers\\APIs\\AdminsController@getAdmin',
        'controller' => 'App\\Http\\Controllers\\APIs\\AdminsController@getAdmin',
        'namespace' => NULL,
        'prefix' => 'api/auth/admin',
        'where' => 
        array (
        ),
        'as' => 'generated::HqVgBZEA6LtpVqjY',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::g5riVbNchpQGUV55' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'api/auth/admin',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'auth.guard:admin-api',
        ),
        'uses' => 'App\\Http\\Controllers\\APIs\\AdminsController@addAdmin',
        'controller' => 'App\\Http\\Controllers\\APIs\\AdminsController@addAdmin',
        'namespace' => NULL,
        'prefix' => 'api/auth/admin',
        'where' => 
        array (
        ),
        'as' => 'generated::g5riVbNchpQGUV55',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::FiiWJwX4HhZmZCy1' => 
    array (
      'methods' => 
      array (
        0 => 'PUT',
      ),
      'uri' => 'api/auth/admin/{id}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'auth.guard:admin-api',
        ),
        'uses' => 'App\\Http\\Controllers\\APIs\\AdminsController@updateAdmin',
        'controller' => 'App\\Http\\Controllers\\APIs\\AdminsController@updateAdmin',
        'namespace' => NULL,
        'prefix' => 'api/auth/admin',
        'where' => 
        array (
        ),
        'as' => 'generated::FiiWJwX4HhZmZCy1',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::MHKn5tz3RgTqCC09' => 
    array (
      'methods' => 
      array (
        0 => 'DELETE',
      ),
      'uri' => 'api/auth/admin/{id}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'auth.guard:admin-api',
        ),
        'uses' => 'App\\Http\\Controllers\\APIs\\AdminsController@deleteAdmin',
        'controller' => 'App\\Http\\Controllers\\APIs\\AdminsController@deleteAdmin',
        'namespace' => NULL,
        'prefix' => 'api/auth/admin',
        'where' => 
        array (
        ),
        'as' => 'generated::MHKn5tz3RgTqCC09',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::Un6gjBLeb03Z6v0p' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'api/auth/user/login',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
        ),
        'uses' => 'App\\Http\\Controllers\\APIs\\UsersController@login',
        'controller' => 'App\\Http\\Controllers\\APIs\\UsersController@login',
        'namespace' => NULL,
        'prefix' => 'api/auth/user',
        'where' => 
        array (
        ),
        'as' => 'generated::Un6gjBLeb03Z6v0p',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::xGwdFKmggwcN3pNO' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'api/auth/user/register',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
        ),
        'uses' => 'App\\Http\\Controllers\\APIs\\UsersController@register',
        'controller' => 'App\\Http\\Controllers\\APIs\\UsersController@register',
        'namespace' => NULL,
        'prefix' => 'api/auth/user',
        'where' => 
        array (
        ),
        'as' => 'generated::xGwdFKmggwcN3pNO',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::lxfLo2YWxSh3ZFag' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'api/auth/user/IoT-devices/associated-devices',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'auth.guard:user-api',
        ),
        'uses' => 'App\\Http\\Controllers\\APIs\\User\\IoTDevicesController@associatedDevices',
        'controller' => 'App\\Http\\Controllers\\APIs\\User\\IoTDevicesController@associatedDevices',
        'namespace' => NULL,
        'prefix' => 'api/auth/user/IoT-devices',
        'where' => 
        array (
        ),
        'as' => 'generated::lxfLo2YWxSh3ZFag',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::eKw5PDp3jytVbPoG' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'api/auth/user/IoT-devices/{token}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'auth.guard:user-api',
        ),
        'uses' => 'App\\Http\\Controllers\\APIs\\User\\IoTDevicesController@getIoTDevice',
        'controller' => 'App\\Http\\Controllers\\APIs\\User\\IoTDevicesController@getIoTDevice',
        'namespace' => NULL,
        'prefix' => 'api/auth/user/IoT-devices',
        'where' => 
        array (
        ),
        'as' => 'generated::eKw5PDp3jytVbPoG',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::wb7NxfwJGmBUEK5W' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'api/auth/user/IoT-devices/associate-user',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'auth.guard:user-api',
        ),
        'uses' => 'App\\Http\\Controllers\\APIs\\User\\IoTDevicesController@associateDeviceToUser',
        'controller' => 'App\\Http\\Controllers\\APIs\\User\\IoTDevicesController@associateDeviceToUser',
        'namespace' => NULL,
        'prefix' => 'api/auth/user/IoT-devices',
        'where' => 
        array (
        ),
        'as' => 'generated::wb7NxfwJGmBUEK5W',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::hgwjS2mR5cJk1Yku' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'api/auth/user/IoT-devices/get-device-details',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'auth.guard:user-api',
        ),
        'uses' => 'App\\Http\\Controllers\\APIs\\User\\IoTDevicesController@getIoTDeviceDetails',
        'controller' => 'App\\Http\\Controllers\\APIs\\User\\IoTDevicesController@getIoTDeviceDetails',
        'namespace' => NULL,
        'prefix' => 'api/auth/user/IoT-devices',
        'where' => 
        array (
        ),
        'as' => 'generated::hgwjS2mR5cJk1Yku',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::Dq2G56XMmqjiUamB' => 
    array (
      'methods' => 
      array (
        0 => 'PUT',
      ),
      'uri' => 'api/auth/user/IoT-devices/change-power-status',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'auth.guard:user-api',
        ),
        'uses' => 'App\\Http\\Controllers\\APIs\\User\\IoTDevicesController@changePowerStatus',
        'controller' => 'App\\Http\\Controllers\\APIs\\User\\IoTDevicesController@changePowerStatus',
        'namespace' => NULL,
        'prefix' => 'api/auth/user/IoT-devices',
        'where' => 
        array (
        ),
        'as' => 'generated::Dq2G56XMmqjiUamB',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::c0btwNF1hzdMqQm2' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'api/auth/user/show-profile',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'auth.guard:user-api',
        ),
        'uses' => 'App\\Http\\Controllers\\APIs\\UsersController@getProfile',
        'controller' => 'App\\Http\\Controllers\\APIs\\UsersController@getProfile',
        'namespace' => NULL,
        'prefix' => 'api/auth/user',
        'where' => 
        array (
        ),
        'as' => 'generated::c0btwNF1hzdMqQm2',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::dZWXYhTCQTHfKAgT' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'send-message',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
        ),
        'uses' => 'C:32:"Opis\\Closure\\SerializableClosure":412:{@xa73ZW9ImzxYprEkU9ZHtXD17R6zrhVrWISB7rtrF0U=.a:5:{s:3:"use";a:0:{}s:8:"function";s:199:"function (\\Illuminate\\Http\\Request $request) {
    \\broadcast(new \\App\\Events\\NewMessage($request->message));
//    broadcast(new \\App\\Events\\NewMessage(\'Hello Websockets\'));
    return \'done\';
}";s:5:"scope";s:37:"Illuminate\\Routing\\RouteFileRegistrar";s:4:"this";N;s:4:"self";s:32:"000000004b9f2264000000006a0c7e6a";}}',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'generated::dZWXYhTCQTHfKAgT',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::vWzCMhfIvnDUGDRs' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => '{mainPath?}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
        ),
        'uses' => 'App\\Http\\Controllers\\CMSController@returnViewWithLang',
        'controller' => 'App\\Http\\Controllers\\CMSController@returnViewWithLang',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'generated::vWzCMhfIvnDUGDRs',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::PoRJgCN4dhpCQUNJ' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => '{mainPath?}/{higherLevel?}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
        ),
        'uses' => 'App\\Http\\Controllers\\CMSController@returnViewWithLang',
        'controller' => 'App\\Http\\Controllers\\CMSController@returnViewWithLang',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'generated::PoRJgCN4dhpCQUNJ',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::V5yUOsI3K4JTuAki' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => '{mainPath?}/{higherLevel?}/{higherLevel2?}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
        ),
        'uses' => 'App\\Http\\Controllers\\CMSController@returnViewWithLang',
        'controller' => 'App\\Http\\Controllers\\CMSController@returnViewWithLang',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'generated::V5yUOsI3K4JTuAki',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::j6KAW1CSxO18wU9y' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => '{mainPath?}/{higherLevel?}/{higherLevel2?}/{higherLevel3?}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
        ),
        'uses' => 'App\\Http\\Controllers\\CMSController@returnViewWithLang',
        'controller' => 'App\\Http\\Controllers\\CMSController@returnViewWithLang',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'generated::j6KAW1CSxO18wU9y',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::dSyPMGuf9MxOunAt' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => '{mainPath?}/{higherLevel?}/{higherLevel2?}/{higherLevel3?}/{higherLevel4?}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
        ),
        'uses' => 'App\\Http\\Controllers\\CMSController@returnViewWithLang',
        'controller' => 'App\\Http\\Controllers\\CMSController@returnViewWithLang',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'generated::dSyPMGuf9MxOunAt',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
  ),
)
);
