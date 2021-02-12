<?php
    require 'config.php';
    $name = filter_input(INPUT_POST, 'name');
    $sex = filter_input(INPUT_POST, 'gender');
    $email = filter_input(INPUT_POST, 'email', FILTER_VALIDATE_EMAIL);

    if($name && $sex && $email) {
        // montando um template 
        $sql = $pdo->prepare("INSERT INTO usuarios (nome,sexo,email) VALUES (:name, :gender, :email)");
        //fazer as associações de cada um dos itens para a substituição
        $sql->bindValue(':name', $name); // substituir o :name pelo valor mandado no momento
        //$sql->bindParam(':email', $email); // substituir o :email pelo próprio parâmetro (variável $email) e vai alterar na query
        $sql->bindValue(':gender', $gender);
        $sql->bindValue(':email', $email);
        $sql->execute();

        header('Location: index.php');
        exit;
    } else {
        header('Location:adicionar.php');
        exit;
    }

?>