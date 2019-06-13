<?php require_once($_SERVER['DOCUMENT_ROOT'].'/inc/dochead.php'); ?>
<link rel="stylesheet" href="/assets/css/sub.css">
<link rel="stylesheet" href="/assets/css/tidings.css">
</head>
<body>
    <?php require_once($_SERVER['DOCUMENT_ROOT'].'/inc/header.php'); ?>
    
    <!-- Content -->
    <main id="content" class="sub tidings"> <!-- 폴더별 class -->
        <section class="sub-content common-view notice-view"> <!-- 페이지명 class -->
            <div class="section-header">
                <div class="page-path">
                    <h3>PUC소식</h3>
                    <ol class="breadcrumb">
                        <li>PUC소식</li>
                        <li>공지사항</li>
                    </ol>
                </div>
                <h4 class="title">공지사항</h4>
            </div>
            <div class="section-content">
                <div class="box">
                    <strong>평택도시공사의 모든 소식을 알려드립니다.</strong>
                    <p>언제나 시민과 더불어 함께하는 평택도시공사가 되겠습니다.</p>
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
                        <a href="/tidings/notice_list.php" class="btn btn-default" role="button">목차</a>
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
        <?php require_once($_SERVER['DOCUMENT_ROOT'].'/inc/side_quick.php'); ?>
    </main>
    
    <?php require_once($_SERVER['DOCUMENT_ROOT'].'/inc/quick.php'); ?>
    <?php require_once($_SERVER['DOCUMENT_ROOT'].'/inc/footer.php'); ?>
    <?php require_once($_SERVER['DOCUMENT_ROOT'].'/inc/docfoot.php'); ?>
</body>
</html>