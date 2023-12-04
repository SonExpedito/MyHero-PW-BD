<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Atualizar</title>
    <link rel="stylesheet" href="../../css/alterar.css">
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
    <script src="../../javascript/tratamentoerro.js"> </script>
</head>

<body>

    <section>
        <div class="form-box">
            <div class="form-value">
                <form action="AlterarAutor2.php" method="POST">
                    <h1>Autor</h1>
                    <h2>Atualizar </h2>



                    <div class="inputbox">
                        <i class='bx bx-book'></i>
                        <input name="idautor" type="text" size="40" maxlength="40" placeholder="Cod-Autor" required
                            onkeypress="return blockletras(window.event.keyCode)">
                        <label for="">Cod-Autor</label>
                    </div>




                    <div class="opcoes">
                        <input type="submit" name="btnenviar" value="Consultar">
                        <input type="reset" name="limpar" value="Limpar">
                        <a href="../../Autoria.html">Voltar</a>
                    </div>


                </form>

            </div>
        </div>


    </section>
</body>

</html>