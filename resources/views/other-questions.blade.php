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
        <form id="surveyForm" enctype="multipart/form-data">
     			<!-- Step 16-->
			<div class="step active">
				<div class="row">
					<h5 class="card-title text-center fs-4">અન્ય બાબતના પ્રશ્નો</h5>
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
                    <label for="anotherthing_1" class="form-label">ગામમા ગેસ પાઇપલાઇન છે કે કેમ?</label>
                    <select class="form-select" aria-label="Default select example" name="anotherthing_1">
              <option value="" disabled selected></option>
              <option value="yes">Yes</option>
              <option value="no">No</option>
              <!-- Add more options as needed -->
            </select>
                </div>
					<div class="col-md-12">
                    <label for="anotherthing_1v" class="form-label">વિગત</label>
                    <input type="text" class="form-control" name="anotherthing_1v" placeholder="">
                </div>
							<div class="col-md-12">
                    <label for="anotherthing_2" class="form-label">ગામમા ગેસ એજન્સી દ્વારા નિયમિત નોંધણી કરાવ્યા બાદ ગેસના સીલીન્ડરની  સમયસર ડીલીવરી કરવામાં આવે છે કે, કેમ?</label>
                    <select class="form-select" aria-label="Default select example" name="anotherthing_2">
              <option value="" disabled selected></option>
              <option value="yes">Yes</option>
              <option value="no">No</option>
              <!-- Add more options as needed -->
            </select>
                </div>
					<div class="col-md-12">
                    <label for="anotherthing_2v" class="form-label">વિગત</label>
                    <input type="text" class="form-control" name="anotherthing_2v" placeholder="">
                </div>
							<div class="col-md-12">
                    <label for="anotherthing_3" class="form-label">ગામમા જાહેર સૌચાલયનો પ્રશ્ન છે કે, કેમ?</label>
                    <select class="form-select" aria-label="Default select example" name="anotherthing_3">
              <option value="" disabled selected></option>
              <option value="yes">Yes</option>
              <option value="no">No</option>
              <!-- Add more options as needed -->
            </select>
                </div>
					<div class="col-md-12">
                    <label for="anotherthing_3v" class="form-label">વિગત</label>
                    <input type="text" class="form-control" name="anotherthing_2v" placeholder="">
                </div>
							<!-- <div class="col-md-12">
                    <label for="anotherthing_4" class="form-label">ગામમા સ્માશાન માટે સ્મશાન ગૃહ અંગેનો શેડ છે કે, કેમ?</label>
                    <select class="form-select" aria-label="Default select example" name="anotherthing_4">
              <option value="" disabled selected></option>
              <option value="yes">Yes</option>
              <option value="no">No</option>
              <!-- Add more options as needed -->
            <!-- </select>
                </div> -->
							<div class="col-md-12">
                    <label for="anotherthing_4" class="form-label">ગામમા ખેતી માટે પાણીના સિચાઇનો પ્રશ્ન છે કે, કેમ?</label>
                    <select class="form-select" aria-label="Default select example" name="anotherthing_4">
              <option value="" disabled selected></option>
              <option value="yes">Yes</option>
              <option value="no">No</option>
              <!-- Add more options as needed -->
            </select>
                </div>
					<div class="col-md-12">
                    <label for="anotherthing_4v" class="form-label">વિગત</label>
                    <input type="text" class="form-control" name="anotherthing_4v" placeholder="">
                </div>
						<div class="col-md-12">
                    <label for="anotherthing_5" class="form-label">કોઇ સિંચાઇની કેનાલ અધુરી છે કે, કેમ?</label>
                    <select class="form-select" aria-label="Default select example" name="anotherthing_5">
              <option value="" disabled selected></option>
              <option value="yes">Yes</option>
              <option value="no">No</option>
              <!-- Add more options as needed -->
            </select>
                </div>
					<div class="col-md-12">
                    <label for="anotherthing_5v" class="form-label">વિગત</label>
                    <input type="text" class="form-control" name="anotherthing_5v" placeholder="">
                </div>
						<div class="col-md-12">
                    <label for="anotherthing_6" class="form-label">નવી કેનાલની જરૂરીયાત?</label>
                    <select class="form-select" aria-label="Default select example" name="anotherthing_6">
              <option value="" disabled selected></option>
              <option value="yes">Yes</option>
              <option value="no">No</option>
              <!-- Add more options as needed -->
            </select>
                </div>
					<div class="col-md-12">
                    <label for="anotherthing_6v" class="form-label">વિગત</label>
                    <input type="text" class="form-control" name="anotherthing_6v" placeholder="">
                </div>
						<div class="col-md-12">
                    <label for="anotherthing_7" class="form-label">ગામમા ખેતી માટેના કોઇ પ્રશ્નો છે કે, કેમ?</label>
                    <select class="form-select" aria-label="Default select example" name="anotherthing_7">
              <option value="" disabled selected></option>
              <option value="yes">Yes</option>
              <option value="no">No</option>
              <!-- Add more options as needed -->
            </select>
                </div>
					<div class="col-md-12">
                    <label for="anotherthing_7v" class="form-label">વિગત</label>
                    <input type="text" class="form-control" name="anotherthing_7v" placeholder="">
                </div>
						<div class="col-md-12">
                    <label for="anotherthing_8" class="form-label">ગામમા ગ્રામ સેવક દ્વારા સરકારશ્રીની ખેતી વિષયકની યોજનાઓની માહીતી પુરી પાડવામાં આવે છે કે, કેમ?</label>
                    <select class="form-select" aria-label="Default select example" name="anotherthing_8">
              <option value="" disabled selected></option>
              <option value="yes">Yes</option>
              <option value="no">No</option>
              <!-- Add more options as needed -->
            </select>
                </div>
					<div class="col-md-12">
                    <label for="anotherthing_8v" class="form-label">વિગત</label>
                    <input type="text" class="form-control" name="anotherthing_8v" placeholder="">
                </div>
						<div class="col-md-12">
                    <label for="anotherthing_9" class="form-label">ગામમા ખેતીના ઓજારો/ સાધનો પર સરકારશ્રી દ્વારા આપવામાં આવતી સબસીડી બાબતે કોઇ પ્રશ્નો છે કે, કેમ?</label>
                    <select class="form-select" aria-label="Default select example" name="anotherthing_9">
              <option value="" disabled selected></option>
              <option value="yes">Yes</option>
              <option value="no">No</option>
              <!-- Add more options as needed -->
            </select>
                </div>
					<div class="col-md-12">
                    <label for="anotherthing_9v" class="form-label">વિગત</label>
                    <input type="text" class="form-control" name="anotherthing_9v" placeholder="">
                </div>
						<div class="col-md-12">
                    <label for="anotherthing_10" class="form-label">ગામમા ઢોર વાડા બાબતે કોઇ પ્રશ્ન છે કે, કેમ?</label>
                    <select class="form-select" aria-label="Default select example" name="anotherthing_10">
              <option value="" disabled selected></option>
              <option value="yes">Yes</option>
              <option value="no">No</option>
              <!-- Add more options as needed -->
            </select>
                </div>
					<div class="col-md-12">
                    <label for="anotherthing_10v" class="form-label">વિગત</label>
                    <input type="text" class="form-control" name="anotherthing_10v" placeholder="">
                </div>
						<div class="col-md-12">
                    <label for="anotherthing_11" class="form-label">ગામમા એસ.ટી બસ સ્ટેન્ડ બાબતે કોઇ પ્રશ્ન છે કે, કેમ?</label>
                    <select class="form-select" aria-label="Default select example" name="anotherthing_11">
              <option value="" disabled selected></option>
              <option value="yes">Yes</option>
              <option value="no">No</option>
              <!-- Add more options as needed -->
            </select>
                </div>
					<div class="col-md-12">
                    <label for="anotherthing_11v" class="form-label">વિગત</label>
                    <input type="text" class="form-control" name="anotherthing_11v" placeholder="">
                </div>
					<div class="col-md-12">
                    <label for="anotherthing_12" class="form-label">કોઇ રુટની માંગણી કરેલ છે.</label>
                    <select class="form-select" aria-label="Default select example" name="anotherthing_12">
              <option value="" disabled selected></option>
              <option value="yes">Yes</option>
              <option value="no">No</option>
              <!-- Add more options as needed -->
            </select>
                </div>
					<div class="col-md-12">
                    <label for="anotherthing_12v" class="form-label">વિગત</label>
                    <input type="text" class="form-control" name="anotherthing_12v" placeholder="">
                </div>
						<div class="col-md-12">
                    <label for="anotherthing_13" class="form-label">કોઇ બસ સ્ટોપ ચેન્જ કરવા માટેની માંગણી</label>
                    <select class="form-select" aria-label="Default select example" name="anotherthing_13">
              <option value="" disabled selected></option>
              <option value="yes">Yes</option>
              <option value="no">No</option>
              <!-- Add more options as needed -->
            </select>
                </div>
					<div class="col-md-12">
                    <label for="anotherthing_13v" class="form-label">વિગત</label>
                    <input type="text" class="form-control" name="anotherthing_13v" placeholder="">
                </div>
						<div class="col-md-12">
                    <label for="anotherthing_14" class="form-label">ગામની પોસ્ટ ઓફીસ / બેન્ક દ્વારા  આધાર કાર્ડમાં સુધારા વધારા કરી આપવામાં  કરી આપવામાં આવે છે કે કેમ?</label>
                    <select class="form-select" aria-label="Default select example" name="anotherthing_14">
              <option value="" disabled selected></option>
              <option value="yes">Yes</option>
              <option value="no">No</option>
              <!-- Add more options as needed -->
            </select>
                </div>
					<div class="col-md-12">
                    <label for="anotherthing_14v" class="form-label">વિગત</label>
                    <input type="text" class="form-control" name="anotherthing_14v" placeholder="">
                </div>
						<div class="col-md-12">
                    <label for="anotherthing_15" class="form-label">ગામમા વરસાદી પાણીનો સંગ્રહ્ય કરી તેને ઉપયોગમાં લેવા બાબતે કોઇ સુવિધા છે કે, કેમ?</label>
                    <select class="form-select" aria-label="Default select example" name="anotherthing_15">
              <option value="" disabled selected></option>
              <option value="yes">Yes</option>
              <option value="no">No</option>
              <!-- Add more options as needed -->
            </select>
                </div>
					<div class="col-md-12">
                    <label for="anotherthing_15v" class="form-label">સ્થળ</label>
                    <input type="text" class="form-control" name="anotherthing_15v" placeholder="">
                </div>
					<div class="col-md-12">
                    <label for="anotherthing_16" class="form-label">ગામમાં આવેલ મુખ્ય આકર્ષણનું સ્થળ/ પૌરાણિક સ્થળની વિગત</label>
                   		<input type="file" class="form-control" name="anotherthing_16" accept="image/*" />
                </div>
						<div class="col-md-12">
                    <label for="anotherthing_17" class="form-label">ગામની અન્ય વિશેષતા</label>
                    <input type="file" class="form-control" name="anotherthing_17" accept="image/*" />
                </div>
						 <div class="col-md-12">
                    <label for="anotherthing_18" class="form-label">ગામની અન્ય કોઈ વિશેષ રજૂઆત</label>
                    <input type="text" class="form-control" name="anotherthing_18" placeholder="">
                </div>
				</div>
					<button type="button" class="btn btn-secondary" onclick="window.location='grampanchayat-questions.php';">Previous</button>
                <button type="submit" class="btn btn-success">Submit</button>
				   <div class="row"> <label class="form-label"> નોંધ :<br>
(૧)	ગ્રામની મુલાકાત પહેલા અગાઉથી ગ્રામજનોને તલાટીશ્રી મારફતે પંચાયત ખાતે નિયત સમયે હાજર રહેવાની જાણ કરવાની રહેશે. <br>
(૨)	સદરહું ચેકલીસ્ટના તમામ હોદ્દેદારોએ હાજર રહેવાનું રહેશે. <br>
(૩)	સદરહું મુલાકાતની ફોટોગ્રાફી/વિડિયોગ્રાફી મોબાઈલથી કરીને મોકલવાની રહેશે.<br> 
(૪)	સદરહું ચેકલીસ્ટ મુલાકાતની બીજા દિવસે કલેક્ટર કચેરી ખાતે એડીએમ-૩ શાખા ખાતે ઈ-મેલથી મોકલી આપવાનું રહેશે.	
				  </label>
					</div>
					
		
				               
			</div>
						
				</form>
				
						
           
            </div>
			
			</div>
        

			</div>
  

      <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
        <script>
            $(document).ready(function() {
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
                          url: "{{ route('other-questions.store') }}",
                          type: 'POST',
                          data: formData,
                          processData: false,
                          contentType: false,
                          success: function(response) {
                            window.location.href = "{{ route('supply-questions-index') }}";
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