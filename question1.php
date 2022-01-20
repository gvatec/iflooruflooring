<?php

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home|I Floor U Flooring</title>
    <style>
        *{
            margin:0;
            padding:0;
            box-sizing:border-box;
            font-family: 'poppins',sans-serif;
        }
        body{
            display:flex;
            min-width:100%;
            min-height:auto;
            justify-content:center;
            align-items:center;
        }
        .container{
            display:flex;
            justify-content:center;
            align-items:center;
            flex-direction:column;
            margin-top:3rem;
        }
        .container textarea{
            width:30em;
            height:140px;
            
        }
        .container textarea[placeholder]{
            font-size:20px;
            outline:none;
            padding:10px;
        }
        .container button{
            width:182px;
            height:50px;
            border-radius:30px;
            border:none;
            background-color: #34ca37;
            color:white;
            font-size:20px;
            margin-top:1rem;
            cursor: pointer;
            transition-duration:0.3s;
            display:flex;
            align-items:center;
            justify-content:center;

        }
        .container button:hover{
            background-color: #1c961e;

        }
        .container img{
            width:30px;
            height:30px;
        }
    </style>
</head>
<body>
    <div class="container">
        <h2>Do you have any additional project details to add?</h2>
          <p>(Optional)</p><br><br>
          <form style="display:flex; flex-direction:column;align-items:center;" action="question1.php" method="post">
          <textarea name="" id="" cols="30" rows="10" placeholder="Describe your project  in more detail.This helps your pros provide you wiht more accurate quotes."></textarea>
              <button type="submit">Next <img src="https://img.icons8.com/ios-filled/50/ffffff/chevron-right.png"/></button>
          </form>
    </div>
</body>
</html>