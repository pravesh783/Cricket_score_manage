<!DOCTYPE html>
<html>
<head>
	<title>IHL 2021</title>
    <link rel="shortcut icon" type="image/png" href="./images/download.png"/>
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=yes"/>
    <meta name="HandheldFriendly" content="true" />
    <meta name="apple-touch-fullscreen" content="YES" />
    
    <link href="https://unpkg.com/tailwindcss@^1.0/dist/tailwind.min.css" rel="stylesheet">

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="keywords" content="footer, address, phone, icons" />

    <link rel="stylesheet" href="style.css">
    
    <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css">

    <link href="http://fonts.googleapis.com/css?family=Cookie" rel="stylesheet" type="text/css">
    <style type="text/css">
        body{
            padding:0;
            margin: 0;
        }
        nav{
           
        }
        .section{
            height: 100vh;
            position: relative;
        }
        footer{    
            width: 100%;
            text-align: center;
            position: absolute;
        }
        nav{
            text-align: center;
        }
        .card{
            height: 200px;
            position: relative;
        }
        a{
            color: blue;
            font-weight: bold;
            font-size: 30px;
        }
        @media only screen and (max-width: 600px){
            
            nav{
                font-weight: 13px;
            }
            .card{
                width: 90%;
            }
        }
    </style>

</head>
<body>


    <nav class="bg-blue-400 text-white ">
        <h1>ITM HOSTEL LEGUE</h1>
        <p>|| You Don't play for the crowd you play for the Team ||</p>
    </nav>
<!--nav end here-->


    <div class="section bg-white py-3 px-3">
        <div class="card rounded px-3 py-4 bg-green-300 mx-auto my-2 shadow-2xl">
            <h1 class="text-4xl ">About IHL</h1>
            <a href="gallery.html">Gallery</a>
            <a href="league.html">League 2021</a>
        </div>
        <div class="card rounded px-3 py-4 bg-green-300 mx-auto my-2 shadow-2xl">
            <h1 class="text-4xl ">Student</h1>
            <a href="index.php">Login</a>
        </div>
        <div class="card rounded px-3 py-4 bg-green-300 mx-auto my-2 shadow-2xl">
        <h1 class="text-4xl ">Admin</h1>
        <a href="./admin/login.php">Login</a>
        </div>
    </div>
    

<footer class="bg-black text-white text-2xl">
    <p>copyright &copy; Pravesh maurya</p>
</footer>
</body>
</html>