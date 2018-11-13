<?php 
class pdoDB
{   
    var $DB ;
    var $dbservername;
    var $dbusername;
    var $dbpassword;
    var $dbname;
    var $query;
    var $result;
    var $stmt;
    
    public function __construct()
    {
        require_once(LIBRARY_PATH."srv.conndetails.php");

        $this->pdoStatements = new pdoStatements($this);

        // Echo "The following class has been created:".__CLASS__."<br/>";

    }

    public function __destruct()
    {
    // Echo "The following class has been destroyed:".__CLASS__."<br/>";
    }

    function runSQL(){


//Create connection String with data  PLEASE NOTE spaces are crucial here
            $this->DB = new PDO("mysql:host=$this->dbservername;dbname=$this->dbname", $this->dbusername, $this->dbpassword);
//set error mode
            $this->DB ->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
//Prepare and execute query
            $this->pdoStatements->getQuery();
//  $this->query->getParametersForQuery();
            $this->stmt->execute();
            $this->result = $this->stmt->fetchAll(PDO::FETCH_ASSOC);


    }

    function runSQLnoReturn(){


        //Create connection String with data  PLEASE NOTE spaces are crucial here
                    $this->DB = new PDO("mysql:host=$this->dbservername;dbname=$this->dbname", $this->dbusername, $this->dbpassword);
        //set error mode
                    $this->DB ->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        //Prepare and execute query
                    $this->pdoStatements->getQuery();
          //$this->query->getParametersForQuery();
    
                    $this->stmt->execute();
        
        
    }
}




// end result will look as follows

//  DB->query->setQueryAsSelectFrom($dataarray[])
//  DB->query->getQuery()
//  DB->runSQL()
?>