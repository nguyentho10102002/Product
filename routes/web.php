<?php

use App\Http\Controllers\ChuyenMucController;
use App\Http\Controllers\JSController;
use App\Http\Controllers\LoaiSanPhamController;
use App\Http\Controllers\TestController;
use App\Models\ChuyenMuc;
use Illuminate\Support\Facades\Route;

// tạo 1 funtion viewMaster để kiểm tra việc master page => TestController
Route::get("test-master",[TestController::class,'testMaster']);
Route::get("/admin",[ChuyenMucController::class,'testChuyenMuc']);

Route::get("/admin/cap-nhat/{id}",[ChuyenMucController::class,'edit']);
Route::post("/admin/cap-nhat",[ChuyenMucController::class,'update']);
Route::post("/admin",[ChuyenMucController::class,'store']);

Route::get("/ad",[ChuyenMucController::class,'test']);
Route::get("/admin/loai-san-pham",[LoaiSanPhamController::class,'testLoaiSanPham']);
Route::post("/admin/loai-san-pham",[LoaiSanPhamController::class,'store']);

Route::get("/admin/san-pham/huy-bo/{id}",[LoaiSanPhamController::class,'destroy']);
Route::get("/admin/loai-san-pham/cap-nhat/{id}",[LoaiSanPhamController::class,'edit']);
Route::post("/admin/loai-san-pham/cap-nhat",[LoaiSanPhamController::class,'update']);

Route::get("/admin/test-JS",[JSController::class,'testJS']);
Route::post("/admin/test-JS",[JSController::class,'testPostJS']);

Route::get("/admin/test-JS-2",[JSController::class,'testJS2']);
Route::post("/admin/test-JS-2",[JSController::class,'testPostJS2']);

Route::get("/admin/test-JS-3",[JSController::class,'testJS3']);

Route::get("/admin/test-JS-4",[JSController::class,'testJS4']);
