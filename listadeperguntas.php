<?php
 if(isset($_POST['finishsubmit'])){
    include_once('Database_config.php');
    $name = $_POST['name'];
    $email = $_POST['email'];
    $tel = $_POST['tel'];
    $textarea = $_POST['text'];
    $pergunta2 = $_POST['perg2'];
    $pergunta3 = $_POST['perg3'];
    $pergunta4 = $_POST['perg4'];
    $pergunta5 = $_POST['perg5'];
    $rua = $_POST['rua'];
    $zipcode = $_POST['zipcode'];
    $cidade = $_POST['cidade'];
    $estado = $_POST['estado'];

    $resultado = mysqli_query($conecxao, "INSERT INTO formfinal(nome,email,telefone,pergunta1,pergunta2,pergunta3,pergunta4,pergunta5,rua,zipcode,cidade,estado) VALUES
    ('$name', '$email','$tel','$textarea','$pergunta2','$pergunta3','$pergunta4','$pergunta5','$rua','$zipcode','$cidade','$estado')");
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form</title>
    <link rel="stylesheet" href="listadeperguntas.css">
</head>
<body>
    <div class="mainform">
        <div class="titulo">
            <h1>FILL OUT THE FORM TO CONTACT YOU</h1>
        </div>
        <form action="listadeperguntas.php" method="post">

        <!-- PERGUNTA 1 -->
        <div class="box1">
            <header>
              <div class="title">
              <h2>Do you have any additional project details to add?</h2>
              <p>(Optional)</p>
             </div>
          </header>
          <div class="textarea">
            <textarea placeholder="Describe your project in more detail. This helps your pros provide you with more accurate quotes." 
            name="text" id="text" cols="30" rows="5"></textarea>
          </div>
        </div>
          
     <!-- ====================================================================================================== -->
        <div class="box2">
          <header>
             <div class="title">
                 <h2>What kind of location is this?</h2>
              </div>
          </header>
  
          <div class="inputsradio">
            <div class="radio1">
                <input type="radio" name="perg2" id="homeresidence" value="home/Residence" required>
                <label for="homeresidence">Home/Residence</label>
            </div>
            <div class="radio2">
                <input type="radio" name="perg2" id="business" value="Business"required>
                <label for="business">Business</label>
            </div>
        </div>
         </div>
        <!-- ------------------------------------------------------------------------------------------- -->
        <div class="box3">
            <header>
              <div class="title">
                 <h2>Have you already purchased the materials for this project?</h2>
             </div>
          </header>
           <div class="inputsradio">
              <div class="radio1">
                  <input type="radio" name="perg3" id="yes" value="yes">
                   <label for="yes">Yes</label>
              </div>
               <div class="radio2">
                   <input type="radio" name="perg3" id="no" value="no">
                  <label for="no">No</label>
              </div>
            </div>
          
        </div>
        <!-- -------------------------------------------------------------------------------------- -->
        <div class="box4">
             <header>
                  <div class="title">
                     <h2>What is your timeframe?</h2>
                 </div>
             </header>
             <div class="inputsradio">
                  <div class="radio1">
                      <input type="radio" name="perg4" id="option1" value="timing is flexible">
                      <label for="option1">Timing is flexible</label>
                 </div>
                 <div class="radio2">
                       <input type="radio" name="perg4" id="option2" value="within 1 week">
                      <label for="option2">Within 1 week</label>
                 </div>
                  <div class="radio1">
                       <input type="radio" name="perg4" id="option3" value="1 - 2 weeks">
                       <label for="option3">1 - 2 weeks</label>
                 </div>
                  <div class="radio2">
                       <input type="radio" name="perg4" id="option4" value="more than 2 weeks">
                       <label for="option4">More than 2 weeks</label>
                 </div>
            </div>
        </div>
        <!-- ===================================================================================== -->
         <div class="box5">
             <header>
                  <div class="title">
                     <h2>Are you the owner?</h2>
                  </div>
             </header>
              <div class="inputsradio">
                   <div class="radio1">
c                    </div>
                 <div class="radio1">
                         <input type="radio" name="perg5" id="option2" value="no, but authorized to make changes">
                         <label for="option2">No, but authorized to make changes</label>
                 </div>

                 <div class="radio2">
                       <input type="radio" name="perg5" id="no" value="no">
                       <label for="no">No</label>
                 </div>
              </div>
        </div>

      <div class="endereco">
               <header>
                    <div class="title">
                     <h2>Enter your address</h2>
                   </div>
             </header>
         <div class="campos">
                <input placeholder="Street" type="text" name="rua" id="rua" required><br>
                <input  placeholder="Zipcode" type="text" name="zipcode" id="zipcode"><br>
                <input  placeholder="City"type="text" name="cidade" id="cidade"><br>    
                <input   placeholder="Estade"type="text" name="estado" id="estado">
         </div>
     </div>
     <!-- ========================================================================= -->
     <div class="finalform">
     <header>
        <div style="text-align:center;" class="title">
            <h2>Alright! Let's get you a quote.</h2>
            <p >Our service is <strong>free</strong> with <strong>no obligation</strong> to hire.</p>
        </div>  
    </header>
    <div class="form">
            <div class="input1">
            <img style="width:30px;height:30px;" src="https://img.icons8.com/ios-filled/50/4a90e2/user.png"/>
                <input placeholder="First and last name" type="text" name="name" id="name">
            </div>
            <div class="input1">
            <img style="width:30px;height:30px;" src="https://img.icons8.com/external-kiranshastry-solid-kiranshastry/64/4a90e2/external-email-interface-kiranshastry-solid-kiranshastry.png"/>
            <input placeholder="Email address" type="email" name="email" id="email">

            </div>
            <div class="input1">
            <img style="width:30px;height:30px;" src="https://img.icons8.com/ios-filled/50/4a90e2/phonelink-ring--v1.png"/>
            <input placeholder="Phone" type="tel" name="tel" id="tel">
            </div>
             <div class="btn">
                 <button type="submit"name="finishsubmit"id="finishsubmit">See Your Matches<img src="https://img.icons8.com/ios-glyphs/30/ffffff/chevron-right.png"/></button>
             </div>
    </div>
</form>
    <div class="text">
        Estimates are <strong>free</strong>with <strong>no obligation</strong>to hire pro. <br><br><br>
        <img style="width:30px;height:30px;" src="https://img.icons8.com/ios-filled/50/4a90e2/phone.png"/>Prefer the phone? Call our project team now! <strong>(833) 906-1482</strong>
    </div>
    <footer>
        <div style="margin-top:1rem;" class="title">
            <h4><img src="https://img.icons8.com/metro/26/4a90e2/lock-2.png"/>We care about your privacy.</h4>
        </div>
        <div style="width:20rem;text-align:center;" class="text">
        By clicking See Your Matches, you acknowledge localflooringquotes's <a href="https://vault.pactsafe.io/s/66ea6b27-8a6d-4119-ba9e-50ed6b6674d8/legal.html?g=29777#craftjack-terms-and-conditions">Terms</a> and authorize localflooringquotes.com, its partners, its affiliates, and their networks of Service Professionals to use automated technology to call, text or email the number or email address you provided.
         Your privacy is important to us, and you are not required to make a purchase.
        </div>
  </footer>
     </div>
     </div>
     <script src="listadeperguntas.js"></script>
</body>
</html>