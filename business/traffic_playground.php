<?php require_once($_SERVER['DOCUMENT_ROOT'].'/inc/dochead.php'); ?>
<link rel="stylesheet" href="/assets/css/sub.css">
<link rel="stylesheet" href="/assets/css/business.css">
</head>
<body>
    <?php require_once($_SERVER['DOCUMENT_ROOT'].'/inc/header.php'); ?>
    
    <!-- Content -->
    <main id="content" class="sub business"> <!-- 폴더별 class -->
        <section class="sub-content substitute traffic-playground"> <!-- 페이지명 class -->
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
                        어린이교통공원
                    </button>
                    <div class="dropdown-menu" aria-labelledby="nav-tab">
                        <ul>
                            <li><a href="/business/moving_support.php">교통약자에 이동지원센터</a></li>
                            <li class="active"><a href="/business/traffic_playground.php">어린이교통공원</a></li>
                            <li><a href="/business/parking_lot.php">공영주차장</a></li>
                        </ul>
                    </div>
                </nav>
                <article>
                    <h5 class="section-title">운영안내</h5>
                    <h6 class="sub-title">이용안내 (평일)</h6>
                    <ul class="square-list">
                        <li>
                            <dl>
                                <dt>대상</dt>
                                <dd>보호자를 동반한 3~9세 어린이 (단체는 10명이상)</dd>
                            </dl>
                        </li>
                        <li>
                            <dl>
                                <dt class="bl">예약</dt>
                                <dd>
                                    <span>홈페이지 사전예약제</span>
                                    <a href="http://tp.pyeongtaek.go.kr" class="bl" target="_blank">http://tp.pyeongtaek.go.kr</a>
                                </dd>
                            </dl>
                        </li>
                        <li>
                            <dl>
                                <dt>전화상담</dt>
                                <dd><a href="tel:03180248690">031)8024-8690</a></dd>
                            </dl>
                        </li>
                        <li>
                            <dl>
                                <dt class="clear">운영시간</dt>
                                <dd>
                                    <div class="table-responsive">
                                        <table class="table">
                                            <colgroup>
                                                <col style="width: 25%;">
                                                <col style="width: 25%;">
                                                <col style="width: 25%;">
                                                <col style="width: 25%;">
                                            </colgroup>
                                            <thead>
                                                <tr>
                                                    <th scope="col" colspan="2">단체교육</th>
                                                    <th scope="col" rowspan="2">개별교육</th>
                                                    <th scope="col" rowspan="2">휴장일</th>
                                                </tr>
                                                <tr>
                                                    <th scope="col">교육프로그램명</th>
                                                    <th scope="col">교육시간</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <tr>
                                                    <td rowspan="4">교통안전 교육(월~금)<br>자전거 안전교육(화,목)</td>
                                                    <td>10 : 00</td>
                                                    <td rowspan="5">월,화,목,금<br>15:00~16:00</td>
                                                    <td rowspan="5">토 · 일요일 및<br>법정 공휴일</td>
                                                </tr>
                                                <tr>
                                                    <td>11 : 00</td>
                                                </tr>
                                                <tr>
                                                    <td>13 : 30</td>
                                                </tr>
                                                <tr>
                                                    <td>14 : 30</td>
                                                </tr>
                                                <tr>
                                                    <td>인형극 (월,수,금)</td>
                                                    <td>10 : 30</td>
                                                </tr>
                                            </tbody>
                                        </table>
                                    </div>
                                </dd>
                            </dl>
                        </li>
                    </ul>
                </article>
                <article>
                    <h5 class="section-title">교육내용 <small>(연령 및 상황에 맞는 교육운영)</small></h5>
                    <h6 class="sub-title">교통안전 교육 (실내)</h6>
                    <ul class="square-list">
                        <li>
                            <b>교통나라가 위험해요.</b>
                            어린이 10대 안전사고, 앗, 위험해요!
                        </li>
                        <li>
                            <b>교통나라를 지켜줘요.</b>
                            횡단보도 건너기, 도로위에 그림은 무엇일까요?<br>
                            우리가 지켜야할 교통문화 예절. 안전생활을 실천하는 세계 어린이들. 사고가 나면 침착하게 행동해요.<br>비행기는 어떻게 타야 하나요? 교통수단의 안전한 이용법, 자전거 안전하게 타보기<br> 유치원 앞, 아파트 주차장, 우리 집 앞 골목에서 바르게 알고 타보아요. 차에서는 안보여요(사각지대 등)<br>비가 오는 날과 밤에는 더욱 조심해요. 버스를 기다려요, 버스 안전벨트 체험
                        </li>
                        <li>
                            <b>교통나라와 약속해요</b>
                            잊지 말고 기억해요(OX퀴즈). 포토존
                        </li>
                    </ul>
                </article>
                <article class="educational-contents">
                    <div>
                        <h6 class="sub-title">손 인형극</h6>
                        <ul class="square-list">
                            <li>빨간불과 초록불은 왜 싸웠을까?</li>
                            <li>무동이의하루 : 어린이 10대 안전사고 유형</li>
                        </ul>
                        <figure>
                            <img src="/assets/images/business/img_educational01.jpg" class="img-fluid" alt="손 인형극">
                        </figure>
                    </div>
                    <div>
                        <h6 class="sub-title">자전거 안전 교육 (실외)</h6>
                        <ul class="square-list">
                            <li>자전거 안전장비에 대한 교육</li>
                            <li>교통신호 지키며 안전하게 타는 법 체험</li>
                        </ul>
                        <figure>
                            <img src="/assets/images/business/img_educational02.jpg" class="img-fluid" alt="자전거 안전 교육">
                        </figure>
                    </div>
                    <div>
                        <h6 class="sub-title">특별교육 (실내) 어린이 차량안전교육</h6>
                        <ul class="square-list">
                            <li>자동차 구조 알기 및 위급상황에서 구조요청체험</li>
                            <li>통학버스 승하차시 안전과 사고예방 교육</li>
                        </ul>
                        <figure>
                            <img src="/assets/images/business/img_educational03.jpg" class="img-fluid" alt="어린이 차량안전교육">
                        </figure>
                    </div>
                    <div>
                        <h6 class="sub-title">실외활동</h6>
                        <ul class="square-list">
                            <li>실외횡단보도 건너기</li>
                        </ul>
                        <figure>
                            <img src="/assets/images/business/img_educational04.jpg" class="img-fluid" alt="실외활동">
                        </figure>
                    </div>
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