<?php


  // API endpoint URL
/**
 * 
 microservice-app_nginx_service1_1  : name container
 */

$url = "http://microservice-app_nginx_service1_1/api/";
  
// Dữ liệu bạn muốn gửi đến API (nếu cần)
$data = array(
    'key1' => 'value1',
    'key2' => 'value2'
);

// Khởi tạo một phiên cURL
$curl = curl_init();

// Thiết lập các tùy chọn của cURL
curl_setopt_array($curl, array(
    CURLOPT_URL => $url,             // URL của API
    CURLOPT_RETURNTRANSFER => true,  // Trả về phản hồi dưới dạng chuỗi
    CURLOPT_POST => true,            // Sử dụng phương thức POST
    CURLOPT_POSTFIELDS => $data,     // Dữ liệu gửi đi (nếu cần)
    CURLOPT_HTTPHEADER => array(     // Các tiêu đề bổ sung (nếu cần)
        "Content-Type: application/json",
    ),
));

// Thực thi phiên cURL
$response = curl_exec($curl);

// Kiểm tra lỗi của cURL
if ($response === false) {
    // Nếu có lỗi, hiển thị nó
    echo "Lỗi cURL: " . curl_error($curl);
} else {
    // Decode phản hồi JSON
    $data = json_decode($response, true);

    // Kiểm tra xem việc giải mã có thành công không
    if ($data === null) {
        // Nếu giải mã thất bại, hiển thị thông báo lỗi
        echo "Lỗi giải mã JSON: " . json_last_error_msg();
    } else {
        // Nếu giải mã thành công, hiển thị dữ liệu
        print_r($data);
    }
}

// Đóng phiên cURL
curl_close($curl);


?>