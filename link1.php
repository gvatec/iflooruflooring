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
        .container2{
            position:absolute;
            display:flex;
            flex-direction:column;
            align-items:center;
            justify-content:center;
        }
        .container2 .radio1{
            width:30em;
            height:44px;
            display:flex;
            align-items:center;
            padding:11px 10px 11px;
            border:1px solid grey;
            margin-bottom:1rem;
        }
        .container2 .radio2{
            width:30em;
            height:44px;
            display:flex;
            align-items:center;
            padding:11px 10px 11px;
            border:1px solid grey;
        }
        .container2 button{
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
        .container2 button:hover{
            background-color: #1c961e;
        }
        .container2 img{
            width:30px;
            height:30px;
        }

    </style>
</head>
<body>
    <div  class="container">
        <h2>Do you have any additional project details to add?</h2>
          <p>(Optional)</p><br><br>
          <form style="display:flex; flex-direction:column;align-items:center;" action="" method="post">
          <textarea name="" id="" cols="30" rows="10" placeholder="Describe your project  in more detail.This helps your pros provide you wiht more accurate quotes."></textarea>
              <button class="nextquestion" type="submit">Next <img src="https://img.icons8.com/ios-filled/50/ffffff/chevron-right.png"/></button>
          </form>
    </div>
    <div class="container2">
        <h2>What kind of location is this?</h2>
        <form style="display:flex; flex-direction:column;align-items:center;" action="" method="post">
        <div class="radio1">
            <input type="radio" name="tipodelocal" id="home_residence">
            <label for="home_residence">Home/Residence</label><br>
        </div>
        <div class="radio2">
            <input type="radio" name="tipodelocal" id="business">
            <label for="business">Business</label>
        </div>
        <button class="nextquestion" type="submit">Next <img src="https://img.icons8.com/ios-filled/50/ffffff/chevron-right.png"/></button>

        </form>
    </div>
    <script src="link1quest.js"></script>
</body>
</html>