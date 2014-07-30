<?php

    function baseDir(){
        $baseDir = '/spellz/';
        return $baseDir;
    }

    function subPagesDir(){
        $subPagesDir = '/spellz/includes/pages/';
    return $subPagesDir;
    }

    function currentPage(){
        $curPageStripped = basename($_SERVER['PHP_SELF'], '.php');
        return $curPageStripped;
    }

?>