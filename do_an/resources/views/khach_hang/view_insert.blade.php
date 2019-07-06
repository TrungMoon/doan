@extends('layer.master')
@section('content')
<form class="form-horizontal" action="{{ route('khach_hang.process_insert') }}" method="post">
		{{csrf_field()}}
	<div class="form-group">
		<label class="control-label">
			Mã
		</label>
			<input type="text" name="ma" class="form-control">
	</div>
		<div class="form-group">
		<label class="control-label">
			Tên
		</label>
		<input type="text" name="ten_khach_hang" class="form-control">
	</div>
		<div class="form-group">
		<label class="control-label">
			Tuổi
		</label>
		<input type="number" name="tuoi" class="form-control">
	</div>
		<div class="form-group">
		<label class="control-label">
			Giới tính
		</label>
		<label class="radio-inline"><input type="radio" name="gioi_tinh" value="1" checked>Nam</label>
		<label class="radio-inline"><input type="radio" name="gioi_tinh" value="0">Nữ</label>
	</div>
		<div class="form-group">
		<label class="control-label">
			Năm sinh
		</label>
		<input type="number" name="nam_sinh" class="form-control">
	</div>
		<button class="btn btn-success">
		Thêm
	</button>
	<a href="{{url()->previous()}}">
		<button type="button" class="btn btn-danger">
			Quay lại
		</button>
	</a>
	</form>
@endsection