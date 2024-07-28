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
     			<!-- Step 13 -->
			<div class="step active">
				<div class="row">
					<h5 class="card-title text-center fs-4">આંગણવાડીને લગતા પ્રશ્નો</h5>
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
                    <label for="anganwadi_1" class="form-label">ગામમા કુલ કેટલી આંગણવાડી આવેલ છે?</label>
                    <input type="text" class="form-control" name="anganwadi_1" placeholder="">
                </div>
						<div class="col-md-12">
                    <label for="anganwadi_2" class="form-label">આંગણવાડીની સ્થિતિ/માળખાકીય સુવિધાઓ અંગેની વિગતો</label>
                    <input type="text" class="form-control" name="anganwadi_2" placeholder="">
                </div>
						<div class="col-md-12">
                    <label for="anganwadi_3" class="form-label">સ્ટાફની હાજરીની વિગતો</label>
                    <input type="text" class="form-control" name="anganwadi_3" placeholder="">
                </div>
						<div class="col-md-12">
                    <label for="anganwadi_4" class="form-label">બાળકોની નોંધણી સંખ્યા સંબંધિત વિગતો</label>
                    <input type="text" class="form-control" name="anganwadi_4" placeholder="">
                </div>
						<div class="col-md-12">
                    <label for="anganwadi_5" class="form-label">બાળકોની વાસ્તવિક હાજરી સંબંધિત વિગતો</label>
                    <input type="text" class="form-control" name="anganwadi_5" placeholder="">
                </div>
					<div class="col-md-12">
                    <label for="anganwadi_6" class="form-label">બાળકોને આંગણવાડીમાં મેનુ પ્રમાણે ગરમ નાસ્તાના વિતરણ અંગેની ચકાસણી</label>
                      <select class="form-select" aria-label="Default select example" name="anganwadi_6">
              <option value="" disabled selected></option>
              <option value="yes">Yes</option>
              <option value="no">No</option>
              <!-- Add more options as needed -->
            </select>
                </div>
						<div class="col-md-12">
                    <label for="anganwadi_6v" class="form-label">વિગત</label>
                    <input type="text" class="form-control" name="anganwadi_6v" placeholder="">
                </div>
					<div class="col-md-12">
                    <label for="anganwadi_7" class="form-label">સગર્ભા/સ્તનપાન કરાવતી માતાઓનાં થયેલ રજીસ્ટ્રેશનની સંખ્યા</label>
                    <input type="text" class="form-control" name="anganwadi_7" placeholder="">
                </div>
					<div class="col-md-12">
                    <label for="anganwadi_8" class="form-label">રક્તની ઉણપ ધરાવતી સગર્ભા/ધાત્રી માતાઓની સંખ્યા</label>
                    <input type="text" class="form-control" name="anganwadi_8" placeholder="">
                </div>
					<div class="col-md-12">
                    <label for="anganwadi_9" class="form-label">પ્રધાનમંત્રી માતૃ વંદાના યોજના હેઠળ દર મહિને મમતા દિવસના રોજ કરાતા ચેક-અપની વિગતો</label>
                    <input type="text" class="form-control" name="anganwadi_9" placeholder="">
                </div>
					<div class="col-md-12">
                    <label for="anganwadi_10" class="form-label">સગર્ભા/ધાત્રી માતાઓ તેમજ કિશોર વયની બાળકીઓ માટે ટેક-હોમ રાશનના પુરવઠા અને વહેંચણી સંબંધિત વિગતોની ચકાસણી</label>
                    <input type="text" class="form-control" name="anganwadi_10" placeholder="">
                </div>
						<div class="col-md-12">
                    <label for="anganwadi_11" class="form-label">મુખ્યમંત્રી માતૃશક્તિ યોજના અન્વયે કિટના વિતરણ સંબંધિત વિગતો</label>
                    <input type="text" class="form-control" name="anganwadi_11" placeholder="">
                </div>
						<div class="col-md-12">
                    <label for="anganwadi_12" class="form-label">બાળકોનું માસિક પરીક્ષણ-ઊંચાઈ અને વજનની માપણીની નિયમીતતા</label>
                    <input type="text" class="form-control" name="anganwadi_12" placeholder="">
                </div>
						<div class="col-md-12">
                    <label for="anganwadi_13" class="form-label">પાંચ બાળકોના વજન અને ઊંચાઈની માપણી અને પોષણ ટ્રેકરના છેલ્લા અદ્યતન ડેટા સાથે તેની સરખામણી</label>
                </div>
						<div class="col-md-4 col-sm-4">
                    <label for="anganwadi_13w1" class="form-label">૧. વજન</label>
                    <input type="text" class="form-control" name="anganwadi_13w1" placeholder="">
                </div>
						<div class="col-md-4 col-sm-4">
                    <label for="anganwadi_13h1" class="form-label">ઊંચાઈ</label>
                    <input type="text" class="form-control" name="anganwadi_13h1" placeholder="">
                </div>
					<div class="col-md-4 col-sm-4">
                    <label for="anganwadi_13pt1" class="form-label">પોષણ ટ્રેકર</label>
                    <input type="text" class="form-control" name="anganwadi_13pt1" placeholder="">
                </div>
					<div class="col-md-4 col-sm-4">
                    <label for="anganwadi_13w2" class="form-label">૨. વજન</label>
                    <input type="text" class="form-control" name="anganwadi_13w2" placeholder="">
                </div>
						<div class="col-md-4 col-sm-4">
                    <label for="anganwadi_13h2" class="form-label">ઊંચાઈ</label>
                    <input type="text" class="form-control" name="anganwadi_13h2" placeholder="">
                </div>
					<div class="col-md-4 col-sm-4">
                    <label for="anganwadi_13pt2" class="form-label">પોષણ ટ્રેકર</label>
                    <input type="text" class="form-control" name="anganwadi_13pt2" placeholder="">
                </div>
					<div class="col-md-4 col-sm-4">
                    <label for="anganwadi_13w3" class="form-label">૩. વજન</label>
                    <input type="text" class="form-control" name="anganwadi_13w3" placeholder="">
                </div>
						<div class="col-md-4 col-sm-4">
                    <label for="anganwadi_13h3" class="form-label">ઊંચાઈ</label>
                    <input type="text" class="form-control" name="anganwadi_13h3" placeholder="">
                </div>
					<div class="col-md-4 col-sm-4">
                    <label for="anganwadi_13pt3" class="form-label">પોષણ ટ્રેકર</label>
                    <input type="text" class="form-control" name="anganwadi_13pt3" placeholder="">
                </div>
					<div class="col-md-4 col-sm-4">
                    <label for="anganwadi_13w4" class="form-label">૪. વજન</label>
                    <input type="text" class="form-control" name="anganwadi_13w4" placeholder="">
                </div>
						<div class="col-md-4 col-sm-4">
                    <label for="anganwadi_13h4" class="form-label">ઊંચાઈ</label>
                    <input type="text" class="form-control" name="anganwadi_13h4" placeholder="">
                </div>
					<div class="col-md-4 col-sm-4">
                    <label for="anganwadi_13pt4" class="form-label">પોષણ ટ્રેકર</label>
                    <input type="text" class="form-control" name="anganwadi_13pt4" placeholder="">
                </div>
					<div class="col-md-4 col-sm-4">
                    <label for="anganwadi_13w5" class="form-label">૫. વજન</label>
                    <input type="text" class="form-control" name="anganwadi_13w5" placeholder="">
                </div>
						<div class="col-md-4 col-sm-4">
                    <label for="anganwadi_13h5" class="form-label">ઊંચાઈ</label>
                    <input type="text" class="form-control" name="anganwadi_13h5" placeholder="">
                </div>
					<div class="col-md-4 col-sm-4">
                    <label for="anganwadi_13pt5" class="form-label">પોષણ ટ્રેકર</label>
                    <input type="text" class="form-control" name="anganwadi_13pt5" placeholder="">
                </div>
						<div class="col-md-12">
                    <label for="anganwadi_14" class="form-label">ઉપલ્બધ ઉપકરણોનું પરિક્ષણ, ચકાસણી અને એકંદરે અભિપ્રાય</label>
                    <input type="text" class="form-control" name="anganwadi_14" placeholder="">
                </div>
						<div class="col-md-12">
                    <label for="anganwadi_15" class="form-label">ટ્રાયબલ તાલુકામાં આપવામાં આવતી દૂધ સંજીવની યોજના અંગેની વિગતો</label>
                    <input type="text" class="form-control" name="anganwadi_15" placeholder="">
                </div>
				
	<div class="col-md-12">
                    <label for="anganwadi_16" class="form-label">આંગણવાડીનુ મકાન પોતાનુ છે /ભાડે રાખેલ છે કે કેમ?</label>
                    <select class="form-select" aria-label="Default select example" name="anganwadi_16">
              <option value="" disabled selected></option>
              <option value="own">પોતાનું</option>
              <option value="rent">ભાડે</option>
              <!-- Add more options as needed -->
            </select>
                </div>
					
						<div class="col-md-12">
                    <label for="anganwadi_17" class="form-label">આંગણવાડીના મકાનમા રીપેરીગની કોઇ જરુરીયાત છે કે કેમ?</label>
                    <select class="form-select" aria-label="Default select example" name="anganwadi_17">
              <option value="" disabled selected></option>
              <option value="yes">Yes</option>
              <option value="no">No</option>
              <!-- Add more options as needed -->
            </select>
                </div>
						<div class="col-md-12">
                    <label for="anganwadi_17v" class="form-label">વિગત</label>
                    <input type="text" class="form-control" name="anganwadi_17v" placeholder="">
                </div>
					<div class="col-md-12">
                    <label for="anganwadi_18" class="form-label">કલર કોર્ડીગ પ્રમાણે બાળકોની સંખ્યા ?</label>
                </div>
						<div class="col-md-4">
                    <label for="anganwadi_18g" class="form-label">ગ્રીન</label>
                    <input type="text" class="form-control" name="anganwadi_18g" placeholder="">
                </div>
						<div class="col-md-4">
                    <label for="anganwadi_18y" class="form-label">યલો</label>
                    <input type="text" class="form-control" name="anganwadi_18y" placeholder="">
                </div>
						<div class="col-md-4">
                    <label for="anganwadi_18r" class="form-label">રેડ</label>
                    <input type="text" class="form-control" name="anganwadi_18r" placeholder="">
                </div>
							<div class="col-md-12">
                    <label for="anganwadi_19" class="form-label">સ્ટેડીયો મીટર,ઇન્ફેન્ટો મીટર,સોલ્ટર સ્કેલ અથવા ઇલેકટ્રોનીક વેંઇગ મશીન ચાલુ હાલતમા છે કે કેમ?</label>
                    <select class="form-select" aria-label="Default select example" name="anganwadi_19">
              <option value="" disabled selected></option>
              <option value="yes">Yes</option>
              <option value="no">No</option>
              <!-- Add more options as needed -->
            </select>
                </div>
						<div class="col-md-12">
                    <label for="anganwadi_19v" class="form-label">વિગત</label>
                    <input type="text" class="form-control" name="anganwadi_19v" placeholder="">
                </div>
							<!-- <div class="col-md-12">
                    <label for="anganwadi_19" class="form-label">ટેકહોમ રાશનનુ રજીસ્ટર નિભાવેલ છે કે કેમ?</label>
                    <select class="form-select" aria-label="Default select example" name="anganwadi_19">
              <option value="" disabled selected></option>
              <option value="yes">Yes</option>
              <option value="no">No</option>
              <!-- Add more options as needed -->
            <!-- </select>
                </div> -->
								<div class="col-md-12">
                    <label for="anganwadi_20" class="form-label">છેલ્લા ૩ માસની મારી વિકાસ યાત્રા બુક કાર્યકરશ્રી ધ્વારા ભરેલ છે કે કેમ?</label>
                    <select class="form-select" aria-label="Default select example" name="anganwadi_20">
              <option value="" disabled selected></option>
              <option value="yes">Yes</option>
              <option value="no">No</option>
              <!-- Add more options as needed -->
            </select>
                </div>
						<div class="col-md-12">
                    <label for="anganwadi_20v" class="form-label">વિગત</label>
                    <input type="text" class="form-control" name="anganwadi_20v" placeholder="">
                </div>
							<div class="col-md-12">
                    <label for="anganwadi_21" class="form-label">કાર્યકરશ્રીના મોબાઇલમા પોષણ ટ્રેકર એપ્લીકેશન ઉપલબ્ધ છે કે કેમ?</label>
                    <select class="form-select" aria-label="Default select example" name="anganwadi_21">
              <option value="" disabled selected></option>
              <option value="yes">Yes</option>
              <option value="no">No</option>
              <!-- Add more options as needed -->
            </select>
                </div>
					<div class="col-md-12">
                    <label for="anganwadi_21v" class="form-label">વિગત</label>
                    <input type="text" class="form-control" name="anganwadi_21v" placeholder="">
                </div>
							<div class="col-md-12">
                    <label for="anganwadi_22" class="form-label">તમામ મોડયુલની એન્ટ્રી તથા બાળકોના વજન,ઉંચાઇની એન્ટ્રી કરવામા આવે છે કે કેમ?</label>
                    <select class="form-select" aria-label="Default select example" name="anganwadi_22">
              <option value="" disabled selected></option>
              <option value="yes">Yes</option>
              <option value="no">No</option>
              <!-- Add more options as needed -->
            </select>
                </div>
					<div class="col-md-12">
                    <label for="anganwadi_22v" class="form-label">વિગત</label>
                    <input type="text" class="form-control" name="anganwadi_22v" placeholder="">
                </div>
				<div class="col-md-12">
                    <label for="anganwadi_23" class="form-label">એનીમીયા વાળી કિશોરીઓની સંખ્યા?</label>
                    <input type="text" class="form-control" name="anganwadi_23" placeholder="">
                </div>
						
				<div class="col-md-12">
                    <label for="anganwadi_24" class="form-label">અન્ય કોઇ સાધનસામગ્રીની જરુરીયાત છે કે કેમ?</label>
                    <select class="form-select" aria-label="Default select example" name="anganwadi_24">
              <option value="" disabled selected></option>
              <option value="yes">Yes</option>
              <option value="no">No</option>
              <!-- Add more options as needed -->
            </select>
                </div>
						<div class="col-md-12">
                    <label for="anganwadi_24v" class="form-label">વિગત</label>
                    <input type="text" class="form-control" name="anganwadi_24v" placeholder="">
                </div>
										<div class="col-md-12">
                    <label for="anganwadi_25" class="form-label">અન્ય બાબત</label>
                    <input type="text" class="form-control" name="anganwadi_25" placeholder="">
                </div>
				</div>
				                <button type="button" class="btn btn-secondary" onclick="window.location='revenue-questions.php';">Previous</button>
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
            $("#nextButton").on("click", function(event) {
                event.preventDefault();
                window.location.href = "{{ route('supply-questions-index') }}";
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
                        url: "{{ route('anganwadi-questions.store') }}",
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