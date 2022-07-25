<?php 

$basic  = new \Vonage\Client\Credentials\Basic("3f9c0fe6", "hmg2V7QrPaN9cUbQ");
$client = new \Vonage\Client($basic);

$response = $client->sms()->send(
    new \Vonage\SMS\Message\SMS("917895848081", 'BRAND_NAME', 'A text message sent using the Nexmo SMS API')
);

$message = $response->current();

if ($message->getStatus() == 0) {
    echo "The message was sent successfully\n";
} else {
    echo "The message failed with status: " . $message->getStatus() . "\n";
}