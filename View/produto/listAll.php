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
        <h3>Lista Produtos</h3>
        
        <a href="../Controller/Controller.php?action=produto&method=newadd">Novo Produto</a>
        
        <table style="width:100%" border=1>
            <tr>
                <th>ID</th>
                <th>COD</th>
                <th>NOME</th>
                <th>DESCRI&Ccedil;&Atilde;O</th>
                <th>VALOR</th>
                <th>A&Ccedil;&Atilde;O</th>
            </tr>   
            <?php foreach ($listProdutos as $produtos) : ?>
                <tr>
                    <th><?php echo $produtos->getId() ?></th>
                    <th><?php echo $produtos->getCod() ?></th>
                    <th><?php echo $produtos->getNome() ?></th>
                    <th><?php echo $produtos->getDescricao() ?></th>
                    <th><?php echo $produtos->getValor() ?></th>
                    <th>
                        <a href="../Controller/Controller.php?action=produto&method=edit&id=<?php echo $produtos->getId() ?>">Editar</a>
                        <a href="../Controller/Controller.php?action=produto&method=delete&id=<?php echo $produtos->getId() ?>">Excluir</a>
                    </th>
                </tr>   
            <?php endforeach; ?>
        </table>
    </body>
</html>
