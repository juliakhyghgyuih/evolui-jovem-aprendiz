<!DOCTYPE html>
<html lang="pt-br">

<head>

    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Entrar | EVOLUI</title>

    <link rel="stylesheet" href="css/style.css">

</head>

<body>

    <!-- CABEÇALHO -->

    <header>

        <div class="logo">
            EVOLUI
        </div>

        <nav>

            <a href="index.php">Início</a>

            <a href="paginas/vagas.php">Vagas</a>

            <a href="paginas/jornada.php">Minha Jornada</a>

            <a href="paginas/cursos.php">Aprenda</a>

            <a href="login.php">Entrar</a>

        </nav>

    </header>


    <!-- LOGIN -->

    <main class="login">

        <div class="login-conteudo">

            <div class="login-titulo">

                <h1>Bem-vindo de volta</h1>

                <p>
                    Entre na sua conta e continue sua jornada no EVOLUI.
                </p>

            </div>


            <form class="formulario-login">

                <div class="campo">

                    <label for="email">
                        E-mail
                    </label>

                    <input
                        type="email"
                        id="email"
                        name="email"
                        placeholder="Digite seu e-mail"
                    >

                </div>


                <div class="campo">

                    <label for="senha">
                        Senha
                    </label>

                    <input
                        type="password"
                        id="senha"
                        name="senha"
                        placeholder="Digite sua senha"
                    >

                </div>


                <button type="submit">
                    Entrar
                </button>


                <p class="cadastre-se">

                    Ainda não possui uma conta?

                    <a href="cadastro.php">
                        Criar conta
                    </a>

                </p>

            </form>

        </div>

    </main>


    <!-- RODAPÉ -->

    <footer>

        <p>EVOLUI - Jovem Aprendiz</p>

        <p>
            Cresça por dentro. Avance por fora.
        </p>

    </footer>

</body>

</html>