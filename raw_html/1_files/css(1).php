@charset "UTF-8";

/* --- moderator_bar.css --- */

#moderatorBar
{
	background-color: rgb(43, 43, 43);
	border-bottom: 1px solid rgb(187, 187, 187);	
	font-size: 11px;
}

/*#moderatorBar
{
	box-shadow: 0 0 5px #aaa;
	width: 100%;
	position: fixed;
	top: 0px;
	z-index: 100;
}

body
{
	padding-top: 25px;
}*/

/* clearfix */ #moderatorBar { zoom: 1; } #moderatorBar:after { content: '.'; display: block; height: 0; clear: both; visibility: hidden; }

#moderatorBar .pageContent
{
	padding: 2px 0;
	overflow: auto;
}

#moderatorBar a
{
	display: inline-block;
	padding: 2px 10px;
	border-radius: 3px;
}

#moderatorBar a,
#moderatorBar .itemCount
{
	color: rgb(240, 240, 240);
}

	#moderatorBar a:hover
	{
		text-decoration: none;
		background-color: rgb(83, 83, 83);
		color: rgb(250, 250, 250);
	}

/* TODO: maybe sort out the vertical alignment of the counters so they they are properly centered */

#moderatorBar .itemLabel,
#moderatorBar .itemCount
{
	display: inline-block;
	height: 16px;
	line-height: 16px;
}

#moderatorBar .itemCount
{	
	background: rgb(83, 83, 83);
	padding-left: 6px;
	padding-right: 6px;
	
	text-align: center;
	
	font-weight: bold;
	
	border-radius: 2px;
	text-shadow: none;
}

	#moderatorBar .itemCount.alert
	{
		background: #e03030;
		color: white;
		box-shadow: 2px 2px 5px rgba(0,0,0, 0.25);
	}
	
#moderatorBar .adminLink
{
	float: right;
}

#moderatorBar .permissionTest,
#moderatorBar .permissionTest:hover
{
	background: #e03030;
	color: white;
	box-shadow: 2px 2px 5px rgba(0,0,0, 0.25);
	font-weight: bold;
}

/* --- uix_extendedFooter.css --- */





	
	
	
	
	
	







	.bigFooter .pageContent
	{
		color: rgb(187, 187, 187);
background-color: rgb(43, 43, 43);
padding: 16px 32px;
margin-top: 16px;
margin-bottom: 16px;
border-radius: 4px;
clear: both;


		
	}

	.bigFooterRow--mainRow {
		margin-left: -16px;
		margin-right: -16px;
	}

	.hasFlexbox .bigFooterRow--mainRow {
		display: -ms-flexbox;
		display: -webkit-flex;
		display: flex;

		-ms-flex-wrap: wrap;
		-webkit-flex-wrap: wrap;
		flex-wrap: wrap;
	}

	.bigFooterCol
	{
		vertical-align: top;
		box-sizing: border-box;

		padding-right: 16px;
padding-left: 16px;
border-color:  rgb(255, 255, 255); border-color:  rgba(255, 255, 255, .1); _border-color:  rgb(255, 255, 255);
line-height: 180%;
text-align: left;

	}

	.hasFlexbox .bigFooterCol {
		-ms-flex: 1 1 260px;
		-webkit-flex: 1 1 260px;
		flex: 1 1 260px;
	}

	

	

	

	

	.bigFooterHeader
	{
		font-size: 16px;
color: #FFFFFF;
margin-bottom: 16px;
font-weight: 600;
;
	}

	.bigFooterHeader a { color: inherit }

	.bigFooterHeader .uix_icon
	{
		color: rgb(83, 83, 83);
margin-right: 8px;
display: inline-block;

	}

	.bigFooterCol a
	{
		color: #FFFFFF;
text-decoration: none;

	}

	.bigFooterCol a:hover
	{
		color: rgb(70, 102, 124);

	}

	.bigFooterCol .footerMenu
	{
		margin-bottom: 8px;
	}

	.bigFooterCol .footerMenu a
	{
		color: #FFFFFF;
padding: 8px 0;
border-bottom:  1px solid rgb(255,255,255); border-bottom:  1px solid rgba(255,255,255, .1); _border-bottom:  1px solid rgb(255,255,255);
display: block;

	}

	.bigFooterCol .widget-container
	{
		 background: none;
		 padding: 0;
		 margin: 0;
		 border: none;
		 border-radius: 0;
		 box-shadow: none;
	}

	@media (max-width: 480px)
	{
		.Responsive .bigFooterHeader {text-align: center;}
		.Responsive .bigFooterHeader .uix_icon {
			display: block;
			font-size: 48px;
			margin: 0;
			margin-bottom: 16px;
		}

		.Responsive .bigFooterRow--mainRow {text-align: center;}
	}


















/* CSS returned from cache. */