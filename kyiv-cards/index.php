<?php
/**
 * The main template file
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package kyiv-cards
 */

get_header(); ?>

<?php
$current_page = (get_query_var('paged')) ? get_query_var('paged') : 1; // определяем текущую страницу блога
$args = array(
	'posts_per_page' => get_option('posts_per_page'), // значение по умолчанию берётся из настроек, но вы можете использовать и собственное
	'paged'          => $current_page // текущая страница
);
query_posts( $args );
 
$wp_query->is_archive = true;
$wp_query->is_home = false;
 
while(have_posts()): the_post();
	?>
	<p><?php the_content() /* содержимое поста */ ?></p>
	<?php
endwhile;

 
if( function_exists('wp_pagenavi') ) wp_pagenavi(); // функция постраничной навигации
?>

<?php
get_footer();
?>