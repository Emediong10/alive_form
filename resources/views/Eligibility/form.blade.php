@include('layouts.app')
@include('layouts.nav')

<section id="content">
<div class="content-wrap">
<div class="container center">

       
		    <h1>ANSWER THE ELIGIBITY QUESTIONS</h1>
		

<form action="POST">
   
@csrf
  

<p>I personally do active outreach monthly (not just church work):</p>
  <input type="radio" id="yes" name="monthly_outreach" value="yes">
  <label for="yes">YES</label>
  <input type="radio" id="no" name="monthly_outreach" value="no">
  <label for="no">NO</label>


<p>I have recent personal outreach experiences to share:</p>
  <input type="radio" id="yes" name="outreach_experience" value="yes">
  <label for="yes">YES</label>
  <input type="radio" id="no" name="outreach_experience" value="no">
  <label for="no">NO</label>
<br><br>

<p>I am a graduate:</p>
  <input type="radio" id="yes" name="graduate" value="yes">
  <label for="yes">YES</label>
  <input type="radio" id="no" name="graduate" value="no">
  <label for="no">NO</label>

<p>I am a professional:</p>
  <input type="radio" id="yes" name="professional" value="yes">
  <label for="yes">YES</label>
  <input type="radio" id="no" name="professional" value="no">
  <label for="no">NO</label>

<p>I have attended an ALIVE-Nigeria mission at least once:</p>
  <input type="radio" id="yes" name="alive_mission" value="yes">
  <label for="yes">YES</label>
  <input type="radio" id="no" name="alive_mission" value="no">
  <label for="no">No</label>


<p>I am an Adventist in good standing with my church:</p>
  <input type="radio" id="yes" name="good_standing" value="yes">
  <label for="yes">YES</label>
  <input type="radio" id="no" name="good_standing" value="no">
  <label for="no">NO</label><br>




				<div class="form-group">
 	<p> I desire to support ALIVE-Nigeria ministry with at least monthly</p>
			<select class="form-select center" id="monthly_support">
			    <option>1k - 5k</option>
				<option>6k - 10k</option>
				<option>11k - 15k</option>
				<option>15k above</option>
				<option></option>
				</select>
				</div>


				<div class="form-group">
 	<p> I supported the ALIVE-Nigeria ministry in the past year with at least 12k</p>
			<select class="form-select center" id="monthly_support">
			    <option>12k - 20k</option>
				<option>20k - 30k</option>
				<option>40k - 50k</option>
				<option>50k above</option>
				</select>
				</div>


<p>I strive to live out our high Christian standard as taught by the Bible and SOP</p>
  <input type="radio" id="yes" name="christan_standard" value="yes">
  <label for="yes">YES</label>
  <input type="radio" id="no" name="christan_standard" value="no">
  <label for="no">No</label>

<br><br>

<div class="form-group">
<label for="summary_question">If you chose yes to the Outreach question above, share a summary of your "personal" outreach in the past year.</label>
<textarea class="form-control" id="summary_question" rows="3"></textarea>
</div>

<input type="Submit" style="color:green;">
</form>
</div>

<div class="container">
				<div style="float:right">
			<a href="{{url('eligible')}}" class="btn btn-success topmargin-lg">Next Page -></a>
			</div>
			<div style="float:left">
			<a href="{{url('requirement_second')}}" class="btn btn-success topmargin-lg"><-Previous</a>
			</div>
			</div>
</div>
</section>