<?php

include '_includes/header.php';
include '_includes/loan_details.php';
if(isset($_POST)) {
    $post = var_dump($_POST);
    echo "<pre>";
    echo $post;
    echo "</pre>";
};
include '_includes/footer.php';
