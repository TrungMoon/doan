extends('layer.master')
@section('content')
<form class="form-horizontal" action="{{ route('khach_hang.process_update', ['id' => $khach_hang->ma]) }}" method="post">
	{{csrf_field()}}
	<div class="form-group">
		<label class="control-label">
			Tên
		</label>
		<input type="text" name="ten" class="form-control" value="{{$khach_hang->ten}}">
	</div>

	<div class="form-group">
		<label class="control-label">
			Năm sinh
		</label>
		<input type="number" name="nam_sinh" class="form-control" value="{{$khach_hangang->nam_sinh}}">
	</div>

	<div class="form-group">
		<label class="control-label">
			Giới tính
		</label>
		<label class="radio-inline"><input type="radio" name="gioi_tinh" value="1"
			@if ($khach_hang
ang->gioi_tinh==1)
				checked 
			@endif
			>Nam</label>
		<label class="radio-inline"><input type="radio" name="gioi_tinh" value="0"
			@if ($khach_hang
ang->gioi_tinh==0)
				checked 
			@endif
			>Nữ</label>

	<button class="btn btn-success">
		Sửa
	</button>
	<a href="{{url()->previous()}}">
		<button type="button" class="btn btn-danger">
			Quay lại
		</button>
	</a>
</form>
@endsection
