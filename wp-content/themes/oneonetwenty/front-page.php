<?php
$hero_fields = get_field('hero');
$nosotros_fields = get_field('nosotros');
$campo_fields = get_field('campo_de_accion');
$alcance_fields = get_field('alcance');
$colaboraciones_fields = get_field('colaboraciones');

get_header();
?>
<section class="relative w-full h-[450px] md:h-[600px] flex items-end justify-center py-[25px] text-balance md:py-[80px] px-4">
    <video class="w-full h-full object-cover object-[-290px] md:object-center absolute top-0 left-0" src="/wp-content/videos/video-hero.mp4" autoplay="true" muted="true" loop="true" poster=""></video>
    <div style="position: relative; z-index: 1; color: white;">
        <h1 class="text-white uppercase text-[20px] md:text-[24px] tracking-widest text-center"><?php echo $hero_fields['titulo']; ?></h1>
    </div>
</section>
<section class="py-[40px] md:py-[80px] border-b md:px-4" id="nosotros">
    <div class="max-w-[1285px] mx-auto">
        <div class="flex flex-col md:flex-row gap-8">
            <img
                class="w-full md:max-w-[50%]"
                src="<?php echo $nosotros_fields['imagen']['url'] ?>"
                alt="<?php echo $nosotros_fields['imagen']['alt'] ?>"
            >
            <div class="md:pe-[40px] px-4 md:px-0">
                <h2 class="text-[36px] font-bold uppercase text-[#29008D] balance tracking-wider max-w-[400px] mb-4"><?php echo $nosotros_fields['titulo'] ?></h2>
                <p class="text-[#111] text-justify text-[18px]">
                    <?php echo strip_tags($nosotros_fields['texto'], '<strong>') ?>
                </p>
            </div>
        </div>
    </div>
</section>
<section class="py-[40px] md:py-[80px] relative bg-white z-50 md:px-4" id="campo">
    <div class="max-w-[1285px] mx-auto">
        <div>
            <h2 class="text-[36px] px-4 font-bold uppercase text-[#29008D] balance tracking-wider mb-4"><?php echo strip_tags($campo_fields['titulo']) ?></h2>
            <div class="flex flex-col-reverse md:flex-row gap-8 pb-[60px]">
                <div class="w-full md:w-[50%] px-4 md:px-0">
                    <h5 class="md:block hidden text-[20px] py-1 px-4 uppercase text-white bg-[#29008D] tracking-wider mb-4"><?php echo $campo_fields['campo_1']['titulo'] ?></h5>
                    <div class="columns-2 gap-4 md:md:p-8 oe-campo__lista">
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
                <div class="w-full md:w-[50%] md:h-[560px] md:px-[80px] md:pb-[40px]" data-delay="3000">
                    <h5 class="block md:hidden text-[20px] py-[6px] px-4 uppercase text-white bg-[#29008D] tracking-wider mb-4 w-[90%] md:w-full"><?php echo $campo_fields['campo_1']['titulo'] ?></h5>
                    <div class="swiper mySwiper h-[450px] md:h-full md:aspect-square">
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
            <div class="flex flex-col-reverse md:flex-row gap-8 py-[60px]">
                <div class="w-full md:w-[50%] px-4 md:px-0">
                    <h5 class="md:block hidden text-[20px] py-1 px-4 uppercase text-white bg-[#29008D] tracking-wider mb-4"><?php echo $campo_fields['campo_2']['titulo'] ?></h5>
                    <div class="md:p-8 oe-campo__lista">
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
                <div class="w-full md:w-[50%] md:h-[560px] md:px-[80px] md:pb-[40px]">
                    <h5 class="block md:hidden text-[20px] py-[6px] px-4 uppercase text-white bg-[#29008D] tracking-wider mb-4 w-[90%] md:w-full"><?php echo $campo_fields['campo_2']['titulo'] ?></h5>
                    <div class="swiper mySwiper h-[450px] md:h-full md:aspect-square" data-delay="2000">
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
            <div class="flex flex-col-reverse md:flex-row gap-8 py-[60px]">
                <div class="w-full md:w-[50%] px-4 md:px-0">
                    <h5 class="md:block hidden text-[20px] py-1 px-4 uppercase text-white bg-[#29008D] tracking-wider mb-4"><?php echo $campo_fields['campo_3']['titulo'] ?></h5>
                    <div class="md:p-8 oe-campo__lista">
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
                <div class="w-full md:w-[50%] md:h-[560px] md:px-[80px] md:pb-[40px]" data-delay="3000">
                    <h5 class="block md:hidden text-[20px] py-[6px] px-4 uppercase text-white bg-[#29008D] tracking-wider mb-4 w-[90%] md:w-full"><?php echo $campo_fields['campo_3']['titulo'] ?></h5>
                    <div class="swiper mySwiper h-[450px] md:h-full md:aspect-square">
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
            <div class="flex flex-col-reverse md:flex-row gap-8 pt-[80px]">
                <div class="w-full md:w-[50%] px-4 md:px-0">
                    <h5 class="md:block hidden text-[20px] py-1 px-4 uppercase text-white bg-[#29008D] tracking-wider mb-4"><?php echo $campo_fields['campo_4']['titulo'] ?></h5>
                    <div class="md:p-8 oe-campo__lista">
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
                <div class="w-full md:w-[50%] md:h-[560px] md:px-[80px] md:pb-[40px]">
                    <h5 class="block md:hidden text-[20px] py-[6px] px-4 uppercase text-white bg-[#29008D] tracking-wider mb-4 w-[90%] md:w-full"><?php echo $campo_fields['campo_4']['titulo'] ?></h5>
                    <div class="swiper mySwiper h-[450px] md:h-full md:aspect-square" data-delay="3000">
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
<section class="md:px-[280px] md:py-[80px] bg-[#343638] md:sticky top-0 md:-mt-[400px] md:h-[1100px]">
    <video class="shadow-lg" src="/wp-content/videos/video-2.mp4" autoplay muted playsinline loop></video>
</section>
<section class="py-[60px] md:pb-[100px] md:pt-[140px] bg-white relative alcance md:px-4" id="alcance">
    <div class="max-w-[1285px] mx-auto relative z-50">
        <div class="flex flex-col-reverse md:flex-row gap-8 justify-between">
            <div>
                <div class="md:-mt-[50px] md:pb-[30px] px-4 md:px-0">
                    <h2 class="text-[36px] md:px-4 max-w-[70%] md:max-w-[70%] font-bold uppercase text-[#29008D] balance tracking-wider mb-4"><?php echo strip_tags($alcance_fields['titulo']) ?></h2>
                    <div class="flex flex-col-reverse md:grid gap-8">
                        <?php
                        $padding = 420;
                        foreach ($alcance_fields['items'] as $item) {
                            echo '<div class="flex gap-4 items-center md:ps-[' . $padding . 'px]">';
                            echo    '<img class="w-[35px]" src="' . $item['icono']['url'] . '" alt="' . $item['icono']['alt'] . '" />';
                            echo    '<h5 class="uppercase text-[18px]">' . $item['nombre'] . '</h5>';
                            echo '</div>';
                            $padding = $padding - 60;
                        }
                        ?>
                    </div>
                </div>
            </div>
            <div class="md:max-w-[45%] relative z-50">
                <img class="object-cover h-[380px] md:h-full w-full" src="<?php echo $alcance_fields['imagen']['url'] ?>" alt="<?php echo $alcance_fields['imagen']['alt'] ?>">
            </div>
        </div>
    </div>
</section>
<section class="py-[40px] md:pt-[80px] pb-[300px] bg-white relative border-t" id="colaboraciones">
    <div class="max-w-[1285px] mx-auto">
        <h2 class="text-[36px] px-4 max-w-[70%] font-bold uppercase text-[#29008D] balance tracking-wider mb-4"><?php echo strip_tags($colaboraciones_fields['titulo']) ?></h2>
        <p class="text-[18px] text-[#111] text-justify px-4 max-w-[560px]">
            <?php echo strip_tags($colaboraciones_fields['descripcion']) ?>
        </p>
        <div class="swiper logosSwiper h-full mt-[130px] px-4">
            <div class="swiper-wrapper h-full" style="transition-timing-function: linear;">
                <?php
                foreach ($colaboraciones_fields['logos'] as $logo) {
                    echo '<div class="swiper-slide h-full">
                            <img class="h-[50px] w-full object-contain mix-blend-lighten" src="' . $logo['logo']['url'] . '" alt="' . $logo['logo']['alt'] . '">
                        </div>';
                }
                ?>
            </div>
        </div>
    </div>
</section>
<?php get_footer(); ?>