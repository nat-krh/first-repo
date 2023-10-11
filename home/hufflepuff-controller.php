<?php
if(!isset($_SESSION))session_start();
if($_SESSION) {
    require 'hufflepuff.php';
}
else {
    require 'no.html';
}
