<?php session_start() ?>
<!DOCTYPE html>
<html class="supernova"><head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <!-- Required meta tags -->
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />

    <!-- Bootstrap CSS -->
    <link
      href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css"
      rel="stylesheet"
      integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC"
      crossorigin="anonymous"
    />
    <link
      rel="stylesheet"
      href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css"
      integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p"
      crossorigin="anonymous"
    />

<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=2.0, user-scalable=1" />
<meta name="HandheldFriendly" content="true" />
<title>Furisrescue</title>
<link href="https://cdn01.jotfor.ms/static/formCss.css?3.3.30220" rel="stylesheet" type="text/css" />
<link type="text/css" rel="stylesheet" href="https://cdn02.jotfor.ms/css/styles/baby_blue.css?3.3.30220" />
<style type="text/css">@media print{.form-section{display:inline!important}.form-pagebreak{display:none!important}.form-section-closed{height:auto!important}.page-section{position:initial!important}}</style>
<link type="text/css" rel="stylesheet" href="https://cdn03.jotfor.ms/css/styles/nova.css?3.3.30220" />
<link type="text/css" rel="stylesheet" href="https://cdn01.jotfor.ms/themes/CSS/54a7a9e325d790551f8b4567.css?themeRevisionID=57debb589a11c716be8b4567"/>
<link rel="stylesheet" href="adoption_form.css">

<style type="text/css">
    .nav-link{
    font-size: 18px;
    }

    .mask-custom {
    backdrop-filter: blur(5px);
    background-color: rgba(97, 96, 96, 0.15);
    margin-bottom: 80px;
    }

    .navbar-brand {
    font-size: 1.75rem;
    letter-spacing: 2px;
    }
    .logo1{
    background-color: black;
    padding: 5px;
    color:#fff;
    }
    .form-label-left{
        width:150px;
    }
    .form-line{
        padding-top:10px;
        padding-bottom:10px;
    }
    .form-label-right{
        width:150px;
    }
    body, html{
        margin:0;
        padding:0;
        background:rgba(0, 0, 0, 0.72);
    }
    .form-all{
        margin:80px auto;
        padding-top:20px;
        width:550px;
        color:rgb(255, 255, 255) !important;
        font-family:'Muli';
        font-size:16px;
    }
    .form-radio-item label, .form-checkbox-item label, .form-grading-label, .form-header{
        color: rgb(57, 79, 95);
    }
</style>

<style type="text/css" id="form-designer-style">
    .form-all {
      font-family: Muli, sans-serif;
    }
    .form-all .qq-upload-button,
    .form-all .form-submit-button,
    .form-all .form-submit-reset,
    .form-all .form-submit-print {
      font-family: Muli, sans-serif;
    }
    .form-all .form-pagebreak-back-container,
    .form-all .form-pagebreak-next-container {
      font-family: Muli, sans-serif;
    }
    .form-header-group {
      font-family: Muli, sans-serif;
    }
    .form-label {
      font-family: Muli, sans-serif;
    }
  
    .form-label.form-label-auto {
      
    display: inline-block;
    float: left;
    text-align: left;
  
    }
  
    .form-line {
      margin-top: 10px;
      margin-bottom: 10px;
    }
  
    .form-all {
      width: 550px;
    }
  
    .form-label-left,
    .form-label-right,
    .form-label-left.form-label-auto,
    .form-label-right.form-label-auto {
      width: 150px;
    }
  
    .form-all {
      font-size: 16px
    }
    .form-all .qq-upload-button,
    .form-all .qq-upload-button,
    .form-all .form-submit-button,
    .form-all .form-submit-reset,
    .form-all .form-submit-print {
      font-size: 16px
    }
    .form-all .form-pagebreak-back-container,
    .form-all .form-pagebreak-next-container {
      font-size: 16px
    }
  
    .supernova .form-all, .form-all {
      background-color: rgba(0, 0, 0, 0.72);
      border: 1px solid transparent;
    }
  
    .form-all {
      color: rgb(255, 255, 255);
    }
    .form-header-group .form-header {
      color: rgb(255, 255, 255);
    }
    .form-header-group .form-subHeader {
      color: rgb(255, 255, 255);
    }
    .form-label-top,
    .form-label-left,
    .form-label-right,
    .form-html,
    .form-checkbox-item label,
    .form-radio-item label {
      color: rgb(255, 255, 255);
    }
    .form-sub-label {
      color: 1a1a1a;
    }
  
    .supernova {
      background-color: rgb(195, 195, 195);
    }
    .supernova body {
      background: transparent;
    }
  
    .form-textbox,
    .form-textarea,
    .form-radio-other-input,
    .form-checkbox-other-input,
    .form-captcha input,
    .form-spinner input {
      background-color: rgba(255, 255, 255, 0);
    }
  
      .supernova {
        height: 100%;
        background-attachment: scroll;
        background-position: center top;
        background-attachment: fixed;
        background-image: url("assets/adopt.jpg");
      }
      
    
    .form-all {
      background-image: none;
    }
  
  .ie-8 .form-all:before { display: none; }
  .ie-8 {
    margin-top: auto;
    margin-top: initial;
  }
  
</style>

<script src="https://cdn03.jotfor.ms/static/prototype.forms.js" type="text/javascript"></script>
<script src="https://cdn01.jotfor.ms/static/jotform.forms.js?3.3.30220" type="text/javascript"></script>
<script defer src="https://cdnjs.cloudflare.com/ajax/libs/punycode/1.4.1/punycode.js"></script>
   
</script>
</head>
<body>
<header>
      <!-- Navbar -->
      <nav class="navbar navbar-expand-lg navbar-light fixed-top mask-custom">
        <div class="container">
          <a class="navbar-brand" href="index.php"
            ><span class="logo1"><i class="fas fa-paw"></i>FURIES</span
            ><span class="logo2" style="color: #000">Rescue</span></a
          >
          <button
            class="navbar-toggler"
            type="button"
            data-bs-toggle="collapse"
            data-bs-target="#navbarSupportedContent"
            aria-controls="navbarSupportedContent"
            aria-expanded="false"
            aria-label="Toggle navigation"
          >
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
              <li class="nav-item px-3">
              <a class="nav-link links" href="
                <?php
                  if(!isset($_SESSION["email"]) || empty($_SESSION["email"]))
                  {
                    ?>
                      register.php
                    <?php
                  }
                  else{
                    ?>
                      lost_found.php
                    <?php
                  }
                ?> 
                ">Lost Request</a>
              </li>
              <li class="nav-item">
                <a class="nav-link links" href="
                  <?php
                    if(!isset($_SESSION["email"]) || empty($_SESSION["email"]))
                    {
                      ?>
                        register.php
                      <?php
                    }
                    else{
                      ?>
                        lost_found.php
                      <?php
                    }
                  ?> 
                ">Found Request</a>
              </li>
              <li class="nav-item">
                <a class="nav-link links" href="adopt.php">Adoption</a>
              </li>
              <li class="nav-item">
                <a class="nav-link links" href="index.php">About</a>
              </li>
              <li class="nav-item">
                <a class="nav-link links" href="index.php">Contact</a>
              </li>
              <?php
                if(!isset($_SESSION["email"]) || empty($_SESSION["email"]))
                {
                  ?>
                    <li class="nav-item">
                      <a class="nav-link links" href="register.php">Sign Up</a>
                    </li>
                  <?php
                }
                else{
                  ?>
                    <li class="nav-item">
                      <a class="nav-link links" href="logout.php">Logout</a>
                    </li>
                  <?php
                }
              ?>
            </ul>
          </div>
        </div>
      </nav>
      <!-- Navbar -->
    </header>
<form class="form" action="adopt_form.php" method="post">
  <div role="main" class="form-all">
    <ul class="form-section page-section">
      <li class="form-line" data-type="control_image" id="id_52">
        <div id="cid_52" class="form-input-wide">
          <div style="text-align:center">
            <h2 style="color: rgb(255, 255, 255);"><strong>ADOPTION FORM</strong></h2>
            <p style="color: rgb(241, 240, 138);">** <em>Adopting one pet won't change the world, but for that pet the world will change</em> **</p>
          </div>
        </div>
      </li>
      <li class="form-line jf-required" data-type="control_fullname" id="id_20">
        <label class="form-label form-label-left form-label-auto" id="label_20" for="first_20">
          Your Name
          <span class="form-required">
            *
          </span>
        </label>
        <div id="cid_20" class="form-input jf-required">
          <div data-wrapper-react="true">
            <span class="form-sub-label-container" style="vertical-align:top" data-input-type="first">
              <input type="text" id="first_20" name="first" class="form-textbox validate[required]" data-defaultvalue="" autoComplete="section-input_20 given-name" size="10" value="" data-component="first" aria-labelledby="label_20 sublabel_20_first" required="" />
              <label class="form-sub-label" for="first_20" id="sublabel_20_first" style="min-height:13px" aria-hidden="false"> First Name </label>
            </span>
            <span class="form-sub-label-container" style="vertical-align:top" data-input-type="last">
              <input type="text" id="last_20" name="last" class="form-textbox validate[required]" data-defaultvalue="" autoComplete="section-input_20 family-name" size="15" value="" data-component="last" aria-labelledby="label_20 sublabel_20_last" required="" />
              <label class="form-sub-label" for="last_20" id="sublabel_20_last" style="min-height:13px" aria-hidden="false"> Last Name </label>
            </span>
          </div>
        </div>
      </li>
      <li class="form-line" data-type="control_phone" id="id_8">
        <label class="form-label form-label-left form-label-auto" id="label_8" for="input_8_area"> Phone Number  </label>
        <div id="cid_8" class="form-input">
          <div data-wrapper-react="true">
            <span class="form-sub-label-container" style="vertical-align:top" data-input-type="areaCode">
              <input type="tel" id="input_8_area" name="area" class="form-textbox" data-defaultvalue="" autoComplete="section-input_8 tel-area-code" value="" data-component="areaCode" aria-labelledby="label_8 sublabel_8_area" />
              <span class="phone-separate" aria-hidden="true">
              </span>
              <label class="form-sub-label" for="input_8_area" id="sublabel_8_area" style="min-height:13px" aria-hidden="false"> Area Code </label>
            </span>
            <span class="form-sub-label-container" style="vertical-align:top" data-input-type="phone">
              <input type="tel" id="input_8_phone" name="number" class="form-textbox" data-defaultvalue="" autoComplete="section-input_8 tel-local" value="" data-component="phone" aria-labelledby="label_8 sublabel_8_phone" />
              <label class="form-sub-label" for="input_8_phone" id="sublabel_8_phone" style="min-height:13px" aria-hidden="false"> Phone Number </label>
            </span>
          </div>
        </div>
      </li>
      
      <li class="form-line jf-required" data-type="control_email" id="id_6">
        <label class="form-label form-label-left form-label-auto" id="label_6" for="input_6">
          E-mail
          <span class="form-required">
            *
          </span>
        </label>
        <div id="cid_6" class="form-input jf-required">
          <input type="email" id="input_6" name="q6_email6" class="form-textbox validate[required, Email]" data-defaultvalue="" size="30" value="" placeholder="ex: myname@example.com" data-component="email" aria-labelledby="label_6" required="" />
        </div>
      </li>
      <li class="form-line jf-required" data-type="control_address" id="id_7">
        <label class="form-label form-label-left form-label-auto" id="label_7" for="input_7_addr_line1" name = "location">
         Where do you live?
          <span class="form-required">
            *
          </span>
        </label>
        <div id="cid_7" class="form-input jf-required">
          <div summary="" class="form-address-table jsTest-addressField">
            <div class="form-address-line-wrapper jsTest-address-line-wrapperField">
              <span class="form-address-line form-address-street-line jsTest-address-lineField">
                <span class="form-sub-label-container" style="vertical-align:top">
                  <input type="text" id="input_7_addr_line1" name="line1" class="form-textbox validate[required] form-address-line" data-defaultvalue="" autoComplete="section-input_7 address-line1"  data-component="address_line_1" aria-labelledby="label_7 sublabel_7_addr_line1" required/>
                  <label class="form-sub-label" for="input_7_addr_line1" id="sublabel_7_addr_line1" style="min-height:13px" aria-hidden="false"> Street Address </label>
                </span>
              </span>
            </div>
            <div class="form-address-line-wrapper jsTest-address-line-wrapperField">
              <span class="form-address-line form-address-city-line jsTest-address-lineField ">
                <span class="form-sub-label-container" style="vertical-align:top">
                  <input type="text" id="input_7_city" name="city" class="form-textbox validate[required] form-address-city" data-defaultvalue="" autoComplete="section-input_7 address-level2" value="" data-component="city" aria-labelledby="label_7 sublabel_7_city" />
                  <label class="form-sub-label" for="input_7_city" id="sublabel_7_city" style="min-height:13px" aria-hidden="false" required> City </label>
                </span>
              </span>
              <span class="form-address-line form-address-state-line jsTest-address-lineField ">
                <span class="form-sub-label-container" style="vertical-align:top">
                  <input type="text" id="input_7_state" name="state" class="form-textbox validate[required] form-address-state" data-defaultvalue="" autoComplete="section-input_7 address-level1" value="" data-component="state" aria-labelledby="label_7 sublabel_7_state" required/>
                  <label class="form-sub-label" for="input_7_state" id="sublabel_7_state" style="min-height:13px" aria-hidden="false" > State / Province </label>
                </span>
              </span>
            </div>
            <div class="form-address-line-wrapper jsTest-address-line-wrapperField">
              <span class="form-address-line form-address-zip-line jsTest-address-lineField ">
                <span class="form-sub-label-container" style="vertical-align:top">
                  <input type="text" id="input_7_postal" name="zip" class="form-textbox form-address-postal" data-defaultvalue="" autoComplete="section-input_7 postal-code" value="" data-component="zip" aria-labelledby="label_7 sublabel_7_postal" required />
                  <label class="form-sub-label" for="input_7_postal" id="sublabel_7_postal" style="min-height:13px" aria-hidden="false"> Postal / Zip Code </label>
                </span>
              </span>
              <span class="form-address-line form-address-country-line jsTest-address-lineField ">
                <span class="form-sub-label-container" style="vertical-align:top">
                  <select class="form-dropdown validate[required] form-address-country noTranslate" name="country" id="input_7_country" data-component="country" aria-labelledby="label_7 sublabel_7_country" autoComplete="section-input_7 country" required>
                    <option value=""> Please Select </option>
                    <option value="United States"> United States </option>
                    <option value="Afghanistan"> Afghanistan </option>
                    <option value="Albania"> Albania </option>
                    <option value="Algeria"> Algeria </option>
                    <option value="American Samoa"> American Samoa </option>
                    <option value="Andorra"> Andorra </option>
                    <option value="Angola"> Angola </option>
                    <option value="Anguilla"> Anguilla </option>
                    <option value="Antigua and Barbuda"> Antigua and Barbuda </option>
                    <option value="Argentina"> Argentina </option>
                    <option value="Armenia"> Armenia </option>
                    <option value="Aruba"> Aruba </option>
                    <option value="Australia"> Australia </option>
                    <option value="Austria"> Austria </option>
                    <option value="Azerbaijan"> Azerbaijan </option>
                    <option value="The Bahamas"> The Bahamas </option>
                    <option value="Bahrain"> Bahrain </option>
                    <option value="Bangladesh"> Bangladesh </option>
                    <option value="Barbados"> Barbados </option>
                    <option value="Belarus"> Belarus </option>
                    <option value="Belgium"> Belgium </option>
                    <option value="Belize"> Belize </option>
                    <option value="Benin"> Benin </option>
                    <option value="Bermuda"> Bermuda </option>
                    <option value="Bhutan"> Bhutan </option>
                    <option value="Bolivia"> Bolivia </option>
                    <option value="Bosnia and Herzegovina"> Bosnia and Herzegovina </option>
                    <option value="Botswana"> Botswana </option>
                    <option value="Brazil"> Brazil </option>
                    <option value="Brunei"> Brunei </option>
                    <option value="Bulgaria"> Bulgaria </option>
                    <option value="Burkina Faso"> Burkina Faso </option>
                    <option value="Burundi"> Burundi </option>
                    <option value="Cambodia"> Cambodia </option>
                    <option value="Cameroon"> Cameroon </option>
                    <option value="Canada"> Canada </option>
                    <option value="Cape Verde"> Cape Verde </option>
                    <option value="Cayman Islands"> Cayman Islands </option>
                    <option value="Central African Republic"> Central African Republic </option>
                    <option value="Chad"> Chad </option>
                    <option value="Chile"> Chile </option>
                    <option value="China"> China </option>
                    <option value="Christmas Island"> Christmas Island </option>
                    <option value="Cocos (Keeling) Islands"> Cocos (Keeling) Islands </option>
                    <option value="Colombia"> Colombia </option>
                    <option value="Comoros"> Comoros </option>
                    <option value="Congo"> Congo </option>
                    <option value="Cook Islands"> Cook Islands </option>
                    <option value="Costa Rica"> Costa Rica </option>
                    <option value="Cote d&#x27;Ivoire"> Cote d&#x27;Ivoire </option>
                    <option value="Croatia"> Croatia </option>
                    <option value="Cuba"> Cuba </option>
                    <option value="Curacao"> Curacao </option>
                    <option value="Cyprus"> Cyprus </option>
                    <option value="Czech Republic"> Czech Republic </option>
                    <option value="Democratic Republic of the Congo"> Democratic Republic of the Congo </option>
                    <option value="Denmark"> Denmark </option>
                    <option value="Djibouti"> Djibouti </option>
                    <option value="Dominica"> Dominica </option>
                    <option value="Dominican Republic"> Dominican Republic </option>
                    <option value="Ecuador"> Ecuador </option>
                    <option value="Egypt"> Egypt </option>
                    <option value="El Salvador"> El Salvador </option>
                    <option value="Equatorial Guinea"> Equatorial Guinea </option>
                    <option value="Eritrea"> Eritrea </option>
                    <option value="Estonia"> Estonia </option>
                    <option value="Ethiopia"> Ethiopia </option>
                    <option value="Falkland Islands"> Falkland Islands </option>
                    <option value="Faroe Islands"> Faroe Islands </option>
                    <option value="Fiji"> Fiji </option>
                    <option value="Finland"> Finland </option>
                    <option value="France"> France </option>
                    <option value="French Polynesia"> French Polynesia </option>
                    <option value="Gabon"> Gabon </option>
                    <option value="The Gambia"> The Gambia </option>
                    <option value="Georgia"> Georgia </option>
                    <option value="Germany"> Germany </option>
                    <option value="Ghana"> Ghana </option>
                    <option value="Gibraltar"> Gibraltar </option>
                    <option value="Greece"> Greece </option>
                    <option value="Greenland"> Greenland </option>
                    <option value="Grenada"> Grenada </option>
                    <option value="Guadeloupe"> Guadeloupe </option>
                    <option value="Guam"> Guam </option>
                    <option value="Guatemala"> Guatemala </option>
                    <option value="Guernsey"> Guernsey </option>
                    <option value="Guinea"> Guinea </option>
                    <option value="Guinea-Bissau"> Guinea-Bissau </option>
                    <option value="Guyana"> Guyana </option>
                    <option value="Haiti"> Haiti </option>
                    <option value="Honduras"> Honduras </option>
                    <option value="Hong Kong"> Hong Kong </option>
                    <option value="Hungary"> Hungary </option>
                    <option value="Iceland"> Iceland </option>
                    <option value="India"> India </option>
                    <option value="Indonesia"> Indonesia </option>
                    <option value="Iran"> Iran </option>
                    <option value="Iraq"> Iraq </option>
                    <option value="Ireland"> Ireland </option>
                    <option value="Israel"> Israel </option>
                    <option value="Italy"> Italy </option>
                    <option value="Jamaica"> Jamaica </option>
                    <option value="Japan"> Japan </option>
                    <option value="Jersey"> Jersey </option>
                    <option value="Jordan"> Jordan </option>
                    <option value="Kazakhstan"> Kazakhstan </option>
                    <option value="Kenya"> Kenya </option>
                    <option value="Kiribati"> Kiribati </option>
                    <option value="North Korea"> North Korea </option>
                    <option value="South Korea"> South Korea </option>
                    <option value="Kosovo"> Kosovo </option>
                    <option value="Kuwait"> Kuwait </option>
                    <option value="Kyrgyzstan"> Kyrgyzstan </option>
                    <option value="Laos"> Laos </option>
                    <option value="Latvia"> Latvia </option>
                    <option value="Lebanon"> Lebanon </option>
                    <option value="Lesotho"> Lesotho </option>
                    <option value="Liberia"> Liberia </option>
                    <option value="Libya"> Libya </option>
                    <option value="Liechtenstein"> Liechtenstein </option>
                    <option value="Lithuania"> Lithuania </option>
                    <option value="Luxembourg"> Luxembourg </option>
                    <option value="Macau"> Macau </option>
                    <option value="Macedonia"> Macedonia </option>
                    <option value="Madagascar"> Madagascar </option>
                    <option value="Malawi"> Malawi </option>
                    <option value="Malaysia"> Malaysia </option>
                    <option value="Maldives"> Maldives </option>
                    <option value="Mali"> Mali </option>
                    <option value="Malta"> Malta </option>
                    <option value="Marshall Islands"> Marshall Islands </option>
                    <option value="Martinique"> Martinique </option>
                    <option value="Mauritania"> Mauritania </option>
                    <option value="Mauritius"> Mauritius </option>
                    <option value="Mayotte"> Mayotte </option>
                    <option value="Mexico"> Mexico </option>
                    <option value="Micronesia"> Micronesia </option>
                    <option value="Moldova"> Moldova </option>
                    <option value="Monaco"> Monaco </option>
                    <option value="Mongolia"> Mongolia </option>
                    <option value="Montenegro"> Montenegro </option>
                    <option value="Montserrat"> Montserrat </option>
                    <option value="Morocco"> Morocco </option>
                    <option value="Mozambique"> Mozambique </option>
                    <option value="Myanmar"> Myanmar </option>
                    <option value="Nagorno-Karabakh"> Nagorno-Karabakh </option>
                    <option value="Namibia"> Namibia </option>
                    <option value="Nauru"> Nauru </option>
                    <option value="Nepal"> Nepal </option>
                    <option value="Netherlands"> Netherlands </option>
                    <option value="Netherlands Antilles"> Netherlands Antilles </option>
                    <option value="New Caledonia"> New Caledonia </option>
                    <option value="New Zealand"> New Zealand </option>
                    <option value="Nicaragua"> Nicaragua </option>
                    <option value="Niger"> Niger </option>
                    <option value="Nigeria"> Nigeria </option>
                    <option value="Niue"> Niue </option>
                    <option value="Norfolk Island"> Norfolk Island </option>
                    <option value="Turkish Republic of Northern Cyprus"> Turkish Republic of Northern Cyprus </option>
                    <option value="Northern Mariana"> Northern Mariana </option>
                    <option value="Norway"> Norway </option>
                    <option value="Oman"> Oman </option>
                    <option value="Pakistan"> Pakistan </option>
                    <option value="Palau"> Palau </option>
                    <option value="Palestine"> Palestine </option>
                    <option value="Panama"> Panama </option>
                    <option value="Papua New Guinea"> Papua New Guinea </option>
                    <option value="Paraguay"> Paraguay </option>
                    <option value="Peru"> Peru </option>
                    <option value="Philippines"> Philippines </option>
                    <option value="Pitcairn Islands"> Pitcairn Islands </option>
                    <option value="Poland"> Poland </option>
                    <option value="Portugal"> Portugal </option>
                    <option value="Puerto Rico"> Puerto Rico </option>
                    <option value="Qatar"> Qatar </option>
                    <option value="Republic of the Congo"> Republic of the Congo </option>
                    <option value="Romania"> Romania </option>
                    <option value="Russia"> Russia </option>
                    <option value="Rwanda"> Rwanda </option>
                    <option value="Saint Barthelemy"> Saint Barthelemy </option>
                    <option value="Saint Helena"> Saint Helena </option>
                    <option value="Saint Kitts and Nevis"> Saint Kitts and Nevis </option>
                    <option value="Saint Lucia"> Saint Lucia </option>
                    <option value="Saint Martin"> Saint Martin </option>
                    <option value="Saint Pierre and Miquelon"> Saint Pierre and Miquelon </option>
                    <option value="Saint Vincent and the Grenadines"> Saint Vincent and the Grenadines </option>
                    <option value="Samoa"> Samoa </option>
                    <option value="San Marino"> San Marino </option>
                    <option value="Sao Tome and Principe"> Sao Tome and Principe </option>
                    <option value="Saudi Arabia"> Saudi Arabia </option>
                    <option value="Senegal"> Senegal </option>
                    <option value="Serbia"> Serbia </option>
                    <option value="Seychelles"> Seychelles </option>
                    <option value="Sierra Leone"> Sierra Leone </option>
                    <option value="Singapore"> Singapore </option>
                    <option value="Slovakia"> Slovakia </option>
                    <option value="Slovenia"> Slovenia </option>
                    <option value="Solomon Islands"> Solomon Islands </option>
                    <option value="Somalia"> Somalia </option>
                    <option value="Somaliland"> Somaliland </option>
                    <option value="South Africa"> South Africa </option>
                    <option value="South Ossetia"> South Ossetia </option>
                    <option value="South Sudan"> South Sudan </option>
                    <option value="Spain"> Spain </option>
                    <option value="Sri Lanka"> Sri Lanka </option>
                    <option value="Sudan"> Sudan </option>
                    <option value="Suriname"> Suriname </option>
                    <option value="Svalbard"> Svalbard </option>
                    <option value="eSwatini"> eSwatini </option>
                    <option value="Sweden"> Sweden </option>
                    <option value="Switzerland"> Switzerland </option>
                    <option value="Syria"> Syria </option>
                    <option value="Taiwan"> Taiwan </option>
                    <option value="Tajikistan"> Tajikistan </option>
                    <option value="Tanzania"> Tanzania </option>
                    <option value="Thailand"> Thailand </option>
                    <option value="Timor-Leste"> Timor-Leste </option>
                    <option value="Togo"> Togo </option>
                    <option value="Tokelau"> Tokelau </option>
                    <option value="Tonga"> Tonga </option>
                    <option value="Transnistria Pridnestrovie"> Transnistria Pridnestrovie </option>
                    <option value="Trinidad and Tobago"> Trinidad and Tobago </option>
                    <option value="Tristan da Cunha"> Tristan da Cunha </option>
                    <option value="Tunisia"> Tunisia </option>
                    <option value="Turkey"> Turkey </option>
                    <option value="Turkmenistan"> Turkmenistan </option>
                    <option value="Turks and Caicos Islands"> Turks and Caicos Islands </option>
                    <option value="Tuvalu"> Tuvalu </option>
                    <option value="Uganda"> Uganda </option>
                    <option value="Ukraine"> Ukraine </option>
                    <option value="United Arab Emirates"> United Arab Emirates </option>
                    <option value="United Kingdom"> United Kingdom </option>
                    <option value="Uruguay"> Uruguay </option>
                    <option value="Uzbekistan"> Uzbekistan </option>
                    <option value="Vanuatu"> Vanuatu </option>
                    <option value="Vatican City"> Vatican City </option>
                    <option value="Venezuela"> Venezuela </option>
                    <option value="Vietnam"> Vietnam </option>
                    <option value="British Virgin Islands"> British Virgin Islands </option>
                    <option value="Isle of Man"> Isle of Man </option>
                    <option value="US Virgin Islands"> US Virgin Islands </option>
                    <option value="Wallis and Futuna"> Wallis and Futuna </option>
                    <option value="Western Sahara"> Western Sahara </option>
                    <option value="Yemen"> Yemen </option>
                    <option value="Zambia"> Zambia </option>
                    <option value="Zimbabwe"> Zimbabwe </option>
                    <option value="other"> Other </option>
                  </select>
                  <label class="form-sub-label" for="input_7_country" id="sublabel_7_country" style="min-height:13px" aria-hidden="false"> Country </label>
                </span>
              </span>
            </div>
          </div>
        </div>
      </li>
      <li class="form-line jf-required" data-type="control_address" id="id_7">
        <label class="form-label form-label-left form-label-auto" id="label_7" for="input_7_addr_line1" >
          Pet type
          <span class="form-required">
            *
          </span>
        </label>
        <div id="cid_7" class="form-input jf-required">
          <div summary="" class="form-address-table jsTest-addressField">
            <div class="form-address-line-wrapper jsTest-address-line-wrapperField">
              
            </div><div class="form-address-line-wrapper jsTest-address-line-wrapperField">
              <span class="form-address-line form-address-country-line jsTest-address-lineField ">
                <span class="form-sub-label-container" style="vertical-align:top">
                  <select class="form-dropdown validate[required] form-address-country noTranslate" name="pet" id="input_7_country" data-component="country" required="" aria-labelledby="label_7 sublabel_7_country" autoComplete="section-input_7 country">
                    <option value=""> ---------------Select--------------------- </option>
                    <option value="dog"> Dog </option>
                    <option value="cat" > Cat </option>
                    <option value="cow" > Cow</option>
                    <option value="buffalo" > Buffalo </option>
                    <option value="parrot" > Parrot </option>
                    <option value="turtleortortoise"> Turtle or Tortoise </option>
                    
                    <option value="other" > Other </option>
                  </select>
                  
                </span>
              </span>
            </div>
          </div>
        </div>
        <li class="form-line" data-type="control_textbox" id="colour">
          <label class="form-label form-label-left form-label-auto" id="colour" for="input_80"> Colour: </label>
          <div id="cid_80" class="form-input">
            <input type="text" id="input_80" name="colour" data-type="input-textbox" class="form-textbox" size="20" data-component="textbox" aria-labelledby="label_80" />
          </div>
        </li>
        
        <li class="form-line" data-type="control_textbox" id="id_80">
            <label class="form-label form-label-left form-label-auto" id="label_80" for="input_80"> Breed of pet: </label>
            <div id="cid_80" class="form-input">
              <input type="text" id="input_80"  data-type="input-textbox" class="form-textbox" data-defaultvalue="" size="20" name="q80_howDid" value="" placeholder=" " data-component="textbox" aria-labelledby="label_80" />
            </div>
          </li>
     
      <li class="form-line" data-type="control_radio" id="id_17">
        <label class="form-label form-label-left form-label-auto" id="label_17" for="input_17"> Gender </label>
        <div id="cid_17" class="form-input">
          <div class="form-single-column" role="group" aria-labelledby="label_17" data-component="radio">
            <span class="form-radio-item" style="clear:left">
              <span class="dragger-item">
              </span>
              <input type="radio" aria-describedby="label_17" class="form-radio" id="input_17_0" name="gender" value="Male" />
              <label id="label_input_17_0" for="input_17_0"> Male </label>
            </span>
            <span class="form-radio-item" style="clear:left">
              <span class="dragger-item">
              </span>
              <input type="radio" aria-describedby="label_17" class="form-radio" id="input_17_1" name="gender" value="Female" />
              <label id="label_input_17_1" for="input_17_1"> Female </label>
            </span>
            <span class="form-radio-item" style="clear:left">
              <span class="dragger-item">
              </span>
              <input type="radio" aria-describedby="label_17" class="form-radio" id="input_17_2" name="gender" value="Gender unknown" />
              <label id="label_input_17_2" for="input_17_2"> Gender Unknown </label>
            </span>
          </div>
        </div>
      </li>
      <li class="form-line" data-type="control_radio" id="id_40">
        <label class="form-label form-label-left form-label-auto" id="label_40" for="input_40"> Size of pet </label>
        <div id="cid_40" class="form-input">
          <div class="form-single-column" role="group" aria-labelledby="label_40" data-component="radio">
            <span class="form-radio-item" style="clear:left">
              <span class="dragger-item">
              </span>
              <input type="radio" aria-describedby="label_40" class="form-radio" id="input_40_0" name="q40_doYou40" value="Small (0-20 lbs)." />
              <label id="label_input_40_0" for="input_40_0"> Small (0-20 lbs). </label>
            </span>
            <span class="form-radio-item" style="clear:left">
              <span class="dragger-item">
              </span>
              <input type="radio" aria-describedby="label_40" class="form-radio" id="input_40_1" name="q40_doYou40" value="Medium (25-50 lbs)." />
              <label id="label_input_40_1" for="input_40_1"> Medium (25-50 lbs). </label>
            </span>
            <span class="form-radio-item" style="clear:left">
              <span class="dragger-item">
              </span>
              <input type="radio" aria-describedby="label_40" class="form-radio" id="input_40_2" name="q40_doYou40" value="Large (Over 50 lbs)." />
              <label id="label_input_40_2" for="input_40_2"> Large (Over 50 lbs). </label>
            </span>
          </div>
        </div>
      </li>
      <li class="form-line" data-type="control_radio" id="id_18">
        <label class="form-label form-label-left form-label-auto" id="label_18" for="input_18"> Age of Pet </label>
        <div id="cid_18" class="form-input">
          <div class="form-single-column" role="group" aria-labelledby="label_18" data-component="radio">
            <span class="form-radio-item" style="clear:left">
              <span class="dragger-item">
              </span>
              <input type="radio" aria-describedby="label_18" class="form-radio" id="input_18_0" name="q18_describeYour" value="Baby" />
              <label id="label_input_18_0" for="input_18_0"> Baby. </label>
            </span>
            <span class="form-radio-item" style="clear:left">
              <span class="dragger-item">
              </span>
              <input type="radio" aria-describedby="label_18" class="form-radio" id="input_18_1" name="q18_describeYour" value="Young Adult." />
              <label id="label_input_18_1" for="input_18_1"> Young Adult. </label>
            </span>
            <span class="form-radio-item" style="clear:left">
              <span class="dragger-item">
              </span>
              <input type="radio" aria-describedby="label_18" class="form-radio" id="input_18_2" name="q18_describeYour" value="Adult." />
              <label id="label_input_18_2" for="input_18_2"> Adult. </label>
            </span>
            <span class="form-radio-item" style="clear:left">
                <span class="dragger-item">
                </span>
                <input type="radio" aria-describedby="label_18" class="form-radio" id="input_18_3" name="q18_describeYour" value="Senior" />
                <label id="label_input_18_3" for="input_18_3"> Senior. </label>
              </span>
              <span class="form-radio-item" style="clear:left">
                <span class="dragger-item">
                </span>
                <input type="radio" aria-describedby="label_18" class="form-radio" id="input_18_4" name="q18_describeYour" value="Unknown age." />
                <label id="label_input_18_4" for="input_18_4"> Unknown age. </label>
              </span>
          </div>
        </div>
      </li>
      
      
      
   </form>
      <li class="form-line" data-type="control_textarea" id="id_28">
        <label class="form-label form-label-left form-label-auto" id="label_28" for="input_28"> Why do you want to adopt a pet?<span class="form-required">
            *
          </span> </label>
        <div id="cid_28" class="form-input">
            
          <textarea id="input_28" class="form-textarea" name="q28_pleaseDescribe" cols="40" rows="6" data-component="textarea" aria-labelledby="label_28" required=""></textarea>
        </div>
        
      </li> <li class="form-line" data-type="control_button" id="id_51">
        <div id="cid_51" class="form-input-wide">
          <div style="margin-left:156px" data-align="auto" class="form-buttons-wrapper form-buttons-auto   jsTest-button-wrapperField">
            <button id="input_51" type="submit"  name = "submit" class="form-submit-button submit-button jf-form-buttons jsTest-submitField">
              Submit
            </button>
          </div>
        </div>
      </li>
      
    </ul>
  </div>
  </form>
  <script
    src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM"
    crossorigin="anonymous"
  ></script>
</body>
</html>
