<?php
/*
Plugin Name: Stallion WordPress SEO Plugin
Plugin URI: http://www.stallion-theme.com/stallion-wordpress-seo-plugin
Description: Block search engines like Google from indexing sections/pages of your site without deleting valuable link benefit via canonical URLs rather than noindex and nofollow. Other so called WordPress SEO plugins damage your sites search engine optimization by using nofollow (deletes link benefit) and noindex (wastes link benefit). The Stallion WordPress SEO Plugin uses canonical URLs to conserve link benefit.
Version: 1.0
Author: David Law
Author URI: http://www.stallion-theme.com/
*/
/*
Copyright (C) 2011 David Law (http://www.stallion-theme.com/ email davidlseo(at)gmail(dot)com)

This program is free software; you can redistribute it and/or modify
it under the terms of the GNU General Public License as published by
the Free Software Foundation; either version 3 of the License, or
(at your option) any later version.

This program is distributed in the hope that it will be useful,
but WITHOUT ANY WARRANTY; without even the implied warranty of
MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
GNU General Public License for more details.

You should have received a copy of the GNU General Public License
along with this program. If not, see <http://www.gnu.org/licenses/>.
*/
?>
<?php
add_action('admin_menu', 'stallion_seo_plugin');
add_action('login_head', 'st_seo_notindex_login');
add_action('admin_head', 'st_seo_notindex_admin');
add_action('wp_head', 'st_seo_notindex');
add_option(st_seo_notindex_login, '2');
add_option(st_seo_notindex_admin, '2');
add_option(st_seo_notindex_date, '1');
add_option(st_seo_notindex_author, '1');
add_option(st_seo_notindex_search, '0');
add_option(st_seo_notindex_tags, '0');
add_option(st_seo_notindex_category, '0');
add_option(st_seo_notindex_home, '1');

function stallion_seo_plugin() {
add_options_page('Stallion WordPress SEO Plugin Options', 'Stallion WordPress SEO', 8, __FILE__, 'stallion_seo_plugin_admin');
}

function st_seo_notindex_login() {
if (get_option('st_seo_notindex_login') == "2") {
echo "\n<!-- Stallion WordPress SEO Plugin 1.0 by David Law http://www.stallion-theme.com/stallion-wordpress-seo-plugin -->\n";
echo "<link rel=\"canonical\" href=\"".get_option('home')."\" />\n";
echo "<!-- Stallion WordPress SEO Plugin -->\n";
}}

function st_seo_notindex_admin() {
if (get_option('st_seo_notindex_admin') == "2") {
echo "\n<!-- Stallion WordPress SEO Plugin 1.0 by David Law http://www.stallion-theme.com/stallion-wordpress-seo-plugin -->\n";
echo "<link rel=\"canonical\" href=\"".get_option('home')."\" />\n";
echo "<!-- Stallion WordPress SEO Plugin -->\n";
}}

function st_seo_notindex() {
if (get_option('st_seo_notindex_pages')) {
$pages = explode(",", get_option('st_seo_notindex_pages'));
if (is_page($pages)) {
remove_action('wp_head', 'rel_canonical'); // not working???
echo "\n<!-- Stallion WordPress SEO Plugin 1.0 by David Law http://www.stallion-theme.com/stallion-wordpress-seo-plugin -->\n";
echo "<link rel=\"canonical\" href=\"".get_option('home')."\" />\n";
echo "<!-- Stallion WordPress SEO Plugin -->\n";
}}

if (get_option('st_seo_notindex_posts')) {
$posts = explode(",", get_option('st_seo_notindex_posts'));
if (is_single($posts)) {
remove_action('wp_head', 'rel_canonical'); // not working???
echo "\n<!-- Stallion WordPress SEO Plugin 1.0 by David Law http://www.stallion-theme.com/stallion-wordpress-seo-plugin -->\n";
echo "<link rel=\"canonical\" href=\"".get_option('home')."\" />\n";
echo "<!-- Stallion WordPress SEO Plugin -->\n";
}}

if (get_option('st_seo_notindex_date') == "2") {
if (is_date()) {
echo "\n<!-- Stallion WordPress SEO Plugin 1.0 by David Law http://www.stallion-theme.com/stallion-wordpress-seo-plugin -->\n";
echo "<link rel=\"canonical\" href=\"".get_option('home')."\" />\n";
echo "<!-- Stallion WordPress SEO Plugin -->\n";
}}

if (get_option('st_seo_notindex_author') == "2") {
if (is_author()) {
echo "\n<!-- Stallion WordPress SEO Plugin 1.0 by David Law http://www.stallion-theme.com/stallion-wordpress-seo-plugin -->\n";
echo "<link rel=\"canonical\" href=\"".get_option('home')."\" />\n";
echo "<!-- Stallion WordPress SEO Plugin -->\n";
}}

if (get_option('st_seo_notindex_search') == "1") {
if (is_search()) {
echo "\n<!-- Stallion WordPress SEO Plugin 1.0 by David Law http://www.stallion-theme.com/stallion-wordpress-seo-plugin -->\n";
echo "<link rel=\"canonical\" href=\"".get_option('home')."\" />\n";
echo "<!-- Stallion WordPress SEO Plugin -->\n";
}}

if (get_option('st_seo_notindex_search') == "2") {
if (is_search() || is_search() && is_paged()) {
echo "\n<!-- Stallion WordPress SEO Plugin 1.0 by David Law http://www.stallion-theme.com/stallion-wordpress-seo-plugin -->\n";
echo "<link rel=\"canonical\" href=\"".get_search_link(get_query_var('search'))."\" />\n";
echo "<!-- Stallion WordPress SEO Plugin -->\n";
}}

if (get_option('st_seo_notindex_tags') == "1") {
if (is_tag()) {
echo "\n<!-- Stallion WordPress SEO Plugin 1.0 by David Law http://www.stallion-theme.com/stallion-wordpress-seo-plugin -->\n";
echo "<link rel=\"canonical\" href=\"".get_option('home')."\" />\n";
echo "<!-- Stallion WordPress SEO Plugin -->\n";
}}

if (get_option('st_seo_notindex_tags') == "2") {
if (is_tag() || is_tag() && is_paged()) {
echo "\n<!-- Stallion WordPress SEO Plugin 1.0 by David Law http://www.stallion-theme.com/stallion-wordpress-seo-plugin -->\n";
echo "<link rel=\"canonical\" href=\"".get_term_link(get_query_var('tag'), 'post_tag')."\" />\n";
echo "<!-- Stallion WordPress SEO Plugin -->\n";
}}

if (get_option('st_seo_notindex_category') == "1") {
if (is_category()) {
echo "\n<!-- Stallion WordPress SEO Plugin 1.0 by David Law http://www.stallion-theme.com/stallion-wordpress-seo-plugin -->\n";
echo "<link rel=\"canonical\" href=\"".get_option('home')."\" />\n";
echo "<!-- Stallion WordPress SEO Plugin -->\n";
}}

if (get_option('st_seo_notindex_category') == "2") {
if (is_category() || is_category() && is_paged()) {
echo "\n<!-- Stallion WordPress SEO Plugin 1.0 by David Law http://www.stallion-theme.com/stallion-wordpress-seo-plugin -->\n";
echo "<link rel=\"canonical\" href=\"".get_category_link(get_query_var('cat'))."\" />\n";
echo "<!-- Stallion WordPress SEO Plugin -->\n";
}}

if (get_option('st_seo_notindex_home') == "1") {
if (is_home() && !is_paged()) {
echo "\n<!-- Stallion WordPress SEO Plugin 1.0 by David Law http://www.stallion-theme.com/stallion-wordpress-seo-plugin -->\n";
echo "<link rel=\"canonical\" href=\"".get_option('home')."\" />\n";
echo "<!-- Stallion WordPress SEO Plugin -->\n";
}}

if (get_option('st_seo_notindex_home') == "2") {
if (is_home() || is_home() && is_paged()) {
echo "\n<!-- Stallion WordPress SEO Plugin 1.0 by David Law http://www.stallion-theme.com/stallion-wordpress-seo-plugin -->\n";
echo "<link rel=\"canonical\" href=\"".get_option('home')."\" />\n";
echo "<!-- Stallion WordPress SEO Plugin -->\n";
}}
}

function stallion_seo_plugin_admin() {
if($_POST['st_seo_notindex_hidden'] == 'Y') {

$st_seo_notindex_login = $_POST['st_seo_notindex_login'];
update_option('st_seo_notindex_login', $st_seo_notindex_login);

$st_seo_notindex_admin = $_POST['st_seo_notindex_admin'];
update_option('st_seo_notindex_admin', $st_seo_notindex_admin);

$st_seo_notindex_date = $_POST['st_seo_notindex_date'];
update_option('st_seo_notindex_date', $st_seo_notindex_date);

$st_seo_notindex_author = $_POST['st_seo_notindex_author'];
update_option('st_seo_notindex_author', $st_seo_notindex_author);

$st_seo_notindex_search = $_POST['st_seo_notindex_search'];
update_option('st_seo_notindex_search', $st_seo_notindex_search);

$st_seo_notindex_tags = $_POST['st_seo_notindex_tags'];
update_option('st_seo_notindex_tags', $st_seo_notindex_tags);

$st_seo_notindex_category = $_POST['st_seo_notindex_category'];
update_option('st_seo_notindex_category', $st_seo_notindex_category);

$st_seo_notindex_home = $_POST['st_seo_notindex_home'];
update_option('st_seo_notindex_home', $st_seo_notindex_home);

$st_seo_notindex_pages = $_POST['st_seo_notindex_pages'];
update_option('st_seo_notindex_pages', $st_seo_notindex_pages);

$st_seo_notindex_posts = $_POST['st_seo_notindex_posts'];
update_option('st_seo_notindex_posts', $st_seo_notindex_posts);
?>
<div class="updated"><p><strong><?php _e('Stallion WordPress SEO Plugin Options Saved.' ); ?></strong></p></div>
<?php }
else {
} ?>

<div class="wrap">
<h2><?php _e('Stallion WordPress SEO Plugin Options') ?></h2>

<p>I've made this WordPress SEO plugin to replace the current SEO damaging WordPress plugins that have become very popular in the WordPress community. I'm afraid plugins like the <a href="http://www.google-adsense-templates.co.uk/wordpress-all-in-one-seo-plugin-review.html" target="_blank">All in One SEO Pack WordPress Plugin</a> and the <a href="http://www.google-adsense-templates.co.uk/yoast-wordpress-seo-plugin-review.html" target="_blank">Yoast WordPress SEO Plugin</a> add damaging nofollow and noindex code to your WordPress blogs. Noindex wastes links benefit, nofollow deletes link benefit.</p>
<p>Read more about the <a href="http://www.stallion-theme.com/stallion-wordpress-seo-plugin" target="_blank">Stallion WordPress SEO Plugin</a> and how it uses canonical URLs to conserve link benefit from the pages you don't want indexed.</p>

<h3><?php _e('Block page types and redirect link benefit to the Home page') ?></h3>

<form name="st_seo_notindex_form" method="post" action="<?php echo str_replace( '%7E', '~', $_SERVER['REQUEST_URI']); ?>">
<input type="hidden" name="st_seo_notindex_hidden" value="Y">
<table cellspacing="2" cellpadding="5" border="0" width=100% class="editform">
<tr valign="top"><td scope="row" width="33%">

<?php _e("<strong>WordPress Login Pages</strong>" ); ?></td>

<td><input type="radio" name="st_seo_notindex_login" value="1" <?php checked('1', get_option('st_seo_notindex_login')); ?> > <?php _e('Index Login Pages', 'stallion_seo_plugin'); ?><br />
<input type="radio" name="st_seo_notindex_login" value="2" <?php checked('2', get_option('st_seo_notindex_login')); ?> > <?php _e('Block Login Pages**', 'stallion_seo_plugin'); ?><br /><br /></td>
</tr>
<tr valign="top"><td scope="row" width="33%">
<?php _e("<strong>WordPress Admin Pages</strong>" ); ?></td>

<td><input type="radio" name="st_seo_notindex_admin" value="1" <?php checked('1', get_option('st_seo_notindex_admin')); ?> > <?php _e('Index Admin Pages', 'stallion_seo_plugin'); ?><br />
<input type="radio" name="st_seo_notindex_admin" value="2" <?php checked('2', get_option('st_seo_notindex_admin')); ?> > <?php _e('Block Admin Pages**', 'stallion_seo_plugin'); ?><br /><br /></td>
</tr>
<tr valign="top"><td scope="row" width="33%">
<?php _e("<strong>Date Archives</strong>" ); ?></td>

<td><input type="radio" name="st_seo_notindex_date" value="1" <?php checked('1', get_option('st_seo_notindex_date')); ?> > <?php _e('Index Date Archives', 'stallion_seo_plugin'); ?><br />
<input type="radio" name="st_seo_notindex_date" value="2" <?php checked('2', get_option('st_seo_notindex_date')); ?> > <?php _e('Block All Date Archives**', 'stallion_seo_plugin'); ?><br /><br /></td>
</tr>
<tr valign="top"><td scope="row" width="33%">
<?php _e("<strong>Author Archives</strong>" ); ?></td>

<td><input type="radio" name="st_seo_notindex_author" value="1" <?php checked('1', get_option('st_seo_notindex_author')); ?> > <?php _e('Index Author Archives', 'stallion_seo_plugin'); ?><br />
<input type="radio" name="st_seo_notindex_author" value="2" <?php checked('2', get_option('st_seo_notindex_author')); ?> > <?php _e('Block All Author Archives**', 'stallion_seo_plugin'); ?><br /><br /></td>
</tr>
<tr valign="top"><td scope="row" width="33%">
<?php _e("<strong>Search Results</strong>" ); ?></td>

<td><input type="radio" name="st_seo_notindex_search" value="0" <?php checked('0', get_option('st_seo_notindex_search')); ?> > <?php _e('Index All Search Results', 'stallion_seo_plugin'); ?><br />
<input type="radio" name="st_seo_notindex_search" value="1" <?php checked('1', get_option('st_seo_notindex_search')); ?> > <?php _e('Block All Search Results', 'stallion_seo_plugin'); ?><br />
<input type="radio" name="st_seo_notindex_search" value="2" <?php checked('2', get_option('st_seo_notindex_search')); ?> > <?php _e('Index First Search Result Only : Block Paged 2,3,4...**', 'stallion_seo_plugin'); ?><br /><br /></td>
</tr>
<tr valign="top"><td scope="row" width="33%">
<?php _e("<strong>Category Archives</strong>" ); ?></td>

<td><input type="radio" name="st_seo_notindex_category" value="0" <?php checked('0', get_option('st_seo_notindex_category')); ?> > <?php _e('Index All Categories^^', 'stallion_seo_plugin'); ?><br />
<input type="radio" name="st_seo_notindex_category" value="1" <?php checked('1', get_option('st_seo_notindex_category')); ?> > <?php _e('Block All Categories', 'stallion_seo_plugin'); ?><br />
<input type="radio" name="st_seo_notindex_category" value="2" <?php checked('2', get_option('st_seo_notindex_category')); ?> > <?php _e('Index First Category Only : Block Paged 2,3,4...', 'stallion_seo_plugin'); ?><br /><br /></td>
</tr>
<tr valign="top"><td scope="row" width="33%">
<?php _e("<strong>Tag Archives</strong>" ); ?></td>

<td><input type="radio" name="st_seo_notindex_tags" value="0" <?php checked('0', get_option('st_seo_notindex_tags')); ?> > <?php _e('Index All Tags', 'stallion_seo_plugin'); ?><br />
<input type="radio" name="st_seo_notindex_tags" value="1" <?php checked('1', get_option('st_seo_notindex_tags')); ?> > <?php _e('Block All Tags', 'stallion_seo_plugin'); ?><br />
<input type="radio" name="st_seo_notindex_tags" value="2" <?php checked('2', get_option('st_seo_notindex_tags')); ?> > <?php _e('Index First Tag Only : Block Paged 2,3,4...^^', 'stallion_seo_plugin'); ?><br /><br /></td>
</tr>
<tr valign="top"><td scope="row" width="33%">
<?php _e("<strong>Home Page Archives</strong>" ); ?></td>

<td><input type="radio" name="st_seo_notindex_home" value="1" <?php checked('1', get_option('st_seo_notindex_home')); ?> > <?php _e('Index Home Paged Archives', 'stallion_seo_plugin'); ?><br />
<input type="radio" name="st_seo_notindex_home" value="2" <?php checked('2', get_option('st_seo_notindex_home')); ?> > <?php _e('Index Home Page Only : Block Paged 2,3,4...^^', 'stallion_seo_plugin'); ?><br /><br /></td>
</tr>

<tr valign="top">
<td colspan="2">
<h2><?php _e('Stallion WordPress SEO Plugin Tutorial') ?></h2>

<div style="float:right;">
<a href="http://www.stallion-theme.com/" target="_blank"><img src="<?php echo WP_PLUGIN_URL; ?>/stallion-wordpress-seo/stallion-300-250.gif" alt="Stallion SEO Ad Theme" width="300" /></a>
</div>

<p>The page types blocked above will still be spidered by Google etc..., but those pages will NOT be indexed (they will not be found for relevant searches). Links from those blocked pages will be followed, but the link benefit that would be wasted if you noindexed archives etc... is redirected back to the home page or the non paged category/tag/search result.</p>
<p>With the right settings your sites important pages will be fully indexed, while unimportant pages (like monthly archives) are not indexed, but the link benefit to those blocked (not indexed) pages is not wasted (it's redirected to other pages).</p>
<p>The settings marked ** are highly recommended settings for most WordPress blogs. The pages blocked have little to no SEO value and in the case of login and admin pages waste link benefit.</p>

<h2><?php _e('Should I Block Categories and/or Tags?') ?></h2>

<p>Categories, Tags and Home page archives have SEO value. Categories and Tags have the potential to generate search engine traffic in their own right IF you SEO the naming of your Categories and Tags and so ideally would NOT be blocked from indexing (do not block them both completely search engine spiders may have difficulty passing link benefit to deeper content).</p>
<p>Categories, Tags and the Home Page archives are a useful navigation tools for search engine spiders, they allow for easy spidering of your blog Posts while passing link benefit through your WordPress blog to deeper content. The Home page, paged archives have no SEO value beyond a navigation route (a sitemap) for search engine spiders (page 3 of your Home archives isn't going to generate much search engine traffic), so as long as you have fully indexed Categories and/or Tags you don't need paged Home archives (block them). Search engines need at least one way to find your posts naturally (through links), the best way is through well thought out Categories and/or Tags. My recommended settings for full search engine spider access are marked ^^, but each site has different needs. I rely heavily of Categories for passing link benefit through a site (and for gaining relevant traffic to categories) so they are very important to my sites SEO (I'd never block them). If you use Tags as the main way to allow search engine spiders access to your deeper content fully index Tags instead of Categories or fully index both Categories and Tags if you use them both.</p>
<p>Whatever you do, do not block both Categories and Tags completely.</p>
</td>
</tr>
<tr valign="top">
<td colspan="2">
<div style="float:right;"><script type="text/javascript" src="http://forms.aweber.com/form/55/580104155.js"></script></div>
<h2>NOT Indexed WordPress Static Pages</h2>
<p>Enter Static Page IDs below for Static Pages you do NOT want indexed by search engines (Privacy, Disclaimer pages etc...). Separate multiple page IDs with a comma: 3,7,4,25</p>
<textarea name="st_seo_notindex_pages"><?php echo $st_seo_notindex_pages; ?></textarea>
<p>Note: This feature is currently not ready for use. not been able to remove the built in WordPress canonical URL for these pages. This means there are two canonical URLs listed and (one to the actual page and the other to the home page). Use at your own risk: shouldn't cause SEO damage.</p>
</td>
</tr>

<tr valign="top">
<td colspan="2">
<h2>NOT Indexed WordPress Posts</h2>
<p>Enter Blog Post IDs for the posts you do NOT want indexed by search engines. Separate multiple post/page IDs with a comma: 3,7,4,25</p>
<textarea name="st_seo_notindex_posts"><?php echo $st_seo_notindex_posts; ?></textarea>
<p>Note: This feature is currently not ready for use. Not been able to remove the built in WordPress canonical URL for these pages. This means there are two canonical URLs listed and (one to the actual page and the other to the home page). Use at your own risk: shouldn't cause SEO damage.</p>
</td>
</tr>

<tr valign="top">
<td colspan="2"><p class="submit"><input type="submit" class="button-primary" name="Submit" value="<?php _e('Save Options') ?>" /></p></td>
</tr>
</table>
</form>

<p>See more useful <a href="http://www.google-adsense-templates.co.uk/wordpress-seo-plugins" target="_blank">WordPress Plugins</a>.</p>
</div>
<?php }?>