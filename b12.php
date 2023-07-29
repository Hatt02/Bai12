<?php

$folder = 'learn_php';
$fileName = 'data.txt';

if (!file_exists($folder)) {
    mkdir($dir);
}
else {
    echo"Thư mục đã được tạo";
}

// Kiểm tra file có cho phép ghi không
if (is_writable($file)) {
    echo  " File cho phép ghi";
}
else {
    echo"File không cho phép ghi";
} 

// Ghi nội dung file 
$file = @fopen($fileName, 'w');

fwrite($file, 'xin chào');

// Đóng file
fclose($file);

// Xóa file
unlink($fileName);
?>