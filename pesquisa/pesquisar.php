<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet"  href="css/menu.css">
    <link rel="stylesheet"  href="css/pesquisa.css">
    <title>Pesquisar</title>

    <link rel="icon" type="image/x-icon" href="img/icone.ico">
    <link href='https://unpkg.com/boxicons@2.1.1/css/boxicons.min.css' rel='stylesheet'>
</head>
<body>
<nav class="sidebar close">
                <header>
                    <div class="image-text">
                        <span class="image">
                            <img src="img/logo.png" alt="logo">
                        </span>

                        <div class="text header-text">
                            <span class="title">Menu</span>
                            <span class="subtitle">Trabalho ETEC</span>
                        </div>

    
                    </div>

                    <i class='bx bx-chevron-right toggle'></i>
                </header>
             <!--Items navbar-->
                <div class="menu-bar">
                    <div class="menu">
                        <ul class="menu-links">
                            <li class="nav-links">
                                <a href="#">
                                    <i class='bx bx-search icons'></i>
                                    <span class="text nav-text">Pesquisar</span>
                                </a>
                            </li>

                            <li class="nav-links">
                                <a href="../home/Index.html">
                                    <i class='bx bx-home-alt icons'></i>
                                    <span class="text nav-text">Home</span>
                                </a>
                            </li>

                            <li class="nav-links">
                                <a href="../BD_Produto/Produtos.html">
                                    <i class='bx bx-wallet icons'></i>
                                    <span class="text nav-text">Produto</span>
                                </a>
                            </li>

                            <li class="nav-links">
                                <a href="../BD_Autoria/Autoria.html">
                                    <i class='bx bx-book icons'></i>
                                    <span class="text nav-text">Autoria</span>
                                </a>
                            </li>

                            

                            <li class="mode">
                                 <div class="moon-sun">
                                        <i class="bx bx-moon icons moon"></i>
                                        <i class="bx bx-sun icons sun"></i>
                                 </div>
                                 <span class="mode-text text">Dark-Light</span>

                                 <div class="toggle-switch">
                                        <span class="switch"></span>
                                 </div>

                            </li>

                        </ul>

                    </div>

                </div>
           </nav>

           <script src="javascript/menuzinho.js"></script>

           <section class="home">
                            <h1>Pesquise</h1>
                            <br>
                            <form name="pesquisa"  method = "POST" action = "">

					            <div class="form-holder">
						        <span class="lnr lnr-user"></span>
						        <input type="text" name="txtnome" class="form-control" placeholder="Busque pelo nome">
					            </div>
					            <button name="btnpesquisar" type="submit" value="Pesquisar">Pesquisar</button>
					            <button name="limpar" type="reset" value="Limpar">Limpar</button>
				        </form>

                <div class="cardizin">
                   <div class="Cards">
                        <div class="conteudo">
                            <div class="titulocard">
                                    <h2>Autor</h2>
                            </div>   
                                              <?php 
                                                    error_reporting(E_ALL);
                                                    ini_set('display_errors', 1);
                                                    extract($_POST, EXTR_OVERWRITE);

                                                    if(isset($btnpesquisar)){
                                                    include_once 'php/Autor.php';
                                                    $p = new Autor();
                                                    $p->setnomeautor($txtnome.'%');
                                                    $pro_bd = $p->consultar();
        
                    
                                                        foreach ($pro_bd as $pro_mostrar) {
                                                        echo "<p>";
                                                        echo "<tr>";
                                                        echo "<td><b>Cod_Autor: " . $pro_mostrar[0] . "</td> <br>";
                                                        echo "<td><b>NomeAutor: " . $pro_mostrar[1] . "</td> <br>";
                                                        echo "<td><b>Sobrenome: " . $pro_mostrar[2] . "</td> <br>";
                                                        echo "<td><b>Datanasc: " . $pro_mostrar[3] . "</td> <br>";
                                                        echo "<td><b>Nacionalidade: " . $pro_mostrar[4] . "</td> <br>";
                                                        echo "<td><b>Email: " . $pro_mostrar[5] . "</td> <br>";
                                                        echo "</tr></p> <br>";
                                                    
                                                    }
                                                } ?>

                            <img src="img/Midoriya.webp" alt="">
                            </div>

                            

                    </div>

                    <div class="Cards">
                        <div class="conteudo">
                            <div class="titulocard">
                                    <h2>Autoria</h2>
                            </div>   
                            <?php 
                                                    error_reporting(E_ALL);
                                                    ini_set('display_errors', 1);
                                                    extract($_POST, EXTR_OVERWRITE);

                                                    if(isset($btnpesquisar)){
                                                    include_once 'php/Autoria.php';
                                                    $p = new Autoria();
                                                    $p->seteditora($txtnome.'%');
                                                    $pro_bd = $p->consultar();
        
                    
                                                        foreach ($pro_bd as $pro_mostrar) {
                                                        echo "<p>";
                                                        echo "<tr>";
                                                        echo "<td><b>Cod_Livro: " . $pro_mostrar[0] . "</td> <br>";
                                                        echo "<td><b>Cod_Autor: " . $pro_mostrar[1] . "</td> <br>";
                                                        echo "<td><b>Editora: " . $pro_mostrar[2] . "</td> <br>";
                                                        echo "<td><b>Lançamento: " . $pro_mostrar[3] . "</td> <br>";
                                                        echo "</tr></p> <br>";
                                                    
                                                    }
                                                } ?>


                            <img src="img/todoroki.webp" alt="">
                            </div>

                            

                    </div>

                    <div class="Cards">
                        <div class="conteudo">
                            <div class="titulocard">
                                    <h2>Livro</h2>
                            </div>   
                                                <?php 
                                                    error_reporting(E_ALL);
                                                    ini_set('display_errors', 1);
                                                    extract($_POST, EXTR_OVERWRITE);

                                                    if(isset($btnpesquisar)){
                                                    include_once 'php/Livro.php';
                                                    $p = new Livro();
                                                    $p->settitulolivro($txtnome.'%');
                                                    $pro_bd = $p->consultar();
        
                    
                                                        foreach ($pro_bd as $pro_mostrar) {
                                                        echo "<p>";
                                                        echo "<tr>";
                                                        echo "<td><b>Cod_Livro: " . $pro_mostrar[0] . "</td> <br>";
                                                        echo "<td><b>Titulo Livro: " . $pro_mostrar[1] . "</td> <br>";
                                                        echo "<td><b>ISBN: " . $pro_mostrar[2] . "</td> <br>";
                                                        echo "<td><b>Categoria: " . $pro_mostrar[3] . "</td> <br>";
                                                        echo "<td><b>Idioma: " . $pro_mostrar[4] . "</td> <br>";
                                                        echo "</tr></p> <br>";
                                                    
                                                    }
                                                } ?>

                            <img src="img/bakugo.webp" alt="">
                            </div>

                            

                    </div>

                    <div class="Cards">
                        <div class="conteudo">
                            <div class="titulocard">
                                    <h2>Produtos</h2>
                            </div>   
                                            <?php 
                                                    error_reporting(E_ALL);
                                                    ini_set('display_errors', 1);
                                                    extract($_POST, EXTR_OVERWRITE);

                                                    if(isset($btnpesquisar)){
                                                    include_once 'php/Produto.php';
                                                    $p = new Produto();
                                                    $p->setNome($txtnome.'%');
                                                    $pro_bd = $p->consultar();
        
                    
                                                        foreach ($pro_bd as $pro_mostrar) {
                                                        echo "<p>";
                                                        echo "<tr>";
                                                        echo "<td><b>ID: " . $pro_mostrar[0] . "</td> <br>";
                                                        echo "<td><b>Nome: " . $pro_mostrar[1] . "</td> <br>";
                                                        echo "<td><b>Estoque: " . $pro_mostrar[2] . "</td> <br>";
                                                        echo "</tr></p> <br>";
                                                    
                                                    }
                                                } ?>

                            <img src="img/allmight.webp" alt="">
                            </div>

                            

                    </div>
            </div>
            </section>
</body>
</html>