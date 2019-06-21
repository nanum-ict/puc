<?php require_once($_SERVER['DOCUMENT_ROOT'].'/inc/dochead.php'); ?>
<link rel="stylesheet" href="/assets/css/sub.css">
<link rel="stylesheet" href="/assets/css/parcelout.css">
</head>
<body>
    <?php require_once($_SERVER['DOCUMENT_ROOT'].'/inc/header.php'); ?>
    
    <!-- Content -->
    <main id="content" class="sub parcelout"> <!-- 폴더별 class -->
        <section class="sub-content faqlist"> <!-- 페이지명 class -->
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
                        보상FAQ
                    </button>
                    <div class="dropdown-menu" aria-labelledby="nav-tab">
                        <ul>
                            <li><a href="/parcelout/examination_list.php">고시공고</a></li>
                            <li><a href="/parcelout/compensation.php">보상안내</a></li>
                            <li><a href="/parcelout/request_write.php">분묘신청접수</a></li>
                            <li class="active"><a href="/parcelout/faq_list.php">보상FAQ</a></li>
                        </ul>
                    </div>
                </nav>
                <div class="box">
                    <div class="content">
                        <strong>평택도시공사 홈페이지 이용자 여러분께서 자주 묻는 질문을 정리하였습니다.</strong>
                        <p>방문자들께서 쉽게 편리하게 이용할 수 있는 공간을 만드는 평택도시공사가 되겠습니다.</p>
                    </div>
                </div>
                <div class="search-form">
                    <form action="#">
                        <div class="form-group">
                            <input type="text" id="board-search" class="form-control" placeholder="검색어를 입력해 주세요.">
                            <label for="board-search" class="sr-only">게시판 검색</label>
                            <button type="submit" class="btn btn-search">
                                <i class="icon-search">
                                    <span class="sr-only">검색버튼</span>
                                </i>
                            </button>
                        </div>
                    </form>
                </div>
                <article class="faq-list">
                    <ul>
                        <li class="item active">
                            <a href="javascript:;" class="question" role="button">보상가격과 개별공시지가가 차이가 날 수 있는지?</a>
                            <div class="answer">
                                <div class="content">
                                    개별공시지가는 과세 등의 목적으로 대량의 토지가격을 용이하게 산정하기 위해 토지가격비준표 라는 일률적인 산식에 따라 산정하고, 보상가격은 감정평가사가 보상대상토지의 개별특성을 정밀하게 조사하여 이를 표준지 공시지가와 비교하여 평가하는 등 가격산정 방식이 서로 다르기 때문에 차이가 날 수 있습니다.
                                </div>
                            </div>
                        </li>
                        <li class="item">
                            <a href="javascript:;" class="question" role="button">공부상 지목이 임야이나 이를 개간하여 농지로 이용한 경우 평가방법은?</a>
                            <div class="answer">
                                <div class="content">
                                    지목이 임야이나 산지전용허가를 받지 아니하고 이를 개간하여 3년 이상 농지로 이용하여 농지법상 농지에 해당되는 경우에는 농지로 현황 평가하여 보상합니다.<br>
                                    다만, 개발제한구역 내에서 영농을 위한 토지의 형질변경 등 불법형질 변경이 명확한 경우에는 종전의 지목대로 보상합니다.(개발제한구역 지정 이전에 농지로 형질변경된 경우 제외)<br>
                                    또한 지목이 임야인 토지로서 그 형질을 변경하지 아니하고 다년생 식물의 재배에 이용되는 토지는(단순한 수종갱신 등에 해당하는 경우)<br>농지법상의 농지에 해당하지 아니하므로 대상에서 제외합니다.<br>
                                </div>
                            </div>
                        </li>
                        <li class="item">
                            <a href="javascript:;" class="question" role="button">건축물을 이전비로 보상할 때 현실적으로 가옥 등은 건축물 이전이 불가능하므로 취득보상을 해야 하지 않나?</a>
                            <div class="answer">
                                <div class="content">
                                    건축물은 해체비, 운반비 및 건축비 등 이전에 소요되는 비용으로 평가합니다만, 사실상 이전이 어렵거나 이전하여서는 종래의 목적대로 사용하는 것이 불가능할 경우에는 취득가격으로 평가합니다.
                                </div>
                            </div>
                        </li>
                        <li class="item">
                            <a href="javascript:;" class="question" role="button">무허가건축물 등에 대한 보상은?</a>
                            <div class="answer">
                                <div class="content">
                                    '89.1.24 이전에 지어진 무허가(무신고) 주거용 건축물은 적법한건축물로 보상(최소보상액 5백만원)하고 이주대책에 포함되며, '89.1.25 이후의 불법 건축물은 평가금액대로 보상하며 이주대책에서 제외하게 됩니다.
                                </div>
                            </div>
                        </li>
                        <li class="item">
                            <a href="javascript:;" class="question" role="button">불법건축물에 거주하는 세입자, 소유자의 주거이전비는 어떻게 되나?</a>
                            <div class="answer">
                                <div class="content">
                                    관계법령에 의하여 허가나 신고를 요함에도 불구하고, 허가나 신고 없이 건축된 건축물에 거주하는 세입자 또는 소유자는 주거이전비 지급대상에서 제외됩니다.<br>
                                    다만,'89.1.24 이전 건축된 무허가 등의 건축물에 거주한 세입자와 소유자에게는 주거 이전비를 지급하며, '89.1.25 이후 건축된 무허가 건축물의 경우 공람공고일 1년이전부터 거주한 세입자에 한해 주거이전비를 지급합니다.
                                </div>
                            </div>
                        </li>
                        <li class="item">
                            <a href="javascript:;" class="question" role="button">유골이 묻혀있지 않은 가묘는 분묘이전비 및 이전보조비 대상이 되는지?</a>
                            <div class="answer">
                                <div class="content">
                                    분묘의 이장비 및 이전보조비는 분묘를 이장하는 경우에 지급하는 것이므로 가묘는 지급대상이 아닙니다.
                                </div>
                            </div>
                        </li>
                        <li class="item">
                            <a href="javascript:;" class="question" role="button">하천부지 경작 시 농업손실보상 대상에 해당되나?</a>
                            <div class="answer">
                                <div class="content">
                                    국유하천부지에 대하여 정당하게 하천관리청으로부터 점용허가를 받아 경작하고 있는 경우에는 농업손실보상 대상이나, 허가 없이 무단으로 점유하여 경작하는 경우 농업손실보상 대상에 해당되지 않습니다.
                                </div>
                            </div>
                        </li>
                        <li class="item">
                            <a href="javascript:;" class="question" role="button">농지소유자의 당해지역 거주여부 기준은?</a>
                            <div class="answer">
                                <div class="content">
                                    당해지역에 거주한다 함은 당해 토지 소재지의 시 ․ 구(자치구를 말함) 또는 읍 ․ 면지역(도농 복합형태의 시의 읍 ․ 면 포함) 내지 당해 지역과 연접한 시 ․ 구 ․ 읍 ․ 면 지역에 거주하는 것을 의미합니다.
                                </div>
                            </div>
                        </li>
                        <li class="item">
                            <a href="javascript:;" class="question" role="button">이주자택지 대상자를 1년 이상 거주한 분으로 제한하는 이유는?</a>
                            <div class="answer">
                                <div class="content">
                                    이주자택지 공급대상자를 기준일 현재 1년 이상 거주한 분으로 제한한 것은, 위장전입 등의 불법행위를 통하여 이주자택지를 노린 투기를 방지하고 원주민을 보호하기 위한 조치입니다.
                                </div>
                            </div>
                        </li>
                        <li class="item">
                            <a href="javascript:;" class="question" role="button">세입자대책 대상자 자격요건은?</a>
                            <div class="answer">
                                <div class="content">
                                    예정지구 지정을 위한 공람공고일 현재 예정지구에 3월이상 거주한 세입자가 그 대상이 됩니다.<br>
                                    다만, 불법건축물에 거주한 경우에는 세입자대책 대상자가 될 수 없고 (다만, 공람공고 1년 전부터 불법건축물에 거주한 세입자는 보상대상임), 당해 사업과 관계없는 사유로 예정지역 밖으로 이전하는 경우에도 세입자대책 대상이 되지 않습니다.
                                </div>
                            </div>
                        </li>
                    </ul>
                </article>
            </div>
        </section>
        
    </main>
    
    <?php require_once($_SERVER['DOCUMENT_ROOT'].'/inc/quick.php'); ?>
    <?php require_once($_SERVER['DOCUMENT_ROOT'].'/inc/footer.php'); ?>
    <?php require_once($_SERVER['DOCUMENT_ROOT'].'/inc/docfoot.php'); ?>
    <script src="/assets/js/sub.js"></script>
</body>
</html>