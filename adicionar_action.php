<?php
    require 'config.php';
    $name = filter_input(INPUT_POST, 'name');
    $email = filter_input(INPUT_POST, 'email', FILTER_VALIDATE_EMAIL);

    if($name && $email) {

        $sql = $pdo->prepare("SELECT * FROM usuarios WHERE email = :email");
        $sql->bindValue(':email', $email);
        //executei essa primeira query, agora eu tenho que conferir se ela trouxe algum resultado
        $sql->execute();
        //preciso que ela não de nada
        if($sql->rowCount() === 0) {
            // montando um template 
            $sql = $pdo->prepare("INSERT INTO usuarios (nome,email) VALUES (:name, :email)");
            //fazer as associações de cada um dos itens para a substituição
            $sql->bindValue(':name', $name); // substituir o :name pelo valor mandado no momento
            //$sql->bindParam(':email', $email); // substituir o :email pelo próprio parâmetro (variável $email) e vai alterar na query
            $sql->bindValue(':email', $email);
            $sql->execute();

            header('Location: index.php');
            exit;
        } else {
            //Caso tenha algum email igual, eu vou voltar para o meu adicionar
            header('Location:adicionar.php');
            exit;

        } 
    } else {
        header('Location:adicionar.php');
        exit;
    }
?>