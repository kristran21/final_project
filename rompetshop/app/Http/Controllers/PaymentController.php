<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Schema;
use Omnipay\Omnipay;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Session;
use App\Models\Payment;
use App\Models\Orders;
use App\Models\OrderProducts;
use Cart;

class PaymentController extends Controller
{
    private $gateway;

    public function __construct()
    {
        $this->gateway = Omnipay::create('PayPal_Rest');
        $this->gateway->setClientId(env('PAYPAL_CLIENT_ID'));
        $this->gateway->setSecret(env('PAYPAL_CLIENT_SECRET'));
        $this->gateway->setTestMode(true);
    }

    public function pay(Request $request)
    {
        $infor_order = new Orders;
        $infor_order->orderNumber = rand(1, 99999);
        $infor_order->name = $request->name;
        $infor_order->phone = $request->phone;
        $infor_order->address = $request->address;
        $infor_order->note = $request->note;
        $infor_order->bill = $request->bill;
        $infor_order->method = "PayPal";
        $infor_order->save();

        // save data vao bang order_product
        foreach (json_decode($request->lineItems) as $item) {
            $orderProduct = new OrderProducts;
            $orderProduct->orderNumber = $infor_order->orderNumber;
            $orderProduct->productId = $item->id;
            $orderProduct->productName = $item->name;
            $orderProduct->quantity = $item->qty;
            $orderProduct->save();
        }


        Cart::destroy();
        try {
            $response = $this->gateway->purchase(array(
                'amount' => $request->amount,
                'currency' => env('PAYPAL_CURRENCY'),
                'returnUrl' => url('success'),
                'cancelUrl' => url('error')
            ))->send();

            if ($response->isRedirect()) {
                $response->redirect();
            } else {
                return $response->getMessage();
            }
        } catch (\Throwable $th) {
            return $th->getMessage();
        }
    }

    public function success(Request $request)
    {
        if ($request->input('paymentId') && $request->input('PayerID')) {
            $transaction = $this->gateway->completePurchase(array(
                'payer_id' => $request->input('PayerID'),
                'transactionReference' => $request->input('paymentId'),

            ));

            $response = $transaction->send();

            if ($response->isSuccessful()) {
                $arr = $response->getData();
                // Schema
                $payment = new Payment;
                $payment->payment_id = $arr['id'];
                $payment->payer_id = $arr['payer']['payer_info']['payer_id'];
                $payment->payer_email = $arr['payer']['payer_info']['email'];
                $payment->amount = $arr['transactions'][0]['amount']['total'];
                $payment->currency = env('PAYPAL_CURRENCY');
                $payment->payment_status = $arr['state'];
                $payment->save();

                // return "Payment is Successfully. Your Transaction Id is: " . $arr['id'];
                // session()->forget('');
                $id = $arr['id'];

                return view('bill', compact('id'));
            } else {
                return $response->getMessage();
            }
        }
    }
    public function error(Request $request)
    {
        //

    }

    public function execPostRequest($url, $data)
    {
        $ch = curl_init($url);
        curl_setopt($ch, CURLOPT_CUSTOMREQUEST, "POST");
        curl_setopt($ch, CURLOPT_POSTFIELDS, $data);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
        curl_setopt(
            $ch,
            CURLOPT_HTTPHEADER,
            array(
                'Content-Type: application/json',
                'Content-Length: ' . strlen($data)
            )
        );
        curl_setopt($ch, CURLOPT_TIMEOUT, 5);
        curl_setopt($ch, CURLOPT_CONNECTTIMEOUT, 5);
        //execute post
        $result = curl_exec($ch);
        //close connection
        curl_close($ch);
        return $result;
    }

    public function momo_payment(Request $request)
    {
        // $content = Cart::content();
        // foreach ($content as $v_content) {
        // $order_d_data['product_name'] = $v_content->name;
        // DB::table('orders')->insert($order_d_data);
        // }

        $infor_order = new Orders;
        $infor_order->orderNumber = rand(1, 99999);
        $infor_order->name = $request->name;
        $infor_order->phone = $request->phone;
        $infor_order->address = $request->address;
        $infor_order->note = $request->note;
        $infor_order->bill = $request->bill;
        $infor_order->method = 'MoMo';

        $infor_order->save();

        // luu data vao bang order_product
        foreach (json_decode($request->lineItems) as $item) {
            $orderProduct = new OrderProducts;
            $orderProduct->orderNumber = $infor_order->orderNumber;
            $orderProduct->productId = $item->id;
            $orderProduct->productName = $item->name;
            $orderProduct->quantity = $item->qty;
            $orderProduct->save();
        }

        Cart::destroy();


        $endpoint = "https://test-payment.momo.vn/v2/gateway/api/create";
        // req  , res

        //required request 
        $partnerCode = 'MOMOFRXF20220919';
        $accessKey = '3aEh4BvvGezQnukU';
        $secretKey = 'Aioj80FpsJR761ANN0w8wbKPG6PndqYU';
        $orderInfo = "Thanh toán qua MoMo";
        // Note change
        // option
        $amount = $request->amount * 23000;
        $orderId = time() . "";
        $redirectUrl = "http://127.0.0.1:8000/show-cart";
        $ipnUrl = "http://127.0.0.1:8000/show-cart";
        $extraData = "";
        $requestId = time() . "";
        $requestType = "captureWallet";
        $extraData = "";

        //before sign HMAC SHA256 signature (required)
        $rawHash = "accessKey=" . $accessKey . "&amount=" . $amount . "&extraData=" . $extraData . "&ipnUrl=" . $ipnUrl . "&orderId=" . $orderId . "&orderInfo=" . $orderInfo . "&partnerCode=" . $partnerCode . "&redirectUrl=" . $redirectUrl . "&requestId=" . $requestId . "&requestType=" . $requestType;
        $signature = hash_hmac("sha256", $rawHash, $secretKey);

        //req
        $data = array(
            'partnerCode' => $partnerCode,
            'partnerName' => "Test",
            "storeId" => "MomoTestStore",
            'requestId' => $requestId,
            'amount' => $amount,
            'orderId' => $orderId,
            'orderInfo' => $orderInfo,
            'redirectUrl' => $redirectUrl,
            'ipnUrl' => $ipnUrl,
            'lang' => 'vi',
            'extraData' => $extraData,
            'requestType' => $requestType,
            'signature' => $signature
        );

        $result = $this->execPostRequest($endpoint, json_encode($data));

        $jsonResult = json_decode($result, true);  // decode json
        //Just a example, please check more in there



        return redirect($jsonResult['payUrl']);
    }
}
