<?php require_once($_SERVER['DOCUMENT_ROOT'].'/inc/dochead.php'); ?>
<link rel="stylesheet" href="/assets/css/sub.css">
<link rel="stylesheet" href="/assets/css/business.css">
</head>
<body>
    <?php require_once($_SERVER['DOCUMENT_ROOT'].'/inc/header.php'); ?>
    
    <!-- Content -->
    <main id="content" class="sub business"> <!-- 폴더별 class -->
        <section class="sub-content reward"> <!-- 페이지명 class -->
            <div class="section-header">
                <div class="page-path">
                    <h3>사업안내</h3>
                    <ol class="breadcrumb">
                        <li>사업안내</li>
                        <li>브레인시티 일반산업단지 조성사업</li>
                    </ol>
                </div>
                <h4 class="title">브레인시티 일반산업단지 조성사업</h4>
            </div>
            <div class="section-content">
                <nav class="dropdown nav-tab">
                    <button class="btn btn-secondary dropdown-toggle" type="button" id="nav-tab" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        만화로 보는 보상
                    </button>
                    <div class="dropdown-menu" aria-labelledby="nav-tab">
                        <ul>
                            <li><a href="/business/braincity.php">브레인시티 사업안내</a></li>
                            <li class="active"><a href="/business/reward.php">만화로 보는 보상</a></li>
                            <li><a href="/tidings/bc_noticelist.php">공지사항</a></li>
                            <li><a href="/customer/bc_faqlist.php">자주 묻는 질문</a></li>
                            <li><a href="/customer/counseling.php">온라인상담</a></li>
                        </ul>
                    </div>
                </nav>
                <article class="cartoon-slide">
                    <ul>
                        <li>
                            <figure>
                                <img src="/assets/images/business/cartoon/cartoon1.jpg" alt="만화로 보는 보상 만화">
                            </figure>
                        </li>
                        <li>
                            <figure>
                                <img src="/assets/images/business/cartoon/cartoon2.jpg" alt="만화로 보는 보상 만화">
                            </figure>
                        </li>
                        <li>
                            <figure>
                                <img src="/assets/images/business/cartoon/cartoon3.jpg" alt="만화로 보는 보상 만화">
                            </figure>
                        </li>
                        <li>
                            <figure>
                                <img src="/assets/images/business/cartoon/cartoon4.jpg" alt="만화로 보는 보상 만화">
                            </figure>
                        </li>
                        <li>
                            <figure>
                                <img src="/assets/images/business/cartoon/cartoon5.jpg" alt="만화로 보는 보상 만화">
                            </figure>
                        </li>
                        <li>
                            <figure>
                                <img src="/assets/images/business/cartoon/cartoon6.jpg" alt="만화로 보는 보상 만화">
                            </figure>
                        </li>
                        <li>
                            <figure>
                                <img src="/assets/images/business/cartoon/cartoon7.jpg" alt="만화로 보는 보상 만화">
                            </figure>
                        </li>
                        <li>
                            <figure>
                                <img src="/assets/images/business/cartoon/cartoon8.jpg" alt="만화로 보는 보상 만화">
                            </figure>
                        </li>
                        <li>
                            <figure>
                                <img src="/assets/images/business/cartoon/cartoon9.jpg" alt="만화로 보는 보상 만화">
                            </figure>
                        </li>
                        <li>
                            <figure>
                                <img src="/assets/images/business/cartoon/cartoon10.jpg" alt="만화로 보는 보상 만화">
                            </figure>
                        </li>
                        <li>
                            <figure>
                                <img src="/assets/images/business/cartoon/cartoon11.jpg" alt="만화로 보는 보상 만화">
                            </figure>
                        </li>
                        <li>
                            <figure>
                                <img src="/assets/images/business/cartoon/cartoon12.jpg" alt="만화로 보는 보상 만화">
                            </figure>
                        </li>
                        <li>
                            <figure>
                                <img src="/assets/images/business/cartoon/cartoon13.jpg" alt="만화로 보는 보상 만화">
                            </figure>
                        </li>
                        <li>
                            <figure>
                                <img src="/assets/images/business/cartoon/cartoon14.jpg" alt="만화로 보는 보상 만화">
                            </figure>
                        </li>
                        <li>
                            <figure>
                                <img src="/assets/images/business/cartoon/cartoon15.jpg" alt="만화로 보는 보상 만화">
                            </figure>
                        </li>
                        <li>
                            <figure>
                                <img src="/assets/images/business/cartoon/cartoon16.jpg" alt="만화로 보는 보상 만화">
                            </figure>
                        </li>
                        <li>
                            <figure>
                                <img src="/assets/images/business/cartoon/cartoon17.jpg" alt="만화로 보는 보상 만화">
                            </figure>
                        </li>
                        <li>
                            <figure>
                                <img src="/assets/images/business/cartoon/cartoon18.jpg" alt="만화로 보는 보상 만화">
                            </figure>
                        </li>
                    </ul>
                </article>
            </div>
        </section>
        <?php require_once($_SERVER['DOCUMENT_ROOT'].'/inc/side_quick.php'); ?>
    </main>
    
    <?php require_once($_SERVER['DOCUMENT_ROOT'].'/inc/quick.php'); ?>
    <?php require_once($_SERVER['DOCUMENT_ROOT'].'/inc/footer.php'); ?>
    <?php require_once($_SERVER['DOCUMENT_ROOT'].'/inc/docfoot.php'); ?>
    <script src="/assets/bxslider/jquery.bxslider.js"></script>
    <script>
        (function($){
            // cartoon slide
            $(document).ready(function(){
                $('.cartoon-slide ul').bxSlider({
                    auto: false,
                    autoControls: false,
                    controls: true,
                    pager: false,
                    prevText: '<i class="icon-left-open-big"><span class="sr-only">이전</span></i>',
                    nextText: '<i class="icon-right-open-big"><span class="sr-only">다음</span></i>'
                });
            });
        })(jQuery);
    </script>
</body>
</html>