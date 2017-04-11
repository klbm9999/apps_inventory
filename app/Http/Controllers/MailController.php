<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MailController extends Controller
{
    public function upload(\Illuminate\Http\Request $request, \Illuminate\Mail\Mailer $mailer) {
    	
    	if (isset($_FILES)) {
    		$file = $_FILES['attachment'];
    		$file_name = $file['name'];
    		$file_tmp_name = $file['tmp_name'];
    		$file_type = $file['type'];
    		$file_error = $file['error'];
    		$file_size = $file['size'];

    		$file_ext = explode('.',$file_name);
    		$file_ext = strtolower(end($file_ext));

    		$allowed = array('txt','pdf','docx','doc','zip','ppt','pptx','odt','jpg','jpeg','png');

    		if(in_array($file_ext, $allowed)) {
    			if ($file_error===0) {
    				if ($file_size<=2048000000) {
    					$file_name_new = uniqid('',true).'.'.$file_ext;
    					$file_dest = 'uploads/'.$file_name_new;
    					if (move_uploaded_file($file_tmp_name, $file_dest)) {
    						echo "Successfully Uploaded\n";
    					}
    				}
    			}
    		}
    		// var_dump($_FILES);
    	}

    	$mailer
    		->to('helpappsinventory@gmail.com')
    		->send(new \App\Mail\mymail($request->input('c1'),
    									$request->input('c2'),
    									$request->input('r1'),
    									$request->input('name'),
    									$request->input('country'),
    									$request->input('email'),
    									$request->input('phone'),
    									$request->input('company'),
    									$request->input('industry'),
    									$file_dest,
    									$request->input('desc')));
	    return view('inquiry_success');
    }
}
