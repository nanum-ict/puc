<?php require_once($_SERVER['DOCUMENT_ROOT'].'/inc/dochead.php'); ?>
<link rel="stylesheet" href="/assets/css/sub.css">
<link rel="stylesheet" href="/assets/css/introcution.css">
</head>
<body>
    <?php require_once($_SERVER['DOCUMENT_ROOT'].'/inc/header.php'); ?>
    
    <!-- Content -->
    <main id="content" class="sub introcution"> <!-- 폴더별 class -->
        <section class="sub-content greeting"> <!-- 페이지명 class -->
            <div class="section-header">
                <div class="page-path">
                    <h3>공사소개</h3>
                    <ol class="breadcrumb">
                        <li>공사소개</li>
                        <li>CEO인사말</li>
                    </ol>
                </div>
                <h4 class="title">CEO인사말</h4>
            </div>
            <div class="section-content">
                <nav class="dropdown nav-tab">
                    <button class="btn btn-secondary dropdown-toggle" type="button" id="nav-tab" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        CEO인사말
                    </button>
                    <div class="dropdown-menu" aria-labelledby="nav-tab">
                        <ul>
                            <li class="active"><a href="/introduction/greeting.php">CEO인사말</a></li>
                            <li><a href="/introduction/ci.php">공사 CI</a></li>
                            <li><a href="/introduction/vision.php">비전과 미션</a></li>
                            <li><a href="/introduction/general_status.php">일반현황</a></li>
                            <li><a href="/introduction/management.php">경영공시</a></li>
                            <li><a href="/introduction/group.php">조직 및 업무</a></li>
                            <li><a href="/introduction/location.php">찾아오시는 길</a></li>
                        </ul>
                    </div>
                </nav>
                <article>
                    <figure>
                        <img src="/assets/images/introduction/img_ceo.jpg" class="img-fluid" alt="평택도시공사 대표 김재수">
                        <figcaption>
                            <dl>
                                <dt>평택도시공사 대표</dt>
                                <dd>김재수</dd>
                            </dl>
                        </figcaption>
                    </figure>
                    <div class="article-content">
                        <h5>평택시는 무한한 잠재력과 가능성, 각종 우수한<br> 개발여건을 발판으로 <strong>"시민중심 새로운 평택"</strong> 으로<br> 발돋움하고 있습니다.</h5>
                        <hr>
                        <p>
                            이에 우리공사는 평택을 더 살기 좋은 도시로 만들기 위하여,<br>
                            그리고 시민여러분들의 행복한 삶을 위하여 개발사업 및 대행사업을 활발히 전개해<br>
                            나가고 있습니다. 택지개발과 주택사업으로 주거의 안정을 도모하고,<br>
                            산업단지를 조성·공급하여 기업하기 좋은 도시를 만들어<br>
                            지역경제 발전에 힘쓰고 있습니다. 아울러 새로운 환경속에서 삶의 질을 높여<br>
                            시민 모두가 웰빙 생활기반을 갖출수 있도록 중심적인 역할을 하도록 노력할것입니다.<br class="line-break"><br class="line-break">
                            대행사업으로는 교통약자들의 이동편의를 위한 교통약자 이동지원센터,<br>
                            어린이들에게 교통안전을 교육하는 어린이교통공원 및 공영주차장 운영관리 업무를<br>
                            시로부터 수탁받아 시민 여러분과 더 가까운 현장에서 양질의 서비스를 제공하는<br>
                            공사가 되도록 노력할 것입니다.<br class="line-break"><br class="line-break">
                            평택도시공사 임·직원은 급변하는 사회 환경속에서도 모든일에 매순간 최선을 다하여<br>
                            &lt;시민의 꿈과 행복을 실현하는 열린 혁신리더 평택도시공사&gt;가 되도록 <br>
                            책임과 윤리경영으로 최선을 다할것입니다.<br>
                            여러분의 적극적인 관심과 아낌없는 성원을 부탁드립니다.<br class="line-break"><br class="line-break">
                            감사합니다.
                        </p>
                    </div>
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