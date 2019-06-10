<?php require_once($_SERVER['DOCUMENT_ROOT'].'/inc/dochead.php'); ?>
<link rel="stylesheet" href="/assets/css/sub.css">
<link rel="stylesheet" href="/assets/css/parcelout.css">
</head>
<body>
    <?php require_once($_SERVER['DOCUMENT_ROOT'].'/inc/header.php'); ?>
    
    <!-- Content -->
    <main id="content" class="sub parcelout"> <!-- 폴더별 class -->
        <section class="sub-content ownership"> <!-- 페이지명 class -->
            <div class="section-header">
                <div class="page-path">
                    <h3>분양안내</h3>
                    <ol class="breadcrumb">
                        <li>분양안내</li>
                        <li>세금안내 및 기타</li>
                    </ol>
                </div>
                <h4 class="title">세금안내 및 기타</h4>
            </div>
            <div class="section-content">
                <nav class="dropdown nav-tab">
                    <button class="btn btn-secondary dropdown-toggle" type="button" id="nav-tab" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        소유권 이전 안내
                    </button>
                    <div class="dropdown-menu" aria-labelledby="nav-tab">
                        <ul>
                            <li class="active"><a href="/parcelout/ownership.php">소유권 이전 안내</a></li>
                            <li><a href="/parcelout/taxguide.php">세금안내</a></li>
                        </ul>
                    </div>
                </nav>
                <article class="procedure">
                    <h5 class="sub-title">절차</h5>
                    <ol class="decimal-list">
                        <li>토지매매대금 완남</li>
                        <li>취득세 신고 납부</li>
                        <li>소유권 이전 서류 발급 신청</li>
                        <li>등기소에 소유권 이전 서류 제출 (토지 매매대금 완납후 60일 이내)</li>
                        <li>소유권 이전</li>
                    </ol>
                </article>
                <article class="required-documents">
                    <h5 class="sub-title">구비서류</h5>
                    <div class="table-responsive">
                        <table class="table">
                            <colgroup>
                                <col style="width: 50%;">
                                <col style="width: 50%;">
                            </colgroup>
                            <thead>
                                <tr>
                                    <th>구비서류</th>
                                    <th>발급기관</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>토지매매계약서(공사계약서)</td>
                                    <td>계약자</td>
                                </tr>
                                <tr>
                                    <td>인감증명서 1통<br>법인등기부초본 1통<br>등기권리증 1통</td>
                                    <td>평택도시공사</td>
                                </tr>
                                <tr>
                                    <td>등록세 영수필 확인서 및 통지서 1통<br>토지대장 1통<br>공시지가확인원, 부동산신고필증 1통</td>
                                    <td>평택시</td>
                                </tr>
                                <tr>
                                    <td>주민등록등본(법인등기부등본) 1통</td>
                                    <td>동사무소 / 등기소</td>
                                </tr>
                                <tr>
                                    <td>국민주택채권 매입필증 1통</td>
                                    <td>국민은행</td>
                                </tr>
                                <tr>
                                    <td>소유권이전등기 신청서 4부<br>등기수입증지(등기수수료) 1매</td>
                                    <td>등기소</td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </article>
                <article class="purchase">
                    <h5 class="sub-title">국민주택 채권 매입</h5>
                    <dl>
                        <dt>국민주택 채권 매입</dt>
                        <dd>과세시가표준액 X 적용요율</dd>
                        <dt>과세시가표준액</dt>
                        <dd>면적 X 개별공시지가 X 적용비율</dd>
                    </dl>
                    <p class="attention">적용비율은 각 지자체마다 달리하므로 토지소재지 시·군·구청에 문의</p>
                    <strong>과세시가표준액 기준 적용요율</strong>
                    <div class="table-responsive">
                        <table class="table">
                            <colgroup>
                                <col style="width: 50%;">
                                <col style="width: 25%;">
                                <col style="width: 25%;">
                            </colgroup>
                            <thead>
                                <tr>
                                    <th scope="col">과세시가</th>
                                    <th scope="col" colspan="2">적용요율</th>
                                </tr>
                                <tr>
                                    <th scope="col">표준액</th>
                                    <th scope="col">특별시, 광역시</th>
                                    <th scope="col">기타지역</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>500만원 ~ 2,000만원 미만</td>
                                    <td>20/1,000</td>
                                    <td>20/1,000</td>
                                </tr>
                                <tr>
                                    <td>2,000만원 이상 ~ 3,000만원 미만</td>
                                    <td>35/1,000</td>
                                    <td>30/1,000</td>
                                </tr>
                                <tr>
                                    <td>3,000만원 이상 ~ 4,000만원 미만</td>
                                    <td>40/1,000</td>
                                    <td>35/1,000</td>
                                </tr>
                                <tr>
                                    <td>4,000만원 이상 ~ 5,000만원 미만</td>
                                    <td>50/1,000</td>
                                    <td>45/1,000</td>
                                </tr>
                                <tr>
                                    <td>5,000만원 이상 ~ 1억원 미만</td>
                                    <td>60/1,000</td>
                                    <td>55/1,000</td>
                                </tr>
                                <tr>
                                    <td>1억원 이상</td>
                                    <td>70/1,000</td>
                                    <td>65/1,000</td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                    <strong>기타 부동산</strong>
                    <div class="table-responsive">
                        <table class="table">
                            <colgroup>
                                <col style="width: 50%;">
                                <col style="width: 25%;">
                                <col style="width: 25%;">
                            </colgroup>
                            <thead>
                                <tr>
                                    <th scope="col">과세시가</th>
                                    <th scope="col" colspan="2">적용요율</th>
                                </tr>
                                <tr>
                                    <th scope="col">표준액</th>
                                    <th scope="col">특별시, 광역시</th>
                                    <th scope="col">기타지역</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>500만원 ~ 5,000만원 미만</td>
                                    <td>25/1,000</td>
                                    <td>20/1,000</td>
                                </tr>
                                <tr>
                                    <td>5,000만원 이상 ~ 1억원 미만</td>
                                    <td>40/1,000</td>
                                    <td>35/1,000</td>
                                </tr>
                                <tr>
                                    <td>1억원 이상</td>
                                    <td>50/1,000</td>
                                    <td>45/1,000</td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </article>
            </div>
        </section>
        <?php require_once($_SERVER['DOCUMENT_ROOT'].'/inc/side_quick.php'); ?>
    </main>
    
    <?php require_once($_SERVER['DOCUMENT_ROOT'].'/inc/quick.php'); ?>
    <?php require_once($_SERVER['DOCUMENT_ROOT'].'/inc/footer.php'); ?>
    <?php require_once($_SERVER['DOCUMENT_ROOT'].'/inc/docfoot.php'); ?>
</body>
</html>