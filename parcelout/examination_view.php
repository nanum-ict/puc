<?php require_once($_SERVER['DOCUMENT_ROOT'].'/inc/dochead.php'); ?>
<link rel="stylesheet" href="/assets/css/sub.css">
<link rel="stylesheet" href="/assets/css/parcelout.css">
</head>
<body>
    <?php require_once($_SERVER['DOCUMENT_ROOT'].'/inc/header.php'); ?>
    
    <!-- Content -->
    <main id="content" class="sub parcelout"> <!-- 폴더별 class -->
        <section class="sub-content examination-view"> <!-- 페이지명 class -->
            <div class="section-header">
                <h3 class="depth-title">분양안내</h3>
                <h4 class="title">보상</h4>
                <div class="page-path">
                    <ol class="breadcrumb">
                        <li>
                            <a href="/">
                                <i class="icon-home"><span class="sr-only">메인으로 이동</span></i>
                            </a>
                        </li>
                        <li>분양안내</li>
                        <li>
                            <div class="depth-2">
                                <button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                    보상
                                </button>
                                <div class="dropdown-menu">
                                    <a href="/parcelout/parcelout_list.php">용지분양</a>
                                    <a href="/parcelout/ownership.php">세금안내 및 기타</a>
                                    <a href="/parcelout/examination_list.php">보상</a>
                                </div>
                            </div>
                        </li>
                    </ol>
                </div>
            </div>
            <div class="section-content">
                <nav class="dropdown nav-tab">
                    <button class="btn btn-secondary dropdown-toggle" type="button" id="nav-tab" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        고시공고
                    </button>
                    <div class="dropdown-menu" aria-labelledby="nav-tab">
                        <ul>
                            <li class="active"><a href="/parcelout/examination_list.php">고시공고</a></li>
                            <li><a href="/parcelout/compensation.php">보상안내</a></li>
                            <li><a href="/parcelout/request_write.php">분묘신청접수</a></li>
                            <li><a href="/parcelout/faq_list.php">보상FAQ</a></li>
                        </ul>
                    </div>
                </nav>
                <div class="board-view">
                    <div class="view-head">
                        <h5 class="title">주차요금 미납차량 공시 송달 공고 (독촉분_2019_2월)</h5>
                        <ul class="information">
                            <li>
                                <dl>
                                    <dt>작성자</dt>
                                    <dd>평택도시공사</dd>
                                </dl>
                            </li>
                            <li>
                                <dl>
                                    <dt>등록일</dt>
                                    <dd>2016-04-12</dd>
                                </dl>
                            </li>
                            <li>
                                <dl>
                                    <dt>조회</dt>
                                    <dd>355</dd>
                                </dl>
                            </li>
                        </ul>
                    </div>
                    <div class="view-content">
                        content <br>
                        content <br>
                        content <br>
                        content
                    </div>
                    <dl class="attach">
                        <dt>첨부파일</dt>
                        <dd><a href="#">주차요금 미납차량 공시송달 명단 (독촉분_2019_2월).xls</a></dd>
                    </dl>
                    <div class="btn-area">
                        <a href="/parcelout/examination_list.php" class="btn btn-default" role="button">목차</a>
                    </div>
                    <ul class="page-move">
                        <li class="prev">
                            <dl>
                                <dt>이전글</dt>
                                <dd><a href="#">주차요금 미납차량 공시송달 공고 (2차분_2019_2월)</a></dd>
                            </dl>
                        </li>
                        <li class="next">
                            <dl>
                                <dt>다음글</dt>
                                <dd><a href="#">주차요금 미납차량 공시송달 공고 (2차분_2019_2월)</a></dd>
                            </dl>
                        </li>
                    </ul>
                </div>
            </div>
        </section>
        
        
    </main>
    
    <?php require_once($_SERVER['DOCUMENT_ROOT'].'/inc/quick.php'); ?>
    <?php require_once($_SERVER['DOCUMENT_ROOT'].'/inc/footer.php'); ?>
    <?php require_once($_SERVER['DOCUMENT_ROOT'].'/inc/docfoot.php'); ?>
</body>
</html>