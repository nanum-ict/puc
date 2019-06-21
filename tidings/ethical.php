<?php require_once($_SERVER['DOCUMENT_ROOT'].'/inc/dochead.php'); ?>
<link rel="stylesheet" href="/assets/css/sub.css">
<link rel="stylesheet" href="/assets/css/tidings.css">
</head>
<body>
    <?php require_once($_SERVER['DOCUMENT_ROOT'].'/inc/header.php'); ?>
    
    <!-- Content -->
    <main id="content" class="sub tidings"> <!-- 폴더별 class -->
        <section class="sub-content ethical"> <!-- 페이지명 class -->
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
                        PUC 윤리경영
                    </button>
                    <div class="dropdown-menu" aria-labelledby="nav-tab">
                        <ul>
                            <li class="active"><a href="/tidings/ethical.php">PUC 윤리경영</a></li>
                            <li><a href="/tidings/charter.php">윤리규범</a></li>
                            <li><a href="/tidings/clear.php">사이버감사실</a></li>
                            <li><a href="/tidings/activity_list.php">사회공헌활동</a></li>
                            <li><a href="/tidings/human.php">인권경영</a></li>
                            <li><a href="/tidings/upright_list.php">PUC 청렴소식지</a></li>
                        </ul>
                    </div>
                </nav>
                <figure>
                    <img src="/assets/images/tidings/img_ethical_xs.jpg" class="img-fluid d-lg-none" alt="윤리경영">
                    <img src="/assets/images/tidings/img_ethical_lg.jpg" class="img-fluid d-none d-lg-block" alt="윤리경영">
                    <figcaption class="sr-only">
                        <ol>
                            <li>
                                <h1>윤리경영</h1>
                                <ul>
                                    <li>
                                        <h2>고객</h2>
                                        <dl>
                                            <dt>고객만족경영</dt>
                                            <dd>
                                                <ul>
                                                    <li>고객의 권익보호</li>
                                                    <li>앞선 생활문화구현</li>
                                                </ul>
                                            </dd>
                                        </dl>
                                    </li>
                                    <li>
                                        <h2>임직원</h2>
                                        <dl>
                                            <dt>임직원존중경영</dt>
                                            <dd>
                                                <ul>
                                                    <li>유연하고 창의적인 기업문화 조성</li>
                                                    <li>상호발전을 위한 책임완수</li>
                                                </ul>
                                            </dd>
                                        </dl>
                                    </li>
                                    <li>
                                        <h2>국가와 사회</h2>
                                        <dl>
                                            <dt>국가와 사회</dt>
                                            <dd>
                                                <ul>
                                                    <li>사회질서 및 법규준수</li>
                                                    <li>사회적 책임완수</li>
                                                </ul>
                                            </dd>
                                        </dl>
                                    </li>
                                    <li>
                                        <h2>협력회사</h2>
                                        <dl>
                                            <dt>협력회사</dt>
                                            <dd>
                                                <ul>
                                                    <li>투명한 거래문화 정착</li>
                                                    <li>합리적인 상호발전 추구</li>
                                                </ul>
                                            </dd>
                                        </dl>
                                    </li>
                                </ul>
                            </li>
                        </ol>
                    </figcaption>
                </figure>
            </div>
        </section>
        
    </main>
    
    <?php require_once($_SERVER['DOCUMENT_ROOT'].'/inc/quick.php'); ?>
    <?php require_once($_SERVER['DOCUMENT_ROOT'].'/inc/footer.php'); ?>
    <?php require_once($_SERVER['DOCUMENT_ROOT'].'/inc/docfoot.php'); ?>
</body>
</html>
