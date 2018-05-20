@extends('layouts.app')

@section('style')
<style>
	.btn-xs{
		margin: 0 !important;
	}
</style>
@endsection

@section('content')

<div class="container edit-user-profile">
    <div class="row">

        <div class="col-md-8 col-md-offset-2">

			<form  method="POST" action="{{ route('UserController.update', [$user->id]) }}" enctype="multipart/form-data">
              	{!! csrf_field() !!}

			<h3>
				{{ Auth::user()->first_name }} {{ Auth::user()->last_name }} 
				<b>Tipi: </b><span>{{ Auth()->user()->testResults->last()->finaltype }}</span>
			</h3>

			<p><b>Emaili:</b> {{ Auth::user()->email }}</p>
			
			<p><b>Profil i verifikuar:</b> {{ (Auth::user()->verified == '0' ? 'Jo' : 'Po') }}</p>
			
			<p><b>Profili u Krijua me:</b> {{ Auth::user()->created_at->format('d-m-Y') }}</p>


			<p><b>Data Lindjes: </b> {{ date('d-m-Y', strtotime(Auth::user()->age)) }}</p> 

			<div class="col-md-2">
				<h4><b>Gjinia:</b></h4>
			</div>
			<div class="col-md-10">
				<div class="form-group">
					<select class="form-control" name="gjinia" >
						<option value="">Gjinia</option>
						<option value="M" {{ $user->gjinia == "M" ? 'selected="selected"' : '' }}>Mashkull</option>
						<option value="F" {{ $user->gjinia == "F" ? 'selected="selected"' : '' }}>Femër</option>
					</select>
				</div>
			</div>
			
			<div class="col-md-2">
				<h4><b>Adresa:</b></h4>
			</div>
			<div class="col-md-10">
				<div class="form-group">
					<input type="text" class="form-control" name="adresa" placeholder="Adresa" value="{{ $user->adresa }}">
				</div>
			</div>
			
			<div class="col-md-2">
				<h4><b>Shteti:</b></h4>
			</div>
			<div class="col-md-10">
				<div class="form-group">
					{{-- <input type="text" class="form-control" name="shteti" placeholder="Shteti" value="{{ $user->shteti }}"> --}}

					<select class="form-control" id="country" name="shteti">
							<option value="" selected="selected"></option>
							<option value="Kosovë" {{ $user->shteti == "Kosovë" ? 'selected="selected"' : '' }} >Kosovë</option>
							<option value="Afghanistan" {{ $user->shteti == "Afghanistan" ? 'selected="selected"' : '' }}>Afghanistan</option>
							<option value="Shqiperi" {{ $user->shteti == "Shqiperi" ? 'selected="selected"' : '' }}>Albania</option>
							<option value="Algeria" {{ $user->shteti == "Algeria" ? 'selected="selected"' : '' }}>Algeria</option>
							<option value="Andorra" {{ $user->shteti == "Andorra" ? 'selected="selected"' : '' }}>Andorra</option>
							<option value="Antigua and Barbuda" {{ $user->shteti == "Antigua and Barbuda" ? 'selected="selected"' : '' }}>Antigua and Barbuda</option>
							<option value="Argentina" {{ $user->shteti == "Argentina" ? 'selected="selected"' : '' }}>Argentina</option>
							<option value="Armenia" {{ $user->shteti == "Armenia" ? 'selected="selected"' : '' }}>Armenia</option>
							<option value="Australia" {{ $user->shteti == "Australia" ? 'selected="selected"' : '' }}>Australia</option>
							<option value="Austria" {{ $user->shteti == "Austria" ? 'selected="selected"' : '' }}>Austria</option>
							<option value="Azerbaijan" {{ $user->shteti == "Azerbaijan" ? 'selected="selected"' : '' }}>Azerbaijan</option>
							<option value="Bahamas" {{ $user->shteti == "Bahamas" ? 'selected="selected"' : '' }}>Bahamas</option>
							<option value="Bahrain" {{ $user->shteti == "Bahrain" ? 'selected="selected"' : '' }}>Bahrain</option>
							<option value="Bangladesh" {{ $user->shteti == "Bangladesh" ? 'selected="selected"' : '' }}>Bangladesh</option>
							<option value="Barbados" {{ $user->shteti == "Barbados" ? 'selected="selected"' : '' }}>Barbados</option>
							<option value="Belarus" {{ $user->shteti == "Belarus" ? 'selected="selected"' : '' }}>Belarus</option>
							<option value="Belgium" {{ $user->shteti == "Belgium" ? 'selected="selected"' : '' }}>Belgium</option>
							<option value="Belize" {{ $user->shteti == "Belize" ? 'selected="selected"' : '' }}>Belize</option>
							<option value="Benin" {{ $user->shteti == "Benin" ? 'selected="selected"' : '' }}>Benin</option>
							<option value="Bhutan" {{ $user->shteti == "Bhutan" ? 'selected="selected"' : '' }}>Bhutan</option>
							<option value="Bolivia" {{ $user->shteti == "Bolivia" ? 'selected="selected"' : '' }}>Bolivia</option>
							<option value="Bosnia and Herzegovina" {{ $user->shteti == "Bosnia and Herzegovina" ? 'selected="selected"' : '' }}>Bosnia and Herzegovina</option>
							<option value="Botswana" {{ $user->shteti == "Botswana" ? 'selected="selected"' : '' }}>Botswana</option>
							<option value="Brazil" {{ $user->shteti == "Brazil" ? 'selected="selected"' : '' }}>Brazil</option>
							<option value="Brunei" {{ $user->shteti == "Brunei" ? 'selected="selected"' : '' }}>Brunei</option>
							<option value="Bulgaria" {{ $user->shteti == "Bulgaria" ? 'selected="selected"' : '' }}>Bulgaria</option>
							<option value="Burkina Faso" {{ $user->shteti == "Burkina Faso" ? 'selected="selected"' : '' }}>Burkina Faso</option>
							<option value="Burundi" {{ $user->shteti == "Burundi" ? 'selected="selected"' : '' }}>Burundi</option>
							<option value="Cambodia" {{ $user->shteti == "Cambodia" ? 'selected="selected"' : '' }}>Cambodia</option>
							<option value="Cameroon" {{ $user->shteti == "Cameroon" ? 'selected="selected"' : '' }}>Cameroon</option>
							<option value="Canada" {{ $user->shteti == "Canada" ? 'selected="selected"' : '' }}>Canada</option>
							<option value="Cape Verde" {{ $user->shteti == "Cape Verde" ? 'selected="selected"' : '' }}>Cape Verde</option>
							<option value="Central African Republic" {{ $user->shteti == "Central African Republic" ? 'selected="selected"' : '' }}>Central African Republic</option>
							<option value="Chad" {{ $user->shteti == "Chad" ? 'selected="selected"' : '' }}>Chad</option>
							<option value="Chile" {{ $user->shteti == "Chile" ? 'selected="selected"' : '' }}>Chile</option>
							<option value="China" {{ $user->shteti == "China" ? 'selected="selected"' : '' }}>China</option>
							<option value="Colombia" {{ $user->shteti == "Colombia" ? 'selected="selected"' : '' }}>Colombia</option>
							<option value="Comoros" {{ $user->shteti == "Comoros" ? 'selected="selected"' : '' }}>Comoros</option>
							<option value="Congo" {{ $user->shteti == "Congo" ? 'selected="selected"' : '' }}>Congo</option>
							<option value="Costa Rica" {{ $user->shteti == "Costa Rica" ? 'selected="selected"' : '' }}>Costa Rica</option>
							<option value="Cote d'Ivoire" {{ $user->shteti == "Cote d'Ivoire" ? 'selected="selected"' : '' }}>Cote d'Ivoire</option>
							<option value="Croatia" {{ $user->shteti == "Croatia" ? 'selected="selected"' : '' }}>Croatia</option>
							<option value="Cuba" {{ $user->shteti == "Cuba" ? 'selected="selected"' : '' }}>Cuba</option>
							<option value="Cyprus" {{ $user->shteti == "KosCyprusovë" ? 'selected="selected"' : '' }}>Cyprus</option>
							<option value="Czech Republic" {{ $user->shteti == "Czech Republic" ? 'selected="selected"' : '' }}>Czech Republic</option>
							<option value="Denmark" {{ $user->shteti == "Denmark" ? 'selected="selected"' : '' }}>Denmark</option>
							<option value="Djibouti" {{ $user->shteti == "Djibouti" ? 'selected="selected"' : '' }}>Djibouti</option>
							<option value="Dominica" {{ $user->shteti == "Dominica" ? 'selected="selected"' : '' }}>Dominica</option>
							<option value="Dominican Republic" {{ $user->shteti == "Dominican Republic" ? 'selected="selected"' : '' }}>Dominican Republic</option>
							<option value="East Timor" {{ $user->shteti == "East Timor" ? 'selected="selected"' : '' }}>East Timor</option>
							<option value="Ecuador" {{ $user->shteti == "Ecuador" ? 'selected="selected"' : '' }}>Ecuador</option>
							<option value="Egypt" {{ $user->shteti == "Egypt" ? 'selected="selected"' : '' }}>Egypt</option>
							<option value="El Salvador" {{ $user->shteti == "El Salvador" ? 'selected="selected"' : '' }}>El Salvador</option>
							<option value="Equatorial Guinea" {{ $user->shteti == "Equatorial Guinea" ? 'selected="selected"' : '' }}>Equatorial Guinea</option>
							<option value="Eritrea" {{ $user->shteti == "Eritrea" ? 'selected="selected"' : '' }}>Eritrea</option>
							<option value="Estonia" {{ $user->shteti == "Estonia" ? 'selected="selected"' : '' }}>Estonia</option>
							<option value="Ethiopia" {{ $user->shteti == "Ethiopia" ? 'selected="selected"' : '' }}>Ethiopia</option>
							<option value="Fiji" {{ $user->shteti == "Fiji" ? 'selected="selected"' : '' }}>Fiji</option>
							<option value="Finland" {{ $user->shteti == "Finland" ? 'selected="selected"' : '' }}>Finland</option>
							<option value="France" {{ $user->shteti == "France" ? 'selected="selected"' : '' }}>France</option>
							<option value="Gabon" {{ $user->shteti == "Gabon" ? 'selected="selected"' : '' }}>Gabon</option>
							<option value="Gambia" {{ $user->shteti == "Gambia" ? 'selected="selected"' : '' }}>Gambia</option>
							<option value="Georgia" {{ $user->shteti == "Georgia" ? 'selected="selected"' : '' }}>Georgia</option>
							<option value="Germany" {{ $user->shteti == "Germany" ? 'selected="selected"' : '' }}>Germany</option>
							<option value="Ghana" {{ $user->shteti == "Ghana" ? 'selected="selected"' : '' }}>Ghana</option>
							<option value="Greece" {{ $user->shteti == "Greece" ? 'selected="selected"' : '' }}>Greece</option>
							<option value="Grenada" {{ $user->shteti == "Grenada" ? 'selected="selected"' : '' }}>Grenada</option>
							<option value="Guatemala" {{ $user->shteti == "Guatemala" ? 'selected="selected"' : '' }}>Guatemala</option>
							<option value="Guinea" {{ $user->shteti == "Guinea" ? 'selected="selected"' : '' }}>Guinea</option>
							<option value="Guinea-Bissau" {{ $user->shteti == "Guinea-Bissau" ? 'selected="selected"' : '' }}>Guinea-Bissau</option>
							<option value="Guyana" {{ $user->shteti == "Guyana" ? 'selected="selected"' : '' }}>Guyana</option>
							<option value="Haiti" {{ $user->shteti == "Haiti" ? 'selected="selected"' : '' }}>Haiti</option>
							<option value="Honduras" {{ $user->shteti == "Honduras" ? 'selected="selected"' : '' }}>Honduras</option>
							<option value="Hong Kong" {{ $user->shteti == "Hong Kong" ? 'selected="selected"' : '' }}>Hong Kong</option>
							<option value="Hungary" {{ $user->shteti == "Hungary" ? 'selected="selected"' : '' }}>Hungary</option>
							<option value="Iceland" {{ $user->shteti == "Iceland" ? 'selected="selected"' : '' }}>Iceland</option>
							<option value="India" {{ $user->shteti == "India" ? 'selected="selected"' : '' }}>India</option>
							<option value="Indonesia" {{ $user->shteti == "Indonesia" ? 'selected="selected"' : '' }}>Indonesia</option>
							<option value="Iran" {{ $user->shteti == "Iran" ? 'selected="selected"' : '' }}>Iran</option>
							<option value="Iraq" {{ $user->shteti == "Iraq" ? 'selected="selected"' : '' }}>Iraq</option>
							<option value="Ireland" {{ $user->shteti == "Ireland" ? 'selected="selected"' : '' }}>Ireland</option>
							<option value="Israel" {{ $user->shteti == "Israel" ? 'selected="selected"' : '' }}>Israel</option>
							<option value="Italy" {{ $user->shteti == "Italy" ? 'selected="selected"' : '' }}>Italy</option>
							<option value="Jamaica" {{ $user->shteti == "Jamaica" ? 'selected="selected"' : '' }}>Jamaica</option>
							<option value="Japan" {{ $user->shteti == "Japan" ? 'selected="selected"' : '' }}>Japan</option>
							<option value="Jordan" {{ $user->shteti == "Jordan" ? 'selected="selected"' : '' }}>Jordan</option>
							<option value="Kazakhstan" {{ $user->shteti == "Kazakhstan" ? 'selected="selected"' : '' }}>Kazakhstan</option>
							<option value="Kenya" {{ $user->shteti == "Kenya" ? 'selected="selected"' : '' }}>Kenya</option>
							<option value="Kiribati" {{ $user->shteti == "Kiribati" ? 'selected="selected"' : '' }}>Kiribati</option>
							<option value="South Korea" {{ $user->shteti == "South Korea" ? 'selected="selected"' : '' }}>South Korea</option>
							<option value="Kuwait" {{ $user->shteti == "Kuwait" ? 'selected="selected"' : '' }}>Kuwait</option>
							<option value="Kyrgyzstan" {{ $user->shteti == "Kyrgyzstan" ? 'selected="selected"' : '' }}>Kyrgyzstan</option>
							<option value="Laos" {{ $user->shteti == "Laos" ? 'selected="selected"' : '' }}>Laos</option>
							<option value="Latvia" {{ $user->shteti == "Latvia" ? 'selected="selected"' : '' }}>Latvia</option>
							<option value="Lebanon" {{ $user->shteti == "Lebanon" ? 'selected="selected"' : '' }}>Lebanon</option>
							<option value="Lesotho" {{ $user->shteti == "Lesotho" ? 'selected="selected"' : '' }}>Lesotho</option>
							<option value="Liberia" {{ $user->shteti == "Liberia" ? 'selected="selected"' : '' }}>Liberia</option>
							<option value="Libya" {{ $user->shteti == "Libya" ? 'selected="selected"' : '' }}>Libya</option>
							<option value="Liechtenstein" {{ $user->shteti == "Liechtenstein" ? 'selected="selected"' : '' }}>Liechtenstein</option>
							<option value="Lithuania" {{ $user->shteti == "Lithuania" ? 'selected="selected"' : '' }}>Lithuania</option>
							<option value="Luxembourg" {{ $user->shteti == "Luxembourg" ? 'selected="selected"' : '' }}>Luxembourg</option>
							<option value="Macedonia" {{ $user->shteti == "Macedonia" ? 'selected="selected"' : '' }}>Macedonia</option>
							<option value="Madagascar" {{ $user->shteti == "Madagascar" ? 'selected="selected"' : '' }}>Madagascar</option>
							<option value="Malawi" {{ $user->shteti == "Malawi" ? 'selected="selected"' : '' }}>Malawi</option>
							<option value="Malaysia" {{ $user->shteti == "Malaysia" ? 'selected="selected"' : '' }}>Malaysia</option>
							<option value="Maldives" {{ $user->shteti == "Maldives" ? 'selected="selected"' : '' }}>Maldives</option>
							<option value="Mali" {{ $user->shteti == "Mali" ? 'selected="selected"' : '' }}>Mali</option>
							<option value="Malta" {{ $user->shteti == "Malta" ? 'selected="selected"' : '' }}>Malta</option>
							<option value="Marshall Islands" {{ $user->shteti == "Marshall Islands" ? 'selected="selected"' : '' }}>Marshall Islands</option>
							<option value="Mauritania" {{ $user->shteti == "Mauritania" ? 'selected="selected"' : '' }}>Mauritania</option>
							<option value="Mauritius" {{ $user->shteti == "Mauritius" ? 'selected="selected"' : '' }}>Mauritius</option>
							<option value="Mexico" {{ $user->shteti == "Mexico" ? 'selected="selected"' : '' }}>Mexico</option>
							<option value="Micronesia" {{ $user->shteti == "Micronesia" ? 'selected="selected"' : '' }}>Micronesia</option>
							<option value="Moldova" {{ $user->shteti == "Moldova" ? 'selected="selected"' : '' }}>Moldova</option>
							<option value="Monaco" {{ $user->shteti == "Monaco" ? 'selected="selected"' : '' }}>Monaco</option>
							<option value="Mongolia" {{ $user->shteti == "Mongolia" ? 'selected="selected"' : '' }}>Mongolia</option>
							<option value="Montenegro" {{ $user->shteti == "Montenegro" ? 'selected="selected"' : '' }}>Montenegro</option>
							<option value="Morocco" {{ $user->shteti == "Morocco" ? 'selected="selected"' : '' }}>Morocco</option>
							<option value="Mozambique" {{ $user->shteti == "Mozambique" ? 'selected="selected"' : '' }}>Mozambique</option>
							<option value="Myanmar" {{ $user->shteti == "Myanmar" ? 'selected="selected"' : '' }}>Myanmar</option>
							<option value="Namibia" {{ $user->shteti == "Namibia" ? 'selected="selected"' : '' }}>Namibia</option>
							<option value="Nauru" {{ $user->shteti == "Nauru" ? 'selected="selected"' : '' }}>Nauru</option>
							<option value="Nepal" {{ $user->shteti == "Nepal" ? 'selected="selected"' : '' }}>Nepal</option>
							<option value="Netherlands" {{ $user->shteti == "Netherlands" ? 'selected="selected"' : '' }}>Netherlands</option>
							<option value="New Zealand" {{ $user->shteti == "New Zealand" ? 'selected="selected"' : '' }}>New Zealand</option>
							<option value="Nicaragua" {{ $user->shteti == "Nicaragua" ? 'selected="selected"' : '' }}>Nicaragua</option>
							<option value="Niger" {{ $user->shteti == "Niger" ? 'selected="selected"' : '' }}>Niger</option>
							<option value="Nigeria" {{ $user->shteti == "Nigeria" ? 'selected="selected"' : '' }}>Nigeria</option>
							<option value="Norway" {{ $user->shteti == "Norway" ? 'selected="selected"' : '' }}>Norway</option>
							<option value="Oman" {{ $user->shteti == "Oman" ? 'selected="selected"' : '' }}>Oman</option>
							<option value="Pakistan" {{ $user->shteti == "Pakistan" ? 'selected="selected"' : '' }}>Pakistan</option>
							<option value="Palau" {{ $user->shteti == "Palau" ? 'selected="selected"' : '' }}>Palau</option>
							<option value="Panama" {{ $user->shteti == "Panama" ? 'selected="selected"' : '' }}>Panama</option>
							<option value="Papua New Guinea" {{ $user->shteti == "Papua New Guinea" ? 'selected="selected"' : '' }}>Papua New Guinea</option>
							<option value="Paraguay" {{ $user->shteti == "Paraguay" ? 'selected="selected"' : '' }}>Paraguay</option>
							<option value="Peru" {{ $user->shteti == "Peru" ? 'selected="selected"' : '' }}>Peru</option>
							<option value="Philippines" {{ $user->shteti == "Philippines" ? 'selected="selected"' : '' }}>Philippines</option>
							<option value="Poland" {{ $user->shteti == "Poland" ? 'selected="selected"' : '' }}>Poland</option>
							<option value="Portugal" {{ $user->shteti == "Portugal" ? 'selected="selected"' : '' }}>Portugal</option>
							<option value="Puerto Rico" {{ $user->shteti == "Puerto Rico" ? 'selected="selected"' : '' }}>Puerto Rico</option>
							<option value="Qatar" {{ $user->shteti == "Qatar" ? 'selected="selected"' : '' }}>Qatar</option>
							<option value="Romania" {{ $user->shteti == "Romania" ? 'selected="selected"' : '' }}>Romania</option>
							<option value="Russia" {{ $user->shteti == "Russia" ? 'selected="selected"' : '' }}>Russia</option>
							<option value="Rwanda" {{ $user->shteti == "Rwanda" ? 'selected="selected"' : '' }}>Rwanda</option>
							<option value="Saint Kitts and Nevis" {{ $user->shteti == "Saint Kitts and Nevis" ? 'selected="selected"' : '' }}>Saint Kitts and Nevis</option>
							<option value="Saint Lucia" {{ $user->shteti == "Saint Lucia" ? 'selected="selected"' : '' }}>Saint Lucia</option>
							<option value="Saint Vincent and the Grenadines" {{ $user->shteti == "Saint Vincent and the Grenadines" ? 'selected="selected"' : '' }}>Saint Vincent and the Grenadines</option>
							<option value="Samoa" {{ $user->shteti == "Samoa" ? 'selected="selected"' : '' }}>Samoa</option>
							<option value="San Marino" {{ $user->shteti == "San Marino" ? 'selected="selected"' : '' }}>San Marino</option>
							<option value="Sao Tome and Principe" {{ $user->shteti == "Sao Tome and Principe" ? 'selected="selected"' : '' }}>Sao Tome and Principe</option>
							<option value="Saudi Arabia" {{ $user->shteti == "Saudi Arabia" ? 'selected="selected"' : '' }}>Saudi Arabia</option>
							<option value="Senegal" {{ $user->shteti == "Senegal" ? 'selected="selected"' : '' }}>Senegal</option>
							<option value="Serbia and Montenegro" {{ $user->shteti == "Serbia and Montenegro" ? 'selected="selected"' : '' }}>Serbia and Montenegro</option>
							<option value="Seychelles" {{ $user->shteti == "Seychelles" ? 'selected="selected"' : '' }}>Seychelles</option>
							<option value="Sierra Leone" {{ $user->shteti == "Sierra Leone" ? 'selected="selected"' : '' }}>Sierra Leone</option>
							<option value="Singapore" {{ $user->shteti == "Singapore" ? 'selected="selected"' : '' }}>Singapore</option>
							<option value="Slovakia" {{ $user->shteti == "Slovakia" ? 'selected="selected"' : '' }}>Slovakia</option>
							<option value="Slovenia" {{ $user->shteti == "Slovenia" ? 'selected="selected"' : '' }}>Slovenia</option>
							<option value="Solomon Islands" {{ $user->shteti == "Solomon Islands" ? 'selected="selected"' : '' }}>Solomon Islands</option>
							<option value="Somalia" {{ $user->shteti == "Somalia" ? 'selected="selected"' : '' }}>Somalia</option>
							<option value="South Africa" {{ $user->shteti == "South Africa" ? 'selected="selected"' : '' }}>South Africa</option>
							<option value="Spain" {{ $user->shteti == "Spain" ? 'selected="selected"' : '' }}>Spain</option>
							<option value="Sri Lanka" {{ $user->shteti == "Sri Lanka" ? 'selected="selected"' : '' }}>Sri Lanka</option>
							<option value="Sudan" {{ $user->shteti == "Sudan" ? 'selected="selected"' : '' }}>Sudan</option>
							<option value="Suriname" {{ $user->shteti == "Suriname" ? 'selected="selected"' : '' }}>Suriname</option>
							<option value="Swaziland" {{ $user->shteti == "Swaziland" ? 'selected="selected"' : '' }}>Swaziland</option>
							<option value="Sweden" {{ $user->shteti == "Sweden" ? 'selected="selected"' : '' }}>Sweden</option>
							<option value="Switzerland" {{ $user->shteti == "Switzerland" ? 'selected="selected"' : '' }}>Switzerland</option>
							<option value="Syria" {{ $user->shteti == "Syria" ? 'selected="selected"' : '' }}>Syria</option>
							<option value="Taiwan" {{ $user->shteti == "Taiwan" ? 'selected="selected"' : '' }}>Taiwan</option>
							<option value="Tajikistan" {{ $user->shteti == "Tajikistan" ? 'selected="selected"' : '' }}>Tajikistan</option>
							<option value="Tanzania" {{ $user->shteti == "Tanzania" ? 'selected="selected"' : '' }}>Tanzania</option>
							<option value="Thailand" {{ $user->shteti == "Thailand" ? 'selected="selected"' : '' }}>Thailand</option>
							<option value="Togo" {{ $user->shteti == "Togo" ? 'selected="selected"' : '' }}>Togo</option>
							<option value="Tonga" {{ $user->shteti == "Tonga" ? 'selected="selected"' : '' }}>Tonga</option>
							<option value="Trinidad and Tobago" {{ $user->shteti == "Trinidad and Tobago" ? 'selected="selected"' : '' }}>Trinidad and Tobago</option>
							<option value="Tunisia" {{ $user->shteti == "Tunisia" ? 'selected="selected"' : '' }}>Tunisia</option>
							<option value="Turkey" {{ $user->shteti == "Turkey" ? 'selected="selected"' : '' }}>Turkey</option>
							<option value="Turkmenistan" {{ $user->shteti == "Turkmenistan" ? 'selected="selected"' : '' }}>Turkmenistan</option>
							<option value="Tuvalu" {{ $user->shteti == "Tuvalu" ? 'selected="selected"' : '' }}>Tuvalu</option>
							<option value="Uganda" {{ $user->shteti == "Uganda" ? 'selected="selected"' : '' }}>Uganda</option>
							<option value="Ukraine" {{ $user->shteti == "Ukraine" ? 'selected="selected"' : '' }}>Ukraine</option>
							<option value="United Arab Emirates" {{ $user->shteti == "United Arab Emirates" ? 'selected="selected"' : '' }}>United Arab Emirates</option>
							<option value="United Kingdom" {{ $user->shteti == "United Kingdom" ? 'selected="selected"' : '' }}>United Kingdom</option>
							<option value="United States" {{ $user->shteti == "United States" ? 'selected="selected"' : '' }}>United States</option>
							<option value="Uruguay" {{ $user->shteti == "Uruguay" ? 'selected="selected"' : '' }}>Uruguay</option>
							<option value="Uzbekistan" {{ $user->shteti == "Uzbekistan" ? 'selected="selected"' : '' }}>Uzbekistan</option>
							<option value="Vanuatu" {{ $user->shteti == "Vanuatu" ? 'selected="selected"' : '' }}>Vanuatu</option>
							<option value="Vatican City" {{ $user->shteti == "Vatican City" ? 'selected="selected"' : '' }}>Vatican City</option>
							<option value="Venezuela" {{ $user->shteti == "Venezuela" ? 'selected="selected"' : '' }}>Venezuela</option>
							<option value="Vietnam" {{ $user->shteti == "Vietnam" ? 'selected="selected"' : '' }}>Vietnam</option>
							<option value="Yemen" {{ $user->shteti == "Yemen" ? 'selected="selected"' : '' }}>Yemen</option>
							<option value="Zambia" {{ $user->shteti == "Zambia" ? 'selected="selected"' : '' }}>Zambia</option>
							<option value="Zimbabwe" {{ $user->shteti == "Zimbabwe" ? 'selected="selected"' : '' }}>Zimbabwe</option>
						</select>
				</div>
			</div>

			<div class="col-md-2">
				<h4><b>Shkollimi:</b></h4>
			</div>
			<div class="col-md-10">
				<div class="form-group">
					<input type="text" class="form-control" name="shkollimi" placeholder="Shkollimi" value="{{ $user->shkollimi }}">
				</div>
			</div>
			
			<div class="col-md-2">
				<h4><b>Vendëlindja:</b></h4>
			</div>
			<div class="col-md-10">
				<div class="form-group">
					<input type="text" class="form-control" name="vendlindja" placeholder="Vendëlindja" value="{{ $user->vendlindja }}">
				</div>
			</div>
			
			<div class="col-md-2">
				<h4><b>Hobby:</b></h4>
			</div>
			<div class="col-md-10">
				<div class="form-group">
					<input type="text" class="form-control" name="hobby" placeholder="Hobby" value="{{ $user->hobby }}">
				</div>
			</div>
			
			<div class="form-group">
                	<button type="submit" class="btn btn-primary pull-right cleftButton" name="submit" id="submit"><i class="fa fa-save"></i> &nbsp; Ruaje</button>
                </div>
            </form>
        </div>
    </div>
</div>



@endsection
