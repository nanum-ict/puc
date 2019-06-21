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
                        청구권자
                    </button>
                    <div class="dropdown-menu" aria-labelledby="nav-tab">
                        <ul>
                            <li><a href="/customer/outline.php">정보공개제도 개요</a></li>
                            <li class="active"><a href="/customer/claim.php">청구권자</a></li>
                            <li><a href="/customer/procedure.php">정보공개 청구 절차</a></li>
                            <li><a href="/customer/nondisclosure.php">비공개대상 정보</a></li>
                            <li><a href="/customer/officially.php">사전정보 공표</a></li>
                        </ul>
                    </div>
                </nav>
                <article>
                    <h5 class="sub-title">청구권자</h5>
                    <dl>
                        <dt>모든국민</dt>
                        <dd>
                            <ul class="dot-list">
                                <li>다만 중학생 이하인 경우는 친권자의 대리에 의하여, 고등학생 이상의 경우에는 공개 제도의 취지, 내용 등에 대하여 충분히 이해가 가능하고 비용 부담이 가능한 범위 내에서 단독 청구가 가능.</li>
                            </ul>
                        </dd>
                        <dt>법인, 단체</dt>
                        <dd>
                            <ul class="dot-list">
                                <li>법인은 국민 생활에 있어서 자연인 못지않은 사회적 작용을 담당하는 권리 능력의 주체로서 적합한 사회적 가치를 가지므로 성질상 공개 청구권 인정</li>
                            </ul>
                        </dd>
                        <dt>외국인</dt>
                        <dd>
                            <ul class="dot-list">
                                <li>국내에 일정한 주소를 두고 거주하거나 학술, 연구를 위하여 일시적으로 체류하는 자 또는 국내에 사무소를 두고 있는 법인 또는 단체</li>
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