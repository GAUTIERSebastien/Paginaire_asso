<?php

namespace Digi\Paginaire\Entity;

use Digi\Paginaire\Kernel\Model;

class User extends Model
{
    private int $id;
    private string $title;
    private string $author;
    private string $type;
    private string $image;
    private string $description;

    public function getId()
    {
        return $this->id;
    }

    public function getTitle()
    {
        return $this->title;
    }

    public function getAuthor()
    {
        return $this->author;
    }

    public function getType()
    {
        return $this->type;
    }

    public function getImage()
    {
        return $this->image;
    }

    public function getDescription()
    {
        return $this->description;
    }

    public function setId(int $id)
    {
        $this->id = $id;
    }

    public function setTitle(string $title)
    {
        $this->title = $title;
    }

    public function setAuthor(string $author)
    {
        $this->author = $author;
    }

    public function setType(string $type)
    {
        $this->type = $type;
    }

    public function setImage(string $image)
    {
        $this->image = $image;
    }

    public function setDescription(string $description)
    {
        $this->description = $description;
    }
}
