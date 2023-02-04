<?php 
$notas = [
    ['Mat', 7, 8,9,10,8,75],
    ['Por',8, 10,9,10,8,75],
];
foreach($notas as $matriz){
    echo"<table>";
    echo "<thead>";
    echo "<tr>";
    echo "<td>Bimestre: $matriz[0]</td>";
    echo "<td>Nota1: $matriz[1]</td>";
    echo "<td>nota2: $matriz[2]</td>";
    echo "<td>nota3: $matriz[3]</td>";
    echo "<td>nota4: $matriz[4]</td>";
    echo "<td>Media: $matriz[5]</td>";
    echo "<td>Frequencia: $matriz[6]%</td>";
    echo"</tr>";
};
echo"</thead>";
echo "</table>";

$media = 8;
$frequencia = 75;
if($frequencia <= 75){
    if($media < 5){
        echo "<p>Aluno Reprovado, Frequencia de $frequencia%</p>";
    }else if ($media >= 7 ){
        echo "<p>Aluno Aprovado  Frequencia de $frequencia% </p>";
    }else{
        echo"<p>Reprovado</p>";
    }

}


?>