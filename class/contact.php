<?php
ob_start();
    include_once("connexion.php");

                class contact extends connexion{
//add

                    public function insertcontact($author,$email,$subject,$comment){
                        $conn=$this->Connect();
                        $query = "INSERT INTO mailing VALUES (NULL,'".$author."','".$email."','".$subject."','".$comment."')";
                        $conn->query($query);
                        if($query =! 0){
                            echo"<script>alert('We receive you message we gonna reply you ASAP')</script>";
                        }

                        }



                    }
ob_end_flush();
?>