<?php require_once($_SERVER['DOCUMENT_ROOT'].'/inc/dochead.php'); ?>
<link rel="stylesheet" href="/assets/css/sub.css">
<link rel="stylesheet" href="/assets/css/parcelout.css">
</head>
<body>
    <?php require_once($_SERVER['DOCUMENT_ROOT'].'/inc/header.php'); ?>
    
    <!-- Content -->
    <main id="content" class="sub parcelout"> <!-- 폴더별 class -->
        <section class="sub-content common-list parcelout-list"> <!-- 페이지명 class -->
            <div class="section-header">
                <h3 class="depth-title">분양안내</h3>
                <h4 class="title">용지분양</h4>
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
                                    용지분양
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
                <div class="box">
                    <div class="content">
                        <strong>용지분양공고</strong>
                        <p>평택도시공사에서 추진하는 용지분양공고 자료입니다.</p>
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
                                <th scope="col">번호</th>
                                <th scope="col" class="subject">공고명</th>
                                <th scope="col">공고일</th>
                                <th scope="col">마감일</th>
                                <th scope="col" class="state">진행상태</th>
                                <th scope="col">조회</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>10</td>
                                <td class="subject"><a href="/parcelout/parcelout_view.php">포승(2)일반산업단지 지원시설용지 수의계약 공고</a></td>
                                <td>2018-05-23</td>
                                <td>2019-12-31</td>
                                <td class="state">
                                    <span class="ongoing">진행중</span>
                                </td>
                                <td>1619</td>
                            </tr>
                            <tr>
                                <td>9</td>
                                <td class="subject"><a href="/parcelout/parcelout_view.php">포승(2)일반산업단지 지원시설용지 수의계약 공고</a></td>
                                <td>2018-05-23</td>
                                <td>2019-12-31</td>
                                <td class="state">
                                    <span class="end">신청마감</span>
                                </td>
                                <td>1619</td>
                            </tr>
                            <tr>
                                <td>8</td>
                                <td class="subject"><a href="/parcelout/parcelout_view.php">포승(2)일반산업단지 지원시설용지 수의계약 공고</a></td>
                                <td>2018-05-23</td>
                                <td>2019-12-31</td>
                                <td class="state">
                                    <span class="end">신청마감</span>
                                </td>
                                <td>1619</td>
                            </tr>
                            <tr>
                                <td>7</td>
                                <td class="subject"><a href="/parcelout/parcelout_view.php">포승(2)일반산업단지 지원시설용지 수의계약 공고</a></td>
                                <td>2018-05-23</td>
                                <td>2019-12-31</td>
                                <td class="state">
                                    <span class="end">신청마감</span>
                                </td>
                                <td>1619</td>
                            </tr>
                            <tr>
                                <td>6</td>
                                <td class="subject"><a href="/parcelout/parcelout_view.php">포승(2)일반산업단지 지원시설용지 수의계약 공고</a></td>
                                <td>2018-05-23</td>
                                <td>2019-12-31</td>
                                <td class="state">
                                    <span class="end">신청마감</span>
                                </td>
                                <td>1619</td>
                            </tr>
                            <tr>
                                <td>5</td>
                                <td class="subject"><a href="/parcelout/parcelout_view.php">포승(2)일반산업단지 지원시설용지 수의계약 공고</a></td>
                                <td>2018-05-23</td>
                                <td>2019-12-31</td>
                                <td class="state">
                                    <span class="end">신청마감</span>
                                </td>
                                <td>1619</td>
                            </tr>
                            <tr>
                                <td>4</td>
                                <td class="subject"><a href="/parcelout/parcelout_view.php">포승(2)일반산업단지 지원시설용지 수의계약 공고</a></td>
                                <td>2018-05-23</td>
                                <td>2019-12-31</td>
                                <td class="state">
                                    <span class="end">신청마감</span>
                                </td>
                                <td>1619</td>
                            </tr>
                            <tr>
                                <td>3</td>
                                <td class="subject"><a href="/parcelout/parcelout_view.php">포승(2)일반산업단지 지원시설용지 수의계약 공고</a></td>
                                <td>2018-05-23</td>
                                <td>2019-12-31</td>
                                <td class="state">
                                    <span class="end">신청마감</span>
                                </td>
                                <td>1619</td>
                            </tr>
                            <tr>
                                <td>2</td>
                                <td class="subject"><a href="/parcelout/parcelout_view.php">포승(2)일반산업단지 지원시설용지 수의계약 공고</a></td>
                                <td>2018-05-23</td>
                                <td>2019-12-31</td>
                                <td class="state">
                                    <span class="end">신청마감</span>
                                </td>
                                <td>1619</td>
                            </tr>
                            <tr>
                                <td>1</td>
                                <td class="subject"><a href="/parcelout/parcelout_view.php">포승(2)일반산업단지 지원시설용지 수의계약 공고</a></td>
                                <td>2018-05-23</td>
                                <td>2019-12-31</td>
                                <td class="state">
                                    <span class="end">신청마감</span>
                                </td>
                                <td>1619</td>
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