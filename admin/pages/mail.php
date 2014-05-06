<!doctype: HTML>
<html>
<head>
	<link rel="stylesheet" href="../css/stylemail.css" type="text/css" media="screen">
</head>
<body>
		<center>
			<div>
				<button type="submit">Nuovo</button>
				<button type="submit">Elimina</button>
				<button type="submit">Bozze</button>
				<button type="submit">Aggiorna</button>
				<button type="submit">Cerca</button>
			</div>
			<br>
			<div class="Table" >
                    <table >
                        <tr scope="col">
                            <?php 
                                    include '../config.php'; 
                                    $data = new MysqlClass();
                                    $data->connetti();
                                    $post_sql = $data->query("SELECT * FROM mail ORDER BY data DESC"); 
                                    echo '<table>';
                                    echo '<tr>';
                                            echo '<td class="tab_sel">-</td>';
                                            echo '<td class="tab_id">Mittente</td>';
                                            echo '<td class="tab_name">Messaggio</td>';
                                            echo '<td class="tab_cat">Data</td>';
                                            /*echo '<td class="tab_price">Prezzo al Pubblico</td>';*/
                                            echo '</tr>';
                                            echo '<tr>';
                                    if(mysql_num_rows($post_sql) > 0) {
                                        while($post_obj = $data->estrai($post_sql)) {
                                            $id = $post_obj['sender'];
                                            $name = stripcslashes($post_obj['message']);
                                            $cat = stripcslashes($post_obj['data']);
                                            /*$price = stripcslashes($post_obj['price']);*/
                                            echo '<tr>';
                                            echo '<td>';
                                            echo '<input type="checkbox" name="html" value="html"/>';
                                            echo '</td>';
                                            echo "<td>".$id."</td>";
                                            echo "<td>".$name."</td>";
                                            echo "<td>".$cat."</td>";
                                            /*echo "<td>".$price.",00 €</td>";*/
                                            echo '</tr>';
                                        }
                                    } else {
                                        echo '<p>Nessun Messaggio</p>';
                                    }
                                    echo '</table>';
                                    $data->disconnetti();
                                    ?>
                        </tr>
                    </table>
                </div>
                <footer><p>Pagina <a href="">1</a></p></footer>  
            </div>  
</body>
</html>