<?php
// File init.php, chứa các hook và hàm khởi tạo cho theme.

// Hook để khởi tạo chức năng gửi email SMTP.
add_action( 'phpmailer_init', 'send_smtp_email' );