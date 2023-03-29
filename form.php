<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Commande</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css">
</head>
<body>
<form  action="thanks.php"  method="post">
    <div>
      <label  for="nom">Nom :</label>
      <input  type="text"  id="nom"  name="user_name" required>
    </div>
    <div>
      <label  for="courriel">Courriel :</label>
        <input  type="email"  id="courriel"  name="user_email" required>
    </div>
    <div>
      <label  for="phonenumber">Numéro de téléphone :</label>
      <input  type="tel"  id="number"  name="phone_number" required>
    </div>
    <div>
      <label  for="message">Message :</label>
      <textarea  id="message"  name="user_message" required></textarea>
    </div>
    <label for="choix-select">choisis:</label>

<select name="theme" id="theme_select" required>
    <option value="">choix thématiques:</option>
    <option value="j">allumer</option>
    <option value="o">le</option>
    <option value="h">feu</option>
    <option value="n">allumerrrrr</option>
    <option value="n">leee</option>
    <option value="y">feuuuuu</option>
</select>

    <div  class="button">
      <button  type="submit">Envoyer votre message</button>
    </div>
  </form>

</body>
</html>