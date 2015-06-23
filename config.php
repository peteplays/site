<?php 

//--links
$base_url = "/";
$peteplays_url = "http://peteplays.com";
$g_plus = "https://www.plus.google.com/+PeteSchnabel/";
$linked_in = "https://www.linkedin.com/in/peterschnabel";
$twitter = "https://twitter.com/peteplays";
$github = "https://github.com/peteplays";
$my_email = "mailto:plays.dev@gmail.com";

//--get config data
$data_JSON = file_get_contents('data/config.json');
$G_data_JSON = json_decode($data_JSON, true);

$data_pointer_JSON = file_get_contents('data/config_pointer.json');
$G_data_pointer_JSON = json_decode($data_pointer_JSON);






?>