@extends('layouts.mainsite')

@section('favicon')


@stop

@section('home-active', 'active')

@section('title')
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<meta http-equiv="X-UA-Compatible" content="ie=edge">

<title>Career Counselling in Pune | Psychometric & AI Insights — Mind Rewire</title>
<meta name="description"
	content="Career counselling in Pune with psychometric assessments, AI-matched insights and a 4-stage clarity model. For students, professionals and career-switchers — delivered by psychologists with 15+ years experience.">
<meta name="keywords"
	content="career counselling Pune, psychometric test Pune, career guidance Pune, career counselling for students Pune, RIASEC Pune">

<meta name="twitter:card" content="summary_large_image" />
<meta name="twitter:site" content="@mindrewire" />
<meta name="twitter:creator" content="@mindrewire" />
<meta name="twitter:title" content="Career Counselling in Pune | Psychometric & AI Insights — Mind Rewire">
<meta name="twitter:description"
	content="Career counselling in Pune with psychometric assessments, AI-matched insights and a 4-stage clarity model. For students and professionals with 15+ years clinical oversight.">
<meta name="twitter:image" content="{{ url('assets/images/common-images/career-og.png') }}">

<meta property="og:url" content="{{ url()->Current() }}" />
<meta property="og:type" content="website" />
<meta property="og:title" content="Career Counselling in Pune | Psychometric & AI Insights — Mind Rewire" />
<meta property="og:description"
	content="Career counselling in Pune with psychometric assessments, AI-matched insights and a 4-stage clarity model. For students and professionals with 15+ years clinical oversight." />
@stop

@section('css')
<link rel="stylesheet" href="{{ version_url('assets/css/common.css') }}">
<link rel="stylesheet" href="{{ version_url('assets/css/career-counselling/career-counselling.css') }}">
@stop

@section('content')

<!-- page_wrap Start -->
<div class="page_wrap">
	<div class="top_banner">
		<div class="custom_container">
			<div class="textbox" data-aos="fade-up" data-aos-duration="1500">
				<h2 class="c_heading white">
					Confused About What’s Next?
					<span class="lightpink"> We Bring Clarity That Fits You.</span>
				</h2>
				<strong class="sub_heading white">
					With Data-Backed Assessments, Emotional Insights, And Ai-Powered Reports, Our Counselling
					Doesn’t Just Tell You What To
					Do—It Helps You Understand Why It Fits.
				</strong>
				<p>
					Whether You’re A Student Choosing Your Path, A Parent Seeking Guidance For Your Child, Or A
					Professional Exploring A
					Shift—We Create Direction That Aligns With Your Strengths, Values, And Inner Wiring.
				</p>
				<div class="btnrow">
					<a href="{{url('contact-us')}}" class="cta_btn animate_arrow animation_white_line bgpink">
						Take Your First Step
						<span class="rgt_arrow">
							<svg xmlns="http://www.w3.org/2000/svg" width="16" height="7" viewBox="0 0 16.336 7.913">
								<g id="Group_49586" data-name="Group 49586" transform="translate(0 -132)">
									<g id="Group_48855" data-name="Group 48855" transform="translate(0 132)">
										<path id="Path_127067" data-name="Path 127067"
											d="M16.149,135.5h0l-3.334-3.318a.638.638,0,0,0-.9.9l2.239,2.228H.638a.638.638,0,0,0,0,1.276H14.153l-2.239,2.228a.638.638,0,1,0,.9.9l3.334-3.318h0A.639.639,0,0,0,16.149,135.5Z"
											transform="translate(0 -132)" fill="#ffc224"></path>
									</g>
								</g>
							</svg>
						</span>
					</a>
					<a href="{{url('about-us')}}" class="cta_btn animate_arrow animation_white_line border_white">
						Explore the Process
						<span class="rgt_arrow">
							<svg xmlns="http://www.w3.org/2000/svg" width="16" height="7" viewBox="0 0 16.336 7.913">
								<g id="Group_49586" data-name="Group 49586" transform="translate(0 -132)">
									<g id="Group_48855" data-name="Group 48855" transform="translate(0 132)">
										<path id="Path_127067" data-name="Path 127067"
											d="M16.149,135.5h0l-3.334-3.318a.638.638,0,0,0-.9.9l2.239,2.228H.638a.638.638,0,0,0,0,1.276H14.153l-2.239,2.228a.638.638,0,1,0,.9.9l3.334-3.318h0A.639.639,0,0,0,16.149,135.5Z"
											transform="translate(0 -132)" fill="#ffc224"></path>
									</g>
								</g>
							</svg>
						</span>
					</a>
				</div>
				<div class="common_patch">
					<img src="{{ url('assets/images/common-images/patch_pink.svg')}}" alt="icon">
				</div>
			</div>
			<div class="imgbox" data-aos="fade-up" data-aos-duration="1500">
				<img src="{{ url('assets/images/career-counselling/img_top_banner.png')}}" alt="image" />
			</div>
		</div>
	</div>

	<div class="common_accordion section1" id="section1">
		<div class="common_fullrow">
			<div class="custom_container align-items-start">
				<div class="common_textbox textbox" data-aos="fade-up" data-aos-duration="1500">
					<h2 class="c_heading">
						Not Just for Students. <br>
						<span class="blue"> Career Clarity Has No Age.</span>
					</h2>
					<div class="animate_border"></div>
					<p>
						<strong>Ideal For :</strong>
					</p>
					<div class="accordion_wrap">
						<div class="accordion_new">
							<div class="icon">
								<img src="{{ url('assets/images/career-counselling/icon_students.png')}}" alt="icon" />
							</div>
							<div class="textbox">
								<h3>Students (Ages 13–24):</h3>
								<div class="slidetext">
									<p>
										Unsure about subject selection, college direction, or early career plans.
									</p>
								</div>
							</div>
						</div>
						<div class="accordion_new">
							<div class="icon">
								<img src="{{ url('assets/images/career-counselling/icon_parents.png')}}" alt="icon" />
							</div>
							<div class="textbox">
								<h3>Parents</h3>
								<div class="slidetext">
									<p>
										Looking to support their child’s future without pressure or confusion.
									</p>
								</div>
							</div>
						</div>
						<div class="accordion_new">
							<div class="icon">
								<img src="{{ url('assets/images/career-counselling/icon_graduates.png')}}" alt="icon" />
							</div>
							<div class="textbox">
								<h3>Graduates & Professionals</h3>
								<div class="slidetext">
									<p>
										Experiencing job dissatisfaction, misalignment, or wanting a meaningful
										shift.
									</p>
								</div>
							</div>
						</div>
						<div class="accordion_new">
							<div class="icon">
								<img src="{{ url('assets/images/career-counselling/icon_career.png')}}" alt="icon" />
							</div>
							<div class="textbox">
								<h3>Career Switchers or Re-Entrants</h3>
								<div class="slidetext">
									<p>
										Those returning after a gap or considering a transition into something
										better aligned.
									</p>
								</div>
							</div>
						</div>
					</div>
				</div>
				<div class="imgbox" data-aos="fade-up" data-aos-duration="1500">
					<div class="withpatch">
						<img src="{{ url('assets/images/career-counselling/img_career_clarity.png')}}" alt="image" />
						<div class="common_patch rgtpatch" data-aos="fade-up" data-aos-duration="1500">
							<img src="{{ url('assets/images/common-images/common_patch.svg')}}" alt="icon">
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>

	<div class="section2" id="section2">
		<div class="custom_container">
			<div class="top_textbox" data-aos="fade-up" data-aos-duration="1500">
				<h2 class="c_heading center">
					Pain Points
					<span class="blue"> We Address :</span>
				</h2>
				<div class="animate_border center"></div>
			</div>
			<div class="quote_wrap">
				<div class="whitebox top" data-aos="zoom-in-down" data-aos-duration="1500">I Don’t Know What I’m
					Really
					Good At.</div>
				<div class="whitebox left" data-aos="zoom-in-right" data-aos-duration="1500">Too Many Options. I
					Don’t
					Know
					What Fits Me.</div>
				<div class="whitebox right" data-aos="zoom-in-left" data-aos-duration="1500">I Need Direction But
					Not
					Generic Advice.</div>
				<div class="whitebox bottom" data-aos="zoom-in-up" data-aos-duration="1500">My Job Pays Me But
					Drains
					Me.</div>
				<div class="common_patch patch1" data-aos="fade-up" data-aos-duration="1500">
					<img src="{{ url('assets/images/common-images/common_patch.svg')}}" alt="icon">
				</div>
				<div class="common_patch patch2" data-aos="fade-up" data-aos-duration="1500">
					<img src="{{ url('assets/images/common-images/common_patch.svg')}}" alt="icon">
				</div>
			</div>
		</div>
	</div>

	<div class="section3" id="section3">
		<div class="custom_container">
			<div class="top_textbox" data-aos="fade-up" data-aos-duration="1500">
				<h2 class="c_heading">
					We Don’t Give Answers. <br>
					<span class="blue"> We Help You Build Your Own.</span>
				</h2>
				<div class="animate_border"></div>
			</div>
			<div class="boxwrap">
				<div class="commonbox one" data-aos="fade-up" data-aos-duration="1500">
					<a>
						<div class="imgbox">
							<img src="{{ url('assets/images/career-counselling/img_help1.png')}}" alt="image" />
						</div>
						<div class="textbox">
							<h3>Discovery & Intake</h3>
							<ul>
								<li>consultation to understand background, interests, emotional readiness</li>
								<li>Set expectations and counselling goals</li>
							</ul>
						</div>
					</a>
				</div>
				<div class="commonbox two" data-aos="fade-up" data-aos-duration="1500">
					<a>
						<div class="imgbox">
							<img src="{{ url('assets/images/career-counselling/img_help2.png')}}" alt="image" />
						</div>
						<div class="textbox">
							<h3>Psychometric Testing</h3>
							<ul>
								<li>Aptitude, interest, personality & behavioral profiling</li>
								<li>Age-appropriate, globally validated tests</li>
							</ul>
						</div>
					</a>
				</div>
				<div class="commonbox three" data-aos="fade-up" data-aos-duration="1500">
					<a>
						<div class="imgbox">
							<img src="{{ url('assets/images/career-counselling/img_help3.png')}}" alt="image" />
						</div>
						<div class="textbox">
							<h3>Insight & Mapping</h3>
							<ul>
								<li>Deep analysis of test results</li>
								<li>Aligning values, strengths, and emotion-based decision styles</li>
								<li>Matching to career domains + real-world examples</li>
							</ul>
						</div>
					</a>
				</div>
				<div class="commonbox four" data-aos="fade-up" data-aos-duration="1500">
					<a>
						<div class="imgbox">
							<img src="{{ url('assets/images/career-counselling/img_help4.png')}}" alt="image" />
						</div>
						<div class="textbox">
							<h3>Planning & Roadmap</h3>
							<ul>
								<li>Clear direction: subjects, courses, internships, skills, exams</li>
								<li>Optional parent session for alignment</li>
								<li>PDF Career Roadmap delivered + follow-up options</li>
							</ul>
						</div>
					</a>
				</div>
				<div class="common_patch patch1" data-aos="fade-up" data-aos-duration="1500">
					<img src="{{ url('assets/images/common-images/common_patch.svg')}}" alt="icon">
				</div>
			</div>
			<div class="btnrow center" data-aos="fade-up" data-aos-duration="1500">
				<a href="{{url('about-us')}}" class="cta_btn animation_white_line animate_arrow">
					See What’s Inside the Process
					<span class="rgt_arrow">
						<svg xmlns="http://www.w3.org/2000/svg" width="16" height="7" viewBox="0 0 16.336 7.913">
							<g id="Group_49586" data-name="Group 49586" transform="translate(0 -132)">
								<g id="Group_48855" data-name="Group 48855" transform="translate(0 132)">
									<path id="Path_127067" data-name="Path 127067"
										d="M16.149,135.5h0l-3.334-3.318a.638.638,0,0,0-.9.9l2.239,2.228H.638a.638.638,0,0,0,0,1.276H14.153l-2.239,2.228a.638.638,0,1,0,.9.9l3.334-3.318h0A.639.639,0,0,0,16.149,135.5Z"
										transform="translate(0 -132)" fill="#ffc224"></path>
								</g>
							</g>
						</svg>
					</span>
				</a>
			</div>
		</div>
	</div>

	<div class="common_accordion section4" id="section4">
		<div class="common_fullrow">
			<div class="custom_container align-items-start">
				<div class="common_textbox textbox" data-aos="fade-up" data-aos-duration="1500">
					<h2 class="c_heading">
						Science + Soul = <br>
						<span class="blue">Smart Career Clarity</span>
					</h2>
					<div class="animate_border"></div>
					<p>
						<strong>Assessment Toolkit :</strong>
					</p>
					<div class="accordion_wrap">
						<div class="accordion_new">
							<div class="icon">
								<svg xmlns="http://www.w3.org/2000/svg" width="18.859" height="16.665"
									viewBox="0 0 18.859 16.665">
									<g id="Group_50415" data-name="Group 50415" transform="translate(-0.001 -0.001)">
										<path id="Path_132384" data-name="Path 132384"
											d="M17.872,9.98A.365.365,0,0,0,17.9,9.9a1.665,1.665,0,0,0-.566-1.744A1.777,1.777,0,0,0,16.125,6.88a2.19,2.19,0,0,0-.7-1.5,3.25,3.25,0,0,0-2.124-.7h-.015a2.033,2.033,0,0,0-2.139-.713,8.413,8.413,0,0,0-1.087-.293.37.37,0,1,0-.143.725A7.742,7.742,0,0,1,11,4.7a.368.368,0,0,0,.208.012c.012,0,1.233-.28,1.5.473a.371.371,0,0,0,.384.244,2.747,2.747,0,0,1,1.839.5,1.4,1.4,0,0,1,.436.831,1.894,1.894,0,0,0-1.682,1,.37.37,0,1,0,.66.334,1.327,1.327,0,0,1,1.342-.589c.137.045.947.334.915.829a.37.37,0,0,0,.2.353.868.868,0,0,1,.246.229.931.931,0,0,1,.146.744l-.025.033a1.664,1.664,0,0,0-1.555,1.492.37.37,0,0,0,.327.408l.041,0a.37.37,0,0,0,.367-.329.939.939,0,0,1,.906-.838c1.62,1.188.477,3.96.4,4.138a1.876,1.876,0,0,1-1.536,1.2A5.435,5.435,0,0,0,13.9,14.741a.37.37,0,1,0-.172.719,4.808,4.808,0,0,1,1.884.849,1.381,1.381,0,0,1-.041.3c-.263,1.045-1.677,1.593-3.153,1.221a3.806,3.806,0,0,1-.7-.252.37.37,0,0,0-.527.3,5.013,5.013,0,0,0,.061,1.376l-.971.161c-.041-.147-.083-.319-.128-.506A7.407,7.407,0,0,0,8.7,15.651a14.3,14.3,0,0,1,2.2-.367.37.37,0,0,0-.06-.737,15.708,15.708,0,0,0-2.93.546,8.141,8.141,0,0,1-1.671.07c-1.6-.241-2.05-1.209-1.946-1.967a.37.37,0,0,0-.454-.41l-.268.066a3.432,3.432,0,0,1-2.162-.817,1.2,1.2,0,0,1-.267-.983.37.37,0,0,0-.195-.372.466.466,0,0,1-.2-.263.834.834,0,0,1,.208-.6.37.37,0,0,0,.048-.345,2.145,2.145,0,0,1,.036-1.447,1.6,1.6,0,0,1,.987-.8.366.366,0,0,0,.249-.318,1.136,1.136,0,0,1,.389-.728,1.248,1.248,0,0,1,1.012-.134.37.37,0,0,0,.438-.3c0-.008.167-.778,1.61-.8a1.817,1.817,0,0,1,.343,1.787.37.37,0,1,0,.659.336,1.906,1.906,0,0,0,.207-.778,1.222,1.222,0,0,1,.758-.1.623.623,0,0,1,.379.358.37.37,0,0,0,.665-.324A1.357,1.357,0,0,0,7.9,5.473a1.786,1.786,0,0,0-1.065.056A3.318,3.318,0,0,0,6.458,4.7a4.831,4.831,0,0,1,.7-.24.37.37,0,1,0-.188-.715A5.065,5.065,0,0,0,5.806,4.2,2.32,2.32,0,0,0,3.511,5.276a1.8,1.8,0,0,0-1.3.319,1.8,1.8,0,0,0-.633,1.012,2.233,2.233,0,0,0-1.209,1.1A2.774,2.774,0,0,0,.255,9.537,1.374,1.374,0,0,0,.03,10.586a1.152,1.152,0,0,0,.361.6,1.887,1.887,0,0,0,.458,1.335,4.172,4.172,0,0,0,2.7,1.074c.081,1.031.866,2.049,2.6,2.3l.017,0c.015,0,.207.02.53.02a9.831,9.831,0,0,0,1.176-.074,6.193,6.193,0,0,1,1.569,3.238,6.663,6.663,0,0,0,.254.889.37.37,0,0,0,.342.23.364.364,0,0,0,.061-.005l1.673-.278a.37.37,0,0,0,.294-.468,3.88,3.88,0,0,1-.148-1c.108.036.219.068.33.1a4.093,4.093,0,0,0,2.543-.137,2.42,2.42,0,0,0,1.507-1.621,2.126,2.126,0,0,0,.053-.3A2.636,2.636,0,0,0,18.317,14.9l.01-.02a7.094,7.094,0,0,0,.5-1.935A3.265,3.265,0,0,0,17.872,9.98Zm0,0"
											transform="translate(0 -3.536)" fill="#6abf9e" />
										<path id="Path_132385" data-name="Path 132385"
											d="M229.711,134.016a2.861,2.861,0,0,0,.453,1.031,2.5,2.5,0,0,0,.313.363c-.066.38-.647.588-.661.592a.37.37,0,0,0,.238.7,1.858,1.858,0,0,0,1.058-.864,2.522,2.522,0,0,0,1.05.214h.08a.37.37,0,0,0-.009-.74h-.009a1.761,1.761,0,0,1-1.785-1.431.37.37,0,0,0-.727.134Zm0,0"
											transform="translate(-221.109 -128.658)" fill="#6abf9e" />
										<path id="Path_132386" data-name="Path 132386"
											d="M320.515,143.687a2.338,2.338,0,0,0,.063-2.519,2.764,2.764,0,0,0-.861-.867.37.37,0,0,0-.376.637,2.031,2.031,0,0,1,.619.638,1.643,1.643,0,0,1-.087,1.744.37.37,0,1,0,.642.367Zm0,0"
											transform="translate(-307.405 -135.083)" fill="#6abf9e" />
										<path id="Path_132387" data-name="Path 132387"
											d="M389.514,229.187a.37.37,0,1,0-.43-.6,1.226,1.226,0,0,1-.975.288,1.2,1.2,0,0,1-.683-.554.37.37,0,0,0-.655.344,2.007,2.007,0,0,0,.975.871,1.719,1.719,0,0,0,.481,1.81.37.37,0,1,0,.474-.567,1.066,1.066,0,0,1-.213-1.155A2.25,2.25,0,0,0,389.514,229.187Zm0,0"
											transform="translate(-372.484 -219.718)" fill="#6abf9e" />
										<path id="Path_132388" data-name="Path 132388"
											d="M91.094,184.111a.37.37,0,0,0-.734.093,1.185,1.185,0,0,1-.568,1.045,2.3,2.3,0,0,0-1.287-.176.37.37,0,0,0,.127.729,1.392,1.392,0,0,1,1,.223,1.127,1.127,0,0,1,.306.919.37.37,0,0,0,.361.378h.009a.37.37,0,0,0,.369-.361,2,2,0,0,0-.315-1.222A1.817,1.817,0,0,0,91.094,184.111Zm0,0"
											transform="translate(-84.951 -177.017)" fill="#6abf9e" />
										<path id="Path_132389" data-name="Path 132389"
											d="M48.531,106.593a.827.827,0,0,1-.178.26,1.191,1.191,0,0,1-.462.283.37.37,0,0,0,.2.713,1.928,1.928,0,0,0,.846-.535,1.41,1.41,0,0,0,.855.279,1.7,1.7,0,0,0,.271-.022,2.152,2.152,0,0,0,.767-.287.37.37,0,1,0-.4-.621,1.461,1.461,0,0,1-.482.178.7.7,0,0,1-.65-.19,2.04,2.04,0,0,0-.032-1.061.37.37,0,1,0-.714.194,1.211,1.211,0,0,1-.008.792Zm0,0"
											transform="translate(-45.865 -101.438)" fill="#6abf9e" />
										<path id="Path_132390" data-name="Path 132390"
											d="M264.3,48.585a1.928,1.928,0,0,0-1.373-.171.37.37,0,0,0,.2.713,1.172,1.172,0,0,1,.8.094,1,1,0,0,1,.429.672.37.37,0,0,0,.36.285.375.375,0,0,0,.085-.01.37.37,0,0,0,.275-.445A1.708,1.708,0,0,0,264.3,48.585Zm0,0"
											transform="translate(-252.978 -46.575)" fill="#6abf9e" />
										<path id="Path_132391" data-name="Path 132391"
											d="M209.136,239.007a1.338,1.338,0,0,1-1.131.721,1.9,1.9,0,0,1-.722-.109.37.37,0,0,0-.281.684,2.565,2.565,0,0,0,.915.167l.093,0a2.059,2.059,0,0,0,1.765-1.089.37.37,0,0,0-.639-.372Zm0,0"
											transform="translate(-199.156 -230.026)" fill="#6abf9e" />
										<path id="Path_132392" data-name="Path 132392"
											d="M325.905,298.405a.37.37,0,1,0-.055.475A.372.372,0,0,0,325.905,298.405Zm0,0"
											transform="translate(-313.248 -287.255)" fill="#6abf9e" />
										<path id="Path_132393" data-name="Path 132393"
											d="M221.471.511a.369.369,0,0,0,.691-.023.37.37,0,1,0-.691.023Zm0,0"
											transform="translate(-213.286 0)" fill="#6abf9e" />
									</g>
								</svg>
							</div>
							<div class="textbox">
								<h3>Aptitude Test</h3>
								<div class="slidetext">
									<p>
										Verbal, Logical, Numerical, Spatial, Mechanical reasoning
									</p>
								</div>
							</div>
						</div>
						<div class="accordion_new">
							<div class="icon">
								<svg xmlns="http://www.w3.org/2000/svg" width="14.668" height="14.795"
									viewBox="0 0 14.668 14.795">
									<g id="Group_50136" data-name="Group 50136" transform="translate(-2.74 -2.21)">
										<path id="Path_132222" data-name="Path 132222"
											d="M10.672,4.648a.479.479,0,0,0,.479-.479v-1H22.119V12.38a.479.479,0,0,0,.958,0V2.689A.479.479,0,0,0,22.6,2.21H10.672a.479.479,0,0,0-.479.479v1.48a.479.479,0,0,0,.479.479Z"
											transform="translate(-6.561)" fill="#213f6c" />
										<path id="Path_132223" data-name="Path 132223"
											d="M22.6,49.169a.479.479,0,0,0-.479.479v.563H11.151V41.5a.479.479,0,1,0-.958,0V50.69a.479.479,0,0,0,.479.479H22.6a.479.479,0,0,0,.479-.479V49.648a.479.479,0,0,0-.479-.479Z"
											transform="translate(-6.561 -34.164)" fill="#213f6c" />
										<path id="Path_132224" data-name="Path 132224"
											d="M9.815,28.152a.479.479,0,0,0-.479-.479H3.219a.479.479,0,1,0,0,.958H9.336a.479.479,0,0,0,.479-.479Z"
											transform="translate(0 -22.415)" fill="#213f6c" />
										<path id="Path_132225" data-name="Path 132225"
											d="M28.987,51.152a.479.479,0,0,0-.479-.479H24.219a.479.479,0,0,0,0,.958h4.289a.479.479,0,0,0,.479-.479Z"
											transform="translate(-18.486 -42.661)" fill="#213f6c" />
										<path id="Path_132226" data-name="Path 132226"
											d="M31.219,74.631h4.169a.479.479,0,1,0,0-.958H31.219a.479.479,0,1,0,0,.958Z"
											transform="translate(-24.648 -62.908)" fill="#213f6c" />
										<path id="Path_132227" data-name="Path 132227"
											d="M52.141,96.673H43.219a.479.479,0,1,0,0,.958h8.921a.479.479,0,1,0,0-.958Z"
											transform="translate(-35.211 -83.154)" fill="#213f6c" />
										<path id="Path_132228" data-name="Path 132228"
											d="M69.051,25.585h.029a.479.479,0,0,0,.318-.121l1.457-1.3a.479.479,0,1,0-.637-.715l-1.1.977-.461-.523a.479.479,0,1,0-.718.634l.78.884A.479.479,0,0,0,69.051,25.585Z"
											transform="translate(-57.289 -18.593)" fill="#213f6c" />
										<path id="Path_132229" data-name="Path 132229"
											d="M75.721,48.424a.479.479,0,0,0,.33.161h.029a.479.479,0,0,0,.318-.121l1.457-1.3a.479.479,0,1,0-.637-.715l-1.1.977-.461-.523a.479.479,0,0,0-.718.634Z"
											transform="translate(-63.451 -38.84)" fill="#213f6c" />
										<path id="Path_132230" data-name="Path 132230"
											d="M80.721,72.424a.479.479,0,0,0,.33.161h.029a.479.479,0,0,0,.318-.121l1.457-1.3a.479.479,0,0,0-.637-.715l-1.1.977-.461-.523a.479.479,0,1,0-.718.634Z"
											transform="translate(-67.853 -59.967)" fill="#213f6c" />
									</g>
								</svg>
							</div>
							<div class="textbox">
								<h3>Interest Profiler (RIASEC-based)</h3>
								<div class="slidetext">
									<p>
										To understand career clusters that resonate
									</p>
								</div>
							</div>
						</div>
						<div class="accordion_new">
							<div class="icon">
								<svg xmlns="http://www.w3.org/2000/svg" width="16.811" height="16.817"
									viewBox="0 0 16.811 16.817">
									<g id="layer1" transform="translate(-0.526 -289.061)">
										<path id="path1002"
											d="M1.115,289.061a.6.6,0,0,0-.59.607v15.607a.6.6,0,0,0,.6.6H16.736a.6.6,0,1,0,0-1.2H1.728V289.668a.6.6,0,0,0-.612-.607Zm15.607,3.9a.6.6,0,0,0-.412.182l-6.16,6.16L7.572,296.47a.6.6,0,0,0-.847-.04l-3.6,3.3a.6.6,0,1,0,.811.886l3.16-2.894,2.592,2.854a.6.6,0,0,0,.868.023l6.6-6.607a.6.6,0,0,0-.435-1.028Z"
											transform="translate(0)" fill="#1c3495" />
									</g>
								</svg>

							</div>
							<div class="textbox">
								<h3>Personality Inventory (Big Five-based)</h3>
								<div class="slidetext">
									<p>
										Working styles, energy patterns, team behavior
									</p>
								</div>
							</div>
						</div>
						<div class="accordion_new">
							<div class="icon">
								<svg id="Group_50416" data-name="Group 50416" xmlns="http://www.w3.org/2000/svg"
									width="20.875" height="20.875" viewBox="0 0 20.875 20.875">
									<path id="Path_132394" data-name="Path 132394"
										d="M153.681,158.03a4.349,4.349,0,1,1,4.349-4.349A4.354,4.354,0,0,1,153.681,158.03Zm0-7.393a3.044,3.044,0,1,0,3.044,3.044A3.048,3.048,0,0,0,153.681,150.637Zm0,0"
										transform="translate(-143.244 -143.244)" fill="#1c3495"></path>
									<path id="Path_132395" data-name="Path 132395"
										d="M51.366,60.064a8.7,8.7,0,1,1,8.7-8.7A8.708,8.708,0,0,1,51.366,60.064Zm0-16.091a7.393,7.393,0,1,0,7.393,7.393A7.4,7.4,0,0,0,51.366,43.973Zm0,0"
										transform="translate(-40.928 -40.928)" fill="#1c3495"></path>
									<path id="Path_132396" data-name="Path 132396"
										d="M240.652,4.349A.653.653,0,0,1,240,3.7V.652a.652.652,0,0,1,1.3,0V3.7A.653.653,0,0,1,240.652,4.349Zm0,0"
										transform="translate(-230.215)" fill="#1c3495"></path>
									<path id="Path_132397" data-name="Path 132397"
										d="M240.652,409.681a.653.653,0,0,1-.652-.652v-3.044a.652.652,0,0,1,1.3,0v3.044A.653.653,0,0,1,240.652,409.681Zm0,0"
										transform="translate(-230.215 -388.806)" fill="#1c3495"></path>
									<path id="Path_132398" data-name="Path 132398"
										d="M3.7,241.3H.652a.652.652,0,0,1,0-1.3H3.7a.652.652,0,0,1,0,1.3Zm0,0"
										transform="translate(0 -230.215)" fill="#1c3495"></path>
									<path id="Path_132399" data-name="Path 132399"
										d="M409.029,241.3h-3.044a.652.652,0,0,1,0-1.3h3.044a.652.652,0,0,1,0,1.3Zm0,0"
										transform="translate(-388.806 -230.215)" fill="#1c3495"></path>
								</svg>
							</div>
							<div class="textbox">
								<h3>Decision & Motivation Matrix</h3>
								<div class="slidetext">
									<p>
										Emotional risk styles and confidence mapping
									</p>
								</div>
							</div>
						</div>
						<div class="accordion_new">
							<div class="icon">
								<svg xmlns="http://www.w3.org/2000/svg" width="17.829" height="17.829"
									viewBox="0 0 17.829 17.829">
									<g id="Group_50414" data-name="Group 50414" transform="translate(-2 -2)">
										<path id="Path_132290" data-name="Path 132290"
											d="M4.377,2A2.377,2.377,0,0,0,2,4.377V7.943A2.377,2.377,0,0,0,4.377,10.32H7.943A2.377,2.377,0,0,0,10.32,7.943V4.377A2.377,2.377,0,0,0,7.943,2ZM3.189,4.377A1.189,1.189,0,0,1,4.377,3.189H7.943A1.189,1.189,0,0,1,9.132,4.377V7.943A1.189,1.189,0,0,1,7.943,9.132H4.377A1.189,1.189,0,0,1,3.189,7.943Z"
											fill="#213f6c" fill-rule="evenodd" />
										<path id="Path_132291" data-name="Path 132291"
											d="M36.377,34A2.377,2.377,0,0,0,34,36.377v3.566a2.377,2.377,0,0,0,2.377,2.377h3.566a2.377,2.377,0,0,0,2.377-2.377V36.377A2.377,2.377,0,0,0,39.943,34Zm-1.189,2.377a1.189,1.189,0,0,1,1.189-1.189h3.566a1.189,1.189,0,0,1,1.189,1.189v3.566a1.189,1.189,0,0,1-1.189,1.189H36.377a1.189,1.189,0,0,1-1.189-1.189Z"
											transform="translate(-22.491 -22.491)" fill="#213f6c" fill-rule="evenodd" />
										<path id="Path_132292" data-name="Path 132292"
											d="M36,14.594A.594.594,0,0,1,36.594,14h.594a2.378,2.378,0,0,1,2.366,2.143l.186-.186a.594.594,0,0,1,.84.84l-1.189,1.189a.594.594,0,0,1-.84,0L37.363,16.8a.594.594,0,0,1,.84-.84l.141.141a1.189,1.189,0,0,0-1.156-.91h-.594A.594.594,0,0,1,36,14.594Z"
											transform="translate(-23.897 -8.434)" fill="#213f6c" />
										<path id="Path_132293" data-name="Path 132293"
											d="M16.16,40.16a.594.594,0,0,0,0-1.189h-.594a1.189,1.189,0,0,1-1.156-.91l.141.141a.594.594,0,1,0,.84-.84L14.2,36.174a.594.594,0,0,0-.84,0l-1.189,1.189a.594.594,0,1,0,.84.84l.186-.186a2.378,2.378,0,0,0,2.366,2.143Z"
											transform="translate(-7.028 -23.897)" fill="#213f6c" />
									</g>
								</svg>
							</div>
							<div class="textbox">
								<h3>AI-Based Career Fit Report</h3>
								<div class="slidetext">
									<p>
										Matches career roles with behavioral and aptitude data
									</p>
								</div>
							</div>
						</div>
					</div>
					<p>Each tool is interpreted by licensed experts—no automated, one-line suggestions.</p>
				</div>
				<div class="imgbox" data-aos="fade-up" data-aos-duration="1500">
					<div class="withpatch">
						<img src="{{ url('assets/images/career-counselling/img_smart_career.png')}}" alt="image" />
						<div class="common_patch rgtpatch" data-aos="fade-up" data-aos-duration="1500">
							<img src="{{ url('assets/images/common-images/common_patch.svg')}}" alt="icon">
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>

	<div class="section5" id="section5">
		<div class="common_fullrow">
			<div class="custom_container reverse">
				<div class="common_textbox textbox" data-aos="fade-up" data-aos-duration="1500">
					<h2 class="c_heading">Get a Glimpse of <br>
						<span class="blue"> What You’ll Receive</span>
					</h2>
					<div class="animate_border"></div>
					<p><strong>Report Features :</strong></p>
					<ul class="with_bullet pt-0">
						<li>12–18 Page Visual Career Report</li>
						<li>Top 3 Recommended Career Domains</li>
						<li>Skill & course roadmap</li>
						<li>Summary of behavioral patterns and work style</li>
						<li>Emotional alignment commentary</li>
						<li>Role-fit grid with real-world job examples</li>
					</ul>
					<p>
						<strong>Report Format:</strong><br>
						PDF | Delivered with verbal walkthrough
					</p>
					<p>
						<strong>Note:</strong> Reports Are Confidential And Tailored. They Don’t Label You - They
						Reveal What Fits.
					</p>
					<div class="btnrow" data-aos="fade-up" data-aos-duration="1500">
						<a href="{{url('book-session')}}" class="cta_btn animation_white_line animate_arrow">
							Book a Career Assessment
							<span class="rgt_arrow">
								<svg xmlns="http://www.w3.org/2000/svg" width="16" height="7"
									viewBox="0 0 16.336 7.913">
									<g id="Group_49586" data-name="Group 49586" transform="translate(0 -132)">
										<g id="Group_48855" data-name="Group 48855" transform="translate(0 132)">
											<path id="Path_127067" data-name="Path 127067"
												d="M16.149,135.5h0l-3.334-3.318a.638.638,0,0,0-.9.9l2.239,2.228H.638a.638.638,0,0,0,0,1.276H14.153l-2.239,2.228a.638.638,0,1,0,.9.9l3.334-3.318h0A.639.639,0,0,0,16.149,135.5Z"
												transform="translate(0 -132)" fill="#ffc224" />
										</g>
									</g>
								</svg>
							</span>
						</a>
					</div>
				</div>
				<div class="imgbox" data-aos="fade-up" data-aos-duration="1500">
					<img src="{{ url('assets/images/career-counselling/img_receive.png')}}" alt="image" />
				</div>
			</div>
		</div>
	</div>

	<div class="last_bluebox" id="last_bluebox">
		<div class="custom_container">
			<div class="common_textbox textbox full" data-aos="fade-up" data-aos-duration="1500">
				<h2 class="c_heading white center">The Most Important Career Choice <br>
					<span class="lightpink">Is Understanding Yourself</span>
				</h2>
				<p>
					Let’s Help You Or Your Child Choose A Path That Feels Right—Not Just Looks Right.<br>
					The Earlier The Clarity, The Stronger The Confidence.
				</p>
				<div class="btnrow center">
					<a href="{{url('contact-us')}}" class="cta_btn animate_arrow animation_white_line bgpink">
						Take Your First Step
						<span class="rgt_arrow">
							<svg xmlns="http://www.w3.org/2000/svg" width="16" height="7" viewBox="0 0 16.336 7.913">
								<g id="Group_49586" data-name="Group 49586" transform="translate(0 -132)">
									<g id="Group_48855" data-name="Group 48855" transform="translate(0 132)">
										<path id="Path_127067" data-name="Path 127067"
											d="M16.149,135.5h0l-3.334-3.318a.638.638,0,0,0-.9.9l2.239,2.228H.638a.638.638,0,0,0,0,1.276H14.153l-2.239,2.228a.638.638,0,1,0,.9.9l3.334-3.318h0A.639.639,0,0,0,16.149,135.5Z"
											transform="translate(0 -132)" fill="#ffc224"></path>
									</g>
								</g>
							</svg>
						</span>
					</a>
					<a href="{{url('help')}}" class="cta_btn animate_arrow animation_white_line border_white">
						Talk to Our Counsellor
						<span class="rgt_arrow">
							<svg xmlns="http://www.w3.org/2000/svg" width="16" height="7" viewBox="0 0 16.336 7.913">
								<g id="Group_49586" data-name="Group 49586" transform="translate(0 -132)">
									<g id="Group_48855" data-name="Group 48855" transform="translate(0 132)">
										<path id="Path_127067" data-name="Path 127067"
											d="M16.149,135.5h0l-3.334-3.318a.638.638,0,0,0-.9.9l2.239,2.228H.638a.638.638,0,0,0,0,1.276H14.153l-2.239,2.228a.638.638,0,1,0,.9.9l3.334-3.318h0A.639.639,0,0,0,16.149,135.5Z"
											transform="translate(0 -132)" fill="#ffc224"></path>
									</g>
								</g>
							</svg>
						</span>
					</a>
				</div>
			</div>
		</div>
		<div class="common_patch" data-aos="fade-up" data-aos-duration="1500">
			<img src="{{ url('assets/images/common-images/patch_pink.svg')}}" alt="image" />
		</div>
	</div>
</div>
<!-- page_wrap End -->

@stop

@section('footer_script')
<script>
	$(document).ready(function () {
		// accordion js start
		$('.accordion_wrap').find(".accordion_new:first").addClass('active').find(".slidetext").show();
		$(".accordion_new").click(function () {
			$(this).addClass("active");
			$(this).siblings(".accordion_new").removeClass("active");

			$(this).find(".slidetext").slideDown();
			$(this).siblings(".accordion_new").find(".slidetext").slideUp();
		});
		// accordion js end
	});

</script>
@stop