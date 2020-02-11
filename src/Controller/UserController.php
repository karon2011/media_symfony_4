<?php

namespace App\Controller;

use App\Entity\User;
use App\Repository\UserRepository;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;

class UserController extends AbstractController
{
    /**
     * @Route("/users", name="users_show")
     */
    public function getAllUsers()
    {
        $users = $this->getDoctrine()->getRepository(User::class)->findAll();
     
        return $this->render('user/index.html.twig', [
            'controller_name' => 'UserController',
            'users' => $users
        ]);
    }

    // /**
    //  * @Route("/users/{id}", name="users_show")
    //  */
    // public function getOneUserById($id, UserRepository $userRepository)
    // {
    //     $user = $userRepository->find($id);

    //     return $this->render('user/index.html.twig', [
    //         'controller_name' => 'UserController',
    //         'user' => $user
    //     ]);
    // }

    // /**
    //  * @Route("/users/edit/{id}")
    //  */
    // public function updateUser($id)
    // {
    //     $entityManager = $this->getDoctrine()->getManager();
    //     $user = $entityManager->getRepository(User::class)->find($id);

    //     if (!$user) {
    //         throw $this->createNotFoundException(
    //             'No user found for id '.$id
    //         );
    //     }

    //     $user->setEmail('New Email !');
    //     $user->setPassword('New Password !');
    //     $entityManager->flush();

    //     return $this->redirectToRoute('users_show', [
    //         'id' => $user->getId()
    //     ]);
    // }

    // /**
    //  * @Route("/users/edit/{id}")
    //  */
    // public function deleteUser($id)
    // {
    //     $entityManager = $this->getDoctrine()->getManager();
    //     $user = $entityManager->getRepository(User::class)->find($id);

    //     if (!$user) {
    //         throw $this->createNotFoundException(
    //             'No user found for id '.$id
    //         );
    //     }

    //     $entityManager->remove($user);
    //     $entityManager->flush();

    //     return $this->redirectToRoute('users_show', [
    //         'id' => $user->getId()
    //     ]);
    // }

}
