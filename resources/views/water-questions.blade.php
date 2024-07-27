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
     		<!-- Step 6 -->
			<div class="step active">
				<div class="row">
					<h5 class="card-title text-center fs-4">પાણીને બાબતના પ્રશ્નો</h5>
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
                    <label for="water_1" class="form-label">ગામમા પાણી નિયમિત આવે છે કે, કેમ?</label>
                    <select class="form-select" aria-label="Default select example" id="water_1">
              <option value="" disabled selected></option>
              <option value="yes">Yes</option>
              <option value="no">No</option>
              <!-- Add more options as needed -->
            </select>
                </div>
					<div class="col-md-12">
                    <label for="water_1v" class="form-label">વિગત</label>
                    <input type="text" class="form-control" id="water_1v" placeholder="">
                </div>
						<div class="col-md-12">
                    <label for="water_2" class="form-label">ગામમાં પાણીનો પુરવઠો પુરતા પ્રમાણમાં પહોચાડવામાં આવે છે કે, કેમ?</label>
                    <select class="form-select" aria-label="Default select example" id="water_2">
              <option value="" disabled selected></option>
              <option value="yes">Yes</option>
              <option value="no">No</option>
              <!-- Add more options as needed -->
            </select>
                </div>
					<div class="col-md-12">
                    <label for="water_2v" class="form-label">વિગત</label>
                    <input type="text" class="form-control" id="water_2v" placeholder="">
                </div>
						<div class="col-md-12">
                    <label for="water_3" class="form-label">ગામની વસ્તી પ્રમાણે પીવાનુ પાણી પહોચડવા માટે પુરતા પ્રમાણમાં સંસાધનો છે કે, કેમ?</label>
                    <select class="form-select" aria-label="Default select example" id="water_3">
              <option value="" disabled selected></option>
              <option value="yes">Yes</option>
              <option value="no">No</option>
              <!-- Add more options as needed -->
            </select>
                </div>
					<div class="col-md-12">
                    <label for="water_3v" class="form-label">વિગત</label>
                    <input type="text" class="form-control" id="water_3v" placeholder="">
                </div>
							<div class="col-md-12">
                    <label for="water_4" class="form-label">પીવાના પાણી પહોચાડવાની પાઇપ લાઇનો બદલવાની જરૂયાત છે કે, કેમ?</label>
                    <select class="form-select" aria-label="Default select example" id="water_4">
              <option value="" disabled selected></option>
              <option value="yes">Yes</option>
              <option value="no">No</option>
              <!-- Add more options as needed -->
            </select>
                </div>
					<div class="col-md-12">
                    <label for="water_4v" class="form-label">વિગત</label>
                    <input type="text" class="form-control" id="water_4v" placeholder="">
                </div>
							<div class="col-md-12">
                    <label for="water_5" class="form-label">ગ્રામ પંચાયત દ્વારા ક્લોરીન યુક્ત પાણી આપવામાં આવે છે કે કેમ?</label>
                    <select class="form-select" aria-label="Default select example" id="water_5">
              <option value="" disabled selected></option>
              <option value="yes">Yes</option>
              <option value="no">No</option>
              <!-- Add more options as needed -->
            </select>
                </div>
					<div class="col-md-12">
                    <label for="water_5v" class="form-label">વિગત</label>
                    <input type="text" class="form-control" id="water_5v" placeholder="">
                </div>
							<div class="col-md-12">
                    <label for="water_6" class="form-label">ગામમા ભુર્ગળ જળસ્તર વધારવા માટે ONGC/કોઇ કંપની/NGOની મદદથી તળાવમાં રિચાર્જ કુવા બનાવવામાં આવેલ છે કે કેમ?</label>
                    <select class="form-select" aria-label="Default select example" id="water_6">
              <option value="" disabled selected></option>
              <option value="yes">Yes</option>
              <option value="no">No</option>
              <!-- Add more options as needed -->
            </select>
                </div>
					<div class="col-md-12">
                    <label for="water_6v" class="form-label">વિગત</label>
                    <input type="text" class="form-control" id="water_6v" placeholder="">
                </div>
						<div class="col-md-12">
                    <label for="water_7" class="form-label">ગામમા ભુર્ગળ જળસ્તર વધારવા માટે ONGC/કોઇ કંપની/NGOની મદદથી તળાવમાં રિચાર્જ કુવાની જરૂરીયાત છે કે કેમ?</label>
                    <select class="form-select" aria-label="Default select example" id="water_7">
              <option value="" disabled selected></option>
              <option value="yes">Yes</option>
              <option value="no">No</option>
              <!-- Add more options as needed -->
            </select>
                </div>
						<div class="col-md-12">
                    <label for="water_7v" class="form-label">વિગત</label>
                    <input type="text" class="form-control" id="water_7v" placeholder="">
                </div>
								<div class="col-md-12">
                    <label for="water_8" class="form-label">ગામ માં પાણી સંગ્રહ માટે ટાંકી બનાવેલ છે કે નહિ?</label>
                    <select class="form-select" aria-label="Default select example" id="water_8">
              <option value="" disabled selected></option>
              <option value="yes">Yes</option>
              <option value="no">No</option>
              <!-- Add more options as needed -->
            </select>
                </div>
						<div class="col-md-12">
                    <label for="water_8v" class="form-label">વિગત</label>
                    <input type="text" class="form-control" id="water_8v" placeholder="">
                </div>
							<div class="col-md-12">
                    <label for="water_9" class="form-label">ગામ માં પાણી સંગ્રહ માટે ટાંકની નિયમિત સફાઈ થાય છે કે નહિ?</label>
                    <select class="form-select" aria-label="Default select example" id="water_9">
              <option value="" disabled selected></option>
              <option value="yes">Yes</option>
              <option value="no">No</option>
              <!-- Add more options as needed -->
            </select>
                </div>
						<div class="col-md-12">
                    <label for="water_9v" class="form-label">છેલ્લી સફાઈ ની તારીખ</label>
                    <input type="text" class="form-control" id="water_9v" placeholder="">
                </div>
							<div class="col-md-12">
                    <label for="water_10" class="form-label">ગામમાં STP પ્લાટ છે કે કેમ?</label>
                    <select class="form-select" aria-label="Default select example" id="water_10">
              <option value="" disabled selected></option>
              <option value="yes">Yes</option>
              <option value="no">No</option>
              <!-- Add more options as needed -->
            </select>
                </div>
					<div class="col-md-12">
                    <label for="water_10v" class="form-label">વિગત</label>
                    <input type="text" class="form-control" id="water_10v" placeholder="">
                </div>
		<div class="col-md-12">
                    <label for="water_11" class="form-label">ગામમાં STP પ્લાટની જરૂરીયાત છે કે કેમ?</label>
                    <select class="form-select" aria-label="Default select example" id="water_11">
              <option value="" disabled selected></option>
              <option value="yes">Yes</option>
              <option value="no">No</option>
              <!-- Add more options as needed -->
            </select>
                </div>
					<div class="col-md-12">
                    <label for="water_11v" class="form-label">વિગત</label>
                    <input type="text" class="form-control" id="water_11v" placeholder="">
                </div>
					
	<div class="col-md-12">
                    <label for="water_12" class="form-label">અન્ય બાબત</label>
                    <input type="text" class="form-control" id="water_12" placeholder="">
                </div>
				</div>
				                <button type="button" class="btn btn-secondary" onclick="window.location='supply-questions.php';">Previous</button>
				<button type="button" class="btn btn-success" onclick="saveForm()">Save</button>
                <button type="button" class="btn btn-primary" onclick="window.location='electricity-questions.php';">Next</button>
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