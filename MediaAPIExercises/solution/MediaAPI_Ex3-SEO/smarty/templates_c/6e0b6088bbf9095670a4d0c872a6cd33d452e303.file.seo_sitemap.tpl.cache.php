<?php /* Smarty version Smarty-3.1.11, created on 2012-07-24 15:08:11
         compiled from "smarty/templates/seo_sitemap.tpl" */ ?>
<?php /*%%SmartyHeaderCode:10968844414f79aa4a5a6540-54347251%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '6e0b6088bbf9095670a4d0c872a6cd33d452e303' => 
    array (
      0 => 'smarty/templates/seo_sitemap.tpl',
      1 => 1342694722,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '10968844414f79aa4a5a6540-54347251',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.11',
  'unifunc' => 'content_4f79aa4a656d08_19203680',
  'variables' => 
  array (
    'videos' => 0,
    'video' => 0,
    'tag' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_4f79aa4a656d08_19203680')) {function content_4f79aa4a656d08_19203680($_smarty_tpl) {?><urlset xmlns="http://www.sitemaps.org/schemas/sitemap/0.9" xmlns:video="http://www.google.com/schemas/sitemap-video/1.1">
<!-- basic video site map - for more info and additional optional fields, see http://support.google.com/webmasters/bin/answer.py?hl=en&answer=80472 -->
<?php  $_smarty_tpl->tpl_vars['video'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['video']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['videos']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['video']->key => $_smarty_tpl->tpl_vars['video']->value){
$_smarty_tpl->tpl_vars['video']->_loop = true;
?>
<url><loc>http://support.brightcove.com/en/training-videos</loc><video:video><video:thumbnail_loc><?php echo $_smarty_tpl->tpl_vars['video']->value->thumbnailURL;?>
</video:thumbnail_loc><video:title><?php echo $_smarty_tpl->tpl_vars['video']->value->name;?>
</video:title><video:description><?php echo $_smarty_tpl->tpl_vars['video']->value->shortDescription;?>
</video:description><video:player_loc allow_embed="yes" autoplay="ap=1"><?php echo $_smarty_tpl->tpl_vars['video']->value->customFields->pageurl;?>
</video:player_loc><video:duration><?php echo $_smarty_tpl->tpl_vars['video']->value->length/1000;?>
</video:duration><?php  $_smarty_tpl->tpl_vars['tag'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['tag']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['video']->value->tags; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['tag']->key => $_smarty_tpl->tpl_vars['tag']->value){
$_smarty_tpl->tpl_vars['tag']->_loop = true;
?><video:tag><?php echo $_smarty_tpl->tpl_vars['tag']->value;?>
</video:tag><?php } ?><video:category><?php echo $_smarty_tpl->tpl_vars['video']->value->customFields->videotopic;?>
</video:category><video:live>no</video:live></video:video></url>
<?php } ?>
</urlset><?php }} ?>