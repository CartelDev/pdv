<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Page</title>
</head>
<body>
    <h1>cheguei aqui</h1>
    <form action="{{Route('paises.store')}}" method="post">
        @csrf
        <table>
            <tr>
                <td>
                    <input type="text" name="pais" id="" placeholder="pais"><br>
                    <input type="text" name="sigla_pais" id="" placeholder="sigla do pais"><br>
                    <input type="text" name="observacao_pais" id="" placeholder="observação"><br>
                </td>
                <td>
                    <input type="text" name="estado" id="" placeholder="estado"><br>
                    <input type="text" name="sigla_estado" id="" placeholder="sigla do estado"><br>
                    <input type="text" name="observacao_estado" id="" placeholder="observação"><br>
                </td>
                <td>
                    <input type="text" name="nome_cidade" id="" placeholder="cidade"><br>
                    <input type="text" name="sigla_cidade" id="" placeholder="sigla do cidade"><br>
                    <input type="text" name="observacao_cidade" id="" placeholder="observação"><br>
                </td>
                <td>
                    <input type="text" name="nome_rua" id="" placeholder="rua"><br>
                    <input type="text" name="cep_rua" id="" placeholder="cep"><br>
                    <input type="text" name="observacao_rua" id="" placeholder="observação"><br>
                    
                </td>
            </tr>
        </table>
        <br><br><input type="submit" value="enviar"><br>
    </form>

</body>
</html>