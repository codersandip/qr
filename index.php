<?php
$data = [
    [
        // "name" => "India Post Payments Bank",
        "merchant_name" => "Sandip Tawhare PAYTM",
        "upi_id" => "9527849688@paytm",
        "notes" => ""
    ],
    [
        // "name" => "India Post Payments Bank",
        "merchant_name" => "Sandip Tawhare IPPB",
        "upi_id" => "9527849688@postbank",
        "notes" => ""
    ],
    [
        // "name" => "IDFC Bank Credit Card",
        "merchant_name" => "Sandip Tawhare IDFC Bank Credit Card",
        "upi_id" => "4405232013574753.cc@idfcbank",
        "notes" => "IDFC Bank Credit Card Bill"
    ],
    [
        // "name" => "Axis Bank Credit Card",
        "merchant_name" => "Sandip Tawhare Axis Bank Credit Card",
        "upi_id" => "CC.9195278496882373@axisbank",
        "notes" => "Axis Bank Credit Card Bill"
    ],
    [
        // "name" => "V Axis Bank Credit Card",
        "merchant_name" => "Vaibhav Tawhare Axis Bank Credit Card",
        "upi_id" => "CC.9195611371774610@axisbank",
        "notes" => "Axis Bank Credit Card Bill"
    ]
];
?>
<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>UPI QR Code</title>
    <link href="assets/css/bootstrap.min.css" rel="stylesheet">
    <style>
        .form-label {
            font-size: 14px;
        }

        .h-6 {
            height: 1.4rem;
        }

        .h-10 {
            height: 2.5rem;
        }

     /*    #qr img {
            display: block;
            margin: auto;
        } */
    </style>
</head>

<body style="background: #f5f5f5;">
    <div class="container-fluid mt-3 mb-4">
        <h3 class="text-center">UPI QR Code</h3>
        <p class="text-center">Create dynamic UPI QR Codes with custom amount. Customer can scan and pay with WhatsApp, Google Pay, Paytm, PhonePe or any BHIM UPI app.</p>
        <div class="d-flex justify-content-center">
            <div class="row" style="width: 950px;">
                <div class="col-md-6 px-5">
                    <div class="mb-2">
                        <label for="merchant_name" class="form-label">Merchant List</label>
                        <select class="form-select form-select-sm mb-2" id="merchant_list" aria-label="Default select example">
                            <option value="" selected>Select Any Of this</option>
                            <?php foreach ($data as $key => $value) { ?>
                                <option data-type='<?= json_encode($value) ?>'><?= $value['merchant_name'] ?></option>
                            <?php } ?>
                            <option value="">Others</option>
                        </select>
                    </div>
                    <div class="mb-2">
                        <label for="merchant_name" class="form-label">Merchant / Payee Name</label>
                        <input type="text" class="form-control form-control-sm" id="merchant_name" placeholder="Enter your business name here...">
                    </div>
                    <!-- <div class="mb-2">
                        <label for="exampleFormControlInput1" class="form-label">Payment Address Type</label>
                        <select class="form-select form-select-sm">
                            <option disabled>Select payment address type...</option>
                            <option selected value="UPI">UPI Address</option>
                            <option value="BANK">Bank Account Number</option>
                            <option value="AADHAAR">Aadhaar Number</option>
                            <option value="MOBILE">Mobile Number</option>
                        </select>
                    </div> -->
                    <div class="mb-2">
                        <label for="upi_id" class="form-label">UPI ID</label>
                        <input type="text" class="form-control form-control-sm" id="upi_id" placeholder="Enter your UPI ID here...">
                    </div>
                    <div class="mb-2">
                        <label for="transaction_amount" class="form-label">Transaction Amount</label>
                        <input type="text" class="form-control form-control-sm" id="transaction_amount" placeholder="Enter transaction amount here...">
                    </div>
                    <div class="mb-2">
                        <label for="description" class="form-label">Description (Notes)</label>
                        <input type="text" class="form-control form-control-sm" id="description" placeholder="Enter transaction description here...">
                    </div>
                    <div class="d-grid gap-2">
                        <button class="btn btn-primary download-qr" type="button">Download QR Code</button>
                    </div>
                    <a href="#" class="link-primary link">Open Link On Phone </a><span class="text-muted">(Requires UPI app)</span>
                    <a href="#" class="copy" target="_blank"><img src="assets/img/copy.png" style="width: 32px;"></a>
                    <!-- <br><a href="#" class="link-primary link1">Open Link On Phone </a><span class="text-muted">(Requires UPI app)</span> -->
                </div>
                <div class="col-md-6 px-3">
                    <div class="rounded-4 shadow border pb-3 qr bg-white">
                        <div class="mt-3">
                            <p class="text-center merchant_name fw-bolder text-dark fs-4 text-uppercase lh-md py-1 bg-light">merchant name</p>
                        </div>
                        <div id="qr" class="mt-4 d-flex justify-content-center" alt=""></div>
                        <p class="text-center mt-3 upi_id">merchant@upi</p>
                        <p class="text-center mt-3 fw-bolder fs-5">Scan and pay with any BHIM UPI app</p>
                        <div class="d-flex justify-content-center mt-4" style="column-gap: 1.5rem;">
                            <img src="assets/img/bhim.svg" alt="BHIM" class="h-10">
                            <img src="assets/img/upi.svg" alt="UPI" class="h-10">
                        </div>
                        <div class="d-flex justify-content-center mt-4" style="column-gap: 1rem;">
                            <img src="assets/img/g-pay.svg" alt="Google Pay" class="h-6">
                            <img src="assets/img/phonepe.svg" alt="PhonePe" class="h-6">
                            <img src="assets/img/paytm.svg" alt="Paytm" class="h-6">
                            <img src="assets/img/amazonpay.svg" alt="Amazon Pay" class="h-6">
                            <!-- <img src="https://www.kindpng.com/picc/m/622-6221288_hdfc-payzapp-hd-png-download.png" alt="Amazon Pay" class="h-6"> -->
                            <img src="assets/img/payzapp.svg" alt="PayZ App" class="h-6">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <script src="assets/js/jquery-3.7.1.min.js"></script>
    <script src="assets/js/bootstrap.bundle.min.js"></script>
    <script src="assets/js/dom-to-image.min.js"></script>
    <!-- <script src="https://cdnjs.cloudflare.com/ajax/libs/html2canvas/0.4.1/html2canvas.min.js"></script> -->
    <script src="assets/js/sweetalert2.js"></script>
    <script src="assets/js/qrcode.js"></script>
    <script>
        $(document).ready(function() {
            var qrcode = new QRCode(document.getElementById("qr"), {
                text: "upi://pay",
                width: 225,
                height: 225,
                colorDark: "#000000",
                colorLight: "#ffffff",
                correctLevel: QRCode.CorrectLevel.H
            });
            $('#upi_id').keyup(function(e) {
                $('.upi_id').text($(this).val());
                if ($(this).val().length == 0) {
                    $('.upi_id').text("merchant@upi");
                }
            });

            $("input[type=text], select").
            on("blur keyup change", function(e) {
                if ($(this).attr('id') == "merchant_list") {
                    if ($(this).find('option:selected').val() != "") {
                        var json = $(this).find('option:selected').data('type');
                        $('#upi_id').val(json.upi_id);
                        $('.upi_id').text(json.upi_id);
                        $('#upi_id').prop('readonly', true);
                        $('#merchant_name').val(json.merchant_name);
                        $('.merchant_name').text(json.merchant_name);
                        /* $('.merchant_name').removeClass('d-none'); */
                        $('#description').val(json.notes);
                        createQR();
                    } else {
                        $('#upi_id').val("");
                        $('.upi_id').text("merchant@upi");
                        $('#upi_id').prop('readonly', false);
                        $('#merchant_name').val("");
                        $('.merchant_name').text("merchant name");
                        /* $('.merchant_name').addClass('d-none'); */
                        $('#description').val("");
                        var link = "upi://pay?pa=" + $('#upi_id').val() + "&pn=" + $('#merchant_name').val() + "&am=" + $('#transaction_amount').val() + "&tn=" + $('#description').val() + "&cu=INR";
                        $('.link').attr('href', encodeURI(link));
                        qrcode.makeCode(link);
                    }
                    return null;
                }

                if ($(this).attr('id') == "merchant_name") {
                    $('.merchant_name').text($(this).val());
                    if ($(this).val().length == 0) {
                        $('.merchant_name').text("merchant name");
                    }
                }

                createQR();
            });
            $('.download-qr').click(function() {
                domtoimage.toJpeg($('.qr')[0], {
                        quality: 1,
                        bgcolor: '#fff'
                    })
                    .then(function(dataUrl) {
                        dataUrl.replace(/^data:image\/png/, "data:application/octet-stream");
                        var link = document.createElement('a');
                        /* link.download = 'upi_'+ (Math.random() + 1).toString(36).substring(7) +'.jpg'; */
                        link.download = 'upi_'+ new Date().getTime() +'.jpg';
                        link.href = dataUrl;
                        document.body.appendChild(link);
                        link.click();
                        document.body.removeChild(link);
                    });
            });

            $('.copy').click(function(e) {
                e.preventDefault();
                var $temp = $("<input>");
                $("body").append($temp);
                $temp.val($('.link').attr('href')).select();
                document.execCommand("copy");
                $temp.remove();
                Swal.fire({
                    icon: 'success',
                    title: 'Copied..!',
                    text: $('.link').attr('href'),
                    showConfirmButton: false,
                    timer: 1500
                });
                /* alert("Copied..!"); */
            });
            createQR();

            function createQR() {
                var link = "upi://pay?pa=" + $('#upi_id').val() + "&pn=" + $('#merchant_name').val() + "&am=" + $('#transaction_amount').val() + "&tn=" + $('#description').val() + "&cu=INR";
                $('.link').attr('href', encodeURI(link));
                qrcode.makeCode(link);
            }
        });
    </script>
</body>

</html>