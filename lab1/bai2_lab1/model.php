<?php
//models
function get_courses(){
    include './data.php';
    return array_values($course); 
}

function find_by_semester($semester){
    require './data.php';
    return (array_key_exists($semes, $course) ? $course [$semester] : 'Invalid course'); 
}