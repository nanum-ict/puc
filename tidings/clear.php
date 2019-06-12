<?php require_once($_SERVER['DOCUMENT_ROOT'].'/inc/dochead.php'); ?>
<link rel="stylesheet" href="/assets/css/sub.css">
<link rel="stylesheet" href="/assets/css/tidings.css">
</head>
<body>
    <?php require_once($_SERVER['DOCUMENT_ROOT'].'/inc/header.php'); ?>
    
    <!-- Content -->
    <main id="content" class="sub tidings"> <!-- 폴더별 class -->
        <section class="sub-content cyber clear"> <!-- 페이지명 class -->
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
                            <li class="active"><a href="/tidings/clear.php">사이버감사실</a></li>
                            <li><a href="/tidings/photo_list.php">사회공헌활동</a></li>
                            <li><a href="/tidings/human.php">인권경영</a></li>
                            <li><a href="/tidings/upright_list.php">PUC 청렴소식지</a></li>
                        </ul>
                    </div>
                </nav>
                <nav class="tab-menu">
                    <ul>
                        <li class="active"><a href="/tidings/clear.php">클린센터</a></li>
                        <li class="space"><a href="/tidings/violations.php">인권침해<br> 신고·지원센터</a></li>
                        <li class="space"><a href="/tidings/overuse.php">갑질피해<br> 신고·지원센터</a></li>
                        <li><a href="/tidings/irrationality.php">부조리신고센터</a></li>
                    </ul>
                </nav>
                <article class="explain">
                    <h5 class="sub-title">업무와 관련하여 금품을 받았을 때 임직원이 직접 그 사실을 신고하는 공간입니다</h5>
                    <ul class="circle">
                        <li>임직원 자신이 수수금지 금품 등을 받거나 그 제공의 약속 또는 의사표시를 받은 경우</li>
                        <li>임직원이 자신의 배우자나 직계 존·비속이 수수금지 금품 등을 받거나 그 제공의 약속 또는 의사표시를 받은 사실을 알게 된 경우</li>
                        <li>임직원행동강령 규정이 정한 내용을 초과하여 경조금품을 받았으나 돌려줄 방법이 없는 경우, 외부 강의시 기준을 초과하여 대가를 받은 경우</li>
                    </ul>
                    <h5 class="sub-title">인터넷 신고 외에 방문, 우편 신고도 접수하고 있습니다</h5>
                    <p class="attention">문의 : 안전감사실 <a href="tel:03180538843">031-8053-8843</a></p>
                    <div class="btn-area">
                        <button type="button" class="btn btn-primar btn-modal" data-toggle="modal" data-target="#report">클린센터 신고</button>
                    </div>
                </article>
            </div>
        </section>
        <?php require_once($_SERVER['DOCUMENT_ROOT'].'/inc/side_quick.php'); ?>
    </main>
    
    <!-- Modal -->
    <div class="modal fade report-modal" id="report" tabindex="-1">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <form action="#">
                    <div class="modal-header">
                        <h6>클린센터 신고서</h6>
                    </div>
                    <div class="modal-body">
                        <h6 class="sub-title">신고자</h6>
                        <div class="table-wrap">
                            <table class="table oath-write">
                                <tbody>
                                    <tr>
                                        <th><label for="u-affiliation">소속</label></th>
                                        <td>
                                            <div class="form-group">
                                                <input type="text" id="u-affiliation" class="form-control">
                                            </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <th><label for="u-rank">직급</label></th>
                                        <td>
                                            <div class="form-group">
                                                <input type="text" id="u-rank" class="form-control">
                                            </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <th><label for="u-name">성명</label></th>
                                        <td>
                                            <div class="form-group">
                                                <input type="text" id="u-name" class="form-control">
                                            </div>
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                        <h6 class="sub-title">신고내용</h6>
                        <div class="table-wrap">
                            <table class="table">
                                <tbody>
                                    <tr>
                                        <th rowspan="2">금품제공자</th>
                                        <td class="user-info">
                                            <div class="form-group">
                                                <label>소속 <input type="text" class="form-control"></label>
                                            </div>
                                            <div class="form-group">
                                                <label>직급 <input type="text" class="form-control"></label>
                                            </div>
                                            <div class="form-group">
                                                <label>성명 <input type="text" class="form-control"></label>
                                            </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td class="related-task">
                                            <div class="form-group">
                                                <label>관계업무 <input type="text" class="form-control"></label>
                                            </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <th></th>
                                        <td class="date-time">
                                            <div class="form-group date">
                                                <select class="form-control">
                                                    <option>2019</option>
                                                </select>
                                                <select class="form-control">
                                                    <option>01</option>
                                                </select>
                                                <select class="form-control">
                                                    <option>01</option>
                                                </select>
                                            </div>
                                            <div class="form-group time">
                                                <label>오전 <input type="radio"></label>
                                                <label>오후 <input type="radio"></label>
                                                <select class="form-control">
                                                    <option>시간</option>
                                                    <option>01</option>
                                                    <option>02</option>
                                                    <option>03</option>
                                                    <option>04</option>
                                                    <option>05</option>
                                                </select>
                                            </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <th><label for="m-place">금품 수수 장소</label></th>
                                        <td>
                                            <div class="form-group">
                                                <input type="text" id="m-place" class="form-control">
                                            </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <th><label for="m-kind">금품의 종류, 가격</label></th>
                                        <td>
                                            <div class="form-group">
                                                <input type="text" id="m-kind" class="form-control">
                                            </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <th><label for="m-details">금품 수수 경위</label></th>
                                        <td>
                                            <div class="form-group">
                                                <textarea id="m-details" class="form-control"></textarea>
                                            </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td colspan="2" class="oath">
                                            <div class="form-group">
                                                <label><input type="text" class="form-control"> 년</label>
                                                <label><input type="text" class="form-control"> 월</label>
                                                <label><input type="text" class="form-control"> 일</label>
                                            </div>
                                            <p>본인은 상기와 같은 내용을 거짓없이 신고 합니다.</p>
                                            <div class="form-group declarer">
                                                <label>신고자 <input type="text" class="form-control"></label>
                                            </div>
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                        <div class="btn-area">
                            <button type="submit" class="btn btn-submit">신고서 접수</button>
                            <button type="button" class="btn btn-close" data-dismiss="modal">닫기</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
    
    <?php require_once($_SERVER['DOCUMENT_ROOT'].'/inc/quick.php'); ?>
    <?php require_once($_SERVER['DOCUMENT_ROOT'].'/inc/footer.php'); ?>
    <?php require_once($_SERVER['DOCUMENT_ROOT'].'/inc/docfoot.php'); ?>
</body>
</html>