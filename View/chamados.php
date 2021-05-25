<?php
session_start();
$nome = $_SESSION['Nome'];
if(isset($_SESSION['Logado']) == false){

    header("Location: Index.php");

}
?>
<?php include "head.php" ?>
    <div>
        Tickets Demandas Campinas
        <p> Bem-vindo(a) <?php echo $nome; ?></p>
    </div>
    <br><br>
    <button><a href="../Logout.php">Sair</a></button>
    <br><br>
    <div>
        <form action="../Abrir_ticket.php" method="POST">

            Unidade: 
            <select name="unidade" id="slct_uni">
            <Option value="Av. Brasil">Av. Brasil</Option>
            <Option value="Centro">Centro</Option>
            <Option value="Nova Campinas">Nova Campinas</Option>
            <Option value="Taquaral">Taquaral</Option>
            <Option value="Amoreiras">Amoreiras</Option>
            <Option value="Barão Geraldo">Barão Geraldo</Option>
            <Option value="Madre Theodora">Madre Theodora</Option>
            </select>
            <br>
            Solicitante: <input type="text" name="solicitante">
            <br>
            Categoria: <input type="text" name="categoria">
            <br>
            Descrição:<br>
            <textarea name="descricao" id="desc" cols="30" rows="10"></textarea>
            <br>

            <div name="data_hora" hidden>
            <input type="text" name="data" value="<?php echo date('d/m/Y')?>">
            <input type="text" name="hora" value="<?php echo date('H:i:s')?>">
            </div>

            <button type="submit">Abrir Ticket</button>
            


        </form>
    </div>
<?php include "footer.php" ?>