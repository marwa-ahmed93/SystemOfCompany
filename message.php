<?php

require __DIR__ . '/vendor/autoload.php';



// Change the following with your app details:

// Create your own pusher account @ https://app.pusher.com



$options = array(

   'cluster' => 'mt1',

   'encrypted' => true

 );

 $pusher = new Pusher\Pusher(
    '18d1bbcac2857e0ba35c',
    '3348db318823b3c76dce',
    '1052336',
  
    $options

  
 
  );

  // Check the receive message

if(isset($_POST['message']) && !empty($_POST['message'])) {

    $data = $_POST['message'];
  
  // Return the received message
  
  if($pusher->trigger('test_channel', 'my_event', $data)) {
  
  echo 'success';
  
  } else {
  
  echo 'error';
  
  }
  
  }