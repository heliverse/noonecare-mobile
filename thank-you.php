<?php ?>
<!DOCTYPE html>
<html amp lang="en">
	<head>
		<meta charset="utf-8" />
		<script async src="https://cdn.ampproject.org/v0.js"></script>
		<title>OneCare - A Chain of Smart Diabetes Clinics</title>
		<link rel="canonical" href="https://onecare.co.in" />
		<link
			rel="preconnect"
			href="https://amp.dev/documentation/guides-and-tutorials/start/create/basic_markup/"
		/>
		<meta name="viewport" content="width=device-width,minimum-scale=1,initial-scale=1" />
		<link
			href="https://fonts.googleapis.com/css2?family=Lato&family=Libre+Baskerville&family=Libre+Caslon+Text&family=Roboto&display=swap"
			rel="stylesheet"
		/>
		<script
			async
			custom-element="amp-selector"
			src="https://cdn.ampproject.org/v0/amp-selector-0.1.js"
		></script>
		<script
			async
			custom-element="amp-accordion"
			src="https://cdn.ampproject.org/v0/amp-accordion-0.1.js"
		></script>

		<style amp-boilerplate>
			body {
				-webkit-animation: -amp-start 8s steps(1, end) 0s 1 normal both;
				-moz-animation: -amp-start 8s steps(1, end) 0s 1 normal both;
				-ms-animation: -amp-start 8s steps(1, end) 0s 1 normal both;
				animation: -amp-start 8s steps(1, end) 0s 1 normal both;
			}

			@-webkit-keyframes -amp-start {
				from {
					visibility: hidden;
				}

				to {
					visibility: visible;
				}
			}

			@-moz-keyframes -amp-start {
				from {
					visibility: hidden;
				}

				to {
					visibility: visible;
				}
			}

			@-ms-keyframes -amp-start {
				from {
					visibility: hidden;
				}

				to {
					visibility: visible;
				}
			}

			@-o-keyframes -amp-start {
				from {
					visibility: hidden;
				}

				to {
					visibility: visible;
				}
			}

			@keyframes -amp-start {
				from {
					visibility: hidden;
				}

				to {
					visibility: visible;
				}
			}
		</style>
		<noscript>
			<style amp-boilerplate>
				body {
					-webkit-animation: none;
					-moz-animation: none;
					-ms-animation: none;
					animation: none;
				}
			</style>
		</noscript>

		<style amp-custom>
			* {
				margin: 0;
				padding: 0;
				-webkit-font-smoothing: antialiased;
				box-sizing: border-box;
				font-family: "Lato", sans-serif;
			}

			#container {
				max-width: 728px;
				background: #f6f6f6;
				margin: auto;
			}

			h1 {
				color: #4e4e4e;
				letter-spacing: 0em;
				margin: 10px 0px;
			}

			h2 {
				color: #4e4e4e;
				margin: 10px 0px;
				letter-spacing: 0em;
			}

			h3 {
				color: #4e4e4e;
				margin: 10px 0px;
			}

			h4 {
				color: #4e4e4e;
			}

			p {
				color: #4e4e4e;
			}

			.pink-shd {
				background: linear-gradient(180deg, #ffd7e2 -4.33%, #ffefd4 109.25%);
			}

			.blu-txt {
				color: #28b1da;
			}

			.blue-bg {
				color: white;
				background: #28b1da;
			}

			.orange-txt {
				color: #f07162;
			}

			.gray-txt {
				color: #787b7d;
			}

			.drk-blu-txt {
				color: #14566a;
			}

			.center-txt {
				text-align: center;
			}

			.pink-txt {
				color: #f1647b;
			}

			.black {
				color: #4e4e4e;
			}

			.white {
				color: white;
			}

			.flex {
				display: flex;
				justify-content: flex-start;
				align-items: center;
			}

			.flex1 {
				display: flex;
				align-items: flex-start;
				justify-content: flex-start;
			}

			.f-s-30 {
				font-size: 30px;
				line-height: 36px;
			}

			.f-s-24 {
				font-size: 24px;
				line-height: 30px;
			}

			.f-s-18 {
				font-size: 18px;
				line-height: 23px;
			}

			.f-s-16 {
				font-size: 16px;
				line-height: 21px;
			}

			.f-s-14 {
				font-size: 14px;
				line-height: 20px;
			}

			.f-s-10 {
				font-size: 10px;
				line-height: 12px;
			}

			.f-s-12 {
				font-size: 12px;
				line-height: 15px;
			}

			.f-w-400 {
				font-weight: 400;
			}

			.f-w-700 {
				font-weight: 700;
			}

			.f-w-600 {
				font-weight: 600;
			}

			.f-w-500 {
				font-weight: 500;
			}

			.f-s-i {
				font-family: "Inter";
			}

			.f-s-r {
				font-family: "Roboto";
			}

			.f-s-L {
				font-family: "Libre Caslon Text", serif;
			}

			.f-s-LR {
				font-family: "Libre Baskerville", serif;
			}

			.m-t-10 {
				margin: 10px 0px;
			}

			footer nav div {
				display: flex;
				align-items: center;
			}

			footer {
				background-color: white;
			}

			footer nav div:last-child h3 {
				font-weight: 100;
			}

			footer nav {
				justify-content: center;
				padding: 10px;
				height: 100%;
				width: 95%;
				align-items: center;
				display: flex;
				margin: auto;
			}

			.logo {
				margin-right: 15px;
				width: 165px;
			}

			footer nav div:last-child {
				border-left: 1px solid gray;
				padding: 0px 10px;
				font-weight: 100;
			}

			#user-say-wrapper {
				display: flex;
				justify-content: space-between;
			}

			#user-say-wrapper > div {
				flex: 1;
				position: relative;
			}

			#over-say-review-wrapper > div {
				margin: 20px auto;
				background-color: white;
				padding: 10px;
				display: flex;
				border-radius: 10px;
				/* width: 80%; */
				justify-content: space-between;
				align-items: center;
			}

			.over-say-review-img-wrapper {
				width: 22%;
				padding: 5px;
				margin: auto;
				border: 1px solid #c4c4c4;
				border-radius: 100px;
			}

			.over-say-review-detail-wrapper {
				width: 75%;
			}
			#top {
				position: relative;
			}
			.study-img {
				position: relative;
				bottom: -30px;
				right: -30px;
			}
			#top,
			#FAQ {
				background: #d9f4ff;
			}

			#FAQ div {
				max-width: 500px;
				margin: auto;
			}

			#FAQ div > div {
				padding: 10px 20px;
				background-color: #28b1da;
				margin: 20px;
				justify-content: space-between;

				box-shadow: 0px 20px 40px 0px #eef0f2;
			}

			section {
				padding: 30px;
			}
			.amp-accordion__header {
				border: none;
				background-color: white;
				border-radius: 10px;
				padding: 0px 10px;
				box-shadow: 0px 20px 40px 0px #eef0f2;
			}
			.btn {
				margin: 40px;
				padding: 15px;
				font-size: 18px;
				font-weight: 700;
				border-radius: 6px;
			}
			a {
				text-decoration: none;
			}
		</style>
	</head>

	<body>
		<div id="container">
			<section id="top">
				<h1 class="f-s-30 pink-txt center-txt">Thank you for sharing your details.</h1>
				<h4 class="f-s-20 center-txt">
					We will reach out to you shortly & help you with your query.
				</h4>

				<div class="btn center-txt blue-bg">
					<a class="white" href="/index.html">Continue Exploring</a>
				</div>

				<div>
					<h2 class="pink-txt f-s-30">
						Every Diabetes Battle Is Unique.<br />
						<span style="color: black">
							We're Here To Help<br />
							You Through Yours
						</span>
					</h2>
				</div>
				<div class="study-img">
					<amp-img src="./assest/study.png" width="200" height="130" layout="responsive" alt="logo">
					</amp-img>
				</div>

				<div></div>
			</section>
			<section id="user-say" class="pink-shd">
				<div id="user-say-wrapper">
					<div id="over-say-review">
						<h1 class="f-s-24 f-w-700 center-txt">Our Verified Customer reviews</h1>
						<p class="f-s-14 f-w-400 center-txt f-s-LR">1000+ reviews</p>

						<div id="over-say-review-wrapper">
							<div>
								<div class="over-say-review-img-wrapper">
									<amp-img
										src="./assest/google.svg "
										width="1"
										height="1"
										layout="responsive"
										alt=""
									>
									</amp-img>
								</div>
								<div class="over-say-review-detail-wrapper">
									<h4 class="f-s-16 f-s-700 orange-txt">Laxminarasimha Reddy</h4>
									<p style="font-style: italic" class="f-s-12 gray-txt f-w-400">
										Verified Customer
									</p>
									<div style="width: 60px; margin: 5px 0px">
										<amp-img
											src="./assest/stars.webp"
											width="4"
											height="1"
											layout="responsive"
											alt="logo"
										>
										</amp-img>
									</div>

									<p class="f-s-14 f-w-400 gray-txt">
										I came all the way from Gulbarga I am Very Happy with Service. Highly
										professional staff and Doctor thanks to Dr Vikram and Vasu
									</p>
								</div>
							</div>

							<div>
								<div class="over-say-review-img-wrapper">
									<amp-img
										src="./assest/google.svg"
										width="1"
										height="1"
										layout="responsive"
										alt=""
									>
									</amp-img>
								</div>

								<div class="over-say-review-detail-wrapper">
									<h4 class="f-s-16 f-w-700 orange-txt">Deepa Gupta</h4>
									<p style="font-style: italic" class="f-s-12 gray-txt f-w-400">
										Verified Customer
									</p>
									<div style="width: 60px; margin: 5px 0px">
										<amp-img
											src="./assest/stars.webp"
											width="4"
											height="1"
											layout="responsive"
											alt="logo"
										>
										</amp-img>
									</div>
									<p class="f-s-14 f-w-400 gray-txt">
										A great place for total Diabetes care. The front desk and customer care explains
										the program in detail. Doctors and Dieticians are well qualified. No delay in
										follow up consultations too! Would recommend to my family n friends.
									</p>
								</div>
							</div>

							<div>
								<div class="over-say-review-img-wrapper">
									<amp-img
										src="./assest/google.svg"
										width="1"
										height="1"
										layout="responsive"
										alt=""
									>
									</amp-img>
								</div>
								<div class="over-say-review-detail-wrapper">
									<h4 class="f-s-16 f-w-700 orange-txt">Sakshi Agarwal</h4>
									<p style="font-style: italic" class="f-s-12 gray-txt f-w-400">
										Verified Customer
									</p>
									<div style="width: 60px; margin: 5px 0px">
										<amp-img
											src="./assest/stars.webp"
											width="4"
											height="1"
											layout="responsive"
											alt="logo"
										>
										</amp-img>
									</div>
									<p class="f-s-14 f-w-400 gray-txt">
										From the booking to the consultation the staff was very helpful. The
										consultation was so insightful. The doctor spent ample time and also answered
										all my questions. I felt heard and satisfied with his treatment plan. He also
										made very easy suggestions which has motivated me.
									</p>
								</div>
							</div>
							<div>
								<div class="over-say-review-img-wrapper">
									<amp-img src="./assest/p.svg" width="1" height="1" layout="responsive" alt="">
									</amp-img>
								</div>
								<div class="over-say-review-detail-wrapper">
									<h4 class="f-s-16 f-w-700 orange-txt">Prakash Sharma</h4>
									<p style="font-style: italic" class="f-s-12 gray-txt f-w-400">
										Verified Customer
									</p>
									<div style="width: 60px; margin: 5px 0px">
										<amp-img
											src="./assest/stars.webp"
											width="4"
											height="1"
											layout="responsive"
											alt="logo"
										>
										</amp-img>
									</div>
									<p class="f-s-14 f-w-400 gray-txt">
										The doctor is detail-oriented and listens patiently to what we have to discuss
										and share. He shows a great friendly gesture which encourages to discuss more
										about the problems and take proper feedback.
									</p>
								</div>
							</div>
							<div>
								<div class="over-say-review-img-wrapper">
									<amp-img src="./assest/p.svg" width="1" height="1" layout="responsive" alt="">
									</amp-img>
								</div>
								<div class="over-say-review-detail-wrapper">
									<h4 class="f-s-16 f-w-700 orange-txt">Akanksha Pandey</h4>
									<p style="font-style: italic" class="f-s-12 gray-txt f-w-400">
										Verified Customer
									</p>
									<div style="width: 60px; margin: 5px 0px">
										<amp-img
											src="./assest/stars.webp"
											width="4"
											height="1"
											layout="responsive"
											alt="logo"
										>
										</amp-img>
									</div>
									<p class="f-s-14 f-w-400 gray-txt">
										Dr. Basavaraj always takes the time to make the patient feel at ease. Instead of
										just prescribing the medicine, he explains what it is for and why it is
										important. In case of any changes too, he explains why he is making the change
										and what we can expect out of it which helps in creating a lot more confidence
										in him. The best thing about him is that he works towards cure and prevention
										and not just management.
									</p>
								</div>
							</div>
							<div>
								<div class="over-say-review-img-wrapper">
									<amp-img src="./assest/p.svg" width="1" height="1" layout="responsive" alt="">
									</amp-img>
								</div>
								<div class="over-say-review-detail-wrapper">
									<h4 class="f-s-16 f-w-700 orange-txt">Gayatri</h4>
									<p style="font-style: italic" class="f-s-12 gray-txt f-w-400">
										Verified Customer
									</p>
									<div style="width: 60px; margin: 5px 0px">
										<amp-img
											src="./assest/stars.webp"
											width="4"
											height="1"
											layout="responsive"
											alt="logo"
										>
										</amp-img>
									</div>
									<p class="f-s-14 f-w-400 gray-txt">
										Doctor Basavaraj is a brilliant doctor, when I was struggling with medication
										for my mother for high diabetes after hav6ng her operation, we met Dr Basavaraj.
										Within a week he solved the problem to a la2ge extent. My mother likes to visit
										The OneCare Diabetes clinic for his patience and polite approach to handle
										patient queries.
									</p>
								</div>
							</div>
							<div>
								<div class="over-say-review-img-wrapper">
									<amp-img src="./assest/p.svg" width="1" height="1" layout="responsive" alt="">
									</amp-img>
								</div>
								<div class="over-say-review-detail-wrapper">
									<h4 class="f-s-16 f-w-700 orange-txt">Rajesh Talreja</h4>
									<p style="font-style: italic" class="f-s-12 gray-txt f-w-400">
										Verified Customer
									</p>
									<div style="width: 60px; margin: 5px 0px">
										<amp-img
											src="./assest/stars.webp"
											width="4"
											height="1"
											layout="responsive"
											alt="logo"
										>
										</amp-img>
									</div>
									<p class="f-s-14 f-w-400 gray-txt">
										I found the doctor very cost-effective. The consultation was so insightful and
										helpful that everything was worth the money. The doctor was also very good and
										his suggestions were doable. Thanks to OneCare Diabetes Clinic.
									</p>
								</div>
							</div>
						</div>
					</div>
				</div>
			</section>
			<section id="FAQ">
				<h1 class="center-txt drk-blu-txt">FAQs</h1>

				<div>
					<amp-accordion disable-session-states id="prop-accordion" class="prop-accordion">
						<section>
							<h2 class="amp-accordion__header">
								<div class="flex" style="justify-content: space-between; padding: 6px">
									<h4 class="f-s-14 f-w-500 f-s-1 gray-txt">Can diabetes be cured?</h4>
									<span>
										<amp-img
											style="width: 15px"
											src="./assest/Arrow.svg"
											width="1"
											height="1"
											layout="responsive"
											alt="logo"
										>
										</amp-img>
									</span>
								</div>
							</h2>
							<p style="padding: 15px 0px" class="f-s-14 f-w-400 gray-txt">
								Diabetes is a lifestyle disorder. Type 2 diabetes can be “reversed” but not “cured”
								because the disease will come back if long-term healthy lifestyle is not
								successfully maintained.
							</p>
						</section>

						<section>
							<h2 class="amp-accordion__header">
								<div class="flex" style="justify-content: space-between; padding: 6px">
									<h4 class="f-s-14 f-w-500 f-s-1 gray-txt">Can diabetes be cured?</h4>
									<span>
										<amp-img
											style="width: 15px"
											src="./assest/Arrow.svg"
											width="1"
											height="1"
											layout="responsive"
											alt="logo"
										>
										</amp-img>
									</span>
								</div>
							</h2>
							<p style="padding: 15px 0px" class="f-s-14 f-w-400 gray-txt">
								Diabetes is a lifestyle disorder. Type 2 diabetes can be “reversed” but not “cured”
								because the disease will come back if long-term healthy lifestyle is not
								successfully maintained.
							</p>
						</section>
						<section>
							<h2 class="amp-accordion__header">
								<div class="flex" style="justify-content: space-between; padding: 6px">
									<h4 class="f-s-14 f-w-500 f-s-1 gray-txt">What is the OneCare IMPACT program?</h4>
									<span>
										<amp-img
											style="width: 15px"
											src="./assest/Arrow.svg"
											width="1"
											height="1"
											layout="responsive"
											alt="logo"
										>
										</amp-img>
									</span>
								</div>
							</h2>
							<div class="f-s-14 f-w-400 gray-txt" style="padding: 15px 0px">
								<h4>
									The OneCare IMPACT program aims to provide a path for diabetes care. In the entire
									treatment process the following services are provided:
								</h4>
								<ol>
									<li>1). Highly qualified dedicated health coach</li>
									<li>2).Yoga and Lifestyle coach</li>
									<li>3). Connected Devices to monitor health parameters</li>
									<li>4).Repeat Virtual Consultations with best diabetic doctors in bangalore</li>
									<li>5). Mobile App with Clinic</li>
								</ol>
							</div>
						</section>
					</amp-accordion>
				</div>
			</section>

			<footer>
				<nav>
					<div class="logo-wrapper">
						<a href="/" class="logo">
							<amp-img
								src="./assest/logo.svg"
								width="3.2"
								height="1"
								layout="responsive"
								alt="logo"
							>
							</amp-img>
						</a>
					</div>
					<div>
						<h3 class="f-s-16 f-w-500 gray-txt web">A Chain of <br />Smart Diabetes Clinics</h3>
					</div>
				</nav>
			</footer>
			<div style="padding: 10px">
				<h4 class="center-txt f-s-14 f-w-400">© 2021, OneCare. All Rights Reserved</h4>
			</div>
		</div>
	</body>
</html>
<?php ?>
