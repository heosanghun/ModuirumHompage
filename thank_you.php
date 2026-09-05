<?php
session_start();

// 리디렉션 상태 확인
if (!isset($_SESSION['mail_sent']) || $_SESSION['mail_sent'] !== true) {
    header("Location: index.php");
    exit;
}

// 세션 변수 제거
unset($_SESSION['mail_sent']);
?>

<!DOCTYPE html>
<html lang="ko">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>메시지 전송 완료</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link href="https://fonts.googleapis.com/css2?family=Noto+Sans+KR:wght@300;400;500;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">
    <style>
        body {
            background: linear-gradient(to bottom right, #465775, #26293C);
            color: #ffffff;
            min-height: 100vh;
            font-family: 'Noto Sans KR', sans-serif;
            display: flex;
            align-items: center;
            justify-content: center;
        }
        
        .card {
            background-color: #2A2A2A;
            border-radius: 24px;
            box-shadow: 0 10px 30px rgba(0, 0, 0, 0.3);
            max-width: 600px;
            padding: 40px;
            text-align: center;
        }
        
        .icon {
            font-size: 4rem;
            color: #4ADE80;
            margin-bottom: 1.5rem;
        }
    </style>
</head>
<body>
    <div class="card">
        <div class="icon">
            <i class="fas fa-check-circle"></i>
        </div>
        <h1 class="text-3xl font-bold mb-4">메시지가 전송되었습니다!</h1>
        <p class="text-gray-300 mb-8">문의해 주셔서 감사합니다. 빠른 시일 내에 답변 드리겠습니다.</p>
        <a href="index.php" class="bg-blue-600 hover:bg-blue-700 text-white font-medium py-3 px-6 rounded-md transition-colors inline-block">
            <i class="fas fa-home mr-2"></i>홈페이지로 돌아가기
        </a>
    </div>
    
    <script>
        // 3초 후 홈페이지로 자동 리디렉션
        setTimeout(function() {
            window.location.href = 'index.php';
        }, 3000);
    </script>
</body>
</html> 