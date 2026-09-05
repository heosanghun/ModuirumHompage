<?php
// 기본 정보 설정
$name = "허상훈";
$name_eng = "Heo Sanghun";
$name_jp = "許相勳";
$name_alt = "허상훈 · 許相勳 · ホ・サンフン";
$title = "Generative AI Research Specialist";
$company = "충북대학교";
$company_alt = "Chungbuk National University";
$email = "hunycom@simsreality.com";
$phone = "010-1234-5678";
$address_seoul = "대전광역시 유성구 테크노중앙로 74, 4층 (관평동,";
$address_daegu = "경상북도 경산시 대학로 216, 206호";
$website = "www.example.com";
$kakao = "Kakao Talk";
$kakao_url = "#";
$yumeta_lab = "Yumeta Lab";
$yumeta_url = "#";

// 소셜 미디어
$social_media = [
    [
        "name" => "Kakao",
        "url" => "#",
        "color" => "#FEE500",
        "icon" => '<i class="fas fa-comment"></i>'
    ],
    [
        "name" => "LinkedIn",
        "url" => "#",
        "color" => "#0A66C2",
        "icon" => '<i class="fab fa-linkedin-in"></i>'
    ],
    [
        "name" => "Facebook",
        "url" => "#",
        "color" => "#1877F2",
        "icon" => '<i class="fab fa-facebook-f"></i>'
    ],
    [
        "name" => "Instagram",
        "url" => "#",
        "color" => "#E4405F",
        "icon" => '<i class="fab fa-instagram"></i>'
    ],
    [
        "name" => "Twitter",
        "url" => "#", 
        "color" => "#000000",
        "icon" => '<i class="fab fa-x-twitter"></i>'
    ]
];

// 비디오 섹션
$videos = [
    [
        "title" => "2025년 생성형 AI 기반이 패션 아이템_1",
        "url" => "https://www.youtube.com/embed/7hybixFUHks",
        "thumbnail" => "https://via.placeholder.com/300x170",
        "channel" => "클라우스 프롬프트 강의",
        "date" => "2024.2."
    ],
    [
        "title" => "2024년 생성형 AI 기반이 패션 아이템_2",
        "url" => "https://www.youtube.com/embed/w4EoydutshA",
        "thumbnail" => "https://via.placeholder.com/300x170",
        "channel" => "MBC 다큐멘터리 출연",
        "date" => "2023.10."
    ],
    [
        "title" => "2023년 생성형 AI 기반이 패션 아이템_3",
        "url" => "https://www.youtube.com/embed/QG8Uj7VUMsA",
        "thumbnail" => "https://via.placeholder.com/300x170",
        "channel" => "온론 AITV 출연",
        "date" => "2023.7."
    ]
];

// 책 섹션
$books = [
    [
        "title" => "커서 AI",
        "image" => "images/book/cursorai.jfif",
        "description" => "프롬프트 엔지니어링 핵심 가이드",
        "purchase_link" => "https://m.yes24.com/Product/Search?query=%EC%BB%A4%EC%84%9C%20AI"
    ],
    [
        "title" => "딥러닝 완벽 가이드",
        "image" => "images/book/deep.png",
        "description" => "AI 개발을 위한 필수 교재",
        "purchase_link" => "https://www.yes24.com/Product/Goods/89999978"
    ],
    [
        "title" => "강화학습 트레이딩",
        "image" => "images/book/rl.jfif",
        "description" => "금융 AI 알고리즘 구현 실전",
        "purchase_link" => "https://www.yes24.com/Product/Goods/89999978"
    ],
    [
        "title" => "생성형 AI 혁명",
        "image" => "images/book/gai.png",
        "description" => "비즈니스 적용 사례와 전망",
        "purchase_link" => "https://m.yes24.com/Goods/Detail/117873331"
    ],
    [
        "title" => "나는 메타버스에 살기로 했다",
        "image" => "images/book/meta.jfif",
        "description" => "메타버스 시대의 주요 이슈와 전망",
        "purchase_link" => "https://m.yes24.com/Goods/Detail/117873331"
    ],
    [
        "title" => "AI 에이전트가 온다",
        "image" => "images/book/agent.jpg",
        "description" => "AI 에이전트의 개념과 활용 사례",
        "purchase_link" => "https://m.yes24.com/Goods/Detail/117873331"
    ]
];

// 경력
$careers = [
    [
        "period" => "2025년 현재",
        "title" => "심스리얼리티(생성AI 전문 연구원)"
    ],
    [
        "period" => "2025년 현재",
        "title" => "MODUIRUM 대표"
    ],
    [
        "period" => "2011년 현재" ,
        "title" => "한글사랑 대표"
    ],
    [
        "period" => "2016년 현재" ,
        "title" => "미술사 교수"
    ]
];

// 교육
$education = [
    [
        "type" => "박사 수료",
        "school" => "충북대학교 대학원 산업인공지능학과 박사과정",
        "logo" => "images/chungbuk_university.png"
    ],
    [
        "type" => "교환학생",
        "school" => "뉴질랜드 오타고 대학교",
        "logo" => "images/otago_university.png"
    ],
    [
        "type" => "석사",
        "school" => "홍익대학교 산업디자인 석사과정",
        "logo" => "images/hongik_university.png"
    ]
];

// 자격증 및 수상
$certificates = [
    [
        "title" => "문화체육관광부",
        "description" => "장관상",
        "date" => "2013년"
    ]
];

// 인터뷰 및 칼럼
$interviews = [
    [
        "type" => "Interview",
        "publisher" => "KBS",
        "title" => "'국가브랜드 한글.한지.한식.한옥.한복' 허상훈 대표를 만나다",
        "date" => "2015.10.09"
    ],
    [
        "type" => "Interview",
        "publisher" => "MBC",
        "title" => "한글은 우리 마음의 그릇",
        "date" => "2014.10.09"
    ],
    [
        "type" => "Interview",
        "publisher" => "SBS",
        "title" => "한글날 상상 속 한글퍼즐 허상훈 작가가",
        "date" => "2013.10.09"
    ],
    [
        "type" => "Interview",
        "publisher" => "YTN",
        "title" => "한글은 화합과 통합",
        "date" => "2012.10.09"
    ]
];

// 강의
$lectures = [
    [
        "year" => "2025",
        "company" => "헬로디디디",
        "title" => "커서AI 기반의 기술개발 및 사업화화"
    ],
    [
        "year" => "2024",
        "company" => "생성형 AI - 작곡.노래.영상",
        "title" => "프롬프트부터 영상제작까지 한번에"
    ],
    [
        "year" => "2024",
        "company" => "생성형 AI 혁명",
        "title" => "프롬프트 & API 활용 교육"
    ],
    [
        "year" => "2024",
        "company" => "Prompt Engineer",
        "title" => "교육 및 강의 운영"
    ]
];

// 프로젝트 섹션
$projects = [
    [
        "title" => "암호화폐 트레이딩 봇",
        "image" => "images/project1.jpg",
        "description" => "강화학습 기반 자동 거래 시스템",
        "tech" => "Python, TensorFlow, Binance API",
        "url" => "#"
    ],
    [
        "title" => "멀티모달 분석 플랫폼",
        "image" => "images/project2.jpg",
        "description" => "뉴스, 가격, 소셜 데이터 통합 분석",
        "tech" => "React, Node.js, MongoDB",
        "url" => "#"
    ],
    [
        "title" => "AI 연구 논문 검색 엔진",
        "image" => "images/project3.jpg",
        "description" => "NLP 기반 학술 논문 추천 시스템",
        "tech" => "Python, PyTorch, Elasticsearch",
        "url" => "#"
    ],
    [
        "title" => "블록체인 데이터 시각화",
        "image" => "images/project4.jpg",
        "description" => "암호화폐 네트워크 분석 도구",
        "tech" => "D3.js, GraphQL, Web3",
        "url" => "#"
    ],
    [
        "title" => "프롬프트 엔지니어링 학습 플랫폼",
        "image" => "images/project5.jpg",
        "description" => "AI 프롬프팅 기술 교육 사이트",
        "tech" => "Vue.js, Django, OpenAI API",
        "url" => "#"
    ],
    [
        "title" => "딥러닝 가격 예측 모델",
        "image" => "images/project6.jpg",
        "description" => "시계열 데이터 기반 금융 예측",
        "tech" => "Python, Keras, pandas",
        "url" => "#"
    ],
    [
        "title" => "AI 트레이더 시뮬레이터",
        "image" => "images/project7.jpg",
        "description" => "가상 자산 거래 학습 환경",
        "tech" => "React, Redux, FastAPI",
        "url" => "#"
    ],
    [
        "title" => "암호화폐 포트폴리오 관리",
        "image" => "images/project8.jpg",
        "description" => "자산 배분 최적화 알고리즘",
        "tech" => "TypeScript, Express, PostgreSQL",
        "url" => "#"
    ]
];

// 간단한 방문자 카운터
$counter_file = "counter.txt";
if(file_exists($counter_file)) {
    $counter = (int)file_get_contents($counter_file);
    $counter++;
} else {
    $counter = 1;
}
file_put_contents($counter_file, $counter);

// 현재 날짜 및 시간
$current_date = date("Y년 m월 d일");
$current_time = date("H:i:s");
?>

<!DOCTYPE html>
<html lang="ko">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo $name_eng; ?> - <?php echo $title; ?></title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link href="https://fonts.googleapis.com/css2?family=Noto+Sans+KR:wght@300;400;500;700&display=swap" rel="stylesheet">
    <!-- Font Awesome 추가 -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">
    <script>
        tailwind.config = {
            theme: {
                extend: {
                    fontFamily: {
                        sans: ['Noto Sans KR', 'sans-serif'],
                    },
                    colors: {
                        primary: '#0078ff',
                        darkbg: '#1E1E1E',
                        cardbg: '#2D2D2D',
                        highlight: '#0078ff',
                    }
                }
            }
        }
    </script>
    <style>
        body {
            background: linear-gradient(to bottom right, #465775, #26293C);
            color: #ffffff;
            min-height: 100vh;
        }
        
        .profile-container {
            position: relative;
            display: flex;
            justify-content: center;
            align-items: center;
            margin-bottom: 2rem;
        }
        
        .profile-outer {
            width: 240px;
            height: 240px;
            border-radius: 50%;
            background: #333;
            display: flex;
            justify-content: center;
            align-items: center;
            box-shadow: 0 4px 20px rgba(0, 0, 0, 0.3);
        }
        
        .profile-inner {
            width: 220px;
            height: 220px;
            border-radius: 50%;
            overflow: hidden;
        }
        
        .card-container {
            background-color: #2A2A2A;
            border-radius: 24px;
            box-shadow: 0 10px 30px rgba(0, 0, 0, 0.3);
            max-width: 1280px;
            margin: 40px auto;
            padding: 40px;
            position: relative;
            overflow: hidden;
        }
        
        .section-title {
            position: relative;
            display: inline-block;
            padding-bottom: 8px;
            margin-bottom: 20px;
            font-weight: 700;
            color: #fff;
            border-bottom: 2px solid #0078ff;
        }
        
        .social-icon {
            transition: all 0.3s ease;
            display: inline-flex;
            align-items: center;
            justify-content: center;
            width: 40px;
            height: 40px;
            border-radius: 50%;
            margin: 0 5px;
            font-size: 18px;
        }
        
        .social-icon:hover {
            transform: translateY(-3px);
        }
        
        .video-container {
            background-color: #333;
            border-radius: 12px;
            overflow: hidden;
            transition: all 0.3s ease;
        }
        
        .video-container:hover {
            transform: translateY(-5px);
            box-shadow: 0 10px 20px rgba(0, 0, 0, 0.3);
        }
        
        .book-container {
            background-color: #333;
            border-radius: 12px;
            overflow: hidden;
            transition: all 0.3s ease;
        }
        
        .book-container:hover {
            transform: translateY(-5px);
            box-shadow: 0 10px 20px rgba(0, 0, 0, 0.3);
        }
        
        .career-item, .edu-item, .cert-item, .interview-item {
            background-color: #333;
            border-radius: 12px;
            padding: 20px;
            margin-bottom: 15px;
            transition: all 0.3s ease;
        }
        
        .career-item:hover, .edu-item:hover, .cert-item:hover, .interview-item:hover {
            transform: translateY(-3px);
            box-shadow: 0 6px 15px rgba(0, 0, 0, 0.2);
            background-color: #3a3a3a;
        }
        
        .period-badge {
            display: inline-block;
            padding: 6px 12px;
            border-radius: 20px;
            background-color: #222;
            color: #fff;
            font-size: 14px;
            margin-bottom: 10px;
        }
        
        .company-logo {
            width: 40px;
            height: 40px;
            border-radius: 50%;
            object-fit: cover;
            margin-right: 15px;
        }
        
        .lecture-logo {
            height: 40px;
            filter: grayscale(100%) brightness(2);
            transition: all 0.3s ease;
            margin: 0 20px;
        }
        
        .lecture-logo:hover {
            filter: grayscale(0%) brightness(1);
        }
        
        .lecture-item {
            position: relative;
            overflow: hidden;
            border-radius: 10px;
            height: 200px;
        }
        
        .lecture-item img {
            width: 100%;
            height: 100%;
            object-fit: cover;
            transition: all 0.3s ease;
        }
        
        .lecture-item:hover img {
            transform: scale(1.05);
        }
        
        .lecture-badge {
            position: absolute;
            top: 10px;
            left: 10px;
            background-color: rgba(0, 0, 0, 0.7);
            color: white;
            padding: 5px 10px;
            border-radius: 5px;
            font-size: 12px;
        }
        
        .contact-info {
            display: flex;
            align-items: center;
            margin-bottom: 20px;
        }
        
        .contact-icon {
            width: 40px;
            height: 40px;
            background-color: rgba(255, 255, 255, 0.1);
            border-radius: 50%;
            display: flex;
            align-items: center;
            justify-content: center;
            margin-right: 15px;
            color: #0078ff;
        }
        
        .footer-link {
            color: #aaa;
            margin: 0 10px;
            transition: color 0.3s ease;
        }
        
        .footer-link:hover {
            color: #fff;
        }
    </style>
</head>
<body class="font-sans">
    <div class="card-container">
        <!-- 헤더 -->
        <header class="flex justify-between items-center mb-10">
            <div class="flex items-center">
                <div class="w-10 h-10 bg-blue-500 rounded-full flex items-center justify-center mr-3">
                    <span class="text-white font-bold">H</span>
                </div>
                <span class="text-white font-bold"><?php echo $name_eng; ?></span>
            </div>
            <div class="flex items-center space-x-6 text-gray-400">
                <a href="<?php echo $kakao_url; ?>" class="hover:text-white transition-colors"><?php echo $kakao; ?></a>
                <a href="<?php echo $yumeta_url; ?>" class="hover:text-white transition-colors"><?php echo $yumeta_lab; ?></a>
            </div>
        </header>

        <!-- 메인 프로필 섹션 -->
        <div id="intro" class="flex flex-col items-center text-center mb-16">
            <!-- 프로필 이미지 -->
            <div class="profile-container">
                <div class="profile-outer">
                    <div class="profile-inner">
                        <img src="images/profile.jpg" alt="<?php echo $name; ?>" class="w-full h-full object-cover">
                    </div>
                </div>
            </div>
            
            <!-- 직함 -->
            <p class="text-blue-400 font-medium text-lg mb-2"><?php echo $title; ?></p>
            
            <!-- 이름 -->
            <h1 class="text-5xl font-bold text-white mb-3"><?php echo $name_eng; ?></h1>
            
            <!-- 다국어 이름 -->
            <p class="text-gray-400 mb-5"><?php echo $name_alt; ?></p>
            
            <!-- 소셜 미디어 아이콘 -->
            <div class="flex mt-6 mb-10">
                <a href="#" class="social-icon" style="background-color: #FEE500; color: #000;">
                    <i class="fas fa-comment"></i>
                </a>
                <a href="#" class="social-icon" style="background-color: #0A66C2; color: #fff;">
                    <i class="fab fa-linkedin-in"></i>
                </a>
                <a href="#" class="social-icon" style="background-color: #1877F2; color: #fff;">
                    <i class="fab fa-facebook-f"></i>
                </a>
                <a href="#" class="social-icon" style="background-color: #E4405F; color: #fff;">
                    <i class="fab fa-instagram"></i>
                </a>
                <a href="#" class="social-icon" style="background-color: #000; color: #fff;">
                    <i class="fab fa-x-twitter"></i>
                </a>
            </div>
        </div>

        <!-- 비디오 섹션 -->
        <section class="mb-16">
            <h2 class="section-title text-2xl">Videos</h2>
            
            <div class="grid grid-cols-1 md:grid-cols-3 gap-6 mt-6">
                <?php foreach($videos as $index => $video): ?>
                <div class="video-container">
                    <div class="relative aspect-video">
                        <iframe 
                            src="<?php echo $video['url']; ?>"
                            title="<?php echo $video['title']; ?>"
                            frameborder="0"
                            allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share"
                            allowfullscreen
                            class="w-full h-full absolute top-0 left-0">
                        </iframe>
                    </div>
                    <div class="p-4">
                        <h3 class="font-medium text-white mb-1"><?php echo $video['title']; ?></h3>
                        <p class="text-gray-400 text-sm"><?php echo $video['channel']; ?>(<?php echo $video['date']; ?>)</p>
                    </div>
                </div>
                <?php endforeach; ?>
            </div>
        </section>
        
        <!-- 책 섹션 -->
        <section class="mb-16">
            <h2 class="section-title text-2xl mb-6 border-b-0 font-bold">Books</h2>
            
            <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-6 gap-4 mt-6">
                <?php foreach($books as $book): ?>
                <div class="book-container bg-gray-800 rounded-xl overflow-hidden h-full">
                    <div class="relative">
                        <img src="<?php echo $book['image']; ?>" alt="<?php echo $book['title']; ?>" class="w-full h-48 object-cover object-center">
                    </div>
                    <div class="p-3">
                        <h3 class="font-medium text-white mb-1 text-sm"><?php echo $book['title']; ?></h3>
                        <p class="text-gray-400 text-xs mb-2"><?php echo $book['description']; ?></p>
                        <div class="flex justify-between items-center">
                            <a href="<?php echo $book['purchase_link']; ?>" target="_blank" class="w-6 h-6 rounded-full bg-blue-500 flex items-center justify-center">
                                <i class="fas fa-shopping-cart text-xs text-white"></i>
                            </a>
                            <?php if ($book['title'] == "나는 메타버스에 살기로 했다"): ?>
                            <span class="text-red-500 text-xs font-medium">절판</span>
                            <?php elseif ($book['title'] == "AI 에이전트가 온다"): ?>
                            <span class="text-yellow-500 text-xs font-medium">준비중</span>
                            <?php endif; ?>
                        </div>
                    </div>
                </div>
                <?php endforeach; ?>
            </div>
        </section>
        
        <!-- 경력 및 교육 섹션 (2단 그리드) -->
        <div class="grid grid-cols-1 md:grid-cols-2 gap-10 mb-16">
            <!-- 경력 섹션 -->
            <section>
                <h2 class="section-title text-2xl">Careers</h2>
                
                <div class="mt-6 space-y-4">
                    <?php foreach($careers as $career): ?>
                    <div class="career-item">
                        <span class="period-badge"><?php echo $career['period']; ?></span>
                        <h3 class="text-lg font-medium text-white"><?php echo $career['title']; ?></h3>
                    </div>
                    <?php endforeach; ?>
                </div>
            </section>
            
            <!-- 교육 섹션 -->
            <section>
                <h2 class="section-title text-2xl">Education</h2>
                
                <div class="mt-6 space-y-4">
                    <?php foreach($education as $edu): ?>
                    <div class="edu-item">
                        <div class="flex items-center">
                            <img src="<?php echo $edu['logo']; ?>" alt="<?php echo $edu['school']; ?>" class="company-logo">
                            <div>
                                <span class="text-gray-400 text-sm"><?php echo $edu['type']; ?></span>
                                <h3 class="text-lg font-medium text-white"><?php echo $edu['school']; ?></h3>
                            </div>
                        </div>
                    </div>
                    <?php endforeach; ?>
                </div>
            </section>
        </div>
        
        <!-- 자격증 섹션 -->
        <section class="mb-16">
            <h2 class="section-title text-2xl">Certificates & Awards</h2>
            
            <div class="mt-6">
                <?php foreach($certificates as $cert): ?>
                <div class="cert-item flex items-center">
                    <div class="mr-6">
                        <img src="images/koi_logo.png" alt="KOI Logo" class="w-20 h-20 object-contain">
                    </div>
                    <div>
                        <h3 class="text-lg font-medium text-white"><?php echo $cert['title']; ?></h3>
                        <p class="text-gray-400"><?php echo $cert['description']; ?> (<?php echo $cert['date']; ?>)</p>
                    </div>
                </div>
                <?php endforeach; ?>
            </div>
        </section>
        
        <!-- 인터뷰 및 칼럼 섹션 -->
        <section class="mb-16">
            <h2 class="section-title text-2xl">Interview & Column</h2>
            
            <div class="grid grid-cols-1 md:grid-cols-2 gap-6 mt-6">
                <?php foreach($interviews as $interview): ?>
                <div class="interview-item">
                    <div class="flex items-center">
                        <div class="w-20 h-20 bg-gray-700 rounded-lg flex items-center justify-center mr-4 overflow-hidden">
                            <span class="text-xs text-center p-2"><?php echo $interview['publisher']; ?></span>
                        </div>
                        <div>
                            <span class="text-sm text-gray-400"><?php echo $interview['type']; ?></span>
                            <h3 class="text-lg font-medium text-white"><?php echo $interview['title']; ?></h3>
                            <p class="text-gray-400 text-sm"><?php echo $interview['publisher']; ?>(<?php echo $interview['date']; ?>)</p>
                        </div>
                    </div>
                </div>
                <?php endforeach; ?>
            </div>
        </section>
        
        <!-- 강의 섹션 -->
        <section class="mb-16">
            <h2 class="section-title text-2xl">Lectures</h2>
            
            <!-- 회사 로고들 -->
            <div class="flex flex-wrap justify-center items-center my-6">
                <img src="images/samsung_logo.png" alt="Samsung" class="lecture-logo">
                <img src="images/lg_logo.png" alt="LG" class="lecture-logo">
                <img src="images/sk_logo.png" alt="SK" class="lecture-logo">
                <img src="images/line_logo.png" alt="LINE" class="lecture-logo">
                <img src="images/doosan_logo.png" alt="Doosan" class="lecture-logo">
                <img src="images/korea_univ_logo.png" alt="Korea University" class="lecture-logo">
            </div>
            
            <div class="grid grid-cols-1 md:grid-cols-4 gap-6 mt-6">
                <?php foreach($lectures as $lecture): ?>
                <div class="lecture-item">
                    <span class="lecture-badge"><?php echo $lecture['year']; ?></span>
                    <img src="images/lecture_<?php echo strtolower(preg_replace('/\s+/', '_', $lecture['company'])); ?>.jpg" alt="<?php echo $lecture['title']; ?>" class="w-full h-full object-cover">
                    <div class="absolute bottom-0 left-0 right-0 bg-gradient-to-t from-black to-transparent p-4">
                        <h3 class="font-medium text-white"><?php echo $lecture['title']; ?></h3>
                        <p class="text-gray-300 text-sm"><?php echo $lecture['company']; ?></p>
                    </div>
                </div>
                <?php endforeach; ?>
            </div>
        </section>
        
        <!-- 프로젝트 섹션 -->
        <section class="mb-16">
            <h2 class="section-title text-2xl">Projects</h2>
            
            <div class="grid grid-cols-1 md:grid-cols-4 gap-6 mt-6">
                <?php foreach($projects as $project): ?>
                <div class="book-container">
                    <div class="relative">
                        <img src="<?php echo $project['image']; ?>" alt="<?php echo $project['title']; ?>" class="w-full h-56 object-cover">
                        <div class="absolute top-0 right-0 bg-blue-600 text-white text-xs font-bold px-2 py-1">
                            Project
                        </div>
                    </div>
                    <div class="p-4">
                        <h3 class="font-medium text-white mb-1"><?php echo $project['title']; ?></h3>
                        <p class="text-gray-400 text-sm mb-2"><?php echo $project['description']; ?></p>
                        <p class="text-gray-500 text-xs mb-3"><?php echo $project['tech']; ?></p>
                        <a href="<?php echo $project['url']; ?>" target="_blank" class="inline-block bg-blue-600 hover:bg-blue-700 text-white text-sm font-medium py-1.5 px-3 rounded-md transition-colors">
                            <i class="fas fa-external-link-alt mr-1"></i> 자세히 보기
                        </a>
                    </div>
                </div>
                <?php endforeach; ?>
            </div>
        </section>
        
        <!-- 연락처 섹션 -->
        <section id="contact" class="mb-12">
            <h2 class="section-title text-2xl">Contacts</h2>
            
            <div class="grid grid-cols-1 md:grid-cols-2 gap-10 mt-6">
                <!-- 연락처 폼 -->
                <div class="bg-cardbg rounded-xl p-6">
                    <h3 class="font-bold text-xl text-white mb-4">메시지 보내기</h3>
                    <form action="#" method="post" class="space-y-4">
                        <div>
                            <label for="name" class="block text-gray-400 text-sm mb-1">이름</label>
                            <input type="text" id="name" name="name" class="w-full rounded-md bg-gray-700 border-gray-600 text-white px-4 py-2 focus:outline-none focus:ring-2 focus:ring-blue-500">
                        </div>
                        <div>
                            <label for="email" class="block text-gray-400 text-sm mb-1">이메일</label>
                            <input type="email" id="email" name="email" class="w-full rounded-md bg-gray-700 border-gray-600 text-white px-4 py-2 focus:outline-none focus:ring-2 focus:ring-blue-500">
                        </div>
                        <div>
                            <label for="message" class="block text-gray-400 text-sm mb-1">메시지</label>
                            <textarea id="message" name="message" rows="5" class="w-full rounded-md bg-gray-700 border-gray-600 text-white px-4 py-2 focus:outline-none focus:ring-2 focus:ring-blue-500"></textarea>
                        </div>
                        <button type="submit" class="bg-blue-600 hover:bg-blue-700 text-white font-medium py-2 px-4 rounded-md transition-colors">
                            <i class="fas fa-paper-plane mr-2"></i>메시지 전송
                        </button>
                    </form>
                    
                    <div class="mt-6">
                        <h4 class="font-medium text-white mb-2">이메일로 문의하기</h4>
                        <a href="mailto:<?php echo $email; ?>" class="text-blue-400 hover:underline flex items-center">
                            <i class="fas fa-envelope mr-2"></i><?php echo $email; ?>
                        </a>
                    </div>
                </div>
                
                <!-- 구글 맵 -->
                <div>
                    <div class="bg-cardbg rounded-xl overflow-hidden">
                        <div class="aspect-video">
                            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3215.3523635611084!2d127.40847801561198!3d36.3015074801499!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x35654c0751dc3287%3A0x9a68582750e3a06b!2s74%20Techno%20Jungang-ro%2C%20Yuseong-gu%2C%20Daejeon!5e0!3m2!1sen!2skr!4v1687334562893!5m2!1sen!2skr" 
                                width="100%" height="100%" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                        </div>
                    </div>
                    <div class="mt-4">
                        <h4 class="font-medium text-white mb-2">대전 본사</h4>
                        <p class="text-gray-400 flex items-start">
                            <i class="fas fa-map-marker-alt text-blue-500 mt-1 mr-2"></i>
                            대전광역시 유성구 테크노중앙로 74, 4층 (관평동, 신영빌딩)
                        </p>
                    </div>
                </div>
            </div>
        </section>
        
        <!-- 푸터 -->
        <footer class="mt-20 pt-10 border-t border-gray-700 text-center text-sm text-gray-500">
            <div class="flex justify-center space-x-5 mb-6">
                <a href="#" class="footer-link">Twitter</a>
                <a href="#" class="footer-link">Facebook</a>
                <a href="#" class="footer-link">Instagram</a>
                <a href="#" class="footer-link">LinkedIn</a>
                <a href="#" class="footer-link">오픈갤 팔로우</a>
                <a href="#" class="footer-link">커서 AI</a>
                <a href="#" class="footer-link">블로그 검색</a>
            </div>
            <p>© <?php echo date("Y"); ?> <?php echo $name_eng; ?> All rights reserved.</p>
        </footer>
    </div>

    <div style="text-align:center; margin: 30px 0;">
        <a href="index.php" style="display:inline-block; background:#0078ff; color:#fff; padding:12px 32px; border-radius:8px; font-weight:bold; text-decoration:none; font-size:1.1rem; box-shadow:0 2px 8px rgba(0,0,0,0.08); transition:background 0.2s;">홈페이지로 돌아가기</a>
    </div>

    <script>
        // 페이지 로드 시 애니메이션 효과
        document.addEventListener('DOMContentLoaded', function() {
            const elements = document.querySelectorAll('.video-container, .book-container, .career-item, .edu-item, .cert-item, .interview-item, .lecture-item');
            elements.forEach((el, index) => {
                el.style.opacity = '0';
                el.style.transform = 'translateY(20px)';
                el.style.transition = 'opacity 0.5s ease, transform 0.5s ease';
                
                setTimeout(() => {
                    el.style.opacity = '1';
                    el.style.transform = 'translateY(0)';
                }, index * 100 + 300);
            });
        });
    </script>
</body>
</html> 