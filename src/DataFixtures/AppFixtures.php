<?php

namespace App\DataFixtures;

use App\Entity\Lhack;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Persistence\ObjectManager;

class AppFixtures extends Fixture
{
    public function load(ObjectManager $manager): void
    {
        
        for($i=0;$i<20;$i++)
        {
            $lhack = new Lhack();
            $lhack->setPreview('Обзор '.$i);
            $lhack->setText1('Первый текст '.$i);
            $lhack->setText2('Второй текст '.$i);
            $lhack->setTitle('Название '.$i);
            $lhack->setUrl1('Ссылка '.$i);
            $manager->persist($lhack);
        }
        
        $manager->flush();
    }
}
