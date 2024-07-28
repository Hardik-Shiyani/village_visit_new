<!DOCTYPE html>
<html lang="en">

@include('head')
@include('main-header')
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
                            <select class="form-select" aria-label="Default select example" name="electric_1">
                              <option value="" disabled selected></option>
                              <option value="yes">Yes</option>
                              <option value="no">No</option>
                              <!-- Add more options as needed -->
                            </select>
                        </div>
                        <div class="col-md-12">
                            <label for="electric_1v" class="form-label">વિગત</label>
                            <input type="text" class="form-control" name="electric_1v" placeholder="">
                        </div>
                        <div class="col-md-12">
                            <label for="electric_2" class="form-label">GEB/UGVCL વીજ પુરવઠા બાબતે સમસ્યાઓ/પ્રશ્નોના નિરાકરણ માટે કોઇ વ્યવસ્થા છે કે, કેમ ?</label>
                            <select class="form-select" aria-label="Default select example" name="electric_2">
                              <option value="" disabled selected></option>
                              <option value="yes">Yes</option>
                              <option value="no">No</option>
                              <!-- Add more options as needed -->
                            </select>
                        </div>
                        <div class="col-md-12">
                            <label for="electric_2v" class="form-label">વિગત</label>
                            <input type="text" class="form-control" name="electric_2v" placeholder="">
                        </div>
                        <div class="col-md-12">
                            <label for="electric_3" class="form-label">નવુ લાઇટ કનેક્શન લેવા માટે ગ્રામજનોને માહિતી પુરી પાડવામાં આવે છે કે, કેમ?</label>
                            <select class="form-select" aria-label="Default select example" name="electric_3">
                              <option value="" disabled selected></option>
                              <option value="yes">Yes</option>
                              <option value="no">No</option>
                              <!-- Add more options as needed -->
                            </select>
                        </div>
                        <div class="col-md-12">
                            <label for="electric_3v" class="form-label">વિગત</label>
                            <input type="text" class="form-control" name="electric_3v" placeholder="">
                        </div>
                        <div class="col-md-12">
                            <label for="electric_4" class="form-label">અન્ય બાબત</label>
                            <input type="text" class="form-control" name="electric_4" placeholder="">
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
                    window.location.href = "{{ route('water-questions-index') }}";
                });
                
                $("#nextButton").on("click", function(event) {
                    event.preventDefault();
                    window.location.href = "{{ route('road-questions-index') }}";
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
                            url: "{{ route('electricity-questions.store') }}",
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