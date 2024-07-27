<?php
get_header();

$posts = get_posts();
?>

<main>
    <section aria-label="Home Page Contents" id="section-home-content">
        <article id="home-news-wrapper">
            <h2 class="mb-1 mt-2">News Post</h2>
            <?php foreach($posts as $post): ?>
                <div id="home-news">
                    <a href="<?=get_the_permalink($post)?>"><?=get_the_title($post)?></a>
                </div>
            <?php endforeach;?>

        </article>
        <article id="home-games-wrapper">
            <h2 class="mb-1 mt-2">List Of Games</h2>
            <div id="home-games">
                <div class="home-selected-games">
                    <!-- selected pages -->
                    <?php 
                        $games = get_pages();
                        foreach($games as $selectedGame):
                            $template = get_post_meta($selectedGame->ID,'_wp_page_template',true);
                            if($template == 'template-free-game.php'):
                    ?>
                        <div class="home-game">
                            <a href="<?=get_the_permalink( $selectedGame)?>">
                                <?=get_the_post_thumbnail($selectedGame)?>
                            </a>
                        </div>

                        
                    <?php endif;endforeach;?>
                </div>


                <div class="home-general-games">
                    <!-- general pages -->
                    <?php 
                        $games = get_pages();

                        foreach($games as $generalGame):
                            $template = get_post_meta($generalGame->ID,'_wp_page_template',true);
                            if($template != 'template-free-game.php'):
                    ?>
                        <div class="home-game">
                            <a href="<?=get_the_permalink( $generalGame)?>">
                                <?=get_the_post_thumbnail($generalGame)?>
                            </a>
                        </div>
                    <?php endif;endforeach;?>
                </div>

            </div>

        </article>
    </section>
</main>


<?php
    get_footer();

?>