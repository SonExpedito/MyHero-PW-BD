<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Atualizar2</title>
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
                <?php
                $txtid = $_POST["txtid"];
                include_once 'Produto.php';
                $p = new Produto();
                $p->setId($txtid);
                $pro_bd = $p->alterar();
                $verifi = count($pro_bd);
                ?>


                <form action="" method="POST">

                    <?php
                    foreach ($pro_bd as $pro_mostrar) {
                        ?>
                        <h1>Produto</h1>
                        <h2>Insira os Dados </h2>

                        <div class="inputbox">
                            <i class='bx bx-book'></i>
                            <input name="txtid" type="text" size="40" value='<?php echo $pro_mostrar[0] ?>' maxlength="40"
                                readonly>
                            <label for="">ID</label>
                        </div>


                        <div class="inputbox">
                            <i class='bx bx-book'></i>
                            <input name="txtnome" type="text" size="40" value='<?php echo $pro_mostrar[1] ?>'
                                maxlength="40">
                            <label for="">Nome</label>
                        </div>
                        <div class="inputbox">
                            <i class='bx bxs-discount'></i>
                            <input name="txtestoq" type="text" size="10" value='<?php echo $pro_mostrar[2] ?>'
                                onkeypress="return blockletras(window.event.keyCode)">
                            <label for="">Estoque</label>
                        </div>

                        <div class="opcoes">
                            <input type="submit" name="btnalterar" value="Alterar">
                            <input type="reset" name="limpar" value="Limpar">
                            <a href="../Produtos.html">Voltar</a>
                        </div>

                    <?php } ?>

                    <div class="Status">
                        <p>
                            <?php
                            extract($_POST, EXTR_OVERWRITE);
                            if (isset($btnalterar)) {
                                include_once 'Produto.php';
                                $pro = new Produto();
                                $pro->setNome($txtnome);
                                $pro->setEstoque($txtestoq);
                                $pro->setId($txtid);
                                $pro->alterar2();
                                echo '<script>setTimeout(function() { window.location.href = "Alterar.php"; });</script>';
                            }

                            if ($verifi == 0) {
                                echo 'Não existe nada com esse "ID". <br> Redirecionando automaticamente.';
                                echo '<script>setTimeout(function() { window.location.href = "Alterar.php"; }, 2000);</script>';
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