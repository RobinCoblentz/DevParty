<?php

namespace App\Entity;

use DateTime;

class Event
{
  public int $EventId;
  public string $EventName;
  public string $EventDescription;
  public DateTime $EventCreationDate;
  public int $EventCreationUser;
  public DateTime $EventDate;
  public int $EventLocation;
  public float $EventPrice;
  public string $EventCategory;
  public string $EventPictures;
  public bool $EventActive;

  public function getEventId(): int
  {
    return $this->getEventId;
  }

  public function setgetEventId(int $getEventId): self
  {
    $this->getEventId = $getEventId;
    return $this;
  }

  public function getEventName(): string
  {
    return $this->EventName;
  }

  public function setEventName(string $EventName): self
  {
    $this->EventName = $EventName;
    return $this;
  }

  public function getEventDescription(): string
  {
    return $this->EventDescription;
  }

  public function setEventDescription(string $EventDescription): self
  {
    $this->EventDescription = $EventDescription;
    return $this;
  }

public function getEventCreationUser(): string
  {
    return $this->EventCreationUser;
  }

  public function setEventCreationUser(string $EventCreationUser): self
  {
    $this->EventCreationUser = $EventCreationUser;
    return $this;
  }

  public function getEventCreationDate(): DateTime
  {
    return $this->EventCreationDate;
  }

  public function setEventCreationDate(string $EventCreationDate): self
  {
    $this->EventCreationDate = $EventCreationDate;
    return $this;
  }

  public function getEventDate(): DateTime
  {
    return $this->EventDate;
  }

  public function setEventDate(string $EventDate): self
  {
    $this->EventDate = $EventDate;
    return $this;
  }
  
  public function getEventLocation(): int
  {
    return $this->EventLocation;
  }

  public function setEventLocation(int $EventLocation): self
  {
    $this->EventLocation = $EventLocation;
    return $this;
  }

  public function getEventPrice(): float
  {
    return $this->EventPrice;
  }

  public function setEventPrice(float $EventPrice): self
  {
    $this->EventPrice = $EventPrice;
    return $this;
  }

  public function getEventCategory(): string
  {
    return $this->EventCategory;
  }

  public function setEventCategory(string $EventCategory): self
  {
    $this->EventCategory = $EventCategory;
    return $this;
  }

  public function getEventPictures(): string
  {
    return $this->EventPictures;
  }

  public function setEventPictures(string $EventPictures): self
  {
    $this->EventPictures = $EventPictures;
    return $this;
  }

  public function getEventActive(): bool
  {
    return $this->EventActive;
  }

  public function setEventActive(bool $EventActive): self
  {
    $this->EventActive = $EventActive;
    return $this;
  }
  
  
}
