<?php

namespace Monster\UseCase\Model;

class Monster
{
    /**
     * @var integer
     */
    private $id;

    /**
     * @return integer
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * @param $id integer
     */
    public function setId($id)
    {
        $this->id = $id;
    }
}
