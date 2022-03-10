<?php

namespace App\Modules;

use Vonage\Client\Credentials\Basic;
use Vonage\Client;
use Vonage\SMS\Message\SMS as VonageSMS;

class SMS {
 
    public function sendSMS($message)
    {
        $basic  = new Basic("662c007c", "Qwi9CjOv8BzuTJZM");
        $client = new Client($basic);  
        
        $response = $client->sms()->send(
            new VonageSMS("639679538451", BRAND_NAME, $message."\n")
        );
        
        $message = $response->current();
        
        if ($message->getStatus() == 0) {
        } else {
            echo "The message failed with status: " . $message->getStatus() . "\n";
        }
        
    }
    public function sendSMS1($message)
    {
        $basic  = new \Vonage\Client\Credentials\Basic("cacfeaa4", "T5Ms2ROeEluAGsvm");
$client = new \Vonage\Client($basic);
        
$response = $client->sms()->send(
    new \Vonage\SMS\Message\SMS("639351971686", BRAND_NAME, $message."\n\n")
);

$message = $response->current();

if ($message->getStatus() == 0) {
} else {
    echo "The message failed with status: " . $message->getStatus() . "\n";
}
        
    }
}