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
     			
							<!-- Step 11 -->
			<div class="step active">
				<div class="row">
					<h5 class="card-title text-center fs-4">પ્રદુષણ બાબતના પ્રશ્નો</h5>
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
                    <label for="polution_1" class="form-label">ગામમાં આવેલી GIDC/ફેક્ટરીની આજુબાજુમાં સ્વચ્છતા જળવાય છે કે, કેમ?</label>
                    <select class="form-select" aria-label="Default select example" id="polution_1">
              <option value="" disabled selected></option>
              <option value="yes">Yes</option>
              <option value="no">No</option>
              <!-- Add more options as needed -->
            </select>
                </div>
						<div class="col-md-12">
                    <label for="polution_1v" class="form-label">વિગત</label>
                    <input type="text" class="form-control" id="polution_1v" placeholder="">
                </div>
						<div class="col-md-12">
                    <label for="polution_2" class="form-label">ગામમા પ્રદુષણ અંગે કોઇ પ્રશ્ન છે કે કેમ?</label>
                    <select class="form-select" aria-label="Default select example" id="polution_2">
              <option value="" disabled selected></option>
              <option value="yes">Yes</option>
              <option value="no">No</option>
              <!-- Add more options as needed -->
            </select>
                </div>
					<div class="col-md-12">
                    <label for="polution_2v" class="form-label">વિગત</label>
                    <input type="text" class="form-control" id="polution_2v" placeholder="">
                </div>
						<div class="col-md-12">
                    <label for="polution_3" class="form-label">ગામમાં આવેલ જી.આઈ.ડી.સી/ કોઈ ફેક્ટરી દ્રારા છોડવામાં આવતા કેમિકલ યુક્ત પાણીનો નિકાલ યોગ્ય રીતે થાય છે કે, કેમ?</label>
                    <select class="form-select" aria-label="Default select example" id="polution_3">
              <option value="" disabled selected></option>
              <option value="yes">Yes</option>
              <option value="no">No</option>
              <!-- Add more options as needed -->
            </select>
                </div>
					<div class="col-md-12">
                    <label for="polution_3v" class="form-label">વિગત</label>
                    <input type="text" class="form-control" id="polution_3v" placeholder="">
                </div>
						<div class="col-md-12">
                    <label for="polution_4" class="form-label">ગામમાં આવેલ જી.આઈ.ડી.સી/કોઈ ફેક્ટરી IUDASTUICAL SAFETY AUDIT થાય છે કે, કેમ? </label>
                    <select class="form-select" aria-label="Default select example" id="polution_4">
              <option value="" disabled selected></option>
              <option value="yes">Yes</option>
              <option value="no">No</option>
              <!-- Add more options as needed -->
            </select>
                </div>
					<div class="col-md-12">
                    <label for="polution_4v" class="form-label">વિગત</label>
                    <input type="text" class="form-control" id="polution_4v" placeholder="">
                </div>
					<div class="col-md-12">
                    <label for="polution_5" class="form-label">અન્ય બાબત</label>
                    <input type="text" class="form-control" id="polution_5" placeholder="">
                </div>

				</div>
				                <button type="button" class="btn btn-secondary" onclick="window.location='cleanliness-questions.php';">Previous</button>
				<button type="button" class="btn btn-success" onclick="saveForm()">Save</button>
                <button type="button" class="btn btn-primary" onclick="window.location='revenue-questions.php';">Next</button>
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