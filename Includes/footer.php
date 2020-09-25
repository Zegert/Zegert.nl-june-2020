<footer>
    <label for="btn" class="label">&copy; 2020 - Zegert Boele - Alle rechten voorbehouden</label>
    <input type="checkbox" id="btn" />
    <div class="overlay">
        <div class="popup">
            <span class="title">Log in</span>
            <form action="login.php" method="POST">
                <input type="text" placeholder="Gebruikersnaam..." maxlength="20" name="inputUsername" id="inputUsername">
                <input type="password" placeholder="Wachtwoord..." maxlength="20" name="inputPassword" id="inputPassword">
                <div class="g-recaptcha brochure__form__captcha" data-sitekey="6LdrTdAZAAAAAMD2M-YLMKORBOJF1rzcmfDEjIeR"></div>
                <input type="submit" value="Log in" class="g-recaptcha" data-sitekey="6LdrTdAZAAAAAMD2M-YLMKORBOJF1rzcmfDEjIeR" data-callback="onSubmit" data-action="submit">
            </form>
        </div>
    </div>
</footer>
<script src="https://www.google.com/recaptcha/api.js"></script>
<script>
   function onSubmit(token) {
     document.getElementById("demo-form").submit();
   }
 </script>