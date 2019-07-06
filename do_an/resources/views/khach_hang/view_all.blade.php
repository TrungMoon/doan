<@extends('layer.master')
@push('css')
<style type="text/css">
	h1{
		color: red;
	}
</style>
@endpush
@section('content')
<h1>Danh Sách Khách Hàng</h1>
<a href="{{ route('khach_hang.view_insert') }}">
	<button class="btn">
		Thêm
	</button>
</a>
<table class="table table-striped">
	<table border="1" width="100%">
		<tr>
			<th>Mã</th>
			<th>Tên</th>
			<th>Tuổi</th>
			<th>Giới Tính</th>
			<th>Năm Sinh</th>
			<th></th>
		</tr>
		@foreach ($array_khach_hang as $khach_hang)
			<td>
					{{$khach_hang->ma}}	
			</td>
			<td>
					{{$khach_hang->ten_khach_hang}}
			</td>
			<td>
					{{$khach_hang->tuoi}}
			</td>
			<td>
				@if ($khach_hang->gioi_tinh==1)
					Nam
				@else
					Nữ
				@endif
			</td>
			<td>
					{{$khach_hang->nam_sinh}}
			</td>
			<td>
				<a href="{{ route('khach_hang.view_update', ['id' => $khach_hang->ma_sinh_vien]) }}" class="btn btn-simple btn-warning btn-icon edit">
					<i class="fa fa-edit"></i>
				</a>
				<a href="{{ route('khach_hang.delete', ['id' => $khach_hang->ma_sinh_vien]) }}" class="btn btn-simple btn-danger btn-icon remove">
					<i class="fa fa-times"></i>
				</a>
			</td>
		</tr>
	@endforeach

		</tr>
		@endforeach

	</table>
@endsection
@push('js')
<script type="text/javascript">
	
</script>
@endpush