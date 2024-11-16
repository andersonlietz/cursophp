<?php
$pessoas = [
'Matheus'=> 24,
'Sofia' => 30,
'Daniel' => 40,
'José' => 54,
'Maria' => 60,
'Carolina' => 62,
'Benedita' => 71
];
?>

<table border="1">
<tr>
    <th>Nome</th>
    <th>Idade</th>
</tr>
<?php foreach($pessoas as $nome => $idade):?>
    <tr>
    <td><?=$nome?></td>
    <td><?=$idade?></td>
    </tr>
    <?php endforeach;?>
</table>















