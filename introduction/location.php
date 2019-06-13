<?php require_once($_SERVER['DOCUMENT_ROOT'].'/inc/dochead.php'); ?>
<link rel="stylesheet" href="/assets/css/sub.css">
<link rel="stylesheet" href="/assets/css/introcution.css">
</head>
<body>
    <?php require_once($_SERVER['DOCUMENT_ROOT'].'/inc/header.php'); ?>
    
    <!-- Content -->
    <main id="content" class="sub location"> <!-- 폴더별 class -->
        <section class="sub-content group"> <!-- 페이지명 class -->
            <div class="section-header">
                <div class="page-path">
                    <h3>공사소개</h3>
                    <ol class="breadcrumb">
                        <li>공사소개</li>
                        <li>찾아오시는 길</li>
                    </ol>
                </div>
                <h4 class="title">찾아오시는 길</h4>
            </div>
            <div class="section-content">
                <nav class="dropdown nav-tab">
                    <button class="btn btn-secondary dropdown-toggle" type="button" id="nav-tab" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        찾아오시는 길
                    </button>
                    <div class="dropdown-menu" aria-labelledby="nav-tab">
                        <ul>
                            <li><a href="/introduction/greeting.php">CEO인사말</a></li>
                            <li><a href="/introduction/ci.php">공사 CI</a></li>
                            <li><a href="/introduction/vision.php">비전과 미션</a></li>
                            <li><a href="/introduction/general_status.php">일반현황</a></li>
                            <li><a href="/introduction/management.php">경영공시</a></li>
                            <li><a href="/introduction/group.php">조직 및 업무</a></li>
                            <li class="active"><a href="/introduction/location.php">찾아오시는 길</a></li>
                        </ul>
                    </div>
                </nav>
                <article>
                    <div class="map">
                        <!--지도 노출영역-->
                        <img src="/assets/images/introduction/img_location.png" class="img-fluid" alt="오시는길 지도">
                    </div>
                    <div class="details">
                        <dl>
                            <dt class="addr">주소</dt>
                            <dd><address>17725 경기도 평택시 도일유통길 25 (도일동)</address></dd>
                            <dt class="tel">TEL</dt>
                            <dd><a href="tel:03180538800">031-8053-8800</a></dd>
                            <dt class="fax">FAX</dt>
                            <dd>031-692-4337</dd>
                            <dt class="bus">버스안내</dt>
                            <dd>7번, 7-3번, 7-4번 7-5번, 7-6번, 7-7번 (평택종합물류단지 앞 하차)</dd>
                        </dl>
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