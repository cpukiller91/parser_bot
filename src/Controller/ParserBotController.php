<?php

namespace Drupal\parser_bot\Controller;

class ParserBotController{
  public function init(){
    $output = "ddsd";
    return array(
      '#markup' => render($output),
    );
  }
}
