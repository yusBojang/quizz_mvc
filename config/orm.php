<?php

function json_to_array(string $key):array{
    $dataJason=file_get_contents(PATH_DB);
    $data=json_decode($dataJason,true);
    return $data[$key];
}


function array_to_json(string $key,array $data):array{
    return [];
}