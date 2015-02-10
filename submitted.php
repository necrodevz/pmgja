<?php
require 'Autoloader.php';
require '_includes/header.php';

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
    </fieldset>
<fieldset name=\"section4\">
    <legend>Section 4: Supporting Documents</legend>
    <div class=\"form-group\">
        <label class=\"control-label\" for=\"payslips\">Click the buttons to upload payslips. Maximum of 3 files. </label>
        <input name=\"payslip1\" type=\"file\">
        <input name=\"payslip2\" type=\"file\">
        <input name=\"payslip3\" type=\"file\">
    </div>
    <div class=\"form-group\">
        <label class=\"control-label\" for=\"id\">Click the buttons to upload Scanned Identification.</label>
        <input name=\"identification\" type=\"file\">
    </div>
    <div class=\"form-group\">
        <label class=\"control-label\" for=\"id\">Click the buttons to upload Scanned TRN. </label>
        <input name=\"scanned_trn\" type=\"file\">
    </div>
</fieldset>
<input type=\"submit\" value=\"Submit and Upload\" class=\"btn btn-danger\">
    </form>
</div>";

include '_includes/footer.php';