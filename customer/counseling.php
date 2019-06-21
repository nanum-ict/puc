<?php require_once($_SERVER['DOCUMENT_ROOT'].'/inc/dochead.php'); ?>
<link rel="stylesheet" href="/assets/css/sub.css">
<link rel="stylesheet" href="/assets/css/customer.css">
</head>
<body>
    <?php require_once($_SERVER['DOCUMENT_ROOT'].'/inc/header.php'); ?>
    
    <!-- Content -->
    <main id="content" class="sub customer"> <!-- 폴더별 class -->
        <section class="sub-content counseling"> <!-- 페이지명 class -->
            <div class="section-header">
                <h3 class="depth-title">고객광장</h3>
                <h4 class="title">브레인시티 온라인 상담</h4>
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
                                    브레인시티 온라인 상담
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
                <article class="write-form">
                    <form action="#">
                        <div class="table-wrap">
                            <span class="indispensable">필수입력</span>
                            <table class="table write">
                                <tbody>
                                    <tr>
                                        <th scope="row" class="indispensable">
                                            <label for="u-name">이름</label>
                                        </th>
                                        <td class="u-name">
                                            <div class="form-group">
                                                <input type="text" id="u-name" class="form-control">
                                            </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <th scope="row" class="indispensable">
                                            <label for="u-email">E-mail</label>
                                        </th>
                                        <td>
                                            <div class="form-group">
                                                <input type="text" id="u-email" class="form-control">
                                            </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <th scope="row" class="indispensable">
                                            <label for="u-subject">제목</label>
                                        </th>
                                        <td>
                                            <div class="form-group">
                                                <input type="text" id="u-subject" class="form-control">
                                            </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <th scope="row" class="indispensable">
                                            <label for="u-content">내용</label>
                                        </th>
                                        <td>
                                            <div class="form-group">
                                                <textarea id="u-content" class="form-control"></textarea>
                                            </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <th scope="row">
                                            <label for="u-attach">첨부파일</label>
                                        </th>
                                        <td>
                                            <div class="form-group">
                                                <input type="file" id="u-attach" class="form-control">
                                            </div>
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                        <div class="btn-area">
                            <button type="submit" class="btn btn-submit">확인</button>
                        </div>
                    </form>
                </article>
                
            </div>
        </section>
    </main>
    
    <?php require_once($_SERVER['DOCUMENT_ROOT'].'/inc/quick.php'); ?>
    <?php require_once($_SERVER['DOCUMENT_ROOT'].'/inc/footer.php'); ?>
    <?php require_once($_SERVER['DOCUMENT_ROOT'].'/inc/docfoot.php'); ?>
</body>
</html>