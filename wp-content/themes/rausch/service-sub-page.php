<?php
    /* Template Name: Service Sub Page */
    get_header();
    $image = wp_get_attachment_image_src( get_post_thumbnail_id( $post->ID ), 'single-post-thumbnail' );
    echo(get_the_id());
?>
<article class="work-head" data-speed="15" data-type="background" data-background="<?php echo($image[0]); ?>">
    <section class="centerpiece">
        <h1><?php the_title(); ?></h1>
        <p>Bacon ipsum dolor amet brisket salami alcatra, chicken pork belly ham hock jowl frankfurter kevin tri-tip flank tongue filet mignon strip steak pancetta. Shoulder ham meatball beef filet mignon sirloin. Ball tip pancetta boudin chicken. Sirloin beef jerky salami chuck capicola, drumstick flank sausage ball tip fatback filet mignon turkey pastrami brisket. Pastrami shoulder shank ground round biltong. Drumstick kevin bresaola cow tri-tip venison. Turducken meatball chuck kevin corned beef filet mignon chicken landjaeger ground round pancetta andouille ham hock cow.</p>
    </section>
</article>
<article class="trifecta">
    <section class="featured col-4-12">
        <h2>Benefit 1</h2>
        <p>Bacon ipsum dolor amet brisket salami alcatra, chicken pork belly ham hock jowl frankfurter kevin tri-tip flank tongue filet mignon strip steak pancetta.</p>
    </section>
    <section class="featured col-4-12" >
        <h2>Benefit 2</h2>
        <p>Bacon ipsum dolor amet brisket salami alcatra, chicken pork belly ham hock jowl frankfurter kevin tri-tip flank tongue filet mignon strip steak pancetta.</p>    </section>
    <section class="featured col-4-12" >
        <h2>Benefit 3</h2>
        <p>Bacon ipsum dolor amet brisket salami alcatra, chicken pork belly ham hock jowl frankfurter kevin tri-tip flank tongue filet mignon strip steak pancetta.</p>    </section>
</article>
<article class="list">
    <section class="centerpiece">
        <h1><?php the_title(); ?></h1>
        <p>Bacon ipsum dolor amet brisket salami alcatra, chicken pork belly ham hock jowl frankfurter kevin tri-tip flank tongue filet mignon strip steak pancetta. </p>
    </section>
    <h3 class="col-4-12">Specialty 1</h3>
    <h3 class="col-4-12">Specialty 1</h3>
    <h3 class="col-4-12">Specialty 1</h3>
    <ul>
        <li class="col-4-12">Client</li>
        <li class="col-4-12">Client</li>
        <li class="col-4-12">Client</li>
        <li class="col-4-12">Client</li>
        <li class="col-4-12">Client</li>
        <li class="col-4-12">Client</li>
        <li class="col-4-12">Client</li>
        <li class="col-4-12">Client</li>
        <li class="col-4-12">Client</li>
        <li class="col-4-12">Client</li>
        <li class="col-4-12">Client</li>
        <li class="col-4-12">Client</li>
    </ul>
    <button>Get Started</button>
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
<?php get_footer(); ?>