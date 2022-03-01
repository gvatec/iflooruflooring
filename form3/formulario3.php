<?php

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form</title>
    <link rel="stylesheet" href="formulario3.css">
</head>
<body>
    <section>
        <div class="conatiner">
            <form action="">
                <div class="box box-1 active">
                    <div class="form-grup">
                    <h2>Have you already purchased the carpet for this project?</h2>
                 <div class="form-grup">
                    <div class="border">
                        <label for="no">No</label>
                        <input type="radio" name="perg1" id="no" value="no" require>
                    </div>
                 </div>
                 <div class="form-grup">
                    <div class="border">
                        <label for="yes">Yes</label>
                        <input type="radio" name="perg1" id="yes" value="yes" require>
                    </div>
                 </div>
                 <div class="btns">
                    <button type="button" class="next-btn">Next</button>
                 </div>
                    </div>
                </div>
                <!-- ========== -->
                 <div class="box box-2">
                     <h2>Select the type of wood flooring you would like to install:</h2>
                      <div class="form-grup">
                            <div class="border">
                                <label for="option1">Natural wood</label>
                                <input type="radio" name="option1" id="option1 " value="Natural wood">
                            </div>
                        </div>
                        <div class="form-grup">
                            <div class="border">
                              <label for="option2">Wood laminate</label>
                              <input type="radio" name="option2" id="option2" value="Wood laminate">
                            </div>
                        </div>
                        <div class="form-grup">
                            <div class="border">
                              <label for="option3">Want recommendation</label>
                              <input type="radio" name="option3" id="option3" value="Want recommendation">
                            </div>                    
                        </div>
                        <button type="button" class="previous-btn">Prev</button>
          <button type="button" class="next-btn">Next</button>
                 </div>
                 <div class="box box-3">
                 <div class="step step-1 active">
                         <h1>Do you have any additional project details to add?</h1>
                     <div class="form-group">
                         <label for="text">(Optional)</label><br>
                           <textarea name="text" id="text" cols="35" rows="7"></textarea>
                      </div>
                         <button type="button" class="next-btn">Next</button>
                      </div>
                 </div>
                 <div class="box box-4">
                 <h2>What is your timeframe?</h2>
          <div class="form-grup">
              <div class="border">
                  <input type="radio" name="perg4" id="option1" value="timing is flexible">
                  <label for="option1">Timing is flexible</label>
              </div>
          </div>
          <div class="form-grup">
              <div class="border">
                  <input type="radio" name="perg4" id="option2" value="within 1 week">
                  <label for="option2">Within 1 week</label>
              </div>

          </div>
          <div class="form-grup">
              <div class="border">
                  <input type="radio" name="perg4" id="option3" value="1 - 2 weeks">
                  <label for="option3">1 - 2 weeks</label>
              </div>
          </div>
          <div class="form-grup">
              <div class="border">
                  <input type="radio" name="perg4" id="option4" value="more than 2 weeks">
                  <label for="option4">More than 2 weeks</label>
              </div>
          </div>
          <button type="button" class="prev-btn">Prev</button>
          <button type="button" class="next-btn">Next</button>
         </div>
         <div class="box box-5">
         <h2>What kind of location is this?</h2>
        <div class="form-group">
            <div class="border">
                <input type="radio" name="perg2" id="homeresidence" value="home/Residence" required>
                <label for="perg2">Home/Residence</label>
            </div>
        </div>
                   <div class="form-group">
                      <div class="border">
                <input type="radio" name="perg2" id="business" value="Business"required>
                <label for="perg2">Business</label>
                 </div>
                </div>
                  <button type="button" class="previous-btn">Prev</button>
                <button type="button" class="next-btn">Next</button>
              </div>
              <div class="box box-6">
              <h2>Are you the owner?</h2>
          <div class="form-grup">
              <div class="border">
                  <input type="radio" name="perg5" id="yes" value="yes">
                  <label for="yes">Yes</label>
              </div>
           <div class="form-grup">
               <div class="border">
                   <input type="radio" name="perg5" id="no" value="no">
                   <label for="no">No</label>
               </div>
           </div>
           <div class="form-grup">
               <div class="border">
                   <input type="radio" name="perg5" id="option2" value="no, but authorized to make changes">
                   <label for="option2">No, but authorized to make changes</label>
               </div>
           </div>
          </div>
          <button type="button" class="prev-btn">Prev</button>
          <button type="button" class="next-btn">Next</button>
              </div>
              <div class="box box-7">
              <h2>Your Address</h2>
          <div class="form-grup">
             <input placeholder="Street" type="text" name="rua" id="rua" required><br>
             <input  placeholder="Zipcode" type="text" name="zipcode" id="zipcode"><br>
             <input  placeholder="City"type="text" name="cidade" id="cidade"><br>    
             <input   placeholder="Estade"type="text" name="estado" id="estado">
          </div>
          <button type="button" class="prev-btn">Prev</button>
          <button type="button" class="next-btn">Next</button>
              </div>
              <div class="box box-8">
              <h2>Enter your address</h2>
           <div class="form-grup">
           <img style="width:30px;height:30px;" src="https://img.icons8.com/ios-filled/50/4a90e2/user.png"/>
           <input placeholder="First and last name" type="text" name="name" id="name">
           </div>
           <div class="form-grup">
           <img style="width:30px;height:30px;" src="https://img.icons8.com/external-kiranshastry-solid-kiranshastry/64/4a90e2/external-email-interface-kiranshastry-solid-kiranshastry.png"/>
           <input placeholder="Email address" type="email" name="email" id="email">
           </div>
           <div class="form-grup">
           <img style="width:30px;height:30px;" src="https://img.icons8.com/ios-filled/50/4a90e2/phonelink-ring--v1.png"/>
           <input placeholder="Phone" type="tel" name="tel" id="tel">
           </div>
           <button type="submit" name="submit" id="submit" class="submit-btn">Submit</button>

              </div>
            </form>
        </div>
    </section>
    <script src="formulario3.js"></script>
</body>
</html>