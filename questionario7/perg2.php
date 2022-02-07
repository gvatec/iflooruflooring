<?php

   if(isset($_POST['submitperg4'])){
       header('Location: perg3.php');
   }

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>IflooruFlooring</title>
    <style>
                        *{
            font-family: 'poppins',sans-serif;
            transition:all 0.5s ease;

        }
        body{
            display:flex;
            flex-direction:column;
            align-items:center;
            justify-content:center;
            transition:all 0.5s ease;

        }
        .btn{
            display:flex;
            align-items:center;
            justify-content:center;
            margin-top:2rem;
        }
        .btn button{
            width:13rem;
            height:50px;
            color:white;
            background-color:#13AE50;
            border:none;
            border-radius:20px;
            font-size:20px;
            cursor: pointer;
            font-weight:700;
            transition-duration:0.4s;
            display:flex;
            align-items:center;
            justify-content:center;
        }
        .btn button:hover{
            background-color:#02A606;
        }
        .btn a{
            width:13rem;
            height:50px;
            color:#515151;
            background-color:#DADADA;
            border:none;
            border-radius:20px;
            font-size:20px;
            color:#333333;
            text-decoration:none;
            display:flex;
            align-items:center;
            justify-content:center;
            transition-duration:0.4s;
        }
        .btn a:hover{
            background-color:#A7A9AC;
        }
/* ================================================ */
        
        .radio1{
            border:1px solid #DADADA;
            height:45px;
            width:35rem;
            display:flex;
            align-items:center;
            font-size:1.2rem;
            font-weight:600;
        }
        .radio2{
            border:1px solid #DADADA;
            margin-top:10px;
            margin-bottom:10px;
            height:45px;
            width:35rem;
            display:flex;
            align-items:center;
            font-size:1.2rem;
            font-weight:600;
        }

    </style>
</head>
<body>
    <header>
        <div class="title">
            <h2>What kind of project is this?</h2>
        </div>
    </header>
    <form action="perg2.php" method="post">
        <div class="inputsradio">
            <div class="radio1">
                <input type="radio" name="perg4" id="option1">
                <label for="option1">Replace existing tile</label>
            </div>
            <div class="radio2">
                <input type="radio" name="perg4" id="option2">
                <label for="option2">Replace existing non-tilesurface</label>
            </div>
            <div class="radio1">
                <input type="radio" name="perg4" id="option3">
                <label for="option3">Tile for new costruction</label>
            </div>
        </div>
        <div class="btn">
        <a href="perg1.php"><img style="width:30px; height:30px;" src="https://img.icons8.com/ios-filled/50/000000/less-than.png"/>Back</a>
        <button type="submit" name="submitperg4" id="submitperg4">Next <img src="https://img.icons8.com/ios-glyphs/30/ffffff/chevron-right.png"/></button>
        </div>
    </form>

</body>
</html>