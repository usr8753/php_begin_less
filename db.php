<?php 
session_start(); /*session_destroy();*/
require "libs/rb.php";


// connection
R::setup( 'mysql:host=127.0.0.1;dbname=ul',
        'root', '' );

// freeze automatic create
R::freeze(false);

// check if have connection
if (!R::testConnection()) {
	exit("No connection to db...");
}