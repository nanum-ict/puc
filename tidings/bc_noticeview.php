<?php require_once($_SERVER['DOCUMENT_ROOT'].'/inc/dochead.php'); ?>
<link rel="stylesheet" href="/assets/css/sub.css">
<link rel="stylesheet" href="/assets/css/tidings.css">
</head>
<body>
    <?php require_once($_SERVER['DOCUMENT_ROOT'].'/inc/header.php'); ?>
    
    <!-- Content -->
    <main id="content" class="sub tidings"> <!-- 폴더별 class -->
        <section class="sub-content common-view bc-noticeview"> <!-- 페이지명 class -->
            <div class="section-header">
                <h3 class="depth-title">PUC 소식</h3>
                <h4 class="title">브레인시티 공지사항</h4>
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
                                    브레인시티 공지사항
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
                <div class="box">
                    <div class="content">
                        <strong>브레인시티의 모든 소식을 알려드립니다.</strong>
                        <p>언제나 시민과 더불어 함께하는 평택도시공사가 되겠습니다.</p>
                    </div>
                </div>
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
                        <a href="/tidings/bc_noticelist.php" class="btn btn-default" role="button">목차</a>
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