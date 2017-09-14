<?php
require_once('databse.php');
?>


<?php
$username = $_POST['username'];
$password = $_POST['password'];
$name = $_POST['name'];
$address = $_POST['address'];
$country = $_POST['country'];
$zcode = $_POST['zcode'];
$email = $_POST['email'];
$gender = $_POST['sex'];
$lang = $_POST['lang'];
$about = $_POST['about'];

$query = "INSERT INTO user (username,password,name,address,country,zipcode,email,gender,language,about) VALUES ('{$username}',
'{$password}','{$name}','{$address}','{$country}','{$zcode}','{$email}','{$gender}','{$lang}','{$about}')";

$result=mysqli_query($conn,$query);

if ($result) {
    echo "1 Record Added";
}else{
    echo "database query failed";
}


?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Insert Query</title>
</head>
<body>

</body>
</html>

<?php mysqli_close($conn); ?>

