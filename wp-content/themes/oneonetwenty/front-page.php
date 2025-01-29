<?php 
$hero_fields = get_field('hero');
get_header(); 
?>
<section class="relative w-full h-[700px]">
	<video class="w-full" src="<?php echo $hero_fields['fondo']['url'] ?>" autoplay="true" muted="true" loop="true" poster=""></video>
    <div style="position: relative; z-index: 1; color: white;">
        <h1><?php echo get_the_title(); ?></h1>
    </div>
</section>
<?php get_footer(); ?>