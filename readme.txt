=== Stallion WordPress SEO Plugin ===
Contributors: seo-dave
Donate link: http://www.stallion-theme.com/stallion-wordpress-seo-plugin
Tags: canonical, noindex, nofollow, wordpress seo, seo, meta, google, search engine optimization, search engine, pagerank, link benefit
Requires at least: 3.0
Tested up to: 3.1.3
Stable tag: 1.0

The Stallion WordPress SEO Plugin was created to replace the WordPress SEO plugins that damage a sites SEO efforts. Nofollow/noindex damages SEO!

== Description ==

There are several very popular WordPress Plugins including the Yoast WordPress SEO Plugin (uses nofollow and noindex) and the All in One SEO Pack WordPress Plugin (uses noindex) that when used incorrectly can seriously damage a WordPress sites search engine rankings because they include the ability to nofollow and noindex sections of a WordPress site.

Webmasters spend a lot of their SEO time gaining (even paying for) valuable backlinks to their WordPress blogs only to waste a significant proportion of that hard earned link benefit by installing so called WordPress SEO plugins that delete/waste that link benefit through nofollow/noindex.

See [Stallion WordPress SEO Plugin](http://www.stallion-theme.com/stallion-wordpress-seo-plugin "WordPress SEO Plugin") for more information and discussion.

**NEVER use nofollow**

SEO Experts have known for years that nofollow deletes valuable Google link benefit, a Google employee (Matt Cutt's) has even confirmed this fact on his blog http://www.mattcutts.com/blog/pagerank-sculpting/

	So what happens when you have a page with "ten PageRank points" and ten outgoing links, and five of those links are nofollowed? Let's leave aside the decay factor to focus on the core part of the question. Originally, the five links without nofollow would have flowed two points of PageRank each (in essence, the nofollowed links didn't count toward the denominator when dividing PageRank by the outdegree of the page). More than a year ago, Google changed how the PageRank flows so that the five links without nofollow would flow one point of PageRank each.

All WordPress Plugins that add rel="nofollow" attributes to internal links within your site should NOT be used, a nofollowed link is deleting your valuable link benefit! The WordPress core commenting system that uses nofollow on comment author links is already deleting too much of your valuable link benefit (possible to remove this at theme level), don't make it worse by adding more!

**Why you should AVOID noindex**

Although noindex is not as SEO damaging as nofollow (doesn't delete link benefit per se), noindex does waste link benefit. When a page is noindexed the link benefit that flows through the page does NO SEO work on that noindexed page! All good SEO experts know when link benefit flows through a page (via links) a proportion of that link benefit is used (spent) on that page (estimated 15% is used, it's the dampening factor within the PageRank formula).

The perfect SEO setup is ALL pages on a site target one or more keywords (SERPs : Search Engine Results Pages) so ALL the link benefit flowing through the site generates traffic from search engines like Google through relevant SERPs. Few sites are perfect SEO wise, we have Contact, About, Privacy, Disclaimer, Shopping Basket and other pages that though important to our visitors have little to no SEO value. Noindex can block these pages from being indexed, but noindex does NOT recycle the link benefit (the 15% that's lost), there is little value in noindexing a page when the link benefit is wasted, OK the page isn't indexed, but the link benefit is still used (wasted).

With the Stallion WordPress SEO Plugin we can freely link to any internal post, page, category, tag, monthly archive... and recycle the link benefit via canonical URLs through one easy to use options page.

**Stallion WordPress SEO Plugin Features**

The Stallion WordPress SEO Plugin uses canonical URLs to mimic the affects of noindex, but without wasting valuable link benefit. When a page has a canonical URL it tells major search engines like Google where the preferred URL for that page is.

This is what the Stallion WordPress SEO Plugin can do:

1. Equivalent of noindex login pages redirecting link benefit to home.

1. Equivalent of noindex admin pages redirecting link benefit to home.

1. Equivalent of noindex date archive pages redirecting link benefit to home.

1. Equivalent of noindex category archive pages redirecting link benefit to home.
1. Equivalent of noindex paged category archive pages (pages 2,3,4 etc...) redirecting link benefit to the first page in the category.

1. Equivalent of noindex tag archive pages redirecting link benefit to home.
1. Equivalent of noindex paged tag archive pages (pages 2,3,4 etc...) redirecting link benefit to the first page in the tag.

1. Equivalent of noindex search results pages redirecting link benefit to home.
1. Equivalent of noindex paged search results pages (pages 2,3,4 etc...) redirecting link benefit to the first page in the search result.

1. Equivalent of noindex paged home archive pages (pages 2,3,4 etc...) redirecting link benefit to the home page.

1. Equivalent of noindex single blog Posts and static Pages (Privacy, Disclaimer pages for example) redirecting link benefit to the home page (this feature needs a little code work).

**How Canonical URLs Work**

Most WordPress blogs these days use search engine friendly permalinks, but that does not mean the default dynamic WordPress URLs no longer exist. There are always at least two ways (two different URLs) to access a WordPress post, having canonical URLs (which is now part of core WordPress) prevents Google etc... from indexing the same post under multiple URLs (reduces the chances of duplicate content issues).

Canonical basically redirects the link benefit and SEO rankings to the preferred canonical URL whilst still allowing visitors to those pages to view the pages in a browser (to Google a canonical URL is like a 301 permanent redirect).

By adding targeted canonical URLs to sections of a WordPress site we do not want indexing, Google etc... will not index those sections, whilst redirecting the link benefit to the canonical URL (less wasted link benefit). The Stallion WordPress SEO Plugin sets canonical URLs to the home page or the first page of categories, tags and search results archives recycling the link benefit that would be wasted from using noindex robots meta tags.

== Installation ==

You can use the built in WordPress plugin installer (under 'Plugins >> Add New : Upload') and plugin upgrader, or you can install the Stallion WordPress SEO plugin manually using FTP.

1. Upload the `stallion-wordress-seo-plugin` folder to the `/wp-content/plugins/` directory using FTP
2. Activate the Stallion WordPress SEO plugin through the 'Plugins' menu in WordPress
3. Configure the SEO plugin by going to the 'Stallion WordPress SEO' menu under the 'Settings' menu

== Frequently Asked Questions ==

= The Stallion WordPress SEO Plugin Lacks Title and Meta Tags Features =

The first release of the Stallion WordPress SEO Plugin only deals with protecting link benefit flowing through a site that other WordPress SEO plugins damages. The Yoast WordPress SEO Plugin and the All in One SEO Pack WordPress Plugin title element and meta tag features are if used correctly not SEO damaging.

If this SEO plugin becomes popular I'll see if I can add title element type manipulation in the future.

You can safely use this plugin alongside other WordPress SEO plugins, for it to work correctly you should disable all nofollow and noindex features of other WordPress SEO plugins and turn off their canonical URL features. Some of the features of the Yoast WordPress SEO Plugin and the All in One SEO Pack WordPress Plugin are useful, it's the nofollow and noindex options that should be disabled.

== Screenshots ==

== Changelog ==

= 1.0 =
* First release.

== Upgrade Notice ==
