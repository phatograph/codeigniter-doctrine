<?php
class Doctrine_Tools extends CI_Controller {

  function create_tables() {
    Doctrine::createTablesFromModels();
    echo 'table(s) created.';
  }

}