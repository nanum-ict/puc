<?php require_once($_SERVER['DOCUMENT_ROOT'].'/inc/dochead.php'); ?>
<link rel="stylesheet" href="/assets/css/sub.css">
<link rel="stylesheet" href="/assets/css/tidings.css">
</head>
<body>
    <?php require_once($_SERVER['DOCUMENT_ROOT'].'/inc/header.php'); ?>
    
    <!-- Content -->
    <main id="content" class="sub tidings"> <!-- 폴더별 class -->
        <section class="sub-content cyber photo-list"> <!-- 페이지명 class -->
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
                            <li class="active"><a href="/tidings/photo_list.php">사회공헌활동</a></li>
                            <li><a href="/tidings/human.php">인권경영</a></li>
                            <li><a href="/tidings/upright_list.php">PUC 청렴소식지</a></li>
                        </ul>
                    </div>
                </nav>
                <div class="box">
                    <p>우리공사는 지역 사회의 한 일원으로서, 사회공헌활동을 몸소 실천하고 있습니다.</p>
                </div>
                <div class="search-form">
                    <form action="#">
                        <div class="form-group">
                            <input type="text" id="board-search" class="form-control" placeholder="검색어를 입력해 주세요.">
                            <label for="board-search" class="sr-only">게시판 검색</label>
                            <button type="submit" class="btn btn-search">
                                <i class="icon-search">
                                    <span class="sr-only">검색버튼</span>
                                </i>
                            </button>
                        </div>
                    </form>
                </div>
                
                <article class="list-content">
                    <ul>
                        <li>
                            <a href="#">
                                <figure>
                                    <img src="/assets/images/tidings/img_photo_list.jpg" class="img-fluid" alt="">
                                </figure>
                                <div class="details">
                                    <h6>추석맞이 일제 대청소 실시</h6>
                                    <small>추석맞이 일제 대청소 실시</small>
                                    <ul class="infor-list">
                                        <li>
                                            <dl>
                                                <dt class="date">일자</dt>
                                                <dd>asdf</dd>
                                            </dl>
                                        </li>
                                        <li>
                                            <dl>
                                                <dt class="place">장소</dt>
                                                <dd>asdf</dd>
                                            </dl>
                                        </li>
                                        <li>
                                            <dl>
                                                <dt class="personnel">참여인원</dt>
                                                <dd>asdf</dd>
                                            </dl>
                                        </li>
                                        <li>
                                            <dl>
                                                <dt class="content">내용</dt>
                                                <dd>
                                                    <p>민족명절 추석을 맞이하여 도로에서 사람들이 쓰레기를 줍고 있다 민족명절 추석을 맞이하여 도로에서 사람들이 쓰레기를 줍고 있다 민족명절 추석을 맞이하여 도로에서 사람들이 쓰레기를 줍고 있다</p>
                                                </dd>
                                            </dl>
                                        </li>
                                    </ul>
                                </div>
                            </a>
                        </li>
                        <li></li>
                        <li></li>
                        <li></li>
                        <li></li>
                        <li></li>
                    </ul>
                </article>
                
                <nav class="paging">
                    <ul class="pagination">
                        <li class="prev">
                            <a href="#" aria-label="Previous">
                                <i class="icon-left-open-big">
                                    <span class="sr-only">이전 페이지 이동</span>
                                </i>
                            </a>
                        </li>
                        <li class="active"><a href="#">1</a></li>
                        <li><a href="#">2</a></li>
                        <li><a href="#">3</a></li>
                        <li><a href="#">4</a></li>
                        <li><a href="#">5</a></li>
                        <li class="next">
                            <a href="#" aria-label="Next">
                                <i class="icon-right-open-big">
                                    <span class="sr-only">다음 페이지 이동</span>
                                </i>
                            </a>
                        </li>
                    </ul>
                </nav>
            </div>
        </section>
        <?php require_once($_SERVER['DOCUMENT_ROOT'].'/inc/side_quick.php'); ?>
    </main>
    
    <?php require_once($_SERVER['DOCUMENT_ROOT'].'/inc/quick.php'); ?>
    <?php require_once($_SERVER['DOCUMENT_ROOT'].'/inc/footer.php'); ?>
    <?php require_once($_SERVER['DOCUMENT_ROOT'].'/inc/docfoot.php'); ?>
</body>
</html>