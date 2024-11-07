<!DOCTYPE html>
<html lang="pt_BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pop in Rio</title>
</head>
<body>
    <!-- Formulário para escolher a cor -->
    <form method="POST">
        <label for="favcolor">Cor do site:</label>
        <input type="color" id="color" name="color" >
        <button type="submit">Salvar Cor</button>
    </form>
    <center>
        <h1>🎸 Rock in Rio 2024: A Maior Festa do Planeta 🎸</h1>
    </center>
    <h3>Prepare-se para viver o maior festival de música do mundo! O Rock in Rio está de volta, 
        e você não pode ficar de fora dessa experiência épica. A cada edição, o festival se reinventa 
        e traz as maiores lendas do rock, artistas de todos os gêneros e momentos inesquecíveis que 
        ficam marcados na memória de quem vive essa festa.</h3>
    <center>
        <h2>🌟 Lineup Incrível</h2>
    </center>
    <h4>Os maiores nomes do rock, pop, eletrônico, e muito mais, juntos no mesmo palco. Prepare-se para 
        ver suas bandas favoritas e descobrir novas sonoridades.</h4>
    <center>
        <h2>🌍 O Mundo Conectado</h2>
    </center>
    <h4>O Rock in Rio não é só um evento, é uma celebração global. Com a presença de fãs do mundo inteiro, 
        o festival é um ponto de encontro entre culturas, sons e estilos.</h4>
    <center>
        <h2>🎉 O Melhor da Cultura e Diversão</h2>
    </center>
        <h4>Além da música, o Rock in Rio oferece uma experiência única com gastronomia, 
            arte, tecnologia e sustentabilidade. São 7 dias de pura adrenalina, alegria e muita vibe positiva!</h4>
    <center>
        <h2>🤘 Rock in Rio é para todos!</h2>
    </center>
        <h4>Se você é fã de rock clássico, de hits do pop ou de novos ritmos, o festival tem 
            o som que vai fazer seu coração bater mais forte.</h4>
    <center>
        <h2>🎟️ Garanta já o seu ingresso!</h2>
    </center>
        <h4>Não perca a chance de fazer parte desse evento histórico e viver momentos que vão ficar com você para sempre.</h4>
    <center>
        <h2>🎶 Rock in Rio 2024</h2>
    </center>
        <h4>Onde a música encontra a magia e a energia dos fãs transforma tudo!</h4>
    <h2>Nos vemos em setembro. Se prepare, o show vai começar!</h2>



    <?php
    // Verifica se o cookie 'muda-cor' já foi setado
    if (isset($_COOKIE['muda-corrr'])) {
        // Se o cookie já existe, utiliza a cor salva no cookie
        $cor = $_COOKIE['muda-corrr'];
        echo "<style>body { background-color: $cor; }</style>";
        echo "cor selecionada com sucesso";
    } else {
        // Se o cookie não existe, verifica se o formulário foi enviado
        if (isset($_POST['color'])) {
            // Se o formulário foi enviado, pega a cor selecionada
            $cor = $_POST['color'];
            // Define o cookie com a cor escolhida, que durará 20 minutos
            setcookie('muda-corrr', $cor, time() + 60); // 1200 segundos = 20 minutos
            // Aplica a cor escolhida no fundo da página
            echo "<style>body { background-color: $cor; }</style>";
            echo "na espera da cor";

        } else {
            // Se nada foi escolhido ainda, define uma cor padrão
            $cor = "gray"; // Cor inicial
            echo "<style>body { background-color: $cor; }</style>";
            echo "cor padrão";
        }
    }
    ?>

</body>
</html>

