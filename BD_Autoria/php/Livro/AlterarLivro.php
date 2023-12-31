<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Atualizar</title>
    <link rel="stylesheet" href="../../css/alterar.css">
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
    <script src="../../javascript/tratamentoerro.js"> </script>
    <script> document.addEventListener('DOMContentLoaded', function () {
            // Adiciona um ouvinte de evento para o formulário
            document.querySelector('form').addEventListener('keypress', function (e) {
                // Verifica se a tecla pressionada é Enter (código 13)
                if (e.key === 'Enter') {
                    // Impede o comportamento padrão do Enter (evita que o formulário seja enviado duas vezes)
                    e.preventDefault();
                    // Chama a função para enviar o formulário
                    this.submit();
                }
            });
        }); </script>
</head>

<body>

    <section>
        <div class="form-box">
            <div class="form-value">
                <form action="AlterarLivro2.php" method="POST">
                    <h1>Livro</h1>
                    <h2>Atualizar </h2>



                    <div class="inputbox">
                        <i class='bx bx-book'></i>
                        <input name="idlivro" type="text" size="40" maxlength="40" placeholder="Cod-Livro" required
                            onkeypress="return blockletras(window.event.keyCode)">
                        <label for="">Cod-Livro</label>
                    </div>




                    <div class="opcoes">
                        <input type="submit" name="btnenviar" value="Consultar">
                        <input type="reset" name="limpar" value="Limpar">
                        <a href="../../Autoria.html">Voltar</a>
                    </div>


                </form>

            </div>
        </div>


    </section>
</body>

</html>