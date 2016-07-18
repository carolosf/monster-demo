<?php

namespace Monster\UseCase;


use Monster\UseCase\Contract\CreateMonsterRequest;
use Monster\UseCase\Contract\CreateMonsterResponse;
use Monster\UseCase\Model\Monster;
use Monster\UseCase\Repository\CreateMonsterRepository;

class CreateMonster
{
    /**
     * @var CreateMonsterRepository
     */
    private $createMonsterRepository;

    /**
     * CreateMonster constructor.
     * @param $createMonsterRepository CreateMonsterRepository
     */
    public function __construct(CreateMonsterRepository $createMonsterRepository)
    {
        $this->createMonsterRepository = $createMonsterRepository;
    }

    /**
     * @param CreateMonsterRequest $createMonsterRequest
     * @param CreateMonsterResponse $createMonsterResponse
     */
    public function handle(CreateMonsterRequest $createMonsterRequest, CreateMonsterResponse $createMonsterResponse)
    {
        $monster = new Monster();
        $this->createMonsterRepository->save($monster);

        $createMonsterResponse->setId($monster->getId());
    }
}