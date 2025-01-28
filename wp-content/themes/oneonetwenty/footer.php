
				</main>
			</div>
		</div>

		<?php get_template_part( 'template-parts/footer/footer-widgets' ); ?>

	</div>

	<?php wp_footer(); ?>

	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
	<script src="https://kit.fontawesome.com/fff50d7907.js" crossorigin="anonymous"></script>
	<script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>

	<script>
		const menuOpener = document.getElementById('menuOpener');
		const menuCloser = document.getElementById('menuCloser');
		const menuNav = document.getElementById('menuNav');

		menuOpener.addEventListener('click', () => {
			menuNav.classList.add('--opened');
		})
		menuCloser.addEventListener('click', () => {
			menuNav.classList.remove('--opened');
		})
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

	</body>
</html>
