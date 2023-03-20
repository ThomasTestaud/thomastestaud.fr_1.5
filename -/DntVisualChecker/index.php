<?php
//initialise session
session_start();
if(!isset($_SESSION['text'])){
    $_SESSION['backupArray'] = array();
    $_SESSION['backupKey'] = 0;
    $_POST['text'] = "Une balise d'ouverture sera surlignée en vert &lt;dnt&gt; et surlignera en bleu le texte jusqu'à la fermeture de celle-ci. &lt;/dnt&gt; Une mauvaise balise &lt;dtn&gt; sera surlignée en rouge.";
}

require './listes.php';
require './Classes/Scanner.php';
require './Classes/MacroFunctions.php';

$scanner = new Scanner();
$macroPhp = new MacroFunctionPhp();

require './Classes/ToolbarController.php';

//General Controller
if(isset($_POST['text'])) {
    $_SESSION['backupKey'] = 0;
    //add to backup array
    $macroPhp->saveBackup($_POST['text']);
    $text = $macroPhp->accessBackup();
    //scann text for tags & treats it 
    $_SESSION['text'] = $scanner->scanAll($openedDTN, $closedDTN, $validateItems, $unValidateItems, $text);
}else {
    //get back to the current backup
    $macroPhp->accessBackup();
}

// echo $_SESSION['backupKey'];
// var_dump(count($_SESSION['backupArray']));

//router
$template = 'home';
$template .= '.phtml';
require './views/'. $template;

// session_destroy();