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
include('languages/padrao.inc.php');
?>
<HTML>
<HEAD>

	<TITLE><?php echo $L_TITULO; ?></TITLE>

	<LINK href="img/main.css" type=text/css rel=stylesheet>
	<SCRIPT language=Javascript src="img/jsfunctions.js" type=text/javascript></SCRIPT>

</HEAD>

<BODY bgColor=white leftMargin="0" topMargin="0" marginheight="0" marginwidth="0">

	<br>

	<!-- INICIO -->

      <TABLE cellSpacing=0 cellPadding=0 width=600 border=0>
        <TBODY>
        <TR>
          <TD>
            <IMG height=34 alt="" src="img/BL-Templates.gif" width=315><BR>
          </TD>
          <TD align=right width="100%" background="img/bg15.gif">
	    <IMG height=34 alt="" src="img/tr7.gif" width=136><BR>
          </TD>
        </TR>
        </TBODY>
      </TABLE>

	<!-- /INICIO -->

	<!-- MEIO -->

      <TABLE cellSpacing=0 cellPadding=0 width=600 border=0>
        <TBODY>
        <TR vAlign=top>
          <TD background="img/bg17.gif">
            <IMG height=1 alt="" src="img/spacer.gif" width=37><BR>
          </TD>
          <TD align=middle width="100%" background="img/bg38.gif">
            <IMG height=7 src="img/spacer.gif" width=1><BR>

	<!-- CONTEÚDO -->


		<?php include('adm2.php'); ?>


	<!-- /CONTEÚDO -->

 	    <IMG height=7 src="img/spacer.gif" width=1>
          </TD>
          <TD background="img/bg18.gif"><IMG height=66 alt="" src="img/tr10.gif" width=37>
            <BR>
          </TD>
        </TR>
        </TBODY>
      </TABLE>

	<!-- /MEIO -->

	<!-- FIM -->

      <TABLE cellSpacing=0 cellPadding=0 width=600 border=0>
        <TBODY>
        <TR>
          <TD><IMG height=35 src="img/tr8.gif" width=37><BR></TD>
          <TD align=right width="100%" background="img/bg16.gif"><IMG height=35 alt="" src="img/tr9.gif" width=37 border=0><BR></TD>
        </TR>
        </TBODY>
      </TABLE>

	<!-- /FIM -->

