<?php ?>
<!DOCTYPE html>
<html amp lang="en">
	<head>
		<meta charset="utf-8" />
		<script async src="https://cdn.ampproject.org/v0.js"></script>
		<title>OneCare - A Chain of Smart Diabetes Clinics</title>
		<link rel="canonical" href="https://onecare.co.in" />
		<meta
			name="amp-script-src"
			content="sha384-8lnW1YiGDcUR9QY_i8kH909mWXM1I49H0X255KzdCkaErHkd5tIAWVDbe4F8g54k"
		/>
		<script
			async
			custom-element="amp-iframe"
			src="https://cdn.ampproject.org/v0/amp-iframe-0.1.js"
		></script>

		<script
			async
			custom-element="amp-script"
			src="https://cdn.ampproject.org/v0/amp-script-0.1.js"
		></script>
		<link
			rel="preconnect"
			href="https://amp.dev/documentation/guides-and-tutorials/start/create/basic_markup/"
		/>
		<link
			href="https://fonts.googleapis.com/css2?family=Inter&family=Lato&family=Libre+Baskerville&family=Libre+Caslon+Text&family=Roboto&display=swap"
			rel="stylesheet"
		/>
		<meta name="viewport" content="width=device-width,minimum-scale=1,initial-scale=1" />
		<script
			async
			custom-template="amp-mustache"
			src="https://cdn.ampproject.org/v0/amp-mustache-0.2.js"
		></script>
		<script
			async
			custom-element="amp-form"
			src="https://cdn.ampproject.org/v0/amp-form-0.1.js"
		></script>
		<script
			async
			custom-element="amp-base-carousel"
			src="https://cdn.ampproject.org/v0/amp-base-carousel-0.1.js"
		></script>

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
		<script
			async
			custom-element="amp-bind"
			src="https://cdn.ampproject.org/v0/amp-bind-0.1.js"
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

			footer {
				background-color: white;
			}

			header {
				width: 100%;
				background-color: white;
				box-shadow: 0px 4px 12px rgba(0, 0, 0, 0.1);
			}

			header nav div,
			footer nav div {
				display: flex;
				align-items: center;
			}

			header nav div:last-child,
			footer nav div:last-child {
				border-left: 1px solid gray;
				padding: 0px 10px;
				font-weight: 100;
			}

			header nav div:last-child h3,
			footer nav div:last-child h3 {
				font-weight: 100;
			}

			header nav,
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

			#form-section #form {
				width: 90%;
				margin: auto;
				display: flex;
				flex-direction: column;
				max-width: 450px;
			}

			#form input {
				margin: 15px 5px;
				padding: 15px;
				font-size: 14px;
				border-radius: 6px;
				border: 1px solid #c2c2c2;
			}

			#form input[type="radio"] {
				border: 1px solid black;
				padding: 8px;
				-webkit-appearance: none;
			}

			#form input[type="radio"]:checked {
				background-color: #28b1da;
			}

			.button {
				border: none;
				font-weight: 700;
			}

			section {
				padding: 20px;
			}

			#promises {
				background: #14566a;
			}

			#promies-wrapper {
				display: flex;
				align-items: center;
				justify-content: space-evenly;
			}

			#promies-wrapper > div {
				max-width: 300px;
				margin: 10px 20px;
				color: white;
				text-align: center;
			}

			.promises-img-wrapper {
				width: 50%;
				margin: auto;
			}

			#Diabetologists {
				background: linear-gradient(177.97deg, #c6efff 1.72%, #fff1f1 98.52%);
			}

			#manage-wrapper > div {
				max-width: 450px;
				margin: 25px auto;
				padding: 20px;
				border-radius: 6px;
				box-shadow: 4px 9px 45px rgba(0, 0, 0, 0.1);
			}

			#manage-wrapper > div:nth-child(odd) {
				background: linear-gradient(177.97deg, #a3e5ff 1.72%, #fff1f1 98.52%);
			}

			#manage-wrapper > div:nth-child(even) {
				background: linear-gradient(180deg, #ffafc6 -4.33%, #ffefd4 109.25%);
			}

			#Diabetologists-wrapper {
				max-width: 450px;
				margin: auto;
			}

			#Diabetologists-wrapper > div {
				display: flex;
				margin: 30px 0px;
				border-radius: 30px;
				border: 1px solid white;
			}

			.Diabetologists-img-wrapper {
				width: 205px;
				margin-right: 10px;
			}

			.doc-det {
				margin: 10px;
				width: 60%;
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

			.location-img-wrapper {
				width: 4em;
				margin-right: 5px;
			}

			.hov-btn-orange {
				width: 50%;
				color: white;
				margin: 0px 2px;
				padding: 15px;
				text-align: center;
				background: linear-gradient(90.13deg, #f8a622 -6.56%, #f16679 177.9%);
				border-radius: 5px;
			}

			#top {
				padding: 0px;
			}

			.slide-wrapper:nth-child(even) {
				background: linear-gradient(177.97deg, #c6efff 1.72%, #f2e8ff 98.52%),
					linear-gradient(0deg, #c4c4c4, #c4c4c4);
			}

			.slide-wrapper:nth-child(odd) {
				background: linear-gradient(180deg, #ffcfdd -4.68%, #ffefd4 118.2%),
					linear-gradient(0deg, #c4c4c4, #c4c4c4);
			}

			.slide {
				background-repeat: no-repeat;
				position: relative;
				height: 100%;
				background-position: 100% 100%;
			}

			.slide-wrapper2 {
				height: 100%;
				background-repeat: no-repeat;
				background-position: 100% 100%;
			}

			#location div h1 {
				margin-left: 20px;
			}

			#location > div > div {
				border: 1px solid #d1d1d1;
				margin: 10px 0px;
			}

			.slide > div:first-child {
				display: flex;
				padding: 20px;
				/* width: 85%; */
				height: 200px;
				justify-content: space-between;
				position: absolute;
				flex-direction: column;
				align-items: flex-start;
			}

			.slide > div:first-child p {
				margin: 15px 0px;
			}

			.loc-detail {
				margin: 0px 10px;
			}

			#FAQ {
				background: #fff5e7;
			}

			#FAQ div {
				max-width: 500px;
				margin: auto;
			}

			#view-button {
				padding: 10px 20px;
				background-color: #28b1da;
				margin: 20px;
			}

			#FAQ div > div {
				justify-content: space-between;

				box-shadow: 0px 20px 40px 0px #eef0f2;
			}

			.dots-container {
				position: absolute;
				bottom: 25vh;
				width: 100%;
				z-index: 110;
			}

			.dots {
				position: relative;
				top: -47px;
				text-align: center;
			}

			.dots li {
				width: 13px;
				height: 13px;
				margin: 5px;
				border-radius: 10px;
				border: 1px solid rgba(0, 0, 0, 0.3);
				background-color: white;
				display: inline-block;
			}

			.dots li[option][selected] {
				outline: 0px solid rgba(0, 0, 0, 0.7);
				border: 1px solid #28b1da;
				background: #28b1da;
			}

			.tick-wrapper {
				display: flex;
				margin: 10px 0px;
				justify-content: center;
			}

			.tick-wrapper > p {
				width: 50%;
			}

			.tick-wrapper > div {
				width: 20%;
				margin: 10px 0px;
				display: flex;
				justify-content: flex-start;
				align-items: center;
			}

			#tick-head {
				display: flex;
				justify-content: end;
				align-items: center;
				margin-right: 14%;
			}

			.timeline {
				position: relative;
				margin: 30px auto;
				padding: 30px 0px;
				/* width:1000px; */
				box-sizing: border-box;
			}

			.timeline ul {
				padding: 0;
				margin: 0;
			}

			.timeline ul li {
				height: 120px;
				list-style: none;
				position: relative;
				max-width: 400px;
				box-sizing: border-box;
				margin: auto;
			}

			.timeline ul li:nth-child(odd) {
				clear: both;
			}

			.timeline ul li:nth-child(odd):before {
				content: "";
				border-left: 1px solid #f1647b;
				border-top: 1px solid #f1647b;
				position: absolute;
				width: 10px;
				height: 160px;
				top: -8px;
				border-bottom: 1px solid #f1647b;
				left: 180px;
			}

			.timeline ul li:nth-child(odd):after {
				content: "";
				position: absolute;
				width: 80%;
				left: 80px;
				right: 0px;
				height: 1px;
				top: 80px;
				border-bottom: 1px solid #ffe1e6;
			}

			.timeline ul li:nth-child(odd) .time {
				position: relative;
				top: -140px;
				padding: 5px;
				right: -210px;
				width: 50%;
			}

			.timeline ul li:nth-child(even) .time {
				position: absolute;
				top: 12px;
				left: -165px;
				margin: 0;
				padding: 8px 16px;
				background: rgba(233, 33, 99, 1);
				color: #fff;
				border-radius: 18px;
				box-shadow: 0 0 0 3px rgba(233, 33, 99, 0.3);
			}
			#FAQ section {
				padding: 10px 20px;
			}
			#FAQ div#view-button {
				margin: 10px 20px;
			}
			.manage-img-wrapper amp-img {
				border-radius: 8px;
			}
			.map-address {
			}
			@media screen and (max-width: 480px) {
				.hov-btn-orange {
					font-size: 12px;
					padding: 10px;
				}
				.map-address {
					font-size: 13px;
					line-height: 15px;
				}
			}
			@media screen and (max-width: 420px) {
				.hov-btn-orange {
					font-size: 9px;
					padding: 10px;
				}
				.timeline ul li:nth-child(odd) .time {
					position: relative;
					top: -140px;
					padding: 5px;
					right: -175px;
					/* width: 100%; */
				}
				.timeline ul li:nth-child(odd):after {
					display: none;
				}
				.timeline ul li:nth-child(odd):before {
					content: "";
					border-left: 1px solid #f1647b;
					border-top: 1px solid #f1647b;
					position: absolute;
					width: 10px;
					height: 160px;
					top: -8px;
					border-bottom: 1px solid #f1647b;
					left: 160px;
				}

				.nav-h3 {
					font-size: 12px;
					line-height: 15px;
				}

				.logo {
					width: 120px;
				}

				.timeline ul li:nth-child(odd):before {
					height: 200px;

					right: -20px;
				}
			}

			.brd-no {
				border: none;
			}

			.show {
				display: block;
			}

			.hide {
				display: none;
			}
			.error {
				color: red;
			}

			.success {
				color: green;
			}

			#sticky-btn {
				position: sticky;
				bottom: 0;
				z-index: 5;
				flex-direction: column;
				justify-content: center;
			}
			.cta {
				display: flex;
			}
			#sticky-btn > div > a {
				border-radius: 5px;
				margin-left: 10px;
			}

			#sticky-btn > div:last-child {
				background-color: white;
				display: flex;
				padding: 10px 20px;
				justify-content: center;
				align-items: center;
			}

			a {
				color: #4e4e4e;
				text-decoration: none;
				cursor: pointer;
			}

			.amp-accordion__header {
				border: none;
				background-color: white;
				border-radius: 10px;
				padding: 0px 10px;
				box-shadow: 0px 10px 40px 0px #eef0f2;
			}

			.marquee {
				margin-top: 50px;
				overflow: hidden;
			}

			.marquee-content {
				align-items: center;
				display: flex;
				animation: scrolling 10s linear infinite;
			}

			.marquee-item {
				margin: 0 10px;
				/*   flex: 0 0 20vw; */
				/*   margin: 0 2vw; */
			}

			.marquee-item img {
				display: block;
				width: 100%;
				/*   padding: 0 20px; */
			}

			@keyframes scrolling {
				0% {
					transform: translateX(0);
				}

				100% {
					transform: translatex(-250px);
				}
			}

			#popup {
				z-index: 4;
				top: 0;
				position: fixed;
				height: 100vh;
				max-width: 728px;
				background: #000000cc;
				margin: 0 auto;
				left: 0;
				right: 0;
				width: 100%;
			}

			.popup-wrapper {
				max-width: 700px;

				margin: 200px auto;

				background-color: white;
				padding: 30px;
				flex-direction: column;
			}

			.popup-wrapper input[type="tel"] {
				border-bottom: 1px solid;
				font-size: 30px;
				margin-right: 20px;
				width: 10%;
			}

			input:focus {
				outline: none;
			}

			.my-30 {
				margin-top: 30px;
				margin-bottom: 30px;
			}

			.py-20 {
				padding-top: 10px;
				padding-bottom: 10px;
			}

			.px-10 {
				padding-left: 10px;
				padding-right: 10px;
			}

			.mx-20 {
				margin-left: 20px;
				margin-right: 20px;
			}

			#popup-form input[type="tel"] {
				border: none;
				text-align: left;
			}

			#popup button {
				background-color: white;
				border-radius: 6px;
				border: 1px solid #787b7d;
				cursor: pointer;
			}

			.brd-no {
				border: none;
			}
			.hov-btn-blue:hover {
				background-color: #28b1dab3;
			}
			.hov-btn-orange:hover {
				background: #f8a622b3;
			}

			.box {
				display: flex;
				justify-content: center;
				align-items: center;
			}
			#partitioned {
				padding-left: 15px;
				letter-spacing: 42px;
				border: 0;
				background-image: linear-gradient(to left, black 70%, rgba(255, 255, 255, 0) 0%);
				background-position: bottom;
				background-size: 50px 1px;
				background-repeat: repeat-x;
				background-position-x: 35px;
				width: 200px;
				min-width: 200px;
				font-size: 17px;
			}

			#divInner {
				left: 0;
				position: sticky;
			}

			#divOuter {
				width: 190px;
				overflow: hidden;
			}
			.circlecontainer {
				height: 15px;
				width: 105px;
				display: flex;
				position: relative;
			}
			.circle {
				width: 15px;
				height: 15px;
				border-radius: 50%;
				background-color: #28b1da;
				animation: move 500ms linear 0ms infinite;
				margin-right: 30px;
			}

			.circle:last-child {
				position: absolute;
				top: 0;
				right: 0;
				margin-right: 0;
				animation: grow 500ms linear 0s infinite reverse;
			}
			.circle:first-child {
				position: absolute;
				top: 0;
				left: 0;
				animation: grow 500ms linear 0ms infinite;
			}

			@keyframes grow {
				from {
					transform: scale(0, 0);
					opacity: 0;
				}
				to {
					transform: scale(1, 1);
					opacity: 1;
				}
			}

			@keyframes move {
				from {
					transform: translateX(0px);
				}
				to {
					transform: translateX(45px);
				}
			}
			#impact-program {
				background: #fff;
			}
			.my-timeline {
				max-width: 500px;
				margin: auto;
			}
			.t-item {
				justify-content: center;
				align-items: center;
				font-family: Roboto;
				font-style: normal;
				font-weight: normal;
				font-size: 12px;
				line-height: 14px;
				color: #000000;
				margin: 50px 0px;
			}
			.t-img {
				flex: 1;
			}
			.t-img {
				max-width: 100px;
			}
			.t-main {
				flex: 5;
				padding: 0px 10px;
			}
			.t-up {
				border-bottom: 1px solid #ffe1e6;
				align-items: stretch;
			}
			.t-down {
				align-items: stretch;
			}
			.t-line::before {
				content: "";
				position: relative;
				top: -11px;
				display: inline-block;
				width: 10px;
				height: 1px;
				background-color: #f1647b;
			}
			/* .t-line::after{
				content: "";
				display: inline-block;
				width: 10px;
				height: 1px;
				position: relative;
				margin-top: auto;
				bottom: 0;
				background-color: #F1647B;;
			} */
			.t-line {
				width: 1px;
				height: inherit;
				background-color: #f1647b;
			}
			.t-head {
				flex: 1;
				padding: 10px;
				display: flex;
				justify-content: flex-start;
				align-items: center;
				font-family: Roboto;
				font-style: normal;
				font-weight: bold;
				font-size: 16px;
				line-height: 19px;

				color: #f1647b;
			}
			.t-body {
				flex: 3;
				padding: 10px;
			}
			.t-body::after {
				content: "";
				display: inline-block;
				width: 10px;
				height: 1px;
				position: relative;
				margin: 0px 0px -14px -11px;
				bottom: 0;
				background-color: #f1647b;
			}
			.t-body h2 {
				font-size: 16px;
				font-weight: 600;
			}

			.t-body p {
				font-size: 14px;
			}
		</style>
	</head>

	<body>
		<amp-state id="oneCareForm">
			<script type="application/json">
				{
					"name": "",
					"phone": "",
					"errors": { "name": "", "phone": "", "consultation": "" },
					"consultation": "online",
					"validated": "false",
					"otpA": "",
					"otpB": "",
					"otpC": "",
					"otpD": "",
					"errorMessage": "",
					"otpPopup": ""
				}
			</script>
		</amp-state>
		<div id="container">
			<header>
				<nav>
					<div class="logo-wrapper">
						<a href="index.html" class="logo">
							<amp-img
								src="https://onecare.co.in/wp-content/uploads/2022/01/logo.svg"
								width="5"
								height="1"
								layout="responsive"
								alt="logo"
							>
							</amp-img>
						</a>
					</div>
					<div>
						<h3 style="margin: 0" class="f-s-16 nav-h3 f-w-500 gray-txt">
							A Chain<br />
							of Smart Diabetes Clinics
						</h3>
					</div>
				</nav>
			</header>

			<section id="top">
				<div>
					<amp-base-carousel
						auto-advance="true"
						auto-advance-interval="3000"
						id="carouselID"
						height="650"
						layout="fixed-height"
						visible-count="1"
						advance-count="1"
						controls="never"
						on="slideChange: SelectorID.toggle(index=event.index,value=true)"
					>
						<div class="slide-wrapper">
							<div
								class="slide-wrapper2"
								style="
									background-image: url('	https://onecare.co.in/wp-content/uploads/2022/01/cirl2-pink.svg');
								"
							>
								<div
									class="slide"
									style="
										background-image: url('https://onecare.co.in/wp-content/uploads/2022/01/circle-1.svg');
									"
								>
									<div style="z-index: 2">
										<h1 class="f-w-700 f-s-30">
											Anup Khees<br />
											<span class="f-w-500">Age-35 yrs</span>
										</h1>
										<div class="m-t-10 flex">
											<div class="flex" style="margin-right: 15px">
												<amp-img
													style="width: 20px"
													src="https://onecare.co.in/wp-content/uploads/2022/01/Rh.webp"
													width="1"
													height="1"
													layout="responsive"
													alt="logo"
												>
												</amp-img>
												<h4 class="f-w-500">92/115</h4>
											</div>

											<div class="flex">
												<amp-img
													style="width: 20px"
													src="https://onecare.co.in/wp-content/uploads/2022/01/oill.svg"
													width="1"
													height="1"
													layout="responsive"
													alt="logo"
												>
												</amp-img>
												<h4 class="f-w-500">50% Reduction</h4>
											</div>
										</div>

										<p class="f-s-14 f-w-400">
											My blood sugar level came down to 92/115 and my<br />
											medicine dosage also got reduced to half and<br />
											I'm very sure that it will stop completely in some time.
										</p>
										<div class="m-t-10">
											<a
												href="#form-section"
												style="padding: 10px 20px; border-radius: 6px"
												class="f-w-700 blue-bg hov-btn-blue f-s-i center-txt"
												>GET STARTED
											</a>
										</div>
										<div style="width: 150px">
											<amp-img
												src="https://onecare.co.in/wp-content/uploads/2022/01/star-4-5.webp"
												width="5"
												height="1"
												layout="responsive"
												alt="logo"
											>
											</amp-img>
										</div>
									</div>
									<div style="width: 500px; position: relative; top: 180px; margin-left: auto">
										<amp-img
											src="https://onecare.co.in/wp-content/uploads/2022/01/1_HEoLBLidT2u4mhJ0oiDgig-2.svg"
											width="3"
											height="2.7"
											layout="responsive"
											alt=""
										>
										</amp-img>
									</div>
								</div>
							</div>
						</div>
						<div class="slide-wrapper">
							<div
								class="slide-wrapper2"
								style="
									background-image: url('	https://onecare.co.in/wp-content/uploads/2022/01/cir2-blu.svg');
								"
							>
								<div
									class="slide"
									style="
										background-image: url('	https://onecare.co.in/wp-content/uploads/2022/01/circle-blu.svg');
									"
								>
									<div style="z-index: 2">
										<h1 class="f-s-30 f-w-700 pink-txt">
											Live A Life Beyond Diabetes,<br />
											Starting Today.
										</h1>

										<p class="f-s-14 f-w-400">
											Our team includes leading diabetologists,<br />
											endocrinologists, diabetes educators, dieticians, <br />health coaches all
											working with you to build a<br />
											personalised care plan specific to your need.
										</p>
										<div class="m-t-10">
											<a
												href="#form-section"
												style="padding: 10px 20px; border-radius: 6px"
												class="blue-bg f-w-700 f-s-i hov-btn-blue center-txt"
												>GET STARTED</a
											>
										</div>
									</div>
									<div style="width: 500px; position: relative; top: 296px; margin-left: auto">
										<amp-img
											src="https://onecare.co.in/wp-content/uploads/2022/01/istockphoto-1192489366-612x612-1.svg"
											width="1.5"
											height="1"
											layout="responsive"
											alt=""
										>
										</amp-img>
									</div>
								</div>
							</div>
						</div>
						<div class="slide-wrapper">
							<div
								class="slide-wrapper2"
								style="
									background-image: url('https://onecare.co.in/wp-content/uploads/2022/01/cirl2-pink.svg');
								"
							>
								<div
									class="slide"
									style="
										background-image: url('https://onecare.co.in/wp-content/uploads/2022/01/circle-1.svg');
									"
								>
									<div style="z-index: 2">
										<h1 class="f-s-30 f-w-700;">
											Don't Just Fight Diabetes,<br />
											Understand & Manage It.
										</h1>

										<p class="f-s-14 f-w-400">
											Diabetes care is unique to everyone. Beat it with the
											<br />
											Right Approach that works for you.
										</p>
										<div class="m-t-10">
											<a
												href="#form-section"
												style="padding: 10px 20px; border-radius: 6px"
												class="f-w-700 blue-bg hov-btn-blue f-s-i center-txt"
												>GET STARTED</a
											>
										</div>
									</div>
									<div
										style="
											position: relative;
											width: 475px;
											right: 0;
											top: 218px;
											margin-left: auto;
										"
									>
										<amp-img
											src="https://onecare.co.in/wp-content/uploads/2022/01/slack-imgs-1-1.svg"
											width="1.5"
											height="1.3"
											layout="responsive"
											alt=""
										>
										</amp-img>
									</div>
								</div>
							</div>
						</div>
						<div class="slide-wrapper">
							<div
								class="slide-wrapper2"
								style="
									background-image: url('	https://onecare.co.in/wp-content/uploads/2022/01/cir2-blu.svg');
								"
							>
								<div
									class="slide"
									style="
										background-image: url('	https://onecare.co.in/wp-content/uploads/2022/01/circle-blu.svg');
									"
								>
									<div>
										<h1 class="f-s-30 f-w-700 pink-txt">Skip The Travel</h1>

										<p class="f-s-14 f-w-400">
											Take Online Doctor Consultation <br />
											Private video consultation
										</p>
										<div class="m-t-10">
											<a
												href="#form-section"
												style="padding: 10px 20px; border-radius: 6px"
												class="f-w-700 blue-bg hov-btn-blue f-s-i center-txt"
												>GET STARTED</a
											>
										</div>
									</div>
									<div style="position: relative; width: 415px; top: 272px; margin-left: auto">
										<amp-img
											src="https://onecare.co.in/wp-content/uploads/2022/01/d.svg"
											width="1.5"
											height="1.3"
											layout="responsive"
											alt="logo"
										>
										</amp-img>
									</div>
								</div>
							</div>
						</div>
					</amp-base-carousel>
					<amp-selector
						id="SelectorID"
						on="select:carouselID.goToSlide(index=event.targetOption)"
						layout="container"
					>
						<ul id="carouselDots" class="dots">
							<li option="0" selected></li>
							<li option="1"></li>
							<li option="2"></li>
							<li option="3"></li>
						</ul>
					</amp-selector>
				</div>
			</section>
			<section id="form-section">
				<h1 class="f-w-700 f-s-24 center-txt">
					Start your <span class="orange-txt"> personalised <br />diabetic program today!</span>
				</h1>

				<amp-script src="https://onecare.co.in/index.js" layout="container">
					<section id="popup" class="hide" [class]="oneCareForm.otpPopup==true?'show' :'hide'">
						<div>
							<div class="items-start popup-wrapper">
								<h2 class="f-36 drk-blu-txt">OTP Verification</h2>
								<h3 class="text-xl lg:text-2xl drk-blu-txt">
									please enter the OTP sent to your mobile
								</h3>

								<div class="my-30">
									<h3 class="f-20 my-30">Enter OTP</h3>
									<!-- <amp-script script="popup" layout="container"> -->
									<form
										id="popup-form"
										method="post"
										action-xhr="https://onecare.co.in/wp-json/api/v1/verify-otp"
										target="_top"
									>
										<div id="divOuter">
											<div id="divInner">
												<input
													id="partitioned"
													type="tel"
													on="input-debounced:AMP.setState({
                                                oneCareForm:{
                                                    	otp: event.value,
                                                    errors:{otp: ''}
                                                }
                                            })"
													maxlength="4"
													name="otp"
												/>
											</div>
										</div>

										<input
											type="hidden"
											class="inputHidden"
											name="name"
											[value]="oneCareForm.name"
										/>

										<input
											type="hidden"
											class="inputHidden"
											name="phone"
											[value]="oneCareForm.phone"
										/>
										<input
											type="hidden"
											class="inputHidden"
											name="consultation"
											[value]="oneCareForm.consultation"
										/>
										<input
											type="hidden"
											class="inputHidden"
											name="utm_source"
											value="QUERY_PARAM(utm_source)"
											data-amp-replace="QUERY_PARAM"
										/>
										<input
											type="hidden"
											class="inputHidden"
											name="utm_medium"
											value="QUERY_PARAM(utm_medium)"
											data-amp-replace="QUERY_PARAM"
										/>
										<input
											type="hidden"
											class="inputHidden"
											name="utm_campaign"
											value="QUERY_PARAM(utm_campaign)"
											data-amp-replace="QUERY_PARAM"
										/>
										<div submit-success>
											<template type="amp-mustache">
												<p></p>
												{{#success}}
												<strong class="error"> {{error.message}} </strong>
												{{/success}} {{^success}}
												<strong class="success"> {{error.message}} </strong>
												{{/success}}
											</template>
										</div>
										<strong
											id="otpTimer"
											class="success show"
											[class]="oneCareForm.validated=='false'?'hide' :'show'"
										></strong>
										<div class="flex my-30" id="popup-buttons">
											<button class="button f-s-14 py-20 px-10"
											id="resend">Resend OTP</button>
											<input
												id="submit-otp"
												style="border-radius: 6px"
												type="submit"
												value="Done"
												class="brd-no mx-20 py-20 px-10 f-s-18 blue-bg hov-btn-blue"
												role="button"
												tabindex="0"
											/>
										</div>
							

										<div submitting>
											<div class="flex my-30">
												<div class="box">
													<div class="circlecontainer">
														<span class="circle"></span>
														<span class="circle"></span>
														<span class="circle"></span>
														<span class="circle"></span>
													</div>
												</div>
											</div>
										</div>
									</form>

									<!-- </amp-script> -->
								</div>

								<!-- <script id="popup" type="text/plain" target="amp-script"></script> -->
							</div>

							<script id="popup" type="text/plain" target="amp-script"></script>
						</div>
					</section>
					<form id="form" method="post" action-xhr="#" target="_top">
						<input
							type="text"
							name="name"
							on="input-debounced:AMP.setState({
                        oneCareForm:{
                            name: event.value,
                            errors:{name: ''}
                        }
                    })"
							placeholder="Full Name"
							required
						/>

						<input
							type="number"
							name="phone"
							on="input-debounced:AMP.setState({
							oneCareForm:{
								phone: event.value,
								errors:{phone: ''}}
						})"
							placeholder="Phone"
							pattern="[0-9]{10}"
							maxlength="10"
							title="Please enter a valid phone number"
							required
						/>

						<div style="display: flex; justify-content: space-between">
							<div style="display: flex; align-items: center">
								<input
									type="radio"
									id="Online"
									on="input-debounced:AMP.setState({
                                oneCareForm:{
                                    consultation: event.value,
                                    errors:{consultation: ''}}
                            })"
									name="Consultation"
									value="Online"
									checked
								/>
								<label style="font-size: 16px" for="Online">Online Consultation</label>
							</div>

							<div style="display: flex; align-items: center">
								<input
									type="radio"
									id="Clinical"
									on="input-debounced:AMP.setState({
                                oneCareForm:{
                                    consultation: event.value,
                                    errors:{consultation: ''}}
                            })"
									name="Consultation"
									value="Clinical"
								/>
								<label style="font-size: 16px" for="Clinical">Clinical Consultation</label>
							</div>
						</div>

						<!-- Add [target="amp-script"] to the <script> element. -->
						<strong class="error" [text]="oneCareForm.errorMessage"></strong>
						<input
							class="blue-bg button hov-btn-blue f-s-i"
							id="submit-button"
							value="SUBMIT"
							type="submit"
						/>
					</form>
				</amp-script>
			</section>
			<section style="background-color: white; padding: 10px" id="manage">
				<h2 class="f-s-24 f-w-700 center-txt orange-txt">
					Manage Your Diabetes <br />
					In 3 Easy Steps
				</h2>
				<div id="manage-wrapper">
					<div>
						<div class="manage-img-wrapper">
							<amp-img
								src="https://onecare.co.in/wp-content/uploads/2022/01/manage1.svg"
								width="3"
								height="2"
								layout="responsive"
								alt="logo"
							>
							</amp-img>
						</div>
						<div>
							<h3 class="f-s-18 f-w-700 drk-blu-txt">Step 1</h3>
							<p class="f-s-14 f-w-400">
								Meet your team of expert diabetologists, health<br />
								counsellors, dieticians at OneCare Smart Clinics<br />
								& get expert diagnosis & insights on your diabetes <br />management.
							</p>
						</div>
					</div>

					<div>
						<div class="manage-img-wrapper">
							<amp-img
								src="https://onecare.co.in/wp-content/uploads/2022/01/manage2.svg"
								width="3"
								height="2"
								layout="responsive"
								alt="logo"
							>
							</amp-img>
						</div>

						<div>
							<h3 class="f-s-18 f-w-700 drk-blu-txt">Step 2</h3>
							<p class="f-s-14 f-w-400">
								Get started on a personalised diabetes <br />management journey designed around your
								<br />needs to help you realise 10x better outcomes
							</p>
						</div>
					</div>

					<div>
						<div class="manage-img-wrapper">
							<amp-img
								src="https://onecare.co.in/wp-content/uploads/2022/01/manage3.svg"
								width="3"
								height="2"
								layout="responsive"
								alt="logo"
							>
							</amp-img>
						</div>

						<div>
							<h3 class="f-s-18 f-w-700 drk-blu-txt">Step 3</h3>
							<p class="f-s-14 f-w-400">
								Our panel of dedicated Health Coach will be<br />
								with you every step of the way guiding you <br />
								a better life beyond diabetes
							</p>
						</div>
					</div>
				</div>
			</section>
			<section id="Diabetologists">
				<h2 style="color: black" class="f-s-24 f-w-700 center-txt">
					Best Endocrinologists & Diabetologists<span class="pink-txt"> In Bangalore</span>
				</h2>
				<div id="Diabetologists-wrapper">
					<div>
						<div class="Diabetologists-img-wrapper">
							<amp-img
								src="https://onecare.co.in/wp-content/uploads/2022/01/doc1.svg"
								width="1"
								height="1"
								layout="responsive"
								alt="logo"
								style="border-radius: 30px"
							>
							</amp-img>
						</div>

						<div class="doc-det">
							<h4 class="f-s-14 f-w-700 f-s-r">
								Dr. Basavaraj GS<br />
								<span class="f-w-400">
									MBBS, MD, DM<br />
									(Endocrinology)</span
								>
							</h4>
							<h4 class="m-t-10 f-s-12 f-w-400 f-s-r orange-txt">
								13+ years of experience<br />
								Associated with Narayana Hrudayalaya
							</h4>
							<div class="flex">
								<div style="width: 6%; margin-right: 5px">
									<amp-img
										src="https://onecare.co.in/wp-content/uploads/2022/01/Thumbs-Up.webp"
										width="1"
										height="1"
										layout="responsive"
										alt="logo"
									>
									</amp-img>
								</div>
								<h4 class="f-s-12 f-w-500">98% Approval on Practo</h4>
							</div>
						</div>
					</div>

					<div>
						<div class="Diabetologists-img-wrapper">
							<amp-img
								src="https://onecare.co.in/wp-content/uploads/2022/01/doc2.svg"
								width="1"
								height="1"
								layout="responsive"
								alt="logo"
								style="border-radius: 30px"
							>
							</amp-img>
						</div>

						<div class="doc-det">
							<h4 class="f-s-14 f-w-700 f-s-r">
								Dr. C Siva Rama Krishna<br />
								<span class="f-s-400"
									>MD, M.H. Sc.<br />
									(Diabetology)</span
								>
							</h4>
							<h4 class="f-s-12 f-w-400 f-s-r orange-txt m-t-10">10+ years of experience</h4>
							<div class="flex">
								<div style="width: 6%; margin-right: 5px">
									<amp-img
										src="https://onecare.co.in/wp-content/uploads/2022/01/Thumbs-Up.webp"
										width="1"
										height="1"
										layout="responsive"
										alt="logo"
									>
									</amp-img>
								</div>
								<h4 class="f-s-12 f-w-500">92% Approval on Practo</h4>
							</div>
						</div>
					</div>

					<div>
						<div class="Diabetologists-img-wrapper">
							<amp-img
								src="https://onecare.co.in/wp-content/uploads/2022/01/doc3.svg"
								width="1"
								height="1"
								layout="responsive"
								alt="logo"
								style="border-radius: 30px"
							>
							</amp-img>
						</div>

						<div class="doc-det">
							<h4 class="f-s-14 f-w-700 f-s-r">
								Dr. Lavanya<br />
								<span class="f-s-400">
									MBBS<br />
									(Diabetology)</span
								>
							</h4>

							<h4 class="m-t-10 f-s-12 f-w-400 f-s-r orange-txt">
								17+ years of experience<br />

								Associated with Apollo Hospitals
							</h4>
							<div class="flex">
								<div style="width: 6%; margin-right: 5px">
									<amp-img
										src="https://onecare.co.in/wp-content/uploads/2022/01/Thumbs-Up.webp"
										width="1"
										height="1"
										layout="responsive"
										alt=""
									>
									</amp-img>
								</div>
								<h4 class="m-t-10 f-s-12 f-w-500">87% Approval on Practo</h4>
							</div>
						</div>
					</div>
				</div>
			</section>
			<section id="impact-program">
				<h2 class="f-w-700 f-s-30 center-txt">
					OneCare <span class="pink-txt"> IMPACT </span> Program
				</h2>
				<h2 class="f-w-400 f-s-18 center-txt f-s-L">
					5 Phase Treatment Approach for Type 2 & Pre diabetes
				</h2>
				<div class="my-timeline">
					<div class="flex t-item">
						<div class="t-img">
							<amp-img
								src="https://onecare.co.in/wp-content/uploads/2022/01/pink1.webp"
								width="1"
								height="1.8"
								layout="responsive"
								alt="one"
							>
							</amp-img>
						</div>
						<div class="t-main">
							<div class="flex t-up">
								<div class="t-head">Lifestyle Insights</div>
								<div class="t-line"></div>
								<div class="t-body">
									<h2>Duration 0 : 1 week</h2>
									<p>
										We will begin the programme by getting to know you, your lifestyle, and your
										eating habits.
									</p>
								</div>
							</div>
							<div class="flex t-down">
								<div class="t-head">Outcome</div>
								<div class="t-line"></div>
								<div class="t-body">
									<p>
										You acquire practical knowledge about how we are going to fight your diabetes
									</p>
								</div>
							</div>
						</div>
					</div>
					<div class="flex t-item">
						<div class="t-img">
							<amp-img
								src="https://onecare.co.in/wp-content/uploads/2022/01/pink2.webp"
								width="1"
								height="1.8"
								layout="responsive"
								alt="one"
							>
							</amp-img>
						</div>
						<div class="t-main">
							<div class="flex t-up">
								<div class="t-head">Lifestyle Insights</div>
								<div class="t-line"></div>
								<div class="t-body">
									<h2>Duration 3 : 6 weeks</h2>
									<p>We will help you replace your harmful lifestyle habits with healthy ones.</p>
								</div>
							</div>
							<div class="flex t-down">
								<div class="t-head">Outcome</div>
								<div class="t-line"></div>
								<div class="t-body">
									<p>
										From weight reduction to energized physique, your body starts to enjoy a
										positive transformation
									</p>
								</div>
							</div>
						</div>
					</div>
					<div class="flex t-item">
						<div class="t-img">
							<amp-img
								src="https://onecare.co.in/wp-content/uploads/2022/01/pink3.webp"
								width="1"
								height="1.8"
								layout="responsive"
								alt="one"
							>
							</amp-img>
						</div>
						<div class="t-main">
							<div class="flex t-up">
								<div class="t-head">Lifestyle Insights</div>
								<div class="t-line"></div>
								<div class="t-body">
									<h2>Duration 8 : 12 weeks</h2>
									<p>Provides an extensive treatment plan to help control your diabetes.</p>
								</div>
							</div>
							<div class="flex t-down">
								<div class="t-head">Outcome</div>
								<div class="t-line"></div>
								<div class="t-body">
									<p>
										As our detox plan lowers your blood sugar, you will notice your dependence on
										medication starting to wane.
									</p>
								</div>
							</div>
						</div>
					</div>
					<div class="flex t-item">
						<div class="t-img">
							<amp-img
								src="https://onecare.co.in/wp-content/uploads/2022/01/pink4.webp"
								width="1"
								height="1.8"
								layout="responsive"
								alt="one"
							>
							</amp-img>
						</div>
						<div class="t-main">
							<div class="flex t-up">
								<div class="t-head">Lifestyle Insights</div>
								<div class="t-line"></div>
								<div class="t-body">
									<h2>Duration 3 : 8 weeks</h2>
									<p>Here, you will focus on muscle building and strengthening.</p>
								</div>
							</div>
							<div class="flex t-down">
								<div class="t-head">Outcome</div>
								<div class="t-line"></div>
								<div class="t-body">
									<p>Building body muscles, and a sustained feeling of absolute wellness.</p>
								</div>
							</div>
						</div>
					</div>
					<div class="flex t-item">
						<div class="t-img">
							<amp-img
								src="https://onecare.co.in/wp-content/uploads/2022/01/pink5.webp"
								width="1"
								height="1.8"
								layout="responsive"
								alt="one"
							>
							</amp-img>
						</div>
						<div class="t-main">
							<div class="flex t-up">
								<div class="t-head">Lifestyle Insights</div>
								<div class="t-line"></div>
								<div class="t-body">
									<h2>Duration 6 : 8 weeks</h2>
									<p>
										The final phase is meant to help you adjust to your new normal and help you in
										sustaining it.
									</p>
								</div>
							</div>
							<div class="flex t-down">
								<div class="t-head">Outcome</div>
								<div class="t-line"></div>
								<div class="t-body">
									<p>
										With healthy habits already ingrained, you can keep diabetes under control
										forever.
									</p>
								</div>
							</div>
						</div>
					</div>
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
										src="https://onecare.co.in/wp-content/uploads/2022/01/google.svg "
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
											src="https://onecare.co.in/wp-content/uploads/2022/01/stars.webp"
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
										src="https://onecare.co.in/wp-content/uploads/2022/01/google.svg"
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
											src="https://onecare.co.in/wp-content/uploads/2022/01/stars.webp"
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
										src="https://onecare.co.in/wp-content/uploads/2022/01/google.svg"
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
											src="https://onecare.co.in/wp-content/uploads/2022/01/stars.webp"
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
									<amp-img
										src="https://onecare.co.in/wp-content/uploads/2022/01/p.svg"
										width="1"
										height="1"
										layout="responsive"
										alt=""
									>
									</amp-img>
								</div>
								<div class="over-say-review-detail-wrapper">
									<h4 class="f-s-16 f-w-700 orange-txt">Prakash Sharma</h4>
									<p style="font-style: italic" class="f-s-12 gray-txt f-w-400">
										Verified Customer
									</p>
									<div style="width: 60px; margin: 5px 0px">
										<amp-img
											src="https://onecare.co.in/wp-content/uploads/2022/01/stars.webp"
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
									<amp-img
										src="https://onecare.co.in/wp-content/uploads/2022/01/p.svg"
										width="1"
										height="1"
										layout="responsive"
										alt=""
									>
									</amp-img>
								</div>
								<div class="over-say-review-detail-wrapper">
									<h4 class="f-s-16 f-w-700 orange-txt">Akanksha Pandey</h4>
									<p style="font-style: italic" class="f-s-12 gray-txt f-w-400">
										Verified Customer
									</p>
									<div style="width: 60px; margin: 5px 0px">
										<amp-img
											src="https://onecare.co.in/wp-content/uploads/2022/01/stars.webp"
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
									<amp-img
										src="https://onecare.co.in/wp-content/uploads/2022/01/p.svg"
										width="1"
										height="1"
										layout="responsive"
										alt=""
									>
									</amp-img>
								</div>
								<div class="over-say-review-detail-wrapper">
									<h4 class="f-s-16 f-w-700 orange-txt">Gayatri</h4>
									<p style="font-style: italic" class="f-s-12 gray-txt f-w-400">
										Verified Customer
									</p>
									<div style="width: 60px; margin: 5px 0px">
										<amp-img
											src="https://onecare.co.in/wp-content/uploads/2022/01/stars.webp"
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
									<amp-img
										src="https://onecare.co.in/wp-content/uploads/2022/01/p.svg"
										width="1"
										height="1"
										layout="responsive"
										alt=""
									>
									</amp-img>
								</div>
								<div class="over-say-review-detail-wrapper">
									<h4 class="f-s-16 f-w-700 orange-txt">Rajesh Talreja</h4>
									<p style="font-style: italic" class="f-s-12 gray-txt f-w-400">
										Verified Customer
									</p>
									<div style="width: 60px; margin: 5px 0px">
										<amp-img
											src="https://onecare.co.in/wp-content/uploads/2022/01/stars.webp"
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
			<section id="location" style="background-color: white">
				<h2 class="f-s-24 f-w-700 center-txt" style="color: #f26975">Our Locations</h2>
				<h3 class="f-s-14 f-w-700 center-txt">We are at 3 locations in Bengaluru</h3>

				<div>
					<div id="map-img-wrapper">
						<amp-iframe
							width="600"
							height="400"
							title="Google map pin on onecare Bangalore"
							layout="responsive"
							sandbox="allow-scripts allow-same-origin allow-popups"
							frameborder="0"
							src="https://www.google.com/maps/d/u/0/embed?mid=1wnmdhULAMcTr6AaKi1cD2kikBS3DHs1s&ehbc=2E312F"
						>
						</amp-iframe>
					</div>
					<div>
						<h2 style="max-width: 85%; margin: 10px auto" class="orange-txt f-s-24 f-w-700">
							Bellandur
						</h2>
						<div class="flex">
							<div class="loc-detail">
								<div class="flex1">
									<div class="location-img-wrapper">
										<amp-img
											src="https://onecare.co.in/wp-content/uploads/2022/01/Location.webp"
											width="1"
											height="1"
											layout="responsive"
											alt="logo"
										>
										</amp-img>
									</div>
									<div>
										<p class="f-s-16 f-w-400 map-address">
											Opposit to, Sobha Quartz, 227, Ground Floor, Off, Outer Ring Rd, Green Glen
											Layout, Bellandur, Bengaluru, Karnataka 560103
										</p>
									</div>
								</div>
								<div class="flex m-t-10">
									<div style="width: 30px; margin-right: 5px">
										<amp-img
											src="https://onecare.co.in/wp-content/uploads/2022/01/Phone.webp"
											width="1"
											height="1"
											layout="responsive"
											alt="logo"
										>
										</amp-img>
									</div>
									<a href="#080 4680 8989" class="f-s-16 f-w-600">080 4568 7460</a>
								</div>
								<div class="flex" style="margin: 0px 25px">
									<h3 style="margin: 0px 5px" class="f-s-14">4.9</h3>
									<div style="width: 4em">
										<amp-img
											src="https://onecare.co.in/wp-content/uploads/2022/01/stars.webp"
											width="5"
											height="1"
											layout="responsive"
											alt=""
										>
										</amp-img>
									</div>
								</div>
							</div>

							<div style="width: 500px">
								<amp-img
									src="https://onecare.co.in/wp-content/uploads/2022/01/Rectangle-136-1-1.webp"
									width="1.2"
									height="1"
									layout="responsive"
									alt="logo"
								>
								</amp-img>
							</div>
						</div>
						<div class="flex map-btn-wrapper">
							<a
								target="_blank"
								href="https://www.google.com/maps/dir//onecare+bellandur/data=!4m6!4m5!1m1!4e2!1m2!1m1!1s0x3bae13af860deb99:0x370fde6582075187?sa=X&ved=2ahUKEwj304WTlMP1AhXQUWwGHXytBxgQ9Rd6BAgrEAU"
								class="center-txt hov-btn-orange white f-s-14 f-s-i f-w-700"
								>GET DIRECTIONS</a
							>

							<a href="#form-section" class="hov-btn-orange center-txt white f-s-14 f-s-i f-w-700"
								>BOOK A CONSULTATION</a
							>
						</div>
					</div>

					<div>
						<h2 style="max-width: 85%; margin: 10px auto" class="orange-txt f-s-24 f-w-700">
							Koramangala
						</h2>
						<div class="flex">
							<div class="loc-detail">
								<div class="flex1">
									<div class="location-img-wrapper">
										<amp-img
											src="https://onecare.co.in/wp-content/uploads/2022/01/Location.webp"
											width="1"
											height="1"
											layout="responsive"
											alt="LOGO"
										>
										</amp-img>
									</div>
									<div>
										<p class="f-s-16 f-w-400 map-address">
											No. 81, ST Bed Entrance, off 80 Feet Road, Koramangala 4th Block, Koramangala,
											Bengaluru, Karnataka 560034
										</p>
									</div>
								</div>
								<div class="flex">
									<div style="width: 30px; margin-right: 5px" class="m-t-10">
										<amp-img
											src="https://onecare.co.in/wp-content/uploads/2022/01/Phone.webp"
											width="1"
											height="1"
											layout="responsive"
											alt="logo"
										>
										</amp-img>
									</div>
									<a href="tel:080 4568 7460" class="f-s-16 f-w-600">080 4568 7460</a>
								</div>
								<div class="flex" style="margin: 0px 25px">
									<h3 style="margin: 0px 5px" class="f-s-14">4.9</h3>
									<div style="width: 4em">
										<amp-img
											src="https://onecare.co.in/wp-content/uploads/2022/01/stars.webp"
											width="5"
											height="1"
											layout="responsive"
											alt=""
										>
										</amp-img>
									</div>
								</div>
							</div>

							<div style="width: 500px">
								<amp-img
									src="https://onecare.co.in/wp-content/uploads/2022/01/Rectangle-136-1.webp"
									width="1.2"
									height="1"
									layout="responsive"
									alt="logo"
								>
								</amp-img>
							</div>
						</div>
						<div class="flex map-btn-wrapper">
							<a
								target="_blank"
								href="https://www.google.com/maps/dir/12.9129744,77.6421572/onecare+st+bed/@12.923979,77.6271344,15z/data=!3m1!4b1!4m9!4m8!1m1!4e1!1m5!1m1!1s0x3bae15339609fa05:0xe4b01212063f290e!2m2!1d77.6304605!2d12.9348738"
								class="white hov-btn-orange f-s-14 f-s-i f-w-700 center-txt"
								>GET DIRECTIONS</a
							>

							<a href="#form-section" class="f-s-14 hov-btn-orange f-s-i f-w-700 white center-txt"
								>BOOK A CONSULTATION</a
							>
						</div>
					</div>
					<div>
						<h2 style="max-width: 85%; margin: 10px auto" class="orange-txt f-s-24 f-w-700">
							Indiranagar
						</h2>
						<div class="flex">
							<div class="loc-detail">
								<div class="flex1">
									<div class="location-img-wrapper">
										<amp-img
											src="https://onecare.co.in/wp-content/uploads/2022/01/Location.webp"
											width="1"
											height="1"
											layout="responsive"
											alt=""
										>
										</amp-img>
									</div>
									<div>
										<p class="f-s-16 f-w-400 map-address">
											505/1 1st A Cross Indiranagar 1st Stage (Near CMH Hospital/Costa Coffee),
											Bengaluru, Karnataka 560038
										</p>
									</div>
								</div>
								<div class="flex">
									<div style="width: 30px; margin-right: 5px" class="m-t-10">
										<amp-img
											src="https://onecare.co.in/wp-content/uploads/2022/01/Phone.webp"
											width="1"
											height="1"
											layout="responsive"
											alt="logo"
										>
										</amp-img>
									</div>
									<a href="tel:080 4568 7460" class="f-s-16 f-w-600">080 4568 7460</a>
								</div>
								<div style="margin: 0px 25px" class="flex">
									<h3 style="margin: 0px 5px" class="f-s-14">4.9</h3>
									<div style="width: 4em">
										<amp-img
											src="https://onecare.co.in/wp-content/uploads/2022/01/stars.webp"
											width="5"
											height="1"
											layout="responsive"
											alt=""
										>
										</amp-img>
									</div>
								</div>
							</div>

							<div style="width: 500px">
								<amp-img
									src="https://onecare.co.in/wp-content/uploads/2022/01/Rectangle-136-_2_.webp"
									width="1.2"
									height="1"
									layout="responsive"
									alt="logo"
								>
								</amp-img>
							</div>
						</div>
						<div class="flex map-btn-wrapper">
							<a
								target="_blank"
								href="https://www.google.com/maps/place/Sattva+Superspeciality+Centre+-+Diabetes,+Thyroid+%26+Endocrinology+Clinic+%2F+Child+Care+Clinic/@12.9787463,77.6440287,15z/data=!4m5!3m4!1s0x0:0x510c519d7abd0642!8m2!3d12.9787463!4d77.6440287?sa=X&ved=2ahUKEwiBuIOAm8P1AhWyzTgGHRAMAnYQ_BJ6BAgbEAU&shorturl=1"
								class="white f-s-14 hov-btn-orange f-s-i f-w-700 center-txt"
								>GET DIRECTIONS</a
							>

							<a href="#form-section" class="white hov-btn-orange f-s-14 f-s-i f-w-700 center-txt"
								>BOOK A CONSULTATION</a
							>
						</div>
					</div>
				</div>
			</section>
			<section style="padding: 0" id="travel">
				<div style="background: linear-gradient(177.97deg, #d0f2ff 1.72%, #ffffff 98.52%)">
					<div class="flex" style="padding: 20px; justify-content: space-between">
						<div>
							<h2 class="drk-blu-txt f-s-18 f-w-700">Skip The Travel !</h2>
							<p class="f-w-400 f-s-14">
								Take Online Doctor Consultation <br />Private video consultation
							</p>
						</div>
						<div style="margin: 0px 10px; flex: 1">
							<amp-img
								src="https://onecare.co.in/wp-content/uploads/2022/01/skipgirl.webp"
								width="1.3"
								height="1"
								layout="responsive"
								alt="logo"
							>
							</amp-img>
						</div>
					</div>

					<div
						class="blue-bg hov-btn-blue center-txt white"
						style="padding: 10px; border-radius: 5px; width: 90%; margin: auto"
					>
						<a href="#form-section" class="m-t-10 white f-s-18 f-w-700">Book Free Appointment </a>
					</div>
				</div>
				<div style="padding: 30px 0px">
					<h3 class="center-txt f-s-14 f-w-700">
						How technology-enabled OneCare Diabetes<br />
						Clinics provide better outcomes:
					</h3>

					<div style="padding: 20px 0px; max-width: 420px; margin: auto">
						<div id="tick-head">
							<p style="margin-right: 10px" class="f-s-12 f-w-700 blu-txt">
								OneCare Smart<br />
								Diabetes Clinics
							</p>
							<p class="f-s-12 f-w-700 drk-blu-txt">
								Other <br />
								Clinics
							</p>
						</div>
						<div class="flex tick-wrapper">
							<p class="f-s-14 f-w-600">
								Top endocrinologists and <br />
								Diabetologists
							</p>
							<div>
								<amp-img
									style="width: 35px"
									src="https://onecare.co.in/wp-content/uploads/2022/01/Ok.svg"
									width="1"
									height="1"
									layout="responsive"
									alt="logo"
								>
								</amp-img>
								<h4 style="font-size: 8px">10+ years of experience</h4>
							</div>
							<div>
								<amp-img
									style="width: 30px"
									src="https://onecare.co.in/wp-content/uploads/2022/01/Box Important.svg"
									width="1.5"
									height="1.3"
									layout="responsive"
									alt="logo"
								>
								</amp-img>
								<h4 style="font-size: 8px">
									varied<br />
									experience
								</h4>
							</div>
						</div>

						<div class="flex tick-wrapper">
							<p class="f-s-14 f-w-600">
								Personalized & Sustainable <br />
								Diabetes control program
							</p>
							<div>
								<amp-img
									style="width: 25px"
									src="https://onecare.co.in/wp-content/uploads/2022/01/Ok.svg"
									width="1"
									height="1"
									layout="responsive"
									alt="logo"
								>
								</amp-img>
							</div>
							<div>
								<amp-img
									style="width: 25px"
									src="https://onecare.co.in/wp-content/uploads/2022/01/Xbox-X.svg"
									width="1.5"
									height="1.3"
									layout="responsive"
									alt="logo"
								>
								</amp-img>
							</div>
						</div>

						<div class="flex tick-wrapper">
							<p class="f-s-14 f-w-600">Smart & remote monitoring by <br />OneCare mobile app</p>
							<div>
								<amp-img
									src="https://onecare.co.in/wp-content/uploads/2022/01/Ok.svg"
									style="width: 25px"
									width="1"
									height="1"
									layout="responsive"
									alt="logo"
								>
								</amp-img>
							</div>
							<div>
								<amp-img
									src="https://onecare.co.in/wp-content/uploads/2022/01/Xbox-X.svg"
									style="width: 25px"
									width="1.5"
									height="1.3"
									layout="responsive"
									alt="logo"
								>
								</amp-img>
							</div>
						</div>

						<div class="flex tick-wrapper">
							<p class="f-s-14 f-w-600">24*7 access to expert dietician</p>
							<div>
								<amp-img
									src="https://onecare.co.in/wp-content/uploads/2022/01/Ok.svg"
									style="width: 25px"
									width="1"
									height="1"
									layout="responsive"
									alt="logo"
								>
								</amp-img>
							</div>
							<div>
								<amp-img
									src="https://onecare.co.in/wp-content/uploads/2022/01/Xbox-X.svg"
									style="width: 25px"
									width="1.5"
									height="1.3"
									layout="responsive"
									alt="logo"
								>
								</amp-img>
							</div>
						</div>

						<div class="flex tick-wrapper">
							<p class="f-s-14 f-w-600">Dedicated coach with free <br />Weekly Sessions</p>
							<div>
								<amp-img
									src="https://onecare.co.in/wp-content/uploads/2022/01/Ok.svg"
									style="width: 25px"
									width="1"
									height="1"
									layout="responsive"
									alt="logo"
								>
								</amp-img>
							</div>
							<div>
								<amp-img
									src="https://onecare.co.in/wp-content/uploads/2022/01/Xbox-X.svg"
									style="width: 25px"
									width="1.5"
									height="1.3"
									layout="responsive"
									alt="logo"
								>
								</amp-img>
							</div>
						</div>

						<div class="flex tick-wrapper">
							<p class="f-s-14 f-w-600">
								Free unlimited doctor <br />
								Follow-ups
							</p>
							<div>
								<amp-img
									src="https://onecare.co.in/wp-content/uploads/2022/01/Ok.svg"
									style="width: 25px"
									width="1"
									height="1"
									layout="responsive"
									alt="logo"
								>
								</amp-img>
							</div>
							<div>
								<amp-img
									src="https://onecare.co.in/wp-content/uploads/2022/01/Xbox-X.svg"
									style="width: 25px"
									width="1.5"
									height="1.3"
									layout="responsive"
									alt="logo"
								>
								</amp-img>
							</div>
						</div>
						<div class="flex tick-wrapper">
							<p class="f-s-14 f-w-600">Focus on controlling & <br />Reversing Diabetes</p>
							<div>
								<amp-img
									src="https://onecare.co.in/wp-content/uploads/2022/01/Ok.svg"
									style="width: 25px"
									width="1"
									height="1"
									layout="responsive"
									alt="logo"
								>
								</amp-img>
							</div>
							<div>
								<amp-img
									src="https://onecare.co.in/wp-content/uploads/2022/01/Xbox-X.svg"
									style="width: 25px"
									width="1.5"
									height="1.3"
									layout="responsive"
									alt="logo"
								>
								</amp-img>
							</div>
						</div>
					</div>
				</div>
			</section>
			<section style="background: white">
				<h3 class="f-s-18 f-w-700">In the news</h3>

				<div class="marquee">
					<div class="marquee-content">
						<div class="marquee-item">
							<amp-img
								style="width: 80px; height: 35px; margin-right: 10px"
								src="https://onecare.co.in/wp-content/uploads/2022/01/vccircle.svg"
								width="1"
								height="1"
								layout="responsive"
								alt="logo"
							>
							</amp-img>
						</div>

						<div class="marquee-item">
							<amp-img
								style="width: 110px; height: 35px; margin-right: 10px"
								src="https://onecare.co.in/wp-content/uploads/2022/01/logo_yourstory-1.svg"
								width="1"
								height="1"
								layout="responsive"
								alt="logo"
							>
							</amp-img>
						</div>

						<div class="marquee-item">
							<amp-img
								style="width: 100px; height: 35px"
								src="https://onecare.co.in/wp-content/uploads/2022/01/EH-Logo-white-1.svg"
								width="1"
								height="1"
								layout="responsive"
								alt="logo"
							>
							</amp-img>
						</div>

						<div class="marquee-item">
							<amp-img
								style="width: 250px; height: 65px"
								src="https://onecare.co.in/wp-content/uploads/2022/01/IndianStartupNews-logo-1-1.webp"
								width="1"
								height="1"
								layout="responsive"
								alt="logo"
							>
							</amp-img>
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
									<h4 class="f-s-14 f-w-500 f-s-1 gray-txt">What is Type 2 diabetes?</h4>
									<span>
										<amp-img
											style="width: 15px"
											src="https://onecare.co.in/wp-content/uploads/2022/01/Arrow.svg"
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
								Your pancreas, an organ positioned between your stomach and backbone that aids
								digestion releases insulin into your blood. Insulin assists your blood in
								transporting glucose to all of your body's cells. Sometimes your body does not
								produce enough insulin, or the insulin does not function properly. Glucose remains
								in your blood and does not reach your cells as a result. When your blood glucose
								levels become too high, it might lead to diabetes or prediabetes. Having too much
								glucose in your blood might lead to health concerns over time.
							</p>
						</section>
						<section>
							<h2 class="amp-accordion__header">
								<div class="flex" style="justify-content: space-between; padding: 6px">
									<h4 class="f-s-14 f-w-500 f-s-1 gray-txt">
										Can diabetes be managed with medicines alone?
									</h4>
									<span>
										<amp-img
											style="width: 15px"
											src="https://onecare.co.in/wp-content/uploads/2022/01/Arrow.svg"
											width="1"
											height="1"
											layout="responsive"
											alt="logo"
										>
										</amp-img>
									</span>
								</div>
							</h2>
							<p class="f-s-14 f-w-400 gray-txt" style="padding: 15px 0px">
								No. Diabetes is a lifestyle disorder which cannot be managed with medicines alone.
								Many factors like diet, physical activity, stress and other lifestyle habits play a
								role in reversal.
							</p>
						</section>
						<section>
							<h2 class="amp-accordion__header">
								<div class="flex" style="justify-content: space-between; padding: 6px">
									<h4 class="f-s-14 f-w-500 f-s-1 gray-txt">What does OneCare offer?</h4>
									<span>
										<amp-img
											style="width: 15px"
											src="https://onecare.co.in/wp-content/uploads/2022/01/Arrow.svg"
											width="1"
											height="1"
											layout="responsive"
											alt="logo"
										>
										</amp-img>
									</span>
								</div>
							</h2>
							<p class="f-s-14 f-w-400 gray-txt" style="padding: 15px 0px">
								OneCare - India's first chain of Smart diabetes Clinics offer personalised diabetes
								programmes that's right for you. Our Comprehensive clinical care consists of 1-1-
								in-depth doctor consultations, expert dietitian sessions, and most importantly, a
								structured roadmap for your diabetes care.
							</p>
						</section>
						<section>
							<h2 class="amp-accordion__header">
								<div class="flex" style="justify-content: space-between; padding: 6px">
									<h4 class="f-s-14 f-w-500 f-s-1 gray-txt">What is the OneCare IMPACT program?</h4>
									<span>
										<amp-img
											style="width: 15px"
											src="https://onecare.co.in/wp-content/uploads/2022/01/Arrow.svg"
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
						<section>
							<h2 class="amp-accordion__header">
								<div class="flex" style="justify-content: space-between; padding: 6px">
									<h4 class="f-s-14 f-w-500 f-s-1 gray-txt">
										What are the benefits of the program?
									</h4>
									<span>
										<amp-img
											style="width: 15px"
											src="https://onecare.co.in/wp-content/uploads/2022/01/Arrow.svg"
											width="1"
											height="1"
											layout="responsive"
											alt="logo"
										>
										</amp-img>
									</span>
								</div>
							</h2>
							<div style="padding: 15px 0px" class="f-s-14 f-w-400 gray-txt">
								<h4>Apart from blood sugar reduction, other benefits of the program are:</h4>
								<li>Reduction in acidity, pains, digestion problems, feeling lighter</li>
								<li>Drop in weight</li>
								<li>Raised energy levels</li>
								<li>Improvement in stamina, flexibility and strength</li>
								<li>Drop in sugar levels and/ or drop in medications (for diabetics)</li>
							</div>
						</section>
					</amp-accordion>

					<article id="hide-accordion" hidden>
						<amp-accordion disable-session-states id="prop-accordion2" class="prop-accordion">
							<section>
								<h2 class="amp-accordion__header">
									<div class="flex" style="justify-content: space-between; padding: 6px">
										<h4 class="f-s-14 f-w-500 f-s-1 gray-txt">
											What are the complications of type 2 diabetes?
										</h4>
										<span>
											<amp-img
												style="width: 15px"
												src="https://onecare.co.in/wp-content/uploads/2022/01/Arrow.svg"
												width="1"
												height="1"
												layout="responsive"
												alt="logo"
											>
											</amp-img>
										</span>
									</div>
								</h2>
								<div style="padding: 15px 0px" class="f-s-14 f-w-400 gray-txt">
									<h4>
										Type 2 diabetes increases the risk of developing several medical complications.
										These can include:
									</h4>
									<ol>
										<li>Heart and blood vessel problems</li>
										<li>Nerve damage (neuropathy)</li>
										<li>Kidney damage (nephropathy)</li>
										<li>Eye damage (retinopathy)</li>
										<li>Foot damage and amputation</li>
										<li>Depression or diabetes distress</li>
									</ol>
								</div>
							</section>
							<section>
								<h2 class="amp-accordion__header">
									<div class="flex" style="justify-content: space-between; padding: 6px">
										<h4 class="f-s-14 f-w-500 f-s-1 gray-txt">
											What are the symptoms of type 2 diabetes
										</h4>
										<span>
											<amp-img
												style="width: 15px"
												src="https://onecare.co.in/wp-content/uploads/2022/01/Arrow.svg"
												width="1"
												height="1"
												layout="responsive"
												alt="logo"
											>
											</amp-img>
										</span>
									</div>
								</h2>
								<div style="padding: 15px 0px" class="f-s-14 f-w-400 gray-txt">
									-

									<h4>
										Type 2 diabetes symptoms and signs usually appear gradually. In fact, you could
										have type 2 diabetes for years without realising it. When there are signs and
										symptoms, they may include:
									</h4>
									<ul>
										<li>Increased thirst</li>
										<li>Frequent urination</li>
										<li>Increased hunger</li>
										<li>Unintended weight loss</li>
										<li>Fatigue</li>
										<li>Blurred vision</li>
										<li>Frequent infections</li>
										<li>Numbness or tingling in the hands or feet</li>
										<li>Areas of darkened skin, usually in the armpits and neck</li>
									</ul>
									<br />
									<h4>
										Some people with diabetes don't have any of these signs or symptoms.The only way
										to confirm if you have diabetes is to have your doctor do a blood test.
									</h4>
								</div>
							</section>
							<section>
								<h2 class="amp-accordion__header">
									<div class="flex" style="justify-content: space-between; padding: 6px">
										<h4 class="f-s-14 f-w-500 f-s-1 gray-txt">How is diabetes diagnosed?</h4>
										<span>
											<amp-img
												style="width: 15px"
												src="https://onecare.co.in/wp-content/uploads/2022/01/Arrow.svg"
												width="1"
												height="1"
												layout="responsive"
												alt="logo"
											>
											</amp-img>
										</span>
									</div>
								</h2>
								<div style="padding: 15px 0px" class="f-s-14 f-w-400 gray-txt">
									<h4>
										Diabetes is frequently diagnosed clinically as a result of symptoms such as
										increased thirst and urination, as well as recurring infections. Diabetes can be
										diagnosed by blood glucose (FBBS which is a fasting blood sugar test and PPBS
										which is a post meal sugar test) and HBA1c levels.
									</h4>
								</div>
							</section>

							<section>
								<h2 class="amp-accordion__header">
									<div class="flex" style="justify-content: space-between; padding: 6px">
										<h4 class="f-s-14 f-w-500 f-s-1 gray-txt">Can diabetes be cured?</h4>
										<span>
											<amp-img
												style="width: 15px"
												src="https://onecare.co.in/wp-content/uploads/2022/01/Arrow.svg"
												width="1"
												height="1"
												layout="responsive"
												alt="logo"
											>
											</amp-img>
										</span>
									</div>
								</h2>
								<div style="padding: 15px 0px" class="f-s-14 f-w-400 gray-txt">
									<h4>
										Diabetes is a lifestyle disorder. Type 2 diabetes can be “reversed” but not
										“cured” because the disease will come back if long-term healthy lifestyle is not
										successfully maintained.
									</h4>
								</div>
							</section>

							<section>
								<h2 class="amp-accordion__header">
									<div class="flex" style="justify-content: space-between; padding: 6px">
										<h4 class="f-s-14 f-w-500 f-s-1 gray-txt">What is diabetes reversal?</h4>
										<span>
											<amp-img
												style="width: 15px"
												src="https://onecare.co.in/wp-content/uploads/2022/01/Arrow.svg"
												width="1"
												height="1"
												layout="responsive"
												alt="logo"
											>
											</amp-img>
										</span>
									</div>
								</h2>
								<div style="padding: 15px 0px" class="f-s-14 f-w-400 gray-txt">
									<h4>
										Maintaining an HbA1c of 6.5% or lower, with the elimination of glycemic control
										(diabetic) medications (except for metformin).
									</h4>
								</div>
							</section>

							<section>
								<h2 class="amp-accordion__header">
									<div class="flex" style="justify-content: space-between; padding: 6px">
										<h4 class="f-s-14 f-w-500 f-s-1 gray-txt">
											Is this program sufficient to manage my diabetes?
										</h4>
										<span>
											<amp-img
												style="width: 15px"
												src="https://onecare.co.in/wp-content/uploads/2022/01/Arrow.svg"
												width="1"
												height="1"
												layout="responsive"
												alt="logo"
											>
											</amp-img>
										</span>
									</div>
								</h2>
								<div style="padding: 15px 0px" class="f-s-14 f-w-400 gray-txt">
									<h4>
										Yes. The OneCare diabetes program takes complete care of your diabetes. We
										connect you to the best endocrinologist, best diabetes specialist, expert health
										coaches which takes complete care of your condition.
									</h4>
								</div>
							</section>

							<section>
								<h2 class="amp-accordion__header">
									<div class="flex" style="justify-content: space-between; padding: 6px">
										<h4 class="f-s-14 f-w-500 f-s-1 gray-txt">
											Will the program be customized to my needs?
										</h4>
										<span>
											<amp-img
												style="width: 15px"
												src="https://onecare.co.in/wp-content/uploads/2022/01/Arrow.svg"
												width="1"
												height="1"
												layout="responsive"
												alt="logo"
											>
											</amp-img>
										</span>
									</div>
								</h2>
								<div style="padding: 15px 0px" class="f-s-14 f-w-400 gray-txt">
									<h4>
										Yes. We customize and personalize the entire program according to your needs. We
										make changes which you can make and our health coach makes a collaborative plan.
									</h4>
								</div>
							</section>

							<section>
								<h2 class="amp-accordion__header">
									<div class="flex" style="justify-content: space-between; padding: 6px">
										<h4 class="f-s-14 f-w-500 f-s-1 gray-txt">
											Are doctors consultations part of the program?
										</h4>
										<span>
											<amp-img
												style="width: 15px"
												src="https://onecare.co.in/wp-content/uploads/2022/01/Arrow.svg"
												width="1"
												height="1"
												layout="responsive"
												alt="logo"
											>
											</amp-img>
										</span>
									</div>
								</h2>
								<div style="padding: 15px 0px" class="f-s-14 f-w-400 gray-txt">
									<h4>Yes. You can have free doctor consultations throughout the program.</h4>
								</div>
							</section>

							<section>
								<h2 class="amp-accordion__header">
									<div class="flex" style="justify-content: space-between; padding: 6px">
										<h4 class="f-s-14 f-w-500 f-s-1 gray-txt">Who is a health coach?</h4>
										<span>
											<amp-img
												style="width: 15px"
												src="https://onecare.co.in/wp-content/uploads/2022/01/Arrow.svg"
												width="1"
												height="1"
												layout="responsive"
												alt="logo"
											>
											</amp-img>
										</span>
									</div>
								</h2>
								<div style="padding: 15px 0px" class="f-s-14 f-w-400 gray-txt">
									<h4>
										Health Coaches are experts in health, nutrition, exercise, and motivational
										psychology. Health coaches partner with their clients to help them set and reach
										goals for satisfying and healthy lives. They identify factors that need to
										change and how they can achieve diabetes reversal. Health Coaches can support
										their clients to find a healthy balance in areas such as:
									</h4>
									<ul>
										<li>Weight loss</li>
										<li>Stress management</li>
										<li>Start an exercise routine</li>
										<li>Improve diet/nutrition</li>
									</ul>
								</div>
							</section>
							<section>
								<h2 class="amp-accordion__header">
									<div class="flex" style="justify-content: space-between; padding: 6px">
										<h4 class="f-s-14 f-w-500 f-s-1 gray-txt">
											Will the health coach offer me personal counselling?
										</h4>
										<span>
											<amp-img
												style="width: 15px"
												src="https://onecare.co.in/wp-content/uploads/2022/01/Arrow.svg"
												width="1"
												height="1"
												layout="responsive"
												alt="logo"
											>
											</amp-img>
										</span>
									</div>
								</h2>
								<div style="padding: 15px 0px" class="f-s-14 f-w-400 gray-txt">
									<h4>
										Yes, The health coach will give you a personalised plan which will cater to your
										needs and goals.
									</h4>
								</div>
							</section>

							<section>
								<h2 class="amp-accordion__header">
									<div class="flex" style="justify-content: space-between; padding: 6px">
										<h4 class="f-s-14 f-w-500 f-s-1 gray-txt">How do I work with my coach?</h4>
										<span>
											<amp-img
												style="width: 15px"
												src="https://onecare.co.in/wp-content/uploads/2022/01/Arrow.svg"
												width="1"
												height="1"
												layout="responsive"
												alt="logo"
											>
											</amp-img>
										</span>
									</div>
								</h2>
								<div style="padding: 15px 0px" class="f-s-14 f-w-400 gray-txt">
									<h4>
										You will connect with your health coach every week where they will have
										discussions with you about diet, exercise, sleep, etc. You can also reach out to
										them with your questions anytime of the day.
									</h4>
								</div>
							</section>
						</amp-accordion>
					</article>
					<div
						on="tap:hide-accordion.show,view-button.hide"
						id="view-button"
						style="text-align: center; cursor: pointer"
						class="button hov-btn-blue blue-bg white"
						role="button"
						tabindex="0"
					>
						View
						<span
							style="
								margin-left: 5px;
								border: solid white;
								border-width: 0 3px 3px 0;
								display: inline-block;
								padding: 3px;
								transform: rotate(-45deg);
								-webkit-transform: rotate(-45deg);
							"
						></span>
					</div>
				</div>
			</section>

			<section>
				<div>
					<h3 class="f-s-18 f-w-700">
						Popular searches:
						<span class="gray-txt f-s-14 f-w-500">
							Diabetes, diabetes care, best endocrinologist, top diabetes clinic, diabetologist near
							me, best diabetic doctors in bangalore, diabetes clinic near me, diabetes hospital
							near me, diabetes specialist, Diabetes treatment, diabetes control, type 2 diabetes,
							diabetes symptoms,
						</span>
					</h3>
				</div>
			</section>
			<footer>
				<nav>
					<div class="logo-wrapper">
						<a href="/" class="logo">
							<amp-img
								src="https://onecare.co.in/wp-content/uploads/2022/01/logo.svg"
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
			<div id="sticky-btn" class="cta" [class]="oneCareForm.otpPopup==true?'hide' :'show'">
				<div style="display: flex; flex-direction: column; align-items: flex-end">
					<a href=" https://wa.me/918951893293">
						<amp-img
							style="width: 70px"
							src="https://onecare.co.in/wp-content/uploads/2022/01/WhatsApp.svg"
							width="1"
							height="1"
							layout="responsive"
							alt="logo"
						>
						</amp-img>
					</a>
				</div>
				<div class="flex">
					<a
						href="#form-section"
						style="padding: 10px"
						class="blue-bg hov-btn-blue f-s-14 f-s-i f-w-500"
						>Book Free Doctor Consultation
					</a>
				</div>
			</div>
		</div>
	</body>
</html>
<?php ?>
