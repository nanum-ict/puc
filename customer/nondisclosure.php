<?php require_once($_SERVER['DOCUMENT_ROOT'].'/inc/dochead.php'); ?>
<link rel="stylesheet" href="/assets/css/sub.css">
<link rel="stylesheet" href="/assets/css/customer.css">
</head>
<body>
    <?php require_once($_SERVER['DOCUMENT_ROOT'].'/inc/header.php'); ?>
    
    <!-- Content -->
    <main id="content" class="sub customer "> <!-- 폴더별 class -->
        <section class="sub-content nondisclosure"> <!-- 페이지명 class -->
            <div class="section-header">
                <div class="page-path">
                    <h3>고객광장</h3>
                    <ol class="breadcrumb">
                        <li>고객광장</li>
                        <li>비공개대상 정보</li>
                    </ol>
                </div>
                <h4 class="title">비공개대상 정보</h4>
            </div>
            <div class="section-content">
                <nav class="dropdown nav-tab">
                    <button class="btn btn-secondary dropdown-toggle" type="button" id="nav-tab" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        비공개대상 정보
                    </button>
                    <div class="dropdown-menu" aria-labelledby="nav-tab">
                        <ul>
                            <li><a href="/customer/outline.php">정보공개제도 개요</a></li>
                            <li><a href="/customer/claim.php">청구권자</a></li>
                            <li><a href="/customer/procedure.php">정보공개 청구 절차</a></li>
                            <li class="active"><a href="/customer/nondisclosure.php">비공개대상 정보</a></li>
                            <li><a href="/customer/officially.php">사전정보 공표</a></li>
                        </ul>
                    </div>
                </nav>
                <article>
                    <h5 class="sub-title">비공개대상 정보</h5>
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
                    <h5 class="sub-title">비공개대상 정보 범위 세부기준 <a href="/assets/down/closeinfo.pdf" target="_blank">&lt;클릭&gt;</a></h5>
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