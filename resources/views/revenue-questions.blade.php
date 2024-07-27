<!DOCTYPE html>
<html lang="en">

@include ('head')
@include ('main-header')
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
                    <select class="form-select" aria-label="Default select example" id="revenue_1">
              <option value="" disabled selected></option>
              <option value="yes">Yes</option>
              <option value="no">No</option>
              <!-- Add more options as needed -->
            </select>
                </div>
						<div class="col-md-12">
                    <label for="revenue_1v" class="form-label">વિગત</label>
                    <input type="text" class="form-control" id="revenue_1v" placeholder="">
                </div>
						<div class="col-md-12">
                    <label for="revenue_2" class="form-label">સરકારશ્રીની મહેસુલી યોજનાઓની સેવાઓ ઓનલાઇન પુરી પાડવામાં આવે છે. તે બાબતેની માહીતી પુરી પાડવામાં આવે છે કે, કેમ?</label>
                    <select class="form-select" aria-label="Default select example" id="revenue_2">
              <option value="" disabled selected></option>
              <option value="yes">Yes</option>
              <option value="no">No</option>
              <!-- Add more options as needed -->
            </select>
                </div>
						<div class="col-md-12">
                    <label for="revenue_2v" class="form-label">વિગત</label>
                    <input type="text" class="form-control" id="revenue_2v" placeholder="">
                </div>
						<div class="col-md-12">
                    <label for="revenue_3" class="form-label">ગામમા પ્રોપટી કાર્ડ બાબતે કોઇ પશ્ન છે કે, કેમ?</label>
                    <select class="form-select" aria-label="Default select example" id="revenue_3">
              <option value="" disabled selected></option>
              <option value="yes">Yes</option>
              <option value="no">No</option>
              <!-- Add more options as needed -->
            </select>
                </div>
					
						<div class="col-md-12">
                    <label for="revenue_3v" class="form-label">વિગત</label>
                    <input type="text" class="form-control" id="revenue_3v" placeholder="">
                </div>
						<div class="col-md-12">
                    <label for="revenue_4" class="form-label">ગામમા રી સર્વે પ્રમોગ્રેશન બાબતના પ્રશ્નો છે કે, કેમ?</label>
                    <select class="form-select" aria-label="Default select example" id="revenue_4">
              <option value="" disabled selected></option>
              <option value="yes">Yes</option>
              <option value="no">No</option>
              <!-- Add more options as needed -->
            </select>
                </div>
					
						<div class="col-md-12">
                    <label for="revenue_4v" class="form-label">વિગત</label>
                    <input type="text" class="form-control" id="revenue_4v" placeholder="">
                </div>

						<div class="col-md-12">
                    <label for="revenue_5" class="form-label">ગામમા વાડા પત્રક બાબતે કોઇ પ્રશ્ન છે કે, કેમ?</label>
                    <select class="form-select" aria-label="Default select example" id="revenue_5">
              <option value="" disabled selected></option>
              <option value="yes">Yes</option>
              <option value="no">No</option>
              <!-- Add more options as needed -->
            </select>
                </div>
					
						<div class="col-md-12">
                    <label for="revenue_5v" class="form-label">વિગત</label>
                    <input type="text" class="form-control" id="revenue_5v" placeholder="">
                </div>
						<div class="col-md-12">
                    <label for="revenue_6" class="form-label">ગામમા નવી - જુની શરતના કેસો અંગે કોઇ પ્રશ્ન છે કે, કેમ?</label>
                    <select class="form-select" aria-label="Default select example" id="revenue_6">
              <option value="" disabled selected></option>
              <option value="yes">Yes</option>
              <option value="no">No</option>
              <!-- Add more options as needed -->
            </select>
                </div>
					
						<div class="col-md-12">
                    <label for="revenue_6v" class="form-label">વિગત</label>
                    <input type="text" class="form-control" id="revenue_6v" placeholder="">
                </div>
							<div class="col-md-12">
                    <label for="revenue_7" class="form-label">નમૂના નં.२ નિભાવવામાં આવે છે કે નહિ?</label>
                    <select class="form-select" aria-label="Default select example" id="revenue_7">
              <option value="" disabled selected></option>
              <option value="yes">Yes</option>
              <option value="no">No</option>
              <!-- Add more options as needed -->
            </select>
                </div>
					
						<div class="col-md-12">
                    <label for="revenue_7v" class="form-label">વિગત</label>
                    <input type="text" class="form-control" id="revenue_7v" placeholder="">
                </div>
						<div class="col-md-12">
                    <label for="revenue_8" class="form-label">અન્ય બાબત</label>
                    <input type="text" class="form-control" id="revenue_8" placeholder="">
                </div>
				</div>
				                <button type="button" class="btn btn-secondary" onclick="window.location='polution-questions.php';">Previous</button>
				<button type="button" class="btn btn-success" onclick="saveForm()">Save</button>
                <button type="button" class="btn btn-primary" onclick="window.location='anganwadi-questions.php';">Next</button>
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