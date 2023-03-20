<?php

class Scanner {
    
    function scanAll($array1, $array2, $array3, $array4, $string): string
    {
        $string = $this->InBetween($array1, $array2, $string);
        $string = $this->Validate($array3, $string);
        $string = $this->UnValidate($array4, $string);
        return $string;
    }
    
    function InBetween($array1, $array2, $string): string
    {
        for ($i = 0; $i <= (sizeof($array1) - 1); $i++){
            $target = $array1[$i];
            $add = $target.'<span class="in-between">';
            $string = str_replace($target, $add, $string);
        }
        for ($i = 0; $i <= (sizeof($array2) - 1); $i++){
            $target = $array2[$i];
            $add = '</span>'.$target;
            $string = str_replace($target, $add, $string);
        }
        return $string;
    }
    
    function Validate($array, $string): string
    {
        for ($i = 0; $i <= (sizeof($array) - 1); $i++){
            $target = $array[$i];
            $add = '<span class="validate-item">'.$target.'</span>';
            $string = str_replace($target, $add, $string);
        }
        return $string;
    }
    
    function UnValidate($array, $string): string
    {
        for ($i = 0; $i <= (sizeof($array) - 1); $i++){
            $target = $array[$i];
            $add = '<span class="unvalidate-item">'.$target.'</span>';
            $string = str_replace($target, $add, $string);
        }
        return $string;
    }
}