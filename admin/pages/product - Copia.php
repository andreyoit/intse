<!doctype: HTML>
<html>
    <head>
    	<link rel="stylesheet" href="../css/styleprod.css" type="text/css" media="screen">
        <link rel="stylesheet" href="../scripts/modal.css">
        <script src="../scripts/jquery.min.js" type="text/javascript"></script>
        <script src="../scripts/jquery.reveal.js" type="text/javascript"></script>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    </head>
    <body>
                <script type="text/javascript" src="../scripts/script.js"></script>
                <center>
            <div id="wrapper">                                                      
    			<div width="100%">
                    <table width="80%" align="center" cell-spacing="2px">
                        <tr align="center" width="80%">
                            <td width="14%" nowrap="nowrap" class="buttonlink">
                                <a href="">Aggiungi</a>
                            </td>
                            <td width="14%" nowrap="nowrap" class="buttonlink">
                                <a href="">Modifica</a>
                            </td>
                            <td width="14%" nowrap="nowrap" class="buttonlink">
                                <a href="">Elimina</a>
                            </td>
                            <td width="14%" nowrap="nowrap" class="buttonlink">
                                <a href="">Progetta</a>
                            </td>
                            <td  width="14%" nowrap="nowrap" class="buttonlink">
                                <a href="">Cerca</a>
                            </td>
                        </tr>
                    </table>           
    			</div>
    			<br>
    			<div class="Table" >
                    <table >
                        <tr scope="col">
                            <?php 
                                    include '../config.php'; 
                                    $data = new MysqlClass();
                                    $data->connetti();
                                    $post_sql = $data->query("SELECT * FROM products ORDER BY id ASC"); 
                                    echo '<table>';
                                    echo '<tr>';
                                            echo '<td class="tab_sel">-</td>';
                                            echo '<td class="tab_id">Cod.ID</td>';
                                            echo '<td class="tab_name">Nome</td>';
                                            echo '<td class="tab_cat">Categoria</td>';
                                            echo '<td class="tab_price">Prezzo al Pubblico</td>';
                                            echo '</tr>';
                                            echo '<tr>';
                                    if(mysql_num_rows($post_sql) > 0) {
                                        while($post_obj = $data->estrai($post_sql)) {
                                            $id = $post_obj['id'];
                                            $name = stripcslashes($post_obj['name']);
                                            $cat = stripcslashes($post_obj['cat']);
                                            $price = stripcslashes($post_obj['price']);
                                            echo '<tr>';
                                            echo '<td>';
                                            echo '<input type="checkbox" name="html" value="html"/>';
                                            echo '</td>';
                                            echo "<td>".$id."</td>";
                                            echo "<td>".$name."</td>";
                                            echo "<td>".$cat."</td>";
                                            echo "<td>".$price.",00 €</td>";
                                            echo '</tr>';
                                        }
                                    } else {
                                        echo 'Tabella vuota';
                                    }
                                    echo '</table>';
                                    $data->disconnetti();
                                    ?>
                        </tr>
                    </table>
                </div>
                <footer><p>Pagina <a href="">1</a> di 1</p></footer>  
            </div> 
    </body>
</html>