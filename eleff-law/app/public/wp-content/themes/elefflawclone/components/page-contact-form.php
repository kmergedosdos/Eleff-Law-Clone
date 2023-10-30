<form action="" method="post">
	<div class="page-contact__form-details">
		<div class="page-contact__input-name">
			<label class="label-bold" for="name">Name</label>
			<input type="text" name="name" id="name" class="input-field">
		</div>
		<div class="page-contact__input-email">
			<label class="label-bold" for="email">Email
				<span class="page-contact__field-required">*</span>
			</label>
			<input type="email" name="email" id="email" class="input-field" required>
			<p class="page-contact__error">This is a required field.</p>
		</div>
		<div class="page-contact__input-states">
			<label class="label-bold" for="states">US States</label>
			<select name="states" id="states" class="input-field">
				<option value="AL">Alabama</option>
				<option value="AK">Alaska</option>
				<option value="AZ">Arizona</option>
				<option value="AR">Arkansas</option>
				<option value="CA">California</option>
				<option value="CO">Colorado</option>
				<option value="CT">Connecticut</option>
				<option value="DE">Delaware</option>
				<option value="FL">Florida</option>
				<option value="GA">Georgia</option>
				<option value="HI">Hawaii</option>
				<option value="ID">Idaho</option>
				<option value="IL">Illinois</option>
				<option value="IN">Indiana</option>
				<option value="IA">Iowa</option>
				<option value="KS">Kansas</option>
				<option value="KY">Kentucky</option>
				<option value="LA">Louisiana</option>
				<option value="ME">Maine</option>
				<option value="MD" selected="selected">Maryland</option>
				<option value="MA">Massachusetts</option>
				<option value="MI">Michigan</option>
				<option value="MN">Minnesota</option>
				<option value="MS">Mississippi</option>
				<option value="MO">Missouri</option>
				<option value="MT">Montana</option>
				<option value="NE">Nebraska</option>
				<option value="NV">Nevada</option>
				<option value="NH">New Hampshire</option>
				<option value="NJ">New Jersey</option>
				<option value="NM">New Mexico</option>
				<option value="NY">New York</option>
				<option value="NC">North Carolina</option>
				<option value="ND">North Dakota</option>
				<option value="OH">Ohio</option>
				<option value="OK">Oklahoma</option>
				<option value="OR">Oregon</option>
				<option value="PA">Pennsylvania</option>
				<option value="RI">Rhode Island</option>
				<option value="SC">South Carolina</option>
				<option value="SD">South Dakota</option>
				<option value="TN">Tennessee</option>
				<option value="TX">Texas</option>
				<option value="UT">Utah</option>
				<option value="VT">Vermont</option>
				<option value="VA">Virginia</option>
				<option value="WA">Washington</option>
				<option value="WV">West Virginia</option>
				<option value="WI">Wisconsin</option>
				<option value="WY">Wyoming</option>
				<option value="DC">Washington DC</option>
				<option value="AE">ARMED FORCES AFRICA \ CANADA \ EUROPE \ MIDDLE EAST</option>
				<option value="AA">ARMED FORCES AMERICA (EXCEPT CANADA)</option>
				<option value="AP">ARMED FORCES PACIFIC</option>

			</select>
			</select>
		</div>
		<div class="page-contact__input-zip">
			<label class="label-bold" for="zipCode">Zip</label>
			<input type="text" name="zip-code" id="zipCode" class="input-field">
		</div>
		<div class="page-contact__input-phone">
			<label class="label-bold" for="phone">Phone</label>
			<input type="tel" name="phone" id="phone" class="input-field" onfocus="formatPhoneNumber(this)">
		</div>
		<div class="page-contact__email-phone-choices">
			<p class="label-bold">How would you like to be contacted?</p>
			<p class="check-apply">Check all that apply.</p>
			<div class="input-checkbox">
				<div class="email">
					<input type="checkbox" name="email" id="email-checkbox">
					<label for="email-checkbox">
						Email
					</label>
				</div>
				<div class="phone">
					<input type="checkbox" name="phone" id="phone-checkbox">
					<label for="phone-checkbox">
						Phone
					</label>
				</div>
			</div>
		</div>
		<div class="page-contact__issue-description">
			<label for="issueDescription" class="label-bold">Brief description of your legal issue</label>
			<textarea name="issue-description" id="issueDescription" rows="10" class="input-field"></textarea>
		</div>
		<div class="page-contact__disclaimer-privacy">
			<a href="/disclaimer/" id="showDisclaimer">Disclaimer</a>&nbsp;|&nbsp;<a href="/privacy/">Privacy Policy</a>
		</div>
		<div class="disclaimer">
			<span class="disclaimer__icon dashicons-info" aria-hidden="true"></span>
			Disclaimer: The use of the internet or this form for communication with the firm or any individual member of the firm does not establish an attorney-client relationship. Confidential or time-sensitive information should not be sent through this form. <span id="disclaimer__close" class="disclaimer__close dashicons-no-alt">&times;</span>
		</div>
		<div class="page-contact__read-disclaimer">
			<div class="label-bold">
				<input type="checkbox" name="read-disclaimer" id="readDisclaimer" required>
				<label for="readDisclaimer">
					I have read the disclaimer.
				</label>
				<span class="page-contact__field-required">*</span>
			</div>
			<p class="page-contact__error">This is a required field.</p>
		</div>
		<div class="page-contact__form-submit">
			<button type="submit" class="button">Send this message</button>
		</div>
	</div>
	<div class="invalidate page-contact__message-form">
		<p class="page-contact__error">Please correct errors before submitting this form.</p>
	</div>
</form>