<?php 
function validaNome($nome){
    if(strlen($nome) == 0){
        return false;
    }
    return true;
}