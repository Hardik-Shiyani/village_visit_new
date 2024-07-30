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
            <form id="surveyForm" name="Supply Questions" enctype="multipart/form-data">
              <!-- Step 5 -->
              <div class="step active">
                  <div class="row">
                    <h5 class="card-title text-center fs-4">પુરવઠાને બાબતના પ્રશ્નો</h5>
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
                        <label for="supply_1" class="form-label">ગામમા માઇગ્રેટ થઇ આવેલા લોકો/ મજુર વર્ગને રાશન આપવા આવે છે કે, કેમ? (ONOR અંતર્ગત)</label>
                        <select class="form-select" aria-label="Default select example" name="supply_1">
                          <option value="" disabled selected></option>
                          <option value="yes">Yes</option>
                          <option value="no">No</option>
                          <!-- Add more options as needed -->
                        </select>
                    </div>
                    <div class="col-md-12">
                        <label for="supply_1v" class="form-label">વિગત</label>
                        <input type="text" class="form-control" name="supply_1v" placeholder="">
                    </div>
                    <div class="col-md-12">
                        <label for="supply_2" class="form-label">અનાજમાં ઘટ આવે છે કે,  કેમ?</label>
                        <select class="form-select" aria-label="Default select example" name="supply_2">
                          <option value="" disabled selected></option>
                          <option value="yes">Yes</option>
                          <option value="no">No</option>
                          <!-- Add more options as needed -->
                        </select>
                    </div>
                    <div class="col-md-12">
                        <label for="supply_2v" class="form-label">વિગત</label>
                        <input type="text" class="form-control" name="supply_2v" placeholder="">
                    </div>
                    <div class="col-md-12">
                        <label for="supply_3" class="form-label">રેશન કાર્ડમાં KYC કરાવવા માટે મામલતદાર કચેરીએ આવવુ પડે છે કે, કેમ?</label>
                        <select class="form-select" aria-label="Default select example" name="supply_3">
                          <option value="" disabled selected></option>
                          <option value="yes">Yes</option>
                          <option value="no">No</option>
                          <!-- Add more options as needed -->
                        </select>
                    </div>
                    <div class="col-md-12">
                        <label for="supply_3v" class="form-label">વિગત</label>
                        <input type="text" class="form-control" name="supply_3v" placeholder="">
                    </div>
                    <div class="col-md-12">
                        <label for="supply_4" class="form-label">અનાજની ગુણવત્તા અને ઉપલબ્ધતા તેમજ અનાજની જાળવણી અંગેની  વિગતો</label>
                        <input type="text" class="form-control" name="supply_4" placeholder="">
                    </div>
                    <div class="col-md-12">
                        <label for="supply_5" class="form-label">NFSA યોજના અંતર્ગત નોંધાયેલ કાર્ડ ની સંખ્યા</label>
                        <input type="text" class="form-control" name="supply_5" placeholder="">
                    </div>
                    <!-- <div class="col-md-12">
                        <label for="supply_5" class="form-label">અંત્યોદય અન્ન યોજના અંતર્ગત નોંધાયેલ કાર્ડની સંખ્યા</label>
                        <input type="text" class="form-control" name="supply_5" placeholder="">
                        </div> -->
                    <div class="col-md-12">
                        <label for="supply_6" class="form-label">પ્રધાનમંત્રી ગરીબ કલ્યાણ અન્ન યોજના અંતર્ગત નિયમિત વિતરણ થાય છે કે કેમ તે અંગેનો અભિપ્રાય</label>
                        <input type="text" class="form-control" name="supply_6" placeholder="">
                    </div>
                    <div class="col-md-12">
                        <label for="supply_7" class="form-label">છેલ્લા ત્રણ મહિનામાં માસવાર ઓફલાઈ અનાજ મેળવતાં લાભાર્થીઓની સંખ્યા</label>
                        <input type="text" class="form-control" name="supply_7" placeholder="">
                    </div>
                    <div class="col-md-12">
                        <label for="supply_8" class="form-label">FPS સમયસર ખુલે છે કે કેમ?</label>
                        <select class="form-select" aria-label="Default select example" name="supply_8">
                          <option value="" disabled selected></option>
                          <option value="yes">Yes</option>
                          <option value="no">No</option>
                          <!-- Add more options as needed -->
                        </select>
                    </div>
                    <div class="col-md-12">
                        <label for="supply_8v" class="form-label">વિગત</label>
                        <input type="text" class="form-control" name="supply_8v" placeholder="">
                    </div>
                    <div class="col-md-12">
                        <label for="supply_9" class="form-label">લાભાર્થીઓ/ગ્રામજનો પાસેથી ૫ કિલોગ્રામ મફત અનાજ વિતરણ સંબંધિત પ્રતિભાવ</label>
                        <input type="text" class="form-control" name="supply_9" placeholder="">
                    </div>
                    <div class="col-md-12">
                        <label for="supply_10" class="form-label">વ્યાજબી ભાવની દુકાનની ચકાસણી નિયત નમુનાના ફોર્મમા થયેલ છે કે કેમ?</label>
                        <select class="form-select" aria-label="Default select example" name="supply_10">
                          <option value="" disabled selected></option>
                          <option value="yes">Yes</option>
                          <option value="no">No</option>
                          <!-- Add more options as needed -->
                        </select>
                    </div>
                    <div class="col-md-12">
                        <label for="supply_10v" class="form-label">છેલ્લી ચકાસણી ની તારીખ</label>
                        <input type="text" class="form-control" name="supply_10v" placeholder="">
                    </div>
                    <div class="col-md-12">
                        <label for="supply_11" class="form-label">ગ્રામ્ય તકેદારી સમિતિ નિયમિત થાય છે કે કેમ ?</label>
                        <select class="form-select" aria-label="Default select example" name="supply_11">
                          <option value="" disabled selected></option>
                          <option value="yes">Yes</option>
                          <option value="no">No</option>
                          <!-- Add more options as needed -->
                        </select>
                    </div>
                    <div class="col-md-12">
                        <label for="supply_11v" class="form-label">વિગત</label>
                        <input type="text" class="form-control" name="supply_11v" placeholder="">
                    </div>
                    <div class="col-md-12">
                        <label class="form-label" for="villagephoto">Photo Upload of Village</label>
                        <input type="file" class="form-control" name="villagephoto" accept="image/*" />
                    </div>
                    <div class="col-md-12">
                        <label for="supply_12" class="form-label">અન્ય બાબત</label>
                        <input type="text" class="form-control" name="supply_12" placeholder="">
                    </div>
                  </div>
                  <button type="button" class="btn btn-secondary" id="previousButton">Previous</button>
                  <button type="submit" class="btn btn-success" onclick="saveForm()">Save</button>
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
                window.location.href = "{{ route('education-questions-index') }}";
            });

            $("#nextButton").on("click", function(event) {
                event.preventDefault();
                window.location.href = "{{ route('water-questions-index') }}";
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
                      url: "{{ route('supply-questions.store') }}",
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