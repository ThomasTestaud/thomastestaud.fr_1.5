<?php

//Toolbar controller
if(isset($_GET['previous'])){
    $macroPhp->previous();
     $text = $macroPhp->accessBackup();
    $_SESSION['text'] = $scanner->scanAll($openedDTN, $closedDTN, $validateItems, $unValidateItems, $text);
}else if(isset($_GET['forward'])){
     $macroPhp->forward();
     $text = $macroPhp->accessBackup();
    $_SESSION['text'] = $scanner->scanAll($openedDTN, $closedDTN, $validateItems, $unValidateItems, $text);
}