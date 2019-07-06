<?php

namespace App\Model;
use DB;
class khachhang 
{
	private $table = 'khach_hang';
	public $ma;
	public $ten_khach_hang; 
	public $tuoi;
	public $gioi_tinh; 
	public $nam_sinh;
	public function get_all()
	 {
	 	$array = DB::select("select * from $this->table");
	 	return $array;	
	 } 
	 public function insert()
	{
		DB::insert("insert into $this->table(ma,ten_khach_hang,tuoi,gioi_tinh,nam_sinh)
			values(?,?,?,?,?)",[
				$this->ma,
				$this->ten_khach_hang,
				$this->tuoi,
				$this->gioi_tinh,
				$this->nam_sinh
			]);
	}
	public function get_one()
	{
		$array = DB::select("select * from $this->table
			where ma = ?
			limit 1",[
				$this->ma
			]);
		return $array[0];
	}
}