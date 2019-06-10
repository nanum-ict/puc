<?php require_once($_SERVER['DOCUMENT_ROOT'].'/inc/dochead.php'); ?>
<link rel="stylesheet" href="/assets/css/sub.css">
<link rel="stylesheet" href="/assets/css/business.css">
</head>
<body>
    <?php require_once($_SERVER['DOCUMENT_ROOT'].'/inc/header.php'); ?>
    
    <!-- Content -->
    <main id="content" class="sub business"> <!-- 폴더별 class -->
        <section class="sub-content industrial-complex jinwi01"> <!-- 페이지명 class -->
            <div class="section-header">
                <div class="page-path">
                    <h3>사업안내</h3>
                    <ol class="breadcrumb">
                        <li>사업안내</li>
                        <li>산업단지조성사업</li>
                    </ol>
                </div>
                <h4 class="title">산업단지조성사업</h4>
            </div>
            <div class="section-content">
                <nav class="dropdown nav-tab">
                    <button class="btn btn-secondary dropdown-toggle" type="button" id="nav-tab" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        포승2 일반산업단지
                    </button>
                    <div class="dropdown-menu" aria-labelledby="nav-tab">
                        <ul>
                            <li><a href="/business/jinwi02.php">진위2 일반산업단지</a></li>
                            <li class="active"><a href="/business/poseung.php">포승2 일반산업단지</a></li>
                            <li><a href="/business/jinwi03.php">진위3 일반산업단지</a></li>
                        </ul>
                    </div>
                </nav>
                <article class="position">
                    <h5 class="sub-title">위치도</h5>
                    <figure>
                        <img src="/assets/images/business/img_jinwe_poseung.png" alt="위치도">
                    </figure>
                </article>
                <article class="outline">
                    <h5 class="sub-title">사업개요</h5>
                    <ul class="square-list">
                        <li>
                            <dl>
                                <dt>위치</dt>
                                <dd>평택시 포승읍 만호리 일원</dd>
                            </dl>
                        </li>
                        <li>
                            <dl>
                                <dt>사업기간</dt>
                                <dd>2007년11월~2015년12월</dd>
                            </dl>
                        </li>
                        <li>
                            <dl>
                                <dt>면적</dt>
                                <dd>628,484㎢</dd>
                            </dl>
                        </li>
                        <li>
                            <dl>
                                <dt>총사업비</dt>
                                <dd>3,099억원</dd>
                            </dl>
                        </li>
                        <li>
                            <dl>
                                <dt>사업시행자</dt>
                                <dd>포승산단(주)</dd>
                            </dl>
                        </li>
                    </ul>
                </article>
                <article class="implement">
                    <h5 class="sub-title">추진현황 및 계획</h5>
                    <ol>
                        <li>
                            <dl>
                                <dt>2008.05.</dt>
                                <dd>산업단지지정고시</dd>
                            </dl>
                        </li>
                        <li>
                            <dl>
                                <dt>2011.10.</dt>
                                <dd>공사착공</dd>
                            </dl>
                        </li>
                        <li>
                            <dl>
                                <dt>2012.08.</dt>
                                <dd>산업시설용지 분양공고</dd>
                            </dl>
                        </li>
                        <li>
                            <dl>
                                <dt>2014.08.</dt>
                                <dd>1단계 사업준공</dd>
                            </dl>
                        </li>
                        <li>
                            <dl>
                                <dt>2015.12.</dt>
                                <dd>2단계(전체) 사업준공</dd>
                            </dl>
                        </li>
                    </ol>
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