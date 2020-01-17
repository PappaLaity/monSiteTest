<?php

?>

<div class="ref navbar navbar-expand-sm navbar-dark bg-dark mb-3 ">
            <div class=" reflien container ">       
                <div class="logo"> 
                <a class="navbar-brand logo-ti" href="index.php">GHOST</a>  
                <!--<img src='img/g1.png' class="logo-icon" >   -->
                </div>
                <button class="navbar-toggler" data-toggle="collapse" data-target="#navbarNav"><span class="navbar-toggler-icon"></span></button>
                <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav nav">
                    <li class="nav-item active">
                        <a class="nav-link" href="index.php">Accueil</a>
                        <span class="sr-only">(current)</span>
                    </li>
                    <li class="nav-item ">
                        <a class="nav-link" href="portfolio.php">Profil</a>
                    </li>
<!--                    <li class="nav-item">
                        <a class="nav-link" href="blog.php">Blog</a>
                    </li>-->
                    <?php
                    if (isset($_SESSION['user'])){   

                        if($_SESSION['user' ]==="Laity" ){
                            
                    ?>
                            <li class="nav-item">
                                <a class="nav-link" href="#">mes Users </a>
                            </li class="nav-item">
                            <li class="nav-item">
                                <a class="nav-link" href="#">Ajouter User </a>
                            </li class="nav-item">

                            
                    <?php
                    
                        }

                    ?>
                        <li class="nav-item">
                            <a class="nav-link" href="#">Joining </a>
                        </li class="nav-item">
                        <li class="nav-item">
                            <a class="nav-link" href="#">BlogTools </a>
                        </li class="nav-item">
                        <li class="nav-item">
                            <a class="nav-link" href="logout.php"> <?php echo ' ('.$_SESSION['user'].') ';?>Se Deconnecter</a>
                        </li class="nav-item">      
                    <?php
                    
                    }else{

                    ?>

                    <li class="nav-item">
                        <a class="nav-link" href="login.php">Se Connecter</a>
                    </li>  
                    
                    <?php

                    }

                    ?>

                </ul>                   
                </div>
                
            </div>
</div>
