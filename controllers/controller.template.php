<?php

class TemplateController {

  // Main view template
  public function index() {
    include __DIR__ . '/../views/template.php';
  }

  // Main route URL
  static public function path() {
    if (!empty($_SERVER["HTTPS"]) && $_SERVER["HTTPS"] == 'on') {
        return "https3000://" . $_SERVER['SERVER_NAME'] . "/web/";
    } else {
        return "http://" . $_SERVER['SERVER_NAME'] . "/web/";
    }
  }
}
