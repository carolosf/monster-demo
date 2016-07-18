<?php

namespace Monster\UseCase\Contract;

class CreateMonsterResponse
{
    /**
     * @var integer
     */
    private $id;

    public function getId()
    {
        return $this->id;
    }

    public function setId($id)
    {
        $this->id = $id;
    }
}
