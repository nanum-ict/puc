<?php require_once($_SERVER['DOCUMENT_ROOT'].'/inc/dochead.php'); ?>
<link rel="stylesheet" href="/assets/css/sub.css">
<link rel="stylesheet" href="/assets/css/customer.css">
</head>
<body>
    <?php require_once($_SERVER['DOCUMENT_ROOT'].'/inc/header.php'); ?>
    
    <!-- Content -->
    <main id="content" class="sub customer"> <!-- 폴더별 class -->
        <section class="sub-content fulfill-criteria"> <!-- 페이지명 class -->
            <div class="section-header">
                <h3 class="depth-title">고객광장</h3>
                <h4 class="title">고객서비스</h4>
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
                                    고객서비스
                                </button>
                                <div class="dropdown-menu">
                                    <a href="/customer/charter.php">고객서비스</a>
                                    <a href="/customer/faq_list.php">자주 묻는 질문</a>
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
                <nav class="dropdown nav-tab">
                    <button class="btn btn-secondary dropdown-toggle" type="button" id="nav-tab" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        사업장별 서비스 이행기준
                    </button>
                    <div class="dropdown-menu" aria-labelledby="nav-tab">
                        <ul>
                            <li><a href="/customer/charter.php">고객 서비스 헌장</a></li>
                            <li class="active"><a href="/customer/fulfill_criteria.php">사업장별 서비스 이행기준</a></li>
                            <li><a href="/customer/fulfill_standard.php">서비스 이행표준</a></li>
                        </ul>
                    </div>
                </nav>
                
                <ul class="nav tab-list" role="tablist">
                    <li class="nav-item">
                        <a class="nav-link active" data-toggle="tab" href="#tab-1" role="tab" aria-controls="tab-1" aria-selected="true">개발사업(설계 및 시공)</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" data-toggle="tab" href="#tab-2" role="tab" aria-controls="tab-2" aria-selected="false">개발사업(분양)</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" data-toggle="tab" href="#tab-3" role="tab" aria-controls="tab-3" aria-selected="false">개발사업(보상)</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" data-toggle="tab" href="#tab-4" role="tab" aria-controls="tab-4" aria-selected="false">교통약자 이동지원센터</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" data-toggle="tab" href="#tab-5" role="tab" aria-controls="tab-5" aria-selected="false">어린이교통공원</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" data-toggle="tab" href="#tab-6" role="tab" aria-controls="tab-6" aria-selected="false">공영주차장</a>
                    </li>
                </ul>
                <div class="tab-content">
                    <div class="tab-pane fade show active" id="tab-1" role="tabpanel">
                        <article class="practice">
                            <h5 class="sub-title">실천사항</h5>
                            <ol class="decimal-list type-1">
                                <li>
                                    <strong>사업계획</strong>
                                    <ul class="dashed-list">
                                        <li>개발과 보존이 조화를 이루고, 환경과 사람을 중시하는 친환경적인 개발계획을 수립하겠습니다.</li>
                                        <li>선 계획 후 개발 원칙에 입각한 체계적인 개발을 통하여 고객중심의 도시 및 주거공간 확보를 위해 노력하겠습니다.</li>
                                    </ul>
                                </li>
                                <li>
                                    <strong>설계 및 시공</strong>
                                    <ul class="dashed-list">
                                        <li>사업의 준공 전 까지 쓰레기 불법투기, 불법 적치물 방치 등 지구 내 미관을 해치는 요인을 최소화 하도록 하겠습니다.</li>
                                        <li>공사로 인한 소음, 진동, 먼지, 교통방해 등 인근 주민의 생활상 피해가 최소화 되도록 현장관리에 철저를 기하겠습니다.</li>
                                        <li>공사는 사업기간 준수를 위해 노력하겠으며, 불가피한 사유로 사업기간이 연장될 경우 분양고객께 알리고 양해를 구하겠습니다.</li>
                                        <li>토지의 사용 시기에 전력 수도, 통신시설 등을 사용하는데 지장이 없도록 관계기관과 설치시기를 협의하여 불편을 줄이겠습니다.</li>
                                        <li>부실시공 요소를 사전에 차단하기 위해 각 공종 단계별 시공상태를 점검하고, 현장점검을 통해 우수품질 확보에 최선을 다하겠습니다.</li>
                                    </ul>
                                </li>
                            </ol>
                        </article>
                        <article class="guide">
                            <h5 class="sub-title">이용안내 및 문의</h5>
                            <p class="note">
                                시공관리에 대한 안내는 홈페이지(<a href="http://www.puc.or.kr" target="_blank">www.puc.or.kr</a>) 를 통해 확인 할 수 있습니다. 보다 자세한 문의는 [평택도시공사 개발사업1처 : <a href="tel:03180248876">031-8024-8876</a>]로 연락해 주시면 정성껏 안내해 드리겠습니다.
                            </p>
                            <div class="table-responsive">
                                <table class="table">
                                    <colgroup>
                                        <col style="width: 40%;">
                                        <col style="width: 60%;">
                                    </colgroup>
                                    <thead>
                                        <tr>
                                            <th scope="col">구분</th>
                                            <th scope="col">연락처</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td>전화/팩스</td>
                                            <td>Tel : <a href="tel:03180538876">031-8053-8876</a> / Fax : 031-692-4337</td>
                                        </tr>
                                        <tr>
                                            <td>우편</td>
                                            <td>우) 17725 경기도 평택시 도일유통길 25(도일동) 2층 개발사업1처</td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </article>
                        <article class="cooperation">
                            <h5 class="sub-title">고객협조사항</h5>
                            <ol class="decimal-list">
                                <li>잘못된 사항은 반드시 지적하여 주시고, 고객께서 보실 때 모범이 되는 직원은 적극 칭찬하여 주셔서 널리 알려질 수 있도록 고객 여러분의 많은 참여를 바랍니다.</li>
                                <li>모든 민원은 실명으로 제출 부탁드리며, 고객님께서 불편 사항에 대해 개선을 요구하거나 의견을 주실 때에는 성명과 민원답변을 위하여 연락 가능한 E-mail, 연락처, 주소 등을 정확하게 기재하여 주시기 바랍니다.</li>
                            </ol>
                        </article>
                    </div>
                    <div class="tab-pane fade" id="tab-2" role="tabpanel">
                        <article class="practice">
                            <h5 class="sub-title">실천사항</h5>
                            <ol class="decimal-list type-1">
                                <li>
                                    <strong>분양정보 공개</strong>
                                    <ul class="dashed-list">
                                        <li>분양정보는 홈페이지 게시 및 현수막·일간신문 등에 공고하여 관련 정보를 고객이 쉽게 접할 수 있도록 노력하겠습니다.</li>
                                    </ul>
                                </li>
                                <li>
                                    <strong>분양계약</strong>
                                    <ul class="dashed-list">
                                        <li>분양가격은 우리 공사 관련 규정에 따라 합리적으로 결정하여 투명한 방법으로 공급하겠습니다.</li>
                                        <li>계약대상에 대한 세부 정보와 반드시 점검해야 할 사항을 사전 고지하고 고객이 이해하기 쉽게 설명하겠습니다.</li>
                                    </ul>
                                </li>
                            </ol>
                        </article>
                        <article class="guide">
                            <h5 class="sub-title">이용안내 및 문의</h5>
                            <p class="note">
                                분양에 대한 안내는 홈페이지(<a href="http://www.puc.or.kr" target="_blank">www.puc.or.kr</a>) 를 통해 확인 할 수 있습니다. 보다 자세한 문의는 [평택도시공사 개발사업2처 : <a href="tel:03180538858">031-8053-8858</a>]로 연락해 주시면 정성껏 안내해 드리겠습니다.
                            </p>
                            <div class="table-responsive">
                                <table class="table">
                                    <colgroup>
                                        <col style="width: 40%;">
                                        <col style="width: 60%;">
                                    </colgroup>
                                    <thead>
                                        <tr>
                                            <th scope="col">구분</th>
                                            <th scope="col">연락처</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td>전화/팩스</td>
                                            <td>Tel : <a href="tel:03180538858">031-8053-8858</a> / Fax : 031-692-4337</td>
                                        </tr>
                                        <tr>
                                            <td>우편</td>
                                            <td>우) 17725 경기도 평택시 도일유통길 25(도일동) 2층 개발사업1처</td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </article>
                        <article class="cooperation">
                            <h5 class="sub-title">고객협조사항</h5>
                            <ol class="decimal-list">
                                <li>분양신청 또는 계약체결 시 현실에 맞지 않거나 불편하신 사항에 대해서는 고객의 의견을 최대한 반영하여 즉시 개선토록 하겠습니다.</li>
                                <li>모든 민원은 실명으로 제출 부탁드리며, 고객님께서 불편 사항에 대해 개선을 요구하거나 의견을 주실 때에는 성명과 민원답변을 위하여 연락 가능한 E-mail, 연락처, 주소 등을 정확하게 기재하여 주시기 바랍니다.</li>
                            </ol>
                        </article>
                    </div>
                    <div class="tab-pane fade" id="tab-3" role="tabpanel">
                        <article class="practice">
                            <h5 class="sub-title">실천사항</h5>
                            <ol class="decimal-list">
                                <li>보상 및 계약방법 안내는 고객님 입장에서 이해하기 쉽도록「보상안내문」책자 별도 제작 후 개별 통지하여 드리겠습니다.</li>
                                <li>보상금의 산정은 관련 제 규정에 의거한 공인된 감정평가법인을 선정·의뢰하여 공정한 감정평가가 실시될 수 있도록 하겠습니다.</li>
                                <li>보상금에 이의가 있을 경우 관할 토지수용위원회에 고객 의견이 제대로 전달될 수 있도록 노력하고 재결이 조속히 결정될 수 있도록 하겠습니다.</li>
                                <li>토지 등 수용으로 인하여 생활의 근거를 상실하게 되는 이주 대상자에 대하여 이주대책 수립 등을 통해 안정된 생활을 영위할 수 있도록 최선을 다하겠습니다.</li>
                            </ol>
                        </article>
                        <article class="guide">
                            <h5 class="sub-title">이용안내 및 문의</h5>
                            <p class="note">
                                보상에 대한 안내는 홈페이지(<a href="http://www.puc.or.kr" target="_blank">www.puc.or.kr</a>) 를 통해 확인 할 수 있습니다. 보다 자세한 문의는 [평택도시공사 브레인시티사업단 : <a href="tel:0316624114">031-662-4114</a>]로 연락해 주시면 정성껏 안내해 드리겠습니다.
                            </p>
                            <div class="table-responsive">
                                <table class="table">
                                    <colgroup>
                                        <col style="width: 40%;">
                                        <col style="width: 60%;">
                                    </colgroup>
                                    <thead>
                                        <tr>
                                            <th scope="col">구분</th>
                                            <th scope="col">연락처</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td>전화/팩스</td>
                                            <td>Tel : <a href="tel:0316624114">031-662-4114</a> / Fax : 031-662-6224</td>
                                        </tr>
                                        <tr>
                                            <td>우편</td>
                                            <td>우) 17725 경기도 평택시 도일유통길 13-15,201호 브레인시티보상사업단</td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </article>
                        <article class="cooperation">
                            <h5 class="sub-title">고객협조사항</h5>
                            <ol class="decimal-list">
                                <li>모든 민원은 실명으로 접수하며(성명·주소·연락처 등) 익명·가명 및 본인이 접수하지 않을 경우 민원 회신이 불가능 하오니 이점 유념하여 주시기 바랍니다.(대리인 접수 시 위임장을 통한 접수 가능)</li>
                            </ol>
                        </article>
                    </div>
                    <div class="tab-pane fade" id="tab-4" role="tabpanel">
                        <article class="practice">
                            <h5 class="sub-title">실천사항</h5>
                            <ol class="decimal-list type-1">
                                <li>
                                    <strong>사업계획</strong>
                                    <ul class="dashed-list">
                                        <li>항상 웃는 얼굴로 고객에게 먼저 인사하겠습니다.</li>
                                        <li>고객을 나의 가족이라 생각하고 최선을 다해 친절하게 모시겠습니다.</li>
                                        <li>고객문의에 대해 다른 업무에 우선하여 신속하고 정확하게 답변해 드리겠습니다.</li>
                                    </ul>
                                </li>
                                <li>
                                    <strong>전화문의 응대</strong>
                                    <ul class="dashed-list">
                                        <li>전화를 신속하고 친절하게 받으며, 소속과 이름을 명확하게 밝히겠습니다.</li>
                                        <li>담당자 부재중인 경우, 업무를 대신하거나 메모를 꼭 전달하겠습니다.</li>
                                    </ul>
                                </li>
                                <li>
                                    <strong>서비스 제고 3대 실천목표</strong>
                                    <ul class="dashed-list">
                                        <li>친절하게 인사하겠습니다.</li>
                                        <li>안전하게 운행하겠습니다.</li>
                                        <li>청결한 차량 및 복장상태 유지 하겠습니다</li>
                                    </ul>
                                </li>
                                <li>
                                    <strong>서비스 제고 3대 실천목표</strong>
                                    <ul class="dashed-list">
                                        <li>음주운전 행위 금지하겠습니다.</li>
                                        <li>부정요금 징수를 하지 않겠습니다.</li>
                                        <li>불친절(폭력 및 욕설행위) 행위를 하지 않겠습니다.</li>
                                    </ul>
                                </li>
                                <li>
                                    <strong>안전운전 10대 행동실천</strong>
                                    <ul class="dashed-list">
                                        <li>규정 속도를 준수 하겠습니다</li>
                                        <li>안전거리를 확보 하겠습니다</li>
                                        <li>차량 내 흡연을 금지 하겠습니다</li>
                                        <li>졸음운전/음주운전을 하지 않겠습니다.</li>
                                        <li>신호위반을 하지 않겠습니다.</li>
                                        <li>주행 중 핸드폰 사용을 하지 않겠습니다.</li>
                                        <li>전 좌석 안전벨트 착용하겠습니다.</li>
                                        <li>주간 전조등을 켜겠습니다.</li>
                                        <li>차선변경 시 방향지시등 켜겠습니다.</li>
                                        <li>난폭운전 금지, 양보운전 생활화 하겠습니다</li>
                                    </ul>
                                </li>
                            </ol>
                        </article>
                        <article class="guide">
                            <h5 class="sub-title">이용안내 및 문의 (요금체계 및 이용안내)</h5>
                            <p class="note">
                                교통약자 이동지원센터에 대한 안내는 홈페이지(<a href="http://www.puc.or.kr" target="_blank">www.puc.or.kr</a>) 를 통해 확인 할 수 있습니다. 보다 자세한 문의는 [평택도시공사 교통사업처 : <a href="tel:0316514700">031-651-4700</a>]로 연락해 주시면 정성껏 안내해 드리겠습니다.
                            </p>
                            <div class="table-responsive">
                                <table class="table">
                                    <colgroup>
                                        <col style="width: 40%;">
                                        <col style="width: 60%;">
                                    </colgroup>
                                    <thead>
                                        <tr>
                                            <th scope="col">구분</th>
                                            <th scope="col">연락처</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td>전화/팩스</td>
                                            <td>Tel : <a href="tel:0316514700">031-651-4700</a> / Fax : 031-611-9160</td>
                                        </tr>
                                        <tr>
                                            <td>우편</td>
                                            <td>우) 17725 경기도 평택시 도일유통길 25(도일동) 1층 교통약자이동지원센터</td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </article>
                        <article class="cooperation">
                            <h5 class="sub-title">고객협조사항</h5>
                            <ol class="decimal-list">
                                <li>이용자는 예약시간에 즉시 출발할 수 있도록 지정된 승차 위치에서 대기하여 주시기 바랍니다.</li>
                                <li>이용대상자는 특별교통수단 이용 시 신원확인을 위한복지카드(신분증), 의료기관에서 발급한 진단서 또는 이용대상자 증명서 등을 소지하고 탑승하여야 하며 운전원의 확인 요구 시 제출해주시기 바랍니다.</li>
                                <li>이용대상자 및 이용신청인은 특정 차량 또는 운전원을 지정하여 신청하실 수 없습니다.</li>
                                <li>목적지에 도착한 후 별도의 신청 없이 차량을 재이용 하실 수 없습니다.</li>
                                <li>이용신청인은 목적지가 변경되었거나 이용신청을 취소할 경우에는 반드시 2시간 전에 지원센터로 통보해주시기 바랍니다.</li>
                                <li>상담원 또는 운전원이 안전운행에 필요하다고 판단되는 경우 보호자의 동승을 요청할 수 있으며, 이용자는 이를 준수하여야하고 보호자 미동승 시에는 승차하실 수 없습니다.</li>
                                <li>이용자는 교통약자의 이동을 지원하는 상담원 또는 운전원에게 안전 운행에 방해되거나 모멸감을 주는 욕설, 폭언들을 하시면 안됩니다.</li>
                                <li>이용자는 운전원의 안전운행에 방해가 되는 신체적 접촉이나 폭력 또는 과도한 음주 후 승차 등을 하시면 안됩니다.</li>
                                <li>이용자는 차량의 운행 중단을 초래하는 의도적인 차량 운행 방해와 차 실내에 오물 투기 생리현상 행위 등을 하시면 안됩니다.</li>
                                <li>특별교통수단이 관내를 벗어나 운행하는 경우는 관내에서는 치료가 불가능하거나 재활치료를 목적으로 하는 경우에 국한되며 종료시각이 나타난 진료영수증 등 증빙서류를 징구하여 현장에서 운전원에게 확인을 부탁드립니다.</li>
                                <li>이용자는 애완동물과 승차하실 수 없습니다. (장애인 보조견은 예외)</li>
                                <li>출발지와 목적지로 지정된 곳 이외에 지역을 경유하여 이용하실 수 없습니다.</li>
                                <li>운행 도중 개인적인 용무·목적 또는 보호자, 지인 등 타인을 승·하차시키기 위하여 경유 목적지로 운행을 요청하실 수 없습니다.</li>
                                <li>운행 중 목적지 경유 또는 목적지를 변경하실 수 없습니다.</li>
                                <li>이용자는 운전원의 원활하고 안전한 운행에 필요한 조치사항을 따라야 하고 이를 방해하는 행동을 해서는 아니 되며 위반 시는 이용을 제한할 수 있습니다.</li>
                                <li>운전원은 고객의 승·하차 지점에서만 지원이 가능합니다. 승·하차 지점을 벗어나는 경우 반드시 보호자에게 요청하여 주시기 바랍니다.</li>
                            </ol>
                        </article>
                    </div>
                    <div class="tab-pane fade" id="tab-5" role="tabpanel">
                        <article class="practice">
                            <h5 class="sub-title">실천사항</h5>
                            <ol class="decimal-list type-1">
                                <li>
                                    <strong>고객 응대</strong>
                                    <ul class="dashed-list">
                                        <li>항상 웃는 얼굴로 고객에게 먼저 인사하겠습니다.</li>
                                        <li>고객을 나의 가족이라 생각하고 최선을 다해 친절하게 모시겠습니다.</li>
                                        <li>고객문의에 대해 다른 업무에 우선하여 신속하고 정확하게 답변 해 드리겠습니다.</li>
                                    </ul>
                                </li>
                                <li>
                                    <strong>전화문의 응대</strong>
                                    <ul class="dashed-list">
                                        <li>전화를 신속하고 친절하게 받으며, 소속과 이름을 명확하게 밝히겠습니다.</li>
                                        <li>담당자 부재중인 경우, 업무를 대신하거나 메모를 꼭 전달하겠습니다.</li>
                                    </ul>
                                </li>
                                <li>
                                    <strong>교육 운영</strong>
                                    <ul class="dashed-list">
                                        <li>모든 교육을 정시에 시작하고, 종료 시까지 원활하게 진행하겠습니다.</li>
                                        <li>연령별 고객특성에 맞춰 교안을 다양하게 기획, 개발하겠습니다.</li>
                                        <li>상시 교육이 가능하도록 조직 및 운영체계를 꾸준히 개선하겠습니다.</li>
                                    </ul>
                                </li>
                            </ol>
                        </article>
                        <article class="guide">
                            <h5 class="sub-title">이용안내 및 문의</h5>
                            <ol class="decimal-list type-1">
                                <li>
                                    <strong>실내전시관</strong>
                                    <ul class="dashed-list type-1">
                                        <li>실내전시관은 도입부, 교통나라가 위험해요, 교통나라를 지켜줘요, 교통나라와 약속해요 등으로 구성되어 있습니다.</li>
                                        <li>주요시설물은 모형연출, 시뮬레이터, 안내사인 등으로 구성되어 있습니다.</li>
                                    </ul>
                                </li>
                                <li>
                                    <strong>교육내용</strong>
                                    <ul class="dashed-list">
                                        <li>교육은 실내교육, 실외교육, 시청각교육, 특별 교육으로 구성되어 있습니다.</li>
                                    </ul>
                                </li>
                                <li>
                                    <strong>교육비는 ‘무료’입니다.</strong>
                                </li>
                                <li>
                                    <strong>교육대상 및 예약, 운영시간</strong>
                                    <p class="note">
                                        어린이 교통공원에 대한 안내는 홈페이지(<a href="http://tp.pyeongtaek.go.kr/" target="_blank">http://tp.pyeongtaek.go.kr</a>) 를 통해 확인 할 수 있습니다. 보다 자세한 문의나 기타 불편사항이 있을 시에는 [평택도시공사 교통사업처 : <a href="tel:03180248690">031-8024-8690</a>]로 연락해 주시면 정성껏 안내해 드리겠습니다.
                                    </p>
                                    <div class="table-responsive">
                                        <table class="table">
                                            <colgroup>
                                                <col style="width: 40%;">
                                                <col style="width: 60%;">
                                            </colgroup>
                                            <thead>
                                                <tr>
                                                    <th scope="col">구분</th>
                                                    <th scope="col">연락처</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <tr>
                                                    <td>전화/팩스</td>
                                                    <td>Tel : <a href="tel:03180248690">031-8024-8690</a> / Fax : 031-8024-8691</td>
                                                </tr>
                                                <tr>
                                                    <td>우편</td>
                                                    <td>우) 17816 경기도 평택시 안중읍 현화6길 48 어린이교통공원</td>
                                                </tr>
                                            </tbody>
                                        </table>
                                    </div>
                                </li>
                            </ol>
                        </article>
                        <article class="cooperation">
                            <h5 class="sub-title">고객협조사항</h5>
                            <ol class="decimal-list">
                                <li>9세 이하의 어린이들은 보호자 동반 시 입장 가능합니다.</li>
                                <li>어린이 보호시설이므로 실내전시장 뿐만 아니라 야외 공간도 금연구역입니다.</li>
                                <li>교육장 내에는 별도의 식사장소가 마련되어 있지 않으며 음식물 반입을 금지하고 있습니다.</li>
                                <li>애완동물 입장은 불가합니다.</li>
                                <li>입장 전 휴대전화 전원은 꺼주시거나, 진동으로 전환하여 주십시오.</li>
                                <li>원활한 수업진행을 위해 수업 시작 5분 전까지 입장하여 주시기 바랍니다.</li>
                                <li>단체교육이 진행되는 동안에는 원활한 수업진행을 위하여 개별관람 입장을 제한합니다.</li>
                                <li>관람예절을 지키지 않아 타인의 관람에 피해를 주는 경우에는 관람을 제한할 수 있습니다.</li>
                            </ol>
                        </article>
                    </div>
                    <div class="tab-pane fade" id="tab-6" role="tabpanel">
                        <article class="practice">
                            <h5 class="sub-title">실천사항</h5>
                            <ol class="decimal-list type-1">
                                <li>
                                    <strong>고객 응대</strong>
                                    <ul class="dashed-list">
                                        <li>항상 웃는 얼굴로 고객에게 먼저 인사하겠습니다.</li>
                                        <li>고객을 나의 가족이라 생각하고 최선을 다해 친절하게 모시겠습니다.</li>
                                        <li>고객문의에 대해 다른 업무에 우선하여 신속하고 정확하게 답변 해 드리겠습니다.</li>
                                    </ul>
                                </li>
                                <li>
                                    <strong>전화문의 응대</strong>
                                    <ul class="dashed-list">
                                        <li>전화를 신속하고 친절하게 받으며, 소속과 이름을 명확하게 밝히겠습니다.</li>
                                        <li>담당자 부재중인 경우, 업무를 대신하거나 메모를 꼭 전달하겠습니다.</li>
                                    </ul>
                                </li>
                                <li>
                                    <strong>안전 및 환경관리</strong>
                                    <ul class="dashed-list">
                                        <li>안전하고 편리하게 주차장 이용할 수 있도록 안전 및 시설관리에 만전을 기하겠습니다.</li>
                                        <li>고객들이 자주 이용하시는 화장실을 청결히 유지하여 사용하는데 불편이 없도록 하겠습니다.</li>
                                        <li>주차시설물은 주기적으로 점검 및 정비를 실시하겠습니다.</li>
                                    </ul>
                                </li>
                                <li>
                                    <strong>청렴한 근무실태 확립</strong>
                                    <ul class="dashed-list">
                                        <li>주차요금 징수 시에는 징수 금액에 대하여 고객님께 복창을 실시하여 금전관련 착오가 발생하지 않도록 하겠습니다.</li>
                                    </ul>
                                </li>
                            </ol>
                        </article>
                        <article class="guide">
                            <h5 class="sub-title">이용안내 및 문의 (이용안내 및 요금체계 등)</h5>
                            <ol class="decimal-list type-1">
                                <li>
                                    <strong>공영주차장 현황 및 이용안내</strong>
                                    <ul class="dashed-list type-1">
                                        <li>평택도시공사 공영주차장 홈페이지 (<a href="http://parking.puc.or.kr/parking_guide.php" target="_blank">http://parking.puc.or.kr/parking_guide.php</a> 참조)</li>
                                    </ul>
                                </li>
                                <li>
                                    <strong>공영주차장 요금체계</strong>
                                    <ul class="dashed-list">
                                        <li>평택도시공사 공영주차장 홈페이지 (<a href="http://parking.puc.or.kr/charge.php" target="_blank">http://parking.puc.or.kr/charge.php</a> 참조)</li>
                                    </ul>
                                    <p class="note">
                                         보다 자세한 문의나 기타 불편사항이 있을 시에는 [평택도시공사 교통사업처 : <a href="tel:03180538895">031-8053-8895</a>]로 연락해 주시면 정성껏 안내해 드리겠습니다.
                                    </p>
                                    <div class="table-responsive">
                                        <table class="table">
                                            <colgroup>
                                                <col style="width: 40%;">
                                                <col style="width: 60%;">
                                            </colgroup>
                                            <thead>
                                                <tr>
                                                    <th scope="col">구분</th>
                                                    <th scope="col">연락처</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <tr>
                                                    <td>전화/팩스</td>
                                                    <td>Tel : <a href="tel:03180538895">031-8053-8895</a> / Fax : 031-611-9160</td>
                                                </tr>
                                                <tr>
                                                    <td>우편</td>
                                                    <td>우) 17725 경기도 평택시 도일유통길 25(도일동) 1층 교통사업처</td>
                                                </tr>
                                            </tbody>
                                        </table>
                                    </div>
                                </li>
                            </ol>
                        </article>
                        <article class="cooperation">
                            <h5 class="sub-title">고객협조사항</h5>
                            <ol class="decimal-list">
                                <li>공영주차장은 시민 모두의 시설이므로 청결하게 사용 부탁드립니다.</li>
                                <li>공영주차장내 공회전 및 주차면에서 상행위 등 주차용도를 벗어난 행위를 자제해 주시길 바랍니다.</li>
                                <li>주차 시 옆 주차선을 넘지 않도록 하여 주시길 바랍니다.</li>
                                <li>주차장 만차 시 이중주차를 하여 타인의 차량통행에 불편을 초래하는 행동을 자제해 주시길 바랍니다.</li>
                                <li>주차장 근무자들도 고객여러분의 이웃이기에 폭언 및 욕설을 자제 부탁드립니다.</li>
                                <li>감면 및 면제 대상 차량은 출차 시 반드시 관련 증빙자료를 제시 부탁드리며, 노외주차장은 차량 출차 시 정산기에 설치된 ‘호출버튼’을 누르시거나 주차관제센터(031-692- 3431~2)로 전화하셔서 감면 요청 부탁드립니다.</li>
                                <li>차량 출차 시에는 영수증을 받으시고 미 발급 시에는 신고하여 주시기 바랍니다.</li>
                            </ol>
                        </article>
                    </div>
                </div>
            </div>
        </section>
        
        
    </main>
    
    <?php require_once($_SERVER['DOCUMENT_ROOT'].'/inc/quick.php'); ?>
    <?php require_once($_SERVER['DOCUMENT_ROOT'].'/inc/footer.php'); ?>
    <?php require_once($_SERVER['DOCUMENT_ROOT'].'/inc/docfoot.php'); ?>
</body>
</html>