
        <div class="login">
            <div class="upper">
                <div class="brand-logo"></div>
                <h1 class="login__title">SL ATHLETE CARE</h1>
                <div class='subtitle'>Give your expertise to those who value it!</div>
            </div>

            <div class="login__forms">
                <form action="<?php echo BASEURL;?>/accountController/userLogin" class="login__registre" id="login-in">
                    <h1 class="login__title">Log In</h1>
                    <div class="login__box">
                        <i class='bx bx-user login__icon'></i>
                        <input type="username" name="username"  placeholder="Enter your username" class="login__input">
                    </div>
                    <div class="error">
                       <?php if(!empty($data['usernameError'])): echo $data['usernameError']; endif; ?>
                     </div>
                    <div class="login__box">
                        <i class='bx bx-lock-alt login__icon'></i>
                        <input type="password" name="password"  placeholder="Your password" class="login__input">
                    </div>
                    <div class="error">
                      <?php if(!empty($data['passwordError'])): echo $data['passwordError']; endif; ?>
                    </div>


                    <a href="fp.html" class="login__forgot">Forgot your password?</a>

                    <div class="login__button">
                    <button type="submit" >Log In</button>
                    </div>
                    <div class="end">
                        <hr>
                        <h5>If you are a doctor, physiotherapist or admin use this login.</h5>
                    </div>
                </form>    
            </div>               
        </div>
