<?php
defined('_JEXEC') or die;

/**
 * Template for Joomla! CMS, created with Artisteer.
 * See readme.txt for more details on how to use the template.
 */

require_once dirname(__FILE__) . DIRECTORY_SEPARATOR . 'functions.php';

// Create alias for $this object reference:
$document = $this;

// Shortcut for template base url:
$templateUrl = $document->baseurl . '/templates/' . $document->template;

Artx::load("Artx_Page");

// Initialize $view:
$view = $this->artx = new ArtxPage($this);

// Decorate component with Artisteer style:
$view->componentWrapper();

JHtml::_('behavior.framework', true);

//Get current lang
$lang = JFactory::getLanguage();


//Get accueil
$app = JFactory::getApplication();
$menu = $app->getMenu();
$lang = JFactory::getLanguage();
if ($menu->getActive() == $menu->getDefault($lang->getTag())) {
    $pageAccueilVal = 1;
    $AccueilCssPatch = '<style>.cpac-postheader{margin-top: 0px !important;}</style>';
}
else {
    //echo 'Accueil';
}

?>
<!DOCTYPE html>

<!--[if gt IE 7]><meta http-equiv="X-UA-Compatible" content="IE=Edge" /><![endif]-->
<!--[if IE 7]><html lang="fr" class="no-js ie7"><![endif]-->
<!--[if IE 8]><html lang="fr" class="no-js ie8"><![endif]-->
<!--[if gt IE 8]><!-->
<html lang="<?php echo $lang->getTag(); ?>" class="no-js">
<!--<![endif]-->

<head>
    <meta charset="utf-8" />
    <!-- Web Experience Toolkit (WET) / Bo&icirc;te &agrave; outils de l'exp&eacute;rience Web (BOEW)
wet-boew.github.com/wet-boew/License-fra.txt / wet-boew.github.com/wet-boew/Licence-fra.txt -->
    <!-- WET 3.0, PWGSC 1.0 file: 1col-fra.html -->
    <!-- TitleStart -->
    <!--
    <title>Conseil des produits agricoles du Canada</title>
    -->
    <title>
    <?php echo $this->getTitle(); ?>
    </title>

    <!-- TitleEnd -->
    <!-- MetadataStart -->

    <meta name="dcterms.subject" title="gccore" content="Services aux entreprises; Services gouvernementaux; Programme f&eacute;d&eacute;ral; Publication gouvernementale; Finances; Immobilier; Passation des march&eacute;s; Traduction; Biens de la Couronne; Pension; V&eacute;rification; D&eacute;veloppement durable; Technologie de l'information" />
    <meta name="dcterms.language" title="ISO639-2" content="fra" />
    <meta name="dcterms.creator" content="Gouvernement du Canada, Travaux publics et Services gouvernementaux Canada, Communications" />
    <meta name="dcterms.title" content="Accueil - Travaux publics et Services gouvernementaux Canada (TPSGC)" />
    <meta name="dcterms.issued" title="W3CDTF" content="2007-09-20" />
    <meta name="dcterms.modified" title="W3CDTF" content="2014-02-07" />
    <meta name="dcterms.description" content="Le principal point d'acc&egrave;s pour tous les services de TPSGC. Aidant environ 140 minist&egrave;res et organismes du gouvernement du Canada &agrave; servir la population canadienne." />
    <meta name="description" content="Le principal point d'acc&egrave;s pour tous les services de TPSGC. Aidant environ 140 minist&egrave;res et organismes du gouvernement du Canada &agrave; servir la population canadienne." />
    <meta name="keywords" content="TPSGC, Colline du parlement, receveur g&eacute;n&eacute;ral, fournisseurs, office des normes g&eacute;n&eacute;rales du canada, achats en direct, industrie, acquisitions, Biens immobilier" />

    <!-- MetadataEnd -->
    <!-- Start of tete-head-video.html / Début de tete-head-video.html -->
    <script src="../boew-wet/wet3.0/js/jquery.min.j"></script>
    <!--[if lte IE 8]>
    <script src="/boew-wet/wet3.0/js/polyfills/html5shiv-min.js"></script>
    <link rel="stylesheet" href="/boew-wet/wet3.0/grids/css/util-ie-min.css" />
    <link rel="stylesheet" href="/boew-wet/wet3.0/js/css/pe-ap-ie-min.css" />
    <link rel="stylesheet" href="/boew-wet/wet3.0/theme-gcwu-fegc/css/theme-ie-min.css" />
    <![endif]-->
    <!--[if gt IE 8]><!-->
    <link rel="stylesheet" href="../boew-wet/wet3.0/grids/css/util-min.css" />
    <link rel="stylesheet" href="../boew-wet/wet3.0/js/css/pe-ap-min.css" />
    <link rel="stylesheet" href="../boew-wet/wet3.0/theme-gcwu-fegc/css/theme-min.css" />
    <!--<![endif]-->
    <noscript><link rel="stylesheet" href="../boew-wet/wet3.0/theme-gcwu-fegc/css/theme-ns-min.css" /></noscript>

    <link rel="shortcut icon" href="http://www.tpsgc-pwgsc.gc.ca/boew-wet/wet3.0/theme-gcwu-fegc/images/favicon.ico" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <!-- End of tete-head-video.html / Fin De tete-head-video.html -->


    <!-- CustomScriptsCSSStart -->
    <style>
        .gcwu-minister-in{background:#eee url(../boew-wet/wet3.0/theme-gcwu-fegc/images/bg-minister-bottom.gif) no-repeat right bottom;}
        .gcwu-minister p{background:#fff url(../boew-wet/wet3.0/theme-gcwu-fegc/images/bg-minister-top.gif) no-repeat right top;}
        #gcwu-video .mediaplayer{line-height:0;}
        #gcwu-video ul.mp-downloadable{position:absolute;clip:rect(1px, 1px, 1px, 1px);height:1px;width:1px;overflow:hidden;}
        #gcwu-video div.background-dark{background:#eee !important;color:#000;padding-bottom:10px;}

        .cpac-postheadericons{position: absolute; bottom: -30px; right: 10px;}
    </style>

    <?php if($AccueilCssPatch){echo $AccueilCssPatch; } ?>

    <link href="../boew-wet/wet3.0/theme-gcwu-fegc/css/style.css" rel="stylesheet" />
    <!-- CustomScriptsCSSEnd -->
</head>

<body><div id="wb-body">
<div id="wb-skip">
    <ul id="wb-tphp">
        <li id="wb-skip1"><a href="#wb-cont">Passer au contenu principal</a></li>
        <li id="wb-skip2"><a href="#wb-nav">Passer au pied de page</a></li>
    </ul>
</div>

<div id="wb-head">
    <div id="wb-head-in">
        <header>
            <!-- HeaderStart -->
            <!-- Start of banner_gc-gc_banner-fra.html / Début de banner_gc-gc_banner-fra.html -->
            <nav role="navigation">
                <div id="gcwu-gcnb">
                    <h2>Barre de navigation du gouvernement du Canada</h2>
                    <div id="gcwu-gcnb-in">
                        <div id="gcwu-gcnb-fip">
                            <div id="gcwu-sig">
                                <div id="gcwu-sig-in">
                                    <div id="gcwu-sig-fra" title="Gouvernement du Canada">
                                        <img src="../boew-wet/wet3.0/theme-gcwu-fegc/images/sig-fra.gif" width="214" height="20" alt="Gouvernement du Canada" />
                                    </div>
                                </div>
                            </div>
                            <?php echo $view->position('top', ''); ?>
                            <?php //echo $view->position('top3', ''); ?>
                        </div>
                    </div>
                </div>
            </nav>

            <!-- End of banner_gc-gc_banner-fra.html / Fin De banner_gc-gc_banner-fra.html -->

            <!-- Start of banner_site-site_banner-fra.html / Début de banner_site-site_banner-fra.html -->
            <div id="gcwu-bnr" role="banner">
                <div id="gcwu-bnr-in">
                    <div id="gcwu-wmms">
                        <div id="gcwu-wmms-in">
                            <div id="gcwu-wmms-fip" title="Symbole du gouvernement du Canada">
                                <img src="../boew-wet/wet3.0/theme-gcwu-fegc/images/wmms.gif" width="126" height="30"  alt="Symbole du gouvernement du Canada" />
                            </div>
                        </div>
                    </div>
                    <div id="gcwu-title">
                        <p id="gcwu-title-in">
                            <?php echo $view->position('header', ''); ?>
                        </p>
                    </div>

                    <section role="search">
                        <?php if($lang->getTag()=="fr-FR"){ ?>
                        <div id="gcwu-srchbx"><h2>Recherche</h2>
                            <form method="get" action="index.php?">
                                <div id="gcwu-srchbx-in">
                                    <input type="hidden" name="option" value="com_search" />
                                    <input type="hidden" name="Itemid" value="" />
                                    <input type="hidden" name="lang" value="fr-FR">
                                    <input type="hidden" name="ordering" value="newest">
                                    <input type="hidden" name="searchphrase" value="all">

                                    <label for="gcwu-srch">Recherchez le site Web</label>
                                    <input id="gcwu-srch" name="searchword" type="search" value="" size="27" maxlength="150">
                                    <input id="gcwu-srch-submit" name="gcwu-srch-submit" type="submit" value="Recherche" data-icon="search">
                                </div>
                            </form>
                        </div>
                        <?php }else{ ?>
                            <div id="gcwu-srchbx">
                                <h2>Search</h2>
                                <form action="index.php?" method="get">
                                    <div id="gcwu-srchbx-in">
                                        <input type="hidden" name="option" value="com_search" />
                                        <input type="hidden" name="Itemid" value="" />
                                        <input type="hidden" name="lang" value="en-GB">
                                        <input type="hidden" name="ordering" value="newest">
                                        <input type="hidden" name="searchphrase" value="all">

                                        <label for="gcwu-srch">Search the website</label>
                                        <input id="gcwu-srch" type="search" name="searchword" value="" size="27" maxlength="150" />
                                        <input id="gcwu-srch-submit" type="submit" name="gcwu-srch-submit" value="Search" data-icon="search" />
                                    </div>
                                </form>
                            </div>
                        <?php } ?>
                    </section>



                </div>
            </div>
            <!-- End of banner_site-site_banner-fra.html / Fin De banner_site-site_banner-fra.html -->


            <nav role="navigation">
                <!-- Start of nav_mega-mega_nav-fra.html / Début de nav_mega-mega_nav-fra.html -->

                <div id="gcwu-psnb"><h2>Menu<span> du site</span></h2>
                    <div id="gcwu-psnb-in">
                        <div class="wet-boew-menubar mb-mega">
                            <div>
                                <?php echo $view->position('boew-menu'); ?>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- End of nav_mega-mega_nav-fra.html / Fin De nav_mega-mega_nav-fra.html -->


            </nav>
            <!-- HeaderEnd -->
        </header>

    </div>

</div>

<div id="wb-core">
    <div id="wb-core-in" class="equalize">
        <div id="wb-main" role="main">
            <div id="wb-main-in">

                <!-- MainContentStart -->

                <h1 id="wb-cont" class="wb-invisible">Page principale du site Web officiel de Travaux publics et Services gouvernementaux Canada</h1>

                <?php
                if ($view->containsModules('user3')){
                ?>

                <!-- START SLIDESHOW -->
                <h2 class="wb-invisible">Diaporama</h2>

                <div class="span-8">
                <div class="wet-boew-tabbedinterface margin-top-none embedded-grid tabs-style-2 cycle auto-play">
                    <?php echo $view->position('extra1'); ?>
                </div>

                </div>

                <div class="clear"></div>

                <!-- END SLIDESHOW -->
                <?php
                }
                ?>


                <div class="clear"></div>

                <div class="span-2 no-margin">
                    <div id="wb-sec" >
                        <div id="wb-sec-in">
                            <!-- Start of nav_gauche-nav_left-fra.html / Début de nav_gauche-nav_left-fra.html -->
                            <nav role="navigation">
                                <h2 id="wb-nav">Menu secondaire</h2>
                                <div class="wb-sec-def">
                                    <!-- SecNavStart -->
                                    <?php echo $view->position('left', ''); ?>
                                </div>
                            </nav>
                            <!-- End of nav_gauche-nav_left-fra.html / Fin De nav_gauche-nav_left-fra.html -->

                        </div>
                    </div>
                </div>

                <div class="span-<?php echo ((!$pageAccueilVal)?'6':'4'); ?> content-margin">
                    <?php
                    echo $view->position('banner2', 'cpac-nostyle');
                    if ($view->containsModules('breadcrumb') && !$pageAccueilVal)
                        echo artxPost($view->position('breadcrumb'));
                    echo $view->positions(array('user1' => 50, 'user2' => 50), 'cpac-article');
                    echo $view->position('banner3', 'cpac-nostyle');
                    echo artxPost(array('content' => '<jdoc:include type="message" />', 'classes' => ' cpac-messages'));
                    echo '<jdoc:include type="component" />';
                    echo $view->position('banner4', 'cpac-nostyle');
                    echo $view->positions(array('user4' => 50, 'user5' => 50), 'cpac-article');
                    echo $view->position('banner5', 'cpac-nostyle');
                    ?>


                    <?php
                    if ($view->containsModules('bottom1')){
                        ?>
                        <div class="span-4">
                            <?php
                            echo $view->positions(array('bottom1' => 33, 'bottom2' => 33, 'bottom3' => 34), 'cpac-block');
                            ?>
                        </div>
                    <?php
                    }
                    ?>

                </div>

                <?php
                if ($view->containsModules('right')){
                    ?>
                    <div class="span-2">
                        <?php
                        echo $view->position('right', 'cpac-block');
                        ?>
                    </div>
                <?php
                }
                ?>

                <div class="clear"></div>
                <!-- MainContentEnd -->
            </div>
        </div>
    </div>
    <div id="wb-foot"><div id="wb-foot-in"><footer><h2 id="wb-nav">Pied de page</h2>
                <!-- FooterStart -->
                <!-- Start of pied_site-site_footer-fra.html / D&eacute;but de pied_site-site_footer-fra.html -->
                <nav role="navigation">
                    <div id="gcwu-sft">
                        <h3>Pied de page du site</h3>
                        <div id="gcwu-sft-in">
                            <?php echo $view->position('debug'); ?>
                        </div>
                    </div>
                </nav>
                <!-- End of pied_site-site_footer-fra.html / Fin De pied_site-site_footer-fra.html -->

                <!-- Start of pied_gc-gc_footer-fra.html / Début de pied_gc-gc_footer-fra.html -->
                <nav role="navigation"><div id="gcwu-gcft"><h3>Pied de page du gouvernement du Canada</h3><div id="gcwu-gcft-in"><div id="gcwu-gcft-fip">
                     <?php if($lang->getTag()=="fr-FR"){ ?>
                         <ul>
                            <li><a rel="external" href="http://canadiensensante.gc.ca/index-fra.php"><span>Sant&eacute;</span><br>canadiensensante.gc.ca</a></li>
                            <li><a rel="external" href="http://voyage.gc.ca"><span>Voyage</span><br>voyage.gc.ca</a></li>
                            <li><a rel="external" href="http://www.servicecanada.gc.ca/fra/accueil.shtml"><span>Service Canada</span><br>servicecanada.gc.ca</a></li>
                            <li><a rel="external" href="http://www.guichetemplois.gc.ca/Intro-fra.aspx"><span>Emplois</span><br>guichetemplois.gc.ca</a></li>
                            <li><a rel="external" href="http://plandaction.gc.ca/fr"><span>&Eacute;conomie</span><br>plandaction.gc.ca</a></li>
                            <li id="gcwu-gcft-ca"><div><a rel="external" href="http://www.canada.gc.ca/menu-fra.html">Canada.gc.ca</a></div></li>
                        </ul>
                    <?php }else{ ?>
                         <ul>
                             <li><a rel="external" href="http://healthycanadians.gc.ca/index-eng.php"><span>Health</span><br>healthycanadians.gc.ca</a></li>
                             <li><a rel="external" href="http://travel.gc.ca"><span>Travel</span><br>travel.gc.ca</a></li>
                             <li><a rel="external" href="http://www.servicecanada.gc.ca/eng/home.shtml"><span>Service Canada</span><br>servicecanada.gc.ca</a></li>
                             <li><a rel="external" href="http://www.jobbank.gc.ca/intro-eng.aspx"><span>Jobs</span><br>jobbank.gc.ca</a></li>
                             <li><a rel="external" href="http://actionplan.gc.ca/en"><span>Economy</span><br>actionplan.gc.ca</a></li>
                             <li id="gcwu-gcft-ca"><div><a rel="external" href="http://www.canada.gc.ca/menu-eng.html">Canada.gc.ca</a></div></li>
                         </ul>
                    <?php } ?>
                </div></div></div></nav>
                <!-- End of pied_gc-gc_footer-fra.html / Fin De pied_gc-gc_footer-fra.html -->

                <!-- FooterEnd -->
            </footer>
        </div>
    </div>
</div>


<!-- ScriptsStart -->
<!-- Start of script_pied-script_footer.html / Début de script_pied-script_footer.html -->
<script src="../boew-wet/wet3.0/theme-gcwu-fegc/js/theme-min.j"></script>
<script src="../boew-wet/wet3.0/js/settings.j"></script>
<script src="../boew-wet/wet3.0/js/pe-ap-min.j"></script>
<!-- End of script_pied-script_footer.html / Fin De script_pied-script_footer.html -->

<!-- ScriptsEnd -->
</body>

<!-- Mirrored from www.tpsgc-pwgsc.gc.ca/comm/index-fra.html by HTTrack Website Copier/3.x [XR&CO'2013], Sat, 08 Feb 2014 18:47:19 GMT -->
</html>
