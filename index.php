<?php

# Funcao para demonstrar uma forma de se trabalhar com moeda Brasileira no php.
# Em outras linguaguens (fortemente tipadas) isso eh mais facil.
# No php uso essa funcao em meus projetos.

function CalculaRealBR($valor1, $valor2, $operacao){

	setlocale(LC_MONETARY, 'pt_BR');
	$valor1 = money_format('%n', $valor1);

	$valor2 = money_format('%n', $valor2);
	
	switch ($operacao) {
		case '*':

			$total = $valor1 * $valor2;
		break;

		case '/':

			$total = $valor1 / $valor2;
		break;

		case '+':

			$total = $valor1 + $valor2;
		break;

		case '-':

			$total = $valor1 - $valor2;
		break;
		
		default:
			echo "Ooops.. algo de errado";
			break;
	}

	return $total;
}

//echo CalculaRealBR(2450.89,.10,"+");

?>