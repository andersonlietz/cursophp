<?php

$ranking = [
'João'=>250,
'Marcelo'=>400,
'Felipe'=>320,
'Paulo'=>406,
'Teodoro'=>839,
'Samuel'=>9284,
'Tiago'=>849,
'Emanuel'=>2943,
'Davi'=>9304,
'Moisés'=>930,
'José'=>034,
'Marcos'=>9302,
'Moacir'=>390,
'Juca'=>402,
'Jocelino'=>493,
'Marcolino'=>3945,
'Joacir'=>490,
'Tobias'=>394
];
arsort($ranking);
?>
<h1>Ranking</h1>
<?php foreach($ranking as $pessoa => $pontuacao): ?>
    <li><?=$pessoa ?> -><?=$pontuacao?> pontos.</li>
    <?php endforeach; ?>










