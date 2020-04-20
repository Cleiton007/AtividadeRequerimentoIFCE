<?php
    function __e($input){
        $input = trim($input);
        $input = stripslashes($input);
        $input = htmlspecialchars($input);
        return $input;
    }
    $requerente =  __e($_POST['reque']);
    $matricula =  __e($_POST['matricula']);
    $dataNascimento =  __e($_POST['dataNasc']);
    $naturalidade =  __e($_POST['naturalidade']);
    $filiacao =  __e($_POST['filiacao']);
    $curso =  __e($_POST['curso']);
    $periodo =  __e($_POST['periodo']);
    $turno =  __e($_POST['turno']);
    $telefone =  __e($_POST['telefone']);
    $email =  __e($_POST['email']);
    $opcoes =  __e($_POST['opcoes']);
    $assReque =  __e($_POST['assReque']);
    $assFun =  __e($_POST['assFunc']);
    $assuntoEstudantil =  __e($_POST['assuntoEstudantil']);
    $respEstudantil =  __e($_POST['respEstudantil']);
    $vistoBiblioteca =  __e($_POST['vistoBiblioteca']);
    $respBiblioteca =  __e($_POST['respBiblioteca']);


    if(isset($requerente) && isset($matricula) && isset($dataNascimento) && isset($naturalidade)
    && isset($filiacao) && isset($curso) && isset($periodo) && isset($turno) && isset($telefone)
    && isset($email) && isset($opcoes) && isset($assReque) && isset($assFun) && isset($assuntoEstudantil)
    && isset($respEstudantil) && isset($vistoBiblioteca) && isset($respBiblioteca)){
?>
<!DOCTYPE html>
	<html>
		<head>
		    <meta	charset="utf-8">
			<title>Requerimento IFCE</title>
            <link rel="stylesheet" href="style/estilo.css">
            </script>
		</head>
		<body>
            <div id="corpo">
                <form  method="post" action="header.php">
                    <div id="cabecalho">
                        <p><img src="ifce.jpg" alt="IFCE Campus Cedro"></p>
                        <div id="protocolo">Protocolo n.° <input id="disabledInput" type="text" disabled="" value= "<?php echo rand(2000, 2999); ?>"></div>
                    </div>
                    <div id="conteudo">
                        <div class="tabela1">
                            <table>
                                <tr>
                                    <td id="tdRequerente">REQUERENTE:</td><td colspan="25"><?php echo $_POST['reque']; ?></td>
                                </tr>

                                <tr>
                                    <td id="tdRequerente">N° DE MATRÍCULA:</td><td colspan="25"><?php echo $_POST['matricula']; ?></td>
                                </tr>

                                <tr>
                                    <td id="tdIMG" rowspan= "3"><div id="pre">PREENCHER:</div><div id="img"><img src="seta.png" width="30" height="30"></img></td>
                                </tr>

                                <tr>
                                    <td id="tdDataNasc">DATA NASCIMENTO: <input id="inputDataNasc" type="text" name="dataNasc" disabled="" value="<?php echo $_POST['dataNasc']; ?>"></td><td id="tdDataNasc">NATURALIDADE: <input id="inputDataNasc" type="text" name="naturalidade" disabled="" value="<?php echo $_POST['naturalidade']; ?>"></td>
                                </tr>

                                <tr>
                                    <td colspan="25" id="tdDataNasc">FILIAÇÃO: <input id="filiacao" type="text" name="filiacao" disabled="" value="<?php echo $_POST['filiacao']; ?>"></td>
                                </tr>

                                <tr>
                                    <td colspan="30" rowspan="3" id="tdDataNasc">CURSO: <input id="inputCurso" type="text" name="curso" disabled="" value="<?php echo $_POST['curso']; ?>"> PERÍODO: <input id="inputPeriodo" type="text" name="periodo" disabled="" value="<?php echo $_POST['periodo']; ?> ">TURNO: <input id="inputTurno" type="text" name="turno" disabled="" value="<?php echo $_POST['turno']; ?>"><br>
                                TELEFONE: <input id="inputTelefone" type="text" name="telefone" disabled="" value="<?php echo $_POST['telefone']; ?>"> E-MAIL: <input id="inputEmail" type="text" name="email" disabled="" value="<?php echo $_POST['email']; ?>"></td>
                                </tr>

                            </table>
                        </div>

                        
                        <div id="sub">ASSINALE:</div>
                        <br/>

                        <div class="tabela2">
                            <table cellspacing="0" cellpadding="0">

                                <?php switch($_POST['opcoes']){
                                    case "segundaVia":
                                        echo '<style type= "text/css">
                                            #segVia{
                                                background-color:black;
                                            }
                                        </style>';
                                        break;
                                    case "aproveitamentoDisc":
                                        echo '<style type= "text/css">
                                            #aproveitaDisc{
                                                background-color:black;
                                            }
                                        </style>';
                                        break;
                                    case "matForaPrazo":
                                        echo '<style type= "text/css">
                                            #matriForaPrazo{
                                                background-color:black;
                                            }
                                        </style>';
                                        break;
                                    case "cancelMat":
                                        echo '<style type= "text/css">
                                            #cancelamento{
                                                background-color:black;
                                            }
                                        </style>';
                                        break;
                                    case "colacao":
                                        echo '<style type= "text/css">
                                            #colGrau{
                                                background-color:black;
                                            }
                                        </style>';
                                        break;
                                    case "declaracao":
                                        echo '<style type= "text/css">
                                            #dec{
                                                background-color:black;
                                            }
                                        </style>';
                                        break;
                                    case "diploma":
                                        echo '<style type= "text/css">
                                            #dip{
                                                background-color:black;
                                            }
                                        </style>';
                                        break;
                                    case "historico":
                                        echo '<style type= "text/css">
                                            #hist{
                                                background-color:black;
                                            }
                                        </style>';
                                        break;
                                    case "reaberturaMat":
                                        echo '<style type= "text/css">
                                            #reabMat{
                                                background-color:black;
                                            }
                                        </style>';
                                        break;
                                     case "segundaChamada":
                                        echo '<style type= "text/css">
                                            #segCham{
                                                background-color:black;
                                            }
                                        </style>';
                                        break;
                                     case "reingresso":
                                        echo '<style type= "text/css">
                                            #reing{
                                                background-color:black;
                                            }
                                        </style>';
                                        break;
                                    case "trancaDis":
                                        echo '<style type= "text/css">
                                            #trancDis{
                                                background-color:black;
                                            }
                                        </style>';
                                        break;
                                    case "trancaMat":
                                        echo '<style type= "text/css">
                                            #trancMat{
                                                background-color:black;
                                            }
                                        </style>';
                                        break;
                                    case "transferencia":
                                        echo '<style type= "text/css">
                                            #transfer{
                                                background-color:black;
                                            }
                                        </style>';
                                        break;
                                    case "validaConhecimento":
                                        echo '<style type= "text/css">
                                            #validaCon{
                                                background-color:black;
                                            }
                                        </style>';
                                        break;
                                    case "reajuste":
                                        echo '<style type= "text/css">
                                            #reaj{
                                                background-color:black;
                                            }
                                        </style>';
                                        break;
                                    case "recorrecaoProva":
                                        echo '<style type= "text/css">
                                            #recProva{
                                                background-color:black;
                                            }
                                        </style>';
                                        break;
                                    case "auxTransporte":
                                        echo '<style type= "text/css">
                                            #auxTrans{
                                                background-color:black;
                                            }
                                        </style>';
                                        break;
                                    case "auxMoradia":
                                        echo '<style type= "text/css">
                                            #auxMora{
                                                background-color:black;
                                            }
                                        </style>';
                                        break;
                                    case "auxOculos":
                                        echo '<style type= "text/css">
                                            #auxOcu{
                                                background-color:black;
                                            }
                                        </style>';
                                        break;
                                    case "auxPais":
                                        echo '<style type= "text/css">
                                            #auxP{
                                                background-color:black;
                                            }
                                        </style>';
                                        break;
                                    case "outros":
                                        echo '<style type= "text/css">
                                            #other{
                                                background-color:black;
                                            }
                                        </style>';
                                        break;

                                } 
                                ?>

                                <tr>
                                    <td class="num" id="segVia">01</td>
                                    <td class="opcoes">2° Via (especificar)</td>
                                    <td class="departamentos">CCA</td>
                                </tr>

                                <tr>
                                    <td class="num" id="aproveitaDisc">02</td>
                                    <td class="opcoes">Aproveitamento de Disciplina (anexar Histórico Escolar e Programa da Disciplina)</td>
                                    <td class="departamentos">Cordenação do Curso</td>
                                </tr>

                                <tr>
                                    <td class="num" id="matriForaPrazo">03</td>
                                    <td class="opcoes">Matrícula fora do prazo (justificar)</td>
                                    <td class="departamentos">CCA</td>
                                </tr>

                                <tr>
                                    <td class="num" id="cancelamento">04</td>
                                    <td class="opcoes">Cancelamento da Matrícula</td>
                                    <td class="departamentos">CCA</td>
                                </tr>

                                <tr>
                                    <td class="num" id="colGrau">05</td>
                                    <td class="opcoes">Colação de Grau / Colação Especial (justificar)</td>
                                    <td class="departamentos">CCA</td>
                                </tr>

                                <tr>
                                    <td class="num" id="dec">06</td>
                                    <td class="opcoes">Declaração (especificar)</td>
                                    <td class="departamentos">CCA</td>
                                </tr>

                                <tr>
                                    <td class="num" id="dip">07</td>
                                    <td class="opcoes">Diploma (especificar)</td>
                                    <td class="departamentos">CCA</td>
                                </tr>

                                <tr>
                                    <td class="num" id="hist">08</td>
                                    <td class="opcoes">Histórico Escolar</td>
                                    <td class="departamentos">CCA</td>
                                </tr>

                                <tr>
                                    <td class="num" id="reabMat">09</td>
                                    <td class="opcoes">Reabertura de Matrícula</td>
                                    <td class="departamentos">CCA</td>
                                </tr>

                                <tr>
                                    <td class="num" id="segCham">10</td>
                                    <td class="opcoes">Segunda Chamada (anexar justificativa e especificar)</td>
                                    <td class="departamentos">Coordenação do Curso</td>
                                </tr>

                                <tr>
                                    <td class="num" id="reing">11</td>
                                    <td class="opcoes">Reingresso</td>
                                    <td class="departamentos">CCA</td>
                                </tr>
                            </table>
                        </div>

                        <div class="tabela3">
                            <table cellspacing="0" cellpadding="0">
                                <tr>
                                    <td class="num" id="trancDis">12</td>
                                    <td class="opcoes">Trancamento de Disciplina (especificar)</td>
                                    <td class="departamentos">Coordenação dos Cursos</td>
                                </tr>

                                <tr>
                                    <td class="num" id="trancMat">13</td>
                                    <td class="opcoes">Trancamento de Matrícula (anexar documentação comprobatória)</td>
                                    <td class="departamentos">Coordenação Pedagógica</td>
                                </tr>

                                <tr>
                                    <td class="num" id="transfer">14</td>
                                    <td class="opcoes">Transferência para outra instituição</td>
                                    <td class="departamentos">CCA</td>
                                </tr>

                                <tr>
                                    <td class="num" id="validaCon">15</td>
                                    <td class="opcoes">Validação de Conhecimento (especificar)</td>
                                    <td class="departamentos">Coordenação do Curso</td>
                                </tr>

                                <tr>
                                    <td class="num" id="reaj">16</td>
                                    <td class="opcoes">Reajuste</td>
                                    <td class="departamentos">CCA</td>
                                </tr>

                                <tr>
                                    <td class="num" id="recProva">17</td>
                                    <td class="opcoes">Recorreção de Prova</td>
                                    <td class="departamentos">Coordenação do Curso</td>
                                </tr>

                                <tr>
                                    <td class="num" id="auxTrans">18</td>
                                    <td class="opcoes">AUXÍLIO - Transporte</td>
                                    <td class="departamentos">Serviço Social</td>
                                </tr>

                                <tr>
                                    <td class="num" id="auxMora">19</td>
                                    <td class="opcoes">AUXÍLIO - Moradia</td>
                                    <td class="departamentos">Serviço Social</td>
                                </tr>

                                <tr>
                                    <td class="num" id="auxOcu">20</td>
                                    <td class="opcoes">AUXÍLIO - Óculos</td>
                                    <td class="departamentos">Serviço Social</td>
                                </tr>

                                <tr>
                                    <td class="num" id="auxP">21</td>
                                    <td class="opcoes">AUXÍLIO - Pais e Mães</td>
                                    <td class="departamentos">Serviço Social</td>
                                </tr>

                                <tr>
                                    <td class="num" id="other">22</td>
                                    <td class="opcoes">Outros (especificar)</td>
                                    <td class="departamentos"> </td>
                                </tr>
                            </table>
                        </div>
                        <br>
                        <div id="sub">ESPECIFICAR:</div>
                        
                        <input id="inputEspecificar" type="text" name="especificar" disabled="" value="<?php echo $_POST['especificar']; ?>"><br>
                        
                        <br>
                        <div id="sub">JUSTIFICAR:</div>
                        
                        <input id="inputEspecificar" type="text" name="justificar" disabled="" value="<?php echo $_POST['justificar']; ?>"><br><br>

                        <div id="declaracao">
                            DECLARO CONHECER O REGIMENTO DESTA IFE, BEM COMO O PRAZO NECESSÁRIO À TRAMITAÇÃO DO PROCESSO<br>
                        </div>

                        <div id="assinatura1">
                            <p><input id="inputAssReque" type="text" name="assReque" disabled="" value="<?php echo $_POST['assReque']; ?>"><br><br>
                            REQUERENTE (ASS. LEGÍVEL)
                        </div>

                        <div id="assinatura2">
                            <p><input id="inputAssReque" type="text" name="assFunc" disabled="" value="<?php echo $_POST['assFunc']; ?>"><br><br>
                            FUNCIONÁRIO (ASS. LEGÍVEL)<br>
                        </div>
                        <div id="data">
                            CEDRO - CE, <?php echo date("d/m/Y"); ?>
                        </div>
                        <div id="rodape">
                            <div id="visto1">
                                VISTO (COORDENAÇÃO DE ASSUNTOS ESTUDANTIS)<br>
                                <div id="req1"><?php if($_POST['assuntoEstudantil'] == "naoDeveChave"){ ?> <input type="radio" name="assuntoEstudantil" value="naoDeveChave" disabled="" checked="checked"><?php } else{
                                    ?> <input type="radio" name="assuntoEstudantil" value="naoDeveChave" disabled=""> <?php }; ?> O requerente NÃO deve chave de armário</div>
                                <div id="req2"><?php if($_POST['assuntoEstudantil'] == "deveChave"){ ?> <input type="radio" name="assuntoEstudantil" value="deveChave" disabled="" checked="checked"><?php } else{
                                    ?> <input type="radio" name="assuntoEstudantil" value="deveChave" disabled=""> <?php }; ?> O requerente deve chave do armário: <input id="chave" type="text" name="numChave" disabled="" value="<?php echo $_POST['numChave'] ?>"><br>
                                <p><input id="resp" type="text" name="respEstudantil" disabled="" value="<?php echo $_POST['respEstudantil']; ?>"><br>
                                    Responsável (ass. Legível)</div>
                            </div>

                            <div id="visto2">
                                VISTO (BIBLIOTECA)<br>
                                <div id="req1"><?php if($_POST['vistoBiblioteca'] == "naoDeveLivro"){ ?> <input type="radio" name="vistoBiblioteca" value="naoDeveLivro" disabled="" checked="checked"><?php } else{
                                    ?> <input type="radio" name="vistoBiblioteca" value="naoDeveLivro" disabled=""> <?php }; ?> O requerente NÃO deve livros na biblioteca</div>
                                <div id="req2"><?php if($_POST['vistoBiblioteca'] == "deveLivro"){ ?> <input type="radio" name="vistoBiblioteca" value="deveLivro" disabled="" checked="checked"><?php } else{
                                    ?> <input type="radio" name="vistoBiblioteca" value="deveLivro" disabled=""> <?php }; ?> O requerente deve livros na biblioteca:<br>
                                <?php if($_POST['vistoBiblioteca'] == "naoDeveLivro"){ ?><textarea name="inforLivros" rows="3" cols="40" disabled=""></textarea><br><?php } else{ ?> <textarea name="inforLivros" rows="3" cols="40" disabled="">
                                    <?php echo $_POST['inforLivros']; }?>
                                </textarea><br>
                                <p><input id="resp" type="text" name="respBiblioteca" disabled="" value="<?php echo $_POST['respBiblioteca']; ?>"><br>
                                    Responsável (ass. Legível)</div>
                            </div>
                        </div>
                    </div>
                        <input id="enviar" type="submit" name="enviar" value="Voltar">
                </form>
            </div>
		</body>
	</html>

<?php }else{
    header('location:atividade.php');
} ?>
