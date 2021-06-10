	<!---- start-smoth-scrolling---->
	<script type="<?= base_url('assets/') ?>text/javascript" src="js/move-top.js"></script>
	<script type="<?= base_url('assets/') ?>text/javascript" src="js/easing.js"></script>
	<script type="text/javascript">
		jQuery(document).ready(function($) {
			$(".scroll").click(function(event) {
				event.preventDefault();
				$('html,body').animate({
					scrollTop: $(this.hash).offset().top
				}, 900);
			});
		});
	</script>
	<!---- start-smoth-scrolling---->

	</body>

	</html>