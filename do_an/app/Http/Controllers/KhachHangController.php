<?php

namespace App\Http\Controllers;

use Request;
use App\Model\khachhang;
class KhachHangController extends Controller
{
    public function view_all()
    {
    	$khach_hang = new khachhang();
    	$array_khach_hang = $khach_hang->get_all();
    	return view('khachhang.view_all',[
            'array_khach_hang' => $array_khach_hang
        ]);
    }
    
    public function view_insert()
    {
    	return view('view_insert');
    }
    public function process_insert()
    {
    	$khach_hang = new khachhang();
    	$khach_hang->ma = Request::get('ma');
    	$khach_hang->ten_khach_hang = Request::get('ten_khach_hang');
    	$khach_hang->tuoi = Request::get('tuoi');
    	$khach_hang->gioi_tinh = Request::get('gioi_tinh');
    	$khach_hang->nam_sinh = Request::get('nam_sinh');
    	$khach_hang->insert();
        return redirect()->route('khach_hang.view_all');

    }
}
