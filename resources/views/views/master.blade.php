<html>
<head>
	<title>Nguyễn Trương Duy</title>
	<link rel="stylesheet" type="text/css"
		  href="{{asset('public/template/css/mystyle.css')}}">
</head>
<body>

	<div id="wrapper">
	@include('views.marquee', ['mar_content' => 'hello', 'ok' => 'lo'])
		<div id="header">
			@section('sidebar')
				This is side bar
			@show
		</div>
		<div id="content">
			@yield('noidung');
		</div>
		<div id="footer"></div>
	</div>
</body>
</html>