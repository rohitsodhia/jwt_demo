<?php

require('vendor/autoload.php');

use Lcobucci\JWT\Parser;
use Lcobucci\JWT\Signer\Hmac\Sha256;

echo "\n";
echo "\n";
$token = (new Parser())->parse($argv[1]);
foreach ($token->getHeaders() as $header => $value) {
	echo "$header => $value\n";
}
echo "\n";
foreach ($token->getClaims() as $claim => $value) {
	echo "$claim => $value\n";
}
echo "\n";
$signer = new Sha256();
//echo "VERIFIED: " . ($token->verify($signer, 'Rq4L4wifpIDr9SgiqMRSKgxcbjZhCdGl') ? "YES" : "NO") . "\n";
echo "VERIFIED: " . ($token->verify($signer, '5G045KoHVfgcvamVPAilVfjAyMvJaKkM') ? "YES" : "NO") . "\n";
echo "\n";
echo "\n";
