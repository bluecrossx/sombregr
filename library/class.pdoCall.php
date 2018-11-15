<?php

class pdoCall{

    public function __construct()
    {
        Echo "The following class has been created:".__CLASS__."<br/>";

    }

    public function __destruct()
    {
       
        Echo "The following class has been destroyed:".__CLASS__."<br/>";

    }

    function counterCall(){
                
        $stmt = new pdoDB;
        $stmt->pdoStatements->counterQueryReturn();
        $stmt->runSQL();
        $result = $stmt->result;

        return $result[0]["max"];
    }

    function counterLog(){
        $stmt = new pdoDB;
        $stmt->pdoStatements->counterInsert();
        $stmt->runSQLnoReturn();
        
    }
}?>
