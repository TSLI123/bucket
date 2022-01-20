<?php

namespace App\Service;

class Censurator
{
    private array $injures = ['connard','salope','putain','merde','enculé','pute','pd'];

    public function purify(string $string): string{

        return str_ireplace($this->injures, '*****', $string);
    }
}