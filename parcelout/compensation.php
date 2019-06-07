<?php require_once($_SERVER['DOCUMENT_ROOT'].'/inc/dochead.php'); ?>
<link rel="stylesheet" href="/assets/css/sub.css">
<link rel="stylesheet" href="/assets/css/parcelout.css">
</head>
<body>
    <?php require_once($_SERVER['DOCUMENT_ROOT'].'/inc/header.php'); ?>
    
    <!-- Content -->
    <main id="content" class="sub parcelout"> <!-- 폴더별 class -->
        <section class="sub-content compensation"> <!-- 페이지명 class -->
            <div class="section-header">
                <div class="page-path">
                    <h3>분양안내</h3>
                    <ol class="breadcrumb">
                        <li>분양안내</li>
                        <li>보상</li>
                    </ol>
                </div>
                <h4 class="title">보상</h4>
            </div>
            <div class="section-content">
                <nav class="dropdown nav-tab">
                    <button class="btn btn-secondary dropdown-toggle" type="button" id="nav-tab" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        보상안내
                    </button>
                    <div class="dropdown-menu" aria-labelledby="nav-tab">
                        <ul>
                            <li><a href="/parcelout/examination_list.php">고시공고</a></li>
                            <li class="active"><a href="/parcelout/compensation.php">보상안내</a></li>
                            <li><a href="/parcelout/request_write.php">분묘신청접수</a></li>
                            <li><a href="/parcelout/faq_list.php">보상FAQ</a></li>
                        </ul>
                    </div>
                </nav>
                <div class="box">
                    <strong>보상 고시공고</strong>
                    <p>언제나 시민과 더불어 함께하는 평택도시공사가 되겠습니다.</p>
                </div>
                <figure>
                    <img src="/assets/images/parcelout/img_compensation.png" class="img-fluid" alt="보상안내">
                </figure>
            </div>
        </section>
        
        <?php require_once($_SERVER['DOCUMENT_ROOT'].'/inc/side_quick.php'); ?>
    </main>
    
    <?php require_once($_SERVER['DOCUMENT_ROOT'].'/inc/quick.php'); ?>
    <?php require_once($_SERVER['DOCUMENT_ROOT'].'/inc/footer.php'); ?>
    <?php require_once($_SERVER['DOCUMENT_ROOT'].'/inc/docfoot.php'); ?>
    <script src="/assets/js/sub.js"></script>
</body>
</html>