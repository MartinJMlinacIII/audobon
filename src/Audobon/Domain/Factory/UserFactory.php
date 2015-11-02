<?php
/**
 * Created by PhpStorm.
 * User: marty
 * Date: 10/2/15
 * Time: 2:26 PM
 */
namespace Audobon\Domain\Factory;
use Audobon\Domain\Entity\User;

class UserFactory
{
    public function createUser(){
        $user = new User();
        $user->setName("");
        $user->setEmail("");
        $user->setPhoneNumber("");

        return $user;
    }
}


