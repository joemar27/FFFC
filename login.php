<?php 
    include "page_templates/html_template.php";
    include "page_templates/auth_login.php";

    $head = new StaticHtml();
    $head_result = $head->main_html_head();
    echo $head_result;
?>
<?php
    $loginhead = new LoginPage();
    $login_result = $loginhead->login_html_head();
    echo $login_result;
?>
<body>
    <div id="content-area">
        <div class="container-fluid main-container">
            <div class="row">
                <div class="col-md-12">
                    <div class="col-md-4 col-md-offset-4">
                        <div class="login_container">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <?php
        $footer = $head->main_footer();
        echo $footer;
    ?>
</body>