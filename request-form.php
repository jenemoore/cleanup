<?php 
session_start(); 
?>
<?php $page_title = "Services - Item Request Form"; ?>

<?php include("includes/header.php"); ?>

<div id="content" class="internal">

<div id="oneCol">
<h3>Item Request Form</h3>

<p>Please use the <a href="https://warrenville.libnet.info/itemrequestform">new Item Request Form</a>.</p>
<!--
<p>Fill in the information below if you would like to obtain an item that is not in the Library's collection. </p>
<ul>
<li>You must have a valid Warrenville Library Card.</li>
<li>No more than eight material requests may be submitted in a calendar month in order that all patrons may have fair access to materials and services.</li>
<li>Each title must be listed on a separate submission.</li>
<li><strong>Please do not copy and paste into this form. Please do not use special characters.</strong></li>
</ul>


<div class="request-form">
<form id="requestForm" action="https://www.warrenville.com/formmail/requestformmail.php??<?php echo SID; ?>" method="post">
	<input type="hidden" name="recipients" value="itemrequest@warrenville.com" />
        <input type="hidden" name="good_url" value="https://www.warrenville.com/request-form-thanks.php">
		<input type="hidden" name="this_form" value="https://www.warrenville.com/request-form.php">
        <input type="hidden" name="bad_template" value="error.php" />
        <input type="hidden" name="required" value="title, author, first_name, last_name, phone, email, library_card_number, out_of_state, imgverify">
        <input type="hidden" name="subject" value="Warrenville Public Library Request Form">
        <input type="hidden" name="mail_options" value="HTMLTemplate=template.htm">


		<h2>Item Information:</h2>
<label>* Indicates a required field</label><br />


<label>Title *</label>
<input name="title" type="text" value="" required>

<label>Author / Performer / Editor *</label>
<input name="author" type="text" value="" required>

<label>ISBN Number</label>
<input name="isbn" type="text" value="">

<label>Publication Date & Edition</label>
<input name="pub_date_edition" value="" type="text">

<label>Format & Type</label>
<input name="format_type[]" value="F" type="checkbox" class="ind"> <label class="ind">Fiction</label>
<input name="format_type[]" value="NF" type="checkbox" class="ind"> <label class="ind">Nonfiction</label>
<input name="format_type[]" value="YS" type="checkbox" class="ind"> <label class="ind">Juvenile</label><br />
<input name="format_type[]" value="book" type="checkbox" class="ind"> <label class="ind">Book</label>
<input name="format_type[]" value="abcd" type="checkbox" class="ind"> <label class="ind">Book on CD</label>
<input name="format_type[]" value="CD" type="checkbox" class="ind"> <label class="ind">CD</label>
<input name="format_type[]" value="DVD" type="checkbox" class="ind"> <label class="ind">DVD</label>

<label>Additional Information:</label><textarea name="additional_info" cols="" rows=""></textarea>

<label>If we cannot borrow an item from a library in Illinois, we may request it from a library out of the state. There is a $3 charge for any item received from out of state. Check here to authorize the $3 out of state charge. If this box is not checked, we will cancel requests that cannot be filled in state.</label>
<input name="out_of_state" value="no" type="hidden" class="ind">
<input name="out_of_state" value="yes" type="checkbox" class="ind"> <label class="ind">Authorize $3 out-of-state charge</label>

<h2>Patron information:</h2>
<label>* Denotes Required Item</label><br />

<label>First Name *</label>
<input name="first_name" type="text" value="" required>

<label>Last Name *</label>
<input name="last_name" type="text" value="" required>

<label>Phone Number *</label> <label>(ex. 555-123-4567)</label>
<input name="phone" type="text" value="" required>

<label>eMail *</label>
<input name="email" type="email" value="" required>

<label>Preferred Method of Contact</label>
<input name="contact[]" type="radio" value="Phone" CHECKED class="ind"> <label class="ind">Phone</label> <input name="contact[]" type="radio" value="E-mail" class="ind"> <label class="ind">eMail</label>

<label>Library Card Number *</label> <label>(Enter all digits with no spaces)</label>
<input name="library_card_number" value="" type="text" required>

<img src="verifyimg.php??<?php echo SID; ?>" alt="Image verification" name="vimg" />
<label>To submit this form, please enter the characters you see in the image: (If you do not see an image, please click the Refresh button in your browser)</label>
<input type="text" size="12" name="imgverify" />

<!--<div class="g-recaptcha" data-sitekey="6LexigwTAAAAAC1quvQArDYWdZxQJeHvyOi3AuIM"></div>
<noscript>
  <div>
    <div style="width: 302px; height: 422px; position: relative;">
      <div style="width: 302px; height: 422px; position: absolute;">
        <iframe src="https://www.google.com/recaptcha/api/fallback?k=6LexigwTAAAAAC1quvQArDYWdZxQJeHvyOi3AuIM"
                frameborder="0" scrolling="no"
                style="width: 302px; height:422px; border-style: none;">
        </iframe>
      </div>
    </div>
    <div style="width: 300px; height: 60px; border-style: none;
                   bottom: 12px; left: 25px; margin: 0px; padding: 0px; right: 25px;
                   background: #f9f9f9; border: 1px solid #c1c1c1; border-radius: 3px;">
      <textarea id="g-recaptcha-response" name="g-recaptcha-response"
                   class="g-recaptcha-response"
                   style="width: 250px; height: 40px; border: 1px solid #c1c1c1;
                          margin: 10px 25px; padding: 0px; resize: none;" >
      </textarea>
    </div>
  </div>
</noscript>
<input type="hidden" name="derive_fields" value="imgverify=g-recaptcha-response" /> 
<input name="submit" type="submit" value="Submit" class="submit">

</form>
</div>-->

 
        


</div>

</div><!--end content-->

<?php include("includes/footer.html"); ?>