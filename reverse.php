<?php
    $word="The Lord is my Sphered, I shall not want";
    $lenght=mb_strlen($word);
    $length=$lenght-1;
    function reverseIterative($length, $word){
        $reversedWord="";
        for($i=$length; $i>=0 ; $i--)
        {
            //appending the characters of the variable "word" to the new varaible "reversedWord" backwords
            $reversedWord .= $word[$i];
        }
        return $reversedWord; 
    }
    function reverseRecursive($length, $word){
        $reversedWord="";
        if ($length<0){
            return $reversedWord;
        }
        else{
            //appending the characters of the variable "word" to the new varaible "reversedWord" backwords
            $reversedWord .=$word[$length];
            $length=$length-1;
            //The line of code below performs like a for loop that loops in descending other  
            //return $reversedWord . reverseRecursive($length, $word); this returns the characters in the reverseWord togethere with the new leghth
            return $reversedWord . reverseRecursive($length, $word);
        }
    }
    echo "Iteratively the reverse word= ". reverseIterative($length,$word). "\n";
    echo "Recursively the reverse word= ". reverseRecursive($length,$word);
?>