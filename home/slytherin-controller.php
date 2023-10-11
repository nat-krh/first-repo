<?php
if(!isset($_SESSION))session_start();
if($_SESSION) {
    require 'slytherin.php';
}
else {
    require 'no.html';
}

