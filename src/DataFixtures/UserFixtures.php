<?php

namespace App\DataFixtures;

use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Common\Persistence\ObjectManager;
use Symfony\Component\Security\Core\Encoder\UserPasswordEncoderInterface;
use App\Entity\User;

class UserFixture extends BaseFixture
{

    private $passwordEncoder;

    public function __construct(UserPasswordEncoderInterface $passwordEncoder)
    {
        $this->passwordEncoder = $passwordEncoder;
    }

    protected function loadData(ObjectManager $manager)
    {
        $user = new User();
        $user->setUserName('joker');
        // $password = $this->passwordEncoder->encodePassword($user, '123jkJK');
        // $user->setPassword($password);
        $plainPassword = '123jkJK';
        $encoded = $passwordEncoder->encodePassword($user, $plainPassword);
        $user->setPassword($encoded);
        
        $manager->persist($user);
        $manager->flush();
    }

}