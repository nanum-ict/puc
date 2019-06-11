<?php require_once($_SERVER['DOCUMENT_ROOT'].'/inc/dochead.php'); ?>
<link rel="stylesheet" href="/assets/css/sub.css">
<link rel="stylesheet" href="/assets/css/tidings.css">
</head>
<body>
    <?php require_once($_SERVER['DOCUMENT_ROOT'].'/inc/header.php'); ?>
    
    <!-- Content -->
    <main id="content" class="sub tidings"> <!-- 폴더별 class -->
        <section class="sub-content common-list pr-list"> <!-- 페이지명 class -->
            <div class="section-header">
                <div class="page-path">
                    <h3>PUC소식</h3>
                    <ol class="breadcrumb">
                        <li>PUC소식</li>
                        <li>보도자료</li>
                    </ol>
                </div>
                <h4 class="title">보도자료</h4>
            </div>
            <div class="section-content">
                <div class="box">
                    <strong>평택도시공사의 홍보와 보도관련 자료입니다.</strong>
                    <p>평택의 홍보와 새로운 도시건설에 앞장서는 평택도시공사가 되겠습니다.</p>
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
                                <td class="subject"><a href="/tidings/pr_view.php">포승(2)일반산업단지 지원시설용지 수의계약 공고</a></td>
                                <td>평택도시공사</td>
                                <td>2016-04-12</td>
                                <td>354</td>
                            </tr>
                            <tr>
                                <td class="num">9</td>
                                <td class="subject"><a href="/tidings/pr_view.php">포승(2)일반산업단지 지원시설용지 수의계약 공고</a></td>
                                <td>평택도시공사</td>
                                <td>2016-04-12</td>
                                <td>354</td>
                            </tr>
                            <tr>
                                <td class="num">8</td>
                                <td class="subject"><a href="/tidings/pr_view.php">포승(2)일반산업단지 지원시설용지 수의계약 공고</a></td>
                                <td>평택도시공사</td>
                                <td>2016-04-12</td>
                                <td>354</td>
                            </tr>
                            <tr>
                                <td class="num">7</td>
                                <td class="subject"><a href="/tidings/pr_view.php">포승(2)일반산업단지 지원시설용지 수의계약 공고</a></td>
                                <td>평택도시공사</td>
                                <td>2016-04-12</td>
                                <td>354</td>
                            </tr>
                            <tr>
                                <td class="num">6</td>
                                <td class="subject"><a href="/tidings/pr_view.php">포승(2)일반산업단지 지원시설용지 수의계약 공고</a></td>
                                <td>평택도시공사</td>
                                <td>2016-04-12</td>
                                <td>354</td>
                            </tr>
                            <tr>
                                <td class="num">5</td>
                                <td class="subject"><a href="/tidings/pr_view.php">포승(2)일반산업단지 지원시설용지 수의계약 공고</a></td>
                                <td>평택도시공사</td>
                                <td>2016-04-12</td>
                                <td>354</td>
                            </tr>
                            <tr>
                                <td class="num">4</td>
                                <td class="subject"><a href="/tidings/pr_view.php">포승(2)일반산업단지 지원시설용지 수의계약 공고</a></td>
                                <td>평택도시공사</td>
                                <td>2016-04-12</td>
                                <td>354</td>
                            </tr>
                            <tr>
                                <td class="num">3</td>
                                <td class="subject"><a href="/tidings/pr_view.php">포승(2)일반산업단지 지원시설용지 수의계약 공고</a></td>
                                <td>평택도시공사</td>
                                <td>2016-04-12</td>
                                <td>354</td>
                            </tr>
                            <tr>
                                <td class="num">2</td>
                                <td class="subject"><a href="/tidings/pr_view.php">포승(2)일반산업단지 지원시설용지 수의계약 공고</a></td>
                                <td>평택도시공사</td>
                                <td>2016-04-12</td>
                                <td>354</td>
                            </tr>
                            <tr>
                                <td class="num">1</td>
                                <td class="subject"><a href="/tidings/pr_view.php">포승(2)일반산업단지 지원시설용지 수의계약 공고</a></td>
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
        <?php require_once($_SERVER['DOCUMENT_ROOT'].'/inc/side_quick.php'); ?>
    </main>
    
    <?php require_once($_SERVER['DOCUMENT_ROOT'].'/inc/quick.php'); ?>
    <?php require_once($_SERVER['DOCUMENT_ROOT'].'/inc/footer.php'); ?>
    <?php require_once($_SERVER['DOCUMENT_ROOT'].'/inc/docfoot.php'); ?>
</body>
</html>