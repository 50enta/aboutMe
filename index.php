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
        <link rel="stylesheet" type="text/css" href="css/estilo01.css">
        <link rel="stylesheet" type="text/css" href="css/estilo02.css">
        <style>
            /*Formatações sobre resonsividade - medi queries mais concretamente.*/
            @media screen and (max-width: 600px) {
                #linha, #menu {   
                    flex-direction: column;
                }
                #habilidades{
                    display: none;
                }
                header{
                    background-image: none;
                }
                #menu li a{
                    display: block;
                }

            }
        </style>
        <script>
  (adsbygoogle = window.adsbygoogle || []).push({
    google_ad_client: "ca-pub-6493011256450801",
    enable_page_level_ads: true
  });
</script>
    </head>

    <body>
        <div class="todoSite">
            <!--Início do cabeçalho-->
            <header id="cabecalho">
                        <script async src="//pagead2.googlesyndication.com/pagead/js/adsbygoogle.js"></script>

                <!--É onde aparecerá o Cinquenta e o botão MAIS-->
                <div id="nomes"> 
                    <p id="cinquenta"><span>#</span>5enta</p>
                    <p id="valter">Valter Cinquenta E. Sitoe</p>
                </div>
            </header>
            <nav>
                <!--Lista para o menú-->
                <ul id="menu">
                    <li><a href="#interesses">INTERESSES</a></li>
                    <li><a href="#habilidades">HABILIDADES</a></li>
                    <li><a href="#educacao">EDUCAÇÃO</a></li>
                    <li><a href="#sobre">SOBRE</a></li>
                    <li><a href="#">INÍCIO</a></li>
                </ul>
            </nav>
            <div id="linha">
                <aside id="lateral">
                    <section>
                        <ul id="menuLateral1">
                            <li><img src="imagens/404-whatsapp.png"> +258 849 357 309 </li>
                            <li><img src="imagens/393-google.png">  valthercinquenta@google.com </li>
                            <li><img src="imagens/458-linkedin.png">  <a href="https://www.linkedin.com/in/valter-cinquenta-0ba822121/" target="_blank">LinkedIn</a> </li>
                            <li><img src="imagens/433-github.png"> <a href="https://github.com/50enta" target="_blank">GitHub</a> </li>
                            <li><img src="imagens/401-facebook.png"> <a href="https://www.facebook.com/50enta" target="_blank">facebook</a> </li>
                            <li><img src="imagens/403-instagram.png"><a href="https://www.instagram.com/5enta_/" target="_blank">Instagram</a> </li>
                            <li><img src="imagens/466-pinterest.png"><a href="https://br.pinterest.com/valtercinquenta/" target="_blank">Pinterest</a> </li>
                        </ul>
                    </section>
                    <section>
                        <ul id="menuLateral2">
                            <li> <span class="dir1">Criatividade </span> <span class="esq1"> <span class="ponto preenchido"></span>  <span class="ponto preenchido"></span> <span class="ponto preenchido"></span> <span class="ponto preenchido"></span> <span class="ponto "></span></span></li>
                            <li> <span class="dir1">Responsabilidade </span> <span class="esq1"> <span class="ponto preenchido"></span>  <span class="ponto preenchido"></span> <span class="ponto preenchido"></span> <span class="ponto preenchido"></span> <span class="ponto "></span></span></li>
                            <li> <span class="dir1">Trab. em equipe</span> <span class="esq1"> <span class="ponto preenchido"></span>  <span class="ponto preenchido"></span> <span class="ponto preenchido"></span> <span class="ponto "></span> <span class="ponto "></span></span></li>
                            <li> <span class="dir1">Organização </span> <span class="esq1"><span class="ponto preenchido"></span>  <span class="ponto preenchido"></span> <span class="ponto preenchido"></span> <span class="ponto "></span> <span class="ponto "></span></span></li>
                            <li> <span class="dir1">Pontualidade </span> <span class="esq1"><span class="ponto preenchido"></span>  <span class="ponto preenchido"></span> <span class="ponto preenchido"></span> <span class="ponto preenchido"></span> <span class="ponto "></span></span></li>
                            <li> <span class="dir1">Outro </span> <span class="esq1"> <span class="ponto "></span>  <span class="ponto "></span> <span class="ponto "></span> <span class="ponto "></span> <span class="ponto "></span></li>

                        </ul>

                    </section>
                    <section>

                    </section>

                </aside>
                <article id="principal">
                    <!--Secção1-->
                    <section class="seccao secClaro" id="sobre" >

                        <h1><span class="barraBranco">  </span> Sobre </h1>
                        <div class="conteudo conteudoSpan"> 
                            <p>
                                Há duas coisas que não sei fazer nesta vida, dançar e jogar futebol.
                                Futebol porque não vejo porquê me interessar pela coisa.<br/> Já a dança, Epah! Acho que não nasci para isso hahahahah, mas enfim, mbora continuar.
                            </p>
                            <div>
                                <img id="foto2" src="imagens/foto2.jpg">
                                <div id="sobreDireita">
                                    <h3> OLÁ MUNDO, SOU <span> CINQUENTA </span><br/> Estudante de Informática</h3>
                                    <p> 
                                        Sou um tipo que estuda informática. Mais do que a tecnologia aprecio design, fotografia, cinema, enfim acho que tudo que envolve criatividade. <br/>
                                        Gosto da seguinte frase: "devemos pensar em algo que todo mundo vê mas que ninguém nunca pensou", na verdade não me lembro onde roubei esta frase, mas prontos, peguei.
                                    </p>
                                </div>
                            </div>
                        </div>
                    </section>

                    <!--secção2-->
                    <section class="seccao secClaro" id="educacao">

                        <h1><span class="barraBranco"> </span> Educação</h1>

                        <div class="conteudo"> 
                            <table id="tabelaEd" >
                                <caption>Abaixo o cronograma do processo de aprendizagem</caption>
                                <tr class="linhaEd"><td class="colunaAno" rowspan="2"> 2016 ~ 2019</td><td class="colunaInfo"> Lic. em Informática </td></tr> <tr class="linhaEd"><td class="colunaInfo">Universidade Eduardo Mondlane </td></tr>
                                <tr class="linhaEd"><td class="colunaAno" rowspan="2">2014 - 2015</td> <td class="colunaInfo"> Nível médio  </td></tr> <tr class="linhaEd"><td class="colunaInfo"> Escola Secundária da Polana</td></tr>
                                <tr class="linhaEd"><td class="colunaAno" rowspan="2">2011 - 2013</td><td class="colunaInfo"> Nível básico</td></tr> <tr class="linhaEd"><td class="colunaInfo">   Escola Secundária do Noroeste 1</td></tr>
                                <tr class="linhaEd"><td class="colunaAno" rowspan="2">2003 - 2010</td> <td class="colunaInfo"> Nível elementar </td></tr> <tr class="linhaEd"><td class="colunaInfo">  Escola Primária Completa Maguiguana</td></tr>
                                <tr class="linhaEd"><td class="colunaAno" rowspan="2">2000 - 2002</td>  <td class="colunaInfo">Gatinhar, comer </td></tr> <tr class="linhaEd"><td class="colunaInfo"> Creche Centro Cultural aberto "KURHULA"</td></tr>
                            </table>




                        </div>
                    </section>
                    <section class="seccao" id="portfolio">
                        <h1><span class="barraBranco">  </span> Portfólio</h1>
                        <div class="conteudo conteudoSpan"> 
                            <div id="contextoPort">
                                <h3> MiCiSa, v1.0 e v2.0</h3>
                                <p> Sistema para Gestão de recurso humanos. <br> com Micaela Freitas e Samira Flávia</p>

                                <div class="imagens">
                                    <span> <img src="imagens/micisa12.jpg"></span>
                                    <span> <img src="imagens/micisa13.jpg"></span>
                                    <span> <img src="imagens/micisa24.jpg"></span>
                                </div>


                                <div class="imagens">
                                    <span> <img src="imagens/micisa21.jpg"></span>
                                    <span> <img src="imagens/micisa22.jpg"></span>
                                    <span> <img src="imagens/micisa23.jpg"></span>
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
                                <!--<span id="amigos">AMIGOS</span>-->
                            </div>
                        </div>
                    </section>

                </article>

            </div>
            <footer>
                <span class="item"> <a href="https://www.facebook.com/50enta" target="_blank"><img src="imagens/402-facebook2.png"></a></span>
                <span class="item"><a href="https://github.com/50enta" target="_blank"><img src="imagens/433-github_1.png"></a></span>
                <span class="item"> <a href="https://www.linkedin.com/in/valter-cinquenta-0ba822121/" target="_blank"><img src="imagens/458-linkedin_1.png"></a></span>
                <span class="item"><a href="https://www.instagram.com/5enta_/" target="_blank"><img src="imagens/403-instagram_1.png"></a></span>
            </footer>
        </div>
    </body>
</html>
