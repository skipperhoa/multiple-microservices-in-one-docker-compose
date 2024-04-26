<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Http;
Route::get('/', function () {
    return view('welcome');
});
Route::get('/service1/api', function () {
      // API endpoint URL
    $url = "http://microservice-app_nginx_service1_1/api/";
    // Gửi yêu cầu GET đến API
    $response = Http::get($url);

    // Kiểm tra xem có lỗi không
    if ($response->failed()) {
        // Nếu có lỗi, xử lý nó
        return "Lỗi khi gọi API: " . $response->status();
    }

    // Lấy dữ liệu từ phản hồi JSON
    $data = $response->json();

    // Trả về dữ liệu
    return $data;
});
