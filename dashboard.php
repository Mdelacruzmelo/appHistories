<!DOCTYPE html>
<html>

	<head>
		<meta charset="UTF-8">
		<title>History Board App</title>
		<meta name="viewport" content="width=device-width, maximum-scale=1, user-scalable=no"/>
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
		<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
		<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
		<!-- Google Font -->
		<link href="https://fonts.googleapis.com/css?family=Open+Sans" rel="stylesheet">
		<!-- Font Awesome Icons -->
		<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.2/css/all.css" integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" crossorigin="anonymous">

		<!-- Index CSS -->
		<link href="css/dashboard.css" rel="stylesheet" type="text/css"/>

	</head>

	<body>
		<div id="container" class="container bg-white py-5">
			<div id="dashboardSideBar" class="col-md-3 col-sm-4 col-12 bg-danger h-100 p-0 overflow-hidden">

				<div class="col-12 p-0 bg-primary position-relative" style="height: 20%; z-index: 0">
					<div id="border3" class="bg-white p-0 position-absolute">
						<div id="circleBorder3" class="bg-primary"></div>
					</div>
				</div>
				
				<div class="col-12 p-0 bg-primary" style="height:68%">
					<div class="col-12 p-0 bg-primary" style="height:100%;overflow-y: scroll;overflow-x: visible">

						<div class="bg-transparent col-2 float-left p-0 mb-5 cursor-pointer" style="z-index: 1">
							<svg id="circleChapter1" class="position-absolute p-0">
							<circle/>
							</svg>
						</div>
						<div data-id="1" class="bg-transparent col-10 float-right py-2 mb-2 cursor-pointer titleChapterContainer activeChapter" style="z-index: 1"> Chapter 1</div>

						<div class="bg-transparent col-2 float-left p-0 mb-5 cursor-pointer position-relative" style="z-index: 1">
							<svg id="circleChapter2" class="position-absolute p-0">
							<circle/>
							</svg>
						</div>
						<div data-id="2" class="bg-transparent col-10 float-right py-2 mb-2 cursor-pointer titleChapterContainer" style="z-index: 1"> Chapter 2</div>

						<div class="bg-transparent col-2 float-left p-0 mb-5 cursor-pointer position-relative" style="z-index: 1">
							<svg id="circleChapter3" class="position-absolute p-0">
							<circle/>
							</svg>
						</div>
						<div data-id="3" class="bg-transparent col-10 float-right py-2 mb-2 cursor-pointer titleChapterContainer" style="z-index: 1"> Chapter 3</div>

						<div class="bg-transparent col-2 float-left p-0 mb-5 cursor-pointer position-relative" style="z-index: 1">
							<svg id="circleChapter4" class="position-absolute p-0">
							<circle/>
							</svg>
						</div>
						<div data-id="4" class="bg-transparent col-10 float-right py-2 mb-2 cursor-pointer titleChapterContainer" style="z-index: 1"> Chapter 4</div>

						<div class="bg-transparent col-2 float-left p-0 mb-5 cursor-pointer position-relative" style="z-index: 1">
							<svg id="circleChapter5" class="position-absolute p-0">
							<circle/>
							</svg>
						</div>
						<div data-id="5" class="bg-transparent col-10 float-right py-2 mb-2 cursor-pointer titleChapterContainer" style="z-index: 1"> Chapter 5</div>

						<div class="bg-transparent col-2 float-left p-0 mb-5 cursor-pointer position-relative" style="z-index: 1">
							<svg id="circleChapter6" class="position-absolute p-0">
							<circle/>
							</svg>
						</div>
						<div data-id="6" class="bg-transparent col-10 float-right py-2 mb-2 cursor-pointer titleChapterContainer" style="z-index: 1"> Chapter 6</div>

						<div class="bg-transparent col-2 float-left p-0 mb-5 cursor-pointer position-relative" style="z-index: 1">
							<svg id="circleChapter7" class="position-absolute p-0">
							<circle/>
							</svg>
						</div>
						<div data-id="7" class="bg-transparent col-10 float-right py-2 mb-2 cursor-pointer titleChapterContainer" style="z-index: 1"> Chapter 7</div>

						<div class="bg-transparent col-2 float-left p-0 mb-5 cursor-pointer position-relative" style="z-index: 1">
							<svg id="circleChapter8" class="position-absolute p-0">
							<circle/>
							</svg>
						</div>
						<div data-id="8" class="bg-transparent col-10 float-right py-2 mb-2 cursor-pointer titleChapterContainer" style="z-index: 1"> Chapter 8</div>

						<div class="bg-transparent col-2 float-left p-0 mb-5 cursor-pointer position-relative" style="z-index: 1">
							<svg id="circleChapter9" class="position-absolute p-0">
							<circle/>
							</svg>
						</div>
						<div data-id="9" class="bg-transparent col-10 float-right py-2 mb-2 cursor-pointer titleChapterContainer" style="z-index: 1"> Chapter 9</div>

						<div class="bg-transparent col-2 float-left p-0 mb-5 cursor-pointer position-relative" style="z-index: 1">
							<svg id="circleChapter10" class="position-absolute p-0">
							<circle/>
							</svg>
						</div>
						<div data-id="10" class="bg-transparent col-10 float-right py-2 mb-2 cursor-pointer titleChapterContainer" style="z-index: 1"> Chapter 10</div>


						<div id="optionBackground" class="bg-white text-white col-12 py-2 position-absolute">0</div>
						<div id="border1" class="bg-white p-0 position-absolute">
							<div id="circleBorder1" class="bg-primary"></div>
						</div>
						<div id="border2" class="bg-white p-0 position-absolute">
							<div id="circleBorder2" class="bg-primary"></div>
						</div>

					</div>
				</div>
				<div class="col-12 p-0 bg-warning" style="height: 12%; z-index: 0"></div>
			</div>

		</div>
		<script src="js/dashboard.js" type="text/javascript"></script>
	</body>

</html>
