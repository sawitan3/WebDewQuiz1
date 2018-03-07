<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Member;

class teamController extends Controller
{
    //
	protected $member;

	public function __construct(Member $member){
		$this->member = $member;
	}

    public function add(Request $request){

    	$newMember = [
    		"username" => $request->username,
    		"email" => $request->email,
    		"password" => md5($request->password)
    	];
        //return 'HAHA';
    	$newMember = $this->member->create($newMember);

    	if($newMember != null){
    		var_dump($newMember);
    	}
    	else{
    		echo "FAILED";
    	}
    }
}
