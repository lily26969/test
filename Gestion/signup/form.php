<?php

include 'connect.php'; 
if(isset($_POST['submit']))
{
    $name=$_POST['username'];
    $email=$_POST['email'];
    $password=$_POST['password'];
    $adress=$_POST['adress'];
    $phone=$_POST['phone'];
    $type=$_POST['mode'];
    
    $sql="insert into 'user' (username,email,password,phone,adress) 
    values('1','$name','$email','$password','$phone','$adress','$type')";
    $sql->execute();
    $result=mysqli_query($con,$sql);
    if($result){
        echo"data inserted sucessfully";
    }else{
        die(mysqli_error($con));
    }
    close();
}
?>





<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Washa Signup </title>
    <link rel="stylesheet" href="./style.css">

</head>

<body>
    <!-- partial:index.partial.html -->
    <html lang="en">

    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Form Validation</title>
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
       <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;700&display=swap" rel="stylesheet"> 
        <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
        <link rel="stylesheet" href="style.css"> -->
        <!-- <script defer src="./index.js"></script> -->
    </head>

    <body>
        <div class="container">
            
            <form id="form" action="post">
                <h1>Create our Washa Account !</h1>
                <div class="input-control">
                    <label for="username">Name </label>
                    <input id="username" name="username" type="text">
                    <div class="error"></div>
                </div>
                <div class="input-control">
                    <label for="email">Email</label>
                    <input id="email" name="email" type="text">
                    <div class="error"></div>
                </div>
                <div class="input-control">
                    <label for="password">Password</label>
                    <input id="password" name="password" type="password">
                    <div class="error"></div>
                </div>
                <div class="input-control">
                    <label for="password2">Password again</label>
                    <input id="password2" name="password2" type="password">
                    <div class="error"></div>
                </div>


                <div class="input-control">
                    <label for="phone">Phone Number</label>
                    <input id="phone" name="phone" type="number">
                    <div class="error"></div>
                </div>

                <div class="input-control">
                    <label for="adress">Adress</label>
                    <input id="adress" name="adress" type="Text">
                    <div class="error"></div>
                </div>

                <!--  <div class="form-group">
                    <label for="fun" class="col-sm-4 col-md-4 control-label text-right">Is it fun ?</label>
                    <div class="col-sm-7 col-md-7">
                        <div class="input-group">
                            <div id="radioBtn" class="btn-group">
                                <a class="btn btn-primary btn-sm active" data-toggle="fun" data-title="Y">YES</a>
                                <a class="btn btn-primary btn-sm notActive" data-toggle="fun" data-title="X">I don't
                                    know</a>
                                <a class="btn btn-primary btn-sm notActive" data-toggle="fun" data-title="N">NO</a>
                            </div>
                            <input type="hidden" name="fun" id="fun">
                        </div>
                    </div>
                </div> -->


                <br>
                <label>Create an account as a ? </label>
                <div id="radios">
                    <label for="user" class="material-icons">
                        <input type="radio" name="mode" id="user" value="2" checked />
                        <span>&#xe7fd;</span>
                    </label>
                    <label for="washer" class="material-icons">
                        <input type="radio" name="mode" id="washer" value="3" />
                        <span>&#xe542;</span>
                    </label>
                    <label for="delivery man" class="material-icons">
                        <input type="radio" name="mode" id="delivery man" value="4" />
                        <span>&#xe558;</span>
                    </label>
                </div>


                
                <center> <button type="submit" name="submit">Sign Up</button></center>
            </form>
        </div>
    </body>

    </html>
    <!-- partial -->
    <script src="script.js"></script>

</body>

</html>