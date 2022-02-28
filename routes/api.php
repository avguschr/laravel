<?php


use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

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

Route::prefix('users')->group(function() {
    Route::get('', function(Request $request) {
        return User.all();
    });
    
    Route::get('{user}', function(User $user) {
        return $user;
    });

    Route::post('', function (Request $request) {
        // $user = new User();
        // $user.email = $request.email;
        // $user.phone = $request.phone;
        // $user->save();
        // return $user;
        return User::create($request->all());
    });

    Route::patch('{user}', function(Request $request, User $uiser) {
        $user->update($request->all());
        return $user;
    });

    Route::delete('{user}', function(User $user) {
        $user->delete();
        return $user;
    });
});