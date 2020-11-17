<?php
/* Template Name:  Home */
get_header();

?>
<style>
.item {
    background: #ddd;
    padding: 25px 35px;
    margin: 10px;
}
</style>








<div class="container">

<?php echo do_shortcode('[custom-post-list]'); ?>
</div>







<?php
get_footer();

?>


