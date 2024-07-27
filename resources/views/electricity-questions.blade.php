<!DOCTYPE html>
<html lang="en">

@include('head')
@include('main-header')
<title>ગામની મુલાકાતનું પત્રક</title>
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
     		<!-- Step 7 -->
			<div class="step active">
				<div class="row">
					<h5 class="card-title text-center fs-4">વીજપુરવઠો બાબતના પ્રશ્નો</h5>
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
                    <label for="electric_1" class="form-label">GEB/UGVCL દ્વારા નિયમિત ૨૪ કલાક વીજ પુરવઠો ઉપલબ્ધ કરાવવામાં આવે છે કે કેમ,?</label>
                    <select class="form-select" aria-label="Default select example" id="electric_1">
              <option value="" disabled selected></option>
              <option value="yes">Yes</option>
              <option value="no">No</option>
              <!-- Add more options as needed -->
            </select>
                </div>
						<div class="col-md-12">
                    <label for="electric_1v" class="form-label">વિગત</label>
                    <input type="text" class="form-control" id="electric_1v" placeholder="">
                </div>
						<div class="col-md-12">
                    <label for="electric_2" class="form-label">GEB/UGVCL વીજ પુરવઠા બાબતે સમસ્યાઓ/પ્રશ્નોના નિરાકરણ માટે કોઇ વ્યવસ્થા છે કે, કેમ ?</label>
                    <select class="form-select" aria-label="Default select example" id="electric_2">
              <option value="" disabled selected></option>
              <option value="yes">Yes</option>
              <option value="no">No</option>
              <!-- Add more options as needed -->
            </select>
                </div>
						<div class="col-md-12">
                    <label for="electric_2v" class="form-label">વિગત</label>
                    <input type="text" class="form-control" id="electric_2v" placeholder="">
                </div>
						<div class="col-md-12">
                    <label for="electric_3" class="form-label">નવુ લાઇટ કનેક્શન લેવા માટે ગ્રામજનોને માહિતી પુરી પાડવામાં આવે છે કે, કેમ?</label>
                    <select class="form-select" aria-label="Default select example" id="electric_3">
              <option value="" disabled selected></option>
              <option value="yes">Yes</option>
              <option value="no">No</option>
              <!-- Add more options as needed -->
            </select>
                </div>
						<div class="col-md-12">
                    <label for="electric_3v" class="form-label">વિગત</label>
                    <input type="text" class="form-control" id="electric_3v" placeholder="">
                </div>
						<div class="col-md-12">
                    <label for="electric_4" class="form-label">અન્ય બાબત</label>
                    <input type="text" class="form-control" id="electric_4" placeholder="">
                </div>

				</div>
				                <button type="button" class="btn btn-secondary" onclick="window.location='water-questions.php';">Previous</button>
				<button type="button" class="btn btn-success" onclick="saveForm()">Save</button>
                <button type="button" class="btn btn-primary" onclick="window.location='road-questions.php';">Next</button>
			</div>
				</form>
				
						
           
            </div>
			
			</div>
        

			</div>
  

    <script>
        let currentStep = 0;
        const steps = document.querySelectorAll(".step");
    
        function showStep(step) {
          steps.forEach((el, index) => {
            el.classList.toggle("active", index === step);
          });
        }
    
        function nextStep() {
          if (currentStep < steps.length - 1) {
            currentStep++;
            showStep(currentStep);
          }
        }
    
        function prevStep() {
          if (currentStep > 0) {
            currentStep--;
            showStep(currentStep);
          }
        }
    
        document.getElementById("surveyForm").addEventListener("submit", function(event) {
          event.preventDefault();
          alert("Survey submitted!");
        });
    </script>

</body>
@include ('main-footer')
</html>