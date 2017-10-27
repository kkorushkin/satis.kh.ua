<?php $data = get_fields(6);?>
<!doctype html>
<html <?php language_attributes(); ?> class="no-js">
<head>
<meta charset="<?php bloginfo('charset'); ?>">
<title><?php wp_title(''); ?><?php if(wp_title('', false)) { echo ' :'; } ?> <?php bloginfo('name'); ?></title>
<link href="//www.google-analytics.com" rel="dns-prefetch">
<link href="<?=get_template_directory_uri();?>/favicon.png" rel="shortcut icon">
<link href="<?=get_template_directory_uri();?>/img/icons/touch.png" rel="apple-touch-icon-precomposed">
<link rel="stylesheet" media="all" href="<?=get_template_directory_uri();?>/css/style.css">
<script src="<?=get_template_directory_uri();?>/js/jquery.min.js"></script>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.6/css/bootstrap.min.css" integrity="sha384-rwoIResjU2yc3z8GV/NPeZWAv56rSmLldC3R/AZzGRnGxQQKnKkoFVhFQhNUwEyJ" crossorigin="anonymous">
    <script src="<?=get_template_directory_uri();?>/js/tether/utils.js"></script>
    <script src="https://npmcdn.com/tether@1.2.4/dist/js/tether.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.6/js/bootstrap.min.js" integrity="sha384-vBWWzlZJ8ea9aCX4pEW3rVHjgjt7zpkNpZk+02D9phzyeVkE+jo0ieGizqPLForn" crossorigin="anonymous"></script>
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<meta name="description" content="<?php bloginfo('description'); ?>">
<?php wp_head(); ?>
</head>
	<body <?php body_class(); ?>>
        <header class="header clear" role="banner">
            <div class="container-fluid">
                <div class="row mb0">
                    <div id="header-top-logo" class="col-sm-4 col-xs-12 d-sm-none">
                        <img src="<?=get_template_directory_uri();?>/img/satis_logo3.png" alt="САТИС"/>
                    </div>
                    <div id="header-top-menu" class="col-sm-9 col-xs-12">
                        <nav class="navbar navbar-toggleable-md navbar-light">
                            <button class="navbar-toggler collapsed" type="button" data-toggle="collapse" data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
                                <span class="icon-bar"></span>
                                <span class="icon-bar"></span>
                                <span class="icon-bar"></span>
                            </button>
                            <div class="collapse navbar-collapse" id="navbarNavDropdown">
                                <ul class="navbar-nav navbar-toggleable-md navbar-light">
                                    <li class="nav-item"><a href="#block2" class="nav-link">ДОСТАВКА ВОДЫ</a></li>
                                    <li class="nav-item"><a href="#block3" class="nav-link">КУЛЕРЫ, ДИСПЕНСЕРЫ</a></li>
                                    <li class="nav-item"><a href="#block4" class="nav-link">БУТИЛИРОВАННАЯ ВОДА</a></li>
                                    <li class="nav-item"><a href="#block7" class="nav-link">ЁМКОСТИ 300L+</a></li>
                                    <li class="nav-item"><a href="#block8" class="nav-link">ВОДА В СИФОНЕ</a></li>
                                    <li class="nav-item"><a href="#block6" class="nav-link">КОНТАКТЫ</a></li>
                                </ul>
                            </div>
                        </nav><!--nav-bar-->
                    </div>
                    <div id="header-top-contacts" class="col-sm-3">
                        <nav class="navbar">
                            <ul class="navbar-nav">
                                <li class="nav-item">
                                    <a href="tel:<?=$data['phone'];?>" class="nav-link"><?=$data['phone'];?></a>
                                </li>
                                <!--<li class="nav-item">
                                    <a href="mailto:<?=$data['email'];?>" class="nav-link"><?=$data['email'];?></a>
                                </li>-->
                            </ul>
                        </nav>
                    </div>
                </div>
            </div>
        </header>