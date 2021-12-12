<?php
    include_once("connexion.php");

  class affichecontact extends connexion{


        public function launchaffiche(){
            $conn=$this->Connect();
            $query = "SELECT * FROM `mailing` ";
            $result=$conn->query($query);   
             $data=$result->fetchAll(); 
            return $data;
        }
  
}
  
?>