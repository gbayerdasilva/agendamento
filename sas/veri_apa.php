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

$matricula=$_POST['matricula'];
$senha=$_POST['senha'];

function merro(){
	echo ("<SCRIPT LANGUAGE=\"JavaScript\"> function tela(){ alert('Nome de usuário ou senha inválidos, tente novamente!'); window.navigate('apagar.php'); } </SCRIPT> <BODY OnLoad=\"javascript:tela();\" > </body>");
}


if($matricula){

	include('conecta.php');

	mysql_select_db('sas');

	$query = "SELECT * FROM sups WHERE matsup = '$matricula'"; 

	$result = mysql_query($query) or die(mysql_error());

	while($linha=mysql_fetch_array($result)) { 
		if($linha["matsup"]==$matricula){
			if($linha["senha"]==$senha){
				?>
				<HTML>
				<HEAD>
					<SCRIPT LANGUAGE="JavaScript">
					
					function tela(){
		
						form = document.verifica
						form.action = 'apagar.php'
						form.submit();	
					}
						
					</SCRIPT>
				<HEAD>
				<BODY>
					
						<form name="verifica" method="post" action="apagar.php">
							<input type="hidden" name="matricula" border=0 value="<?php echo $matricula; ?>">
							<input type="hidden" name="nome" border=0 value="<?php echo $linha["nome_sup"] ?>">
						</form>

					<SCRIPT LANGUAGE="JavaScript">
					tela();
					</SCRIPT>
				</BODY>
				</HTML>				
				<?php

				exit();
			} else {
				merro();
				exit();
			}
		} else {
			merro();
			exit();
		}
	}

} else {

	merro();
	exit();

}

merro();
exit();

?>
