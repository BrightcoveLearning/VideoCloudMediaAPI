<urlset xmlns="http://www.sitemaps.org/schemas/sitemap/0.9" xmlns:video="http://www.google.com/schemas/sitemap-video/1.1">
<!-- basic video site map - for more info and additional optional fields, see http://support.google.com/webmasters/bin/answer.py?hl=en&answer=80472 -->
{foreach $videos as $video}
{strip}
   <url> 
     <loc>http://support.brightcove.com/en/training-videos</loc>
     <video:video>
       <video:thumbnail_loc>{$video->thumbnailURL}</video:thumbnail_loc> 
       <video:title>{$video->name}</video:title>
       <video:description>{$video->shortDescription}</video:description>
       <video:player_loc allow_embed="yes" autoplay="ap=1">{$video->customFields->pageurl}</video:player_loc>
       <video:duration>{$video->length / 1000}</video:duration>
       {foreach $video->tags as $tag}
       <video:tag>{$tag}</video:tag>
       {/foreach}
       <video:category>{$video->customFields->videotopic}</video:category>
       <video:live>no</video:live>
     </video:video> 
   </url>
{/strip}
{/foreach}
</urlset>