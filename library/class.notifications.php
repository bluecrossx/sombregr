<?php

class notifications{

    public function __construct()
    {
        // Echo "The following class has been created:".__CLASS__."<br/>";

    }

    public function __destruct()
    {
       
        // Echo "The following class has been destroyed:".__CLASS__."<br/>";

    }

    function createNotificationBar(){
        echo "<div id='Notifier'> NoticeBar </div>";
    }

    function changeNoticeMessage($thisMessage){
       
        switch ($thisMessage) {
            case "404":
                echo "<script>document.getElementById('Notifier').innerHTML = '404: Not Found';</script>";
                break;
            
            case "200":
                echo "<script>document.getElementById('Notifier').innerHTML = '200 Success';</script>";
                break;
            
            default:
                echo "<script>document.getElementById('Notifier').innerHTML = '$thisMessage';</script>";
                break;
        }

    }

}?>
