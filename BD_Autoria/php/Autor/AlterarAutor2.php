<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Atualizar2</title>
    <link rel="stylesheet" href="../../css/Cadastrar.css">
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
</head>

<body>

    <section>
        <div class="form-box">
            <div class="form-value">
                <?php
                $idautor = $_POST["idautor"];
                include_once 'Autor.php';
                $p = new Autor();
                $p->setcod_autor($idautor);
                $pro_bd = $p->alterar();
                $verifi = count($pro_bd);
                ?>


                <form action="" method="POST">

                    <?php
                    foreach ($pro_bd as $pro_mostrar) {
                        ?>
                        <h1>Autor</h1>
                        <h2>Insira os Dados </h2>


                        <div class="inputbox">
                            <i class='bx bx-book'></i>
                            <input name="idautor" type="text" size="5" value='<?php echo $pro_mostrar[0] ?>' maxlength="5"
                                readonly>
                            <label for="">ID-Autor</label>
                        </div>


                        <div class="inputbox">
                            <i class='bx bx-book'></i>
                            <input name="txtnome" type="text" size="50" value='<?php echo $pro_mostrar[1] ?>' maxlength="50">
                            <label for="">Nome-Autor</label>
                        </div>

                        <div class="inputbox">
                            <i class='bx bxs-discount'></i>
                            <input name="txtsobrenome" type="text" size="50" value='<?php echo $pro_mostrar[2] ?>'
                                maxlength="50">
                            <label for="">Sobrenome-Autor</label>
                        </div>

                        <div class="inputbox">
                            <i class='bx bxs-discount'></i>
                            <input name="datanasc" type="date" size="10" value='<?php echo $pro_mostrar[3] ?>'>
                            <label for="">DataNascimento-Autor</label>
                        </div>

                        <div class="inputbox">
                            <i class='bx bx-book'></i>
                            <input name="txtnacionalidade" type="text" size="40" value='<?php echo $pro_mostrar[4] ?>'
                                maxlength="40">
                            <label for="">Nacionalidade-Autor</label>
                        </div>

                        <div class="inputbox">
                            <i class='bx bxs-discount'></i>
                            <input name="emailtxt" type="text" size="50" value='<?php echo $pro_mostrar[5] ?>'
                                maxlength="50">
                            <label for="">Email-Autor</label>
                        </div>

                        <div class="opcoes">
                            <input type="submit" name="btnalterar" value="Alterar">
                            <input type="reset" name="limpar" value="Limpar">
                            <a href="../../Autoria.html">Voltar</a>
                        </div>

                    <?php } ?>

                    <div class="Status">
                        <p>
                            <?php
                            extract($_POST, EXTR_OVERWRITE);
                            if (isset($btnalterar)) {
                                include_once 'Autor.php';
                                $pro = new Autor();
                                $pro->setcod_autor($idautor);
                                $pro->setnomeautor($txtnome);
                                $pro->setsobrenome($txtsobrenome);
                                $pro->setdatanasci($datanasc);
                                $pro->setnacionalidade($txtnacionalidade);
                                $pro->setemail($emailtxt);
                                $pro->alterar2();
                                echo '<script>setTimeout(function() { window.location.href = "AlterarAutor.php"; });</script>';


                            }

                            if ($verifi == 0) {
                                echo 'Não existe nada com esse "ID". <br> Redirecionando automaticamente.';
                                echo '<script>setTimeout(function() { window.location.href = "AlterarAutor.php"; }, 2000);</script>';
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