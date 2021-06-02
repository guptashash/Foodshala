<?php
require_once "config.php";

$username = $password = $confirm_password = "";
$username_err = $password_err = $confirm_password_err = "";

if ($_SERVER['REQUEST_METHOD'] == "POST"){

    
    if(empty(trim($_POST["username"]))){
        $username_err = "Username cannot be blank";
    }
    else{
        $sql = "SELECT id FROM users WHERE username = ?";
        $stmt = mysqli_prepare($conn, $sql);
        if($stmt)
        {
            mysqli_stmt_bind_param($stmt, "s", $param_username);

            
            $param_username = trim($_POST['username']);

            
            if(mysqli_stmt_execute($stmt)){
                mysqli_stmt_store_result($stmt);
                if(mysqli_stmt_num_rows($stmt) == 1)
                {
                    $username_err = "This username is already taken"; 
                }
                else{
                    $username = trim($_POST['username']);
                }
            }
            else{
                echo "Something went wrong";
            }
        }
    }

    mysqli_stmt_close($stmt);



if(empty(trim($_POST['password']))){
    $password_err = "Password cannot be blank";
}
elseif(strlen(trim($_POST['password'])) < 5){
    $password_err = "Password cannot be less than 5 characters";
}
else{
    $password = trim($_POST['password']);
}


if(trim($_POST['password']) !=  trim($_POST['confirm_password'])){
    $password_err = "Passwords should match";
}



if(empty($username_err) && empty($password_err) && empty($confirm_password_err))
{
    $sql = "INSERT INTO users (username, password) VALUES (?, ?)";
    $stmt = mysqli_prepare($conn, $sql);
    if ($stmt)
    {
        mysqli_stmt_bind_param($stmt, "ss", $param_username, $param_password);

        
        $param_username = $username;
        $param_password = password_hash($password, PASSWORD_DEFAULT);

        
        if (mysqli_stmt_execute($stmt))
        {
            header("location: login.php");
        }
        else{
            echo "Something went wrong... cannot redirect!";
        }
    }
    mysqli_stmt_close($stmt);
}
mysqli_close($conn);
}

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Document</title>

    <style>
        body {
            background-image: url('ml6.jpg');
            background-position: center;
            background-size: cover;
        }

        .io input {
            text-align: center;
            display: block;
            padding: 3px;
            width: 250px;
            border: 4px solid black;
            margin: 5px auto;
            border-radius: 30px;
            font-size: 16px;




        }

        .io {
            text-align: center;
            font-size: 20px;

            color: white;
        }

        .s {

            margin-top: 40px;
            color: black;
            border: 2px solid grey;
            border-radius: 15px;
            font-size: 25px;
        }

        .s:hover {
            background-color: #ffc107;
            font-weight: bold;
        }

        #fp
        {
            margin-top: 10px;
            color: black;
            border: 2px solid grey;
            border-radius: 10px;
            font-size: 20px;

        }
    </style>
</head>

<body>

    <form action="">

    <div class="io">

        <label for="fname">Restaurant Name</label><br>
        <input type="text" id="fname" name="fname" placeholder="Enter restaurant name"><br>

        <label for="username">Enter Username</label><br>
        <input type="text" name="username" placeholder="Enter Username"><br>

       <label for="exampleInputPassword1">Create unique Password</label><br>
       <input type="password" name="password" class="form-control" id="exampleInputPassword1" placeholder="Create Unique Password"><br>

      
       
        <label for="phone">Restaurant contact number</label><br>
        <input type="tel" id="phone" name="phone" placeholder="Enter restaurant contact number"><br>



        <label for="email ">Enter restaurant email </label><br>
        <input type="email " id="email " name="email " placeholder="Enter restaurant email "><br>

        <label for="text">Restaurant fssai license no. </label><br>
        <input type="text " id="text " name="text " placeholder="Enter restaurant fssai license no.  "><br>

        <label for="fp">Restaurant Type</label><br>
        <select id="fp" name="fp">
            <option value="veg">Veg</option>
            <option value="non-veg">Non-veg</option>
            <option value="both">Both

            </option><br>

        </select>
        <br>

        <button class="s">Submit</button>
    </form>

        
       


    </div>






</body>

</html>