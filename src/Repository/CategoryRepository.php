<?php

namespace App\Repository;

use App\Entity\Category;

final class CategoryRepository extends AbstractRepository
{
  protected const TABLE = 'category';

  public function create_category(Category $category): bool
  {
    $stmt = $this->pdo->prepare("INSERT INTO category (CategoryActive, CategoryName, CategoryPictures) VALUES (:CategoryActive, :CategoryName, :CategoryPictures)");
   
    return $stmt->execute([
      'CategoryActive' =>$category->getCategoryActive(), 
      'CategoryName' => $category->getCategoryName(),
      'CategoryPictures' => $category->getCategoryPictures(),

    ]); 
  }

  public function edit_category(Category $category): bool
  {
    $stmt = $this->pdo->prepare("UPDATE category SET CategoryActive=:CategoryActive, CategoryPictures=:CategoryPictures, CategoryName=:CategoryName WHERE CategoryId=:CategoryId" );
    return $stmt->execute([
        'CategoryId' =>$category->getCategoryId(), 
        'CategoryActive' =>$category->getCategoryActive(), 
        'CategoryPictures' => $category->getCategoryPictures(),
        'CategoryName' => $category->getCategoryName(),
    ]); 
}
}
