<?php
/**
 * Plugin Name: Mel's Super Rad Patterns
 * Description: A simple plugin to demonstrate how to add Block Patterns to Gutenberg.
 * Version: 1.0
 * Author: Mel Choyce
 */

/**
 * Register Custom Block Styles
 */
function mels_patterns_register_block_patterns() {
	if ( function_exists( 'register_pattern' ) ) {
		/**
		 * Register block patterns
		 */
		register_pattern(
			'mels-gutenberg-block-patterns/intro-two-columns',
			array(
				'title'   => __( 'Intro paragraph with two columns', 'mels-gutenberg-block-patterns' ),
				'content' => "<!-- wp:columns -->\n<div class=\"wp-block-columns\"><!-- wp:column {\"width\":80} -->\n<div class=\"wp-block-column\" style=\"flex-basis:80%\"><!-- wp:paragraph {\"customFontSize\":28} -->\n<p style=\"font-size:28px\">Driving empathy maps and possibly surprise and delight. Target mobile-first design with the aim to build ROI.</p>\n<!-- /wp:paragraph --></div>\n<!-- /wp:column -->\n\n<!-- wp:column {\"width\":33.33} -->\n<div class=\"wp-block-column\" style=\"flex-basis:33.33%\"></div>\n<!-- /wp:column --></div>\n<!-- /wp:columns -->\n\n<!-- wp:columns -->\n<div class=\"wp-block-columns\"><!-- wp:column -->\n<div class=\"wp-block-column\"><!-- wp:paragraph -->\n<p>Informing innovation and then surprise and delight. Driving custom solutions and possibly think outside the box. Create awareness with a goal to funnel users. Lead relevant and engaging content with the possibility to infiltrate new markets.</p>\n<!-- /wp:paragraph --></div>\n<!-- /wp:column -->\n\n<!-- wp:column -->\n<div class=\"wp-block-column\"><!-- wp:paragraph -->\n<p>Amplifying innovation with the possibility to target the low hanging fruit. Consider dark social but innovate. Creating a holistic approach in order to be on brand. Leading empathy maps but be CMSable. Repurposing branding and mobile-first design.</p>\n<!-- /wp:paragraph --></div>\n<!-- /wp:column --></div>\n<!-- /wp:columns -->",
			)
		);

		register_pattern(
			'mels-gutenberg-block-patterns/article-start',
			array(
				'title'   => __( 'An article introduction', 'mels-gutenberg-block-patterns' ),
				'content' => "<!-- wp:paragraph {\"align\":\"center\",\"customFontSize\":16} -->\n<p style=\"font-size:16px\" class=\"has-text-align-center\"><strong>Essay</strong></p>\n<!-- /wp:paragraph -->\n\n<!-- wp:heading {\"align\":\"center\",\"level\":1} -->\n<h1 class=\"has-text-align-center\">Branding</h1>\n<!-- /wp:heading -->\n\n<!-- wp:paragraph {\"align\":\"center\",\"customFontSize\":48} -->\n<p style=\"font-size:48px\" class=\"has-text-align-center\">by Leon Fritz</p>\n<!-- /wp:paragraph -->\n\n<!-- wp:spacer {\"height\":20} -->\n<div style=\"height:20px\" aria-hidden=\"true\" class=\"wp-block-spacer\"></div>\n<!-- /wp:spacer -->\n\n<!-- wp:paragraph {\"align\":\"center\",\"customFontSize\":28} -->\n<p style=\"font-size:28px\" class=\"has-text-align-center\">Synchronize customer experience with a goal to target the low hanging fruit. Inform growth hacking and above all, surprise and delight. Inform empathy maps yet infiltrate new markets. Amplify analytics with the aim to go viral. Demonstrate transformation mapping to in turn think outside the box.</p>\n<!-- /wp:paragraph -->",
			)
		);

		register_pattern(
			'mels-gutenberg-block-patterns/image-diamond-grid',
			array(
				'title'   => __( 'River gallery with text', 'mels-gutenberg-block-patterns' ),
				'content' => "<!-- wp:columns {\"align\":\"wide\"} -->\n<div class=\"wp-block-columns alignwide\"><!-- wp:column -->\n<div class=\"wp-block-column\"><!-- wp:spacer -->\n<div style=\"height:100px\" aria-hidden=\"true\" class=\"wp-block-spacer\"></div>\n<!-- /wp:spacer -->\n\n<!-- wp:image {\"align\":\"right\",\"sizeSlug\":\"large\"} -->\n<div class=\"wp-block-image\"><figure class=\"alignright size-large\"><img src=\"https://cldup.com/rGZ2j5-WRp.jpg\" alt=\"\"/></figure></div>\n<!-- /wp:image -->\n\n<!-- wp:image {\"align\":\"right\",\"width\":192,\"height\":287,\"sizeSlug\":\"large\"} -->\n<div class=\"wp-block-image\"><figure class=\"alignright size-large is-resized\"><img src=\"https://cldup.com/eFVKJ-e7rD.jpg\" alt=\"\" width=\"192\" height=\"287\"/></figure></div>\n<!-- /wp:image --></div>\n<!-- /wp:column -->\n\n<!-- wp:column -->\n<div class=\"wp-block-column\"><!-- wp:image {\"align\":\"left\",\"width\":186,\"height\":247,\"sizeSlug\":\"large\"} -->\n<div class=\"wp-block-image\"><figure class=\"alignleft size-large is-resized\"><img src=\"https://cldup.com/ty2U8b9QUw.jpg\" alt=\"\" width=\"186\" height=\"247\"/></figure></div>\n<!-- /wp:image -->\n\n<!-- wp:image {\"align\":\"left\",\"sizeSlug\":\"large\"} -->\n<div class=\"wp-block-image\"><figure class=\"alignleft size-large\"><img src=\"https://cldup.com/YTEryY32so.jpg\" alt=\"\"/></figure></div>\n<!-- /wp:image --></div>\n<!-- /wp:column -->\n\n<!-- wp:column -->\n<div class=\"wp-block-column\"><!-- wp:spacer {\"height\":245} -->\n<div style=\"height:245px\" aria-hidden=\"true\" class=\"wp-block-spacer\"></div>\n<!-- /wp:spacer -->\n\n<!-- wp:heading -->\n<h2>Synergy is key</h2>\n<!-- /wp:heading -->\n\n<!-- wp:paragraph -->\n<p>Creating branding so that we funnel users. Repurposing brand integration to in turn create a better customer experience. Target above the fold but improve overall outcomes.</p>\n<!-- /wp:paragraph -->\n\n<!-- wp:paragraph -->\n<p>Driving brand ambassadors with a goal to create actionable insights. </p>\n<!-- /wp:paragraph -->\n\n<!-- wp:paragraph -->\n<p><a href=\"#\">Learn More</a></p>\n<!-- /wp:paragraph --></div>\n<!-- /wp:column --></div>\n<!-- /wp:columns -->",
			)
		);
	}
}
add_action( 'init', 'mels_patterns_register_block_patterns' );
