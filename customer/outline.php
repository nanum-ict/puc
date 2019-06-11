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
                <div class="page-path">
                    <h3>고객광장</h3>
                    <ol class="breadcrumb">
                        <li>고객광장</li>
                        <li>정보공개제도 개요</li>
                    </ol>
                </div>
                <h4 class="title">정보공개제도 개요</h4>
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
        
        <?php require_once($_SERVER['DOCUMENT_ROOT'].'/inc/side_quick.php'); ?>
    </main>
    
    <?php require_once($_SERVER['DOCUMENT_ROOT'].'/inc/quick.php'); ?>
    <?php require_once($_SERVER['DOCUMENT_ROOT'].'/inc/footer.php'); ?>
    <?php require_once($_SERVER['DOCUMENT_ROOT'].'/inc/docfoot.php'); ?>
</body>
</html>