<!doctype: HTML>
<html>
<head>
	<link rel="stylesheet" href="../css/stylecomun.css" type="text/css" media="screen">
        <script type="text/javascript" src="../scripts/jquery.js"></script>
        <script type="text/javascript" src="../scripts/vscontext.jquery.js"></script>
        <script type="text/javascript" src="../scripts/menu_action.js"></script>
        <script type="text/javascript">
    $(document).ready(function(){
            $('#context').vscontext({menuBlock: 'vs-context-menu'});
    });
    </script>
        <style type="text/css" >
            @import "../css/vscontext.css";
        </style>
        <style type="text/css" >
            body{
                padding-left: 15px;
                font-family: Verdana, Arial, Helvetica, sans-serif;
                font-size: 13px;
            }
            #context{
                width: 100%;
                height: 100%;
                border:0px solid #ECECEC;
                background: transparent;
            }
        </style>
</head>
<body>
 <div class="vs-context-menu">
        <ul>
            <li class="cut seprator"><a href="javascript:cut();" id="menu_1">Taglia</a></li>
            <li class="copy"><a href="javascript:copy();" id="menu_2">Copia</a></li>
            <li class="paste seprator"><a href="javascript:paste();" id="menu_3">Incolla</a></li>
            <li class="edit"><a href="javascript:edit();" id="menu_4">Modifica</a></li>
            <li class="delete"><a href="javascript:del();" id="menu_5">Elimina</a></li>
        </ul>
    </div>
    <div id="context" height="100%" width="100%" >
       	<center>
			<div>
				<button type="submit"></button>
				<button type="submit"></button>
				<button type="submit"></button>
				<button type="submit"></button>
				<button type="submit"></button>
			</div>
			<br>
		</center>
    </div>
</body>
</html>