<!doctype: HTML>
<!--<?php if (substr_count($_SERVER['HTTP_ACCEPT_ENCODING'], ‘gzip’)) ob_start(“ob_gzhandler”); else ob_start(); ?>-->
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    	<link rel="stylesheet" href="../css/styleprod.css" type="text/css" media="screen">
        <link rel="stylesheet" href="../images/custom-theme/jquery.ui.all.css" type="text/css" media="screen">
        <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.7.2/jquery.min.js"/>
        <‌​script src="https://ajax.googleapis.com/ajax/libs/jqueryui/1.8.18/jquery-ui.min.js"/>
        <script src="../scripts/jquery-1.8.3.js"></script>
        <script src="../scripts/jquery.bgiframe-2.1.2.js"></script>
        <script src="../scripts/jquery-ui-1.9.2.custom.js"></script>
        <script src="../scripts/ui/jquery.ui.core.js"></script>
        <script src="../scripts/ui/jquery.ui.widget.js"></script>
        <script src="../scripts/ui/jquery.ui.mouse.js"></script>
        <script src="../scripts/ui/jquery.ui.draggable.js"></script>
        <script src="../scripts/ui/jquery.ui.position.js"></script>
        <script src="../scripts/ui/jquery.ui.resizable.js"></script>
        <script src="../scripts/ui/jquery.ui.dialog.js"></script>
        <script src="../scripts/ui/jquery.ui.effect.js"></script>
        <script src="../scripts/ui/jquery.ui.effect-blind.js"></script>
        <div id="dialogadd" title="Aggiungi" width="420" height="470">
            <iframe src="f/addform.php" width="400" height="430" frameborder="none" scrolling="none"></iframe>
        </div>
        <div id="dialogfind" title="Cerca">
            <input id="search"><button action="search" class="ui-icon ui-icon-search" id="findbutt"/>
        </div>
        <div id="dialogerr" title="Errore" width="320" height="270">
            <img src="../images/error.png" id="errorimg"/><h6 id="error"> Occorre selezionare prima il prodotto.</h6>
        </div>
        <script type="text/javascript">
            $.fx.speeds._default = 500;
            $(function() {
                $( "#dialogadd" ).dialog({
                    autoOpen: false,
                    show: "blind",
                    hide: "blind",
                    height: 422,
                    width: 402,
                    modal: true,
                    resizable: false,
                });
                $( "#dialogerr" ).dialog({
                    autoOpen: false,
                    show: "blind",
                    hide: "blind",
                    height: 100,
                    width: 300,
                    modal:true,
                    resizable: false,
                });
                $( "#dialogfind" ).dialog({
                    autoOpen: false,
                    show: "blind",
                    hide: "blind",
                    height: 80,
                    width: 250,
                    modal: true,
                    resizable: false,
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
                });
            });
    
        </script>
         <style type="text/css">
        #dialogadd  {overflow:hidden;}
        #dialogerr  {overflow:hidden;}
        #dialogfind  {overflow:hidden;}
        .ui-autocomplete-category {font-weight: bold; padding: .2em .4em; margin: .8em 0 .2em; line-height: 1.5;}
        #error {vertical-align:center;margin-top:14px;left:35px;position: absolute;}
        #errorimg {position:absolute;top:2px;left:2px;}
        #findbutt {width: 20px; height: 20px; position:absolute; right: 8px; top: 6px;}
        </style>

    <body>

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
                                <a href="#" id="openerfind">Cerca</a>
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