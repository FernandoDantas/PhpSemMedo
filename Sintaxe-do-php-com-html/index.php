<?php include 'funcoes.php';?>
<?php include 'teste.php';?>

<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <meta charset="UTF-8">
        <title>Sintaxe do php com html</title>
    </head>
    <body>
       
        <table>
            <thead>
            <tr>
                <td>Nome</td>
                <td>E-mail</td>
            </tr>
            </thead>
            <tbody>
                <?php foreach ($dadosDapessoa as $pessoa):?>
                <tr>
                    <td><?php echo $pessoa->nome;?></td>
                    <td><?php echo $pessoa->email;?></td>
                </tr> 
                <?php endforeach;?>
            </tbody>
        </table>
        
    </body>
</html>
