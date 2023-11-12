<html>
<head>
    <title>Excluir</title>
    <meta charset="utf-8">

    <link rel="stylesheet" href="../css/excluir.css">
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>

</head>
<body>

<div class="conteudo">
    <div class="detail"> </div>
        
    <img src="../img/stickers/sticker1.png" class="object" data-value="-2" alt="" id="img1">
        <img src="../img/stickers/sticker2.png" class="object" data-value="6" alt="" id="img2">
        <img src="../img/stickers/sticker3.png" class="object" data-value="4" alt="" id="img3">
        <img src="../img/stickers/sticker4.png" class="object" data-value="-6" alt="" id="img4">
        <img src="../img/stickers/sticker5.png" class="object" data-value="8" alt="" id="img5">
        

            <table>
             <tr>
                <th>ID</th>
                <th>Nome</th>
                <th>Quantidade</th>
                <th>Funções</th>
            </tr>

            <?php
                include_once 'Produto.php';
                $p = new Produto();
                $pro_bd=$p->listar();

                ?>
                        
            <?php
                 foreach($pro_bd as $pro_mostrar)
                 {
                        ?>
                    <?php echo "<tr>";?>
                    <?php echo "<td>",$pro_mostrar[0],"</td>"; ?>
                    <?php echo "<td>",$pro_mostrar[1],"</td>"; ?>    
                    <?php echo "<td>",$pro_mostrar[2],"</td>"; ?>
                    <?php echo "<td> <div class='delete'><a href= 'exclusao.php?id=$pro_mostrar[0]' ><i class='bx bx-trash'></i></a></div> </td>"; ?>
                    <?php echo "</tr>";?> 

                <?php
                }
             ?>
   


            </table>
        
            <div class="Status">
                        <p>Status:  <?php
                            extract ($_POST, EXTR_OVERWRITE);
                            if(isset($_GET['id']))
                            {
                                include_once 'Produto.php';
                                $pro = new Produto();
                                $pro->setId($_GET['id']);
                                echo $pro->exclusao() ."A Tabela Recarregará";
                                echo '<script>setTimeout(function() { window.location.href = "exclusao.php"; }, 1000);</script>';
        
                            }

                ?>
                </p>
                    </div>

        <div class='botao'><a href= '../Produtos.html' >Voltar</a></div>
         
    </div>

    <script src="../javascript/parallax.js"></script>
   

</body>
</html>