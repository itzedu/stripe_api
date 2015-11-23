<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<title>Integrating Stripe</title>
	<link rel="stylesheet" type="text/css" href="assets/css/style.css">
</head>
<body>
	<div id="stripe">

    <?= $this->session->flashdata("errors") ?>
		<h2>Let's integrate the stripe API to our CodeIgniter Application</h2>

    <form action="/payments/stripe_pay" method="post">
      <script
        src="https://checkout.stripe.com/checkout.js" class="stripe-button"
        data-key="pk_test_260zcYxJMsJuTqEq1SryG9q5"
        data-image="/img/documentation/checkout/marketplace.png"
        data-name="Demo Site"
        data-description="2 widgets"
        data-amount="2000"
        data-locale="auto">
      </script>
    </form>
	</div>
</body>
</html>