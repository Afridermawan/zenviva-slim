<?php

use Slim\Container;

$container = $app->getContainer();

$container['sms'] = function (Container $container) {
	$setting = $container->get('settings')['sms-gateway'];

	$sms = new \App\Extensions\Sms\SmsHandler($setting['user_key'], $setting['pass_key']);

	return $sms;
};