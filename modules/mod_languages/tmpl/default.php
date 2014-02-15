<?php
/**
 * @package		Joomla.Site
 * @subpackage	mod_languages
 * @copyright	Copyright (C) 2005 - 2013 Open Source Matters, Inc. All rights reserved.
 * @license		GNU General Public License version 2 or later; see LICENSE.txt
 */

// no direct access
defined('_JEXEC') or die('Restricted access');
JHtml::_('stylesheet', 'mod_languages/template.css', array(), true);

//Get current lang
$lang = JFactory::getLanguage();


/* FIX FOR BROKEN SWITCH LANG */
//echo $lang->getTag();


//echo  $_SERVER['QUERY_STRING'];
//exit;


if($lang->getTag()=='fr-FR'){
    $getStr = str_replace('lang=fr-FR', 'lang=en-GB' , $_SERVER['QUERY_STRING']);

    //echo $getStr;
    //exit;

}else{
    $getStr = str_replace('lang=en-GB', 'lang=fr-FR' , $_SERVER['QUERY_STRING']);

   // var_dump($list);
/*
    public 'lang_id' => string '2' (length=1)
      public 'lang_code' => string 'en-GB' (length=5)
      public 'title' => string 'English' (length=7)
      public 'title_native' => string 'English' (length=7)
      public 'sef' => string 'en-GB' (length=5)
      public 'image' => string 'en' (length=2)
      public 'description' => string '' (length=0)
      public 'metakey' => string '' (length=0)
      public 'metadesc' => string '' (length=0)
      public 'sitename' => string '' (length=0)
      public 'published' => string '1' (length=1)
      public 'access' => string '1' (length=1)
      public 'ordering' => string '0' (length=1)
      public 'active' => boolean true
      public 'link' => string 'index.php?lang=en-GB&amp;Itemid=311' (length=35)

    exit;
*/
}

//exit;

?>
<!-- <div class="mod-languages<?php echo $moduleclass_sfx ?>"> -->
<?php /* if ($headerText) : ?>
	<div class="pretext"><p><?php echo $headerText; ?></p></div>
<?php endif; */ ?>

<?php if ($params->get('dropdown', 1)) : ?>
	<form name="lang" method="post" action="<?php echo htmlspecialchars(JURI::current()); ?>">
	<select class="inputbox" onchange="document.location.replace(this.value);" >
	<?php foreach($list as $language):?>
		<option dir=<?php echo JLanguage::getInstance($language->lang_code)->isRTL() ? '"rtl"' : '"ltr"'?> value="<?php echo $language->link;?>" <?php echo $language->active ? 'selected="selected"' : ''?>>
		<?php echo $language->title_native;?></option>
	<?php endforeach; ?>
	</select>
	</form>
<?php else : ?>

	<?php foreach($list as $language):?>
		<?php if ($params->get('show_active', 0) || !$language->active):?>
			<li id="gcwu-gcnb-lang">
			<a href="<?php echo $language->link;?>">
			<?php if ($params->get('image', 1)):?>
				<?php echo JHtml::_('image', 'mod_languages/'.$language->image.'.gif', $language->title_native, array('title'=>$language->title_native), true);?>
			<?php else : ?>
				<?php echo $params->get('full_name', 1) ? $language->title_native : strtoupper($language->sef);?>
			<?php endif; ?>
			</a>
			</li>
		<?php endif;?>
	<?php endforeach;?>


    <!--
    <?php if($lang->getTag() == 'fr-FR'){ ?>
        <?php if ($params->get('show_active', 0) || !$language->active):?>
            <li id="gcwu-gcnb-lang">
                <a href="?<?php echo $getStr; ?>">
                    <?php if ($params->get('image', 1)):?>
                        <?php echo JHtml::_('image', 'mod_languages/'.$language->image.'.gif', $language->title_native, array('title'=>$language->title_native), true);?>
                    <?php else : ?>
                        <?php echo 'English'?>
                    <?php endif; ?>
                </a>
            </li>
        <?php endif;?>
    <?php }else{ ?>
        <?php if ($params->get('show_active', 0) || !$language->active):?>
            <li id="gcwu-gcnb-lang">
                <a href="?<?php echo $getStr; ?>">
                    <?php if ($params->get('image', 1)):?>
                        <?php echo JHtml::_('image', 'mod_languages/'.$language->image.'.gif', $language->title_native, array('title'=>$language->title_native), true);?>
                    <?php else : ?>
                        <?php echo 'Français'?>
                    <?php endif; ?>
                </a>
            </li>
        <?php endif;?>
    <?php } ?>
    -->

<?php endif; ?>

<?php /*if ($footerText) : ?>
	<div class="posttext"><p><?php echo $footerText; ?></p></div>
<?php endif;*/ ?>

