<div id="login">
    <div class="login-form">
        <div class="left">
            <form class="container">
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
                <div class="submit"><input type="button" value="Login" onclick="login()">
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
                <input type="text" name="Name" class="text name" placeholder="Name">
                <input type="text" name="phonenumber" class="text phonenumber" placeholder="Phone number">
                <input type="text" name="username" class="text username" placeholder="Username">
                <input type="password" name="password" class="text password" placeholder="Password">
                <input type="password" name="password" class="text confirmPassword" placeholder="Confirm password">
                <div class="submit"><input type="button" value="Register" onclick="register()">
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