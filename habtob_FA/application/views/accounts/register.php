</div>
<div class="website">
    <div class="container">
        <div class="website-top">
            <h3>REGISTER WITH US</h3>
        </div>
        <div class="">
            <?php echo validation_errors(); ?>
        </div>

        <?php echo form_open('accounts/register') ?>
        <div class="form-horizontal">
            <div class="form-group">
                <div class="col-md-4">
                    <label class="control-label">First Name</label>
                    <input type="text" name="f_name" class="form-control" placeholder="First Name" required/>
                </div>
                <div class="col-md-4">
                    <label class="control-label">Middle Name</label>
                    <input type="text" name="m_name" class="form-control" placeholder="Middle Name"/>
                </div>
                <div class="col-md-4">
                    <label class="control-label">Last Name</label>
                    <input type="text" name="l_name" class="form-control" placeholder="Last Name" required/>
                </div>
            </div>
            
            <div class="form-group">
                <div class="col-md-4">
                    <label class="control-label">Date of Birth</label>
                    <input type="date" name="dob" class="form-control" required/>
                </div>
                <div class="col-md-4">
                    <label class="control-label">Gender</label>
                    <select class="form-control" name="gender" required>
                        <option value="">-- Please Select --</option>
                        <option value="Male">Male</option>
                        <option value="Female">Female</option>
                    </select>
                </div>
                <div class="col-md-4">
                    <label class="control-label">State of Origin</label>
                    <select class="form-control" name="state_of_origin">
                        <option value="">-- Please Select --</option>
                        <option value="Lagos">Lagos State</option>
                        <option value="Ogun">Ogun State</option>
                    </select>
                </div>
            </div>
            
            <div class="form-group">
                <div class="col-md-4">
                    <label class="control-label">Address</label>
                    <input type="text" name="address" class="form-control" placeholder="First Name" required/>
                </div>
                <div class="col-md-4">
                    <label class="control-label">LGA</label>
                    <select class="form-control" name="lga">
                        <option value="">-- Please Select --</option>
                        <option value="Island">Lagos Island</option>
                        <option value="Mainland">Lagos Mainland</option>
                    </select>
                </div>
                <div class="col-md-4">
                    <label class="control-label">State of Residence</label>
                    <select class="form-control" name="state">
                        <option value="">-- Please Select --</option>
                        <option value="Lagos">Lagos State</option>
                    </select>
                </div>
            </div>
            
            <div class="form-group">
                <div class="col-md-4">
                    <label class="control-label">Contact Phone</label>
                    <input type="text" name="contact_phone" class="form-control" placeholder="+234 xxx-xxx-xxxx" required=""/>
                </div>
                <div class="col-md-4">
                    <label class="control-label">Contact Email</label>
                    <input type="email" name="contact_email" class="form-control" placeholder="xxx@xxx.xxx" required/>
                </div>
            </div>
            
            <div class="form-group">
                <div class="col-md-4">
                    <label class="control-label">Are you a student?</label>
                    <select class="form-control" name="is_student" required>
                        <option value="">-- Please Select --</option>
                        <option value="Y">Yes</option>
                        <option value="N">No</option>
                    </select>
                </div>
                <div class="col-md-4">
                    <label class="control-label">Highest level of Education</label>
                    <select class="form-control" name="education_level" required>
                        <option value="">-- Please Select --</option>
                        <option value="Primary">Primary School</option>
                        <option value="SSCE">SSCE</option>
                        <option value="OND">OND</option>
                        <option value="HND">HND</option>
                        <option value="BSc">BSc</option>
                    </select>
                </div>
                <div class="col-md-4">
                    <label class="control-label">Hobbies</label>
                    <textarea name="hobbies" class="form-control"></textarea>
                </div>
            </div>
            
            <div class="form-group">
                <div class="col-md-8">
                    <label class="control-label">Why do you want to join us?</label>
                    <textarea name="reason_to_join" class="form-control" required></textarea>
                </div>
                <div class="col-md-4">
                    <label class="control-label">Preferred Position</label>
                    <select class="form-control" name="preferred_position" required>
                        <option value="">-- Please Select --</option>
                        <option value="Forward">Forward</option>
                        <option value="Attacking Midfielder">Attacking Midfielder</option>
                        <option value="Defensive Midfielder">Defensive Midfielder</option>
                        <option value="Winger">Winger</option>
                        <option value="Defender">Defender</option>
                        <option value="Goalkeeper">Goalkeeper</option>
                    </select>
                </div>
            </div>
            
            <div class="form-group">
                <div class="col-md-4">
                    <label class="control-label">Guardian's Full Name</label>
                    <input type="text" name="guardian_full_name" class="form-control" placeholder="Guardian's Full Name" required=""/>
                </div>
                <div class="col-md-4">
                    <label class="control-label">Guardian's Phone number</label>
                    <input type="text" name="guardian_phone" class="form-control" placeholder="+234 xxx-xxx-xxxx" required/>
                </div>
                <div class="col-md-4">
                    <label class="control-label">Guardian's Email</label>
                    <input type="email" name="guardian_email" class="form-control" placeholder="xxx@xxx.xxx" required=""/>
                </div>
            </div>
            <div class="form-group">
                <div class="col-md-12">
                    <label class="control-label">Guardian's Address</label>
                    <input type="text" name="guardian_address" class="form-control" placeholder="Guardian's Address" required=""/>
                </div>
            </div>
            
            <div class="form-group">
                <div class="col-md-4">
                    <label class="control-label">Next of Kin's Full Name</label>
                    <input type="text" name="nok_name" class="form-control" placeholder="Next of Kin's Full Name"/>
                </div>
                <div class="col-md-4">
                    <label class="control-label">Next of Kin's Phone number</label>
                    <input type="text" name="nok_phone" class="form-control" placeholder="+234 xxx-xxx-xxxx"/>
                </div>
                <div class="col-md-4">
                    <label class="control-label">Next of Kin's Email</label>
                    <input type="email" name="nok_email" class="form-control" placeholder="xxx@xxx.xxx"/>
                </div>
            </div>
            <div class="form-group">
                <div class="col-md-12">
                    <label class="control-label">Next of Kin's Address</label>
                    <input type="text" name="nok_address" class="form-control" placeholder="Next of Kin's Address"/>
                </div>
            </div>
            
            <div class="form-group">
                <div class="col-md-4">
                    <input type='submit' name='submit' value="Register" class="btn btn-primary btn-lg"/>
                </div>
            </div>
        </div>
        </form>
    </div>
</div>

