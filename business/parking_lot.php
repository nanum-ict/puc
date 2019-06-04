<?php require_once($_SERVER['DOCUMENT_ROOT'].'/inc/dochead.php'); ?>
<link rel="stylesheet" href="/assets/css/sub.css">
<link rel="stylesheet" href="/assets/css/business.css">
</head>
<body>
    <?php require_once($_SERVER['DOCUMENT_ROOT'].'/inc/header.php'); ?>
    
    <!-- Content -->
    <main id="content" class="sub business"> <!-- 폴더별 class -->
        <section class="sub-content substitute parking-lot"> <!-- 페이지명 class -->
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
                        공영주차장
                    </button>
                    <div class="dropdown-menu" aria-labelledby="nav-tab">
                        <ul>
                            <li><a href="/business/moving_support.php">교통약자에 이동지원센터</a></li>
                            <li><a href="/business/traffic_playground.php">어린이교통공원</a></li>
                            <li class="active"><a href="/business/parking_lot.php">공영주차장</a></li>
                        </ul>
                    </div>
                </nav>
                <article class="parking-guide">
                    <h5 class="sub-title">주차장 현황 안내페이지</h5>
                    <a href="http://parking.puc.or.kr/parking_guide.php" target="_blank">http://parking.puc.or.kr/parking_guide.php </a>
                </article>
                <article class="charge">
                    <h5 class="sub-title">주차요금</h5>
                    <div class="table-responsive">
                        <table class="table">
                            <colgroup>
                                <col style="width: 33.33%">
                                <col style="width: 33.33%">
                                <col style="width: 33.33%">
                            </colgroup>
                            <thead>
                                <tr>
                                    <th scope="col">30분 이내</th>
                                    <th scope="col">1시간 이하</th>
                                    <th scope="col">1시간 초과</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>500원</td>
                                    <td>1,000원</td>
                                    <td>10분에 300원</td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </article>
                <article class="regular-charge">
                    <h5 class="sub-title">정기 주차요금</h5>
                    <div class="table-responsive">
                        <table class="table">
                            <colgroup>
                                <col style="width: 13%">
                                <col style="width: 29%">
                                <col style="width: 29%">
                                <col style="width: 29%">
                            </colgroup>
                            <thead>
                                <tr>
                                    <th scope="col" rowspan="2">1일</th>
                                    <th scope="col" colspan="3">월 정기권</th>
                                </tr>
                                <tr>
                                    <th scope="col">종일권(주 ‧ 야간)</th>
                                    <th scope="col">주간권(08시~19시)</th>
                                    <th scope="col">야간권(19시~익일 08시)</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>8,000원</td>
                                    <td>7만원</td>
                                    <td>6만원</td>
                                    <td>5만원</td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </article>
                <article>
                    <h5 class="sub-title">전통시장 : 1시간 무료, 이후 정상요금</h5>
                </article>
                <article class="reduce-tariff">
                    <h5 class="sub-title">요금감면</h5>
                    <div class="table-responsive">
                        <table class="table">
                            <thead>
                                <tr>
                                    <th scope="col" rowspan="2">4시간 면제 후<br>50% 감면</th>
                                    <th scope="col" rowspan="2">2시간 면제 후<br>50% 감면</th>
                                    <th scope="col" rowspan="2">50% 감면</th>
                                    <th scope="col" rowspan="2">20% 감면</th>
                                    <th scope="col" colspan="2">환승할인</th>
                                </tr>
                                <tr>
                                    <th scope="col">90% 감면</th>
                                    <th scope="col">30% 감면</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>
                                        <ul class="dashed-list">
                                            <li>국가유공자</li>
                                            <li>고엽제후유증환자</li>
                                            <li>참전유공자</li>
                                            <li>국가보훈대상자 </li>
                                            <li>성실납세자</li>
                                        </ul>
                                    </td>
                                    <td>
                                        <ul class="dashed-list">
                                            <li>장애인 자동차</li>
                                        </ul>
                                    </td>
                                    <td>
                                        <ul class="dashed-list">
                                            <li>장기 기증자</li>
                                            <li>저공해자동차</li>
                                            <li>경형 지동차</li>
                                            <li>병역명문가</li>
                                            <li>다자녀 가구</li>
                                        </ul>
                                    </td>
                                    <td>
                                        <ul class="dashed-list">
                                            <li>승용차 부제 및 함께타기 표지 부착차량</li>
                                        </ul>
                                    </td>
                                    <td class="center">경형<br>자동차</td>
                                    <td class="center">일반<br>자동차</td>
                                </tr>
                                <tr>
                                    <td><p class="attention">증서 소지자에 한하여 감면</p></td>
                                    <td><p class="attention">직접운전 또는 동승한 경우에만 해당</p></td>
                                    <td><p class="attention">증서 소지자에 한하여 감면</p></td>
                                    <td><p class="attention">증서 소지자에 한하여 감면(부제 불이행자 제외)</p></td>
                                    <td colspan="2"><p class="attention">목적지 철도역장의 확인서 제출자에 한하여 감면</p></td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                    <p class="attention">정기 주차요금도 동일 적용</p>
                </article>
                <article class="exempt">
                    <h5 class="sub-title">공영주차장 주차요금 감면대상 및 감면기준</h5>
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