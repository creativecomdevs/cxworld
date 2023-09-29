<?php
/*
Template Name: Template for inner pages
*/
get_header();
?>

<div class="container">
    <?php the_content(); ?>
</div>


<?php
get_footer();
?>
<script src="<?= get_template_directory_uri() . '/assets/js/order.js' ?>"></script>
