<?php

//require '_includes/fpdf/fpdf.php';

spl_autoload_register(function ($class) {
    include_once '_includes/classes/' . $class . '.php';
    //include_once 'mpdf/'.$class.'.php';
    include_once 'PHPMailer/'.$class.'.php';
});