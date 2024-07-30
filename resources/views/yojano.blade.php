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
                <form id="surveyForm" name="Yojanao">
                    @csrf
                    <div class="step active">
				        <div class="row">
					        <h5 class="card-title text-center fs-4" id="yojana">સરકારશ્રીની વિવિધ યોજનાઓનો લાભ મળવાનો બાકી હોય તેવા કુટુંબો (વ્યક્તિઓની વિગત)</h5>
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
                                    <input type="text" class="form-control" name="village-total-population" placeholder="" required>
                                </div>
                                <div class="col-md-12">
                                    ૧. વૃદ્ધ નિરાધાર યોજના:
                                </div>
                                <div class="col-md-6 col-sm-12">
                                    <label for="vruddhaniradhar-count" class="form-label">બાકી લાભાર્થી ની સંખ્યા</label>
                                    <input type="text" class="form-control" name="vruddhaniradhar_count" placeholder="">
                                </div>
                                <div class="col-md-6 col-sm-12">
                                    <label for="vruddhaniradhar-remarks" class="form-label">રિમાર્કસ</label>
                                    <input type="text" class="form-control" name="vruddhaniradhar_remarks" placeholder="">
                                </div>
                                <div class="col-md-12">
                                    ૨. વિધવા સહાય:
                                </div>
                                <div class="col-md-6 col-sm-12">
                                    <label for="widow-count" class="form-label">બાકી લાભાર્થી ની સંખ્યા</label>
                                    <input type="text" class="form-control" name="widow_count" placeholder="">
                                </div>
                                    <div class="col-md-6 col-sm-12">
                                    <label for="widow-remarks" class="form-label">રિમાર્કસ</label>
                                    <input type="text" class="form-control" name="widow_remarks" placeholder="">
                                </div>
                                <div class="col-md-12">
                                    ૩. સંકટ મોચન યોજના:
                                </div>
                                <div class="col-md-6 col-sm-12">
                                    <label for="sankatmochan-count" class="form-label">બાકી લાભાર્થી ની સંખ્યા</label>
                                    <input type="text" class="form-control" name="sankatmochan_count" placeholder="">
                                </div>
                                    <div class="col-md-6 col-sm-12">
                                    <label for="sankatmochan-remarks" class="form-label">રિમાર્કસ</label>
                                    <input type="text" class="form-control" name="sankatmochan_remarks" placeholder="">
                                </div>
                                <div class="col-md-12">
                                    ૪. એન.એફ.એસ.એ. રેશનકાર્ડ:
                                </div>
                                <div class="col-md-6 col-sm-12">
                                    <label for="nfsa-count" class="form-label">બાકી લાભાર્થી ની સંખ્યા</label>
                                    <input type="text" class="form-control" name="nfsa_count" placeholder="">
                                </div>
                                <div class="col-md-6 col-sm-12">
                                    <label for="nfsa-remarks" class="form-label">રિમાર્કસ</label>
                                    <input type="text" class="form-control" name="nfsa_remarks" placeholder="">
                                </div>
                                <div class="col-md-12">
                                    ૫. પ્રધાનમંત્રી જીવન સુરક્ષા યોજના:
                                </div>
                                <div class="col-md-6 col-sm-12">
                                    <label for="pjsy-count" class="form-label">બાકી લાભાર્થી ની સંખ્યા</label>
                                    <input type="text" class="form-control" name="pjsy_count" placeholder="">
                                </div>
                                <div class="col-md-6 col-sm-12">
                                    <label for="pjsy-remarks" class="form-label">રિમાર્કસ</label>
                                    <input type="text" class="form-control" name="pjsy_remarks" placeholder="">
                                </div>
							    <div class="col-md-12">
                                    ૬. પ્રધાનમંત્રી જીવન જ્યોત વીમા યોજના:
                                </div>
						        <div class="col-md-6 col-sm-12">
                                    <label for="pjjvy-count" class="form-label">બાકી લાભાર્થી ની સંખ્યા</label>
                                    <input type="text" class="form-control" name="pjjvy_count" placeholder="">
                                </div>
					            <div class="col-md-6 col-sm-12">
                                    <label for="pjjvy-remarks" class="form-label">રિમાર્કસ</label>
                                    <input type="text" class="form-control" name="pjjvy_remarks" placeholder="">
                                </div>
							    <div class="col-md-12">
                                    ૭. આયુષ્યમાન ભારત યોજના:
                                </div>
						        <div class="col-md-6 col-sm-12">
                                    <label for="aby-count" class="form-label">બાકી લાભાર્થી ની સંખ્યા</label>
                                    <input type="text" class="form-control" name="aby_count" placeholder="">
                                </div>
					            <div class="col-md-6 col-sm-12">
                                    <label for="aby-remarks" class="form-label">રિમાર્કસ</label>
                                    <input type="text" class="form-control" name="aby_remarks" placeholder="">
                                </div>
                                <div class="col-md-12">
                                    ૮. જનની સુરક્ષા યોજના:
                                </div>
                                <div class="col-md-6 col-sm-12">
                                    <label for="jsy-count" class="form-label">બાકી લાભાર્થી ની સંખ્યા</label>
                                    <input type="text" class="form-control" name="jsy_count" placeholder="">
                                </div>
					            <div class="col-md-6 col-sm-12">
                                    <label for="jsy-remarks" class="form-label">રિમાર્કસ</label>
                                    <input type="text" class="form-control" name="jsy_remarks" placeholder="">
                                </div>
						        <div class="col-md-12">
                                    ૯. પ્રધાનમંત્રી માતૃ વંદના યોજના:
                                </div>
                                <div class="col-md-6 col-sm-12">
                                    <label for="pmvy-count" class="form-label">બાકી લાભાર્થી ની સંખ્યા</label>
                                    <input type="text" class="form-control" name="pmvy_count" placeholder="">
                                </div>
					            <div class="col-md-6 col-sm-12">
                                    <label for="pmvy-remarks" class="form-label">રિમાર્કસ</label>
                                    <input type="text" class="form-control" name="pmvy_remarks" placeholder="">
                                </div>
							    <div class="col-md-12">
                                    ૧૦. નિષય પોષણ યોજના:
                                </div>
						        <div class="col-md-6 col-sm-12">
                                    <label for="npy-count" class="form-label">બાકી લાભાર્થી ની સંખ્યા</label>
                                    <input type="text" class="form-control" name="npy_count" placeholder="">
                                </div>
					            <div class="col-md-6 col-sm-12">
                                    <label for="npy-remarks" class="form-label">રિમાર્કસ</label>
                                    <input type="text" class="form-control" name="npy_remarks" placeholder="">
                                </div>
								<div class="col-md-12">
                                    ૧૧. કસ્તુરબા પોષણ સહાય યોજના:
                                </div>
						        <div class="col-md-6 col-sm-12">
                                    <label for="kpsy-count" class="form-label">બાકી લાભાર્થી ની સંખ્યા</label>
                                    <input type="text" class="form-control" name="kpsy_count" placeholder="">
                                </div>
					            <div class="col-md-6 col-sm-12">
                                    <label for="kpsy-remarks" class="form-label">રિમાર્કસ</label>
                                    <input type="text" class="form-control" name="kpsy_remarks" placeholder="">
                                </div>
								<div class="col-md-12">
                                    ૧૨. કુંવરબાઈનું મામેરૂ સહાય યોજના:
                                </div>
						        <div class="col-md-6 col-sm-12">
                                    <label for="kmsy-count" class="form-label">બાકી લાભાર્થી ની સંખ્યા</label>
                                    <input type="text" class="form-control" name="kmsy_count" placeholder="">
                                </div>
					            <div class="col-md-6 col-sm-12">
                                    <label for="kmsy-remarks" class="form-label">રિમાર્કસ</label>
                                    <input type="text" class="form-control" name="kmsy_remarks" placeholder="">
                                </div>
								<div class="col-md-12">
                                    ૧૩. દિવ્યાંગ /વિકલાંગ (પાસ):
                                </div>
						        <div class="col-md-6 col-sm-12">
                                    <label for="dvp-count" class="form-label">બાકી લાભાર્થી ની સંખ્યા</label>
                                    <input type="text" class="form-control" name="dvp_count" placeholder="">
                                </div>
					            <div class="col-md-6 col-sm-12">
                                    <label for="dvp-remarks" class="form-label">રિમાર્કસ</label>
                                    <input type="text" class="form-control" name="dvp_remarks" placeholder="">
                                </div>
								<div class="col-md-12">
                                    ૧૪. વ્હાલી દિકરી યોજના:
                                </div>
						        <div class="col-md-6 col-sm-12">
                                    <label for="vdy-count" class="form-label">બાકી લાભાર્થી ની સંખ્યા</label>
                                    <input type="text" class="form-control" name="vdy_count" placeholder="">
                                </div>
					            <div class="col-md-6 col-sm-12">
                                    <label for="vdy-remarks" class="form-label">રિમાર્કસ</label>
                                    <input type="text" class="form-control" name="vdy_remarks" placeholder="">
                                </div>
								<div class="col-md-12">
                                    ૧૫. વૈદકીય સહાય યોજના:
                                </div>
						        <div class="col-md-6 col-sm-12">
                                    <label for="vsy-count" class="form-label">બાકી લાભાર્થી ની સંખ્યા</label>
                                    <input type="text" class="form-control" name="vsy_count" placeholder="">
                                </div>
					            <div class="col-md-6 col-sm-12">
                                    <label for="vsy-remarks" class="form-label">રિમાર્કસ</label>
                                    <input type="text" class="form-control" name="vsy_remarks" placeholder="">
                                </div>
								<div class="col-md-12">
                                    ૧૬. ઈંન્દીરા ગાંધી નેશનલ ડીસેબીલીટી પેન્શન યોજના:
                                </div>
						        <div class="col-md-6 col-sm-12">
                                    <label for="ignspy-count" class="form-label">બાકી લાભાર્થી ની સંખ્યા</label>
                                    <input type="text" class="form-control" name="ignspy_count" placeholder="">
                                </div>
                                <div class="col-md-6 col-sm-12">
                                    <label for="ignspy-remarks" class="form-label">રિમાર્કસ</label>
                                    <input type="text" class="form-control" name="ignspy_remarks" placeholder="">
                                </div>
								<div class="col-md-12">
                                    ૧૭. સુકન્યા સમુધ્ધી યોજના:
                                </div>
						        <div class="col-md-6 col-sm-12">
                                    <label for="ssy-count" class="form-label">બાકી લાભાર્થી ની સંખ્યા</label>
                                    <input type="text" class="form-control" name="ssy_count" placeholder="">
                                </div>
					            <div class="col-md-6 col-sm-12">
                                    <label for="ssy-remarks" class="form-label">રિમાર્કસ</label>
                                    <input type="text" class="form-control" name="ssy_remarks" placeholder="">
                                </div>
								<div class="col-md-12">
                                    ૧૮. પ્રધાનમંત્રી આવાસ યોજના:
                                </div>
						        <div class="col-md-6 col-sm-12">
                                    <label for="pay-count" class="form-label">બાકી લાભાર્થી ની સંખ્યા</label>
                                    <input type="text" class="form-control" name="pay_count" placeholder="">
                                </div>
					            <div class="col-md-6 col-sm-12">
                                    <label for="pay-remarks" class="form-label">રિમાર્કસ</label>
                                    <input type="text" class="form-control" name="pay_remarks" placeholder="">
                                </div>
								<div class="col-md-12">
                                    ૧૯. PM KISAN પ્રધાનમંત્રી યોજના:
                                </div>
						        <div class="col-md-6 col-sm-12">
                                    <label for="pkpy-count" class="form-label">બાકી લાભાર્થી ની સંખ્યા</label>
                                    <input type="text" class="form-control" name="pkpy_count" placeholder="">
                                </div>
					            <div class="col-md-6 col-sm-12">
                                    <label for="pkpy-remarks" class="form-label">રિમાર્કસ</label>
                                    <input type="text" class="form-control" name="pkpy_remarks" placeholder="">
                                </div>
								<div class="col-md-12">
                                    ૨૦. PM JOY યોજના:
                                </div>
                                <div class="col-md-6 col-sm-12">
                                    <label for="pjy-count" class="form-label">બાકી લાભાર્થી ની સંખ્યા</label>
                                    <input type="text" class="form-control" name="pjy_count" placeholder="">
                                </div>
                                <div class="col-md-6 col-sm-12">
                                    <label for="pjy-remarks" class="form-label">રિમાર્કસ</label>
                                    <input type="text" class="form-control" name="pjy_remarks" placeholder="">
                                </div>
							    <div class="col-md-12">
                                    ૨૧. Disability Pension Scheme:
                                </div>
						        <div class="col-md-6 col-sm-12">
                                    <label for="dps-count" class="form-label">બાકી લાભાર્થી ની સંખ્યા</label>
                                    <input type="text" class="form-control" name="dps_count" placeholder="">
                                </div>
					            <div class="col-md-6 col-sm-12">
                                    <label for="dps-remarks" class="form-label">રિમાર્કસ</label>
                                    <input type="text" class="form-control" name="dps_remarks" placeholder="">
                                </div>
						</div>
                        <button type="button" class="btn btn-secondary" id="previousButton">Previous</button>
                        <button type="submit" class="btn btn-success saveYojanaInfo" id="saveYojanaInfo">Save</button>
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
                window.location.href = "{{ route('gam-ni-vigat-index') }}";
            });
            $("#nextButton").on("click", function(event) {
                event.preventDefault();
                window.location.href = "{{ route('health-questions-index') }}";
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
                        url: "{{ route('yojano.store') }}",
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