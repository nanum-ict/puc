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
                <h3 class="depth-title">공사소개</h3>
                <h4 class="title">찾아오시는 길</h4>
                <div class="page-path">
                    <ol class="breadcrumb">
                        <li>
                            <a href="/">
                                <i class="icon-home"><span class="sr-only">메인으로 이동</span></i>
                            </a>
                        </li>
                        <li>공사소개</li>
                        <li>
                            <div class="depth-2">
                                <button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                    찾아오시는 길
                                </button>
                                <div class="dropdown-menu">
                                    <a href="/introduction/greeting.php">CEO 인사말</a>
                                    <a href="/introduction/ci.php">공사 CI</a>
                                    <a href="/introduction/vision.php">비전과 미션</a>
                                    <a href="/introduction/general_status.php">일반현황</a>
                                    <a href="/introduction/management.php">경영공시</a>
                                    <a href="/introduction/group.php">조직 및 업무</a>
                                    <a href="/introduction/location.php">찾아오시는 길</a>
                                </div>
                            </div>
                        </li>
                    </ol>
                </div>
            </div>
            <div class="section-content">
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
        
    </main>
    
    <?php require_once($_SERVER['DOCUMENT_ROOT'].'/inc/quick.php'); ?>
    <?php require_once($_SERVER['DOCUMENT_ROOT'].'/inc/footer.php'); ?>
    <?php require_once($_SERVER['DOCUMENT_ROOT'].'/inc/docfoot.php'); ?>
</body>
</html>