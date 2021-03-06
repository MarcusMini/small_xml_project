﻿<?php
include 'include/header.php';

function libxml_display_error($error)
{
    $return = "<br/>";
    switch ($error->level) {
        case LIBXML_ERR_WARNING:
            $return .= "<b>Warning $error->code</b>: ";
            break;
        case LIBXML_ERR_ERROR:
            $return .= "<b>Error $error->code</b>: ";
            break;
        case LIBXML_ERR_FATAL:
            $return .= "<b>Fatal Error $error->code</b>: ";
            break;
    }
    $return .= trim($error->message);

    return $return;
}

function libxml_display_errors() {
    $errors = libxml_get_errors();
    echo "<div class='alert alert-danger' role='alert'>";
    foreach ($errors as $error) {
        print libxml_display_error($error);
    }
    echo "</div>";
    libxml_clear_errors();
}

// Enable user error handling
libxml_use_internal_errors(true);

/////////////// CREATION DU XML

$xml = new DOMDocument('1.0', 'UTF-8');
$xml->formatOutput = false;
$nom = $_GET['nomApprenti'];
$prenom = $_GET['prenomApprenti'];

// get ine
$ine_save = $_GET['ine'];
$annee = $_GET['annee'];


// get year


// if this conditions is true the code will  remove the old file.
if(isset($_GET['oldYear'])){

  $annee_save = $_GET['oldYear'];
}
else{
  $annee_save = $_GET['annee'];

}

// if this conditions is true the code will  remove the old file.
if(isset($_GET['oldINE'])){
  $old_ine = $_GET['oldINE'];
} else{
  $old_ine = $_GET['ine'];
}



////////////// IMPLEMENTATION DU XSL

$xslt = $xml->createProcessingInstruction('xml-stylesheet', 'type="text/xsl" href="template.xsl"');
$xml->appendChild($xslt);

// parent

$parentTag = $xml->createElement('FicheMemoire');
$parentTag->setAttribute("titre","Fiche ".$prenom);
$parentApp = $xml->appendChild($parentTag);

// child of parent
$tag = $xml->createElement('Apprenti');
$parentApp->appendChild($tag);


// child of apprenti

// nom apprenti
$appTag = $xml->createElement('nomApprenti', $_GET['nomApprenti']);
$tag->appendChild($appTag);
// prenom apprenti
$prenAppTag = $xml->createElement('prenomApprenti', $_GET['prenomApprenti']);
$tag->appendChild($prenAppTag);
// formation apprenti
$formatTag = $xml->createElement('formationApprenti', $_GET['formationApprenti']);
$tag->appendChild($formatTag);
// annee apprenti
$anneTag = $xml->createElement('annee', $_GET['annee']);
$tag->appendChild($anneTag);
// contrat apprenti
$contratTag = $xml->createElement('contrat', $_GET['contratApprenti']);
$tag->appendChild($contratTag);
// ine apprenti
$ine = $xml->createElement('numINE', $_GET['ine']);
$tag->appendChild($ine);
// mail apprenti
$mailApp = $xml->createElement('mailApprenti', $_GET['mailApprenti']);
$tag->appendChild($mailApp);
// etablissement apprenti
$etablissement = $xml->createElement('etablissement');
$tag->appendChild($etablissement);

//////////////// CHILD OF ETABLISSEMENT //////////////////

// etablissement apprenti
$nomEtablissement = $xml->createElement('nomEtablissement', $_GET['etabNom']);
$etablissement->appendChild($nomEtablissement);

// etablissement apprenti
$tuteurEtablissement = $xml->createElement('tuteurEtablissement');
$etablissement->appendChild($tuteurEtablissement);

//////////////// CHILD OF TUTEUR etab //////////////////

// tuteur nom
$nomTuteur = $xml->createElement('nomTuteur', $_GET['tuteurEtabNom']);
$tuteurEtablissement->appendChild($nomTuteur);

// tuteur prenom
$prenomTuteur = $xml->createElement('prenomTuteur', $_GET['tuteurEtabPrenom']);
$tuteurEtablissement->appendChild($prenomTuteur);

// tuteur professionTuteur
$professionTuteur = $xml->createElement('professionTuteur', $_GET['tuteurEtabProfession']);
$tuteurEtablissement->appendChild($professionTuteur);

// tuteur mailTuteur
$mailTuteur = $xml->createElement('mailTuteur', $_GET['tuteurEtabMail']);
$tuteurEtablissement->appendChild($mailTuteur);

//////////////// END OF TUTEUR etab //////////////////

//////////////// END OF ETABLISSEMENT //////////////////

// entreprise
$entreprise = $xml->createElement('Entreprise');
$parentTag->appendChild($entreprise);

/////////////// BEGIN OF ENTREPRISE //////////////////

// nom entreprise

$nomEntreprise = $xml->createElement('nomEntreprise', $_GET['nomEntreprise']);
$entreprise->appendChild($nomEntreprise);

// siret entreprise

$siretEntreprise = $xml->createElement('siretEntreprise', $_GET['siret']);
$entreprise->appendChild($siretEntreprise);

// siret entreprise

$adresseEntreprise = $xml->createElement('adresseEntreprise', $_GET['adresseEntreprise']);
$entreprise->appendChild($adresseEntreprise);

// secteur entreprise

$secteur = $xml->createElement('secteur', $_GET['secteur']);
$entreprise->appendChild($secteur);

// taille entreprise

$taille = $xml->createElement('taille', $_GET['taille']);
$entreprise->appendChild($taille);

// tuteur entreprise

$tuteurEnt = $xml->createElement('tuteur');
$entreprise->appendChild($tuteurEnt);

////////////////// TUTEUR ENTREPRISE ///////////////////

// nom tuteur
$nomTuteur = $xml->createElement('nomTuteur', $_GET["tuteurEntrepriseNom"]);
$tuteurEnt->appendChild($nomTuteur);

//  prenom  tuteur
$prenomTuteur = $xml->createElement('prenomTuteur', $_GET["tuteurEntreprisePrenom"]);
$tuteurEnt->appendChild($prenomTuteur);

// prof tuteur
$professionTuteur = $xml->createElement('professionTuteur', $_GET["tuteurEntrepriseProfession"]);
$tuteurEnt->appendChild($professionTuteur);

//  mail  tuteur
$mailTuteur = $xml->createElement('mailTuteur', $_GET["tuteurEntrepriseMail"]);
$tuteurEnt->appendChild($mailTuteur);


////////////////// END TUTEUR ENTREPRISE ///////////////////

/////////////// END OF ENTREPRISE //////////////////

$content = $xml->createElement('Contenu');
$parentTag->appendChild($content);


/////////////// BEGIN OF CONTENT //////////////////

// pb
$pb = $xml->createElement('problematique', $_GET['problematique']);
$content->appendChild($pb);

////////////////// WRAPER MISSION

$mission = $xml->createElement('missions');
$content->appendChild($mission);

/////////////// BEGIN OF MISSION //////////////////


foreach($_GET['mission'] as $data){

  $mission_single = $xml->createElement('mission', $data);
  $mission->appendChild($mission_single);
}

/////////////// END OF MISSION //////////////////

////////////////// WRAPER technologies

$technology = $xml->createElement('technologies');
$content->appendChild($technology);

/////////////// BEGIN OF TECHNOLOGY //////////////////


foreach($_GET['technologie'] as $data_tech){
  $techno_single= $xml->createElement('technologie', $data_tech);
  $technology->appendChild($techno_single);
}

/////////////// END OF TECHNOLOGY //////////////////


////////////////// WRAPER outils

$tools = $xml->createElement('outils');
$content->appendChild($tools);

/////////////// BEGIN OF TECHNOLOGY //////////////////


foreach($_GET['outil'] as $data_tool){
  $tool_single = $xml->createElement('outil', $data_tool);
  $tools->appendChild($tool_single);
}

/////////////// END OF TECHNOLOGY //////////////////


////////////////// WRAPER motscles

$keys = $xml->createElement('motcles');
$content->appendChild($keys);

/////////////// BEGIN OF TECHNOLOGY //////////////////


foreach($_GET['motcle'] as $data_key){
  $key = $xml->createElement('motcle', $data_key);
  $keys->appendChild($key);
}

/////////////// END OF TECHNOLOGY //////////////////

$note = $xml->createElement('note', $_GET['note']);
$note->setAttribute("appreciation", $_GET["appreciation"]);
$content->appendChild($note);


// define the name of the xml file

$nomprenom =  "{$nom}{$prenom}".'.xml';

// check if the file exist
$file = scandir("profil");
foreach($file as $fm){
      // if exist remove the file
//      echo $ine_save."_".$annee_save.'<br>';
     if($fm == $old_ine."_".$annee_save.".xml"){
       unlink('profil/'.$old_ine."_".$annee_save.".xml");
     }
}

    // write the file as name+firstname.xml
  if ($xml->schemaValidate('schema.xsd')) {
    //echo $ine_save."_".$annee.'<br>';
    $f = fopen('profil/'.$ine_save."_".$annee.".xml", 'a+');
    fwrite($f, $xml->saveXML());
    $closed = fclose($f);
    if($closed){
    // show a notification so the user is aware that his file is create
    echo '<div class="alert alert-success" role="alert">Fichier généré avec succes !</div>';
    }
  }else{
    echo '<div class="alert alert-danger" role="alert">ERREUR: Les données ne sont pas conformes. Le fichier n\'a pas été généré.</div>';
    libxml_display_errors();
  }
  include 'include/footer.php';

?>
