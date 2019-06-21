<?php require_once($_SERVER['DOCUMENT_ROOT'].'/inc/dochead.php'); ?>
<link rel="stylesheet" href="/assets/css/sub.css">
<link rel="stylesheet" href="/assets/css/customer.css">
</head>
<body>
    <?php require_once($_SERVER['DOCUMENT_ROOT'].'/inc/header.php'); ?>
    
    <!-- Content -->
    <main id="content" class="sub customer"> <!-- 폴더별 class -->
        <section class="sub-content faqlist"> <!-- 페이지명 class -->
            <div class="section-header">
                <h3 class="depth-title">고객광장</h3>
                <h4 class="title">자주 묻는 질문</h4>
                <div class="page-path">
                    <ol class="breadcrumb">
                        <li>
                            <a href="/">
                                <i class="icon-home"><span class="sr-only">메인으로 이동</span></i>
                            </a>
                        </li>
                        <li>고객광장</li>
                        <li>
                            <div class="depth-2">
                                <button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                    자주 묻는 질문
                                </button>
                                <div class="dropdown-menu">
                                    <a href="/customer/charter.php">고객서비스</a>
                                    <a href="/customer/faqlist.php">자주 묻는 질문</a>
                                    <a href="/customer/advice_write.php">고객의 소리</a>
                                    <a href="/customer/praise_list.php">칭찬합시다</a>
                                    <a href="/customer/privacy.php">개인정보취급방법</a>
                                    <a href="/customer/email_policy.php">이메일 추출방지정책</a>
                                    <a href="/customer/bc_faqlist.php">브레인시티 자주 묻는 질문</a>
                                    <a href="/customer/counseling.php">브레인시티 온라인 상담</a>
                                    <a href="/customer/outline.php">정보공개</a>
                                    <a href="/customer/sinmungo.php">안전신문고</a>
                                </div>
                            </div>
                        </li>
                    </ol>
                </div>
            </div>
            <div class="section-content">
                <div class="box">
                    <div class="content">
                        <strong>평택도시공사 홈페이지 이용자 여러분께서 자주 묻는 질문을 정리하였습니다.</strong>
                        <p>방문자들께서 쉽게 편리하게 이용할 수 있는 공간을 만드는 평택도시공사가 되겠습니다.</p>
                    </div>
                </div>
                <div class="search-form">
                    <form action="#">
                        <div class="form-group">
                            <input type="text" id="board-search" class="form-control" placeholder="검색어를 입력해 주세요.">
                            <label for="board-search" class="sr-only">게시판 검색</label>
                            <button type="submit" class="btn btn-search">
                                <i class="icon-search">
                                    <span class="sr-only">검색버튼</span>
                                </i>
                            </button>
                        </div>
                    </form>
                </div>
                <div class="faq-list">
                    <ul>
                        <li class="item active">
                            <a href="javascript:;" class="question" role="button">현 38호선 국도 경계부의 조성계획은 어떻게 되나요?</a>
                            <div class="answer">
                                <div class="content">
                                    <ul class="question-list">
                                        <li>
                                            (황해경제자유구역 포승지구 개발사업)<br>
                                            현 38호선 국도 경계부의 조성계획은 어떻게 되나요?
                                            <ul class="dot-list">
                                                <li>산업물 입지에 따라 대상지 경계부에 충분한 완충녹지를 조성하여 위압감과 이질감을 완화 예정입니다.</li>
                                            </ul>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </li>
                        <li class="item">
                            <a href="javascript:;" class="question" role="button">고덕국제화계획지구 택지개발사업 안내</a>
                            <div class="answer">
                                <div class="content">
                                    <ul class="question-list">
                                        <li>
                                            고덕신도시 공사 및 분양일정은 어떻게 되나요?
                                            <ul class="dot-list">
                                                <li>고덕국제화계획지구 택지개발사업은 총 3단계로 개발계획이 수립되어 있으며, 사업지구 연건을 고려하여 단계별로 조성공사 및 분양이 이루어질 예정입니다.</li>
                                            </ul>
                                        </li>
                                        <li>
                                            고덕국제화계획지구 택지개발사업 최종 준공일은 언제인가요?
                                            <ul class="dot-list">
                                                <li>단계별 사업여건에 따라 변경이 될 수 있으나, 현재 계획상 최종 준공은 2020년 12월 말 예정입니다.</li>
                                            </ul>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </li>
                        <li class="item">
                            <a href="javascript:;" class="question" role="button">진위2일반산업단지 조성사업 안내</a>
                            <div class="answer">
                                <div class="content">
                                    <ul class="question-list">
                                        <li>
                                            진위2일반산업단지 위치, 면적, 업종이 어떻게 되나요?
                                            <ul class="dot-list">
                                                <li>위치 : 평택시 진위면 가곡리, 갈곶리 일원</li>
                                                <li>면적 : 976,270㎡</li>
                                                <li>업종 : 전자부품, 컴퓨터, 영상·음향 및 통신장비 제조업, 기타 기계 및 장비제조업, 전기장비 제조업, 자동차 및 트레일러 제조업 등</li>
                                            </ul>
                                        </li>
                                        <li>
                                            진위2일반산업단지 준공일은 언제인가요?
                                            <ul class="dot-list">
                                                <li>2017년 12월 말 준공 예정입니다.</li>
                                            </ul>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </li>
                        <li class="item">
                            <a href="javascript:;" class="question" role="button">분양/보상 안내</a>
                            <div class="answer">
                                <div class="content">
                                    <ol class="question-list">
                                        <li>
                                            1. 보상 관련
                                            <ul class="dot-list space">
                                                <li>
                                                    보상금 산정 방법은 어떻게 되나요?
                                                    <ul class="dashed-list">
                                                        <li>사업지구내 편입된 토지 등에 대한 보상금은 「공익사업을위한토지등의 취득 및 보상에관한법률 제68조1항」에 의거 감정평가업자 2인(주민 추천시 2개 업자)이 당해 토지 등의 제반사항을 종합적으로 고려하여 평가한 금액을 산술 평균하여 산정합니다.</li>
                                                    </ul>
                                                </li>
                                                <li>
                                                    보상금에 불복할 경우 어떻게 되나요?
                                                    <ul class="dashed-list">
                                                        <li>산정된 보상금에 불만이 있으신 경우, 관할수용위원회 재결이나 행정소송 등 불복구제절차를 통해 재평가 등을 받으실 수 있습니다.</li>
                                                    </ul>
                                                </li>
                                                <li>
                                                    토지소유자 추천 감정평가사는 어떻게 선정되나요?
                                                    <ul class="dashed-list">
                                                        <li>보상대상 토지면적의 1/2이상에 해당하는 토지소유자와 당해 토지소유자 총 수의 과반수 이상의 동의를 얻어 평가업체 1개를 선정하고, 동의를 얻은 증명서류를 보상계획 열람기간 만료일부터 30일 이내에 사업시행자에게 제출하면 됩니다.</li>
                                                    </ul>
                                                </li>
                                            </ul>
                                        </li>
                                        <li>
                                            2. 분양 관련
                                            <ul class="dot-list space">
                                                <li>
                                                    부동산 실거래가격 신고제도란 무엇인가요?
                                                    <ul class="dashed-list">
                                                        <li>부동산 투기 및 탈세의 원인이 되고 있는 이중계약서 작성 등 잘못된 관행을 없애고 부동산 거래를 투명하게 하기 위해 부동산 실거래가격 신고제도가 시행되고있는데, 부동산 매매시 거래 당사자 또는 중개업자는 계약 체결일로부터 60일 이내에 실제 거래가격을 대상물건의(토지 및 건축물) 소재지 관할 시장, 군수, 구청장에게 신고하는 제도입니다. 단, 중개업자가 거래계약서를 작성한 때에는 중개업자가 신고해야 합니다. 시장, 군수, 구청장은 신고내용을 확인 후 신고필증을 교부합니다.</li>
                                                    </ul>
                                                </li>
                                                <li>
                                                    택지 분양시 세금안내
                                                    <ul class="dashed-list">
                                                        <li>취득세액 : 토지매입대금의 2%이며 추가로 농어촌 특별세가 취득세액의 10%이므로 총 취득세액은 전체 토지매입대금의 2.2%가 됩니다.</li>
                                                        <li>
                                                            취득세액 납부기한<br>
                                                            일시불 납부 : 잔금 납부 후 30일 이내에 납부<br>
                                                            분할 납부 : 대금납부기간이 2년 미만인 경우는 토지매입대금 완납 후 30일 이내, 대금납부 기간이 2년 이상인 경우는 연부취득에 해당되므로 매번 할부금을 납부할 때마다 용지매매계약서, 토지대금납부영수증을 지참하여 토지소재지 관할구청에 신고 후 당해 취득분에 대하여 납부하며, 납부기한 경과시는 가산세 20%가 부과됩니다.
                                                        </li>
                                                        <li>등록세액 : 토지매입대금의 2%이며, 등록세액의 20%에 해당하는 교육세가 추가되므로 총 등록세액은 전체 토지매입대금의 2.4% 입니다.</li>
                                                        <li>
                                                            등록세액 납부기한<br>
                                                            대금납부방법에 관계없이 토지매입대금을 완납한 날로부터 60일 이내에 당해 토지 소재지 관할구청에 소유권이전등기를 신청하여야 하며 위 기한을 경과한 경우에는 그 기간에 따라 가산세가 부과됩니다.<br>
                                                            등록세 납부시 토지소재지 관할구청 세무과에 계약서 원본, 토재매매대금 완납확인서를 지참하여 신고하시면 됩니다.
                                                        </li>
                                                    </ul>
                                                </li>
                                            </ul>
                                        </li>
                                    </ol>
                                </div>
                            </div>
                        </li>
                        <li class="item">
                            <a href="javascript:;" class="question" role="button">교통약자이동지원센터 안내</a>
                            <div class="answer">
                                <div class="content">
                                    <ul class="arrow-list">
                                        <li>
                                            특별교통수단 이용조건을 알고 싶습니다.
                                            <ul class="dashed-list">
                                                <li>장애 1등급 ~ 2등급</li>
                                                <li>장에 3등급 中 ( 뇌병변장애, 지적장애, 자폐성장애, 지체장애)</li>
                                                <li>시각장애 1등급 ~ 4등급</li>
                                                <li>국가유공자 상이 1등급, 2등급</li>
                                                <li>
                                                    대중교통 이용이 불가능하다는 의사 및 병원 진단서("대중교통 이용 불가" 및 "치료기간 명시")를 발급받은 자
                                                    <ul class="arrow-list2">
                                                        <li>서류심사 후 적격자 이용 가능</li>
                                                        <li>이용대상자 심사신청서, 개인정보 제공 동의서, 병원진단서 제출</li>
                                                    </ul>
                                                </li>
                                                <li>교통약자를 동반하는 가족 및 보호자 2인 이내</li>
                                            </ul>
                                        </li>
                                        <li>
                                            특별교통수단 이용밥법을 알고 싶습니다.
                                            <ul class="dashed-list">
                                                <li>이용자 등록 : 장애인 복지카드 사본 및 기타 필요서류 제출</li>
                                                <li>차량예약 : 전일 및 당일 전화예약 (<a href="tel:0316514700">031-651-4700</a>)</li>
                                            </ul>
                                        </li>
                                        <li>
                                            특별교통수단 이용시간을 알고 싶습니다.
                                            <ul class="dashed-list">
                                                <li>
                                                    이용접수
                                                    <ul class="arrow-list2">
                                                        <li>전화예약 : 평일, 주말이용시(월~금 : 09:00 ~ 18:00)</li>
                                                        <li>인터넷 및 모바일앱 예약 평일, 주말이용시(월~금 : 09:00 ~ 18:00)</li>
                                                        <li>자동응답 예약 평일, 주말이용시(월~금 : 09:00 ~ 18:00)</li>
                                                        <li>차량운행 : 연중무휴 24시간</li>
                                                    </ul>
                                                </li>
                                            </ul>
                                        </li>
                                        <li>
                                            특별교통수단 운행지역을 알고 싶습니다.
                                            <ul class="dashed-list">
                                                <li>평택시 관할구역</li>
                                                <li>
                                                    관외
                                                    <ul class="arrow-list2">
                                                        <li>서울, 경기, 인천, 충청지역(단, 병원진료, 장애인 재활서비스 이용을 위한 재활센터, 발달센터 및 복지센터 진료 목적일 경우에 한정</li>
                                                        <li>인접지역(시 경계 10km 이내) 출퇴근 및 등하교 목적 이용 가능</li>
                                                    </ul>
                                                </li>
                                            </ul>
                                        </li>
                                        <li>
                                            특별교통수단 이용요금을 알고 싶습니다.
                                            <ul class="dashed-list">
                                                <li>기본요금 : 1,200원 (10km)</li>
                                                <li>추가요금 : 100원 (5km)</li>
                                                <li>대기료 : 2시간 이내 무료, 2시간 초과시 30분당 500원</li>
                                                <li>유료도로 통행료, 주차료 및 대기료는 이용자 부담</li>
                                            </ul>
                                        </li>
                                        <li>
                                            안내
                                            <ul class="dashed-list">
                                                <li>주소 : 경기도 평택시 도일유통길 25</li>
                                                <li>전화 : <a href="tel:0316514700">031-651-4700</a></li>
                                            </ul>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </li>
                        <li class="item">
                            <a href="javascript:;" class="question" role="button">평택시 공영주차장 안내</a>
                            <div class="answer">
                                <div class="content">
                                    <ul class="question-list">
                                        <li>
                                            평택시 공영주차장 할인권은 어떻게 구매하나요?
                                            <ul class="dot-list">
                                                <li>평택도시공사 공영주차장 관제센터에서 100매 단위로 판매하고 있으며, 평택시 공영주차장 어느 곳에서나 사용이 가능합니다.</li>
                                                <li>500원권 / 1,000원권 (10% 할인가로 구매 가능)</li>
                                            </ul>
                                        </li>
                                        <li>
                                            평택시 공영주차장 정기권은 어떻게 구매하나요?
                                            <ul class="dot-list">
                                                <li>카드결제, 계좌이체, 현금결제 등을 이용하여 구매가 가능하며, 지정된 차량에 한하여 사용 가능합니다.</li>
                                                <li>종일권(24시간) : 7만원 / 주간권(08:00~19:00) : 6만원 / 야간권(19:00~08:00) 5만원</li>
                                            </ul>
                                        </li>
                                        <li>
                                            공영주차장 이용요금 할인은 어떻게 받나요?
                                            <ul class="dot-list">
                                                <li>출차시 인터폰을 통하여 연락주시면 법정 할인율을 적용받아 출차 가능합니다.</li>
                                                <li>
                                                    할인내용
                                                    <div class="table-responsive">
                                                        <table class="table">
                                                            <colgroup>
                                                                <col style="width: 20%;">
                                                                <col style="width: 20%;">
                                                                <col style="width: 15%;">
                                                                <col style="width: 15%;">
                                                                <col style="width: 15%;">
                                                                <col style="width: 15%;">
                                                            </colgroup>
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
                                                                        국가유공자<br>
                                                                        고엽제후유증환자<br>
                                                                        참전유공자<br>
                                                                        국가보훈대상자<br>
                                                                        성실납세자
                                                                    </td>
                                                                    <td>장애인 자동차</td>
                                                                    <td>
                                                                        장기 기증자<br>
                                                                        저공해자동차<br>
                                                                        경형 자동차<br>
                                                                        병역명문가<br>
                                                                    </td>
                                                                    <td>승용차 부제 및 함께타기 표지 부착차량</td>
                                                                    <td>경형자동차</td>
                                                                    <td>일반자동차</td>
                                                                </tr>
                                                                <tr>
                                                                    <td>※ 증서 소지자에 한하여 감면</td>
                                                                    <td>※직접운전 또는 동승한 경우에만 해당</td>
                                                                    <td>※증서 소지자에 한하여 감면</td>
                                                                    <td>※증서 소지자에 한하여 감면(부제 불이행자 제외)</td>
                                                                    <td colspan="2">※목적지 철도역장의 확인서 제출자에 한하여 감면(원평1, 원평2, 송탄역 공영주차장)</td>
                                                                </tr>
                                                            </tbody>
                                                        </table>
                                                    </div>
                                                </li>
                                            </ul>
                                        </li>
                                        <li>
                                            공영주차장 이용요금은 어떻게 되나요?
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
                                                            <th scope="col">30분 이내</th>
                                                            <th scope="col">1시간 이하</th>
                                                            <th scope="col">1시간 초과</th>
                                                            <th scope="col">1일 최대요금</th>
                                                        </tr>
                                                    </thead>
                                                    <tbody>
                                                        <tr>
                                                            <td>500원</td>
                                                            <td>1,000원</td>
                                                            <td>10분에 300원</td>
                                                            <td>8,000원</td>
                                                        </tr>
                                                    </tbody>
                                                </table>
                                            </div>
                                        </li>
                                        <li>
                                            공영주차장 이용문의
                                            <ul class="dot-list">
                                                <li>주소 : 경기도 평택시 도일유통길 25, 1층 공영주차장 관제센터(도일동)</li>
                                                <li>전화 : <a href="tel:0316923431">031-692-3431~2</a></li>
                                            </ul>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </li>
                        <li class="item">
                            <a href="javascript:;" class="question" role="button">평택시 어린이교통공원 안내</a>
                            <div class="answer">
                                <div class="content">
                                    <ul class="question-list">
                                        <li>
                                            평택시 어린이교통공원은 무엇을 하는 곳입니까?
                                            <ul class="dot-list">
                                                <li>어린이에게 실제 발생할 수 있는 사고사례에 입각한 교통안전 실습교육을 실시하는 곳입니다.</li>
                                            </ul>
                                        </li>
                                        <li>
                                            평택시 어린이교통공원의 위치는 어디입니까?
                                            <ul class="dot-list">
                                                <li>신주소 : 경기도 평택시 안중읍 현화6길 48 (안중레포츠공원內)</li>
                                                <li>구주소 : 평택시 안중읍 현화리 산312</li>
                                                <li>연락처 : <a href="tel:03180248690">031-8024-8690</a></li>
                                            </ul>
                                        </li>
                                        <li>
                                            교통안전교육 참여는 어떻게 하나요?
                                            <ul class="dot-list">
                                                <li>홈페이지 회원가입 후 [예약하기] 화면에서 신청</li>
                                                <li>단체예약은 주중, 개별예약은 매주 화,목 15:00 진행합니다.</li>
                                                <li>홈페이지 : <a href="http://tp.pyeongtaek.go.kr/" target="_blank">http://tp.pyeongtaek.go.kr/</a></li>
                                            </ul>
                                        </li>
                                        <li>
                                            평택시 어린이교통공원 운영시간은 어떻게 되나요?
                                            <ul class="dot-list">
                                                <li>오전 9시부터 오후 6시까지 운영하고 있습니다.</li>
                                                <li>시설가동 준비를 위해 오전 10시부터 입장 가능하며, 정비 및 마감을 위해 오후 4시 전까지 입장하실 수 있습니다.</li>
                                                <li>매주 토, 일요일 및 법정 공휴일은 휴관입니다.</li>
                                            </ul>
                                        </li>
                                        <li>
                                            평택시 어린이교통공원의 입장료는 얼마입니까?
                                            <ul class="dot-list">
                                                <li>평택시 어린이교통공원은 평택시가 건립하였고, 운영 비용을 평택시 예산에서 지원받고 있기 때문에 입장료는 무료입니다.</li>
                                            </ul>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </li>
                        <li class="item">
                            <a href="javascript:;" class="question" role="button">평택도시공사의 응시연령 및 정년은 어떻게되 되나요?</a>
                            <div class="answer">
                                <div class="content">
                                    평택도시공사의 응시연령은 제한이 없습니다. 다만 공사의 정년이 만 60세 이므로 정년이 지난 대상은 지원할 수 없습니다.
                                </div>
                            </div>
                        </li>
                        <li class="item">
                            <a href="javascript:;" class="question" role="button">평택도시공사의 복리후생제도에는 어떠한 것이 있나요?</a>
                            <div class="answer">
                                <div class="content">
                                    사내근로복지기금, 종합검진, 선택적복리후생제도, 휴양콘도 운영, 사내동호회 등 다양한 복리후생제도가 있습니다.
                                </div>
                            </div>
                        </li>
                        <li class="item">
                            <a href="javascript:;" class="question" role="button">평택도시공사의 채용시험 시기는 언제인가요?</a>
                            <div class="answer">
                                <div class="content">
                                    시험은 상,하반기 또는 결원 발생시 수시채용의 형식을 취하고 있습니다. 채용공고처는 평택도시공사 및 평택시 홈페이지, 행자부지정사이트(클린아이), 취업포털사이트 등이 있습니다.
                                </div>
                            </div>
                        </li>
                        <li class="item">
                            <a href="javascript:;" class="question" role="button">평택도시공사 입사시 전 근무처의 경력은 인정되나요?</a>
                            <div class="answer">
                                <div class="content">
                                    전 근무처의 규모, 종류 등에 따라 100%~30% 까지 경력을 인정해 드리고 있습니다.
                                </div>
                            </div>
                        </li>
                        <li class="item">
                            <a href="javascript:;" class="question" role="button">평택도시공사의 급여형태는 어떻게 되나요?</a>
                            <div class="answer">
                                <div class="content">
                                    현재 2급 이상의 직원은 연봉제, 3급 이하의 직원은 호봉제(공무원 호봉표 준영)를 적용하고 있습니다.
                                </div>
                            </div>
                        </li>
                        <li class="item">
                            <a href="javascript:;" class="question" role="button">평택도시공사의 급여수준은 어떻게 되나요?</a>
                            <div class="answer">
                                <div class="content">
                                    <ul class="dot-list mt-0">
                                        <li>평택도시공사의 급여수준은 다음과 같습니다.</li>
                                        <li>일반직 6급~7급 - 공무원 9급 수준</li>
                                        <li>일반직 5급 - 공무원 8급 수준</li>
                                        <li>일반직 4급 - 공무원 7급 수준</li>
                                        <li>일반직 3급 - 공무원 6급 수준</li>
                                    </ul>
                                </div>
                            </div>
                        </li>
                        <li class="item">
                            <a href="javascript:;" class="question" role="button">평택도시공사의 채용은 어떠한 방식으로 이루어지나요?</a>
                            <div class="answer">
                                <div class="content">
                                    평택도시공사 일반직 직원 채용 형식은 업무 유경험자를 대상으로 경력경쟁채용시험에 의하고 있습니다. 시험 전형 방식은 1차 서류심사, 2차 필기시험, 3차 면접전형의 단계별 채용 형태를 취하고 있습니다.
                                </div>
                            </div>
                        </li>
                        <li class="item">
                            <a href="javascript:;" class="question" role="button">공사계약시와 대금지급시 구비서류를 알려주세요</a>
                            <div class="answer">
                                <div class="content">
                                    <ul class="question-list">
                                        <li>
                                            공사계약시 구비서류
                                            <ol class="decimal-list">
                                                <li>도급표준계약서(계약금액 3천만 원 이하 생략)</li>
                                                <li>공사계약일반조건 및 공사계약특수조건(계약금액 3천만 원 이하 생략)</li>
                                                <li>사업자등록증 사본</li>
                                                <li>건설업 면허 등 사본</li>
                                                <li>법인등기부등본(법인일 경우)</li>
                                                <li>사용인감계(사용인감 사용시)</li>
                                                <li>계약이행보증증권 및 납부서(3천만 원 이하는 각서로 대체)</li>
                                                <li>내역서</li>
                                                <li>공동도급이행협정서(공동이행시)</li>
                                                <li>인지세(인지세법에 따름)</li>
                                            </ol>
                                        </li>
                                        <li>
                                            대금지급시 구비서류
                                            <ol class="decimal-list">
                                                <li>세금계산서</li>
                                                <li>계좌입금의뢰서</li>
                                                <li>하자보수보증서(3천만 원 미만은 각서로 대체)</li>
                                                <li>경기도지역개발공채 소화 ( 공급가액의 1.5%에서 5,000원 미만 절사)</li>
                                                <li>지방세, 국세 완납증명서</li>
                                            </ol>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </li>
                        <li class="item">
                            <a href="javascript:;" class="question" role="button">평택도시공사의 사업성과 및 재무현황은 어디에서 확인하나요?</a>
                            <div class="answer">
                                <div class="content">
                                    모든 지방공기업경영정보는 클린아이(<a href="http://www.cleaneye.go.kr/" target="_blank">www.cleaneye.go.kr</a>)에서  확인하실 수 있습니다.
                                </div>
                            </div>
                        </li>
                    </ul>
                </div>
            </div>
        </section>
    </main>
    
    <?php require_once($_SERVER['DOCUMENT_ROOT'].'/inc/quick.php'); ?>
    <?php require_once($_SERVER['DOCUMENT_ROOT'].'/inc/footer.php'); ?>
    <?php require_once($_SERVER['DOCUMENT_ROOT'].'/inc/docfoot.php'); ?>
    <script src="/assets/js/sub.js"></script>
</body>
</html>