<?php

namespace App;

class Error
{
    public function getErrorMessage($errCode){
    	switch($errCode){
    		case 23000: $errMessage="User Already Exists";break;
    	}
    	return $errMessage;
    }
}
