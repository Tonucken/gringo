<?php
/**
* Standard controller layout.
*
* @package GringoCore
*/
class CCIndex implements IController {

  /**
* Implementing interface IController. All controllers must have an index action.
*/
  public function Index() {
    global $gr;
    $gr->data['title'] = "Index Controller / IController";
    $gr->data['main'] = "<h1>Index Controller / IController</h1>";
  }

}
