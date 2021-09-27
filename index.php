<!DOCTYPE html>
<html lang="pt-br">
    <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <title> Projeto CRUD </title>
    <link href="style.css" type="text/css" rel="stylesheet">
    </head>
    <body>
        <header>
            <div id="conteudoCabecalho">
                <div id="logoMarca">
                    <img src="img/logoMarca.PNG" id="logo" title="Logo Pinceru Games">
                </div>
                <div id="menu">
                    <ul id="menuPrincipal">
                        <a href="#linkEmpresa"> <li class="itemListaPrincipal">A empresa</li> </a>
                        <li class="itemListaPrincipal">Lojas</li>
                        <li class="itemListaPrincipal">Promoções</li>
                        <li class="itemListaPrincipal">Destaques</li>
                        <li class="itemListaPrincipal">Contatos</li>
                    </ul>
                </div>
                <div id="redesSociais">
                    <div class="divRedesSociais">
                        <a href="https://twitter.com" target="_blank"><img src="img/twitter.png" class="redesSociais" title="Icone do Twitter"> </a>
                    </div>
                    <div class="divRedesSociais">
                        <a href="https://www.instagram.com" target="_blank"> <img src="img/instagram.png" class="redesSociais" title="Icone do Instagram"> </a>
                    </div>
                    <div class="divRedesSociais">
                        <a href="https://www.facebook.com" target="_blank"> <img src="img/facebook.png" class="redesSociais" title="Icone do Facebook"> </a>
                    </div>
                </div>
            </div>
        </header>
        <main>
            <div id="banner">
        
            </div>
            <div id="conteudoCorpo">
                <div id="linhaMenuPesquisa">
                    <div id="menuHamburguer">
                        <img src="img/menuHamburguer.png" id="imgMenu">
                        <div id="subMeuHamburguer">
                            <ul id="listaGeneros">
                                <li class="itemListaSubMenu"> Aventura </li>
                                <li class="itemListaSubMenu"> Ação </li>
                                <li class="itemListaSubMenu"> Estratégia </li>
                                <li class="itemListaSubMenu"> RPG </li>
                                <li class="itemListaSubMenu"> Esporte </li>
                                <li class="itemListaSubMenu"> Online </li>
                                <li class="itemListaSubMenu"> Simulação </li>
                            </ul>
                        </div>
                    </div>
                    <div id="pesquisar">
                        <form method="post" name="frmPesquisa" action="">
                            <label> Pesquisa </label>
                            <input type="text" id="barraPesquisa" name="txtPesquisa" placeholder="Buscar jogo" maxlength="100">
                            <input type="submit" id="botaoPesquisa" value="Buscar" name="btnPesquisa">
                        </form>
                    </div>
                </div>
                <div id="apresentacaoJogos">
                    <div class="jogos">
                        <div class="imgJogo">
                            <img src="capaJogo/minecraft.jpg" class="capaJogo">
                        </div>
                        <div class="infoJogo">
                            <h2> Minecraft </h2>
                            <p class="txtInfoJogo">
                                Explore seu mundo original, sobreviva à noite e crie tudo o que possa imaginar!
                            </p>
                            <p class="generos">
                                AVENTURA - ONLINE - SIMULAÇÃO
                            </p>
                            <div class="saibaMais">
                                Saiba mais
                            </div>
                            <div class="valor">
                                R$ 89,99
                            </div>
                        </div>
                    </div>
                    <div class="jogos">
                        <div class="imgJogo">
                            <img src="capaJogo/mkx.jpg" class="capaJogo">
                        </div>
                        <div class="infoJogo">
                            <h2> Mortal Kombat X </h2>
                            <p class="txtInfoJogo">
                                Experimente a próxima geração da maior franquia de jogos de luta!
                            </p>
                            <p class="generos">
                                AÇÃO - ONLINE
                            </p>
                            <div class="saibaMais">
                                Saiba mais
                            </div>
                            <div class="valor">
                                R$ 59,90
                            </div>
                        </div>
                    </div>
                    <div class="jogos">
                        <div class="imgJogo">
                            <img src="capaJogo/fifa22.jpg" class="capaJogo">
                        </div>
                        <div class="infoJogo">
                            <h2> FIFA 22 </h2>
                            <p class="txtInfoJogo">
                                O jogo de futebol mais real da história, com avanços inimagináveis!
                            </p>
                            <p class="generos">
                                ESPORTE - SIMULAÇÃO
                            </p>
                            <div class="saibaMais">
                                Saiba mais
                            </div>
                            <div class="valor">
                                R$ 249,00
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div id="linkEmpresa">
            </div>
            <div id="mainEmpresa">
                <div id="corpoEmpresa">
                    <h1> A empresa </h1>
                    <div id="empresa">
                        <p class="sobreEmpresa">
                            A Pinceru Games foi fundada por Pinceru Werito, em 2016. <br>
                            O e-commerce de games começou como um pequeno projeto de garagem, mas hoje é a maior loja de mídias físicas do Brasil. <br>
                            A empresa já atende clientes de todo o Brasil e possui uma filial em São Paulo e outra no Rio de Janeiro.
                            <br>
                            A Pinceru Games aposta nos jogadores da velha guarda, que ainda se interessam por colecionar as capas e os discos dos jogos. <br>
                            <br>
                            Pinceru tinha apenas 15 anos de idade quando começou o projeto. <br>
                            Passou dificuldades para aprender tudo sozinho do zero. <br>
                            Hoje, além do e-commerce, Pinceru trabalha como desenvolvedor e DBA autonomo. <br>
                            A Pinceru Games possibilita você comprar os seus jogos físicos na empresa não só de um grande dsenvolvedor, mas também de um garoto sonhador.
                        </p>
                    </div>
                </div>
            </div>
        </main>
        <footer>
        
        </footer>
    </body>
</html>
