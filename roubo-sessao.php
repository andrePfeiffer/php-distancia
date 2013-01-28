<?php
if(!isset($_SESSION)) { session_start(); }
if(!isset($_SESSION['REMOTE_ADDR'])){
     $_SESSION['REMOTE_ADDR'] = $_SERVER['REMOTE_ADDR'];
}elseif($_SESSION['REMOTE_ADDR'] != $_SERVER['REMOTE_ADDR']){
     session_destroy();
     unset($_SESSION);
}
