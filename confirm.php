<?php

require 'Autoloader.php';
require '_includes/header_alt.php';

$mpdf =new mPDF();

ob_start();

$fname = $_POST['fname'];
$lname = $_POST['lname'];
$email = $_POST['email'];
$trn = $_POST['trn'];
$land_num = $_POST['land_num'];
$lime_num = $_POST['lime_num'];
$digi_num = $_POST['digi_num'];
$date = $_POST['date'];
$add_line_one = $_POST['add_line_one'];
$add_line_two = $_POST['add_line_two'];
$add_parish = $_POST['parish'];
$add_post_code = $_POST['postal_code'];
$comp = $_POST['company'];
$comp_occ = $_POST['occupation'];
$comp_add_one = $_POST['company_add_one'];
$comp_add_two = $_POST['company_add_two'];
$comp_parish = $_POST['company_parish'];
$comp_post_code = null;
$amount = $_POST['amount'];
$bank = $_POST['bank'];
$bank_branch = $_POST['bank_branch'];
$bank_acc = $_POST['bank_acc'];


$user = new User($fname, $lname, $email);
$user->save();

$user_id = DB::getInstance()->lastInsertId();
//print_r($user_id);

$user_details = new User_Detail($trn, $add_line_one, $add_line_two, $add_parish, $add_post_code, $comp_occ, $comp_add_one, $comp_add_two, $comp_parish, $comp_post_code);
$user_details->save();
$loan = new Loan($amount);
$loan->save();

$submit = 'confirm.php';
echo '<h2>Please review your data and attach any supporting documents below,</h2>';
echo 
"<div class=\"container-fluid\">
    <form action=\"$submit\" method=\"post\" enctype=\"multipart/form-data\">
    <fieldset id=\"section1\">
        <legend>Section 1: Personal Information</legend>
        <div class=\"row-fluid\">
            <div class=\"form-group\">
                <div class=\"col-md-6\">
                    <input value=\"".$fname."\" class=\"form-control\" required><br>
                </div>
                <div class=\"col-md-6\">
                    <input value=\"".$lname."\" placeholder=\"Surname\" class=\"form-control\"required><br>
                </div>
            </div>
        </div>
        <div class=\"form-group\">
            <div class=\"row-fluid\">
                <div class=\"col-md-6\">
                    <input value=\"".$email."\" placeholder=\"Email Address\" type=\"email\" class=\"form-control\" required><br>
                </div>
                <div class=\"col-md-6\">
                    <input value=\"".$land_num."\" placeholder=\"Landline\" class=\"tel form-control\"><br>
                </div>
            </div>
        </div>
        <div class=\"form-group\">
            <div class=\"row-fluid\">
                <div class=\"col-md-6\">
                    <input value=\"".$lime_num."\" placeholder=\"Lime Number\" class=\"tel form-control\"><br>
                </div>
                <div class=\"col-md-6\">
                    <input value=\"".$digi_num."\" placeholder=\"Digicel Number\" class=\"tel form-control\"><br>
                </div>
            </div>
        </div>
        <div class=\"form-group\">
            <div class=\"row-fluid\">
                <div class=\"col-md-6\">
                    <input value=\"".$trn."\" placeholder=\"TRN Number\" class=\"trn form-control\" required><br>
                </div>
                <div class=\"col-md-6\">
                    <input value=\"".$date."\" id=\"tDate\" class=\"form-control\" readonly=\"readonly\"><br>
                </div>
            </div>
        </div>
        <div class=\"form-group\">
            <div class=\"row-fluid\">
                <div class=\"col-md-12\">
                    <input value=\"".$add_line_one."\" placeholder=\"Address Line 1\" class=\"form-control\"><br>
                </div>
            </div>
        </div>
        <div class=\"form-group\">
            <div class=\"row-fluid\">
                <div class=\"col-md-12\">
                    <input value=\"".$add_line_two."\" placeholder=\"Address Line 2\" class=\"form-control\"><br>
                </div>
            </div>
        </div>
        <div class=\"form-group\">
            <div class=\"row-fluid\">
                <div class=\"col-md-6\">
                    <input value=\"".$parish."\" placeholder=\"Parish\" class=\"form-control\"><br>
                </div>
                <div class=\"col-md-6\">
        <input value=\"".$postal_code."\" placeholder=\"Postal Code\" class=\"form-control\"><br>
                </div>
            </div>
        </div>
    </fieldset>";

 echo "
    <fieldset id=\"section2\">
        <legend>Section 2: Employment</legend>
        <div class=\"form-group\">
        <input value=\"".$occupation."\" placeholder=\"Occupation\" class=\"form-control\"><br>
        <input value=\"".$company."\" placeholder=\"Company Name\" class=\"form-control\"><br>
        <input value=\"".$comp_add_one."\" placeholder=\"Company Address 1\" class=\"form-control\"><br>
        <input value=\"".$comp_add_two."\" placeholder=\"Company Address 2\"class=\"form-control\"><br>
        <input value=\"".$company_parish."\" placeholder=\"Parish\" class=\"form-control\"><br>
        </div>
    </fieldset>";
 
echo "
    <fieldset id=\"section3\">
        <legend>Section 3: Loan Information</legend>
        <div class=\"row\">
        <div class=\"col-md-3\">
        <div class=\"form-group\">
        <label for=\"amount\">How much would you like to borrow?</label>
         <div class=\"input-group\">
            <div class=\"input-group-addon\">$</div>
                <input value=\"".$amount."\" class=\"cur\" placeholder=\"$$$\" class=\"form-control\">
        </div>
        </div>
        </div>
        </div>
        <div class=\"row\">
        <div class=\"col-md-6\">
        <div class=\"control-group\">
            <label class=\"control-label\" for=\"bank\">Please select your Bank</label>
                <div class=\"controls\">
                    <input value=\"".$bank."\" class=\"form-control\">
            </div>
        </div>
        </div>
        </div>
        <div class=\"control-group\">
            <label class=\"control-label\" for=\"bank_branch\">Please type the branch where your account was opened.</label>
                <div class=\"controls\">
                    <input id=\"bank_branch\" value=\"".$bank_branch."\" placeholder=\"Bank Branch\" class=\"form-control\" type=\"text\">
                </div>
            </div>

            <div class=\"control-group\">
                <label class=\"control-label\" for=\"bank_acc\">Enter your account number</label>
                    <div class=\"controls\">
                        <input id=\"bank_acc\" value=\"".$bank_acc."\" placeholder=\"Account Number\" class=\"form-control\" type=\"text\"><br>
                    </div>
            </div>
    </fieldset>";

$html = ob_get_contents();
ob_end_clean();

$mpdf->WriteHTML(utf8_encode($html)); 

$content_ = $mpdf->Output('', 'S');

$content = chunk_split(base64_encode($content_));
$mailto = 'feedback.pmg@gmail.com, necrodevz@gmail.com, '.$email; //Mailto here
$from_name = $fname.' '.$lname; //Name of sender mail
$from_mail = $email; //Mailfrom here
$subject = 'PMG Loan Application-'.$fname.' '.$lname;
$message = 'Application submitted via online form';
$filename = "application-".$fname.'_'.$lname.'-'.date("d-m-Y_H-i",time()); //Your Filename with local date and time

//Get other files uploaded from form
//Payslips
if($_FILES['payslip1']) {
    $tmpNameP1 = $_FILES['payslip1']['tmp_name'];
    $fileTypeP1 = $_FILES['payslip1']['type'];
    $fileNameP1 = $_FILES['payslip1']['name'];
    
    if (file($tmpNameP1)) {
        /* Reading file ('rb' = read binary)Â  */
        $file = fopen($tmpNameP1,'rb');
        $dataP1 = fread($file,filesize($tmpNameP1));
        fclose($file);
    }
}

if($_FILES['payslip2']) {
    $tmpNameP2 = $_FILES['payslip2']['tmp_name'];
    $fileTypeP2 = $_FILES['payslip2']['type'];
    $fileNameP2 = $_FILES['payslip2']['name'];
    
    if (file($tmpNameP2)) {
        /* Reading file ('rb' = read binary)Â  */
        $file = fopen($tmpNameP2,'rb');
        $dataP2 = fread($file,filesize($tmpNameP2));
        fclose($file);
    }
}

if($_FILES['payslip3']) {
    $tmpNameP3 = $_FILES['payslip3']['tmp_name'];
    $fileTypeP3 = $_FILES['payslip3']['type'];
    $fileNameP3 = $_FILES['payslip3']['name'];
    
    if (file($tmpNameP3)) {
        /* Reading file ('rb' = read binary)Â  */
        $file = fopen($tmpNameP3,'rb');
        $dataP3 = fread($file,filesize($tmpNameP3));
        fclose($file);
    }
}

if($_FILES['scanned_trn']) {
    $tmpNameT = $_FILES['scanned_trn']['tmp_name'];
    $fileTypeT = $_FILES['scanned_trn']['type'];
    $fileNameT = $_FILES['scanned_trn']['name'];
    
    if (file($tmpNameT)) {
        /* Reading file ('rb' = read binary)Â  */
        $file = fopen($tmpNameT,'rb');
        $dataT = fread($file,filesize($tmpNameT));
        fclose($file);
    }
}

//Headers of PDF and e-mail
$boundary = "XYZ-" . date("dmYis") . "-ZYX";

$header = "--$boundary\r\n";
$header .= "Content-Transfer-Encoding: 8bits\r\n";
$header .= "Content-Type: text/html; charset=ISO-8859-1\r\n\r\n"; // or utf-8
$header .= "$message\r\n";
$header .= "--$boundary\r\n";
$header .= "Content-Type: application/pdf; name=\"".$filename."\"\r\n";
$header .= "Content-Disposition: attachment; filename=\"".$filename."\"\r\n";
$header .= "Content-Transfer-Encoding: base64\r\n\r\n";
$header .= "$content\r\n";
$header .= "--$boundary--\r\n";

if($dataP1) {
    $dataP1 = chunk_split(base64_encode($dataP1));
    $header .= "Content-Type: {$fileTypeP1}; name=\"".$fileNameP1."\"\r\n";
    $header .= "Content-Disposition: attachment; filename=\"".$fileNameP1."\"\r\n";
    $header .= "Content-Transfer-Encoding: base64\r\n\r\n";
    $header .= "$dataP1\r\n";
    $header .= "--$boundary--\r\n";
}

if($dataP2) {
    $dataP2 = chunk_split(base64_encode($dataP2));
    $header .= "Content-Type: {$fileTypeP2}; name=\"".$fileNameP2."\"\r\n";
    $header .= "Content-Disposition: attachment; filename=\"".$fileNameP2."\"\r\n";
    $header .= "Content-Transfer-Encoding: base64\r\n\r\n";
    $header .= "$dataP2\r\n";
    $header .= "--$boundary--\r\n";
}

if($dataP3) {
    $dataP3 = chunk_split(base64_encode($dataP3));
    $header .= "Content-Type: {$fileTypeP3}; name=\"".$fileNameP3."\"\r\n";
    $header .= "Content-Disposition: attachment; filename=\"".$fileNameP3."\"\r\n";
    $header .= "Content-Transfer-Encoding: base64\r\n\r\n";
    $header .= "$dataP3\r\n";
    $header .= "--$boundary--\r\n";
}

if($dataT) {
    $dataT = chunk_split(base64_encode($dataT));
    $header .= "Content-Type: {$fileTypeT}; name=\"".$fileNameT."\"\r\n";
    $header .= "Content-Disposition: attachment; filename=\"".$fileNameT."\"\r\n";
    $header .= "Content-Transfer-Encoding: base64\r\n\r\n";
    $header .= "$dataT\r\n";
    $header .= "--$boundary--\r\n";
}


$header2 = "MIME-Version: 1.0\r\n";
$header2 .= "From: ".$from_name." \r\n";
$header2 .= "Return-Path: $from_mail\r\n";
$header2 .= "Content-type: multipart/mixed; boundary=\"$boundary\"\r\n";
$header2 .= "$boundary\r\n";

$flgchk = mail($mailto,$subject,$header,$header2, "-r".$from_mail);
 
if($flgchk){
   echo "A email has been sent to: $to";
}else{
    echo "Error in Email sending";
}

include '_includes/footer.php';