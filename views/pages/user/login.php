<div id="login">
    <div class="login-form">
        <div class="left">
            <form method="post" action="login.php" class="container">
                <p class="header">Login</p>
                <input type="text" id="username-field" name="username" placeholder="Username" required>
                <br>
                <div>
                    <input type="password" id="password-field" name="password" placeholder="Password" required>
                    <i class="fa-thin fa-eye-slash" id="eyeicon"></i>
                </div>
                <br>
                <div class="bottom">
                    <div class="left-bottom">
                        <input type="checkbox" name="remembercheck" id="check">
                        <label for="check" class="color333">Remember Me</label>
                    </div>
                    <div class="right-bottom">
                        <label><a href="#" class="color333">Forgot password?</a></label>
                    </div>
                </div>
                <div class="submit"><input type="button" value="Login">
                    <p class="color333">Or connect to your</p>
                    <br>
                    <div class="circle-container">
                        <div class="circle"></div>
                        <div class="circle"></div>
                        <div class="circle"></div>
                    </div>
                </div>
            </form>
        </div>
        <div class="right register">
            <form action="" class="container">
                <p class="header">Register</p>
                <div class="name">
                    <input type="text" name="fName" class="fName" placeholder="First name" require>
                    <input type="text" name="lName" class="lName" placeholder="Last name" require>
                </div>
                <input type="text" name="phonenumber" class="text" placeholder="Phone number" require>
                <input type="text" name="username" class="text" placeholder="Username" require>
                <input type="password" name="password" class="text" placeholder="Password" require>
                <input type="password" name="password" class="text" placeholder="Confirm password" require>
                <div class="submit"><input type="submit" value="Register">
                    <p class="color333">Or connect to your</p>
                    <br>
                    <div class="circle-container">
                        <div class="circle"></div>
                        <div class="circle"></div>
                        <div class="circle"></div>
                    </div>
                </div>
            </form>
        </div>
        <div class="poster">
        </div>
    </div>
</div>