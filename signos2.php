<?php
	$dia= $_POST['dia'];
	$mes= $_POST['mes'];
	$ano = 2020;
		$data = $ano."-".$mes."-".$dia;
		date_default_timezone_set("America/Sao_Paulo");
			$data=strtotime($data);
			$aries = strtotime ("2020-03-21");
			$aries_final = strtotime ("2020-04-20");
			$touro = strtotime ("2020-04-21");
			$touro_final = strtotime ("2020-05-20");
			$gemeos = strtotime ("2020-05-21");
			$gemeos_final = strtotime ("2020-06-20");
			$cancer = strtotime ("2020-06-21");
			$cancer_final = strtotime ("2020-07-22");
			$leao = strtotime ("2020-07-23");
			$leao_final = strtotime ("2020-08-22");
			$virgem = strtotime ("2020-08-23");
			$virgem_final = strtotime ("2020-09-22");
			$libra = strtotime ("2020-09-23");
			$libra_final = strtotime ("2020-10-22");
			$escorpiao = strtotime ("2020-10-23");
			$escorpiao_final = strtotime ("2020-11-22");
			$sagitario = strtotime ("2020-11-23");
			$sagitario_final = strtotime ("2020-12-21");
			$capricornio = strtotime ("2020-12-22");
			$capricornio_final = strtotime ("2020-01-20");
			$aquario = strtotime ("2020-01-21");
			$aquario_final = strtotime ("2020-02-20");
			$peixes = strtotime ("2020-02-21");
			$peixes_final = strtotime ("2020-03-20");
	echo '<link href= "style.css" rel= "stylesheet" type= "text/css"/>';
	echo '<div class= "header"><h1 id= "nome"></h1></div>';
	echo "<div class= signo>";
	$r= checkdate($mes, $dia, $ano);
	if($r==1)
	{
		if($data>=$aries && $data<=$aries_final && $data<=$touro)
		{
			$signo= "Áries";
			echo "Áries é o primeiro signo do Zodíaco é o primeiro da tríade do elemento Fogo. Representa o fogo-centelha, que dispara todos os inícios e põe em movimento o próprio Zodíaco. A coragem das afirmações e compromisso fiel com a verdade são umas das características de Áries. O símbolo de Áries são os chifres do carneiro, que representam o sentido de força, poder, elevação e eminência. <br><br> Período: 21 de março a 20 de abril. <br><br> <img src= 'imagens/aries.jpeg' width= '40%'>";
		}
		elseif($data>=$touro && $data<=$touro_final && $data<=$gemeos)
		{
			$signo= "Touro";
			echo "O signo de Touro é o segundo do Zodíaco é o primeiro da tríade do elemento Terra. Regido por Vênus, com exaltação da Lua, representa a força da vida na sua plenitude. O símbolo de Touro é associado a uma ideia de plenitude e resistência. Traduz a ideia de uma grande força de trabalho e do apuro de todos os sentidos, principalmente do do instinto de conservação, de sensualidade e de uma enorme vocação para os prazeres da vida. <br><br> Período: 21 de abril a 20 de maio. <br><br> <img src= 'imagens/touro.jpeg' width= '40%'>";
		}
		elseif($data>=$gemeos && $data<=$gemeos_final && $data<=$cancer)
		{
			$signo= "Gêmeos";
			echo "Gêmeos é o terceiro signo do Zodíaco é o segundo da tríade do elemento Ar. Regidos por Mercúrio, os geminianos são comunicativos, versáteis e sociáveis. Gostam de criar linhas de raciocínio e especulações na tentativa de entender diversos assuntos. Entretanto, podem focar mais do que o necessário no mundo das ideias, e acabar se chocando com a maneira com que as coisas acontecem na realidade. <br><br> Período: 21 de maio a 20 de junho. <br><br> <img src= 'imagens/gemeos.jpeg' width= '40%'>";
		}
		elseif($data>=$cancer && $data<=$cancer_final && $data<=$leao)
		{
			$signo= "Câncer";
			echo "O signo de Câncer é o quarto do Zodíaco é o primeiro da tríade do elemento Água. Se em Áries temos a época do plantio, em Touro a germinação da semente e em Gêmeos a transformação da semente em planta, em Câncer temos os frutos. Em Câncer encontramos as nossas emoções, a nossa mãe, a nossa relação com a maternidade, com o nosso lado feminino, assim como aquilo que trazemos do nosso lar, da nossa infância e do nosso passado. <br><br> Período: 21 de junho a 22 de julho. <br><br> <img src= 'imagens/cancer.jpeg' width= '40%'>";
		}
		elseif($data>=$leao && $data<=$leao_final && $data<=$virgem)
		{
			$signo= "Leão";
			echo "O signo de Leão é o quinto do Zodíaco é o segundo da tríade do elemento Fogo. Regido pelo Sol, os leoninos brilham como o seu regente e se diferenciam dos demais signos pela sua capacidade inigualável de aquecer quem está por perto. Em sua manifestação mais elevada, o leonino se torna o centro das atenções fazendo com que aqueles que estão em sua presença se sintam tão especiais, que não querem dar atenção a nenhuma outra pessoa além dele. Magnéticos e extrovertidos, eles sabem entreter como ninguém. <br><br> Período: 23 de julho a 22 de agosto. <br><br> <img src= 'imagens/leao.jpeg' width= '40%'>";
		}
		elseif($data>=$virgem && $data<=$virgem_final && $data<=$libra)
		{
			$signo= "Virgem";
			echo "O signo de Virgem é o sexto do Zodíaco é o segundo da tríade do elemento Terra. Quem nasce com o Sol no signo de Virgem pode muitas vezes ser visto como perfeccionista e crítico. No entanto, esse jeito de ser pode, muitas vezes, encobrir o medo de lidar com emoções mais profundas. Virginianos são pessoas capazes de deixar tarefas e situações mais eficientes, já que gostam de seguir métodos e deixar a vida mais prática. <br><br> Período: 23 de agosto a 22 de setembro. <br><br> <img src= 'imagens/virgem.jpeg' width= '40%'>";
		}
		elseif($data>=$libra && $data<=$libra_final && $data<=$escorpiao)
		{
			$signo= "Libra";
			echo "O signo de Libra é o sétimo do Zodíaco é o terceiro da tríade do elemento Ar. Ele faz jus a seu símbolo. Mais do que um julgamento, a balança traz consigo a ideia de equilíbrio, de medida e de neutralização de forças contrárias. O signo de Libra é o escolhido para os felizardos que nasceram entre os dias 23 de setembro e 22 de outubro. O signo de Libra é regido por Vênus. Por isso foi isso presenteado com os dons da gentileza e conciliação. Os librianos realmente podem comprometer a sua personalidade e se esforçam muito para manter a paz. <br><br> Período: 23 de setembro a 22 de outubro. <br><br> <img src= 'imagens/libra.jpeg' width= '40%'>";
		}
		elseif($data>=$escorpiao && $data<=$escorpiao_final && $data<=$sagitario)
		{
			$signo= "Escorpião";
			echo "O signo de Escorpião é o oitavo do Zodíaco é o segundo da tríade do elemento Água. Os escorpianos são autossuficientes e controladores, mas no fundo estão cheios de energia emocional. Confira abaixo outras características do signo de Escorpião. A entrada do sol em Escorpião marca o auge de uma etapa de amadurecimento. Tem forte interesse pela natureza psicoemocional, que leva a buscar um incessante autoconhecimento, assim como a busca por decifrar enigmas, mistérios e segredos do ser humano. É considerado o signo mais forte e magnético do Zodíaco, por enfrenta situações-limite com bastante desenvoltura. <br><br> Período: 23 de outubro a 22 de novembro. <br><br> <img src= 'imagens/escorpiao.jpeg' width= '40%'>";
		}
		elseif($data>=$sagitario && $data<=$sagitario_final && $data<=$capricornio)
		{
			$signo= "Sagitário";
			echo "O signo de Sagitário é o nono signo do Zodíaco é o terceiro da tríade do elemento Fogo. Sendo considerado o mais positivo de todos. É representado pela figura de um centauro e por uma mão empunhando uma flecha. Sua simbologia nos lembra dos três estágios da evolução humana, quando o homem se dá conta de que pode transcender sua natureza animal para atingir um patamar superior, quando se transforma num ser realmente humano. Os sagitarianos são regidos por Júpiter, e foram presenteados com forte instinto de aventura. <br><br> Período: 23 de novembro a 21 de dezembro. <br><br> <img src= 'imagens/sagitario.jpeg' width= '40%'>";
		}
		elseif($data>=$capricornio || $data<=$capricornio_final && $data<=$aquario)
		{
			$signo= "Capricórnio";
			echo "Capricórnio é o décimo signo do Zodíaco é o terceiro da tríade do elemento Terra. O capricorniano sabe viver na Terra, enfrenta a realidade, aceita-a como ela é e desenvolve habilidades especiais para lidar com os obstáculos que porventura apareçam. Tem metas e ambições bem definidas. É uma estrela que brilha devagar mas que, ao acender, se sustenta por longo tempo. Não costuma ser muito expressivo, mas é certeiro em suas colocações.<br><br> Período: 22 de dezembro a 20 de janeiro. <br><br> <img src= 'imagens/capricornio.jpeg' width= '40%'>";
		}
		elseif($data>=$aquario && $data<=$aquario_final && $data<=$peixes)
		{
			$signo= "Aquário";
			echo "É o décimo primeiro signo do Zodíaco é o último da tríade do elemento Ar. Representa o ápice do desenvolvimento mental e da criatividade. Por simbolizar a síntese do elemento Ar, o aquariano é fortemente atraído pelos assuntos de vanguarda. Além disso, interessa-se por ciência, tecnologia, invenções, descobertas e todos os tipos de teorias que possam vir a melhorar as condições humanas. <br><br> Período: 21 de janeiro a 20 de fevereiro. <br><br> <img src= 'imagens/aquario.jpeg' width= '40%'>";
		}
		elseif($data>=$peixes && $data<=$peixes_final && $data<=$aries)
		{
			$signo= "Peixes";
			echo "Peixes é o décimo segundo signo do Zodíaco é o último da tríade do elemento Água. Os atributos positivos do signo de Peixes são muito elevados, pois representam o último estágio de aprendizado da Escola da Vida e as mais raras virtudes humanas, tais como compreensão, humildade, filantropia, compaixão, empatia, sensibilidade superior e amor devocional. <br><br> Período: 21 de fevereiro a 20 de março. <br><br> <img src= 'imagens/peixes.jpeg' width= '40%'>";
		}
	}
		else
		{
			echo "<h1>Data Inválida</h1><br>";
			echo '<div align= "center">
					<form action="signos1.html" method="post">
						<input type="submit" value="Voltar">
					</form>
			     </div>';
			die("Tente novamente com uma outra data");
		}
	echo "<script>document.getElementById('nome').innerHTML='".$signo."';</script>";
	echo "</div>";
?>
<br><br><br><br>
<div align= "center">
	<form action="signos1.html" method="post">
		<input type="submit" value="Voltar">
	</form>
</div>