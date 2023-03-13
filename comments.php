<div class="pt-5">
    <h3 class="mb-5"><?php echo get_comments_number(); ?> <?php echo esc_html( 'Comments', 'sterial' ); ?></h3>
    <?php
    wp_list_comments( array(
        'callback' => 'sterial_single_comment_markup'
    ) );

    the_comments_navigation();
    ?>
    <!-- END comment-list -->

    <div class="comment-form-wrap pt-5">
        <?php
        comment_form(  );
        ?>
    </div>
</div>