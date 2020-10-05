<?php

namespace Drupal\parser_bot\Controller;

class ParserBotController{
  public function init(){
    $output = node_load_multiple();
    $output = node_view_multiple($output);
    return array(
      '#markup' => render($output),
    );
  }
}