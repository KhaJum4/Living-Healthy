<?php
/*$nameErr = $genderErr = $emailErr = $websiteErr = $commentErr = "";
$name = $gender = $email = $website = $comment = "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    //Name required when a user doesn't fill in the name form, same applies for others below here, this is for php stuff
    if (empty($_POST["name"])) {
        $nameErr = "Name is required";
    } else {
        $name = test_input($_POST["name"]);
    }
    
    if (empty($_POST["gender"])) {
        $genderErr = "Gender is required";
    } else {
        $gender = test_input($_POST["gender"]);
    }
    
    if (empty($_POST["email"])) {
        $emailErr = "Email is required"; 
    } else {
        $email = test_input($_POST["email"]);
    }

    if (empty($_POST["website"])) {
        $websiteErr = "Website is required"; 
    } else {
        $website = test_input($_POST["website"]);
    }

    if (empty($_POST["comment"])) {
        $commentErr = "Comment is required"; 
    } else {
        $comment = test_input($_POST["comment"]);
    }
    
}*/

function test_input($data) {
    $data = trim($data);
    $data = stripslashes($data);
    $data = htmlspecialchars($data);
    return $data;
}

session_start();

$name = $gender = $email = "";
$nameErr = $gender = $email = "";

if($_SERVER['REQUEST_METHOD'] == "POST"){

    $valid = true;

    if(empty($_POST['name'])){
        $valid=false;
        header('location:form.php?');

    } else { 
        $name = test_input($_POST['name']);
        if (!preg_match("/^[a-zA-Z-']*$/", $name)) {
            $nameErr = "Only letters and white space allowed";
            header('location:form.php?');
        } else {
            header('location:thankyouform.php?');
        }
    }

    if(empty($_POST['gender'])){
        $valid=false;
        header('location:form.php?error2=Please+select+a+gender');
        
    }

    if(empty($_POST['email'])){
        $valid=false;
        header('location:form.php?');
        
    } else {
        $email = test_input($_POST['email']);
        if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
            $emailErr = "Invalid email format";
        }
    }

    if($valid){
        $_SESSION['name'] = $_POST['name'];
        $_SESSION['email'] = $_POST['email'];
         header('location:thankyouform.php');
         exit();
        }


}
echo "Thank you, ", $_SESSION['name'], ", for filling out the form! It has been submitted successfully. Have a good day :-)"; 

/*

if (!preg_match("/^[a-zA-Z-' ]*$/", $name)) {
    $nameErr = "Only letters and white space allowed";
}

// to check if e-mail address is well-formed
if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
    $emailErr = "Invalid email format";
}

$_SESSION['gender'] = $POST['gender'];

*/

?> 



