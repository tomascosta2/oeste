<?php 
$hero_fields = get_field('hero');
$nosotros_fields = get_field('nosotros');
get_header(); 
?>
<section class="relative w-full h-[600px] flex items-end justify-center py-[80px] px-4">
	<video class="w-full h-full object-cover absolute top-0 left-0" src="<?php echo $hero_fields['fondo']['url'] ?>" autoplay="true" muted="true" loop="true" poster=""></video>
    <div style="position: relative; z-index: 1; color: white;">
        <h1 class="text-white uppercase text-[24px] tracking-widest text-center"><?php echo $hero_fields['titulo']; ?></h1>
    </div>
</section>
<section class="py-[100px] px-4">
    <div class="max-w-[1285px] mx-auto">
        <div class="flex flex-col md:flex-row gap-8">
            <img 
                class="max-w-[50%]"
                src="<?php echo $nosotros_fields['imagen']['url'] ?>" 
                alt="<?php echo $nosotros_fields['imagen']['alt'] ?>"
            >
            <div class="md:pe-[40px]">
                <h2 class="text-[36px] font-bold uppercase text-[#29008D] balance tracking-wider max-w-[400px] mb-4"><?php echo $nosotros_fields['titulo'] ?></h2>
                <p class="text-[18px] text-[#111] text-justify">
                    <?php echo strip_tags($nosotros_fields['texto']) ?>
                </p>
            </div>
        </div>
    </div>
</section>
<?php get_footer(); ?>