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
    <?php
        echo $breadcrumb;
    ?>
    <div class="container-fluid">
        <div class="row">
            <div class="col-sm-12 col-md-12 col-lg-12">
                <div class="row">
                    <div class="col-md-10 col-md-offset-1" style="background-color: blue; height: 500px;">
                    </div>
                </div>
            </div>
        </div>
    </div>
    <?php
        echo $footer;
        echo $html_footer;
    ?>
</body>
