<link href="/intse/css/stylelogin.css" rel="stylesheet" type="text/css">
<style type="text/css">
body {
	background: -moz-linear-gradient(top, #7db9e8 0%, #2989d8 50%, #1e5799 100%);
  background: -webkit-gradient(linear, left top, left bottom, color-stop(0%,#7db9e8), color-stop(50%,#2989d8), color-stop(100%,#1e5799));
  background: -webkit-linear-gradient(top, #7db9e8 0%,#2989d8 50%,#1e5799 100%);
  background: -o-linear-gradient(top, #7db9e8 0%,#2989d8 50%,#1e5799 100%);
  background: -ms-linear-gradient(top, #7db9e8 0%,#2989d8 50%,#1e5799 100%);
  background: linear-gradient(to bottom, #7db9e8 0%,#2989d8 50%,#1e5799 100%);
}
.copy {
  position:absolute;
  vertical-align: center;
  padding-bottom: 10px;
  margin-left: 46%;
  margin-right: 47%;
  margin-top: 18%;
  color:#FFF;
  font-size: 10px;
  font-family: Arial;
}
</style>
<br><br><br><br><br><br><br><br><br><br><br><br><br>

<table width="236" border="0" align="center" cellpadding="0" cellspacing="0" bordercolor="#FFFFFF"background="#7db9e8">
  <tr>
    <th height="97" align="center" valign="middle" scope="col"><div class="header"><img src="/intse/images/logo.png" width="195" height="95"  alt=""/></div></th>
  </tr>
  <tr>
    <td align="center" valign="middle"><div class="login"><form name="form1" method="post" action="checklogin.php">
      <table width="200" border="0" align="center" cellpadding="10" cellspacing="0">
        <tr>
          <th scope="col"><span class="tablelogin"><strong style="font-family: 'Arial Black'; color: #FFF; font-style: normal; font-size: 12px;">Utente</strong></span></span></th>
          <th scope="col"><span class="tablelogin"><strong>
            <input name="myusername" type="text" autofocus required id="myusername">
          </strong></span></span></th>
        </tr>
        <tr style="text-align: center">
          <td><span class="tablelogin"><strong style="font-family: 'Arial Black'; color: #FFFFFF; font-style: normal; font-size: 12px; text-align: center;">Password</strong></span></span></td>
          <td><span class="tablelogin"><strong>
            <input name="mypassword" type="password" required id="mypassword">
          </strong></span></span></td>
          <br>
        </tr>
      </table>
    </div></td>
  </tr>
  <tr style="text-align: center">
    <td><br>
      <!--<div class="footer">-->
      <input type="submit" name="Submit" value="Login" class="footer">
     <!-- <a href="sindex.php">Login</a>
    </div>-->
    </form>
    <p></span></p></td>
  </tr>
</table>
<footer class="copy">
  <center><p>ATech &copy; 2014. Intse CMS <?php include '/scripts/version.php'; echo $version; ?></p></center>
</body>
</html> 
