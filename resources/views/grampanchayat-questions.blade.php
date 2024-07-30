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
        <form id="surveyForm" name="Gram-Panchayat Questions" enctype="multipart/form-data">
     			<!-- Step 15-->
			<div class="step active">
				<div class="row">
					<h5 class="card-title text-center fs-4">ગ્રામ પંચાયત બાબતના પ્રશ્નો</h5>
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
                    <label for="grampanchayat_1" class="form-label">પંચાયત બાબતે કોઇ પ્રશ્ન છે કે, કેમ?</label>
                    <select class="form-select" aria-label="Default select example" name="grampanchayat_1">
              <option value="" disabled selected></option>
              <option value="yes">Yes</option>
              <option value="no">No</option>
              <!-- Add more options as needed -->
            </select>
                </div>
						<div class="col-md-12">
                    <label for="grampanchayat_1v" class="form-label">વિગત</label>
                    <input type="text" class="form-control" name="grampanchayat_1v" placeholder="">
                </div>
							<div class="col-md-12">
                    <label for="grampanchayat_2" class="form-label">ગામ પંચાયતમાં આવકના દાખલો, મરણનો દાખલો. પુન: લગ્ન ના કર્યા અંગેનો દાખલો, વિધવા સહાયની કામગીરી  થાય છે કે, કેમ?</label>
                    <select class="form-select" aria-label="Default select example" name="grampanchayat_2">
              <option value="" disabled selected></option>
              <option value="yes">Yes</option>
              <option value="no">No</option>
              <!-- Add more options as needed -->
            </select>
                </div>
						<div class="col-md-12">
                    <label for="grampanchayat_2v" class="form-label">વિગત</label>
                    <input type="text" class="form-control" name="grampanchayat_2v" placeholder="">
                </div>
							<div class="col-md-12">
                    <label for="grampanchayat_3" class="form-label">ગામમા સ્માશાન ભઠ્ઠી છે કેમ?</label>
                    <select class="form-select" aria-label="Default select example" name="grampanchayat_3">
              <option value="" disabled selected></option>
              <option value="yes">Yes</option>
              <option value="no">No</option>
              <!-- Add more options as needed -->
            </select>
                </div>
						<div class="col-md-12">
                    <label for="grampanchayat_3v" class="form-label">વિગત</label>
                    <input type="text" class="form-control" name="grampanchayat_3v" placeholder="">
                </div>
							<div class="col-md-12">
                    <label for="grampanchayat_4" class="form-label">ગામમા સ્માશાન માટે સ્મશાન ગૃહ અંગેનો શેડ છે કે, કેમ?</label>
                    <select class="form-select" aria-label="Default select example" name="grampanchayat_4">
              <option value="" disabled selected></option>
              <option value="yes">Yes</option>
              <option value="no">No</option>
              <!-- Add more options as needed -->
            </select>
                </div>
						<div class="col-md-12">
                    <label for="grampanchayat_4v" class="form-label">વિગત</label>
                    <input type="text" class="form-control" name="grampanchayat_4v" placeholder="">
                </div>
							<div class="col-md-12">
                    <label for="grampanchayat_5" class="form-label">ભારતનેટ ધ્વારા આપવામા આવતી બ્રોડ બેન્ડ કનેકટીવીટી ગ્રામ પંચાયતમા યોગ્ય રીતે કાર્યરત છે કેમ?</label>
                    <select class="form-select" aria-label="Default select example" name="grampanchayat_5">
              <option value="" disabled selected></option>
              <option value="yes">Yes</option>
              <option value="no">No</option>
              <!-- Add more options as needed -->
            </select>
                </div>
						<div class="col-md-12">
                    <label for="grampanchayat_5v" class="form-label">વિગત</label>
                    <input type="text" class="form-control" name="grampanchayat_5v" placeholder="">
                </div>
						<div class="col-md-12">
                    <label for="grampanchayat_6" class="form-label">ગામમા ઇગ્રામ ની સગવડ છે કે કેમ?</label>
                    <select class="form-select" aria-label="Default select example" name="grampanchayat_6">
              <option value="" disabled selected></option>
              <option value="yes">Yes</option>
              <option value="no">No</option>
              <!-- Add more options as needed -->
            </select>
                </div>
						<div class="col-md-12">
                    <label for="grampanchayat_6v" class="form-label">વિગત</label>
                    <input type="text" class="form-control" name="grampanchayat_6v" placeholder="">
                </div>
						<div class="col-md-12">
                    <label for="grampanchayat_7" class="form-label">ગામ લોકો ધ્વારા જણાવવામા આવેલ અન્ય કોઇ પ્રશ્નો/બાબતોની વિગતો</label>
                    <input type="text" class="form-control" name="grampanchayat_7" placeholder="">
                </div>
						<div class="col-md-12">
                    <label for="grampanchayat_8" class="form-label">પ્રધાનમંત્રી આવાસ યોજનાના પશ્નોના નિરાકરણ બાબતે કોઇ વ્યવસ્થા છે કે કેમ?</label>
                    <select class="form-select" aria-label="Default select example" name="grampanchayat_8">
              <option value="" disabled selected></option>
              <option value="yes">Yes</option>
              <option value="no">No</option>
              <!-- Add more options as needed -->
            </select>
                </div>
						<div class="col-md-12">
                    <label for="grampanchayat_8v" class="form-label">વિગત</label>
                    <input type="text" class="form-control" name="grampanchayat_8v" placeholder="">
                </div>
						<div class="col-md-12">
                    <label for="grampanchayat_9" class="form-label">ગ્રામ પંચાયત VCE દ્વારા વિધવા સહાયની અરજી ઓનલાઇન સમયસર કરી આપવામાં આવે છે કે, કેમ?</label>
                    <select class="form-select" aria-label="Default select example" name="grampanchayat_9">
              <option value="" disabled selected></option>
              <option value="yes">Yes</option>
              <option value="no">No</option>
              <!-- Add more options as needed -->
            </select>
                </div>
						<div class="col-md-12">
                    <label for="grampanchayat_9v" class="form-label">વિગત</label>
                    <input type="text" class="form-control" name="grampanchayat_9v" placeholder="">
                </div>
						<div class="col-md-12">
                    <label for="grampanchayat_10" class="form-label">ગ્રુપ ગ્રામ પંચાયતમાં આધાર કેન્દ્ર / જનસેવા કેન્દ્રની જરૂરીયાત છે કે, કેમ?</label>
                    <select class="form-select" aria-label="Default select example" name="grampanchayat_10">
              <option value="" disabled selected></option>
              <option value="yes">Yes</option>
              <option value="no">No</option>
              <!-- Add more options as needed -->
            </select>
                </div>
						<div class="col-md-12">
                    <label for="grampanchayat_10v" class="form-label">વિગત</label>
                    <input type="text" class="form-control" name="grampanchayat_10v" placeholder="">
                </div>
					<div class="col-md-12">
                    <label for="health_48v" class="form-label">અન્ય બાબત</label>
                    <input type="text" class="form-control" name="health_48v" placeholder="">
                </div>
						<div class="col-md-12">
							<label class="form-label" for="grampanchayatphoto">Photo Upload</label>
<input type="file" class="form-control" name="grampanchayatphoto" accept="image/*" />
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
                    window.location.href = "{{ route('banking-questions-index') }}";
                });
                $("#nextButton").on("click", function(event) {
                    event.preventDefault();
                    window.location.href = "{{ route('other-questions-index') }}";
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
                      var formData = new FormData(form);

                      $.ajax({
                          url: "{{ route('grampanchayat-questions.store') }}",
                          type: 'POST',
                          data: formData,
                          processData: false,
                          contentType: false,
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