<?php

$data = array_map('trim',$_POST);
$data = array_map('htmlentities', $data);

$errors = [];

    if($_SERVER['REQUEST_METHOD'] === 'POST') {
        // nettoyage et validation des données soumises via le formulaire 
        if(!isset($_POST['user_name']) || trim($_POST['user_name']) === '') 
            $errors[] = "Le nom est obligatoire";
        if(!isset($_POST['user_email']) || trim($_POST['user_email']) === '') 
            $errors[] = "L'adresse mail est obligatoire";
        if(!isset($_POST['phone_number']) || trim($_POST['phone_number']) === '') 
            $errors[] = "La numéro est obligatoire";
        if(!isset($_POST['user_message']) || trim($_POST['user_message']) === '') 
            $errors[] = "La message est obligatoire";
        if(!isset($_POST['theme']) || trim($_POST['theme']) === '') 
            $errors[] = "La thème est obligatoire";
        
        if(!filter_var($_POST['user_email'], FILTER_VALIDATE_EMAIL)){
            $errors[] = "Une adresse mail valide est obligatoire";
        }
         
        if(empty($errors)) {
            echo 'Merci '.$data['user_name']. 'de nous avoir contacté à propos de '.$data['theme'].' 
               Un de nos conseillers vous contactera soit à l’adresse '.$data['user_email']. 'ou par téléphone au '.$data['phone_number'].'dans les plus brefs délais pour traiter votre demande :'.$data['user_message']; 
        }


}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<?php  
      if (count($errors) > 0) : ?>
        <div class="attention">
            <ul>
                <?php foreach ($errors as $error) : ?>
                    <li><?= $error ?></li>
                <?php endforeach; ?>
            </ul>
        </div>
<?php endif; ?>    
</body>
</html>











