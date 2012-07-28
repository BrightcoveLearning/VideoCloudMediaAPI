<?php /* Smarty version Smarty-3.1.11, created on 2012-07-24 15:05:08
         compiled from "smarty/templates/seo_playlist.tpl" */ ?>
<?php /*%%SmartyHeaderCode:6220688074f79a5e0c0a189-35487703%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '48903717d00b093440b273b653d0fd79b4954828' => 
    array (
      0 => 'smarty/templates/seo_playlist.tpl',
      1 => 1343142306,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '6220688074f79a5e0c0a189-35487703',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.11',
  'unifunc' => 'content_4f79a5e0e40b12_88475149',
  'variables' => 
  array (
    'videos' => 0,
    'video' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_4f79a5e0e40b12_88475149')) {function content_4f79a5e0e40b12_88475149($_smarty_tpl) {?><?php echo $_smarty_tpl->getSubTemplate ("header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>


		<h3>SEO Example</h3>
		<table class="player" cellpadding="2" cellspacing="0" border="0">
			<tbody>
				<tr>
					<td valign="top">
						<!-- Start of Brightcove Player -->
				
						<div style="display:none">
						
						</div>
						
						<!--
						By use of this code snippet, I agree to the Brightcove Publisher T and C 
						found at https://accounts.brightcove.com/en/terms-and-conditions/. 
						-->
						
						<script language="JavaScript" type="text/javascript" src="http://admin.brightcove.com/js/BrightcoveExperiences.js"></script>
						<object id="myExperience" class="BrightcoveExperience">
						  <param name="bgcolor" value="#FFFFFF" />
						  <param name="width" value="571" />
						  <param name="height" value="305" />
						  <param name="playerID" value="921267190001" />
						  <param name="playerKey" value="AQ~~,AAAA1oy1bvE~,ALl2ezBj3WG3MLvDx9F9zkV06cNK00ey" />
						  <param name="isVid" value="true" />
						  <param name="isUI" value="true" />
						  <param name="dynamicStreaming" value="true" />
						  <!-- params for Universal Player API -->
						  <param name="includeAPI" value="true" />
						  <param name="templateReadyHandler" value="BCL.onTemplateReady" />
						  
						</object>
						
						<!-- 
						This script tag will cause the Brightcove Players defined above it to be created as soon
						as the line is read by the browser. If you wish to have the player instantiated only after
						the rest of the HTML is processed and the page load is complete, remove the line.
						-->
						<script type="text/javascript">brightcove.createExperiences();</script>
						
						<!-- End of Brightcove Player -->	
					</td>
					<td>
					 <div id="playlist">

<?php  $_smarty_tpl->tpl_vars['video'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['video']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['videos']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['video']->key => $_smarty_tpl->tpl_vars['video']->value){
$_smarty_tpl->tpl_vars['video']->_loop = true;
?>
<div class="playlist"><a onclick="BCL.playVideo(<?php echo $_smarty_tpl->tpl_vars['video']->value->id;?>
)"><img class="thumbnail" height="40" width="75" src="<?php echo $_smarty_tpl->tpl_vars['video']->value->thumbnailURL;?>
"/><div class="description"><span style="font-size:12px;"><?php echo $_smarty_tpl->tpl_vars['video']->value->name;?>
</span><br/><?php echo $_smarty_tpl->tpl_vars['video']->value->shortDescription;?>
</div></a></div>
<?php } ?>
     				</tbody></table>
					</td>
				</tr>
			</tbody>
		</table>
		<div id="playlistCollection"></div>

		<script type="text/javascript">
			// namespace to keep all the "global" vars together
			var BCL = {};
			// Player API scripting
			// event listener for the player being ready
			BCL.onTemplateReady = function (event) {
			  console.log("onTemplateReady");
			  BCL.player = brightcove.api.getExperience("myExperience");
			  // get a reference to the video player
			  BCL.videoPlayer = BCL.player.getModule(brightcove.api.modules.APIModules.VIDEO_PLAYER);
			}
			// play video function
			BCL.playVideo = function(videoID) {
				BCL.videoPlayer.loadVideoByID(videoID);
			}
		</script>

	</body>
</html>
<?php }} ?>