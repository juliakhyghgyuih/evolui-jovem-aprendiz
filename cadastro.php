
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastro - EVOLUI</title>

    <link rel="stylesheet" href="css/style.css">
</head>

<body>

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


    <main class="pagina-cadastro">

        <div class="cadastro-container">

            <div class="cadastro-texto">

                <h1>Comece sua jornada.</h1>

                <p>
                    Crie sua conta no EVOLUI e encontre oportunidades,
                    desenvolva suas habilidades e prepare-se para
                    sua primeira experiência profissional.
                </p>

            </div>


            <div class="cadastro-formulario">

                <h2>Criar minha conta</h2>

                <form>

                    <label for="nome">Nome completo</label>
                    <input
                        type="text"
                        id="nome"
                        name="nome"
                        placeholder="Digite seu nome"
                    >

                    <label for="email">E-mail</label>
                    <input
                        type="email"
                        id="email"
                        name="email"
                        placeholder="Digite seu e-mail"
                    >

                    <label for="senha">Senha</label>
                    <input
                        type="password"
                        id="senha"
                        name="senha"
                        placeholder="Crie uma senha"
                    >

                    <div class="linha-campos">

                        <div>
                            <label for="idade">Idade</label>

                            <input
                                type="number"
                                id="idade"
                                name="idade"
                                placeholder="Idade"
                            >
                        </div>


                        <div>
                            <label for="cidade">Cidade</label>

                            <input
                                type="text"
                                id="cidade"
                                name="cidade"
                                placeholder="Sua cidade"
                            >
                        </div>

                    </div>


                    <button type="submit">
                        Criar minha conta
                    </button>

                </form>


                <p class="login-link">
                    Já possui uma conta?
                    <a href="login.php">Entrar</a>
                </p>

            </div>

        </div>

    </main>


    <footer>

        <p>EVOLUI - Jovem Aprendiz</p>

        <p>Cresça por dentro. Avance por fora.</p>

    </footer>

</body>
</html>
```