<?php

define("SITE",[
 "name" => "Auth em MVC com PHP",
 "desc" => "Aprenda a construir uma aplicação de autenticação em MVC com PHP do Jeito Certo neste curso gratuito em youtube.com/upinsider",
 "domain" => "localauth.com",
 "locale" => "pt_BR",
 "root" => "http://localhost:3000" 
]);


// Site MINIFY
if($_SERVER["SERVER_NAME"]=="localhost"){
  require __DIR__."/Minify.php";
}

// Data Connection

define("DATA_LAYER_CONFIG",[
  "driver" => "mysql",
  "host" => "localhost",
  "port" => "3306",
  "dbname" => "auth",
  "username" => "root",
  "passwd" => "testeDeCamelo99_",
  "options" => [
      PDO::MYSQL_ATTR_INIT_COMMAND => "SET NAMES utf8",
      PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
      PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_OBJ,
      PDO::ATTR_CASE => PDO::CASE_NATURAL
  ]
]);

// Social Config

define("SOCIAL",[
  "facebook_page" => "robsonvleite2",
  "facebook_author" =>"robsonvleite",
  "facebook_appId" =>"2193729837289",
  "twitter_creator" =>"@robsonvleite",
  "twitter_site" => "@robsonvaleite"
]);


// Mail connect

define("MAIL", []);

// Social login: FACEBOOK

define("FACEBOOK_LOGIN", []);

// Social Login: Google

define("GOOGLE_LOGIN",[]);