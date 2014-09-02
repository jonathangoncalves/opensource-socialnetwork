<?php
/**
 * 	OpenSource-SocialNetwork
 *
 * @package   (Informatikon.com).ossn
 * @author    OSSN Core Team <info@opensource-socialnetwork.com>
 * @copyright 2014 iNFORMATIKON TECHNOLOGIES
 * @license   General Public Licence http://opensource-socialnetwork.com/licence 
 * @link      http://www.opensource-socialnetwork.com/licence
 */
?>
<style> body { background:#E9EAED; } </style>
<div class="ossn-layout-newsfeed">
<div class="ossn-inner">
      <div class="coloum-left">
   &nbsp;
   <?php 
   if(ossn_is_hook('search', "left")){
	$searchleft = ossn_call_hook('search', "left", NULL, array());
	echo implode('', $searchleft);
   }
   ?>

      </div>  
      <div class="coloum-middle">
             <?php echo $params['content']; ?>
  
      </div>
      <div class="coloum-right">
           <div style="padding:12px;min-height:300px;"> 
              <div class="ossn-ads">
                 <h4>Sponsers</h4>
                 
                  <div class="ossn-ads-item">
                   <a  class="a-heading" href="#"> My Apple Space</a>
                   <div class="ossn-ads-link"> myapplespace.com</div>
                   <img src="http://www.buddyexpress.net/p/ads/mas.png" />
                   <div class="descript">
                   Launch your space and invite your friends to add contents build your community and administer your space
                   </div>
                 
                 </div>
                 
                 
            <div class="ossn-ads-item">
                 
                   <a  class="a-heading" href="#"> Informatikon Technologies</a>
                   <div class="ossn-ads-link"> myinformatikon.com</div>
                   <img src="http://www.buddyexpress.net/p/mod/Buddyexpress_static/media/informatikon.png" />
                   <div class="descript">
                   We develop professional websites. Our vision is to use the latest web technologies in order to provide you a comprehensive service that enables your business to succeed
                   </div>
                 
                 </div>
                    
                 <div class="ossn-ads-item">
                 
                   <a  class="a-heading" href="#"> TRONgui.com</a>
                   <div class="ossn-ads-link"> trongui.com</div>
                   <img src="https://fbcdn-profile-a.akamaihd.net/hprofile-ak-xpa1/t1.0-1/p160x160/1010101_521706654613222_1022639604_n.jpg" />
                   <div class="descript">
                   The next revolution in website navigation. We make the website disappear and let you interact with the idea.     
                   </div>
                 
                 </div>            

              </div>      
           </div>
      </div>
</div>
</div>