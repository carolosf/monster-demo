<?php


namespace Monster\UseCase\Repository;


use Monster\UseCase\Model\Monster;

class CreateMonsterRepositorySpy implements CreateMonsterRepository
{
    /**
     * @var Monster
     */
    private $lastMonster;

    /**
     * @var
     */
    private $start;

    /**
     * CreateMonsterRepositorySpy constructor.
     */
    public function __construct($start)
    {
        $this->start = $start;
    }

    /**
     * @return Monster
     */
    public function getLastSavedMonster()
    {
        return $this->lastMonster;
    }

    /**
     * @param Monster $monster
     */
    public function save(Monster $monster)
    {
        $this->start = $this->start + 1;
        $monster->setId($this->start);
        $this->lastMonster = $monster;
    }
}