<?php require_once($_SERVER['DOCUMENT_ROOT'].'/inc/dochead.php'); ?>
<link rel="stylesheet" href="/assets/css/sub.css">
<link rel="stylesheet" href="/assets/css/introcution.css">
</head>
<body>
    <?php require_once($_SERVER['DOCUMENT_ROOT'].'/inc/header.php'); ?>
    
    <!-- Content -->
    <main id="content" class="sub introcution"> <!-- 폴더별 class -->
        <section class="sub-content vision"> <!-- 페이지명 class -->
            <div class="section-header">
                <div class="page-path">
                    <h3>공사소개</h3>
                    <ol class="breadcrumb">
                        <li>공사소개</li>
                        <li>비전과 미션</li>
                    </ol>
                </div>
                <h4 class="title">비전과 미션</h4>
            </div>
            <div class="section-content">
                <nav class="dropdown nav-tab">
                    <button class="btn btn-secondary dropdown-toggle" type="button" id="nav-tab" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        비전과 미션
                    </button>
                    <div class="dropdown-menu" aria-labelledby="nav-tab">
                        <ul>
                            <li><a href="/introduction/greeting.php">CEO인사말</a></li>
                            <li><a href="/introduction/ci.php">공사 CI</a></li>
                            <li class="active"><a href="/introduction/vision.php">비전과 미션</a></li>
                            <li><a href="/introduction/general_status.php">일반현황</a></li>
                            <li><a href="/introduction/management.php">경영공시</a></li>
                            <li><a href="/introduction/group.php">조직 및 업무</a></li>
                            <li><a href="/introduction/location.php">찾아오시는 길</a></li>
                        </ul>
                    </div>
                </nav>
                <article class="vision-mission">
                    <ul>
                        <li>
                            <h5>미션</h5>
                            <p>살기 좋은 평택 건설로 시민의 복지 향상 및 지역사회 발전에 기여</p>
                        </li>
                        <li>
                            <h5>비전</h5>
                            <p>시민의 꿈과 행복을 신현하는 <b>열린 혁신리더</b>(Innovation Leader), 평택도시공사</p>
                        </li>
                    </ul>
                </article>
                <article class="working-principle">
                    <h5>경영방침</h5>
                    <ul>
                        <li>
                            <dl>
                                <dt>B</dt>
                                <dd>사업중심<br>(Business)</dd>
                            </dl>
                        </li>
                        <li>
                            <dl>
                                <dt>R</dt>
                                <dd>고객진화<br>(Relationship)</dd>
                            </dl>
                        </li>
                        <li>
                            <dl>
                                <dt>A</dt>
                                <dd>청렴윤리<br>(anti-corruption)</dd>
                            </dl>
                        </li>
                        <li>
                            <dl>
                                <dt>V</dt>
                                <dd>가치창출<br>(Value)</dd>
                            </dl>
                        </li>
                        <li>
                            <dl>
                                <dt>O</dt>
                                <dd>조직혁신<br>(Organization)</dd>
                            </dl>
                        </li>
                    </ul>
                </article>
                <article class="core-value">
                    <h5>핵심가치</h5>
                    <ul>
                        <li>
                            <dl>
                                <dt>P</dt>
                                <dd>열정<br>(Passion)</dd>
                            </dl>
                        </li>
                        <li>
                            <dl>
                                <dt>U</dt>
                                <dd>청렴<br>(Upright)</dd>
                            </dl>
                        </li>
                        <li>
                            <dl>
                                <dt>C</dt>
                                <dd>창의<br>(Creativity)</dd>
                            </dl>
                        </li>
                    </ul>
                </article>
                <figure>
                    <img src="/assets/images/introduction/img_xs_target.jpg" class="d-md-none" alt="전략목표">
                    <img src="/assets/images/introduction/img_md_target.jpg" class="d-none d-md-block" alt="전략목표">
                    <figcaption class="sr-only">
                        <ul>
                            <li>
                                <h1>전략목표</h1>
                                <ul>
                                    <li>지속가능 수익 창출 모델 정립</li>
                                    <li>개발(사업) 매출 2조원 달성</li>
                                    <li>혁신경영 내재화</li>
                                    <li>최고 수준의 고객만족도 유지</li>
                                </ul>
                            </li>
                        </ul>
                    </figcaption>
                </figure>
            </div>
        </section>
        <?php require_once($_SERVER['DOCUMENT_ROOT'].'/inc/side_quick.php'); ?>
    </main>
    
    <?php require_once($_SERVER['DOCUMENT_ROOT'].'/inc/quick.php'); ?>
    <?php require_once($_SERVER['DOCUMENT_ROOT'].'/inc/footer.php'); ?>
    <?php require_once($_SERVER['DOCUMENT_ROOT'].'/inc/docfoot.php'); ?>
</body>
</html>