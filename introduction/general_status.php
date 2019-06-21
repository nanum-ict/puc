<?php require_once($_SERVER['DOCUMENT_ROOT'].'/inc/dochead.php'); ?>
<link rel="stylesheet" href="/assets/css/sub.css">
<link rel="stylesheet" href="/assets/css/introcution.css">
</head>
<body>
    <?php require_once($_SERVER['DOCUMENT_ROOT'].'/inc/header.php'); ?>
    
    <!-- Content -->
    <main id="content" class="sub introcution"> <!-- 폴더별 class -->
        <section class="sub-content general-status"> <!-- 페이지명 class -->
            <div class="section-header">
                <h3 class="depth-title">공사소개</h3>
                <h4 class="title">일반현황</h4>
                <div class="page-path">
                    <ol class="breadcrumb">
                        <li>
                            <a href="/">
                                <i class="icon-home"><span class="sr-only">메인으로 이동</span></i>
                            </a>
                        </li>
                        <li>공사소개</li>
                        <li>
                            <div class="depth-2">
                                <button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                    일반현황
                                </button>
                                <div class="dropdown-menu">
                                    <a href="/introduction/greeting.php">CEO 인사말</a>
                                    <a href="/introduction/ci.php">공사 CI</a>
                                    <a href="/introduction/vision.php">비전과 미션</a>
                                    <a href="/introduction/general_status.php">일반현황</a>
                                    <a href="/introduction/management.php">경영공시</a>
                                    <a href="/introduction/group.php">조직 및 업무</a>
                                    <a href="/introduction/location.php">찾아오시는 길</a>
                                </div>
                            </div>
                        </li>
                    </ol>
                </div>
            </div>
            <div class="section-content">
                <article class="history">
                    <div class="summary">
                        <h5>History</h5>
                        <p>평택도시공사는 지방공기업법과 평택도시공사 설립 및 운영조례가 정하는 바에 따라<br> 지역개발사업을 통하여 평택시민의 복지향상 및 지역사회 발전에 이바지함을 목적으로 합니다.</p>
                    </div>
                    <ol class="history-list">
                        <li>
                            <h6>2018</h6>
                            <dl>
                                <dt>2018.12.03</dt>
                                <dd>김재수 제5대 사장 취임</dd>
                            </dl>
                        </li>
                        <li>
                            <h6>2016</h6>
                            <dl>
                                <dt>2016.12.29</dt>
                                <dd>자본금 증자(2,141억 원 → 3,444억 원)</dd>
                            </dl>
                        </li>
                        <li>
                            <h6>2015</h6>
                            <dl>
                                <dt>2015.08.21</dt>
                                <dd>공사 사옥 이전 (경기도 평택시 도일유통길 25)</dd>
                                <dt>2015.06.16</dt>
                                <dd>평택시 공영주차장 위ㆍ수탁 관리 추가 운영 (노외:25개소, 노상:9개소)</dd>
                                <dt>2015.02.02</dt>
                                <dd>평택시 공영주차장 위ㆍ수탁 관리 운영 (노외:11개소, 노상:5개소)</dd>
                            </dl>
                        </li>
                        <li>
                            <h6>2014</h6>
                            <dl>
                                <dt>2014.12.03</dt>
                                <dd>이연흥 제4대 사장 취임</dd>
                                <dt>2014.03.06</dt>
                                <dd>평택시 어린이교통공원 관리 운영</dd>
                            </dl>
                        </li>
                        <li>
                            <h6>2013</h6>
                            <dl>
                                <dt>2013.07.01</dt>
                                <dd>평택시 교통약자 특별교통수단 위ㆍ수탁 운영</dd>
                                <dt>2013.04.24</dt>
                                <dd>임성진 제3대 사장 취임</dd>
                            </dl>
                        </li>
                        <li>
                            <h6>2010</h6>
                            <dl>
                                <dt>2010.03.24</dt>
                                <dd>장덕수 제2대 사장 취임</dd>
                            </dl>
                        </li>
                        <li>
                            <h6>2009</h6>
                            <dl>
                                <dt>2009.12.28</dt>
                                <dd>자본금 증자(1,552억 원 → 2,141억 원)</dd>
                            </dl>
                        </li>
                        <li>
                            <h6>2008</h6>
                            <dl>
                                <dt>2008.12.22</dt>
                                <dd>자본금 증자(1,020억 원 → 1,552억 원)</dd>
                                <dt>2008.04.29</dt>
                                <dd>창립식</dd>
                                <dt>2008.04.21</dt>
                                <dd>자본금 증자(30억 원 → 1,020억 원)</dd>
                                <dt>2008.04.10</dt>
                                <dd>사명변경(평택지방공사 ⇒ 평택도시공사)</dd>
                                <dt>2008.03.17</dt>
                                <dd>평택지방공사 설립 법인 등기자본금(30억 원)</dd>
                                <dt>2008.03.10</dt>
                                <dd>평택지방공사 설립 인가민병균 초대 사장 취임</dd>
                            </dl>
                        </li>
                        <li>
                            <h6>2007</h6>
                            <dl>
                                <dt>2007.10.04</dt>
                                <dd>평택지방공사 설립 및 운영조례 제정</dd>
                            </dl>
                        </li>
                    </ol>
                </article>
            </div>
        </section>
        
    </main>
    
    <?php require_once($_SERVER['DOCUMENT_ROOT'].'/inc/quick.php'); ?>
    <?php require_once($_SERVER['DOCUMENT_ROOT'].'/inc/footer.php'); ?>
    <?php require_once($_SERVER['DOCUMENT_ROOT'].'/inc/docfoot.php'); ?>
</body>
</html>