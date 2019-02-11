<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title>Sistema Produto Lista</title>
    </head>
    <body>
        <h3>Novo Produtos</h3>
        
        <form method="POST" action="../Controller/Controller.php?action=produto&method=save">
            <input type="hidden" name="id" value="<?php echo isset($produtos)? $produtos->getId():'';?>">
            <table>
                <tr>
                    <td><label>COD:</label></td>
                    <td><input type="text" name="cod" value="<?php echo isset($produtos)? $produtos->getCod():'';?>"></td>
                </tr>
                <tr>
                    <td><label>NOME:</label></td>
                    <td><input type="text" name="nome" value="<?php echo isset($produtos)? $produtos->getNome():'';?>"></td>
                </tr>
                <tr>
                    <td><label>DESCRI&Ccedil;&Atilde;O:</label></td>
                    <td><textarea name="descricao"><?php echo isset($produtos)? $produtos->getDescricao():'';?></textarea></td>
                </tr>
                <tr>
                    <td><label>VALOR:</label></td>
                    <td><input type="text" name="valor" value="<?php echo isset($produtos)? $produtos->getValor():'';?>"></td>
                </tr>
                <tr>
                    <td><input type="submit" value="Salvar"></td>
                    <td><a href="../Controller/Controller.php?action=produto&method=listAll">Lista de Produtos</a></td>
                </tr>
            </table>
        </form>
    </body>
</html>
