@charset "UTF-8";

/* --- EXTRA.css --- */

#logo {
	text-align:left !important;
}
#logo_small {
	margin-left:-8px !important;
	margin-right:-4px !important;
}
.navTabs .navTab.Home {
	display:none !important;
}
.sidePanel__navTabs .navTab.Home {
	display:none !important;
}
/*
#searchBar {
	margin-right:-8px !important;
}
#navigation {
	margin-left:-4px !important;
}
*/
#copyright {
	color: #FFFFFF !important;
}
#legal a:link, #legal a:visited {
	color: #FFFFFF !important;
}

/*@media (max-width: 650px) { .nodeDescription { display: block !important; } }*/

@media (max-width: 650px) { #pageDescription { display: block !important; } }

/*
.message .messageContent .messageText img {
	width: 75%;
}
*/

/* User Banners */
.userBanner {
	background: none;
	padding: 1px 4px;
	text-align: left;
}
.messageUserBlock .userBanner {
	margin-top: 4px;
	margin-bottom: 4px !important;
	margin-right: 0px !important;
	margin-left: 0px !important;
	padding: 1px 2px;
}
.messageUserBlock .userBanner:last-child {
	margin-bottom: 0px !important;
}
.userBanner.wrapped span {
	height: 0px;
}
.xenOverlay.memberCard .cardUserBanner {
	margin: 4px 0;
}
.userBanner.bannerStaff {
	background-color: #000;
	border-color: #000;
	color: #FFF;
}
.userBanner.Moderator {
	background-color: #158B50;
	border-color: #158B50;
	color: #FFF;
}
.userBanner.Fest_Crew {
	background-color: #8B1550;
	border-color: #8B1550;
	color: #FFF;
}
.userBanner.Verified_Industry {
	background-color: #15508B;
	border-color: #15508B;
	color: #FFF;
}
.userBanner.Verified_Trader {
	background-color: #156D8B;
	border-color: #156D8B;
	color: #FFF;
}
.userBanner.Society {
	background-color: #CC8A00;
	border-color: #CC8A00;
	color: #FFF;
}
/* END User Banners */

/* Prefixes */

.prefix.prefixMyGray       { color: white; background-color: #888; border-color: #888; }

/* END Prefixes */

/* Remove Spoiler */
.redactor_dropdown a.spoiler { display: none; }
.redactor_dropdown a.code { display: none; }
.redactor_toolbar li a.redactor_btn_alignment { display: none; }
.redactor_toolbar li a.redactor_btn_fontfamily { display: none; }
.redactor_toolbar li a.redactor_btn_fontcolor { display: none; }
.redactor_toolbar li a.redactor_btn_fontsize { display: none; }
.redactor_toolbar li a.redactor_btn_media { display: none; }
.redactor_btn_container_alignment { display: none; }
.redactor_btn_container_fontfamily { display: none; }
.redactor_btn_container_fontcolor { display: none; }
.redactor_btn_container_fontsize { display: none; }
.redactor_btn_container_font { display: none; }
.redactor_btn_container_media { display: none; }
/* END Remove Spoiler */

/* Member card stats and last activity in two columns */
.xenOverlay.memberCard .userInfo .userStats {
	float: left;
	width: 49% !important;
	border-right: 1px solid #556655 !important;
}
.xenOverlay.memberCard .userInfo .userStats dd {
	float: right !important;
}
.xenOverlay.memberCard .userInfo .userStats dt  {
	float: left;
	clear: both;
}
.xenOverlay.memberCard .lastActivity {
	float: right;
	width: 49% !important;
	margin-top: 0px !important;
	padding-top: 0px !important;
	border-top: 0 !important;
}
.xenOverlay.memberCard .lastActivity.pairsInline dt{
	float: left;
	clear: both;
}
.xenOverlay.memberCard .lastActivity.pairsInline dd{
	float: left;
	clear: both;
}
.xenOverlay.memberCard .lastActivity.pairsInline dd abbr{
	display:block;
}
/* END Member card */

/* ADVALLY */

/* Ad Container Styling
 * Adjust the container style to suit your site.
 */
 .ad-container {
  background: #f7f7f7;
  /* Do not change these: */
  position: relative;
  display: flex;
  align-items: center;
  align-content: center;
  justify-content: center;
  z-index: 0;
}
.ad-container > div {
  /* Do not change these: */
  z-index: 1;
}
.ad-container:before {
  content: "Advertisement";
  font-size: 11px;
  color: #cacaca;
  text-transform: uppercase; 
  letter-spacing: 0.25em;
  /* Do not change these: */
  display: block;
  text-align: center;
  position: absolute;
}

/* Predefined Ad Sizes
 * You shouldn't have to change these except to remove missing sizes or remove unused sizes. 
 */
/* Widths */
.ad-w-160 {
  width: 100%;
  max-width: 160px;
}
.ad-w-300 {
  width: 100%;
  max-width: 300px;
}
.ad-w-320 {
  width: 100%;
  max-width: 320px;
}
.ad-w-728 {
  width: 100%;
  max-width: 728px;
}
.ad-w-970 {
  width: 100%;
  max-width: 970px;
}
/* Heights */
.ad-h-90 {
  min-height: 90px;
}
.ad-h-250 {
  min-height: 250px;
}
.ad-h-600 {
  min-height: 600px;
}

/* Predefined Mobile size 
 * Create these as required based on your site's responsive behaviour. 
 * Adjust max-width to the screen size where your sites main container is too narrow for 728px creatives.
 * I tested your site, 780px seemed to be the threshold, hence the classes are named "mobile780-ABC"
 */
@media only screen and (max-width: 1128px) {
  /* Converts the given container to 300x250 at this screen width */
  .mobile1128-300x250 {
    width: 100%;
    max-width: 300px;
    min-height: 250px;
  }
}
@media only screen and (max-width: 1053px) {
  /* Converts the given container to 728x90 at this screen width */
  .tablet1053-728x90 {
    width: 100%;
    max-width: 728px;
    min-height: 90px;
  }
}
@media only screen and (max-width: 780px) {
  /* Converts the given container to 300x250 at this screen width */
  .mobile780-300x250 {
    width: 100%;
    max-width: 300px;
    min-height: 250px;
  }
  .mobile780-320x50 {
    width: 100%;
    max-width: 320px;
    min-height: 50px;
  }
}

/* ADVALLY */

/* CSS returned from cache. */