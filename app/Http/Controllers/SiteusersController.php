<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Siteuser;
use App\Error;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Mail;
use App\Mail\SendMail;

class SiteusersController extends Controller
{
	public function verifyuser(Request $request){
		try{
			$record = DB::table('siteusers')->select('password','id','firstname','lastname','role')->where('email',$request->email)->where('role',$request->role)->first(); 
			if(password_verify($request->password,$record->password))
			{
				$data = [
		    		'statuscode' => 1,
	    			'status' =>  'User Verified',
	    			'id' => $record->id,
	    			'firstname' => $record->firstname,
	    			'lastname' => $record->lastname,
	    			'role' => $record->role
	    		];
	    		if($request->wm=='w'){
    				return redirect('dashboard')->with( ['data' => $data] );
    			}
    			else if($request->wm=='m'){
					return response()->json($data);
    			}
			}
			else
			{
				$data = [
		    		'statuscode' => 0,
	    			'status' =>  'Wrong Credentials',
	    			'id' => 0
	    		];	
	    		if($request->wm=='w'){
    				return redirect('logout')->with( ['data' => $data] );
    			}
    			else if($request->wm=='m'){
					return response()->json($data);
    			}
			}
		}
		catch(\Exception $e){
    		$error = new Error;
    		//$errorMsg = $error->getErrorMessage($e->getCode());
       		$data = [
       		'statuscode' => 0,
    		'status' =>  $e->getMessage()." ".$request->password,
    		'id' => 0,
    		];
    		if($request->wm=='w'){
    			return redirect('logout')->with( ['data' => $data] );
    		}
    		else if($request->wm=='m'){
				return response()->json($data);
    		}
    	}
    	
	}

	public function randomPassword(){
		return "ABCD1234";
	}

	public function forgotpassword(Request $request){
		try{
			$record = DB::table('siteusers')->select('firstname','email','role')->where('email',$request->email)->where('role',$request->role)->first();
			if($record)
			{
				$maildata = array(
					'firstname' => $record->firstname,
					'email' => $record->email,
					'newpassword' => $this->randomPassword()
				);


				try{
    				Mail::to($record->email)->send(new SendMail($maildata));
    				$data = [
		       		'statuscode' => 1,
		    		'status' =>  'Check your mail'
		    		];
				}
				catch(Exception $e){
    				$data = [
		       		'statuscode' => 0,
		    		'status' =>  $e->getMessage()
		    		];
				}

			}
			else
			{
				$data = [
		       		'statuscode' => 0,
		    		'status' =>  $request->email.' not found'
		    	];				
			}
		}
		catch(\Exception $e){
    		$error = new Error;

    		$data = [
       			'statuscode' => 3,
    			'status' =>  $e->getMessage()
    		];
    	
    	}
		return response()->json($data);
	}

    public function registernewuser(Request $request){
    	try{
    		$this->validate($request,[
    			'firstname' => 'required',
    			'email' => 'required|email',
    			'role' => 'required',
    			'password' => 'required'
    		]);

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
