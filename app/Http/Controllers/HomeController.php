<?php

namespace App\Http\Controllers;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Http\Controllers\Api\BaseController as BaseController;
use App\User;
use Illuminate\Support\Facades\Auth; 
use App\Models\Notification;
use Illuminate\Contracts\Encryption\DecryptException;
use Config,Mail,View,Redirect,Validator,Response; 
use Crypt,okie,Hash,Lang,JWTAuth,Input,Closure,URL; 
use App\Helpers\Helper as Helper;
use Illuminate\Support\Facades\Storage;
use App\Models\Competition;
use App\Models\TeamA;
use App\Models\TeamB;
use App\Models\Toss;
use App\Models\Venue;
use App\Models\Matches;
use App\Models\ReferralCode;
use Session;


class HomeController extends BaseController
{
   
    public function __construct(Request $request) {
        $pages = \DB::table('pages')->get(['title','slug']);
        View::share('static_page',$pages);

        $settings = \DB::table('settings')
                    ->pluck('field_value','field_key')
                    ->toArray();
       
        View::share('settings',(object)$settings);

    }  

    public function page404(Request $request){
         return view('404');
    }
    public function home(Request $request){
         return view('home');
    }

    public function liveChat(Request $request){
        return view('liveChat');
    }

    public function aboutus(Request $request){

        return view('aboutus');
    }

    public function topReferralUser(Request $request){
       // dd($request->all());
        $user = \DB::table('referral_codes')->get()->groupBy('refer_by');
        
        foreach ($user as $key => $value) {
            $refer[$key] = $value->count();
        }
        arsort($refer);
        $html = '<table border="1" cellpadding="5" cellspacing="0" bgcolor="#FCFCFC"><tr><td>Sno.</td><td>Top 50 Referral user</td><td>Total</td></tr>';
        
        try{

            $i=1;
        foreach ($refer as $key => $value) {
            if($i==51){
                break;
            }
            $topRef = \DB::table('users')->where('id',$key)->first();
           if(!empty($topRef)){
                
                $html .= "<tr><td>".$i++."</td><td>".$topRef->name."</td><td>".$value."</td></tr>";
           }
        }
        echo $html.'</table>';
        }catch(\Excecption $e){
            dd($e);
        }
    }
    

    public function contactus(Request $request){

        if($request->method()=="POST"){

        $request->merge(['request_id'=>time()]);
        $request->merge(['title'=> 'web_request']);
        $request->merge(['name' => $request->name]);
        $request->merge(['mobile'=> $request->mobile]);

        $request->merge(['subject'=> 'Enquiry']);
        
        $table_cname = \Schema::getColumnListing('contacts');
        $except = ['id','created_at','updated_at'];
        $data = [];
        foreach ($table_cname as $key => $value) {
           
           if(in_array($value, $except )){
                continue;
           } 
            if($request->get($value)){
                $data[$value] = $request->get($value);
           }
        }
        \DB::table('contacts')->insert($data);
        Session::put('status','Your Request successfully submitted!');
        
        }

        return view('contactus');
    }
    public function getPage(Request $request, $name=null){
        
        $content = \DB::table('pages')
                ->where('slug',$name)
                ->first();
        if( $content==null){
            return view('404',compact('content'));
        }
        $remove_header = false;
        if($request->get('request')=='mobile'){

            $remove_header = true;

        }


        return view('page',compact('content','remove_header'));
    }
}
