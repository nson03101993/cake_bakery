@extends('user.layout.master')

@section('main_content')

	<!--================Slider Area =================-->
	@includeIf('user.content.homepage.slider')
	<!--================End Slider Area =================-->
	
	<!--================Welcome Area =================-->
	@includeIf('user.content.homepage.welcome')
	<!--================End Welcome Area =================-->
	
	<!--================Special Recipe Area =================-->
	@includeIf('user.content.homepage.special_recipe')
	<!--================End Special Recipe Area =================-->
	
	<!--================Service Area =================-->
	@includeIf('user.content.homepage.service')
	<!--================End Service Area =================-->
	
	<!--================Discover Menu Area =================-->
	@includeIf('user.content.homepage.discover_menu')
	<!--================End Discover Menu Area =================-->
	
	<!--================Client Says Area =================-->
	@includeIf('user.content.homepage.client_says')
	<!--================End Client Says Area =================-->
	
	<!--================Our Chef Area =================-->
	@includeIf('user.content.homepage.our_chef')
	<!--================End Our Chef Area =================-->
	
	<!--================Latest News Area =================-->
	@includeIf('user.content.homepage.latest_news')
	<!--================End Latest News Area =================-->

@endsection
