 
 <h1 title="<?php echo   $liste_projet_description1_tittle_x1_5[$x1_5] ; ?>"  id="<?php echo   "id_".$liste_projet_id_sha1_x1_5[$x1_5] ; ?>" >
      <?php echo $liste_projet_name_x1_5[$x1_5] ; ?>
 </h1>

 <p title="<?php echo   $liste_projet_description1_tittle_x1_5[$x1_5] ; ?>"  id="<?php echo   "id_p_".$liste_projet_id_sha1_x1_5[$x1_5] ; ?>"  >
<?php 

echo $liste_projet_description1_x1_5[$x1_5] ;
?>
 </p>

<?php 

/*
echo $liste_projet_id_x1_5[$x1_5] ;
echo "<br/>" ; 

echo $liste_projet_id_sha1_x1_5[$x1_5] ;
echo "<br/>" ; 

echo $liste_projet_id_parent_x1_5[$x1_5] ;
echo "<br/>" ; 

echo $liste_projet_id_sha1_general_x1_5[$x1_5] ;
echo "<br/>" ; 

echo $liste_projet_ip_x1_5[$x1_5] ;
echo "<br/>" ; 



echo $liste_projet_img_x1_5[$x1_5] ;
echo "<br/>" ; 

echo $liste_projet_name_x1_5[$x1_5] ;
echo "<br/>" ; 

echo $liste_projet_description1_x1_5[$x1_5] ;
echo "<br/>" ; 

echo $liste_projet_description2_x1_5[$x1_5] ;
echo "<br/>" ; 

echo $liste_projet_visibilite1_x1_5[$x1_5] ;
echo "<br/>" ; 



echo $liste_projet_visibilite2_x1_5[$x1_5] ;
echo "<br/>" ; 

echo $liste_projet_type_x1_5[$x1_5] ;
echo "<br/>" ; 

echo $information_user_id_sha1_x1_5[$x1_5] ;
echo "<br/>" ; 

echo $liste_projet_new_file_x1_5[$x1_5] ;
echo "<br/>" ; 

echo $liste_projet_reg_date_x1_5[$x1_5] ;
echo "<br/>" ; 



echo $liste_projet_color_1_x1_5[$x1_5] ;
echo "<br/>" ; 


echo $liste_projet_color_2_x1_5[$x1_5] ;
echo "<br/>" ; 



echo $liste_projet_name_font_size_x1_5[$x1_5] ;
echo "<br/>" ; 

echo $liste_projet_description1_font_size_x1_5[$x1_5] ;
echo "<br/>" ; 


echo $liste_projet_background_color_x1_5[$x1_5] ;
echo "<br/>" ; 




*/







 
$img ="../../redirection_dowload_img/".$liste_projet_img_x1_5[$x1_5] ; 
if($liste_projet_img_x1_5[$x1_5]!=""){

 
  ?>
  <img src="<?php echo $img  ; ?> " alt="Paris" width="20%"  style="margin:30px;text-center"> 
  <?php 
}

 






 


$apple_x1_6 = new Select_datas($servername,$username,$password,$dbname);

  array_push(
    $apple_x1_6->row,

    'liste_projet_id',
    'liste_projet_id_sha1',
    'liste_projet_id_parent',
    'liste_projet_id_sha1_general',
    'liste_projet_ip',

    'liste_projet_img',
    'liste_projet_name',
    'liste_projet_description1',
    'liste_projet_description2',
    'liste_projet_visibilite1',

    'liste_projet_visibilite2',
    'liste_projet_type',
    'information_user_id_sha1',  
    'liste_projet_new_file',
    'liste_projet_reg_date',

    'liste_projet_color_1',
    'liste_projet_color_2', 

    'liste_projet_name_font_size', 
    'liste_projet_description1_font_size',
    'liste_projet_background_color',
    'liste_projet_description1_tittle',
    'liste_projet_name_tittle' 

    

    );





    $apple_x1_6->sql='SELECT * FROM `liste_projet` WHERE `liste_projet_id_parent` ="'.$liste_projet_id_sha1_x1_5[$x1_5] .'"  ORDER BY liste_projet_id';
    $apple_x1_6->execution();
    $myJSON = json_encode($apple_x1_6->list_row); 









     

 


 


if(count( $apple_x1_6->list_row) !=0){

    $number_x1_6 = 0 ; 
    $liste_projet_id_x1_6 =$apple_x1_6->add_array_element($number_x1_6);
    $number_x1_6 ++ ; 
    $liste_projet_id_sha1_x1_6 =$apple_x1_6->add_array_element($number_x1_6);
    $number_x1_6 ++ ; 
    $liste_projet_id_parent_x1_6 =$apple_x1_6->add_array_element($number_x1_6);
    $number_x1_6 ++ ; 
    $liste_projet_id_sha1_general_x1_6 =$apple_x1_6->add_array_element($number_x1_6);
    $number_x1_6 ++ ; 
    $liste_projet_ip_x1_6 =$apple_x1_6->add_array_element($number_x1_6);
    $number_x1_6 ++ ; 
    
    
    $liste_projet_img_x1_6 =$apple_x1_6->add_array_element($number_x1_6);
    $number_x1_6 ++ ; 
    $liste_projet_name_x1_6 =$apple_x1_6->add_array_element($number_x1_6);
    $number_x1_6 ++ ; 
    $liste_projet_description1_x1_6 =$apple_x1_6->add_array_element($number_x1_6);
    $number_x1_6 ++ ; 
    $liste_projet_description2_x1_6 =$apple_x1_6->add_array_element($number_x1_6);
    $number_x1_6 ++ ; 
    $liste_projet_visibilite1_x1_6 =$apple_x1_6->add_array_element($number_x1_6);
    $number_x1_6 ++ ; 
    
    
    $liste_projet_visibilite2_x1_6 =$apple_x1_6->add_array_element($number_x1_6);
    $number_x1_6 ++ ; 
    $liste_projet_type_x1_6 =$apple_x1_6->add_array_element($number_x1_6);
    $number_x1_6 ++ ; 
    $information_user_id_sha1_x1_6 =$apple_x1_6->add_array_element($number_x1_6);
    $number_x1_6 ++ ; 
    $liste_projet_new_file_x1_6 =$apple_x1_6->add_array_element($number_x1_6);
    $number_x1_6 ++ ; 
    $liste_projet_reg_date_x1_6 =$apple_x1_6->add_array_element($number_x1_6);
    $number_x1_6 ++ ; 
    
    
    $liste_projet_color_1_x1_6 =$apple_x1_6->add_array_element($number_x1_6);
    $number_x1_6 ++ ; 
    
    $liste_projet_color_2_x1_6 =$apple_x1_6->add_array_element($number_x1_6);
    $number_x1_6 ++ ; 
    
    
    $liste_projet_name_font_size_x1_6 =$apple_x1_6->add_array_element($number_x1_6);
    $number_x1_6 ++ ; 
    $liste_projet_description1_font_size_x1_6 =$apple_x1_6->add_array_element($number_x1_6);
    $number_x1_6 ++ ; 
    
    $liste_projet_background_color_x1_6 =$apple_x1_6->add_array_element($number_x1_6);
    $number_x1_6 ++ ; 
    
    $liste_projet_description1_tittle_x1_6 =$apple_x1_6->add_array_element($number_x1_6);
     
    $number_x1_6 ++ ; 
     $liste_projet_name_tittle_x1_6 = $apple_x1_6->add_array_element($number_x1_6);




     for($x1_6 = 0 ; $x1_6<count($liste_projet_id_sha1_x1_6) ; $x1_6 ++ ) {   
                 include("pages_json_7.php") ; 
     }
 
     
}

?>




 
 

 