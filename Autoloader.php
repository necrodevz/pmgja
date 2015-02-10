<?php

//require '_includes/fpdf/fpdf.php';

spl_autoload_register(function ($class) {
    include '_includes/classes/' . $class . '.php';
    include 'mpdf/mpdf.php';
    include 'PHPMailer/PHPMailerAutoload.php';
});