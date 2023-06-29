<?php
namespace App\Components;

use Phalcon\DI\Injectable;

class Handler extends Injectable
{
    public function searchInDB($name)
    {
        return $this->mongo->users->findOne(['name' => $name]);
    }
}
