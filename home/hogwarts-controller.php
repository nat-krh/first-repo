<?php
if(!isset($_SESSION))session_start();
if($_SESSION) {
    require 'hogwarts.php';
}
else {
    require 'no.html';
}
