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
use VisitMarche\Theme\Lib\WpRepository;
use VisitMarche\Theme\Lib\PostUtils;

get_header();
$wpRepository = new WpRepository();
$twig = Twig::LoadTwig();

if (WP_DEBUG) {
	Debug::enable();
}

$post = get_post(1276);
$image = PostUtils::getImage($post);
$content = get_the_content(null, null, $post);
$content = apply_filters('the_content', $content);
$content = str_replace(']]>', ']]&gt;', $content);

$recommandations = $wpRepository->getSamePosts($post->ID);

echo $twig->render('@VisitTail/article/article.html.twig', [
	'post' => $post,
	'image' => $image,
	'content' => $content,
	'recommandations' => $recommandations
]);

//get_sidebar();
get_footer();
