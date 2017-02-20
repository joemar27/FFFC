<?php include "page_templates/html_template.php";

    $head = new StaticHtml();
    $AudioConsole = new AudioConsole();

    $head_result = $head->main_html_head();
    $nav_bar = $head->main_navbar();
    $breadcrumb = $head->main_breadcrumb();
    $audio_panel = $AudioConsole->audio_html_panel();
    $contributers = $head->main_contrib_details();
    $footer = $head->main_footer();
    $html_footer = $head->html_footer();
?>
<?php
    echo $head_result;
?>
<body>
    <?php
        echo $nav_bar;
    ?>
    <img src="images/header_sm.jpg" alt="US Women, Childrens Mercy Park"
        id="home_image">
    <?php
        echo $breadcrumb;
        echo $audio_panel;
    ?>
    <div id="content-area">
        <div class="container-fluid main-container">
            <div class="row">
                <div class="col-sm-8 col-md-8 col-lg-8
                col-md-offset-1" id="article_column">
                    <div class="featured-article">
                        <h1>SKC Featured Article</h1>
                        <p>DateTime</p>
                        <p>By Author</p>
                    </div>
                </div>
                <div class="col-sm-2 col-md-2 col-lg-2"
                id="article_side_column">
                </div>
            </div>
        </div>
    </div>
    <?php
        echo $contributers;
    ?>
    <?php
        echo $footer;
    ?>
</body>
<?php
    echo $html_footer;
?>
