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
                hide: "blind",
                height: 422,
                width: 402,
            });
            $( "#dialog2" ).dialog({
                autoOpen: false,
                show: "blind",
                hide: "blind",
                height: 100,
                width: 300,
            });
            $( "#dialog3" ).dialog({
                autoOpen: false,
                show: "blind",
                hide: "blind",
                height: 90,
                width: 300,
            });
            $( "#opener" ).click(function() {
                $( "#dialog" ).dialog( "open" );
                return false;
            });
            
            $( "#opener2" ).click(function() {
                $( "#dialog2" ).dialog( "open" );
                return false;
            });

            $( "#opener3" ).click(function() {
                $( "#dialog3" ).dialog( "open" );
                return false;
            });
            $( "#opener4" ).click(function() {
                $( "#dialog3" ).dialog( "open" );
                return false;
            });
            $( "#opener5" ).click(function() {
                $( "#dialog3" ).dialog( "open" );
                return false;
            });
        });
        </script>
                    <style>
              .ui-autocomplete-category {
                font-weight: bold;
                padding: .2em .4em;
                margin: .8em 0 .2em;
                line-height: 1.5;
              }
              </style>
              <script>
              $.widget( "custom.catcomplete", $.ui.autocomplete, {
                _renderMenu: function( ul, items ) {
                  var that = this,
                    currentCategory = "";
                  $.each( items, function( index, item ) {
                    if ( item.category != currentCategory ) {
                      ul.append( "<li class='ui-autocomplete-category'>" + item.category + "</li>" );
                      currentCategory = item.category;
                    }
                    that._renderItemData( ul, item );
                  });
                }
              });
              </script>
              <script>
              $(function() {
                var data = [
                  { label: "anders", category: "" },
                  { label: "andreas", category: "" },
                  { label: "antal", category: "" },
                  { label: "annhhx10", category: "Products" },
                  { label: "annk K12", category: "Products" },
                  { label: "annttop C13", category: "Products" },
                  { label: "anders andersson", category: "People" },
                  { label: "andreas andersson", category: "People" },
                  { label: "andreas johnson", category: "People" }
                ];
             
                $( "#search" ).catcomplete({
                  delay: 0,
                  source: data
                });
              });
              </script>
        <style type="text/css">
        #dialog  {overflow:hidden;}
        #dialog2  {overflow:hidden;}
        #dialog3  {overflow:hidden;}
        #error {vertical-align:center;margin-top:14px;left:35px;position: absolute;}
        #errorimg {position:absolute;top:2px;left:2px;}
        </style>
    </head>
    <body>
        <div id="dialog" title="Aggiungi" width="420" height="470">
            <iframe src="f/addform.php" width="400" height="430" frameborder="none" scrolling="none"></iframe>
        </div>
        <div id="dialog2" title="Cerca" width="420" height="470">
            <form><label for="search">Cerca: </label><input id="search"></form>
        </div>
        <div id="dialog3" title="Errore" width="320" height="270">
            <img src="../images/error.png" id="errorimg"/><h6 id="error"> Occorre selezionare prima il prodotto.</h6>
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
                                <a href="#" id="opener3">Modifica</a>
                            </td>
                            <td width="14%" nowrap="nowrap" class="buttonlink">
                                <a href="#" id="opener4">Elimina</a>
                            </td>
                            <td width="14%" nowrap="nowrap" class="buttonlink">
                                <a href="#" id="opener5">Specifiche</a>
                            </td>
                            <td  width="14%" nowrap="nowrap" class="buttonlink">
                                <a href="" id="opener2">Cerca</a>
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