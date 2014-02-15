<?php
defined('_JEXEC') or die;

require_once dirname(dirname(dirname(__FILE__))) . DIRECTORY_SEPARATOR . 'functions.php';

// Note: it is important to remove spaces between elements.

$tag = ($params->get('tag_id') != NULL) ? ' id="' . $params->get('tag_id') . '"' : '';
if (isset($attribs['name']) && $attribs['name'] == 'boew-menu') {
    $menutype = 'horizontal';

    $start = $params->get('startLevel');

    // check if it is necessary to render subitems:
    $subitems = $GLOBALS['artx_settings']['menu']['show_submenus'] && 1 == $params->get('showAllChildren');
    // true - skip the current node, false - render the current node.
    $skip = false;

    //Counter
    $count=0;
    $totalList = count($list) - 1;

    echo '<ul class="mb-menu" ' . $tag . '>';
    foreach ($list as $i => & $item) {
        $count++;

        if ($skip) {
            if ($item->shallower) {
                if (($item->level - $item->level_diff) <= $limit) {
                    echo '</li>' . str_repeat('</ul></li>', $limit - $item->level + $item->level_diff);
                    $skip = false;
                }
            }
            continue;
        }

        $class = 'item-' . $item->id;
        $class .= 'mb-has-sm';
        $class .= $item->id == $active_id ? ' current' : '';
        $class .= ('alias' == $item->type
            && in_array($item->params->get('aliasoptions'), $path)
            || in_array($item->id, $path)) ? ' active' : '';
        $class .= $item->deeper ? ' deeper' : '';
        $class .= $item->parent ? ' parent' : '';

        echo '<li role="presentation" class="">';

        // Render the menu item.
        switch ($item->type) {
            case 'separator':
            case 'url':
            case 'component':
                require JModuleHelper::getLayoutPath('mod_menu', 'default_' . $item->type);
                break;
            default:
                require JModuleHelper::getLayoutPath('mod_menu', 'default_url');
                break;
        }


        //echo '<div class="mb-sm" role="menu" aria-expanded="false" aria-hidden="true">';
        //exit;

        if ($item->deeper) {
            if (!$subitems) {
                $limit = $item->level;
                $skip = true;
                continue;
            }

            if($item->level == 1){
                echo '<div class="mb-sm" sub="'. $item->level .'" role="menu" aria-expanded="false" aria-hidden="true">';
            }
            echo '<ul class="">';
        }
        elseif ($item->shallower){

            echo '</li>' . str_repeat('</ul></li>', $item->level_diff);
        }
        else{
            echo $closeDiv.'</li>';
        }
    }

    if($item->level == 1){
        $closeDiv = '</div>';
    }

    echo '</ul>';

}






//<section><h3><a href="index-fra.html">Renseignements pour</a></h3>





else if (0 === strpos($params->get('moduleclass_sfx'), 'cpac-vmenu') || false !== strpos($params->get('moduleclass_sfx'), ' cpac-vmenu')) {
    $menutype = 'vertical';

    $start = $params->get('startLevel');

    // check if it is necessary to render subitems:
    $subitems = $GLOBALS['artx_settings']['vmenu']['show_submenus'] && 1 == $params->get('showAllChildren');
    // true - skip the current node, false - render the current node.
    $skip = false;
    // limit of rendering - skip items when a level is exceeding the limit.
    $limit = $start;
    $count = 0;


    //echo '<section>';
    foreach ($list as $i => & $item) {
        $count++;

        if ($skip) {
            if ($item->shallower) {
                if (($item->level - $item->level_diff) <= $limit) {
                    echo '</li>' . str_repeat('</ul></li>', $limit - $item->level + $item->level_diff);
                    $skip = false;
                }
            }
            continue;
        }

        $class = 'item-' . $item->id;
        $class .= $item->id == $active_id ? ' current' : '';
        $class .= ('alias' == $item->type
            && in_array($item->params->get('aliasoptions'), $path)
            || in_array($item->id, $path)) ? ' active' : '';
        $class .= $item->deeper ? ' deeper' : '';
        $class .= $item->parent ? ' parent' : '';
        $parentClass = !$item->parent && !$item->deeper ? ' top-level':'';

        if($item->level==1){
            if($item->parent){
                echo '</section>';
            }
            if($parentClass){
                if($count > 1 && $beforeType != 'top'){
                   echo '</section>';
                }
                echo '<div class="'.$parentClass. ' ' . $class.'">';
            }else{
                echo '<section><div class=" top-level">';
            }
        }
        else{
            echo '<li class="' . $class . '">';
        }


        // Render the menu item.
        switch ($item->type) {
            case 'separator':
            case 'url':
            case 'component':
                require JModuleHelper::getLayoutPath('mod_menu', 'default_' . $item->type, $menutype);
                if($item->level == 1){
                    if($parentClass){
                        echo '</div>';
                        $beforeType = 'top';
                    }else{
                        echo '</div>';
                    }
                }
                break;
            default:
                require JModuleHelper::getLayoutPath('mod_menu', 'default_url');
                break;
        }
        if ($item->deeper) {
            if (!$subitems) {

                $limit = $item->level;
                $skip = true;
                continue;
            }

            echo '<ul' . ($subitems && in_array($item->id, $path) ? ' class="active"' : '') . '>';
        }
        elseif ($item->shallower){
            echo '</li>' . str_repeat('</ul></li>', $item->level_diff);
        }else{
            echo '</li>';
        }
    }
    //echo '</section>';
} else {
    $menutype = 'default';
    echo '<ul class="menu' . $params->get('class_sfx') . '"' . $tag . '>';
    foreach ($list as $i => &$item) {

        $class = 'item-' . $item->id;
        $class .= $item->id == $active_id ? ' current' : '';
        $class .= ('alias' == $item->type
            && in_array($item->params->get('aliasoptions'), $path)
            || in_array($item->id, $path)) ? ' active' : '';
        $class .= $item->deeper ? ' deeper' : '';
        $class .= $item->parent ? ' parent' : '';

        echo '<li class="' . $class . '">';

        // Render the menu item.
        switch ($item->type) {
            case 'separator':
            case 'url':
            case 'component':
                require JModuleHelper::getLayoutPath('mod_menu', 'default_'.$item->type);
                break;
            default:
                require JModuleHelper::getLayoutPath('mod_menu', 'default_url');
                break;
        }

        if ($item->deeper)
            echo '<ul>';
        elseif ($item->shallower)
            echo '</li>' . str_repeat('</ul></li>', $item->level_diff);
        else
            echo '</li>';
    }
    echo '</ul>';
}
?>

<!--

<ul class="mb-menu" data-ajax-replace="/site/wet3.0/html5/includes/nav_mega-mega_nav-fra.inc" role="menubar">


<li role="presentation" class=""><section role="presentation"><h3 role="presentation"><a href="#" role="menuitem" class="knav-0-0-0 mb-has-sm" aria-haspopup="true"><span class="expandicon"><span class="sublink">Services de TPSGC</span></span><span class="wb-invisible">(ouvrir le sous-menu avec la touche d'entrée et le fermer avec la touche d'échappement)</span></a></h3><div class="mb-sm" role="menu" aria-expanded="false" aria-hidden="true">
<div class="span-2" role="presentation">
<section role="presentation"><h4 role="presentation"><a href="http://www.tpsgc-pwgsc.gc.ca/app-acq/index-fra.html" role="menuitem" class=" knav-0-1-0" tabindex="-1">Achats et ventes</a></h4>
<ul role="menu">
<li role="presentation"><a href="https://achatsetventes.gc.ca/" role="menuitem" class=" knav-0-1-1" tabindex="-1">Achatsetventes.gc.ca</a></li>
<li role="presentation"><a href="http://www.tpsgc-pwgsc.gc.ca/app-acq/stamgp-lamsmp/amm-mmp-fra.html" role="menuitem" class=" knav-0-1-2" tabindex="-1">Approvisionnement militaire et maritime</a></li>
<li role="presentation"><a href="http://www.gcsurplus.ca/mn-fra.cfm" role="menuitem" class=" knav-0-1-3" tabindex="-1">GCSurplus</a></li>
<li role="presentation"><a href="https://achatsetventes.gc.ca/donnees-sur-l-approvisionnement/appels-d-offres" role="menuitem" class=" knav-0-1-4" tabindex="-1">Service électronique d'appel d'offres du gouvernement</a></li>
<li role="presentation"><a href="http://www.tpsgc-pwgsc.gc.ca/ongc-cgsb/index-fra.html" role="menuitem" class=" knav-0-1-5" tabindex="-1">Office des normes générales du Canada</a></li>
</ul>
</section>

<section role="presentation"><h4 role="presentation"><a href="http://www.tpsgc-pwgsc.gc.ca/services/secinfo-fra.html" role="menuitem" class=" knav-0-2-0" tabindex="-1">Services de sécurité, d'administration et d'information</a></h4>
<ul role="menu">
<li role="presentation"><a href="http://www.tpsgc-pwgsc.gc.ca/ecologisation-greening/index-fra.html" role="menuitem" class=" knav-0-2-1" tabindex="-1">Écologisation des opérations gouvernementales</a></li>
<li role="presentation"><a href="http://www.gazette.gc.ca/gazette/home-accueil-fra.php" rel="external" role="menuitem" class=" knav-0-2-2" tabindex="-1">Gazette du Canada</a></li>
<li role="presentation"><a href="http://www.tpsgc-pwgsc.gc.ca/isp-ssi/gp-c-fra.html" role="menuitem" class=" knav-0-2-3" tabindex="-1">Intégration des services partagés - Groupes pluricellulaires</a></li>
<li role="presentation"><a href="http://ssi-iss.tpsgc-pwgsc.gc.ca/index-fra.html" role="menuitem" class=" knav-0-2-4" tabindex="-1">Programme de sécurité industrielle</a></li>
<li role="presentation"><a href="http://publications.gc.ca/site/fra/accueil.html" rel="external" role="menuitem" class=" knav-0-2-5" tabindex="-1">Publications du gouvernement du Canada</a></li>
</ul>
</section>
</div>

<div class="span-2" role="presentation">
<section role="presentation"><h4 role="presentation"><a href="http://www.tpsgc-pwgsc.gc.ca/services/bns-prprt-fra.html" role="menuitem" class=" knav-0-3-0" tabindex="-1">Biens et immeubles</a></h4>
<ul role="menu">
<li role="presentation"><a href="http://id-reo.tpsgc-pwgsc.gc.ca/public/ffchrdspl.do?page=acclhm&amp;lang=fr" role="menuitem" class=" knav-0-3-1" tabindex="-1">Biens immobiliers à vendre</a></li>
<li role="presentation"><a href="http://www.tpsgc-pwgsc.gc.ca/biens-property/vdtt-ftrd-fra.html" role="menuitem" class=" knav-0-3-2" tabindex="-1">Biens immobiliers en vedette</a></li>
<li role="presentation"><a href="http://www.tpsgc-pwgsc.gc.ca/collineduparlement-parliamenthill/index-fra.html" role="menuitem" class=" knav-0-3-3" tabindex="-1">Colline du Parlement</a></li>
<li role="presentation"><a href="http://www.tpsgc-pwgsc.gc.ca/biens-property/peri-pilt/index-fra.html" role="menuitem" class=" knav-0-3-4" tabindex="-1">Paiements en remplacement d'impôts</a></li>
<li role="presentation"><a href="http://www.tpsgc-pwgsc.gc.ca/biens-property/pc-cp-fra.html" role="menuitem" class=" knav-0-3-5" tabindex="-1">Projets de construction</a></li>
</ul>
</section>

<section role="presentation"><h4 role="presentation"><a href="http://www.bt-tb.tpsgc-pwgsc.gc.ca/btb.php?lang=fra&amp;cont=001" role="menuitem" class=" knav-0-4-0" tabindex="-1">Traduction, interprétation et autres services linguistiques</a></h4>
<ul role="menu">
<li role="presentation"><a href="http://www.noslangues-ourlanguages.gc.ca/index-fra.php" rel="external" role="menuitem" class=" knav-0-4-1" tabindex="-1">Portail linguistique du Canada</a></li>
<li role="presentation"><a href="http://www.btb.termiumplus.gc.ca/tpv2alpha/alpha-fra.html?lang=fra" role="menuitem" class=" knav-0-4-2" tabindex="-1">TERMIUM Plus®</a></li>
<li role="presentation"><a href="http://www.bt-tb.tpsgc-pwgsc.gc.ca/btb.php?lang=fra&amp;cont=263" role="menuitem" class=" knav-0-4-3" tabindex="-1">Traduction aux ministères et organismes du Gouvernement du Canada</a></li>
</ul>
</section>
</div>

<div class="span-2" role="presentation">
<section role="presentation"><h4 role="presentation"><a href="http://www.tpsgc-pwgsc.gc.ca/services/pmnts-fra.html" role="menuitem" class=" knav-0-5-0" tabindex="-1">Paiements et pensions </a></h4>
<ul role="menu">
<li role="presentation"><a href="http://www.tpsgc-pwgsc.gc.ca/remuneration-compensation/awr-cwa/index-fra.html" role="menuitem" class=" knav-0-5-1" tabindex="-1">Applications Web de la rémunération</a></li>
<li role="presentation"><a href="http://www.tpsgc-pwgsc.gc.ca/recgen/cpc-pac/index-fra.html" role="menuitem" class=" knav-0-5-2" tabindex="-1">Comptes publics du Canada</a></li>
<li role="presentation"><a href="http://www.tpsgc-pwgsc.gc.ca/recgen/txt/depot-deposit-fra.html" role="menuitem" class=" knav-0-5-3" tabindex="-1">Dépôt direct</a></li>
<li role="presentation"><a href="http://www.tpsgc-pwgsc.gc.ca/recgen/txt/index-fra.html" role="menuitem" class=" knav-0-5-4" tabindex="-1">Receveur général du Canada</a></li>
<li role="presentation"><a href="http://www.tpsgc-pwgsc.gc.ca/remuneration-compensation/index-fra.html" role="menuitem" class=" knav-0-5-5" tabindex="-1">Services de paye et de pension pour les employés du gouvernement du Canada</a></li>
<li role="presentation"><a href="http://pensionetavantages-pensionandbenefits.gc.ca/accueil-home-fra.html" role="menuitem" class=" knav-0-5-6" tabindex="-1">Votre pension et vos avantages sociaux de la fonction publique</a></li>
</ul>
</section>
</div>

<div class="clear" role="presentation"></div>
<div class="mb-main-link" role="presentation"><a href="http://www.tpsgc-pwgsc.gc.ca/comm/services-fra.html" role="menuitem" class=" knav-0-6-0" tabindex="-1">Services de TPSGC - Page principale</a></div>
</div></section></li>

<li role="presentation"><section role="presentation"><h3 role="presentation"><a href="#" role="menuitem" class="knav-1-0-0 mb-has-sm" aria-haspopup="true"><span class="expandicon"><span class="sublink">Renseignements pour</span></span><span class="wb-invisible">(ouvrir le sous-menu avec la touche d'entrée et le fermer avec la touche d'échappement)</span></a></h3><div class="mb-sm" role="menu" aria-expanded="false" aria-hidden="true">
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

<li role="presentation"><section role="presentation"><h3 role="presentation"><a href="#" role="menuitem" class="knav-2-0-0 mb-has-sm" aria-haspopup="true"><span class="expandicon"><span class="sublink">Ressources TPSGC</span></span><span class="wb-invisible">(ouvrir le sous-menu avec la touche d'entrée et le fermer avec la touche d'échappement)</span></a></h3><div class="mb-sm" role="menu" aria-expanded="false" aria-hidden="true">
<div class="span-2" role="presentation">
<ul role="presentation">
<li role="presentation"><a href="http://www.tpsgc-pwgsc.gc.ca/comm/cn-cu-fra.html" role="menuitem" class=" knav-2-0-1" tabindex="-1">Contactez-nous</a></li>
<li role="presentation"><a href="http://www.tpsgc-pwgsc.gc.ca/comm/vedette-features/index-fra.html" role="menuitem" class=" knav-2-0-2" tabindex="-1">Dossiers spéciaux</a></li>
<li role="presentation"><a href="http://www.tpsgc-pwgsc.gc.ca/comm/questions-fra.html" role="menuitem" class=" knav-2-0-3" tabindex="-1">Foire aux questions</a></li>
<li role="presentation"><a href="http://www.tpsgc-pwgsc.gc.ca/comm/index-az-fra.html" role="menuitem" class=" knav-2-0-4" tabindex="-1">Index A-Z</a></li>
<li role="presentation"><a href="http://www.tpsgc-pwgsc.gc.ca/lr-ar/index-fra.html" role="menuitem" class=" knav-2-0-5" tabindex="-1">Lois et règlements</a></li>
<li role="presentation"><a href="http://www.tpsgc-pwgsc.gc.ca/medias-media/index-fra.html" role="menuitem" class=" knav-2-0-6" tabindex="-1">Nouvelles</a></li>
<li role="presentation"><a href="http://www.tpsgc-pwgsc.gc.ca/comm/publications-fra.html" role="menuitem" class=" knav-2-0-7" tabindex="-1">Publications et rapports</a></li>
<li role="presentation"><a href="http://www.tpsgc-pwgsc.gc.ca/comm/site-fra.html" role="menuitem" class=" knav-2-0-8" tabindex="-1">Plan du site</a></li>
</ul>
</div>

<div class="clear" role="presentation"></div>
<div class="mb-main-link" role="presentation"><a href="http://www.tpsgc-pwgsc.gc.ca/comm/ress-res-fra.html" role="menuitem" class=" knav-2-1-0" tabindex="-1">Ressources TPSGC - Page principale</a></div>
</div></section></li>

</ul>

-->