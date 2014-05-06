<!doctype: HTML>
<html>
<head>
	<link rel="stylesheet" href="../css/stylesetting.css" type="text/css" media="screen">
</head>
<body>
		<center>
			<div width="100%">
                    <table width="80%" align="center" cell-spacing="2px">
                        <tr align="center" width="80%">
                            <td width="20%" nowrap="nowrap" class="buttonlink">
                                <a href="#general">Generali</a>
                            </td>
                            <td width="20%" nowrap="nowrap" class="buttonlink">
                                <a href="#database">Database</a>
                            </td>
                            <td width="20%" nowrap="nowrap" class="buttonlink">
                                <a href="#users">Utenti</a>
                            </td>
                            <td width="20%" nowrap="nowrap" class="buttonlink">
                                <a href="#update">Aggiorna</a>
                            </td>
                            <!--<td  width="14%" nowrap="nowrap" class="buttonlink">
                                <a href="">Cerca</a>
                            </td>-->
                        </tr>
                    </table>           
                </div>
			<br>
			<div class="Table" >
                <table id="general">
                    <tr>
                    	<td >
                            Generali
                        </td>
                    </tr>
                    <tr>
                        <td >
                            <center>
                                 <table border="1" bordercolor="#FFFFFF" style="background-color:#FFFFFF" width="100%" cellpadding="3" cellspacing="3">
                                        <tr>
                                            <td></td>
                                            <td></td>
                                        </tr>
                                        <tr>
                                            <td>Nome Azienda</td>
                                            <td><input type="text" value="IntSe CMS"></input></td>
                                        </tr>
                                        <tr>
                                            <td>Logo</td>
                                            <td><img src="../images/logo.png"><input type="file"></td>
                                        </tr>
                                        <tr>
                                            <td>Tema</td>
                                            <td><select name='takeation'>
                                                <option class='head'>LightBlue</option>
                                                <option value='Action 1'>DarkGrey</option>
                                                <option value='Action 2'>-</option>
                                                <option value='Action 3'>More...</option>
                                                </select>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>Lingua</td>
                                            <td><select name='takeation'>
                                                <option class='head'>Italiano</option>
                                                <option value='Action 1'>-</option>
                                                <option value='Action 2'>-</option>
                                                <option value='Action 3'>More...</option>
                                                </select></td>
                                        </tr>
                                        <!--<tr>
                                            <td>Table Cell</td>
                                            <td>Table Cell</td>
                                        </tr>
                                        <tr>
                                            <td>Table Cell</td>
                                            <td>Table Cell</td>
                                        </tr>
                                        <tr>
                                            <td>Table Cell</td>
                                            <td>Table Cell</td>
                                        </tr>-->
                                    </table>
                                    <FORM METHOD="LINK" ACTION="#" target="frame"><button type="submit">Salva</button></form>
                            </center>
                        </td>
                    </tr>
                </table>
            </div>
            <br>
            <div class="Table" >
                <table id="database">
                    <tr>
                        <td class="tab_sel">
                            Database
                        </td>
                    </tr>
                    <tr>
                        <td >
                            <center>
                                <table border="1" bordercolor="#FFFFFF" style="background-color:#FFFFFF" width="100%" cellpadding="3" cellspacing="3">
                                        <tr>
                                            <td></td>
                                            <td></td>
                                        </tr>
                                        <tr>
                                            <td>Tipo DB</td>
                                            <td><input type="checkbox" value="MySQL" checked="true">MySQL</input></td>
                                        </tr>
                                        <tr>
                                            <td>Server</td>
                                            <td><input type="text" value="localhost"></input></td>
                                        </tr>
                                        <tr>
                                            <td>Porta</td>
                                            <td><input type="text" value="3306"></input></td>
                                        </tr>
                                        <tr>
                                            <td>Utente</td>
                                            <td><input type="text" value="root"></input></td>
                                        </tr>
                                        <tr>
                                            <td>Password</td>
                                            <td><input type="password" value="intsepwd"></input></td>
                                        </tr>
                                        <tr>
                                            <td>Database</td>
                                            <td><input type="text" value="intse"></input></td>
                                        </tr>
                                    </table>
                                    <FORM METHOD="LINK" ACTION="#" target="frame"><button type="submit">Salva</button></form>
                            </center>
                        </td>

                    </tr>
                </table>
            </div>
            <br>
            <div class="Table" >
                <table id="users">
                    <tr>
                        <td class="tab_sel">
                            Utenti
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <center>
                                    Spiacente User, non sei autorizzato a modificare gli utenti. Contattare l'amministratore.
                            </center>
                        </td>
                    </tr>
                </table>
            </div>
            <br>
            <div class="Table" >
                <table id="update">
                    <tr>
                        <td class="tab_sel">
                            Aggiorna
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <center>
                                    Spiacenti, non sono disponibili aggiornamenti, contattare l'amministratore per eventuali errori.
                            </center>
                        </td>
                    </tr>
                </table>
            </div>
          <!--<footer><p>Pagina <a href="">1</a></p></footer>  -->
</body>
</html>