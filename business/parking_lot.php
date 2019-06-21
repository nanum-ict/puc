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
                <h3 class="depth-title">사업안내</h3>
                <h4 class="title">대행사업</h4>
                <div class="page-path">
                    <ol class="breadcrumb">
                        <li>
                            <a href="/">
                                <i class="icon-home"><span class="sr-only">메인으로 이동</span></i>
                            </a>
                        </li>
                        <li>사업안내</li>
                        <li>
                            <div class="depth-2">
                                <button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                    위수탁사업
                                </button>
                                <div class="dropdown-menu">
                                    <a href="/business/housing.php">택지개발사업</a>
                                    <a href="/business/jinwi02.php">산업단지조성사업</a>
                                    <a href="/business/moving_support.php">위수탁사업</a>
                                    <a href="/business/yellowsea.php">황해경제자유구역 개발사업</a>
                                    <a href="/business/braincity.php">브레인시티 일반산업단지 조성사업</a>
                                </div>
                            </div>
                        </li>
                    </ol>
                </div>
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
                    <ol class="decimal-list">
                        <li>
                            주차요금 100퍼센트 감면 대상
                            <ol>
                                <li>가. 국빈이나 외교사절 및 그 수행원의 자동차</li>
                                <li>나. 국가나 평택시 소유 자동차 중 공무수행중인 자동차</li>
                            </ol>
                        </li>
                        <li>
                            주차요금 일부 면제(감면) 대상
                            <ol class="hangul">
                                <li>
                                    가. 4시간 이내 주차한 경우에는 주차요금을 면제하고, 4시간을 초과하는 경우 및 1일 주차권과 월정기 주차권의 100분의 50감면 대상
                                    <ol class="decimal-list type-2">
                                        <li>「국가유공자 등 예우 및 지원에 관한 법률」제4조에 의한 국가유공자증서를 소지한 사람의 자동차</li>
                                        <li>「평택시 국가보훈대상자 등 예우 및 지원에 관한 조례」제2조에 따른 국가 보훈대상자의 자동차</li>
                                        <li>성실납세자(국세 및 지방세)로 지정된 개인, 법인․단체의 성실납세자인 증서 소지 자동차 <br>단, 교부 일부터 1년에 한한다.</li>
                                        <li>제1호부터 제3호까지의 규정에 따라 장애 정도가 심하여 타인으로 대리 운전하게 하여 동승한 자동차</li>
                                    </ol>
                                </li>
                                <li>나. 「장애인복지법」제32조에 따라 장애인등록증을 소지한 사람이 장애인 자동차 표지를 부착한 자동차를 직접 운전하거나 동승한 경우 2시간 이내 주차한 경우에는 주차요금을 면제하고, 2시간을 초과하는 경우 및 1일 주차권과 월정기 주차권의 100분의 50을 감면한다.</li>
                                <li>
                                    다. 주차요금 50퍼센트 감면 대상(1일 주차 및 월정기주차권 포함)
                                    <ol class="decimal-list type-2">
                                        <li>「평택시 헌혈 및 장기․인체조직 기증 장려에 관한 조례」에 따른 장기․인체 조직 기증 등록자와 기증자</li>
                                        <li>「수도권 대기환경개선에 관한 특별법 시행령」제3조에 따른 저공해자동차 표지부착 차량</li>
                                        <li>「자동차관리법」에 따른 경형 자동차</li>
                                        <li>「평택시 병역명문가 예우 및 지원에 관한 조례」에 의한 병역명문가증을 소지한 사람의 차량</li>
                                    </ol>
                                </li>
                                <li>
                                    라. 주차요금 30퍼센트 감면 대상(1일 주차 및 월정기 주차권 포함)
                                    <ul class="dashed-list">
                                        <li>철도(전철) 환승목적으로 시장이 규칙으로 정한 공영주차장을 이용하고 철도역장이 확인한 차량.<br>다만,「자동차관리법 시행 규칙」제2조에 따른 경형자동차는 100분의 90 감면</li>
                                    </ul>
                                </li>
                                <li>
                                    마. 주차요금 20퍼센트 감면 대상(1일 주차 및 월정기주차권 포함)
                                    <ul class="dashed-list">
                                        <li>승용차 부제 및 함께 타기 표지부착 차량. 다만, 부제 불이행자의 차량에 대하여는 주차장 이용을 거부할 수 있다.</li>
                                    </ul>
                                </li>
                            </ol>
                        </li>
                        <li>공영주차장 이용률 증대를 위하여 필요한 경우, 평택시에서 주관하는 행사 개최에 필요한 경우 등 공익 목적을 위해 필요한 경우에는 위 규정에 관계없이 주차요금을 감면할 수 있다.</li>
                    </ol>
                </article>
            </div>
        </section>
    </main>
    
    <?php require_once($_SERVER['DOCUMENT_ROOT'].'/inc/quick.php'); ?>
    <?php require_once($_SERVER['DOCUMENT_ROOT'].'/inc/footer.php'); ?>
    <?php require_once($_SERVER['DOCUMENT_ROOT'].'/inc/docfoot.php'); ?>
</body>
</html>