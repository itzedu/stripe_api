<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

require_once('./vendor/autoload.php');

class Payments extends CI_Controller {

	public function index()
	{ 
		$this->load->view('index');
	}

  public function stripe_pay() 
  {
    $stripe_keys = array(
      "secret_key" => "sk_test_KmMuWrCHDxVTPvyW9MsIf5m6",
      "publishable_key" => "pk_test_260zcYxJMsJuTqEq1SryG9q5"
    );

    \Stripe\Stripe::setApiKey($stripe_keys["secret_key"]);

    $token = $this->input->post("stripeToken");

    try {
      $charge = \Stripe\Charge::create(array(
        "amount" => 3000, // amount in cents, again
        "currency" => "usd",
        "source" => $token,
        "description" => "Charing the user in the example"
        ));
    } catch(\Stripe\Error\Card $e) {
      $this->session->set_flashdata("errors", "Invalid Card. Please try again with another credit card");
    }
    redirect("/");
  }
}

/* End of file welcome.php */
/* Location: ./application/controllers/welcome.php */