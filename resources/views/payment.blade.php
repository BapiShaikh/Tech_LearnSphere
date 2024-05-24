<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Payment</title>
    <script src="https://checkout.razorpay.com/v1/checkout.js"></script>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css">
    <style>
        .payment{
            width: 400px;
            height: 250px;
            background-color: #dcd7d7;
            margin-left: 30%;
            margin-top: 20%
        }
        .btn-primary{

            border-radius: 10px;
        }
        .mx-auto{
            margin-top: 160px
        }
    </style>
</head>
<body>

    <h1>Make a Payment</h1>
    <button id="pay-button">Pay Now</button>




    <script>
        $('#pay-button').click(function () {
            $.ajax({
                url: '{{ route("payment.order") }}',
                type: 'POST',
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                },
                success: function (data) {
                    var options = {
                        "key": data.razorpayKey,
                        "amount": 129000, // Amount is in currency subunits. Default currency is INR.
                        "currency": "INR",
                        "name": "Tech_LearnSphere",
                        "description": "Test Transaction",
                        "image": "https://example.com/your_logo",
                        "order_id": data.orderId,
                        "handler": function (response){
                            $.ajax({
                                url: '{{ route("payment.success") }}',
                                type: 'POST',
                                data: {
                                    razorpay_payment_id: response.razorpay_payment_id,
                                    razorpay_order_id: response.razorpay_order_id,
                                    razorpay_signature: response.razorpay_signature
                                },
                                success: function (data) {
                                    window.location.href = '{{ route("payment.success") }}';
                                }
                            });
                        },
                        "prefill": {
                            "name": "Your Name",
                            "email": "your.email@example.com",
                            "contact": "9999999999"
                        },
                        "notes": {
                            "address": "Your Address"
                        },
                        "theme": {
                            "color": "#F37254"
                        }
                    };
                    var rzp1 = new Razorpay(options);
                    rzp1.open();
                }
            });
        });
    </script>
</body>
</html>
