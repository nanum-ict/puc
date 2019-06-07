<?php require_once($_SERVER['DOCUMENT_ROOT'].'/inc/dochead.php'); ?>
<link rel="stylesheet" href="/assets/css/sub.css">
<link rel="stylesheet" href="/assets/css/customer.css">
</head>
<body>
    <?php require_once($_SERVER['DOCUMENT_ROOT'].'/inc/header.php'); ?>
    
    <!-- Content -->
    <main id="content" class="sub customer"> <!-- 폴더별 class -->
        <section class="sub-content fulfill-standard"> <!-- 페이지명 class -->
            <div class="section-header">
                <div class="page-path">
                    <h3>고객광장</h3>
                    <ol class="breadcrumb">
                        <li>고객광장</li>
                        <li>고객서비스</li>
                    </ol>
                </div>
                <h4 class="title">고객서비스</h4>
            </div>
            <div class="section-content">
                <nav class="dropdown nav-tab">
                    <button class="btn btn-secondary dropdown-toggle" type="button" id="nav-tab" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        서비스 이행표준
                    </button>
                    <div class="dropdown-menu" aria-labelledby="nav-tab">
                        <ul>
                            <li><a href="/customer/charter.php">고객 서비스 헌장</a></li>
                            <li><a href="/customer/fulfill_criteria.php">사업장별 서비스 이행기준</a></li>
                            <li class="active"><a href="/customer/fulfill_standard.php">서비스 이행표준</a></li>
                        </ul>
                    </div>
                </nav>
                
                <article>
                    <h5 class="sub-title">서비스 이행표준</h5>
                    <strong>고객을 맞이하는 자세</strong>
                    <div class="box gray">
                        <ul>
                            <li></li>
                        </ul>
                    </div>
                    <hr>
                    <strong>고객참여 및 의견제시</strong>
                    <hr>
                    <strong>잘못된 서비스에 대한 시정 및 보상조치</strong>
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