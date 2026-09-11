<DOCTYPE HTML!>
<HTML>
    <HEAD>
        <TITLE>Projeto web 2</TITLE>
        <link rel="stylesheet" href="style_index.css">
    </HEAD>
    <BODY>
        <!--DIV com todo o conteudo da página.-->
        <div class="Principal">
            <!--DIV com um cartão sobre mim.-->
            <div class="card">
                <div class="card-header">
                    <img src="img/Foto_Gui.png" alt="Foto 3x4" class="profile-img">
                    <div class="user-info">
                        <h2>Guilherme Ariel Dos Santos Queiroz</h2>
                        <p>Tecnólogo em Jogos Digitais e aspirante a Desenvolvedor</p>
                    </div>
                </div>
                
                <div class="card-body">
                    <p class="text-justify">Formado como Tecnólogo em Jogos Digitais pela Fatec São Caetano do Sul.<br>
                    Atualmente cursando minha segunda graduação como Tecnólogo em Desenvolvimento de Softwares Multiplataforma,
                    para aprimorar meus conhecimentos e expandir meus horizontes.</p>
                </div>

                <div class="card-footer">
                    <a href="https://guilherme-asq.itch.io/" class="btn">Portifólio Pessoal de Jogos</a>
                </div>
            </div>

            <!--DIV com um acordeão mostrando meu TCC da FAtec São Caetano-->
            <div class="accordion">
                <!--ITEM 1 só vai ter um item mesmo, mas é bom deixar explicado onde é cada coisa.-->
                <details>
                    <summary>TCC Fatec São Caetano do Sul</summary>
                    <div class="conteudo">
                        <div class="alinhar-centro">
                            <img src="img/Furtivo.jpg" alt="Furtivo" class="center-img">
                        </div>
                        <p class="text-justify">Trabalho de Conclusão de Curso (TCC) do Curso Superior 
                            de Tecnologia em Jogos Digitais da Fatec São Caetano do Sul</p>
                        <a href="https://fatecsaocaetano.itch.io/furtivo" class="alinhar-centro">Furtivo</a>
                    </div>
                </details><!--FIM DO ACORDEÃO-->
            </div>

            <!--DIV com um acordeão mostrando o 'portifólio' no github da matéria de Desenvolvimento Web 1-->
            <div class="accordion">
                <details>
                    <summary>Portifólio Desenvolvimento Web 1</summary>
                    <div class="conteudo">
                        <div class="alinhar-centro">
                            <img src="img/HTML5_logo.png" alt="HTML Logo" class="center-img">
                        </div>
                        <p class="text-justify">Pequeno projeto que compila todas as atividades feitas em sala de aula durante a matéria de Desenvolvedor Web 1,
                        no primeiro semestre do Curso Superior de Desenvolvimento de Software Multiplataforma da Fatec Zona Leste.<br>
                        O peojeto tem como intuito apresentar os conceitos iniciais sobre o desenvolvimento de páginas web e servir como portifólio acadêmico e profissional.</p>
                        <a href="https://guilherme-asq.github.io/DesenvolvimentoWeb1_Fatec-ZL_Sabado/" class="alinhar-centro">Portifolio</a>
                    </div>
                </details>
            </div>

            <!--DIV com um acordeão pro formulario da aula de 04/09/2026-->
            <div class="accordion">
                <details>
                    <summary>Formulário para Contato</summary>
                    <div class="conteudo">
                        <p class="text-justify">Caso deseje entrar em contato comigo para o desenvolvimento de um projeto, 
                        deixe suas infromações que eu entrarei em contato assim que possível.</p>

                        <!--DIV do formulário-->
                        <div class="formszinho">
                            <form method="post">
                                <label for="nome">Nome:</label><br>
                                <input type="text" name="nome" id="nome" placeholder="Digite seu nome"><br>

                                <label for="temail">E-mail:</label><br>
                                <input type="email" name="email" id="temail" placeholder="Digite seu E-mail"><br>

                                <!--Campo de Telefone, não vi que tinha que ter esse.-->
                                <label for="telefone">Telefone ou WhatsApp:</label><br>
                                <input type="tel" name="telefone" id="telefone" placeholder="Telefone ou WhatsApp"><br>

                                <!--TAG textarea pra mensagem-->
                                <label for="mensagemF">Mensagem</label><br>
                                <textarea name="mensagem" id="mensagemF" rows="5" cols="30" placeholder="Digite sua mensagem"></textarea><br><br>

                                <!--<input type="submit" value="Enviar"><br>-->
                                <button type="submit">Enviar</button> <br>
                            </form>
                        </div><!--FIM da DIV do Formulário-->
                    </div>
                </details>
            </div>

        </div>

        <!--CODIGO EM php-->
        <?php
        //Verifica se o formulário
        if ($_SERVER["REQUEST"] == "POST"){
            //Recebe o email enviado pelo formulário
            $email = $_POST["email"];

            //Mostrar o email recebido
            echo "E-mail recebido: " . $email;
        }
        ?>
    </BODY>
</HTML>