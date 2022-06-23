<?php

namespace App\Repository;

use App\Entity\Event;

final class UserRepository extends AbstractRepository
{
  protected const TABLE = 'event';

  public function create_event(Event $event): bool
  {
    $stmt = $this->pdo->prepare("INSERT INTO event (EventName, EventDescription, EventCreationUser, EventCreationDate, EventDate, EventLocation, EventPrice, EventCategory, EventPictures, EventActive) 
    VALUES (:EventName, :EventDescription, :EventCreationUser, :EventCreationDate, :EventDate, :EventLocation, :EventPrice, :EventCategory, :EventPictures, :EventActive)");
   
    return $stmt->execute([
      'EventName' =>$event->getEventName(), 
      'EventDescription' => $event->getEventDescription(),
      'EventCreationUser' => $event->getEventCreationUser() ,
      'EventCreationDate' => $event->getEventCreationDate(),
      'EventDate' => $event->getEventDate(),
      'EventLocation' =>$event->getEventLocation(), 
      'EventPrice' => $event->getEventPrice(),
      'EventCategory' => $event->getEventCategory() ,
      'EventPictures' => $event->getEventPictures(),
      'EventActive' => $event->getEventActive(),
    ]); 
  }

  public function edit_event(Event $event): bool
  {
    $stmt = $this->pdo->prepare("UPDATE event SET  EventName=:EventName, EventDescription=:EventDescription, EventCreationUser=:EventCreationUser, EventCreationDate=:EventCreationDate, 
    EventDate=:EventDate, EventLocation=:EventLocation, EventPrice=:EventPrice, EventCategory=:EventCategory, EventPictures=:EventPictures, EventActive=:EventActive, 
    WHERE EventId=:EventId" );
    return $stmt->execute([
      'EventId' =>$event->getEventId(), 
      'EventName' =>$event->getEventName(), 
      'EventDescription' => $event->getEventDescription(),
      'EventCreationUser' => $event->getEventCreationUser() ,
      'EventCreationDate' => $event->getEventCreationDate(),
      'EventDate' => $event->getEventDate(),
      'EventLocation' =>$event->getEventLocation(), 
      'EventPrice' => $event->getEventPrice(),
      'EventCategory' => $event->getEventCategory() ,
      'EventPictures' => $event->getEventPictures(),
      'EventActive' => $event->getEventActive(),
    ]); 
  }
}
