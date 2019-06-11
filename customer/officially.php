<?php require_once($_SERVER['DOCUMENT_ROOT'].'/inc/dochead.php'); ?>
<link rel="stylesheet" href="/assets/css/sub.css">
<link rel="stylesheet" href="/assets/css/customer.css">
</head>
<body>
    <?php require_once($_SERVER['DOCUMENT_ROOT'].'/inc/header.php'); ?>
    
    <!-- Content -->
    <main id="content" class="sub customer"> <!-- 폴더별 class -->
        <section class="sub-content officially"> <!-- 페이지명 class -->
            <div class="section-header">
                <div class="page-path">
                    <h3>고객광장</h3>
                    <ol class="breadcrumb">
                        <li>고객광장</li>
                        <li>사전정보 공표</li>
                    </ol>
                </div>
                <h4 class="title">사전정보 공표</h4>
            </div>
            <div class="section-content">
                <nav class="dropdown nav-tab">
                    <button class="btn btn-secondary dropdown-toggle" type="button" id="nav-tab" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        사전정보 공표
                    </button>
                    <div class="dropdown-menu" aria-labelledby="nav-tab">
                        <ul>
                            <li><a href="/customer/outline.php">정보공개제도 개요</a></li>
                            <li><a href="/customer/claim.php">청구권자</a></li>
                            <li><a href="/customer/procedure.php">정보공개 청구 절차</a></li>
                            <li><a href="/customer/nondisclosure.php">비공개대상 정보</a></li>
                            <li class="active"><a href="/customer/officially.php">사전정보 공표</a></li>
                        </ul>
                    </div>
                </nav>
                <article class="summary">
                    <h5 class="sub-title">사전정보공표목록</h5>
                    <p class="note">정보담당 : 전략기획처 성낙훈 (<a href="tel:03180538835">031-8053-8835</a>)</p>
                    <h5 class="sub-title">사전정보공개란?</h5>
                    <p class="note">국민이 정보공개를 청구하기 전에 공공기관이 국민의 생활에 큰 영향을 미치는 정책 등을 사전에 공개하는 것을 말하며, 우리 공사에서 정한 사전정보공개 공표목록을 통해 공표한 정보를 정기적으로 게재하고 있습니다.</p>
                </article>
                <article class="officially-list">
                    <h5 class="sub-title">사전정보 공표 (전체)</h5>
                    <div class="box">
                        <strong>평택도시공사의 모든 소식을 알려드립니다.</strong>
                        <p>언제나 시민과 더불어 함께하는 평택도시공사가 되겠습니다.</p>
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
                    <nav class="tab-menu">
                        <ul>
                            <li class="active"><a href="#">전체</a></li>
                            <li><a href="#">감사ㆍ윤리</a></li>
                            <li><a href="#">기획ㆍ재정</a></li>
                            <li><a href="#">법무ㆍ노무</a></li>
                            <li><a href="#">인사ㆍ총무ㆍ회계</a></li>
                            <li><a href="#">정보화</a></li>
                            <li><a href="#">홍보ㆍ대외협력</a></li>
                        </ul>
                    </nav>
                    <div class="table-wrap">
                        <table class="table list-type1">
                            <thead>
                                <tr>
                                    <th scope="col">번호</th>
                                    <th scope="col">분야</th>
                                    <th scope="col">기능</th>
                                    <th scope="col" class="subject">제목</th>
                                    <th scope="col">작성자</th>
                                    <th scope="col">등록일</th>
                                    <th scope="col">조회</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>10</td>
                                    <td>인사ㆍ총무ㆍ회계</td>
                                    <td>정보화</td>
                                    <td class="subject"><a href="/customer/officially_view.php">2019년 예산 총괄 <i class="icon-floppy"><span class="sr-only">첨부파일</span></i></a></td>
                                    <td>평택도시공사</td>
                                    <td>2018-05-23</td>
                                    <td>28</td>
                                </tr>
                                <tr>
                                    <td>9</td>
                                    <td>인사ㆍ총무ㆍ회계</td>
                                    <td>회계</td>
                                    <td class="subject"><a href="/customer/officially_view.php">2019년 예산 총괄 2019년 예산 총괄 2019년 예산 총괄<i class="icon-floppy"><span class="sr-only">첨부파일</span></i></a></td>
                                    <td>평택도시공사</td>
                                    <td>2018-05-23</td>
                                    <td>28</td>
                                </tr>
                                <tr>
                                    <td>8</td>
                                    <td>인사ㆍ총무ㆍ회계</td>
                                    <td>회계</td>
                                    <td class="subject"><a href="/customer/officially_view.php">2019년 예산 총괄<i class="icon-floppy"><span class="sr-only">첨부파일</span></i></a></td>
                                    <td>평택도시공사</td>
                                    <td>2018-05-23</td>
                                    <td>28</td>
                                </tr>
                                <tr>
                                    <td>7</td>
                                    <td>인사ㆍ총무ㆍ회계</td>
                                    <td>회계</td>
                                    <td class="subject"><a href="/customer/officially_view.php">2019년 예산 총괄<i class="icon-floppy"><span class="sr-only">첨부파일</span></i></a></td>
                                    <td>평택도시공사</td>
                                    <td>2018-05-23</td>
                                    <td>28</td>
                                </tr>
                                <tr>
                                    <td>6</td>
                                    <td>인사ㆍ총무ㆍ회계</td>
                                    <td>회계</td>
                                    <td class="subject"><a href="/customer/officially_view.php">2019년 예산 총괄<i class="icon-floppy"><span class="sr-only">첨부파일</span></i></a></td>
                                    <td>평택도시공사</td>
                                    <td>2018-05-23</td>
                                    <td>28</td>
                                </tr>
                                <tr>
                                    <td>5</td>
                                    <td>인사ㆍ총무ㆍ회계</td>
                                    <td>회계</td>
                                    <td class="subject"><a href="/customer/officially_view.php">2019년 예산 총괄</a></td>
                                    <td>평택도시공사</td>
                                    <td>2018-05-23</td>
                                    <td>28</td>
                                </tr>
                                <tr>
                                    <td>4</td>
                                    <td>인사ㆍ총무ㆍ회계</td>
                                    <td>회계</td>
                                    <td class="subject"><a href="/customer/officially_view.php">2019년 예산 총괄</a></td>
                                    <td>평택도시공사</td>
                                    <td>2018-05-23</td>
                                    <td>28</td>
                                </tr>
                                <tr>
                                    <td>3</td>
                                    <td>인사ㆍ총무ㆍ회계</td>
                                    <td>회계</td>
                                    <td class="subject"><a href="/customer/officially_view.php">2019년 예산 총괄</a></td>
                                    <td>평택도시공사</td>
                                    <td>2018-05-23</td>
                                    <td>28</td>
                                </tr>
                                <tr>
                                    <td>2</td>
                                    <td>인사ㆍ총무ㆍ회계</td>
                                    <td>회계</td>
                                    <td class="subject"><a href="/customer/officially_view.php">2019년 예산 총괄</a></td>
                                    <td>평택도시공사</td>
                                    <td>2018-05-23</td>
                                    <td>28</td>
                                </tr>
                                <tr>
                                    <td>1</td>
                                    <td>인사ㆍ총무ㆍ회계</td>
                                    <td>회계</td>
                                    <td class="subject"><a href="/customer/officially_view.php">2019년 예산 총괄</a></td>
                                    <td>평택도시공사</td>
                                    <td>2018-05-23</td>
                                    <td>28</td>
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
                </article>
            </div>
        </section>
        
        <?php require_once($_SERVER['DOCUMENT_ROOT'].'/inc/side_quick.php'); ?>
    </main>
    
    <?php require_once($_SERVER['DOCUMENT_ROOT'].'/inc/quick.php'); ?>
    <?php require_once($_SERVER['DOCUMENT_ROOT'].'/inc/footer.php'); ?>
    <?php require_once($_SERVER['DOCUMENT_ROOT'].'/inc/docfoot.php'); ?>
</body>
</html>