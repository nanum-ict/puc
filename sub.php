<?php require_once($_SERVER['DOCUMENT_ROOT'].'/inc/dochead.php'); ?>
<link rel="stylesheet" href="/assets/css/sub.css">
</head>
<body>
    <?php require_once($_SERVER['DOCUMENT_ROOT'].'/inc/header.php'); ?>
    
    <!-- Content -->
    <main id="content" class="sub"> <!-- 폴더별 class -->
        <section class="sub-content "> <!-- 페이지명 class -->
            <div class="section-header">
                <h3 class="depth-title">사업안내</h3>
                <h4 class="title">택지개발사업</h4>
                <p class="summary">평택도시공사의 다양한 분양, 입찰 소식을 확인 할 수 있습니다.</p>
                <div class="page-path">
                    <ol class="breadcrumb">
                        <li>
                            <a href="/">
                                <i class="icon-home"><span class="sr-only">메인으로 이동</span></i>
                            </a>
                        </li>
                        <li>사업안내</li>
                        <li>
                            <div class="depth-2">
                                <button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                    택지개발사업
                                </button>
                                <div class="dropdown-menu">
                                    <a href="#">menu1</a>
                                    <a href="#">menu1</a>
                                    <a href="#">menu1</a>
                                    <a href="#">menu1</a>
                                </div>
                            </div>
                        </li>
                    </ol>
                </div>
            </div>
            
            <div class="section-content">
                <nav class="dropdown nav-tab">
                    <button class="btn btn-secondary dropdown-toggle" type="button" id="nav-tab" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        브레인시티 사업안내
                    </button>
                    <div class="dropdown-menu" aria-labelledby="nav-tab">
                        <ul>
                            <li><a href="#">브레인시티 사업안내</a></li>
                            <li><a href="#">만화로 보는 보상</a></li>
                            <li class="active"><a href="#">공지사항</a></li>
                            <li><a href="#">자주 묻는 질문</a></li>
                            <li><a href="#">온라인상담</a></li>
                        </ul>
                    </div>
                </nav>
                
                <br><br>
                <!-- search-form -->
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
                
                <br><br>
                <!-- section-title -->
                <h5 class="section-title">운영안내</h5>
                
                <br><br>
                <!-- sub-title -->
                <h6 class="sub-title">이용안내</h6>
                
                <br><br>
                <!-- square-list -->
                <ul class="square-list">
                    <li>대상 : 보호자를 동반한 3~9세 어린이</li>
                    <li>대상 : 보호자를 동반한 3~9세 어린이</li>
                </ul>
                
                <br><br>
                <!-- decimal-list -->
                <ol class="decimal-list">
                    <li>순서있는 목록</li>
                    <li>순서있는 목록</li>
                    <li>순서있는 목록</li>
                    <li>순서있는 목록</li>
                </ol>
                
                <br><br>
                <!-- table -->
                <div class="table-wrap">
                    <table class="table">
                        <thead>
                            <tr>
                                <th>교육프로그램명</th>
                                <th>교육시간</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>교통안전 교육</td>
                                <td>10 : 00</td>
                            </tr>
                        </tbody>
                    </table>
                    
                    <br><br>
                    
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
                                <td class="subject"><a href="#">포승(2)일반산업단지 지원시설용지 수의계약 공고</a></td>
                                <td>2018-05-23</td>
                                <td>2019-12-31</td>
                                <td class="state">
                                    <span class="ongoing">진행중</span>
                                </td>
                                <td>1619</td>
                            </tr>
                            <tr>
                                <td>9</td>
                                <td class="subject"><a href="#">포승(2)일반산업단지 지원시설용지 수의계약 공고</a></td>
                                <td>2018-05-23</td>
                                <td>2019-12-31</td>
                                <td class="state">
                                    <span class="end">신청마감</span>
                                </td>
                                <td>1619</td>
                            </tr>
                            <tr>
                                <td>8</td>
                                <td class="subject"><a href="#">포승(2)일반산업단지 지원시설용지 수의계약 공고</a></td>
                                <td>2018-05-23</td>
                                <td>2019-12-31</td>
                                <td class="state">
                                    <span class="end">신청마감</span>
                                </td>
                                <td>1619</td>
                            </tr>
                            <tr>
                                <td>7</td>
                                <td class="subject"><a href="#">포승(2)일반산업단지 지원시설용지 수의계약 공고</a></td>
                                <td>2018-05-23</td>
                                <td>2019-12-31</td>
                                <td class="state">
                                    <span class="end">신청마감</span>
                                </td>
                                <td>1619</td>
                            </tr>
                            <tr>
                                <td>6</td>
                                <td class="subject"><a href="#">포승(2)일반산업단지 지원시설용지 수의계약 공고</a></td>
                                <td>2018-05-23</td>
                                <td>2019-12-31</td>
                                <td class="state">
                                    <span class="end">신청마감</span>
                                </td>
                                <td>1619</td>
                            </tr>
                            <tr>
                                <td>5</td>
                                <td class="subject"><a href="#">포승(2)일반산업단지 지원시설용지 수의계약 공고</a></td>
                                <td>2018-05-23</td>
                                <td>2019-12-31</td>
                                <td class="state">
                                    <span class="end">신청마감</span>
                                </td>
                                <td>1619</td>
                            </tr>
                            <tr>
                                <td>4</td>
                                <td class="subject"><a href="#">포승(2)일반산업단지 지원시설용지 수의계약 공고</a></td>
                                <td>2018-05-23</td>
                                <td>2019-12-31</td>
                                <td class="state">
                                    <span class="end">신청마감</span>
                                </td>
                                <td>1619</td>
                            </tr>
                            <tr>
                                <td>3</td>
                                <td class="subject"><a href="#">포승(2)일반산업단지 지원시설용지 수의계약 공고</a></td>
                                <td>2018-05-23</td>
                                <td>2019-12-31</td>
                                <td class="state">
                                    <span class="end">신청마감</span>
                                </td>
                                <td>1619</td>
                            </tr>
                            <tr>
                                <td>2</td>
                                <td class="subject"><a href="#">포승(2)일반산업단지 지원시설용지 수의계약 공고</a></td>
                                <td>2018-05-23</td>
                                <td>2019-12-31</td>
                                <td class="state">
                                    <span class="end">신청마감</span>
                                </td>
                                <td>1619</td>
                            </tr>
                            <tr>
                                <td>1</td>
                                <td class="subject"><a href="#">포승(2)일반산업단지 지원시설용지 수의계약 공고</a></td>
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
                
                <br><br>
                <!-- board-view -->
                <div class="board-view">
                    <div class="view-head">
                        <h5 class="title">주차요금 미납차량 공시 송달 공고 (독촉분_2019_2월)</h5>
                        <ul class="information">
                            <li>
                                <dl>
                                    <dt>사업부문</dt>
                                    <dd>용지 수의계약</dd>
                                </dl>
                            </li>
                            <li>
                                <dl>
                                    <dt>작성부서</dt>
                                    <dd>포승산단주식회사</dd>
                                </dl>
                            </li>
                            <li>
                                <dl>
                                    <dt>상태</dt>
                                    <dd>진행중</dd>
                                </dl>
                            </li>
                            <li>
                                <dl>
                                    <dt>공고일</dt>
                                    <dd>2018-05-23</dd>
                                </dl>
                            </li>
                            <li>
                                <dl>
                                    <dt>마감일</dt>
                                    <dd>2019-12-31</dd>
                                </dl>
                            </li>
                            <li>
                                <dl>
                                    <dt>조회</dt>
                                    <dd>1627</dd>
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
                        <a href="#" class="btn btn-default" role="button">목차</a>
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
                
                <br><br>
                <!-- table style red -->
                <p class="attention">개별교육: 월,화,목,금 15:00~16:00</p>
                <p class="attention red">개별교육: 월,화,목,금 15:00~16:00</p>
                
                <br><br>
                <!-- faq-list -->
                <div class="faq-list">
                    <ul>
                        <li class="item active">
                            <a href="javascript:;" class="question" role="button">현 38호선 국도 경제부의 조성계획은 어떻게 되나요?</a>
                            <div class="answer">
                                <div class="content">
                                    산업물 입지에 따라 대상지 경계부에 충분한 완축녹지를 조성하여 위압감과 이질감을 완화 예정입니다.
                                </div>
                            </div>
                        </li>
                        <li class="item">
                            <a href="javascript:;" class="question" role="button">현 38호선 국도 경제부의 조성계획은 어떻게 되나요?</a>
                            <div class="answer">
                                <div class="content">
                                    산업물 입지에 따라 대상지 경계부에 충분한 완축녹지를 조성하여 위압감과 이질감을 완화 예정입니다.
                                </div>
                            </div>
                        </li>
                    </ul>
                </div>
                
                <br><br>
                <!-- box-content style color gray -->
                <div class="box">
                    <div class="content">
                        내용<br>
                        내용<br>
                        내용<br>
                        내용
                    </div>
                </div>
                
                <br><br>
                <!-- pagenation -->
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