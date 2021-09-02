<?php

session_start();

require_once 'class.user.php';
$session = new USER();

//if user is not active(not loggedin) this page will help 'home.php' and 'profile.php' to redirect to login page
//put this file within secured pages that users can't access without login)

if(!$session->is_loggedin())
{
  //session no set redirects to login pages
  $session->redirect('denied.php')
}

 ?>
