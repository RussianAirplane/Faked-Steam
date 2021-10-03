<?php 
	include_once "config.php";
?>


<!DOCTYPE html>
<html class=" responsive" lang="en">
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
			<meta name="viewport" content="width=device-width,initial-scale=1">
		<meta name="theme-color" content="#171a21">
		<title>Steam Community :: <?php echo $my_username ?> :: Item Inventory</title>
	<link rel="shortcut icon" href="https://steamcommunity.com/favicon.ico" type="image/x-icon">

	
	
	<link href="https://community.akamai.steamstatic.com/public/shared/css/motiva_sans.css?v=-DH0xTYpnVe2&amp;l=english" rel="stylesheet" type="text/css" >
    <link href="https://community.akamai.steamstatic.com/public/shared/css/buttons.css?v=n-eRNszNIRMH&amp;l=english" rel="stylesheet" type="text/css" >
    <link href="https://community.akamai.steamstatic.com/public/shared/css/shared_global.css?v=KIO0XVxEjJG8&amp;l=english" rel="stylesheet" type="text/css" >
    <link href="https://community.akamai.steamstatic.com/public/css/globalv2.css?v=yNT7WtfAb_DV&amp;l=english" rel="stylesheet" type="text/css" >
    <link href="https://community.akamai.steamstatic.com/public/css/skin_1/economy.css?v=09AGT_Kww_HY&amp;l=english" rel="stylesheet" type="text/css" >
    <link href="https://community.akamai.steamstatic.com/public/css/skin_1/economy_inventory.css?v=R7sxH45Dwile&amp;l=english" rel="stylesheet" type="text/css" >
    <link href="https://community.akamai.steamstatic.com/public/css/skin_1/profilev2.css?v=kkaiAu4K3f0-&amp;l=english" rel="stylesheet" type="text/css" >
    <link href="https://community.akamai.steamstatic.com/public/shared/css/shared_responsive.css?v=Yt7tFpRVv84m&amp;l=english" rel="stylesheet" type="text/css" >
    <link href="https://community.akamai.steamstatic.com/public/css/skin_1/header.css?v=g7VmRhGIDEiu&amp;l=english" rel="stylesheet" type="text/css" >
            <script>
				(function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
						(i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
					m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
				})(window,document,'script','//www.google-analytics.com/analytics.js','ga');

				ga('create', 'UA-33779068-1', 'auto', {
					'sampleRate': 0.4				});
				ga('set', 'dimension1', true );
				ga('set', 'dimension2', 'External' );
				ga('set', 'dimension3', 'profiles' );
				ga('set', 'dimension4', "profiles\/inventory" );
				ga('send', 'pageview' );

			</script>
			<script type="text/javascript">
	var __PrototypePreserve=[];
	__PrototypePreserve[0] = Array.from;
	__PrototypePreserve[1] = Function.prototype.bind;
</script>
<script type="text/javascript" src="https://community.akamai.steamstatic.com/public/javascript/prototype-1.7.js?v=.55t44gwuwgvw" ></script>
<script type="text/javascript">
	Array.from = __PrototypePreserve[0] || Array.from;
	Function.prototype.bind = __PrototypePreserve[1] || Function.prototype.bind;
</script>
<script type="text/javascript" src="https://community.akamai.steamstatic.com/public/javascript/global.js?v=BMW1H3gPMnfE&amp;l=english" ></script>
<script type="text/javascript" src="https://community.akamai.steamstatic.com/public/javascript/jquery-1.11.1.min.js?v=.isFTSRckeNhC" ></script>
<script type="text/javascript" src="https://community.akamai.steamstatic.com/public/shared/javascript/tooltip.js?v=.9Z1XDV02xrml" ></script>
<script type="text/javascript" src="https://community.akamai.steamstatic.com/public/shared/javascript/shared_global.js?v=BL8X79JqjD-V&amp;l=english" ></script>
<script type="text/javascript">Object.seal && [ Object, Array, String, Number ].map( function( builtin ) { Object.seal( builtin.prototype ); } );</script><script type="text/javascript">$J = jQuery.noConflict();
if ( typeof JSON != 'object' || !JSON.stringify || !JSON.parse ) { document.write( "<scr" + "ipt type=\"text\/javascript\" src=\"https:\/\/community.akamai.steamstatic.com\/public\/javascript\/json2.js?v=pmScf4470EZP&amp;l=english\" ><\/script>\n" ); };
</script><script type="text/javascript">VALVE_PUBLIC_PATH = "https:\/\/community.akamai.steamstatic.com\/public\/";</script>
		<script type="text/javascript">
			document.addEventListener('DOMContentLoaded', function(event) {
				SetupTooltips( { tooltipCSSClass: 'community_tooltip'} );
		});
		</script><meta name="twitter:card" content="summary">
			
	<meta name="twitter:site" content="@steam" />

						<meta property="og:title" content="Steam Community :: <?php echo $my_username ?> :: Item Inventory">
					<meta property="twitter:title" content="Steam Community :: <?php echo $my_username ?> :: Item Inventory">
					<meta property="og:type" content="website">
					<meta property="fb:app_id" content="105386699540688">
			
	
			<link rel="image_src" href="<?php echo $my_pfp_url ?>">
		<meta property="og:image" content="<?php echo $my_pfp_url ?>">
		<meta name="twitter:image" content="<?php echo $my_pfp_url ?>" />
		
	
	
	
	</head>
<body class="flat_page migrated_profile_page inventory_page responsive_page">

<div class="responsive_page_frame with_header">
						<div class="responsive_page_menu_ctn mainmenu">
				<div class="responsive_page_menu"  id="responsive_page_menu">
										<div class="mainmenu_contents">
						<div class="mainmenu_contents_items">
															<!-- profile area -->
								<div class="responsive_menu_user_area">
									<div class="responsive_menu_user_persona persona offline">
										<div class="playerAvatar offline">
											<a href="https://steamcommunity.com/id/lightblues/">
												<img src="<?php echo $my_pfp_url ?>" srcset="<?php echo $my_pfp_url ?> 1x, https://cdn.akamai.steamstatic.com/steamcommunity/public/images/avatars/da/dae56ad24974ec2f8bf62af19ae8f941ea02202a_medium.jpg 2x">											</a>
										</div>
										<a href="https://steamcommunity.com/id/lightblues/" data-miniprofile="1018196768"><?php echo $my_username ?></a>									</div>

																												<div class="responsive_menu_cartwallet_area persona offline">
																																		<div class="responsive_menu_user_wallet">
													<a href="https://store.steampowered.com/account/">
														Wallet <b>(1,62€)</b>													</a>
												</div>
																					</div>
																	</div>

																									<div class="menuitem notifications_item">
										Notifications										<div class="notification_count_total_ctn no_notifications">
											<span class="notification_envelope"></span>
											<span class="notification_count">0</span>
										</div>
									</div>
									<div class="notification_submenu" style="display: none;" data-submenuid="notifications">
										
									<a data-notification-type="4" class="popup_menu_item notification_ctn header_notification_comments " href="https://steamcommunity.com/id/lightblues/commentnotifications/">
				<span class="notification_icon"></span>New comments <span class="notification_count">0</span>			</a>
			<div class="header_notification_dropdown_seperator"></div>
						<a data-notification-type="5" class="popup_menu_item notification_ctn header_notification_items " href="https://steamcommunity.com/id/lightblues/inventory/">
				<span class="notification_icon"></span>New items <span class="notification_count">0</span>			</a>
			<div class="header_notification_dropdown_seperator"></div>
								<a data-notification-type="6" class="popup_menu_item notification_ctn header_notification_invites " href="https://steamcommunity.com/id/lightblues/home/invites/">
				<span class="notification_icon"></span>New invites <span class="notification_count">0</span>			</a>

					<div class="header_notification_dropdown_seperator"></div>
						<a data-notification-type="8" class="popup_menu_item notification_ctn header_notification_gifts " href="https://steamcommunity.com/id/lightblues/inventory/#pending_gifts">
				<span class="notification_icon"></span>New gifts <span class="notification_count">0</span>			</a>
			<div class="header_notification_dropdown_seperator"></div>
						<a data-notification-type="9" class="popup_menu_item notification_ctn header_notification_offlinemessages " href="javascript:void(0)" onclick="LaunchWebChat(); HideMenu( 'header_notification_link', 'header_notification_dropdown' ); return false;">
				<span class="notification_icon"></span>New messages <span class="notification_count">0</span>			</a>
								<a data-notification-type="1" class="popup_menu_item notification_ctn hide_when_empty header_notification_tradeoffers " href="https://steamcommunity.com/id/lightblues/tradeoffers/">
						<div class="header_notification_dropdown_seperator"></div>
						<span class="notification_icon"></span>New trade offers <span class="notification_count">0</span>					</a>
								<a data-notification-type="2" class="popup_menu_item notification_ctn hide_when_empty header_notification_asyncgame " href="https://steamcommunity.com/id/lightblues/gamenotifications">
						<div class="header_notification_dropdown_seperator"></div>
						<span class="notification_icon"></span>New turns waiting <span class="notification_count">0</span>					</a>
								<a data-notification-type="3" class="popup_menu_item notification_ctn hide_when_empty header_notification_moderatormessage " href="https://steamcommunity.com/id/lightblues/moderatormessages">
						<div class="header_notification_dropdown_seperator"></div>
						<span class="notification_icon"></span>New community messages <span class="notification_count">0</span>					</a>
								<a data-notification-type="10" class="popup_menu_item notification_ctn hide_when_empty header_notification_helprequestreply " href="https://help.steampowered.com/en/wizard/HelpRequests">
						<div class="header_notification_dropdown_seperator"></div>
						<span class="notification_icon"></span>Steam Support replies <span class="notification_count">0</span>					</a>
															</div>
									<a class="menuitem supernav" href="https://store.steampowered.com/" data-tooltip-type="selector" data-tooltip-content=".submenu_store">
		Store	</a>
	<div class="submenu_store" style="display: none;" data-submenuid="store">
		<a class="submenuitem" href="https://store.steampowered.com/">Home</a>
					<a class="submenuitem" href="https://store.steampowered.com/explore/">Discovery Queue</a>
				<a class="submenuitem" href="https://steamcommunity.com/my/wishlist/">Wishlist</a>
		<a class="submenuitem" href="https://store.steampowered.com/points/shop/">Points Shop</a>	
       	<a class="submenuitem" href="https://store.steampowered.com/news/">News</a>
					<a class="submenuitem" href="https://store.steampowered.com/stats/">Stats</a>
					</div>


			<a class="menuitem supernav" style="display: block" href="https://steamcommunity.com/" data-tooltip-type="selector" data-tooltip-content=".submenu_community">
			Community		</a>
		<div class="submenu_community" style="display: none;" data-submenuid="community">
			<a class="submenuitem" href="https://steamcommunity.com/">Home</a>
			<a class="submenuitem" href="https://steamcommunity.com/discussions/">Discussions</a>
			<a class="submenuitem" href="https://steamcommunity.com/workshop/">Workshop</a>
			<a class="submenuitem" href="https://steamcommunity.com/market/">Market</a>
			<a class="submenuitem" href="https://steamcommunity.com/?subsection=broadcasts">Broadcasts</a>
											</div>
		

			<a class="menuitem supernav username persona_name_text_content" href="https://steamcommunity.com/id/lightblues/home/" data-tooltip-type="selector" data-tooltip-content=".submenu_username">
			You &amp; Friends		</a>
		<div class="submenu_username" style="display: none;" data-submenuid="username">
			<a class="submenuitem" href="https://steamcommunity.com/id/lightblues/home/">Activity</a>
			<a class="submenuitem" href="https://steamcommunity.com/id/lightblues/">Profile</a>
			<a class="submenuitem" href="https://steamcommunity.com/id/lightblues/friends/">Friends</a>
			<a class="submenuitem" href="https://steamcommunity.com/id/lightblues/groups/">Groups</a>			<a class="submenuitem" href="https://steamcommunity.com/id/lightblues/screenshots/">Content</a>			<a class="submenuitem" href="https://steamcommunity.com/id/lightblues/badges/">Badges</a>			<a class="submenuitem" href="https://steamcommunity.com/id/lightblues/inventory/">Inventory</a>		</div>
	
	
	<a class="menuitem" href="https://help.steampowered.com/en/">
		Support	</a>

							<div class="minor_menu_items">
																	<a class="menuitem" href="https://store.steampowered.com/account/">Account details</a>
									<a class="menuitem" href="https://store.steampowered.com/account/preferences">Preferences</a>
																								<div class="menuitem change_language_action">
									Change language								</div>
																									<div class="menuitem" onclick="Logout();">Change User</div>
																									<div class="menuitem" onclick="Responsive_RequestDesktopView();">
										View desktop website									</div>
															</div>
						</div>
						<div class="mainmenu_footer_spacer  "></div>
						<div class="mainmenu_footer">
															<div class="mainmenu_footer_logo"><img src="https://community.akamai.steamstatic.com/public/shared/images/responsive/logo_valve_footer.png"></div>
								© Valve Corporation. All rights reserved. All trademarks are property of their respective owners in the US and other countries.								<span class="mainmenu_valve_links">
									<a href="https://store.steampowered.com/privacy_agreement/" target="_blank">#footer_privacy_policy</a>
									&nbsp;| &nbsp;<a href="http://www.valvesoftware.com/legal.htm" target="_blank">#footer_legal</a>
									&nbsp;| &nbsp;<a href="https://store.steampowered.com/subscriber_agreement/" target="_blank">#footer_ssa</a>
									&nbsp;| &nbsp;<a href="https://store.steampowered.com/steam_refunds/" target="_blank">#footer_refunds</a>
								</span>
													</div>
					</div>
									</div>
			</div>
		
		<div class="responsive_local_menu_tab">

		</div>

		<div class="responsive_page_menu_ctn localmenu">
			<div class="responsive_page_menu"  id="responsive_page_local_menu">
				<div class="localmenu_content">
				</div>
			</div>
		</div>



					<div class="responsive_header">
				<div class="responsive_header_content">
					<div id="responsive_menu_logo">
						<img src="https://community.akamai.steamstatic.com/public/shared/images/responsive/header_menu_hamburger.png" height="100%">
													<div class="responsive_header_notification_badge_ctn">
								<div class="responsive_header_notification_badge notification_count_total_ctn no_notifications">
									<span class="notification_count">0</span>
								</div>
							</div>
											</div>
					<div class="responsive_header_logo">
						<a href="https://store.steampowered.com/">
															<img src="https://community.akamai.steamstatic.com/public/shared/images/responsive/header_logo.png" height="36" border="0" alt="STEAM">
													</a>
					</div>					
				</div>
			</div>
		
		<div class="responsive_page_content_overlay">

		</div>

		<div class="responsive_fixonscroll_ctn nonresponsive_hidden ">
		</div>
	
	<div class="responsive_page_content">

		<div id="global_header" data-panel="{&quot;flow-children&quot;:&quot;row&quot;}">
	<div class="content">
		<div class="logo">
			<span id="logo_holder">
									<a href="https://store.steampowered.com/">
						<img src="https://community.akamai.steamstatic.com/public/shared/images/header/logo_steam.svg?t=962016" width="176" height="44">
					</a>
							</span>
		</div>

			<div class="supernav_container">
	<a class="menuitem supernav" href="https://store.steampowered.com/" data-tooltip-type="selector" data-tooltip-content=".submenu_store">
		STORE	</a>
	<div class="submenu_store" style="display: none;" data-submenuid="store">
		<a class="submenuitem" href="https://store.steampowered.com/">Home</a>
					<a class="submenuitem" href="https://store.steampowered.com/explore/">Discovery Queue</a>
				<a class="submenuitem" href="https://steamcommunity.com/my/wishlist/">Wishlist</a>
		<a class="submenuitem" href="https://store.steampowered.com/points/shop/">Points Shop</a>	
       	<a class="submenuitem" href="https://store.steampowered.com/news/">News</a>
					<a class="submenuitem" href="https://store.steampowered.com/stats/">Stats</a>
							<a class="submenuitem" href="https://store.steampowered.com/about/">ABOUT</a>
			</div>


			<a class="menuitem supernav" style="display: block" href="https://steamcommunity.com/" data-tooltip-type="selector" data-tooltip-content=".submenu_community">
			COMMUNITY		</a>
		<div class="submenu_community" style="display: none;" data-submenuid="community">
			<a class="submenuitem" href="https://steamcommunity.com/">Home</a>
			<a class="submenuitem" href="https://steamcommunity.com/discussions/">Discussions</a>
			<a class="submenuitem" href="https://steamcommunity.com/workshop/">Workshop</a>
			<a class="submenuitem" href="https://steamcommunity.com/market/">Market</a>
			<a class="submenuitem" href="https://steamcommunity.com/?subsection=broadcasts">Broadcasts</a>
											</div>
		

			<a class="menuitem supernav username persona_name_text_content" href="https://steamcommunity.com/id/lightblues/home/" data-tooltip-type="selector" data-tooltip-content=".submenu_username">
			<?php echo $my_username ?>		</a>
		<div class="submenu_username" style="display: none;" data-submenuid="username">
			<a class="submenuitem" href="https://steamcommunity.com/id/lightblues/home/">Activity</a>
			<a class="submenuitem" href="https://steamcommunity.com/id/lightblues/">Profile</a>
			<a class="submenuitem" href="https://steamcommunity.com/id/lightblues/friends/">Friends</a>
			<a class="submenuitem" href="https://steamcommunity.com/id/lightblues/groups/">Groups</a>			<a class="submenuitem" href="https://steamcommunity.com/id/lightblues/screenshots/">Content</a>			<a class="submenuitem" href="https://steamcommunity.com/id/lightblues/badges/">Badges</a>			<a class="submenuitem" href="https://steamcommunity.com/id/lightblues/inventory/">Inventory</a>		</div>
	
						<a class="menuitem" href="https://steamcommunity.com/chat/">
				Chat			</a>
			
	<a class="menuitem" href="https://help.steampowered.com/en/">
		SUPPORT	</a>
	</div>
	<script type="text/javascript">
		jQuery(function($) {
			$('#global_header .supernav').v_tooltip({'location':'bottom', 'destroyWhenDone': false, 'tooltipClass': 'supernav_content', 'offsetY':-4, 'offsetX': 1, 'horizontalSnap': 4, 'tooltipParent': '#global_header .supernav_container', 'correctForScreenSize': false});
		});
	</script>

		<div id="global_actions">
			<div id="global_action_menu">
									<div class="header_installsteam_btn header_installsteam_btn_gray">

						<a class="header_installsteam_btn_content" href="https://store.steampowered.com/about/">
							Install Steam						</a>
					</div>
				
				
										<!-- notification inbox area -->
																								<div id="header_notification_area">
									<script type="text/javascript">$J(EnableNotificationCountPolling);</script>
		<div id="header_notification_link" class="header_notification_btn global_header_toggle_button notification_count_total_ctn no_notifications" onclick="ShowMenu( this, 'header_notification_dropdown', 'right' );">
			<span class="notification_count">0</span>
			<span class="header_notification_envelope">
				<img src="https://community.akamai.steamstatic.com/public/shared/images/responsive/header_menu_notifications.png" width="11" height="8">
			</span>
		</div>
	
			<div class="popup_block_new" id="header_notification_dropdown" style="display: none;">
			<div class="popup_body popup_menu">
									<a data-notification-type="4" class="popup_menu_item notification_ctn header_notification_comments " href="https://steamcommunity.com/id/lightblues/commentnotifications/">
				<span class="notification_icon"></span><span class="notification_count_string singular" style="display: none;">1 new comment</span><span class="notification_count_string plural" style=""><span class="notification_count">0</span> new comments</span>			</a>
			<div class="header_notification_dropdown_seperator"></div>
						<a data-notification-type="5" class="popup_menu_item notification_ctn header_notification_items " href="https://steamcommunity.com/id/lightblues/inventory/">
				<span class="notification_icon"></span><span class="notification_count_string singular" style="display: none;">1 new item in your inventory</span><span class="notification_count_string plural" style=""><span class="notification_count">0</span> new items in your inventory</span>			</a>
			<div class="header_notification_dropdown_seperator"></div>
								<a data-notification-type="6" class="popup_menu_item notification_ctn header_notification_invites " href="https://steamcommunity.com/id/lightblues/home/invites/">
				<span class="notification_icon"></span><span class="notification_count_string singular" style="display: none;">1 new invite</span><span class="notification_count_string plural" style=""><span class="notification_count">0</span> new invites</span>			</a>

					<div class="header_notification_dropdown_seperator"></div>
						<a data-notification-type="8" class="popup_menu_item notification_ctn header_notification_gifts " href="https://steamcommunity.com/id/lightblues/inventory/#pending_gifts">
				<span class="notification_icon"></span><span class="notification_count_string singular" style="display: none;">1 new gift</span><span class="notification_count_string plural" style=""><span class="notification_count">0</span> new gifts</span>			</a>
			<div class="header_notification_dropdown_seperator"></div>
						<a data-notification-type="9" class="popup_menu_item notification_ctn header_notification_offlinemessages " href="javascript:void(0)" onclick="LaunchWebChat(); HideMenu( 'header_notification_link', 'header_notification_dropdown' ); return false;">
				<span class="notification_icon"></span><span class="notification_count_string singular" style="display: none;">1 unread chat message</span><span class="notification_count_string plural" style=""><span class="notification_count">0</span> unread chat messages</span>			</a>
								<a data-notification-type="1" class="popup_menu_item notification_ctn hide_when_empty header_notification_tradeoffers " href="https://steamcommunity.com/id/lightblues/tradeoffers/">
						<div class="header_notification_dropdown_seperator"></div>
						<span class="notification_icon"></span><span class="notification_count_string singular" style="display: none;">1 new trade notification</span><span class="notification_count_string plural" style=""><span class="notification_count">0</span> new trade notifications</span>					</a>
								<a data-notification-type="2" class="popup_menu_item notification_ctn hide_when_empty header_notification_asyncgame " href="https://steamcommunity.com/id/lightblues/gamenotifications">
						<div class="header_notification_dropdown_seperator"></div>
						<span class="notification_icon"></span><span class="notification_count_string singular" style="display: none;">1 turn waiting</span><span class="notification_count_string plural" style=""><span class="notification_count">0</span> new turns waiting</span>					</a>
								<a data-notification-type="3" class="popup_menu_item notification_ctn hide_when_empty header_notification_moderatormessage " href="https://steamcommunity.com/id/lightblues/moderatormessages">
						<div class="header_notification_dropdown_seperator"></div>
						<span class="notification_icon"></span><span class="notification_count_string singular" style="display: none;">1 community message</span><span class="notification_count_string plural" style=""><span class="notification_count">0</span> community messages</span>					</a>
								<a data-notification-type="10" class="popup_menu_item notification_ctn hide_when_empty header_notification_helprequestreply " href="https://help.steampowered.com/en/wizard/HelpRequests">
						<div class="header_notification_dropdown_seperator"></div>
						<span class="notification_icon"></span><span class="notification_count_string singular" style="display: none;">1 reply from Steam Support</span><span class="notification_count_string plural" style=""><span class="notification_count">0</span> replies from Steam Support</span>					</a>
									</div>
		</div>
							</div>
					<span class="pulldown global_action_link persona_name_text_content" id="account_pulldown" onclick="ShowMenu( this, 'account_dropdown', 'right', 'bottom', true );">
						<?php echo $my_username ?>					</span>
					<div class="popup_block_new" id="account_dropdown" style="display: none;">
						<div class="popup_body popup_menu">
															<a class="popup_menu_item" href="https://steamcommunity.com/id/lightblues/">View profile</a>
								<a class="popup_menu_item" href="https://store.steampowered.com/account/">Account details</a>
																						<a class="popup_menu_item" href="javascript:Logout();">Logout: <span class="persona online"><?php echo $my_username ?></span></a>
																						<a class="popup_menu_item" href="https://store.steampowered.com/account/preferences/">Preferences</a>
							
															<span class="popup_menu_item" id="account_language_pulldown">Change language</span>
								<div class="popup_block_new" id="language_dropdown" style="display: none;">
									<div class="popup_body popup_menu">
																																													<a class="popup_menu_item tight" href="?l=schinese" onclick="ChangeLanguage( 'schinese' ); return false;">简体中文 (Simplified Chinese)</a>
																																			<a class="popup_menu_item tight" href="?l=tchinese" onclick="ChangeLanguage( 'tchinese' ); return false;">繁體中文 (Traditional Chinese)</a>
																																			<a class="popup_menu_item tight" href="?l=japanese" onclick="ChangeLanguage( 'japanese' ); return false;">日本語 (Japanese)</a>
																																			<a class="popup_menu_item tight" href="?l=koreana" onclick="ChangeLanguage( 'koreana' ); return false;">한국어 (Korean)</a>
																																			<a class="popup_menu_item tight" href="?l=thai" onclick="ChangeLanguage( 'thai' ); return false;">ไทย (Thai)</a>
																																			<a class="popup_menu_item tight" href="?l=bulgarian" onclick="ChangeLanguage( 'bulgarian' ); return false;">Български (Bulgarian)</a>
																																			<a class="popup_menu_item tight" href="?l=czech" onclick="ChangeLanguage( 'czech' ); return false;">Čeština (Czech)</a>
																																			<a class="popup_menu_item tight" href="?l=danish" onclick="ChangeLanguage( 'danish' ); return false;">Dansk (Danish)</a>
																																			<a class="popup_menu_item tight" href="?l=german" onclick="ChangeLanguage( 'german' ); return false;">Deutsch (German)</a>
																																			<a class="popup_menu_item tight" href="?l=english" onclick="ChangeLanguage( 'english' ); return false;">English</a>
																																			<a class="popup_menu_item tight" href="?l=spanish" onclick="ChangeLanguage( 'spanish' ); return false;">Español - España (Spanish - Spain)</a>
																																			<a class="popup_menu_item tight" href="?l=latam" onclick="ChangeLanguage( 'latam' ); return false;">Español - Latinoamérica (Spanish - Latin America)</a>
																																			<a class="popup_menu_item tight" href="?l=greek" onclick="ChangeLanguage( 'greek' ); return false;">Ελληνικά (Greek)</a>
																																			<a class="popup_menu_item tight" href="?l=french" onclick="ChangeLanguage( 'french' ); return false;">Français (French)</a>
																																			<a class="popup_menu_item tight" href="?l=italian" onclick="ChangeLanguage( 'italian' ); return false;">Italiano (Italian)</a>
																																			<a class="popup_menu_item tight" href="?l=hungarian" onclick="ChangeLanguage( 'hungarian' ); return false;">Magyar (Hungarian)</a>
																																			<a class="popup_menu_item tight" href="?l=dutch" onclick="ChangeLanguage( 'dutch' ); return false;">Nederlands (Dutch)</a>
																																			<a class="popup_menu_item tight" href="?l=norwegian" onclick="ChangeLanguage( 'norwegian' ); return false;">Norsk (Norwegian)</a>
																																			<a class="popup_menu_item tight" href="?l=polish" onclick="ChangeLanguage( 'polish' ); return false;">Polski (Polish)</a>
																																			<a class="popup_menu_item tight" href="?l=portuguese" onclick="ChangeLanguage( 'portuguese' ); return false;">Português (Portuguese)</a>
																																			<a class="popup_menu_item tight" href="?l=brazilian" onclick="ChangeLanguage( 'brazilian' ); return false;">Português - Brasil (Portuguese - Brazil)</a>
																																			<a class="popup_menu_item tight" href="?l=romanian" onclick="ChangeLanguage( 'romanian' ); return false;">Română (Romanian)</a>
																																			<a class="popup_menu_item tight" href="?l=russian" onclick="ChangeLanguage( 'russian' ); return false;">Русский (Russian)</a>
																																			<a class="popup_menu_item tight" href="?l=finnish" onclick="ChangeLanguage( 'finnish' ); return false;">Suomi (Finnish)</a>
																																			<a class="popup_menu_item tight" href="?l=swedish" onclick="ChangeLanguage( 'swedish' ); return false;">Svenska (Swedish)</a>
																																			<a class="popup_menu_item tight" href="?l=turkish" onclick="ChangeLanguage( 'turkish' ); return false;">Türkçe (Turkish)</a>
																																			<a class="popup_menu_item tight" href="?l=vietnamese" onclick="ChangeLanguage( 'vietnamese' ); return false;">Tiếng Việt (Vietnamese)</a>
																																			<a class="popup_menu_item tight" href="?l=ukrainian" onclick="ChangeLanguage( 'ukrainian' ); return false;">Українська (Ukrainian)</a>
																															<a class="popup_menu_item tight" href="http://translation.steampowered.com" target="_blank">Help us translate Steam</a>
									</div>
								</div>
													</div>
					</div>
					<script type="text/javascript">
						RegisterFlyout( 'account_language_pulldown', 'language_dropdown', 'leftsubmenu', 'bottomsubmenu', true );
					</script>
											<div id="header_wallet_ctn">
							<a class="global_action_link" id="header_wallet_balance" href="https://store.steampowered.com/account/store_transactions/">1,62€</a>
						</div>
												</div>
							<a href="https://steamcommunity.com/id/lightblues/" class="user_avatar playerAvatar offline">
					<img src="<?php echo $my_pfp_url ?>">
				</a>
					</div>
			</div>
</div>
<script type="text/javascript">
	g_sessionID = "3b4cb57f6a2e8f570313001c";
	g_steamID = "76561198978462496";
	g_strLanguage = "english";
	g_SNR = '2_100300_inventory_';
	g_bAllowAppImpressions = true
		g_CommunityPreferences = {"hide_adult_content_violence":0,"hide_adult_content_sex":0,"parenthesize_nicknames":0,"text_filter_setting":3,"text_filter_ignore_friends":1,"text_filter_words_revision":0,"timestamp_updated":1602889404};
	
	

	// We always want to have the timezone cookie set for PHP to use
	setTimezoneCookies();

	$J( function() {

		InitMiniprofileHovers();
		InitEmoticonHovers();
		ApplyAdultContentPreferences();
	});

	$J( function() { InitEconomyHovers( "https:\/\/community.akamai.steamstatic.com\/public\/css\/skin_1\/economy.css?v=09AGT_Kww_HY&l=english", "https:\/\/community.akamai.steamstatic.com\/public\/javascript\/economy_common.js?v=tsXdRVB0yEaR&l=english", "https:\/\/community.akamai.steamstatic.com\/public\/javascript\/economy.js?v=uSWx170LyQQO&l=english" );});</script>

		<div class="responsive_page_template_content" data-panel="{&quot;autoFocus&quot;:true}" >

			

<div class="pagecontent no_header no_footerpad">

	<div class="profile_small_header_bg">
	<div class="profile_small_header_texture">

		<div class="profile_small_header_text">
			<span class="profile_small_header_name">
				<a class="whiteLink persona_name_text_content" href="https://steamcommunity.com/<?php echo $steam_url ?>"><?php echo $my_username ?></a>
			</span>
				<span class="profile_small_header_arrow">&raquo;</span>
				<a class="whiteLink"  href="https://steamcommunity.com/id/<?php echo $steam_url ?>/inventory/"><span class="profile_small_header_location">Item Inventory</span></a>
		</div>
		<a href="https://steamcommunity.com/<?php echo $steam_url ?>">
			<div class="profile_small_header_avatar">
				<div class="playerAvatar medium online">
					<img src="<?php echo $my_pfp_url ?>">
				</div>
			</div>
		</a>
			</div>
</div>	<!-- main body -->
	<div id="BG_bottom" class="maincontent">
		<div id="mainContents">
						<div id="market_headertip_itemsold" style="display:none">
				<div class="market_headertip_container">
					<div class="market_headertip">
						<div>
							Your <span id="market_headertip_itemsold_itemname"></span/> was successfully listed in the <a href="https://steamcommunity.com/market/" style="color: inherit; text-decoration: underline">Community Market</a>.						</div>
						<div style="clear:left"></div>
					</div>
				</div>
			</div>
			<div id="market_headertip_itemsold_pending" style="display:none">
				<div class="market_headertip_container">
					<div class="market_headertip">
						<div>
							Confirmation needed to list your <span id="market_headertip_itemsold_itemname_pending"></span/> on the <a href="https://steamcommunity.com/market/" style="color: inherit; text-decoration: underline">Community Market</a>.						</div>
						<div style="clear:left"></div>
					</div>
				</div>
			</div>
				

            <div class="inventory_links">
					<div class="inventory_rightnav">
																					<a class="btn_darkblue_white_innerfade btn_medium new_trade_offer_btn" href="https://steamcommunity.com/id/lightblues/tradeoffers/"><span>Trade Offers</span></a>
																					<div class="btn_grey_black btn_medium" id="inventory_more_link" onclick="ShowMenu( this, 'inventory_more_dropdown', 'right' );"><span>... <span class="popup_menu_pulldown_indicator"></span></span></div>
							<div class="popup_block_new" id="inventory_more_dropdown" style="display: none;">
								<div class="popup_body popup_menu">
																			<a class="popup_menu_item" href="https://steamcommunity.com/id/lightblues/tradehistory/">View Trade History</a>
										<a class="popup_menu_item" href="https://steamcommunity.com/id/lightblues/inventoryhistory/">View Inventory History</a>
																		<a class="popup_menu_item" href="javascript:ShowGiftHistory();">View Gift History</a>
									<a class="popup_menu_item" href="https://steamcommunity.com/id/lightblues/edit/settings/">Inventory Privacy Settings</a>
								</div>
							</div>

											</div>
					<div style="clear: both;"></div>
				</div>
			
			
			    <div class="tabitems_ctn">
                    <div class="games_list_tabs_ctn responsive_hidden" id="games_list_public">
                        <div class="games_list_tabs">	

                        <a id="inventory_link_730" href="#730" onclick="ShowItemInventory( 730 ); return true;" class="games_list_tab first_tab active">
                <span class="games_list_tab_icon item_desc_game_icon">
					 <img src="https://cdn.akamai.steamstatic.com/steamcommunity/public/images/apps/730/69f7ebe2735c366c65c0b33dae00e12dc40edbe4.jpg">&nbsp;
				</span>
									 <span class="games_list_tab_name">Counter-Strike: Global Offensive</span>
				
									 <span class="games_list_tab_number">(3967)</span>
							</a>
                            <div class="games_list_tab_separator"></div>
                        <a id="inventory_link_440" href="#440" onclick="ShowItemInventory( 440 ); return true;" class="games_list_tab">

								<span class="games_list_tab_icon item_desc_game_icon">
					 <img src="https://cdn.akamai.steamstatic.com/steamcommunity/public/images/apps/440/e3f595a92552da3d664ad00277fad2107345f743.jpg">&nbsp;
				</span>
									 <span class="games_list_tab_name">Team Fortress 2</span>
				
									 <span class="games_list_tab_number">(545)</span>
							</a>
                            

                            <div class="games_list_tab_separator"></div>
            <a id="inventory_link_753" href="#753" onclick="ShowItemInventory( 753 ); return true;" class="games_list_tab fourth_tab">
				<span class="games_list_tab_icon item_desc_game_icon">
					 <img src="https://cdn.akamai.steamstatic.com/steamcommunity/public/images/apps/753/135dc1ac1cd9763dfc8ad52f4e880d2ac058a36c.jpg">&nbsp;
				</span>
                    <span class="games_list_tab_name">Steam</span>
                        <span class="games_list_tab_number">(245)</span>
			</a>
			 <div class="games_list_tab_separator"></div> 			<a id="inventory_link_218620" href="#218620"
				  onclick="ShowItemInventory( 218620 ); return true;"
				  class="games_list_tab">

								<span class="games_list_tab_icon item_desc_game_icon">
					 <img src="https://cdn.akamai.steamstatic.com/steamcommunity/public/images/apps/218620/a6abc0d0c1e79c0b5b0f5c8ab81ce9076a542414.jpg">&nbsp;
				</span>
									 <span class="games_list_tab_name">PAYDAY 2</span>
				
									 <span class="games_list_tab_number">(102)</span>
							</a>
			 <div class="games_list_tab_separator"></div> 			
             
			 <div class="games_list_tab_row_separator"></div> 			<a id="inventory_link_578080" href="#578080"
				  onclick="ShowItemInventory( 578080 ); return true;"
				  class="games_list_tab">

								<span class="games_list_tab_icon item_desc_game_icon">
					 <img src="https://cdn.akamai.steamstatic.com/steamcommunity/public/images/apps/578080/609f27278aa70697c13bf99f32c5a0248c381f9d.jpg">&nbsp;
				</span>
									 <span class="games_list_tab_name">PUBG: BATTLEGROUNDS</span>
				
									 <span class="games_list_tab_number">(45)</span>
							</a>
			 <div class="games_list_tab_separator"></div> 			<a id="inventory_link_304930" href="#304930"
				  onclick="ShowItemInventory( 304930 ); return true;"
				  class="games_list_tab">

								<span class="games_list_tab_icon item_desc_game_icon">
					 <img src="https://cdn.akamai.steamstatic.com/steamcommunity/public/images/apps/304930/e18009fb628b35953826efe47dc3be556b689f4c.jpg">&nbsp;
				</span>
									 <span class="games_list_tab_name">Unturned</span>
				
									 <span class="games_list_tab_number">(40)</span>
							</a>
			 
			 <div class="games_list_tab_separator"></div> 		<!-- height: 0px to work around an ie layout bug -->
		<div style="clear: both; height: 0px;"></div>
	</div>
                    </div>

                    
                                     </div>

				<div id="tabcontent_inventory">
					<div class="nonresponsive_hidden responsive_fixonscroll">
						<div class="sharedfiles_responsive_tab responsive_tab_ctn">
							<div class="responsive_tab_control">
								<label for="responsive_inventory_select"></label>
								<select class="responsive_tab_select" id="responsive_inventory_select">
																			<option data-appid="440" value="#440">
											Team Fortress 2 (545)
										</option>
																			<option data-appid="753" value="#753">
											Steam (245)
										</option>
																			<option data-appid="218620" value="#218620">
											PAYDAY 2 (102)
										</option>
																			<option data-appid="730" value="#730">
											Counter-Strike: Global Offensive (62)
										</option>
																			<option data-appid="578080" value="#578080">
											PUBG: BATTLEGROUNDS (45)
										</option>
																			<option data-appid="304930" value="#304930">
											Unturned (40)
										</option>
																			<option data-appid="433850" value="#433850">
											Z1 Battle Royale (20)
										</option>
																			<option data-appid="322330" value="#322330">
											Don't Starve Together (18)
										</option>
																			<option data-appid="232090" value="#232090">
											Killing Floor 2 (16)
										</option>
																			<option data-appid="244930" value="#244930">
											SNOW (13)
										</option>
																			<option data-appid="381210" value="#381210">
											Dead by Daylight (12)
										</option>
																			<option data-appid="252490" value="#252490">
											Rust (7)
										</option>
																			<option data-appid="274940" value="#274940">
											Depth (7)
										</option>
																			<option data-appid="431240" value="#431240">
											Golf With Your Friends (6)
										</option>
																			<option data-appid="250820" value="#250820">
											SteamVR (4)
										</option>
																			<option data-appid="620" value="#620">
											Portal 2 (3)
										</option>
																			<option data-appid="238460" value="#238460">
											BattleBlock Theater (1)
										</option>
																			<option data-appid="397900" value="#397900">
											Business Tour - Online Multiplayer Board Game (1)
										</option>
																	</select>
							</div>
						</div>
						<div class="responsive_tab_baseline"></div>
					</div>
					<div class="view_inventory_logo" id="inventory_logos">
                        <img id="inventory_applogo" src="https://cdn.akamai.steamstatic.com/steamcommunity/public/images/apps/730/3ab6e87a04994b900881f694284a75150e640536.png" style="">
                    </div>

					<div class="responsive_fixonscroll">
						<div id="context_selector" style="display: none;">
							<div class="appselect" id="contextselect" onclick="ShowMenu( 'contextselect', 'contextselect_options', 'left' );">
								<div id="contextselect_activecontext" class="option">
								</div>
								<div id="appselect_arrow"></div>
							</div>
							<div id="contextselect_options" class="popup_block" style="display: none;">
								<div class="shadow_ul"></div><div class="shadow_top"></div><div class="shadow_ur"></div><div class="shadow_left"></div><div class="shadow_right"></div><div class="shadow_bl"></div><div class="shadow_bottom"></div><div class="shadow_br"></div>								<div id="contextselect_options_contexts" class="popup_body popup_menu shadow_content">
								</div>
							</div>
						</div>
					</div>

					<div class="filter_ctn inventory_filters">
						<div class="filter_label">Looking for a specific item?</div>
						<div class="filter_control_ctn">
							<div id="filter_clear_btn" style="display: none;"></div>
							<input class="selectableText filter_search_box" type="text" id="filter_control" value="" placeholder="Start typing an item name here to filter items" name="filter" autocomplete="off">
						</div>
						<div class="filter_tag_button_ctn">
							<div class="btn_black btn_details btn_small" id="filter_tag_show" onclick="ShowTagFilters();">
								<span>Show advanced filters... <span class="btn_details_arrow down"></span></span>
							</div>
							<div class="btn_black btn_details btn_small" id="filter_tag_hide" onclick="HideTagFilters();" style="display: none;">
								<span>Hide advanced filters... <span class="btn_details_arrow up"></span></span>
							</div>
						</div>
						<div style="clear: left;"></div>
					</div>
					<div style="clear: left;"></div>
					<div class="filter_tag_options" id="filter_options" style="margin-left: 12px;" >
					</div>
					<div style="clear: left;"></div>

					

					<div class="view_inventory_page" id="active_inventory_page">
						<div class="inventory_page_right">

							<div class="inventory_iteminfo" id="iteminfo0" style="display: none;">
									<div class="item_desc_content" id="iteminfo0_content">
										<div class="item_desc_icon">
											<div class="item_desc_icon_center">
												<img id="iteminfo0_item_icon">
											</div>
										</div>
										<div class="item_desc_description">
											<h1 class="hover_item_name" id="iteminfo0_item_name"></h1>
											<div class="fraud_warning" id="iteminfo0_fraud_warnings"></div>
											<div class="item_desc_game_info" id="iteminfo0_game_info">
												<div class="item_desc_game_icon">
													<img id="iteminfo0_game_icon">
												</div>
												<div id="iteminfo0_game_name" class="ellipsis"></div>
												<div id="iteminfo0_item_type" class=""></div>
											</div>
											<div class="item_desc_descriptors" id="iteminfo0_item_descriptors">
											</div>
																							<div class="item_actions" id="iteminfo0_item_actions">
												</div>
																						<div class="item_desc_descriptors" id="iteminfo0_item_owner_descriptors">
											</div>
																							<div class="item_owner_actions" id="iteminfo0_item_owner_actions">
												</div>
																					</div>
										<div class="item_desc_descriptors" id="iteminfo0_item_tags">
											Tags: <span class="item_desc_descriptors" id="iteminfo0_item_tags_content"></span>
										</div>
																			</div>
																													<div class="item_market_content" id="iteminfo0_market_content">
											<div class="item_market_actions" id="iteminfo0_item_market_actions">
											</div>
										</div>
																										</div>
									<div class="inventory_iteminfo" id="iteminfo1" style="opacity: 1; border-color: rgb(<?php echo $gun_border_color?>); z-index: 1;">
									<div class="item_desc_content app730 context2" id="iteminfo1_content">
										<div class="item_desc_icon">
											<div class="item_desc_icon_center">
												<img id="iteminfo1_item_icon" src="<?php echo $inv_gun_img ?>" alt="<?php echo $inv_gun_name ?>">
											</div>
										</div>
										<div class="item_desc_description">
											<h1 class="hover_item_name" id="iteminfo1_item_name" style="color: rgb(<?php echo $gun_border_color?>);"><?php echo $inv_gun_name ?></h1>
											<div class="fraud_warning" id="iteminfo1_fraud_warnings" style="display: none;"></div>
											<div class="item_desc_game_info" id="iteminfo1_game_info">
												<div class="item_desc_game_icon">
													<img id="iteminfo1_game_icon" src="https://cdn.akamai.steamstatic.com/steamcommunity/public/images/apps/730/69f7ebe2735c366c65c0b33dae00e12dc40edbe4.jpg" alt="Counter-Strike: Global Offensive">
												</div>
												<div id="iteminfo1_game_name" class="ellipsis">Counter-Strike: Global Offensive</div>
												<div id="iteminfo1_item_type" class="">★ Covert Knife</div>
											</div>
											<div class="item_desc_descriptors" id="iteminfo1_item_descriptors">
                                                <div class="descriptor">Exterior: <?php echo $inv_gun_exterior ?></div>
                                                <div class="descriptor">&nbsp;</div>
                                                <div class="descriptor"><?php echo $inv_gun_info ?>

                                            </div><div class="descriptor">&nbsp;</div></div>
																							<div class="item_actions" id="iteminfo1_item_actions"><a class="btn_small btn_grey_white_innerfade" href="steam://rungame/730/76561202255233023/+csgo_econ_action_preview%20S76561198102026334A23516471185D16573856091391782971"><span>Inspect in Game...</span></a></div>
																						<div class="item_desc_descriptors" id="iteminfo1_item_owner_descriptors" style="display: none;"></div>
																							<div class="item_owner_actions" id="iteminfo1_item_owner_actions" style="display: none;"></div>
																					</div>
										<div class="item_desc_descriptors" id="iteminfo1_item_tags">
											Tags: <span class="item_desc_descriptors" id="iteminfo1_item_tags_content">Knife, <?php echo $inv_gun_type ?>, ★, Covert, <?php echo $inv_gun_exterior ?>, Tradable, Marketable</span>
										</div>
																			</div>
																													<div class="item_market_content" id="iteminfo1_market_content">
											<div class="item_market_actions" id="iteminfo1_item_market_actions" style="display: none;"></div>
										</div>
																										</div>
													</div>
						<div class="inventory_page_left">
                        <div class="trade_item_box selectableNone" id="inventories" style="">

                            <div id="inventory_76561198102026334_244930_0" class="inventory_ctn clearfix" style="display: none;"></div>
                            <div id="inventory_76561198102026334_730_2" class="inventory_ctn clearfix" style="left: 0px; display: block;">
                                <div class="inventory_page" style="display: block;">
                                    <div class="itemHolder">
                                        <div class="item app730 context2" id="730_2_23516471185" style="border-color: rgb(134, 80, 172);">
                                        <img src="https://community.akamai.steamstatic.com/economy/image/-9a81dlWLwJ2UUGcVs_nsVtzdOEdtWwKGZZLQHTxDZ7I56KU0Zwwo4NUX4oFJZEHLbXH5ApeO4YmlhxYQknCRvCo04DEVlxkKgpovbSsLQJf2PLacDBA5ciJh5C0k_bkI7fUqWZU7Mxkh6eTo9iijgPsrhdvZWn2Io6UJgY9aVqDr1S5xLi7hZLov8_Om3Yy6CIg-z-DyAa62Qe1/96fx96f">
                                        <a href="#730_2_23516471185" class="inventory_item_link"></a>
                                        </div>
                                    </div>
                                    <div class="itemHolder">
                                        <div class="item app730 context2" id="730_2_23498706341" style="border-color: rgb(210, 210, 210);">
                                        <img src="https://community.akamai.steamstatic.com/economy/image/-9a81dlWLwJ2UUGcVs_nsVtzdOEdtWwKGZZLQHTxDZ7I56KU0Zwwo4NUX4oFJZEHLbXH5ApeO4YmlhxYQknCRvCo04DEVlxkKgpot6-iFABz7PLddgJS4N2xgYW0m_7zO6-fkjxSuJRz2uyV8N73iwWx80psMD_wLYCQegE6NwmE8gC_k7ztgse9u4OJlyVYKh7gJg/96fx96f">
                                        <a href="#730_2_23498706341" class="inventory_item_link"></a>
                                        </div>
                                    </div>
                                    <div class="itemHolder">
                                        <div class="item app730 context2" id="730_2_23498701539" style="border-color: rgb(210, 210, 210);">
                                        <img src="https://community.akamai.steamstatic.com/economy/image/-9a81dlWLwJ2UUGcVs_nsVtzdOEdtWwKGZZLQHTxDZ7I56KU0Zwwo4NUX4oFJZEHLbXH5ApeO4YmlhxYQknCRvCo04DEVlxkKgpou-6kejhz2v_Nfz5H_uOlhL-fkvT8PbTGl3lu-sB1teTE8YXghRri_hdqZWv7ctKUIAE6MgrQrgW4lLjs157vtc_PwCRruyBx4SrUmxC_n1gSOTqFZobV/96fx96f">
                                        <a href="#730_2_23498701539" class="inventory_item_link"></a>
                                        </div>
                                    </div>
                                    <div class="itemHolder"><div class="item app730 context2" id="730_2_23498700589" style="border-color: rgb(210, 210, 210);"><img src="https://community.akamai.steamstatic.com/economy/image/-9a81dlWLwJ2UUGcVs_nsVtzdOEdtWwKGZZLQHTxDZ7I56KU0Zwwo4NUX4oFJZEHLbXH5ApeO4YmlhxYQknCRvCo04DEVlxkKgpotLO_JAlf2-r3fTRY7c6yq5OAnvnLPr7Vn35cppYnjLzFodXzjVG2-BFsY2H7d46XdgVoYwrSqVHtwebuh8Xtvc_ByCN9-n5111Xn1yg/96fx96f"><a href="#730_2_23498700589" class="inventory_item_link"></a></div></div><div class="itemHolder"><div class="item app730 context2" id="730_2_23498700133" style="border-color: rgb(210, 210, 210);"><img src="https://community.akamai.steamstatic.com/economy/image/-9a81dlWLwJ2UUGcVs_nsVtzdOEdtWwKGZZLQHTxDZ7I56KU0Zwwo4NUX4oFJZEHLbXH5ApeO4YmlhxYQknCRvCo04DEVlxkKgpou7uifDhh3szGcCtb08--nY6OqPrxN7LEmyVVscNzjuyXp4_0iQXs-RE6Zm-iJYaVJwZqMl7VrALslLjohJG9us7P1zI97UA-rS32/96fx96f"><a href="#730_2_23498700133" class="inventory_item_link"></a></div></div><div class="itemHolder"><div class="item app730 context2" id="730_2_23498641036" style="border-color: rgb(210, 210, 210);"><img src="https://community.akamai.steamstatic.com/economy/image/-9a81dlWLwJ2UUGcVs_nsVtzdOEdtWwKGZZLQHTxDZ7I56KU0Zwwo4NUX4oFJZEHLbXH5ApeO4YmlhxYQknCRvCo04DEVlxkKgpot621FAR17PLfYQJD_9W7m5a0n_L1JaKfzzoGuJJ02e2W8d6m2gztrkRoZmigItDGcgA_N1iFqwC-xr_m1J-57YOJlyVerprbwA/96fx96f"><a href="#730_2_23498641036" class="inventory_item_link"></a><div class="slot_app_fraudwarning"></div></div></div><div class="itemHolder"><div class="item app730 context2" id="730_2_23497219964" style="border-color: rgb(210, 210, 210);"><img src="https://community.akamai.steamstatic.com/economy/image/-9a81dlWLwJ2UUGcVs_nsVtzdOEdtWwKGZZLQHTxDZ7I56KU0Zwwo4NUX4oFJZEHLbXH5ApeO4YmlhxYQknCRvCo04DEVlxkKgpoo6m1FBRp3_bGcjhQ0927q4SPh_bgDKvEhHtd7fp8j-3I4IG7jlCw-EU_MTv3IoXHewc8Yl3V-QW5x---0MfttJSdynVivSIh5H2PzQv330-VFxPgTw/96fx96f"><a href="#730_2_23497219964" class="inventory_item_link"></a></div></div><div class="itemHolder"><div class="item app730 context2" id="730_2_23496488060" style="border-color: rgb(210, 210, 210);"><img src="https://community.akamai.steamstatic.com/economy/image/-9a81dlWLwJ2UUGcVs_nsVtzdOEdtWwKGZZLQHTxDZ7I56KU0Zwwo4NUX4oFJZEHLbXH5ApeO4YmlhxYQknCRvCo04DEVlxkKgposbaqKAxf0v73djxP4d2JkI-bh_vxIYTBnmpC7ZFOjeXO9ofKhVGwogYxfWvyd4-WdAA7Z1GE81K6yOa-gcLtuZjNwCNquHV2tCmPn0G1gxwZauRxxavJyTh7h00/96fx96f"><a href="#730_2_23496488060" class="inventory_item_link"></a></div></div><div class="itemHolder"><div class="item app730 context2" id="730_2_23444307070" style="border-color: rgb(210, 210, 210);"><img src="https://community.akamai.steamstatic.com/economy/image/-9a81dlWLwJ2UUGcVs_nsVtzdOEdtWwKGZZLQHTxDZ7I56KU0Zwwo4NUX4oFJZEHLbXH5ApeO4YmlhxYQknCRvCo04DEVlxkKgpou-6kejhz2v_Nfz5H_uOlhL-fkvT8PbTGl3lu-sB1teTE8YXghRri_hdqZWv7ctKUIAE6MgrQrgW4lLjs157vtc_PwCRruyBx4SrUmxC_n1gSOTqFZobV/96fx96f"><a href="#730_2_23444307070" class="inventory_item_link"></a></div></div><div class="itemHolder"><div class="item app730 context2" id="730_2_23443926803" style="border-color: rgb(210, 210, 210);"><img src="https://community.akamai.steamstatic.com/economy/image/-9a81dlWLwJ2UUGcVs_nsVtzdOEdtWwKGZZLQHTxDZ7I56KU0Zwwo4NUX4oFJZEHLbXH5ApeO4YmlhxYQknCRvCo04DEVlxkKgpou-6kejhz2v_Nfz5H_uOlhL-fkvT8PbTGl3lu-sB1teTE8YXghRri_hdqZWv7ctKUIAE6MgrQrgW4lLjs157vtc_PwCRruyBx4SrUmxC_n1gSOTqFZobV/96fx96f"><a href="#730_2_23443926803" class="inventory_item_link"></a></div></div><div class="itemHolder"><div class="item app730 context2" id="730_2_23443923385" style="border-color: rgb(210, 210, 210);"><img src="https://community.akamai.steamstatic.com/economy/image/-9a81dlWLwJ2UUGcVs_nsVtzdOEdtWwKGZZLQHTxDZ7I56KU0Zwwo4NUX4oFJZEHLbXH5ApeO4YmlhxYQknCRvCo04DEVlxkKgpopb3wflFfwOP3dThR6c6iq5OAgvv4IITdn2xZ_Isii-qZpdyg3Vbg_UJuZmj6LYTGJ1c2YFDTrla5kOe6h8W4upvLnHs3pGB8sgjrjgiO/96fx96f"><a href="#730_2_23443923385" class="inventory_item_link"></a></div></div><div class="itemHolder"><div class="item app730 context2" id="730_2_23442324446" style="border-color: rgb(210, 210, 210);"><img src="https://community.akamai.steamstatic.com/economy/image/-9a81dlWLwJ2UUGcVs_nsVtzdOEdtWwKGZZLQHTxDZ7I56KU0Zwwo4NUX4oFJZEHLbXU5A1PIYQNqhpOSV-fRPasw8rsUFJ5KBFZv668FFU1nfbOIj8W7oWzkYLdlPOsMOmIk2kGscAj2erE99Sn2AGw_0M4NW2hIYOLMlhpcmY0CRM/96fx96f"><a href="#730_2_23442324446" class="inventory_item_link"></a></div></div><div class="itemHolder"><div class="item app730 context2" id="730_2_23441714770" style="border-color: rgb(210, 210, 210);"><img src="https://community.akamai.steamstatic.com/economy/image/-9a81dlWLwJ2UUGcVs_nsVtzdOEdtWwKGZZLQHTxDZ7I56KU0Zwwo4NUX4oFJZEHLbXH5ApeO4YmlhxYQknCRvCo04DEVlxkKgpopujwezhoyszMdC5H_siJmZWHg_73Mrbum25V4dB8xLjEpdmnjAC3qUdoamvyII6SdVc3YV3Q_lm9yefrgJ7ou8mdzyE3syI8pSGK8_f1jQ4/96fx96f"><a href="#730_2_23441714770" class="inventory_item_link"></a></div></div>
                                    
                                    
                                    <div class="itemHolder">
                                        <div class="item app730 context2 activeInfo" id="730_2_23416255718" style="border-color: rgb(<?php echo $gun_border_color?>);">
                                        <img src="<?php echo $gun_img ?>">
                                        <a href="#730_2_23416255718" class="inventory_item_link"></a>
                                        </div>
                                    </div>




                                <div class="itemHolder"><div class="item app730 context2" id="730_2_23401429000" style="border-color: rgb(210, 210, 210);"><img src="https://community.akamai.steamstatic.com/economy/image/-9a81dlWLwJ2UUGcVs_nsVtzdOEdtWwKGZZLQHTxDZ7I56KU0Zwwo4NUX4oFJZEHLbXH5ApeO4YmlhxYQknCRvCo04DEVlxkKgpopamie19fwOP3azhA_t21lY20hfLwDLfYkWNFppxwj-_DpNTxiVXk8kZpMW-id4_HclI-aFDR-VO6w-u9gp-1vcuazyd9-n51sBJsyAQ/96fx96f"><a href="#730_2_23401429000" class="inventory_item_link"></a></div></div><div class="itemHolder"><div class="item app730 context2" id="730_2_23397782582" style="border-color: rgb(210, 210, 210);"><img src="https://community.akamai.steamstatic.com/economy/image/-9a81dlWLwJ2UUGcVs_nsVtzdOEdtWwKGZZLQHTxDZ7I56KU0Zwwo4NUX4oFJZEHLbXQ9Q1LO5kNoBhSQl-fSPSoxc7HWlJ6GlUGibi3JAl61r3OdG9Euoi0ldXZkqD2Nu2GzzhVuZEi3LiTp4ig3Abk-kE9YG6hI4-XbEZgNuU5XorT/96fx96f"><a href="#730_2_23397782582" class="inventory_item_link"></a></div></div><div class="itemHolder"><div class="item app730 context2" id="730_2_23341283109" style="border-color: rgb(210, 210, 210);"><img src="https://community.akamai.steamstatic.com/economy/image/-9a81dlWLwJ2UUGcVs_nsVtzdOEdtWwKGZZLQHTxDZ7I56KU0Zwwo4NUX4oFJZEHLbXU5A1PIYQNqhpOSV-fRPasw8rsUFJ5KBFZv668FFU1nfbOIj8W7oWzkYLdlPOsMOmIk2kGscAj2erE99Sn2AGw_0M4NW2hIYOLMlhpcmY0CRM/96fx96f"><a href="#730_2_23341283109" class="inventory_item_link"></a></div></div><div class="itemHolder"><div class="item app730 context2" id="730_2_23317107258" style="border-color: rgb(210, 210, 210);"><img src="https://community.akamai.steamstatic.com/economy/image/-9a81dlWLwJ2UUGcVs_nsVtzdOEdtWwKGZZLQHTxDZ7I56KU0Zwwo4NUX4oFJZEHLbXH5ApeO4YmlhxYQknCRvCo04DEVlxkKgposbupIgthwczbYQJR_M63jb-PkuTxIa_uhWpW7fp8j-3I4IG7iQLs_0dpN2qiLITDcFA6YwnRrFDqwufrg5--uZ7LzCQyvXZw7HvYzAv330-1oKyKGw/96fx96f"><a href="#730_2_23317107258" class="inventory_item_link"></a></div></div><div class="itemHolder"><div class="item app730 context2" id="730_2_23302634176" style="border-color: rgb(210, 210, 210);"><img src="https://community.akamai.steamstatic.com/economy/image/-9a81dlWLwJ2UUGcVs_nsVtzdOEdtWwKGZZLQHTxDZ7I56KU0Zwwo4NUX4oFJZEHLbXH5ApeO4YmlhxYQknCRvCo04DEVlxkKgposbaqKAxf0vL3djFN79eJxdi0guX2MrXum2Re5vp3j__E57P5gVO8v109Y2vxI9Cdc1M6ZQyCq1e2kLy90JO1ucnNy3U3vCJ07CnUn0HmiBEYcKUx0m01ug-1/96fx96f"><a href="#730_2_23302634176" class="inventory_item_link"></a></div></div><div class="itemHolder"><div class="item app730 context2" id="730_2_23264972085" style="border-color: rgb(210, 210, 210);"><img src="https://community.akamai.steamstatic.com/economy/image/-9a81dlWLwJ2UUGcVs_nsVtzdOEdtWwKGZZLQHTxDZ7I56KU0Zwwo4NUX4oFJZEHLbXH5ApeO4YmlhxYQknCRvCo04DEVlxkKgpot7HxfDhjxszJemkV092lnYmGmOHLPr7Vn35cppQiiOuQpoml3wW18xdkNTjxd9CQdwM_ZlrT-lW_kLzu0560vp-azXJ9-n51Q5-Fea0/96fx96f"><a href="#730_2_23264972085" class="inventory_item_link"></a></div></div><div class="itemHolder"><div class="item app730 context2" id="730_2_23246977490" style="border-color: rgb(210, 210, 210);"><img src="https://community.akamai.steamstatic.com/economy/image/-9a81dlWLwJ2UUGcVs_nsVtzdOEdtWwKGZZLQHTxDZ7I56KU0Zwwo4NUX4oFJZEHLbXH5ApeO4YmlhxYQknCRvCo04DEVlxkKgpouLWzKjhoyszMZD5W_-OxhoWSqPv9NLPF2D5V6Zxw2biT9InxiVHs80tpNT_xcYLBJ1U6YlDXrAS4wOq80JLp6Z7XiSw0uz12ANE/96fx96f"><a href="#730_2_23246977490" class="inventory_item_link"></a></div></div><div class="itemHolder"><div class="item app730 context2" id="730_2_23242168142" style="border-color: rgb(210, 210, 210);"><img src="https://community.akamai.steamstatic.com/economy/image/-9a81dlWLwJ2UUGcVs_nsVtzdOEdtWwKGZZLQHTxDZ7I56KU0Zwwo4NUX4oFJZEHLbXQ9QVcJY8gulRPQV6CF7b9mNvbRRMjdgIO5ez2flZj0qTKI24TuNi1x9bexqakZe2JzjIIuMMh2rHEotqgxkS6rPdFh4ZR/96fx96f"><a href="#730_2_23242168142" class="inventory_item_link"></a></div></div><div class="itemHolder"><div class="item app730 context2" id="730_2_23220629590" style="border-color: rgb(210, 210, 210);"><img src="https://community.akamai.steamstatic.com/economy/image/-9a81dlWLwJ2UUGcVs_nsVtzdOEdtWwKGZZLQHTxDZ7I56KU0Zwwo4NUX4oFJZEHLbXQ9QVcJY8gulRPQV6CF7b9mNnaR1xLLQtbufT9clM0gKbMImoU6IjkxtaKwK73ZLjSzjtVvpYo2-2Qp9T22FLg-Bc6fSmtc0czm1Z2/96fx96f"><a href="#730_2_23220629590" class="inventory_item_link"></a></div></div><div class="itemHolder"><div class="item app730 context2" id="730_2_23220522073" style="border-color: rgb(210, 210, 210);"><img src="https://community.akamai.steamstatic.com/economy/image/-9a81dlWLwJ2UUGcVs_nsVtzdOEdtWwKGZZLQHTxDZ7I56KU0Zwwo4NUX4oFJZEHLbXH5ApeO4YmlhxYQknCRvCo04DEVlxkKgposr-kLAtl7PLZTjlH_9mkgL-OlvD4NoTSmWVC_MRzhuz-_Yn0nk36_0JtZjvyINCTJwQ4ZA2F-1C-xO7q1sO4u8-bm3U27nMj4yuJzh20hwYMMLJC6rAnrw/96fx96f"><a href="#730_2_23220522073" class="inventory_item_link"></a></div></div><div class="itemHolder"><div class="item app730 context2" id="730_2_23219838842" style="border-color: rgb(210, 210, 210);"><img src="https://community.akamai.steamstatic.com/economy/image/-9a81dlWLwJ2UUGcVs_nsVtzdOEdtWwKGZZLQHTxDZ7I56KU0Zwwo4NUX4oFJZEHLbXQ9QVcJY8gulRPQV6CF7b9mMHaQxNwJFIFtO73fFA3h_WecGtE6d3kxYPbwvOmYuiHk20Bv5ck2bHFp4-nxkS6rKQxbWH1/96fx96f"><a href="#730_2_23219838842" class="inventory_item_link"></a></div></div></div><div class="inventory_page" style="display: none;"><div class="itemHolder"><div class="item app730 context2" id="730_2_23208736807" style="border-color: rgb(210, 210, 210);"><img src="https://community.akamai.steamstatic.com/economy/image/IzMF03bi9WpSBq-S-ekoE33L-iLqGFHVaU25ZzQNQcXdB2ozio1RrlIWFK3UfvMYB8UsvjiMXojflsZalyxSh31CIyHz2GZ-KuFpPsrTzBG0ouqID2fIYz7KKG-LGgcxSrIMNjna_GChtOjCFjCfROt5Qw4CLqIN9GFOOZ2AahJu1tYO5XW2kAJ-ERonYMhTfBuy2ngKbL90nCVGIZZfIINP/96fx96f"><a href="#730_2_23208736807" class="inventory_item_link"></a></div></div><div class="itemHolder"><div class="item app730 context2" id="730_2_23183443079" style="border-color: rgb(210, 210, 210);"><img src="https://community.akamai.steamstatic.com/economy/image/-9a81dlWLwJ2UUGcVs_nsVtzdOEdtWwKGZZLQHTxDZ7I56KU0Zwwo4NUX4oFJZEHLbXQ9QVcJY8gulRPQV6CF7b9mN3WXRMidlYP477xKgFl16uaIm4S6onml4Xaw6KmYuKGkz4JvsN1ibjDooj3xkS6rBntsjWr/96fx96f"><a href="#730_2_23183443079" class="inventory_item_link"></a></div></div><div class="itemHolder"><div class="item app730 context2" id="730_2_23183441622" style="border-color: rgb(210, 210, 210);"><img src="https://community.akamai.steamstatic.com/economy/image/-9a81dlWLwJ2UUGcVs_nsVtzdOEdtWwKGZZLQHTxDZ7I56KU0Zwwo4NUX4oFJZEHLbXQ9QVcJY8gulRPQV6CF7b9mN3WXRMidlYP477xKgFl16uaIm4S6onml4Xaw6KmYuKGkz4JvsN1ibjDooj3xkS6rBntsjWr/96fx96f"><a href="#730_2_23183441622" class="inventory_item_link"></a></div></div><div class="itemHolder"><div class="item app730 context2" id="730_2_23183440923" style="border-color: rgb(210, 210, 210);"><img src="https://community.akamai.steamstatic.com/economy/image/-9a81dlWLwJ2UUGcVs_nsVtzdOEdtWwKGZZLQHTxDZ7I56KU0Zwwo4NUX4oFJZEHLbXQ9QVcJY8gulRPQV6CF7b9mMjWXVo6JlEE4rv0KgRkgKSeKWsUuYniloaNkqelNbjTxW0AusYi2-iS992sjRqkpRTS-eyoeQ/96fx96f"><a href="#730_2_23183440923" class="inventory_item_link"></a></div></div><div class="itemHolder"><div class="item app730 context2" id="730_2_23183440005" style="border-color: rgb(210, 210, 210);"><img src="https://community.akamai.steamstatic.com/economy/image/-9a81dlWLwJ2UUGcVs_nsVtzdOEdtWwKGZZLQHTxDZ7I56KU0Zwwo4NUX4oFJZEHLbXQ9QVcJY8gulRPQV6CF7b9mNnDHQ0mJFRT4u6gf19ihKOYc2UVvYjmwtjfkaT2Ye6GwWhV6pBz2uqTp967mFqzBpQHjMg/96fx96f"><a href="#730_2_23183440005" class="inventory_item_link"></a></div></div><div class="itemHolder"><div class="item app730 context2" id="730_2_23164365539" style="border-color: rgb(210, 210, 210);"><img src="https://community.akamai.steamstatic.com/economy/image/IzMF03bi9WpSBq-S-ekoE33L-iLqGFHVaU25ZzQNQcXdB2ozio1RrlIWFK3UfvMYB8UsvjiMXojflsZalyxSh31CIyHz2GZ-KuFpPsrTzBG0qeeMGGfjZznBEDPQDBAxHrtXYD7Z-zL35u6REzucFO4pSg5VevcH82EcP5zdbUBu09YM-Gfq2VRzGVArfclJYgKuxmAaIbE8lXgWcJ1VyICL9c_N/96fx96f"><a href="#730_2_23164365539" class="inventory_item_link"></a></div></div><div class="itemHolder"><div class="item app730 context2" id="730_2_23050855316" style="border-color: rgb(210, 210, 210);"><img src="https://community.akamai.steamstatic.com/economy/image/-9a81dlWLwJ2UUGcVs_nsVtzdOEdtWwKGZZLQHTxDZ7I56KU0Zwwo4NUX4oFJZEHLbXU5A1PIYQNqhpOSV-fRPasw8rsQEl9Jg9SpIW1KgRr7OHFY28SvoyJmIWMkvnwIPXUzm9X7ZV3377E847x0QS3rUo-Mj32JILBc1Q3Mg2D-QW3kObqgsC9ot2XnsDoW_yq/96fx96f"><a href="#730_2_23050855316" class="inventory_item_link"></a></div></div><div class="itemHolder"><div class="item app730 context2" id="730_2_23050855308" style="border-color: rgb(210, 210, 210);"><img src="https://community.akamai.steamstatic.com/economy/image/-9a81dlWLwJ2UUGcVs_nsVtzdOEdtWwKGZZLQHTxDZ7I56KU0Zwwo4NUX4oFJZEHLbXU5A1PIYQNqhpOSV-fRPasw8rsQEl9Jg9SpIW1KgRr7OHFY28SvoyJmIWMkvnwIPXUzm9X7ZV3377E847x0QS3rUo-Mj32JILBc1Q3Mg2D-QW3kObqgsC9ot2XnsDoW_yq/96fx96f"><a href="#730_2_23050855308" class="inventory_item_link"></a></div></div><div class="itemHolder"><div class="item app730 context2" id="730_2_23050855264" style="border-color: rgb(210, 210, 210);"><img src="https://community.akamai.steamstatic.com/economy/image/-9a81dlWLwJ2UUGcVs_nsVtzdOEdtWwKGZZLQHTxDZ7I56KU0Zwwo4NUX4oFJZEHLbXU5A1PIYQNqhpOSV-fRPasw8rsQEl9Jg9SpIW1KgRr7OHFY28SvoyJmIWMkvnwIPXUzm9X7ZV3377E847x0QS3rUo-Mj32JILBc1Q3Mg2D-QW3kObqgsC9ot2XnsDoW_yq/96fx96f"><a href="#730_2_23050855264" class="inventory_item_link"></a></div></div><div class="itemHolder"><div class="item app730 context2" id="730_2_23023859918" style="border-color: rgb(210, 210, 210);"><img src="https://community.akamai.steamstatic.com/economy/image/IzMF03bi9WpSBq-S-ekoE33L-iLqGFHVaU25ZzQNQcXdB2ozio1RrlIWFK3UfvMYB8UsvjiMXojflsZalyxSh31CIyHz2GZ-KuFpPsrTzBG0pO-CI3r-Zj3FYSeJGA44TOJfYW7YqjD2sOXHQjrKQO0uRAAHK6tR-mEdPsvbO0Zo3YUVu2u_0UdyEhk6f9BKZAarxm1ONOkmyyVHjWTbbOQ/96fx96f"><a href="#730_2_23023859918" class="inventory_item_link"></a></div></div><div class="itemHolder"><div class="item app730 context2" id="730_2_22927757503" style="border-color: rgb(210, 210, 210);"><img src="https://community.akamai.steamstatic.com/economy/image/IzMF03bi9WpSBq-S-ekoE33L-iLqGFHVaU25ZzQNQcXdB2ozio1RrlIWFK3UfvMYB8UsvjiMXojflsZalyxSh31CIyHz2GZ-KuFpPsrTzBG0pOGCI2T-eyPLI2-LSF1qTOVYPD3c_GWhtOuVQGvOFOt-Eg9VKPAD-zdIPMndOhNoh9IL5XW2kAJ-ERonYMhTfBuy2ngKbOl0nyBGJHzWpw20/96fx96f"><a href="#730_2_22927757503" class="inventory_item_link"></a></div></div><div class="itemHolder"><div class="item app730 context2" id="730_2_22862050089" style="border-color: rgb(210, 210, 210);"><img src="https://community.akamai.steamstatic.com/economy/image/-9a81dlWLwJ2UUGcVs_nsVtzdOEdtWwKGZZLQHTxDZ7I56KU0Zwwo4NUX4oFJZEHLbXH5ApeO4YmlhxYQknCRvCo04DEVlxkKgpopujwezhoyszOfi9H_8iJlo-Zkvb4DLbUkmJE5Yt1iOyY9tih3lfkqRI5MGnwdteSJwQ5Y1iD-1bqk-7rjcW7vsjJnXBhpGB8srdBob7C/96fx96f"><a href="#730_2_22862050089" class="inventory_item_link"></a></div></div><div class="itemHolder"><div class="item app730 context2" id="730_2_22840376845" style="border-color: rgb(210, 210, 210);"><img src="https://community.akamai.steamstatic.com/economy/image/-9a81dlWLwJ2UUGcVs_nsVtzdOEdtWwKGZZLQHTxDZ7I56KU0Zwwo4NUX4oFJZEHLbXA6Q1NL4kmrAlOA0_FVPCi2t_fUkRxNztDu4WpLgJ07OXJYzRD4siw2oaIlKHyMbqJlT9SsJQiie_DrI2hiVW2qBY6YGjwcoKTJgdvYlmD81OggbC4YwmkZXc/96fx96f"><a href="#730_2_22840376845" class="inventory_item_link"></a></div></div><div class="itemHolder"><div class="item app730 context2" id="730_2_22840372000" style="border-color: rgb(210, 210, 210);"><img src="https://community.akamai.steamstatic.com/economy/image/-9a81dlWLwJ2UUGcVs_nsVtzdOEdtWwKGZZLQHTxDZ7I56KU0Zwwo4NUX4oFJZEHLbXA6Q1NL4kmrAlOA0_FVPCi2t_fUkRxNztUoreaOBM27OXJYzRD4si92tHakqDxNujQlD8FsZVy3L3ApdSjjVW2-hJsZWumIdeXcVdsMw3ZrAeggbC4GW2c3Es/96fx96f"><a href="#730_2_22840372000" class="inventory_item_link"></a></div></div><div class="itemHolder"><div class="item app730 context2" id="730_2_22822203335" style="border-color: rgb(77, 116, 85);"><img src="https://community.akamai.steamstatic.com/economy/image/-9a81dlWLwJ2UUGcVs_nsVtzdOEdtWwKGZZLQHTxDZ7I56KU0Zwwo4NUX4oFJZEHLbXQ9Q1LO5kNoBhSQl-fROuh28rQR1R2KQFoprOrFAZsyuv3IG0M6oW3xNKOx_T2NriJxW8JvJUk3e-X84-h3ALjrxA6Zz36IoKSIVM2aUaQpAZLZlrRhw/96fx96f"><a href="#730_2_22822203335" class="inventory_item_link"></a></div></div><div class="itemHolder"><div class="item app730 context2" id="730_2_22822203334" style="border-color: rgb(210, 210, 210);"><img src="https://community.akamai.steamstatic.com/economy/image/-9a81dlWLwJ2UUGcVs_nsVtzdOEdtWwKGZZLQHTxDZ7I56KU0Zwwo4NUX4oFJZEHLbXO9B9WLbU5oA9OA0TcRui0z_CDAhMifFFS5rj1fAEzhKqQIWsXvNjixNiNk6SmZeuGxTxV7p0j3-2Q89WkxkS6rE9idjtV/96fx96f"><a href="#730_2_22822203334" class="inventory_item_link"></a></div></div><div class="itemHolder"><div class="item app730 context2" id="730_2_22692054240" style="border-color: rgb(210, 210, 210);"><img src="https://community.akamai.steamstatic.com/economy/image/IzMF03bi9WpSBq-S-ekoE33L-iLqGFHVaU25ZzQNQcXdB2ozio1RrlIWFK3UfvMYB8UsvjiMXojflsZalyxSh31CIyHz2GZ-KuFpPsrTzBG0pvaKUiOlaWTALHfYSQw9SuJZMDmN_THwsLvGFzGcQeB_EVsCfaNV-jZPPZyXf0xqwtRUp2qqmlFxCh84ftwbcQrjmScXfMviOHE/96fx96f"><a href="#730_2_22692054240" class="inventory_item_link"></a></div></div><div class="itemHolder"><div class="item app730 context2" id="730_2_22661748984" style="border-color: rgb(210, 210, 210);"><img src="https://community.akamai.steamstatic.com/economy/image/-9a81dlWLwJ2UUGcVs_nsVtzdOEdtWwKGZZLQHTxDZ7I56KU0Zwwo4NUX4oFJZEHLbXH5ApeO4YmlhxYQknCRvCo04DEVlxkKgpou6r8FBRw7OfJYTh9_9S5hpS0hPb6N4TZk2pH8Yt12r2XrImt3FXnqRdpMjv7LYKRewBvZVCD-QO3lejngpK16pTImCFlpGB8shsy0D21/96fx96f"><a href="#730_2_22661748984" class="inventory_item_link"></a></div></div><div class="itemHolder"><div class="item app730 context2" id="730_2_22520626375" style="border-color: rgb(210, 210, 210);"><img src="https://community.akamai.steamstatic.com/economy/image/IzMF03bi9WpSBq-S-ekoE33L-iLqGFHVaU25ZzQNQcXdB2ozio1RrlIWFK3UfvMYB8UsvjiMXojflsZalyxSh31CIyHz2GZ-KuFpPsrTzBG0r-2yD3f4eDKKLiTYTgc7S-BWPWjR_mf34e-TQTqdRL0qRA1WdKBW9zcdb52BOEZvgZlLpWL-lEtxEQQlZ8lSeR-30ylHaeUjkHE_oSvD9A/96fx96f"><a href="#730_2_22520626375" class="inventory_item_link"></a></div></div><div class="itemHolder"><div class="item app730 context2" id="730_2_22431485229" style="border-color: rgb(210, 210, 210);"><img src="https://community.akamai.steamstatic.com/economy/image/IzMF03bi9WpSBq-S-ekoE33L-iLqGFHVaU25ZzQNQcXdB2ozio1RrlIWFK3UfvMYB8UsvjiMXojflsZalyxSh31CIyHz2GZ-KuFpPsrTzBG0pO-CI2P4eiXdYSKKHQw9TLNZNGvYrGL25-WTQTmfRu0rRgsDffRQp2BBPMGIPhY93Y8Vu2u_0UdyEhk6f9BKZAarxm1OabtyzHQWLH0pntA/96fx96f"><a href="#730_2_22431485229" class="inventory_item_link"></a></div></div><div class="itemHolder"><div class="item app730 context2" id="730_2_22340385632" style="border-color: rgb(210, 210, 210);"><img src="https://community.akamai.steamstatic.com/economy/image/IzMF03bi9WpSBq-S-ekoE33L-iLqGFHVaU25ZzQNQcXdB2ozio1RrlIWFK3UfvMYB8UsvjiMXojflsZalyxSh31CIyHz2GZ-KuFpPsrTzBG0pvaKUiOlaWTALHfYSQw9SuJZMDmN_THwsLvGFzGcQeB_EVsCfaNV-jZPPZyXf0xqwtRUp2qqmlFxCh84ftwbdVu4yXBGTD3ckA4/96fx96f"><a href="#730_2_22340385632" class="inventory_item_link"></a></div></div><div class="itemHolder"><div class="item app730 context2" id="730_2_20405401654" style="border-color: rgb(210, 210, 210);"><img src="https://community.akamai.steamstatic.com/economy/image/-9a81dlWLwJ2UUGcVs_nsVtzdOEdtWwKGZZLQHTxDZ7I56KU0Zwwo4NUX4oFJZEHLbXH5ApeO4YmlhxYQknCRvCo04DEVlxkKgpos7asPwJf1OD3dShD4OOzmImfkuTLMLfQhXhY6_p5j-jX7ML3iQfm_EtsZmyhItOSdQQ6YQqD_gW_wL-8hsK-u57NwHZlvyAh5nrcgVXp1nkyOVFn/96fx96f"><a href="#730_2_20405401654" class="inventory_item_link"></a></div></div><div class="itemHolder"><div class="item app730 context2" id="730_2_20402998183" style="border-color: rgb(210, 210, 210);"><img src="https://community.akamai.steamstatic.com/economy/image/-9a81dlWLwJ2UUGcVs_nsVtzdOEdtWwKGZZLQHTxDZ7I56KU0Zwwo4NUX4oFJZEHLbXQ9Q1LO5kNoBhSQl-fEv2o1t3QXFR6a1wE4uOkKlFm0qvJd2gSvYS3x9nbwfXyZrqBxDkCvZYmjurEpomlilL6ux07YtuiRwA/96fx96f"><a href="#730_2_20402998183" class="inventory_item_link"></a></div></div><div class="itemHolder"><div class="item app730 context2" id="730_2_15376628257" style="border-color: rgb(210, 210, 210);"><img src="https://community.akamai.steamstatic.com/economy/image/-9a81dlWLwJ2UUGcVs_nsVtzdOEdtWwKGZZLQHTxDZ7I56KU0Zwwo4NUX4oFJZEHLbXH5ApeO4YmlhxYQknCRvCo04DEVlxkKgposem2LFZf2-r3cC9B-NW1q4OEmePmMqjFqWZU7Mxkh6fH8Imni1e3rhJpZWv0LNDHelI-NwuDrwPswO3s0JG4v5vJz3ZlvCkn-z-DyHWoV0Xo/96fx96f"><a href="#730_2_15376628257" class="inventory_item_link"></a></div></div><div class="itemHolder"><div class="item app730 context2" id="730_2_15312214098" style="border-color: rgb(210, 210, 210);"><img src="https://community.akamai.steamstatic.com/economy/image/IzMF03bi9WpSBq-S-ekoE33L-iLqGFHVaU25ZzQNQcXdB2ozio1RrlIWFK3UfvMYB8UsvjiMXojflsZalyxSh31CIyHz2GZ-KuFpPsrTzBG0puWyTCW5aWOSKXaATwlpTeBcN2iI9zWl4-TCETrBEuAvRFtSKKYGo2dMa8uAbQx9itAdqGq0mFZwCxo8e9VKaVK6nHdHMOjQVd_fHA/96fx96f"><a href="#730_2_15312214098" class="inventory_item_link"></a></div></div></div><div class="inventory_page" style="display: none;"><div class="itemHolder"><div class="item app730 context2" id="730_2_15254261529" style="border-color: rgb(210, 210, 210);"><img src="https://community.akamai.steamstatic.com/economy/image/IzMF03bi9WpSBq-S-ekoE33L-iLqGFHVaU25ZzQNQcXdB2ozio1RrlIWFK3UfvMYB8UsvjiMXojflsZalyxSh31CIyHz2GZ-KuFpPsrTzBG0suOBCG25Pm-Te3WBHg84T7ZdPT6N-WChtOqVE2vAEuglSwECf_cM9mIdbprYPgx9itAdqGq0mFZwCxo8e9VKaVK4m3dCMuyaadCusA/96fx96f"><a href="#730_2_15254261529" class="inventory_item_link"></a></div></div><div class="itemHolder"><div class="item app730 context2" id="730_2_15165680381" style="border-color: rgb(210, 210, 210);"><img src="https://community.akamai.steamstatic.com/economy/image/-9a81dlWLwJ2UUGcVs_nsVtzdOEdtWwKGZZLQHTxDZ7I56KU0Zwwo4NUX4oFJZEHLbXQ9Q1LO5kNoBhSQl-fV_ak2srsUVxwIgEZ5rikLgYy0KeZdTtHuoW1xteNx6LxMejTlD0BsZ0l07vHoNnw0FKy_F0sPT4FlIcnBQ/96fx96f"><a href="#730_2_15165680381" class="inventory_item_link"></a></div></div><div class="itemHolder"><div class="item app730 context2" id="730_2_15048268641" style="border-color: rgb(210, 210, 210);"><img src="https://community.akamai.steamstatic.com/economy/image/IzMF03bi9WpSBq-S-ekoE33L-iLqGFHVaU25ZzQNQcXdB2ozio1RrlIWFK3UfvMYB8UsvjiMXojflsZalyxSh31CIyHz2GZ-KuFpPsrTzBG0ouqID2fIYz7KKG-LGgcxSrIMNjna_GChtOjCFjCfROt5Qw4CLqIN9GFOOZ2AahJu1tYO5XW2kAJ-ERonYMhTfBuy2ngKbLhxyyIWcNOcDuOP/96fx96f"><a href="#730_2_15048268641" class="inventory_item_link"></a></div></div><div class="itemHolder"><div class="item app730 context2" id="730_2_15046537651" style="border-color: rgb(210, 210, 210);"><img src="https://community.akamai.steamstatic.com/economy/image/IzMF03bi9WpSBq-S-ekoE33L-iLqGFHVaU25ZzQNQcXdB2ozio1RrlIWFK3UfvMYB8UsvjiMXojflsZalyxSh31CIyHz2GZ-KuFpPsrTzBG0pPSEEEvycTKKfXSJTA88RLBYZm_d-Df2s7udQ2ydQLl5S18FL_BSp2wca8vca0E5hZlLpWL-lEtxEQQlZ8lSeR-30ylHaeUjkHGNL0LbzQ/96fx96f"><a href="#730_2_15046537651" class="inventory_item_link"></a></div></div><div class="itemHolder"><div class="item app730 context2" id="730_2_14437143693" style="border-color: rgb(210, 210, 210);"><img src="https://community.akamai.steamstatic.com/economy/image/-9a81dlWLwJ2UUGcVs_nsVtzdOEdtWwKGZZLQHTxDZ7I56KU0Zwwo4NUX4oFJZEHLbXQ9Q1LO5kNoBhSQl-fVOG_wcbQVmJ5IABWuoX3e1Y47P_efWwMtN_gwNTfxKamZ7nVxG9U65Qg0r6Z9I-j3g3s_EY5N22hINCUI1A2ZEaQpAbac7DGmA/96fx96f"><a href="#730_2_14437143693" class="inventory_item_link"></a></div></div><div class="itemHolder"><div class="item app730 context2" id="730_2_13361040192" style="border-color: rgb(210, 210, 210);"><img src="https://community.akamai.steamstatic.com/economy/image/IzMF03bi9WpSBq-S-ekoE33L-iLqGFHVaU25ZzQNQcXdB2ozio1RrlIWFK3UfvMYB8UsvjiMXojflsZalyxSh31CIyHz2GZ-KuFpPsrTzBG0qeOZI2f_bSXNKW-IGggxH7FbYWHY_jGj4-6WRjHAR-4rFQ4HdatX-mRJb8DfbRs6hYda5XW2kAJ-ERonYMhTfBuy2ngKbOQhnXdFJNmAwBkX/96fx96f"><a href="#730_2_13361040192" class="inventory_item_link"></a></div></div><div class="itemHolder"><div class="item app730 context2" id="730_2_12611063426" style="border-color: rgb(210, 210, 210);"><img src="https://community.akamai.steamstatic.com/economy/image/IzMF03bi9WpSBq-S-ekoE33L-iLqGFHVaU25ZzQNQcXdB2ozio1RrlIWFK3UfvMYB8UsvjiMXojflsZalyxSh31CIyHz2GZ-KuFpPsrTzBG0puWyTCa5PG6XKnHaTAtrGbsPPGDdqGGk4rzCE27LQOElFw8CK_AC-zUaOJ2NNgx9itAdqGq0mFZwCxo8e9VKaVLvySERaOWPU0KDYg/96fx96f"><a href="#730_2_12611063426" class="inventory_item_link"></a></div></div><div class="itemHolder"><div class="item app730 context2" id="730_2_12158462004" style="border-color: rgb(210, 210, 210);"><img src="https://community.akamai.steamstatic.com/economy/image/IzMF03bi9WpSBq-S-ekoE33L-iLqGFHVaU25ZzQNQcXdB2ozio1RrlIWFK3UfvMYB8UsvjiMXojflsZalyxSh31CIyHz2GZ-KuFpPsrTzBG0qe6yGX3wYCPGLi3VUgluTOVdNDvf_WH05ezFS2nIROp_Fg0CL_cE-jYdOJraPBQ5htQD_zL2h0p6WBUnfspUfRq33n0DPaR4zXURJs9XfaeMfrs/96fx96f"><a href="#730_2_12158462004" class="inventory_item_link"></a></div></div><div class="itemHolder"><div class="item app730 context2" id="730_2_12076507902" style="border-color: rgb(210, 210, 210);"><img src="https://community.akamai.steamstatic.com/economy/image/IzMF03bi9WpSBq-S-ekoE33L-iLqGFHVaU25ZzQNQcXdB2ozio1RrlIWFK3UfvMYB8UsvjiMXojflsZalyxSh31CIyHz2GZ-KuFpPsrTzBG0pvaKUiOlaWTALHfYSQw9SuJZMDmN_THwsLvGFzGcQeB_EVsCfaNV-jZPPZyXf0xqwtRUp2qqmlFxCh84ftwbcQrjmScXfMviOHE/96fx96f"><a href="#730_2_12076507902" class="inventory_item_link"></a></div></div><div class="itemHolder"><div class="item app730 context2" id="730_2_11967048266" style="border-color: rgb(210, 210, 210);"><img src="https://community.akamai.steamstatic.com/economy/image/IzMF03bi9WpSBq-S-ekoE33L-iLqGFHVaU25ZzQNQcXdB2ozio1RrlIWFK3UfvMYB8UsvjiMXojflsZalyxSh31CIyHz2GZ-KuFpPsrTzBG0pu6FGjqjPGeQeCDYSlo4TbNYZz7a_Geh7OXHFjvPQe1-QQkNdaMF8mVLOp3cIVJjg5FYpGm3hUloEgIhYslfLQvvyS1GM_VW470B/96fx96f"><a href="#730_2_11967048266" class="inventory_item_link"></a></div></div><div class="itemHolder"><div class="item app730 context2" id="730_2_10256896068" style="border-color: rgb(210, 210, 210);"><img src="https://community.akamai.steamstatic.com/economy/image/IzMF03bi9WpSBq-S-ekoE33L-iLqGFHVaU25ZzQNQcXdB2ozio1RrlIWFK3UfvMYB8UsvjiMXojflsZalyxSh31CIyHz2GZ-KuFpPsrTzBG0oPqID0v0ejjXPCTdUlg_RbNeZ2GK-WGnsb_BQTzIF7t6RQwEfaAN-mBMbs2KPBZv0NMCrjH2h0p6WBUnfspUfRq33n0DPaR4ynlFdJ9aqr1ZN_A/96fx96f"><a href="#730_2_10256896068" class="inventory_item_link"></a></div></div><div class="itemHolder"><div class="item app730 context2" id="730_2_7694719164" style="border-color: rgb(210, 210, 210);"><img src="https://community.akamai.steamstatic.com/economy/image/IzMF03bi9WpSBq-S-ekoE33L-iLqGFHVaU25ZzQNQcXdB2ozio1RrlIWFK3UfvMYB8UsvjiMXojflsZalyxSh31CIyHz2GZ-KuFpPsrTzBG0q_eADEvkYDjQYSXaGgY7T7tfZzvY_DClseTAFj7MFOt_EAFSeacM9jIdPpvYOhE53IIVu2u_0UdyEhk6f9BKZAarxm1ONekmkXQQRD1BH9c/96fx96f"><a href="#730_2_7694719164" class="inventory_item_link"></a></div></div><div class="itemHolder disabled"></div><div class="itemHolder disabled"></div><div class="itemHolder disabled"></div><div class="itemHolder disabled"></div><div class="itemHolder disabled"></div><div class="itemHolder disabled"></div><div class="itemHolder disabled"></div><div class="itemHolder disabled"></div><div class="itemHolder disabled"></div><div class="itemHolder disabled"></div><div class="itemHolder disabled"></div><div class="itemHolder disabled"></div><div class="itemHolder disabled"></div></div></div><div id="inventory_76561198102026334_440_2" class="inventory_ctn clearfix" style="display: none;"><div class="inventory_page" style="display: block;"><div class="itemHolder"><div class="item app440 context2" id="440_2_10730613349" style="border-color: rgb(125, 109, 0); background-color: rgb(60, 53, 46);"><img src="https://community.akamai.steamstatic.com/economy/image/fWFc82js0fmoRAP-qOIPu5THSWqfSmTELLqcUywGkijVjZULUrsm1j-9xgEIUxUYWw_dvjFRjffnFfezBOESnN9758NXizNqwVIiYbWxZGE-JlSTBPVbCKBv8l61XnJhu8FlB9Th8e9ReBKv6tX56hoxdA/96fx96f"><a href="#440_2_10730613349" class="inventory_item_link"></a></div></div><div class="itemHolder"><div class="item app440 context2" id="440_2_10627064929" style="border-color: rgb(125, 109, 0); background-color: rgb(60, 53, 46);"><img src="https://community.akamai.steamstatic.com/economy/image/fWFc82js0fmoRAP-qOIPu5THSWqfSmTELLqcUywGkijVjZULUrsm1j-9xgEbZQsUYhTkhzJWhsPZAfOeD-VOn4phtsdQ32ZtxFYoN7PkYmVmIgeaUKNaX_Rjpwy8UHMz6pcxAIfnovUWJ1t9nYFqYw/96fx96f"><a href="#440_2_10627064929" class="inventory_item_link"></a></div></div><div class="itemHolder"><div class="item app440 context2" id="440_2_10650958813" style="border-color: rgb(125, 109, 0); background-color: rgb(60, 53, 46);"><img src="https://community.akamai.steamstatic.com/economy/image/fWFc82js0fmoRAP-qOIPu5THSWqfSmTELLqcUywGkijVjZULUrsm1j-9xgEbZQsUYhTkhzJWhsPZAfOeD-VOn4phtsdQ32ZtxFYoN7PkYmVmIgeaUKNaX_Rjpwy8UHMz6pcxAIfnovUWJ1t9nYFqYw/96fx96f"><a href="#440_2_10650958813" class="inventory_item_link"></a></div></div><div class="itemHolder"><div class="item app440 context2" id="440_2_10654213138" style="border-color: rgb(125, 109, 0); background-color: rgb(60, 53, 46);"><img src="https://community.akamai.steamstatic.com/economy/image/fWFc82js0fmoRAP-qOIPu5THSWqfSmTELLqcUywGkijVjZULUrsm1j-9xgEbZQsUYhTkhzJWhsO0Mv6NGucF1YJlscMEgDdvxVYsMLPkMmFjI1OSUvMHDPBp9lu0CnVluZQxA9Gwp-hIOVK4sMMNWF4/96fx96f"><a href="#440_2_10654213138" class="inventory_item_link"></a></div></div><div class="itemHolder"><div class="item app440 context2" id="440_2_10654213100" style="border-color: rgb(125, 109, 0); background-color: rgb(60, 53, 46);"><img src="https://community.akamai.steamstatic.com/economy/image/fWFc82js0fmoRAP-qOIPu5THSWqfSmTELLqcUywGkijVjZULUrsm1j-9xgEbZQsUYhTkhzJWhsO0Mv6NGucF1YJlscMEgDdvxVYsMLPkMmFjI1OSUvMHDPBp9lu0CnVluZQxA9Gwp-hIOVK4sMMNWF4/96fx96f"><a href="#440_2_10654213100" class="inventory_item_link"></a></div></div><div class="itemHolder"><div class="item app440 context2" id="440_2_10654213223" style="border-color: rgb(125, 109, 0); background-color: rgb(60, 53, 46);"><img src="https://community.akamai.steamstatic.com/economy/image/fWFc82js0fmoRAP-qOIPu5THSWqfSmTELLqcUywGkijVjZULUrsm1j-9xgEbZQsUYhTkhzJWhsO0Mv6NGucF1YJlscMEgDdvxVYsMLPkMmFjI1OSUvMHDPBp9lu0CnVluZQxA9Gwp-hIOVK4sMMNWF4/96fx96f"><a href="#440_2_10654213223" class="inventory_item_link"></a></div></div><div class="itemHolder"><div class="item app440 context2" id="440_2_10654213245" style="border-color: rgb(125, 109, 0); background-color: rgb(60, 53, 46);"><img src="https://community.akamai.steamstatic.com/economy/image/fWFc82js0fmoRAP-qOIPu5THSWqfSmTELLqcUywGkijVjZULUrsm1j-9xgEbZQsUYhTkhzJWhsO0Mv6NGucF1YJlscMEgDdvxVYsMLPkMmFjI1OSUvMHDPBp9lu0CnVluZQxA9Gwp-hIOVK4sMMNWF4/96fx96f"><a href="#440_2_10654213245" class="inventory_item_link"></a></div></div><div class="itemHolder"><div class="item app440 context2" id="440_2_10654213256" style="border-color: rgb(125, 109, 0); background-color: rgb(60, 53, 46);"><img src="https://community.akamai.steamstatic.com/economy/image/fWFc82js0fmoRAP-qOIPu5THSWqfSmTELLqcUywGkijVjZULUrsm1j-9xgEbZQsUYhTkhzJWhsO0Mv6NGucF1YJlscMEgDdvxVYsMLPkMmFjI1OSUvMHDPBp9lu0CnVluZQxA9Gwp-hIOVK4sMMNWF4/96fx96f"><a href="#440_2_10654213256" class="inventory_item_link"></a></div></div><div class="itemHolder"><div class="item app440 context2" id="440_2_10654213235" style="border-color: rgb(125, 109, 0); background-color: rgb(60, 53, 46);"><img src="https://community.akamai.steamstatic.com/economy/image/fWFc82js0fmoRAP-qOIPu5THSWqfSmTELLqcUywGkijVjZULUrsm1j-9xgEbZQsUYhTkhzJWhsO0Mv6NGucF1YJlscMEgDdvxVYsMLPkMmFjI1OSUvMHDPBp9lu0CnVluZQxA9Gwp-hIOVK4sMMNWF4/96fx96f"><a href="#440_2_10654213235" class="inventory_item_link"></a></div></div><div class="itemHolder"><div class="item app440 context2" id="440_2_10654213155" style="border-color: rgb(125, 109, 0); background-color: rgb(60, 53, 46);"><img src="https://community.akamai.steamstatic.com/economy/image/fWFc82js0fmoRAP-qOIPu5THSWqfSmTELLqcUywGkijVjZULUrsm1j-9xgEbZQsUYhTkhzJWhsO0Mv6NGucF1YJlscMEgDdvxVYsMLPkMmFjI1OSUvMHDPBp9lu0CnVluZQxA9Gwp-hIOVK4sMMNWF4/96fx96f"><a href="#440_2_10654213155" class="inventory_item_link"></a></div></div><div class="itemHolder"><div class="item app440 context2" id="440_2_10654213270" style="border-color: rgb(125, 109, 0); background-color: rgb(60, 53, 46);"><img src="https://community.akamai.steamstatic.com/economy/image/fWFc82js0fmoRAP-qOIPu5THSWqfSmTELLqcUywGkijVjZULUrsm1j-9xgEbZQsUYhTkhzJWhsO0Mv6NGucF1YJlscMEgDdvxVYsMLPkMmFjI1OSUvMHDPBp9lu0CnVluZQxA9Gwp-hIOVK4sMMNWF4/96fx96f"><a href="#440_2_10654213270" class="inventory_item_link"></a></div></div><div class="itemHolder"><div class="item app440 context2" id="440_2_10654213588" style="border-color: rgb(125, 109, 0); background-color: rgb(60, 53, 46);"><img src="https://community.akamai.steamstatic.com/economy/image/fWFc82js0fmoRAP-qOIPu5THSWqfSmTELLqcUywGkijVjZULUrsm1j-9xgEbZQsUYhTkhzJWhsO0Mv6NGucF1YJlscMEgDdvxVYsMLPkMmFjI1OSUvMHDPBp9lu0CnVluZQxA9Gwp-hIOVK4sMMNWF4/96fx96f"><a href="#440_2_10654213588" class="inventory_item_link"></a></div></div><div class="itemHolder"><div class="item app440 context2" id="440_2_10654213090" style="border-color: rgb(125, 109, 0); background-color: rgb(60, 53, 46);"><img src="https://community.akamai.steamstatic.com/economy/image/fWFc82js0fmoRAP-qOIPu5THSWqfSmTELLqcUywGkijVjZULUrsm1j-9xgEbZQsUYhTkhzJWhsO0Mv6NGucF1YJlscMEgDdvxVYsMLPkMmFjI1OSUvMHDPBp9lu0CnVluZQxA9Gwp-hIOVK4sMMNWF4/96fx96f"><a href="#440_2_10654213090" class="inventory_item_link"></a></div></div><div class="itemHolder"><div class="item app440 context2" id="440_2_10654213072" style="border-color: rgb(125, 109, 0); background-color: rgb(60, 53, 46);"><img src="https://community.akamai.steamstatic.com/economy/image/fWFc82js0fmoRAP-qOIPu5THSWqfSmTELLqcUywGkijVjZULUrsm1j-9xgEbZQsUYhTkhzJWhsO0Mv6NGucF1YJlscMEgDdvxVYsMLPkMmFjI1OSUvMHDPBp9lu0CnVluZQxA9Gwp-hIOVK4sMMNWF4/96fx96f"><a href="#440_2_10654213072" class="inventory_item_link"></a></div></div><div class="itemHolder"><div class="item app440 context2" id="440_2_10654213179" style="border-color: rgb(125, 109, 0); background-color: rgb(60, 53, 46);"><img src="https://community.akamai.steamstatic.com/economy/image/fWFc82js0fmoRAP-qOIPu5THSWqfSmTELLqcUywGkijVjZULUrsm1j-9xgEbZQsUYhTkhzJWhsO0Mv6NGucF1YJlscMEgDdvxVYsMLPkMmFjI1OSUvMHDPBp9lu0CnVluZQxA9Gwp-hIOVK4sMMNWF4/96fx96f"><a href="#440_2_10654213179" class="inventory_item_link"></a></div></div><div class="itemHolder"><div class="item app440 context2" id="440_2_10654213057" style="border-color: rgb(125, 109, 0); background-color: rgb(60, 53, 46);"><img src="https://community.akamai.steamstatic.com/economy/image/fWFc82js0fmoRAP-qOIPu5THSWqfSmTELLqcUywGkijVjZULUrsm1j-9xgEbZQsUYhTkhzJWhsO0Mv6NGucF1YJlscMEgDdvxVYsMLPkMmFjI1OSUvMHDPBp9lu0CnVluZQxA9Gwp-hIOVK4sMMNWF4/96fx96f"><a href="#440_2_10654213057" class="inventory_item_link"></a></div></div><div class="itemHolder"><div class="item app440 context2" id="440_2_10654213125" style="border-color: rgb(125, 109, 0); background-color: rgb(60, 53, 46);"><img src="https://community.akamai.steamstatic.com/economy/image/fWFc82js0fmoRAP-qOIPu5THSWqfSmTELLqcUywGkijVjZULUrsm1j-9xgEbZQsUYhTkhzJWhsO0Mv6NGucF1YJlscMEgDdvxVYsMLPkMmFjI1OSUvMHDPBp9lu0CnVluZQxA9Gwp-hIOVK4sMMNWF4/96fx96f"><a href="#440_2_10654213125" class="inventory_item_link"></a></div></div><div class="itemHolder"><div class="item app440 context2" id="440_2_10654213197" style="border-color: rgb(125, 109, 0); background-color: rgb(60, 53, 46);"><img src="https://community.akamai.steamstatic.com/economy/image/fWFc82js0fmoRAP-qOIPu5THSWqfSmTELLqcUywGkijVjZULUrsm1j-9xgEbZQsUYhTkhzJWhsO0Mv6NGucF1YJlscMEgDdvxVYsMLPkMmFjI1OSUvMHDPBp9lu0CnVluZQxA9Gwp-hIOVK4sMMNWF4/96fx96f"><a href="#440_2_10654213197" class="inventory_item_link"></a></div></div><div class="itemHolder"><div class="item app440 context2" id="440_2_10654213208" style="border-color: rgb(125, 109, 0); background-color: rgb(60, 53, 46);"><img src="https://community.akamai.steamstatic.com/economy/image/fWFc82js0fmoRAP-qOIPu5THSWqfSmTELLqcUywGkijVjZULUrsm1j-9xgEbZQsUYhTkhzJWhsO0Mv6NGucF1YJlscMEgDdvxVYsMLPkMmFjI1OSUvMHDPBp9lu0CnVluZQxA9Gwp-hIOVK4sMMNWF4/96fx96f"><a href="#440_2_10654213208" class="inventory_item_link"></a></div></div><div class="itemHolder"><div class="item app440 context2" id="440_2_4257038710" style="border-color: rgb(125, 109, 0); background-color: rgb(60, 53, 46);"><img src="https://community.akamai.steamstatic.com/economy/image/fWFc82js0fmoRAP-qOIPu5THSWqfSmTELLqcUywGkijVjZULUrsm1j-9xgEDbQsdUgznvTYR2JmzMvGNG-U_l9sn4pUbjjNtxFEpY7azMmEyIFaUV_RaWqJuolC1WXZk658yBY7k8-lRLwjqvZyGbedPrXeo8A/96fx96f"><a href="#440_2_4257038710" class="inventory_item_link"></a></div></div><div class="itemHolder"><div class="item app440 context2" id="440_2_8221648641" style="border-color: rgb(125, 109, 0); background-color: rgb(60, 53, 46);"><img src="https://community.akamai.steamstatic.com/economy/image/fWFc82js0fmoRAP-qOIPu5THSWqfSmTELLqcUywGkijVjZULUrsm1j-9xgEDbQsdUgznvTYR2Jm_MvGNG-U_l9sn4pUbjWE9yFMuZOa3MWNkdlaVVKEGDPBt9g29XiVmsMY1AdW38rgFfQ_qtJyGbec73J9DDg/96fx96f"><a href="#440_2_8221648641" class="inventory_item_link"></a></div></div><div class="itemHolder"><div class="item app440 context2" id="440_2_8219668225" style="border-color: rgb(125, 109, 0); background-color: rgb(60, 53, 46);"><img src="https://community.akamai.steamstatic.com/economy/image/fWFc82js0fmoRAP-qOIPu5THSWqfSmTELLqcUywGkijVjZULUrsm1j-9xgEDbQsdUgznvTYR2Jm_MvGNG-U_l9sn4pUbjWE9yFMuZOa3MWNkdlaVVKEGDPBt9g29XiVmsMY1AdW38rgFfQ_qtJyGbec73J9DDg/96fx96f"><a href="#440_2_8219668225" class="inventory_item_link"></a></div></div><div class="itemHolder"><div class="item app440 context2" id="440_2_8186839168" style="border-color: rgb(125, 109, 0); background-color: rgb(60, 53, 46);"><img src="https://community.akamai.steamstatic.com/economy/image/fWFc82js0fmoRAP-qOIPu5THSWqfSmTELLqcUywGkijVjZULUrsm1j-9xgEDbQsdUgznvTYR2Jm_MvGNG-U_l9sn4pUbjWE9yFMuZOa3MWNkdlaVVKEGDPBt9g29XiVmsMY1AdW38rgFfQ_qtJyGbec73J9DDg/96fx96f"><a href="#440_2_8186839168" class="inventory_item_link"></a></div></div><div class="itemHolder"><div class="item app440 context2" id="440_2_8271988668" style="border-color: rgb(125, 109, 0); background-color: rgb(60, 53, 46);"><img src="https://community.akamai.steamstatic.com/economy/image/fWFc82js0fmoRAP-qOIPu5THSWqfSmTELLqcUywGkijVjZULUrsm1j-9xgEDbQsdUgznvTYR2Jm_MvGNG-U_l9sn4pUbjWE9yFMuZOa3MWNkdlaVVKEGDPBt9g29XiVmsMY1AdW38rgFfQ_qtJyGbec73J9DDg/96fx96f"><a href="#440_2_8271988668" class="inventory_item_link"></a></div></div><div class="itemHolder"><div class="item app440 context2" id="440_2_8243553372" style="border-color: rgb(125, 109, 0); background-color: rgb(60, 53, 46);"><img src="https://community.akamai.steamstatic.com/economy/image/fWFc82js0fmoRAP-qOIPu5THSWqfSmTELLqcUywGkijVjZULUrsm1j-9xgEDbQsdUgznvTYR2Jm_MvGNG-U_l9sn4pUbjWE9yFMuZOa3MWNkdlaVVKEGDPBt9g29XiVmsMY1AdW38rgFfQ_qtJyGbec73J9DDg/96fx96f"><a href="#440_2_8243553372" class="inventory_item_link"></a></div></div></div><div class="inventory_page" style="display: none;"><div class="itemHolder"><div class="item app440 context2" id="440_2_9035580805" style="border-color: rgb(125, 109, 0); background-color: rgb(60, 53, 46);"><img src="https://community.akamai.steamstatic.com/economy/image/fWFc82js0fmoRAP-qOIPu5THSWqfSmTELLqcUywGkijVjZULUrsm1j-9xgEDbQsdUgznvTYR2Jm_MvGNG-U_l9sn4pUbjWE9yFMuZOa3MWNkdlaVVKEGDPBt9g29XiVmsMY1AdW38rgFfQ_qtJyGbec73J9DDg/96fx96f"><a href="#440_2_9035580805" class="inventory_item_link"></a></div></div><div class="itemHolder"><div class="item app440 context2" id="440_2_8174207829" style="border-color: rgb(125, 109, 0); background-color: rgb(60, 53, 46);"><img src="https://community.akamai.steamstatic.com/economy/image/fWFc82js0fmoRAP-qOIPu5THSWqfSmTELLqcUywGkijVjZULUrsm1j-9xgEDbQsdUgznvTYR2Jm_MvGNG-U_l9sn4pUbjWE9yFMuZOa3MWNkdlaVVKEGDPBt9g29XiVmsMY1AdW38rgFfQ_qtJyGbec73J9DDg/96fx96f"><a href="#440_2_8174207829" class="inventory_item_link"></a></div></div><div class="itemHolder"><div class="item app440 context2" id="440_2_9479876811" style="border-color: rgb(125, 109, 0); background-color: rgb(60, 53, 46);"><img src="https://community.akamai.steamstatic.com/economy/image/fWFc82js0fmoRAP-qOIPu5THSWqfSmTELLqcUywGkijVjZULUrsm1j-9xgEDbQsdUgznvTYR2Jq2MvGNG-U_l9sn4pUb3W8-yVl4MeW0YDVhcFLBUfUNXa07rQ65CH9rvJNlBoHl8-1TLQjotZyGbeeDLYec-g/96fx96f"><a href="#440_2_9479876811" class="inventory_item_link"></a></div></div><div class="itemHolder"><div class="item app440 context2" id="440_2_10654002779" style="border-color: rgb(125, 109, 0); background-color: rgb(60, 53, 46);"><img src="https://community.akamai.steamstatic.com/economy/image/fWFc82js0fmoRAP-qOIPu5THSWqfSmTELLqcUywGkijVjZULUrsm1j-9xgEDbQsdUgznvTYR2Jq2MvGNG-U_l9sn4pUb3W8-yVl4MeW0YDVhcFLBUfUNXa07rQ65CH9rvJNlBoHl8-1TLQjotZyGbeeDLYec-g/96fx96f"><a href="#440_2_10654002779" class="inventory_item_link"></a></div></div><div class="itemHolder"><div class="item app440 context2" id="440_2_10654002795" style="border-color: rgb(125, 109, 0); background-color: rgb(60, 53, 46);"><img src="https://community.akamai.steamstatic.com/economy/image/fWFc82js0fmoRAP-qOIPu5THSWqfSmTELLqcUywGkijVjZULUrsm1j-9xgEDbQsdUgznvTYR2Jq2MvGNG-U_l9sn4pUb3W8-yVl4MeW0YDVhcFLBUfUNXa07rQ65CH9rvJNlBoHl8-1TLQjotZyGbeeDLYec-g/96fx96f"><a href="#440_2_10654002795" class="inventory_item_link"></a></div></div><div class="itemHolder"><div class="item app440 context2" id="440_2_9509856582" style="border-color: rgb(125, 109, 0); background-color: rgb(60, 53, 46);"><img src="https://community.akamai.steamstatic.com/economy/image/fWFc82js0fmoRAP-qOIPu5THSWqfSmTELLqcUywGkijVjZULUrsm1j-9xgEDbQsdUgznvTYR2Jq2MvGNG-U_l9sn4pUb3W8-yVl4MeW0YDVhcFLBUfUNXa07rQ65CH9rvJNlBoHl8-1TLQjotZyGbeeDLYec-g/96fx96f"><a href="#440_2_9509856582" class="inventory_item_link"></a></div></div><div class="itemHolder"><div class="item app440 context2" id="440_2_9483189693" style="border-color: rgb(125, 109, 0); background-color: rgb(60, 53, 46);"><img src="https://community.akamai.steamstatic.com/economy/image/fWFc82js0fmoRAP-qOIPu5THSWqfSmTELLqcUywGkijVjZULUrsm1j-9xgEDbQsdUgznvTYR2Jq2MvGNG-U_l9sn4pUb3W8-yVl4MeW0YDVhcFLBUfUNXa07rQ65CH9rvJNlBoHl8-1TLQjotZyGbeeDLYec-g/96fx96f"><a href="#440_2_9483189693" class="inventory_item_link"></a></div></div><div class="itemHolder"><div class="item app440 context2" id="440_2_9421036960" style="border-color: rgb(125, 109, 0); background-color: rgb(60, 53, 46);"><img src="https://community.akamai.steamstatic.com/economy/image/fWFc82js0fmoRAP-qOIPu5THSWqfSmTELLqcUywGkijVjZULUrsm1j-9xgEDbQsdUgznvTYR2Jq2MvGNG-U_l9sn4pUb3W8-yVl4MeW0YDVhcFLBUfUNXa07rQ65CH9rvJNlBoHl8-1TLQjotZyGbeeDLYec-g/96fx96f"><a href="#440_2_9421036960" class="inventory_item_link"></a></div></div><div class="itemHolder"><div class="item app440 context2" id="440_2_10654002810" style="border-color: rgb(125, 109, 0); background-color: rgb(60, 53, 46);"><img src="https://community.akamai.steamstatic.com/economy/image/fWFc82js0fmoRAP-qOIPu5THSWqfSmTELLqcUywGkijVjZULUrsm1j-9xgEDbQsdUgznvTYR2Jq2MvGNG-U_l9sn4pUb3W8-yVl4MeW0YDVhcFLBUfUNXa07rQ65CH9rvJNlBoHl8-1TLQjotZyGbeeDLYec-g/96fx96f"><a href="#440_2_10654002810" class="inventory_item_link"></a></div></div><div class="itemHolder"><div class="item app440 context2" id="440_2_4475620872" style="border-color: rgb(125, 109, 0); background-color: rgb(60, 53, 46);"><img src="https://community.akamai.steamstatic.com/economy/image/fWFc82js0fmoRAP-qOIPu5THSWqfSmTELLqcUywGkijVjZULUrsm1j-9xgEYeAYcTST1sTZXjdq0XaPaN-ISlNQv4K9Z2CRslE96YOGzMWQwJFfGWfQOXads8l7tUHI3sMQ3UtXl87lTeg_m4tPHZ-N9LpgSSEYlRazx/96fx96f"><a href="#440_2_4475620872" class="inventory_item_link"></a></div></div><div class="itemHolder"><div class="item app440 context2" id="440_2_7020304660" style="border-color: rgb(125, 109, 0); background-color: rgb(60, 53, 46);"><img src="https://community.akamai.steamstatic.com/economy/image/fWFc82js0fmoRAP-qOIPu5THSWqfSmTELLqcUywGkijVjZULUrsm1j-9xgEIYwocSBXrrCF8i8f1APeYAeM_mNsm4K9X1SNunA50Oty5MSVgd0qVVfFcXvQ_8V7pXyExv543AoWyoOxUcVnrs4vOZ7R4NNEZGciGD_OHeEmjvfyz473P/96fx96f"><a href="#440_2_7020304660" class="inventory_item_link"></a></div></div><div class="itemHolder"><div class="item app440 context2" id="440_2_7018412777" style="border-color: rgb(125, 109, 0); background-color: rgb(60, 53, 46);"><img src="https://community.akamai.steamstatic.com/economy/image/fWFc82js0fmoRAP-qOIPu5THSWqfSmTELLqcUywGkijVjZULUrsm1j-9xgEIYwocSBXrrCF8i8f1APeYAeM_mNsm4K9X1SNunA50Oty5MSVgd0qVVfFcXvQ_8V7pXyExv543AoWyoOxUcVnrs4vOZ7R4NNEZGciGD_OHeEmjvfyz473P/96fx96f"><a href="#440_2_7018412777" class="inventory_item_link"></a></div></div><div class="itemHolder"><div class="item app440 context2" id="440_2_6964988360" style="border-color: rgb(125, 109, 0); background-color: rgb(60, 53, 46);"><img src="https://community.akamai.steamstatic.com/economy/image/fWFc82js0fmoRAP-qOIPu5THSWqfSmTELLqcUywGkijVjZULUrsm1j-9xgEIYwocSBXrrCF8i8f1APeYAeM_mNsm4K9X1SNunA50Oty5MSVgd0qVVfFcXvQ_8V7pXyExv543AoWyoOxUcVnrs4vOZ7R4NNEZGciGD_OHeEmjvfyz473P/96fx96f"><a href="#440_2_6964988360" class="inventory_item_link"></a></div></div><div class="itemHolder"><div class="item app440 context2" id="440_2_7138259620" style="border-color: rgb(125, 109, 0); background-color: rgb(60, 53, 46);"><img src="https://community.akamai.steamstatic.com/economy/image/fWFc82js0fmoRAP-qOIPu5THSWqfSmTELLqcUywGkijVjZULUrsm1j-9xgEIYwocSBXrrCF8i8f1APeYAeM_mNsm4K9X1SNunA50Oty5MSVgd0qVVfFcXvQ_8V7pXyExv543AoWyoOxUcVnrs4vOZ7R4NNEZGciGD_OHeEmjvfyz473P/96fx96f"><a href="#440_2_7138259620" class="inventory_item_link"></a></div></div><div class="itemHolder"><div class="item app440 context2" id="440_2_6796264294" style="border-color: rgb(125, 109, 0); background-color: rgb(60, 53, 46);"><img src="https://community.akamai.steamstatic.com/economy/image/fWFc82js0fmoRAP-qOIPu5THSWqfSmTELLqcUywGkijVjZULUrsm1j-9xgEIYwocSBXrrCF8i8f1APeYAeM_mNsm4K9X1SNunA50Oty5MSVgd0qVVfFcXvQ_8V7pXyExv543AoWyoOxUcVnrs4vOZ7R4NNEZGciGD_OHeEmjvfyz473P/96fx96f"><a href="#440_2_6796264294" class="inventory_item_link"></a></div></div><div class="itemHolder"><div class="item app440 context2" id="440_2_7166845589" style="border-color: rgb(125, 109, 0); background-color: rgb(60, 53, 46);"><img src="https://community.akamai.steamstatic.com/economy/image/fWFc82js0fmoRAP-qOIPu5THSWqfSmTELLqcUywGkijVjZULUrsm1j-9xgEIYwocSBXrrCF8i8f1APeYAeM_mNsm4K9X1SNunA50Oty5MSVgd0qVVfFcXvQ_8V7pXyExv543AoWyoOxUcVnrs4vOZ7R4NNEZGciGD_OHeEmjvfyz473P/96fx96f"><a href="#440_2_7166845589" class="inventory_item_link"></a></div></div><div class="itemHolder"><div class="item app440 context2" id="440_2_7170956688" style="border-color: rgb(125, 109, 0); background-color: rgb(60, 53, 46);"><img src="https://community.akamai.steamstatic.com/economy/image/fWFc82js0fmoRAP-qOIPu5THSWqfSmTELLqcUywGkijVjZULUrsm1j-9xgEIYwocSBXrrCF8i8f1APeYAeM_mNsm4K9X1SNunA50Oty5MSVgd0qVVfFcXvQ_8V7pXyExv543AoWyoOxUcVnrs4vOZ7R4NNEZGciGD_OHeEmjvfyz473P/96fx96f"><a href="#440_2_7170956688" class="inventory_item_link"></a></div></div><div class="itemHolder"><div class="item app440 context2" id="440_2_6837050155" style="border-color: rgb(125, 109, 0); background-color: rgb(60, 53, 46);"><img src="https://community.akamai.steamstatic.com/economy/image/fWFc82js0fmoRAP-qOIPu5THSWqfSmTELLqcUywGkijVjZULUrsm1j-9xgEIYwocSBXrrCF8i8f1APeYAeM_mNsm4K9X1SNunA50Oty5MSVgd0qVVfFcXvQ_8V7pXyExv543AoWyoOxUcVnrs4vOZ7R4NNEZGciGD_OHeEmjvfyz473P/96fx96f"><a href="#440_2_6837050155" class="inventory_item_link"></a></div></div><div class="itemHolder"><div class="item app440 context2" id="440_2_6875576034" style="border-color: rgb(125, 109, 0); background-color: rgb(60, 53, 46);"><img src="https://community.akamai.steamstatic.com/economy/image/fWFc82js0fmoRAP-qOIPu5THSWqfSmTELLqcUywGkijVjZULUrsm1j-9xgEIYwocSBXrrCF8i8f1APeYAeM_mNsm4K9X1SNunA50Oty5MSVgd0qVVfFcXvQ_8V7pXyExv543AoWyoOxUcVnrs4vOZ7R4NNEZGciGD_OHeEmjvfyz473P/96fx96f"><a href="#440_2_6875576034" class="inventory_item_link"></a></div></div><div class="itemHolder"><div class="item app440 context2" id="440_2_7183962172" style="border-color: rgb(125, 109, 0); background-color: rgb(60, 53, 46);"><img src="https://community.akamai.steamstatic.com/economy/image/fWFc82js0fmoRAP-qOIPu5THSWqfSmTELLqcUywGkijVjZULUrsm1j-9xgEIYwocSBXrrCF8i8f1APeYAeM_mNsm4K9X1SNunA50Oty5MSVgd0qVVfFcXvQ_8V7pXyExv543AoWyoOxUcVnrs4vOZ7R4NNEZGciGD_OHeEmjvfyz473P/96fx96f"><a href="#440_2_7183962172" class="inventory_item_link"></a></div></div><div class="itemHolder"><div class="item app440 context2" id="440_2_7198318974" style="border-color: rgb(125, 109, 0); background-color: rgb(60, 53, 46);"><img src="https://community.akamai.steamstatic.com/economy/image/fWFc82js0fmoRAP-qOIPu5THSWqfSmTELLqcUywGkijVjZULUrsm1j-9xgEIYwocSBXrrCF8i8f1APeYAeM_mNsm4K9X1SNunA50Oty5MSVgd0qVVfFcXvQ_8V7pXyExv543AoWyoOxUcVnrs4vOZ7R4NNEZGciGD_OHeEmjvfyz473P/96fx96f"><a href="#440_2_7198318974" class="inventory_item_link"></a></div></div><div class="itemHolder"><div class="item app440 context2" id="440_2_7217443694" style="border-color: rgb(125, 109, 0); background-color: rgb(60, 53, 46);"><img src="https://community.akamai.steamstatic.com/economy/image/fWFc82js0fmoRAP-qOIPu5THSWqfSmTELLqcUywGkijVjZULUrsm1j-9xgEIYwocSBXrrCF8i8f1APeYAeM_mNsm4K9X1SNunA50Oty5MSVgd0qVVfFcXvQ_8V7pXyExv543AoWyoOxUcVnrs4vOZ7R4NNEZGciGD_OHeEmjvfyz473P/96fx96f"><a href="#440_2_7217443694" class="inventory_item_link"></a></div></div><div class="itemHolder"><div class="item app440 context2" id="440_2_7104213128" style="border-color: rgb(125, 109, 0); background-color: rgb(60, 53, 46);"><img src="https://community.akamai.steamstatic.com/economy/image/fWFc82js0fmoRAP-qOIPu5THSWqfSmTELLqcUywGkijVjZULUrsm1j-9xgEIYwocSBXrrCF8i8f1APeYAeM_mNsm4K9X1SNunA50Oty5MSVgd0qVVfFcXvQ_8V7pXyExv543AoWyoOxUcVnrs4vOZ7R4NNEZGciGD_OHeEmjvfyz473P/96fx96f"><a href="#440_2_7104213128" class="inventory_item_link"></a></div></div><div class="itemHolder"><div class="item app440 context2" id="440_2_7113624575" style="border-color: rgb(125, 109, 0); background-color: rgb(60, 53, 46);"><img src="https://community.akamai.steamstatic.com/economy/image/fWFc82js0fmoRAP-qOIPu5THSWqfSmTELLqcUywGkijVjZULUrsm1j-9xgEIYwocSBXrrCF8i8f1APeYAeM_mNsm4K9X1SNunA50Oty5MSVgd0qVVfFcXvQ_8V7pXyExv543AoWyoOxUcVnrs4vOZ7R4NNEZGciGD_OHeEmjvfyz473P/96fx96f"><a href="#440_2_7113624575" class="inventory_item_link"></a></div></div><div class="itemHolder"><div class="item app440 context2" id="440_2_6911568429" style="border-color: rgb(125, 109, 0); background-color: rgb(60, 53, 46);"><img src="https://community.akamai.steamstatic.com/economy/image/fWFc82js0fmoRAP-qOIPu5THSWqfSmTELLqcUywGkijVjZULUrsm1j-9xgEIYwocSBXrrCF8i8f1APeYAeM_mNsm4K9X1SNunA50Oty5MSVgd0qVVfFcXvQ_8V7pXyExv543AoWyoOxUcVnrs4vOZ7R4NNEZGciGD_OHeEmjvfyz473P/96fx96f"><a href="#440_2_6911568429" class="inventory_item_link"></a></div></div></div></div></div>
							<div id="inventory_pagecontrols">

								<span class="inventory_loading_indicator responsive_hidden">
									<img src="https://community.akamai.steamstatic.com/public/images/login/throbber.gif">
								</span>

								<a class="pagecontrol_element pagebtn" id="pagebtn_next" href="javascript:void(0);" onclick="InventoryNextPage();">
									&gt;
								</a>
								<div class="pagecontrol_element pagecounts">
									16 of 247
                                </div>
								<a class="pagecontrol_element pagebtn" id="pagebtn_previous" href="javascript:void(0);" onclick="InventoryPreviousPage();">
									&lt;
								</a>
								<div style="clear: right;"></div>
							</div>
							<div style="clear: right;"></div>

						</div>
					</div>

					<div class="view_inventory_page inventory_msg_ctn" id="empty_inventory_page" style="display: none;">
						<div class="inventory_msg_content">
							You currently have 0 items in your <span class="gamename"></span> inventory.							<span id="empty_inventory_page_howtoget">
							</span>
						</div>
					</div>
					<div class="view_inventory_page inventory_msg_ctn" id="pending_inventory_page" style="display: none;">
						<div class="inventory_msg_content">
							<img src="https://community.akamai.steamstatic.com/public/images/login/throbber.gif">
						</div>
					</div>

					<div class="view_inventory_page inventory_msg_ctn" id="empty_filtered_inventory_page" style="display: none; border: 1px solid #4d729a;">
						<div class="inventory_msg_content">
							Your filter did not find any items.						</div>
					</div>

					<div class="view_inventory_page inventory_msg_ctn" id="failed_inventory_page" style="display: none;">
						<div class="inventory_msg_content">
							This inventory is not available at this time.  Please try again later.						</div>
					</div>
				</div>
			
			
		</div>

	</div>

	<div id="gift_modal" class="modal_frame" style="display:none;">
		<div class="modal_top_band">
			<div class="modal_close"><a href="javascript:hideModal( 'gift_modal' )"><img src="https://community.akamai.steamstatic.com/public/images/x9x9.gif" width="9" height="9" border="0" alt="Close" /></a></div>
		</div>
		<div class="modal_box">
			<div class="modal_box_ctn">
			<div id="gift_error_modal_content">
				<p>Sorry, an error has occurred:</p>
				<h2 id="gift_error_modal_message" class="gift_error_message"></h2>
				<div class="gift_modal_text" id="gift_error_modal_details"></div>
				<div class="buttons">
					<div class="btn_grey_white_innerfade btn_medium" onclick="hideModal( 'gift_modal' );">
						<span>OK</span>
					</div>
				</div>
			</div>
			<div id="gift_success_modal_content">
				<h2 id="gift_success_modal_message"></h2>
				<div class="gift_modal_text" id="gift_success_modal_details"></div>
				<div class="buttons">
					<div class="btn_grey_white_innerfade btn_medium" onclick="hideModal( 'gift_modal' );">
						<span>OK</span>
					</div>
				</div>
			</div>
			<div id="gift_unpack_install_modal">
				<h2><span id="gift_unpack_install_packagename"></span> has been added to your account.</span></h2>
				<div class="gift_modal_text">
											The next time you open the Steam Client you can download and play from the Library.									</div>
				<div class="buttons">
										<div class="btn_grey_white_innerfade btn_medium active" onclick="hideModal( 'gift_modal' );">
						<span>Close</span>
					</div>
				</div>
			</div>
		</div>
		</div>
	</div>

	
<div style="display:none" id="billing_info_form">
	<form method="POST">

		<div class="giftcard_billing_required">
			We need to know where you live for the purpose of collecting sales tax.<br>Please enter your address below:		</div>

		<div class="form_row redeem_form_row" id="billing_city_row">
			<div>
				<label for="billing_city">
					<div>City</div>
					<input type="text" class="redeem_input_box_text" tabindex="103" maxlength="255" name="billing_city" id="billing_city">
				</label>
				<div style="clear: both;"></div>
			</div>
		</div>

		<div class="form_row redeem_form_row" id="billing_state_row">
			<div>
				<label for="billing_state">
					<div>State/Province</div>
					<select id="billing_state_select" tabindex="104">
						<option value="">Select State/Province</option>
													<option value="AA">AA</option>
													<option value="AE">AE</option>
													<option value="AP">AP</option>
													<option value="AK">AK</option>
													<option value="AL">AL</option>
													<option value="AR">AR</option>
													<option value="AS">AS</option>
													<option value="AZ">AZ</option>
													<option value="CA">CA</option>
													<option value="CO">CO</option>
													<option value="CT">CT</option>
													<option value="DC">DC</option>
													<option value="DE">DE</option>
													<option value="FL">FL</option>
													<option value="FM">FM</option>
													<option value="GA">GA</option>
													<option value="GU">GU</option>
													<option value="HI">HI</option>
													<option value="IA">IA</option>
													<option value="ID">ID</option>
													<option value="IL">IL</option>
													<option value="IN">IN</option>
													<option value="KS">KS</option>
													<option value="KY">KY</option>
													<option value="LA">LA</option>
													<option value="MA">MA</option>
													<option value="ME">ME</option>
													<option value="MD">MD</option>
													<option value="MH">MH</option>
													<option value="MI">MI</option>
													<option value="MN">MN</option>
													<option value="MO">MO</option>
													<option value="MS">MS</option>
													<option value="MT">MT</option>
													<option value="NC">NC</option>
													<option value="ND">ND</option>
													<option value="NE">NE</option>
													<option value="NH">NH</option>
													<option value="NJ">NJ</option>
													<option value="NM">NM</option>
													<option value="NV">NV</option>
													<option value="NY">NY</option>
													<option value="MP">MP</option>
													<option value="OH">OH</option>
													<option value="OK">OK</option>
													<option value="OR">OR</option>
													<option value="PA">PA</option>
													<option value="PR">PR</option>
													<option value="PW">PW</option>
													<option value="RI">RI</option>
													<option value="SC">SC</option>
													<option value="SD">SD</option>
													<option value="TN">TN</option>
													<option value="TX">TX</option>
													<option value="UT">UT</option>
													<option value="VI">VI</option>
													<option value="VT">VT</option>
													<option value="VA">VA</option>
													<option value="WA">WA</option>
													<option value="WI">WI</option>
													<option value="WV">WV</option>
													<option value="WY">WY</option>
											</select>
				</label>
				<div style="clear: both;"></div>
			</div>
		</div>

		<div class="form_row redeem_form_row" id="billing_postal_code_row">
			<div>
				<label for="billing_postal_code">
					<div>Zip or postal code</div>
					<input tabindex="105" type="text" class="redeem_input_box_text" maxlength="255" name="billing_postal_code" id="billing_postal_code">
				</label>
				<div style="clear: both;"></div>
			</div>
		</div>
	</form>
</div>
</div>

		</div>	<!-- responsive_page_legacy_content -->

			<div id="footer_spacer" class=""></div>
	<div id="footer_responsive_optin_spacer"></div>
	<div id="footer">
					<div class="footer_content">
				<span id="footerLogo"><img src="https://community.akamai.steamstatic.com/public/images/skin_1/footerLogo_valve.png?v=1" width="96" height="26" border="0" alt="Valve Logo" /></span>
				<span id="footerText">
					&copy; Valve Corporation. All rights reserved. All trademarks are property of their respective owners in the US and other countries.<br/>Some geospatial data on this website is provided by <a href="https://steamcommunity.com/linkfilter/?url=http://www.geonames.org" target="_blank" rel="noreferrer">geonames.org</a>.					<br>
											<span class="valve_links">
							<a href="http://store.steampowered.com/privacy_agreement/" target="_blank">Privacy Policy</a>
							&nbsp; | &nbsp;<a href="https://store.steampowered.com/legal/" target="_blank">Legal</a>
							&nbsp;| &nbsp;<a href="http://store.steampowered.com/subscriber_agreement/" target="_blank">Steam Subscriber Agreement</a>
                            &nbsp;| &nbsp;<a href="http://store.steampowered.com/account/cookiepreferences/" target="_blank">Cookies</a>
						</span>
									</span>
			</div>
							<div class="responsive_optin_link">
				<div class="btn_medium btnv6_grey_black" onclick="Responsive_RequestMobileView()">
					<span>View mobile website</span>
				</div>
			</div>
			</div>
	
	</div>	<!-- responsive_page_content -->

</div>	<!-- responsive_page_frame -->
</body>
</html>