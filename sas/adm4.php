<?php
// +----------------------------------------------------------------------+
// | SAS - Sistema de Agendamento de Sala (Portuguese Version)            |
// | RSS - Room Scheduler System (English Version)                        |
// +----------------------------------------------------------------------+
// | DESENVOLVIDO NO BRASIL !!! DEVELOPED IN BRAZIL !!!                   |
// +----------------------------------------------------------------------+
// | ATUALIZAÇÕES:-                                                       |
// | 04-DEZ-03 - Versão Inicial .................................. v0.0.0 |
// | 23-DEZ-03 - Implemetação de Skin ............................ v1.0.0 |
// | 29-MAR-04 - Adicionado Cancelamento de Reservas ............. v1.1.0 |
// | 31-MAR-04 - Adicionado Marcação 30 min de Reservas .......... v1.2.0 |
// | 19-ABR-04 - Correção disable radio box virada de mês ........ v1.3.0 |
// | 26-ABR-04 - Correção função monstrar dias ................... v1.4.0 |
// | 27-MAI-04 - Adicionado Função Marcação com mais de 2 semanas. v2.0.0 |
// | 22-OUT-05 - Adicionado modulo para varias linguas ........... v2.2.0 |
// |                                                                      |
// | UPDATES:-                                                            |
// | DEC-04-03 - Initial release ................................. v0.0.0 |
// | DEC-23-03 - Added skin ...................................... v1.0.0 |
// | MAR-29-04 - Added scheduler cancel module ................... v1.1.0 |
// | MAR-31-04 - Added 30 min hour schedule delay ................ v1.2.0 |
// | APR-19-04 - Updated disable radio box mounth turn over ...... v1.3.0 |
// | APR-26-04 - Updated function show days ...................... v1.4.0 |
// | MAY-27-04 - Added function schedule more then two weeks ..... v2.0.0 |
// | OCT-22-05 - Added module for different languages ............ v2.2.0 |
// +----------------------------------------------------------------------+
// | Autor: Ighor Toth - http://www.ighor.com                             |
// +----------------------------------------------------------------------+
// | Arquivo de configuração: conf.inc.php                                |
// | Estrutura do BD: sas.sql                                             |
// | Bugs ou problemas, escreva para: igtoth@netsite.com.br               |
// |                                                                      |
// | Configuration file: conf.inc.php                                     |
// | DB structure: sas.sql                                                |
// | Bugs or issues, write to: igtoth@netsite.com.br                      |
// +----------------------------------------------------------------------+

	include('conecta.php');

	mysql_select_db("sas");

	$apagarc=$_POST["apagarc"];
	$matricula=$_POST["matricula"];
	$cod_sala=$_POST["cod_sala"];
	$nome=$_POST["nome"];

	function vazio($matricula,$cod_sala,$nome){

					?>
					<HTML>
					<HEAD>
						<SCRIPT LANGUAGE="JavaScript">
					
						function tela(){
		
							alert('POR FAVOR SELECIONE UM HORÁRIO Á SER APAGADO!')
							form = document.verifica
							form.action = 'adm.php'
							form.submit();	
						}
						
						</SCRIPT>
					<HEAD>
					<BODY>
					
							<form name="verifica" method="post" action="adm.php">
								<input type="hidden" name="sup" border=0 value="<?php echo $matricula; ?>">
								<input type="hidden" name="cod_sala" border=0 value="<?php echo $cod_sala; ?>">
								<input type="hidden" name="nome" border=0 value="<?php echo $nome; ?>">
								<input type="hidden" name="ver" border=0 value="1">
							</form>

						<SCRIPT LANGUAGE="JavaScript">
							tela();
						</SCRIPT>
					</BODY>
					</HTML>				
					<?php

					exit();


	}

	if($apagarc==""){ vazio($matricula,$cod_sala,$nome); }

	foreach ($apagarc as $k => $v) {

		/* echo "\$apagarc[$k] => $v.\n"; */

		$ex1=explode("/",$v);

		$datatempo1=$ex1[0];
		$matricula1=$ex1[1];
		$cod_sala=$ex1[2];

		$sql = "DELETE FROM reservas WHERE datatempo = '$datatempo1' AND matricula = '$matricula1' AND cod_sala = $cod_sala";

		if(mysql_query($sql)){
			$deletado=1;
		} else {
			$deletado=0;
		}

	}





	if($deletado==1){

					?>
					<HTML>
					<HEAD>
						<SCRIPT LANGUAGE="JavaScript">
					
						function tela(){
		
							alert('RESERVA(S) APAGADA(S)!')
							form = document.verifica
							form.action = 'adm.php'
							form.submit();	
						}
						
						</SCRIPT>
					<HEAD>
					<BODY>
					
							<form name="verifica" method="post" action="adm.php">
								<input type="hidden" name="sup" border=0 value="<?php echo $matricula1; ?>">
								<input type="hidden" name="cod_sala" border=0 value="<?php echo $cod_sala; ?>">
								<input type="hidden" name="nome" border=0 value="<?php echo $matricula1; ?>">
								<input type="hidden" name="ver" border=0 value="1">
							</form>

						<SCRIPT LANGUAGE="JavaScript">
							tela();
						</SCRIPT>
					</BODY>
					</HTML>				
					<?php

					exit();


	} else {

		echo ("<i><b><font face=\"arial,verdana\" size=\"-1\">REGISTROS NÃO APAGADOS. CONTATE O SUPORTE LOCAL!!!</i><br><br> ERRO MySQL:</b> ". mysql_error());

	}


	/*
	foreach($apagar1 as $apa) { 

		echo $apa; echo("<br>");

	} 
	*/

?>
