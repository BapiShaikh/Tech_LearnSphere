<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Razorpay\Api\Api;

class PaymentController extends Controller
{
    // Display the payment page
    public function showPaymentPage()
    {
        return view('payment'); // Your payment view
    }

    // Create an order with Razorpay
    public function createOrder(Request $request)
    {
        $api = new Api(env('RAZORPAY_KEY'), env('RAZORPAY_SECRET'));

        $orderData = [
            'receipt'         => 'rcptid_11',
            'amount'          => 600000, // amount in the smallest currency unit (12900 paise = 129 INR)
            'currency'        => 'INR'
        ];

        $razorpayOrder = $api->order->create($orderData);

        $orderId = $razorpayOrder['id'];

        // Save this order id in the session or your database

        return response()->json([
            'orderId' => $orderId,
            'razorpayKey' => env('RAZORPAY_KEY')
        ]);
    }

    // Handle payment success
    public function handleSuccess(Request $request)
    {
        // Handle payment success (verify the signature and payment id)
        $signature = $request->razorpay_signature;
        $paymentId = $request->razorpay_payment_id;
        $orderId = $request->razorpay_order_id;

        $api = new Api(env('RAZORPAY_KEY'), env('RAZORPAY_SECRET'));

        try {
            $attributes = [
                'razorpay_signature' => $signature,
                'razorpay_payment_id' => $paymentId,
                'razorpay_order_id' => $orderId
            ];

            $api->utility->verifyPaymentSignature($attributes);

            // Payment is successful, handle the business logic here
            return view('payment-success'); // Your success view
        } catch (\Exception $e) {
            return view('payment-failure'); // Your failure view
        }
    }

    // Handle payment failure
    public function handleFailure(Request $request)
    {
        // Handle payment failure
        return view('payment-failure'); // Your failure view
    }
}
