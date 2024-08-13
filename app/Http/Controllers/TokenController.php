<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Carbon;

class TokenController extends Controller
{
    public $secretKey = "sudipto884";
    public function createToken($request,$time)
    {

       $signature = hash_hmac('sha256',$request->number.$time,$this->secretKey,true);
       return urlencode(base64_encode($signature));
    }
    public function verifyToken(Request $request)
    {
        $number = $request->number??'';
        $token  = $request->token??'';
        $time = $request->time ??'';
        $formattedTime =  Carbon::createFromFormat("Y-m-d H:i:s", $time);
        $difference = $formattedTime->diffInMinutes(Carbon::now()->toDateTimeString());
        if ($difference > 0 )
        {
            return json_encode([
               'code'=>403,
               'message'=>'Token Expired'
            ]);
        }

    }
}
