<?php

namespace App\Controllers;

use App\Models\categoryModel;

class Contact extends BaseController
{
	public function index()
	{
		session_start();
		$categoryModel = new categoryModel();
		$categories = $categoryModel->getAllcategory();
		$data['categories'] = $categories;
		return view('client/contact-us', $data);
	}
	function sendMail() {
		$email = \Config\Services::email();
		$mail_config['smtp_host'] = 'smtp.gmail.com';
		$mail_config['smtp_port'] = '587';
		$mail_config['smtp_user'] = 'user@example.com';
		$mail_config['_smtp_auth'] = TRUE;
		$mail_config['smtp_pass'] = 'password';
		$mail_config['smtp_crypto'] = 'tls';
		$mail_config['protocol'] = 'smtp';
		$mail_config['mailtype'] = 'text';
		$mail_config['send_multipart'] = FALSE;
		// $mail_config['charset'] = 'utf-8';
		$mail_config['wordwrap'] = TRUE;
		$mail_config['newline'] = "\r\n";
		$email->initialize($mail_config);

        $from = $this->request->getVar('email');
        $name = $this->request->getVar('name');
        $phone = $this->request->getVar('phone');
        $message = $this->request->getVar('message');
        
        
		$mess = "Dear TheWayShop,"."My name is: ".$name .". ".$message.". Contact me: ".$phone;
        $email->setFrom($from);
        $email->setTo('thewayshop.contact@gmail.com');
        
        // $email->setSubject($subject);
        $email->setMessage($mess);
 
        if ($email->send()){
            $msg = 'Email successfully sent';
        } 
		else {
            $data = $email->printDebugger(['headers']);
            print_r($data);
			var_dump($data);
			die();
    		$msg ='Email send failed';
        }
		return redirect()->to( base_url('Contact') )->with('msg', $msg);
    }
}
