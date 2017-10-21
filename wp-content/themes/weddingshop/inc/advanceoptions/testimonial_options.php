<?php 
$options = array();

$options[] = array(
				'id'		=> 'gravatar_email'
				,'label'	=> esc_html__('Gravatar Email Address', 'weddingshop')
				,'desc'		=> esc_html__('Enter in an e-mail address, to use a Gravatar, instead of using the "Featured Image". You have to remove the "Featured Image".', 'weddingshop')
				,'type'		=> 'text'
			);
			
$options[] = array(
				'id'		=> 'byline'
				,'label'	=> esc_html__('Byline', 'weddingshop')
				,'desc'		=> esc_html__('Enter a byline for the customer giving this testimonial (for example: "CEO of ThemeFTC").', 'weddingshop')
				,'type'		=> 'text'
			);
			
$options[] = array(
				'id'		=> 'url'
				,'label'	=> esc_html__('URL', 'weddingshop')
				,'desc'		=> esc_html__('Enter a URL that applies to this customer (for example: http://themeftc.com/).', 'weddingshop')
				,'type'		=> 'text'
			);
			
$options[] = array(
				'id'		=> 'rating'
				,'label'	=> esc_html__('Rating', 'weddingshop')
				,'desc'		=> ''
				,'type'		=> 'select'
				,'options'	=> array(
						'-1'	=> esc_html__('no rating', 'weddingshop')
						,'0'	=> esc_html__('0 star', 'weddingshop')
						,'0.5'	=> esc_html__('0.5 star', 'weddingshop')
						,'1'	=> esc_html__('1 star', 'weddingshop')
						,'1.5'	=> esc_html__('1.5 star', 'weddingshop')
						,'2'	=> esc_html__('2 stars', 'weddingshop')
						,'2.5'	=> esc_html__('2.5 stars', 'weddingshop')
						,'3'	=> esc_html__('3 stars', 'weddingshop')
						,'3.5'	=> esc_html__('3.5 stars', 'weddingshop')
						,'4'	=> esc_html__('4 stars', 'weddingshop')
						,'4.5'	=> esc_html__('4.5 stars', 'weddingshop')
						,'5'	=> esc_html__('5 stars', 'weddingshop')
				)
			);
?>