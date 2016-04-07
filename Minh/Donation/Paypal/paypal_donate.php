<?php
    require "paypal_connect.php";

    use PayPal\Api\Payer;
    use PayPal\Api\Item;
    use PayPal\Api\ItemList;
    use PayPal\Api\Details;
    use PayPal\Api\Amount;
    use PayPal\Api\Transaction;
    use PayPal\Api\RedirectUrls;
    use PayPal\Api\Payment;

    $product = "Donation";
    $price = $_POST["donation_amount"];
    $shipping = 0.00;
    $total = $price + $shipping;

    CreatePayment($product, $price, $shipping, $total, $paypal);

    function CreatePayment($product, $price, $shipping, $total, $paypal){

        $payer = new Payer();
        $payer->setPaymentMethod("paypal");

        $item = new Item();
        $item->setName($product)
            ->setCurrency("USD")
            ->setQuantity(1)
            ->setPrice($price);

        $itemList = new ItemList();
        $itemList->setItems([$item]);

        $details = new Details();
        $details->setShipping($shipping)
            ->setSubtotal($price);

        $amount = new Amount();
        $amount->setCurrency("USD")
            ->setTotal($total)
            ->setDetails($details);

        $transaction = new Transaction();
        $transaction->setAmount($amount)
            ->setItemList($itemList)
            ->setDescription("Donation")
            ->setInvoiceNumber(uniqid());

        $redirectUrls = new RedirectUrls();
        $redirectUrls->setReturnUrl(SITE_URL . '/paypal_pay.php?success=true')
            ->setCancelUrl(SITE_URL . '/paypal_pay.php?success=false');

        /* Payment =======================================================================
            setIntent()
                param: 'sale' or 'authorize' or 'order'
        ==================================================================================*/
        $payment = new Payment();
        $payment->setIntent("sale")
            ->setPayer($payer)
            ->setRedirectUrls($redirectUrls)
            ->setTransactions([$transaction]);

        try{
            $response = $payment->create($paypal);
        }
        catch (PayPal\Exception\PayPalConnectionException $ex) {
            echo $ex->getCode(); // Prints the Error Code
            echo $ex->getData(); // Prints the detailed error message
            die($ex);
        }
        catch (Exception $ex) {
            die($ex);
        }

        $approvalUrl = $payment->getApprovalLink();
		echo $approvalUrl;
		header("Location: {$approvalUrl}");
	}
 ?>
