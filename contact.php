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
            <label for="name"><strong>Votre Nom* :</strong></label>
            <input type="text" name="name" id="name" maxlength="20" placeholder="Pierre Dupont" required>
            <br>
            <br>
            <label for="email"><strong>Votre Email* :</strong></label>
            <input type="email" name="email" id="email" pattern="^[a-zA-Z0-9._%+-]+@[a-zA-Z0-9.-]+\.[a-zA-Z]{2,}$"
                   required
            >
            <br>
            <br>
            <label for="message"><strong>Votre Message* :</strong></label>
            <br>
            <textarea name="message" id="message" cols="30" rows="10" placeholder="Entrez votre message ici!" required
            ></textarea>
            <br>
            <br>
            <input type="checkbox" name="cgu" id="cgu" value="consent" required>
            <label for="cgu">Accepter les conditions générales d'utilisation</label>
            <br>
            <br>
            <input type="submit" value="Envoyer">
        </form>
    </section>
</main>
</body>
</html>