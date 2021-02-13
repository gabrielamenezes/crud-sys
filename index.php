<?php
    // R -> READ;
    require('config.php');
    $lista = [];
    //peguei os usuarios
    $sql = $pdo->query("SELECT * FROM usuarios");


    //verificar se tem algum usuario
    if($sql->rowCount() > 0) {
        $lista = $sql->fetchAll(PDO::FETCH_ASSOC);
    }
?>

<a href="adicionar.php">ADICIONAR USUÁRIO</a>
<table border="1" width="100%">
    <tr>
        <th>ID</th>
        <th>NOME</th>
        <th>EMAIL</th>
        <th>AÇÕES</th>
    </tr>

    <?php foreach($lista as $tupla): ?>
        <tr>
            <td><?=$tupla['id'];?></td>
            <td><?=$tupla['nome'];?></td>
            <td><?=$tupla['email'];?></td>
            <td>
                <a href="editar.php?id=<?=$tupla['id'];?>">[ Editar ]</a>
                <a href="excluir.php?id=<?=$tupla['id'];?>">[ Excluir ]</a>
            </td>

        </tr>
    <?php endforeach; ?>
</table>