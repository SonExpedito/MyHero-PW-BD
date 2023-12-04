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
                    <h1>Autor</h1>
                    <h2>Insira os Dados </h2>

                    <div class="inputbox">
                        <i class='bx bxs-discount'></i>
                        <input name="txtcode" type="text" size="5" maxlength="5" placeholder="Cod_Autor"
                            onkeypress="return blockletras(window.event.keyCode)" required>
                        <label for="">Código Autor</label>
                    </div>

                    <div class="inputbox">
                        <i class='bx bx-book'></i>
                        <input name="txtnome" type="text" size="50" maxlength="50" placeholder="Nome-Autor" required>
                        <label for="">Nome</label>
                    </div>

                    <div class="inputbox">
                        <i class='bx bx-book'></i>
                        <input name="txtsobrenome" type="text" size="50" maxlength="50"
                            placeholder="Sobrenome do Autor" required>
                        <label for="">Sobrenome</label>
                    </div>

                    <div class="inputbox">
                        <input name="datanasc" type="date" placeholder="10/10/1945" required>
                        <label for="">Data-Nascimento</label>
                    </div>

                    <div class="inputbox">
                        <i class='bx bxs-flag-alt'></i>
                        <input name="txtnacionalidade" type="text" size="40" maxlength="40" placeholder="Nacionalidade" required>
                        <label for="">Nacionalidade</label>
                    </div>

                    <div class="inputbox">
                        <i class='bx bxs-envelope'></i>
                        <input name="txtEmail" type="Email" size="50" maxlength="50" placeholder="thomastur@gmail.com" required>
                        <label for="">Email</label>
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
                                include_once 'Autor.php';
                                $pro = new Autor();
                                $pro->setcod_autor($txtcode);
                                $pro->setnomeautor($txtnome);
                                $pro->setsobrenome($txtsobrenome);
                                $pro->setdatanasci($datanasc);
                                $pro->setnacionalidade($txtnacionalidade);
                                $pro->setemail($txtEmail);
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