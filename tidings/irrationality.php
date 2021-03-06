<?php require_once($_SERVER['DOCUMENT_ROOT'].'/inc/dochead.php'); ?>
<link rel="stylesheet" href="/assets/css/sub.css">
<link rel="stylesheet" href="/assets/css/tidings.css">
</head>
<body>
    <?php require_once($_SERVER['DOCUMENT_ROOT'].'/inc/header.php'); ?>
    
    <!-- Content -->
    <main id="content" class="sub tidings"> <!-- 폴더별 class -->
        <section class="sub-content cyber irrationality"> <!-- 페이지명 class -->
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
                        <li class="space"><a href="/tidings/overuse.php">갑질피해<br> 신고·지원센터</a></li>
                        <li class="active"><a href="/tidings/irrationality.php">부조리신고센터</a></li>
                    </ul>
                </nav>
                <article class="explain">
                    <form action="#">
                        <h5 class="sub-title">임직원의 부조리 및 행동강령 위반사항에 관하여 신고하는 공간입니다</h5>
                        <ul class="circle">
                            <li>알선, 청탁, 금품수수</li>
                            <li>예산의 목적 외 사용</li>
                            <li>성희롱, 직무관계자와 골프 및 사행성 오락</li>
                        </ul>
                        <h5 class="sub-title">인터넷 신고 외에 방문, 우편 신고도 접수하고 있습니다</h5>
                        <p class="attention">문의 : 안전감사실 (<a href="tel:03180538843">031-8053-8843</a>)</p>
                        <h5 class="sub-title">신고자 준수사항</h5>
                        <div class="summary">
                            <ul class="circle">
                                <li>신고 대상은 임직원의 『임직원행동강령』 규정 위반 행위 및 부조리입니다.</li>
                                <li>신고 내용은 반드시 사실에 근거해 6하원칙에 따라 명확히 작성해 주시고 규정 위반행위를 증명할 수 있는 자료가 있다면 참고자료를 첨부하여 주시기 바랍니다</li>
                                <li>『임직원행동강령』 위반 행위 및 부조리와 무관한 내용이거나, 구체적이지 않은 경우에는 신고가 접수되지 않을 수 있음을 알려 드립니다</li>
                                <li>신고자는 근거 없이 타인을 비방하거나 허위사실을 신고하지 않으며 오로지 양심에 따라 본 신고서를 작성해 주시기 바랍니다.</li>
                            </ul>
                        </div>
                        <h5 class="sub-title">개인 정보 수집 및 이용 안내</h5>
                        <div class="privacy">
                            <dl>
                                <dt>개인정보의 수집 및 이용에 관한 사항</dt>
                                <dd>
                                    <ul>
                                        <li>수집·이용목적 : 본인확인, 개인 식별, 처리결과 회신 등 갑질피해 신고·지원센터 관련 업무 처리</li>
                                        <li>수집·이용항목 : 필수(E-mail)</li>
                                        <li>보유·이용기간 : 영구(공공기록물 관리에 관한 법률 시행령 제 25조, 제 26조)</li>
                                        <li>개인정보 수집·이용을 거부할 권리가 있으며 이 경우 갑질피해 신고·지원센터 등록이 제한됩니다.</li>
                                    </ul>
                                </dd>
                            </dl>
                            <label class="consent"><input type="checkbox"> 위 개인정보 수집 및 이용에 동의합니다.</label>
                        </div>
                        <div class="write-form">
                            <div class="table-wrap">
                                <span class="indispensable">필수입력</span>
                                <table class="table write">
                                    <tbody>
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
                        </div>
                    </form>
                </article>
            </div>
        </section>
        
    </main>
    
    <?php require_once($_SERVER['DOCUMENT_ROOT'].'/inc/quick.php'); ?>
    <?php require_once($_SERVER['DOCUMENT_ROOT'].'/inc/footer.php'); ?>
    <?php require_once($_SERVER['DOCUMENT_ROOT'].'/inc/docfoot.php'); ?>
</body>
</html>