<!DOCTYPE html>
<html>
<head>
    <title>Website Preferences</title>
    <link rel="stylesheet" type="text/css" href="normalize.css">
    <link rel="stylesheet" type="text/css" href="test.css">
    <link rel="stylesheet" type="text/css" href="http://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
    <link href='http://fonts.googleapis.com/css?family=Open+Sans:300italic,400italic,400,300,600,700' rel='stylesheet' type='text/css'>
    <script src="//ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
</head>
<body>
   
    <!--    Instructions for step 1   -->
    <div id="instruction1" class="overlay">
        <div class="message">
            <h4>Instructions</h4>
            <p>You will be asked to choose between different images.</p><p>You will only have 0.5s to choose, in order not to be biased by the content or any other aspect that is not relevant.</p>
            <button class="next">Continue</button>
        </div>
    </div>  
    
    <!--    Instructions for step 2   -->
    <div id="instruction2" class="overlay">
        <div class="message">
            <h4>Instructions</h4>
            <p>You will be asked to choose between two website designs.</p><p>You should only decide based on aesthetics, not content.</p>
            <button class="next">Continue</button>
        </div>
    </div>    
    
    <!--    Instructions for step 3   -->
    <div id="instruction3" class="overlay">
        <div class="message">
            <h4>Thank you!</h4>
            <p>Your help has been invaluable to us.</p>
            <p>For the final step, please try to rate your own aesthetic preferences as described below:</p>
               <form id="personal">
                <div class="row">
                    <label>Contrast</label>
                    <select name="contrast">
                        <option value="1">1 - Lowest contrast</option>
                        <option value="2">2</option>
                        <option value="3">3</option>
                        <option value="4">4</option>
                        <option value="5">5</option>
                        <option value="6">6</option>
                        <option value="7">7 - Highest contrast</option>
                    </select>
                </div>
                <div class="row">
                    <label>Brightness</label>
                    <select name="brightness">
                        <option value="1">1 - Lowest brightness</option>
                        <option value="2">2</option>
                        <option value="3">3</option>
                        <option value="4">4</option>
                        <option value="5">5</option>
                        <option value="6">6</option>
                        <option value="7">7 - Highest brightness</option>
                    </select>
                </div>
                <div class="row">
                    <label>Symmetry</label>
                    <select name="symmetry">
                        <option value="1">1 - Lowest symmetry</option>
                        <option value="2">2</option>
                        <option value="3">3</option>
                        <option value="4">4</option>
                        <option value="5">5</option>
                        <option value="6">6</option>
                        <option value="7">7 - Highest symmetry</option>
                    </select>
                </div>
                <div class="row">
                    <label>Simplicity</label>
                    <select name="simplicity">
                        <option value="1">1 - Lowest simplicity</option>
                        <option value="2">2</option>
                        <option value="3">3</option>
                        <option value="4">4</option>
                        <option value="5">5</option>
                        <option value="6">6</option>
                        <option value="7">7 - Highest simplicity</option>
                    </select>
                </div>
                <div class="row">
                    <label>Depth of field (distance between the foreground and the background)</label>
                    <select name="depth">
                        <option value="1">1 - Lowest depth of field</option>
                        <option value="2">2</option>
                        <option value="3">3</option>
                        <option value="4">4</option>
                        <option value="5">5</option>
                        <option value="6">6</option>
                        <option value="7">7 - Highest depth of field</option>
                    </select>
                </div>
                <div class="row">
                    <label>Type of content (Text, Images, Videos, etc)</label>
                    <select name="type">
                        <option value="1">1 - Only text</option>
                        <option value="2">2</option>
                        <option value="3">3</option>
                        <option value="4">4</option>
                        <option value="5">5</option>
                        <option value="6">6</option>
                        <option value="7">7 - Mostly multimedia</option>
                    </select>
                </div>
                </form>
            <button class="next">Finish</button>
        </div>
    </div>       
  
   <div class="step1 step">
    <h1>Website Preferences</h1>
    <h2>Our way of making the web a better place</h2>
    <div class="start_panel">
    <p>Each human can be different in many ways from another. Aesthetics is difficult to define and even more difficult to quantify.</p>
    <p>This experiment is the first step in this direction and will allow us to create a personalised profile based on your own visual preferences.</p>
    <p>You just need to choose between two instances in each one of the following steps, based on your taste. Try not to think too much before choosing, as this will make the test more accurate. <strong>The content is only there as a placeholder.</strong></p>
    <p><strong>Add your email to receive your personal preferences and get a chance to win a 10 euro giftcard from Amazon.</strong></p>
    <form>
        <div class="row">
            <label>Full Name (optional)</label>
            <input type="text" id="full_name" placeholder="George Mavrommatis"/>
        </div>
        <div class="row">
            <label>Age range *</label>
            <select id="age">
                <option value="18-24">18-24</option>
                <option value="25-34">25-34</option>
                <option value="35-44">35-44</option>
                <option value="45-54">45-54</option>
                <option value="55-64">55-64</option>
                <option value="65+">65+</option>
            </select>
        </div>
        <div class="row">
            <label>Nationality *</label>
            <select id="nation">
                    <option value="AF">Afghanistan</option>
                    <option value="AX">Åland Islands</option>
                    <option value="AL">Albania</option>
                    <option value="DZ">Algeria</option>
                    <option value="AS">American Samoa</option>
                    <option value="AD">Andorra</option>
                    <option value="AO">Angola</option>
                    <option value="AI">Anguilla</option>
                    <option value="AQ">Antarctica</option>
                    <option value="AG">Antigua and Barbuda</option>
                    <option value="AR">Argentina</option>
                    <option value="AM">Armenia</option>
                    <option value="AW">Aruba</option>
                    <option value="AU">Australia</option>
                    <option value="AT">Austria</option>
                    <option value="AZ">Azerbaijan</option>
                    <option value="BS">Bahamas</option>
                    <option value="BH">Bahrain</option>
                    <option value="BD">Bangladesh</option>
                    <option value="BB">Barbados</option>
                    <option value="BY">Belarus</option>
                    <option value="BE">Belgium</option>
                    <option value="BZ">Belize</option>
                    <option value="BJ">Benin</option>
                    <option value="BM">Bermuda</option>
                    <option value="BT">Bhutan</option>
                    <option value="BO">Bolivia, Plurinational State of</option>
                    <option value="BQ">Bonaire, Sint Eustatius and Saba</option>
                    <option value="BA">Bosnia and Herzegovina</option>
                    <option value="BW">Botswana</option>
                    <option value="BV">Bouvet Island</option>
                    <option value="BR">Brazil</option>
                    <option value="IO">British Indian Ocean Territory</option>
                    <option value="BN">Brunei Darussalam</option>
                    <option value="BG">Bulgaria</option>
                    <option value="BF">Burkina Faso</option>
                    <option value="BI">Burundi</option>
                    <option value="KH">Cambodia</option>
                    <option value="CM">Cameroon</option>
                    <option value="CA">Canada</option>
                    <option value="CV">Cape Verde</option>
                    <option value="KY">Cayman Islands</option>
                    <option value="CF">Central African Republic</option>
                    <option value="TD">Chad</option>
                    <option value="CL">Chile</option>
                    <option value="CN">China</option>
                    <option value="CX">Christmas Island</option>
                    <option value="CC">Cocos (Keeling) Islands</option>
                    <option value="CO">Colombia</option>
                    <option value="KM">Comoros</option>
                    <option value="CG">Congo</option>
                    <option value="CD">Congo, the Democratic Republic of the</option>
                    <option value="CK">Cook Islands</option>
                    <option value="CR">Costa Rica</option>
                    <option value="CI">Côte d'Ivoire</option>
                    <option value="HR">Croatia</option>
                    <option value="CU">Cuba</option>
                    <option value="CW">Curaçao</option>
                    <option value="CY">Cyprus</option>
                    <option value="CZ">Czech Republic</option>
                    <option value="DK">Denmark</option>
                    <option value="DJ">Djibouti</option>
                    <option value="DM">Dominica</option>
                    <option value="DO">Dominican Republic</option>
                    <option value="EC">Ecuador</option>
                    <option value="EG">Egypt</option>
                    <option value="SV">El Salvador</option>
                    <option value="GQ">Equatorial Guinea</option>
                    <option value="ER">Eritrea</option>
                    <option value="EE">Estonia</option>
                    <option value="ET">Ethiopia</option>
                    <option value="FK">Falkland Islands (Malvinas)</option>
                    <option value="FO">Faroe Islands</option>
                    <option value="FJ">Fiji</option>
                    <option value="FI">Finland</option>
                    <option value="FR">France</option>
                    <option value="GF">French Guiana</option>
                    <option value="PF">French Polynesia</option>
                    <option value="TF">French Southern Territories</option>
                    <option value="GA">Gabon</option>
                    <option value="GM">Gambia</option>
                    <option value="GE">Georgia</option>
                    <option value="DE">Germany</option>
                    <option value="GH">Ghana</option>
                    <option value="GI">Gibraltar</option>
                    <option value="GR">Greece</option>
                    <option value="GL">Greenland</option>
                    <option value="GD">Grenada</option>
                    <option value="GP">Guadeloupe</option>
                    <option value="GU">Guam</option>
                    <option value="GT">Guatemala</option>
                    <option value="GG">Guernsey</option>
                    <option value="GN">Guinea</option>
                    <option value="GW">Guinea-Bissau</option>
                    <option value="GY">Guyana</option>
                    <option value="HT">Haiti</option>
                    <option value="HM">Heard Island and McDonald Islands</option>
                    <option value="VA">Holy See (Vatican City State)</option>
                    <option value="HN">Honduras</option>
                    <option value="HK">Hong Kong</option>
                    <option value="HU">Hungary</option>
                    <option value="IS">Iceland</option>
                    <option value="IN">India</option>
                    <option value="ID">Indonesia</option>
                    <option value="IR">Iran, Islamic Republic of</option>
                    <option value="IQ">Iraq</option>
                    <option value="IE">Ireland</option>
                    <option value="IM">Isle of Man</option>
                    <option value="IL">Israel</option>
                    <option value="IT">Italy</option>
                    <option value="JM">Jamaica</option>
                    <option value="JP">Japan</option>
                    <option value="JE">Jersey</option>
                    <option value="JO">Jordan</option>
                    <option value="KZ">Kazakhstan</option>
                    <option value="KE">Kenya</option>
                    <option value="KI">Kiribati</option>
                    <option value="KP">Korea, Democratic People's Republic of</option>
                    <option value="KR">Korea, Republic of</option>
                    <option value="KW">Kuwait</option>
                    <option value="KG">Kyrgyzstan</option>
                    <option value="LA">Lao People's Democratic Republic</option>
                    <option value="LV">Latvia</option>
                    <option value="LB">Lebanon</option>
                    <option value="LS">Lesotho</option>
                    <option value="LR">Liberia</option>
                    <option value="LY">Libya</option>
                    <option value="LI">Liechtenstein</option>
                    <option value="LT">Lithuania</option>
                    <option value="LU">Luxembourg</option>
                    <option value="MO">Macao</option>
                    <option value="MK">Macedonia, the former Yugoslav Republic of</option>
                    <option value="MG">Madagascar</option>
                    <option value="MW">Malawi</option>
                    <option value="MY">Malaysia</option>
                    <option value="MV">Maldives</option>
                    <option value="ML">Mali</option>
                    <option value="MT">Malta</option>
                    <option value="MH">Marshall Islands</option>
                    <option value="MQ">Martinique</option>
                    <option value="MR">Mauritania</option>
                    <option value="MU">Mauritius</option>
                    <option value="YT">Mayotte</option>
                    <option value="MX">Mexico</option>
                    <option value="FM">Micronesia, Federated States of</option>
                    <option value="MD">Moldova, Republic of</option>
                    <option value="MC">Monaco</option>
                    <option value="MN">Mongolia</option>
                    <option value="ME">Montenegro</option>
                    <option value="MS">Montserrat</option>
                    <option value="MA">Morocco</option>
                    <option value="MZ">Mozambique</option>
                    <option value="MM">Myanmar</option>
                    <option value="NA">Namibia</option>
                    <option value="NR">Nauru</option>
                    <option value="NP">Nepal</option>
                    <option value="NL">Netherlands</option>
                    <option value="NC">New Caledonia</option>
                    <option value="NZ">New Zealand</option>
                    <option value="NI">Nicaragua</option>
                    <option value="NE">Niger</option>
                    <option value="NG">Nigeria</option>
                    <option value="NU">Niue</option>
                    <option value="NF">Norfolk Island</option>
                    <option value="MP">Northern Mariana Islands</option>
                    <option value="NO">Norway</option>
                    <option value="OM">Oman</option>
                    <option value="PK">Pakistan</option>
                    <option value="PW">Palau</option>
                    <option value="PS">Palestinian Territory, Occupied</option>
                    <option value="PA">Panama</option>
                    <option value="PG">Papua New Guinea</option>
                    <option value="PY">Paraguay</option>
                    <option value="PE">Peru</option>
                    <option value="PH">Philippines</option>
                    <option value="PN">Pitcairn</option>
                    <option value="PL">Poland</option>
                    <option value="PT">Portugal</option>
                    <option value="PR">Puerto Rico</option>
                    <option value="QA">Qatar</option>
                    <option value="RE">Réunion</option>
                    <option value="RO">Romania</option>
                    <option value="RU">Russian Federation</option>
                    <option value="RW">Rwanda</option>
                    <option value="BL">Saint Barthélemy</option>
                    <option value="SH">Saint Helena, Ascension and Tristan da Cunha</option>
                    <option value="KN">Saint Kitts and Nevis</option>
                    <option value="LC">Saint Lucia</option>
                    <option value="MF">Saint Martin (French part)</option>
                    <option value="PM">Saint Pierre and Miquelon</option>
                    <option value="VC">Saint Vincent and the Grenadines</option>
                    <option value="WS">Samoa</option>
                    <option value="SM">San Marino</option>
                    <option value="ST">Sao Tome and Principe</option>
                    <option value="SA">Saudi Arabia</option>
                    <option value="SN">Senegal</option>
                    <option value="RS">Serbia</option>
                    <option value="SC">Seychelles</option>
                    <option value="SL">Sierra Leone</option>
                    <option value="SG">Singapore</option>
                    <option value="SX">Sint Maarten (Dutch part)</option>
                    <option value="SK">Slovakia</option>
                    <option value="SI">Slovenia</option>
                    <option value="SB">Solomon Islands</option>
                    <option value="SO">Somalia</option>
                    <option value="ZA">South Africa</option>
                    <option value="GS">South Georgia and the South Sandwich Islands</option>
                    <option value="SS">South Sudan</option>
                    <option value="ES">Spain</option>
                    <option value="LK">Sri Lanka</option>
                    <option value="SD">Sudan</option>
                    <option value="SR">Suriname</option>
                    <option value="SJ">Svalbard and Jan Mayen</option>
                    <option value="SZ">Swaziland</option>
                    <option value="SE">Sweden</option>
                    <option value="CH">Switzerland</option>
                    <option value="SY">Syrian Arab Republic</option>
                    <option value="TW">Taiwan, Province of China</option>
                    <option value="TJ">Tajikistan</option>
                    <option value="TZ">Tanzania, United Republic of</option>
                    <option value="TH">Thailand</option>
                    <option value="TL">Timor-Leste</option>
                    <option value="TG">Togo</option>
                    <option value="TK">Tokelau</option>
                    <option value="TO">Tonga</option>
                    <option value="TT">Trinidad and Tobago</option>
                    <option value="TN">Tunisia</option>
                    <option value="TR">Turkey</option>
                    <option value="TM">Turkmenistan</option>
                    <option value="TC">Turks and Caicos Islands</option>
                    <option value="TV">Tuvalu</option>
                    <option value="UG">Uganda</option>
                    <option value="UA">Ukraine</option>
                    <option value="AE">United Arab Emirates</option>
                    <option value="GB">United Kingdom</option>
                    <option value="US">United States</option>
                    <option value="UM">United States Minor Outlying Islands</option>
                    <option value="UY">Uruguay</option>
                    <option value="UZ">Uzbekistan</option>
                    <option value="VU">Vanuatu</option>
                    <option value="VE">Venezuela, Bolivarian Republic of</option>
                    <option value="VN">Viet Nam</option>
                    <option value="VG">Virgin Islands, British</option>
                    <option value="VI">Virgin Islands, U.S.</option>
                    <option value="WF">Wallis and Futuna</option>
                    <option value="EH">Western Sahara</option>
                    <option value="YE">Yemen</option>
                    <option value="ZM">Zambia</option>
                    <option value="ZW">Zimbabwe</option>
                </select>
        </div>
        <div class="row">
            <label>Native Language *</label>
            <input type="text" id="native" placeholder="ex. Greek"/>
        </div>
        <div class="row">
            <label>Level of education *</label>
            <select id="education">
                <option value="school">School</option>
                <option value="high_school">High School</option>
                <option value="university">University</option>
                <option value="masters">Masters</option>
                <option value="phd">PHD</option>
                <option value="higher">Higher</option>
            </select>
        </div>
        <div class="row">
            <label>Email (optional)</label>
            <input type="email" id="email" placeholder="george@george.com"/>
        </div>
        <input type="submit" id="start" value="Start the test"/>
    </form>
    </div>
   </div>
   <div class="step2 step">
    <h2>Which one you prefer?</h2>
    <section class="vs">
        <article class="left panel test">
        </article>
        <div class="or"></div>
        <article class="right panel test"></article>        
    </section>
   </div>
   
   <div class="step3 step">
    <h2>Which one you prefer?</h2>
    <section class="vs">
        <article class="left panel test" choice="left">
        </article>
        <div class="or"></div>
        <article class="right panel test" choice="right"></article>        
    </section>
   </div>

<?php 
	include "settings.php";
?>
<script>
$(document).ready( function() {
    
    var user_id = "";
    
    function update_user_id(id) {
    	user_id = id;
    }
    
    function isValidEmailAddress(emailAddress) {
    var pattern = new RegExp(/^((([a-z]|\d|[!#\$%&'\*\+\-\/=\?\^_`{\|}~]|[\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])+(\.([a-z]|\d|[!#\$%&'\*\+\-\/=\?\^_`{\|}~]|[\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])+)*)|((\x22)((((\x20|\x09)*(\x0d\x0a))?(\x20|\x09)+)?(([\x01-\x08\x0b\x0c\x0e-\x1f\x7f]|\x21|[\x23-\x5b]|[\x5d-\x7e]|[\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])|(\\([\x01-\x09\x0b\x0c\x0d-\x7f]|[\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF]))))*(((\x20|\x09)*(\x0d\x0a))?(\x20|\x09)+)?(\x22)))@((([a-z]|\d|[\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])|(([a-z]|\d|[\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])([a-z]|\d|-|\.|_|~|[\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])*([a-z]|\d|[\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])))\.)+(([a-z]|[\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])|(([a-z]|[\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])([a-z]|\d|-|\.|_|~|[\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])*([a-z]|[\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])))\.?$/i);
    return pattern.test(emailAddress);
};
    
    $('#start').click(function(e) {
        
    	e.preventDefault();
    	var full_name = $('#full_name').val();
    	var age = $('#age').val();
    	var nation = $('#nation').val();
    	var native = $('#native').val();
    	var education = $('#education').val();
    	var email = $('#email').val();
        
        if( !isValidEmailAddress( email ) && email.length > 0  )
            $('#email').addClass('problem');
        else 
            $('#email').removeClass('problem');

        if( full_name.length <= 3 && full_name.length > 0 )
            $('#full_name').addClass('problem');
        else 
            $('#full_name').removeClass('problem');
        
        if( native.length <= 3 )
            $('#native').addClass('problem');
        else 
            $('#native').removeClass('problem');
            
        if( $('.problem').size() == 0 )
        {
            $.ajax({
                url: "start.php",
                method: "POST",
                data: {
                    full_name: full_name,
                    age: age,
                    nation: nation,
                    education: education,
                    email: email,
                    native: native,
                }
            }).done( function(data) {
                update_user_id(data);
                if( $.isNumeric( data ) )    
	                showStep(2);
                else
                    alert("There is a problem with the system. Please try again later.");
            });
        }
            
    });
    
    window['path100'] = 3;
    window['path101'] = 5;
    
    window['path230'] = 2;
    window['path231'] = 3;
    window['path250'] = 5;
    window['path251'] = 6;

    window['path320'] = 1;
    window['path321'] = 2;
    window['path330'] = 3;
    window['path331'] = 4;
    window['path350'] = 4;
    window['path351'] = 5;
    window['path360'] = 6;
    window['path361'] = 7;
    
    var level = 1;
    
    var symmetry = [
        {'id':1, 'img_url':'../design/symmetry/Symmetry1.jpg'},
        {'id':2, 'img_url':'../design/symmetry/Symmetry2.jpg'},
        {'id':3, 'img_url':'../design/symmetry/Symmetry3.jpg'},
        {'id':4, 'img_url':'../design/symmetry/Symmetry4.jpg'},
        {'id':5, 'img_url':'../design/symmetry/Symmetry5.jpg'},
        {'id':6, 'img_url':'../design/symmetry/Symmetry6.jpg'},
        {'id':7, 'img_url':'../design/symmetry/Symmetry7.jpg'},
    ];
        
	var depth = [
        {'id':1, 'img_url':'../design/depth/1.jpg'},
        {'id':2, 'img_url':'../design/depth/2.jpg'},
        {'id':3, 'img_url':'../design/depth/3.jpg'},
        {'id':4, 'img_url':'../design/depth/4.jpg'},
        {'id':5, 'img_url':'../design/depth/5.jpg'},
        {'id':6, 'img_url':'../design/depth/6.jpg'},
        {'id':7, 'img_url':'../design/depth/7.jpg'},
    ];
    
    var contrast = [
        {'id':1, 'img_url':'../design/contrast/contrast-1.jpg'},
        {'id':2, 'img_url':'../design/contrast/contrast-2.jpg'},
        {'id':3, 'img_url':'../design/contrast/contrast-3.jpg'},
        {'id':4, 'img_url':'../design/contrast/contrast-4.jpg'},
        {'id':5, 'img_url':'../design/contrast/contrast-5.jpg'},
        {'id':6, 'img_url':'../design/contrast/contrast-6.jpg'},
        {'id':7, 'img_url':'../design/contrast/contrast-7.jpg'},
    ];
        
	var simplicity = [
        {'id':1, 'img_url':'../design/simplicity/simplicity-1.jpg'},
        {'id':2, 'img_url':'../design/simplicity/simplicity-2.jpg'},
        {'id':3, 'img_url':'../design/simplicity/simplicity-3.jpg'},
        {'id':4, 'img_url':'../design/simplicity/simplicity-4.jpg'},
        {'id':5, 'img_url':'../design/simplicity/simplicity-5.jpg'},
        {'id':6, 'img_url':'../design/simplicity/simplicity-6.jpg'},
        {'id':7, 'img_url':'../design/simplicity/simplicity-7.jpg'},
    ];
    
    var ctype = [
        {'id':1, 'img_url':'../design/type/content-1.jpg'},
        {'id':2, 'img_url':'../design/type/content-2.jpg'},
        {'id':3, 'img_url':'../design/type/content-3.jpg'},
        {'id':4, 'img_url':'../design/type/content-4.jpg'},
        {'id':5, 'img_url':'../design/type/content-5.jpg'},
        {'id':6, 'img_url':'../design/type/content-6.jpg'},
        {'id':7, 'img_url':'../design/type/content-7.jpg'},
    ];

	var brightness = [
        {'id':1, 'img_url':'../design/brightness/2/brightness-1.png'},
        {'id':2, 'img_url':'../design/brightness/2/brightness-2.png'},
        {'id':3, 'img_url':'../design/brightness/2/brightness-3.png'},
        {'id':4, 'img_url':'../design/brightness/2/brightness-4.png'},
        {'id':5, 'img_url':'../design/brightness/2/brightness-5.png'},
        {'id':6, 'img_url':'../design/brightness/2/brightness-6.png'},
        {'id':7, 'img_url':'../design/brightness/2/brightness-7.png'},
    ];
    var color = [
        {'id':1, 'img_url':'../design/color/color-1.jpg'},
        {'id':2, 'img_url':'../design/color/color-2.jpg'},
        {'id':3, 'img_url':'../design/color/color-3.jpg'},
        {'id':4, 'img_url':'../design/color/color-4.jpg'},
        {'id':5, 'img_url':'../design/color/color-5.jpg'},
        {'id':6, 'img_url':'../design/color/color-6.jpg'},
        {'id':7, 'img_url':'../design/color/color-7.jpg'},
    ];
        
        
   	var step = [];
    step[1] = 'brightness';
    step[2] = 'color';
    step[3] = 'symmetry';
    step[4] = 'contrast';
    step[5] = 'simplicity';
    step[6] = 'ctype';
    step[7] = 'depth';
    
    var levels = [];
    levels[1] = [];
    levels[2] = [];
    levels[3] = [];
        
    
    var my_style = {};
        
    function runTimer($step) {
        $step.find("iframe").ready(function (){
    	setTimeout(
          function() 
          {
            $step.find('.panel').addClass('done');
          }, 500);
                    
        });
    }
    
    function updateDB() {
    	$.ajax({
        	url: "update.php",
        	method: "POST",
        	data: {
                user: user_id,
        		level1: JSON.stringify(levels[1]),
                level2: JSON.stringify(levels[2]),
                level3: JSON.stringify(levels[3])
        	}
        }).done( function(data) {
        	//alert(data);
        });
	}
    
    function runVS(run, down, up) {
        
        if( level <= 3 )
        {
        type = step[run];
        
        if( typeof down == 'undefined') 
        	down = 2;
        else
        	down = down - 1;
        if( typeof up == 'undefined') 
        	up = 4;
        else
        	up = up - 1;
    
        var $left = $('.panel.left');
        var $right = $('.panel.right');
    
    	if( type == 'symmetry' )
        {
            $left.html('<img src="'+symmetry[down].img_url+'" />');
            $right.html('<img src="'+symmetry[up].img_url+'" />');
		}
    	else if ( type == 'contrast' )
        {
            $left.html('<img src="'+contrast[down].img_url+'" />');
            $right.html('<img src="'+contrast[up].img_url+'" />');
		}
    	else if ( type == 'depth' ) {
            $left.html('<img src="'+depth[down].img_url+'" />');
            $right.html('<img src="'+depth[up].img_url+'" />');
		}
    	else if ( type == 'color' ) {
            $left.html('<img src="'+color[down].img_url+'" />');
            $right.html('<img src="'+color[up].img_url+'" />');
		}
    	else if ( type == 'brightness' ) {
            $left.html('<img src="'+brightness[down].img_url+'" />');
            $right.html('<img src="'+brightness[up].img_url+'" />');
		}
    	else if ( type == 'ctype' ) {
            $left.html('<img src="'+ctype[down].img_url+'" />');
            $right.html('<img src="'+ctype[up].img_url+'" />');
		}
    	else if ( type == 'simplicity' ) {
            $left.html('<img src="'+simplicity[down].img_url+'" />');
            $right.html('<img src="'+simplicity[up].img_url+'" />');
		}
    
        function next() {
            if( run == 7 )
            {
                level = level + 1;
                run = 0;
                console.log(type);
                console.log(level-1);
                console.log(levels[level-1]);
            }

            if( level == 1 )
                runVS(run+1, 3, 5)
			else
            {
                var prev;
        		type = step[run+1];
                $.each( levels[level-1], function(k, v) {
                    if( v.type == type )
                        prev = v.value;
                });
                var next_left = window['path'+level+prev+'0'];
                var next_right = window['path'+level+prev+'1'];
                console.log("Prev="+prev+' LEFT='+next_left+' RIGHT='+next_right);
                
                runVS(run+1, next_left, next_right);
            }
        }
            
            function enable_click() {
            
                if( count == 2 )
                {
                    setTimeout(function(){ 
                        $('.panel img').fadeOut();
                    }, 500);

                    $left.click( function() {  
                        $left.off('click');
                        $right.off('click');
                        console.log("typeD="+type);
                        console.log(down);
                        levels[level].push({'type':type,'value':down+1});
                        next();
                    });

                    $right.click( function() {                
                        $left.off('click');
                        $right.off('click');
                        console.log("typeU="+type);
                        console.log(up);
                        levels[level].push({'type':type,'value':up+1});
                        next();
                    });
                }
            }
            
            var count = 0;
            
            $left.find('img').load( function() {
            	count = count + 1;
                enable_click();
            });
            $right.find('img').load( function() {
            	count = count + 1;
                enable_click();
            });
            
            

    		
    	
		}
		else
		{
           //console.log(step); 
           //[{"type":"symmetry","value":4},{"type":"color","value":4},{"type":"depth","value":2},{"type":"brightness","value":4},{"type":"contrast","value":2},{"type":"ctype","value":5},{"type":"simplicity","value":3}]
           showInstructions(2);
           //alert("Phase 2. Choose a site according to your taste.");
           updateDB();
           showStep(3);
		}
	}
    
    //http://jsfiddle.net/sxGtM/3/
    $.fn.serializeObject = function()
    {
        var o = {};
        var a = this.serializeArray();
        $.each(a, function() {
            if (o[this.name] !== undefined) {
                if (!o[this.name].push) {
                    o[this.name] = [o[this.name]];
                }
                o[this.name].push(this.value || '');
            } else {
                o[this.name] = this.value || '';
            }
        });
        return o;
    };
    
    function updatePersonal() {
    	var data = JSON.stringify($('#personal').serializeObject());
        $.ajax({
        	url: "personal.php",
            type: "GET",
            data: {
            	data: data,
                id: user_id
            }
        }).done( function() {
			window.location.href = "http://www.brainyquote.com/quotes_of_the_day.html";
        });
    }
    
    function showInstructions( step ) {
    	$('#instruction'+step).fadeIn();
        
        $('#instruction'+step).find('button').click( function() {
    		$('#instruction'+step).fadeOut();
            if( step == 1 )
               runVS(1);
            else if ( step == 2 ) {                
	            get_my_site();
            }
            else if ( step == 3 ) {
                updatePersonal();
            }
            $('#instructions'+step).find('button').off('click');
        });
    }
    
    function showStep(step) {
    	$('.step').hide();
        var $current_step = $('.step.step'+step);
        	$current_step.show();
        if(step == 2)
        {
           showInstructions(1);
        }
        else if (step==3)
           showInstructions(2);
    }
    
    
	$(function() {
	    if(window.location.hash) {
            var hash = window.location.hash.substring(1);
            showStep(hash);
        }
        else
            showStep(1);	
    });
    
    function get_iframes( left_url, right_url, callback ) {
        var left = document.createElement('iframe');
        //left.style.display = "none";
        left.src = left_url;
    	$('.step3 .left').html(left);
        
        var right = document.createElement('iframe');
        //right.style.display = "none";
        right.src = right_url;
    	$('.step3 .right').html(right);
        console.log(left_url+" "+right_url);
        
        $('.step3 .left iframe, .step3 .right iframe').load(function(){
            callback();
        });
    }
    
    function get_random( not ) {
        var ret = not;
        while( ret == not || ret == not + 1 || ret == not -1 ) {
    		ret = Math.floor((Math.random() * 7) + 1);
        }
        return ret;
    }
    
    var random_site = {
    	"symmetry":"",
        "depth":"",
        "color":"",
        "brightness":"",
        "contrast":"",
        "simplicity":"",
        "ctype":""
    };
    var my_site = {};
    var current_site = {};
    var perc_site = {};
    
    function do_my_site( data ) {
        my_site = data;
        perc_site = {}
        perc_site.symmetry = data.symmetry;
        perc_site.depth = data.depth;
        perc_site.color = data.color;
        perc_site.brightness = data.brightness;
        perc_site.contrast = data.contrast;
        perc_site.ctype = data.ctype;
    }
    
    function get_my_site() {
    	$.ajax({
        	url: "../prefs.php",
            type: "GET",
            dataType: 'json',
            data: {
            	"json": true,
                "id": user_id
            }
        }).done( function(data) {
            do_my_site(data);
            test1();
        }).fail( function(data) {
        	alert(data);
            get_my_site();
        });
    }
    
    function test1_next( index ) {
        current_site[step[index]] = my_site[step[index]];
        url = "<?php echo $root ?>/index.php?"+$.param( current_site, true );
    	return url;
    }
    
    var results1 = [];
    var left_url_test1 = "";
    
    function start_test1( next) {
        if( next != 8 ) {
            var right_url = test1_next(next);
            $('.panel').off('click');
            var count = 0;
            get_iframes(left_url_test1,right_url, function() {
                count = count + 1;
                if( count == 2 )
                {
                    $('.panel iframe').show();
//                    setTimeout(function () {
//                        $('.panel iframe').hide();
//                    }, 2000);
                    $('.panel').one("click", function() {
                        results1.push($(this).attr('choice'));
                        start_test1( next + 1 );
                    });
                }
            });
            
        }
        else
        {
            console.log(results1);
            test2();
        }
    }
    function test1 () {
        random_site.symmetry = get_random( my_site.symmetry);
        random_site.depth = get_random( my_site.depth);
        random_site.color = get_random( my_site.color);
        random_site.brightness = get_random( my_site.brightness);
        random_site.contrast = get_random( my_site.contrast);
        random_site.simplicity = get_random( my_site.simplicity);
        random_site.ctype = get_random( my_site.ctype);
        current_site = random_site;
        
        left_url_test1 = "<?php echo $root ?>/index.php?"+$.param( random_site, true );
        
        var next = 1;
        start_test1( next );
    
        console.log(my_site);
        console.log(random_site);
    }
    
    function test2_next( index ) {
        if( index % 2 == 0 )
            var diff = 1 * parseInt(index/2);
        else
            var diff = -1 * parseInt(index/2);
        $.each( my_site, function(key, value) {
            console.log(diff);
            if( (value + diff) <= 7 && (value + diff) > 0 )
            {
            	console.log("IF perc_site[key]"+key);
            	console.log(perc_site[key]);
        		perc_site[key] = value + diff;
            	console.log(perc_site[key]);                
            }
            else
            {
                console.log("ELSE perc_site[key]"+key);
            	console.log(perc_site[key]);
                if( value + diff < 1 )
                {
                    var diff_new = value + diff + 7;
                	perc_site[key] = diff_new;
                }
                else if ( value + diff > 7 )
                {
                    var diff_new = value + diff - 7;
                    perc_site[key] = diff_new;
                }
            	console.log(perc_site[key]);
            }
        });
        console.log("Perc");
        console.log(perc_site);
        console.log("My");
        console.log(my_site);
        var url = "<?php echo $root ?>/index.php?"+$.param( perc_site, true );
        console.log(url);
        console.log("--end--");
    	return url;
    }
    
    var results2 = [];
    var right_url_test2 = "";
   
    function updateTests() {
    	$.ajax({
        	url: "tests.php",
        	method: "GET",
        	data: {
                user: user_id,
        		test1: results1.toString(),
                test2: results2.toString()
        	}
        }).done( function(data) {
            showInstructions(3);
        	//alert("Thank you for your participation!");
        });
	}
    
    function start_test2( next) {
        if( next != 9 ) {
            var left_url = test2_next(next);
            $('.panel').off('click');
            //alert(left_url + " " +next);
            var count = 0;
            get_iframes(left_url, right_url_test2, function() {
                count = count + 1;
                if( count == 2 ) 
                {
                    $('.panel iframe').show();
//                    setTimeout(function () {
//                        $('.panel iframe').hide();
//                    }, 2000);
                    $('.panel').one("click", function() {
                        results2.push($(this).attr('choice'));
                        start_test2( next + 1 );
                    });
                }
            });
        }
        else
        {
            console.log(results2);
            updateTests();
        }
    }
    
    
    function test2 () {
        right_url_test2 = "<?php echo $root ?>/index.php?"+$.param( my_site, true );
    	var next = 2;
       	start_test2( next );
    }
});
</script>
</body>
</html>