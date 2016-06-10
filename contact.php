<?php
include 'include/header.php';
/*  DEBUT PAGE  */
?>


<?php  
$seotitle ="Contacter pour plus d'informations";
$destinataire='ali.bayrak@live.fr';  
?>
<div id="page_contenu" style="margin-left:300px;margin-right:300px;">
<div class="titre-fond">
<h3 class="titre-contenu">Contact</h3>
</div>

<div id="contenu-texte">

<table id="tableau-form" width="450" border="0" cellpadding="0" cellspacing="0">
<?php   
$Envoi="\n".'<p class="bt">  
<input name="envoi" class="btn-contact" style="margin-top:365px;" tabindex="4" value="Envoyer" type="submit"></p>';  

if (isset($_POST['message']))  
  {  
// La variable $verif va nous permettre d'analyser si la sémantique de l'email est bonne  
    $verif='#^[\w.-]+@[\w.-]+\.[a-zA-Z]{2,5}$#';  

    //quelques remplacements pour les specialchars  
    $message=preg_replace('#(<|>)#', '-', $_POST['message']);  
    $message=str_replace('"', "'",$message);  
    $message=str_replace('&', 'et',$message);  
    $objet=preg_replace('#(<|>)#', '-', $_POST['objet']);  
    $objet=str_replace('"', "'",$objet);  
    $objet=str_replace('&', 'et',$objet);  

    // On assigne et/ou protège nos variables  
    $votremail=stripslashes(htmlentities($_POST['votremail']));  
    $message=stripslashes(htmlspecialchars($message));  
    $objet=stripslashes(htmlspecialchars($objet));  

    //input envoi/previsualiser  
    $envoi=htmlentities($_POST['envoi']);  

    //on enlève les espaces  
    $votremail=trim($votremail);  
    $message=trim($message);  
    $objet=trim($objet);  


    /*On vérifie si l'e mail et le message sont pleins, et on agit en fonction.  
      (on affiche Apercu du resultat, tel ou tel champ est vide, etc...*/  
    //Si ca ne vas pas (mal rempli, mail non valide...)  
    if((empty($message))or(empty($objet))or(!preg_match($verif,$votremail)))  
      {  
        //les 3 champs sont vides  
        if(empty($votremail)and(empty($message))and(empty($objet)))  
          {  
            echo '
<div class="alert alert-danger" role="alert">
<p>Tous les champs sont vides.</p>
</div>';  
            $message='';$votremail='';$objet='';  
          }  
        //un des champs est vide  
        else  
          {  
            if(!preg_match($verif,$votremail))  
              echo'
<div class="alert alert-danger" role="alert">
	<p>Votre adresse e-mail n\'est pas valide.</p>
</div>';  
            else  
            {  
              echo'
<div class="alert alert-danger" role="alert">
<p>Il faut remplir tous les champs !</p>
</div>';  
            }  
          }  
      }  
//Si les deux sont pleins et que l'adresse est valide, on envoie on on prévisualise sans envoi  
    else  
      {  
        $domaine=preg_replace('#[^@]+@(.+)#','$1',$votremail);  
        $DomaineMailExiste=checkdnsrr($domaine,'MX');  
        if(!$DomaineMailExiste)  
          echo'<p>Le nom de domaine de l\'adresse e-mail que vous avez donné n\'existe pas.</p>';   
        elseif(!empty($envoi))  
            {  
        $objet='WebaLib.com : '.$objet;  
		$header = "From : ".$votremail."\n";
		$header .= "Return-path : ".$votremail."\n";
		$header .= "Reply-to : ".$votremail."\n";
		$header .= 'Content-type:text/plain;charset=iso-8859-1'."\n";

		if(mail($destinataire,$objet,$message,$header))  		  
              {  
                echo '
<div class="alert alert-success" role="alert">
<div id="msg"><p class="message" >Votre message a bien été envoyé. Merci.</p></div></div>
<p><a href="/">Retour à la page d\'accueil</a></p>';  
                $Envoi='';     
              }  
              else  
                echo'
<div class="alert alert-danger" role="alert">
<p>Un problème est survenu durant l\'envoi du mail.</p></div>
';  
            }  
        else  
          echo'<p>Une condition innatendue est survenue lors de l\'exécution du script.</p>';  
      }   
  }  
else  
  {  
  echo '
<div class="alert alert-info" role="alert">Contacter le webmaster pour l\'utilisation de l\'application.
</div>';  
  $votremail='';$message='';  
  }  
$bas_formulaire=$Envoi;  
?>  

<form  id='contact' method="post" action="<?php echo $_SERVER['PHP_SELF'];?>#aside1" enctype="multipart/form-data">  
 <!--
 <p id='obj'><label for='objet'>Sujet* :<br>  
  <input type='text' name='objet' id='objet' tabindex='10' size='30'></label></p>   
  -->
  <p id='obj'><label for='objet'>Type de question* :<br>  
  <SELECT name="objet" size="1" style="margin-left:0px;"> 
<OPTION>Utilisation de l'application
<OPTION>Autres
</SELECT> 
 
  <p id="adr"><label for="mail">Votre email* :<br>  
  <input name="votremail" tabindex="20" size="30" type="text" id="mail" value="<?php echo $votremail; ?>"></label></p>  
    
  <p id="msg" ><label for="message">Votre question* :<br>  
  <textarea tabindex="30" rows="15" cols="50" name="message" id="message"><?php echo $message; ?></textarea>  
  </label></p>  
<?php echo $bas_formulaire;?>  
</form> 
</table>

</div>
</div>

<?php
/*  FIN PAGE     */
include 'include/footer.php';
?>
