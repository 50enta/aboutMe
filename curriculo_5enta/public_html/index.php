<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <title>5enta</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" type="text/css" href="css/estilo1.css">
        <link rel="stylesheet" type="text/css" href="css/estilo2.css">
    </head>
    <body>

        <div id="barraGrande"> </div>  <!-- a parte que fará a barra superior colorida-->
        <div id="todoSite">
            <!--Início do cabeçalho-->
            <header id="cabecalho">
                <!--Lista para o menú-->
                <ul id="menu">
                    <li><a href="#">inicio</a></li>
                    <li><a href="#sobre">sobre</a></li>
                    <li><a href="#educacao">educação</a></li>
                    <li><a href="#habilidades">habilidades</a></li>
                    <li><a href="#interesses">interesses</a></li>
                </ul>
                <!--É onde aparecerá o Cinquenta e o botão MAIS-->
                <div id="nomes"> 
                    <p id="cinquenta"><span>#</span>5enta</p>
                    <p id="valter">Valter Cinquenta Eusébio Sitoe</p>
                </div>
            </header>
            <!--O corpo principal do site, o artigo neste caso-->
            <article>
                <!--Secção1-->
                <section class="seccao secPreto" id="sobre" >

                    <h1><span class="barraPreto">  </span> Sobre </h1>
                    <div class="conteudo conteudoSpan"> 
                        <p>
                            Há duas coisas que não sei fazer nesta vida, dançar e jogar futebol.
                            Futebol porque não vejo porquê me interessar pela coisa.<br/> Já a dança, Epah! Acho que não nasci para isso hahahahah, mas enfim, mbora continuar.
                        </p>
                        <img id="foto2" src="imagens/foto2.jpg">
                        <div id="sobreDireita">

                            <h3> OLÁ MUNDO, SOU <span> CINQUENTA </span><br/> Estudante de Informática</h3>
                            <p> 
                                Sou um tipo que estuda informática. Mais do que a tecnologia aprecio design, fotografia, cinema, enfim acho que tudo que envolve criatividade. <br/>
                                Gosto da seguinte frase: "devemos pensar em algo que todo mundo vê mas que ninguém nunca pensou", na verdade não me lembro onde roubei esta frase, mas prontos, peguei.
                            </p>
                        </div>
                    </div>

                </section>
                <!--secção2-->
                <section class="seccao secPreto" id="educacao">

                    <h1><span class="barraPreto"> </span> Educação</h1>

                    <div class="conteudo"> 
                        <table id="tabelaEd" >
                            <!--<caption>Abaixo o cronograma do processo de aprendizagem</caption>-->
                            <tr class="linhaEd"><td class="colunaAno" rowspan="2"> 2016 ~ 2019</td><td class="colunaInfo"> Lic. em Informática </td></tr> <tr class="linhaEd"><td class="colunaInfo">Universidade Eduardo Mondlane </td></tr>
                            <tr class="linhaEd"><td class="colunaAno" rowspan="2">2014 - 2015</td> <td class="colunaInfo"> Nível médio  </td></tr> <tr class="linhaEd"><td class="colunaInfo"> Escola Secundária da Polana</td></tr>
                            <tr class="linhaEd"><td class="colunaAno" rowspan="2">2011 - 2013</td><td class="colunaInfo"> Nível básico</td></tr> <tr class="linhaEd"><td class="colunaInfo">   Escola Secundária do Noroeste 1</td></tr>
                            <tr class="linhaEd"><td class="colunaAno" rowspan="2">2003 - 2010</td> <td class="colunaInfo"> Nível elementar </td></tr> <tr class="linhaEd"><td class="colunaInfo">  Escola Primária Completa Maguiguana</td></tr>
                            <tr class="linhaEd"><td class="colunaAno" rowspan="2">2000 - 2002</td>  <td class="colunaInfo">Gatinhar, comer </td></tr> <tr class="linhaEd"><td class="colunaInfo"> Creche Centro Cultural aberto "KURHULA"</td></tr>
                        </table>


                    </div>
                    <aside class="lateral">
                        <ul id="menuLateral1">
                            <li><img src="imagens/404-whatsapp.png"> +258 849 357 309 </li>
                            <li><img src="imagens/393-google.png">  valthercinquenta@google.com </li>
                            <li><img src="imagens/458-linkedin.png">  <a href="https://www.linkedin.com/in/valter-cinquenta-0ba822121/" target="_blank">LinkedIn</a> </li>
                            <li><img src="imagens/433-github.png"> <a href="https://github.com/50enta" target="_blank">GitHub</a> </li>
                            <li><img src="imagens/401-facebook.png"> <a href="https://www.facebook.com/50enta" target="_blank">facebook</a> </li>
                            <li><img src="imagens/403-instagram.png"><a href="https://www.instagram.com/5enta_/" target="_blank">Instagram</a> </li>
                            <li><img src="imagens/466-pinterest.png"><a href="https://br.pinterest.com/valtercinquenta/" target="_blank">Pinterest</a> </li>
                        </ul>

                    </aside>

                </section>
                <!--secção3-->
                <section class="seccao" id="portfolio">
                    <h1><span class="barraBranco">  </span> Portfólio</h1>
                    <div class="conteudo conteudoSpan"> 
                        <div id="contextoPort">
                            <div id="micisa1">
                                <div>
                                    <span> <img src="imagens/micisa12.jpg"></span>
                                    <span> <img src="imagens/micisa11.jpg"></span>
                                    <span> <img src="imagens/micisa13.jpg"></span>
                                </div>
                                <h3> MiCiSa, v1.0</h3>
                                <p> Sistema para Gestão de recurso humanos. <br> com Micaela Freitas e Samira Flávia</p>
                            </div>

                            <div id="micisa2">
                                <div>
                                    <span> <img src="imagens/micisa21.jpg"></span>
                                    <span> <img src="imagens/micisa22.jpg"></span>
                                    <span> <img src="imagens/micisa23.jpg"></span>
                                </div>
                                <h3> MiCiSa, v2.0</h3>
                                <p> Sistema para Gestão de recurso humanos. <br> com Micaela Freitas e Samira Flávia</p>
                            </div>

                        </div>
                    </div>
                </section>
                <!--secção4-->
                <section class="seccao" id="habilidades">
                    <h1><span class="barraBranco">  </span> Habilidades</h1>
                    <div class="conteudo"> 
                        <table id="tabelaLing"  >
                            <tr><td> Pascal</td> <td> </td><td class="sim1"> exemplooo</td> <td class="sim1"> exemplooo</td> <td class="sim1">exemplooo </td> <td class="sim1">exemplooo </td> <td> 80%</td></tr>
                            <tr><td> Java</td> <td> </td><td class="sim2"> </td> <td class="sim2"> </td> <td class="sim2"> </td> <td > 60%</td> <td> </td></tr>
                            <tr><td> JavaFx</td> <td> </td> <td class="sim3"> </td> <td class="sim3"> </td><td > 40% </td> <td > </td> <td> </td></tr>
                            <tr><td> Html5</td><td> </td><td class="sim4"> </td> <td class="sim4"> </td> <td class="sim4"> </td> <td > 60%</td> <td> </td></tr>
                            <tr><td> Css</td> <td> </td><td class="sim5"> </td> <td class="sim5"> </td> <td >40% </td> <td > </td> <td> </td></tr>
                            <tr><td> JavaScrip</td> <td> </td> <td class="sim6"> </td> <td> 20%</td> <td> </td> <td> </td> <td> </td> </tr>
                            <tr><td> pHp</td> <td> </td> <td class="sim7"> </td> <td class="sim7"> </td> <td > 40%</td> <td> </td> <td> </td></tr>

                        </table>
                    </div>
                    <aside id="lateral2" class="lateral">
                        <ul id="menuLateral2">
                            <li>Criatividade <span class="ponto preenchido"></span>  <span class="ponto preenchido"></span> <span class="ponto preenchido"></span> <span class="ponto preenchido"></span> <span class="ponto "></span></li>
                            <li>Responsabilidade <span class="ponto preenchido"></span>  <span class="ponto preenchido"></span> <span class="ponto preenchido"></span> <span class="ponto preenchido"></span> <span class="ponto "></span></li>
                            <li>Trab. em equipe <span class="ponto preenchido"></span>  <span class="ponto preenchido"></span> <span class="ponto preenchido"></span> <span class="ponto "></span> <span class="ponto "></span></li>
                            <li>Organização <span class="ponto preenchido"></span>  <span class="ponto preenchido"></span> <span class="ponto preenchido"></span> <span class="ponto "></span> <span class="ponto "></span></li>
                            <li>Pontualidade <span class="ponto preenchido"></span>  <span class="ponto preenchido"></span> <span class="ponto preenchido"></span> <span class="ponto preenchido"></span> <span class="ponto "></span></li>
                            <li>Outro <span class="ponto "></span>  <span class="ponto "></span> <span class="ponto "></span> <span class="ponto "></span> <span class="ponto "></span></li>

                        </ul>
                    </aside>
                </section>

                <!--secção5-->
                <section class="seccao" id="maisSobreMim">
                    <h1><span class="barraBranco">  </span> Mais sobre mim</h1>
                    <div class="conteudo conteudoSpan"> 
                        <div id="divi" >
                            <p class="maisSobreMim">Meu nome é Valter Cinquenta, sexo masculino, nascido ao 12 de Outubro de 1997. <br>
                                Moro no bairro da Polana Caniço "B", Q6, casa 694. meus pais são: Moisês Eusébio Sitoe e Emília da Luz.<br>
                                Número do bilhete de identidade é 110100481843M, carta de condução classe B. <br>
                                Actualmente frequento o 3o ano do curso licenciatura em Informática, na Universidade Eduardo Mondlane. </p>
                        </div>
                    </div>

                </section>

                <!--secção6-->
                <section class="seccao secPreto" id="interesses">
                    <h1><span class="barraPreto">  </span> Interesses</h1>
                    <div class="conteudo conteudoSpan" style="position: relative;"> 
                        <div class="contexto" >
                            <span id="viajar">viajar</span>
                            <span id="musica">música</span>
                            <span id="criatividade">CRIATIVIDADE</span>
                            <span id="design">DESIGN</span>
                            <span id="estudar">estudar</span>
                            <span id="fotografia">fotografia</span>
                            <span id="filmes">filmes</span> 
                            <span id="familia">família</span>

                            <span id="teatro">teatro</span>
                            <span id="comer">comer</span>
                            <span id="tecnologia">tecnologia</span>
                            <span id="namorar">namorar</span> 
                            <span id="amigos">AMIGOS</span>
                        </div>
                    </div>
                </section>



            </article>
            <footer class="rodape">
                <div>
                    <p>
                        <span class="item"> <a href="https://www.facebook.com/50enta" target="_blank"><img src="imagens/402-facebook2.png"></a></span>
                        <span class="item"><a href="https://github.com/50enta" target="_blank"><img src="imagens/433-github_1.png"></a></span>
                        <span class="item"> <a href="https://www.linkedin.com/in/valter-cinquenta-0ba822121/" target="_blank"><img src="imagens/458-linkedin_1.png"></a></span>
                        <span class="item"><a href="https://www.instagram.com/5enta_/" target="_blank"><img src="imagens/403-instagram_1.png"></a></span>
                    </p>
                </div>

            </footer>

        </div>
    </body>
</html>
