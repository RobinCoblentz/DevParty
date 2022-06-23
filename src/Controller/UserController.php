<?php

namespace App\Controller;

use App\Repository\UserRepository;
use App\Routing\Attribute\Route;
use App\Session\SessionInterface;

use App\Entity\User;


class UserController extends AbstractController
{
  #[Route(path: "/user", name: "users_list")]
  public function list(SessionInterface $session,UserRepository $userRepository)
  {

    $users = $userRepository->findall();
    // print("<pre>".print_r($users,true)."</pre>"); 
    echo $this->twig->render('user/listall.html.twig', [
      'users' => $users
    ]);
  }

  #[Route(path: "/user/edit/{id}", name: "user_edit")]
  public function edit(UserRepository $userRepository, int $id)
  {
    $users = $userRepository->find($id);

    echo $this->twig->render('user/edittest.html.twig', [
      'users' => $users
    ]);
  
  }

  #[Route(path: "/user/edit/s", httpMethod: 'POST', name: "user_edit_save")]
  public function edit_user(UserRepository $userRepository)
  {
    $userid=$_POST['userid'] ;
    $email=$_POST['email'] ;
    $name=$_POST['name'] ;
    $firstname=$_POST['firstname'] ;
    $role=$_POST['role'] ;
    $active=$_POST['active'] ;
   
    //echo("<script>console.log('.$name.');</script>");
    
    $user = new User();
      $user
      ->setUserId($_POST['userid'])
      ->setEmail($_POST['email'])
      ->setName($_POST['name'])
      ->setFirstName($_POST['firstname'])
      ->setRole($_POST['role'])
      ->setActive(($_POST['active']));
      $userRepository->edit_user($user);
      echo("<script>alert('utilisateur $firstname $name editer avec succes'); window.location.replace('/user');</script>");
  }

  #[Route(path: "/user/save/s", httpMethod: 'POST', name: 'user_create_save')]
  public function usersave(UserRepository $userRepository)
  {
    $name=$_POST['name'] ;
    $firstname=$_POST['firstname'] ;
    $email=$_POST['email'] ;
    $password=$_POST['password'] ;
    //echo("<script>console.log('.$name.');</script>");
    
    $user = new User();
      $user
      ->setEmail($_POST['email'])
      ->setPassword($_POST['password'])
      ->setFirstName($_POST['firstname'])
      ->setName($_POST['name'])
      ->setRole(1)
      ->setActive(1);
      $userRepository->create_user($user);

      echo("<script>alert('utilisateur $firstname $name créé avec succes'); window.location.replace('/user/save');</script>");
    }


  #[Route(path: "/user/save")]
  public function usersaveindex(UserRepository $userRepository)
  {
    echo $this->twig->render('user/inscriptiontemp.html.twig'); 
  }



  #[Route(path: "/user/login", httpMethod: 'GET', name: 'user_login')]
  public function login(UserRepository $userRepository)
  {
    echo $this->twig->render('user/login.html.twig');
    }

  #[Route(path: "/user/login/s", httpMethod: 'POST', name: 'user_login_check')]
  public function logincheck(UserRepository $userRepository)
  {
  $email=$_POST['email'] ;
  $pass=$_POST['pass'] ;
  //echo("<script>console.log('.$name.');</script>");
  
  $user = new User();
    $user
    ->setEmail($_POST['email'])
    ->setPassword($_POST['pass']);
    $userRepository->FindUserByEmail($user);

    var_dump($user);

    //echo("<script>alert('utilisateur $firstname $name créé avec succes'); window.location.replace('/user/save');</script>");
  }
}