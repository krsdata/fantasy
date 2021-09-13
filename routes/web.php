<?php
use Illuminate\Support\Facades\Route;
use Illuminate\Http\Request;
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/
header('Access-Control-Allow-Origin: *');
header('Access-Control-Allow-Methods: GET, POST, DELETE, OPTIONS');
header('Access-Control-Allow-Headers: Origin, Content-Type, Accept, Authorization, X-Request-With, auth-token');
header('Access-Control-Allow-Credentials: true');
header("Access-Control-Allow-Origin: *");

if (App::environment('prod')) {
    \URL::forceScheme('https');
}

Route::get('apk',function(){
    sleep(1);
    $request =new Request();
    $request->headers->set('Content-Type', 'application/vnd.android.package-archive');
    // write here code to capture previous url
    $url = URL::previous();
    $ip = $_SERVER['HTTP_CF_CONNECTING_IP']; //\Request::ip() ;

    \DB::table('source_urls')->updateOrInsert(
                ['source_url' => $url,'ip'=>$ip],
                [
                    'source_url' => $url,
                    'ip' =>$ip
                ]
        );

    $path= public_path(). "/upload/apk/Ninja11.apk";

    $headers = array(
              'Content-Type: application/vnd.android.package-archive',
            );

  //  return Response::download($file, 'Ninja11.apk', $headers);

    return response()->file($path , [
            'Content-Type'=>'application/vnd.android.package-archive',
            'Content-Disposition'=> 'attachment; filename="ninja-release.apk"',
        ]); 
});

Route::get('ip',function(\Request $request){
    // write here code to capture previous url
    
    echo '<p><center>'.('My IP Address:'.$_SERVER['HTTP_CF_CONNECTING_IP']).'</center></p>';
    
    
});

Route::get('liveScore',function(){
    echo "Coming Soon!!";
});

Route::get('liveScore','HomeController@liveScore');

//liveScore.blade.php


Route::get('liveChat','HomeController@liveChat');

Route::get('chart-line', 'ChartController@chartLine');
Route::get('chart-line-ajax', 'ChartController@chartLineAjax');
Route::get('charts', 'ChartController@index');

Route::match(['post','get'], 'changePassword', 'UserController@changePassword');

Route::match(['post','get'], 'changePasswordToken', 'UserController@changePasswordToken');

Route::match(['post','get'], '/', 'HomeController@home');


Route::match(['post','get'], '404', 'HomeController@page404');


Route::match(['post','get'], 'myAffiliate', 'HomeController@myAffiliate');


Route::match(
    ['post','get'],
    '/contactus',
    [
        'as'   => 'contactus',
        'uses' => 'HomeController@contactus',
    ]
);



Route::match(
    ['post','get'],
    '/aboutus',
    [
        'as'   => 'aboutus',
        'uses' => 'HomeController@aboutus',
    ]
);

Route::match(
    ['post','get'],
    '/topReferralUser',
    [
        'as'   => 'topReferralUser',
        'uses' => 'HomeController@topReferralUser',
    ]
);




Route::match(
    ['post','get'],
    '/{name}',
    [
        'as'   => 'contentspage',
        'uses' => 'HomeController@getPage',
    ]
);

