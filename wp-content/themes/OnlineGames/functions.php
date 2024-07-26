<?php
    //customize login page
    add_action('login_head' , function(){
        echo '<style> 
                .login h1 a{
                    background-image: url("'.get_stylesheet_directory_uri().'/images/logo.png")!important;
                }
                body{
                    position: relative;
                    z-index: 2;
                    background-image: url("'.get_stylesheet_directory_uri().'/images/login.jpg")!important; 
                    background-repeat: no-repeat;
                    background-size: cover;
                }
                body::after{
                    position: absolute;
                    content: "";
                    left: 0;
                    top: 0;
                    width: 100%;
                    height: 100%;
                    background-color: rgba(0,0,0,0.8);
                    z-index: -1;
                }
                .login #backtoblog a, .login #nav a{
                    color: white!important;
                }
            </style>';
    });

    //customize admin dashboard menu items 'label
    add_action('init',function(){
		$post = get_post_type_object('post');
		foreach($post->labels as $key=>$value){
			$value = str_replace('Post','News Post',$value);
			$value = str_replace('post','news post',$value);
			$post->labels->{$key} = $value;
		}	

		$page = get_post_type_object('page');
		foreach($page->labels as $key=>$value){
			$value = str_replace('Page','Online Game',$value);
			$value = str_replace('page','online game',$value);
			$page->labels->{$key} = $value;
		}	
	});


    //add custom scripts and pjax scripts
    add_action('wp_enqueue_scripts' ,function(){
        wp_enqueue_script('pjax' , get_stylesheet_directory_uri().'/js/jquery-pjax-master/jquery.pjax.js' , array('jquery'));
        wp_enqueue_script('app.js' , get_stylesheet_directory_uri().'/js/app.js');
    });
?>