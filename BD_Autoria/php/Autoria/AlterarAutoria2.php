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
                $idlivro = $_POST["idlivro"];
                $idautor = $_POST["idautor"];
                include_once 'Autoria.php';
                $p = new Autoria();
                $p->setcod_livro($idlivro);
                $p->setcod_autor($idautor);
                $pro_bd = $p->alterar();
                $verifi = count($pro_bd);



                ?>


                <form action="" method="POST">

                    <?php
                    foreach ($pro_bd as $pro_mostrar) {
                        ?>
                        <h1>Autoria</h1>
                        <h2>Insira os Dados </h2>

                        <div class="inputbox">
                            <i class='bx bx-book'></i>
                            <input name="idlivro" type="text" size="40" value='<?php echo $pro_mostrar[0] ?>' maxlength="40"
                                readonly>
                            <label for="">ID-Livro</label>
                        </div>

                        <div class="inputbox">
                            <i class='bx bx-book'></i>
                            <input name="idautor" type="text" size="40" value='<?php echo $pro_mostrar[1] ?>' maxlength="40"
                                readonly>
                            <label for="">ID-Autor</label>
                        </div>


                        <div class="inputbox">
                            <i class='bx bx-book'></i>
                            <input name="txteditora" type="text" size="40" value='<?php echo $pro_mostrar[2] ?>'
                                maxlength="40">
                            <label for="">Editora</label>
                        </div>
                        <div class="inputbox">
                            <i class='bx bxs-discount'></i>
                            <input name="datalanc" type="date" size="10" value='<?php echo $pro_mostrar[3] ?>'>
                            <label for="">Data-Lançamento</label>
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
                                include_once 'Autoria.php';
                                $pro = new Autoria();
                                $pro->setcod_autor($idautor);
                                $pro->setcod_livro($idlivro);
                                $pro->seteditora($txteditora);
                                $pro->setlancamento($datalanc);
                                $pro->alterar2();
                                echo '<script>setTimeout(function() { window.location.href = "AlterarAutoria.php"; });</script>';

                            }

                            if ($verifi == 0) {
                                echo 'Não existe nada com esses "ID". <br> Redirecionando automaticamente.';
                                echo '<script>setTimeout(function() { window.location.href = "AlterarAutoria.php"; }, 2000);</script>';
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