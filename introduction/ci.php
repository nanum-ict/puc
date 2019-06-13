<?php require_once($_SERVER['DOCUMENT_ROOT'].'/inc/dochead.php'); ?>
<link rel="stylesheet" href="/assets/css/sub.css">
<link rel="stylesheet" href="/assets/css/introcution.css">
</head>
<body>
    <?php require_once($_SERVER['DOCUMENT_ROOT'].'/inc/header.php'); ?>
    
    <!-- Content -->
    <main id="content" class="sub introcution"> <!-- 폴더별 class -->
        <section class="sub-content ci"> <!-- 페이지명 class -->
            <div class="section-header">
                <div class="page-path">
                    <h3>공사소개</h3>
                    <ol class="breadcrumb">
                        <li>공사소개</li>
                        <li>공사 CI</li>
                    </ol>
                </div>
                <h4 class="title">공사 CI</h4>
            </div>
            <div class="section-content">
                <nav class="dropdown nav-tab">
                    <button class="btn btn-secondary dropdown-toggle" type="button" id="nav-tab" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        공사 CI
                    </button>
                    <div class="dropdown-menu" aria-labelledby="nav-tab">
                        <ul>
                            <li><a href="/introduction/greeting.php">CEO인사말</a></li>
                            <li class="active"><a href="/introduction/ci.php">공사 CI</a></li>
                            <li><a href="/introduction/vision.php">비전과 미션</a></li>
                            <li><a href="/introduction/general_status.php">일반현황</a></li>
                            <li><a href="/introduction/management.php">경영공시</a></li>
                            <li><a href="/introduction/group.php">조직 및 업무</a></li>
                            <li><a href="/introduction/location.php">찾아오시는 길</a></li>
                        </ul>
                    </div>
                </nav>
                <article class="symbol">
                    <h5 class="sub-title">심볼</h5>
                    <p>평택도시공사의 심볼마크는 평택도시공사 영문 대표글자 "P"를 붉은하늘과 푸른바다의 역동적인 모습으로 형상화하여 "환경친화기업", "고객을 위해 언제나 편안하고 친숙한 기업", "항상 열정으로 최선을 다하는 기업" 이미지를 상징화하였다.</p>
                    <ul class="mixed-color">
                        <li>
                            <div class="item">
                                <figure>
                                    <img src="/assets/images/introduction/img_symbol01.png" class="img-fluid" alt="로고">
                                </figure>
                            </div>
                        </li>
                        <li>
                            <div class="item">
                                <figure>
                                    <img src="/assets/images/introduction/img_symbol02.png" class="img-fluid" alt="로고 색상표">
                                </figure>
                            </div>
                        </li>
                    </ul>
                    <ul class="solid-color">
                        <li>
                            <div class="item">
                                <figure>
                                    <img src="/assets/images/introduction/img_symbol03.png" class="img-fluid" alt="활용형 black">
                                </figure>
                            </div>
                            <div class="details">활용형 Black</div>
                        </li>
                        <li>
                            <div class="item">
                                <figure>
                                    <img src="/assets/images/introduction/img_symbol04.png" class="img-fluid" alt="활용형 gold">
                                </figure>
                            </div>
                            <div class="details">활용형 Gold</div>
                        </li>
                        <li>
                            <div class="item">
                                <figure>
                                    <img src="/assets/images/introduction/img_symbol05.png" class="img-fluid" alt="활용형 silver">
                                </figure>
                            </div>
                            <div class="details">활용형 Silver</div>
                        </li>
                    </ul>
                </article>
                <article class="signature">
                    <h5 class="sub-title">시그니처</h5>
                    <ul class="signature-list">
                        <li>
                            <div class="item">
                                <figure>
                                    <img src="/assets/images/introduction/img_signature01.png" alt="좌우조합 영문">
                                </figure>
                            </div>
                            <div class="details">좌우조합 영문</div>
                        </li>
                        <li>
                            <div class="item">
                                <figure>
                                    <img src="/assets/images/introduction/img_signature02.png" alt="좌우조합 국문">
                                </figure>
                            </div>
                            <div class="details">좌우조합 국문</div>
                        </li>
                        <li>
                            <div class="item">
                                <figure>
                                    <img src="/assets/images/introduction/img_signature03.png" alt="좌우조합 한문">
                                </figure>
                            </div>
                            <div class="details">좌우조합 한문</div>
                        </li>
                        <li>
                            <div class="item">
                                <figure>
                                    <img src="/assets/images/introduction/img_signature04.png" alt="좌우조합 국문/영문">
                                </figure>
                            </div>
                            <div class="details">좌우조합 국문/영문</div>
                        </li>
                    </ul>
                </article>
                <article class="emblem">
                    <h5 class="sub-title">엠블럼</h5>
                    <div class="item">
                        <figure>
                            <img src="/assets/images/introduction/img_emblem01.png" alt="엠블럼 로고">
                            <img src="/assets/images/introduction/img_emblem02.png" alt="엠블럼 로고">
                            <img src="/assets/images/introduction/img_emblem03.png" alt="엠블럼 로고">
                        </figure>
                    </div>
                </article>
                <div class="btn-area">
                    <a href="/assets/down/평택도시공사CI.zip" class="btn btn-default" role="button">CI 다운로드 (AI)</a>
                </div>
            </div>
        </section>
        <?php require_once($_SERVER['DOCUMENT_ROOT'].'/inc/side_quick.php'); ?>
    </main>
    
    <?php require_once($_SERVER['DOCUMENT_ROOT'].'/inc/quick.php'); ?>
    <?php require_once($_SERVER['DOCUMENT_ROOT'].'/inc/footer.php'); ?>
    <?php require_once($_SERVER['DOCUMENT_ROOT'].'/inc/docfoot.php'); ?>
</body>
</html>