<?php

namespace Monster\UseCase\Repository;

use Monster\UseCase\Model\Monster;

interface CreateMonsterRepository
{
    /**
     * @param Monster $monster
     */
    public function save(Monster $monster);
}
