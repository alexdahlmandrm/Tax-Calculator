<?php

/**
 * @file
 * Implementation for taxcalculator.
 */
?>

<html>
      <head></head>
    <body>
      <div class="tax-calculator-main-wrap">
						<div class="c5">
							<div id="tax-calculator" class="tax-calculator-wrap">
								<h2>Tax Calculator</h2>
								<p>Have you donated $200 or more to any charity in the past year?</p>
								<div class="tax-calc-sub-wrap">
									<div class="have-donated">
										<button class="first-button active" value="yes">Yes, I have</button>
										<button value="no">No, I haven't</button>
									</div><!--have-donated-->
									<span class="amount">Your Donation Amount</span>
									<span class="currency">
										<input type="hidden" name="t" value="o">
										<input type="text" name="amt" id="donation_amount" class="input-large currency" value="50.00" maxlength="10">
										<input type="hidden" name="where" value="tax-calc">
										<span class="result">That will help feed <span class="help-amount">15</span> people</span>
									</span>
								</div>
								<div class="tax-credit">
									<span>Your donation only costs</span>
									<span id="calculator_credit" class="calculator_credit tax-credit-sum">28.50</span>
									<span id="estimates">*Estimates from IRS</span>
									<img id="help-open" src="profiles/drm/modules/custom/simple_calculator/assets/CDC_TC-qm.png">
								</div>
								<div class="give-now">
                                  <a href="/donate"><input type="submit" value="Give $50.00" class="give-now-btn"></a>
								</div>
							</div> <!--#tax-calculator-->
							<div class="tc-secure"><img src="profiles/drm/modules/custom/simple_calculator/assets/CDC_TC-lock.png">100% Secure</div>
						</div>
						<div class="c7">
							<div class="tc-table" style="display: none;">
								<div class="tc-row tc-header">Your tax credit means your contribution costs less!</div>
								<div class="tc-row tc-content"><div class="tc-cell nb">Your Donation</div><div class="tc-cell nb">Your Tax Credit</div><div class="tc-cell nb">Cost After Tax Credit</div></div>
								<div id="table-fill"><div class="tc-row tc-content content-given"><div class="tc-cell">$50.00</div><div class="tc-cell">$21.50</div><div class="tc-cell">$28.50</div></div><div class="tc-row tc-content content-first" style="display: none;"><div class="tc-cell">$50.00</div><div class="tc-cell">$10.00</div><div class="tc-cell">$40.00</div></div><div class="tc-row tc-content content-given"><div class="tc-cell">$100.00</div><div class="tc-cell">$43.00</div><div class="tc-cell">$57.00</div></div><div class="tc-row tc-content content-first" style="display: none;"><div class="tc-cell">$100.00</div><div class="tc-cell">$20.00</div><div class="tc-cell">$80.00</div></div><div class="tc-row tc-content content-given"><div class="tc-cell">$150.00</div><div class="tc-cell">$64.50</div><div class="tc-cell">$85.50</div></div><div class="tc-row tc-content content-first" style="display: none;"><div class="tc-cell">$150.00</div><div class="tc-cell">$30.00</div><div class="tc-cell">$120.00</div></div><div class="tc-row tc-content content-given"><div class="tc-cell">$200.00</div><div class="tc-cell">$86.00</div><div class="tc-cell">$114.00</div></div><div class="tc-row tc-content content-first" style="display: none;"><div class="tc-cell">$200.00</div><div class="tc-cell">$40.00</div><div class="tc-cell">$160.00</div></div><div class="tc-row tc-content content-given"><div class="tc-cell">$300.00</div><div class="tc-cell">$129.00</div><div class="tc-cell">$171.00</div></div><div class="tc-row tc-content content-first" style="display: none;"><div class="tc-cell">$300.00</div><div class="tc-cell">$83.00</div><div class="tc-cell">$217.00</div></div><div class="tc-row tc-content content-given"><div class="tc-cell">$400.00</div><div class="tc-cell">$172.00</div><div class="tc-cell">$228.00</div></div><div class="tc-row tc-content content-first" style="display: none;"><div class="tc-cell">$400.00</div><div class="tc-cell">$126.00</div><div class="tc-cell">$274.00</div></div><div class="tc-row tc-content content-given"><div class="tc-cell">$500.00</div><div class="tc-cell">$215.00</div><div class="tc-cell">$285.00</div></div><div class="tc-row tc-content content-first" style="display: none;"><div class="tc-cell">$500.00</div><div class="tc-cell">$169.00</div><div class="tc-cell">$331.00</div></div><div class="tc-row tc-content content-given"><div class="tc-cell">$750.00</div><div class="tc-cell">$322.50</div><div class="tc-cell">$427.50</div></div><div class="tc-row tc-content content-first" style="display: none;"><div class="tc-cell">$750.00</div><div class="tc-cell">$276.50</div><div class="tc-cell">$473.50</div></div><div class="tc-row tc-content content-given"><div class="tc-cell">$1,000.00</div><div class="tc-cell">$430.00</div><div class="tc-cell">$570.00</div></div><div class="tc-row tc-content content-first" style="display: none;"><div class="tc-cell">$1,000.00</div><div class="tc-cell">$384.00</div><div class="tc-cell">$616.00</div></div><div class="tc-row tc-content content-given"><div class="tc-cell">$1,500.00</div><div class="tc-cell">$645.00</div><div class="tc-cell">$855.00</div></div><div class="tc-row tc-content content-first" style="display: none;"><div class="tc-cell">$1,500.00</div><div class="tc-cell">$599.00</div><div class="tc-cell">$901.00</div></div></div>
								<img id="help-close" src="profiles/drm/modules/custom/simple_calculator/assets/CDC_TC-x.png">
							</div>
						</div>
					</div>
    </body>
</html>