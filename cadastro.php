<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastro</title>
    <link rel="stylesheet" href="style.css">
</head>

<body>

    <div class="container">
        <div class="form-box cadastro-box">

            <h1>Cadastro</h1>
            <p>Preencha seus dados abaixo</p>

            <form action="cadastrar.php" method="POST">

                
                <div class="input-group">
                    <label for="nome">Nome completo</label>
                    <input 
                        type="text"
                        id="nome"
                        name="nome"
                        placeholder="Digite seu nome completo"
                        required
                    >
                </div>

                <div class="input-group">
                    <label for="nascimento">Data de nascimento</label>
                    <input 
                        type="date"
                        id="nascimento"
                        name="nascimento"
                        required
                    >
                </div>

                <div class="input-group">
                    <label for="endereco">Endereço</label>
                    <input 
                        type="text"
                        id="endereco"
                        name="endereco"
                        placeholder="Digite seu endereço"
                        required
                    >
                </div>

                <div class="input-group">
                    <label for="sexo">Sexo</label>

                    <select id="sexo" name="sexo" required>
                        <option value="">Selecione</option>
                        <option value="masculino">Masculino</option>
                        <option value="feminino">Feminino</option>
                        <option value="outro">Outro</option>
                        <option value="nao-informar">Prefiro não informar</option>
                    </select>
                </div>

                <div class="input-group">
                    <label for="telefone">Telefone</label>
                    <input 
                        type="tel"
                        id="telefone"
                        name="telefone"
                        placeholder="(00) 00000-0000"
                        required
                    >
                </div>

                <div class="input-group">
                    <label for="email">E-mail</label>
                    <input 
                        type="email"
                        id="email"
                        name="email"
                        placeholder="Digite seu e-mail"
                        required
                    >
                </div>

                <div class="input-group">
                    <label for="senha">Senha</label>
                    <input 
                        type="password"
                        id="senha"
                        name="senha"
                        placeholder="Digite sua senha"
                        minlength="6"
                        required
                    >
                </div>


                <div class="input-group">
                    <label for="confirmar-senha">Confirmar senha</label>
                    <input 
                        type="password"
                        id="confirmar-senha"
                        name="confirmar-senha"
                        placeholder="Digite a senha novamente"
                        minlength="6"
                        required
                    >
                </div>

                <button type="submit" class="btn">
                    Cadastrar
                </button>

            </form>

            <div class="cadastro-link">
                <p>Já possui uma conta?</p>

                <a href="index.html" class="btn-secondary">
                    Voltar para o Login
                </a>
            </div>

        </div>
    </div>

</body>
</html>