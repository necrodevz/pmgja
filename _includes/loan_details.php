<?php

$submit = $_SERVER['PHP_SELF'];
$tengu = var_dump($submit);
if(!isset($_POST['trn'])) {
echo
"<form action=\"$submit\" id=\"section1\" method=\"post\" autocomplete >
    
            <h5>Section 1: Personal Information</h5>
        
        <input name=\"fname\" placeholder=\"First Name\" required><br>
        <input name=\"lname\" placeholder=\"Surname\" required><br>
        <input name=\"email\" placeholder=\"Email Address\" type=\"email\" required><br>
        <input name=\"land_num\" placeholder=\"Landline\" class=\"tel\"><br>
        <input name=\"lime_num\" placeholder=\"Lime Number\" class=\"tel\"><br>
        <input name=\"digi_num\" placeholder=\"Digicel Number\" class=\"tel\"><br>
        <input name=\"trn\" placeholder=\"TRN Number\" class=\"trn\" required><br>
        <input name=\"date\" id=\"tDate\" readonly=\"readonly\"><br>
        <input name=\"add_line_one\" placeholder=\"Address Line 1\"><br>
        <input name=\"add_line_two\" placeholder=\"Address Line 2\"><br>
        <input name=\"parish\" placeholder=\"Parish\"><br>
        <input name\"postal_code\" placeholder=\"Postal Code\"><br>
    <input type=\"submit\" value=\"Next Section\"><br>
</form>
        <pre>";

} elseif ((!$_POST['employed']=FALSE&&!isset($_POST['company']))|(!isset($_POST['employed']))) {
 echo "
<form action=\"$submit\" id=\"section2\" method=\"post\" autocomplete>
        <h5>Section 2: Employment</h5>";
    if(!isset($_POST['employed'])) {
     echo "
    <label for=\"employed\">Are you currently employed?</label><br />
    <input name=\"employed\" type=\"radio\" value=\"Yes\" checked>Yes<br>
    <input name=\"employed\" type=\"radio\" value=\"No\">No
    <input type=\"submit\" value=\"Continue\">";
    }  elseif($_POST['employed']= TRUE) {
        echo "
        <input name=\"occupation\" placeholder=\"Occupation\"><br>
        <input name=\"company\" placeholder=\"Company Name\"><br>
        <input name=\"company_add_one\" placeholder=\"Company Address 1\"><br>
        <input name=\"company_add_two\" placeholder=\"Company Address 2\"><br>
        <input name=\"company_parish\" placeholder=\"Parish\"><br>
        <input type=\"submit\" value=\"Next Section\">";
    };
echo "   
</form>";
}  elseif (!isset($_POST['amount'])) {
    echo "<h5>Section 3: Loan Information</h5>
    
    <form action=\"$submit\" id=\"section3\" method=\"post\" autocomplete>
        <label for=\"amount\">How much would you like to borrow?</label><input name=\"amount\" class=\"cur\" placeholder=\"$$$\">
        
    </form>";
        
        
};

echo $tengu; ?>
<?php echo        "</pre>
 <script type=\"text/javascript\">
    $(document).ready(function() {
       $('.tel').mask('(000)000-0000'); 
       $('.trn').mask('000-000-000');
       $('.cur').mask('#,##0.00', {reverse:true});
    });
</script>
</html>";