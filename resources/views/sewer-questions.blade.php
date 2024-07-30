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
              <form id="surveyForm" name="Sewer Questions">
                  <div class="step active">
                      <div class="row">
                        <h5 class="card-title text-center fs-4">ગટર બાબતના પ્રશ્નો</h5>
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
                            <label for="sewer_1" class="form-label">ગામમાં ગટર લાઇન છે કે, કેમ?</label>
                            <select class="form-select" aria-label="Default select example" name="sewer_1">
                              <option value="" disabled selected></option>
                              <option value="yes">Yes</option>
                              <option value="no">No</option>
                              <!-- Add more options as needed -->
                            </select>
                        </div>
                        <div class="col-md-12">
                            <label for="sewer_1v" class="form-label">વિગત</label>
                            <input type="text" class="form-control" name="sewer_1v" placeholder="">
                        </div>
                        <div class="col-md-12">
                            <label for="sewer_2" class="form-label">નવી ગટર લાઇનની જરૂરીયાત છે કે, કેમ?</label>
                            <select class="form-select" aria-label="Default select example" name="sewer_2">
                              <option value="" disabled selected></option>
                              <option value="yes">Yes</option>
                              <option value="no">No</option>
                              <!-- Add more options as needed -->
                            </select>
                        </div>
                        <div class="col-md-12">
                            <label for="sewer_2v" class="form-label">વિગત</label>
                            <input type="text" class="form-control" name="sewer_2v" placeholder="">
                        </div>
                        <div class="col-md-12">
                            <label for="sewer_3" class="form-label">અધુરી ગટર લાઇન પુર્ણ કરવામાં આવેલ છે કે, કેમ?</label>
                            <select class="form-select" aria-label="Default select example" name="sewer_3">
                              <option value="" disabled selected></option>
                              <option value="yes">Yes</option>
                              <option value="no">No</option>
                              <!-- Add more options as needed -->
                            </select>
                        </div>
                        <div class="col-md-12">
                            <label for="sewer_3v" class="form-label">વિગત</label>
                            <input type="text" class="form-control" name="sewer_3v" placeholder="">
                        </div>
                        <div class="col-md-12">
                            <label for="sewer_4" class="form-label">ગટર લાઇનની ચોમાસા પહેલા સાફ સફાઇ કરવામાં આવે છે કે, કેમ?</label>
                            <select class="form-select" aria-label="Default select example" name="sewer_4">
                              <option value="" disabled selected></option>
                              <option value="yes">Yes</option>
                              <option value="no">No</option>
                              <!-- Add more options as needed -->
                            </select>
                        </div>
                        <div class="col-md-12">
                            <label for="sewer_4v" class="form-label">વિગત</label>
                            <input type="text" class="form-control" name="sewer_4v" placeholder="">
                        </div>
                        <div class="col-md-12">
                            <label for="sewer_5" class="form-label">ગટર ચોકઅપના કોઇ પ્રશ્નો છે કે કેમ?</label>
                            <select class="form-select" aria-label="Default select example" name="sewer_5">
                              <option value="" disabled selected></option>
                              <option value="yes">Yes</option>
                              <option value="no">No</option>
                              <!-- Add more options as needed -->
                            </select>
                        </div>
                        <div class="col-md-12">
                            <label for="sewer_5v" class="form-label">વિગત</label>
                            <input type="text" class="form-control" name="sewer_5v" placeholder="">
                        </div>
                        <div class="col-md-12">
                            <label for="sewer_6" class="form-label">પીવાના પાણી અને ગટરની લઈને સાથે નંખાયેલ અને તૂટી ગયેલ નથી તેની તકેદારી રાખવામાં આવે છે કે કેમ?</label>
                            <select class="form-select" aria-label="Default select example" name="sewer_6">
                              <option value="" disabled selected></option>
                              <option value="yes">Yes</option>
                              <option value="no">No</option>
                              <!-- Add more options as needed -->
                            </select>
                        </div>
                        <div class="col-md-12">
                            <label for="sewer_6v" class="form-label">વિગત</label>
                            <input type="text" class="form-control" name="sewer_6v" placeholder="">
                        </div>
                        <div class="col-md-12">
                            <label for="sewer_7" class="form-label">અન્ય બાબત</label>
                            <input type="text" class="form-control" name="sewer_7" placeholder="">
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
                window.location.href = "{{ route('road-questions-index') }}";
            });

            $("#nextButton").on("click", function(event) {
                event.preventDefault();
                window.location.href = "{{ route('cleanliness-questions-index') }}";
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
                        url: "{{ route('sewer-questions.store') }}",
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