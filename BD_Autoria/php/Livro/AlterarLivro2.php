<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <title>Atualizar2</title>
        <link rel="stylesheet"  href="../../css/Cadastrar.css">
        <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
    </head>
    <body>

    <section>
        <div class="form-box">
            <div class="form-value">
                    <?php 
                        $idlivro = $_POST["idlivro"];       
                        include_once 'Livro.php';
                        $p = new Livro();
                        $p ->setcod_livro($idlivro);
                        $pro_bd = $p -> alterar();
                    
                    ?>

                
                <form action="" method="POST">

                    <?php
                        foreach ($pro_bd as $pro_mostrar) 
                        {
                    ?>
                    <h1>Livro</h1>
                    <h2>Insira os Dados </h2>


                    <div class="inputbox">
                        <i class='bx bx-book'></i>
                        <input name="idlivro" type="text" size="5" value='<?php echo $pro_mostrar[0]?>' maxlength="5"  readonly >
                        <label for="">ID-Livro</label>
                    </div>

                  
                    <div class="inputbox">
                        <i class='bx bx-book'></i>
                        <input name="txttitulo" type="text" size="30" value='<?php echo $pro_mostrar[1]?>' maxlength="30"  >
                        <label for="">Titulo-Livro</label>
                    </div>

                    <div class="inputbox">
                        <i class='bx bxs-discount' ></i>
                        <input name="Isbn" type="text" size="17" value='<?php echo $pro_mostrar[2]?>' maxlength="17" >
                        <label for="">ISBN</label>
                    </div>

                    <div class="inputbox">
                        <i class='bx bxs-discount' ></i>
                        <input name="txtcategoria" type="text" size="30" value='<?php echo $pro_mostrar[3]?>' maxlength="30">
                        <label for="">Categoria-Livro</label>
                    </div>

                    <div class="inputbox">
                        <i class='bx bx-book'></i>
                        <input name="txtidioma" type="text" size="30" value='<?php echo $pro_mostrar[4]?>' maxlength="30"  >
                        <label for="">Idioma-Livro</label>
                    </div>


                    <div class="opcoes">
                        <input type="submit" name="btnalterar" value="Alterar">
                        <input type="reset" name="limpar" value="Limpar">
                        <a href="../../Autoria.html">Voltar</a>
                    </div>

                    <?php }?>

                    <div class="Status">
                        <p><?php
                            extract ($_POST, EXTR_OVERWRITE);
                            if(isset($btnalterar))
                            {
                                include_once 'Livro.php';
                                $pro = new Livro();
                                $pro->setcod_livro($idlivro);
                                $pro->settitulolivro($txttitulo);
                                $pro->setisbn($Isbn);
                                $pro->setcategoria($txtcategoria);
                                $pro->setidioma($txtidioma);
                                echo "Status:" . $pro->alterar2() ;
                                header("location: AlterarLivro.php" );
        
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