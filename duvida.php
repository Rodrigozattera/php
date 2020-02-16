<?php 

$hierarquia = array(

	array(

		'nome_cargo' => 'CEO',
		'subordinados'=> array(
			// inicio: Diretor
			array(

				'nome_cargo'=>'Diretor Comercial',
				'subordinados'=>array(
					//inicio: Gerente de Vendas
					array(
						'nome_cargo'=>'Gerente de Vendas',
						'subordinados'=>array(
							//inicio: caixa
							array(

								'nome_cargo'=>'caixa'

							)
							//termino: caixa
						)
					),
					//termino: Gerente de Vendas
					//inicio: faxineiro
					array(
						'nome_cargo'=>'faxineiro'
					)
					//termino: faxineiro

				)
			),

			//termino: Diretor Comercial
			//inicio : Diretor Financeiro
			array(
				'nome_cargo'=>'Diretor Financeiro',
				'subordinados'=>array(
					//inicio: gerente de contas a pagar
					array(
						'nome_cargo'=>'Gerente de Contas a Pagar',
						'subordinados'=>array(
							//inicio: Supervisor de pagamentos
							array(
								'nome_cargo'=>'Supervidor de Pagamentos'
							)

							//termino: Supervisor de pagamentos
						)
					),
					//termino: gerente de contas a pagar
					//inicio: Gerente de compras
					array(
						'nome_cargo'=>'Gerente de compras',
						'subordinados'=>array(
							//inicio:Supervisor de suprimentos
							array(
								'nome_cargo'=>'Supervidor de Suprimentos',
								'subordinados'=>array(
									//inicio: funcionario
									array(

										'nome_cargo'=>'Funcionario'

									)
									//termino: funcionario


								)
							)
							//Termino: Supervisor de suprimentos
						)
					)
					//termino:gerente de compras
				)

			)
			//termino: Diretor Financeiro

		)

	)

);

function exibe($cargos){

	$html = '<ul>';

	foreach ($cargos as $cargo) {

		$html .="<li>";

		$html .=$cargo['nome_cargo'];

		if(isset($cargo['subordinados'])&& count($cargo['subordinados'])> 0){

			$html .= exibe($cargo['subordinados']);


		}

		$html .="</li>";


	}


	$html .="</ul>";

	return $html;


};

echo exibe($hierarquia);







 ?>