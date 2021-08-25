<?php

namespace App;

class UserMapper {

    function __construct(private ApiRequset $api){}

    public function findById(string $id) : User
    {
        $userArray = $this->api->get('/users/'.$id);

        return new User($userArray['id'], $userArray['email']);
    }
}