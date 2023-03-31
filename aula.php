<!DOCTYPE html>

<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
        <link href="css/default.css" rel="stylesheet" type="text/css"/>
    </head>
    <body>
        <h2>Sistema de ensino</h2>
        <form method="get" action="index.php">
        <table>
            <tr>
                <td>Matricula (número):</td>
                <td>
                    <input type="number" name="matricula" placeholder="Matricula">
                </td>
                <td></td>

            </tr>       
            <tr>
                <td>Nome do Aluno:</td>
                <td>
                    <input type="text" name="nome" placeholder="Nome">
                </td>
                <td></td>

            </tr>                       
            <tr>
                <td>Turmas:</td>
                <td>
                    <input type="radio" name="411" value="411"><label>411</label>
                    <input type="radio" name="412" value="412"><label>412</label>
                    <input type="radio" name="413" value="413"><label>413</label><br>
                    <input type="radio" name="421" value="421"><label>421</label>
                    <input type="radio" name="422" value="422"><label>422</label>
                    <input type="radio" name="423" value="423"><label>423</label><br>
                    <input type="radio" name="431" value="431"><label>431</label>
                    <input type="radio" name="432" value="432"><label>432</label>
                    <input type="radio" name="433" value="433"><label>433</label>
                </td>
                <td></td>

            </tr>
            <tr>
                <td>Telefone(responsável):</td>
                <td>
                    <input type="text" name="telefone" placeholder="telefone">
                </td>

            </tr>
            <tr>
                <td>Endereço:</td>
                <td>
                    <input type="text" name="endereco" placeholder="endereço">
                </td>
                <td></td>

            </tr>  
            <tr>
                <td>Estado:</td>
                <td>
                    <select>
                        <option name="" value="">Selecione um Estado</option>
                        <option name="RS" value="RS">Rio Grande do Sul</option>
                        <option name="RJ" value="RJ">Rio de Janeiro</option>
                        <option name="AC" value="AC">Acre</option>
                        <option name="MA" value="MA">Maranhão</option>
                        <option name="SP" value="SP">São Paulo</option>

                    </select>
                </td>
                <td></td>

            </tr>  
             <tr>
                <td></td>
                <td>
                    <br>
                    <input type="submit" value="Cadastrar Aluno">
                    <input type="reset" value="Limpar campos">
                </td>
                <td></td>

            </tr>  
        </table> 
            
        <?php
        if($_GET){
            
            $nome = $_GET['nome'];
            echo("seu nome é:".$nome);
               
        }
        ?>
            </form>
    </body>
</html>
