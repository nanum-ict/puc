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
                <div class="page-path">
                    <h3>고객광장</h3>
                    <ol class="breadcrumb">
                        <li>고객광장</li>
                        <li>브레인시티 온라인 상담</li>
                    </ol>
                </div>
                <h4 class="title">브레인시티 온라인 상담</h4>
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
        
        <?php require_once($_SERVER['DOCUMENT_ROOT'].'/inc/side_quick.php'); ?>
    </main>
    
    <?php require_once($_SERVER['DOCUMENT_ROOT'].'/inc/quick.php'); ?>
    <?php require_once($_SERVER['DOCUMENT_ROOT'].'/inc/footer.php'); ?>
    <?php require_once($_SERVER['DOCUMENT_ROOT'].'/inc/docfoot.php'); ?>
</body>
</html>