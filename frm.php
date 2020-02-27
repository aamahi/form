<?php 
$upperCasee= preg_match("@[A-Z]@",$_POST['password']);
$lowerCasee= preg_match("@[a-z]@",$_POST['password']);
$numberCasee= preg_match("@[0-9]@",$_POST['password']);
// $strongCasee= preg_match("@[!,#,$,%,^,&,*]@",$_POST['password']);

if(empty($_POST['name'])){
    $nameError = "Name is required";
    header("Location:index.php?nameError={$nameError}");

}elseif(empty($_POST['email'])){
    $name = $_POST['name'];
    $emailError = "Email address Required";
    header("Location:index.php?emailError={$emailError}&&name={$name}");
}elseif(!filter_var($_POST['email'],FILTER_VALIDATE_EMAIL)){
    $name = $_POST['name'];
    $email = $_POST['email'];
    $invalidemailError = "Email address Invalid";
    header("Location:index.php?invalidemailError={$invalidemailError}&&name={$name}&&email={$email}");
}
elseif(empty($_POST['homedist'])){
    $name = $_POST['name'];
    $email = $_POST['email'];
    $homedistError = "Home Dist is Required";
    header("Location:index.php?homedistError={$homedistError}&&name={$name}&&email={$email}");
}
elseif(empty($_POST['phone'])){
    $name = $_POST['name'];
    $email = $_POST['email'];
    $homedist = $_POST['homedist'];
    $phoneError = "Phone number is Required";
    header("Location:index.php?phoneError={$phoneError}&&name={$name}&&email={$email}&&homedist={$homedist}");
}elseif(!filter_var($_POST['phone'],FILTER_VALIDATE_INT)){
        $name = $_POST['name'];
        $email = $_POST['email'];
        $homedist = $_POST['homedist'];
        $phone = $_POST['phone'];
        $invalidPhoneError = "Phone number is Invalid";
        header("Location:index.php?invalidPhoneError={$invalidPhoneError}&&name={$name}&&email={$email}&&homedist={$homedist}&&phone={$phone}");
}elseif(!$upperCasee || !$lowerCasee || !$numberCasee && strlen($_POST['password'])<=8){
    $name = $_POST['name'];
    $email = $_POST['email'];
    $homedist = $_POST['homedist'];
    $phone = $_POST['phone'];
    $passwordError = "Please Provide a strong Password(a-z, A-Z,0-9) and getter then 8 charectar";
    header("Location:index.php?passwordError={$passwordError}&&name={$name}&&email={$email}&&homedist={$homedist}&&phone={$phone}");
}elseif(isset($_POST['name'])&& isset($_POST['email'])&& isset($_POST['homedist'])&& isset($_POST['phone'])&& isset($_POST['password'])){
    $name = $_POST['name'];
    $email = $_POST['email'];
    $homedist = $_POST['homedist'];
    $phone = $_POST['phone'];
    $password = $_POST['password'];
    $success = "Thank you for your all valid information";
    header("Location:index.php?success={$success}&&name={$name}&&email={$email}&&homedist={$homedist}&&phone={$phone}&&password={$password}");
}else{
    $name = $_POST['name'];
    $email = $_POST['email'];
    $homedist = $_POST['homedist'];
    $phone = $_POST['phone'];
    $password = $_POST['password'];
    $somethingWentWorng = "Some Thing went to be worng";
    header("Location:index.php?somethingWentWorng={$somethingWentWorng}&&name={$name}&&email={$email}&&homedist={$homedist}&&phone={$phone}&&password={$password}");

}
