<?php
require_once 'Database.php';
require_once 'User.php';

if (isset($_POST['register'])) {
    $db = new Database();
    $user = new User($_POST['nom'], $_POST['email'], $_POST['numero'], $_POST['password'],$_POST['confi_psr'],'', $db);
    
    if($_POST['password'] === $_POST['confi_psr'] ){
        $user->register();
    }else{
        echo 'Erreur,confirmer bien votre mots de passe';
    }
    
}
?>
