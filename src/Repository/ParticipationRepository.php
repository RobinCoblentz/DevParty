<?php

namespace App\Repository;

use App\Entity\Participation;

final class UserRepository extends AbstractRepository
{
  protected const TABLE = 'participation';

  public function create_participation(Participation $participation): bool
  {
    $stmt = $this->pdo->prepare("INSERT INTO participation (ParticipationUser, ParticipationEvent) VALUES (:ParticipationUser, :ParticipationEvent)");
   
    return $stmt->execute([
      'ParticipationUser' =>$participation->getParticipationUser(), 
      'ParticipationEvent' => $participation->getParticipationEvent(),
    ]); 
  }
  
  public function edit_participation(Participation $participation): bool
  {
    $stmt = $this->pdo->prepare("UPDATE participation SET ParticipationUser=:ParticipationUser, ParticipationEvent=:ParticipationEvent WHERE ParticipationId=:ParticipationId" );
    return $stmt->execute([
        'ParticipationId' =>$participation->getParticipationId(), 
        'ParticipationUser' =>$participation->getParticipationUser(), 
        'ParticipationEvent' => $participation->getParticipationEvent(),
    ]); 
  }
}
