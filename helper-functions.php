<?php

// readable print_r 
function pnr($data) {
    echo '<pre>';
    print_r($data);
    echo '</pre>';
}

// readable var_dump 
function vdump($data) {
    echo '<pre>';
    var_dump($data);
    echo '</pre>';
}

// echo with a <br />
function echobr($data) {
    echo $data;
    echo "<br />";
}