<?php
$con = mysqli_connect("localhost","root","","school"); 
if (!$con){
    die ("Error: ". mysql_connect_error());
}

else{
if(isset($_POST["Submit"])){
    if (preg_match("/^[a-zA-Z]+$/",$_POST["Name"])) {
        ;
    }
    else{
        echo "Name Must Be only Letter";
    }
}

if(isset($_POST["Submit"])){
    if (preg_match("/^[0-9]{10-30}$/",$_POST["Age"])) {
        ;
    }
    elseif(strlen($_POST["Age"]) > 2){
        echo "Age Must Be only two number";
    }
    elseif($_POST["Age"] > 30 and $_POST["Age"] < 10){
        echo "Age only contain numbers between 10 and 30";
    }
}

if(isset($_POST["Submit"])){
    if (preg_match("/^[a-zA-Z\d\._]+@[a-zA-Z\d\._]+\.[a-zA-Z\d\.]{2,}+$/",$_POST["Email"])) {
        ;
    }
    else {
        echo "Invalid email";
    }
    $name = $_POST["Name"];
    $age  = $_POST["Age"];
    $gender = $_POST["Gender"];
    $email = $_POST ["Email"];
    $query = "INSERT INTO students(name,age,gender,email) VALUES('$name','$age','$gender','$email')" ;
        $result = mysqli_query($con,$query);
        if ($result){
            echo "";
        }

        else{
            echo"Error";
        }
    
}
}



?>
<form method = "POST" action = "<?php $_SERVER["PHP_SELF"] ?>">
<input type = "text" name = "Name" placeholder = "enter your username" required><br>
<input type = "number" name = "Age" placeholder = "enter your age" required ><br>
<p>Choose Your Gender</p>
<input type = "radio" name = "Gender" value = "Male">Male
<input type = "radio" name = "Gender" value = "Female">Female
<br>
<input type = "text" name = "Email" placeholder = "enter your email" required ><br>
<input type = "submit" value = "submit" name = "Submit" >
</from>

