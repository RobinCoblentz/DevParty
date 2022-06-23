<?php

namespace App\Controller;

use App\Repository\CategoryRepository;
use App\Routing\Attribute\Route;
use App\Session\SessionInterface;

use App\Entity\Category;


class CategoryController extends AbstractController
{
  #[Route(path: "/category", name: "category_list")]
  public function list(CategoryRepository $categoryRepository)
  {

    $cat = $categoryRepository->findall();
    // print("<pre>".print_r($users,true)."</pre>"); 
    echo $this->twig->render('category/listall.html.twig', [
      'categorys' => $cat
    ]);
  }
  
  #[Route(path: "/category/edit/{id}", name: "category_edit")]
  public function edit(CategoryRepository $categoryRepository, int $id)
  {
    $cat = $categoryRepository->find($id);

    echo $this->twig->render('category/edittest.html.twig', [
        'category' => $cat
    ]);
  
  }
 
  #[Route(path: "/category/edit/s", httpMethod: 'POST', name: "category_edit_save")]
  public function edit_category(CategoryRepository $categoryrRepository)
  {
    $categoryid=$_POST['categoryid'] ;
    $categoryactive=$_POST['categoryactive'] ;
    $categoryname=$_POST['categoryname'] ;
    $categorypictures=$_POST['categorypictures'] ;
   
   
    //echo("<script>console.log('.$name.');</script>");
    
    $category = new Category();
      $category
      ->setCategoryId($_POST['categoryid'])
      ->setCategoryActive($_POST['categoryactive'])
      ->setCategoryPictures($_POST['categorypictures'])
      ->setCategoryName($_POST['categoryname']);
      $categoryrRepository->edit_category($category);
      echo("<script>alert('catégorie $categoryname editer avec succes'); window.location.replace('/category');</script>");
  }
  
  
  #[Route(path: "/category/save/s", httpMethod: 'POST', name: 'category_create_save')]
  public function categorysave(CategoryRepository $categoryrRepository)
  {
    $name=$_POST['name'] ;
    $pictures=$_POST['pictures'] ;
    //echo("<script>console.log('.$name.');</script>");
    
    $category = new Category();
      $category
      ->setCategoryName($_POST['name'])
      ->setCategoryActive(1)
      ->setCategoryPictures($_POST['pictures']);
      $categoryrRepository->create_category($category);

      echo("<script>alert('categorie $name créé avec succes'); window.location.replace('/category/save');</script>");
    }


  #[Route(path: "/category/save")]
  public function categorysaveindex(CategoryRepository $categoryrRepository)
  {
    echo $this->twig->render('category/create.html.twig'); 
  }

}