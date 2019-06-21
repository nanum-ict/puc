<?php require_once($_SERVER['DOCUMENT_ROOT'].'/inc/dochead.php'); ?>
<link rel="stylesheet" href="/assets/css/sub.css">
<link rel="stylesheet" href="/assets/css/introcution.css">
</head>
<body>
    <?php require_once($_SERVER['DOCUMENT_ROOT'].'/inc/header.php'); ?>
    <!-- Content -->
    <main id="content" class="sub introcution"> <!-- 폴더별 class -->
        <section class="sub-content management"> <!-- 페이지명 class -->
            <div class="section-header">
                <h3 class="depth-title">공사소개</h3>
                <h4 class="title">경영공시</h4>
                <div class="page-path">
                    <ol class="breadcrumb">
                        <li>
                            <a href="/">
                                <i class="icon-home"><span class="sr-only">메인으로 이동</span></i>
                            </a>
                        </li>
                        <li>공사소개</li>
                        <li>
                            <div class="depth-2">
                                <button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                    경영공시
                                </button>
                                <div class="dropdown-menu">
                                    <a href="/introduction/greeting.php">CEO 인사말</a>
                                    <a href="/introduction/ci.php">공사 CI</a>
                                    <a href="/introduction/vision.php">비전과 미션</a>
                                    <a href="/introduction/general_status.php">일반현황</a>
                                    <a href="/introduction/management.php">경영공시</a>
                                    <a href="/introduction/group.php">조직 및 업무</a>
                                    <a href="/introduction/location.php">찾아오시는 길</a>
                                </div>
                            </div>
                        </li>
                    </ol>
                </div>
            </div>
            <div class="section-content">
                <div class="box">
                    <div class="content">
                        <p>평택도시공사의 투명하고 효율적인 경영공시 정보를 확인하실 수 있습니다.</p>
                    </div>
                </div>
                <nav class="tab-menu">
                    <ul>
                        <li class="active"><a href="/introduction/management.php">개요</a></li>
                        <li><a href="/introduction/result.php">경영평가결과</a></li>
                    </ul>
                </nav>
                <article>
                    <h5 class="sub-title">공시목적</h5>
                    <p>평택도시공사는 평택시민들에게 경영에 관한 정확한 정보를 전달하고 제공함으로써 경영에 관한 시민들의 이해와 신뢰를 바탕으로 고객에 대한 서비스 및 만족도를 향상시키고자함</p>
                    <h5 class="sub-title">근거</h5>
                    <p>지방공기업법 제 46조 (업무상황공표), 동법시행령 제 44조 (경영공시등)</p>
                    <h5 class="sub-title">주요공시내용</h5>
                    <ul class="square-list">
                        <li>결산서 및 재무제표</li>
                        <li>연도별 경영목표</li>
                        <li>경영실적, 평가결과</li>
                        <li>연도별 예산 및 운영계획</li>
                        <li>감사원법 제33조 내지 제34조 2규정의 의한 시적 또는 개선요구 등을 받은내용</li>
                        <li>지방자치법 제36조 및 동법시행령 제19조의 규정의 의한 시정요구를 받은내용</li>
                        <li>기타경영에 관한 중요사항으로서 행정자치부장관 또는 평택시장이 요청하는 사항</li>
                    </ul>
                    <h5 class="sub-title">공시의 열람주체</h5>
                    <p>평택시민</p>
                    <h5 class="sub-title">공시방법</h5>
                    <p>클린아이시스템 (<a href="http://www.cleaneye.go.kr/" target="_blank">http://www.cleaneye.go.kr</a>)</p>
                </article>
            </div>
        </section>
        
    </main>
    
    <?php require_once($_SERVER['DOCUMENT_ROOT'].'/inc/quick.php'); ?>
    <?php require_once($_SERVER['DOCUMENT_ROOT'].'/inc/footer.php'); ?>
    <?php require_once($_SERVER['DOCUMENT_ROOT'].'/inc/docfoot.php'); ?>
</body>
</html>