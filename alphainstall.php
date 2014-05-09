<style type="text/css">
body { font-family: Arial; }
.error {color: red;}
</style>
<?php

include 'config.php';
include '/scripts/version.php';

echo "Alpha Installer";
echo '<br>';
echo "This Installer populate your db with tables and standard value";
echo '<br>';
echo "We are installing version ", $version ," Alpha";
echo '<br>';
echo '<button type="submit" action"" id="bottone">Install</button>';
echo '<p class="error"> Script Error, please run intse.sql (/db/intse.sql) in phpmyadmin to complete installation. </p> ';

$data = new MysqlClass();
$data->connetti();
if (isset($_POST['bottone'])){
	importa_file_sql("/db/intse.sql");
function importa_file_sql($sqlfile)
{
  // estraggo il contenuto del file
  $queries = file_get_contents($sqlfile);
  // Rimuovo eventuali commenti
  $queries = preg_replace(array('/\/\*.*(\n)*.*(\*\/)?/', '/\s*--.*\n/', '/\s*#.*\n/'), "\n", $queries);
  // recupero le singole istruzioni
  $statements = explode(";\n", $queries);
  $statements = preg_replace("/\s/", ' ', $statements);
  // ciclo le istruzioni
  foreach ($statements as $query) {
   $query = trim($query);
   if ($query) {
      // eseguo la singola istruzione
      $result = mysql_query($query);
      // e stampo eventuali errori
      if (!$result) echo 'Impossibile eseguire la query ' . $query . ': ' . mysql_error();
   }
}
} }
?>