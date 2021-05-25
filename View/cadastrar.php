<?php include "head.php" ?>
    <div>
        Cadastro de Usuário
    </div>
    <br>
    <form action="../cadastrar_login.php" method="POST">
        usuario: <input type="text" name="usuario">
        <br><br>
        senha: <input type="password" name="senha">
        <br><br>
        nome: <input type="text" name="nome">
        <br><br>
        <button type="submit">Cadastrar</button>
    </form>
<?php include "footer.php" ?>