<?php
class dbConfig {
    protected $serverName;
    protected $userName;
    protected $password;
    protected $dbName;
    function dbConfig() {
        $this -> serverName = 'localhost';
        $this -> userName = 'yonevasi_survey';
        $this -> password = 'ade-yemi123';
        $this -> dbName = 'yonevasi_survey';
    }
}
?>