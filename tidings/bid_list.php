<?php require_once($_SERVER['DOCUMENT_ROOT'].'/inc/dochead.php'); ?>
<link rel="stylesheet" href="/assets/css/sub.css">
<link rel="stylesheet" href="/assets/css/tidings.css">
</head>
<body>
    <?php require_once($_SERVER['DOCUMENT_ROOT'].'/inc/header.php'); ?>
    
    <!-- Content -->
    <main id="content" class="sub tidings"> <!-- 폴더별 class -->
        <section class="sub-content common-list bid-list"> <!-- 페이지명 class -->
            <div class="section-header">
                <h3 class="depth-title">PUC 소식</h3>
                <h4 class="title">입찰정보</h4>
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
                                    입찰정보
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
                        <strong>평택도시공사의 입찰은 정직과 신용을 먼저 생각합니다.</strong>
                        <p>정직하고 깨끗한 입찰로 시민들을 먼저 생각하는 평택도시공사가 되겠습니다.</p>
                    </div>
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
                <div class="table-wrap">
                    <table class="table list-type1">
                        <thead>
                            <tr>
                                <th scope="col" class="num">번호</th>
                                <th scope="col" class="subject">제목</th>
                                <th scope="col">작성자</th>
                                <th scope="col">등록일</th>
                                <th scope="col">조회</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td class="num">10</td>
                                <td class="subject"><a href="/tidings/bid_view.php">포승(2)일반산업단지 지원시설용지 수의계약 공고<i class="icon-floppy"><span class="sr-only">첨부파일</span></i></a></td>
                                <td>평택도시공사</td>
                                <td>2016-04-12</td>
                                <td>354</td>
                            </tr>
                            <tr>
                                <td class="num">9</td>
                                <td class="subject"><a href="/tidings/bid_view.php">포승(2)일반산업단지 지원시설용지 수의계약 공고<i class="icon-floppy"><span class="sr-only">첨부파일</span></i></a></td>
                                <td>평택도시공사</td>
                                <td>2016-04-12</td>
                                <td>354</td>
                            </tr>
                            <tr>
                                <td class="num">8</td>
                                <td class="subject"><a href="/tidings/bid_view.php">포승(2)일반산업단지 지원시설용지 수의계약 공고<i class="icon-floppy"><span class="sr-only">첨부파일</span></i></a></td>
                                <td>평택도시공사</td>
                                <td>2016-04-12</td>
                                <td>354</td>
                            </tr>
                            <tr>
                                <td class="num">7</td>
                                <td class="subject"><a href="/tidings/bid_view.php">포승(2)일반산업단지 지원시설용지 수의계약 공고<i class="icon-floppy"><span class="sr-only">첨부파일</span></i></a></td>
                                <td>평택도시공사</td>
                                <td>2016-04-12</td>
                                <td>354</td>
                            </tr>
                            <tr>
                                <td class="num">6</td>
                                <td class="subject"><a href="/tidings/bid_view.php">포승(2)일반산업단지 지원시설용지 수의계약 공고</a></td>
                                <td>평택도시공사</td>
                                <td>2016-04-12</td>
                                <td>354</td>
                            </tr>
                            <tr>
                                <td class="num">5</td>
                                <td class="subject"><a href="/tidings/bid_view.php">포승(2)일반산업단지 지원시설용지 수의계약 공고</a></td>
                                <td>평택도시공사</td>
                                <td>2016-04-12</td>
                                <td>354</td>
                            </tr>
                            <tr>
                                <td class="num">4</td>
                                <td class="subject"><a href="/tidings/bid_view.php">포승(2)일반산업단지 지원시설용지 수의계약 공고</a></td>
                                <td>평택도시공사</td>
                                <td>2016-04-12</td>
                                <td>354</td>
                            </tr>
                            <tr>
                                <td class="num">3</td>
                                <td class="subject"><a href="/tidings/bid_view.php">포승(2)일반산업단지 지원시설용지 수의계약 공고</a></td>
                                <td>평택도시공사</td>
                                <td>2016-04-12</td>
                                <td>354</td>
                            </tr>
                            <tr>
                                <td class="num">2</td>
                                <td class="subject"><a href="/tidings/bid_view.php">포승(2)일반산업단지 지원시설용지 수의계약 공고</a></td>
                                <td>평택도시공사</td>
                                <td>2016-04-12</td>
                                <td>354</td>
                            </tr>
                            <tr>
                                <td class="num">1</td>
                                <td class="subject"><a href="/tidings/bid_view.php">포승(2)일반산업단지 지원시설용지 수의계약 공고</a></td>
                                <td>평택도시공사</td>
                                <td>2016-04-12</td>
                                <td>354</td>
                            </tr>
                        </tbody>
                    </table>
                </div>
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
        
    </main>
    
    <?php require_once($_SERVER['DOCUMENT_ROOT'].'/inc/quick.php'); ?>
    <?php require_once($_SERVER['DOCUMENT_ROOT'].'/inc/footer.php'); ?>
    <?php require_once($_SERVER['DOCUMENT_ROOT'].'/inc/docfoot.php'); ?>
</body>
</html>