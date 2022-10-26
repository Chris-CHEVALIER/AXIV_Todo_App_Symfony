<?php

namespace App\Entity;

class TodoList
{
    private int $id;
    private string $name;
    private string $color;

    public function getId(): int
    {
        return $this->id;
    }

    public function setId(int $newId): TodoList
    {
        $this->id = $newId;
        return $this;
    }

    public function getName()
    {
        return $this->name;
    }

    public function setName($name)
    {
        $this->name = $name;
        return $this;
    }

    public function getColor()
    {
        return $this->color;
    }

    public function setColor($color)
    {
        $this->color = $color;
        return $this;
    }
}