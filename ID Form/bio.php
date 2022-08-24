<?php 
if(isset($_POST['btn'])){
    $name = $_POST['name'];
    $age = $_POST['age'];
    $class = $_POST['class'];
    $email = $_POST['email'];
    $password = $_POST['password'];
}
?>

<h3>Name: <?php if(isset($name)) echo $name?></h3>
<h3>Age: <?php if(isset($age)) echo $age?></h3>
<h3>Class: <?php if(isset($class)) echo $class?></h3>
<h3>Email: <?php if(isset($email)) echo $email?></h3>
<h3>Password: <?php if(isset($password)) echo $password?></h3>
