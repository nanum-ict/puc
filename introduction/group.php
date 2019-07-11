<?php require_once($_SERVER['DOCUMENT_ROOT'].'/inc/dochead.php'); ?>
<link rel="stylesheet" href="/assets/css/sub.css">
<link rel="stylesheet" href="/assets/css/introcution.css">
</head>
<body>
    <?php require_once($_SERVER['DOCUMENT_ROOT'].'/inc/header.php'); ?>
    
    <!-- Content -->
    <main id="content" class="sub introcution"> <!-- 폴더별 class -->
        <section class="sub-content group"> <!-- 페이지명 class -->
            <div class="section-header">
                <h3 class="depth-title">공사소개</h3>
                <h4 class="title">조직 및 업무</h4>
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
                                    조직 및 업무
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
                <div class="group-img">
                    <img src="/assets/images/introduction/img_group_xs.jpg" class="img-fluid d-lg-none" alt="조직도">
                    <img src="/assets/images/introduction/img_group_md.jpg" class="img-fluid d-none d-lg-block" alt="조직도">
                    <nav>
                        <ul class="nav nav-tabs tab-contact" role="tablist">
                            <li>
                                <a href="#group-1" data-toggle="tab" role="tab" aria-selected="true">사장</a>
                            </li>
                            <li>
                                <a href="#group-2" data-toggle="tab" role="tab" aria-selected="true">이사회</a>
                            </li>
                            <li>
                                <a href="#group-3" data-toggle="tab" role="tab" aria-selected="true">감사</a>
                            </li>
                            <li>
                                <a href="#group-4" data-toggle="tab" role="tab" aria-selected="true">안전감사실</a>
                            </li>
                            <li>
                                <a href="#group-5" data-toggle="tab" role="tab" aria-selected="true">본부장</a>
                            </li>
                            <li>
                                <a href="#group-6" data-toggle="tab" role="tab" aria-selected="true">경영기획처</a>
                            </li>
                            <li>
                                <a href="#group-7" data-toggle="tab" role="tab" aria-selected="true">재무회계처</a>
                            </li>
                            <li>
                                <a href="#group-8" data-toggle="tab" role="tab" aria-selected="true">사업기획처</a>
                            </li>
                            <li>
                                <a href="#group-9" data-toggle="tab" role="tab" aria-selected="true">건설사업처</a>
                            </li>
                            <li>
                                <a href="#group-10" data-toggle="tab" role="tab" aria-selected="true">분양보상처</a>
                            </li>
                            <li>
                                <a href="#group-11" data-toggle="tab" role="tab" aria-selected="true">교통사업처</a>
                            </li>
                        </ul>
                    </nav>
                </div>
                
                <div class="box">
                    <div class="content">
                        <p>평택도시공사는 모든 고객께서 친절하고 공정한 서비스를 받으실수 있도록 노력하겠습니다.</p>
                        <ul>
                            <li>TEL. <a href="tel:03180538800">031-8053-8800</a></li>
                            <li>FAX. 031-692-4337</li>
                        </ul>
                    </div>
                </div>
                
                <div class="contact-list tab-content">
                    <div class="tab-pane fade" id="group-1" role="tabpanel">
                        <div class="table-responsive">
                            <table class="table">
                                <thead>
                                    <tr>
                                        <th scope="col">부서명</th>
                                        <th scope="col">직위</th>
                                        <th scope="col">성명</th>
                                        <th scope="col">전화</th>
                                        <th scope="col">주요업무</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td rowspan="2">임원</td>
                                        <td>사장</td>
                                        <td>김재수</td>
                                        <td>8053-8810</td>
                                        <td>공사 경영 및 사업 총괄</td>
                                    </tr>
                                    <tr>
                                        <td>본부장</td>
                                        <td>손정균</td>
                                        <td>8053-8811</td>
                                        <td>본부 업무 총괄</td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                    <div class="tab-pane fade" id="group-2" role="tabpanel">
                        <div class="table-responsive">
                            <table class="table">
                                <thead>
                                    <tr>
                                        <th scope="col">부서명</th>
                                        <th scope="col">직위</th>
                                        <th scope="col">성명</th>
                                        <th scope="col">전화</th>
                                        <th scope="col">주요업무</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td rowspan="2">임원</td>
                                        <td>사장</td>
                                        <td>김재수</td>
                                        <td>8053-8810</td>
                                        <td>공사 경영 및 사업 총괄</td>
                                    </tr>
                                    <tr>
                                        <td>본부장</td>
                                        <td>손정균</td>
                                        <td>8053-8811</td>
                                        <td>본부 업무 총괄</td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                    <div class="tab-pane fade" id="group-3" role="tabpanel">
                        <div class="table-responsive">
                            <table class="table">
                                <thead>
                                    <tr>
                                        <th scope="col">부서명</th>
                                        <th scope="col">직위</th>
                                        <th scope="col">성명</th>
                                        <th scope="col">전화</th>
                                        <th scope="col">주요업무</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td rowspan="2">임원</td>
                                        <td>사장</td>
                                        <td>김재수</td>
                                        <td>8053-8810</td>
                                        <td>공사 경영 및 사업 총괄</td>
                                    </tr>
                                    <tr>
                                        <td>본부장</td>
                                        <td>손정균</td>
                                        <td>8053-8811</td>
                                        <td>본부 업무 총괄</td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                    <div class="tab-pane fade" id="group-4" role="tabpanel">
                        <div class="table-responsive">
                            <table class="table">
                                <thead>
                                    <tr class="t0" style="display: table-row;">
                                        <th scope="col">부서명</th>
                                        <th scope="col">직위</th>
                                        <th scope="col">성명</th>
                                        <th scope="col">전화</th>
                                        <th scope="col">주요업무</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td rowspan="4">안전감사실</td>
                                        <td>실장</td>
                                        <td>최영준</td>
                                        <td>8053-8831</td>
                                        <td>안전감사실 업무총괄</td>
                                    </tr>
                                    <tr>
                                        <td>차장</td>
                                        <td>박은용</td>
                                        <td>8053-8880</td>
                                        <td>일상감사, 기술감사</td>
                                    </tr>
                                    <tr>
                                        <td>사원</td>
                                        <td>최정우</td>
                                        <td>8053-8843</td>
                                        <td>감사, 법무</td>
                                    </tr>
                                    <tr>
                                        <td>사원</td>
                                        <td>고은지</td>
                                        <td>8053-8846</td>
                                        <td>재난안전, 고객만족</td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                    <div class="tab-pane fade" id="group-5" role="tabpanel">
                        <div class="table-responsive">
                            <table class="table">
                                <thead>
                                    <tr>
                                        <th scope="col">부서명</th>
                                        <th scope="col">직위</th>
                                        <th scope="col">성명</th>
                                        <th scope="col">전화</th>
                                        <th scope="col">주요업무</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td rowspan="2">임원</td>
                                        <td>사장</td>
                                        <td>김재수</td>
                                        <td>8053-8810</td>
                                        <td>공사 경영 및 사업 총괄</td>
                                    </tr>
                                    <tr>
                                        <td>본부장</td>
                                        <td>손정균</td>
                                        <td>8053-8811</td>
                                        <td>본부 업무 총괄</td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                    <div class="tab-pane fade" id="group-6" role="tabpanel">
                        <div class="table-responsive">
                            <table class="table">
                                <thead>
                                    <tr>
                                        <th scope="col">부서명</th>
                                        <th scope="col">직위</th>
                                        <th scope="col">성명</th>
                                        <th scope="col">전화</th>
                                        <th scope="col">주요업무</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td rowspan="12">경영기획처</td>
                                        <td>처장</td>
                                        <td>김창옥</td>
                                        <td>8053-8890</td>
                                        <td>경영기획처 업무총괄</td>
                                    </tr>
                                    <tr>
                                        <td>기획인사팀장</td>
                                        <td>조세진</td>
                                        <td>8053-8854</td>
                                        <td>기획인사업무 총괄</td>
                                    </tr>
                                    <tr>
                                        <td>과장</td>
                                        <td>성낙훈</td>
                                        <td>8053-8835</td>
                                        <td>인사, 조직, 노사</td>
                                    </tr>
                                    <tr>
                                        <td>대리</td>
                                        <td>이서희</td>
                                        <td>8053-8832</td>
                                        <td>이사회, 노사, 성과평가, 교육, 사내복지기금</td>
                                    </tr>
                                    <tr>
                                        <td>사원</td>
                                        <td>강효인</td>
                                        <td>8053-8847</td>
                                        <td>기획, 경영평가, 성과평가</td>
                                    </tr>
                                    <tr>
                                        <td>사원</td>
                                        <td>송지욱</td>
                                        <td>8053-8863</td>
                                        <td>기획, 경영평가, 열린혁신평가</td>
                                    </tr>
                                    <tr>
                                        <td>법무팀장</td>
                                        <td>박민경</td>
                                        <td>8053-8865</td>
                                        <td>법무업무 총괄</td>
                                    </tr>
                                    <tr>
                                        <td>과장</td>
                                        <td>김동윤</td>
                                        <td>8053-8883</td>
                                        <td>전산, 총무</td>
                                    </tr>
                                    <tr>
                                        <td>사원</td>
                                        <td>송현민</td>
                                        <td>8053-8848</td>
                                        <td>차량관리, 친환경관리</td>
                                    </tr>
                                    <tr>
                                        <td>사원</td>
                                        <td>박지연</td>
                                        <td>8053-8821</td>
                                        <td>교육훈련, 복리후생</td>
                                    </tr>
                                    <tr>
                                        <td>사원</td>
                                        <td>서휘</td>
                                        <td>8053-8853</td>
                                        <td>사회공헌, 사규, 정보공개청구, 사옥관리</td>
                                    </tr>
                                    <tr>
                                        <td>사원</td>
                                        <td>최윤선</td>
                                        <td>8053-8848</td>
                                        <td>사옥 환경관리</td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                    <div class="tab-pane fade" id="group-7" role="tabpanel">
                        <div class="table-responsive">
                            <table class="table">
                                <thead>
                                    <tr>
                                        <th scope="col">부서명</th>
                                        <th scope="col">직위</th>
                                        <th scope="col">성명</th>
                                        <th scope="col">전화</th>
                                        <th scope="col">주요업무</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td rowspan="8">재무회계처</td>
                                        <td>처장</td>
                                        <td>손성일</td>
                                        <td>8053-8851</td>
                                        <td>재무회계처 업무총괄</td>
                                    </tr>

                                    <tr>
                                        <td>차장</td>
                                        <td>하승철</td>
                                        <td>8053-8881</td>
                                        <td>계약, 계약심의위원회, 자금조달, 중장기계획</td>
                                    </tr>
                                    <tr>
                                        <td>과장</td>
                                        <td>윤영권</td>
                                        <td>8053-8855</td>
                                        <td>계약, 물품관리</td>
                                    </tr>
                                    <tr>
                                        <td>대리</td>
                                        <td>주영우</td>
                                        <td>8053-8845</td>
                                        <td>자금운용, 결산, 원가관리</td>
                                    </tr>
                                    <tr>
                                        <td>사원</td>
                                        <td>윤동현</td>
                                        <td>8053-8858</td>
                                        <td>재산관리(보유토지, 안중터미널), 재산심의위원회, 구매</td>
                                    </tr>
                                    <tr>
                                        <td>사원</td>
                                        <td>김은혜</td>
                                        <td>8053-8864</td>
                                        <td>예산, 수입, 지출, 세무</td>
                                    </tr>
                                    <tr>
                                        <td>사원</td>
                                        <td>박인준</td>
                                        <td>8053-8898</td>
                                        <td>급여, 세무, 결산, 수입, 지출</td>
                                    </tr>
                                    <tr>
                                        <td>사원</td>
                                        <td>온영운</td>
                                        <td>8053-8875</td>
                                        <td>재산관리</td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                    <div class="tab-pane fade" id="group-8" role="tabpanel">
                        <div class="table-responsive">
                            <table class="table">
                                <thead>
                                    <tr>
                                        <th scope="col">부서명</th>
                                        <th scope="col">직위</th>
                                        <th scope="col">성명</th>
                                        <th scope="col">전화</th>
                                        <th scope="col">주요업무</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td rowspan="7">사업기획처</td>
                                        <td>처장</td>
                                        <td>고기훈</td>
                                        <td>8053-8830</td>
                                        <td>사업기획처 업무총괄</td>
                                    </tr>
                                    <tr>
                                        <td>신규사업팀장</td>
                                        <td>박관일</td>
                                        <td>8053-8872</td>
                                        <td>신규사업팀 업무총괄</td>
                                    </tr>
                                    <tr>
                                        <td>차장</td>
                                        <td>이정현</td>
                                        <td>8053-8891</td>
                                        <td>안중터미널, 고덕 주택건설사업</td>
                                    </tr>
                                    <tr>
                                        <td>대리</td>
                                        <td>조성필</td>
                                        <td>8053-8874</td>
                                        <td>평택호 관광단지, 평택항 제2종배후단지 개발사업</td>
                                    </tr>
                                    <tr>
                                        <td>사원</td>
                                        <td>이세웅</td>
                                        <td>8053-8856</td>
                                        <td>보유토지 용도변경, 수소융복합단지, 출자사업</td>
                                    </tr>
                                    <tr>
                                        <td>사원</td>
                                        <td>박진영</td>
                                        <td>8053-8869</td>
                                        <td>위수탁대행사업, 수소융복합단지</td>
                                    </tr>
                                    <tr>
                                        <td>사원</td>
                                        <td>전시연</td>
                                        <td>8053-8867</td>
                                        <td>위수탁대행사업, 수소융복합단지</td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                    <div class="tab-pane fade" id="group-9" role="tabpanel">
                        <div class="table-responsive">
                            <table class="table">
                                <thead>
                                    <tr>
                                        <th scope="col">부서명</th>
                                        <th scope="col">직위</th>
                                        <th scope="col">성명</th>
                                        <th scope="col">전화</th>
                                        <th scope="col">주요업무</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td rowspan="14">건설사업처</td>
                                        <td>처장</td>
                                        <td>김창두</td>
                                        <td>8053-8870</td>
                                        <td>건설사업처 업무총괄</td>
                                    </tr>
                                    <tr>
                                        <td>브레인팀장</td>
                                        <td>김관식</td>
                                        <td>8053-8873</td>
                                        <td>브레인사업팀 업무총괄</td>
                                    </tr>
                                    <tr>
                                        <td>사원</td>
                                        <td>김지헌</td>
                                        <td>8053-8833</td>
                                        <td>브레인시티 일반산업단지 실시계획 및 인허가</td>
                                    </tr>
                                    <tr>
                                        <td>사원</td>
                                        <td>이태훈</td>
                                        <td>8053-8862</td>
                                        <td>브레인시티 일반산업단지 실시계획 및 인허가</td>
                                    </tr>
                                        <tr>
                                        <td>사원</td>
                                        <td>강호중</td>
                                        <td>8053-8866</td>
                                        <td>브레인시티 일반산업단지 실시계획 및 인허가</td>
                                    </tr>
                                    <tr>
                                        <td>공사1팀장</td>
                                        <td>정관균</td>
                                        <td>684-9913(4)</td>
                                        <td>공사1팀 업무총괄</td>
                                    </tr>
                                    <tr>
                                        <td>차장</td>
                                        <td>오강석</td>
                                        <td>684-9913(4)</td>
                                        <td>황해 평택BIX 조성사업 공사감독</td>
                                    </tr>
                                    <tr>
                                        <td>대리</td>
                                        <td>박치우</td>
                                        <td>684-9913(4)</td>
                                        <td>황해 평택BIX 조성사업 공사감독</td>
                                    </tr>
                                    <tr>
                                        <td>사원</td>
                                        <td>전상태</td>
                                        <td>684-9913(4)</td>
                                        <td>황해 평택BIX 조성사업 공사감독</td>
                                    </tr>
                                    <tr>
                                        <td>사원</td>
                                        <td>한현선</td>
                                        <td>684-9913(4)</td>
                                        <td>황해 평택BIX 사업 업무</td>							
                                    </tr>
                                    <tr>
                                        <td>공사2팀장</td>
                                        <td>김동인</td>
                                        <td>8053-8896</td>
                                        <td>공사2팀 업무총괄, 고덕산단 진입도로</td>							
                                    </tr>
                                    <tr>
                                        <td>과장</td>
                                        <td>김수호</td>
                                        <td>8053-8834</td>
                                        <td>브레인시티 개발사업, 신기술·신공법 발굴</td>							
                                    </tr>
                                    <tr>
                                        <td>차장</td>
                                        <td>김태진</td>
                                        <td>8053-8844</td>
                                        <td>고덕택지개발, 진위2산단 사후관리</td>
                                    </tr>
                                    <tr>
                                        <td>사원</td>
                                        <td>김선진</td>
                                        <td>8053-8876</td>
                                        <td>사업장 전기/통신, 진위2산단 국비정산, 예산계획(조성분야)</td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                    <div class="tab-pane fade" id="group-10" role="tabpanel">
                        <div class="table-responsive">
                            <table class="table">
                                <thead>
                                    <tr>
                                        <th scope="col">부서명</th>
                                        <th scope="col">직위</th>
                                        <th scope="col">성명</th>
                                        <th scope="col">전화</th>
                                        <th scope="col">주요업무</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td rowspan="13">분양보상처</td>
                                        <td>처장</td>
                                        <td>최대흥</td>
                                        <td>070-4449-5067</td>
                                        <td>분양보상처 업무총괄</td>
                                    </tr>						
                                    <tr>
                                        <td>분양팀장</td>
                                        <td>이영민</td>
                                        <td>070-8874-5015</td>
                                        <td>분양팀 업무 총괄, 브레인시티·진위2산단 분양</td>
                                    </tr>
                                    <tr>
                                        <td>차장</td>
                                        <td>김욱</td>
                                        <td>070-8874-5017</td>
                                        <td>브레인시티·포승2산단 분양</td>
                                    </tr>
                                    <tr>
                                        <td>과장</td>
                                        <td>장국한</td>
                                        <td>070-4449-0074</td>
                                        <td>브레인시티·황해평택BIX·고덕지구 분양</td>
                                    </tr>
                                    <tr>
                                        <td>사원</td>
                                        <td>박천익</td>
                                        <td>070-8874-5018</td>
                                        <td>황해평택BIX·고덕지구·진위2산단 분양</td>
                                    </tr>
                                    <tr>
                                        <td>사원</td>
                                        <td>김경재</td>
                                        <td>070-4449-0076</td>
                                        <td>포승2산단·브레인시티 분양, 주택 분양/임대</td>
                                    </tr>
                                    <tr>
                                        <td>보상1팀장</td>
                                        <td>신현웅</td>
                                        <td>070-4449-5061</td>
                                        <td>보상1팀 업무총괄(브레인·고덕지구 보상)</td>
                                    </tr>
                                    <tr>
                                        <td>과장</td>
                                        <td>안다운</td>
                                        <td>070-4449-5044</td>
                                        <td>브레인시티 보상</td>
                                    </tr>
                                    <tr>
                                        <td>과장</td>
                                        <td>문지홍</td>
                                        <td>070-4224-6052</td>
                                        <td>브레인시티 보상</td>
                                    </tr>
                                    <tr>
                                        <td>사원</td>
                                        <td>정하윤</td>
                                        <td>070-4449-6204</td>
                                        <td>브레인시티 보상</td>
                                    </tr>
                                    <tr>
                                        <td>차장</td>
                                        <td>강면구</td>
                                        <td>070-4449-5027</td>
                                        <td>브레인시티·진위2산단·황해평택BIX 보상</td>
                                    </tr>
                                    <tr>
                                        <td>과장</td>
                                        <td>이현호</td>
                                        <td>070-4449-5012</td>
                                        <td>브레인시티 보상</td>
                                    </tr>
                                    <tr>
                                        <td>과장</td>
                                        <td>전대한</td>
                                        <td>070-4224-6053</td>
                                        <td>브레인시티 보상</td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                    <div class="tab-pane fade" id="group-11" role="tabpanel">
                        <div class="table-responsive">
                            <table class="table">
                                <thead>
                                    <tr>
                                        <th scope="col">부서명</th>
                                        <th scope="col">직위</th>
                                        <th scope="col">성명</th>
                                        <th scope="col">전화</th>
                                        <th scope="col">주요업무</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td rowspan="1">교통사업처</td>
                                        <td>처장</td>
                                        <td>김헌</td>
                                        <td>8053-8840</td>
                                        <td>교통사업처 업무총괄</td>
                                    </tr>
                                    <tr>
                                        <td rowspan="11">주차사업팀</td>
                                        <td>주차사업팀장</td>
                                        <td>서준원</td>
                                        <td>8053-8841</td>
                                        <td>인사관리, 기획, 예산관리, 신규사업T/F</td>
                                    </tr>
                                    <tr>
                                        <td>사원</td>
                                        <td>신성철</td>
                                        <td>8053-8841</td>
                                        <td>전산, 예산관리, 제도개선, 민원(노외)</td>
                                    </tr>

                                    <tr>
                                        <td>사원</td>
                                        <td>안치원</td>
                                        <td>8053-8882</td>
                                        <td>사고보험, 재난안전, 계약, 방치차량, 시설물관리</td>
                                    </tr>
                                    <tr>
                                        <td>사원</td>
                                        <td>최현국</td>
                                        <td>692-3431</td>
                                        <td>주차장 시설물 유지관리</td>
                                    </tr>
                                    <tr>
                                        <td>사원</td>
                                        <td>이원연</td>
                                        <td>692-3431</td>
                                        <td>관제센터 업무, 민원관리 및 집계</td>
                                    </tr>
                                    <tr>
                                        <td>사원</td>
                                        <td>정경옥</td>
                                        <td>692-3431</td>
                                        <td>관제센터 업무, 민원관리 및 집계</td>
                                    </tr>
                                    <tr>
                                        <td>사원</td>
                                        <td>이수한</td>
                                        <td>692-3431</td>
                                        <td>주차장 시설물 유지관리</td>
                                    </tr>
                                    <tr>
                                        <td>사원</td>
                                        <td>박주현</td>
                                        <td>8053-8897</td>
                                        <td>주차장 시설물 유지관리, 공용차량관리</td>
                                    </tr>
                                    <tr>
                                        <td>사원</td>
                                        <td>박성욱</td>
                                        <td>8053-8899</td>
                                        <td>수입금 정산, 통계구축</td>
                                    </tr>
                                    <tr>
                                        <td>사원</td>
                                        <td>이태욱</td>
                                        <td>8053-8895</td>
                                        <td>노무관리, 복무관리, 민원(노상)</td>
                                    </tr>
                                    <tr>
                                        <td>사원</td>
                                        <td>곽해준</td>
                                        <td>8053-8893</td>
                                        <td>미납금관리, 사회복무요원 관리</td>
                                    </tr>

                                    <tr>
                                        <td rowspan="55">교통약자<br>지원팀</td>
                                        <td>교통약자<br>지원팀장</td>
                                        <td>정회만</td>
                                        <td>8053-8861</td>
                                        <td>교통약자 업무총괄</td>
                                    </tr>
                                    <tr>
                                        <td>과장</td>
                                        <td>원숙희</td>
                                        <td>8053-8859</td>
                                        <td>교통약자 관리업무(기획, 운영)</td>
                                    </tr>
                                    <tr>
                                        <td>사원</td>
                                        <td>손승재</td>
                                        <td>8053-8894</td>
                                        <td>교통약자 관리업무(사무관리)</td>
                                    </tr>
                                    <tr>
                                        <td>사원</td>
                                        <td>황미정</td>
                                        <td rowspan="52">T)651-4700<br>F)651-4780</td>
                                        <td rowspan="7">교통약자이동지원센터 상담 및 차량배차</td>
                                    </tr>
                                    <tr>
                                        <td>사원</td>
                                        <td class="center">김정희</td>
                                    </tr>
                                    <tr>
                                        <td>사원</td>
                                        <td class="center">황외숙</td>
                                    </tr>
                                    <tr>
                                        <td>사원</td>
                                        <td class="center">안미희</td>
                                    </tr>
                                    <tr>
                                        <td>사원</td>
                                        <td class="center">정운희</td>
                                    </tr>
                                        <tr>
                                        <td>사원</td>
                                        <td class="center">조은경</td>
                                    </tr>
                                    <tr>
                                        <td>사원</td>
                                        <td class="center">박은화</td>
                                    </tr>
                                    <tr>
                                        <td>사원</td>
                                        <td>강대연</td>
                                        <td rowspan="45">교통약자이동지원센터 차량운행 및 차량관리</td>
                                    </tr>
                                    <tr>
                                        <td>사원</td>
                                        <td class="center">김광호</td>
                                    </tr>
                                    <tr>
                                        <td>사원</td>
                                        <td class="center">김선우</td>
                                    </tr>
                                    <tr>
                                        <td>사원</td>
                                        <td class="center">김종표</td>
                                    </tr>
                                    <tr>
                                        <td>사원</td>
                                        <td class="center">김준협</td>
                                    </tr>
                                    <tr>
                                        <td>사원</td>
                                        <td class="center">김진수</td>
                                    </tr>
                                    <tr>
                                        <td>사원</td>
                                        <td class="center">김현규</td>
                                    </tr>
                                    <tr>
                                        <td>사원</td>
                                        <td class="center">민춘기</td>
                                    </tr>
                                    <tr>
                                        <td>사원</td>
                                        <td class="center">박근하</td>
                                    </tr>
                                    <tr>
                                        <td>사원</td>
                                        <td class="center">박재환</td>
                                    </tr>
                                    <tr>
                                        <td>사원</td>
                                        <td class="center">손진관</td>
                                    </tr>
                                    <tr>
                                        <td>사원</td>
                                        <td class="center">송정한</td>
                                    </tr>
                                    <tr>
                                        <td>사원</td>
                                        <td class="center">안상근</td>
                                    </tr>
                                    <tr>
                                        <td>사원</td>
                                        <td class="center">안진수</td>
                                    </tr>
                                    <tr>
                                        <td>사원</td>
                                        <td class="center">오세철</td>
                                    </tr>
                                    <tr>
                                        <td>사원</td>
                                        <td class="center">유기청</td>
                                    </tr>
                                    <tr>
                                        <td>사원</td>
                                        <td class="center">이계숙</td>
                                    </tr>
                                    <tr>
                                        <td>사원</td>
                                        <td class="center">이규덕</td>
                                    </tr>
                                    <tr>
                                        <td>사원</td>
                                        <td class="center">이기선</td>
                                    </tr>
                                    <tr>
                                        <td>사원</td>
                                        <td class="center">이병관</td>
                                    </tr>
                                    <tr>
                                        <td>사원</td>
                                        <td class="center">이상욱</td>
                                    </tr>
                                    <tr>
                                        <td>사원</td>
                                        <td class="center">이상철</td>
                                    </tr>
                                    <tr>
                                        <td>사원</td>
                                        <td class="center">이신호</td>
                                    </tr>
                                    <tr>
                                        <td>사원</td>
                                        <td class="center">이영진</td>
                                    </tr>
                                    <tr>
                                        <td>사원</td>
                                        <td class="center">이우정</td>
                                    </tr>
                                    <tr>
                                        <td>사원</td>
                                        <td class="center">이정일</td>
                                    </tr>
                                    <tr>
                                        <td>사원</td>
                                        <td class="center">이창수</td>
                                    </tr>
                                    <tr>
                                        <td>사원</td>
                                        <td class="center">이천호</td>
                                    </tr>
                                    <tr>
                                        <td>사원</td>
                                        <td class="center">임호혁</td>
                                    </tr>
                                    <tr>
                                        <td>사원</td>
                                        <td class="center">정광식</td>
                                    </tr>
                                    <tr>
                                        <td>사원</td>
                                        <td class="center">정덕기</td>
                                    </tr>
                                    <tr>
                                        <td>사원</td>
                                        <td class="center">정병환</td>
                                    </tr>
                                    <tr>
                                        <td>사원</td>
                                        <td class="center">정선우</td>
                                    </tr>
                                    <tr>
                                        <td>사원</td>
                                        <td class="center">채상규</td>
                                    </tr>
                                    <tr>
                                        <td>사원</td>
                                        <td class="center">최성태</td>
                                    </tr>
                                    <tr>
                                        <td>사원</td>
                                        <td class="center">최양근</td>
                                    </tr>
                                    <tr>
                                        <td>사원</td>
                                        <td class="center">최연우</td>
                                    </tr>
                                    <tr>
                                        <td>사원</td>
                                        <td class="center">한준수</td>
                                    </tr>
                                    <tr>
                                        <td>사원</td>
                                        <td class="center">한상혁</td>
                                    </tr>
                                    <tr>
                                        <td>사원</td>
                                        <td class="center">신채원</td>
                                    </tr>
                                    <tr>
                                        <td>사원</td>
                                        <td class="center">손지웅</td>
                                    </tr>
                                    <tr>
                                        <td>사원</td>
                                        <td class="center">이재갑</td>
                                    </tr>
                                    <tr>
                                        <td>사원</td>
                                        <td class="center">이재성</td>
                                    </tr>
                                    <tr>
                                        <td>사원</td>
                                        <td class="center">임근래</td>
                                    </tr>
                                    <tr>
                                        <td>사원</td>
                                        <td class="center">최병열</td>
                                    </tr>
                                    <tr>
                                        <td rowspan="3">어린이<br>교통공원</td>
                                        <td>사원</td>
                                        <td>박명금</td>
                                        <td rowspan="3">T)8024-8690<br>F)8024-8691</td>
                                        <td rowspan="3">어린이교통공원 관리업무(위탁사업)</td>
                                    </tr>
                                    <tr>
                                        <td>사원</td>
                                        <td class="center">유성희</td>
                                    </tr>
                                    <tr>
                                        <td>사원</td>
                                        <td class="center">심은희</td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        
    </main>
    
    <?php require_once($_SERVER['DOCUMENT_ROOT'].'/inc/quick.php'); ?>
    <?php require_once($_SERVER['DOCUMENT_ROOT'].'/inc/footer.php'); ?>
    <?php require_once($_SERVER['DOCUMENT_ROOT'].'/inc/docfoot.php'); ?>
</body>
</html>