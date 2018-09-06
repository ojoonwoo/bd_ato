		<div class="popup pt-pass" id="pt-pass">
			<!-- <button type="button" class="popup-close" data-popup="@close"></button> -->
			<button type="button" class="popup-close"  onclick="confirm_close()"></button>
			<div class="inner">
				<div class="title-block">
					<img src="./images/popup_title_img_cup.png" alt="">
					<h5>PT에 통과하셨습니다<i>!</i></h5>
					<p class="check-guide-msg">
						체크리스트를 확인하고 나에게 맞는 PT 크림을 선택해주세요
					</p>
				</div>
				<div class="check-block">
					<div class="check-wrapper">
						<!-- <div class="check is-checked" data-value="light"> -->
						<div class="check" data-value="light">
							<div class="checkbox"></div>
						</div>
						<div class="check" data-value="medium">
							<div class="checkbox"></div>
						</div>
						<div class="check" data-value="heavy">
							<div class="checkbox"></div>
						</div>
					</div>
				</div>
				<div class="tab-block">
					<div class="tab-wrapper init-state">
						<div class="tab light" data-tab-target="light">
							<div class="gage">
								<span></span>
								<span></span>
								<span></span>
								<span></span>
								<span class="bg"></span>
								<span class="bg"></span>
							</div>
							<div class="text">
								<p>라이트 PT</p>
								<span>Light</span>
							</div>
							<div class="view">
								view
							</div>
						</div>
						<div class="tab medium" data-tab-target="medium">
							<div class="gage">
								<span></span>
								<span></span>
								<span class="bg"></span>
								<span class="bg"></span>
								<span class="bg"></span>
								<span class="bg"></span>
							</div>
							<div class="text">
								<p>미디움 PT</p>
								<span>Medium</span>
							</div>
							<div class="view">
								view
							</div>
						</div>
						<div class="tab heavy" data-tab-target="heavy">
							<div class="gage">
								<span class="bg"></span>
								<span class="bg"></span>
								<span class="bg"></span>
								<span class="bg"></span>
								<span class="bg"></span>
								<span class="bg"></span>
							</div>
							<div class="text">
								<p>헤비 PT</p>
								<span>Heavy</span>
							</div>
							<div class="view">
								view
							</div>
						</div>
					</div>
					<div class="content-opened">
						<div class="tab-wrapper">
							<div class="tab" data-tab-target="light">
								<span>라이트 PT</span>
							</div>
							<div class="tab" data-tab-target="medium">
								<span>미디움 PT</span>
							</div>
							<div class="tab" data-tab-target="heavy">
								<span>헤비 PT</span>
							</div>
						</div>
						<div class="tab-contents">
							<div class="content light">
								<img src="./images/tab_content_light.jpg" alt="">
							</div>
							<div class="content medium">
								<img src="./images/tab_content_medium.jpg" alt="">
							</div>
							<div class="content heavy">
								<img src="./images/tab_content_heavy.jpg" alt="">
							</div>
						</div>
					</div>
				</div>
<!--				<p class="msg">당신에게 맞는 PT크림을 보내드릴게요</p>-->
				<button type="button" class="btn-result" id="rs1">
					다음 단계
				</button>
			</div>
		</div>
		<div class="popup pt-pass _2" id="pt-pass2">
			<button type="button" class="popup-close" onclick="confirm_close()"></button>
			<div class="inner">
				<div class="title-block">
					<img src="./images/popup_title_img_cup.png" alt="">
					<h5>PT에 통과하셨습니다<i>!</i></h5>
					<p>당신에게 맞는 PT크림을 보내드릴게요</p>
				</div>
				<div class="input-block">
					<div class="input-group">
						<div class="guide">
							<span>이름</span>
						</div>
						<div class="input">
							<input type="text" id="mb_name">
						</div>
					</div>
					<div class="input-group n3">
						<div class="guide">
							<span>전화번호</span>
						</div>
						<div class="input">
							<input type="tel" id="mb_phone1" onkeyup="lengthCheck(this, 3)">
							<span>-</span>
							<input type="tel" id="mb_phone2" onkeyup="lengthCheck(this, 4)">
							<span>-</span>
							<input type="tel" id="mb_phone3" onkeyup="lengthCheck(this, 4)">
						</div>
					</div>
					<div class="input-group">
						<div class="guide">
							<span>주소</span>
						</div>
						<div class="input">
							<input type="text" id="mb_addr1" readonly style="padding-right: 20px;text-overflow: ellipsis;">
							<button type="button" class="search find-addr"></button>
						</div>
					</div>
					<div class="input-group">
						<div class="guide">
							<span style="color: #ffffff;">주소2</span>
						</div>
						<div class="input">
							<input type="text" id="mb_addr2">
						</div>
					</div>
				</div>
				<!-- <div class="input-guide-msg">
					입력하신 정보로 경품이 발송되니 정확하게 입력해주세요<br>
					부정확한 정보 입력으로 경품 미발송은 책임지지 않습니다
				</div> -->
				<div class="terms-block">
					<div class="terms-group">
						<a class="view-terms" data-popup="#terms1">
							개인 정보 수집 및 이용약관보기
							<img src="./images/terms_arrow.png" alt="">
						</a>
						<div class="check">
							<label for="agree1" class="check-target"></label>
							<input type="checkbox" class="" id="agree1">
							<span class="checkbox"></span>
							<label for="agree1">개인 정보 수집 및 이용에 동의합니다</label>
						</div>
					</div>
					<div class="terms-group">
						<a class="view-terms" data-popup="#terms2">
							개인 정보 취급 위탁 약관 보기
							<img src="./images/terms_arrow.png" alt="">
						</a>
						<div class="check">
							<label for="agree2" class="check-target"></label>
							<input type="checkbox" id="agree2">
							<span class="checkbox"></span>
							<label for="agree2">개인 정보 취급 위탁에 동의합니다</label>
						</div>
					</div>
				</div>
				<button type="button" class="btn-result" id="rs2">
					PT 결과 보기
				</button>
				<div class="input-guide-msg">
					입력하신 정보로 경품이 발송되니 정확하게 입력해주세요<br>
					부정확한 정보 입력으로 경품 미발송은 책임지지 않습니다
				</div>
			</div>
		</div>
		<div class="popup pt-result" id="pt-result">
			<!-- <button type="button" class="popup-close" data-popup="@close"></button> -->
			<button type="button" class="popup-close" onclick="location.href='index.php';"></button>
			<div class="inner">
				<div class="title-block custom-border">
					<img src="./images/popup_title_img_medi.png" alt="">
					<div class="wrap">
						<h5>PT 결과</h5>
						<p>
							<span>Crème</span>
							<span>PP Baume</span>
							<span>Intensive Baume</span>
						</p>
					</div>
				</div>
				<div class="img-block">
					<img src="./images/popup_atoderm_img.png" alt="" id="rs_goods">
				</div>
				<div class="text-block custom-border">
					<p class="your-status">
						미디움 PT를 선택한 당신은 <b>만성 건성</b>입니다
					</p>
					<p class="need">
						아토덤 PP밤으로 피부 PT가 필요합니다
					</p>
					<div class="msg">(선택하신 PT에 맞는 샘플 키트는 9월 17일 이후 일괄 배송됩니다)</div>
				</div>
				<div class="caution-block">
					<p>- 부정한 방법으로 이벤트 참여시 당첨 선발에서 제외됩니다.</p>
					<p>- 동일인 또는 동일 주소지에는 한 개의 키트만 발송됩니다.</p>
					<p>- 입력하신 정보로 경품이 발송되오니 부정확한 정보 입력으로 <br><span>인한 경품 미발송은 책임지지 않습니다.</span></p>
					<p>- 개인정보취급 및 수집/위탁 약관에 미동의시 이벤트에 참여할 수<br><span>없습니다.</span></p>
					<p>- 이벤트 일정 및 경품은 사정에 따라 변경 될 수 있습니다.<br><span>변경 시 홈페이지에서 재공지됩니다.</span></p>
					<p>- 이벤트 및 경품 문의 dy.ahn@minivertising.kr</p>
					<p class="indent">070-4888-1164(평일 10:00~18:00/점심시간 제외 13:00~14:00)</p>
				</div>
			</div>
		</div>
		<div class="popup terms _1" id="terms1">
			<button type="button" class="popup-close" data-popup="@close"></button>
			<div class="inner">
				<img src="./images/popup_terms1_cnt.png" alt="">
			</div>
		</div>
		<div class="popup terms _2" id="terms2">
			<button type="button" class="popup-close" data-popup="@close"></button>
			<div class="inner">
				<img src="./images/popup_terms2_cnt.png" alt="">
			</div>
		</div>
		<div class="popup pt-fail" id="pt-fail">
			<button type="button" class="popup-close" onclick="location.reload();"></button>
			<div class="inner">
				<div class="title-block">
					<img src="./images/popup_title_img_health.png" alt="">
					<h5>PT에 재도전해주세요<i>!</i></h5>
					<p>
						아쉽게 PT 도전에 실패하셨습니다<br>
						다시 한 번 더 빠르게 아토덤을 발라<br>
						PT에 통과하세요!
					</p>
				</div>
				<button class="btn-retry" onclick="location.reload();">
					재도전
				</button>
			</div>
		</div>
		<div class="popup pt-success" id="pt-success">
			<button type="button" class="popup-close" onclick="pt_draw();"></button>
			<div class="inner">
				<div class="title-block">
					<img src="./images/popup_title_img_health.png" alt="">
					<h5>피부 체력 강화 성공<i>!</i></h5>
					<p>
						PT크림 당첨을 확인해보세요!
					</p>
				</div>
				<button class="btn-retry" onclick="pt_draw();">
					확인하기
				</button>
			</div>
		</div>
		<div class="popup pt-retry" id="pt-retry">
			<button type="button" class="popup-close" onclick="location.reload();"></button>
			<div class="inner">
				<div class="title-block">
					<img src="./images/popup_title_img_health.png" alt="">
					<h5>아쉬워요<i>!</i></h5>
					<p>
						한 번 더 PT에 도전해보세요!
					</p>
				</div>
				<button class="btn-retry" onclick="location.reload();">
					확인하기
				</button>
			</div>
		</div>
