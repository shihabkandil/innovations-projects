@extends('layouts.app')

<title>Categories</title>

@section('content')
<br>
<div class="row g-4 justify-content-center">
	<div id="categoryAjax">

	</div>
</div>

<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js" integrity="sha512-894YE6QWD5I59HgZOGReFYm4dnWc1Qt5NtvYSaNcOP+u1T9qYdvdihz0PPSiiqn/+/3e7Jo4EaG7TubfWGUrMQ==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
<script>
	$(document).ready(function(){
		
		setInterval(function(){ 
			fetchCategory();
		}, 10000);

		function fetchCategory(){
			$.ajax({
				type: "GET",
				url: "/fetch-categories",
				dataType: "json",
				success: function(response){
					$('#categoryAjax').html("");
					$.each(response.categories, function(key, item){
						$('#categoryAjax').append(
							'<div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.1s">\
								<div class="course-item bg-light">\
									<div class="position-relative overflow-hidden">\
										<a href="Categories/'+item.id+'"><img class="img-fluid" src="img/'+item.picture+'" alt="'+item.name+'"></a>\
									</div>\
									<div class="text-center p-4 pb-0">\
										<h5 class="mb-4">'+item.name+'</h5>\
									</div>\
								</div>\
							</div>');
					});
				}
			});
		}
	});
</script>

@endsection