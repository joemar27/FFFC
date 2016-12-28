<?php include "page_templates/html_template.php";
  $head = new StaticHtml();
  $head_result = $head->main_html_head();
  echo $head_result;
?>
<body>
  <?php
    $nav_bar = $head->main_navbar();
    echo $nav_bar;
  ?>
  <img src="images/header_sm.jpg" alt="US Women, Childrens Mercy Park"
    id="home_image">
  <?php
    $breadcrumb = $head->main_breadcrumb();
    echo $breadcrumb;
  ?>
  <div class="container-fluid main-container">
    <div class="row">
      <div class="col-md-8 col-md-offset-1" id="article_column"></div>
      <div class="col-md-2" id="article_side_column"></div>
    </div>
  </div>
  <!--<?php
    $footer = $head->main_footer();
    echo $footer;
  ?>-->
</body>
<?php
  $html_footer = $head->html_footer();
  echo $html_footer;
?>
