<!DOCTYPE html>
<html lang="en">
@include ('head');
@include ('main-header');
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
                    <div class="step active">
				        <div class="row">
					        <h5 class="card-title text-center fs-4" id="yojana">સરકારશ્રીની વિવિધ યોજનાઓનો લાભ મળવાનો બાકી હોય તેવા કુટુંબો (વ્યક્તિઓની વિગત)</h5>
                                <div class="col-md-12">
                                    ૧. વૃદ્ધ નિરાધાર યોજના:
                                </div>
                                <div class="col-md-6 col-sm-12">
                                    <label for="vruddhaniradhar-count" class="form-label">બાકી લાભાર્થી ની સંખ્યા</label>
                                    <input type="text" class="form-control" id="vruddhaniradhar-count" placeholder="">
                                </div>
                                <div class="col-md-6 col-sm-12">
                                    <label for="vruddhaniradhar-remarks" class="form-label">રિમાર્કસ</label>
                                    <input type="text" class="form-control" id="vruddhaniradhar-remarks" placeholder="">
                                </div>
                                <div class="col-md-12">
                                    ૨. વિધવા સહાય:
                                </div>
                                <div class="col-md-6 col-sm-12">
                                    <label for="widow-count" class="form-label">બાકી લાભાર્થી ની સંખ્યા</label>
                                    <input type="text" class="form-control" id="widow-count" placeholder="">
                                </div>
                                    <div class="col-md-6 col-sm-12">
                                    <label for="widow-remarks" class="form-label">રિમાર્કસ</label>
                                    <input type="text" class="form-control" id="widow-remarks" placeholder="">
                                </div>
                                <div class="col-md-12">
                                    ૩. સંકટ મોચન યોજના:
                                </div>
                                <div class="col-md-6 col-sm-12">
                                    <label for="sankatmochan-count" class="form-label">બાકી લાભાર્થી ની સંખ્યા</label>
                                    <input type="text" class="form-control" id="sankatmochan-count" placeholder="">
                                </div>
                                    <div class="col-md-6 col-sm-12">
                                    <label for="sankatmochan-remarks" class="form-label">રિમાર્કસ</label>
                                    <input type="text" class="form-control" id="sankatmochan-remarks" placeholder="">
                                </div>
                                <div class="col-md-12">
                                    ૪. એન.એફ.એસ.એ. રેશનકાર્ડ:
                                </div>
                                <div class="col-md-6 col-sm-12">
                                    <label for="nfsa-count" class="form-label">બાકી લાભાર્થી ની સંખ્યા</label>
                                    <input type="text" class="form-control" id="nfsa-count" placeholder="">
                                </div>
                                <div class="col-md-6 col-sm-12">
                                    <label for="nfsa-remarks" class="form-label">રિમાર્કસ</label>
                                    <input type="text" class="form-control" id="nfsa-remarks" placeholder="">
                                </div>
                                <div class="col-md-12">
                                    ૫. પ્રધાનમંત્રી જીવન સુરક્ષા યોજના:
                                </div>
                                <div class="col-md-6 col-sm-12">
                                    <label for="pjsy-count" class="form-label">બાકી લાભાર્થી ની સંખ્યા</label>
                                    <input type="text" class="form-control" id="pjsy-count" placeholder="">
                                </div>
                                <div class="col-md-6 col-sm-12">
                                    <label for="pjsy-remarks" class="form-label">રિમાર્કસ</label>
                                    <input type="text" class="form-control" id="pjsy-remarks" placeholder="">
                                </div>
							    <div class="col-md-12">
                                    ૬. પ્રધાનમંત્રી જીવન જ્યોત વીમા યોજના:
                                </div>
						        <div class="col-md-6 col-sm-12">
                                    <label for="pjjvy-count" class="form-label">બાકી લાભાર્થી ની સંખ્યા</label>
                                    <input type="text" class="form-control" id="pjjvy-count" placeholder="">
                                </div>
					            <div class="col-md-6 col-sm-12">
                                    <label for="pjjvy-remarks" class="form-label">રિમાર્કસ</label>
                                    <input type="text" class="form-control" id="pjjvy-remarks" placeholder="">
                                </div>
							    <div class="col-md-12">
                                    ૭. આયુષ્યમાન ભારત યોજના:
                                </div>
						        <div class="col-md-6 col-sm-12">
                                    <label for="aby-count" class="form-label">બાકી લાભાર્થી ની સંખ્યા</label>
                                    <input type="text" class="form-control" id="aby-count" placeholder="">
                                </div>
					            <div class="col-md-6 col-sm-12">
                                    <label for="aby-remarks" class="form-label">રિમાર્કસ</label>
                                    <input type="text" class="form-control" id="aby-remarks" placeholder="">
                                </div>
                                <div class="col-md-12">
                                    ૮. જનની સુરક્ષા યોજના:
                                </div>
                                <div class="col-md-6 col-sm-12">
                                    <label for="jsy-count" class="form-label">બાકી લાભાર્થી ની સંખ્યા</label>
                                    <input type="text" class="form-control" id="jsy-count" placeholder="">
                                </div>
					            <div class="col-md-6 col-sm-12">
                                    <label for="jsy-remarks" class="form-label">રિમાર્કસ</label>
                                    <input type="text" class="form-control" id="jsy-remarks" placeholder="">
                                </div>
						        <div class="col-md-12">
                                    ૯. પ્રધાનમંત્રી માતૃ વંદના યોજના:
                                </div>
                                <div class="col-md-6 col-sm-12">
                                    <label for="pmvy-count" class="form-label">બાકી લાભાર્થી ની સંખ્યા</label>
                                    <input type="text" class="form-control" id="pmvy-count" placeholder="">
                                </div>
					            <div class="col-md-6 col-sm-12">
                                    <label for="pmvy-remarks" class="form-label">રિમાર્કસ</label>
                                    <input type="text" class="form-control" id="pmvy-remarks" placeholder="">
                                </div>
							    <div class="col-md-12">
                                    ૧૦. નિષય પોષણ યોજના:
                                </div>
						        <div class="col-md-6 col-sm-12">
                                    <label for="npy-count" class="form-label">બાકી લાભાર્થી ની સંખ્યા</label>
                                    <input type="text" class="form-control" id="npy-count" placeholder="">
                                </div>
					            <div class="col-md-6 col-sm-12">
                                    <label for="npy-remarks" class="form-label">રિમાર્કસ</label>
                                    <input type="text" class="form-control" id="npy-remarks" placeholder="">
                                </div>
								<div class="col-md-12">
                                    ૧૧. કસ્તુરબા પોષણ સહાય યોજના:
                                </div>
						        <div class="col-md-6 col-sm-12">
                                    <label for="kpsy-count" class="form-label">બાકી લાભાર્થી ની સંખ્યા</label>
                                    <input type="text" class="form-control" id="kpsy-count" placeholder="">
                                </div>
					            <div class="col-md-6 col-sm-12">
                                    <label for="kpsy-remarks" class="form-label">રિમાર્કસ</label>
                                    <input type="text" class="form-control" id="kpsy-remarks" placeholder="">
                                </div>
								<div class="col-md-12">
                                    ૧૨. કુંવરબાઈનું મામેરૂ સહાય યોજના:
                                </div>
						        <div class="col-md-6 col-sm-12">
                                    <label for="kmsy-count" class="form-label">બાકી લાભાર્થી ની સંખ્યા</label>
                                    <input type="text" class="form-control" id="kmsy-count" placeholder="">
                                </div>
					            <div class="col-md-6 col-sm-12">
                                    <label for="kmsy-remarks" class="form-label">રિમાર્કસ</label>
                                    <input type="text" class="form-control" id="kmsy-remarks" placeholder="">
                                </div>
								<div class="col-md-12">
                                    ૧૩. દિવ્યાંગ /વિકલાંગ (પાસ):
                                </div>
						        <div class="col-md-6 col-sm-12">
                                    <label for="dvp-count" class="form-label">બાકી લાભાર્થી ની સંખ્યા</label>
                                    <input type="text" class="form-control" id="dvp-count" placeholder="">
                                </div>
					            <div class="col-md-6 col-sm-12">
                                    <label for="dvp-remarks" class="form-label">રિમાર્કસ</label>
                                    <input type="text" class="form-control" id="dvp-remarks" placeholder="">
                                </div>
								<div class="col-md-12">
                                    ૧૪. વ્હાલી દિકરી યોજના:
                                </div>
						        <div class="col-md-6 col-sm-12">
                                    <label for="vdy-count" class="form-label">બાકી લાભાર્થી ની સંખ્યા</label>
                                    <input type="text" class="form-control" id="vdy-count" placeholder="">
                                </div>
					            <div class="col-md-6 col-sm-12">
                                    <label for="vdy-remarks" class="form-label">રિમાર્કસ</label>
                                    <input type="text" class="form-control" id="vdy-remarks" placeholder="">
                                </div>
								<div class="col-md-12">
                                    ૧૫. વૈદકીય સહાય યોજના:
                                </div>
						        <div class="col-md-6 col-sm-12">
                                    <label for="vsy-count" class="form-label">બાકી લાભાર્થી ની સંખ્યા</label>
                                    <input type="text" class="form-control" id="vsy-count" placeholder="">
                                </div>
					            <div class="col-md-6 col-sm-12">
                                    <label for="vsy-remarks" class="form-label">રિમાર્કસ</label>
                                    <input type="text" class="form-control" id="vsy-remarks" placeholder="">
                                </div>
								<div class="col-md-12">
                                    ૧૬. ઈંન્દીરા ગાંધી નેશનલ ડીસેબીલીટી પેન્શન યોજના:
                                </div>
						        <div class="col-md-6 col-sm-12">
                                    <label for="ignspy-count" class="form-label">બાકી લાભાર્થી ની સંખ્યા</label>
                                    <input type="text" class="form-control" id="ignspy-count" placeholder="">
                                </div>
                                <div class="col-md-6 col-sm-12">
                                    <label for="ignspy-remarks" class="form-label">રિમાર્કસ</label>
                                    <input type="text" class="form-control" id="ignspy-remarks" placeholder="">
                                </div>
								<div class="col-md-12">
                                    ૧૭. સુકન્યા સમુધ્ધી યોજના:
                                </div>
						        <div class="col-md-6 col-sm-12">
                                    <label for="ssy-count" class="form-label">બાકી લાભાર્થી ની સંખ્યા</label>
                                    <input type="text" class="form-control" id="ssy-count" placeholder="">
                                </div>
					            <div class="col-md-6 col-sm-12">
                                    <label for="ssy-remarks" class="form-label">રિમાર્કસ</label>
                                    <input type="text" class="form-control" id="ssy-remarks" placeholder="">
                                </div>
								<div class="col-md-12">
                                    ૧૮. પ્રધાનમંત્રી આવાસ યોજના:
                                </div>
						        <div class="col-md-6 col-sm-12">
                                    <label for="pay-count" class="form-label">બાકી લાભાર્થી ની સંખ્યા</label>
                                    <input type="text" class="form-control" id="pay-count" placeholder="">
                                </div>
					            <div class="col-md-6 col-sm-12">
                                    <label for="pay-remarks" class="form-label">રિમાર્કસ</label>
                                    <input type="text" class="form-control" id="pay-remarks" placeholder="">
                                </div>
								<div class="col-md-12">
                                    ૧૯. PM KISAN પ્રધાનમંત્રી યોજના:
                                </div>
						        <div class="col-md-6 col-sm-12">
                                    <label for="pkpy-count" class="form-label">બાકી લાભાર્થી ની સંખ્યા</label>
                                    <input type="text" class="form-control" id="pkpy-count" placeholder="">
                                </div>
					            <div class="col-md-6 col-sm-12">
                                    <label for="pkpy-remarks" class="form-label">રિમાર્કસ</label>
                                    <input type="text" class="form-control" id="pkpy-remarks" placeholder="">
                                </div>
								<div class="col-md-12">
                                    ૨૦. PM JOY યોજના:
                                </div>
                                <div class="col-md-6 col-sm-12">
                                    <label for="pjy-count" class="form-label">બાકી લાભાર્થી ની સંખ્યા</label>
                                    <input type="text" class="form-control" id="pjy-count" placeholder="">
                                </div>
                                <div class="col-md-6 col-sm-12">
                                    <label for="pjy-remarks" class="form-label">રિમાર્કસ</label>
                                    <input type="text" class="form-control" id="pjy-remarks" placeholder="">
                                </div>
							    <div class="col-md-12">
                                    ૨૧. Disability Pension Scheme:
                                </div>
						        <div class="col-md-6 col-sm-12">
                                    <label for="dps-count" class="form-label">બાકી લાભાર્થી ની સંખ્યા</label>
                                    <input type="text" class="form-control" id="dps-count" placeholder="">
                                </div>
					            <div class="col-md-6 col-sm-12">
                                    <label for="dps-remarks" class="form-label">રિમાર્કસ</label>
                                    <input type="text" class="form-control" id="dps-remarks" placeholder="">
                                </div>
						</div>
                        <button type="button" class="btn btn-secondary" onclick="window.location='index.php';">Previous</button>
                        <button type="button" class="btn btn-success saveYojanaInfo" id="saveYojanaInfo">Save</button>
                        <button type="button" class="btn btn-primary" onclick="window.location='health-questions.php';">Next</button>
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
    
        // document.getElementById("surveyForm").addEventListener("submit", function(event) {
        //   event.preventDefault();
        //   alert("Survey submitted!");
        // });
    </script>

</body>
@include ('main-footer');
</html>