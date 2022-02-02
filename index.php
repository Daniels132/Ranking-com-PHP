<!DOCTYPE html>
<html lang="pt-br">
<head>
    <?php
    include('query.php');
    ?>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge"> 
    <link rel="stylesheet" href="estilo.css">
    <title>Document</title>
    
</head>
<body>
    <div class="principal">
        <div class="conteudo">
            <table width="400px" border="0" cellspacing="0">
                <form action="<?=$_SERVER["PHP_SELF"]?>" method="POST">
                <tr>
                    <th><input type="text" name ="idMovimento" id="idMovimento" placeholder="ID" class="movimento">ID Movimento</th>
                    <th><strong>Posição</strong></th>
                    <th><strong>Usuario</strong></th>
                    <th><strong>Movimento</strong></th>
                    <th><strong>Recorde Pessoal</strong></th>
                    <th><strong>Data</strong></th>
                    <input type ="submit" class="btn"></input>
                </tr>
</form>
                <?php
                    while ($aux_query = $result->fetch_assoc()) 
                    {
                        echo '<tr>';
                        echo '  <td class ="td">'.$aux_query["id"].'</td>';
                        echo '  <td class ="td">'.$aux_query["Posicao"].'º</td>';
                        echo '  <td class ="td">'.$aux_query["usuario"].'</td>';
                        echo '  <td class ="td">'.$aux_query["movimento"].'</td>';
                        echo '  <td class ="td">'.$aux_query["recorde"].'</td>';
                        echo '  <td class ="td">'.$aux_query["date"].'</td>';
                        echo '</tr>';
                    }
                    ?>     
            </table>
        </div>
    </div>
    
</body>
</html>