<?php get_header(); ?>






       
                <div id="container">    
                        <div id="content">

                           <div id="background">
                               <div id="padded-area">
	                            <div id="page">

                              <div id="titlebar">
						<a href="index.html"><span class="title-primary">Aaron <br /> Samardzich</span></a>

					</div>

					<div id="logo">
						<a href="index.html">
							<img src="writer.png" alt="writer logo" />
						</a>
					</div>


                                        <div id="intro-text">
                                        <h1>Welcome to Aaron Samardzich's Web Site </h1>

					<p>
					I am a first-year graduate student in the Master of Science in Technical 
					Communication and Information Design program at the Illinois Institute
					of Technology. <strong><a href="about-me.html">Read more</a></strong>.
					</p>
					
					<p>
					Throughout my undergraduate coursework at DePaul University, I have completed 
					various projects that reflect my professional skills and interests. An aspiring
					technical writer, I plan on expanding my <strong><a href="portfolio.html">portfolio</a></strong> 
					to include additonal samples of technical documentation as I complete my graduate coursework, 
					as most of my current portfolio items are academic and research-based.
					</p>
					
					<p>

					For my contact information, academic background, professional experience, and technology skills please
					visit my <strong><a href="resume.html">resume</a></strong> page.
					</p>
                                        </div>







                        
<?php global $wp_query; $total_pages = $wp_query->max_num_pages; if ( $total_pages > 1 ) { ?>
                                <div id="nav-above" class="navigation">
                                        <div class="nav-previous"><?php next_posts_link(__( '<span class="meta-nav">&laquo;</span> Older posts', 'your-theme' )) ?></div>
                                        <div class="nav-next"><?php previous_posts_link(__( 'Newer posts <span class="meta-nav">&raquo;</span>', 'your-theme' )) ?></div>
                                </div><!-- #nav-above -->
<?php } ?>                      

<?php /* The Loop — with comments! */ ?>                        
<?php while ( have_posts() ) : the_post() ?>

<?php /* Create a div with a unique ID thanks to the_ID() and semantic classes with post_class() */ ?>          
                                <div id="post-<?php the_ID(); ?>" <?php post_class(); ?>>                               
<?php /* an h2 title */ ?>                                                      
                                        <h2 class="entry-title"><a href="<?php the_permalink(); ?>" title="<?php printf( __('Permalink to %s', 'your-theme'), the_title_attribute('echo=0') ); ?>" rel="bookmark"><?php the_title(); ?></a></h2>
                                        
<?php /* Microformatted, translatable post meta */ ?>                                                                           
                                        <div class="entry-meta">
                                                <span class="meta-prep meta-prep-author"><?php _e('By ', 'your-theme'); ?></span>
                                                <span class="author vcard"><a class="url fn n" href="<?php echo get_author_link( false, $authordata->ID, $authordata->user_nicename ); ?>" title="<?php printf( __( 'View all posts by %s', 'your-theme' ), $authordata->display_name ); ?>"><?php the_author(); ?></a></span>
                                                <span class="meta-sep"> | </span>
                                                <span class="meta-prep meta-prep-entry-date"><?php _e('Published ', 'your-theme'); ?></span>
                                                <span class="entry-date"><abbr class="published" title="<?php the_time('Y-m-d\TH:i:sO') ?>"><?php the_time( get_option( 'date_format' ) ); ?></abbr></span>
                                                <?php edit_post_link( __( 'Edit', 'your-theme' ), "<span class=\"meta-sep\">|</span>\n\t\t\t\t\t\t<span class=\"edit-link\">", "</span>\n\t\t\t\t\t" ) ?>
                                        </div><!-- .entry-meta -->

<?php /* The entry content */ ?>                                        
                                        <div class="entry-content">     
<?php the_content( __( 'Continue reading <span class="meta-nav">&raquo;</span>', 'your-theme' )  ); ?>
<?php wp_link_pages('before=<div class="page-link">' . __( 'Pages:', 'your-theme' ) . '&after=</div>') ?>
                                        </div><!-- .entry-content -->

<?php /* Microformatted category and tag links along with a comments link */ ?>                                 
                                        <div class="entry-utility">
                                                <span class="cat-links"><span class="entry-utility-prep entry-utility-prep-cat-links"><?php _e( 'Posted in ', 'your-theme' ); ?></span><?php echo get_the_category_list(', '); ?></span>
                                                <span class="meta-sep"> | </span>
                                                <?php the_tags( '<span class="tag-links"><span class="entry-utility-prep entry-utility-prep-tag-links">' . __('Tagged ', 'your-theme' ) . '</span>', ", ", "</span>\n\t\t\t\t\t\t<span class=\"meta-sep\">|</span>\n" ) ?>
                                                <span class="comments-link"><?php comments_popup_link( __( 'Leave a comment', 'your-theme' ), __( '1 Comment', 'your-theme' ), __( '% Comments', 'your-theme' ) ) ?></span>
                                                <?php edit_post_link( __( 'Edit', 'your-theme' ), "<span class=\"meta-sep\">|</span>\n\t\t\t\t\t\t<span class=\"edit-link\">", "</span>\n\t\t\t\t\t\n" ) ?>
                                        </div><!-- #entry-utility -->   
                                </div><!-- #post-<?php the_ID(); ?> -->

<?php /* Close up the post div */ ?>                    
        
<?php endwhile; ?>              

<?php global $wp_query; $total_pages = $wp_query->max_num_pages; if ( $total_pages > 1 ) { ?>
                                <div id="nav-below" class="navigation">
                                        <div class="nav-previous"><?php next_posts_link(__( '<span class="meta-nav">&laquo;</span> Older posts', 'your-theme' )) ?></div>
                                        <div class="nav-next"><?php previous_posts_link(__( 'Newer posts <span class="meta-nav">&raquo;</span>', 'your-theme' )) ?></div>
                                </div><!-- #nav-below -->
<?php } ?>                       

                            <ul id="navigation">

						<li><a href="index.html">Home</a></li>
						<li><a href="resume.html">Resume</a></li>
						<li><a href="portfolio.html">Portfolio</a></li>
						<li><a href="about-me.html">About Me</a></li>
					</ul>



<div id="whole-sidebar">

<div id="primary" class="aside main-aside">
	<ul class="xoxo">
<li id="search-2" class="widgetcontainer widget_search"><h3 class="widgettitle"><label for="s">Search</label></h3>

	<form id="searchform" method="get" action="http://aaronsamardzich.com/blog/">
		<div>
			<input id="s" name="s" type="text" value="Type text" onfocus="if (this.value == 'Type text') {this.value = '';}" onblur="if (this.value == '') {this.value = 'Type text';}" size="20" tabindex="1" />
			<input id="searchsubmit" name="searchsubmit" type="submit" value="Search" tabindex="2" />
		</div>
	</form></li><li id="categories-2" class="widgetcontainer widget_categories"><h3 class="widgettitle">Categories</h3>

		<ul>
	<li class="cat-item cat-item-1"><a href="http://aaronsamardzich.com/blog/?cat=1" title="View all posts filed under Uncategorized">Uncategorized</a>
</li>
		</ul>
</li><li id="archives-2" class="widgetcontainer widget_archive"><h3 class="widgettitle">Archives</h3>
		<ul>
			<li><a href='http://aaronsamardzich.com/blog/?m=201012' title='December 2010'>December 2010</a></li>
	<li><a href='http://aaronsamardzich.com/blog/?m=201011' title='November 2010'>November 2010</a></li>

		</ul>
</li>
	</ul>
</div><!-- #primary .aside -->


<div id="secondary" class="aside main-aside">
	

<ul class="xoxo">
<li id="linkcat-2" class="widgetcontainer widget_links"><h3 class="widgettitle">Blogroll</h3>


	<ul class='xoxo blogroll'>
<li><a href="http://codex.wordpress.org/">Documentation</a></li>

<li><a href="http://wordpress.org/extend/plugins/">Plugins</a></li>
<li><a href="http://wordpress.org/extend/ideas/">Suggest Ideas</a></li>
<li><a href="http://wordpress.org/support/">Support Forum</a></li>
<li><a href="http://wordpress.org/extend/themes/">Themes</a></li>
<li><a href="http://wordpress.org/news/">WordPress Blog</a></li>
<li><a href="http://planet.wordpress.org/">WordPress Planet</a></li>

	</ul>
</li>





<li id="rss-links-2" class="widgetcontainer widget_rss-links"><h3 class="widgettitle">RSS Links</h3>

			<ul>
				<li><a href="http://aaronsamardzich.com/blog/?feed=rss2" title=" Posts RSS feed" rel="alternate nofollow" type="application/rss+xml">All posts</a></li>
				<li><a href="http://aaronsamardzich.com/blog/?feed=comments-rss2" title=" Comments RSS feed" rel="alternate nofollow" type="application/rss+xml">All comments</a></li>
			</ul>
</li><li id="meta-2" class="widgetcontainer widget_meta"><h3 class="widgettitle">Meta</h3>
			<ul>
			<li><a href="http://aaronsamardzich.com/blog/wp-admin/">Site Admin</a></li>			<li><a href="http://aaronsamardzich.com/blog/wp-login.php?action=logout&amp;_wpnonce=5f0c4ac9f7">Log out</a></li>

						</ul>
</li>
	</ul>
     </div><!-- #secondary .aside -->
</div><!-- #whole-sidebar -->


                                      </div><!-- #page -->         
                                </div><!-- #padded-area -->
                            </div><!-- #background -->
                       </div><!-- #content -->      
                </div><!-- #container -->
          















         
    
<?php get_sidebar(); ?> 
<?php get_footer(); ?>
