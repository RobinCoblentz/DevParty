<?php

namespace App\Entity;

class Location
{
  public int $LocationId;
  public string $LocationLibelle;
  public string $LocationDescription;
  public string $LocationAdress;
  public int $LocationCP;
  public string $LocationCity;
  public string $LocationPictures;
  public string $LocationActive;
  
  public function getLocationId(): int
  
  {
    return $this->LocationId;
  }

  public function setLocationId(int $LocationId): self
  {
    $this->LocationId = $LocationId;
    return $this;
  }

  public function getLocationLibelle(): string
  {
    return $this->LocationLibelle;
  }

  public function setLocationLibelle(string $LocationLibelle): self
  {
    $this->LocationLibelle = $LocationLibelle;
    return $this;
  }

  public function getLocationDescription(): string
  {
    return $this->LocationDescription;
  }

  public function setLocationDescription(string $LocationDescription): self
  {
    $this->LocationDescription = $LocationDescription;
    return $this;
  }  

  public function getLocationAdress(): string
  {
    return $this->LocationAdress;
  }

  public function setLocationAdress(string $LocationAdress): self
  {
    $this->LocationAdress = $LocationAdress;
    return $this;
  }

  public function getLocationCP(): int
  {
    return $this->LocationCP;
  }

  public function setLocationCP(int $LocationCP): self
  {
    $this->LocationCP = $LocationCP;
    return $this;
  }

  public function getLocationCity(): string
  {
    return $this->LocationCity;
  }

  public function setLocationCity(string $LocationCity): self
  {
    $this->LocationCity = $LocationCity;
    return $this;
  }

  public function getLocationPictures(): string
  {
    return $this->LocationPictures;
  }

  public function setLocationPictures(string $LocationPictures): self
  {
    $this->LocationPictures = $LocationPictures;
    return $this;
  }

  public function getLocationActive(): string
  {
    return $this->LocationActive;
  }

  public function setLocationActive(string $LocationActive): self
  {
    $this->LocationActive = $LocationActive;
    return $this;
  }


}
