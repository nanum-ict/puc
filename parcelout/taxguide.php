<?php require_once($_SERVER['DOCUMENT_ROOT'].'/inc/dochead.php'); ?>
<link rel="stylesheet" href="/assets/css/sub.css">
<link rel="stylesheet" href="/assets/css/parcelout.css">
</head>
<body>
    <?php require_once($_SERVER['DOCUMENT_ROOT'].'/inc/header.php'); ?>
    
    <!-- Content -->
    <main id="content" class="sub parcelout"> <!-- 폴더별 class -->
        <section class="sub-content taxguide"> <!-- 페이지명 class -->
            <div class="section-header">
                <h3 class="depth-title">분양안내</h3>
                <h4 class="title">세금안내 및 기타</h4>
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
                                    세금안내 및 기타
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
                        세금안내
                    </button>
                    <div class="dropdown-menu" aria-labelledby="nav-tab">
                        <ul>
                            <li><a href="/parcelout/ownership.php">소유권 이전 안내</a></li>
                            <li class="active"><a href="/parcelout/taxguide.php">세금안내</a></li>
                        </ul>
                    </div>
                </nav>
                <article class="acquisition-tax">
                    <h5 class="sub-title">취득세</h5>
                    <strong>세액</strong>
                    <p>취득세액은 토지매입대금의 2%이며 추가로 농어촌특별세가 취득세액의 10%이므로 총 취득세액은 전체 토지매입대금의 2.2%</p>
                    <strong>납부기한</strong>
                    <ul>
                        <li>
                            <dl>
                                <dt>일시불 납부의 경우</dt>
                                <dd>잔금 납부후 30일 이내에 납부</dd>
                            </dl>
                        </li>
                        <li>
                            <dl>
                                <dt>분할 납부의 경우</dt>
                                <dd>대금납부 기간이 2년 미만인 경우는 토지매입대금 완납후 30일 이내, 대금납부 기간이 2년 이상인 경우는 연부취득에 해당되므로 매번 할부금을 납부할 때마다 공사로부터 토지매입대금 납부확인서를 발급받아 토지소재지 관할 지자체에 신고후 당해 취득분에 대하여 납부하며 납부기한 경과시는 가산세 20%가 부과</dd>
                            </dl>
                        </li>
                    </ul>
                </article>
                <article class="registration-tax">
                    <h5 class="sub-title">등록세</h5>
                    <strong>세액</strong>
                    <p>등록세액은 토지매입대금의 2%이며 등록세액의 20%에 해당하는 교육세가 추가되므로 총 등록세액은 전체 토지매입대금의 2.4%</p>
                    <strong>납부기한</strong>
                    <p>대금납부 방법에 관계없이 토지매입대금을 완납한 날로부터 60일이내에 당해 토지소재지 지자체에 등록세를 납부하고 소유권이전 등기를 신청하여야 하며 위 기한을 경과한 경우에는 그 기간에 따라 가산세가 부과 등기를 신청하여야 하며 위 기한을 경과한 경우에는 그 기간에 따라 가산세가 부과됩니다.</p>
                </article>
            </div>
        </section>
        
    </main>
    
    <?php require_once($_SERVER['DOCUMENT_ROOT'].'/inc/quick.php'); ?>
    <?php require_once($_SERVER['DOCUMENT_ROOT'].'/inc/footer.php'); ?>
    <?php require_once($_SERVER['DOCUMENT_ROOT'].'/inc/docfoot.php'); ?>
</body>
</html>