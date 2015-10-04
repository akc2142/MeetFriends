<?php
// Install the library via PEAR or download the .zip file to your project folder.
// This line loads the library
require('./twilio/Services/Twilio.php');

$sid = "AC5cd7d838c3fa6b832a6304e9e7d118fc"; // Your Account SID from www.twilio.com/user/account
$token = "361a0a5c7e5bd0f30bc2c78eff4ca569"; // Your Auth Token from www.twilio.com/user/account

$client = new Services_Twilio($sid, $token);
$message = $client->account->messages->sendMessage(
  '9568252682', // Twilio number
  '5626745644', // Text this number
  "Are you ready to flock? Dinner will be served at 7pm. Your host will welcome you at 620 Avenue of the Americas, 7th Floor. Feel free to bring a wine or dessert to share with the group!"
);

print $message->sid;
