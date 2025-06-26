<!doctype html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Atelier Contact Front</title>
</head>
<body>
<main>
    <section style="text-align: center; margin-top: 100px;">
        <h1>Contact</h1>
        <br>
        <form action="traitement.php" method="post" enctype="application/x-www-form-urlencoded">
            <label for="name">Name:*</label>
            <input type="text" name="name" id="name" maxlength="20" required>
            <br>
            <br>
            <label for="email">Email:*</label>
            <input type="email" name="email" id="email" pattern="^[a-zA-Z0-9._%+-]+@[a-zA-Z0-9.-]+\.[a-zA-Z]{2,}$"
                   required>
            <br>
            <br>
            <label for="message">Message:</label>
            <br>
            <textarea name="message" id="message" cols="30" rows="10" placeholder="Enter your message here!"
            ></textarea>
            <br>
            <br>
            <input type="checkbox" name="cgu" id="cgu" value="yes" required>
            <label for="cgu">I agree to the terms and conditions</label>
            <br>
            <br>
            <input type="submit" value="Submit">
        </form>
    </section>
</main>
</body>
</html>