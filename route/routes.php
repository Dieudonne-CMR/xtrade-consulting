<?php 


// $nom_shop= select_table_where('shop','Mat_Shop', $mat_shop);

// var_dump($nom_shop[0]->Nom_Shop);
// var_dump(select_table_where('shop','Mat_Shop', $mat_shop)[0]->Nom_Shop);


$url="";

if(isset($_GET['url'])):
    $url=explode('/',$_GET['url']);
endif;

//=========================================== Route supper admin

if(@$url[0]=='home'):
    include('pages/home.php');
endif;



