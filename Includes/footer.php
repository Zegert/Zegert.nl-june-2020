<footer>
    <label for="btn" class="label">&copy; 2020 - Zegert Boele - Alle rechten voorbehouden</label>
    <input type="checkbox" id="btn" />
    <div class="overlay">
        <div class="popup">
            <span class="title">Log in</span>
            <form action="login.php" method="POST">
                <input type="text" placeholder="Gebruikersnaam..." maxlength="20" name="inputUsername" id="inputUsername">
                <input type="password" placeholder="Wachtwoord..." maxlength="20" name="inputPassword" id="inputPassword">
                <input type="submit" value="Log in">
            </form>
        </div>
    </div>
</footer>