<?php

namespace Digi\Paginaire\Entity;

use Digi\Paginaire\Entity\Model;
use Digi\Paginaire\Views;


class Books extends Model
{
    private int $id;
    private string $title;
    private string $author;
    private string $type;
    private string $image;
    private string $description;

    public function getId(): int
    {
        return $this->id;
    }

    public function setId(int $id): Books
    {
        $this->id = $id;
        return $this;
    }

    public function getTitle(): string
    {
        return ucfirst($this->title);
    }

    public function setTitle(string $title): Books
    {
        $this->title = $title;
        return $this;
    }

    public function getAuthor(): string
    {
        return ucfirst($this->author);
    }

    public function setAuthor(string $author): Books
    {
        $this->author = $author;
        return $this;
    }

    public function getType(): string
    {
        return ucfirst($this->type);
    }

    public function setType(string $type): Books
    {
        $this->type = $type;
        return $this;
    }

    public function getImage(): string
    {
        return $this->image;
    }

    public function setImage(string $image): Books
    {
        $this->image = $image;
        return $this;
    }

    public function getDescription(): string
    {
        return ucfirst($this->description);
    }

    public function setDescription(string $description): Books
    {
        $this->description = $description;
        return $this;
    }
    public function __toString(): string
    {
        return $this->title;
        return $this->author;
        return $this->type;
        return $this->image;
        return $this->description;
    }
}
