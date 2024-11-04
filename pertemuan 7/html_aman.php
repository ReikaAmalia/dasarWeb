<!DOCTYPE html>
<html>
    <head>
        <title>Form Input</title>
    </head>
    <body>
        <h2>Form Input</h2>
        <form method="post" action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?>">
            <label for="input">Masukkan Teks:</label>
            <input type="text" id="input" name="input" required><br><br>

            <label for="email">Masukkan Email:</label>
            <input type="email" id="email" name="email" required><br><br>

            <input type="submit" value="submit">
        </form>

        <?php
        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            
            $input = $_POST['input'];
            $email = $_POST['email'];

            
            $input = htmlspecialchars($input, ENT_QUOTES, 'UTF-8');

            // Memeriksa apakah input adalah email yang valid
            if (filter_var($email, FILTER_VALIDATE_EMAIL)) {
                
                echo "<h3>Hasil Teks:</h3>";
                echo $input;

                echo "<h3>Hasil Email yang Valid:</h3>";
                echo $email;
            } else {
                
                echo "<h3>Email tidak valid. Silakan masukkan email yang benar.</h3>";
            }
        }
        ?>
    </body>
</html>
