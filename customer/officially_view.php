<?php require_once($_SERVER['DOCUMENT_ROOT'].'/inc/dochead.php'); ?>
<link rel="stylesheet" href="/assets/css/sub.css">
<link rel="stylesheet" href="/assets/css/customer.css">
</head>
<body>
    <?php require_once($_SERVER['DOCUMENT_ROOT'].'/inc/header.php'); ?>
    
    <!-- Content -->
    <main id="content" class="sub customer"> <!-- 폴더별 class -->
        <section class="sub-content officially"> <!-- 페이지명 class -->
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
                        사전정보 공표
                    </button>
                    <div class="dropdown-menu" aria-labelledby="nav-tab">
                        <ul>
                            <li><a href="/customer/outline.php">정보공개제도 개요</a></li>
                            <li><a href="/customer/claim.php">청구권자</a></li>
                            <li><a href="/customer/procedure.php">정보공개 청구 절차</a></li>
                            <li><a href="/customer/nondisclosure.php">비공개대상 정보</a></li>
                            <li class="active"><a href="/customer/officially.php">사전정보 공표</a></li>
                        </ul>
                    </div>
                </nav>
                <article class="summary">
                    <h5 class="sub-title">사전정보공표목록</h5>
                    <p class="note">정보담당 : 전략기획처 성낙훈 (<a href="tel:03180538835">031-8053-8835</a>)</p>
                    <h5 class="sub-title">사전정보공개란?</h5>
                    <p class="note">국민이 정보공개를 청구하기 전에 공공기관이 국민의 생활에 큰 영향을 미치는 정책 등을 사전에 공개하는 것을 말하며, 우리 공사에서 정한 사전정보공개 공표목록을 통해 공표한 정보를 정기적으로 게재하고 있습니다.</p>
                </article>
                <article class="officially-view">
                    <h5 class="sub-title">사전정보 공표 (전체)</h5>
                    <div class="box">
                        <div class="content">
                            <strong>평택도시공사의 모든 소식을 알려드립니다.</strong>
                            <p>언제나 시민과 더불어 함께하는 평택도시공사가 되겠습니다.</p>
                        </div>
                    </div>
                    <div class="board-view">
                        <div class="view-head">
                            <h5 class="title">2019년 예산 총괄[ 인사·총무·회계 ]</h5>
                            <ul class="information">
                                <li>
                                    <dl>
                                        <dt>작성자</dt>
                                        <dd>평택도시공사</dd>
                                    </dl>
                                </li>
                                <li>
                                    <dl>
                                        <dt>등록일</dt>
                                        <dd>2019-01-03</dd>
                                    </dl>
                                </li>
                                <li>
                                    <dl>
                                        <dt>조회</dt>
                                        <dd>29</dd>
                                    </dl>
                                </li>
                            </ul>
                        </div>
                        <div class="view-content">
                            content <br>
                            content <br>
                            content <br>
                            content
                        </div>
                        <dl class="attach">
                            <dt>첨부파일</dt>
                            <dd><a href="#">주차요금 미납차량 공시송달 명단 (독촉분_2019_2월).xls</a></dd>
                        </dl>
                        <div class="btn-area">
                            <a href="/customer/officially.php" class="btn btn-default" role="button">목차</a>
                        </div>
                        <ul class="page-move">
                            <li class="prev">
                                <dl>
                                    <dt>이전글</dt>
                                    <dd><a href="#">영조물배상책임보험 현황</a></dd>
                                </dl>
                            </li>
                            <li class="next">
                                <dl>
                                    <dt>다음글</dt>
                                    <dd><a href="#">영조물배상책임보험 현황</a></dd>
                                </dl>
                            </li>
                        </ul>
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