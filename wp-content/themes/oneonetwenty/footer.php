</main>
</div>
</div>

<?php get_template_part('template-parts/footer/footer-widgets'); ?>

</div>

<?php wp_footer(); ?>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
<script src="https://kit.fontawesome.com/fff50d7907.js" crossorigin="anonymous" defer></script>
<script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js" defer></script>

<script>
	const menuOpener = document.getElementById('menuOpener');
	const menuCloser = document.getElementById('menuCloser');
	const menuNav = document.getElementById('menuNav');
	const menuLinks = menuNav.querySelectorAll('a'); // Selecciona todos los enlaces dentro del menú

	menuOpener.addEventListener('click', () => {
		menuNav.classList.add('--opened');
	});

	menuCloser.addEventListener('click', () => {
		menuNav.classList.remove('--opened');
	});

	// Agrega evento a cada enlace para cerrar el menú al hacer clic
	menuLinks.forEach(link => {
		link.addEventListener('click', () => {
			menuNav.classList.remove('--opened');
		});
	});
</script>
<script>
	// Custom Accordion
	const accordionItems = document.querySelectorAll('.tcp-accordion-item');
	let currentlyOpenItem = null;

	accordionItems.forEach(item => {
		item.addEventListener('click', () => {
			if (currentlyOpenItem && currentlyOpenItem !== item) {
				currentlyOpenItem.querySelector('.tcp-accordion-item-content').classList.add('max-h-0');
				currentlyOpenItem.querySelector('.tcp-accordion-item-content').classList.remove('max-h-[500px]');
			}
			const itemContent = item.querySelector('.tcp-accordion-item-content');
			itemContent.classList.toggle('max-h-0');
			itemContent.classList.toggle('max-h-[500px]');
			currentlyOpenItem = itemContent.classList.contains('max-h-0') ? null : item;
		});
	});
</script>
<script>
	document.addEventListener("DOMContentLoaded", function() {
		let link = document.querySelector("link[rel~='icon']");
		if (link) {
			link.href = window.matchMedia("(prefers-color-scheme: dark)").matches ?
				"/wp-content/icons/favicon-dark-mode.ico" :
				"/wp-content/icons/favicon-light-mode.ico";
		} else {
			let newLink = document.createElement("link");
			newLink.rel = "icon";
			newLink.href = window.matchMedia("(prefers-color-scheme: dark)").matches ?
				"/wp-content/icons/favicon-dark-mode.ico" :
				"/wp-content/icons/favicon-light-mode.ico";
			document.head.appendChild(newLink);
		}
	});
</script>
<script>
	document.querySelectorAll(".mySwiper").forEach(swiperEl => {
		new Swiper(swiperEl, {
			loop: true,
			navigation: {
				nextEl: ".swiper-button-next",
				prevEl: ".swiper-button-prev",
			},
			pagination: {
				el: ".swiper-pagination",
				clickable: true,
			},
			autoplay: {
				delay: swiperEl.dataset.delay ? parseInt(swiperEl.dataset.delay) : 3000,
				disableOnInteraction: false,
			},
		});
	});

	new Swiper(".logosSwiper", {
		loop: true,
		breakpoints: {
			0: {
				slidesPerView: 2,
			},
			500: {
				slidesPerView: 4,
			},
			992: {
				slidesPerView: 6,
			},
		},
		freeMode: true,
		grabCursor: false,
		autoplay: {
			delay: 0,
			disableOnInteraction: true
		},
		speed: 5000,
		freeModeMomentum: false,
		waitForTransition: false
	});
</script>

</body>

</html>