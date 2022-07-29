<!DOCTYPE html>
<html lang="pt-br">
<meta charset="UTF-8"/>
<head>
<title></title>
<link rel="stylesheet" type="text/css" href="_css/style.css"/>
</head>
<body>
<header>
    <nav>
        <ul>
        <li><a href="#" style="border-bottom: 4px solid black;">Início</a></li>
        <li><a href="loja/">Loja</a></li>
        <li><a href="regras.html">Regras</a></li>
        <li><a href="horas.html">Horários</a></li>
        </ul>
    </nav>
</header>
<section class="ip">
    <h1>redehunters.net</h1>
    <h2>O melhor e maior servidor de Rank UP da América Latina!</h2>
    <p>Estamos atualmente com <b><?php echo GetOnlinePlayers('hypixel.net'); ?></b> jogadores online</p>
</section>
<section class="informacoes">
    <div id="item">
    <img src="_icons/infos-game.png"/>
    <h1>Modos de Jogo</h1>
    <p>Atualmente estamos focando<br/> no modo de jogo <b>Rank UP</b></p>
    </div>
    <div id="item">
    <img src="_icons/infos-brasil.png"/>
    <h1>Ping</h1>
    <p>Hospedagem Brasileira, com<br/> ping médio de <b>15ms</b></p>
    </div>
    <div id="item">
    <img src="_icons/infos-suporte.png"/>
    <h1>Suporte</h1>
    <p>Suporte via <b><a href="#" style="color: blue;">Discord</a></b>,<br/> para qualquer assunto/dúvida</b></p>
    </div>
</section>
<section class="informacoes2">
        <div class="staff-div">
            <h1><img src="_icons/staff-glassminecraft.png" style="height: 30px; margin-bottom: -5px;"/>Equipe</h1>
            <img src="_icons/staff-user.png" style="height: 20px; margin-bottom: -5px;"/><a href="">Direção</a>
            <p>Syke</p>
            <p>Syke</p>
            <p>Syke</p>
            <img src="_icons/staff-user.png" style="height: 20px; margin-bottom: -5px;"/><a href="">Administração</a>
            <p>Syke</p>
            <p>Syke</p>
            <p>Syke</p>
        </div>

            <div class="boxes">
            <div class="grid-box1">
            <img src="_icons/book.png" style="margin-bottom: -10px;"/>
            <h1>Já leu as regras do servidor?</h1>
            <p>Fique por dentro para evitar punições futuras!</p>
            <a href="regras.html">Acessar!</a>
            </div>
            </div>
            <div class="boxes">
            <div class="grid-box2">
            <img src="_icons/events.png" style="margin-bottom: -10px;"/>
            <h1>Eventos</h1>
            <p>Veja os horários e premiações de cada evento!</p>
            <a href="horas.html">Acessar!</a>
            </div>
            </div>
            <div class="boxes">
            <div class="grid-box3">
            <img src="_icons/loja.png" style="margin-bottom: -10px;"/>
            <h1>Já conhece a loja do servidor?</h1>
            <p>Acesse e visualize os produtos disponíveis!</p>
            <a href="/loja/">Acessar!</a>
            </div>
            </div>

        <div class="discord">
        <iframe src="https://discord.com/widget?id=907284910354616341&theme=dark" width="300" height="400" allowtransparency="true" frameborder="0" sandbox="allow-popups allow-popups-to-escape-sandbox allow-same-origin allow-scripts"></iframe>
        </div>
</section>
<footer>
<p>&copy; Rede Hunters</p>
<div id="redes-sociais-footer">
    <a href=""><img src="_icons/discord.png"/></a>
    <a href=""><img src="_icons/twitter.png"/></a>
    <a href=""><img src="_icons/instagram.png"/></a>
</div>
</footer>
</body>
</html>

<?php
function GetOnlinePlayers($ip, $port = 25565) {
    /*
        GetOnlinePlayers PHP function by Mario Latif.
            Usage:
                GetOnlinePlayers(SERVER_IP, SERVER_PORT[optional])
    */
   
    // Create a CURL connection to the API.
    $ch = curl_init('https://api.minetools.eu/ping/'.$ip.'&port='.$port);
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
    $results = curl_exec($ch);
    curl_close($ch);
   
    // Unserialize the JSON output
    $json = json_decode($results, true);
   
    // Return the online players
    $onlineplayers = $json['players']['online'];
    return $onlineplayers;
}
?>