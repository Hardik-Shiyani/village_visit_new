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
        <form id="surveyForm" name="Revenue Questions">
     			<!-- Step 12 -->
			<div class="step active">
				<div class="row">
					<h5 class="card-title text-center fs-4">મહેસુલી બાબતે</h5>
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
                    <label for="revenue_1" class="form-label">ગામમા ગ્રામ પંચાયત VCE દ્વારા તમામ ઓનલાઇન/ઓફલાઇન સુવિધાઓ આપવામાં આવે છે કે કેમ?</label>
                    <select class="form-select" aria-label="Default select example" name="revenue_1">
              <option value="" disabled selected></option>
              <option value="yes">Yes</option>
              <option value="no">No</option>
              <!-- Add more options as needed -->
            </select>
                </div>
						<div class="col-md-12">
                    <label for="revenue_1v" class="form-label">વિગત</label>
                    <input type="text" class="form-control" name="revenue_1v" placeholder="">
                </div>
						<div class="col-md-12">
                    <label for="revenue_2" class="form-label">સરકારશ્રીની મહેસુલી યોજનાઓની સેવાઓ ઓનલાઇન પુરી પાડવામાં આવે છે. તે બાબતેની માહીતી પુરી પાડવામાં આવે છે કે, કેમ?</label>
                    <select class="form-select" aria-label="Default select example" name="revenue_2">
              <option value="" disabled selected></option>
              <option value="yes">Yes</option>
              <option value="no">No</option>
              <!-- Add more options as needed -->
            </select>
                </div>
						<div class="col-md-12">
                    <label for="revenue_2v" class="form-label">વિગત</label>
                    <input type="text" class="form-control" name="revenue_2v" placeholder="">
                </div>
						<div class="col-md-12">
                    <label for="revenue_3" class="form-label">ગામમા પ્રોપટી કાર્ડ બાબતે કોઇ પશ્ન છે કે, કેમ?</label>
                    <select class="form-select" aria-label="Default select example" name="revenue_3">
              <option value="" disabled selected></option>
              <option value="yes">Yes</option>
              <option value="no">No</option>
              <!-- Add more options as needed -->
            </select>
                </div>
					
						<div class="col-md-12">
                    <label for="revenue_3v" class="form-label">વિગત</label>
                    <input type="text" class="form-control" name="revenue_3v" placeholder="">
                </div>
						<div class="col-md-12">
                    <label for="revenue_4" class="form-label">ગામમા રી સર્વે પ્રમોગ્રેશન બાબતના પ્રશ્નો છે કે, કેમ?</label>
                    <select class="form-select" aria-label="Default select example" name="revenue_4">
              <option value="" disabled selected></option>
              <option value="yes">Yes</option>
              <option value="no">No</option>
              <!-- Add more options as needed -->
            </select>
                </div>
					
						<div class="col-md-12">
                    <label for="revenue_4v" class="form-label">વિગત</label>
                    <input type="text" class="form-control" name="revenue_4v" placeholder="">
                </div>

						<div class="col-md-12">
                    <label for="revenue_5" class="form-label">ગામમા વાડા પત્રક બાબતે કોઇ પ્રશ્ન છે કે, કેમ?</label>
                    <select class="form-select" aria-label="Default select example" name="revenue_5">
              <option value="" disabled selected></option>
              <option value="yes">Yes</option>
              <option value="no">No</option>
              <!-- Add more options as needed -->
            </select>
                </div>
					
						<div class="col-md-12">
                    <label for="revenue_5v" class="form-label">વિગત</label>
                    <input type="text" class="form-control" name="revenue_5v" placeholder="">
                </div>
						<div class="col-md-12">
                    <label for="revenue_6" class="form-label">ગામમા નવી - જુની શરતના કેસો અંગે કોઇ પ્રશ્ન છે કે, કેમ?</label>
                    <select class="form-select" aria-label="Default select example" name="revenue_6">
              <option value="" disabled selected></option>
              <option value="yes">Yes</option>
              <option value="no">No</option>
              <!-- Add more options as needed -->
            </select>
                </div>
					
						<div class="col-md-12">
                    <label for="revenue_6v" class="form-label">વિગત</label>
                    <input type="text" class="form-control" name="revenue_6v" placeholder="">
                </div>
							<div class="col-md-12">
                    <label for="revenue_7" class="form-label">નમૂના નં.२ નિભાવવામાં આવે છે કે નહિ?</label>
                    <select class="form-select" aria-label="Default select example" name="revenue_7">
              <option value="" disabled selected></option>
              <option value="yes">Yes</option>
              <option value="no">No</option>
              <!-- Add more options as needed -->
            </select>
                </div>
					
						<div class="col-md-12">
                    <label for="revenue_7v" class="form-label">વિગત</label>
                    <input type="text" class="form-control" name="revenue_7v" placeholder="">
                </div>
						<div class="col-md-12">
                    <label for="revenue_8" class="form-label">અન્ય બાબત</label>
                    <input type="text" class="form-control" name="revenue_8" placeholder="">
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
                    window.location.href = "{{ route('polution-questions-index') }}";
                });

                $("#nextButton").on("click", function(event) {
                    event.preventDefault();
                    window.location.href = "{{ route('anganwadi-questions-index') }}";
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
                            url: "{{ route('revenue-questions.store') }}",
                            type: 'POST',
                            data: $(form).serialize(),
                            success: function(response) {
                                var formName = $('#surveyForm').attr('name');
                                if (formName) {
                                    alert('Form "' + formName + '" submitted successfully!');
                                } else {
                                    alert('Form submitted successfully!');
                                }
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