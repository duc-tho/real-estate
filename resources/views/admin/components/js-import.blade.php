{{-- CDN --}}

{{-- Plugins --}}
<script src="{{ asset('plugins/overlayScrollbars/js/jquery.overlayScrollbars.min.js') }}"></script>
<script src="{{ asset('plugins/jquery-ui/jquery-ui.min.js') }}"></script>
<script src="{{ asset('plugins/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
<script src="{{ asset('plugins/editor/ckeditor/ckeditor.js')}}"></script>
<script src="{{ asset('plugins/editor/ckfinder/ckfinder.js')}}"></script>
{{-- Dist --}}
<script src="{{ asset('dist/js/admin/adminlte.js') }}"></script>

{{-- Image add project  --}}
<script>
     $('#calendar').datepicker({
	});

	!function ($) {
		$(document).on("click","ul.nav li.parent > a > span.icon", function(){
			$(this).find('em:first').toggleClass("glyphicon-minus");
		});
		$(".sidebar span.icon").find('em:first').addClass("glyphicon-plus");
	}(window.jQuery);

	$(window).on('resize', function () {
	  if ($(window).width() > 768) $('#sidebar-collapse').collapse('show')
     })

	$(window).on('resize', function () {
	  if ($(window).width() <= 767) $('#sidebar-collapse').collapse('hide')
     })

	// Chang Image add product
	function changeImg(input){
		//Nếu như tồn thuộc tính file, đồng nghĩa người dùng đã chọn file mới
		if(input.files && input.files[0]){
			var reader = new FileReader();
			//Sự kiện file đã được load vào website
			reader.onload = function(e){
				//Thay đổi đường dẫn ảnh
				$('#avatar').attr('src',e.target.result);
			}
			reader.readAsDataURL(input.files[0]);
		}
     }

	$(document).ready(function() {
		$('#avatar').click(function(){
			$('#img').click();
		});
     });

     if ($('#dataTable')) {
          new ResizeSensor($("#dataTable"), () => {
               table.draw();
          });
     }
</script>
