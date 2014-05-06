<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
<title>Aggiungi Prodotto</title>
<link rel="stylesheet" type="text/css" href="view.css" media="all">
<script type="text/javascript" src="view.js"></script>

</head>
<body id="main_body" >
	
	<img id="top" src="top.png" width="400px" alt="">
	<div id="form_container">				
			
							<?php 

                                include '../config.php'; 

                                $data = new MysqlClass();
                                $data->connetti();

                                $element1 = mysql_real_escape_string($_POST['element_1']);
                                $element2 = mysql_real_escape_string($_POST['element_2']);
                                $element31 = mysql_real_escape_string($_POST['element_3_1']);
                                $element4 = mysql_real_escape_string($_POST['element_4']);
                                
                                if (isset($_POST["element_1"]) && isset($_POST["element_2"]) && isset($_POST["element_3"]) && isset($_POST["element_4"]));
                                $post_sql = $data->query("INSERT INTO `intse`.`products` (`id`, `name`, `cat`, `price`) VALUES ('".$_POST['element_1']."', '".$_POST['element_2']."', '".$_POST['element_4']."', '".$_POST['element_3_1']."');"); 
                                

                                /*$post_sql = $data->query("INSERT INTO `intse`.`products` (`id`, `name`, `cat`, `price`) VALUES ('$element1', '$element2', '$element4', '$element31');"); */
                                    
                                
                                echo '<form id="form_824225" class="appnitro"  method="post" action="">';    
                                echo '<div class="form_description">';
                                echo '<h2>Aggiungi Prodotto</h2>';    
                                echo '<p>Aggiunta Manuale Nuovo Prodotto</p>';
                                echo '</div>';
                                echo '<ul >';
                                echo '<li id="li_1" >';
                                echo '<label class="description" for="element_1">Cod. ID </label>';
                                echo '<div>';
                                echo '<input id="element_1" name="element_1" class="element text small" type="text" maxlength="255" value=""/>';
                                echo '</div><p class="guidelines" id="guide_1"><small>Specifica Codice ID Interno</small></p>';
                                echo '</li><li id="li_2" >';
                                echo '<label class="description" for="element_2">Nome Prodotto </label>';
                                echo '<div>';
                                echo '<input id="element_2" name="element_2" class="element text medium" type="text" maxlength="255" value=""/>';
                                echo '</div><p class="guidelines" id="guide_2"><small>Specifica Nome Prodotto</small></p>';
                                echo '</li><li id="li_4" >';
                                echo '<label class="description" for="element_4">Categoria </label>';
                                echo '<div>';
                                echo '<select class="element select medium" id="element_4" name="element_4">';
                                echo '<option value="" selected="selected">Scegli...</option>';
                                echo '<option value="1" >Desktop PC</option>';
                                echo '<option value="2" >Mini PC</option>';
                                echo '<option value="3" >Gaming PC</option>';
                                echo '<option value="4" >Office PC</option>';
                                echo '<option value="5" >Server PC</option>';
                                echo '<option value="6" >Accessori</option>';
                                echo '</select>';
                                echo '</div><p class="guidelines" id="guide_4"><small>Specifica Categoria Prodotto</small></p>';
                                echo '</li><li id="li_3" >';
                                echo '<li id="li_5">';
                                echo '<label class="description" for="element_3">Prezzo </label></li>';
                                echo '<span>';
                                echo '<input id="element_3_1" name="element_3_1" class="element text currency" size="10" value="0" type="text" /> ,00 €';
                                echo '</span>';
                                echo '<p class="guidelines" id="guide_3"><small>Specifica il prezzo praticato al dettaglio.</small></p> ';
                                echo '</li>';
                                echo '<li class="buttons">';
                                echo '<input type="hidden" name="form_id" value="824225" />';
                                echo '<input id="saveForm" class="button_text" type="submit" name="submit" value="Aggiungi" />';
                                echo '</li>';
                                echo '</ul>';
                                echo '</form>';

                                if(mysql_num_rows($post_sql) > 0) {

                                    while($post_obj = $data->estrai($post_sql)) {

                                        $id = $post_obj['element_1'];
                                        $name = stripcslashes($post_obj['element_2']);
                                        $cat = stripcslashes($post_obj['element_4']);
                                        $price = stripcslashes($post_obj['element_3_1']);
                                  }
                                } else {

                                    echo 'Errore DATABASE';

                                }

                                $data->disconnetti();
                            ?>
		<div id="footer">
		</div>
	</div>
	<img id="bottom" src="bottom.png" alt="">
	</body>
</html>