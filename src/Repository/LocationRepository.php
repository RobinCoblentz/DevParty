<?php

namespace App\Repository;

use App\Entity\Location;

final class LocationRepository extends AbstractRepository
{
  protected const TABLE = 'location';

  public function create_location(Location $location): bool
  {
    $stmt = $this->pdo->prepare("INSERT INTO location (LocationLibelle, LocationDescription, LocationAdress, LocationCP, LocationCity, LocationPictures, LocationActive) 
    VALUES (:LocationLibelle, :LocationDescription, :LocationAdress, :LocationCP, :LocationCity, :LocationPictures, :LocationActive)");
    return $stmt->execute([
      'LocationLibelle' =>$location->getLocationLibelle(), 
      'LocationDescription' => $location->getLocationDescription(),
      'LocationAdress' => $location->getLocationAdress() ,
      'LocationCP' => $location->getLocationCP(),
      'LocationCity' => $location->getLocationCity(),
      'LocationPictures' => $location->getLocationPictures() ,
      'LocationActive' => $location->getLocationActive(),
    ]); 
  }

  public function edit_location(Location $location): bool
  {
    $stmt = $this->pdo->prepare("UPDATE location SET LocationLibelle=:LocationLibelle, LocationDescription=:LocationDescription, LocationAdress=:LocationAdress, 
    LocationCP=:LocationCP, LocationCity=:LocationCity, LocationPictures=:LocationPictures, LocationActive=:LocationActive WHERE LocationId=:LocationId");
    return $stmt->execute([
        'LocationId' =>$location->getLocationId(), 
        'LocationLibelle' =>$location->getLocationLibelle(), 
        'LocationDescription' => $location->getLocationDescription(),
        'LocationAdress' => $location->getLocationAdress() ,
        'LocationCP' => $location->getLocationCP(),
        'LocationCity' => $location->getLocationCity(),
        'LocationPictures' => $location->getLocationPictures() ,
        'LocationActive' => $location->getLocationActive(),
    ]); 
  }
}
