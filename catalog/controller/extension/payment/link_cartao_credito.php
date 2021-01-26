<?php
class ControllerExtensionPaymentLinkCartaoCredito extends Controller {
	public function index() {
		$this->load->language('extension/payment/link_cartao_credito');

		$data['credito'] = nl2br($this->config->get('payment_link_cartao_credito_bank' . $this->config->get('config_language_id')));

		return $this->load->view('extension/payment/link_cartao_credito', $data);
	}

	public function confirm() {
		$json = array();
		
		if ($this->session->data['payment_method']['code'] == 'link_cartao_credito') {
			$this->load->language('extension/payment/link_cartao_credito');

			$this->load->model('checkout/order');

			$comment  = $this->language->get('text_instruction') . "\n\n";
			$comment .= $this->config->get('payment_link_cartao_credito_bank' . $this->config->get('config_language_id')) . "\n\n";
			$comment .= $this->language->get('text_payment');

			$this->model_checkout_order->addOrderHistory($this->session->data['order_id'], $this->config->get('payment_link_cartao_credito_order_status_id'), $comment, true);
		
			$json['redirect'] = $this->url->link('checkout/success');
		}
		
		$this->response->addHeader('Content-Type: application/json');
		$this->response->setOutput(json_encode($json));		
	}
}