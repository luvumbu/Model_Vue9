<script src="class/js/js_on/js_cookie.js"></script> 

 
<?php 
include("header/header.php") ; 
?>


 
    <!DOCTYPE html>
<html>
<body>
 



<script>
 



 



const img_1_1="https://img.icons8.com/badges/50/invisible.png" ; 
const img_1_2="https://img.icons8.com/badges/50/visible.png" ; 

const img_2_2="https://img.icons8.com/ios/50/without-internet.png" ; 
const img_2_1="https://img.icons8.com/ios/50/wifi--v1.png" ; 





 const liste_projet_name_array =  [] ;   
 const liste_projet_description1_array = [] ; 
 const liste_projet_img_array = [] ; 
 const liste_projet_visibilite1_array = [] ; 
 const liste_projet_visibilite2_array = [] ; 
 const change_img2_array = [] ; 
 const liste_projet_id_array = [] ; 
 const liste_projet_img_array_ = [] ;
 const information_user_id_sha1_array =[] ; 

 const liste_projet_name_list_class =  "form-control liste_projet_name_" ;   
 const liste_projet_description1_list_class = "liste_projet_description1" ; 
 const change_img1_list_class = "change_img change_img1 element_" ; 
 const liste_projet_img_list_class = "cursor_pointer space_right_20 onclick_update_all onclick_update_visibility" ; 
 const liste_projet_visibilite1_list_class = "cursor_pointer space_right_20 onclick_update_all onclick_update_web" ; 
 const liste_projet_visibilite2_list_class = "cursor_pointer space_right_20 onclick_update_all onclick_update_remove" ; 
const liste_projet_onclick_add_element_list_class  ="cursor_pointer onclick_add_element";
const listèonclick_update_visibility_list_class="cursor_pointer space_right_20 onclick_update_all onclick_update_visibility" ; 

const  list_onclick_update_visibility1_class ="onclick_update_visibility1 cursor_pointer space_right_20 onclick_update_all onclick_update_visibility1" ; 
const  list_onclick_update_visibility2_class ="cursor_pointer space_right_20 onclick_update_all onclick_update_visibility2" ; 
const list_onclick_update_remove_class ="cursor_pointer space_right_20 onclick_update_all onclick_update_remove" ; 



const list2_liste_projet_name_class="card-title liste_projet_name_" ; 
const list2_liste_projet_description1_class="card-text liste_projet_description1" ; 
const list2_voir_projet_class="btn btn-primary voir_projet" ; 
 
 const list2_remove_projet_class="btn bg-danger remove_projet" ; 


 const name_variables =[
"liste_projet_name_",
"liste_projet_description1",
"change_img1",
"onclick_update_visibility",
"onclick_update_web",
"onclick_update_remove",
"onclick_add_element",
"add_img",
"onclick_update_visibility1",
"onclick_update_visibility2",
"onclick_update_remove"
 ]


 myObj_length_child= 0 ;


 var verif_name = false ; 
 var control_statut = false ; 	
 
var xmlhttp = new XMLHttpRequest();
xmlhttp.onreadystatechange = function() {

  if (this.readyState == 4 && this.status == 200) {
    var myObj = JSON.parse(this.responseText);
     

    //general_el = myObj ; 

 


var web_off="https://img.icons8.com/ios/50/without-internet.png" ; 
var web_on="https://img.icons8.com/ios/50/wifi--v1.png" ; 
    for(var x = 0 ; x <myObj.length ; x ++ ) {



			if(js_cookie(document.cookie)==myObj[x].liste_projet_id_sha1){
					console.log(myObj[x]) ; 
					  Ajax("header_action","pages_on/header/header_action/header_action_2.html");	

					  liste_projet_name_array.push(myObj[x].liste_projet_name) ; 					  
					  liste_projet_description1_array.push( myObj[x].liste_projet_description1) ; 
					  liste_projet_img_array.push(myObj[x].liste_projet_img) ; 


					  liste_projet_img_array_.push(myObj[x].liste_projet_img) ; 

					  information_user_id_sha1_array.push(myObj[x].information_user_id_sha1) ; 


					  console.log(myObj) ; 
					  liste_projet_visibilite1_array.push(myObj[x].liste_projet_visibilite1)  ; 
					  liste_projet_visibilite2_array.push( myObj[x].liste_projet_visibilite2)  ; 
					  liste_projet_id_array.push( myObj[x].liste_projet_id_sha1)  ; 
					  
 

					    var ok = new Information("class/php/cookie_table/liste_projet_id_parent.php"); // création de la classe 
						ok.add("liste_projet_id_parent", js_cookie(document.cookie)); // ajout de l'information pour lenvoi 
					 
						console.log(ok.info()); // demande l'information dans le tableau
						ok.push(); // envoie l'information au code pkp 



	                 	const myTimeout = setTimeout(lancement_action_1, 300);
						 control_statut = true ; 


/*

*/ 


 
					  




	}


 
	}

	if(control_statut==false){
 const myTimeout = setTimeout(lancement_action_2_0, 300);
  
}



 

}
}; 
xmlhttp.open("GET", "vlog_json.php", true);
xmlhttp.send();	






function lancement_action_1() {

var xmlhttp = new XMLHttpRequest();
xmlhttp.onreadystatechange = function() {

  if (this.readyState == 4 && this.status == 200) {
    var myObj = JSON.parse(this.responseText);
     

    //general_el = myObj ; 

 

console.log(liste_projet_name_array) ; 

myObj_ = myObj; 



 
	for (var x  = 0 ; x <myObj.length; x ++) {


	
 
 


 
		 

					  liste_projet_id_array.push( myObj[x].liste_projet_id_sha1)  ;  
					  liste_projet_name_array.push(myObj[x].liste_projet_name) ; 					  
					  liste_projet_description1_array.push( myObj[x].liste_projet_description1) ; 
					  change_img2_array.push( myObj[x].liste_projet_description1) ; 
					  liste_projet_img_array.push(myObj[x].liste_projet_img_array) ; 
					  liste_projet_visibilite1_array.push(myObj[x].liste_projet_visibilite1)  ; 
					  liste_projet_visibilite2_array.push( myObj[x].liste_projet_visibilite2)  ;
					  liste_projet_img_array_.push(myObj[x].liste_projet_img) ; 

					  information_user_id_sha1_array.push(myObj[x].information_user_id_sha1) ; 
 


}
 
const myTimeout = setTimeout(lancement_action_2, 300);
   
 

}
}; 
xmlhttp.open("GET", "vlog_json_child.php", true);
xmlhttp.send();	
}
 
 

 function lancement_action_2(){
	
var verif_element = false ; 
if(myObj_[0]=="404"){
	verif_element =true;
}

	if(!verif_element){
		for (var x  = 0 ; x <myObj_.length ; x ++) {
	console.log(myObj_.length ) ; 
 
const node = document.getElementsByClassName("demo")[0];
const clone = node.cloneNode(true);
document.getElementById("header_action_2_info_child").appendChild(clone);
 
}
	}


	 


	var liste_projet_name_ = 		document.getElementsByClassName(name_variables[0]); 
	var liste_projet_description1 = document.getElementsByClassName(name_variables[1]); 
	var liste_projet_img_array =    document.getElementsByClassName(name_variables[2]); 
	var onclick_update_visibility = document.getElementsByClassName(name_variables[3]); 
	var onclick_update_web = 		document.getElementsByClassName(name_variables[4]); 
	var onclick_update_remove = 	document.getElementsByClassName(name_variables[5]); 
	var onclick_add_element = 		document.getElementsByClassName(name_variables[6]); 

 
 


	var onclick_update_visibility1 = 		document.getElementsByClassName(name_variables[7]); 
	var onclick_update_visibility2 = 		document.getElementsByClassName(name_variables[8]); 
	var onclick_update_remove = 		document.getElementsByClassName(name_variables[9]); 



const myTimeout = setTimeout(exit_, 300);

function exit_() {




if(myObj_[0]=="404"){
	for (var x  = 0 ; x <myObj_.length  ; x ++) {

liste_projet_name_[x].value=liste_projet_name_array[x];  
liste_projet_description1[x].value= liste_projet_description1_array[x] ; 
liste_projet_name_[x].className=liste_projet_id_array[x]+" "+liste_projet_name_list_class;  
liste_projet_description1[x].className= liste_projet_id_array[x]+" "+liste_projet_description1_list_class ; 
liste_projet_img_array[x].className=liste_projet_id_array[x]+" "+change_img1_list_class; 






 


if(liste_projet_visibilite1_array[x]=="1"){
document.getElementsByClassName("onclick_update_visibility1")[x].src = img_1_2 ; 
}



 if(liste_projet_visibilite2_array[x]=="1"){
	
	document.getElementsByClassName("onclick_update_visibility2")[x].src = img_2_1; 
 }
 
document.getElementsByClassName("onclick_update_visibility1")[x].className = liste_projet_id_array[x]+" "+list_onclick_update_visibility1_class ; 
document.getElementsByClassName("onclick_update_visibility2")[x].className = liste_projet_id_array[x]+" "+list_onclick_update_visibility2_class ; 
document.getElementsByClassName("onclick_update_remove")[x].className = liste_projet_id_array[x]+" "+list_onclick_update_remove_class ; 
 
 



  

if(liste_projet_img_array_[x]!=""){
	document.getElementsByClassName("change_img1")[x].src="pages_on/download_img/uploads/"+ information_user_id_sha1_array[x]+"/"+liste_projet_img_array_[x]; 	
}




 
 
if(x>0){
	
document.getElementsByClassName("onclick_add_element")[x].style.display="none"; 
}
else{
	
document.getElementsByClassName("onclick_add_element")[x].className=liste_projet_id_array[x]+" "+liste_projet_onclick_add_element_list_class; 
}
  
}
}
else {
	for (var x  = 0 ; x <myObj_.length +1 ; x ++) {




		
if(liste_projet_visibilite1_array[x]=="1"){
document.getElementsByClassName("onclick_update_visibility1")[x].src = img_1_2 ; 
}



 if(liste_projet_visibilite2_array[x]=="1"){
	
	document.getElementsByClassName("onclick_update_visibility2")[x].src = img_2_1; 
 }
 
document.getElementsByClassName("onclick_update_visibility1")[x].className = liste_projet_id_array[x]+" "+list_onclick_update_visibility1_class ; 
document.getElementsByClassName("onclick_update_visibility2")[x].className = liste_projet_id_array[x]+" "+list_onclick_update_visibility2_class ; 
document.getElementsByClassName("onclick_update_remove")[x].className = liste_projet_id_array[x]+" "+list_onclick_update_remove_class ; 

liste_projet_name_[x].value=liste_projet_name_array[x];  
liste_projet_description1[x].value= liste_projet_description1_array[x] ; 
liste_projet_name_[x].className=liste_projet_id_array[x]+" "+liste_projet_name_list_class;  
liste_projet_description1[x].className= liste_projet_id_array[x]+" "+liste_projet_description1_list_class ; 
liste_projet_img_array[x].className=liste_projet_id_array[x]+" "+change_img1_list_class; 





if(liste_projet_img_array_[x]!=""){
	document.getElementsByClassName("change_img1")[x].src="pages_on/download_img/uploads/"+ information_user_id_sha1_array[x]+"/"+liste_projet_img_array_[x];
}
 
if(x>0){
	
document.getElementsByClassName("onclick_add_element")[x].style.display="none"; 
}
else{
	
document.getElementsByClassName("onclick_add_element")[x].className=liste_projet_id_array[x]+" "+liste_projet_onclick_add_element_list_class; 
}
  
}
}
}

	 document.getElementById("pas_visible").className="" ; 
 }

 
function recherche_elements(_this,recherche) {
	var id_element ="" ; 
	for(var x  = 0 ; x <_this.className.length ; x ++){
		
		if(_this.className[x]==recherche){
			break ; 
		}
		else {
			id_element = id_element+ _this.className[x] ; 
		}
	}

	 return id_element ; 

	 //exemple utilisation
	// console.log(recherche_elements(_this," ")) ; 
	 // fin exemple 
}


function id_input_update_all(_this,array_recherche){
	 
	return document.getElementsByClassName(_this)[array_recherche].value ; 
}
 function input_update_all(_this){

var ok = new Information("class/php/php_update/update_all.php"); // création de la classe 
ok.add("recherche_elements", recherche_elements(_this," ")); // ajout de l'information pour lenvoi 
ok.add("liste_projet_name", id_input_update_all(recherche_elements(_this," "),0)); // ajout de l'information pour lenvoi 
ok.add("liste_projet_description1", id_input_update_all(recherche_elements(_this," "),1)); // ajout de l'information pour lenvoi  
console.log(ok.info()); // demande l'information dans le tableau
ok.push(); // envoie l'information au code pkp 

  }












  function add_img(_this) {
		var ok = new Information("pages_on/download_img/name_projet.php"); // création de la classe 
		ok.add("name_projet", recherche_elements(_this," ")); // ajout de l'information pour lenvoi 
		console.log(ok.info()); // demande l'information dans le tableau
		ok.push(); // envoie l'information au code pkp 


		 window.location.replace("pages_on/download_img/index.php");

		 
}

function add_img2(_this) {
		var ok = new Information("pages_on/download_img/name_projet.php"); // création de la classe 
		ok.add("name_projet", ""); // ajout de l'information pour lenvoi 
		console.log(ok.info()); // demande l'information dans le tableau
		ok.push(); // envoie l'information au code pkp 


		 window.location.replace("pages_on/download_img/index.php");

		 
}

function onclick_add_element (_this){
	 
	console.log(recherche_elements(_this," ")) ; 

	_this.style.display ="none" ; 


	var ok = new Information("class/php/php_add/add_liste_projet_child.php"); // création de la classe 
ok.add("liste_projet_id_parent", recherche_elements(_this," ")); // ajout de l'information pour lenvoi 
console.log(ok.info()); // demande l'information dans le tableau
ok.push(); // envoie l'information au code pkp 




const node = document.getElementsByClassName("demo")[0];
const clone = node.cloneNode(true);
document.getElementById("header_action_2_info_child").appendChild(clone);

 













console.log(document.getElementsByClassName("demo")[0].length) ;
location.reload() ; 


 /*
 
	liste_projet_name_[x].className= recherche_elements(_this," ")+" "+liste_projet_name_list_class;  
	liste_projet_description1[x].className=  recherche_elements(_this," ")+" "+liste_projet_description1_list_class ;  
	liste_projet_img_array[x].className= recherche_elements(_this," ")+" "+change_img1_list_class; 




	 

	 document.getElementsByClassName("onclick_add_element")[0].className= recherche_elements(_this," ")+" "+liste_projet_onclick_add_element_list_class; 
*/
	}




	function onclick_update_visibility (_this){
		 

	  

		if(_this.src==img_invisible){
_this.src= img_visible ; 
		}
		else {
			_this.src= img_invisible ; 
		}


		var ok = new Information("class/php/php_update/update_click.php"); // création de la classe 
ok.add("recherche_elements",recherche_elements(_this," ")); // ajout de l'information pour lenvoi 
 
console.log(ok.info()); // demande l'information dans le tableau
ok.push(); // envoie l'information au code pkp 



 
	}



 


 function onclick_update_visibility1(_this) {
  console.log(recherche_elements(_this," ")) ; 
	console.log("onclick_update_visibility1") ; 
var liste_projet_visibilite1 = "" ; 
	console.log(_this.src) ; 

	if(_this.src==img_1_1){
 
		_this.src= img_1_2 ; 
		liste_projet_visibilite1="1";
	
	}
	else {
		_this.src= img_1_1 ; 
 
	}

	
var ok = new Information("class/php/php_update/onclick_update_visibility1.php"); // création de la classe 
ok.add("onclick_update_visibility", recherche_elements(_this," ")); // ajout de l'information pour lenvoi 
ok.add("liste_projet_visibilite1", liste_projet_visibilite1); // ajout de l'information pour lenvoi 
  
console.log(ok.info()); // demande l'information dans le tableau
ok.push(); // envoie l'information au code pkp 
 }


 function onclick_update_visibility2(_this) {
 

	liste_projet_visibilite2 ="" ; 
	if(_this.src==img_2_2){
 
 _this.src= img_2_1 ; 
 liste_projet_visibilite2="1" ; 
} 
else {
		_this.src= img_2_2 ; 

	}

	
var ok = new Information("class/php/php_update/onclick_update_visibility2.php"); // création de la classe 
ok.add("onclick_update_visibility", recherche_elements(_this," ")); // ajout de l'information pour lenvoi 
ok.add("liste_projet_visibilite2", liste_projet_visibilite2); // ajout de l'information pour lenvoi 

  




console.log(ok.info()); // demande l'information dans le tableau
ok.push(); // envoie l'information au code pkp 
 }
 function onclick_update_remove (_this){

	
 
	//document.getElementById(recherche_elements(_this," ")).style.display="none";
	
 //_this.style.display = "none";
var ok = new Information("class/php/php_update/onclick_update_remove.php"); // création de la classe 
ok.add("onclick_update_visibility", recherche_elements(_this," ")); // ajout de l'information pour lenvoi 
console.log(ok.info()); // demande l'information dans le tableau
ok.push(); // envoie l'information au code pkp 



 
 }




 var obj_element_2_  ; 

 function lancement_action_2_0(){
	var xmlhttp = new XMLHttpRequest();
xmlhttp.onreadystatechange = function() {

  if (this.readyState == 4 && this.status == 200) {
    var myObj = JSON.parse(this.responseText);
     




  



 if(myObj[0]!="404") {
	Ajax("header_action","pages_on/header/header_action/header_action_2_1.html");	
	 const myTimeout = setTimeout(obj_element_2, 300);

 obj_element_2_ =  myObj ; 
 }
 


 

}
}; 
xmlhttp.open("GET", "vlog_json.php", true);
xmlhttp.send();	


 }


 

 function obj_element_2(){
console.log(obj_element_2_) 



 


for(var x = 0 ; x < obj_element_2_.length ; x ++ ){

 

var node = document.getElementsByClassName("demo")[0];
var clone = node.cloneNode(true);
document.getElementById("header_action_2_info_child").appendChild(clone);


/*


list2_liste_projet_name_class
list2_liste_projet_description1_class
list2_change_img1_class

*/

console.log(obj_element_2_[x].information_user_id_sha1) ; 
 



 if(obj_element_2_[x].liste_projet_id_parent==""){
document.getElementsByClassName("demo")[x].className = obj_element_2_[x].information_user_id_sha1+" col-sm-4 demo";
 }
 else {
	document.getElementsByClassName("demo")[x].className = obj_element_2_[x].information_user_id_sha1+" col-sm-4 demo display_none";

 }


document.getElementsByClassName("demo")[x].id =obj_element_2_[x].liste_projet_id_sha1;

document.getElementsByClassName("liste_projet_name_")[x].className = obj_element_2_[x].liste_projet_id_sha1+" "+list2_liste_projet_name_class;
document.getElementsByClassName("liste_projet_description1")[x].className = obj_element_2_[x].liste_projet_id_sha1+" "+list2_liste_projet_description1_class; 


document.getElementsByClassName("voir_projet")[x].className = obj_element_2_[x].liste_projet_id_sha1+" "+list2_voir_projet_class;






document.getElementsByClassName("remove_projet")[x].className = obj_element_2_[x].liste_projet_id_sha1+" "+list2_remove_projet_class;





 



if(obj_element_2_[x].liste_projet_img!=""){


document.getElementsByClassName("background_img")[x].style.backgroundImage= "url('"+"pages_on/download_img/uploads/"+obj_element_2_[x].information_user_id_sha1+"/"+obj_element_2_[x].liste_projet_img+"')";



document.getElementsByClassName("background_img")[x].title= obj_element_2_[x].information_user_id_sha1+"/"+obj_element_2_[x].liste_projet_img;

}
else {



	document.getElementsByClassName("background_img")[x].style.backgroundImage= "url('https://media.discordapp.net/attachments/1088954621541744790/1168238961089581156/ndengaluvumbu_logo_add_picture_7e4e1278-47cf-47b7-8558-68fcd740cacb.png?ex=65510a51&is=653e9551&hm=8ac9a4499310e64fa8ce357c3d15dd89290cfc9255f4ae2134c9436c4379e93f&=&width=671&height=671')";

}





document.getElementsByClassName("liste_projet_name_")[x].innerHTML = obj_element_2_[x].liste_projet_name;

var liste_projet_description1_break ="" ; 

for(var y  = 0  ;  y <obj_element_2_[x].liste_projet_description1.length ; y ++ ) {
	if(y==150 ){
		liste_projet_description1_break = liste_projet_description1_break+" ..." ; 
		break ; 
	}
	else {
		liste_projet_description1_break = liste_projet_description1_break+obj_element_2_[x].liste_projet_description1[y] ; 
	}
}
//document.getElementsByClassName("liste_projet_description1")[x].innerHTML = obj_element_2_[x].liste_projet_description1; 


document.getElementsByClassName("liste_projet_description1")[x].innerHTML = liste_projet_description1_break; 
document.getElementsByClassName("voir_article")[x].title = obj_element_2_[x].liste_projet_id_sha1; 


//document.getElementsByClassName("voir_projet")[x].innerHTML = obj_element_2_[x].information_user_id_sha1; 
 

 



}


if(obj_element_2_.length >1) {
	document.getElementsByClassName("demo")[obj_element_2_.length ].className = "display_none";
}



 }



 function voir_projet_2(_this) {
	
 
	const d = new Date();
 time = d.getTime();
 

console.log(time) ;
 document.cookie = "username="+recherche_elements(_this," ");

 location.reload() ; 
 
 }



function remove_projet_2(_this){
	console.log(recherche_elements(_this," ")) ; 
}


function voir_article_page(_this){
	console.log(_this.title) ; 
}

function background_img_redirection(_this){
	  
  
 //window.location.href = "pages_on/download_img/uploads/"+_this+tittle;

 //console.log(_this.title) ; 
 window.location.href ="pages_on/download_img/uploads/"+_this.title ; 

}


function voir_article_complet(_this){

	console.log(_this.title) ; 
console.log(window.location.href) ; 


 
let position1 = window.location.href.search("localhost");

let position2 = window.location.href.search("localhost");

let total  =position1+position2 ; 
 

	window.location.href = "apparence/article_2.php/"+_this.title;



	
	/*

 
var xmlhttp = new XMLHttpRequest();
xmlhttp.onreadystatechange = function() {

  if (this.readyState == 4 && this.status == 200) {
    var myObj = JSON.parse(this.responseText);
 
    var verif_name = false ; 
 

console.log(myObj) ; 
 





}
}; 

 
xmlhttp.open("GET", "article_json.php/"+_this.title, true);




xmlhttp.send();

*/
  


}
</script>

 

</body>
</html>
</script>