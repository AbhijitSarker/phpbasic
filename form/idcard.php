<?php 
    if(isset($_POST['generate_btn'])){
        $name = $_POST['std_name'];
        $phone = $_POST['std_phone'];
        $email = $_POST['std_email'];
        $course = $_POST['std_course'];
        $batch = $_POST['std_batch'];
    }

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Identity  Card | PHP</title>
</head>

<body class="bg-grid-line"></body>
    <div class="card">
        <header>
            <h1>DarunIT SID</h1>
        </header>
        
        <article>
        <h2> <?php if(isset($name))  echo $name; ?> </h2>
            <div class="area">
                <h3>Course: <?php if(isset($course))echo $course;?></h3>
                <ul>
                    <li>Phone: <?php if(isset($phone))echo $phone;?></li>
                    <li>Email: <?php if(isset($email))echo $email;?></li>
                    <li>Batch No: <?php if(isset($batch))echo $batch;?></li>
                </ul>
            </div>
        </article>
    </div>
    
</body>
</html>