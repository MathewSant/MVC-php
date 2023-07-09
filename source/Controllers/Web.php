<?php
namespace Source\Controllers;


class Web extends Controller
{
  public function __construct($router)
  {
    parent::__construct($router);

    if(!empty($_SESSION["user"])){
      $this->router->redirect(route:"app.home");
    }
  }

  public function login():void
  {
  $head = $this->seo->optimize(
    title:"Crie sua conta no ". site(param: "name"),
    site(param:"desc"),
    $this->router->route(name:"web.login"),
    routeImage(imageUrl:"Login")
  )->render();

  echo $this->view->render(template_name: "theme/login",[
          "head"=> $head
  ]);
   }
   public function register(){}
}

?>