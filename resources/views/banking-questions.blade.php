<!DOCTYPE html>
<html lang="en">

@include ('head')
@include ('main-header')
<head>
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>ગામની મુલાકાતનું પત્રક</title>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
</head>
<style>
    .step {
      display: none;
    }
    .step.active {
      display: block;
    }
</style>

<body>

    <div class="container mt-3">
		<div class="card mb-3">

                                <div class="card-body">
        <form id="surveyForm">
     		<!-- Step 14-->
			<div class="step active">
				<div class="row">
					<h5 class="card-title text-center fs-4">બેંકીંગ સેવાને લગતા પ્રશ્નો </h5>
							  <div class="col-md-6 mb-3">
  	<label for="validationCustom03">તાલુકાનું નામ:</label>
      <select class="form-select" name="category" id="validationCustom03" onchange="ChangecatList()" required>
        <option value="">તાલુકો સિલેક્ટ કરો</option>
				<option value="taluka1">ગાંધીનગર</option>
				<option value="taluka2">કલોલ</option>
				<option value="taluka3">દહેગામ</option>
				<option value="taluka4">માણસા</option>
      </select>
	<div class="invalid-feedback">
		Please provide a category.
	</div>
  </div>
  <div class="col-md-6 mb-3">
  	<label for="validationCustom04">ગામનું નામ:</label>
     <select class="form-select" id="validationCustom04" name="activity" required></select>
    <div class="invalid-feedback">
		Please provide an activity.
	</div>
  </div>
						<div class="col-md-12">
							<label for="bank_1" class="form-label">નજીકમાં ઉપલબ્ધ સરકારી/બિન સરકારી બેંકની વિગતો (અંતરની વિગતો સાથે)</label>
                </div>
					
					<div class="col-md-6">
							<label for="bank_1bn1" class="form-label">બેંક નુ નામ</label>
						<input type="text" class="form-control" name="bank_1bn1" placeholder="">
                </div>
					<div class="col-md-6">
							<label for="bank_1bd1" class="form-label">અંતર</label>
						<input type="text" class="form-control" name="bank_1bd1" placeholder="">
                </div>
							<div class="col-md-6">
							<label for="bank_1bn2" class="form-label">બેંક નુ નામ</label>
						<input type="text" class="form-control" name="bank_1bn2" placeholder="">
                </div>
					<div class="col-md-6">
							<label for="bank_1bd2" class="form-label">અંતર</label>
						<input type="text" class="form-control" name="bank_1bd2" placeholder="">
                </div>
							<div class="col-md-6">
							<label for="bank_1bn3" class="form-label">બેંક નુ નામ</label>
						<input type="text" class="form-control" name="bank_1bn3" placeholder="">
                </div>
					<div class="col-md-6">
							<label for="bank_1bd3" class="form-label">અંતર</label>
						<input type="text" class="form-control" name="bank_1bd3" placeholder="">
                </div>
		
						<div class="col-md-12">
                    <label for="bank_2" class="form-label">(i) ગામમાં બેંકીંગ કોરસ્પોન્ડન્ટની ઉપલબ્ધતા</label>
                       <select class="form-select" aria-label="Default select example" name="bank_2">
              <option value="" disabled selected></option>
              <option value="yes">Yes</option>
              <option value="no">No</option>
              <!-- Add more options as needed -->
            </select>
                </div>
						<div class="col-md-12">
                    <label for="bank_2v" class="form-label">વિગત</label>
                    <input type="text" class="form-control" name="bank_2v" placeholder="">
                </div>
						<div class="col-md-12">
                    <label for="bank_3" class="form-label">(ii) બેંકીંગ કોરસ્પોન્ડન્ટની સમયાંતરે ગામની મુલાકાત (કેટલા દિવસે?)</label>
                    <input type="text" class="form-control" name="bank_3" placeholder="">
                </div>
						<div class="col-md-6">
                    <label for="bank_4bcn" class="form-label">બેંકીંગ કોરસ્પોન્ડન્ટનુ નામ</label>
                    <input type="text" class="form-control" name="bank_4bcn" placeholder="">
                </div>
						<div class="col-md-6">
                    <label for="bank_4bcm" class="form-label">બેન્કિંગ કોરરેસ્પોન્ડ નો નંબર</label>
                    <input type="tel" class="form-control" name="bank_4bcm" placeholder="">
                </div>
						<div class="col-md-12">
                    <label for="bank_5" class="form-label">PMJDY અકાઉન્ટસની સંખ્યા?</label>
                    <input type="text" class="form-control" name="bank_5" placeholder="">
                </div>
					<div class="col-md-12">
                    <label for="bank_6" class="form-label">PMSBY ની સંખ્યા?</label>
                    <input type="text" class="form-control" name="bank_6" placeholder="">
                </div>
					<div class="col-md-12">
                    <label for="bank_7" class="form-label">PMJJBY ની સંખ્યા?</label>
                    <input type="text" class="form-control" name="bank_7" placeholder="">
                </div>
					<div class="col-md-12">
                    <label for="bank_8" class="form-label">અટલ પેન્શન યોજનાની સંખ્યા?</label>
                    <input type="text" class="form-control" name="bank_8" placeholder="">
                </div>
					<div class="col-md-12">
                    <label for="bank_9" class="form-label">સખીમંડળ/SHG ધ્વારા લોનની માંગણી કરવામા આવેલ અરજીઓ પૈકી પડતર અરજીઓની સંખ્યા?</label>
                    <input type="text" class="form-control" name="bank_9" placeholder="">
                </div>
							<div class="col-md-12">
                    <label for="bank_10" class="form-label">ગામમાં ATM ઉપલબ્ધ છે કે નહિ?</label>
                    <select class="form-select" aria-label="Default select example" name="bank_10">
              <option value="" disabled selected></option>
              <option value="yes">Yes</option>
              <option value="no">No</option>
              <!-- Add more options as needed -->
            </select>
                </div>
						<div class="col-md-12">
                    <label for="bank_10v" class="form-label">કઈ બેંક નું છે?</label>
                    <input type="text" class="form-control" name="bank_10v" placeholder="">
                </div>
											<div class="col-md-12">
                    <label for="bank_11" class="form-label">અન્ય કોઈ બાબત</label>
                    <input type="text" class="form-control" name="bank_11" placeholder="">
                </div>
				</div>
				                <button type="button" class="btn btn-secondary" id="previousButton">Previous</button>
				<button type="submit" class="btn btn-success">Save</button>
                <button type="button" class="btn btn-primary" id="nextButton">Next</button>
			</div>
						
				</form>
				
						
           
            </div>
			
			</div>
        

			</div>
  

      <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script>
        $(document).ready(function() {
            $("#previousButton").on("click", function(event) {
                event.preventDefault();
                window.location.href = "{{ route('anganwadi-questions-index') }}";
            });
            $("#nextButton").on("click", function(event) {
                event.preventDefault();
                window.location.href = "{{ route('grampanchayat-questions-index') }}";
            });

            $.ajaxSetup({
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                }
            });
            
            $("#surveyForm").on("submit", function(event) {
                event.preventDefault();
                var form = this;

                if (form.checkValidity() === false) {
                    event.stopPropagation();
                } else {
                    $.ajax({
                        url: "{{ route('banking-questions.store') }}",
                        type: 'POST',
                        data: $(form).serialize(),
                        success: function(response) {
                            $('#nextButton').trigger('click');
                        },
                        error: function(xhr, status, error) {
                            alert("An error occurred: " + xhr.responseText);
                            console.error(xhr.responseText);
                        }
                    });
                }
                $(form).addClass('was-validated');
            });
        });
    </script>

</body>
@include ('main-footer')
</html>