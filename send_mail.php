<?php
session_start();

// 이메일 설정
$recipient_email = "hunycom@simsreality.com";
$email_subject = "[웹사이트 문의] 새로운 메시지가 도착했습니다";

// POST 데이터 가져오기
$name = isset($_POST['name']) ? $_POST['name'] : '이름 없음';
$email = isset($_POST['email']) ? $_POST['email'] : '이메일 없음';
$message = isset($_POST['message']) ? $_POST['message'] : '메시지 없음';
$redirect = isset($_POST['redirect']) ? $_POST['redirect'] : '/';

// 데이터 유효성 검사
$errors = [];

if (empty($name)) {
    $errors[] = "이름을 입력해주세요.";
}

if (empty($email)) {
    $errors[] = "이메일을 입력해주세요.";
} elseif (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
    $errors[] = "유효한 이메일 주소를 입력해주세요.";
}

if (empty($message)) {
    $errors[] = "메시지를 입력해주세요.";
}

// 오류가 있으면 되돌아가기
if (!empty($errors)) {
    $error_message = implode("<br>", $errors);
    $_SESSION['mail_error'] = $error_message;
    header("Location: " . $redirect . "#contact");
    exit;
}

// XSS 방지를 위한 데이터 정화
$name = htmlspecialchars($name);
$email = htmlspecialchars($email);
$message = htmlspecialchars($message);

// 이메일 내용 구성
$email_content = "이름: $name\n";
$email_content .= "이메일: $email\n\n";
$email_content .= "메시지:\n$message\n";

// 헤더 설정
$headers = "From: $name <$email>\r\n";
$headers .= "Reply-To: $email\r\n";
$headers .= "X-Mailer: PHP/" . phpversion();

// 서버 환경에 따라 선택적으로 사용할 수 있는 이메일 전송 방법
$success = false;

// 방법 1: 기본 PHP mail() 함수
$success = mail($recipient_email, $email_subject, $email_content, $headers);

// 방법 2: 파일에 저장 (이메일 서버가 없는 경우 테스트용)
if (!$success) {
    $log_file = 'contact_messages.log';
    $log_content = "=== " . date('Y-m-d H:i:s') . " ===\n";
    $log_content .= "To: $recipient_email\n";
    $log_content .= "Subject: $email_subject\n";
    $log_content .= "Headers: \n$headers\n";
    $log_content .= "Content: \n$email_content\n\n";
    
    $file_success = file_put_contents($log_file, $log_content, FILE_APPEND);
    $success = $file_success !== false;
}

// 세션 변수 설정 및 리디렉션
if ($success) {
    $_SESSION['mail_sent'] = true;
    $_SESSION['mail_name'] = $name;
    header("Location: thank_you.php");
} else {
    $_SESSION['mail_error'] = "메시지 전송에 실패했습니다. 다른 방법으로 연락해 주세요.";
    header("Location: " . $redirect . "#contact");
}
exit;
?> 