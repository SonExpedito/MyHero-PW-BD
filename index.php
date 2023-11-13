<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Login</title>
    <link rel="stylesheet" href="logaritens/Logar.css">
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>

    <script language=javascript>
        function blockletras(keypress) {

            if (keypress >= 48 && keypress <= 57) {
                return true;

            }
            else {
                return false;
            }
        }

        document.addEventListener('DOMContentLoaded', function() {
        var limparButton = document.querySelector('input[name="limpar"]');
        var statusDiv = document.getElementById('statusDiv');

        limparButton.addEventListener('click', function() {
            statusDiv.innerHTML = ''; // Limpa o conteúdo da div
        });
    });

    </script>
</head>

<body>

    <section>
        <div class="form-box">
            <div class="form-value">
                <form action="" method="POST">
                    <h1>Login</h1>
                    <h2>Insira os Dados </h2>

                    <div class="inputbox">
                        <i class='bx bx-user'></i>
                        <input name="txtuser" type="text" size="40" maxlength="5" placeholder="Nome de Usuário"
                            required>
                        <label for="">Usuario</label>
                    </div>
                    <div class="inputbox">
                        <i class='bx bxs-lock-alt'></i>
                        <input name="txtsenha" type="password" size="40" maxlength="3" placeholder="Senha" required
                            onkeypress="return blockletras(window.event.keyCode)">
                        <!--Aciona a função para verificação ao mudar -->
                        <label for="">Senha</label>
                    </div>

                    <div class="opcoes">
                        <input type="submit" name="btnconsultar" value="Consultar">
                        <input type="reset" name="limpar" value="Limpar">
                    </div>
                    <div class="Status" id="statusDiv">
                        <p>
                            <?php
                            extract($_POST, EXTR_OVERWRITE);
                            if (isset($btnconsultar)) {
                                include_once 'logaritens/Usuario.php';
                                $u = new Usuario();
                                $u->setUsu($txtuser);
                                $u->setSenha($txtsenha);
                                $pro_bd = $u->login();

                                $existe = false;
                                foreach ($pro_bd as $pro_mostrar) {
                                    $existe = true;
                                    $mensagem = "Seja Bem Vindo: " .$pro_mostrar[0] ;
                                    echo "<script type='text/javascript'>
                                            var confirmacao = confirm('$mensagem,Deseja entrar?');
                                            if (confirmacao) {
                                                window.location.href = 'home/Index.html'; // Substitua pela URL desejada
                                                }
                                            </script>";
                                }

                                if ($existe == false) {
                                    echo "Nome ou Senha estão incorretos";
                                }

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