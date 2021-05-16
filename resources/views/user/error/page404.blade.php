@extends('user.layout.master')

@section('main_content')

	 <!--================Error Main Area =================-->
	 <section class="error_area">
		<div class="container">
			<div class="error_inner">
				<div class="error_inner_text">
					<h3>404</h3>
					<h4>Xin lỗi! </h4>
					<h5>Trang bạn tìm kiếm hiện không khả dụng. Vui lòng thử lại sau.</h5>
					<a class="pink_btn" href="{{ route('home.page') }}">Trở về trang chủ</a>
				</div>
			</div>
		</div>
	</section>
	<!--================End Error Main Area =================-->
	

@endsection

        
       
       