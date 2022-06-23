<?php

namespace App\Controller;

use App\Repository\LocationRepository;
use App\Routing\Attribute\Route;
use App\Session\SessionInterface;

use App\Entity\Location;


class LocationController extends AbstractController
{
  #[Route(path: "/location", name: "location")]
  public function list(SessionInterface $session,LocationRepository $locationRepository)
  {

    $location = $locationRepository->findall();
    // print("<pre>".print_r($users,true)."</pre>"); 
    echo $this->twig->render('location/listall.html.twig', [
      'location' => $location
    ]);
  }

  #[Route(path: "/location/edit/{id}", name: "location_edit")]
  public function edit(LocationRepository $locationRepository, int $id)
  {
    $location = $locationRepository->find($id);

    echo $this->twig->render('location/edittest.html.twig', [
      'location' => $location
    ]);
  
  }

  #[Route(path: "/location/edit/s", httpMethod: 'POST', name: "location_edit_save")]
  public function edit_location(LocationRepository $locationRepository)
  {
    $locationid=$_POST['locationid'] ;
    $locationlibelle=$_POST['locationlibelle'] ;
    $locationdescription=$_POST['locationdescription'] ;
    $locationadress=$_POST['locationadress'] ;
    $locationcp=$_POST['locationcp'] ;
    $locationcity=$_POST['locationcity'] ;
    $locationpictures=$_POST['locationpictures'] ;
    $locationactive=$_POST['locationactive'] ;

   
    //echo("<script>console.log('.$name.');</script>");
    
    $location = new Location();
      $location
      ->setLocationId($_POST['locationid'])
      ->setLocationLibelle($_POST['locationlibelle'])
      ->setLocationDescription($_POST['locationdescription'])
      ->setLocationAdress($_POST['locationadress'])
      ->setLocationCP($_POST['locationcp'])
      ->setLocationCity(($_POST['locationcity']))
      ->setLocationPictures(($_POST['locationpictures']))
      ->setLocationActive(($_POST['locationactive']));
      $locationRepository->edit_location($location);
      echo("<script>alert('localisation $locationlibelle editer avec succes'); window.location.replace('/location');</script>");
  }

  #[Route(path: "/location/save/s", httpMethod: 'POST', name: 'location_create_save')]
  public function locationsave(LocationRepository $locationRepository)
  {
    $locationlibelle=$_POST['locationlibelle'] ;
    $locationdescription=$_POST['locationdescription'] ;
    $locationadress=$_POST['locationadress'] ;
    $locationcp=$_POST['locationcp'] ;
    $locationcity=$_POST['locationcity'] ;
    $locationpictures=$_POST['locationpictures'] ;
    $locationactive=$_POST['locationactive'] ;
    
    $location = new Location();
      $location
      ->setLocationLibelle($_POST['locationlibelle'])
      ->setLocationDescription($_POST['locationdescription'])
      ->setLocationAdress($_POST['locationadress'])
      ->setLocationCP($_POST['locationcp'])
      ->setLocationCity(($_POST['locationcity']))
      ->setLocationPictures(($_POST['locationpictures']))
      ->setLocationActive(1);
      $locationRepository->create_location($location);
      echo("<script>alert('localisation $locationlibelle créé avec succes'); window.location.replace('/location');</script>");
    }


  #[Route(path: "/location/save")]
  public function usersaveindex(LocationRepository $locationRepository)
  {
    echo $this->twig->render('location/inscriptiontemp.html.twig'); 
  }
}