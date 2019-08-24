<?php
//amíg nincs setelve a submit addig ne pofázzon
$NameError = "";
$EmailError = "";
$GenderError = "";
$WebsiteError = "";

//submit gomb "eseménykezelő"
if (isset($_POST['Submit'])) {
    // name error
    if (empty($_POST['Name'])) {
        $NameError = "Name is Required";
    } else {
        $name = TestUserInput($_POST['Name']);
        if (!preg_match("/^[A-Za-z. ]*$/", $name)) {
            $NameError = "Only letters and white spaces are allowed";
        }

    }

    // email error
    if (empty($_POST['Email'])) {
        $EmailError = "Email is Required";
    } else {
        $email = TestUserInput($_POST['Email']);
        if (!preg_match("/[a-zA-Z0-9._-]{3,}@[a-zA-Z0-9._-]{3,}[.]{1}[a-zA-Z0-9._-]{2,}/", $email)) {
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
        if (!preg_match("/(https:|ftp:)\/\/+[a-zA-Z0-9.\-_\/?\$=&\#\~`!]+\.[a-zA-Z0-9.\-_\/?\$=&\#\~`!]*/", $website)) {
            $WebsiteError = "Wrong website address format.";
        }
    }
}

if (isset($_POST['Submit'])) {
    if (!empty($_POST['Name']) && !empty($_POST['Email']) && !empty($_POST['Gender']) && !empty($_POST['Website'])) {
        //+ az összes többi regex, meg kicsit szebben function-ba tolva mert ez így gány
        if (preg_match("/^[A-Za-z. ]*$/", $name) == true) {
            echo "<h2>Your submit inromation</h2>" . "<br>";
            echo "Name: {$_POST['Name']}" . "<br>";
            echo "Email: {$_POST['Email']}" . "<br>";
            echo "Gender: {$_POST['Gender']}" . "<br>";
            echo "Website: {$_POST['Website']}" . "<br>";
            echo "Comments: {$_POST['Comment']}" . "<br>";
            sendmail($_POST['Email']);
        }
    } else {
        echo "<span class='error'>Please complete and correct your form again!</span>";
    }
}

//return the arg data
function TestUserInput($Data)
{
    return $Data;
}

//mail sending
function sendmail($mailAddress){
    $to = $mailAddress;
    mail($to, $subject, $body, $from);
    echo "Email has been send.";
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <title>Form validation</title>
</head>
<style>
.input{
    border:  1px solid dashed;
	background-color: rgb(221,216,212);
	width: 600px;
	padding: .5em;
	font-size: 1.0em;
}

.error{
    color: red;
}

</style>
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
            <textarea class="input" Name="Comment" rows="5" cols="25"></textarea>
            <br>
            <br>
            <input type="Submit" Name="Submit" value="Submit Your Information">
        </fieldset>
    </form>
</body>

</html>