<?php require_once($_SERVER['DOCUMENT_ROOT'].'/inc/dochead.php'); ?>
<link rel="stylesheet" href="/assets/css/sub.css">
<link rel="stylesheet" href="/assets/css/parcelout.css">
</head>
<body>
    <?php require_once($_SERVER['DOCUMENT_ROOT'].'/inc/header.php'); ?>
    
    <!-- Content -->
    <main id="content" class="sub parcelout"> <!-- 폴더별 class -->
        <section class="sub-content request-write"> <!-- 페이지명 class -->
            <div class="section-header">
                <h3 class="depth-title">분양안내</h3>
                <h4 class="title">보상</h4>
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
                                    보상
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
                <nav class="dropdown nav-tab">
                    <button class="btn btn-secondary dropdown-toggle" type="button" id="nav-tab" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        분묘신청접수
                    </button>
                    <div class="dropdown-menu" aria-labelledby="nav-tab">
                        <ul>
                            <li><a href="/parcelout/examination_list.php">고시공고</a></li>
                            <li><a href="/parcelout/compensation.php">보상안내</a></li>
                            <li class="active"><a href="/parcelout/request_write.php">분묘신청접수</a></li>
                            <li><a href="/parcelout/faq_list.php">보상FAQ</a></li>
                        </ul>
                    </div>
                </nav>
                <div class="box">
                    <div class="content">
                        <p>분묘이장 절차와 필요한 서류를 확인하신 후 분묘신청접수를 해주세요.</p>
                        <div class="btn-area">
                            <a href="#" class="btn btn-default btn-popup" data-toggle="modal" data-target="#modal-popup" role="button">분묘이장절차 안내보기</a>
                        </div>
                    </div>
                </div>
                
                <div class="write-form">
                    <form action="#">
                        <div class="table-wrap">
                            <span class="indispensable">필수입력</span>
                            <table class="table write">
                                <tbody>
                                    <tr>
                                        <th scope="row" class="indispensable">
                                            <label for="u-lotnumber">소재지번</label>
                                        </th>
                                        <td class="lot-number">
                                            <div class="form-group">
                                                <span>경기도 평택시 서정동</span><input type="text" id="u-lotnumber" class="form-control">
                                                <span>번지</span>
                                            </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <th scope="row" class="indispensable">
                                            <label for="grave-number">분묘번호</label>
                                        </th>
                                        <td>
                                            <div class="form-group">
                                                <input type="text" id="grave-number" class="form-control">
                                            </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <th scope="row" class="indispensable">신청인</th>
                                        <td class="apply">
                                            <div class="form-group">
                                                <label for="u-name">성명</label>
                                                <input type="text" id="u-name" class="form-control u-name">
                                            </div>
                                            <div class="form-group">
                                                <label for="u-addr">주소</label>
                                                <input type="text" id="u-addr" class="form-control addr">
                                            </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <th scope="row" class="indispensable">연락처</th>
                                        <td class="contact">
                                            <div class="form-group">
                                                <label for="u-tel">TEL</label>
                                                <input type="text" id="u-tel" class="form-control"> -
                                                <label for="tel-2" class="sr-only">전화번호</label>
                                                <input type="text" id="tel-2" class="form-control"> -
                                                <label for="tel-3" class="sr-only">전화번호</label>
                                                <input type="text" id="tel-3" class="form-control">
                                            </div>
                                            <div class="form-group">
                                                <label for="u-phone">H.P</label>
                                                <input type="text" id="u-phone" class="form-control"> -
                                                <label for="phone-2" class="sr-only">휴대폰번호</label>
                                                <input type="text" id="phone-2" class="form-control"> -
                                                <label for="phone-3" class="sr-only">휴대폰번호</label>
                                                <input type="text" id="phone-3" class="form-control">
                                            </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <th scope="row" class="indispensable">
                                            <label for="u-note">비고</label>
                                        </th>
                                        <td>
                                            <div class="form-group">
                                                <textarea id="u-note" class="form-control"></textarea>
                                            </div>
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                        <div class="btn-area">
                            <button type="submit" class="btn btn-submit">분묘이장 신청하기</button>
                        </div>
                    </form>
                </div>
            </div>
        </section>
        
        <!-- Modal -->
        <div class="modal fade" id="modal-popup" tabindex="-1" role="dialog" aria-hidden="true">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h6>분묘이장 절차안내</h6>
                    </div>
                    <div class="modal-body">
                        <figure>
                            <img src="/assets/images/parcelout/img_modal_sm.png" class="img-fluid d-md-none" alt="분묘이장 절차안내">
                            <img src="/assets/images/parcelout/img_modal_lg.png" class="img-fluid d-none d-md-block" alt="분묘이장 절차안내">
                        </figure>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-close" data-dismiss="modal">닫기</button>
                    </div>
                </div>
            </div>
        </div>
        
    </main>
    
    <?php require_once($_SERVER['DOCUMENT_ROOT'].'/inc/quick.php'); ?>
    <?php require_once($_SERVER['DOCUMENT_ROOT'].'/inc/footer.php'); ?>
    <?php require_once($_SERVER['DOCUMENT_ROOT'].'/inc/docfoot.php'); ?>
</body>
</html>