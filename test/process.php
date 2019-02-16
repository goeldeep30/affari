<?php

if(isset($_POST['action'])) {

switch($_POST['action']) {
  case 'subscribe' :
  $email_address = $_POST['address'];

  //do some db stuff...
  //if you echo out something, it will be available in the data-argument of the
  //ajax-post-callback-function and can be displayed on the html-site
  break;
}

}

?>
