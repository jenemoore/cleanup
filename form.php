<?php $page_title = "Services - Library Card Online Registration"; ?>

<?php include("includes/header.php"); ?>

<div id="content" class="internal">

<div id="oneCol">
<h3>Library Card Online Registration</h3>
<p>Online registration forms are processed Monday through Friday. Please allow 48 hours for your registration to be processed.</p>
<p>&nbsp;</p>
<div class="request-form">
<form id="Library_Card" action="https://www.warrenville.com/cardformmail.php" method="post" name="Library_Card" display="inline;" style="margin:0;">
<input type="hidden" name="good_url" value="thanks.htm">
<input type="hidden" name="recipients" value="circulation@warrenville.com" />
<input type="hidden" name="subject" value="Library Card Application Form">
<input type="hidden" name="mail_options" value="HTMLTemplate=cardtemplate.htm">
<input type="hidden" name="required" value="firstName, lastName, street_address, city, zip, phone, email, date_of_birth, comply_with_rules_and_regulations">

<label>* Indicates a required field</label><br />

<label>First Name*</label>
<input type="TEXT" name="firstName" size=19> 

<label>Last Name*</label>
<input type="TEXT" name="lastName" size=19>
 
<label>Middle Name</label>
<input type="TEXT" name="middleName" size=19>

<label>Parent or Guardian's Name (if applicable)</label>
<input type="TEXT" name="parentName" size=19>

<label>Gender</label>
<input name="gender" type="radio" value="male" class="ind"><label class="ind">male</label>
<input name="gender" type="radio" value="female" class="ind"><label class="ind">female</label>
      
<label>Street Address*</label>
<input type="TEXT" name="street_address" size=19>
 
<label>Street Address - Apartment Number</label>
<input name="street_address_apt_number" type="TEXT" id="street_address_apt_number" size=19>

<label>Mailing Address (if different)</label>
<input type="TEXT" name="mailing_address" size=19>

<label>Mailing Address - Apartment Number</label>
<input name="mailing_address_apt_number" type="TEXT" id="mailing_address_apt_number" size=19>

<label>City*</label>
<input type="TEXT" name="city" size=19>
 
<label>Zip Code*</label>
<input type="TEXT" name="zip" size=10> 

<label>Home Phone Number*</label>
<input type="TEXT" name="phone" size=16> 

<label>E-mail Address*</label>
<input type="TEXT" name="email" size=16>

<label>Date of Birth*</label>
<input type="TEXT" name="date_of_birth" size=16>

<label>Notification by</label>
<input name="notification" type="radio" value="email" checked class="ind"><label class="ind">e-mail</label>
<input name="notification" type="radio" value="phone" class="ind"><label class="ind">phone</label>
<br />
<input type="checkbox" name="public_access_computers" value="register" class="ind"><label class="ind">Check here to register for use of our public access computers</label>
<br />
<input name="comply_with_rules_and_regulations" type="checkbox" id="comply_with_rules_and_regulations" value="agree" class="ind" style="margin-bottom:0px"><label class="ind" style="color:#004d27;">I apply for the right to use the Warrenville Public Library District and agree to comply with all its rules and regulations. I am aware that there are no age restrictions on borrowing any library materials and I accept the responsibility for my child's selection of materials. I understand that I am responsible for all materials checked out on this card, and for any charges, costs or fees that may result from the late return, loss, or damage of materials borrowed.*<label>
<br />
<input name="SUBMIT" type="SUBMIT" value="Submit"><input type="reset" name="Reset" value="Reset">

      </FORM></div><!--end form-->


<p>&nbsp;</p>

</div>
</div><!--end content-->

<?php include("includes/footer.html"); ?>