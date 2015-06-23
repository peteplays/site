<!DOCTYPE html>
<?php 
/*
http://peteplays.com
index.php

@author: plays.dev@gmail.com
19 June 2015

REQUIRED:
config.php

Revisions:


*/
include 'config.php';
?>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta name="PetePlays" content="awesomeness">
        <link rel="icon" href="images/favicon.ico">
        <title>Plays Land</title>
        <link href='http://fonts.googleapis.com/css?family=Poiret+One' rel='stylesheet' type='text/css'>
        <link href="css/reset.css" rel="stylesheet" >
        <link href="css/font-awesome.min.css" rel="stylesheet">
        <link href="css/plays.css" rel="stylesheet">
    </head>
<body>
    <?php include_once("service/ga.php"); ?> 

    <div class="sb-bg sb-bg-1" id="top_section">
        <div class="textCenter plays_banner">
            <h1 class="fontStyle"><?php echo $G_data_pointer_JSON->{'text'}->{'banner_text'}; ?></h1>
        </div>
    </div>

    <div class="sb-color" id="plug_in_section">
        <h2 class="textCenter fontStyle"><?php echo $G_data_pointer_JSON->{'text'}->{'first_section_text'}; ?></h2>
    </div>

    <div class="sb-bg sb-bg-2"></div> 
    <div class="sb-color" id="quotes_section">        
        <h2 class="textCenter fontStyle">
            <i class="fa fa-angle-double-left"></i>
            <?php 
                echo str_replace('|', '<i class="fa fa-angle-double-right"></i>', $G_data_JSON["quotes"][(rand(0, count($G_data_JSON["quotes"]) - 1))] );         
            ?>
        </h2>   
    </div>

    <div class="sb-bg sb-bg-3"></div>
    <div class="sb-color" id="project_section">
        <div class=" fontStyle">
            <h2 class="textCenter"><?php echo $G_data_pointer_JSON->{'text'}->{'project_section_text'}; ?></h2>
            <?php 
                foreach ($G_data_pointer_JSON->{"project_section"} as $key ) { 
                    echo '<div class="project_section_record">
                             <div class="project_section_site">
                                <a href="'.$key->{"link"}.'" target="_blank"><i class="fa fa-globe"></i>'.$key->{"title"}.'</a>
                             </div>
                             <div class="project_section_description">
                                 <p>
                                    '.$key->{"description"}.'
                                 </p>
                             </div>
                         </div>';
                }                 
            ?>            
        </div>
    </div>

    <div class="sb-bg sb-bg-4"></div>
    <div class="sb-color" id="more_section">        
        <h2 class=" textCenter fontStyle">
           <?php echo $G_data_pointer_JSON->{'text'}->{'more_section_text'}; ?>
        </h2>       
    </div>

    <div class="sb-bg sb-bg-5" >
        <img class="speaker_plays_thumb_logo" src="<?php echo $G_data_pointer_JSON->{'images'}->{'peteplays_thumbs_up_logo'}; ?>" alt="PetePlays thumbs up logo">
    </div>  
    <div class="sb-footer sb-color" id="footer_section">
        <a href="<?php echo $peteplays_url; ?>"><img class="footer_plays_logo" src="<?php echo $G_data_pointer_JSON->{'images'}->{'peteplays_logo'}; ?>" alt="PetePlays logo"></a>
        <ul>
           <li><a href="<?php echo $g_plus; ?>" target="_blank"><i class="fa fa-google-plus-square"></i></a></li>
           <li><a href="<?php echo $linked_in; ?>" target="_blank"><i class="fa fa-linkedin-square"></i></a></li>
           <li><a href="<?php echo $twitter; ?>" target="_blank"><i class="fa fa-twitter-square"></i></a></li>
           <li><a href="<?php echo $github; ?>" target="_blank"><i class="fa fa-github-square"></i></a></li>
           <li><a href="<?php echo $my_email; ?>" target="_blank"><i class="fa fa-envelope-square"></i></a></li>
        </ul>
    </div>

    <div id="floating_menu" class="float_menu">
        <div class="floating_menu_items">
            <i id="floating_menu_1" class="fa fa-dot-circle-o" title="<?php echo $G_data_JSON["menu"][0]; ?>"></i>
            <i id="floating_menu_2" class="fa fa-ellipsis-v fa_ellipsis" title="<?php echo $G_data_JSON["menu"][1]; ?>"></i>
            <i id="floating_menu_3" class="fa fa-square" title="<?php echo $G_data_JSON["menu"][2]; ?>"></i>
            <i id="floating_menu_4" class="fa fa-ellipsis-v fa_ellipsis" title="<?php echo $G_data_JSON["menu"][3]; ?>"></i>
            <i id="floating_menu_5" class="fa fa-dot-circle-o" title="<?php echo $G_data_JSON["menu"][4]; ?>"></i>
        </div>
    </div>
     
    <script src="js/jquery-1.11.3.min.js"></script>
    <script src="js/plays.js"></script>
</body>
</html>
