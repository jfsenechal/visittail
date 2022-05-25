<?php
/**
 * The template for displaying all pages
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site may use a
 * different template.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package visittail
 */

use Symfony\Component\ErrorHandler\Debug;
use VisitMarche\Theme\Lib\Twig;

get_header();
if (WP_DEBUG) {
	Debug::enable();
}
$twig = Twig::LoadTwig();
echo $twig->render('@VisitTail/article/article.html.twig');

//get_sidebar();
get_footer();
