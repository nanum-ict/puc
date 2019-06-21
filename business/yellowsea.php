<?php require_once($_SERVER['DOCUMENT_ROOT'].'/inc/dochead.php'); ?>
<link rel="stylesheet" href="/assets/css/sub.css">
<link rel="stylesheet" href="/assets/css/business.css">
</head>
<body>
    <?php require_once($_SERVER['DOCUMENT_ROOT'].'/inc/header.php'); ?>
    
    <!-- Content -->
    <main id="content" class="sub business"> <!-- 폴더별 class -->
        <section class="sub-content yellowsea"> <!-- 페이지명 class -->
            <div class="section-header">
                <h3 class="depth-title">사업안내</h3>
                <h4 class="title">황해경제자유구역 개발사업</h4>
                <div class="page-path">
                    <ol class="breadcrumb">
                        <li>
                            <a href="/">
                                <i class="icon-home"><span class="sr-only">메인으로 이동</span></i>
                            </a>
                        </li>
                        <li>사업안내</li>
                        <li>
                            <div class="depth-2">
                                <button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                    황해경제자유구역 개발사업
                                </button>
                                <div class="dropdown-menu">
                                    <a href="/business/housing.php">택지개발사업</a>
                                    <a href="/business/jinwi02.php">산업단지조성사업</a>
                                    <a href="/business/moving_support.php">위수탁사업</a>
                                    <a href="/business/yellowsea.php">황해경제자유구역 개발사업</a>
                                    <a href="/business/braincity.php">브레인시티 일반산업단지 조성사업</a>
                                </div>
                            </div>
                        </li>
                    </ol>
                </div>
            </div>
            <div class="section-content">
                <nav class="dropdown nav-tab">
                    <button class="btn btn-secondary dropdown-toggle" type="button" id="nav-tab" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        황해경제자유구역 평택 BIX 사업
                    </button>
                    <div class="dropdown-menu" aria-labelledby="nav-tab">
                        <ul>
                            <li class="active"><a href="/business/yellowsea.php">황해경제자유구역 평택 BIX 사업</a></li>
                        </ul>
                    </div>
                </nav>
                <article class="position">
                    <h5 class="sub-title">위치도</h5>
                    <figure>
                        <img src="/assets/images/business/img_yellowsea.png" class="img-fluid" alt="위치도">
                    </figure>
                </article>
                <article class="outline">
                    <h5 class="sub-title">사업개요</h5>
                    <ul class="square-list">
                        <li>
                            <dl>
                                <dt>위치</dt>
                                <dd>평택시 포승읍 회곡리 일원</dd>
                            </dl>
                        </li>
                        <li>
                            <dl>
                                <dt>사업기간</dt>
                                <dd>2008년 ~ 2020년</dd>
                            </dl>
                        </li>
                        <li>
                            <dl>
                                <dt>면적</dt>
                                <dd>2,073,465.3㎡</dd>
                            </dl>
                        </li>
                        <li>
                            <dl>
                                <dt>총사업비</dt>
                                <dd>7,689억원</dd>
                            </dl>
                        </li>
                        <li>
                            <dl>
                                <dt>시행자</dt>
                                <dd>경기도시공사 80%, 평택도시공사 20%</dd>
                            </dl>
                        </li>
                    </ul>
                </article>
                <article class="implement">
                    <h5 class="sub-title">추진현황 및 계획</h5>
                    <ol class="square-list">
                        <li>
                            <dl>
                                <dt>2008.05.</dt>
                                <dd>경제자유구역 지정</dd>
                            </dl>
                        </li>
                        <li>
                            <dl>
                                <dt>2012.08.</dt>
                                <dd>사업시행자 지정(평택도시공사, 경기도시공사)</dd>
                            </dl>
                        </li>
                        <li>
                            <dl>
                                <dt>2014.08.</dt>
                                <dd>실시계획 승인</dd>
                            </dl>
                        </li>
                        <li>
                            <dl>
                                <dt>2015.06.16.</dt>
                                <dd>토지 및 지장물 취득 완료</dd>
                            </dl>
                        </li>
                        <li>
                            <dl>
                                <dt>2015.11.02.</dt>
                                <dd>황해 공사 착공</dd>
                            </dl>
                        </li>
                        <li>
                            <dl>
                                <dt>2019.03.</dt>
                                <dd>공사준공(예정)</dd>
                            </dl>
                        </li>
                    </ol>
                </article>
            </div>
        </section>
    </main>
    
    <?php require_once($_SERVER['DOCUMENT_ROOT'].'/inc/quick.php'); ?>
    <?php require_once($_SERVER['DOCUMENT_ROOT'].'/inc/footer.php'); ?>
    <?php require_once($_SERVER['DOCUMENT_ROOT'].'/inc/docfoot.php'); ?>
</body>
</html>