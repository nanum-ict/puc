<?php require_once($_SERVER['DOCUMENT_ROOT'].'/inc/dochead.php'); ?>
<link rel="stylesheet" href="/assets/css/sub.css">
<link rel="stylesheet" href="/assets/css/customer.css">
</head>
<body>
    <?php require_once($_SERVER['DOCUMENT_ROOT'].'/inc/header.php'); ?>
    
    <!-- Content -->
    <main id="content" class="sub customer"> <!-- 폴더별 class -->
        <section class="sub-content procedure"> <!-- 페이지명 class -->
            <div class="section-header">
                <div class="page-path">
                    <h3>고객광장</h3>
                    <ol class="breadcrumb">
                        <li>고객광장</li>
                        <li>정보공개 청구 절차</li>
                    </ol>
                </div>
                <h4 class="title">정보공개 청구 절차</h4>
            </div>
            <div class="section-content">
                <nav class="dropdown nav-tab">
                    <button class="btn btn-secondary dropdown-toggle" type="button" id="nav-tab" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        정보공개 청구 절차
                    </button>
                    <div class="dropdown-menu" aria-labelledby="nav-tab">
                        <ul>
                            <li><a href="/customer/outline.php">정보공개제도 개요</a></li>
                            <li><a href="/customer/claim.php">청구권자</a></li>
                            <li class="active"><a href="/customer/procedure.php">정보공개 청구 절차</a></li>
                            <li><a href="/customer/nondisclosure.php">비공개대상 정보</a></li>
                            <li><a href="/customer/officially.php">사전정보 공표</a></li>
                        </ul>
                    </div>
                </nav>
                <article>
                    <h5 class="sub-title">정보공개 청구 절차</h5>
                    <figure>
                        <img src="/assets/images/customer/img_claim_xs.png" class="img-fluid d-md-none" alt="정보공개 청구 절차">
                        <img src="/assets/images/customer/img_claim_md.png" class="d-none d-md-block" alt="정보공개 청구 절차">
                        <figcaption class="sr-only">
                            <ol>
                                <li>
                                    <dl>
                                        <dt>1.청구인</dt>
                                        <dd>
                                            정보공개 청구서 제출
                                            <p class="note">온라인 open.go.kr</p>
                                        </dd>
                                    </dl>
                                </li>
                                <li>
                                    <dl>
                                        <dt>2.경영지원처</dt>
                                        <dd>
                                            <ul>
                                                <li>정보공개 청구서 접수</li>
                                                <li>처리부서 이송</li>
                                            </ul>
                                        </dd>
                                    </dl>
                                </li>
                                <li>
                                    <dl>
                                        <dt>3.처리부서</dt>
                                        <dd>
                                            공개 비공개 결정 통지 (10일이내, 10일 연장가능)
                                            <dl class="note">
                                                <dt>제3자 의견청취</dt>
                                                <dd>
                                                    <ul>
                                                        <li>공개대상 정보가 제3자와 관련 있다고 인정되는 때에는 제3자 의견청취</li>
                                                        <li>공개 청구된 정보중 다른 기관생산 정보는 당해기관 의견을 들어 공개여부를 결정</li>
                                                    </ul>
                                                </dd>
                                            </dl>
                                        </dd>
                                    </dl>
                                </li>
                                <li>
                                    <dl>
                                        <dt>4.청구인</dt>
                                        <dd>이의신청 (공개통지를 받은날로부터 7일이내)</dd>
                                    </dl>
                                </li>
                            </ol>
                        </figcaption>
                    </figure>
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