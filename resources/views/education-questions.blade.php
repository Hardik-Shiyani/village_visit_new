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
				<form id="surveyForm" name="Education Questions">
					<div class="step active">
						<div class="row">
							<h5 class="card-title text-center fs-4">શિક્ષણને બાબતના પ્રશ્નો</h5>
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
								<label for="edu_1" class="form-label">શાળામાં પુરતા પ્રમાણમાં શિક્ષકો કે આચાર્ય  છે કે, કેમ?</label>
								<select class="form-select" aria-label="Default select example" name="edu_1">
								<option value="" disabled selected></option>
								<option value="yes">Yes</option>
								<option value="no">No</option>
								<!-- Add more options as needed -->
								</select>
							</div>
							<div class="col-md-12">
								<label for="edu_2" class="form-label">કોમ્પ્યુટર લેબ છે કે, કેમ? </label>
								<select class="form-select" aria-label="Default select example" name="edu_2">
								<option value="" disabled selected></option>
								<option value="yes">Yes</option>
								<option value="no">No</option>
								<!-- Add more options as needed -->
								</select>
							</div>
							<div class="col-md-12">
								<label for="edu_2v" class="form-label">વિગત</label>
								<input type="text" class="form-control" name="edu_2v" placeholder="">
							</div>
							<div class="col-md-12">
								<label for="edu_3" class="form-label">ઉપયોગમા લેવાય છે કે, કેમ?</label>
								<select class="form-select" aria-label="Default select example" name="edu_3">
								<option value="" disabled selected></option>
								<option value="yes">Yes</option>
								<option value="no">No</option>
								<!-- Add more options as needed -->
								</select>
							</div>
							<div class="col-md-12">
								<label for="edu_3v" class="form-label">વિગત</label>
								<input type="text" class="form-control" name="edu_3v" placeholder="">
							</div>
							<div class="col-md-12">
								<label class="form-label" for="labphoto">Photo Upload of Computer Lab</label>
								<input type="file" class="form-control" name="labphoto" accept="image/*"/>
							</div>
							<div class="col-md-12">
								<label for="edu_4" class="form-label">કોમ્પ્યુટર ચાલુ હાલતમાં છે કે, કેમ?</label>
								<select class="form-select" aria-label="Default select example" name="edu_4">
								<option value="" disabled selected></option>
								<option value="yes">Yes</option>
								<option value="no">No</option>
								<!-- Add more options as needed -->
								</select>
							</div>
							<div class="col-md-12">
								<label for="edu_4v" class="form-label">વિગત</label>
								<input type="text" class="form-control" name="edu_4v" placeholder="">
							</div>
							<div class="col-md-12">
								<label for="edu_5" class="form-label">શાળામાં સ્માર્ટક્લાસ છે કે, કેમ?</label>
								<select class="form-select" aria-label="Default select example" name="edu_5">
								<option value="" disabled selected></option>
								<option value="yes">Yes</option>
								<option value="no">No</option>
								<!-- Add more options as needed -->
								</select>
							</div>
							<div class="col-md-12">
								<label for="edu_5v" class="form-label">વિગત</label>
								<input type="text" class="form-control" name="edu_5v" placeholder="">
							</div>
							<div class="col-md-12">
								<label for="edu_6" class="form-label">ઉપયોગમાં  લેવાય છે કે, કેમ?</label>
								<select class="form-select" aria-label="Default select example" name="edu_6">
								<option value="" disabled selected></option>
								<option value="yes">Yes</option>
								<option value="no">No</option>
								<!-- Add more options as needed -->
								</select>
							</div>
							<div class="col-md-12">
								<label for="edu_6v" class="form-label">વિગત</label>
								<input type="text" class="form-control" name="edu_6v" placeholder="">
							</div>
							<div class="col-md-12">
								<label for="edu_7" class="form-label">શાળામાં મધ્યાનભોજન યોજના અંગે કોઇ પ્રશ્ન છે કે, કેમ?</label>
								<select class="form-select" aria-label="Default select example" name="edu_7">
								<option value="" disabled selected></option>
								<option value="yes">Yes</option>
								<option value="no">No</option>
								<!-- Add more options as needed -->
								</select>
							</div>
							<div class="col-md-12">
								<label for="edu_7v" class="form-label">વિગત</label>
								<input type="text" class="form-control" name="edu_7v" placeholder="">
							</div>
							<div class="col-md-12">
								<label for="edu_8" class="form-label">માળખાકીય સુવિધાઓ – શાળાનું બિલ્ડીંગ (સારી હાલત માં)</label>
								<select class="form-select" aria-label="Default select example" name="edu_8">
								<option value="" disabled selected></option>
								<option value="yes">Yes</option>
								<option value="no">No</option>
								<!-- Add more options as needed -->
								</select>
							</div>
							<div class="col-md-12">
								<label for="edu_8v" class="form-label">વિગત</label>
								<input type="text" class="form-control" name="edu_8v" placeholder="">
							</div>
							<div class="col-md-12">
								<label for="edu_9" class="form-label">ઓરડાઓ ની સંખ્યા</label>
								<input type="text" class="form-control" name="edu_9" placeholder="">
							</div>
							<div class="col-md-12">
								<label for="edu_10" class="form-label">રમત નું મેદાન</label>
								<select class="form-select" aria-label="Default select example" name="edu_10">
								<option value="" disabled selected></option>
								<option value="yes">Yes</option>
								<option value="no">No</option>
								<!-- Add more options as needed -->
								</select>
							</div>
							<div class="col-md-12">
								<label for="edu_10v" class="form-label">વિગત</label>
								<input type="text" class="form-control" name="edu_10v" placeholder="">
							</div>
							<div class="col-md-12">
								<label for="edu_11" class="form-label">પ્રયોગશાળાની વ્યવસ્થા</label>
								<select class="form-select" aria-label="Default select example" name="edu_11">
								<option value="" disabled selected></option>
								<option value="yes">Yes</option>
								<option value="no">No</option>
								<!-- Add more options as needed -->
								</select>
							</div>
							<div class="col-md-12">
								<label for="edu_11v" class="form-label">વિગત</label>
								<input type="text" class="form-control" name="edu_11v" placeholder="">
							</div>
							<div class="col-md-12">
								<label for="edu_12" class="form-label">ગ્રંથાલય</label>
								<select class="form-select" aria-label="Default select example" name="edu_12">
								<option value="" disabled selected></option>
								<option value="yes">Yes</option>
								<option value="no">No</option>
								<!-- Add more options as needed -->
								</select>
							</div>
							<div class="col-md-12">
								<label for="edu_12v" class="form-label">વિગત</label>
								<input type="text" class="form-control" name="edu_12v" placeholder="">
							</div>
							<div class="col-md-12">
								<label for="edu_13" class="form-label">પીવાના પાણીની વ્યવસ્થા</label>
								<select class="form-select" aria-label="Default select example" name="edu_13">
								<option value="" disabled selected></option>
								<option value="yes">Yes</option>
								<option value="no">No</option>
								<!-- Add more options as needed -->
								</select>
							</div>
							<div class="col-md-12">
								<label for="edu_13v" class="form-label">વિગત</label>
								<input type="text" class="form-control" name="edu_13v" placeholder="">
							</div>
							<div class="col-md-12">
								<label for="edu_14" class="form-label">શૌચાલય સંબંધિત વિગત (સ્વચ્છ છે કે કેમ?)</label>
								<select class="form-select" aria-label="Default select example" name="edu_14">
								<option value="" disabled selected></option>
								<option value="yes">Yes</option>
								<option value="no">No</option>
								<!-- Add more options as needed -->
								</select>
							</div>
							<div class="col-md-12">
								<label for="edu_14v" class="form-label">વિગત</label>
								<input type="text" class="form-control" name="edu_14v" placeholder="">
							</div>
							<div class="col-md-12">
								<label for="edu_15" class="form-label">શિક્ષકો/ વિદ્યાથીઓની ભૌતિક હાજરીની વિગતો તેમજ તે જ દિવસે વિદ્યા સમીક્ષા કેન્દ્રમાં નોંધાયેલ  હાજરીની વિગતો સાથે સરખામણી</label>
								<input type="text" class="form-control" name="edu_15" placeholder="">
							</div>
							<div class="col-md-12">
								<label for="edu_15_1" class="form-label">ધોરણ</label>
								<input type="text" class="form-control" name="edu_15_1" placeholder="">
							</div>
							<div class="col-md-12">
								<label for="edu_15_2" class="form-label">કુલ નોંધાયેલ વિદ્યાર્થી</label>
								<input type="text" class="form-control" name="edu_15_2" placeholder="">
							</div>
							<div class="col-md-12">
								<label for="edu_15_3" class="form-label">હાજર વિદ્યાર્થી</label>
								<input type="text" class="form-control" name="edu_15_3" placeholder="">
							</div>
							<div class="col-md-12">
								<label for="edu_15_4" class="form-label">છોકરો</label>
								<input type="text" class="form-control" name="edu_15_4" placeholder="">
							</div>
							<div class="col-md-12">
								<label for="edu_15_5" class="form-label">છોકરી</label>
								<input type="text" class="form-control" name="edu_15_5" placeholder="">
							</div>
							<div class="col-md-12">
								<label for="edu_15_6" class="form-label">કુલ</label>
								<input type="text" class="form-control" name="edu_15_6" placeholder="">
							</div>
							<div class="col-md-12">
								<label for="edu_16" class="form-label">સ્માર્ટ કલાસની યોગ્ય કાર્યરતતા</label>
								<select class="form-select" aria-label="Default select example" name="edu_16">
								<option value="" disabled selected></option>
								<option value="yes">Yes</option>
								<option value="no">No</option>
								<!-- Add more options as needed -->
								</select>
							</div>
							<div class="col-md-12">
								<label for="edu_16v" class="form-label">વિગત</label>
								<input type="text" class="form-control" name="edu_16v" placeholder="">
							</div>
							<!-- <div class="col-md-12">
								<label for="edu_9" class="form-label">PM Poshan Scheme ની અમલવારી સંબંધિત વિગતો</label>
								<input type="text" class="form-control" name="edu_9" placeholder="">
								</div>
								<div class="col-md-12">
								<label for="edu_10" class="form-label">મધ્યાહન ભોજનની ગુણવત્તા યોગ્ય છે કે નહીં તે અંગે પુરતી ચકાસણી અને અભિપ્રાય</label>
								<input type="text" class="form-control" name="edu_10" placeholder="">
								</div> -->
							<div class="col-md-12">
								<label for="edu_17" class="form-label">કિશોર વયની બાળકીઓને આયર્ન  અને ફોલિક એસિડ ટેબલેટ આપવામાં નિયમિતતા</label>
								<select class="form-select" aria-label="Default select example" name="edu_17">
								<option value="" disabled selected></option>
								<option value="yes">Yes</option>
								<option value="no">No</option>
								<!-- Add more options as needed -->
								</select>
							</div>
							<div class="col-md-12">
								<label for="edu_16v" class="form-label">છેલ્લે આપ્યાની તારીખ</label>
								<input type="text" class="form-control" name="edu_16v" placeholder="">
							</div>
							<div class="col-md-12">
								<label for="edu_17" class="form-label">૧૫ થી ૧૮ વર્ષની કિશોરીઓ માટે સીકલ સેલ  એનિમિયાના test ની વિગતો તથા test થયા બાદ લેવાતા પગલાં (સિકલસેલ એનિમીયા પ્રભાવિત જિલ્લાઓ)</label>
								<input type="text" class="form-control" name="edu_17" placeholder="">
							</div>
							<div class="col-md-12">
								<label for="edu_18" class="form-label">પ્રાથમિક આરોગ્ય કેન્દ્ર દ્વારા બાળકોમાંબ આરોગ્યની તપાસ અને સારવાર માટે હાથ ધરાયેલ  કાર્યવાહીની  વિગતો</label>
								<input type="text" class="form-control" name="edu_18" placeholder="">
							</div>
							<!-- <div class="col-md-12">
								<label for="edu_14" class="form-label">ટ્રાયબલ તાલુકામાં આપવામાં આવતી દૂધ-સંજીવની યોજના અંગેની વિગતો</label>
								<input type="text" class="form-control" name="edu_14" placeholder="">
								</div> -->
							<div class="col-md-12">
								<label for="edu_19" class="form-label">ગામમાં પ્રાથમિક તથા માધ્યમીક શાળાની સંખ્યા</label>
								<input type="text" class="form-control" name="edu_19" placeholder="">
							</div>
							<div class="col-md-12">
								<label for="edu_20" class="form-label">શાળાનુ બિલ્ડીગ જર્જરીત છે કે કેમ?</label>
								<select class="form-select" aria-label="Default select example" name="edu_20">
								<option value="" disabled selected></option>
								<option value="yes">Yes</option>
								<option value="no">No</option>
								<!-- Add more options as needed -->
								</select>
							</div>
							<div class="col-md-12">
								<label for="edu_20v" class="form-label">વિગત</label>
								<input type="text" class="form-control" name="edu_20v" placeholder="">
							</div>
							<div class="col-md-12">
								<label for="edu_21" class="form-label">નવા બિલ્ડીગની દરખાસ્ત કરેલ છે કે કેમ?</label>
								<select class="form-select" aria-label="Default select example" name="edu_21">
								<option value="" disabled selected></option>
								<option value="yes">Yes</option>
								<option value="no">No</option>
								<!-- Add more options as needed -->
								</select>
							</div>
							<div class="col-md-12">
								<label for="edu_21v" class="form-label">વિગત</label>
								<input type="text" class="form-control" name="edu_21v" placeholder="">
							</div>
							<div class="col-md-12">
								<label for="edu_22" class="form-label">કિશોરીઓ માટે 'Sanitary Napkins' રાખવામાં આવે છે કે નહિ ?</label>
								<select class="form-select" aria-label="Default select example" name="edu_22">
								<option value="" disabled selected></option>
								<option value="yes">Yes</option>
								<option value="no">No</option>
								<!-- Add more options as needed -->
								</select>
							</div>
							<div class="col-md-12">
								<label for="edu_22v" class="form-label">વિગત</label>
								<input type="text" class="form-control" name="edu_22v" placeholder="">
							</div>
							<div class="col-md-12">
								<label for="edu_23" class="form-label">પ્રયોગશાળામા થતા પ્રયોગોની વિગતો?</label>
								<input type="text" class="form-control" name="edu_23" placeholder="">
							</div>
							<div class="col-md-12">
								<label for="edu_24" class="form-label">MDM માટેનો શેડ ઉપલબ્ધ છે કે કેમ?</label>
								<select class="form-select" aria-label="Default select example" name="edu_24">
								<option value="" disabled selected></option>
								<option value="yes">Yes</option>
								<option value="no">No</option>
								<!-- Add more options as needed -->
								</select>
							</div>
							<div class="col-md-12">
								<label for="edu_24v" class="form-label">વિગત</label>
								<input type="text" class="form-control" name="edu_24v" placeholder="">
							</div>
							<div class="col-md-12">
								<label for="edu_25" class="form-label">શાળામા કેટલા વર્ગખંડ છે તેની સંખ્યા?</label>
								<input type="text" class="form-control" name="edu_25" placeholder="">
							</div>
							<div class="col-md-12">
								<label for="edu_26" class="form-label">કુમાર અને કન્યાનુ શૌચાલય અલગ છે કે કેમ?</label>
								<select class="form-select" aria-label="Default select example" name="edu_26">
								<option value="" disabled selected></option>
								<option value="yes">Yes</option>
								<option value="no">No</option>
								<!-- Add more options as needed -->
								</select>
							</div>
							<div class="col-md-12">
								<label for="edu_26v" class="form-label">વિગત</label>
								<input type="text" class="form-control" name="edu_26v" placeholder="">
							</div>
							<div class="col-md-12">
								<label for="edu_27" class="form-label">પીવાના પાણીની વ્યવસ્થા છે કે કેમ? તેમાં બોર,ફીલ્ટર અને કલોરીનેશનની વિગતો દર્શાવવી.</label>
								<input type="text" class="form-control" name="edu_27" placeholder="">
							</div>
							<div class="col-md-12">
								<label for="edu_27v" class="form-label">વિગત</label>
								<input type="text" class="form-control" name="edu_27v" placeholder="">
							</div>
							<div class="col-md-12">
								<label for="edu_28" class="form-label">શાળામા સીસીટીવી છે કેમ?</label>
								<select class="form-select" aria-label="Default select example" name="edu_28">
								<option value="" disabled selected></option>
								<option value="yes">Yes</option>
								<option value="no">No</option>
								<!-- Add more options as needed -->
								</select>
							</div>
							<div class="col-md-12">
								<label for="edu_28v" class="form-label">વિગત</label>
								<input type="text" class="form-control" name="edu_28v" placeholder="">
							</div>
							<div class="col-md-12">
								<label for="edu_29" class="form-label">શાળામા SMC ની મીટીંગ નિયમીત થાય છે કેમ?</label>
								<select class="form-select" aria-label="Default select example" name="edu_29">
								<option value="" disabled selected></option>
								<option value="yes">Yes</option>
								<option value="no">No</option>
								<!-- Add more options as needed -->
								</select>
							</div>
							<div class="col-md-12">
								<label for="edu_29v" class="form-label">વિગત</label>
								<input type="text" class="form-control" name="edu_29v" placeholder="">
							</div>
							<div class="col-md-12">
								<label for="edu_30" class="form-label">તથા તેનુ રજીસ્ટર નિભાવવામા આવે છે કે કેમ?</label>
								<select class="form-select" aria-label="Default select example" name="edu_30">
								<option value="" disabled selected></option>
								<option value="yes">Yes</option>
								<option value="no">No</option>
								<!-- Add more options as needed -->
								</select>
							</div>
							<div class="col-md-12">
								<label for="edu_30v" class="form-label">વિગત</label>
								<input type="text" class="form-control" name="edu_30v" placeholder="">
							</div>
							<div class="col-md-12">
								<label for="edu_31" class="form-label">શાળામા વાલી મીટીંગ(PTA) નિયમીત થાય છે કે કેમ?</label>
								<select class="form-select" aria-label="Default select example" name="edu_31">
								<option value="" disabled selected></option>
								<option value="yes">Yes</option>
								<option value="no">No</option>
								<!-- Add more options as needed -->
								</select>
							</div>
							<div class="col-md-12">
								<label for="edu_31v" class="form-label">વિગત</label>
								<input type="text" class="form-control" name="edu_31v" placeholder="">
							</div>
							<div class="col-md-12">
								<label for="edu_32" class="form-label">તેની રજીસ્ટર નિભાવવામા આવે છે કે કેમ?</label>
								<select class="form-select" aria-label="Default select example" name="edu_32">
								<option value="" disabled selected></option>
								<option value="yes">Yes</option>
								<option value="no">No</option>
								<!-- Add more options as needed -->
								</select>
							</div>
							<div class="col-md-12">
								<label for="edu_32v" class="form-label">વિગત</label>
								<input type="text" class="form-control" name="edu_32v" placeholder="">
							</div>
							<div class="col-md-12">
								<label for="edu_33" class="form-label">RBSK ની ટીમ ધ્વારા નિયમીત કેમ્પ યોજવામા આવે છે કે કેમ?</label>
								<select class="form-select" aria-label="Default select example" name="edu_33">
								<option value="" disabled selected></option>
								<option value="yes">Yes</option>
								<option value="no">No</option>
								<!-- Add more options as needed -->
								</select>
							</div>
							<div class="col-md-12">
								<label for="edu_33v" class="form-label">વિગત</label>
								<input type="text" class="form-control" name="edu_33v" placeholder="">
							</div>
							<div class="col-md-12">
								<label for="edu_34" class="form-label">ગુણોત્સવ ૨.૦ (GSQAC) અંતર્ગતના સુચક આંક મુજબ શાળાને મેળવેલ ગુણ?</label>
								<input type="text" class="form-control" name="edu_34" placeholder="">
							</div>
							<div class="col-md-12">
								<label for="edu_35" class="form-label">ગુણોત્સવ ૨.૦ (GSQAC) અંતર્ગતના સુચક આંક મુજબ શાળાને મુલાકાત દરમ્યાન અધિકારીશ્રી ધ્વારા આપેલ ગુણ?</label>
								<input type="text" class="form-control" name="edu_35" placeholder="">
							</div>
							<div class="col-md-12">
								<label for="edu_36" class="form-label">ધોરણ ૪ થી ૮ પૈકીના કોઇ એક ધોરણના પરીણામ પત્રક મુજબ વિધાર્થીએ મેળવેલ ખરેખર ગુણ બાબતે પરીક્ષાની ઉત્તરવહીની ચકાસણી યોગ્ય કરેલ છે કે કેમ?</label>
								<select class="form-select" aria-label="Default select example" name="edu_36">
								<option value="" disabled selected></option>
								<option value="yes">Yes</option>
								<option value="no">No</option>
								<!-- Add more options as needed -->
								</select>
							</div>
							<div class="col-md-12">
								<label for="edu_36v" class="form-label">વિગત</label>
								<input type="text" class="form-control" name="edu_36v" placeholder="">
							</div>
							<div class="col-md-12">
								<label for="edu_37" class="form-label">કોઇપણ વિષયના Periodic Assessment Test (PAT) ની નોધપોથીની ચકાસણી બરાબર થયેલ છે કે કેમ?</label>
								<select class="form-select" aria-label="Default select example" name="edu_37">
								<option value="" disabled selected></option>
								<option value="yes">Yes</option>
								<option value="no">No</option>
								<!-- Add more options as needed -->
								</select>
							</div>
							<div class="col-md-12">
								<label for="edu_37v" class="form-label">વિગત</label>
								<input type="text" class="form-control" name="edu_37v" placeholder="">
							</div>
							<div class="col-md-12">
								<label for="edu_38" class="form-label">શાળા માં Fire Safety છે કે નહિ?</label>
								<select class="form-select" aria-label="Default select example" name="edu_38">
								<option value="" disabled selected></option>
								<option value="yes">Yes</option>
								<option value="no">No</option>
								<!-- Add more options as needed -->
								</select>
							</div>
							<div class="col-md-12">
								<label for="edu_38v" class="form-label">વિગત</label>
								<input type="text" class="form-control" name="edu_38v" placeholder="">
							</div>
							<div class="col-md-12">
								<label class="form-label" for="schoolphoto">Photo Upload of School</label>
								<input type="file" class="form-control" name="schoolphoto" accept="image/*" />
							</div>
							<div class="col-md-12">
								<label for="edu_39" class="form-label">અન્ય બાબત</label>
								<input type="text" class="form-control" name="edu_39" placeholder="">
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
				window.location.href = "{{ route('health-questions-index') }}";
			});
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
                        url: "{{ route('education-questions.store') }}",
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