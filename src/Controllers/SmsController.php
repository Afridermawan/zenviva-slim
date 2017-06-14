<?php

namespace App\Controllers;

use \Psr\Http\Message\ServerRequestInterface as Request;
use \Psr\Http\Message\ResponseInterface as Response;


class SmsController extends BaseController
{
	public function send(Request $request, Response $response)
	{
		$send = $this->sms->to($request->getParam('to'))
						  ->message($request->getParam('message'))
						  ->send();

		var_dump($send);
	}
}