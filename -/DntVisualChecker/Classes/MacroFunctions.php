<?php

class MacroFunctionPhp {
    
    function previous()
    {
        if($_SESSION['backupKey'] < (count($_SESSION['backupArray'])) - 1){
            $_SESSION['backupKey'] += 1;
        }
    }
    
    function forward()
    {
        if($_SESSION['backupKey'] > 0){
            $_SESSION['backupKey'] -= 1;
        }
    }

    function accessBackup()
    {
        $text = $_SESSION['backupArray'][$_SESSION['backupKey']];
        return $text;
    }
    
    function saveBackup($text): void
    {
        //push the $_SESSION['text'] to the first position in the backup array
        array_unshift($_SESSION['backupArray'], $text);
    }
    
    
}

