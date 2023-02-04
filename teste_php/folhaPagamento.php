<?php 

$folhaPagamento = [
    ['Pedro','Dono','10/8','5000.00']
];
foreach($folhaPagamento as $salarioBruto){
    $salarioLiquido = ($salarioBruto[3] - (($salarioBruto[3] * 0.06) + ($salarioBruto[3] * 0.06) + 120));
    

    echo"<p>Nome Funcionario: $salarioBruto[0]</p>";
    echo"<p>Cargo $salarioBruto[1]</p>";
    echo"<p>Data admissão $salarioBruto[2]</p>";
    echo"<p>Salario bruto $salarioBruto[3]</p>";
    echo"<p>Salario Liquido $salarioLiquido</p>";

    

}


?>