<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Cadastrar</title>
    <link rel="stylesheet" href="../../css/Cadastrar.css">
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
    <script src="../../javascript/tratamentoerro.js"> </script>
</head>

<body>

    <section>
        <div class="form-box">
            <div class="form-value">
                <form action="" method="POST">
                    <h1>Livro</h1>
                    <h2>Insira os Dados </h2>

                    <div class="inputbox">
                        <i class='bx bxs-discount'></i>
                        <input name="txtcode" type="text" size="5" maxlength="5" placeholder="Cod_Livro"
                            onkeypress="return blockletras(window.event.keyCode)" required>
                        <label for="">Código Livro</label>
                    </div>

                    <div class="inputbox">
                        <i class='bx bx-book'></i>
                        <input name="txttitulo" type="text" size="30" maxlength="30" placeholder="TituloLivro" required>
                        <label for="">Titulo Livro</label>
                    </div>

                    <div class="inputbox">
                        <i class='bx bx-book'></i>
                        <input name="Isbn" type="text" size="17" maxlength="17" placeholder="ISBN"
                            onkeypress="return blockletras(window.event.keyCode)" required>
                        <label for="">ISBN</label>
                    </div>

                    <div class="inputbox">
                        <i class='bx bxs-flag-alt'></i>
                        <input name="txtcategoria" type="text" size="30" maxlength="30" placeholder="Categoria"
                            required>
                        <label for="">Categoria</label>
                    </div>

                    <div class="inputbox">
                        <i class='bx bxs-flag-alt'></i>
                        <input name="txtidioma" type="text" size="30" maxlength="30" placeholder="Idioma" required>
                        <label for="">Idioma</label>
                    </div>


                    <div class="opcoes">
                        <input type="submit" name="btnenviar" value="Cadastrar">
                        <input type="reset" name="limpar" value="Limpar">
                        <a href="../../Autoria.html">Voltar</a>
                    </div>
                    <div class="Status">
                        <p>
                            <?php
                            extract($_POST, EXTR_OVERWRITE);
                            if (isset($btnenviar)) {
                                include_once 'Livro.php';
                                $pro = new Livro();
                                $pro->setcod_livro($txtcode);
                                $pro->settitulolivro($txttitulo);
                                $pro->setisbn($Isbn);
                                $pro->setcategoria($txtcategoria);
                                $pro->setidioma($txtidioma);
                                echo "Status:" . $pro->salvar();


                            }

                            ?>
                        </p>
                    </div>

                </form>

            </div>
        </div>


    </section>
</body>

</html>