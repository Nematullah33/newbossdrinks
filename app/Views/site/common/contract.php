<div class="container" style="margin-top:50px;">
    <div class="row">
        <div class="col-md-6 col-sm-12" style="margin-bottom:50px">
            <div class="contactUS" style="min-height:425px; border-radius:20px;">

                <div>
                    <p>Become a BOSS Drinks Stockist</p>
                </div>

                <h3>To become a BOSS Drinks Business Customer , Please Register first !</h3>
                <div class="contactUS_btn">
                    <a href="<?php echo base_url('site/stock_register')?>"><button type="button">Register</button></a>
                </div>
            </div>
        </div>
        <div class="col-md-6 col-sm-12">

            <div class="brand_amb" style="min-height:425px; border-radius:20px;">
                <div class="brand_Text">
                    <p>Become a Boss Drinks Ambassedor</p>
                </div>
                <!-- <h3>To become a BOSS Drinks Brand Ambessor , Please Register first !</h3> -->
                <div class="brand_amb_btn">
                    <a href="<?php echo base_url('site/brand')?>">Join Now</a>
                </div>
            </div>
        </div>
    </div>
</div>





<!-- contact us ********************************************************************************-->


<!-- final Footer -->
<div class="login_modal_bg">
    <div class="login_modal">
        <div class="heading_for_form">
            <h4 id="account_heading">Create account or Login</h4>
            <button id="cross_button">x</button>
        </div>
        <p id="P_TAG">We are a subscription-first business. For you to change or skip a delivery in the future, you will
            need a BOSS Drink account.</p>

        <div class="All_button_class">

            <button class="login_btn_class" id="apple_btn">
                <img id="login_img" src="<?php echo base_url("assets")?>/site/img/appleFixed.png" alt="">
                <p>Continue with Apple</p>
            </button>
            <button class="login_btn_class2" id="google_btn">
                <img id="login_img" src="<?php echo base_url("assets")?>/site/img/google_logo.png" alt="">
                <p>Continue with Google</p>
            </button>
            <button class="login_btn_class3" id="facebook_btn">
                <img id="login_img" src="<?php echo base_url("assets")?>/site/img/facebook_logo.png" alt="">
                <p>Continue with Facebook</p>
            </button>
        </div>

        <h4 id="or">or</h4>

        <div class="login_form_options">
            <button id="login_BUTTON">Log in</button>

            <button id="signup_button">Sign up</button>
        </div>


        <form action="">
            <div class="LOGIN_FORM">
                <input type="email" placeholder="Email">
                <div>
                    <input id="login_modal_pass" type="password" placeholder="Password">
                    <img src="img/eye.png" alt="" id="eye_icon" onclick="togglePW()" style="height:20px">


                </div>


                <div class="forget_pss_div">
                    <div class="remember_me ">
                        <input id="login_checkbox" type="checkbox">
                        <p>Remember Me</p>
                    </div>
                    <div>
                        <a href="pass_recovery.html">Forget Password ?</a>
                    </div>
                </div>
            </div>



            <div class="SIGNUP_FORM">

                <div class="NAMES">
                    <input type="text" placeholder="First Name">
                    <input type="text" placeholder="Last Name">
                </div>

                <input type="email" placeholder="email">
                <input id="signup_pass" type="password" placeholder="Password">
                <img src="img/eye.png" alt="" id="eye_icon" onclick="togglePW1()" style="height:20px">
                <input id="signup_pass_confirm" type="password" placeholder="Confirm Password"
                    style="margin-top: -12px;">
                <img src="img/eye.png" alt="" id="eye_icon" onclick="togglePW()" style="height:20px">


                <div class="checkbox_DIV">
                    <input type="checkbox" id="login_form_checkbox">
                    <h4 id="H-4">I confirm I have read and agree to the <a id="Anchor" href="terms.html  ">Terms and
                            Conditions</a></h4>
                </div>
            </div>

            <div style="text-align: center;">
                <button id="continue_btn" type="submit">Continue</button>
            </div>
        </form>



    </div>
</div>