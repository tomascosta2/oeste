<?php 
$hero_fields = get_field('hero');
get_header(); 
?>
<section class="relative w-full h-[600px] flex items-end justify-center py-[80px]">
	<video class="w-full h-full object-cover absolute top-0 left-0" src="<?php echo $hero_fields['fondo']['url'] ?>" autoplay="true" muted="true" loop="true" poster=""></video>
    <div style="position: relative; z-index: 1; color: white;">
        <h1 class="text-white uppercase text-[24px] font-bold"><?php echo $hero_fields['titulo']; ?></h1>
    </div>
</section>
<?php get_footer(); ?>