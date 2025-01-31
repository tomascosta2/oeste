<?php 
$hero_fields = get_field('hero');
$nosotros_fields = get_field('nosotros');
$campo_fields = get_field('campo_de_accion');

get_header(); 
?>
<section class="relative w-full h-[600px] flex items-end justify-center py-[80px] px-4">
	<video class="w-full h-full object-cover absolute top-0 left-0" src="<?php echo $hero_fields['fondo']['url'] ?>" autoplay="true" muted="true" loop="true" poster=""></video>
    <div style="position: relative; z-index: 1; color: white;">
        <h1 class="text-white uppercase text-[24px] tracking-widest text-center"><?php echo $hero_fields['titulo']; ?></h1>
    </div>
</section>
<section class="py-[100px]">
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
<section class="py-[100px]">
    <div class="max-w-[1285px] mx-auto">
        <div>
            <h2 class="text-[36px] font-bold uppercase text-[#29008D] balance tracking-wider mb-4"><?php echo strip_tags($campo_fields['titulo']) ?></h2>
            <div class="flex">
                <div class="w-[50%]">
                    <h5 class="text-[20px] py-1 px-4 uppercase text-white bg-[#29008D] tracking-wider"><?php echo $campo_fields['campo_1']['titulo'] ?></h5>
                    <div class="grid grid-cols-2 py-[20px]">
                        <?php echo $campo_fields['campo_1']['lista']; ?>
                    </div>
                </div>
                <!-- Carrusel -->
                <div class="w-[50%] h-[600px] bg-gray-500">

                </div>
            </div>
        </div>
    </div>
</section>
<?php get_footer(); ?>