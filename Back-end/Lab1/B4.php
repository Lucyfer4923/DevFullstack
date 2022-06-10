<?php
    $productCode = "EV2009";
    $productName = "Tấm hợp kim nhôm ngoài trời EV2009";
    $quantity = 500;
    $price = 160000;
    $VAT = 0.05;
    echo "Mã sản phẩm: " . $productCode . "<br>";
    echo "Tên sản phẩm: " . $productName . "<br>";
    echo "Số lượng: " . $quantity . "<br>";
    echo "Đơn giá: " . $price . "<br>";
    echo "Thuế VAT: " . $VAT . "<br>";
    echo "Thông tin sản phẩm trước khi trừ thuế VAT: " . $quantity * $price . "<br>";
    echo "Thông tin sản phẩm sau khi trừ thuế VAT: " . $quantity * $price * $VAT . "<br>";
?>