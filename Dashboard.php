<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Api Crud Patient</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.2/css/all.min.css" integrity="sha512-HK5fgLBL+xu6dm/Ii3z4xhlSUyZgTT9tuc/hSrtw6uzJOvgRr2a9jyxxT1ely+B+xFAmJKVSTbpM/CuL7qxO8w==" crossorigin="anonymous" />
    <link rel="stylesheet" href="./assets/css/dashboardadmin.css">
</head>
<body>
<header id="header">
<?php
    if(isset($_POST['sube'])){
    session_start();
    session_unset();
    session_destroy();
    header("location:index.php");
    }
    ?>
       <form action="" method="POST">
          <button class="nav-link hkjhfjkdhfk" type="submit" name="sube" style="position: absolute;right:0;margin-top: 11px;z-index: 3;background-color:red;color:white;border-radius: 10% / 50%;border-color: red;padding:5px 30px 5px 30px">Logout</button>
       </form>

    <?php
    session_start();
        if(empty($_SESSION['admin'])){
        header("location:index.php");
    }else{
    echo "<h1 style='margin-top: 0;color:white;background:black;width:100%;text-align:center;padding:10px;margin-bottom:0;font-family:cursive;font-size:20px'>welcome <span style='color:#ac7b00'>" .$_SESSION['admin'] ."</span> to your page!&nbsp;<span style='color:orange'>'ADMIN!'</span></h1>";
    }
    ?>
     </header>
<!-- Header -->


 
<!-- /Header -->

<!--site-main-->
 <main id="">
     <div class="container">
         <div class="box-nav d-flex justify-between">
             <a href="/" class="border-shadow">
            </a>
         </div>

         <!--form handling-->
         <!--/site-main-->
         <form action="/" method="POST">
            <table class="table">
            <thead class="thead-dark">
                <tr>
                    <th>name</th>
                    <th>email</th>
                    <th>subject</th>
                    <th>message</th>
                </tr>
            </thead> 
            <tbody>
            <?php 
                                    include_once("./class/afficheContact.php");

                                    $object = new affichecontact();
                                    $row = $object->launchaffiche();
                                    for ($i=0; $i < count($row); $i++) { 

                                        ?>
                <tr>
               
               <td><?php echo $row[$i]['name']; ?></td>
               <td><?php echo $row[$i]['email']; ?></td>
               <td><?php echo $row[$i]['subject']; ?></td>
               <td><?php echo $row[$i]['message']; ?></td>
           
                </tr>
                <?php
        }
             ?>
            </tbody>         
            </table>
            
        </form>
     </div>
 </main>
<!--/site-main-->

</body>
</html>