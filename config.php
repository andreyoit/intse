<?php

class MysqlClass {

    private $nomehost = 'localhost';     
    private $nomeuser = 'root';          
    private $password = 'fofkom14'; 
    private $nomedb = 'intse';
    private $attiva = FALSE;
    private $connessione;

    public function connetti() {

        if(!$this->attiva && ($this->connessione = mysql_connect($this->nomehost, $this->nomeuser, $this->password) or die(mysql_error()))) {

            mysql_select_db($this->nomedb, $this->connessione) or die(mysql_error());
            $this->attiva = TRUE; // Now this becomes useful, because the value has been set

        }

        return $this->attiva;

    } 

    // Method to build up the query

    public function query($sql) {

        return mysql_query($sql, $this->connessione);

    }

    // Method to extract information from the query

    public function estrai($query) {

        return mysql_fetch_array($query, MYSQL_ASSOC);

    }

    public function disconnetti() {

        // More straight forward way to return the status

        if($this->attiva) return mysql_close($this->connessione);

        return FALSE;

    }
//
}