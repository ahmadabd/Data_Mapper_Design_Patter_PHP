<?php

namespace App;

class ApiRequset {
    function __construct(private string $baseUrl){}

    public function get(string $path) : array
    {
        $data_string = file_get_contents($this->baseUrl . $path);
        $data_array = json_decode($data_string, true);
        return $data_array;
    }
}