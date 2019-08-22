<?php
$NameError = "";
$EmailError = "";
$GenderError = "";
$WebsiteError = "";

//amíg nincs setelve a submit addig ne pofázzon
if (isset($_POST['Submit'])) {

    // name error
    if (empty($_POST['Name'])) {
        $NameError = "Name is Required";
    } else {
        $name = TestUserInput($_POST['Name']);
        if(!preg_match("/^[A-Za-z. ]*$/", $name)){
            $NameError = "Only letters and white spaces are allowed";
        }
    }

    // email error
    if (empty($_POST['Email'])) {
        $EmailError = "Email is Required";
    } else {
        $email = TestUserInput($_POST['Email']);
        if(!preg_match("/[a-zA-Z0-9._-]{3,}@[a-zA-Z0-9._-]{3,}[.]{1}[a-zA-Z0-9._-]{2,}/", $email)){
            $EmailError = "Invalid e-mail format";
        }
    }

    // gender error
    if (empty($_POST['Gender'])) {
        $GenderError = "Gender is Required";
    } else {
        $gender = TestUserInput($_POST['Gender']);
    }

    // website error
    if (empty($_POST['Website'])) {
        $WebsiteError = "Website is Required";
    } else {
        $website = TestUserInput($_POST['Website']);
        if(!preg_match("/(https:|ftp:)\/\/+[a-zA-Z0-9.\-_\/?\$=&\#\~`!]+\.[a-zA-Z0-9.\-_\/?\$=&\#\~`!]*/", $website)){
            $WebsiteError = "Wrong website address format.";
        }
    }
}

//return the arg data
function TestUserInput($Data)
{
    return $Data;
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <title>Form validation</title>
</head>

<body>
    <h2>Form Validation with PHP.</h2>

    <form action="form-validation.php" method="post">
        <legend>* Please Fill Out the following Fields.</legend>
        <fieldset>
            Name:<br>
            <input class="input" type="text" Name="Name" value="">
            <span class="Error">*<?php echo $NameError; ?></span><br>
            E-mail:<br>
            <input class="input" type="text" Name="Email" value="">
            <span class="Error">*<?php echo $EmailError; ?></span><br>
            Gender:<br>
            <input class="radio" type="radio" Name="Gender" value="Female">Female
            <input class="radio" type="radio" Name="Gender" value="Male">Male
            <span class="Error">*<?php echo $GenderError; ?></span><br>
            Website:<br>
            <input class="input" type="text" Name="Website" value="">
            <span class="Error">*<?php echo $WebsiteError; ?></span><br>
            Comment:<br>
            <textarea Name="Comment" rows="5" cols="25"></textarea>
            <br>
            <br>
            <input type="Submit" Name="Submit" value="Submit Your Information">
        </fieldset>
    </form>
</body>

</html>