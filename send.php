<?php
require_once("vendor/autoload.php");

use Minishlink\WebPush\Subscription;
use Minishlink\WebPush\WebPush;


$auth = [
    'VAPID' => [
        'subject' => 'vietduybaka.github.io/projectkhkt', // can be a mailto: or your website address
        'publicKey' => 'BLWKe9pIQa2mHgqh2eI4b_a-XgZFbFyvLqRA3-eUtKehdXtRGuqjIVKfkBmhm8ZtcMF_q0oEPKBVjZyqF9KzTdg', // (recommended) uncompressed public key P-256 encoded in Base64-URL
        'privateKey' => 'M0GqiHBWLHB12TwSnoVVTxFqo621Z_J1hHSNr7KbcGs', // (recommended) in fact the secret multiplier of the private key encoded in Base64-URL 
    ],
];

$webPush = new WebPush($auth);

$report = $webPush->sendOneNotification(
    Subscription::create(json_decode('{"endpoint":"https://fcm.googleapis.com/fcm/send/etpeiDkoZbU:APA91bE2MvyZ9JSC5ybex3lBoTwQdjG6Op8iOKQO4wxTtP8-qvVd9BdEP7BPSZ_EdqAiwAjFMNrnEqoTHVOFCsgAz0vKjPoccmFxuTND80I544cVofMeGC7zPffKAcbJb_zYwu5ZZF5E","expirationTime":null,"keys":{"p256dh":"BKeAk5bSex924EHVLsvnWfpfHGqty331umbESSNo2crn1omgkpYGoyGY3NMugcgaPyH52LVr5EA6YZ7gtCT271g","auth":"hJYw2vUCYaswdpgMr3NQhg"}}',true))
    , '{"title":"Hi from php" , "body":"php is amazing!" , "url":"./?message=123"}', ['TTL' => 5000]);

    print_r($report);