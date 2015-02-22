<?php

$submit = 'submitted.php';
echo "<div class=\"container-fluid\">";
echo "<form action=\"$submit\" method=\"post\" enctype=\"multipart/form-data\" autocomplete>
    <fieldset id=\"section1\" style=\"width:100%; margin-top: 180px;\">
        <legend>Section 1: Personal Information</legend>
        <div class=\"row-fluid\">
            <div class=\"form-group\">
                <div class=\"col-md-6\">
                    <input name=\"fname\" placeholder=\"First Name\" class=\"form-control\" required><br>
                </div>
                <div class=\"col-md-6\">
                    <input name=\"lname\" placeholder=\"Surname\" class=\"form-control\"required><br>
                </div>
            </div>
        </div>
        <div class=\"form-group\">
            <div class=\"row-fluid\">
                <div class=\"col-md-6\">
                    <input name=\"email\" placeholder=\"Email Address\" type=\"email\" class=\"form-control\" required><br>
                </div>
                <div class=\"col-md-6\">
                    <input name=\"land_num\" placeholder=\"Landline\" class=\"tel form-control\"><br>
                </div>
            </div>
        </div>
        <div class=\"form-group\">
            <div class=\"row-fluid\">
                <div class=\"col-md-6\">
                    <input name=\"lime_num\" placeholder=\"Lime Number\" class=\"tel form-control\"><br>
                </div>
                <div class=\"col-md-6\">
                    <input name=\"digi_num\" placeholder=\"Digicel Number\" class=\"tel form-control\"><br>
                </div>
            </div>
        </div>
        <div class=\"form-group\">
            <div class=\"row-fluid\">
                <div class=\"col-md-6\">
                    <input name=\"trn\" placeholder=\"TRN Number\" class=\"trn form-control\" required><br>
                </div>
                <div class=\"col-md-6\">
                    <input name=\"date\" id=\"tDate\" class=\"form-control\" readonly=\"readonly\"><br>
                </div>
            </div>
        </div>
        <div class=\"form-group\">
            <div class=\"row-fluid\">
                <div class=\"col-md-12\">
                    <input name=\"add_line_one\" placeholder=\"Address Line 1\" class=\"form-control\" required><br>
                </div>
            </div>
        </div>
        <div class=\"form-group\">
            <div class=\"row-fluid\">
                <div class=\"col-md-12\">
                    <input name=\"add_line_two\" placeholder=\"Address Line 2\" class=\"form-control\"><br>
                </div>
            </div>
        </div>
        <div class=\"form-group\">
            <div class=\"row-fluid\">
                <div class=\"col-md-6\">
                    <input name=\"parish\" placeholder=\"Parish\" class=\"form-control\" required><br>
                </div>
                <div class=\"col-md-6\">
        <input name=\"postal_code\" placeholder=\"Postal Code\" class=\"form-control\"><br>
                </div>
            </div>
        </div>
    </fieldset>";

 echo "
    <fieldset id=\"section2\">
        <legend>Section 2: Employment</legend>
        <div class=\"form-group\">
        <input name=\"occupation\" placeholder=\"Occupation\" class=\"form-control\" required><br>
        <input name=\"company\" placeholder=\"Company Name\" class=\"form-control\" required><br>
        <input name=\"company_add_one\" placeholder=\"Company Address 1\" class=\"form-control\" required><br>
        <input name=\"company_add_two\" placeholder=\"Company Address 2\"class=\"form-control\"><br>
        <input name=\"company_parish\" placeholder=\"Parish\" class=\"form-control\" required><br>
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
                <input name=\"amount\" class=\"cur\" placeholder=\"$$$\" class=\"form-control\">
        </div>
        </div>
        </div>
        </div>
        <div class=\"row\">
        <div class=\"col-md-6\">
        <div class=\"control-group\">
            <label class=\"control-label\" for=\"bank\">Please select your Bank</label>
                <div class=\"controls\">
                    <select name=\"bank\" class=\"form-control\">
                        <option value=\"\"></option>
                        <option value=\"bns\">Bank of Nova Scotia</option>
                        <option value=\"ncb\">National Commercial Bank</option>
                        <option value=\"fgb\">First Global Bank</option>
                    </select>
            </div>
        </div>
        </div>
        </div>
        <div class=\"control-group\">
            <label class=\"control-label\" for=\"bank_branch\">Please type the branch where your account was opened.</label>
                <div class=\"controls\">
                    <input id=\"bank_branch\" name=\"bank_branch\" placeholder=\"Bank Branch\" class=\"form-control\" type=\"text\">
                    <p class=\"help-block\">The location of the branch where your account was opened. </p>
                </div>
            </div>

            <div class=\"control-group\">
                <label class=\"control-label\" for=\"bank_acc\">Enter your account number</label>
                    <div class=\"controls\">
                        <input id=\"bank_acc\" name=\"bank_acc\" placeholder=\"Account Number\" class=\"form-control\" type=\"text\"><br>
                    </div>
            </div>
    </fieldset>";

echo "
        <input type=\"submit\" value=\"Submit\" class=\"btn btn-danger\">
</form>
</div>
<br>";

echo        "
 <script type=\"text/javascript\">
    $(document).ready(function() {
       $('.tel').mask('(000)000-0000'); 
       $('.trn').mask('000-000-000');
       $('.cur').mask('#,##0.00', {reverse:true});
    });
</script>";