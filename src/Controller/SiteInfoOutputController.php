<?php

namespace Drupal\site_info_output\Controller;

use Drupal\Core\Controller\ControllerBase;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\HttpFoundation\Response;

class SiteInfoOutputController extends ControllerBase
{

  //Ya no necesitas las propiedad locales de la clase tampoco el contructor
  // protected $site_name;
  // protected $site_slogan;
  //
  // public function __construct()
  // {
  //   $this->site_name = \Drupal::config('system.site')->get('name');
  //   $this->site_slogan = \Drupal::config('system.site')->get('slogan');
  // }

  /**
   * getSiteSlogan
   * @return string
   */
  public function getSiteName()
  {

      $site_information = [
        'site_slogan' => $this->config('system.site')->get('name'),
      ];

      return new JsonResponse($site_information);
  }

   public function getSiteSlogan()
  {

      $site_information = [
        'site_slogan' => $this->config('system.site')->get('slogan'),
      ];

      return new JsonResponse($site_information);
  }

}
