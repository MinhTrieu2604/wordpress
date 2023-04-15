<?php
/**
 * Displays the site header.
 *
 * @package WordPress
 * @subpackage Twenty_Twenty_One
 * @since Twenty Twenty-One 1.0
 */

$wrapper_classes  = 'site-header';
$wrapper_classes .= has_custom_logo() ? ' has-logo' : '';
$wrapper_classes .= ( true === get_theme_mod( 'display_title_and_tagline', true ) ) ? ' has-title-and-tagline' : '';
$wrapper_classes .= has_nav_menu( 'primary' ) ? ' has-menu' : '';
?>

<header id="masthead" class="<?php echo esc_attr( $wrapper_classes ); ?>">

<header id="masthead">
<nav class="navbar navbar-expand-lg bg-light p-e fixed-top">
<div class="container">
<div class="left-nav d-flex">
<a class="nav-link" href="<?php echo get_site_url() ?>">Home</a>
<div class="header-search-form">
</form>
</div>
<a class="nav-link" href="<?php echo get_site_url() ?>">Group B</a>
<form action="<?php echo get_site_url() ?>" class="d-flex" role="search"> <input class="form-control" type="search" placeholder="Search" name="s"> <button class="btn" type="submit">Submit</button>
</div>
<ul class="navbar-nav ms-auto">
</ul>
<?php get_template_part('template-parts/header/site-nav'); ?>
<div class="dropdown-wrapper">
<div class="avatar-wrapper d-flex flex-column text-center">
<a class="mt-1" href="<?php echo get_edit_user_link(get_current_user_id()) ?>"> <img id="avatar" src="<?php echo get_avatar_url(get_current_user_id()) ?>" class="rounded-circle" alt="user-avatar">
</a>
<?php $currentUser = wp_get_current_user() ?>
<span><?php echo is_user_logged_in() ? $currentUser->display_name :"Account" ?>&nbsp;<i class="fa fa-caret-down" aria-hidden="true"></i></span>
</div>
<ul class="custom-dropdown-menu">
<?php if (is_user_logged_in()) { ?>
<li class="list-unstyled"> <a href="<?php echo get_edit_user_link(get_current_user_id()) ?>">Profile</a></li>
<li class="list-unstyled"> <a href="<?php echo wp_logout_url(home_url()); ?>">Logout</a></li>
<?php } else { ?>
<li class="list-unstyled"> <a href="<?php echo wp_login_url() ?>">Login</a></li>
<?php } ?>
</ul>
</div>
</div>
</nav>

</header><!-- #masthead -->
