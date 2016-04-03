@extends('views.master')
@section('noidung')
@for ($i = 0; $i <= 10; $i++) 
	Số thứ tự : {{ $i }}
	<br />
@endfor
@stop