<?php require_once($_SERVER['DOCUMENT_ROOT'].'/inc/dochead.php'); ?>
<link rel="stylesheet" href="/assets/css/sub.css">
<link rel="stylesheet" href="/assets/css/customer.css">
</head>
<body>
    <?php require_once($_SERVER['DOCUMENT_ROOT'].'/inc/header.php'); ?>
    
    <!-- Content -->
    <main id="content" class="sub customer "> <!-- 폴더별 class -->
        <section class="sub-content outline"> <!-- 페이지명 class -->
            <div class="section-header">
                <h3 class="depth-title">고객광장</h3>
                <h4 class="title">정보공개</h4>
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
                                    정보공개
                                </button>
                                <div class="dropdown-menu">
                                    <a href="/customer/charter.php">고객서비스</a>
                                    <a href="/customer/faq_list.php">자주 묻는 질문</a>
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
                <nav class="dropdown nav-tab">
                    <button class="btn btn-secondary dropdown-toggle" type="button" id="nav-tab" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        정보공개제도 개요
                    </button>
                    <div class="dropdown-menu" aria-labelledby="nav-tab">
                        <ul>
                            <li class="active"><a href="/customer/outline.php">정보공개제도 개요</a></li>
                            <li><a href="/customer/claim.php">청구권자</a></li>
                            <li><a href="/customer/procedure.php">정보공개 청구 절차</a></li>
                            <li><a href="/customer/nondisclosure.php">비공개대상 정보</a></li>
                            <li><a href="/customer/officially.php">사전정보 공표</a></li>
                        </ul>
                    </div>
                </nav>
                <article>
                    <h5 class="sub-title">정보공개제도 개요</h5>
                    <dl>
                        <dt>정보공개제도의 의의</dt>
                        <dd>
                            <ul class="dot-list">
                                <li>「정보」라 함은 공공기관이 직무상 작성 또는 취득하여 관리하고 있는 문서(전자문서포함), 그림, 사진, 도면, 필름, 테이프, 슬라이드 및 그 밖에 이에 준하는 매체 등에 기록된 사항 등을 말함.</li>
                                <li>「공개」라 함은 공공기관이 보유 관리하고 있는 행정정보를 열람하게 하거나, 그 사본·복제물을 교부하는 것 또는 정보통신망을 통하여 정보를 제공하는 것 등을 말함.</li>
                            </ul>
                        </dd>
                        <dt>목적</dt>
                        <dd>
                            <ul class="dot-list">
                                <li>정보의 자유로운 이용을 통한 국민의 알 권리 보장</li>
                                <li>투명한 행정정보 공개로 행정의 신뢰성 확보 및 책임행정 구현</li>
                            </ul>
                        </dd>
                        <dt>공개형태</dt>
                        <dd>
                            <ul class="dot-list">
                                <li>
                                    <strong>청구 공개</strong>
                                    공공기관이 직무상 작성 또는 취득하여 관리하고 있는 정보를 청구인의 청구에 의하여 공개
                                </li>
                                <li>
                                    <strong>정보 공표</strong>
                                    행정정보를 보유한 공공기관이 자발적 또는 법령상 의무적으로 정보를 인터넷, 간행물 등을 통하여 정보를 공개
                                </li>
                            </ul>
                        </dd>
                    </dl>
                </article>
            </div>
        </section>
        
        
    </main>
    
    <?php require_once($_SERVER['DOCUMENT_ROOT'].'/inc/quick.php'); ?>
    <?php require_once($_SERVER['DOCUMENT_ROOT'].'/inc/footer.php'); ?>
    <?php require_once($_SERVER['DOCUMENT_ROOT'].'/inc/docfoot.php'); ?>
</body>
</html>