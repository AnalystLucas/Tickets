<?php include "head.php" ?>
    
    <form action="../Logar.php" method="post">
        Usuario: <input type="text" name="usuario" >
        <br><br>
        Senha: <input type="password" name="senha">
        <br><br>
        <button type="submit">Entrar</button>
        <button><a href="cadastrar.php">Cadastrar</a></button>
    </form>

<?php include "footer.php" ?>