<?php

require_once '../vendor/autoload.php';

trait Id
{
    protected $id;

    public function setId($id)
    {
        if (!is_int($id)) {
            throw new Exception('invalid');
        }

        $this->id = $id;
    }
}

trait Created
{
    protected $createdAt;

    public function setCreatedAt(DateTime $createdAt)
    {
        $this->createdAt = $createdAt;
    }


}


class User
{
    use Id;

    public function __construct($id)
    {
        $this->setId($id);
    }
}


class Category
{
    use Id, Created;

    public function __construct($id, $createdAt)
    {
        $this->setId($id);
        $this->setCreatedAt($createdAt);
    }


}

class Tag
{
    use Id, Created;

    public function __construct($id, $createdAt)
    {
        $this->setId($id);
        $this->setCreatedAt($createdAt);
    }


}

$user = new User(1);
var_dump($user);

$category = new Category(1, new DateTime());
var_dump($category);

$tag = new Tag(1, new DateTime());
var_dump($tag);
