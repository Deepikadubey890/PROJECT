

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Homepage</title>
    <style>
        * {
            margin: 0;
            padding: 0;
        }

        .container {
            text-align: center;
            position: relative;
            width: 90%;
            margin: 0 auto;
        }

        .container img {
            height: 100%;
            width: 100%;

        }
        .head{
            margin-top: 40px;
            padding: 50px;
            top: 5%;
            position: absolute;
            width: 100%;
            text-align: center;
        }

        .hero {
            margin-top: 30px 5px;
            padding: 50px;
            color: red;
            top: 20%;
            position: absolute;
            width: 100%;
            text-align: center;
            font-size: 5rem;
        }

        .hero1 {
            margin-top: 50px;
            padding: 50px;
            top: 35%;
            position: absolute;
            width: 100%;
            text-align: center;
            font-size: 2rem;
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            color: #fff;
        }
        .btn{
            
            margin-top: 50px;
            padding: 50px;
            top: 45%;
            position: absolute;
            width: 100%;
            text-align: center;

        }
        .btn button{
            border-radius: 30px;
            padding: 10px;
            margin: 10px;
            width: 100px;
            font-weight: bold;
            background: linear-gradient(to right, #ff105f, #ffad06);
        }
        .btn button:hover{
            cursor: pointer;
            
                }
    </style>
</head>

<body>

    <div class="container">
        <img src="./img/pexels-abdullah-ghatasheh-1631677.jpg">
        <h1 class="head" >
            <center>Simple Login & Registration Using PhP & Mysql</center>
        </h1>
        <hr>
        <h1 class="hero">Welcome</h1>
        <h2 class="hero1"> Congratution! You have successfully logged in..</h2>
        <form class="btn"action="regtration.php"method="POST">
            <button type="submit" name="logoutbtn" value="logoutbtn">Logout</button><br><br>
        </form>
    </div>
</body>

</html>