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
?>

		<form method="POST" action="veri_index.php">
		<TABLE aling="center" WIDTH="326"  CELLPADDING="0" CELLSPACING="0" >
			<TR>
				<TD ALIGN="center" VALIGN="middle">
					<TABLE aling="center" CELLPADDING="0" WIDTH="100%" HEIGHT="100%" BACKGROUND="">
						<TR>
							<TD ALIGN="center" COLSPAN="0">
								<br>SEU LOGO<br><br>
								<B><font face="arial,verdana" size="3"><br><?php echo $L_TITULO; ?></font></B><br><br><br><b>Sistema de teste, use:<br>Usuario: 999995<br>Senha: 123456</b><br><br>
							</TD>
						</TR>
						<TR>
							<td ALIGN="center" VALIGN="middle">
								<table cellpadding=3 cellspacing=0 BACKGROUND="">
									<tr>
										<td>
											<B><FONT FACE="Arial,Helvetica,sans-serif" SIZE="-1"><?php echo $L_USUARIO; ?> </FONT></B>
										</td>
										<td>
											<input border="0" size="10" class="bordas" type="txt" name="matricula" STYLE="font-size: 9pt;" TABINDEX="1">
										</td>
									</tr>
									<tr>
										<td>
											<B><FONT FACE="Arial,Helvetica,sans-serif" SIZE="-1"><?php echo $L_SENHA; ?> </FONT></B>
										</td>
										<td>
											<input border="0" size="10" class="bordas" type="password" name="senha" STYLE="font-size: 9pt;" TABINDEX="1">
										</td>
									</tr>
								</table>
								<table width="190" cellpadding=0 cellspacing=0 BACKGROUND="">
									<tr>
										<td align="left">
											<A HREF="javascript: window.close();" TABINDEX="2">
												 <IMG SRC="img/cancel.gif" ALIGN="left" WIDTH="22" HEIGHT="23" ALT="Cancelar" BORDER=0 hspace=10 vspace=4> 
											</A>
										</td>
										<td align="right">
											<INPUT TYPE=image src="img/enter.gif" WIDTH="26" HEIGHT="23" border=0 hspace=7 vspace=4 alt="Entrar &gt;&gt;&gt;" TABINDEX="1">
										</td>
									</tr>
								</table>
							</td>
						</tr>
					</table>
				</TD>
			</TR>
		</TABLE>
		</form>
