<?php

    include 'src/templates/header.tpl.php';
    
    ?>

    <main>
    <h1>Register</h1>
    <form class="form" method="POST" action="/regaction">
        <p>Sign up please...</p>
        <div class="form-row">
        <input type="text" name="uname" placeholder="uname">
        </div>
        <div class="form-row">
        <input type="text" name="email" placeholder="email">
        </div>
        <div class="form-row">
        <input type="password" name="passw" placeholder="Password">
        </div>
        <div class="form-row">
        <input type="password" name="passw2" placeholder="Repeat password">
        </div>
        <div class="form-row">
        <input type="submit" value="Register">
        </div>
        <div class="form-row"><input type="checkbox" name="remember" id="remember" <?php if(isset($_COOKIE["remember"])) { ?> checked <?php } ?> />
        <label for="remember-me">Remember me</label>
        </div>

    </form>
    </main>

    <?php
    include 'src/templates/footer.tpl.php';
    ?>