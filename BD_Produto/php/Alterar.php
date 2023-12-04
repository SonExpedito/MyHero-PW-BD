<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Atualizar</title>
    <link rel="stylesheet" href="../css/alterar.css">
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>

    <script language=javascript>
        function blockletras(keypress) {

            if (keypress >= 48 && keypress <= 57) {
                return true;

            }
            else {
                return false;
            }
        };

        function MascaraTelefone(keypress) {
            if (keypress >= 48 && keypress <= 57) {
                separador1 = '(';
                separador2 - ')';
                separador3 = '-';
                conjunto1 = 0;
                conjunto2 = 3;
                conjunto3 = 9;
                if (eval(document.alterar.telefone.value.length) == conjunto1) {
                    document.alterar.telefone.value = document.alterar.telefone.value + separador1;
                }

                if (eval(document.alterar.telefone.value.length) == conjunto2) {
                    document.alterar.telefone.value.length = document.alterar.telefone.value.length + separador2;

                }

                if (eval(document.alterar.telefone.value.length) == conjunto2) {
                    document.alterar.telefone.value.length = document.alterar.telefone.value.length + separador2;

                }

                return true;

            }
            else {
                return false;
            }
        }

    </script>

</head>

<body>

    <section>
        <div class="form-box">
            <div class="form-value">
                <form action="Alterar2.php" method="POST">
                    <h1>Produto</h1>
                    <h2>Atualizar </h2>

                    <div class="inputbox">
                        <i class='bx bx-book'></i>
                        <input name="txtid" type="text" size="40" maxlength="40" placeholder="ID do Produto"
                            onkeypress="return blockletras(window.event.keyCode)" required>
                        <label for="">ID</label>
                    </div>


                    <div class="opcoes">
                        <input type="submit" name="btnenviar" value="Consultar">
                        <input type="reset" name="limpar" value="Limpar">
                        <a href="../Produtos.html">Voltar</a>
                    </div>


                </form>

            </div>
        </div>


    </section>
</body>

</html>