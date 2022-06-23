<?php

namespace App\Repository;

use App\Entity\User;
use PDO;

final class UserRepository extends AbstractRepository
{
  protected const TABLE = 'user';

  public function create_user(User $user): bool
  {
    $stmt = $this->pdo->prepare("INSERT INTO user (Email, Password, Name, FirstName, Role, Active) VALUES (:Email, :Password, :Name, :FirstName, :Role, :Active)");
   
    return $stmt->execute([
      'Email' =>$user->getEmail(), 
      'Password' => password_hash($user->getPassword(), PASSWORD_BCRYPT),
      'Name' => $user->getName(),
      'FirstName' => $user->getFirstName() ,
      'Role' => $user->getRole(),
      'Active' => $user->getActive(),
    ]); 
  }

  public function edit_user(User $user): bool
  {
    $stmt = $this->pdo->prepare("UPDATE user SET Email=:Email, Name=:Name, FirstName=:FirstName, Role=:Role, Active=:Active WHERE UserId=:UserId" );
    return $stmt->execute([
      'UserId'=>$user->getUserId(),
      'Email' =>$user->getEmail(), 
      'Name' => $user->getName(),
      'FirstName' => $user->getFirstName() ,
      'Role' => $user->getRole(), 
      'Active' => $user->getActive(),
    ]); 
  }
    

    public function FindUserByEmail(User $user): bool
    {
      $stmt = $this->pdo->prepare("SELECT * FROM user WHERE Email=:email");
      return $stmt->execute([
        'Email' =>$user->getEmail(), 
        'Password' => $user->getPassword(),
      ]); 

    $result = $stmt->fetch(PDO::FETCH_ASSOC);

    if  ($result !== false) {
      return $result ;
    }

   






    
  }
}
