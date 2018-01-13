<div id="main-slider-home">
		<?= $this->element('revslider/home-main') ?>
</div>

<!-- load info modal -->
<?= $this->element('revslider/home-main-info') ?>


<script>
	$('.info-sotimi, .info-sotimi-2').bind('click', function(){
		$("#home-main-info").addClass('is-active');
	});
	$('.modal-close').bind('click', function(){
		$(this).parents('.modal').removeClass('is-active');
	});
</script>