<h1>ADICIONAR USUÁRIO</h1>
<form action="adicionar_action.php" method="post">
    <label for="">
        Nome:<br>
        <input type="text" name="name">
    </label><br><br>

    <label for="">
        Sexo:<br>
        <input type="radio" id="male" name="gender" value="male">
        <label for="male">M</label><br>
        <input type="radio" id="female" name="gender" value="female">
        <label for="female">F</label><br>
    </label><br><br>

    <label for="">
        Email:<br>
        <input type="email" name="email">
    </label><br><br>

    <input type="submit" value="Adicionar">

</form>