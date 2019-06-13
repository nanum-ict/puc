<?php require_once($_SERVER['DOCUMENT_ROOT'].'/inc/dochead.php'); ?>
<link rel="stylesheet" href="/assets/css/sub.css">
<link rel="stylesheet" href="/assets/css/introcution.css">
</head>
<body>
    <?php require_once($_SERVER['DOCUMENT_ROOT'].'/inc/header.php'); ?>
    
    <!-- Content -->
    <main id="content" class="sub introcution"> <!-- 폴더별 class -->
        <section class="sub-content group"> <!-- 페이지명 class -->
            <div class="section-header">
                <div class="page-path">
                    <h3>공사소개</h3>
                    <ol class="breadcrumb">
                        <li>공사소개</li>
                        <li>조직 및 업무</li>
                    </ol>
                </div>
                <h4 class="title">조직 및 업무</h4>
            </div>
            <div class="section-content">
                <nav class="dropdown nav-tab">
                    <button class="btn btn-secondary dropdown-toggle" type="button" id="nav-tab" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        조직 및 업무
                    </button>
                    <div class="dropdown-menu" aria-labelledby="nav-tab">
                        <ul>
                            <li><a href="/introduction/greeting.php">CEO인사말</a></li>
                            <li><a href="/introduction/ci.php">공사 CI</a></li>
                            <li><a href="/introduction/vision.php">비전과 미션</a></li>
                            <li><a href="/introduction/general_status.php">일반현황</a></li>
                            <li><a href="/introduction/management.php">경영공시</a></li>
                            <li class="active"><a href="/introduction/group.php">조직 및 업무</a></li>
                            <li><a href="/introduction/location.php">찾아오시는 길</a></li>
                        </ul>
                    </div>
                </nav>
                <figure>
                    <img src="/assets/images/introduction/img_group_xs.jpg" class="img-fluid d-md-none" alt="조직도">
                    <img src="/assets/images/introduction/img_group_md.jpg" class="img-fluid d-none d-md-block" alt="조직도">
                    <figcaption class="sr-only">
                        <ol>
                            <li>
                                <h1>사장</h1>
                                <ol>
                                    <li><h2>이사회</h2></li>
                                    <li><h2>감사</h2></li>
                                    <li><h2>안전감사실</h2></li>
                                    <li>
                                        <h2>본부장</h2>
                                        <ul>
                                            <li>경영기획서</li>
                                            <li>재무회계처</li>
                                            <li>사업기획처</li>
                                            <li>건설사업처</li>
                                            <li>분양보상처</li>
                                            <li>교통사업처</li>
                                        </ul>
                                    </li>
                                </ol>
                            </li>
                        </ol>
                    </figcaption>
                </figure>
                <div class="box">
                    <p>평택도시공사는 모든 고객께서 친절하고 공정한 서비스를 받으실수 있도록 노력하겠습니다.</p>
                    <ul>
                        <li>TEL. <a href="tel:03180538800">031-8053-8800</a></li>
                        <li>FAX. 031-692-4337</li>
                    </ul>
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