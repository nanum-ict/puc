<?php require_once($_SERVER['DOCUMENT_ROOT'].'/inc/dochead.php'); ?>
<link rel="stylesheet" href="/assets/css/sub.css">
<link rel="stylesheet" href="/assets/css/customer.css">
</head>
<body>
    <?php require_once($_SERVER['DOCUMENT_ROOT'].'/inc/header.php'); ?>
    
    <!-- Content -->
    <main id="content" class="sub customer"> <!-- 폴더별 class -->
        <section class="sub-content common-list praise-list"> <!-- 페이지명 class -->
            <div class="section-header">
                <h3 class="depth-title">고객광장</h3>
                <h4 class="title">칭찬합시다</h4>
                <div class="page-path">
                    <ol class="breadcrumb">
                        <li>
                            <a href="/">
                                <i class="icon-home"><span class="sr-only">메인으로 이동</span></i>
                            </a>
                        </li>
                        <li>고객광장</li>
                        <li>
                            <div class="depth-2">
                                <button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                    칭찬합시다
                                </button>
                                <div class="dropdown-menu">
                                    <a href="/customer/charter.php">고객서비스</a>
                                    <a href="/customer/faqlist.php">자주 묻는 질문</a>
                                    <a href="/customer/advice_write.php">고객의 소리</a>
                                    <a href="/customer/praise_list.php">칭찬합시다</a>
                                    <a href="/customer/privacy.php">개인정보취급방법</a>
                                    <a href="/customer/email_policy.php">이메일 추출방지정책</a>
                                    <a href="/customer/bc_faqlist.php">브레인시티 자주 묻는 질문</a>
                                    <a href="/customer/counseling.php">브레인시티 온라인 상담</a>
                                    <a href="/customer/outline.php">정보공개</a>
                                    <a href="/customer/sinmungo.php">안전신문고</a>
                                </div>
                            </div>
                        </li>
                    </ol>
                </div>
            </div>
            <div class="section-content">
                <div class="box">
                    <div class="content">
                        <strong>칭찬 받을 직원들을 추천해주세요.</strong>
                        <p>게시판의 목적에 맞지 않는 게시물이나 타인을 비방하거나 욕설이 포함된 게시물은 삭제될수 있습니다.</p>
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
                                <th scope="col" class="writer">작성자</th>
                                <th scope="col">등록일</th>
                                <th scope="col">조회</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td class="num">10</td>
                                <td class="subject"><a href="/customer/praise_view.php">포승(2)일반산업단지 지원시설용지 수의계약 공고</a></td>
                                <td class="writer">평택도시공사</td>
                                <td>2016-04-12</td>
                                <td>354</td>
                            </tr>
                            <tr>
                                <td class="num">9</td>
                                <td class="subject"><a href="/customer/praise_view.php">포승(2)일반산업단지 지원시설용지 수의계약 공고</a></td>
                                <td class="writer">평택도시공사</td>
                                <td>2016-04-12</td>
                                <td>354</td>
                            </tr>
                            <tr>
                                <td class="num">8</td>
                                <td class="subject"><a href="/customer/praise_view.php">포승(2)일반산업단지 지원시설용지 수의계약 공고</a></td>
                                <td class="writer">평택도시공사</td>
                                <td>2016-04-12</td>
                                <td>354</td>
                            </tr>
                            <tr>
                                <td class="num">7</td>
                                <td class="subject"><a href="/customer/praise_view.php">포승(2)일반산업단지 지원시설용지 수의계약 공고</a></td>
                                <td class="writer">평택도시공사</td>
                                <td>2016-04-12</td>
                                <td>354</td>
                            </tr>
                            <tr>
                                <td class="num">6</td>
                                <td class="subject"><a href="/customer/praise_view.php">포승(2)일반산업단지 지원시설용지 수의계약 공고</a></td>
                                <td class="writer">평택도시공사</td>
                                <td>2016-04-12</td>
                                <td>354</td>
                            </tr>
                            <tr>
                                <td class="num">5</td>
                                <td class="subject"><a href="/customer/praise_view.php">포승(2)일반산업단지 지원시설용지 수의계약 공고</a></td>
                                <td class="writer">평택도시공사</td>
                                <td>2016-04-12</td>
                                <td>354</td>
                            </tr>
                            <tr>
                                <td class="num">4</td>
                                <td class="subject"><a href="/customer/praise_view.php">포승(2)일반산업단지 지원시설용지 수의계약 공고</a></td>
                                <td class="writer">평택도시공사</td>
                                <td>2016-04-12</td>
                                <td>354</td>
                            </tr>
                            <tr>
                                <td class="num">3</td>
                                <td class="subject"><a href="/customer/praise_view.php">포승(2)일반산업단지 지원시설용지 수의계약 공고</a></td>
                                <td class="writer">평택도시공사</td>
                                <td>2016-04-12</td>
                                <td>354</td>
                            </tr>
                            <tr>
                                <td class="num">2</td>
                                <td class="subject"><a href="/customer/praise_view.php">포승(2)일반산업단지 지원시설용지 수의계약 공고</a></td>
                                <td class="writer">평택도시공사</td>
                                <td>2016-04-12</td>
                                <td>354</td>
                            </tr>
                            <tr>
                                <td class="num">1</td>
                                <td class="subject"><a href="/customer/praise_view.php">포승(2)일반산업단지 지원시설용지 수의계약 공고</a></td>
                                <td class="writer">평택도시공사</td>
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
                <div class="btn-area">
                    <a href="/customer/praise_write.php" class="btn btn-default" role="button">글쓰기</a>
                </div>
            </div>
        </section>
        
        
    </main>
    
    <?php require_once($_SERVER['DOCUMENT_ROOT'].'/inc/quick.php'); ?>
    <?php require_once($_SERVER['DOCUMENT_ROOT'].'/inc/footer.php'); ?>
    <?php require_once($_SERVER['DOCUMENT_ROOT'].'/inc/docfoot.php'); ?>
</body>
</html>