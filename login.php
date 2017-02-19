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
                <div class="col-sm-12 col-md-12 col-lg-12">
                    <div class="col-sm-4 col-md-4 col-lg-4 col-md-offset-4">
                        <div class="login_container">
                            <form id="login_submit">
                                <div class="form-group">
                                    <input type="text" class="form-control"
                                        id="username" placeholder="username">
                                </div>
                                <div class="form-group">
                                    <input type="password" class="form-control"
                                        id="user_pass" placeholder="password">
                                </div>
                                <button type="button" class="btn btn-default">
                                    Cancel</button>
                                <button type="submit" class="btn btn-primary">
                                    Login</button>
                            <form>
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