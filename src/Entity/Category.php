<?php

namespace App\Entity;

class Category
{
  public int $CategoryId;
  public bool $CategoryActive;
  public string $CategoryName;
  public string $CategoryPictures;

  public function getCategoryId(): int
  {
    return $this->CategoryId;
  }

  public function setCategoryId(int $CategoryId): self
  {
    $this->CategoryId = $CategoryId;
    return $this;
  }

  public function getCategoryActive(): bool
  {
    return $this->CategoryActive;
  }

  public function setCategoryActive(int $CategoryActive): self
  {
    $this->CategoryActive = $CategoryActive;
    return $this;
  }

  public function getCategoryName(): string
  {
    return $this->CategoryName;
  }

  public function setCategoryName(string $CategoryName): self
  {
    $this->CategoryName = $CategoryName;
    return $this;
  }

  public function getCategoryPictures(): string
  {
    return $this->CategoryPictures;
  }

  public function setCategoryPictures(string $CategoryPictures): self
  {
    $this->CategoryPictures = $CategoryPictures;
    return $this;
  }
}
