<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Siteuser;
use App\Error;
use Illuminate\Support\Facades\DB;



class SiteusersController extends Controller
{
	public function verifyuser(Request $request){
		try{
			$record = DB::table('siteusers')->select('password','id')->where('email',$request->email)->where('role',$request->role)->first();
			if(password_verify($request->password,$record->password))
			{
				$data = [
		    		'statuscode' => 1,
	    			'status' =>  'User Verified',
	    			'id' => $record->id
	    		];
			}
			else
			{
				$data = [
		    		'statuscode' => 0,
	    			'status' =>  'Wrong Credentials',
	    			'id' => 0
	    		];	
			}
		}
		catch(\Exception $e){
    		$error = new Error;
    		//$errorMsg = $error->getErrorMessage($e->getCode());
       		$data = [
       		'statuscode' => 0,
    		'status' =>  'Check your credentials',
    		'id' => 0,
    		];
    	
    	}
		return response()->json($data);
	}

    public function registernewuser(Request $request){
    	try{
       		$id=time();
	    	$hash=password_hash($request->password,PASSWORD_BCRYPT);

	    	$siteuser = new Siteuser;

	    	$siteuser->id = $id;
	    	$siteuser->firstname = $request->firstname;
	    	$siteuser->lastname = $request->lastname;
	    	$siteuser->email = $request->email;
	    	$siteuser->role = $request->role;
	    	$siteuser->password = $hash;

	    	$siteuser->save();
	    	$data = [
	    		'statuscode' => 1,
    			'status' =>  'User Added',
    			'id' => $id
    		];
    
    	}
    	catch(\Exception $e){	
    		$error = new Error;
    		$errorMsg = $error->getErrorMessage($e->getCode());

       		$data = [
       		'statuscode' => 0,
    		'status' =>  $errorMsg,
    		'id' => 0,
    		];
    	
    	}
    	return response()->json($data);
    }
}
