<?php
namespace Monster\UseCase;

use Monster\UseCase\Contract\CreateMonsterRequest;
use Monster\UseCase\Contract\CreateMonsterResponse;
use Monster\UseCase\Repository\CreateMonsterRepositorySpy;
use PHPUnit\Framework\TestCase;

class CreateMonsterTest extends TestCase
{

    /**
     * @var CreateMonsterRepositorySpy
     */
    private $createMonsterRepository;

    /**
     * @var CreateMonster
     */
    private $createMonsterUseCase;

    /**
     * @var CreateMonsterResponse
     */
    private $createMonsterResponse;

    public function setUp()
    {
        $this->createMonsterRepository = new CreateMonsterRepositorySpy(12344);
        $this->createMonsterUseCase = new CreateMonster($this->createMonsterRepository);
        $this->createMonsterResponse = new CreateMonsterResponse();
    }

    public function testCreateMonster()
    {
        $this->createMonsterUseCase->handle(new CreateMonsterRequest(), $this->createMonsterResponse);
        $this->assertEquals(12345,  $this->createMonsterResponse->getId());
    }


    public function testSaveMonster()
    {
        $this->createMonsterUseCase->handle(new CreateMonsterRequest(), $this->createMonsterResponse);
        $this->assertEquals(12345,  $this->createMonsterRepository->getLastSavedMonster()->getId());

        $this->createMonsterUseCase->handle(new CreateMonsterRequest(), $this->createMonsterResponse);
        $this->assertEquals(12346,  $this->createMonsterRepository->getLastSavedMonster()->getId());
    }
}