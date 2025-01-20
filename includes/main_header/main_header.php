<?php
// session_start();
if(empty($_SESSION['auth']['Matricule']) || empty($_SESSION['auth']['password']) ):
    header('location:auth-login.php');
else:

    $membre = select_table_where('membre','Matricule', $_SESSION['auth']['Matricule']);
    if(sizeof($membre) < 1):
        header('location:auth-login.php');
    endif;
    
    // var_dump($membre);
    // session_destroy();
    
    $nom_membre=$membre[0]->Nom;
    $mat_shop=$membre[0]->Mat_Shop;
    $telphone= $membre[0]->Telephone;
    $permission=$membre[0]->Permission;
    $mat_membre=$membre[0]->Matricule;
    $id_role=$membre[0]->Role;
    
    
    //======== permet de connetre le type de membre
    $role= select_table_where('role','id',$id_role);
    // var_dump($role);
    $gest_boutik = $role[0]->gestion_boutik; //   si $gest_boutik==1 c'est un gerant si  $gest_boutik==0 c'est admin 
    $role_membre = $role[0]->role;

    // var_dump($mat_shop);

    if(isset($mat_shop)):
        $info_boutique = select_table_where('shop','Mat_Shop ',$mat_shop);
        $nom_shop = $info_boutique[0]->Nom_Shop;
        $localisation = $info_boutique[0]->Localisation;
        $email = $info_boutique[0]->Email;
        $telphone = $info_boutique[0]->Telephone;
        $logo = $info_boutique[0]->logo;

    endif;




endif;

