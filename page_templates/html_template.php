<?php
class StaticHtml{

  public function main_html_head(){
    $head_info = "
      <!DOCTYPE html>
      <html>
        <head>
        <meta name='viewport' content='width=device-width, initial-scale=1'>
        <title>FFFC</title>
        <script src='js/jquery-3.1.1.min.js'></script>
        <script src='js/bootstrap.min.js'></script>
        <link rel='stylesheet' type='text/css' href='css/bootstrap.min.css'>
        <link rel='stylesheet' type='text/css' href='css/site.css'>
        </head>
    ";
    return $head_info;
  }

  public function main_navbar(){
    $main_nav = "
      <nav class='navbar navbar-inverse main-nav'>
        <div class='container-fluid'>
          <!-- Brand and toggle get grouped for better mobile display -->
          <div class='navbar-header'>
            <button type='button' class='navbar-toggle collapsed'
              data-toggle='collapse' data-target='#collapsed-menu'
              aria-expanded='false'>
              <span class='sr-only'>Toggle navigation</span>
              <span class='icon-bar'></span>
              <span class='icon-bar'></span>
              <span class='icon-bar'></span>
            </button>
            <a class='navbar-brand' href='index.php'>FFFC</a>
          </div>

          <!-- Collect the nav links, forms, and other content for toggling -->
          <div class='collapse navbar-collapse' id='collapsed-menu'>
            <ul class='nav navbar-nav'>
              <li><a href='#'>Archive</a></li>
              <li><a href='#'>About</a></li>
              <li><a href='#'>Contact</a></li>
            </ul>
          </div><!-- /.navbar-collapse -->
        </div><!-- /.container-fluid -->
      </nav>
    ";
    return $main_nav;
  }

  public function main_breadcrumb(){
    $main_crumb = "
      <div class='container-fluid'>
        <div class='row'>
          <div class='col-md-12'>
            <ol class='breadcrumb main-breadcrumb' id='page_crumb'>
            </ol>
          </div>
        </div>
      </div>
    ";
    return $main_crumb;
  }

  public function main_footer(){
    $footer = "
      <footer class='text-center'>
        <p>Foot Five Football Club &#45; Official Website</p>
      </footer>
    ";
    return $footer;
  }

  public function html_footer(){
    $page_footer = "
      <script src='js/site.js'></script>
    ";
    return $page_footer;
  }

}
?>