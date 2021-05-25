<?php 
include "../manager_db.php";

$dadosdb = manager_db::query("demandas")->fetchAll();

?>

<?php include "head.php"?>
    <table>
        <thead>
            <tr align="center">
                <th>Nº Ticket</th>
                <th>Unidade</th>
                <th>Categoria</th>
                <th>Solicitante</th>
                <th>Descrição</th>
                <th>Data da Solicitação</th>
                <th>Hora da Solicitação</th>
            </tr>
        </thead>
        
        <tbody>
        <?php foreach($dadosdb as $key => $value){?>
            <tr align="center">
                <td><?php echo $value['id_demanda']?></td>
                <td><?php echo $value['unidade']?></td>
                <td><?php echo $value['categoria']?></td>
                <td><?php echo $value['solicitante']?></td>
                <td><?php echo $value['descricao']?></td>
                <td><?php echo $value['data']?></td>
                <td><?php echo $value['hora']?></td>
            </tr>
        <?php } ?>
        </tbody>
    </table>
<?php include "footer.php" ?>