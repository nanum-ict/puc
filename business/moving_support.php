<?php require_once($_SERVER['DOCUMENT_ROOT'].'/inc/dochead.php'); ?>
<link rel="stylesheet" href="/assets/css/sub.css">
<link rel="stylesheet" href="/assets/css/business.css">
</head>
<body>
    <?php require_once($_SERVER['DOCUMENT_ROOT'].'/inc/header.php'); ?>
    
    <!-- Content -->
    <main id="content" class="sub business"> <!-- 폴더별 class -->
        <section class="sub-content substitute moving-support"> <!-- 페이지명 class -->
            <div class="section-header">
                <div class="page-path">
                    <h3>사업안내</h3>
                    <ol class="breadcrumb">
                        <li>사업안내</li>
                        <li>대행사업</li>
                    </ol>
                </div>
                <h4 class="title">대행사업</h4>
            </div>
            <div class="section-content">
                <nav class="dropdown nav-tab">
                    <button class="btn btn-secondary dropdown-toggle" type="button" id="nav-tab" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        교통약자에 이동지원센터
                    </button>
                    <div class="dropdown-menu" aria-labelledby="nav-tab">
                        <ul>
                            <li class="active"><a href="/business/moving_support.php">교통약자에 이동지원센터</a></li>
                            <li><a href="/business/traffic_playground.php">어린이교통공원</a></li>
                            <li><a href="/business/parking_lot.php">공영주차장</a></li>
                        </ul>
                    </div>
                </nav>
                <article>
                    <h5 class="sub-title">교통약자에 희망을 주는 교통수단 평택시 교통약자 이동지원센터</h5>
                </article>
                <article>
                    <h5 class="sub-title">운영안내</h5>
                    <ul class="dot-list">
                        <li>
                            운행지역
                            <ul class="dashed-list">
                                <li>
                                    <dl>
                                        <dt>관외</dt>
                                        <dd>
                                            서울, 경기, 인천, 충청지역
                                        </dd>
                                    </dl>
                                    <p class="note">(단, 병원진료, 장애인 재활서비스 이용을 위한 재활센터, 발달센터 및 복지센터 진료목적일 경우에 한정)<br>인접지역(시 경계 10km 이내) 출퇴근 및 등하교 목적 이용 가능</p>
                                </li>
                            </ul>
                        </li>
                        <li>운행시간 : 연중무휴 24시간</li>
                        <li>신청방법 : 사전예약제(1일전 예약 및 당일예약)</li>
                        <li>
                            예약접수시간
                            <ul class="dashed-list">
                                <li>전화예약 : 평일, 주말이용시(월~금 : 09:00~18:00)</li>
                                <li>인터넷 및 모바일앱 예약 : 평일, 주말이용시(월~금 : 09:00~18:00)</li>
                                <li>자동응답 예약 : 평일, 주말이용시(월~금 : 09:00~18:00)</li>
                            </ul>
                        </li>
                    </ul>
                </article>
                <article>
                    <h5 class="sub-title">이용대상</h5>
                    <ul class="dot-list">
                        <li>장애 1~2급</li>
                        <li>장애 3급 중(뇌병변, 지적, 자폐, 지체)</li>
                        <li>시각장애 4급까지</li>
                        <li>국가유공자 상이 1~2급</li>
                        <li>대중교통 이용이 불가능하다는 의사 및 병원 진단서("대중교통 이용 불가" 및 "치료기간 명시")를 발급받은 자<br>→ 서류심사 후 적격자 이용 가능<br>→ 이용대상자 심사신청서, 개인정보 제공 동의서, 병원진단서 제출(신청서류 확인은 공지사항 참조)</li>
                        <li>교통약자를 동반하는 가족 및 보호자 2인 이내 탑승가능</li>
                    </ul>
                </article>
                <article>
                    <h5 class="sub-title">이용요금</h5>
                    <ul class="dot-list">
                        <li>기본요금 : 1,200원(10km)</li>
                        <li>추가요금 : 100원(5km당)</li>
                        <li>대기요금 : 2시간 이내 무료, 2시간 초과시 30분당 500원</li>
                        <li>유료도로 통행료, 주차료 및 대기료 이용자 부담</li>
                    </ul>
                </article>
                <article>
                    <h5 class="sub-title">이용방법</h5>
                    <ul class="dot-list">
                        <li>모바일 앱 예약(플레이/앱스토어 접속, "경기도 광역이동" 검색)</li>
                        <li>인터넷 예약(경기도광역이동지원시스템 : <a href="http://ggsts.gg.go.kr" target="_blank">http://ggsts.gg.go.kr)</a></li>
                        <li>전화 예약(☎<a href="tel:0316514700">031-651-4700</a>)</li>
                        <li>자동응답 예약(☎<a href="tel:16660420">1666-0420</a>)</li>
                    </ul>
                </article>
                <article>
                    <h5 class="sub-title">이용문의 ☎ <a href="tel:0316514700">031)651-4700</a> / FAX 031)651-4780</h5>
                </article>
            </div>
        </section>
        <?php require_once($_SERVER['DOCUMENT_ROOT'].'/inc/side_quick.php'); ?>
    </main>
    
    <?php require_once($_SERVER['DOCUMENT_ROOT'].'/inc/quick.php'); ?>
    <?php require_once($_SERVER['DOCUMENT_ROOT'].'/inc/footer.php'); ?>
    <?php require_once($_SERVER['DOCUMENT_ROOT'].'/inc/docfoot.php'); ?>
    <script src="/assets/js/sub.js"></script>
</body>
</html>