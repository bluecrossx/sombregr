<?php 
class pdoStatements
{   
    var $queryStr;
    var $pdoDB;
    
    public function __construct(pdoDB $pdoDB)
    {
        //Echo "The following class has been created:".__CLASS__."<br/>";

        $this->pdoDB = $pdoDB;

    }

    public function __destruct()
    {
        // Echo "The following class has been destroyed:".__CLASS__."<br/>";
    }

    function getQuery(){
      // echo $this->queryStr;
       
        $this->pdoDB->stmt = $this->pdoDB->DB->prepare($this->getQueryStr());
        
    }

    function getQueryStr(){
        return $this->queryStr;
        
     }
    
    function counterQueryReturn(){
        $this->queryStr = "SELECT MAX(`counter`) as `max` FROM `counter`";
    }


    function counterInsert(){
        $this->queryStr = "INSERT INTO `counter`(`counter`) VALUES ('counter')";
    }
   
}
?>