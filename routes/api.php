<?php

use Illuminate\Http\Request;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});
Route::post('user/register', function (Request $request) {

    $name     = $request->input('name');
    $email    = $request->input('email');
    $password = $request->input('password');   

    // save new user
    $user = \App\User::create([
      'name'     => $name,
      'email'    => $email,
      'password' => bcrypt($password)
    ]);


   // create oauth client but  OauthClient have some wrong.
   //  $oauth_client = \App\OauthClient::create([
     //    'user_id'                => $user->id,
     //    'id'                     => $email,
     //    'name'                   => $name,
      //   'secret'                 => base64_encode(hash_hmac('sha256',$password, 'secret', true)),
     //    'password_client'        => 1,
      //   'personal_access_client' => 0,
      //   'redirect'               => '',
      //   'revoked'                => 0
   // ]);


    return [
        'message' => 'user successfully created.'
    ];
});

 

Route::post('oauth/access_token', function() {
     return Response::json(Authorizer::issueAccessToken());
});
