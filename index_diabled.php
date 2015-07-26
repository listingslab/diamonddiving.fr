
<div id="wp_disabled">
	<style>
		#wp_disabled {
			font-family: Helvetica;
			color:#333;
		}
		#wp_disabled h1, #wp_disabled h2, #wp_disabled h3 {
			color:#0e5395;
		}
		#wp_disabled a{
			text-decoration:none;
			color:#48b7de;
			font-weight:bold;
		}
		#wp_disabled li{
			list-style:none;
		}
	</style>
	<script type="text/javascript">

/***********************************************
* Bookmark site script- © Dynamic Drive DHTML code library (www.dynamicdrive.com)
* This notice MUST stay intact for legal use
* Visit Dynamic Drive at http://www.dynamicdrive.com/ for full source code
***********************************************/

/* Modified to support Opera */
function bookmarksite(title,url){
if (window.sidebar) // firefox
	window.sidebar.addPanel(title, url, "");
else if(window.opera && window.print){ // opera
	var elem = document.createElement('a');
	elem.setAttribute('href',url);
	elem.setAttribute('title',title);
	elem.setAttribute('rel','sidebar');
	elem.click();
} 
else if(document.all)// ie
	window.external.AddFavorite(url, title);
}
</script>
	<img width="100" height="100" align="left" src="/wp-content/themes/diamond-diving/_listingslab/_png/dd_icon.png" />
	<h2>WordPress site disabled on listingslab-dev-1.com because it is not ready yet</h2>
	<ul>
		<li><? print '<a href="http://www.diamonddiving.net" class="" title="#">
		Goto diamonddiving.net instead?</a>'; ?></li>
		<li><? print '<a href="https://github.com/listingslab/dev-2" class="" title="#" target="_blank">
		GitHub Repository</a>'; ?></li>
		<li><a href="javascript:bookmarksite('Diamond Diving English', 'http://listingslab-dev-2.com')">Come back later?</a></li>
		
	</ul>
</div>