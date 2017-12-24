<section class="main-section" id="service"><!--main-section-start-->
	<div class="container">
		@if(Session::has('apply-stage-2-status') && Session::get('apply-stage-2-status') == "success") 
		  <div class="alert alert-success">Application Successful! We've just sent you an email. We hope you win the lottery!</div>
		@endif
    	<h2>We exist to change lives</h2>
    	<h6>Apply today to stand a chance of winning $1 million!</h6>    
        <!--------- Input errors -------------->
                    @if (count($errors) > 0)
                          @include('input-errors', ["errors" => $errors])
                     @endif              
        	    <form method="post" action="{{url('apply')}}">   
        	           {{ csrf_field() }}                    
                       <input type="hidden" name="grepo" value="1" required>   
                       <div class="alert alert-info">Personal Details</div>                      
                        <div class="row">   
                        <div class="col-lg-6 col-sm-6">   	
                	   <h4>Enter your email address <span style="color:red;">*</span></h4>
                	   <input type="text" class="form-control" name="email" value="{{old('email')}}" required>   
                	   </div>
                        <div class="col-lg-6 col-sm-6">
                        	<h4>Enter your phone number (country code + phone number e.g 15132978942)  <span style="color:red;">*</span></strong></h4>
                	   <input type="text" class="form-control" name="phone" value="{{old('phone')}}" required>   
                	   </div>
                      </div><br>
                      <div class="row">   
                        <div class="col-lg-6 col-sm-6">   	
                	   <h4>Enter your first name <span style="color:red;">*</span></h4>
                	   <input type="text" class="form-control" name="fname" value="{{old('fname')}}" required>
                	   </div>
                       <div class="col-lg-6 col-sm-6">
                	   <h4>Enter your last name <span style="color:red;">*</span></h4>
                	   <input type="text" class="form-control" name="lname" value="{{old('lname')}}" required>
                	   </div>
                      </div><br>
                      
                       <div class="row">   
                        <div class="col-lg-6 col-sm-6">
                	   <h4>Choose your gender <span style="color:red;">*</span></h4>
                	   <select class="form-control" name="gender" required>
                	    <option value="none">Select a gender</option>
                        <option value="male">Male</option>
                        <option value="female">Female</option>
                       </select>
                	   </div>
                       <div class="col-lg-6 col-sm-6">
                	   <h4>Enter your date of birth <span style="color:red;">*</span></h4>
                       <div class="row">   
                        <div class="col-lg-4 col-sm-4">
                	   <select name="birth-year" class="form-control">
						<option value="">Year</option>
						<option value="1900">1900</option><option value="1901">1901</option><option value="1902">1902</option><option value="1903">1903</option><option value="1904">1904</option><option value="1905">1905</option><option value="1906">1906</option><option value="1907">1907</option><option value="1908">1908</option><option value="1909">1909</option><option value="1910">1910</option><option value="1911">1911</option><option value="1912">1912</option><option value="1913">1913</option><option value="1914">1914</option><option value="1915">1915</option><option value="1916">1916</option><option value="1917">1917</option><option value="1918">1918</option><option value="1919">1919</option><option value="1920">1920</option><option value="1921">1921</option><option value="1922">1922</option><option value="1923">1923</option><option value="1924">1924</option><option value="1925">1925</option><option value="1926">1926</option><option value="1927">1927</option><option value="1928">1928</option><option value="1929">1929</option><option value="1930">1930</option><option value="1931">1931</option><option value="1932">1932</option><option value="1933">1933</option><option value="1934">1934</option><option value="1935">1935</option><option value="1936">1936</option><option value="1937">1937</option><option value="1938">1938</option><option value="1939">1939</option><option value="1940">1940</option><option value="1941">1941</option><option value="1942">1942</option><option value="1943">1943</option><option value="1944">1944</option><option value="1945">1945</option><option value="1946">1946</option><option value="1947">1947</option><option value="1948">1948</option><option value="1949">1949</option><option value="1950">1950</option><option value="1951">1951</option><option value="1952">1952</option><option value="1953">1953</option><option value="1954">1954</option><option value="1955">1955</option><option value="1956">1956</option><option value="1957">1957</option><option value="1958">1958</option><option value="1959">1959</option><option value="1960">1960</option><option value="1961">1961</option><option value="1962">1962</option><option value="1963">1963</option><option value="1964">1964</option><option value="1965">1965</option><option value="1966">1966</option><option value="1967">1967</option><option value="1968">1968</option><option value="1969">1969</option><option value="1970">1970</option><option value="1971">1971</option><option value="1972">1972</option><option value="1973">1973</option><option value="1974">1974</option><option value="1975">1975</option><option value="1976">1976</option><option value="1977">1977</option><option value="1978">1978</option><option value="1979">1979</option><option value="1980">1980</option><option value="1981">1981</option><option value="1982">1982</option><option value="1983">1983</option><option value="1984">1984</option><option value="1985">1985</option><option value="1986">1986</option><option value="1987">1987</option><option value="1988">1988</option><option value="1989">1989</option><option value="1990">1990</option><option value="1991">1991</option><option value="1992">1992</option><option value="1993">1993</option><option value="1994">1994</option><option value="1995">1995</option><option value="1996">1996</option><option value="1997">1997</option><option value="1998">1998</option><option value="1999">1999</option><option value="2000">2000</option><option value="2001">2001</option><option value="2002">2002</option><option value="2003">2003</option><option value="2004">2004</option><option value="2005">2005</option><option value="2006">2006</option><option value="2007">2007</option><option value="2008">2008</option><option value="2009">2009</option><option value="2010">2010</option><option value="2011">2011</option><option value="2012">2012</option><option value="2013">2013</option><option value="2014">2014</option><option value="2015">2015</option><option value="2016">2016</option><option value="2017">2017</option>
					</select>
					</div>
				     <div class="col-lg-4 col-sm-4">
					<select name="birth-month" class="form-control">
						<option value="">Month</option>
						<option value="01">January</option><option value="02">February</option><option value="03">March</option><option value="04">April</option><option value="05">May</option><option value="06">June</option><option value="07">July</option><option value="08">August</option><option value="09">September</option><option value="10">October</option><option value="11">November</option><option value="12">December</option>
					</select>
					</div>
			         <div class="col-lg-4 col-sm-4">
					<select name="birth-day" class="form-control">
						<option value="">Day</option>
						<option value="01">01</option><option value="02">02</option><option value="03">03</option><option value="04">04</option><option value="05">05</option><option value="06">06</option><option value="07">07</option><option value="08">08</option><option value="09">09</option><option value="10">10</option><option value="11">11</option><option value="12">12</option><option value="13">13</option><option value="14">14</option><option value="15">15</option><option value="16">16</option><option value="17">17</option><option value="18">18</option><option value="19">19</option><option value="20">20</option><option value="21">21</option><option value="22">22</option><option value="23">23</option><option value="24">24</option><option value="25">25</option><option value="26">26</option><option value="27">27</option><option value="28">28</option><option value="29">29</option><option value="30">30</option><option value="31">31</option>
					</select>
					</div>
					</div>
                	   </div>
                      </div>         

                       <div class="row">   
                        <div class="col-lg-6 col-sm-6">
                	   <h4>City of Birth <span style="color:red;">*</span></h4>
                	   <input type="text" class="form-control" name="city-birth" value="{{old('city-birth')}}" required>
                	   </div>
                       <div class="col-lg-6 col-sm-6">
                       	<div class="row">
                       	   <div class="col-lg-6 col-sm-6">
                	            <h4>Country of Birth <span style="color:red;">*</span></h4>
                	           <select name="birth-country" class="form-control">
						
			<option value="">Please select</option>
			
					<option value="AF">Afghanistan</option>
					
					<option value="AL">Albania</option>
					
					<option value="DZ">Algeria</option>
					
					<option value="AS">American Samoa</option>
					
					<option value="AD">Andorra</option>
					
					<option value="AO">Angola</option>
					
					<option value="AI">Anguilla</option>
					
					<option value="AG">Antigua & Barbuda</option>
					
					<option value="AR">Argentina</option>
					
					<option value="AM">Armenia</option>
					
					<option value="AW">Aruba</option>
					
					<option value="au">Australia</option>
					
					<option value="AT">Austria</option>
					
					<option value="AZ">Azerbaijan</option>
					
					<option value="BS">Bahamas</option>
					
					<option value="BH">Bahrain</option>
					
					<option value="BB">Barbados</option>
					
					<option value="BY">Belarus</option>
					
					<option value="BE">Belgium</option>
					
					<option value="BZ">Belize</option>
					
					<option value="BJ">Benin</option>
					
					<option value="BM">Bermuda</option>
					
					<option value="BT">Bhutan</option>
					
					<option value="BO">Bolivia</option>
					
					<option value="BA">Bosnia & Herzegovina</option>
					
					<option value="BW">Botswana</option>
					
					<option value="BR">Brazil</option>
					
					<option value="IO">British Indian Ocean Territory</option>
					
					<option value="VG">British Virgin Islands</option>
					
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
					
					<option value="CC">Cocos (Keeling) Islands</option>
					
					<option value="CO">Colombia</option>
					
					<option value="KM">Comoros</option>
					
					<option value="CG">Congo</option>
					
					<option value="CD">Congo, Dem. Rep.</option>
					
					<option value="CK">Cook Islands</option>
					
					<option value="CR">Costa Rica</option>
					
					<option value="CI">Cote D?ivoire (ivory Coast)</option>
					
					<option value="HR">Croatia</option>
					
					<option value="CU">Cuba</option>
					
					<option value="CY">Cyprus</option>
					
					<option value="CZ">Czech Republic</option>
					
					<option value="DK">Denmark</option>
					
					<option value="DJ">Djibouti</option>
					
					<option value="DM">Dominica</option>
					
					<option value="DO">Dominican Republic</option>
					
					<option value="TL">East Timor</option>
					
					<option value="EC">Ecuador</option>
					
					<option value="EG">Egypt</option>
					
					<option value="SV">El Salvador</option>
					
					<option value="GQ">Equatorial Guinea</option>
					
					<option value="ER">Eritrea</option>
					
					<option value="EE">Estonia</option>
					
					<option value="ET">Ethiopia</option>
					
					<option value="FK">Falkland Islands</option>
					
					<option value="FO">Faroe Islands</option>
					
					<option value="FJ">Fiji</option>
					
					<option value="FI">Finland</option>
					
					<option value="FR">France</option>
					
					<option value="GF">French Guiana</option>
					
					<option value="PF">French Polynesia</option>
					
					<option value="GA">Gabon</option>
					
					<option value="GM">Gambia</option>
					
					<option value="GZ">Gaza Strip</option>
					
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
					
					<option value="GN">Guinea</option>
					
					<option value="GW">Guinea-bissau</option>
					
					<option value="GY">Guyana</option>
					
					<option value="HT">Haiti</option>
					
					<option value="HN">Honduras</option>
					
					<option value="HK">Hong Kong</option>
					
					<option value="HU">Hungary</option>
					
					<option value="IS">Iceland</option>
					
					<option value="ID">Indonesia</option>
					
					<option value="IR">Iran</option>
					
					<option value="IQ">Iraq</option>
					
					<option value="IE">Ireland</option>
					
					<option value="IL">Israel</option>
					
					<option value="IT">Italy</option>
					
					<option value="JM">Jamaica</option>
					
					<option value="JP">Japan</option>
					
					<option value="JO">Jordan</option>
					
					<option value="KZ">Kazakhstan</option>
					
					<option value="KE">Kenya</option>
					
					<option value="KI">Kiribati</option>
					
					<option value="ko">Kosovo</option>
					
					<option value="KW">Kuwait</option>
					
					<option value="KG">Kyrgyzstan</option>
					
					<option value="LA">Laos</option>
					
					<option value="LV">Latvia</option>
					
					<option value="LB">Lebanon</option>
					
					<option value="LS">Lesotho</option>
					
					<option value="LR">Liberia</option>
					
					<option value="LY">Libya</option>
					
					<option value="LI">Liechtenstein</option>
					
					<option value="LT">Lithuania</option>
					
					<option value="LU">Luxembourg</option>
					
					<option value="MO">Macau</option>
					
					<option value="MK">Macedonia, Yugoslavia</option>
					
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
					
					<option value="FM">Micronesia</option>
					
					<option value="MD">Moldova</option>
					
					<option value="MC">Monaco</option>
					
					<option value="MN">Mongolia</option>
					
					<option value="ME">Montenegro</option>
					
					<option value="MS">Montserrat</option>
					
					<option value="MA">Morocco</option>
					
					<option value="MZ">Mozambique</option>
					
					<option value="MM">Myanmar (Burma)</option>
					
					<option value="NA">Namibia</option>
					
					<option value="NT">Native - Country not in list</option>
					
					<option value="NR">Nauru</option>
					
					<option value="NP">Nepal</option>
					
					<option value="NL">Netherlands</option>
					
					<option value="AN">Netherlands Antilles</option>
					
					<option value="NC">New Caledonia</option>
					
					<option value="NZ">New Zealand</option>
					
					<option value="NI">Nicaragua</option>
					
					<option value="NE">Niger</option>
					
					<option value="NG">Nigeria</option>
					
					<option value="NU">Niue</option>
					
					<option value="NF">Norfolk Island</option>
					
					<option value="KP">North Korea</option>
					
					<option value="NN">Northern Ireland</option>
					
					<option value="NO">Norway</option>
					
					<option value="OM">Oman</option>
					
					<option value="PK">Pakistan</option>
					
					<option value="PW">Palau</option>
					
					<option value="PS">Palestinian Territory</option>
					
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
					
					<option value="RE">Reunion</option>
					
					<option value="RO">Romania</option>
					
					<option value="RU">Russia</option>
					
					<option value="RW">Rwanda</option>
					
					<option value="GS">S. Georgia & South Sandwic</option>
					
					<option value="KN">Saint Kitts And Nevis</option>
					
					<option value="LC">Saint Lucia</option>
					
					<option value="PM">Saint Pierre and Miquelon</option>
					
					<option value="VC">Saint Vincent & Grenadines</option>
					
					<option value="WS">Samoa</option>
					
					<option value="SM">San Marino</option>
					
					<option value="ST">Sao Tome And Principe</option>
					
					<option value="SA">Saudi Arabia</option>
					
					<option value="SN">Senegal</option>
					
					<option value="RS">Serbia</option>
					
					<option value="SC">Seychelles</option>
					
					<option value="SL">Sierra Leone</option>
					
					<option value="SG">Singapore</option>
					
					<option value="SK">Slovakia</option>
					
					<option value="SI">Slovenia</option>
					
					<option value="SB">Solomon Islands</option>
					
					<option value="SO">Somalia</option>
					
					<option value="ZA">South Africa</option>
					
					<option value="KR">South Korea</option>
					
					<option value="ES">Spain</option>
					
					<option value="LK">Sri Lanka</option>
					
					<option value="SH">St. Helena</option>
					
					<option value="SD">Sudan</option>
					
					<option value="SR">Suriname</option>
					
					<option value="SJ">Svalbard and Jan Mayen</option>
					
					<option value="SZ">Swaziland</option>
					
					<option value="SE">Sweden</option>
					
					<option value="CH">Switzerland</option>
					
					<option value="SY">Syria</option>
					
					<option value="TW">Taiwan</option>
					
					<option value="TJ">Tajikistan</option>
					
					<option value="TZ">Tanzania</option>
					
					<option value="TH">Thailand</option>
					
					<option value="TG">Togo</option>
					
					<option value="TK">Tokelau</option>
					
					<option value="TO">Tonga</option>
					
					<option value="TT">Trinidad And Tobago</option>
					
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
					
					<option value="UY">Uruguay</option>
					
					<option value="UM">US Outlying Islands</option>
					
					<option value="UZ">Uzbekistan</option>
					
					<option value="VU">Vanuatu</option>
					
					<option value="VA">Vatican City</option>
					
					<option value="VE">Venezuela</option>
					
					<option value="VN">Vietnam</option>
					
					<option value="VI">Virgin Islands, U.S.</option>
					
					<option value="WF">Wallis and Futuna</option>
					
					<option value="EH">Western Sahara</option>
					
					<option value="YE">Yemen</option>
					
					<option value="ZM">Zambia</option>
					
					<option value="ZW">Zimbabwe</option>
					
					</select>
                	         </div>
                
                       	   <div class="col-lg-6 col-sm-6">
                	            <h4>Native Country <span style="color:red;">*</span></h4>
                	           <select name="native-country" class="form-control">
						
			<option value="">Please select</option>
			
					<option value="AF">Afghanistan</option>
					
					<option value="AL">Albania</option>
					
					<option value="DZ">Algeria</option>
					
					<option value="AS">American Samoa</option>
					
					<option value="AD">Andorra</option>
					
					<option value="AO">Angola</option>
					
					<option value="AI">Anguilla</option>
					
					<option value="AG">Antigua & Barbuda</option>
					
					<option value="AR">Argentina</option>
					
					<option value="AM">Armenia</option>
					
					<option value="AW">Aruba</option>
					
					<option value="au">Australia</option>
					
					<option value="AT">Austria</option>
					
					<option value="AZ">Azerbaijan</option>
					
					<option value="BS">Bahamas</option>
					
					<option value="BH">Bahrain</option>
					
					<option value="BB">Barbados</option>
					
					<option value="BY">Belarus</option>
					
					<option value="BE">Belgium</option>
					
					<option value="BZ">Belize</option>
					
					<option value="BJ">Benin</option>
					
					<option value="BM">Bermuda</option>
					
					<option value="BT">Bhutan</option>
					
					<option value="BO">Bolivia</option>
					
					<option value="BA">Bosnia & Herzegovina</option>
					
					<option value="BW">Botswana</option>
					
					<option value="BR">Brazil</option>
					
					<option value="IO">British Indian Ocean Territory</option>
					
					<option value="VG">British Virgin Islands</option>
					
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
					
					<option value="CC">Cocos (Keeling) Islands</option>
					
					<option value="CO">Colombia</option>
					
					<option value="KM">Comoros</option>
					
					<option value="CG">Congo</option>
					
					<option value="CD">Congo, Dem. Rep.</option>
					
					<option value="CK">Cook Islands</option>
					
					<option value="CR">Costa Rica</option>
					
					<option value="CI">Cote D?ivoire (ivory Coast)</option>
					
					<option value="HR">Croatia</option>
					
					<option value="CU">Cuba</option>
					
					<option value="CY">Cyprus</option>
					
					<option value="CZ">Czech Republic</option>
					
					<option value="DK">Denmark</option>
					
					<option value="DJ">Djibouti</option>
					
					<option value="DM">Dominica</option>
					
					<option value="DO">Dominican Republic</option>
					
					<option value="TL">East Timor</option>
					
					<option value="EC">Ecuador</option>
					
					<option value="EG">Egypt</option>
					
					<option value="SV">El Salvador</option>
					
					<option value="GQ">Equatorial Guinea</option>
					
					<option value="ER">Eritrea</option>
					
					<option value="EE">Estonia</option>
					
					<option value="ET">Ethiopia</option>
					
					<option value="FK">Falkland Islands</option>
					
					<option value="FO">Faroe Islands</option>
					
					<option value="FJ">Fiji</option>
					
					<option value="FI">Finland</option>
					
					<option value="FR">France</option>
					
					<option value="GF">French Guiana</option>
					
					<option value="PF">French Polynesia</option>
					
					<option value="GA">Gabon</option>
					
					<option value="GM">Gambia</option>
					
					<option value="GZ">Gaza Strip</option>
					
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
					
					<option value="GN">Guinea</option>
					
					<option value="GW">Guinea-bissau</option>
					
					<option value="GY">Guyana</option>
					
					<option value="HT">Haiti</option>
					
					<option value="HN">Honduras</option>
					
					<option value="HK">Hong Kong</option>
					
					<option value="HU">Hungary</option>
					
					<option value="IS">Iceland</option>
					
					<option value="ID">Indonesia</option>
					
					<option value="IR">Iran</option>
					
					<option value="IQ">Iraq</option>
					
					<option value="IE">Ireland</option>
					
					<option value="IL">Israel</option>
					
					<option value="IT">Italy</option>
					
					<option value="JM">Jamaica</option>
					
					<option value="JP">Japan</option>
					
					<option value="JO">Jordan</option>
					
					<option value="KZ">Kazakhstan</option>
					
					<option value="KE">Kenya</option>
					
					<option value="KI">Kiribati</option>
					
					<option value="ko">Kosovo</option>
					
					<option value="KW">Kuwait</option>
					
					<option value="KG">Kyrgyzstan</option>
					
					<option value="LA">Laos</option>
					
					<option value="LV">Latvia</option>
					
					<option value="LB">Lebanon</option>
					
					<option value="LS">Lesotho</option>
					
					<option value="LR">Liberia</option>
					
					<option value="LY">Libya</option>
					
					<option value="LI">Liechtenstein</option>
					
					<option value="LT">Lithuania</option>
					
					<option value="LU">Luxembourg</option>
					
					<option value="MO">Macau</option>
					
					<option value="MK">Macedonia, Yugoslavia</option>
					
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
					
					<option value="FM">Micronesia</option>
					
					<option value="MD">Moldova</option>
					
					<option value="MC">Monaco</option>
					
					<option value="MN">Mongolia</option>
					
					<option value="ME">Montenegro</option>
					
					<option value="MS">Montserrat</option>
					
					<option value="MA">Morocco</option>
					
					<option value="MZ">Mozambique</option>
					
					<option value="MM">Myanmar (Burma)</option>
					
					<option value="NA">Namibia</option>
					
					<option value="NT">Native - Country not in list</option>
					
					<option value="NR">Nauru</option>
					
					<option value="NP">Nepal</option>
					
					<option value="NL">Netherlands</option>
					
					<option value="AN">Netherlands Antilles</option>
					
					<option value="NC">New Caledonia</option>
					
					<option value="NZ">New Zealand</option>
					
					<option value="NI">Nicaragua</option>
					
					<option value="NE">Niger</option>
					
					<option value="NG">Nigeria</option>
					
					<option value="NU">Niue</option>
					
					<option value="NF">Norfolk Island</option>
					
					<option value="KP">North Korea</option>
					
					<option value="NN">Northern Ireland</option>
					
					<option value="NO">Norway</option>
					
					<option value="OM">Oman</option>
					
					<option value="PK">Pakistan</option>
					
					<option value="PW">Palau</option>
					
					<option value="PS">Palestinian Territory</option>
					
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
					
					<option value="RE">Reunion</option>
					
					<option value="RO">Romania</option>
					
					<option value="RU">Russia</option>
					
					<option value="RW">Rwanda</option>
					
					<option value="GS">S. Georgia & South Sandwic</option>
					
					<option value="KN">Saint Kitts And Nevis</option>
					
					<option value="LC">Saint Lucia</option>
					
					<option value="PM">Saint Pierre and Miquelon</option>
					
					<option value="VC">Saint Vincent & Grenadines</option>
					
					<option value="WS">Samoa</option>
					
					<option value="SM">San Marino</option>
					
					<option value="ST">Sao Tome And Principe</option>
					
					<option value="SA">Saudi Arabia</option>
					
					<option value="SN">Senegal</option>
					
					<option value="RS">Serbia</option>
					
					<option value="SC">Seychelles</option>
					
					<option value="SL">Sierra Leone</option>
					
					<option value="SG">Singapore</option>
					
					<option value="SK">Slovakia</option>
					
					<option value="SI">Slovenia</option>
					
					<option value="SB">Solomon Islands</option>
					
					<option value="SO">Somalia</option>
					
					<option value="ZA">South Africa</option>
					
					<option value="KR">South Korea</option>
					
					<option value="ES">Spain</option>
					
					<option value="LK">Sri Lanka</option>
					
					<option value="SH">St. Helena</option>
					
					<option value="SD">Sudan</option>
					
					<option value="SR">Suriname</option>
					
					<option value="SJ">Svalbard and Jan Mayen</option>
					
					<option value="SZ">Swaziland</option>
					
					<option value="SE">Sweden</option>
					
					<option value="CH">Switzerland</option>
					
					<option value="SY">Syria</option>
					
					<option value="TW">Taiwan</option>
					
					<option value="TJ">Tajikistan</option>
					
					<option value="TZ">Tanzania</option>
					
					<option value="TH">Thailand</option>
					
					<option value="TG">Togo</option>
					
					<option value="TK">Tokelau</option>
					
					<option value="TO">Tonga</option>
					
					<option value="TT">Trinidad And Tobago</option>
					
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
					
					<option value="UY">Uruguay</option>
					
					<option value="UM">US Outlying Islands</option>
					
					<option value="UZ">Uzbekistan</option>
					
					<option value="VU">Vanuatu</option>
					
					<option value="VA">Vatican City</option>
					
					<option value="VE">Venezuela</option>
					
					<option value="VN">Vietnam</option>
					
					<option value="VI">Virgin Islands, U.S.</option>
					
					<option value="WF">Wallis and Futuna</option>
					
					<option value="EH">Western Sahara</option>
					
					<option value="YE">Yemen</option>
					
					<option value="ZM">Zambia</option>
					
					<option value="ZW">Zimbabwe</option>
					
					</select>
                	         </div>                
                         </div>     
                      </div>      
                    </div>         
                    <br><br>
                   <div class="alert alert-info">Contact Details</div>       
                    <div class="row">
                    	<div class="col-lg-12">
                    	  <h4>Address <span style="color:red;">*</span></h4>
                	     <input type="text" class="form-control" name="address" value="{{old('address')}}" required>
                        </div>
                    </div>	   
                    <div class="row">
                    	<div class="col-lg-12">
                    	  <h4>City <span style="color:red;">*</span></h4>
                	     <input type="text" class="form-control" name="city" value="{{old('city')}}" required>
                        </div>
                    </div><br> 
                  <div class="row">
                  	<div class="col-lg-4 col-sm-4">
                    	  <h4>Region <span style="color:red;">*</span></h4>
                	     <input type="text" class="form-control" name="region" value="{{old('region')}}" required>
                        </div>
                        <div class="col-lg-4 col-sm-4">
                    	  <h4>Postal Code <span style="color:red;">*</span></h4>
                	     <input type="text" class="form-control" name="postal-code" value="{{old('postal-code')}}" required>
                        </div>
                        <div class="col-lg-4 col-sm-4">
                    	  <h4>Country <span style="color:red;">*</span></h4>
                	     <select name="contact-country" class="form-control" required>
						
			<option value="">Please select</option>
			
					<option value="AF">Afghanistan</option>
					
					<option value="AL">Albania</option>
					
					<option value="DZ">Algeria</option>
					
					<option value="AS">American Samoa</option>
					
					<option value="AD">Andorra</option>
					
					<option value="AO">Angola</option>
					
					<option value="AI">Anguilla</option>
					
					<option value="AG">Antigua & Barbuda</option>
					
					<option value="AR">Argentina</option>
					
					<option value="AM">Armenia</option>
					
					<option value="AW">Aruba</option>
					
					<option value="au">Australia</option>
					
					<option value="AT">Austria</option>
					
					<option value="AZ">Azerbaijan</option>
					
					<option value="BS">Bahamas</option>
					
					<option value="BH">Bahrain</option>
					
					<option value="BB">Barbados</option>
					
					<option value="BY">Belarus</option>
					
					<option value="BE">Belgium</option>
					
					<option value="BZ">Belize</option>
					
					<option value="BJ">Benin</option>
					
					<option value="BM">Bermuda</option>
					
					<option value="BT">Bhutan</option>
					
					<option value="BO">Bolivia</option>
					
					<option value="BA">Bosnia & Herzegovina</option>
					
					<option value="BW">Botswana</option>
					
					<option value="BR">Brazil</option>
					
					<option value="IO">British Indian Ocean Territory</option>
					
					<option value="VG">British Virgin Islands</option>
					
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
					
					<option value="CC">Cocos (Keeling) Islands</option>
					
					<option value="CO">Colombia</option>
					
					<option value="KM">Comoros</option>
					
					<option value="CG">Congo</option>
					
					<option value="CD">Congo, Dem. Rep.</option>
					
					<option value="CK">Cook Islands</option>
					
					<option value="CR">Costa Rica</option>
					
					<option value="CI">Cote D?ivoire (ivory Coast)</option>
					
					<option value="HR">Croatia</option>
					
					<option value="CU">Cuba</option>
					
					<option value="CY">Cyprus</option>
					
					<option value="CZ">Czech Republic</option>
					
					<option value="DK">Denmark</option>
					
					<option value="DJ">Djibouti</option>
					
					<option value="DM">Dominica</option>
					
					<option value="DO">Dominican Republic</option>
					
					<option value="TL">East Timor</option>
					
					<option value="EC">Ecuador</option>
					
					<option value="EG">Egypt</option>
					
					<option value="SV">El Salvador</option>
					
					<option value="GQ">Equatorial Guinea</option>
					
					<option value="ER">Eritrea</option>
					
					<option value="EE">Estonia</option>
					
					<option value="ET">Ethiopia</option>
					
					<option value="FK">Falkland Islands</option>
					
					<option value="FO">Faroe Islands</option>
					
					<option value="FJ">Fiji</option>
					
					<option value="FI">Finland</option>
					
					<option value="FR">France</option>
					
					<option value="GF">French Guiana</option>
					
					<option value="PF">French Polynesia</option>
					
					<option value="GA">Gabon</option>
					
					<option value="GM">Gambia</option>
					
					<option value="GZ">Gaza Strip</option>
					
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
					
					<option value="GN">Guinea</option>
					
					<option value="GW">Guinea-bissau</option>
					
					<option value="GY">Guyana</option>
					
					<option value="HT">Haiti</option>
					
					<option value="HN">Honduras</option>
					
					<option value="HK">Hong Kong</option>
					
					<option value="HU">Hungary</option>
					
					<option value="IS">Iceland</option>
					
					<option value="ID">Indonesia</option>
					
					<option value="IR">Iran</option>
					
					<option value="IQ">Iraq</option>
					
					<option value="IE">Ireland</option>
					
					<option value="IL">Israel</option>
					
					<option value="IT">Italy</option>
					
					<option value="JM">Jamaica</option>
					
					<option value="JP">Japan</option>
					
					<option value="JO">Jordan</option>
					
					<option value="KZ">Kazakhstan</option>
					
					<option value="KE">Kenya</option>
					
					<option value="KI">Kiribati</option>
					
					<option value="ko">Kosovo</option>
					
					<option value="KW">Kuwait</option>
					
					<option value="KG">Kyrgyzstan</option>
					
					<option value="LA">Laos</option>
					
					<option value="LV">Latvia</option>
					
					<option value="LB">Lebanon</option>
					
					<option value="LS">Lesotho</option>
					
					<option value="LR">Liberia</option>
					
					<option value="LY">Libya</option>
					
					<option value="LI">Liechtenstein</option>
					
					<option value="LT">Lithuania</option>
					
					<option value="LU">Luxembourg</option>
					
					<option value="MO">Macau</option>
					
					<option value="MK">Macedonia, Yugoslavia</option>
					
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
					
					<option value="FM">Micronesia</option>
					
					<option value="MD">Moldova</option>
					
					<option value="MC">Monaco</option>
					
					<option value="MN">Mongolia</option>
					
					<option value="ME">Montenegro</option>
					
					<option value="MS">Montserrat</option>
					
					<option value="MA">Morocco</option>
					
					<option value="MZ">Mozambique</option>
					
					<option value="MM">Myanmar (Burma)</option>
					
					<option value="NA">Namibia</option>
					
					<option value="NT">Native - Country not in list</option>
					
					<option value="NR">Nauru</option>
					
					<option value="NP">Nepal</option>
					
					<option value="NL">Netherlands</option>
					
					<option value="AN">Netherlands Antilles</option>
					
					<option value="NC">New Caledonia</option>
					
					<option value="NZ">New Zealand</option>
					
					<option value="NI">Nicaragua</option>
					
					<option value="NE">Niger</option>
					
					<option value="NG">Nigeria</option>
					
					<option value="NU">Niue</option>
					
					<option value="NF">Norfolk Island</option>
					
					<option value="KP">North Korea</option>
					
					<option value="NN">Northern Ireland</option>
					
					<option value="NO">Norway</option>
					
					<option value="OM">Oman</option>
					
					<option value="PK">Pakistan</option>
					
					<option value="PW">Palau</option>
					
					<option value="PS">Palestinian Territory</option>
					
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
					
					<option value="RE">Reunion</option>
					
					<option value="RO">Romania</option>
					
					<option value="RU">Russia</option>
					
					<option value="RW">Rwanda</option>
					
					<option value="GS">S. Georgia & South Sandwic</option>
					
					<option value="KN">Saint Kitts And Nevis</option>
					
					<option value="LC">Saint Lucia</option>
					
					<option value="PM">Saint Pierre and Miquelon</option>
					
					<option value="VC">Saint Vincent & Grenadines</option>
					
					<option value="WS">Samoa</option>
					
					<option value="SM">San Marino</option>
					
					<option value="ST">Sao Tome And Principe</option>
					
					<option value="SA">Saudi Arabia</option>
					
					<option value="SN">Senegal</option>
					
					<option value="RS">Serbia</option>
					
					<option value="SC">Seychelles</option>
					
					<option value="SL">Sierra Leone</option>
					
					<option value="SG">Singapore</option>
					
					<option value="SK">Slovakia</option>
					
					<option value="SI">Slovenia</option>
					
					<option value="SB">Solomon Islands</option>
					
					<option value="SO">Somalia</option>
					
					<option value="ZA">South Africa</option>
					
					<option value="KR">South Korea</option>
					
					<option value="ES">Spain</option>
					
					<option value="LK">Sri Lanka</option>
					
					<option value="SH">St. Helena</option>
					
					<option value="SD">Sudan</option>
					
					<option value="SR">Suriname</option>
					
					<option value="SJ">Svalbard and Jan Mayen</option>
					
					<option value="SZ">Swaziland</option>
					
					<option value="SE">Sweden</option>
					
					<option value="CH">Switzerland</option>
					
					<option value="SY">Syria</option>
					
					<option value="TW">Taiwan</option>
					
					<option value="TJ">Tajikistan</option>
					
					<option value="TZ">Tanzania</option>
					
					<option value="TH">Thailand</option>
					
					<option value="TG">Togo</option>
					
					<option value="TK">Tokelau</option>
					
					<option value="TO">Tonga</option>
					
					<option value="TT">Trinidad And Tobago</option>
					
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
					
					<option value="UY">Uruguay</option>
					
					<option value="UM">US Outlying Islands</option>
					
					<option value="UZ">Uzbekistan</option>
					
					<option value="VU">Vanuatu</option>
					
					<option value="VA">Vatican City</option>
					
					<option value="VE">Venezuela</option>
					
					<option value="VN">Vietnam</option>
					
					<option value="VI">Virgin Islands, U.S.</option>
					
					<option value="WF">Wallis and Futuna</option>
					
					<option value="EH">Western Sahara</option>
					
					<option value="YE">Yemen</option>
					
					<option value="ZM">Zambia</option>
					
					<option value="ZW">Zimbabwe</option>
					
					</select>
                        </div>
                  </div>       
                  
                  <br><br>
                   <div class="alert alert-info">Further Information</div>    
              
                   <div class="row">
                    	<div class="col-lg-12">
                    	  <h4>Current marital status <span style="color:red;">*</span></h4>
                          <div class="row">
                        	<div class="col-lg-3 col-sm-3">
                	          <div class="radio">
                	           <label>
                	            <span style="font-size:1.2em;">Single</span>
                	            <input type="radio" name="marital-status" id="m-s-1" class="form-control" value="single">
                	            
                              </label>
                             </div>
                            </div>
                            <div class="col-lg-3 col-sm-3">
                	          <div class="radio">
                	           <label>
                	            <span style="font-size:1.2em;">Married</span>
                	            <input type="radio" name="marital-status" id="m-s-2" class="form-control" value="married">
                	            
                              </label>
                             </div>
                            </div><div class="col-lg-3 col-sm-3">
                	          <div class="radio">
                	           <label>
                	            <span style="font-size:1.2em;">Divorced/Separated</span>
                	            <input type="radio" name="marital-status" id="m-s-3" class="form-control" value="divorced-separated">
                	            
                              </label>
                             </div>
                            </div><div class="col-lg-3 col-sm-3">
                	          <div class="radio">
                	           <label>
                	            <span style="font-size:1.2em;">Widowed</span>
                	            <input type="radio" name="marital-status" id="m-s-4" class="form-control" value="widowed">
                	            
                              </label>
                             </div>
                            </div>
                            
                            
                         </div>
                        </div>
                    </div><br>  
                    <div class="row">
                    	<h4>Kids <span style="color:red;">*</span></h4>
                    	<div class="col-lg-6 col-sm-6">
                    	 <select class="form-control" name="kids">
                    	  <option value="0">0</option>
                          <option value="1">1</option>
                          <option value="2">2</option>
                          <option value="3">3</option>
                          <option value="4">4</option>
                          <option value="5">5</option>
                          <option value="6">6</option>
                         </select>
                        </div>
                        <div class="col-lg-6 col-sm-6"></div>
                    </div>
                    <br><br>
                    <button type="submit" class="btn btn-success">Next</button>
                </form>
            
        
        </div>
</section><!--main-section-end-->