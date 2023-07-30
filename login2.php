<form action="login.php" method="POST">
        <fieldset>
            <legend><b>Login</b></legend>
            <br>
            <div class="inputbox">
                <input type="email" name="email" id="email-login" class="InputUser" required>
                <label for="email-login" class="labelInput">Email</label>
            </div>
            <br><br>
            <div class="inputbox">
                <input type="password" name="senha" id="senha-login" class="InputUser" required>
                <label for="senha-login" class="labelInput">Senha</label>
                <br><br>
            </div>
            <input type="submit" name="login" id="login" class="button" value="Entrar">
        </fieldset>
    </form>
    <?php
    if (isset($erro)) {
        echo "<p class='erro'>$erro</p>";
    }
    ?>
