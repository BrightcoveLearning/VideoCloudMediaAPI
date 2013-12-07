{include file="header.tpl"}

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

{foreach $videos as $video}
{strip}
    				<div class="playlist"><a onclick="BCL.playVideo({$video->id})"><img class="thumbnail" height="40" width="75" src="{$video->thumbnailURL}"/><div class="description"><span style="font-size:12px;">{$video->name}</span><br/>{$video->shortDescription}</div></a></div>
{/strip}
{/foreach}
     				</tbody></table>
					</td>
				</tr>
			</tbody>
		</table>
		<div id="playlistCollection"></div>
{literal}
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
{/literal}
	</body>
</html>
