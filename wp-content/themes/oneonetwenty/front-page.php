<?php
$hero_fields = get_field('hero');
$nosotros_fields = get_field('nosotros');
$campo_fields = get_field('campo_de_accion');
$alcance_fields = get_field('alcance');
$colaboraciones_fields = get_field('colaboraciones');

get_header();
?>
<section class="relative w-full h-[600px] flex items-end justify-center py-[80px] px-4">
    <video class="w-full h-full object-cover absolute top-0 left-0" src="/wp-content/videos/video-hero.mp4" autoplay="true" muted="true" loop="true" poster=""></video>
    <div style="position: relative; z-index: 1; color: white;">
        <h1 class="text-white uppercase text-[24px] tracking-widest text-center"><?php echo $hero_fields['titulo']; ?></h1>
    </div>
</section>
<section class="py-[80px]">
    <div class="max-w-[1285px] mx-auto">
        <div class="flex flex-col md:flex-row gap-8">
            <img
                class="max-w-[50%]"
                src="<?php echo $nosotros_fields['imagen']['url'] ?>"
                alt="<?php echo $nosotros_fields['imagen']['alt'] ?>">
            <div class="md:pe-[40px]">
                <h2 class="text-[36px] font-bold uppercase text-[#29008D] balance tracking-wider max-w-[400px] mb-4"><?php echo $nosotros_fields['titulo'] ?></h2>
                <p class="text-[#111] text-justify">
                    <?php echo strip_tags($nosotros_fields['texto']) ?>
                </p>
            </div>
        </div>
    </div>
</section>
<section class="py-[80px] relative bg-white z-50">
    <div class="max-w-[1285px] mx-auto">
        <div>
            <h2 class="text-[36px] px-4 font-bold uppercase text-[#29008D] balance tracking-wider mb-4"><?php echo strip_tags($campo_fields['titulo']) ?></h2>
            <div class="flex gap-8">
                <div class="w-[50%]">
                    <h5 class="text-[20px] py-1 px-4 uppercase text-white bg-[#29008D] tracking-wider mb-4"><?php echo $campo_fields['campo_1']['titulo'] ?></h5>
                    <div class="columns-2 gap-4 p-8 oe-campo__lista">
                        <?php
                        foreach ($campo_fields['campo_1']['lista'] as $categoria) {
                            echo '<div class="mb-2">';
                            echo    "<h3 class='text-[#29008D] font-semibold text-[20px]'>{$categoria['titulo']}</h3>";
                            echo    "<div class='ps-4 text-[18px] leading-[180%]'>";
                            echo        $categoria['items'];
                            echo    "</div>";
                            echo '</div>';
                        }
                        ?>
                    </div>
                </div>
                <!-- Carrusel -->
                <div class="w-[50%] h-[560px] px-[80px] pb-[40px]" data-delay="3000">
                    <div class="swiper mySwiper h-full">
                        <div class="swiper-wrapper h-full">
                            <?php
                            foreach ($campo_fields['campo_1']['imagenes'] as $imagen) {
                                echo '<div class="swiper-slide h-full">
                                        <img class="h-full w-full object-cover" src="' . $imagen['imagen']['url'] . '" alt="">
                                    </div>';
                            }
                            ?>
                        </div>

                        <!-- Botones de navegación -->
                        <div class="swiper-button-prev"></div>
                        <div class="swiper-button-next"></div>

                        <!-- Paginación -->
                        <div class="swiper-pagination"></div>
                    </div>
                </div>
            </div>
            <div class="flex gap-8 py-[60px]">
                <div class="w-[50%]">
                    <h5 class="text-[20px] py-1 px-4 uppercase text-white bg-[#29008D] tracking-wider mb-4"><?php echo $campo_fields['campo_2']['titulo'] ?></h5>
                    <div class="p-8 oe-campo__lista">
                        <?php
                        foreach ($campo_fields['campo_2']['lista'] as $categoria) {
                            echo '<div class="mb-2">';
                            echo    "<h3 class='text-[#29008D] font-semibold text-[20px]'>{$categoria['titulo']}</h3>";
                            echo    "<div class='ps-4 text-[18px] leading-[180%]'>";
                            echo        $categoria['items'];
                            echo    "</div>";
                            echo '</div>';
                        }
                        ?>
                    </div>
                </div>
                <!-- Carrusel -->
                <div class="w-[50%] h-[560px] px-[80px] pb-[40px]">
                    <div class="swiper mySwiper h-full" data-delay="2000">
                        <div class="swiper-wrapper h-full">
                            <?php
                            foreach ($campo_fields['campo_2']['imagenes'] as $imagen) {
                                echo '<div class="swiper-slide h-full">
                                        <img class="h-full w-full object-cover" src="' . $imagen['imagen']['url'] . '" alt="">
                                    </div>';
                            }
                            ?>
                        </div>

                        <!-- Botones de navegación -->
                        <div class="swiper-button-prev"></div>
                        <div class="swiper-button-next"></div>

                        <!-- Paginación -->
                        <div class="swiper-pagination"></div>
                    </div>
                </div>
            </div>
            <div class="flex gap-8 py-[60px]">
                <div class="w-[50%]">
                    <h5 class="text-[20px] py-1 px-4 uppercase text-white bg-[#29008D] tracking-wider mb-4"><?php echo $campo_fields['campo_3']['titulo'] ?></h5>
                    <div class="p-8 oe-campo__lista">
                        <?php
                        foreach ($campo_fields['campo_3']['lista'] as $categoria) {
                            echo '<div class="mb-2">';
                            echo    "<h3 class='text-[#29008D] font-semibold text-[20px]'>{$categoria['titulo']}</h3>";
                            echo    "<div class='ps-4 text-[18px] leading-[180%]'>";
                            echo        $categoria['items'];
                            echo    "</div>";
                            echo '</div>';
                        }
                        ?>
                    </div>
                </div>
                <!-- Carrusel -->
                <div class="w-[50%] h-[560px] px-[80px] pb-[40px]" data-delay="3000">
                    <div class="swiper mySwiper h-full">
                        <div class="swiper-wrapper h-full">
                            <?php
                            foreach ($campo_fields['campo_3']['imagenes'] as $imagen) {
                                echo '<div class="swiper-slide h-full">
                                        <img class="h-full w-full object-cover" src="' . $imagen['imagen']['url'] . '" alt="">
                                    </div>';
                            }
                            ?>
                        </div>

                        <!-- Botones de navegación -->
                        <div class="swiper-button-prev"></div>
                        <div class="swiper-button-next"></div>

                        <!-- Paginación -->
                        <div class="swiper-pagination"></div>
                    </div>
                </div>
            </div>
            <div class="flex gap-8 pt-[80px]">
                <div class="w-[50%]">
                    <h5 class="text-[20px] py-1 px-4 uppercase text-white bg-[#29008D] tracking-wider mb-4"><?php echo $campo_fields['campo_4']['titulo'] ?></h5>
                    <div class="p-8 oe-campo__lista">
                        <?php
                        foreach ($campo_fields['campo_4']['lista'] as $categoria) {
                            echo '<div class="mb-8">';
                            echo    "<h3 class='text-[#29008D] font-semibold text-[20px]'>{$categoria['titulo']}</h3>";
                            echo    "<div class='ps-4 text-[18px] leading-[180%]'>";
                            echo        $categoria['items'];
                            echo    "</div>";
                            echo '</div>';
                        }
                        ?>
                    </div>
                </div>
                <!-- Carrusel -->
                <div class="w-[50%] h-[560px] px-[80px] pb-[40px]">
                    <div class="swiper mySwiper h-full" data-delay="3000">
                        <div class="swiper-wrapper h-full">
                            <?php
                            foreach ($campo_fields['campo_4']['imagenes'] as $imagen) {
                                echo '<div class="swiper-slide h-full">
                                        <img class="h-full w-full object-cover" src="' . $imagen['imagen']['url'] . '" alt="">
                                    </div>';
                            }
                            ?>
                        </div>

                        <!-- Botones de navegación -->
                        <div class="swiper-button-prev"></div>
                        <div class="swiper-button-next"></div>

                        <!-- Paginación -->
                        <div class="swiper-pagination"></div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<section class="md:px-[280px] md:py-[80px] bg-[#343638] sticky top-0 -mt-[400px] h-[1100px]">
    <video class="shadow-lg" src="/wp-content/videos/video-2.mp4" autoplay muted playsinline loop></video>
</section>
<section class="py-[80px] bg-white relative">
    <div class="max-w-[1285px] mx-auto">
        <div class="flex gap-8 justify-between">
            <div>
                <h2 class="text-[36px] px-4 max-w-[70%] font-bold uppercase text-[#29008D] balance tracking-wider mb-4"><?php echo strip_tags($alcance_fields['titulo']) ?></h2>
                <div class="grid gap-8">
                    <?php
                    $padding = 420;
                    foreach ($alcance_fields['items'] as $item) {
                        echo '<div class="flex gap-4 items-center ps-[' . $padding . 'px]">';
                        echo    '<img class="w-[50px]" src="' . $item['icono']['url'] . '" alt="' . $item['icono']['alt'] . '" />';
                        echo    '<h5 class="uppercase text-[18px]">' . $item['nombre'] . '</h5>';
                        echo '</div>';
                        $padding = $padding - 60;
                    }
                    ?>
                </div>
            </div>
            <div class="py-8 md:max-w-[45%]">
                <img src="<?php echo $alcance_fields['imagen']['url'] ?>" alt="<?php echo $alcance_fields['imagen']['alt'] ?>">
            </div>
        </div>
    </div>
</section>
<section class="pt-[80px] pb-[350px] bg-white relative">
    <div class="max-w-[1285px] mx-auto">
        <h2 class="text-[36px] px-4 max-w-[70%] font-bold uppercase text-[#29008D] balance tracking-wider mb-4"><?php echo strip_tags($colaboraciones_fields['titulo']) ?></h2>
        <p class="text-[18px] text-[#111] text-justify px-4 max-w-[560px]">
            <?php echo strip_tags($colaboraciones_fields['descripcion']) ?>
        </p>
        <div class="swiper logosSwiper h-full mt-[80px] px-4">
            <div class="swiper-wrapper h-full" style="transition-timing-function: linear;">
                <?php
                foreach ($colaboraciones_fields['logos'] as $logo) {
                    echo '<div class="swiper-slide h-full">
                            <img class="h-[60px] w-full object-contain mix-blend-lighten" src="' . $logo['logo']['url'] . '" alt="' . $logo['logo']['alt'] . '">
                        </div>';
                }
                ?>
            </div>
        </div>
    </div>
</section>
<?php get_footer(); ?>