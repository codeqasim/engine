<!doctype html>
<html lang="en">
  <head>
    <?=google_tag();?>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
    <meta name="description" content="<?php echo @$metadescription; ?>">
    <meta name="keywords" content="<?php echo @$metakeywords; ?>">
    <meta name="author" content="PHPTRAVELS">
    <title><?php echo @$pageTitle; ?></title>
    <!-- facebook -->
    <meta property="og:title" content="<?php if(!empty($module->meta_title)){ echo $module->meta_title; }else{ echo @$pageTitle;  } ?>"/>
    <meta property="og:site_name" content="<?php echo $app_settings[0]->site_title;?>"/>
    <meta property="og:description" content="<?php if($app_settings[0]->seo_status == "1"){echo $metadescription;}?>"/>
    <meta property="og:image" content="<?php echo base_url(); ?>uploads/global/favicon.png"/>
    <meta property="og:url" content="<?php echo $app_settings[0]->site_url;?>/"/>
    <meta property="og:publisher" content="https://www.facebook.com/"/>
    <script>document.getElementById("homeload").remove();</script>
    <!-- MetaTags -->
    <script type="application/ld+json">
    {
    "@context" : "http://schema.org",
    "@type" : "Corporation",
    "brand": "<?php echo $app_settings[0]->site_title;?>",
    "description": "<?php echo @$metadescription; ?>",
    "name" : "<?php echo $app_settings[0]->site_title;?>",
    "founders": [
    ""
    ],
    "foundingDate": "2019-05",
    "foundingLocation": "",
    "knowsAbout": "<?php echo @$metadescription; ?>",
    "legalName": "<?php echo $app_settings[0]->site_title;?>",
    "logo" : "<?php echo base_url(); ?>uploads/global/favicon.png",
    "numberOfEmployees": "10",
    "ownershipFundingInfo": "<?php echo base_url(); ?>about-Us",
    "url" : "<?php echo base_url(); ?>",
    "sameAs" : [
    <?php $count = $socialcount; foreach($footersocials as  $key=>$value) { if($key == end($count)){ echo '"'.$value->social_link.'"'. "\n";}else{echo '"'.$value->social_link.'"'. ",\n"; } } ?>
    ],
    "slogan": "<?php echo $app_settings[0]->site_title;?>",
    "tickerSymbol": [
    "NYSE:SHOP",
    "TSX:SHOP"
    ],
    "awards": "https://phptravels.com/"
    }
    </script>

    <!-- Fav and Touch Icons -->
    <link rel="shortcut icon" href="<?php echo PT_GLOBAL_IMAGES_FOLDER.'favicon.png';?>">
    <!-- Font face -->
    <link href="https://fonts.googleapis.com/css?family=Aleo:300,300i,400,400i,700,700i|Roboto:100,100i,300,300i,400,400i,500,500i,700,700i,900,900i&display=swap" rel="stylesheet">
    <!-- CSS -->

    <link href="<?php echo $theme_url; ?>assets/css/font-icons.css" rel="stylesheet">
    <link href="<?php echo $theme_url; ?>assets/bootstrap/css/bootstrap.min.css" media="screen" rel="stylesheet" type="text/css">
    <link href="<?php echo $theme_url; ?>assets/css/animate.min.css" rel="stylesheet">
    <link href="<?php echo $theme_url; ?>assets/css/main.css" rel="stylesheet">
    <link href="<?php echo $theme_url; ?>assets/css/plugin.css" rel="stylesheet">
    <link href="<?php echo $theme_url; ?>assets/css/style.css" rel="stylesheet">
    <link href="<?php echo $theme_url; ?>style.css" rel="stylesheet">
    <link href="<?php echo $theme_url; ?>assets/css/mobile.css" rel="stylesheet">
    <style> @import "<?php echo $theme_url; ?>assets/css/childstyle.css"; </style>
    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
    <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
    <!-- RTL CSS -->
    <script src="<?php echo $theme_url; ?>assets/js/jquery-2.2.4.min.js"></script>
    <?php if($isRTL == "RTL"){ ?>
    <link href="<?php echo $theme_url; ?>RTL.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Tajawal:300,400,500,700,800&amp;subset=arabic" rel="stylesheet">
    <?php } ?>
    <!-- Mobile Redirect -->
    <?php if($mSettings->mobileRedirectStatus == "Yes"){ if($ishome != "invoice"){ ?> <script>if(/Android|webOS|iPhone|iPad|iPod|BlackBerry/i.test(navigator.userAgent)){ window.location ="<?php echo $mSettings->mobileRedirectUrl; ?>";}</script> <?php } } ?>
    <!-- Autocomplete files-->
    <!--<link href="<?php echo $theme_url; ?>assets/js/autocomplete/easy-autocomplete.min.css" rel="stylesheet" type="text/css">
    <script src="<?php echo $theme_url; ?>assets/js/autocomplete/jquery.easy-autocomplete.min.js" type="text/javascript" ></script>
    --><!-- <script src="<?php echo $theme_url; ?>assets/js/plugins/datepicker.js"></script> -->
    <!-- Autocomplete files-->
    <script>var base_url = '<?php echo base_url(); ?>';</script>
    <?php echo $app_settings[0]->google; ?>
    </head>
    <?php
    echo "<style>body{margin:0px;padding:0px}</style>";
    ?>
  <!-- start Body -->
  <body class="with-waypoint-sticky" onload="document.body.style.opacity='1'">
  <?=demo_header();?>
    <!-- start Body Inner -->
    <div class="body-inner">
    <!-- start Header -->
    <header id="header-waypoint-sticky" class="header-main header-mobile-menu with-absolute-navbar">
      <div class="header-top">
        <div class="container">
          <div class="row align-items-center no-gutters">
            <div class="col-md-4 col-2 o2">
              <div class="header-logo go-right">
                <a href="<?php echo base_url(); ?>">
                 <img class="" src="<?php echo PT_GLOBAL_IMAGES_FOLDER.$app_settings[0]->header_logo_img;?>" alt="<?php echo @$pageTitle; ?>" />
                </a>
              </div>
            </div>
            <div class="col-md-8 col-10 o1">
              <div class="mini-menu">
               <ul>
                <?php if(strpos($currenturl,'book') == false &&  strpos($currenturl,'checkout') == false && $app_settings[0]->multi_curr == 1 && empty($hideCurr)): $currencies = ptCurrencies(); ?>
                <li class="fr">
                <div class="dropdown dropdown-currency">
                  <a href="javascript:void(0);" class="btn btn-text-inherit btn-interactive" id="dropdownCurrency" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                  <?php echo isset($_SESSION['currencycode']) ? $_SESSION['currencycode'] : defaultCurrencies(); ?>
                  </a>
                  <div class="dropdown-menu dropdown-menu-right" aria-labelledby="dropdownCurrency">
                    <div class="dropdown-menu-inner">
                      <?php foreach($currencies as $c): ?>
                      <a class="dropdown-item text-center" data-code='<?php echo $c->id;?>' href="javascript:void(0);" onclick="change_currency(this)"><?php echo $c->name;?></a>
                      <?php endforeach; ?>
                    </div>
                  </div>
                </div>
                </li>
                <?php endif; ?>
                <li class="fr">
                <div class="dropdown dropdown-language">
                  <?php if(empty($langname)){ $langname = languageName($lang_set); }else{ $langname = $langname; } if (strpos($currenturl,'book') !== false || !empty($hideLang) || strpos($currenturl,'checkout') !== false) { }else{ if($app_settings[0]->multi_lang == '1') { $default_lang = $app_settings[0]->default_lang; if(!empty($lang_set)){ $default_lang = $lang_set; } ?>
                  <a href="#" class="btn btn-text-inherit btn-interactive" id="dropdownLangauge" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                  <span class="image"><img src="<?php echo PT_LANGUAGE_IMAGES.$default_lang.".png";?>" alt="image" /></span> <?php echo $langname;?>
                  </a>
                  <div class="dropdown-menu dropdown-menu-right" aria-labelledby="dropdownLangauge">
                    <div class="dropdown-menu-inner">
                      <!--<a class="dropdown-item active" href="#"><span class="image">
                      <img class="go-right flafFIX" src="" width="21" height="14" alt="<?php echo $langname;?>">
                      </span>
                      </a>-->
                      <?php foreach($languageList as $ldir => $lname){ $selectedlang = ''; if(!empty($lang_set) && $lang_set == $ldir){ $selectedlang = 'selected'; }elseif(empty($lang_set) && $default_lang == $ldir){ $selectedlang = 'selected'; } ?>
                      <a id="<?php echo $ldir; ?>" class="dropdown-item" href="<?php echo pt_set_langurl($langurl,$ldir);?>"><span class="image"><img src="<?php echo PT_LANGUAGE_IMAGES.$ldir.".png";?>" alt="image" /></span> <?php echo $lname['name'];?></a>
                      <?php } ?>
                    </div>
                  </div>
                  <?php } ?>
                  <?php } ?>
                </div>
                </li>
                <?php  if(!empty($customerloggedin)){ ?>
                <li class="d-none d-md-block fl">
                <div class="dropdown dropdown-login dropdown-tab">
                  <a href="javascript:void(0);" class="btn btn-text-inherit btn-interactive" id="dropdownCurrency" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                  <i class="bx bx-user"></i> <?php echo $firstname; ?>
                  </a>
                  <div class="dropdown-menu dropdown-menu-right" aria-labelledby="dropdownCurrency">
                    <div class="">
                      <a class="dropdown-item active tr" href="<?php echo base_url(); ?>account"><?php echo trans('02');?></a>
                      <a class="dropdown-item tr" href="<?php echo base_url(); ?>account/logout/"><?php echo trans('03');?></a>
                    </div>
                  </div>
                </div>
                </li>
                <?php }else{ if (strpos($currenturl,'book') !== false || strpos($currenturl,'checkout') !== false) { }else{ if($allowreg == "1"){ ?>
                <li class="">
                <div class="dropdown dropdown-login dropdown-tab">
                  <a href="javascript:void(0);" class="btn btn-text-inherit btn-interactive" id="dropdownCurrency" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                  <i class="bx bx-user"></i> <?php echo trans('0146');?>
                  </a>
                  <div class="dropdown-menu dropdown-menu-right" aria-labelledby="dropdownCurrency">
                    <div class="">
                      <a class="dropdown-item active tr" href="<?php echo base_url(); ?>login"><?php echo trans('04');?></a>
                      <a class="dropdown-item tr" href="<?php echo base_url(); ?>register"><?php echo trans('0115');?></a>
                    </div>
                  </div>
                </div>
                </li>
                <?php } } } ?>
                <li class="d-lg-none">
                <button class="btn btn-toggle collapsed" data-toggle="collapse" data-target="#mobileMenuMain"></button>
                </li>
                </ul>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="header-nav">
        <div class="container">
          <div class="navbar-wrapper">
            <div class="navbar navbar-expand-lg">
              <div id="mobileMenuMain" class="collapse navbar-collapse o2 fe">
                <nav class="main-nav-menu main-menu-nav navbar-arrow">
                <ul class="main-nav">
                <li><a href="<?php echo base_url(); ?>" title="home"><?=lang('01')?></a></li>
                </ul>
                <?=menu(1);?>
                </nav>
                <!--/.nav-collapse -->
              </div>
              <?php if( ! empty($phone) ) { ?>
              <div class="navbar-phone d-none d-lg-block o1">
                <i class="material-icons">phone</i> <?php echo trans('0438');?> : <?php echo $phone; ?>
              </div>
              <?php } ?>
            </div>
          </div>
        </div>
      </div>
    </header>
    <!-- end Header -->
    <div class="main-wrapper scrollspy-action">