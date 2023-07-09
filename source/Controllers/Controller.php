<?php

namespace Source\Controllers;

use CoffeeCode\Optimizer\Optimizer;
use CoffeeCode\Router\Router;
use League\Plates\Engine;

/**
 * Class Controller
 * @package Source/Controllers
 */

abstract class Controller{
  /**  @var Engine */
  protected $view;

 /**  @var Router*/
  protected $router;

  /** @var Optimizer */
  protected $seo;


  /** 
   * Controller constructor.
   * @param $router
  */
  public function __construct($router) {
    $this->router = $router;

    $this->view = Engine::create(base_dir: dirname(path: __DIR__, levels:2) . "/views", ext:"php");
    $this->view->addData(["router" => $this->router]);

    $this->seo = new Optimizer();
    $this->seo->openGraph(site(param: "name"), site(param: "locale"), schema: "article")
        ->publisher(SOCIAL["facebook_page"], SOCIAL["facebook_author"])
        ->twitterCard(SOCIAL["twitter_creator"], SOCIAL["twitter_site"], site(param: "domain"))
        ->facebook(SOCIAL["facebook_appId"]);
}



  /**
   * @param string $param
   * @param array $values
   * @return string
   */
  public function ajaxResponse(string $param, array $values): string{
    return json_encode([$param => $values]);
  }

}