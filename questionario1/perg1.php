<?php

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Iflooruflooring</title>
    <style>
        *{
            font-family: 'poppins',sans-serif;

        }
        body{
            display:flex;
            flex-direction:column;
            align-items:center;
            justify-content:center;
        }
        .title{
            text-align:center;
        }
        .btn{
            display:flex;
            align-items:center;
            justify-content:space-around;
            margin-top:2rem;
        }
        .btn button{
            width:13em;
            height:50px;
            color:white;
            background-color:#13AE50;
            border:none;
            border-radius:20px;
            font-size:15px;
            cursor: pointer;
            font-weight:700;
        }
        .btn a{
            width:13em;
            height:50px;
            color:#515151;
            background-color:#DADADA;
            border:none;
            border-radius:20px;
            font-size:15px;
            text-decoration:none;
            display:flex;
            align-items:center;
            justify-content:center;
        }

    </style>
</head>
<body>
    <header>
        <div class="title">
            <h3>Do you have any additional project details to add?</h3>
            <p>(Optional)</p>
        </div>
    </header>
    <form action="" method="post">
        <div class="textarea">
            <textarea name="" id="" cols="70" rows="8"></textarea>
        </div>
        <div class="btn">
            <a href="index.php">Back</a>
            <button type="submit">Next</button>
        </div>
    </form>
</body>
</html>