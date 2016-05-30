<?php
  $file = scandir("profil");
  $counter = 0;

  // define an array which return a json array for the front
  $memoireArray = [];

  // get the files

  foreach($file as $fileToRead){
      // avoid miscellanous file such as DStore...
      if($counter > 2){
          // load the xml file
          $newDoc = simplexml_load_file("profil/".$fileToRead);

          // get every property by navigate threw the newDoc object
          $name = $newDoc->Apprenti->nomApprenti;

          $prenom = $newDoc->Apprenti->prenomApprenti;
          $formation = $newDoc->Apprenti->formationApprenti;
          $pb =  $newDoc->Contenu->problematique;
          $year = $newDoc->Apprenti->annee;

          $link = $fileToRead;
          // create an array of object
           $assocArray = array("nom" => strval($name), "prenom"  => strval($prenom), "formation" => strval($formation), "link" => $link, "problematique" => strval($pb), "year" => strval($year));

          array_push($memoireArray, $assocArray);

      }
        $counter++;

  }


  // return the json
  echo json_encode($memoireArray);



?>
