<?php
// =====================================================================================
// Source : http://www.asp-php.net/scripts/asp-php/alphabet-radio-code-morse.php?page=3
// -------------------------------------------------------------------------------------

/**
 * Permet d'encoder une chaמne et de la retourner en morse
 */
function encodeMorse($chaine) {
   $chaine = noaccent($chaine);   // supprime les accents
   $chaine = strtoupper($chaine); // tout en majuscules
   $chainecode = '';
   
   for ($i=0;$i<strlen($chaine);$i++) {
		for ($j=0;$j<sizeof($GLOBALS["table1"]);$j++) {
			if ($GLOBALS["table1"][$j]==substr($chaine,$i,1)) {
				$chainecode .= $GLOBALS["table2"][$j];
				
				if ($i!=strlen($chaine)-1) {
					$chainecode .= $GLOBALS["separateur"];
				}
			}
		}
	}
	
   return $chainecode;
}

/**
 * Permet de dיcoder une chaמne en morse et la retourner en ASCII
 */
function decodeMorse($chaine) {
   $tablechaine = explode($GLOBALS["separateur"],$chaine);
   $chainedecode = '';
   
   for ($i=0;$i<sizeof($tablechaine);$i++) {
		for ($j=0;$j<sizeof($GLOBALS["table2"]);$j++) {
			if ($GLOBALS["table2"][$j]==$tablechaine[$i]) {
				$chainedecode .= $GLOBALS["table1"][$j];
			}
		}
   }
   
   return $chainedecode;
}

// =====================================================================================
// Tables de CORRESPONDANCE en CODE MORSE
// -------------------------------------------------------------------------------------
// Hiver 2015 : Merci א Mohamed, Mathias, Alexandre et Alex pour avoir trouvי un bug dans la fonction
$table1 = array("0","1","2","3","4","5","6","7","8","9",
"A","B","C","D","E","F","G","H","I","J","K","L","M","N",
"O","P","Q","R","S","T","U","V","W","X","Y","Z"," ",
".",",","?","'","!","/","(",")","&",":",";","=","+","-",
"_","\"","$","@","€");
// ----------------------------------------------------------
$table2 = array("----",".----","..---","...--","....-",
".....","-....","--...","---..","----.",".-","-...","-.-.",
"-..",".","..-..","--.","....","..",".---","-.-",".-..",
"--","-.","---",".--.","--.-",".-.","...","-","..-","...-",
".--","-..-","-.--","--..","|",
".-.-.-","--..--","..--..",".----.","-.-.-----.","-..-.",
"-.--.","-.--.-",".-...","---...","-.-.-.","-...-",".-.-.",
"-....-","..--.-",".-..-.","...-..-",".--.-.","...-.-.---");
// ----------------------------------------------------------
$separateur = ' ';
// ----------------------------------------------------------

// ----------------------------------------------------------
// fonction de suppression des caracteres accentues
function noaccent($chaine) {
   $avecaccent = 
      "ְֱֲֳִֵַָֹÊֻּֽ־ֿׂ׃װױײÙÚÛÜÝ
       אבגדהוחטיךכלםמןנעףפץצשתûü‎ÿ";
   $sansaccent = 
      "AAAAAACEEEEIIIIOOOOOUUUUY
       aaaaaaceeeeiiiioooooouuuuyy";
   $noaccent = strtr($chaine, $avecaccent, $sansaccent);
   return $noaccent;
}