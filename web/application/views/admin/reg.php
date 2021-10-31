<!DOCTYPE html>
<html lang="en" dir="ltr">
   <head>
      <meta charset="utf-8">
      <title>SignUp</title>
        <!-- ===== CSS ===== -->
        
          <?php linkCSS("assets/css/reg.css") ?>
          <?php linkCSS("assets/css/dashboard.css") ?>
          <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width,initial-scale=1,maximum-scale=1">
        <title></title>
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/gh/lykmapipo/themify-icons@0.1.2/css/themify-icons.css">
    
      
      <meta name="viewport" content="width=device-width, initial-scale=1.0">
      <style>
            .error {
               color: red;
            }

        </style>
   </head>
   <body>
     <?php include "sidebar.php";?>
   
   
      <div class="description" style="margin-left:10%">
      <p style="font-size: 25px; font-weight: bold;"> Register Users </p>Register doctors, physiotherpists and nutritionists 
      </div>
      <div class="wrapper" style="margin-left:25%">
         <div class="form-container">
            <!--slide starts-->
            <div class="slide-controls">
               <input type="radio" name="slide" id="login" checked>
               <input type="radio" name="slide" id="signup" checked>
               <label for="login" class="slide login">Doctor</label>
               <label for="signup" class="slide signup">Paramedical</label>
               <div class="slider-tab"></div>
            </div>
             <!--slide ends-->

            <!--doctor signup starts-->
            <div class="form-inner">
               <form action="<?php echo BASEURL;?>/admin/registerDoc" class="login" method="POST">              
                  <!--name-->
                  <div class="field">
                  <label>*</label>
                     <input type="text" placeholder="Full Name" name="fullName" required>
                  </div>
                  <div class="error">
                    <?php if(!empty($data['fullNameError'])): echo $data['fullNameError']; endif; ?>
                  </div>
                  <!--email-->
                  <div class="field">
                  <label>*</label>
                     <input type="email" placeholder="Email Address" name="email" required>
                  </div>
                  <div class="error">
                     <?php if(!empty($data['emailError'])): echo $data['emailError']; endif; ?>
                  </div>
                  <!--username-->
                  <div class="field">
                  <label>*</label>
                     <input type="text" placeholder="Username" name="username" required>
                  </div>
                  <div class="error">
                     <?php if(!empty($data['usernameError'])): echo $data['usernameError']; endif; ?>
                   </div>
                    <!--password-->
                  <div class="field">
                  <label>*</label>
                     <input type="password" placeholder="Password" name="password" required>
                  </div>
                  <div class="error">
                      <?php if(!empty($data['passwordError'])): echo $data['passwordError']; endif; ?>
                  </div>
                   
                  <div class="row">
                     <!--nic-->
                    
                     <!--gender-->
                     <div class="field"  style="margin-left: 10px;">
                     <label>*</label>
                        <select name="gender" id="gender" required>
                        <option value="" disabled selected hidden>Gender</option>
                        <option value="male">Male</option>
                        <option value="female">Female</option>
                        </select>
                     </div>
                     <div class="error">
                      <?php if(!empty($data['genderError'])): echo $data['genderError']; endif; ?>
                     </div>
                  </div>

                  <div class="row">
                     <!--hospital-->
                     <div class="field" style="margin-right: 10px;">
                     <label>*</label>
                        <input type="text" placeholder="Hospital" name="hospital" required>
                     </div>
                     <div class="error">
                      <?php if(!empty($data['hospitalError'])): echo $data['hospitalError']; endif; ?>
                     </div>

                      <!--id-->
                     <div class="field" style="margin-left: 10px;">
                     <label>*</label>
                        <input type="text" placeholder="Doctor ID" name="doctorId" required>
                     </div>
                     <div class="error">
                      <?php if(!empty($data['doctorIdError'])): echo $data['doctorIdError']; endif; ?>
                     </div>
                  </div>                              
                  
                  <div class="row">
                     <!--province-->
                  <div class="field" style="margin-right: 10px;">
                  <label>*</label>
                     <select name="province" id="province" required>
                        <option value="" disabled selected hidden>Province</option>
                        <option value="western">Western</option>
                        <option value="southern">Southern</option>
                        <option value="eastern">Eastern</option>
                        <option value="northern">Northern</option>
                        <option value="north-western">North-Western</option>
                        <option value="uva">Uva</option>
                        <option value="central">Central</option>
                        <option value="north-central">North-Central</option>
                        <option value="sabaragamuwa">Sabaragamuwa</option>
                     </select>
                  </div>
                  <div class="error">
                      <?php if(!empty($data['provinceError'])): echo $data['provinceError']; endif; ?>
                  </div>

                  <!--district-->
                  <div class="field" style="margin-left: 10px;">
                  <label>*</label>
                     <input type="text" placeholder="District" name="district" required>
                  </div>
                  <div class="error">
                      <?php if(!empty($data['districtError'])): echo $data['districtError']; endif; ?>
                  </div>
                  </div>
                  <!--submit-->
                  <div class="btn0">
                     <div class="btn-layer"></div>
                     <input type="submit" value="Submit">
                  </div>
                  
               </form>
               <!--doctor signup endss-->

               <!--paramedical signup starts-->
               <form action="<?php echo BASEURL;?>/admin/regPara" class="signup">
                  
                  <div class="field">
                  <label>*</label>
                     <input type="text" placeholder="Full Name" name="fullName" required>
                  </div>
                  <div class="error">
                    <?php if(!empty($data['fullNameError'])): echo $data['fullNameError']; endif; ?>
                  </div>

                  <div class="field">
                  <label>*</label>
                     <input type="text" placeholder="Email Address" name="email" required>
                  </div>
                  <div class="error">
                    <?php if(!empty($data['emailError'])): echo $data['fullNameError']; endif; ?>
                  </div>

                  <div class="field">
                  <label>*</label>
                     <select name="para" id="para" required>
                        <option value="" disabled selected hidden>Pramedical User Type</option>
                        <option value="physiotherapist">Physiotherapist</option>
                        <option value="nutritionist">Nutritionist</option>
                     </select>
                  </div>
                  <div class="error">
                    <?php if(!empty($data['paraError'])): echo $data['paraError']; endif; ?>
                  </div>

                  <!--username-->
                  <div class="field">
                  <label>*</label>
                     <input type="text" placeholder="Username" name="username" required>
                  </div>
                  <div class="error">
                     <?php if(!empty($data['usernameError'])): echo $data['usernameError']; endif; ?>
                   </div>

                    <!--password-->
                  <div class="field">
                  <label>*</label>
                     <input type="password" placeholder="Password" name="password" required>
                  </div>
                  <div class="error">
                      <?php if(!empty($data['passwordError'])): echo $data['passwordError']; endif; ?>
                  </div>

                  <div class="row">
                    

                     <div class="field" style="margin-left: 10px;">
                     <label>*</label>
                        <select name="gender" id="gender" required>
                        <option value="" disabled selected hidden>Gender</option>
                        <option value="male">Male</option>
                        <option value="female">Female</option>
                        </select>
                     </div>
                     <div class="error">
                      <?php if(!empty($data['genderError'])): echo $data['genderError']; endif; ?>
                     </div>
                  </div>
               
                  <div class="row">
                     <div class="field" style="margin-right: 10px;">
                     <label>*</label>
                        <input type="text" placeholder="Hospital" name="hospital" required>
                     </div>
                     <div class="error">
                      <?php if(!empty($data['hospitalError'])): echo $data['hospitalError']; endif; ?>
                     </div>

                  <div class="field" style="margin-left: 10px;">
                  <label>*</label>
                     <input type="text" placeholder="Doctor ID" name="doctorId" required>
                  </div>
                  <div class="error">
                      <?php if(!empty($data['doctorIdError'])): echo $data['doctorIdError']; endif; ?>
                  </div>
                  </div>
                 
                  <div class="row">
                     <div class="field" style="margin-right: 10px;">
                     <label>*</label>
                     <select name="province" id="province" required>
                        <option value="" disabled selected hidden>Province</option>
                        <option value="western">Western</option>
                        <option value="southern">Southern</option>
                        <option value="eastern">Eastern</option>
                        <option value="northern">Northern</option>
                        <option value="north-western">North-Western</option>
                        <option value="uva">Uva</option>
                        <option value="central">Central</option>
                        <option value="north-central">North-Central</option>
                        <option value="sabaragamuwa">Sabaragamuwa</option>
                     </select>
                     </div>
                     <div class="error">
                      <?php if(!empty($data['provinceError'])): echo $data['provinceError']; endif; ?>
                     </div>

                  <div class="field" style="margin-left: 10px;">
                  <label>*</label>
                     <input type="text" placeholder="District" name="district" required>
                  </div>
                  <div class="error">
                      <?php if(!empty($data['districtError'])): echo $data['districtError']; endif; ?>
                  </div>
                  </div>

                  <div class="btn">
                     <div class="btn-layer"></div>
                     <input type="submit" value="Submit">
                  </div>
                  
               </form>
               <!--paramedical signup ends-->
            </div>
         </div>
      </div>
     </div>
   
      <script>
         /*const loginText = document.querySelector(".title-text .login");*/
         const loginForm = document.querySelector("form.login");
         const loginBtn = document.querySelector("label.login");
         const signupBtn = document.querySelector("label.signup");
         /*const signupLink = document.querySelector("form .signup-link a");*/
         signupBtn.onclick = (()=>{
           loginForm.style.marginLeft = "-50%";
           /*loginText.style.marginLeft = "-50%";*/
         });
         loginBtn.onclick = (()=>{
           loginForm.style.marginLeft = "0%";
           /*loginText.style.marginLeft = "0%";*/
         });
         /*signupLink.onclick = (()=>{
           signupBtn.click();
           return false;
         });*/
      </script>
   </body>
</html>