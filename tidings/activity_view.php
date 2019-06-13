<?php require_once($_SERVER['DOCUMENT_ROOT'].'/inc/dochead.php'); ?>
<link rel="stylesheet" href="/assets/css/sub.css">
<link rel="stylesheet" href="/assets/css/tidings.css">
</head>
<body>
    <?php require_once($_SERVER['DOCUMENT_ROOT'].'/inc/header.php'); ?>
    
    <!-- Content -->
    <main id="content" class="sub tidings"> <!-- 폴더별 class -->
        <section class="sub-content cyber activity-view"> <!-- 페이지명 class -->
            <div class="section-header">
                <div class="page-path">
                    <h3>PUC소식</h3>
                    <ol class="breadcrumb">
                        <li>PUC소식</li>
                        <li>사이버감사실</li>
                    </ol>
                </div>
                <h4 class="title">사이버감사실</h4>
            </div>
            <div class="section-content">
                <nav class="dropdown nav-tab">
                    <button class="btn btn-secondary dropdown-toggle" type="button" id="nav-tab" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        사이버감사실
                    </button>
                    <div class="dropdown-menu" aria-labelledby="nav-tab">
                        <ul>
                            <li><a href="/tidings/ethical.php">PUC 윤리경영</a></li>
                            <li><a href="/tidings/charter.php">윤리규범</a></li>
                            <li><a href="/tidings/clear.php">사이버감사실</a></li>
                            <li class="active"><a href="/tidings/activity_list.php">사회공헌활동</a></li>
                            <li><a href="/tidings/human.php">인권경영</a></li>
                            <li><a href="/tidings/upright_list.php">PUC 청렴소식지</a></li>
                        </ul>
                    </div>
                </nav>
                <div class="box">
                    <p>우리공사는 지역 사회의 한 일원으로서, 사회공헌활동을 몸소 실천하고 있습니다.</p>
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
                        <figure>
                            <img src="/assets/images/tidings/img_photo_list.jpg" class="img-fluid" alt="">
                        </figure>
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
                        <a href="/tidings/activity_list.php" class="btn btn-default" role="button">목차</a>
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