<?php

namespace App\Entity;

class Participation
{
  public int $ParticipationId;
  public string $ParticipationUser;
  public string $ParticipationPictures;

  public function getParticipationId(): int
  {
    return $this->ParticipationId;
  }

  public function setParticipationId(int $ParticipationId): self
  {
    $this->ParticipationId = $ParticipationId;
    return $this;
  }

  public function getParticipationUser(): string
  {
    return $this->ParticipationUser;
  }

  public function setParticipationUser(string $ParticipationUser): self
  {
    $this->ParticipationUser = $ParticipationUser;
    return $this;
  }

  public function getParticipationEvent(): string
  {
    return $this->ParticipationEvent;
  }

  public function setParticipationEvent(string $ParticipationEvent): self
  {
    $this->ParticipationEvent = $ParticipationEvent;
    return $this;
  }
  
}
