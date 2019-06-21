<?php require_once($_SERVER['DOCUMENT_ROOT'].'/inc/dochead.php'); ?>
<link rel="stylesheet" href="/assets/css/sub.css">
<link rel="stylesheet" href="/assets/css/tidings.css">
</head>
<body>
    <?php require_once($_SERVER['DOCUMENT_ROOT'].'/inc/header.php'); ?>
    
    <!-- Content -->
    <main id="content" class="sub tidings"> <!-- 폴더별 class -->
        <section class="sub-content cyber overuse"> <!-- 페이지명 class -->
            <div class="section-header">
                <h3 class="depth-title">PUC 소식</h3>
                <h4 class="title">윤리경영</h4>
                <div class="page-path">
                    <ol class="breadcrumb">
                        <li>
                            <a href="/">
                                <i class="icon-home"><span class="sr-only">메인으로 이동</span></i>
                            </a>
                        </li>
                        <li>PUC 소식</li>
                        <li>
                            <div class="depth-2">
                                <button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                    윤리경영
                                </button>
                                <div class="dropdown-menu">
                                    <a href="/tidings/notice_list.php">공지사항</a>
                                    <a href="/tidings/pr_list.php">보도자료</a>
                                    <a href="/tidings/bid_list.php">입찰정보</a>
                                    <a href="/tidings/recruitment_list.php">채용정보</a>
                                    <a href="/tidings/order_list.php">발주계획</a>
                                    <a href="/tidings/estimate_list.php">수의계약 견적제출</a>
                                    <a href="/tidings/breakdown_list.php">수의계약 내역공개</a>
                                    <a href="/tidings/bc_noticelist.php">브레인시티 공지사항</a>
                                    <a href="/tidings/ethical.php">윤리경영</a>
                                </div>
                            </div>
                        </li>
                    </ol>
                </div>
            </div>
            <div class="section-content">
                <nav class="dropdown nav-tab">
                    <button class="btn btn-secondary dropdown-toggle" type="button" id="nav-tab" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        사이버감사실
                    </button>
                    <div class="dropdown-menu" aria-labelledby="nav-tab">
                        <ul>
                            <li><a href="/tidings/ethical.php">PUC 윤리경영</a></li>
                            <li><a href="/tidings/charter.php">윤리규범</a></li>
                            <li class="active"><a href="/tidings/clear.php">사이버감사실</a></li>
                            <li><a href="/tidings/activity_list.php">사회공헌활동</a></li>
                            <li><a href="/tidings/human.php">인권경영</a></li>
                            <li><a href="/tidings/upright_list.php">PUC 청렴소식지</a></li>
                        </ul>
                    </div>
                </nav>
                <nav class="tab-menu">
                    <ul>
                        <li><a href="/tidings/clear.php">클린센터</a></li>
                        <li class="space"><a href="/tidings/violations.php">인권침해<br> 신고·지원센터</a></li>
                        <li class="active space"><a href="/tidings/overuse.php">갑질피해<br> 신고·지원센터</a></li>
                        <li><a href="/tidings/irrationality.php">부조리신고센터</a></li>
                    </ul>
                </nav>
                <article class="explain">
                    <h5 class="sub-title">갑질피해 신고·지원센터 운영</h5>
                    <p class="arrow">공사가 업무상 우월한 지위와 권한을 이용하여 직무관련자(계약업체 등 이해관계자)에 가하는 갑질행위 및 공사 내부 갑질행위를 신고하는 공간입니다.</p>
                    <p class="arrow">인터넷 신고 외에 안전감사실에서 방문, 우편 신고도 접수하고 있습니다.</p>
                    <p class="attention">문의: 안전감사실 (<a href="tel:03180538843">031-8053-8843</a>)</p>
                    <h5 class="sub-title">신고자 준수사항</h5>
                    <div class="summary">
                        <ul class="circle">
                            <li>신고 대상은 공사가 업무상 우월한 지위와 권한을 이용하여 직무관련자(계약업체 등 이해관계자)에 가하는 갑질행위 및 공사 내부 갑질행위 등입니다.</li>
                            <li>신고 내용은 반드시 사실에 근거해 명확히 작성해 주시고 갑질행위를 증명할 수 있는 자료가 있다면 참고자료를 첨부하여 주시기 바랍니다.</li>
                            <li>갑질과 무관한 내용이거나, 구체적이지 않은 경우에는 신고가 접수되지 않을 수 있음을 알려 드립니다.</li>
                            <li>신고자는 근거 없이 타인을 비방하거나 허위사실을 신고하지 않으며 오로지 양심에 따라 본 신고서를 작성해 주시기 바랍니다.</li>
                            <li>
                                갑질피해 신고자는 다음과 같은 신고 지원을 받을 수 있습니다 (문의: 안전감사실 담당자, <a href="tel:03180538843">031-8053-8843</a>)
                                <p class="attention">무료 법률상담 지원</p>
                                <ul class="dashed-list">
                                    <li>평택시 '마을변호사' 상담</li>
                                    <li>대한법률구조공단 상담</li>
                                </ul>
                                <p class="attention">2차 피해 모니터링 및 구제</p>
                                <ul class="dashed-list">
                                    <li>인적사항 유출, 신고로 인한 불이익 등 2차 피해 여부 지속 확인</li>
                                    <li>2차 피해 확인시 수사의뢰, 피해자 신변보호 등 조치 실시</li>
                                </ul>
                            </li>
                            <li>사건 종결 후 만족도 조사를 실시하여 갑질 근절 업무개선에 활용할 계획입니다.</li>
                        </ul>
                    </div>
                    <h5 class="sub-title">신고내용</h5>
                    <div class="write-form">
                        <form action="#">
                            <div class="table-wrap">
                                <span class="indispensable">필수입력</span>
                                <table class="table write">
                                    <tbody>
                                        <tr>
                                            <th scope="row" class="indispensable">
                                                <label for="u-declarant">피신고자</label>
                                            </th>
                                            <td>
                                                <div class="form-group">
                                                    <input type="text" id="u-declarant" class="form-control">
                                                </div>
                                            </td>
                                        </tr>
                                        <tr>
                                            <th scope="row" class="indispensable">
                                                <label for="u-email">E-mail</label>
                                            </th>
                                            <td>
                                                <div class="form-group">
                                                    <input type="text" id="u-email" class="form-control">
                                                </div>
                                            </td>
                                        </tr>
                                        <tr>
                                            <th scope="row" class="indispensable">
                                                <label for="u-title">제목</label>
                                            </th>
                                            <td>
                                                <div class="form-group">
                                                    <input type="text" id="u-title" class="form-control">
                                                </div>
                                            </td>
                                        </tr>
                                        <tr>
                                            <th scope="row" class="indispensable">
                                                <label for="u-content">내용</label>
                                            </th>
                                            <td>
                                                <div class="form-group">
                                                    <textarea id="u-content" class="form-control"></textarea>
                                                </div>
                                            </td>
                                        </tr>
                                        <tr>
                                            <th scope="row">
                                                <label for="u-attach">첨부파일</label>
                                            </th>
                                            <td>
                                                <div class="form-group">
                                                    <input type="file" id="u-attach" class="form-control">
                                                </div>
                                            </td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                            <div class="btn-area">
                                <button type="submit" class="btn btn-submit">제출하기</button>
                            </div>
                        </form>
                    </div>
                </article>
            </div>
        </section>
        
    </main>
    
    <?php require_once($_SERVER['DOCUMENT_ROOT'].'/inc/quick.php'); ?>
    <?php require_once($_SERVER['DOCUMENT_ROOT'].'/inc/footer.php'); ?>
    <?php require_once($_SERVER['DOCUMENT_ROOT'].'/inc/docfoot.php'); ?>
</body>
</html>