<?php
    /* Template Name: LED Sub Page */
    global $post;
    get_header();
    $image = wp_get_attachment_image_src( get_post_thumbnail_id( $post->ID ), 'single-post-thumbnail' );
?>
<article class="led-head" data-speed="15" data-type="background" data-background="<?php echo($image[0]); ?>">
    <section class="centerpiece">
        <h1><?php echo($post->post_title); ?></h1>
        <p><?php echo($post->post_content); ?></p>
    </section>
</article>
<article class="trifecta">
    <section class="featured col-4-12">
        <h2><?php echo(get_post_meta($post->ID, 'benefit_a_title')[0]); ?></h2>
        <p><?php echo(get_post_meta($post->ID, 'benefit_a_text')[0]); ?></p>
    </section>
    <section class="featured col-4-12" >
        <h2><?php echo(get_post_meta($post->ID, 'benefit_b_title')[0]); ?></h2>
        <p><?php echo(get_post_meta($post->ID, 'benefit_b_text')[0]); ?></p>
    </section>
    <section class="featured col-4-12" >
        <h2><?php echo(get_post_meta($post->ID, 'benefit_c_title')[0]); ?></h2>
        <p><?php echo(get_post_meta($post->ID, 'benefit_c_text')[0]); ?></p>
    </section>
</article>
<article class="list">
    <section class="centerpiece screen-items">
        <h1><?php echo(get_post_meta($post->ID, 'section_title')[0]); ?></h1>
        <?php
            $screen_option_args = array(
                'post_type' =>      'screen',
                'numberposts'=>     -1,
                'posts_per_page'=>  -1,
                'post_status'=>     'publish',
                'orderby'=>         'title',
                'order'=>           'ASC',
                'category_name'=>   $post->post_name
            );
            $screen_options = new WP_Query( $screen_option_args );
            if ( $screen_options->have_posts() ) while ( $screen_options->have_posts() ) : $screen_options->the_post();
        ?>
        <section class="col-4-12">
            <figure class="featured" data-type="background" data-background="<?php the_field('screenshot'); ?>"></figure>
            <h2 class="tech-title"><?php the_title(); ?></h2>
            <p class="tech-specs"><?php the_content(); ?></p>
        </section>
        <?php
            endwhile;
        ?>
    </section>

    <button>Place Your Order</button>
</article>
<article class="trifecta">
    <section class="centerpiece">
        <h1>Why Choose Rausch?</h1>
    </section>
    <section class="featured col-4-12">
        <h2>Experience</h2>
        <p>Bacon ipsum dolor amet brisket salami alcatra, chicken pork belly ham hock jowl frankfurter kevin tri-tip flank tongue filet mignon strip steak pancetta.</p>
    </section>
    <section class="featured col-4-12" >
        <h2>Knowledge</h2>
        <p>Bacon ipsum dolor amet brisket salami alcatra, chicken pork belly ham hock jowl frankfurter kevin tri-tip flank tongue filet mignon strip steak pancetta.</p>    </section>
    <section class="featured col-4-12" >
        <h2>Comittment</h2>
        <p>Bacon ipsum dolor amet brisket salami alcatra, chicken pork belly ham hock jowl frankfurter kevin tri-tip flank tongue filet mignon strip steak pancetta.</p>    </section>
</article>
</main>

<article class="closing-statement">
    <section class="centerpiece">
        <h2><?php echo($footer_message[0]); ?></h2>
        <a href="/rausch/contact"><button><?php echo($button_message[0]); ?></button></a>
    </section>
</article>

<footer>
  <section class="centerpiece">
    <span>Phone: </span><em href="tel:3192949410">319-294-9410</em>
    <h1 class="copyright">&copy; 2015 Rausch Productions, Inc. All Rights Reserved.</h1>
  </section>
</footer>
