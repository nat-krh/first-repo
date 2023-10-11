<?php
if(!isset($_SESSION))session_start();
if($_SESSION) {
    require 'gryffindor.php';
}
else {
    require 'no.html';
}
