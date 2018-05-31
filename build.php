<?php

require('vendor/autoload.php');

use Lcobucci\JWT\Signer\Hmac\Sha256;
use Lcobucci\JWT\Builder;

$signer = new Sha256();
$now = time();
$token = (new Builder())
	->setIssuer('NY_PHP')
	->setIssuedAt($now)
	->setExpiration($now + 60 * 60 * 24 * 7)
	->set('id', 123)
	->set('email', $argv[2])
	->set('name', $argv[1])
	->sign($signer, 'Rq4L4wifpIDr9SgiqMRSKgxcbjZhCdGl')
	->getToken();

echo "\n";
echo "\n";
echo $token . "\n";
echo "\n";
echo "\n";
