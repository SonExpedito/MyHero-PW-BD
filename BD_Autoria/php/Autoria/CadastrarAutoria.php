<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <title>Cadastrar</title>
        <link rel="stylesheet"  href="../../css/Cadastrar.css">
        <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
    </head>
    <body>

    <section>
        <div class="form-box">
            <div class="form-value">
                <form action="" method="POST">
                    <h1>Autor</h1>
                    <h2>Insira os Dados </h2>

                    <div class="inputbox">
                        <i class='bx bxs-discount' ></i>                      
                        <input name="txtcodeautor" type="text" size="11" maxlength="11" placeholder="Cod_Autor">
                        <label for="">Código Autor</label>
                    </div>

                    <div class="inputbox">
                    <i class='bx bx-book'></i>
                        <input name="txtcodelivro" type="text" size="11" maxlength="11" placeholder="Cod-Livro">
                        <label for="">Código Livro</label>
                    </div>

                    <div class="inputbox">
                        <i class='bx bx-book'></i>
                        <input name="txteditora" type="text" size="50" maxlength="50" placeholder="Panini">
                        <label for="">Editora</label>
                    </div>

                    <div class="inputbox">
                        <input name="datalanc" type="date"  placeholder="10/10/1945">
                        <label for="">Data-Lançamento</label>
                    </div>



                    <div class="opcoes">
                        <input type="submit" name="btnenviar" value="Cadastrar">
                        <input type="reset" name="limpar" value="Limpar">
                        <a href="../../Autoria.html">Voltar</a>
                    </div>
                    <div class="Status">
                        <p><?php
                            extract ($_POST, EXTR_OVERWRITE);
                            if(isset($btnenviar))
                            {
                                include_once 'Autoria.php';
                                $pro = new Autoria();
                                $pro->setcod_autor($txtcodeautor);
                                $pro->setcod_livro($txtcodelivro);
                                $pro->seteditora($txteditora);
                                $pro->setlancamento($datalanc);
                                echo "Status:" . $pro->salvar() ;
        
        
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