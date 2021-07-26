<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <title></title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link href="css/style.css" rel="stylesheet">
    </head>
    <body>
    
    <form action="forms mariana.php" method="POST">
            <label for="nome">Quem está contando?</label>:
            <input type="text" name="nome" id="nome"><br>
        
            <label for="contando">Até quando vai contar?</label>
    <select name="contando" id="contando">

    <?php for ($contando = 1; $contando <= 99; $contando ++) { ?>

        <option value="<?= $contando ?>"><?= $contando ?></option>
               <?php
                }
                ?>      
    </select>

    <br>
    Realizar contagem interna?
    <input type="radio" name="realizar" value="sim"> Sim
    <input type="radio" name="realizar" value="não"> Não

    <br>
    
        <input type="submit" value="Enviar">
    </form>

    </body>
</html>