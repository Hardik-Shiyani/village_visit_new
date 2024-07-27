<!DOCTYPE html>
<html lang="en">
    @include ('head');
    @include ('main-header');
    <?php $page= 'index'; ?> 
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
                            <h5 class="card-title text-center fs-4" id="villagedetails">ગામ ની વિગત</h5>
                            <div class="row">
                                <div class="col-md-4 col-sm-12">
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
                                <div class="col-md-4 col-sm-12">
                                    <label for="validationCustom04">ગામનું નામ:</label>
                                    <select class="form-select" id="validationCustom04" name="activity" required></select>
                                    <div class="invalid-feedback">
                                    Please provide an activity.
                                    </div>
                                </div>
                                <div class="col-md-4 col-sm-12">
                                    <label for="village-total-population" class="form-label">ગામ ની કુલ વસ્તી:</label>
                                    <input type="text" class="form-control" id="village-total-population" placeholder="" required>
                                </div>
                                <div class="col-md-6 col-sm-12">
                                    <label for="sarpanch-name" class="form-label">સરપંચશ્રીનું નામ:</label>
                                    <input type="text" class="form-control" id="sarpanch-name" placeholder="" required>
                                </div>
                                <div class="col-md-6 col-sm-12">
                                    <label for="sarpanch-mobile" class="form-label">મોબાઇલ નં.:</label>
                                    <input type="tel" class="form-control" id="sarpanch-mobile" placeholder="" required>
                                </div>
                                <div class="col-md-6 col-sm-12">
                                    <label for="talati-name" class="form-label">તલાટીશ્રીનું નામ:</label>
                                    <input type="text" class="form-control" id="talati-name" placeholder="" required>
                                </div>
                                <div class="col-md-6 col-sm-12">
                                    <label for="talati-mobile" class="form-label">મોબાઇલ નં.:</label>
                                    <input type="tel" class="form-control" id="talati-mobile" placeholder="" required>
                                </div>
                                <div class="col-md-6 col-sm-12">
                                    <label for="vce-name" class="form-label">VCE શ્રીનું નામ:</label>
                                    <input type="text" class="form-control" id="vce-name" placeholder="" required>
                                </div>
                                <div class="col-md-6 col-sm-12">
                                    <label for="vce-mobile" class="form-label">મોબાઇલ નં.:</label>
                                    <input type="tel" class="form-control" id="vce-mobile" placeholder="" required>
                                </div>
                                <div class="col-md-12 col-sm-12">
                                    <label for="PHC/CHC" class="form-label">PHC/CHC છે કે કેમ?</label>
                                    <select class="form-select" aria-label="Default select example" id="PHC/CHC">
                                    <option value="Yes">Yes</option>
                                    <option value="No">No</option>
                                    <!-- Add more options as needed -->
                                    </select>
                                </div>
                                <div class="col-md-6 col-sm-12">
                                    <label for="medicalofficer-name" class="form-label">મેડિકલ ઓફિસરનું  નામ:</label>
                                    <input type="text" class="form-control" id="medicalofficer-name" placeholder="" required>
                                </div>
                                <div class="col-md-6 col-sm-12">
                                    <label for="medicalofficer-mobile" class="form-label">મોબાઇલ નં.:</label>
                                    <input type="tel" class="form-control" id="medicalofficer-mobile" placeholder="" required>
                                </div>
                                <div class="col-md-6 col-sm-12">
                                    <label for="aanganwadikaryakarta-name1" class="form-label">આંગણવાડી કાર્યકર્તાનું નામ ૧:</label>
                                    <input type="text" class="form-control" id="aanganwadikaryakarta-name1" placeholder="" required>
                                </div>
                                <div class="col-md-6 col-sm-12">
                                    <label for="aanganwadikaryakarta-mobile1" class="form-label">મોબાઇલ નં. ૧:</label>
                                    <input type="tel" class="form-control" id="aanganwadikaryakarta-mobile1" placeholder="" required>
                                </div>
                                <div class="col-md-6 col-sm-12">
                                    <label for="aanganwadikaryakarta-name2" class="form-label">આંગણવાડી કાર્યકર્તાનું નામ ૨:</label>
                                    <input type="text" class="form-control" id="aanganwadikaryakarta-name2" placeholder="" required>
                                </div>
                                <div class="col-md-6 col-sm-12">
                                    <label for="aanganwadikaryakarta-mobile2" class="form-label">મોબાઇલ નં. ૨:</label>
                                    <input type="tel" class="form-control" id="aanganwadikaryakarta-mobile2" placeholder="" required>
                                </div>
                                <div class="col-md-6 col-sm-12">
                                    <label for="aanganwadikaryakarta-name3" class="form-label">આંગણવાડી કાર્યકર્તાનું નામ ૩:</label>
                                    <input type="text" class="form-control" id="aanganwadikaryakarta-name3" placeholder="" required>
                                </div>
                                <div class="col-md-6 col-sm-12">
                                    <label for="aanganwadikaryakarta-mobile3" class="form-label">મોબાઇલ નં. ૩:</label>
                                    <input type="tel" class="form-control" id="aanganwadikaryakarta-mobile3" placeholder="" required>
                                </div>
                                <div class="col-md-6 col-sm-12">
                                    <label for="aashaworker-name1" class="form-label">આશા વર્કરનું નામ ૧:</label>
                                    <input type="text" class="form-control" id="aashaworker-name" placeholder="" required>
                                </div>
                                <div class="col-md-6 col-sm-12">
                                    <label for="aashaworker-mobile1" class="form-label">મોબાઇલ નં.૧:</label>
                                    <input type="tel" class="form-control" id="aashaworker-mobile" placeholder="" required>
                                </div>
                                <div class="col-md-6 col-sm-12">
                                    <label for="aashaworker-name2" class="form-label">આશા વર્કરનું નામ ૨:</label>
                                    <input type="text" class="form-control" id="aashaworker-name" placeholder="" required>
                                </div>
                                <div class="col-md-6 col-sm-12">
                                    <label for="aashaworker-mobile2" class="form-label">મોબાઇલ નં. ૨:</label>
                                    <input type="tel" class="form-control" id="aashaworker-mobile" placeholder="" required>
                                </div>
                                <div class="col-md-6 col-sm-12">
                                    <label for="aashaworker-name3" class="form-label">આશા વર્કરનું નામ ૩:</label>
                                    <input type="text" class="form-control" id="aashaworker-name" placeholder="" required>
                                </div>
                                <div class="col-md-6 col-sm-12">
                                    <label for="aashaworker-mobile3" class="form-label">મોબાઇલ નં. ૩:</label>
                                    <input type="tel" class="form-control" id="aashaworker-mobile" placeholder="" required>
                                </div>
                                <div class="col-md-6 col-sm-12">
                                    <label for="vyajbibhavduakndar-name1" class="form-label">વ્યાજબી ભાવ ની દુકાન ના દુકાનદારશ્રી નુ નામ ૧:</label>
                                    <input type="text" class="form-control" id="vyajbibhavduakndar-name1" placeholder="" required>
                                </div>
                                <div class="col-md-6 col-sm-12">
                                    <label for="vyajbibhavduakndar-mobile1" class="form-label">મોબાઇલ નં. ૧:</label>
                                    <input type="tel" class="form-control" id="vyajbibhavduakndar-mobile1" placeholder="" required>
                                </div>
                                <div class="col-md-6 col-sm-12">
                                    <label for="vyajbibhavduakndar-name2" class="form-label">વ્યાજબી ભાવ ની દુકાન ના દુકાનદારશ્રી નુ નામ ૨:</label>
                                    <input type="text" class="form-control" id="vyajbibhavduakndar-name2" placeholder="" required>
                                </div>
                                <div class="col-md-6 col-sm-12">
                                    <label for="vyajbibhavduakndar-mobile2" class="form-label">મોબાઇલ નં. ૨:</label>
                                    <input type="tel" class="form-control" id="vyajbibhavduakndar-mobile2" placeholder="" required>
                                </div>
                                <div class="col-md-6 col-sm-12">
                                    <label for="vyajbibhavduakndar-name3" class="form-label">વ્યાજબી ભાવ ની દુકાન ના દુકાનદારશ્રી નુ નામ ૩:</label>
                                    <input type="text" class="form-control" id="vyajbibhavduakndar-name3" placeholder="" required>
                                </div>
                                <div class="col-md-6 col-sm-12">
                                    <label for="vyajbibhavduakndar-mobile3" class="form-label">મોબાઇલ નં. ૩:</label>
                                    <input type="tel" class="form-control" id="vyajbibhavduakndar-mobile3" placeholder="" required>
                                </div>
                                <div class="col-md-12 col-sm-12">
                                    <label for="fpscardholders-name" class="form-label">FPS માં નોંધાયેલા કાર્ડ હોલ્ડરો ની વિગત:</label>
                                    <input type="text" class="form-control" id="fpscardholders-name" placeholder="" required>
                                </div>
                                <div class="col-md-6 col-sm-12">
                                    <label for="primaryschool-name1" class="form-label">પ્રાથમિક શાળા નુ નામ ૧:</label>
                                    <input type="text" class="form-control" id="primaryschool-name" placeholder="" required>
                                </div>
                                <div class="col-md-6 col-sm-12">
                                    <label for="principal-name1" class="form-label">આચાર્યશ્રીનું નામ ૧:</label>
                                    <input type="text" class="form-control" id="principal-name" placeholder="" required>
                                </div>
                                <div class="col-md-6 col-sm-12">
                                    <label for="mobileno1" class="form-label">મોબાઇલ નં. ૧:</label>
                                    <input type="tel" class="form-control" id="mobileno" placeholder="" required>
                                </div>
                                <div class="col-md-6 col-sm-12">
                                    <label for="childern-count1" class="form-label">બાળકો ની સંખ્યા ૧:</label>
                                    <input type="text" class="form-control" id="childern-count" placeholder="" required>
                                </div>
                                <div class="col-md-6 col-sm-12">
                                    <label for="primaryschool-name2" class="form-label">પ્રાથમિક શાળા નુ નામ ૨:</label>
                                    <input type="text" class="form-control" id="primaryschool-name" placeholder="" required>
                                </div>
                                <div class="col-md-6 col-sm-12">
                                    <label for="principal-name2" class="form-label">આચાર્યશ્રીનું નામ ૨:</label>
                                    <input type="text" class="form-control" id="principal-name" placeholder="" required>
                                </div>
                                <div class="col-md-6 col-sm-12">
                                    <label for="mobileno2" class="form-label">મોબાઇલ નં. ૨:</label>
                                    <input type="tel" class="form-control" id="mobileno" placeholder="" required>
                                </div>
                                <div class="col-md-6 col-sm-12">
                                    <label for="childern-count2" class="form-label">બાળકો ની સંખ્યા ૨:</label>
                                    <input type="text" class="form-control" id="childern-count" placeholder="" required>
                                </div>
                                <div class="col-md-6 col-sm-12">
                                    <label for="primaryschool-name3" class="form-label">પ્રાથમિક શાળા નુ નામ ૩:</label>
                                    <input type="text" class="form-control" id="primaryschool-name" placeholder="" required>
                                </div>
                                <div class="col-md-6 col-sm-12">
                                    <label for="principal-name3" class="form-label">આચાર્યશ્રીનું નામ ૩:</label>
                                    <input type="text" class="form-control" id="principal-name" placeholder="" required>
                                </div>
                                <div class="col-md-6 col-sm-12">
                                    <label for="mobileno3" class="form-label">મોબાઇલ નં. ૩:</label>
                                    <input type="tel" class="form-control" id="mobileno" placeholder="" required>
                                </div>
                                <div class="col-md-6 col-sm-12">
                                    <label for="childern-count3" class="form-label">બાળકો ની સંખ્યા ૩:</label>
                                    <input type="text" class="form-control" id="childern-count" placeholder="" required>
                                </div>
                                <div class="col-md-6 col-sm-12">
                                    <label for="milkasspramukh-name" class="form-label">દુધ મંડળી પ્રમુખશ્રી નુ નામ:</label>
                                    <input type="text" class="form-control" id="milkasspramukh-name" placeholder="" required>
                                </div>
                                <div class="col-md-6 col-sm-12">
                                    <label for="milkasspramukh-mobile" class="form-label">મોબાઇલ નં.:</label>
                                    <input type="tel" class="form-control" id="milkasspramukh-mobile" placeholder="" required>
                                </div>
                                <div class="col-md-6 col-sm-12">
                                    <label for="sahkarimandlipramukh-name" class="form-label">સહકારી મંડળીના પ્રમુખશ્રીનુ નામ:</label>
                                    <input type="text" class="form-control" id="sahkarimandlipramukh-name" placeholder="" required>
                                </div>
                                <div class="col-md-6 col-sm-12">
                                    <label for="sahkarimandlipramukh-mobile" class="form-label">મોબાઇલ નં.:</label>
                                    <input type="tel" class="form-control" id="sahkarimandlipramukh-mobile" placeholder="" required>
                                </div>
                                <div class="col-md-6 col-sm-12">
                                    <label for="reshancard" class="form-label">રેશનકાર્ડ કોઈ ને મળવાનું બાકી છે કે કેમ?</label>
                                    <select class="form-select" aria-label="Default select example" id="reshancard">
                                    <option value="yes">Yes</option>
                                    <option value="no">No</option>
                                    <!-- Add more options as needed -->
                                    </select>
                                </div>
                                <div class="col-md-6 col-sm-12">
                                    <label for="reshancard-remaincount" class="form-label">બાકી સંખ્યા:</label>
                                    <input type="text" class="form-control" id="reshancard-remaincount" placeholder="" required>
                                </div>
                                <div class="col-md-6 col-sm-12">
                                    <label for="aadharcard" class="form-label">આધારકાર્ડ કોઈ નુ બાકી છે કે કેમ?</label>
                                    <select class="form-select" aria-label="Default select example" id="aadharcard">
                                    <option value="yes">Yes</option>
                                    <option value="no">No</option>
                                    <!-- Add more options as needed -->
                                    </select>
                                </div>
                                <div class="col-md-6 col-sm-12">
                                    <label for="aadharcard-remaincount" class="form-label">બાકી સંખ્યા:</label>
                                    <input type="text" class="form-control" id="aadharcard-remaincount" placeholder="" required>
                                </div>
                            </div>
                            <button type="submit
                            " class="btn btn-success" id="saveForm">Save</button>
                            <button type="button" class="btn btn-primary" onclick="window.location='yojano.php';">Next</button>
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
                        $.ajax({
                            url: "{{ route('gam-ni-vigat.store') }}",
                            type: 'POST',
                            data: $(form).serialize(),
                            success: function(response) {
                                alert("Survey submitted successfully!");
                                console.log(response);
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
    @include ('main-footer');
</html>
