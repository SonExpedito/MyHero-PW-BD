<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <title>Atualizar2</title>
        <link rel="stylesheet"  href="../css/Cadastrar.css">
        <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
    </head>
    <body>

    <section>
        <div class="form-box">
            <div class="form-value">
                    <?php 
                        $txtid = $_POST["txtid"];
                        include_once 'Produto.php';
                        $p = new Produto();
                        $p ->setId($txtid);
                        $pro_bd = $p -> alterar();
                    
                    ?>

                
                <form action="" method="POST">

                    <?php
                        foreach ($pro_bd as $pro_mostrar) 
                        {
                    ?>
                    <h1>Produto</h1>
                    <h2>Insira os Dados </h2>

                    <div class="inputbox">
                        <i class='bx bx-book'></i>
                        <input name="txtid" type="text" size="40" value='<?php echo $pro_mostrar[0]?>' maxlength="40" readonly >
                        <label for="">ID</label>
                    </div>


                    <div class="inputbox">
                        <i class='bx bx-book'></i>
                        <input name="txtnome" type="text" size="40" value='<?php echo $pro_mostrar[1]?>' maxlength="40"  >
                        <label for="">Nome</label>
                    </div>
                    <div class="inputbox">
                        <i class='bx bxs-discount' ></i>
                        <input name="txtestoq" type="text" size="10" value='<?php echo $pro_mostrar[2]?>' >
                        <label for="">Estoque</label>
                    </div>

                    <div class="opcoes">
                        <input type="submit" name="btnalterar" value="Alterar">
                        <input type="reset" name="limpar" value="Limpar">
                        <a href="../Produtos.html">Voltar</a>
                    </div>

                    <?php }?>

                    <div class="Status">
                        <p><?php
                            extract ($_POST, EXTR_OVERWRITE);
                            if(isset($btnalterar))
                            {
                                include_once 'Produto.php';
                                $pro = new Produto();
                                $pro->setNome($txtnome);
                                $pro->setEstoque($txtestoq);
                                $pro->setId($txtid);
                                $pro->alterar2() ;
                                header("location: Alterar.php" );
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