<?php require_once($_SERVER['DOCUMENT_ROOT'].'/inc/dochead.php'); ?>
<link rel="stylesheet" href="/assets/css/sub.css">
<link rel="stylesheet" href="/assets/css/customer.css">
</head>
<body>
    <?php require_once($_SERVER['DOCUMENT_ROOT'].'/inc/header.php'); ?>
    
    <!-- Content -->
    <main id="content" class="sub customer"> <!-- 폴더별 class -->
        <section class="sub-content charter"> <!-- 페이지명 class -->
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
                        고객서비스 헌장
                    </button>
                    <div class="dropdown-menu" aria-labelledby="nav-tab">
                        <ul>
                            <li class="active"><a href="/customer/charter.php">고객 서비스 헌장</a></li>
                            <li><a href="/customer/fulfill_criteria.php">사업장별 서비스 이행기준</a></li>
                            <li><a href="/customer/fulfill_standard.php">서비스 이행표준</a></li>
                        </ul>
                    </div>
                </nav>
                <div class="box">
                    <strong>고객 서비스 헌장</strong>
                    <p>우리는 고객에게 최상의 서비스를 제공하고 고객만족의 책임경영을 실현하기 위하여 다음과 같이 노력할 것을 다짐합니다.</p>
                </div>
                <ul class="square-list promise">
                    <li>
                        <strong>하나,</strong> 우리는 모든 업무를 고객의 입장에서 생각하고 필요한 정보는 신속정확하게 제공하겠습니다.
                    </li>
                    <li>
                        <strong>하나,</strong> 우리는 고객의 작은 소리에도 귀 기울이고 이를 최대한 경영에 반영하겠습니다.
                    </li>
                    <li>
                        <strong>하나,</strong> 우리는 잘못된 서비스로 불편을 초래한 경우 즉시 시정 개선토록 하겠습니다.
                    </li>
                    <li>
                        <strong>하나,</strong> 우리는 끊임없는 혁신과 노력으로 고객에게 더 나은 가치를 제공할 수 있도록 노력하겠습니다.
                    </li>
                </ul>
                <hr>
                <p class="attention red">우리는 이와 같은 목표를 달성하기 위하여 「고객서비스헌장」을 개정하고 이를 임직원 모두가 성실히 이행할 것을 약속드립니다.</p>
            </div>
        </section>
        
        <?php require_once($_SERVER['DOCUMENT_ROOT'].'/inc/side_quick.php'); ?>
    </main>
    
    <?php require_once($_SERVER['DOCUMENT_ROOT'].'/inc/quick.php'); ?>
    <?php require_once($_SERVER['DOCUMENT_ROOT'].'/inc/footer.php'); ?>
    <?php require_once($_SERVER['DOCUMENT_ROOT'].'/inc/docfoot.php'); ?>
</body>
</html>