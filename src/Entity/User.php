<?php

namespace App\Entity;

class User
{
  public int $UserId;
  public string $Email;
  public string $Password;
  public string $FirstName;
  public string $Name;
  public int $Role;
  public bool $Active;

  public function getUserId(): int
  {
    return $this->UserId;
  }

  public function setUserId(int $UserId): self
  {
    $this->UserId = $UserId;
    return $this;
  }

  public function getEmail(): string
  {
    return $this->Email;
  }

  public function setEmail(string $Email): self
  {
    $this->Email = $Email;

    return $this;
  }

  public function getPassword(): string
  {
    return $this->Password;
  }

  public function setPassword(string $Password): self
  {
    $this->Password = $Password;

    return $this;
  }

  public function getFirstName(): string
  {
    return $this->FirstName;
  }

  public function setFirstName(string $FirstName): self
  {
    $this->FirstName = $FirstName;

    return $this;
  }

  public function getName(): string
  {
    return $this->Name;
  }

  public function setName(string $Name): self
  {
    $this->Name = $Name;

    return $this;
  }

  public function getRole(): int
  {
    return $this->Role;
  }

  public function setRole(int $Role): self
  {
    $this->Role = $Role;

    return $this;
  }

  public function getActive(): bool
  {
    return $this->Active;
  }

  public function setActive(bool $Active): self
  {
    $this->Active = $Active;
    return $this;
  }
}
