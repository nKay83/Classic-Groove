<div id="login">
    <div class="login-form">
        <div class="left">
        <form method="post" action="login.php" class="container">
		    <p class="header">Login</p>
		    <input type="text" id="username-field" name="username" placeholder="Username" required>
            <br>
            <div>
		    <input type="password" id="password-field" name="password" placeholder="Password" required>
            <i toogle="#password-field" class="fa-thin fa-eye-slash" id="eyeicon"></i>
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
            <div class="submit"><input type="submit" value="Login">
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
        <div class="right">

        </div>
    </div>
</div>