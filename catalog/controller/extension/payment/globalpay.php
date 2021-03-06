<?php
class ControllerExtensionPaymentGlobalpay extends Controller {
    public function index() {
        $this->load->language('extension/payment/globalpay');
        
        $this->load->model('checkout/order');
        
        $order_info = $this->model_checkout_order->getOrder($this->session->data['order_id']);
        
        if ($this->config->get('payment_globalpay_live_demo') == 1) {
            $data['action'] = $this->config->get('payment_globalpay_live_url');
        } else {
            $data['action'] = $this->config->get('payment_globalpay_demo_url');
        }
        
        /*if ($this->config->get('payment_globalpay_card_select') == 1) {
         $card_types = array(
         'visa' => $this->language->get('text_card_visa'),
         'mc' => $this->language->get('text_card_mc'),
         'amex' => $this->language->get('text_card_amex'),
         'switch' => $this->language->get('text_card_switch'),
         'laser' => $this->language->get('text_card_laser'),
         'diners' => $this->language->get('text_card_diners'),
         );*/
        
        /*	$data['cards'] = array();
        
        $accounts = $this->config->get('payment_globalpay_account');
        
        foreach ($accounts as $card => $account) {
        if (isset($account['enabled']) && $account['enabled'] == 1) {
        $data['cards'][] = array(
        'type' => $card_types[$card],
        'account' => (isset($account['default']) && $account['default'] == 1 ? $this->config->get('payment_globalpay_merchant_id') : $account['merchant_id']),
        );
        }
        }
        
        $data['card_select'] = true;
        } else {
        $data['card_select'] = false;
        }*/
        
        //if ($this->config->get('payment_globalpay_auto_settle') == 0) {
        //	$data['settle'] = 0;
        //} elseif ($this->config->get('payment_globalpay_auto_settle') == 1) {
        //	$data['settle'] = 1;
        //} elseif ($this->config->get('payment_globalpay_auto_settle') == 2) {
        //	$data['settle'] = 'MULTI';
        //	}
        
        $data['tss'] = (int)$this->config->get('payment_globalpay_tss_check');
        $data['merchant_id'] = $this->config->get('payment_globalpay_merchant_id');
        
        $data['timestamp'] = strftime("%Y%m%d%H%M%S");
        //$data['order_id'] = $this->session->data['order_id'] . 'T' . $data['timestamp'] . mt_rand(1, 999);
        $data['order_id'] = $this->session->data['order_id'];
        
        $data['amount'] = round($this->currency->format($order_info['total'], $order_info['currency_code'], $order_info['currency_value'], false)*100);
        $data['currency'] = $order_info['currency_code'];
        
        $tmp = $data['timestamp'] . '.' . $data['merchant_id'] . '.' . $data['order_id'] . '.' . $data['amount'] . '.' . $data['currency'];
        $hash = sha1($tmp);
        $tmp = $hash . '.' . $this->config->get('payment_globalpay_secret');
        $data['hash'] = sha1($tmp);
        
        $data['billing_code'] = filter_var(str_replace('-', '', $order_info['payment_postcode']), FILTER_SANITIZE_NUMBER_INT) . '|' . filter_var(str_replace('-', '', $order_info['payment_address_1']), FILTER_SANITIZE_NUMBER_INT);
        $data['payment_country'] = $order_info['payment_iso_code_2'];
        
        if ($this->cart->hasShipping()) {
            $data['shipping_code'] = filter_var(str_replace('-', '', $order_info['shipping_postcode']), FILTER_SANITIZE_NUMBER_INT) . '|' . filter_var(str_replace('-', '', $order_info['shipping_address_1']), FILTER_SANITIZE_NUMBER_INT);
            $data['shipping_country'] = $order_info['shipping_iso_code_2'];
        } else {
            $data['shipping_code'] = filter_var(str_replace('-', '', $order_info['payment_postcode']), FILTER_SANITIZE_NUMBER_INT) . '|' . filter_var(str_replace('-', '', $order_info['payment_address_1']), FILTER_SANITIZE_NUMBER_INT);
            $data['shipping_country'] = $order_info['payment_iso_code_2'];
        }
        
        $data['response_url'] = HTTPS_SERVER . 'index.php?route=extension/payment/globalpay/notify';
        
        $data['api_key'] = $this->config->get('payment_globalpay_secret');
        
        $data['merchant_id'] = $this->config->get('payment_globalpay_merchant_id');
        $data['transactionId'] = $this->session->data['order_id'];
        $data['amount'] = $order_info['total'];
        $data['firstName'] = $order_info['firstname'];
        $data['lastName'] = $order_info['lastname'];
        $data['phone'] =  $order_info['telephone'];
        $data['email'] =  $order_info['email'];
        
        $this->log->write("ABA  Log");
        $this->log->write("response url : ".$data['response_url']);
        $this->log->write("API key : ".$data['api_key']);
        $this->log->write("merchant id : ".$data['merchant_id']);
        $this->log->write("transaction id : ".$data['transactionId']);
        
        
        $data['hash'] = base64_encode(hash_hmac('sha512', $data['merchant_id'] .$data['transactionId'] . $data['amount'], $data['api_key'], true));
        $this->log->write("hash post:".$data['hash']);
        $this->session->data['order_totalforcheckout'] = $order_info['total'];
        return $this->load->view('extension/payment/globalpay', $data);
    }
    
    public function notify() {
        $this->load->model('extension/payment/globalpay');
        
        $this->model_extension_payment_globalpay->logger(print_r($this->request->post, 1));
        
        $this->load->language('extension/payment/globalpay');
        
        
        $this->load->model('checkout/order');
        
        $order_info = $this->model_checkout_order->getOrder($this->session->data['order_id']);
        
        $data['api_key'] = $this->config->get('payment_globalpay_secret');
        
        $data['merchant_id'] = $this->config->get('payment_globalpay_merchant_id');
        $data['transactionId'] = $this->session->data['order_id'];
        $data['order_totalforcheckout']=$this->session->data['order_totalforcheckout'];
        
        
        
        //$data['hash'] = base64_encode(hash_hmac('sha512', $data['merchant_id'] .$data['transactionId'] . $order_info['total'], $data['api_key'], true));
        //$data['hash'] = base64_encode(hash_hmac('sha512', $data['merchant_id'].$data['transactionId'],$data['api_key'] , true));
        $data['hash'] = base64_encode(hash_hmac('sha512', $data['merchant_id'] .$data['transactionId'] , $data['api_key'], true));
        $order_status = $this->model_extension_payment_globalpay->getOrderStatus( $this->session->data['order_id'],$data['hash']);
        
        
        $this->model_extension_payment_globalpay->logger(print_r($order_status));
        
        $order_id=$this->session->data['order_id'];
        
        $this->log->write("ABA Notify Log");
        $this->log->write("Order id : ".$order_id);
        //$this->log->write("Order status : ".print_r($order_status));
        //$this->log->write(print_r($order_status));
        //$this->log->write("Order info : ".print_r($order_info));
        //	$this->log->write(print_r($order_info));
		
		
		
			$log = new Log('globalpay_report.log');
			 $this->log->write("ABA Notify ");
        $this->log->write("Transection id :".$data['transactionId']);
		    $this->log->write("merchant_id id :".$data['merchant_id']);
        $this->log->write("API ".$data['api_key']);
        $this->log->write($order_status);
        $this->log->write($order_info);
		 $this->log->write("------------------------------------------");
        
        if ($order_status['status'] == "0") {
            $globalpay_order_id = $this->model_extension_payment_globalpay->addOrder($order_info, $this->request->post['PASREF'], $this->request->post['AUTHCODE'], $this->request->post['ACCOUNT'], $this->request->post['ORDER_ID']);
            
            //	if ($auto_settle == 1) {
            $this->model_extension_payment_globalpay->addTransaction($globalpay_order_id, 'payment', $order_info);
            $this->model_checkout_order->addOrderHistory($order_id, '1', $this->language->get('text_success'), false);
            //} else {
            //	$this->model_extension_payment_globalpay->addTransaction($globalpay_order_id, 'auth', 0.00);
            //	$this->model_checkout_order->addOrderHistory($order_id, $this->config->get('payment_globalpay_order_status_success_unsettled_id'), $message, false);
            //}
            //$this->model_checkout_order->confirm((int)$this->session->data['order_id'], (int)$this->config->get('paypal_order_status_id'));
            $data['text_response'] = $this->language->get('text_success');
            $data['text_link'] = sprintf($this->language->get('text_link'), $this->url->link('checkout/success', '', true));
        } elseif ($order_status['status'] == "1") {
            // Decline
            $this->model_extension_payment_globalpay->addHistory($order_id, $this->config->get('payment_globalpay_order_status_decline_id'), $this->language->get('text_decline'));
            $data['text_response'] = $this->language->get('text_decline');
            $data['text_link'] = sprintf($this->language->get('text_link'), $this->url->link('checkout/checkout', '', true));
        } elseif ($order_status['status'] == "2") {
            // Referal B
            $this->model_extension_payment_globalpay->addHistory($order_id, $this->config->get('payment_globalpay_order_status_decline_pending_id'), $this->language->get('text_decline'));
            $data['text_response'] = $this->language->get('text_decline');
            $data['text_link'] = sprintf($this->language->get('text_link'), $this->url->link('checkout/checkout', '', true));
        } elseif ($order_status['status'] == "3") {
            // Referal A
            $this->model_extension_payment_globalpay->addHistory($order_id, $this->config->get('payment_globalpay_order_status_decline_stolen_id'), $this->language->get('text_decline'));
            $data['text_response'] = $this->language->get('text_decline');
            $data['text_link'] = sprintf($this->language->get('text_link'), $this->url->link('checkout/checkout', '', true));
        } elseif ($order_status['status'] == "4") {
            // Error Connecting to Bank
            $this->model_extension_payment_globalpay->addHistory($order_id, $this->config->get('payment_globalpay_order_status_decline_bank_id'), $this->language->get('text_decline'));
            $data['text_response'] = $this->language->get('text_bank_error');
            $data['text_link'] = sprintf($this->language->get('text_link'), $this->url->link('checkout/checkout', '', true));
        } elseif ($order_status['status'] == "11") {
            // Error Connecting to Bank
            $this->model_extension_payment_globalpay->addHistory($order_id, $this->config->get('payment_globalpay_order_status_decline_bank_id'), $this->language->get('text_decline'));
            $data['text_response'] = $this->language->get('text_decline');
            $data['text_link'] = sprintf($this->language->get('text_link'), $this->url->link('checkout/checkout', '', true));
        }  else {
            // Other error
            $this->model_extension_payment_globalpay->addHistory($order_id, $this->config->get('payment_globalpay_order_status_decline_id'), $this->language->get('text_decline'));
            $data['text_response'] = $this->language->get('text_decline');
            $data['text_link'] = sprintf($this->language->get('text_link'), $this->url->link('checkout/checkout', '', true));
        }
        
        
        $this->response->setOutput($this->load->view('extension/payment/globalpay_response', $data));
    }
    
    public function notify_mobile() {
        
        
        $this->log->write("ABA Notify Mobile");
        
        $this->log->write("ABA Notify Mobile  GET  : ".$_GET['orderID']);
        
        
        $this->load->model('extension/payment/globalpay');
        
        //  $this->model_extension_payment_globalpay->logger(print_r($this->request->post));
        
        $this->load->language('extension/payment/globalpay');
        
        
        $this->load->model('checkout/order');
        
        $order_info = $this->model_checkout_order->getOrder($this->session->data['order_id_mobile']);
        
        $data['api_key'] = $this->config->get('payment_globalpay_secret');
        
        $data['merchant_id'] = $this->config->get('payment_globalpay_merchant_id');
        $data['transactionId'] =$_GET['orderID'];
        $order_id=$data['transactionId'];
        
        $this->log->write("transactionId  : ". $data['transactionId']);
        
        
        
        $data['hash'] = base64_encode(hash_hmac('sha512', 'konfulon' .$data['transactionId'], 'ba089bcd3bafd8323c2013d3e0342672', true));
        $order_status = $this->model_extension_payment_globalpay->getOrderStatus($data['transactionId'],$data['hash']);
        
        
        //	$this->model_extension_payment_globalpay->logger(print_r($order_status));
        $this->model_extension_payment_globalpay->logger($data['transactionId']);
        
        $this->log->write("ABA Notify Mobile");
        $this->log->write("Transection id :".$data['transactionId']);
        
        $this->log->write("merchant_id id :".$data['merchant_id']);
        $this->log->write("API ".$data['api_key']);
        $this->log->write($order_status);
        $this->log->write($order_info);
        
        
		
		$log = new Log('globalpay_report.log');
			 $this->log->write("ABA Notify Mobile");
        $this->log->write("Transection id :".$data['transactionId']);
		    $this->log->write("merchant_id id :".$data['merchant_id']);
        $this->log->write("API ".$data['api_key']);
        $this->log->write($order_status);
        $this->log->write($order_info);
		 $this->log->write("------------------------------------------");
        
        
        if ($order_status['status'] == "0") {
            
            $this->model_checkout_order->addOrderHistory($order_id, '1', $this->language->get('text_success'), false);
            // $data['text_response'] = $this->language->get('text_success');
            $data['text_response'] ="Thank You, Your Payment was successful.";
            //  $data['text_link'] = sprintf($this->language->get('text_link'), $this->url->link('checkout/success', '', true));
            
            
            //Clear Cart
            
            $this->load->language('checkout/success');
            $this->cart->clear();
            
            unset($this->session->data['shipping_method']);
            unset($this->session->data['shipping_methods']);
            unset($this->session->data['payment_method']);
            unset($this->session->data['payment_methods']);
            unset($this->session->data['guest']);
            unset($this->session->data['comment']);
            unset($this->session->data['order_id']);
            unset($this->session->data['coupon']);
            unset($this->session->data['reward']);
            unset($this->session->data['voucher']);
            unset($this->session->data['vouchers']);
            unset($this->session->data['totals']);
            
            //
            
            $data['text_link'] = sprintf($this->language->get('text_link'), $this->url->link('checkout/success', '', true));
            
            
            
        } elseif ($order_status['status'] == "1") {
            
            $this->model_extension_payment_globalpay->addHistory($order_id, $this->config->get('payment_globalpay_order_status_decline_id'), $this->language->get('text_decline'));
            $data['text_response'] = $this->language->get('text_decline');
            
            $data['text_link'] = sprintf($this->language->get('text_link'), $this->url->link('checkout/checkout', '', true));
        } elseif ($order_status['status'] == "2") {
            
            $this->model_extension_payment_globalpay->addHistory($order_id, $this->config->get('payment_globalpay_order_status_decline_pending_id'), $this->language->get('text_decline'));
            $data['text_response'] = $this->language->get('text_decline');
            
            $data['text_link'] = sprintf($this->language->get('text_link'), $this->url->link('checkout/checkout', '', true));
        } elseif ($order_status['status'] == "3") {
            // Referal A
            $this->model_extension_payment_globalpay->addHistory($order_id, $this->config->get('payment_globalpay_order_status_decline_stolen_id'), $this->language->get('text_decline'));
            $data['text_response'] = $this->language->get('text_decline');
            //   $data['text_response']=$data['hash'].'-'.$data['description'];
            $data['text_link'] = sprintf($this->language->get('text_link'), $this->url->link('checkout/checkout', '', true));
        } elseif ($order_status['status'] == "4") {
            // Error Connecting to Bank
            $this->model_extension_payment_globalpay->addHistory($order_id, $this->config->get('payment_globalpay_order_status_decline_bank_id'), $this->language->get('text_decline'));
            $data['text_response'] = $this->language->get('text_decline');
            //   $data['text_response']=$data['hash'].'-'.$data['description'];
            $data['text_link'] = sprintf($this->language->get('text_link'), $this->url->link('checkout/checkout', '', true));
        } elseif ($order_status['status'] == "11") {
            // Error Connecting to Bank
            $this->model_extension_payment_globalpay->addHistory($order_id, $this->config->get('payment_globalpay_order_status_decline_bank_id'), $this->language->get('text_decline'));
            $data['text_response'] = $this->language->get('text_decline');
            //  $data['text_response']=$data['hash'].'-'.$data['description'];
            $data['text_link'] = sprintf($this->language->get('text_link'), $this->url->link('checkout/checkout', '', true));
        }  else {
            // Other error
            $this->model_extension_payment_globalpay->addHistory($order_id, $this->config->get('payment_globalpay_order_status_decline_id'), $this->language->get('text_decline'));
            $data['text_response'] = $this->language->get('text_decline');
            //  $data['text_response']=$data['hash'].'-'.$data['description'];
            $data['text_link'] = sprintf($this->language->get('text_link'), $this->url->link('checkout/checkout', '', true));
        }
        
        
        $this->response->setOutput($this->load->view('extension/payment/globalpay_response_mobile', $data));
    }
    
    
}