<?php

require 'api.php';

// Routes

$app->get('/[{name}]', function ($request, $response, $args) {
  // Sample log message
  $this->logger->info("Slim-Skeleton '/' route");

  // Render index view
  return $this->renderer->render($response, 'index.phtml', $args);
});


$app->post('/auth', function () {
  // Sample log message
  $this->logger->info("Slim-Skeleton post'/' route");

  //http://docs.slimframework.com/request/variables/
  $name  = trim($_POST['name']);

  return json_encode( array( 'flag'=>1, 'msg'=> $name, 'data'=>''));

  // Render index view
  //return $this->renderer->render($response, 'index0.phtml', $name);
});


/***
register
***/
$app->post('/register', function () {
  try {

    $email  = trim($_POST['email']);
    $password = trim($_POST['password']);

    $result = person_register( $email, $password );
    return json_encode($result);

  } catch (Exception $e) {
    $this->logger->info( "/register" . $e);
  }
});

/***
url
***/
$app->post('/url/add', function () {
  try {

    $url  =  trim($_POST['url']);
    $tags = empty($_POST['tags']) ? '' :   trim($_POST['tags']);

    $result = url_add( $url, $tags );
    return json_encode($result);

  } catch (Exception $e) {
    $this->logger->info( "/url/add" . $e);
  }
});
