<!doctype: HTML>
<html>
    <head>
    	<link rel="stylesheet" href="../css/styleprod.css" type="text/css" media="screen">
        <link rel="stylesheet" href="../images/custom-theme/jquery.ui.all.css">
        <script src="../scripts/jquery-1.8.3.js"></script>
        <script src="../scripts/jquery.bgiframe-2.1.2.js"></script>
        <script src="../scripts/ui/jquery.ui.core.js"></script>
        <script src="../scripts/ui/jquery.ui.widget.js"></script>
        <script src="../scripts/ui/jquery.ui.mouse.js"></script>
        <script src="../scripts/ui/jquery.ui.draggable.js"></script>
        <script src="../scripts/ui/jquery.ui.position.js"></script>
        <script src="../scripts/ui/jquery.ui.resizable.js"></script>
        <script src="../scripts/ui/jquery.ui.dialog.js"></script>
        <script src="../scripts/ui/jquery.ui.effect.js"></script>
        <script src="../scripts/ui/jquery.ui.effect-blind.js"></script>
        <script src="../scripts/ui/jquery.ui.effect-explode.js"></script>
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
        <script>
        // increase the default animation speed to exaggerate the effect
        $.fx.speeds._default = 500;
        $(function() {
            $( "#dialog" ).dialog({
                autoOpen: false,
                show: "blind",
                hide: "blind"
            });

            $( "#opener" ).click(function() {
                $( "#dialog" ).dialog( "open" );
                return false;
            });
        });
        </script>
    </head>
    <body>
        <div id="dialog" title="Aggiungi" width="420" height="470">
            <iframe src="f/addform.php" width="400" height="450"></iframe>
        </div>
                <center>
            <div id="wrapper">                                                      
    			<div width="100%">
                    <table width="80%" align="center" cell-spacing="2px">
                        <tr align="center" width="80%">
                            <td width="14%" nowrap="nowrap" class="buttonlink">
                                <a href="#" id="opener">Aggiungi</a>
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