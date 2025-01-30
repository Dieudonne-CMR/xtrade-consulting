<?php 
include ("api/cle_api.php");

// $nom_shop= select_table_where('shop','Mat_Shop', $mat_shop);

// var_dump($nom_shop[0]->Nom_Shop);
// var_dump(select_table_where('shop','Mat_Shop', $mat_shop)[0]->Nom_Shop);


$url="";

if(isset($_GET['url'])):
    $url=explode('/',$_GET['url']);
endif;

//=========================================== Route supper admin

if(@$url[0]=='home' || @$url[0]==''):
    // include ("api/api_services.php");
    $services = recup_services();
    $obj_tous_post = recup_article();
    include('pages/home.php');
endif;

if(@$url[0]=='about'):

    include('pages/about.php');
endif;
//-----------------------------
if(@$url[0]=='services'):
  
    $services = recup_services(); 
    include('pages/services.php');
endif;

//-----------------------------
if(@$url[0]=='service-details'):
    $mat_service= $url[1];

    // $service_detail = Recuper_service_detail(); 
    include('pages/service-details.php');
endif;
//------------------------------

if(@$url[0]=='formation'):
    include('pages/formation.php');
endif;
//---------------------------------
if(@$url[0]=='blog'):

    $articles = recup_article(); 
    include('pages/blog.php');
endif;
//------------------------------
if(@$url[0]=='blog-details'):

    include('pages/blog-details.php'); 
endif;

if(@$url[0]=='contact'):
    include('pages/contact.php');
endif;


