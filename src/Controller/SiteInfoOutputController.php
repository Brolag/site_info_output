<?php

namespace Drupal\site_info_output\Controller;

use Drupal\Core\Controller\ControllerBase;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\HttpFoundation\Response;

class SiteInfoOutputController extends ControllerBase
{
  protected $site_name;
  protected $site_slogan; 

  public function __construct()
  {
    $this->site_name = \Drupal::config('system.site')->get('name');
    $this->site_slogan = \Drupal::config('system.site')->get('slogan');
  }

  /**
   * getSiteSlogan
   * @return string
   */
  public function getSiteName()
  {

      $site_information = [
        'site_slogan' => $this->site_name,
      ];
      
      
      return new JsonResponse($site_information);
  }

   public function getSiteSlogan()
  {

      $site_information = [
        'site_slogan' => $this->site_slogan,
      ];
      
      return new JsonResponse($site_information);
  }

}
