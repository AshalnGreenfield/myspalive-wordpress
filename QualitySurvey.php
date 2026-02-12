<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="UTF-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<link rel="shortcut icon" href="https://myspalive.com/Zach.png">
		<title>Evaluation</title>

		<!-- <link rel="stylesheet" href="/assets/plugins/global/rating/css/star-rating.min.css">
		<link rel="stylesheet" href="/assets/plugins/global/rating/krajee-svg/theme.min.css">
		<link rel="stylesheet" href="/assets/plugins/global/plugins.bundle.css"></link> -->
		<style>
			body {
				font-family: sans-serif;
				height: 100vh;
				overflow-y: scroll;
				background-color: #f5f8fa;
				padding: 15px;
				box-sizing: border-box;
				color: #313138;
				min-width: 500px;
			}
		
			.logo {
				width: 300px;
				display: block;
				margin: 40px auto 0;
			}
		
			.card-evaluation {
				background-color: #FFF;
				max-width: 739px;
				min-height: 300px;
				border-radius: 15px;
				margin: 40px auto;
				box-shadow: 2px 2px 5px 0px #cbbfc4;
				box-sizing: border-box;
				padding: 25px 40px;
			}

			.card-evaluation .ratingContainer {
				display: flex;
			}
			.card-evaluation .ratingContainer .left, 
			.card-evaluation .ratingContainer .right {
				width: 50%;
			} 

			.card-evaluation h1 {
				font-size: 20px;
				font-weight: normal;
			}

			.card-evaluation h1 span {
				margin-right: 30px;
			}

			.card-evaluation .rating-stars {
				outline: none !important;
			}

			.card-evaluation .rating-container {
				text-align: center;
			}

			.card-evaluation textarea {
				width: 100%;
				background-color: #fbf0fc;
				border-color: #efecec;
				font-family: sans-serif;
				line-height: 1.5;
				padding: 11px;
				font-size: 15px;
				outline-color: #9888bb !important;
				margin-bottom: 30px;
				margin-top: 7px;
			}

			.card-evaluation .btn-send,
			.btn.btn-primary {
				background-color: #9888bb;
				border: none;
				padding: 10px 25px;
				color: white;
				border-radius: 5px;
				font-size: 16px;
				margin: 15px auto 0;
    			display: block;
				cursor: pointer;
			}
			.title-treatment{
				color: #655489;
				text-align: center;
				
			}

		</style>

		<script>
			const APP_VERSION = '{{ env("APP_VERSION") }}';
		</script>
	</head>
	<body>
		<img class="logo" src="https://myspalive.com/Zach.png" alt="Zach Cannon MD" />
		<div class="card-evaluation">
			<b class="title-treatment">The following survey will be used to improve our services. This survey is anonymous unless you type your name below. Thank you for taking the time to give us honest feedback.</b>
			<br>
			<br>
			<br>
			<br>
			<div>
				<div>
					<a>What was the name of your injector today? </a>
					<textarea style="line-height: 0.5 !important;" id="injector_name" rows="5" required></textarea>
				</div>
				<div>
					<a>Write your name here if you would like for us to share your feedback with the injector today with your name attached (optional).</a>
					<textarea style="line-height: 0.5 !important;" class="name-area" id="pacient_name" rows="5"></textarea>
				</div>
			<div>
			<div>
				<p>1. Overall, How was the experience?</p>
				<form>
					<input type="radio" id="experience" value="Excellent">
					<label for="">a)	Excellent</label><br>
					<input type="radio" id="experience" value="Great">
					<label for="">b)	Great</label><br>
					<input type="radio" id="experience" value="Neutral feelings about it">
					<label for="">c)	Neutral feelings about it</label><br>
					<input type="radio" id="experience" value="Satisfactory">
					<label for="">d)	Satisfactory</label><br>
					<input type="radio" id="experience" value="Poor">
					<label for="">e)	Poor</label>
				</form> 
			</div><br>
			<div>
				<p>2. Did your injector behave professionally/friendly today?</p>
				<form>
					<input type="radio" id="injector_behave" name="injector_behave" value="Yes">
					<label for="">a)	Yes</label><br>
					<input type="radio" name="injector_behave" value="No">
					<label for="">b)	No</label><br>
				</form> 
			</div><br>
			<div>
				<p>3. Was the injector knowledgeable in what they were doing?</p>
				<form>
					<input type="radio" id="injector_confident" name="injector_confident" value="Yes">
					<label for="">a)	Yes</label><br>
					<input type="radio" id="injector_confident" name="injector_confident" value="No">
					<label for="">b)	No</label><br>
				</form> 
			</div><br>
			<div>
				<p>4. Did the injector explain what you should and shouldn’t do after your treatment? </p>
				<form>
					<input type="radio" id="injector_explain" name="injector_explain" value="Yes">
					<label for="">a)	Yes</label><br>
					<input type="radio" id="injector_explain" name="injector_explain" value="No">
					<label for="">b)	No</label><br>
				</form> 
			</div><br>
			<div>
				<p>5. Are you likely to use this company again for future treatments?</p>
				<form>
					<input type="radio" id="company_future" name="company_future" value="Yes">
					<label for="">a)	Yes</label><br>
					<input type="radio" id="company_future" name="company_future" value="No">
					<label for="">b)	No</label><br>
				</form> 
			</div><br>
			<br>
			<div>
				<a>6. Please explain any no answers here:  </a>
				<textarea name="negative_answers" id="negative_answers" rows="5"></textarea>
				<a>7. What are some things that can be done to improve? </a>
				<textarea name="done_improve" id="done_improve" rows="5"></textarea>
			</div>
			<button class="btn-send" onclick="onSubmit()">Submit</button>
		</div>
	</body>

	<!-- <link rel="stylesheet" href="/assets/css/star-rating-svg.css"> -->

	<!-- <script type="text/javascript" src="/assets/plugins/global/plugins.bundle.js"></script> -->
	<!-- <script src="/assets/js/star-rating-svg.min.js"></script> -->
	<!-- <script src="/assets/plugins/global/rating/js/star-rating.min.js"></script>
	<script src="/assets/plugins/global/rating/krajee-svg/theme.min.js"></script> -->
	
	<!-- <script src="/assets/js/app.v14{{ env('ENV_STR') }}.js?t={{time()}}"></script> -->

	<!-- <script>
		var selectedRating = 0;
		$(document).ready(function () {
			
			var requestVerifySurvey = {
				action: "verify_survey",
				key: '225sadfgasd123fgkhijjdsadfg16578g12gg3gh',
				treatment_uid: "{!! $treatmentUid !!}",
			};

			GetResponse("", "POST", requestVerifySurvey, function (status, data) {
				if (status == 200) {
					if (!data.success) {
						Swal.fire({
					        html: "This survey has been completed before. Thank you!",
					        icon: "success",
					        buttonsStyling: !1,
					        showCancelButton: false,
					        confirmButtonText: "Continue",
					        customClass: {
					            confirmButton: "btn btn-primary",
					            cancelButton: "btn btn-secondary",
					        },
					    }).then((result) => {
					        document.location.href = 'https://myspalive.com';
					    });
					} 
				} 
			});

		});

		function onSubmit() {
			var injector_name = $('textarea').val();
			
			if (injector_name) {
				var request = {
					action: "save_review_survey",
					injector_name: $("#injector_name").val(),
					experience: $("#experience").val(),
					pacient_name: $("#pacient_name").val(),
					injector_behave: $("#injector_behave").val(),
					injector_confident: $("#injector_confident").val(),
					injector_explain: $("#injector_explain").val(),
					company_future: $("#company_future").val(),
					negative_answers: $("#negative_answers").val(),
					done_improve: $("#done_improve").val(),
					treatment_uid: "{!! $treatmentUid !!}",
				};

				GetResponse("", "POST", request, function (status, data) {
					if (status == 200) {
						if (data.success) FireAlert("Thank you, your comments have been received.", "Thank you!", false, true);
						else FireAlert(Array.isArray(data.messages) && data.messages.length > 0 ? data.messages.join(", ") : "Error, please try again.", "warning");
					} else FireAlert("You can't review this treatment from here. You must enter your MYSPALIVE app.", "warning", false, true);
				});
			} else FireAlert("Please enter valid comments for your review.", "warning");
		}
	</script> -->
	

	<script src="https://myspalive.com/jquery-1.11.3.min.js"></script>
	<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>



	<script>
	
		function GetResponse() {

			$.ajax({
				success: function (data, textStatus, xhr) {

					if (data.session == false) {

						localStorage.setItem('old_values', JSON.stringify({
							userName: localStorage.getItem("userName"),
							userType: localStorage.getItem("userType"),
							token: localStorage.getItem("token"),
							userEmail: localStorage.getItem("userEmail"),
							loginStatus: localStorage.getItem("loginStatus"),
							userUid: localStorage.getItem("userUid"),
							photo_id: localStorage.getItem("photo_id"),
							preventInstructions: localStorage.getItem("preventInstructions")
						}));

						setTimeout(() => {
							Logout(true);
							return;
						}, 100);
					}
					// callback(xhr.status, data);
				},
				error: function (data, textStatus, xhr) {
					onLoading(false);
					//if(data);
						FireAlert('There has been an error. Check your internet connection and try again.', 'error', false, false, false, 'Retry', function() {
							GetResponse(url, method, body, callback)
						});
					// callback(xhr.status, data);
				},
			});
		}

		const urlParams = new URLSearchParams(window.location.search);
		const treatment_uid = urlParams.get('treatment_uid');
		console.log(treatment_uid); // Output: "value"

		$.ajax({
			url: "https://api.myspalive.com/",
			// url: "http://127.0.0.1/apispalive/",
			method: "POST",
			data: {
				action: "verify_survey",
				key: '225sadfgasd123fgkhijjdsadfg16578g12gg3gh',
				treatment_uid: treatment_uid,
			},
			success: function(response) {
				console.log(response);
				console.log('Entro');
			}
		});
	</script>

	<script>
		$(document).ready(function () {
			
			var requestVerifySurvey = {
				action: "verify_survey",
				key: '225sadfgasd123fgkhijjdsadfg16578g12gg3gh',
				treatment_uid: "{!! $treatmentUid !!}",
			};

			GetResponse("", "POST", requestVerifySurvey, function (status, data) {
				if (status == 200) {
					if (!data.success) {
						Swal.fire({
					        html: "This survey has been completed before. Thank you!",
					        icon: "success",
					        buttonsStyling: !1,
					        showCancelButton: false,
					        confirmButtonText: "Continue",
					        customClass: {
					            confirmButton: "btn btn-primary",
					            cancelButton: "btn btn-secondary",
					        },
					    }).then((result) => {
					        document.location.href = 'https://myspalive.com';
					    });
					} 
				} 
			});
		});

		function onSubmit() {

			$.ajax({
				url: "https://api.myspalive.com/",
				// url: "http://127.0.0.1/apispalive/",
				method: "POST",
				data: {
					action: "save_review_survey",
					key: '225sadfgasd123fgkhijjdsadfg16578g12gg3gh',
					injector_name: $("#injector_name").val(),
					experience: $("#experience").val(),
					pacient_name: $("#pacient_name").val(),
					injector_behave: $("#injector_behave").val(),
					injector_confident: $("#injector_confident").val(),
					injector_explain: $("#injector_explain").val(),
					company_future: $("#company_future").val(),
					negative_answers: $("#negative_answers").val(),
					done_improve: $("#done_improve").val(),
					treatment_uid: treatment_uid,
				},
				success: function(data) {
					console.log(data);
					Swal.fire({
						position: 'center',
						icon: 'success',
						title: 'Thank you, your comments have been received',
						showConfirmButton: false,
						timer: 1500
					});
					window.location.href = "https://myspalive.com/";
				},
				error: function (data) {

					Swal.fire({
						icon: 'error',
						title: 'Oops...',
						text: 'There has been an error. Check your internet connection and try again.',
					});
					// callback(xhr.status, data);
				},
			});
		}
	</script>
	<!-- http://127.0.0.1/Advante/QualitySurvey.php/&treatment_uid=59964561-fa82-4343-a963-a26fa0e24885 -->
</html>