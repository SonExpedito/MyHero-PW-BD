<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Cadastrar</title>
    <link rel="stylesheet" href="../css/Cadastrar.css">
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
    <script src="../javascript/tratamentoerro.js"> </script>
</head>

<body>

    <section>
        <div class="form-box">
            <div class="form-value">
                <form action="" method="POST">
                    <h1>Produto</h1>
                    <h2>Insira os Dados </h2>

                    <div class="inputbox">
                        <i class='bx bx-book'></i>
                        <input name="txtnome" type="text" size="40" maxlength="40" placeholder="Nome do Produto"
                            required>
                        <label for="">Nome</label>
                    </div>
                    <div class="inputbox">
                        <i class='bx bxs-discount'></i>
                        <input name="txtestoq" type="text" size="10" placeholder="0" required
                            onkeypress="return blockletras(window.event.keyCode)">
                        <label for="">Estoque</label>
                    </div>

                    <div class="opcoes">
                        <input type="submit" name="btnenviar" value="Cadastrar">
                        <input type="reset" name="limpar" value="Limpar">
                        <a href="../Produtos.html">Voltar</a>
                    </div>
                    <div class="Status">
                        <p>
                            <?php
                            extract($_POST, EXTR_OVERWRITE);
                            if (isset($btnenviar)) {
                                include_once 'Produto.php';
                                $pro = new Produto();
                                $pro->setNome($txtnome);
                                $pro->setEstoque($txtestoq);
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