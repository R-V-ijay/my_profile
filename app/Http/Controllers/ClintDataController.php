<?php

namespace App\Http\Controllers;

use App\Models\Clint_data;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ClintDataController extends Controller
{
    public function create_clint(Request $request){
        $first_name = isset($request->first_name) ? $request->first_name : null;
        $last_name = isset($request->last_name) ? $request->last_name : null;
        $email = isset($request->email) ? $request->email : null;
        $phone = isset($request->phone) ? $request->phone : null;
        $message = isset($request->message) ? $request->message : null;

        $is_email_exists = Clint_data::select('email')->where('email',$email)->exists();
        $is_phone_exists = Clint_data::select('email')->where('phone_number',$phone)->exists();
        if(!$is_email_exists && !$is_phone_exists){
            $clint_detas = new Clint_data;
            $clint_detas::create(['first_name'=>$first_name,'last_name'=>$last_name, 'email'=>$email,'phone_number'=>$phone,'message'=>$message]);
        }

        return response()->json(['is_email_exists'=>$is_email_exists,'is_phone_exists'=>$is_phone_exists],200);
    }
}
