<?php get_header(); ?>


<?php

$page_redirected_from = $_SERVER['REQUEST_URI'];  // this is especially useful with error 404 to indicate the missing page.
$server_url = "http://" . $_SERVER["SERVER_NAME"] . "/";
$redirect_url = $_SERVER["REDIRECT_URL"];
$redirect_url_array = parse_url($redirect_url);
$end_of_path = strrchr($redirect_url_array["path"], "/");
$error_code = "404 - Not Found";
$explanation = "ping: cannot resolve '" . $page_redirected_from . "': Unknown page.";
?>

<div id="obsah">	

<h2>404: Page not found</h2>

<p style="margin-top:1.5em;"><?PHP echo($explanation); ?></p>

<p>Abort, retry, fail, search for it?</p>

<p id="search-4" class="widget widget_search"><h2 class="widgettitle">Search</h2>
<form method="get" id="searchform" action="http://bomphiologia.com/blog/">
<div>
	<input type="text" value="" name="s404" id="s404" size="15" /><br />
	<input type="submit" id="searchsubmit404" value="Search" />
</div>
</form>
</p>
</div><!-- div obsah-->

<?php get_sidebar(); ?>
<?php get_footer(); ?>	
