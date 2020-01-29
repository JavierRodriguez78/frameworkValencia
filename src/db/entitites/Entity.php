<?php


namespace App\db\entitites;


class Entity
{

    public function __get(String $name)
    {
        if(property_exists($this, $name)){
            return $this->{$name};
        }
    }

    public function ___set(String $name, $value)
    {
        if(property_exists($this, $name)){
            $this->{$name}= $value;
        }
    }
}