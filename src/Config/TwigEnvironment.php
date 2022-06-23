<?php

namespace App\Config;

use Twig\Environment;
use Twig\Loader\FilesystemLoader;

class TwigEnvironment
{
  public function init(): Environment
  {
    $loader = new FilesystemLoader(__DIR__ . '/../../templates');
    return new Environment($loader, [
      'debug' => $_ENV['APP_ENV'] === 'dev',
      'cache' => __DIR__ . '/../../var/cache',
    ]);
    
    $this->twig->addGlobal('_post', $_POST);
    $this->twig->addGlobal('_get', $_GET);
    $this->twig->addGlobal('_session', $_SESSION);
  }
}
