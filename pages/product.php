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
        <!--<script src="../scripts/ui/jquery.ui.resizable.js"></script>-->
        <script src="../scripts/ui/jquery.ui.dialog.js"></script>
        <script src="../scripts/ui/jquery.ui.effect.js"></script>
        <script src="../scripts/ui/jquery.ui.effect-blind.js"></script>
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
        <script>
        $.fx.speeds._default = 500;
        $(function() {
            $( "#dialogadd" ).dialog({
                autoOpen: false,
                show: "blind",
                hide: "blind",
                height: 422,
                width: 402,
            });
            $( "#dialogerr" ).dialog({
                autoOpen: false,
                show: "blind",
                hide: "blind",
                height: 90,
                width: 200,
            });
            $( "#dialogfind" ).dialog({
                autoOpen: false,
                show: "blind",
                hide: "blind",
                height: 120,
                width: 250,
            });

            $( "#openeradd" ).click(function() {
                $( "#dialogadd" ).dialog( "open" );
                return false;
            });
            $( "#openerfind" ).click(function() {
                $( "#dialogfind" ).dialog( "open" );
                return false;
            });
            $( "#openererr" ).click(function() {
                $( "#dialogerr" ).dialog( "open" );
                return false;
            });
            $( "#openererr2" ).click(function() {
                $( "#dialogerr" ).dialog( "open" );
                return false;
            });
            $( "#openererr3" ).click(function() {
                $( "#dialogerr" ).dialog( "open" );
                return false;
            });
        });
        </script>
         <style type="text/css">
        #dialogadd  {overflow:hidden;}
        #dialogerr  {overflow:hidden;}
        #dialogfind  {overflow:hidden;}
        </style>
    </head>
    <body>
        <!--<hide>-->
        <div id="dialogadd" title="Aggiungi" width="420" height="470">
            <iframe src="f/addform.php" width="400" height="450"></iframe>
        </div>
        <div id="dialogerr" title="Errore" width="420" height="470">
            <img src="../images/error.png"/><p>Occorre selezionare il prodotto.</p>
        </div>
        <div id="dialogfind" title="Cerca" width="420" height="470">
            <form><label value="Cerca"/><input type="text" value=""><input type="button" value="cerca" action="submit" target="/product.php"/></form>
        </div>
    <!--</hide>-->
                <center>
            <div id="wrapper">                                                      
    			<div width="100%">
                    <table width="80%" align="center" cell-spacing="2px">
                        <tr align="center" width="80%">
                            <td width="14%" nowrap="nowrap" class="buttonlink">
                                <a href="#" id="openeradd">Aggiungi</a>
                            </td>
                            <td width="14%" nowrap="nowrap" class="buttonlink">
                                <a href="#" id="openererr">Modifica</a>
                            </td>
                            <td width="14%" nowrap="nowrap" class="buttonlink">
                                <a href="#" id="openererr2">Elimina</a>
                            </td>
                            <td width="14%" nowrap="nowrap" class="buttonlink">
                                <a href="#" id="openererr3">Progetta</a>
                            </td>
                            <td  width="14%" nowrap="nowrap" class="buttonlink">
                                <a href="#" id="openefind">Cerca</a>
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