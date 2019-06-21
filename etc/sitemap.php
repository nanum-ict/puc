<?php require_once($_SERVER['DOCUMENT_ROOT'].'/inc/dochead.php'); ?>
<link rel="stylesheet" href="/assets/css/sub.css">
<link rel="stylesheet" href="/assets/css/etc.css">
</head>
<body>
    <?php require_once($_SERVER['DOCUMENT_ROOT'].'/inc/header.php'); ?>
    
    <!-- Content -->
    <main id="content" class="sub etc"> <!-- 폴더별 class -->
        <section class="sub-content sitemap"> <!-- 페이지명 class -->
            <div class="section-header">
                <h3 class="depth-title">이용안내</h3>
                <h4 class="title">사이트맵</h4>
                <div class="page-path">
                    <ol class="breadcrumb">
                        <li>
                            <a href="/">
                                <i class="icon-home"><span class="sr-only">메인으로 이동</span></i>
                            </a>
                        </li>
                        <li>이용안내</li>
                        <li>
                            <div class="depth-2">
                                <button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                    사이트맵
                                </button>
                                <div class="dropdown-menu">
                                    <a href="/etc/sitemap.php">사이트맵</a>
                                    <a href="/etc/unified_search.php">통합검색</a>
                                </div>
                            </div>
                        </li>
                    </ol>
                </div>
            </div>
            <div class="section-content">
                <article>
                    <ul>
                        <li>
                            <h5 class="sub-title">사업안내</h5>
                            <ul class="square-list">
                                <li><a href="/business/housing.php">택지개발사업</a></li>
                                <li><a href="/business/jinwi02.php">산업단지조성사업</a></li>
                                <li><a href="/business/moving_support.php">위수탁사업</a></li>
                                <li><a href="/business/yellowsea.php">황해경제자유구역 개발사업</a></li>
                                <li><a href="/business/braincity.php">브레인시티 일반산업단지 조성사업</a></li>
                            </ul>
                        </li>
                        <li>
                            <h5 class="sub-title">분양안내</h5>
                            <ul class="square-list">
                                <li><a href="/parcelout/parcelout_list.php">용지분양</a></li>
                                <li><a href="/parcelout/ownership.php">세금안내 및 기타</a></li>
                                <li><a href="/parcelout/examination_list.php">보상</a></li>
                            </ul>
                        </li>
                        <li>
                            <h5 class="sub-title">고객광장</h5>
                            <ul class="square-list">
                                <li><a href="/customer/charter.php">고객서비스</a></li>
                                <li><a href="/customer/faq_list.php">자주 묻는 질문</a></li>
                                <li><a href="/customer/advice_write.php">고객의 소리</a></li>
                                <li><a href="/customer/praise_list.php">칭찬합시다</a></li>
                                <li><a href="/customer/privacy.php">개인정보취급방법</a></li>
                                <li><a href="/customer/email_policy.php">이메일 추출방지정책</a></li>
                                <li><a href="/customer/bc_faqlist.php">브레인시티 자주 묻는 질문</a></li>
                                <li><a href="/customer/counseling.php">브레인시티 온라인 상담</a></li>
                                <li><a href="/customer/outline.php">정보공개</a></li>
                                <li><a href="/customer/sinmungo.php">안전신문고</a></li>
                            </ul>
                        </li>
                        <li>
                            <h5 class="sub-title">PUC소식</h5>
                            <ul class="square-list">
                                <li><a href="/tidings/notice_list.php">공지사항</a></li>
                                <li><a href="/tidings/pr_list.php">보도자료</a></li>
                                <li><a href="/tidings/bid_list.php">입찰정보</a></li>
                                <li><a href="/tidings/recruitment_list.php">채용정보</a></li>
                                <li><a href="/tidings/order_list.php">발주계획</a></li>
                                <li><a href="/tidings/estimate_list.php">수의계약 견적제출</a></li>
                                <li><a href="/tidings/breakdown_list.php">수의계약 내역공개</a></li>
                                <li><a href="/tidings/bc_noticelist.php">브레인시티 공지사항</a></li>
                                <li><a href="/tidings/ethical.php">윤리경영</a></li>
                            </ul>
                        </li>
                        <li>
                            <h5 class="sub-title">공사소개</h5>
                            <ul class="square-list">
                                <li><a href="/introduction/greeting.php">CEO 인사말</a></li>
                                <li><a href="/introduction/ci.php">공사 CI</a></li>
                                <li><a href="/introduction/vision.php">비전과 미션</a></li>
                                <li><a href="/introduction/general_status.php">일반현황</a></li>
                                <li><a href="/introduction/management.php">경영공시</a></li>
                                <li><a href="/introduction/group.php">조직 및 업무</a></li>
                                <li><a href="/introduction/location.php">찾아오시는길</a></li>
                            </ul>
                        </li>
                    </ul>
                </article>
            </div>
        </section>
        
    </main>
    
    <?php require_once($_SERVER['DOCUMENT_ROOT'].'/inc/quick.php'); ?>
    <?php require_once($_SERVER['DOCUMENT_ROOT'].'/inc/footer.php'); ?>
    <?php require_once($_SERVER['DOCUMENT_ROOT'].'/inc/docfoot.php'); ?>
</body>
</html>