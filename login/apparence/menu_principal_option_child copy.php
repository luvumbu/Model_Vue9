<?php



echo '<div class="space_display">' ;

 
for($a = 0 ; $a< count($liste_projet_id_sha1_2); $a ++) {
  echo "<br/>" ; 

 
  ?>
<div class="class_1" id="<?php echo "parent_".$liste_projet_id_sha1_2[$a] ?>">






 
        <h4 class="liste_projet_name">
          
      <input type="text"  style="color:<?php echo $liste_projet_color_1[$a] ?>" onkeyup="update_all_php(this)" id="<?php echo "input_".$liste_projet_id_sha1_2[$a] ?>" title="<?php echo $liste_projet_id_sha1_2[$a] ?>" value="<?php echo $liste_projet_name_2[$a] ?>"  class="liste_projet_name_input">
        </h4>       
     
        <textarea onkeyup="update_all_php(this)" style="color:<?php echo $liste_projet_color_2[$a] ?>" id="<?php echo "textarea_".$liste_projet_id_sha1_2[$a] ?>" title="<?php echo $liste_projet_id_sha1_2[$a] ?>" class="liste_projet_description1_textarea"><?php echo $liste_projet_description1_2[$a] ?></textarea>
        <br/>
        <img class="format_toogle" width="50" height="50" onclick="element_edit(this)" src="https://img.icons8.com/windows/50/edit--v1.png" title="<?php echo $liste_projet_id_sha1_2[$a] ?>" alt="edit--v1"/>

          <img title="<?php echo $liste_projet_id_sha1_2[$a] ?>" width="50" onclick="redirection_dowload_img(this)" class="format_toogle" height="50" title="1703569778134" src="https://img.icons8.com/material-outlined/50/picture.png" alt="picture">

          <?php


if($liste_projet_img_2[$a]!=""){
 
  ?>

<?php 
 
  $src_img__="redirection_dowload_img/".$liste_projet_img_2[$a] ; 
  
                                    ?>
                  <div class="div_images_2" onclick="redirection_dowload_img(this)" style="background-image: url('<?php echo $src_img__ ; ?>')" title="<?php echo $liste_projet_id_sha1_2[$a] ?>"></div>  
  
  
                                    <?php 

                                  
                                  }
 
                ?>


 


              
 
  

 
        <?php 

        
              if($liste_projet_visibilite1_2[$a]==""){
                       ?>
                       
                       
                       <img class="format_toogle" title="<?php echo $liste_projet_id_sha1_2[$a] ?>"  onclick="visibility(this)"   width="50" height="50" src="https://img.icons8.com/ios-glyphs/50/invisible.png" alt="invisible"/>
                       <?php 
              }
              else {
?>
 <img class="format_toogle" title="<?php echo $liste_projet_id_sha1_2[$a] ?>"  onclick="visibility(this)"   width="50" height="50" src="https://img.icons8.com/ios-glyphs/50/visible--v1.png" alt="invisible"/>

<?php
              }
        ?>
      
      
      <a  href="<?php echo "blog/pages.php/".$liste_projet_id_sha1_2[$a] ?>">
       
        <img class="format_toogle" title="<?php echo $liste_projet_id_sha1_2[$a] ?>"   width="50" height="50" src="https://img.icons8.com/ios-glyphs/50/link--v1.png" alt="link--v1"/>
        </a>
          <img class="format_toogle" onclick="remove_all(this)"  title="<?php echo $liste_projet_id_sha1_2[$a] ?>"  width="50" height="50" src="https://img.icons8.com/ios-glyphs/50/delete-forever.png" alt="delete-forever"/>
     
            <input type="color"    style="opacity:0;position:relative"           title="<?php echo $liste_projet_id_sha1_2[$a] ?>" id="<?php echo "liste_projet_color_1_".$liste_projet_id_sha1_2[$a] ?>" onchange="liste_projet_color_1(this)">
            <input type="color"    style="opacity:0;position:relative"           title="<?php echo $liste_projet_id_sha1_2[$a] ?>" id="<?php echo "liste_projet_color_2_".$liste_projet_id_sha1_2[$a] ?>" onchange="liste_projet_color_2(this)">
     
          </div>
    
<?php 
}




 ?>


 

    
</div>




<style>
  .div_images_2{
width:100px;
height:100px; 
background-size:100%;

margin-left:10%;
 
}


.div_images_2:hover{
cursor:pointer ; 
}
</style>