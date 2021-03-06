
<h2>Setup</h2>

<h3>1. Set up your API keys</h3>

<p>
<a href="https://sandbox.gocardless.com/merchants/sandbox_accounts/new">Sign
up</a> for a GoCardless account. There's an overview of that process
<a href="http://blog.gocardless.com/post/19695292096/goingcardless-an-introduction-to-gocardless-for">here</a>.
</p>

<p>Update the Redirect URI in the GoCardless Developer tab to point to any page or post on your website such as:</p>
<input type="text" readonly="true" value="<?php echo site_url(); ?>" />

<p>Copy your API keys from the GoCardless Developer tab and paste them in below (make sure the 'sandbox account' option is checked).</p>

<form action="" method="post">
<input type="hidden" name="form" value="config" />
<table>
<tr><td>App ID</td><td><input type="text" name="app_id" value="<?php echo $gocardless_config['app_id']; ?>" /></td></tr>
<tr><td>App secret</td><td><input type="text" name="app_secret" value="<?php echo $gocardless_config['app_secret']; ?>" /></td></tr>
<tr><td>Merchant ID</td><td><input type="text" name="merchant_id" value="<?php echo $gocardless_config['merchant_id']; ?>" /></td></tr>
<tr><td>Access token</td><td><input type="text" name="access_token" value="<?php echo $gocardless_config['access_token']; ?>" /></td></tr>
<tr><td><input type="checkbox" name="sandbox" id="sandbox" <?php if ($gocardless_config['sandbox']) { echo 'checked'; } ?>/> <label for="">Sandbox account</label></td></tr>
<tr><td colspan="2" class="submit"><input type="submit" name="submit" value="Update API keys &raquo;" /></td></tr>
</table>
</form>

<h3>2. Configure your subscription</h3>

<form action="" method="post">
<input type="hidden" name="form" value="limit" />
<table>
<tr><td>Name</td><td><input type="text" name="limit_name" value="<?php echo $gocardless_limit['limit_name']; ?>" /></td></tr>
<tr><td>Description</td><td><input type="text" name="limit_description" value="<?php echo $gocardless_limit['limit_description']; ?>" /></td></tr>
<tr><td>Amount</td><td>&pound; <input type="text" name="limit_amount" value="<?php echo $gocardless_limit['limit_amount']; ?>" size="5" /></td></tr>
<tr><td>Interval length</td><td><input type="text" name="limit_interval_length" value="<?php echo $gocardless_limit['limit_interval_length']; ?>" size="5" /></td></tr>
<tr><td>Interval unit</td><td><select name="limit_interval_unit"><option value="month"<?php if ($gocardless_limit['limit_interval_unit'] == 'month') { echo 'selected '; } ?>>month</option><option value="day"<?php if ($gocardless_limit['limit_interval_unit'] == 'day') { echo ' selected '; } ?>>day</option></select></td></tr>
<!--<tr><td><input type="checkbox" name="limit_calendar_intervals" id="limit_calendar_intervals" <?php if ($gocardless_limit['limit_calendar_intervals']) { echo 'checked'; } ?>/> <label for="limit_calendar_intervals">Align with calendar intervals</label></td></tr>-->
<tr><td colspan="2" class="submit"><input type="submit" name="submit" value="Update subscription &raquo;" /></td></tr>
</table>
</form>

<h3>3. Publish your subscription</h3>

<p>On the page or post where you want your link to appear simply place the following code (the link text will be the subscription name you defined):</p>
<input type="text" readonly="true" value="[GoCardless]" />

<p>You can also return the raw URL. While editing a post click 'Insert link' and paste the following into the URL field:</p>
<input type="text" readonly="true" value="[GoCardless url='true']" />

<p>&nbsp;</p>

<h3>4. Test your subscription</h3>

<p>You can now test your subscription link in the sandbox using the following dummy bank account details:</p>

<blockquote>
<table>
<tr><td>Account number</td><td><input type="text" readonly="true" value="55779911" /></td></tr>
<tr><td>Sort code</td><td><input type="text" readonly="true" value="20-00-00" /></td></tr>
</table>
</blockquote>
<p>&nbsp;</p>

<h3>5. Go live!</h3>

<p>Upgrade your GoCardless sandbox account to a 'production' account using the link at the top of <a href="http://sandbox.gocardless.com">your dashboard</a>.
<br />Paste your 'production' API keys in above and make sure the 'sandbox account' option is <strong>unticked</strong>.</p>
<p>Congratulations - your subscription is now live!</p>
<p>NB. Subscriptions will appear in a table above.</p>
<p>&nbsp;</p>
