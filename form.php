<form action="bd.php" method="POST">

    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Formulário FAESA</title>

        <link rel="stylesheet" href="style.css">
    </head>

    <body>

        <center>
            <p style="font-size:30px;">
            <h1> FAESA TECVIX o maior evento
                de Tecnologia do espírito santo!</h1>
            </p>
            <img src="styles/tecvix.png" width="400" />


            <div class="input">
                <p>
                    <!-- input de entrada para nome do usuário -->
                    <input style="font-size:18px;" name="name" placeholder="Nome" required /></br>
                </p>

                <p>
                    <!-- input de entrada para o email do usuário -->
                    <input style="font-size:18px;" name="email" type="email" pattern="[a-zlo" placeholder="E-mail" required />
                </p>

                <p>
                    Insira o sexo <br>
                    <!-- input de entrada para o sexo do usuário -->
                    <select name="sexo" id="sexo">
                        <option type="font-size:16px;" value="Não Informar">Não Informar</option>
                        <option type="font-size:16px;" value="Masculino">Masculino</option>
                        <option type="font-size:16px;" value="Feminino">Feminino</option>

                    </select>
                </p>
                <!-- input de de mensagem do usuário -->
                <textarea type="font-size:16px;" name="mensagem" id="mensagem" rows="5" cols="25" minlength="10"
                    maxlength="50" style="resize:none"></textarea>


                <p>
                    Insira o telefone<br>
                    <!-- input de entrada de telefone do usuário -->
                    <input type="font-size:16px;" name="telefone" id="Telefone" class="inputUser"
                        pattern="\([0-9]{2}\)[9]{1}[0-9]{4}-[0-9]{4}" placeholder="(99)9xxxx-xxxx" required>
                    <label for="Telefone" class="labelinput"></label>

                </p>
            </div>
            <!-- botão para fazer o envio dos dados para o back end -->
            <button>Fazer Inscrição AGORA</button>

        </center>



    </body>
</form>