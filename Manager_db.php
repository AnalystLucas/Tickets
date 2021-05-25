<?php

include "Config/conexao.php";

class manager_db {
    public static function to_save($dados, $tabela){
        
        //Criar String MYSQL
        $interacao = true;

        foreach($dados as $key => $value){
            
            
            if($interacao == true){
                //interação é para verificar se é a primeira vez que esta passando pelo laço
                //após passar pelo laço e passado o valor de falso para não repetir o "(", sendo assim continuar a gerar a string para o bd.

                $interacao = false;
                
                //variaveis que vão auxiliar tanto a coluna e a linha
                //col seria referente aos nomes das colunas no banco e a linha é os dados que serão preenchidos
                $aux = "";
                $aux2 = "";
                
                $col = "(`$key`";
                $linha = "('$value'";
            }else{
                $aux .=",`$key`";
                $aux2 .= ",'$value'";
            }
            //finalizando a string MYSQL montando a coluna e linha que são nosso campos do banco e os dados que vão ser preenchidos
            $campos = $col . $aux . ")";
            $valores = $linha . $aux2 . ")";
        }
        
        $sql = "INSERT INTO `$tabela`" . $campos . " VALUES " . $valores;

        $stmt = conexao::Db()->prepare($sql);
        $stmt->execute();

        return $stmt;

    }
    public static function query($tabela){
        
        $sql = "SELECT * FROM `$tabela`";

        $return = conexao::Db()->query($sql);
        // $return = $stmt->fetchall();

        return $return;

    }
}