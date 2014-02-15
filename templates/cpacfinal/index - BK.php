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

?>
<!DOCTYPE html>
<html dir="ltr" lang="<?php echo $document->language; ?>">
<head>

    <script src="<?php echo $templateUrl; ?>/wet/js/jquery.min.js"></script>

    <title>Conseil des produits agricoles du Canada</title>
    <jdoc:include type="head" />
    <link rel="stylesheet" href="<?php echo $document->baseurl; ?>/templates/system/css/system.css" />
    <link rel="stylesheet" href="<?php echo $document->baseurl; ?>/templates/system/css/general.css" />

    <!-- Created by Artisteer v4.1.0.59861 -->
    <meta name="viewport" content="initial-scale = 1.0, maximum-scale = 1.0, user-scalable = no, width = device-width">


    <!-- WET 3 -->
    <meta charset="utf-8">
    <!-- Web Experience Toolkit (WET) / Bo&icirc;te &agrave; outils de l'exp&eacute;rience Web (BOEW)
wet-boew.github.com/wet-boew/License-fra.txt / wet-boew.github.com/wet-boew/Licence-fra.txt -->
    <!-- WET 3.0, PWGSC 1.0 file: 1col-fra.html -->
    <!-- TitleStart -->
    <title>Conseil des produits agricoles du Canada</title>
    <!-- TitleEnd -->
    <!-- MetadataStart -->


    <!-- MetadataEnd -->
    <!-- Start of tete-head-video.html / Début de tete-head-video.html -->



    <!--[if lte IE 8]>
    <script src="<?php echo $templateUrl; ?>/wet/js/polyfills/html5shiv-min.js"></script>
    <link rel="stylesheet" href="<?php echo $templateUrl; ?>/wet/grids/css/util-ie-min.css" />
    <link rel="stylesheet" href="<?php echo $templateUrl; ?>/wet/js/css/pe-ap-ie-min.css" />
    <link rel="stylesheet" href="<?php echo $templateUrl; ?>/wet/theme-gcwu-fegc/css/theme-ie-min.css" />
    <![endif]-->
    <!--[if gt IE 8]><!-->
    <link rel="stylesheet" href="<?php echo $templateUrl; ?>/wet/grids/css/util-min.css">
    <link rel="stylesheet" href="<?php echo $templateUrl; ?>/wet/js/css/pe-ap-min.css">
    <link rel="stylesheet" href="<?php echo $templateUrl; ?>/wet/theme-gcwu-fegc/css/theme-min.css">
    <!--<![endif]-->

    <link rel="shortcut icon" href="/favicon.ico" type="image/x-icon">
    <script>if ('undefined' != typeof jQuery) document._artxJQueryBackup = jQuery;</script>
    <script>jQuery.noConflict();</script>
    <script>if (document._artxJQueryBackup) jQuery = document._artxJQueryBackup;</script>
    <script src="/templates/cpacfinal/script.responsive.js"></script>



</head>
<body>
<div id="wb-body">
<div id="wb-skip">
    <ul id="wb-tphp">
        <li id="wb-skip1"><a href="#wb-cont">Passer au contenu principal</a></li>
        <li id="wb-skip2"><a href="#wb-nav">Passer au pied de page</a></li>
        <li><a href="?pedisable=true">Version HTML simplifiée</a></li></ul>
</div>

<div id="wb-head">
    <div id="wb-head-in">
        <!-- HeaderStart -->
        <!-- Start of banner_gc-gc_banner-fra.html / Début de banner_gc-gc_banner-fra.html -->
        <header class="cpac-top">
            <nav role="navigation">
                <div id="gcwu-gcnb">
                    <h2>Barre de navigation du gouvernement du Canada</h2>
                    <div id="gcwu-gcnb-in">
                        <div id="gcwu-gcnb-fip">
                            <!-- Fait parti d'un ul -->
                            <?php echo $view->position('top3', ''); ?>
                            <?php echo $view->position('top', ''); ?>
                        </div>
                    </div>
                </div>
            </nav>

            <div id="gcwu-bnr" role="banner">
                <div id="gcwu-bnr-in">

                    <div id="gcwu-wmms">
                        <div id="gcwu-wmms-in">
                            <div id="gcwu-wmms-fip" title="Symbole du gouvernement du Canada">
                                <img src="/templates/cpacfinal/wet/images/wmms.gif" width="126" height="30" alt="Symbole du gouvernement du Canada">
                            </div>
                        </div>
                    </div>
                    <?php echo $view->position('header', ''); ?>
                    <section role="search">
                        <div id="gcwu-srchbx"><h2>Recherche</h2>
                            <form method="post" action="/index.php/cpac/publications/lignes-directrices">
                                <div id="gcwu-srchbx-in">
                                    <input type="hidden" name="option" value="com_search" />
                                    <input type="hidden" name="Itemid" value="296" />
                                    <label for="gcwu-srch">Recherchez le site Web</label>
                                    <input id="gcwu-srch" name="searchword" type="search" value="" size="27" maxlength="150">
                                    <input id="gcwu-srch-submit" name="gcwu-srch-submit" type="submit" value="Recherche" data-icon="search">
                                </div>
                            </form>
                        </div>
                    </section>
                </div>
            </div>
        </header>
    </div>
</div>

<nav role="navigation">
    <!-- Start of nav_mega-mega_nav-fra.html / Début de nav_mega-mega_nav-fra.html -->

    <div id="gcwu-psnb"><h2>Menu<span> du site</span></h2>
        <div id="gcwu-psnb-in">
            <div class="wet-boew-menubar mb-mega" data-load="menubar" role="application" style="min-height: 28px;">
                <div>


                    <?php echo $view->position('boew-menu'); ?>

                    <!--
                    <ul class="mb-menu" data-ajax-replace="/site/wet3.0/html5/includes/nav_mega-mega_nav-fra.inc" role="menubar">

                        <li role="presentation" class=""><section role="presentation"><h3 role="presentation"><a href="#" role="menuitem" class="knav-1-0-0 mb-has-sm" aria-haspopup="true"><span class="expandicon"><span class="sublink">Renseignements pour</span></span><span class="wb-invisible">(ouvrir le sous-menu avec la touche d'entrée et le fermer avec la touche d'échappement)</span></a></h3><div class="mb-sm" role="menu" aria-expanded="false" aria-hidden="true">
                                    <div class="span-2" role="presentation">
                                        <ul role="presentation">
                                            <li role="presentation"><a href="http://www.tpsgc-pwgsc.gc.ca/comm/info/ntrprss-bsnsss-fra.html" role="menuitem" class=" knav-1-0-1" tabindex="-1">Les entreprises</a></li>
                                            <li role="presentation"><a href="http://www.tpsgc-pwgsc.gc.ca/comm/info/cndns-fra.html" role="menuitem" class=" knav-1-0-2" tabindex="-1">Les Canadiens et Canadiennes</a></li>
                                            <li role="presentation"><a href="http://www.tpsgc-pwgsc.gc.ca/comm/info/gvrnmnt-fra.html" role="menuitem" class=" knav-1-0-3" tabindex="-1">Le gouvernement </a></li>
                                            <li role="presentation"><a href="http://www.tpsgc-pwgsc.gc.ca/medias-media/index-fra.html" role="menuitem" class=" knav-1-0-4" tabindex="-1">Les médias</a></li>
                                        </ul>
                                    </div>

                                    <div class="clear" role="presentation"></div>
                                    <div class="mb-main-link" role="presentation"><a href="http://www.tpsgc-pwgsc.gc.ca/comm/info/index-fra.html" role="menuitem" class=" knav-1-1-0" tabindex="-1">Renseignements pour - Page principale</a></div>
                                </div></section></li>

                    </ul>
                    -->

                </div>
            </div>
        </div>
    </div>
    <!-- End of nav_mega-mega_nav-fra.html / Fin De nav_mega-mega_nav-fra.html -->

</nav>


<div id="wb-core">
    <div id="wb-core-in" class="equalize">
        <div id="wb-main" role="main" style="min-height: 1211px;">
            <div id="wb-main-in">
                <!-- MainContentStart -->
                <div class="span-8">
                    <div class="wet-boew-tabbedinterface margin-top-none embedded-grid tabs-style-2 cycle auto-play" data-load="tabbedinterface" data-easytabs="true">
                        <!--<div class="tabs-panel" id="tab01-parent">-->
                        <?php echo $view->position('user3'); ?>
                        <!--</div>-->
                    </div>
                </div>
            </div>

            <div id="wb-sec" style="">
                <div id="wb-sec-in">
                    <!-- Start of nav_gauche-nav_left-fra.html / Début de nav_gauche-nav_left-fra.html -->
                    <nav role="navigation">
                        <h2 id="wb-nav">Menu secondaire</h2>
                        <div class="wb-sec-def">
                            <!-- SecNavStart -->
                            <?php echo $view->position('left', 'cpac-block'); ?>
                            <!-- SecNavEnd -->
                        </div>
                    </nav>
                    <!-- End of nav_gauche-nav_left-fra.html / Fin De nav_gauche-nav_left-fra.html -->
                </div>
            </div>

            <div class="span-4">
                <?php
                echo $view->position('banner2', 'cpac-nostyle');
                if ($view->containsModules('breadcrumb'))
                    echo artxPost($view->position('breadcrumb'));
                echo $view->positions(array('user1' => 50, 'user2' => 50), 'cpac-article');
                echo $view->position('banner3', 'cpac-nostyle');
                echo artxPost(array('content' => '<jdoc:include type="message" />', 'classes' => ' cpac-messages'));
                echo '<jdoc:include type="component" />';
                echo $view->position('banner4', 'cpac-nostyle');
                echo $view->positions(array('user4' => 50, 'user5' => 50), 'cpac-article');
                echo $view->position('banner5', 'cpac-nostyle');
                ?>
            </div>

            <?php
            if ($view->containsModules('right')){
                ?>
                <div class="span-2 module-related">
                    <?php
                    echo $view->position('right', 'cpac-block');
                    ?>
                </div>
            <?php
            }
            ?>

            <?php
            if ($view->containsModules('bottom1')){
                ?>
                <div class="span-8 module-related">
                    <?php
                    echo $view->positions(array('bottom1' => 33, 'bottom2' => 33, 'bottom3' => 34), 'cpac-block');
                    ?>
                </div>
            <?php
            }
            ?>
        </div>
    </div>
</div>



<div id="wb-foot">
    <div id="wb-foot-in">
        <footer>
            <h2>Pied de page</h2>
            <!-- FooterStart -->
            <!-- Start of pied_site-site_footer-fra.html / D&eacute;but de pied_site-site_footer-fra.html -->

            <nav role="navigation">
                <div id="gcwu-sft"><h3>Pied de page du site</h3>
                    <div id="gcwu-sft-in">

                        <?php echo $view->position('debug'); ?>

                        <!--
                        <div id="gcwu-tctr">
                            <ul>
                                <li class="gcwu-tc"><a href="http://www.tpsgc-pwgsc.gc.ca/comm/ai-in-fra.html" rel="license">Avis</a></li>
                                <li class="gcwu-tr"><a href="http://www.tpsgc-pwgsc.gc.ca/comm/trans-fra.html">Transparence</a></li>
                            </ul>
                        </div>
                        <div class="clear"></div>
                        <section><div class="span-2"><h4 class="gcwu-col-head"><a href="http://www.tpsgc-pwgsc.gc.ca/apropos-about/prps-bt-fra.html">À propos de nous</a></h4>
                                <ul>
                                    <li><a href="http://www.tpsgc-pwgsc.gc.ca/apropos-about/mnstr-fra.html">La ministre</a></li>
                                    <li><a href="http://www.tpsgc-pwgsc.gc.ca/apropos-about/scrtr-fra.html">Secrétaire parlementaire</a></li>
                                    <li><a href="http://www.tpsgc-pwgsc.gc.ca/apropos-about/ssmnstr-dptmnstr-fra.html">Sous-ministre</a></li>
                                    <li><a href="http://www.tpsgc-pwgsc.gc.ca/apropos-about/rgnstnnll-rgnztnal-fra.html">Organisation</a></li>
                                    <li><a href="http://www.tpsgc-pwgsc.gc.ca/apropos-about/rspnsblt-ccntblt-fra.html">Responsabilité</a></li>
                                    <li><a href="http://www.tpsgc-pwgsc.gc.ca/carrieres-careers/index-fra.html">Carrières</a></li>
                                </ul>
                            </div></section>
                        <section><div class="span-2"><h4 class="gcwu-col-head"><a href="http://www.tpsgc-pwgsc.gc.ca/medias-media/index-fra.html">Nouvelles</a></h4>
                                <ul>
                                    <li><a href="http://www.tpsgc-pwgsc.gc.ca/medias-media/index-fra.html#n1">Communiqués</a></li>
                                    <li><a href="http://www.tpsgc-pwgsc.gc.ca/medias-media/index-fra.html#n2">Avis aux médias</a></li>
                                    <li><a href="http://www.tpsgc-pwgsc.gc.ca/medias-media/index-fra.html#n3">Discours</a></li>
                                    <li><a href="http://www.tpsgc-pwgsc.gc.ca/medias-media/index-fra.html#n4">Déclarations</a></li>
                                    <li><a href="http://www.tpsgc-pwgsc.gc.ca/medias-media/index-fra.html#n5">Galerie de photos</a></li>
                                    <li><a href="http://www.tpsgc-pwgsc.gc.ca/medias-media/rssrcs-cntcts-fra.html">Ressources médias</a></li>
                                </ul>
                            </div></section>
                        <section><div class="span-2"><h4 class="gcwu-col-head"><a href="http://www.tpsgc-pwgsc.gc.ca/comm/cn-cu-fra.html">Contactez-nous</a></h4>
                                <address>
                                    <ul>
                                        <li><a href="http://www.tpsgc-pwgsc.gc.ca/comm/cn-cu-fra.html#generaux">Demandes de renseignements généraux</a></li>
                                        <li><a rel="external" href="http://sage-geds.tpsgc-pwgsc.gc.ca/cgi-bin/direct500/fra/XFou%3dPWGSC-TPSGC%2co%3dGC%2cc%3dCA">Trouvez un(e) employé(e)</a></li>
                                        <li><a href="http://www.tpsgc-pwgsc.gc.ca/comm/cn-cu-fra.html#liue">Ligne d'information d'urgence pour les employés</a></li>
                                    </ul>
                                </address>
                            </div></section>
                        <section><div class="span-2"><h4 class="gcwu-col-head"><a href="http://www.tpsgc-pwgsc.gc.ca/comm/ms-sm/index-fra.html">Restez branchés</a></h4>
                                <ul>
                                    <li><a rel="external" href="https://twitter.com/TPSGC_PWGSC">Twitter</a></li>
                                    <li><a rel="external" href="http://www.youtube.com/TPSGCanada">YouTube</a></li>
                                    <li><a rel="external" href="http://www.flickr.com/photos/tpsgcanada">Flickr</a></li>
                                    <li><a href="http://www.tpsgc-pwgsc.gc.ca/comm/ms-sm/index-fra.html#rss">Fils RSS</a></li>
                                    <li><a href="http://www.tpsgc-pwgsc.gc.ca/comm/ms-sm/index-fra.html#liste">Listes d'envois électroniques</a></li>
                                </ul>
                            </div>
                        </section>
                        -->



                    </div>
                </div>
            </nav>
            <!-- End of pied_site-site_footer-fra.html / Fin De pied_site-site_footer-fra.html -->

            <!-- Start of pied_gc-gc_footer-fra.html / Début de pied_gc-gc_footer-fra.html -->
            <nav role="navigation"><div id="gcwu-gcft"><h3>Pied de page du gouvernement du Canada</h3><div id="gcwu-gcft-in"><div id="gcwu-gcft-fip">
                            <ul>
                                <li><a rel="external" href="http://canadiensensante.gc.ca/index-fra.php"><span>Sant&eacute;</span><br>canadiensensante.gc.ca</a></li>
                                <li><a rel="external" href="http://voyage.gc.ca"><span>Voyage</span><br>voyage.gc.ca</a></li>
                                <li><a rel="external" href="http://www.servicecanada.gc.ca/fra/accueil.shtml"><span>Service Canada</span><br>servicecanada.gc.ca</a></li>
                                <li><a rel="external" href="http://www.guichetemplois.gc.ca/Intro-fra.aspx"><span>Emplois</span><br>guichetemplois.gc.ca</a></li>
                                <li><a rel="external" href="http://plandaction.gc.ca/fr"><span>&Eacute;conomie</span><br>plandaction.gc.ca</a></li>
                                <li id="gcwu-gcft-ca"><div><a rel="external" href="http://www.canada.gc.ca/menu-fra.html">Canada.gc.ca</a></div></li>
                            </ul>
                        </div></div></div></nav>
            <!-- End of pied_gc-gc_footer-fra.html / Fin De pied_gc-gc_footer-fra.html -->

            <!-- FooterEnd -->
        </footer>
    </div>
</div>


<!--
<div id="wb-foot"><div id="wb-foot-in"><footer><h2 id="wb-nav">Pied de page</h2>

            <nav role="navigation"><div id="gcwu-sft"><h3>Pied de page du site</h3><div id="" class="ui-footer ui-bar-a" data-role="footer" role="contentinfo"><ul class="ui-grid-a"><li class="ui-block-a"><a href="http://www.tpsgc-pwgsc.gc.ca/comm/ai-in-fra.html" data-role="button" data-theme="c" data-corners="false" data-shadow="true" data-iconshadow="true" data-wrapperels="span" class="ui-btn ui-shadow ui-btn-up-c"><span class="ui-btn-inner"><span class="ui-btn-text">Avis</span></span></a></li><li class="ui-block-b"><a href="http://www.tpsgc-pwgsc.gc.ca/comm/trans-fra.html" data-role="button" data-theme="c" data-corners="false" data-shadow="true" data-iconshadow="true" data-wrapperels="span" class="ui-btn ui-shadow ui-btn-up-c"><span class="ui-btn-inner"><span class="ui-btn-text">Transparence</span></span></a></li><li class="ui-block-a"><a href="http://www.tpsgc-pwgsc.gc.ca/apropos-about/prps-bt-fra.html" data-role="button" data-theme="c" data-corners="false" data-shadow="true" data-iconshadow="true" data-wrapperels="span" class="ui-btn ui-shadow ui-btn-up-c"><span class="ui-btn-inner"><span class="ui-btn-text">À propos de nous</span></span></a></li><li class="ui-block-b"><a href="http://www.tpsgc-pwgsc.gc.ca/medias-media/index-fra.html" data-role="button" data-theme="c" data-corners="false" data-shadow="true" data-iconshadow="true" data-wrapperels="span" class="ui-btn ui-btn-up-c ui-shadow"><span class="ui-btn-inner"><span class="ui-btn-text">Nouvelles</span></span></a></li><li class="ui-block-a"><a href="http://www.tpsgc-pwgsc.gc.ca/comm/cn-cu-fra.html" data-role="button" data-theme="c" data-corners="false" data-shadow="true" data-iconshadow="true" data-wrapperels="span" class="ui-btn ui-shadow ui-btn-up-c"><span class="ui-btn-inner"><span class="ui-btn-text">Contactez-nous</span></span></a></li><li class="ui-block-b"><a href="http://www.tpsgc-pwgsc.gc.ca/comm/ms-sm/index-fra.html" data-role="button" data-theme="c" data-corners="false" data-shadow="true" data-iconshadow="true" data-wrapperels="span" class="ui-btn ui-btn-up-c ui-shadow"><span class="ui-btn-inner"><span class="ui-btn-text">Restez branchés</span></span></a></li></ul></div></div></nav>

            <nav role="navigation"></nav>

            <div id="gcwu-wmms"><div id="gcwu-wmms-in"><div id="gcwu-wmms-fip" title="Symbole du gouvernement du Canada"><img src="<?php echo $templateUrl; ?>/wet/theme-gcwu-fegc/images/wmms.gif" width="126" height="30" alt="Symbole du gouvernement du Canada"></div></div></div></footer>
    </div></div>
-->







<!--
        <div id="cpac-top">
            <header class="cpac-top"><?php //echo $view->position('top3', 'cpac-nostyle'); ?>
        </div>
        -->

<!--
        <div id="cpac-main">
        <header class="cpac-header">
            <p class="">
                <?php //echo $view->position('header', 'cpac-nostyle'); ?>
            </p>

            <div class="cpac-shapes">

            </div>
            <h1 class="cpac-headline" data-left="1.63%">
                <a href="<?php //echo $document->baseurl; ?>/"><?php echo $this->params->get('siteTitle'); ?></a>
            </h1>

            <div class="cpac-textblock cpac-object964278374" data-left="94.82%">
                <form action="/index.php/cpac/publications/lignes-directrices" class="cpac-search" method="post">
                  <div class="search">
                    <label for="mod-search-searchword"></label><input name="searchword" id="mod-search-searchword" maxlength="40"  class="inputbox" type="text" size="30" value=""  onblur="if (this.value=='') this.value='';" onfocus="if (this.value=='Recherche...') this.value='';" /><input type="submit" value="Recherche" class="button cpac-search-button " onclick="this.form.searchword.focus();"/>  <input type="hidden" name="task" value="search" />
                  <input type="hidden" name="option" value="com_search" />
                  <input type="hidden" name="Itemid" value="296" />
                  </div>
                </form>
            </div>

        </header>
        -->

<!--
        <div class="cpac-sheet clearfix">
        <?php if ($view->containsModules('user3', 'extra1', 'extra2')) : ?>
        <nav class="cpac-nav" role="navigation">

        <?php if ($view->containsModules('extra1')) : ?>
        <div class="cpac-hmenu-extra1"><?php //echo $view->position('extra1'); ?></div>
        <?php endif; ?>
        <?php if ($view->containsModules('extra2')) : ?>
        <div class="cpac-hmenu-extra2"><?php //echo $view->position('extra2'); ?></div>
        <?php endif; ?>
        -->

<?php //echo $view->position('user3'); ?>


<?php endif; ?>

<!--

        <?php //echo $view->position('banner1', 'cpac-nostyle'); ?>
        <?php //echo $view->positions(array('top1' => 33, 'top2' => 33, 'top3' => 34), 'cpac-block'); ?>
        <div class="cpac-layout-wrapper">
                        <div class="cpac-content-layout">
                            <div class="cpac-content-layout-row">
                                <?php if ($view->containsModules('left')) : ?>
        <div class="cpac-layout-cell cpac-sidebar1">
        <?php //echo $view->position('left', 'cpac-block'); ?>




                              </div>
        <?php endif; ?>
                                <div class="cpac-layout-cell cpac-content">
        <?php
          /*echo $view->position('banner2', 'cpac-nostyle');
          if ($view->containsModules('breadcrumb'))
            echo artxPost($view->position('breadcrumb'));
          echo $view->positions(array('user1' => 50, 'user2' => 50), 'cpac-article');
          echo $view->position('banner3', 'cpac-nostyle');
          echo artxPost(array('content' => '<jdoc:include type="message" />', 'classes' => ' cpac-messages'));
          echo '<jdoc:include type="component" />';
          echo $view->position('banner4', 'cpac-nostyle');
          echo $view->positions(array('user4' => 50, 'user5' => 50), 'cpac-article');
          echo $view->position('banner5', 'cpac-nostyle');*/
        ?>



                                </div>
                                <?php if ($view->containsModules('right')) : ?>
        <div class="cpac-layout-cell cpac-sidebar2">
        <?php echo $view->position('right', 'cpac-block'); ?>


                              </div>
        <?php endif; ?>
                            </div>
                        </div>
            </div>
        <?php //echo $view->positions(array('bottom1' => 33, 'bottom2' => 33, 'bottom3' => 34), 'cpac-block'); ?>
        <?php //echo $view->position('banner6', 'cpac-nostyle'); ?>
        </div>
        -->

<!--
        <footer class="cpac-footer">
          <div class="cpac-footer-inner">
        <?php if ($view->containsModules('copyright')){ ?>
            <?php //echo $view->position('copyright', 'cpac-nostyle'); ?>
        <?php }else{ ?>
        <div class="cpac-content-layout">
            <div class="cpac-content-layout-row">
            <div class="cpac-layout-cell layout-item-0" style="width: 100%">

                <p><br></p>
            </div>
            </div>
        </div>

          <?php } ?>
        </div>
        </footer>
        -->


<?php //echo $view->position('debug'); ?>

</div>

<script src="<?php echo $templateUrl; ?>/wet/theme-gcwu-fegc/js/theme-min.js"></script>
<script src="<?php echo $templateUrl; ?>/wet/js/settings.js"></script>
<script src="<?php echo $templateUrl; ?>/wet/js/pe-ap-min.js"></script>

</body>
</html>
