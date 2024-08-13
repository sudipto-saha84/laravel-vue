<?php

namespace App\Http\Controllers;

use Carbon\Carbon;
use Illuminate\Http\Request;

class OtpController extends Controller
{
   public function sendOtp(Request $request)
   {
       $number = $request->number ??'';

       return json_encode([
           'code'=> 200,
           'message'=>'otp send Successfully'
       ]);

   }
   public function verifyOtp(Request $request)
   {
       $number = $request->number ?? '';
       $otp = $request->otp ?? '';
       if ($otp === '0000')
       {
           $time = \Illuminate\Support\Carbon::now()->toDateTimeString();
           $tokenController = new TokenController();
           $token = $tokenController->createToken($request,$time);

           return json_encode([
               'code'=> 200,
               'message'=> 'otp matched',
               'time'=>$time,
               'token'=>$token
           ]);
       }else
       {


           return json_encode([
               'code'=> 500,
               'message'=> 'otp not matched',
           ]);
       }

   }
}
