
 <div>

	<div class="container">


		<div class="row justify-content-center">

    <div class="col-lg-7 col-md-10">
        <div class="content-wrap bg-light">
            <h4 class="center">ALIVE Nigeria Membership Registration Form</h4>
            @if(!empty($successMsg))
                <div class="alert alert-success">
                    {{ $successMsg }}
                </div>
                @endif
            </div>
        <div class="stepwizard">
            <div class="stepwizard-row setup-panel">
                <div class="multi-wizard-step">
                    <a href="#step-1" type="button"
                        class="btn {{ $currentStep != 1 ? 'btn-default' : 'btn-primary' }}">1</a>
                    <p>BIO Date</p>
                </div>
                <div class="multi-wizard-step">
                    <a href="#step-2" type="button"
                        class="btn {{ $currentStep != 2 ? 'btn-default' : 'btn-primary' }}">2</a>
                    <p>Eligibility Questions</p>
                </div>
                <div class="multi-wizard-step">
                    <a href="#step-3" type="button"
                        class="btn {{ $currentStep != 3 ? 'btn-default' : 'btn-primary' }}"
                        disabled="disabled">3</a>
                    <p>Support</p>
                </div>
                <div class="multi-wizard-step">
                    <a href="#step-4" type="button"
                        class="btn {{ $currentStep != 4 ? 'btn-default' : 'btn-primary' }}"
                        disabled="disabled">4</a>
                    <p>Submission</p>
                </div>
            </div>
        </div>
        <div class="row setup-content {{ $currentStep != 1 ? 'display-none' : '' }}" id="step-1">
            <div class="col-md-12">
                <h3> Step 1</h3>
                <div class="form-group">
                    <label for="title">First Name:</label>
                    <input type="text" wire:model="firstname" class="form-control" id="firstName">
                    @error('firstname') <span class="error">{{ $message }}</span> @enderror
                </div>
                <div class="form-group">
                    <label for="title">Middle Name:</label>
                    <input type="text" wire:model="middlename" class="form-control" id="middleName">
                    @error('middlename') <span class="error">{{ $message }}</span> @enderror
                </div>
                <div class="form-group">
                    <label for="title">last Name:</label>
                    <input type="text" wire:model="lastname" class="form-control" id="lastName">
                    @error('lastname') <span class="error">{{ $message }}</span> @enderror
                </div>
                <div class="form-group">
                    <label for="title">Date of Birth:</label>
                    <input type="date" wire:model="dob" class="form-control" id="dob">
                    @error('dob') <span class="error">{{ $message }}</span> @enderror
                </div>
                <div class="form-group">
                    <label for="description">Phone:</label>
                    <input type="text" wire:model="phone" class="form-control" id="phone" />
                    @error('phone') <span class="error">{{ $message }}</span> @enderror
                </div>
                <div class="form-group">
                    <label for="description">Email:</label>
                    <input type="email" wire:model="email" class="form-control" id="email" />
                    @error('email') <span class="error">{{ $message }}</span> @enderror
                </div>
                <div class="form-group">
                    <p><label>Gender:</label></p>
                         <label class="radio-inline">
                        <input class="" type="radio" id="male" wire:model="gender" name="gender" value="male">
                        Male</label>
                        <label class="radio-inline">
                        <input class="" type="radio" id="female" wire:model="gender" name="gender" value="female">
                        Female</label>
                    @error('gender') <span class="error">{{ $message }}</span> @enderror
                </div>
                <div class="form-group">
                    <label for="detail">Select Your Chapter:</label>
                    <select name="chapter" class="form-control" wire:model="chapter">
                    <option value="">Select Your Chapter</option>
                      @foreach($chapters as $chapter)
                      <option value="{{$chapter->id}}">{{$chapter->name}}</option>
                      @endforeach
                    </select>
                    @error('chapter') <span class="error">{{ $message }}</span> @enderror
                </div>
                <button class="btn btn-primary nextBtn btn-lg pull-right" wire:click="firstStepSubmit"
                    type="button">Next</button>
            </div>
        </div>
        <div class="row setup-content {{ $currentStep != 2 ? 'display-none' : '' }}" id="step-2">
            <div class="col-md-12">
                <h3> Eligibility Questions</h3>
                <div class="form-group">
                    <p>I personally do active outreach monthly (not just church work):</p>
                      <label class="radio-inline">
                        <input type="radio" class="" name="monthly_outreach" wire:model="monthly_outreach" value="yes">Yes
                      </label>
                      <label class="radio-inline">
                        <input type="radio" class="" wire:click="skip(3)" name="monthly_outreach" wire:model="monthly_outreach" value="No">No
                      </label>
                    @error('monthly_outreach') <span class="error">{{ $message }}</span> @enderror
                </div>

                <div class="form-group">
                    <p>I have recent personal outreach experiences to share:</p>
                      <label class="radio-inline">
                        <input type="radio" class="" name="outreach" wire:click="$set('show_outreach',true)" wire:model="outreach" value="yes">Yes
                      </label>
                      <label class="radio-inline">
                        <input type="radio" class="" name="outreach" wire:click="$set('show_outreach',false)" wire:model="outreach" value="No">No
                      </label>
                      @error('outreach') <span class="error">{{ $message }}</span> @enderror

                </div>

                @if($show_outreach)
                <div class="form-group">
                <label for="">Outreach Experience</label>
                <textarea class="form-control" id="" cols="30" rows="10" wire:model="outreach_experience" required></textarea>
                @error('outreach_experience') <span class="error">{{ $message }}</span> @enderror
                </div>
                @endif

                <div class="form-group">
                    <p>I strive to live out our high Christian standard as taught by the Bible and SOP:</p>
                      <label class="radio-inline">
                        <input type="radio" class="" name="christian_standard" wire:model="christian_standard" value="yes">Yes
                      </label>
                      <label class="radio-inline">
                        <input type="radio" class="" name="christian_standard" wire:click="skip(3)" wire:model="christian_standard" value="No">No
                      </label>
                      @error('christian_standard') <span class="error">{{ $message }}</span> @enderror
                </div>

                <div class="form-group">
                    <p>I am a graduate:</p>
                      <label class="radio-inline">
                        <input type="radio" class="" name="graduate" wire:model="graduate" value="yes">Yes
                      </label>
                      <label class="radio-inline">
                        <input type="radio" class="" name="graduate" wire:model="graduate" value="No">No
                      </label>
                      @error('graduate') <span class="error">{{ $message }}</span> @enderror
                </div>


                <div class="form-group">
                    <p>I have attended an ALIVE mission at least once:</p>
                      <label class="radio-inline">
                        <input type="radio" class="" name="attended_mission" wire:model="attended_mission" value="yes">Yes
                      </label>
                      <label class="radio-inline">
                        <input type="radio" class="" name="attended_mission" wire:model="attended_mission" value="No">No
                      </label>
                      @error('attended_mission') <span class="error">{{ $message }}</span> @enderror
                </div>

                <div class="form-group">
                    <p>I am a Professional:</p>
                      <label class="radio-inline">
                        <input type="radio" class="" name="professional" wire:model="professional" value="yes">Yes
                      </label>
                      <label class="radio-inline">
                        <input type="radio" class="" name="professional" wire:model="professional" value="No">No
                      </label>
                      @error('professional') <span class="error">{{ $message }}</span> @enderror
                </div>

                <div class="form-group">
                    <p>I am an adventist in good standing with my church:</p>
                      <label class="radio-inline">
                        <input type="radio" class="" name="good_standing_adventist" wire:model="good_standing_adventist" value="yes">Yes
                      </label>
                      <label class="radio-inline">
                        <input type="radio" class="" name="good_standing_adventist" wire:model="good_standing_adventist" value="No">No
                      </label>
                      @error('good_standing_adventist') <span class="error">{{ $message }}</span> @enderror
                </div>

                <div class="form-group">
                    <p> I supported the ALIVE-Nigeria ministry in the past year with at least</p>
                    <select class="form-select" wire:model="have_supported" id="have_supported">
                        <option>12k - 20k</option>
                        <option>20k - 30k</option>
                        <option>40k - 50k</option>
                        <option>50k above</option>
                    </select>
                </div>

                <div class="form-group">
                    <p> I desire to support ALIVE-Nigeria ministry with at least monthly</p>
                    <select class="form-select" wire:model="will_support" id="will_support">
                        <option>1k - 5k</option>
                        <option>6k - 10k</option>
                        <option>11k - 15k</option>
                        <option>15k above</option>
                        <option></option>
                    </select>
                </div>

                <button class="btn btn-primary nextBtn btn-lg pull-right" type="button"
                    wire:click="secondStepSubmit">Next</button>
                <button class="btn btn-danger nextBtn btn-lg pull-right" type="button" wire:click="back(1)">Back</button>
            </div>
        </div>

        <div class="row setup-content {{ $currentStep != 3 ? 'display-none' : '' }}" id="step-3">
            <div class="col-md-12">
                <h3> Step 3</h3>
                <div class="form-group">
                    <p>Do you intend to support the ministry of ALIVE Nigeria on a monthly basis?:</p>
                      <label class="radio-inline">
                        <input type="radio" class="" wire:click="$set('show_monthly_amount',true)" wire:model="monthly_support" value="yes">Yes
                      </label>
                      <label class="radio-inline">
                        <input type="radio" class="" wire:model="monthly_support" value="No">No
                      </label>
                      @error('monthly_support') <span class="error">{{ $message }}</span> @enderror
                </div>
                @if($show_monthly_amount)
                <div class="form-group">
                <label for="">Specify Amount you intend to Support Alive Nigeria with</label>
                <input type="number" placeholder="Specify Amount in Naira" class="form-control" wire:model="monthly_amount" required></textarea>
                @error('monthly_amount') <span class="error">{{ $message }}</span> @enderror
                </div>

                <div class="form-group">
                    <label for="">Currency</label>
                    <select class="form-control" name="currency" wire:model="currency" required>
                        <option value="">Select Currency</option>
                        <option value="NGN">Naira</option>
                        <option value="USD">United States Dollars</option>
                    </select>
                @error('currency') <span class="error">{{ $message }}</span> @enderror
                </div>
                @endif

                <button class="btn btn-primary nextBtn btn-lg pull-right" type="button"
                    wire:click="thirdStepSubmit">Next</button>
                <button class="btn btn-danger nextBtn btn-lg pull-right" type="button" wire:click="back(2)">Back</button>

            </div>
        </div>
        <div class="row setup-content {{ $currentStep != 4 ? 'display-none' : '' }}" id="step-4">
            <div class="col-md-12">
                <h3> Final Submission</h3>
                <div class="col-12 bottommargin-sm">
                    <h5>MONTHLY DUES:</h5>
                    <label><p>To support the work of the ministry, monthly dues for Financial Partners are N10,000 and above. Do you
                    pledge to give your faithful support for the continuity of the work of the ministry
                    </p></label>
                    <div class="form-check">
                        <input class="yes" type="radio" id="yes" name="monthly_dues" value="yes">
                        <label class="yes" for="yes">YES</label>
                    </div>
                    <div class="form-check">
                        <input class="no" type="radio" id="no" name="monthly_dues" value="no">
                        <label class="no" for="no">NO</label>
                    </div>
                </div>

                <h5>BANKS - For Dues: </h5><br>
                <h4><p>You can pay:<br>
                ALIVE-NG <br>
                GT Bank Account No: 0239650736</p></h4>
                <h4>DECLARATION </h4> <br>
                <p>By clicking the submit button, I declare that if recognized as a member, I will be committed to the duties to
                which I am assigned. I will be of good behavior and abide by the rules of ALIVE Nigeria</p>

                <button class="btn btn-danger nextBtn btn-lg" type="button" wire:click="back(3)">Back</button>
                <button class="btn btn-success btn-lg pull-right" wire:click="submitForm" type="button">Submit!</button>
            </div>
        </div>
    </div>
</div>
    </div>
</div>


