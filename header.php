<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><? is_front_page() ? bloginfo('name') : wp_title(''); ?></title>
    <link rel="shortcut icon" href="<?=bloginfo('template_url');?>/images/favicon.ico" />
    <link rel="stylesheet" href="<?=bloginfo('template_url');?>/css/bootstrap.min.css">
    <link rel="stylesheet" href="<?=bloginfo('template_url');?>/css/main.css?ver=1">
    
    <link href='https://fonts.googleapis.com/css?family=Roboto:400,100,100italic,300,300italic,400italic,500,500italic,700,700italic,900,900italic' rel='stylesheet' type='text/css'>
    
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.3.0/respond.min.js"></script>
    <![endif]-->
    <? wp_head(); ?>
</head>
    
<body <? body_class(); ?>>
    <header>
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="navbar-header">
                        <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
                            <span class="sr-only">Toggle navigation</span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                        </button>
                        <a class="navbar-brand" href="<?=home_url('/');?>">
                            LOGO
                        </a>
                    </div>
                     <?php
                        wp_nav_menu( array(
                            'menu'              => 'Main menu',
                            'depth'             => 1,
                            'container'         => 'div',
                            'container_class'   => 'collapse navbar-collapse pull-right',
                            'container_id'      => 'bs-example-navbar-collapse-1',
                            'menu_class'        => 'nav navbar-nav',
                            'fallback_cb'       => 'wp_bootstrap_navwalker::fallback',
                            'walker'            => new wp_bootstrap_navwalker())
                        );
                    ?>
                </div>
            </div>
        </div>
        <div class="clearfix"></div>
    </header>