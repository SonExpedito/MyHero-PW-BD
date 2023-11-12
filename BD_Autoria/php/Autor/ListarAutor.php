<html>
<head>
    <title>Read</title>
    <meta charset="utf-8">

    <link rel="stylesheet" href="../../css/listar.css">
</head>
<body>

<div class="conteudo">
    <div class="detail"> </div>
        
    <img src="../../img/stickers/sticker1.png" class="object" data-value="-2" alt="" id="img1">
        <img src="../../img/stickers/sticker2.png" class="object" data-value="6" alt="" id="img2">
        <img src="../../img/stickers/sticker3.png" class="object" data-value="4" alt="" id="img3">
        <img src="../../img/stickers/sticker4.png" class="object" data-value="-6" alt="" id="img4">
        <img src="../../img/stickers/sticker5.png" class="object" data-value="8" alt="" id="img5">
        

            <table>
             <tr>
                <th>Cod</th>
                <th>Nome</th>
                <th>Sobrenome</th>
                <th>DataNasci</th>
                <th>Nacionaldade</th>
                <th>Email</th>
            </tr>

            <?php
                include_once 'Autor.php';
                $p = new Autor();
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
                    <?php echo "<td>",$pro_mostrar[3],"</td>"; ?>
                    <?php echo "<td>",$pro_mostrar[4],"</td>"; ?>
                    <?php echo "<td>",$pro_mostrar[5],"</td>"; ?>
                    <?php echo "</tr>";?> 

                <?php
                }
             ?>
   


            </table>
        
    
        <div class='botao'><a href= '../../Autoria.html' >Voltar</a></div>
         
    </div>

    <script src="../../javascript/parallax.js"></script>
   

</body>
</html>