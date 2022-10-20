<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
    .box {
        width: 30%;
        height: 370px;
        border: 1px solid whitesmoke;
        border-radius: 5px;
        padding: 5px;
        padding-left: 7px;
        margin-bottom: 10px;
        margin-top: 100px;
        font-family: Arial, Helvetica, sans-serif;
        background-color: whitesmoke;
        margin-left: 40px;
        box-shadow: 2px 2px 3px #afaab5;
    }

    .left {
        margin-left: 60px;
        margin-top: 50px;
        margin-bottom: 50px;

    }

    .photo {
        background-position: center;
        background-repeat: no-repeat;
        background-size: cover;
    }

    .text {
        text-align: center;
        margin-top: 20px;
        color: #2F4F4F;
        font-family: Arial, Helvetica, sans-serif;

    }

    .btn {
        width: 100px;
        height: 30px;
        background-color: darkblue;
        border: none;
        border-radius: 7px;
        color: white;

    }

    input {
        border-radius: 4px;
        border: none;
        background-color: #d1d2e3;
        height: 25px;
        width: 70%;
    }

    a {
        text-decoration: none;
        color: #d1d2e3;
        font-size: 18px;
    }
    </style>
</head>

<body style="background-image:url('images/bg11.jpg')" class="photo">
    <div style="display: flex;">
        <img src="images/login2.jpg" width="500px" height="600px" class="left" />
        <div class="box ">

            <h2 class="text" style="margin-top: 40px;"><b>LOGIN</b></h2></br>
            <div class="text">
                <labe style="margin-left: -160px;"><b>Username :</b></labe></br>
                <input name="username" id="username" value="" type="text"></br></br>

                <labe style="margin-left: -160px;"><b>Password :</b></labe></br>
                <input name="password" id="password" value="" type="password"></br></br>

                <button class="btn"> <a href="/login">LOGIN</a></button>
            </div>
        </div>
    </div>


</body>

</html>