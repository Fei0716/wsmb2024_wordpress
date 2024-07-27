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
                    height: 100vh;
                }
                body::after{
                    position: fixed !important;
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


    //for password
    function custom_enforce_password($errors){
        $submittedPassword = isset($_POST['pass1']) ? $_POST['pass1'] : '';

        //check for password length
        if(strlen($submittedPassword) < 12){
            $errors->add('password_too_short', '<strong>Error: </strong>password must be at least 12 digits');
        }
        //check for password strength
        if(!preg_match('/^(?=.+[A-Za-z])(?=.+\d)(?=.+[^A-Za-z\d]).+$/' , $submittedPassword)){
            $errors->add('password_too_weak', '<strong>Error: </strong>password must consist of numbers, letters, and special characters.');
        }
    }

    add_filter('registration_errors' , 'custom_enforce_password');
    add_filter('user_profile_update_errors' , 'custom_enforce_password');


    //function for retrieving the page featured image's url
    function get_the_page_thumbnail_url($id){
        $thumbnailID = get_post_thumbnail_id($id);
        $image_url = wp_get_attachment_image_src($thumbnailID , 'full');
        return $image_url[0];
    }
?>