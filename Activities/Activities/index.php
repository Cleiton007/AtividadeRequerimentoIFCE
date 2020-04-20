<!DOCTYPE html>
	<html>
		<head>
		    <meta	charset="utf-8">
			<title>Requerimento IFCE</title>
            <link rel="stylesheet" href="style/estilo.css">

		</head>
		<body>
            <div id="corpo">
                <form  method="post" action="valida.php">
                    <div id="cabecalho">
                        <p><img src="ifce.jpg" alt="IFCE Campus Cedro"></p>
                        <div id="protocolo">Protocolo n.° <input id="disabledInput" type="text" disabled=""></div>
                    </div>
                    <div id="conteudo">
                        <div class="tabela1">
                            <table>
                                <tr>
                                    <td id="tdRequerente">REQUERENTE:</td><td colspan="25"><input id="inputReq" type="text" name="reque" required="required"></td>
                                </tr>

                                <tr>
                                    <td id="tdRequerente">N° DE MATRÍCULA:</td><td colspan="25"><input id="inputReq" type="text" name="matricula" required="required"></td>
                                </tr>

                                <tr>
                                    <td id="tdIMG" rowspan= "3"><div id="pre">PREENCHER:</div><div id="img"><img src="seta.png" width="30" height="30"></img></td>
                                </tr>

                                <tr>
                                    <td id="tdDataNasc">DATA NASCIMENTO: <input id="inputDataNasc" type="text" name="dataNasc" required="required"></td><td id="tdDataNasc">NATURALIDADE: <input id="inputDataNasc" type="text" name="naturalidade" required="required"></td>
                                </tr>

                                <tr>
                                    <td colspan="25" id="tdDataNasc">FILIAÇÃO: <input id="filiacao" type="text" name="filiacao" required="required"></td>
                                </tr>

                                <tr>
                                    <td colspan="30" rowspan="3" id="tdDataNasc">CURSO: <input id="inputCurso" type="text" name="curso" required="required"> PERÍODO: <input id="inputPeriodo" type="text" name="periodo" required="required"> TURNO: <input id="inputTurno" type="text" name="turno" required="required"><br>
                                TELEFONE: <input id="inputTelefone" type="text" name="telefone" required="required"> E-MAIL: <input id="inputEmail" type="text" name="email" required="required"></td>
                                </tr>

                            </table>
                        </div>

                        
                        <div id="sub">ASSINALE:</div>
                        <br/>

                        <div class="tabela2">
                            <table cellspacing="0" cellpadding="0">
                                <tr>
                                    <td class="num"><input type="radio" name="opcoes" value="segundaVia" required="required">01</td>
                                    <td class="opcoes">2° Via (especificar)</td>
                                    <td class="departamentos">CCA</td>
                                </tr>

                                <tr>
                                    <td class="num"><input type="radio" name="opcoes" value="aproveitamentoDisc">02</td>
                                    <td class="opcoes">Aproveitamento de Disciplina (anexar Histórico Escolar e Programa da Disciplina)</td>
                                    <td class="departamentos">Cordenação do Curso</td>
                                </tr>

                                <tr>
                                    <td class="num"><input type="radio" name="opcoes" value="matForaPrazo">03</td>
                                    <td class="opcoes">Matrícula fora do prazo (justificar)</td>
                                    <td class="departamentos">CCA</td>
                                </tr>

                                <tr>
                                    <td class="num"><input type="radio" name="opcoes" value="cancelMat">04</td>
                                    <td class="opcoes">Cancelamento da Matrícula</td>
                                    <td class="departamentos">CCA</td>
                                </tr>

                                <tr>
                                    <td class="num"><input type="radio" name="opcoes" value="colacao">05</td>
                                    <td class="opcoes">Colação de Grau / Colação Especial (justificar)</td>
                                    <td class="departamentos">CCA</td>
                                </tr>

                                <tr>
                                    <td class="num"><input type="radio" name="opcoes" value="declaracao">06</td>
                                    <td class="opcoes">Declaração (especificar)</td>
                                    <td class="departamentos">CCA</td>
                                </tr>

                                <tr>
                                    <td class="num"><input type="radio" name="opcoes" value="diploma">07</td>
                                    <td class="opcoes">Diploma (especificar)</td>
                                    <td class="departamentos">CCA</td>
                                </tr>

                                <tr>
                                    <td class="num"><input type="radio" name="opcoes" value="historico">08</td>
                                    <td class="opcoes">Histórico Escolar</td>
                                    <td class="departamentos">CCA</td>
                                </tr>

                                <tr>
                                    <td class="num"><input type="radio" name="opcoes" value="reaberturaMat">09</td>
                                    <td class="opcoes">Reabertura de Matrícula</td>
                                    <td class="departamentos">CCA</td>
                                </tr>

                                <tr>
                                    <td class="num"><input type="radio" name="opcoes" value="segundaChamada">10</td>
                                    <td class="opcoes">Segunda Chamada (anexar justificativa e especificar)</td>
                                    <td class="departamentos">Coordenação do Curso</td>
                                </tr>

                                <tr>
                                    <td class="num"><input type="radio" name="opcoes" value="reingresso">11</td>
                                    <td class="opcoes">Reingresso</td>
                                    <td class="departamentos">CCA</td>
                                </tr>
                            </table>
                        </div>

                        <div class="tabela3">
                            <table cellspacing="0" cellpadding="0">
                                <tr>
                                    <td class="num"><input type="radio" name="opcoes" value="trancaDis">12</td>
                                    <td class="opcoes">Trancamento de Disciplina (especificar)</td>
                                    <td class="departamentos">Coordenação dos Cursos</td>
                                </tr>

                                <tr>
                                    <td class="num"><input type="radio" name="opcoes" value="trancaMat">13</td>
                                    <td class="opcoes">Trancamento de Matrícula (anexar documentação comprobatória)</td>
                                    <td class="departamentos">Coordenação Pedagógica</td>
                                </tr>

                                <tr>
                                    <td class="num"><input type="radio" name="opcoes" value="transferencia">14</td>
                                    <td class="opcoes">Transferência para outra instituição</td>
                                    <td class="departamentos">CCA</td>
                                </tr>

                                <tr>
                                    <td class="num"><input type="radio" name="opcoes" value="validaConhecimento">15</td>
                                    <td class="opcoes">Validação de Conhecimento (especificar)</td>
                                    <td class="departamentos">Coordenação do Curso</td>
                                </tr>

                                <tr>
                                    <td class="num"><input type="radio" name="opcoes" value="reajuste">16</td>
                                    <td class="opcoes">Reajuste</td>
                                    <td class="departamentos">CCA</td>
                                </tr>

                                <tr>
                                    <td class="num"><input type="radio" name="opcoes" value="recorrecaoProva">17</td>
                                    <td class="opcoes">Recorreção de Prova</td>
                                    <td class="departamentos">Coordenação do Curso</td>
                                </tr>

                                <tr>
                                    <td class="num"><input type="radio" name="opcoes" value="auxTransporte">18</td>
                                    <td class="opcoes">AUXÍLIO - Transporte</td>
                                    <td class="departamentos">Serviço Social</td>
                                </tr>

                                <tr>
                                    <td class="num"><input type="radio" name="opcoes" value="auxMoradia">19</td>
                                    <td class="opcoes">AUXÍLIO - Moradia</td>
                                    <td class="departamentos">Serviço Social</td>
                                </tr>

                                <tr>
                                    <td class="num"><input type="radio" name="opcoes" value="auxOculos">20</td>
                                    <td class="opcoes">AUXÍLIO - Óculos</td>
                                    <td class="departamentos">Serviço Social</td>
                                </tr>

                                <tr>
                                    <td class="num"><input type="radio" name="opcoes" value="auxPais">21</td>
                                    <td class="opcoes">AUXÍLIO - Pais e Mães</td>
                                    <td class="departamentos">Serviço Social</td>
                                </tr>

                                <tr>
                                    <td class="num"><input type="radio" name="opcoes" value="outros">22</td>
                                    <td class="opcoes">Outros (especificar)</td>
                                    <td class="departamentos"> </td>
                                </tr>
                            </table>
                        </div>
                        <br>
                        <div id="sub">ESPECIFICAR:</div>

                        <input id="inputEspecificar" type="text" name="especificar"><br>
                        
                        <br>
                        <div id="sub">JUSTIFICAR:</div>
                        
                        <input id="inputEspecificar" type="text" name="justificar"><br><br>

                        <div id="declaracao">
                            DECLARO CONHECER O REGIMENTO DESTA IFE, BEM COMO O PRAZO NECESSÁRIO À TRAMITAÇÃO DO PROCESSO<br>
                        </div>

                        <div id="assinatura1">
                            <p><input id="inputAssReque" type="text" name="assReque" required="required"><br><br>
                            REQUERENTE (ASS. LEGÍVEL)
                        </div>

                        <div id="assinatura2">
                            <p><input id="inputAssReque" type="text" name="assFunc" required="required"><br><br>
                            FUNCIONÁRIO (ASS. LEGÍVEL)<br>
                        </div>
                        <div id="data">
                            CEDRO - CE, <?php echo date("d/m/Y"); ?>
                        </div>
                        <div id="rodape">
                            <div id="visto1">
                                VISTO (COORDENAÇÃO DE ASSUNTOS ESTUDANTIS)<br>
                                <div id="req1"><input type="radio" name="assuntoEstudantil" value="naoDeveChave" required="required"> O requerente NÃO deve chave de armário</div>
                                <div id="req2"><input type="radio" name="assuntoEstudantil" value="deveChave"> O requerente deve chave do armário: <input id="chave" type="text" name="numChave"><br>
                                <p><input id="resp" type="text" name="respEstudantil" required="required"><br>
                                    Responsável (ass. Legível)</div>
                            </div>

                            <div id="visto2">
                                VISTO (BIBLIOTECA)<br>
                                <div id="req1"><input type="radio" name="vistoBiblioteca" value="naoDeveLivro" required="required"> O requerente NÃO deve livros na biblioteca</div>
                                <div id="req2"><input type="radio" name="vistoBiblioteca" value="deveLivro"> O requerente deve livros na biblioteca:<br>
                                <textarea name="inforLivros" rows="3" cols="40"></textarea><br>
                                <p><input id="resp" type="text" name="respBiblioteca" required="required"><br>
                                    Responsável (ass. Legível)</div>
                            </div>
                        </div>
                    </div>
                        <input id="enviar" type="submit" name="enviar" value="Enviar"> <input id="limpar" type="reset" name="limpar" value="Limpar">
                </form>
            </div>
		</body>
	</html>
