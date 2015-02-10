<?php

require '_includes/fpdf/fpdf.php';

// Or, using an anonymous function as of PHP 5.3.0
spl_autoload_register(function ($class) {
    include '_includes/classes/' . $class . '.php';
    include 'mpdf/mpdf,php';
});