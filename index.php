<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>A Brincadeira | Anton Checkov</title>
    <link rel="stylesheet" href="css/style.css">
    <meta name="viewport" content="width=device-width, user-scalable=no">
    <script src="https://cdn.jsdelivr.net/npm/p5@0.10.2/lib/p5.js"></script>
    <script src="javascript/parallax.js"></script>
</head>
<body>
<audio id="playAudio" autoplay loop>
    <source src="som/bg-music.mp3" type="audio/mp3">
    <source src="som/bg-music.ogg" type="audio/ogg">
</audio>
<main class="wrapper container">
    <!-- CAPA -->
    <div class="capa ocupa-16-coluna" style="grid-row: 1 / span 31;">
        <div style=" grid-column:11/ span 5; grid-row: 10/ span 3;  z-index: 2">
            <h1> A BRINCADEIRA </h1>
            <h2> Anton Checkov </h2>
        </div>
        <div style="grid-column:11/ span 4; grid-row:1/ span 10; position:relative; box-shadow: transparent;top:-50vw;">
            <img class="imagemcapa" src="imagens/fotos/alexandre.jpg" alt=""
                 style="box-shadow: none; border-radius: 50%;"/>
        </div>
        <img class="imagemcapa" style="grid-column: 5 / span 4; grid-row: 1; position: relative; top:-50vw;"
             src="imagens/fotos/checkov-wife.jpg" alt="">
        <img class="imagemcapa" style="grid-column: 7 / span 3; grid-row: 2; z-index: 3;position: relative; top:-70vw;"
             src="imagens/fotos/checkov-wife-2.jpg" alt="">
        <img class="imagemcapa"
             style="grid-column: 11/ span 4; grid-row: 1 /span 5; position: relative; top: -100vw;left:125vh"
             src="imagens/fotos/checkov-family.jpg" alt="">
    </div>

    <!-- Página 1 -->
    <div class="ocupa-16-coluna wrapper sub-wrapper">
        <div style="grid-column: 1 / span 5; grid-row: 1 / span 10">
            Anton Chekhov, nasceu em 29 de Janeiro de 1860. Foi o
            terceiro de seis filhos e teve uma educação rígida e religiosa,
            que lhe deixou marcas psicológicas até ao resto da sua vida,
            que por vezes se encontram camufladas nas suas obras.
            <br><br>
            Chekhov estudou medicina em Moscovo, cidade para onde se
            mudou em pequeno devido ao facto de o seu pai ser
            conflituoso na sua terra natal — este sofria de problemas de
            alcoolismo. Desde cedo que teve contribuir monetariamente
            para a sobrevivência dos seus irmãos e da sua mãe, devido a
            essa necessidade, começou a escrever contos para jornais.
            que por vezes se encontram camufladas nas suas obras.
            <br><br>
            Mais tarde, Anton casou com Olga, uma atriz Russa.
            Em maio de 1904, ele morreu de uma doença, que já o viria a afetar há alguns anos, a tuberculose.
        </div>
        <div class="pagina1_nota1 diario"
             style=" grid-column:6/ span 5; grid-row:1/span 10; position:relative; top:-20vw;">
            <?php include('imagens/ilustracoes/pagina1_nota1.svg'); ?>
        </div>

        <div class="russia diario" style="grid-column:14/ span 5; grid-row:1/ span 5; position:relative; top: -25vw;">
            <div class="russia">
                <?php include('imagens/ilustracoes/russia.svg'); ?>
            </div>
            <div class="russia_moscovo">
                <?php include('imagens/ilustracoes/russia_moscovo.svg') ?>
            </div>
        </div>
        <div class="noticio_dec_80" style="grid-column:7/span 4; grid-row:1/ span 8; position:relative; top: 5vw;">
            <img src="imagens/jornal/jornal-decadade80.png" alt=""/>
        </div>
        <div class="pagina1_nota2 diario"
             style=" grid-column:11/ span 5; grid-row:1/ span 3; position:relative; top: 10vw; z-index: 2">
            <?php include('imagens/ilustracoes/pagina1_nota2.svg'); ?>
        </div>
        <div class="data" style="grid-column:9/ span 4; grid-row:1/ span 5; position:relative; top: -25vw;">
            <h1>1860</h1>
        </div>

        <div class="pagina1_nota1">
            <?php include('imagens/ilustracoes/pagina1_nota1.svg'); ?>
        </div>
        <div class="pagina1_nota2">
            <?php include('imagens/ilustracoes/pagina1_nota2.svg'); ?>
        </div>
        <div class="russia">
            <?php include('imagens/ilustracoes/russia.svg'); ?>
        </div>
    </div>

    <!-- Página 2 -->
    <div class="ocupa-16-coluna wrapper sub-wrapper">
        <div style="grid-column: 1 / span 5; grid-row: 1 / span 10">
            Um meio-dia luminoso de Inverno… Um frio, de rachar, e a Nadenka, de braço dado comigo, cobrem-se-lhe os
            caracolinhos das têmporas e a penugem do buço com uma
            geada de prata. Estamos numa colina alta. Dos nossos pés até lá baixo estende-se um declive liso em que o
            sol se reflete como num espelho. Junto a nós está um trenó coberto com um pano vermelho.

            — Vamos escorregar Nadenka Petrovna! — imploro-lhe eu. — Só uma vez! Garanto-te que chegamos lá abaixo sãos
            e salvos.

            Mas Nadenka tem medo. A distância que vai desde as suas pequeninas galochas ao fundo da colina parece-lhe
            assustadora, como um abismo desmedidamente fundo. Ela congela e fica sem respiração só de olhar para baixo,
            só de a convidar a sentar-se no trenó; o que acontecerá se se arriscar a lançar-se pelo abismo? Ela morre,
            enlouquece.

            — Suplico-te! — digo eu. — Não tenhas medo! Isso é fraqueza, covardice.

            Finalmente a Nadenka concorda, consigo ver na cara dela que quando ela o faz, ela teme pela sua vida.
            Sento-a no trenó, pálida e trémula, envolvo-a com um braço e lanço-me com ela no abismo.
        </div>
        <div class="pagina2_nota1 diario"
             style="grid-column:9/ span 5; grid-row:1/ span 5; position:relative; top: -15vw;">
            <?php include('imagens/ilustracoes/pagina2_nota1.svg'); ?>
        </div>
        <div class="pagina2_nota2 diario" style="grid-column:6/ span 5; grid-row:1/ span 12; position:relative;">
            <?php include('imagens/ilustracoes/pagina2_nota2.svg'); ?>
        </div>
        <div class="pagina2_nota3 diario"
             style="grid-column:9/ span 7; grid-row:1/ span 5; position:relative; top:40vw;">
            <?php include('imagens/ilustracoes/pagina2_nota3.svg'); ?>
        </div>
        <div style="grid-column:14/span 3; grid-row:1/ span 8; position:relative; top: -25vw;">
            <img src="imagens/jornal/jornal-conturbacaopolitica.png" alt=""/>
        </div>
        <div class="data"
             style="grid-column:7/ span 6; grid-row:1/ span 5; position:relative; top: 25vw; transform: rotate(90deg);">
            <h1>1905</h1>
        </div>
    </div>

    <!-- Página 3 -->
    <div class="ocupa-16-coluna wrapper sub-wrapper">
        <div style="grid-column: 1 / span 5; grid-row: 1 / span 10">
            O trenó voa como uma bala. O ar que cortamos chicoteia-nos o rosto, rosna, assobia aos ouvidos, belisca de
            raiva, quer-nos arrancar a cabeça dos ombros. A força do vento não nos deixa respirar. Parece que o próprio
            diabo nos abraça com as suas garras e, com um rugido, nos arrasta para o inferno.

            Os objetos à volta do trenó fundem-se numa faixa comprida, desfocada, a correr loucamente… Mais um minuto e
            morremos, parece!

            <h1>— Amo-te Nádia! — </h1> digo a meia voz.

            Agora o trenó já desliza mais devagar, cada vez mais devagar, o rugido do vento e o zumbir dos patins já são
            menos assustadores, já conseguimos respirar, e finalmente, estamos no fundo. Nadenka está mais morta do que
            viva. Pálida, quase não respira… Ajudo-a a levantar-se.

            Não volto a descer por nada deste mundo. — diz ela, arregalando para mim uns olhos aterrorizados.— Por nada
            deste mundo. Por pouco não morri!

            Pouco depois, recomposta, olha-me nos olhos com dúvida: será que fui eu que disse aquelas palavras ou foi
            iludida pelo barulho do vento de furacão na descida? E eu, estou ao pé dela, a fumar, a examinar
            cuidadosamente a minha luva.
        </div>
        <div class="diario" style="grid-column:8/ span 7; grid-row: 1 / span 5; position:relative; top: -10vw;">
            <?php include('imagens/ilustracoes/pagina3_nota1.svg'); ?>
        </div>
        <div class="diario"
             style="grid-column:6/ span 9; grid-row: 1 / span 9; position:relative; background:transparent; box-shadow:none;">
            <?php include('imagens/ilustracoes/pagina3_nota2_alexandre.svg'); ?>
        </div>
        <div class="diario" style="grid-column: 6 / span 7; grid-row: 12 / span 5;">
            <?php include('imagens/ilustracoes/pagina3_nota3.svg'); ?>
        </div>
        <div style="grid-column:8/ span 3; grid-row: 1/ span 5; position:relative; top: 53vw;left:2vw;">
            <img src="imagens/jornal/jornal-tuberculose.png" alt=""/>
        </div>
        <div class="imagemcapa"
             style="grid-column:11/ span 4; grid-row:1/ span 10; position:relative;top:0.5vw;left: -3vw; box-shadow: transparent; ">
            <img src="imagens/fotos/alexandre.jpg" alt="" style="border-radius: 50%;"/>
        </div>
    </div>

    <!-- Página 4 -->
    <div class="ocupa-16-coluna wrapper sub-wrapper scene">
        <div style="grid-column: 1 / span 5; grid-row: 1 / span 10">
            Ela pega-me pelo braço e passeamos demoradamente pelo sopé do monte. O mistério, aparentemente, não a deixa
            em paz. Foram ou não proferidas aquelas palavras? Sim ou não? Sim ou não? É uma questão de orgulho, honra,
            vida, felicidade, uma questão muito importante,- a questão mais importante do mundo.
            <br><br>
            Nadenka olha para mim de um modo penetrante, impaciente, responde a despropósito, está à espera que eu fale.
            Oh, que jogo de emoções naquela doce cara, que jogo! Vejo que luta consigo própria, que tem necessidade de
            falar, de dizer alguma coisa, de perguntar, mas não encontra as palavras, sente-se envergonhada,
            aterrorizada, bloqueada pela felicidade…
            <br><br>
            — Sabes uma coisa? — diz ela sem olhar para mim.
            <br><br>
            — O que?
            <br><br>
            — E se fossemos… escorregar mais uma vez?
            <br><br>
            Subimos ao monte de gelo por uma escada. Novamente, sento a pálida e trémula Nadenka no trenó, novamente
            voamos para o abismo terrível, novamente ruge o vento e zumbem os patins, e novamente, no momento mais
            vertiginoso e atroador da descida, digo a meia voz:
        </div>

        <div style="grid-column: 1 / span 10; grid-row: 12">
            <h1>Eu amo-te Nadenka! </h1>
        </div>

        <img class="layer" data-depth=".05" width="100%"
             style="grid-column: 1 / span 7; grid-row: 1; z-index: -2; position: relative; top: -50vh"
             src="imagens/fotos/montanha-neve.jpg" alt="">

        <div class="diario wrapper layer" data-depth=".05"
             style="grid-column: 7 / span 9; grid-row: 1 / span 18; z-index: -1; top: -250px;">
            <div style="grid-column: 1 / span 4; grid-row: 1 / 6">
                <?php include('imagens/ilustracoes/rapariga-medo-texto.svg'); ?>
            </div>

            <div style="grid-column: 1 / span 6; grid-row: 9;">
                <?php include('imagens/texto-diario/texto-1-pag-4.svg'); ?>
            </div>

            <div style="grid-column: 6 / span 2; grid-row: 12;)">
                <?php include('imagens/ilustracoes/seta.svg'); ?>
            </div>
        </div>

        <img class="layer" data-depth=".15" style="grid-area: 1 / 10 / auto / span 4 ;position: relative; top: -200px;"
             src="imagens/fotos/checkov-wife.jpg" alt="">

        <img class="layer" data-depth=".2" style="grid-area: 2 / 12 / auto / span 3; z-index: 3"
             src="imagens/fotos/checkov-wife-2.jpg" alt="">

        <video class="layer" data-depth=".15"
               style="grid-area: 16 / 6 / auto / span 6; box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);"
               width="100%" autoplay loop muted>
            <source src="video/dança.mp4" type="video/mp4">
        </video>
    </div>

    <!-- Página 5 -->
    <div class="ocupa-16-coluna wrapper sub-wrapper scene">
        <div style="grid-row: 1 / span 10; grid-column: 1 / span 5">
            Quando o trenó parou, Nadenka olhou para o monte que acabou de descer, depois examina a minha cara
            demoradamente, escuta a minha voz indiferente e impassível, e toda ela, todinha, até ao regalo e ao capucho,
            exprimem uma perplexidade extrema. Está-lhe escrito no rosto: “O que se está a passar? Quem disse disse
            aquelas palavras? Foi mesmo ele ou pareceu-me?” Esta incerteza enerva-a, faz com que ela perca a paciência.
            <br><br>
            A pobre rapariga não responde às minhas questões, com o sobrolho carregado, prestes a chorar.
            <br><br>
            — Não está na hora de irmos para casa? — Perguntei-lhe.
            <br><br>
            — Mas eu… estou a gostar de escorregar no trenó — diz ela corando.
            <br><br>
            — E se fossemos mais uma vez?
            <br><br>
            “Gosta” de escorregar mas, ao sentar-se no trenó, está como das outras vezes, pálida, quase não respira de
            medo, treme.
            <br><br>
            Descemos pela terceira vez, e vejo como ela olha para a minha cara, estuda o movimento dos meus lábios. Mas
            eu aperto um lenço contra os meus lábios, tusso e, chegados a meio do monte, acabo por dizer:
            <br><br>
            <h1>Eu amo-te Nadia!</h1>
        </div>
        <div class="diario wrapper layer" data-depth=".05" style="grid-row: span 10; grid-column: 7 / span 9">
            <div style="grid-column: span 5; grid-row: 6">
                <?php include('imagens/ilustracoes/evolucao-texto.svg'); ?>
            </div>
            <img style="grid-column: 1 / span 5; grid-row: span 5; position: relative; top: -200px;"
                 src="imagens/fotos/checkov-family.jpg" alt="">
            <div style="grid-row: 1; grid-column: 6 / span 2">
                <?php include('imagens/texto-diario/anotacao-familia.svg'); ?>
            </div>
        </div>
    </div>

    <!-- Página 6 -->
    <div class="ocupa-16-coluna wrapper sub-wrapper scene">
        <div style="grid-row: span 15; grid-column: 1 / span 5;">
            E o mistério continua um mistério!
            <br><br>
            Nadenka está calada, pensativa… Acompanho-a a casa,
            ela tenta ir mais devagar, abranda o passo, sempre à espera que eu diga aquelas palavras. E vejo como a alma
            dela sofre, o esforço que faz para não dizer: “Não é possível que tenha sido o vento! Também não quero que
            tenha sido o vento!”
            <br><br>
            No dia seguinte, de manhã, recebo um bilhete: “Se hoje fores ao monte de gelo, vem buscar-me. N.” Desde
            então, vou todos os dias com a Nadenka ao monte de gelo e ao voarmos a pique de trenó, digo sempre, a meia
            voz, as mesmas palavras:
            <div>
                <h1>Amo-te Nadia!</h1>
            </div>
            Nadenka rapidamente criou o hábito de ouvir esta frase, como se cria o hábito do álcool ou da morfina. Não
            pode viver sem ela. É verdade que escorregar pelo monte de gelo continua a meter-lhe medo, mas agora o medo
            e o perigo dão um fascínio especial a estas palavras de amor, palavras que continuam a ser um mistério e um
            tormento para a alma. Os suspeitos continuam a ser os mesmos: eu e o vento… Não sabe qual dos dois lhe
            segreda o seu amor, mas, pelos vistos, isso já não importa; não importa de que copo bebe desde que continue
            a ficar embriagada.
        </div>
        <div class="diario wrapper layer" data-depth=".05"
             style="grid-column: 7 / span 9; grid-row: 4 / span 15; z-index: -3;">
            <div style="grid-column: 1 / span 4; grid-row: 1">
                <?php include('imagens/ilustracoes/cigarro-texto.svg'); ?>
            </div>
            <img style="grid-column: 6 / span 3; grid-row: 1; z-index: -1; position: relative; top: -500px"
                 src="imagens/fotos/publicidade-1.jpg" alt="">
            <img style="grid-column: 5 / span 5; grid-row: 1;" src="imagens/fotos/publicidade-2.jpg" alt="">
            <div style="grid-column: 3 / span 6; grid-row: 9">
                <?php include('imagens/texto-diario/texto-2-pag-6.svg'); ?>
            </div>
        </div>
    </div>

    <!-- Página 7 -->
    <div class="ocupa-16-coluna wrapper sub-wrapper">

        <div class="ocupa-5-coluna">
            Sucedeu que, ao meio dia, fui sozinho ao monte; escondido entre a multidão, vejo Nadenka a aproximar-se do
            monte, a procurar-me com os olhos… Depois, sobe timidamente as escadas… Ela está aterrorizada por ir
            sozinha,
            oh, quão aterrorizada! Está pálida como o neve, treme, caminha com quem vai para a sua execução, mas vai,
            ainda
            sem hesitar, determinada.
            <br><br>
            Aparentemente, resolveu ter a certeza: será que vai ouvir as palavras maravilhosas, doces, não estando eu
            com
            ela? Vejo-a, pálida, com a boca aberta de terror, a sentar-se no trenó, a fechar os olhos, despedindo-se
            para
            sempre da terra, vejo-a partir… Zzzz — zumbem os patins.
            <br><br>
            Não sei se Nadenka ouviu as palavras… Só a vejo a sair do trenó, fraca, abalada. Pela cara dela, não saberá
            se
            ouviu ou não ouviu alguma coisa. Enquanto deslizava, o medo de ter-lhe tirado a capacidade de ouvir, de
            distinguir os sons, de perceber…
            <br><br>
            Mas agora é Março e a Primavera chegou… O Sol já é mais carinhoso. O nosso monte de gelo escurece, perde o
            brilho e, por fim, derrete. Acabaram-se os passeios de trenó. A pobre Nadenka já não tem onde ouvir aquelas
            palavras,
            também já ninguém lhas pode dizer, o vento calou- se e eu estou-me a preparar para ir para Petersburgo — por
            muito tempo, talvez para sempre.
        </div>


        <div class="ocupa-11-coluna" style="grid-row: 1/ 16">
            <div style="grid-row: 1/ 16">
                <img src="imagens/fotos/paisagem-pessoas.jpg" alt="">
            </div>
            <div style="grid-row: 10/ 13" id="defaultCanvas0">
                <?php include('imagens/ilustracoes/montanhas.svg'); ?>
            </div>
        </div>
        <div class="ocupa-7-coluna" style=" grid-row: 16">
            <div class="diario">
                <?php include('imagens/texto-diario/texto-1-pag-7.svg'); ?>
            </div>
        </div>
        <div class="ocupa-4-coluna canvas">
            <img src="imagens/fotos/paisagem-sociedade-2.jpg" alt="">
        </div>

        <div class="ocupa-3-coluna" style="grid-row: 1/ 16">
            <img id="carta" src="imagens/fotos/carta.jpg" alt="">
            <?php include('imagens/texto-diario/texto-2-pag-7.svg'); ?>
        </div>
        <div class="ocupa-4-coluna " id="fotoSociedadeVpaisagem" style="grid-row: 1/ 16;z-index: -1">
            <img src="imagens/fotos/paisagem-sociedade-3.jpg" alt="">
        </div>

    </div>

    <!-- Página 8 -->
    <div class="ocupa-16-coluna wrapper sub-wrapper">
        <div class="ocupa-5-coluna">
            Uma vez, antes da minha partida, uns dois dias antes, estava eu sentado ao crepúsculo num jardinzinho,
            separado
            do quintal de Nadia por um muro alto espetado de pregos… Ainda estava frio, por baixo do estrume ainda
            havia
            neve, as árvores ainda estavam despidas mas já cheirava a Primavera, as gralhas preparavam-se para ir
            dormir,
            gritavam alto. Aproximo-me do muro e fico algum tempo a espreitar por uma fenda. Vejo como a Nadenka sai
            para
            o sol da rua com um olhar triste voltado para o céu… O vento da primavera sopra-lhe diretamente no rosto
            pálido,
            amargurado… Lembra-lhe o vento que outrora nós rugia no mente e como ela ouvia aquelas palavrinhas, o
            rosto
            dela
            torna-se triste, muito triste, pela face desliza-lhe uma lágrima…
            <br><br>
            A pobre rapariga estende as duas mãos como que a pedir que o vento lhe traga outra vez aquelas palavras…
            Então,
            fico a espera que o vento sopre para dizer a meia voz:
            <br><br>
            <h1>— Amo-te Nadia!</h1>
            <br><br>
            O que acontece com Nadenka, meu Deus! Solta um grito, abre-se num sorriso amplo e estende as mãos ao
            encontro do
            vento, alegre, feliz, tão bonita.
            <br><br>
            Eu vou fazer as malas…

        </div>
        <div style="grid-column: 4 / span 5; grid-row: 14 / span 10; width: 100%;">
            <?php include('imagens/ilustracoes/checkov-pensador.svg'); ?>
        </div>


        <div style="grid-column: 6 / span 5;">
            <?php include('imagens/fotos/1904.svg'); ?>
        </div>

        <img style="grid-column:13/ span 4; z-index: -1" src="imagens/fotos/pensador.jpg" alt="">


        <div class="diario" style="grid-column: 9/ span 6;z-index: 1; grid-row: 5 / span 4">
            <?php include('imagens/texto-diario/texto-2-pag-8.svg'); ?>
        </div>


        <div class="diario" style="grid-column: 11 / span 6; grid-row: 10 / span 4;z-index: 1">
            <?php include('imagens/texto-diario/texto-1-pag-8.svg'); ?>
        </div>


    </div>

    <!-- Página 9 -->
    <div class="ocupa-16-coluna wrapper sub-wrapper">
        <div class="ocupa-5-coluna">
            Isto foi há muito tempo. Nadenka já está casada, casaram-na ou casou de livre vontade — tanto faz — com
            o
            secretário do concelho da nobreza e já tem três filhos. O tempo em que íamos escorregar de trenó juntos
            e o
            vento trazia aquele “Amo-te Nadenka!” é agora a mais feliz e mais bonita memória da sua vida…
            <br><br>
            Mas agora que sou mais velho, não compreendo porque lhe dizia aquelas palavras, porque é que eu joguei
            aquele
            jogo...
        </div>

        <div class="ocupa-5-coluna" style="grid-row: 11/ span 5;">

            <h1 id="Aborrecmento">Aborrecimento</h1>
        </div>

        <div class="ocupa-5-coluna " style="grid-row: 2/ 16">

            <?php include('imagens/ilustracoes/tabuleiro-xadrez.svg'); ?>

        </div>

        <div class="ocupa-1-coluna" style="grid-row: 2/ 16">

            <?php include('imagens/ilustracoes/xadrez-peca-2.svg'); ?>

        </div>
        <div class="ocupa-1-coluna " style="grid-row: 6/ 16">
            <div id="move">
                <?php include('imagens/ilustracoes/xadrez-peca-4.svg'); ?>
            </div>
        </div>
        <div class="ocupa-1-coluna" style="grid-row: 9/ 16">

            <?php include('imagens/ilustracoes/xadrez-peca-1.svg'); ?>

        </div>
        <div class="ocupa-1-coluna" style="grid-row: 3/ 16">
            <?php include('imagens/ilustracoes/xadrez-peca-3.svg'); ?>
        </div>

        <div class="ocupa-1-coluna" style="grid-row: 7/ 16">
            <?php include('imagens/ilustracoes/xadrez-peca-4.svg'); ?>
        </div>
        <div class="ocupa-1-coluna" style="grid-row: 2/ 16">
            <?php include('imagens/ilustracoes/xadrez-peca-5.svg'); ?>
        </div>
        <div class="ocupa-1-coluna" style="grid-row: 10/ 16;">
            <?php include('imagens/ilustracoes/xadrez-peca-5.svg'); ?>
        </div>
    </div>


    <!-- CONTRACAPA -->
    <div class="ocupa-16-coluna capa wrapper" style="grid-row: 1/ span 31;z-index: -1">


        <div class="ocupa-4-coluna " style="grid-row: 11/ span 16;z-index:0;position: relative;">
            <img src="imagens/fotos/chekhov-inteiro.jpg" alt=""
                 style="grid-row: 12/30;position: relative; left: -80px ">

        </div>

        <div class="ocupa-1-coluna" style="grid-row: 10/30">
            <?php include('imagens/ilustracoes/xadrez-peca-branca-5.svg'); ?>

        </div>
        <div class="ocupa-1-coluna" style="grid-row: 15/30">
            <?php include('imagens/ilustracoes/xadrez-peca-branca-4.svg'); ?>
        </div>

        <div class="ocupa-4-coluna" style="grid-row: 8/30; ">
            <div class="textoContraCapa " style="stroke-width:3px;">

                <?php include('imagens/fotos/creditos.svg'); ?>

            </div>
        </div>
        <div class="ocupa-1-coluna" style="grid-row: 11/ span 16">
            <?php include('imagens/ilustracoes/xadrez-peca-branca-4.svg'); ?>
        </div>
        <div class="ocupa-1-coluna" style="grid-row: 16/ span 16">
            <?php include('imagens/ilustracoes/xadrez-peca-branca-1.svg'); ?>
        </div>

        <div class="ocupa-4-coluna" style="grid-row: 5/ span 16;position:relative" >
        <img src="imagens/fotos/Caezinhos.jpg">
        </div>
    </div>


</main>

<footer>
    <nav>
        <div id="home">
            Home
        </div>
        <div>
            <div class="botao-mostrar">
                Páginas
            </div>
            <div class="itens">
                <div id="1">
                    1
                </div>
                <div id="2">
                    2
                </div>
                <div id="3">
                    3
                </div>
                <div id="4">
                    4
                </div>
                <div id="5">
                    5
                </div>
                <div id="6">
                    6
                </div>
                <div id="7">
                    7
                </div>
                <div id="8">
                    8
                </div>
                <div id="9">
                    9
                </div>
            </div>
        </div>
        <div id="creditos">
            Créditos
        </div>
    </nav>
</footer>
<script src="javascript/geral.js"></script>
<script>
    var scene = document.getElementsByClassName('scene');

    for (var i = 0; i < scene.length; i++) {
        var parallax = new Parallax(scene[i]);
    }
</script>
<script src="javascript/sketch.js"></script>
</body>
</html>