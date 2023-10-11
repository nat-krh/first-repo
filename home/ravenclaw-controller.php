<?php
if(!isset($_SESSION))session_start();
if($_SESSION) {
    require 'ravenclaw.php';
}
else {
    require 'no.html';
}
