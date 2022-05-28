<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package visittail
 */
use VisitMarche\Theme\Lib\Twig;

$twig = Twig::LoadTwig();
echo $twig->render('@VisitTail/_header.html.twig');

wp_footer(); 
?>

</body>
</html>
