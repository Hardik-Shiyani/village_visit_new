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
                                <form id="surveyForm" name="Polution Questions">

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
                <select class="form-select" aria-label="Default select example" name="polution_1" id="polution_1">
                    <option value="" disabled selected></option>
                    <option value="yes">Yes</option>
                    <option value="no">No</option>
                </select>
            </div>
            <div class="col-md-12">
                <label for="polution_1v" class="form-label">વિગત</label>
                <input type="text" class="form-control" name="polution_1v" id="polution_1v" placeholder="">
            </div>
            <div class="col-md-12">
                <label for="polution_2" class="form-label">ગામમા પ્રદુષણ અંગે કોઇ પ્રશ્ન છે કે કેમ?</label>
                <select class="form-select" aria-label="Default select example" name="polution_2" id="polution_2">
                    <option value="" disabled selected></option>
                    <option value="yes">Yes</option>
                    <option value="no">No</option>
                </select>
            </div>
            <div class="col-md-12">
                <label for="polution_2v" class="form-label">વિગત</label>
                <input type="text" class="form-control" name="polution_2v" id="polution_2v" placeholder="">
            </div>
            <div class="col-md-12">
                <label for="polution_3" class="form-label">ગામમાં આવેલ જી.આઈ.ડી.સી/ કોઈ ફેક્ટરી દ્રારા છોડવામાં આવતા કેમિકલ યુક્ત પાણીનો નિકાલ યોગ્ય રીતે થાય છે કે, કેમ?</label>
                <select class="form-select" aria-label="Default select example" name="polution_3" id="polution_3">
                    <option value="" disabled selected></option>
                    <option value="yes">Yes</option>
                    <option value="no">No</option>
                </select>
            </div>
            <div class="col-md-12">
                <label for="polution_3v" class="form-label">વિગત</label>
                <input type="text" class="form-control" name="polution_3v" id="polution_3v" placeholder="">
            </div>
            <div class="col-md-12">
                <label for="polution_4" class="form-label">ગામમાં આવેલ જી.આઈ.ડી.સી/કોઈ ફેક્ટરી IUDASTUICAL SAFETY AUDIT થાય છે કે, કેમ?</label>
                <select class="form-select" aria-label="Default select example" name="polution_4" id="polution_4">
                    <option value="" disabled selected></option>
                    <option value="yes">Yes</option>
                    <option value="no">No</option>
                </select>
            </div>
            <div class="col-md-12">
                <label for="polution_4v" class="form-label">વિગત</label>
                <input type="text" class="form-control" name="polution_4v" id="polution_4v" placeholder="">
            </div>
            <div class="col-md-12">
                <label for="polution_5" class="form-label">અન્ય બાબત</label>
                <input type="text" class="form-control" name="polution_5" placeholder="">
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
                    window.location.href = "{{ route('cleanliness-questions-index') }}";
                });
                
                $("#nextButton").on("click", function(event) {
                    event.preventDefault();
                    window.location.href = "{{ route('revenue-questions-index') }}";
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
                            url: "{{ route('polution-questions.store') }}",
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

    <script>
        document.addEventListener('DOMContentLoaded', function() {
            const selects = [
                { select: 'polution_1', input: 'polution_1v' },
                { select: 'polution_2', input: 'polution_2v' },
                { select: 'polution_3', input: 'polution_3v' },
                { select: 'polution_4', input: 'polution_4v' },
            ];
            selects.forEach(pair => {
                const selectElement = document.getElementById(pair.select);
                const inputElement = document.getElementById(pair.input);

                selectElement.addEventListener('change', function() {
                    if (selectElement.value === 'yes') {
                        inputElement.required = true;
                        inputElement.focus();
                    } else {
                        inputElement.required = false;
                    }
                });
            });
        });
    </script>

</body>
@include ('main-footer')
</html>