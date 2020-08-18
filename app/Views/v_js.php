<!-- JavaScripts placed at the end of the document so the pages load faster --> 
<script src="<?= base_url('assets/js/jquery-1.11.1.min.js'); ?>"></script> 
<script src="<?= base_url('assets/js/bootstrap.min.js'); ?>"></script> 
<script src="<?= base_url('assets/js/bootstrap-hover-dropdown.min.js'); ?>"></script> 
<script src="<?= base_url('assets/js/owl.carousel.min.js'); ?>"></script> 
<script src="<?= base_url('assets/js/echo.min.js'); ?>"></script> 
<script src="<?= base_url('assets/js/jquery.easing-1.3.min.js'); ?>"></script> 
<script src="<?= base_url('assets/js/bootstrap-slider.min.js'); ?>"></script> 
<script src="<?= base_url('assets/js/jquery.rateit.min.js'); ?>"></script> 
<script src="<?= base_url('assets/js/lightbox.min.js'); ?>"></script> 
<script src="<?= base_url('assets/js/bootstrap-select.min.js'); ?>"></script> 
<script src="<?= base_url('assets/js/wow.min.js'); ?>"></script> 
<script src="<?= base_url('assets/js/scripts.js'); ?>"></script>
<script src="<?= base_url('assets/js/jquery.ellipsify.min.js'); ?>"></script>
<script type="text/javascript">
	$(document).ready(function(){
		window.setTimeout(function() {
			$(".alert").fadeTo(500, 0).slideUp(500, function(){
				$(this).remove(); 
			});
		}, 8000);
	});
</script>
<script type="text/javascript">
	$('.judul-ellips').find('a').ellipsify({
    });
</script>
<script type="text/javascript">
	$(document).ready(function(){
	  $('[data-toggle="popover"]').popover(
	  	);
	});
</script>
<!-- <script type="text/javascript">
	$('#select').change(function (){
		var segment_kategori=$(this).find('option:selected').attr('data-segmen_kategori');
		$('#segment_kategori').val(segment_kategori);
	});
</script> -->
<!-- <script type="text/javascript">
	function preview_image() {
		const gambar = document.querySelector('#gambar');
		const label_gambar = document.querySelector('.img-label')
		const preview_gambar = document.querySelector('.img-preview');
	
		label_gambar.textContent = gambar.files[0].name;
		
		const file_gambar = new FileReader();
		file_gambar.readAsDataURL(gambar.files[0]);
	
		file_gambar.onload = function(e) {
			preview_gambar.src = e.target.result;
		}
	}
</script> -->
<script type="text/javascript">
	$(document).ready( function() {
    	$(document).on('change', '.btn-file :file', function() {
		var input = $(this),
			label = input.val().replace(/\\/g, '/').replace(/.*\//, '');
		input.trigger('fileselect', [label]);
		});

		$('.btn-file :file').on('fileselect', function(event, label) {
		    
		    var input = $(this).parents('.input-group').find(':text'),
		        log = label;
		    
		    if( input.length ) {
		        input.val(log);
		    } else {
		        if( log ) alert(log);
		    }
	    
		});
		function readURL(input) {
		    if (input.files && input.files[0]) {
		        var reader = new FileReader();
		        
		        reader.onload = function (e) {
		            $('#img-upload').attr('src', e.target.result);
		        }
		        
		        reader.readAsDataURL(input.files[0]);
		    }
		}

		$("#gambar").change(function(){
		    readURL(this);
		}); 	
	});
</script>
</body>

</html>