<?php require_once($_SERVER['DOCUMENT_ROOT'].'/inc/dochead.php'); ?>
<link rel="stylesheet" href="/assets/css/sub.css">
<link rel="stylesheet" href="/assets/css/tidings.css">
</head>
<body>
    <?php require_once($_SERVER['DOCUMENT_ROOT'].'/inc/header.php'); ?>
    
    <!-- Content -->
    <main id="content" class="sub tidings"> <!-- 폴더별 class -->
        <section class="sub-content charter"> <!-- 페이지명 class -->
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
                        윤리규범
                    </button>
                    <div class="dropdown-menu" aria-labelledby="nav-tab">
                        <ul>
                            <li><a href="/tidings/ethical.php">PUC 윤리경영</a></li>
                            <li class="active"><a href="/tidings/charter.php">윤리규범</a></li>
                            <li><a href="/tidings/clear.php">사이버감사실</a></li>
                            <li><a href="/tidings/activity_list.php">사회공헌활동</a></li>
                            <li><a href="/tidings/human.php">인권경영</a></li>
                            <li><a href="/tidings/upright_list.php">PUC 청렴소식지</a></li>
                        </ul>
                    </div>
                </nav>
                <nav class="tab-menu">
                    <ul>
                        <li class="active"><a href="/tidings/charter.php">윤리헌장</a></li>
                        <li><a href="/tidings/behavior.php">임직원행동강령</a></li>
                    </ul>
                </nav>
                <article class="resolution">
                    <h5>윤리헌장</h5>
                    <div class="article-content">
                        <b>우리 평택도시공사 임직원 일동은 평택시민과의 약속을 이행하고, 평택시의 발전에 기여하기 위해 다음과 같이 업무에 임할 것을 시민앞에 엄숙히 결의합니다.</b>
                        <ol class="decimal-list">
                            <li>우리는 항상 시민의 관점에서 생각하며, 시민을 위한 가치를 창출한다.</li>
                            <li>우리는 모든 업무를 책임지고 완수하여 평택시의 발전에 기여한다.</li>
                            <li>우리는 일체의 부조리를 배척하며, 투명하고 공정한 업무처리를 다짐한다.</li>
                        </ol>
                        <figure>
                            <img src="/assets/images/tidings/img_logo.jpg" alt="로고">
                        </figure>
                        <h6 class="sub-title">우리의 결의</h6>
                        <ul class="square-list">
                            <li>우리는 직무수행에 있어 제반 법령과 규정을 준수한다.</li>
                            <li>우리는 직무관련자와 금품 · 향응을 주고 받지 아니한다.</li>
                            <li>우리는 직무관련 정보를 부당하게 이용하지 아니한다.</li>
                            <li>우리는 고객중심으로 최상의 서비스 제공에 노력한다.</li>
                            <li>우리는 시장경제질서를 존중하고 정정당당하게 경쟁한다.</li>
                            <li>우리는 임직원 상호간 믿음과 애정을 바탕으로 존중한다.</li>
                            <li>우리는 합리적 책임 경영을 통해 국가와 사회발전에 기여한다.</li>
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