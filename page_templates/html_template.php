<?php
class StaticHtml{

    public function main_html_head(){
        $head_info = "
        <!DOCTYPE html>
        <html>
            <head>
                <meta name='viewport' content='width=device-width,
                    initial-scale=1'>
                <title>FFFC</title>
                <script src='js/jquery-3.1.1.min.js'></script>
                <script src='js/bootstrap.min.js'></script>
                <link rel='stylesheet' type='text/css'
                    href='css/bootstrap.min.css'>
                <link rel='stylesheet' type='text/css' href='css/site.css'>
            </head>
        ";
        return $head_info;
    }

    public function main_navbar(){
        $main_nav = "
            <nav class='navbar navbar-inverse main-nav'>
                <div class='container-fluid'>
                    <!-- Brand and toggle get grouped for better mobile
                        display -->
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
                    <!-- Collect the nav links, forms, and other content
                        for toggling -->
                    <div class='collapse navbar-collapse' id='collapsed-menu'>
                        <ul class='nav navbar-nav'>
                            <li><a href='archive.php'>Archive</a></li>
                        </ul>
                        <ul class='nav navbar-nav navbar-right'>
                            <li><a href='login.php'>Login</a></li>
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
                    <div class='col-sm-12 col-md-12 col-lg-12'>
                        <ol class='breadcrumb main-breadcrumb' id='page_crumb'>
                        </ol>
                    </div>
                </div>
            </div>
        ";
        return $main_crumb;
    }

    public function main_contrib_details(){
        $main_contribs = "
            <div class='container-fluid'>
                <div class='row'>
                    <div class='col-sm-12 col-md-12 col-lg-12'>
                        <div class='row'>
                            <div class='col-sm-4 col-md-4
                            col-lg-4 contributers'>
                            </div>
                            <div class='col-sm-4 col-md-4
                            col-lg-4 contributers'>
                            </div>
                            <div class='col-sm-4 col-md-4
                            col-lg-4 contributers'>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        ";
        return $main_contribs;
    }

    public function main_footer(){
        $footer = "
            <div class='container-fluid footer_container'>
                <div class='row'>
                    <div class='col-sm-12 col-md-12 col-lg-12'>
                        <div class='row'>
                            <div class='col-sm-4 col-md-4 col-lg-4 info_footer'>
                            </div>
                            <div class='col-sm-4 col-md-4 col-lg-4 info_footer'>
                            </div>
                            <div class='col-sm-4 col-md-4 col-lg-4 info_footer'>
                            </div>
                        </div>
                    </div>
                    <footer class='text-center'>
                        <p>Foot Five Football Club &#45; Official Website
                        </p>
                    </footer>
                </div>
            </div>
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

class AudioConsole{
    public function audio_html_panel(){
        $audio_panel = "
            <div class='container-fluid'>
                <div class='row'>
                    <div class='col-sm-12 col-md-12 col-lg-12 audio_panel'
                    id='podcast_audio'>
                    </div>
                </div>
            </div>
        ";
        return $audio_panel;
    }
}

class LoginPage{

    public function login_html_head(){
        $css_info = "
            <link rel='stylesheet' type='text/css' href='css/auth.css'>
            <script src='js/auth.js'></script>
        ";
        return $css_info;
    }

}

?>
