<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home|I Floor U Flooring</title>
    <style>
        *{
            font-family: 'poppins',sans-serif;

        }
        body{
            display:flex;
            align-items:center;
            justify-content:center;
        }
        .input{
            display:flex;
            align-items:center;
        }
        .input img{
            width:35px;
            height:35px;
            margin-left:5px;
        }
        .input [placeholder]{
            font-size:20px;
        }
        .container{
            text-align:center;
        }
    </style>
<body>
    <div class="container">
        <div class="title">
            <h2>What's the project address?</h2>
        </div>
        <div class="boxzipcode">
            <form action="" method="get">
                <div style="border:1px solid  grey; width:20em;padding:5px;" class="input">
                    <img src="https://img.icons8.com/ios-filled/50/4a90e2/region-code.png"/>
                    <input placeholder="Street address" style="border:none; outline:none;" type="text" name="zipcode" id="zipcode">
                </div>
            </form>
        </div>
    </div>
</body>
</html>