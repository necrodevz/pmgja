<?php
echo "<!doctype html>
<link rel=\"icon\" type=\"image/png\" href=\"favicon.ico\" />

<meta charset=\"utf-8\">
<meta name=\"viewport\" content=\"width=device-width, initial-scale=1\">

<link href=\"boilerplate.css\" rel=\"stylesheet\" type=\"text/css\">
<link href=\"main.css\" rel=\"stylesheet\" type=\"text/css\">
<link href='http://fonts.googleapis.com/css?family=Open+Sans:400,300,600' rel='stylesheet' type='text/css'>
<!-- 
To learn more about the conditional comments around the html tags at the top of the file:
paulirish.com/2008/conditional-stylesheets-vs-css-hacks-answer-neither/

Do the following if you're using your customized build of modernizr (http://www.modernizr.com/):
* insert the link to your js here
* remove the link below to the html5shiv
* add the \"no-js\" class to the html tags at the top
* you can also remove the link to respond.min.js if you included the MQ Polyfill in your modernizr build 
-->
<!--[if lt IE 9]>
<script src=\"//html5shiv.googlecode.com/svn/trunk/html5.js\"></script>
<![endif]-->
<script type=\"text/javascript\" src=\"http://code.jquery.com/jquery-latest.min.js\"></script>
<script type=\"text/javascript\" src=\"_includes/jquery.mask.min.js\"></script>
<script type=\"text/javascript\" src=\"_includes/autoEnterCurrentDate.js\"></script>
<script src=\"respond.min.js\"></script>
</head>
<html>";
//include '_includes/header.php';
include '_includes/loan_details.php';
echo "</html>";
//include '_includes/footer.php';
if(isset($_POST)) {
    $post = var_dump($_POST);
    echo "<pre>";
    echo $post;
    echo "</pre>";
};