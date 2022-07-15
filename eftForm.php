<?php
require_once 'helpers.php';
?>
<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Summer Project</title>

    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
          integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link href="https://code.jquery.com/ui/1.10.4/themes/ui-lightness/jquery-ui.css"
          rel="stylesheet">
    <script src="https://code.jquery.com/jquery-1.10.2.js"></script>
    <script src="https://code.jquery.com/ui/1.10.4/jquery-ui.js"></script>
    <link rel="stylesheet" type="text/css" href="assets/style.css">
    <style>
        .input_bar {
            width: 40px;
        }
    </style>
</head>
<body class="antialiased">
<div class="container">
    <div class="eftForm">
        <div class="">
            <h1>Project/ Group EFT Setup</h1>
        </div>
        <div class="row">
            <div class="col-md-6 internal_use border-dark">
                <table class="table" style="border-color: #212529">
                    <tbody>
                    <tr class="center-align">
                        <td width="40%" colspan="2" class="bg-gray text-bold color-light-blue">CDYSB Internal Use Only
                        </td>
                    </tr>
                    <tr class="right-align">
                        <td width="50%" class="color-light-blue">GMIS No:
                        </td>
                        <td style="display: flex">
                            <?php
                            for ($i = 1; $i <= 4; $i++) {
                                ?>
                                <input type="text" maxlength="1" onkeypress="return isNumberKey(event)"
                                       class="form-control input_bar" id="gmis_no" name="gmis_no[]">
                                <?php
                            }
                            ?>
                        </td>
                    </tr>
                    <tr class="right-align">
                        <td width="50%" class="color-light-blue">Supplier No:
                        </td>
                        <td style="display: flex;">
                            <?php
                            for ($i = 1; $i <= 7; $i++) {
                                ?>
                                <input type="text" maxlength="1" onkeypress="return isNumberKey(event)"
                                       class="form-control input_bar" id="supplier_no" name="supplier_no[]">
                                <?php
                            }
                            ?>
                        </td>
                    </tr>
                    <tr class="right-align">
                        <td width="50%" class="color-light-blue">Remittance Email:
                        </td>
                        <td><input type="email" class="form-control" id="premises_address" name="remittance_email"></td>
                    </tr>
                    </tbody>
                </table>
            </div>
            <div class="col-md-3 border-dark">

            </div>
            <div class="col-md-3 images-portal">
                <img src="images/logo2.jpg" height="100px" width="200px">
                <img src="images/logo1.jpg" class="logo1" height="100px" width="200px">
            </div>
        </div>
        <p class="color-light-blue right-align form_guidance">
            Please Complete This Form In <span
                    class="bg-gray text-bold color-light-blue"><u>Clear Block Capitals</u></span>
        </p>

        <section class="group_details etfSection">
            <h1>Group Details</h1>
            <div>
                <table class="table" style="border-color: #212529">
                    <tbody>
                    <tr>
                        <td width="30%" colspan="" class="color-light-blue right-align">Group Name:</td>
                        <td colspan="3">
                            <input type="text" class="form-control datepicker" id="group_name"
                                   name="group_name">
                        </td>
                    </tr>

                    <tr>
                        <td width="30%" colspan="" class="color-light-blue right-align">Address:</td>
                        <td colspan="3">
                            <textarea id="group_address" name="group_address" rows="8" cols="100"></textarea>
                        </td>
                    </tr>
                    <tr>
                        <td width="30%" colspan="" class="color-light-blue right-align">Eircode</td>
                        <td colspan="3">
                            <input type="text" class="form-control" id="group_eircode"
                                   name="group_eircode">
                        </td>
                    </tr>
                    <tr>
                        <td width="" class="color-light-blue right-align">Tax Registration <br> Number(TRN):
                        </td>
                        <td style="display: flex;">
                            <?php
                            for ($i = 1; $i <= 9; $i++) {
                                ?>
                                <input type="text" maxlength="1" onkeypress="return isNumberKey(event)"
                                       class="form-control input_bar" id="bank_trn" name="bank_trn[]">
                                <?php
                            }
                            ?>
                        </td>
                        <td class="color-light-blue right-align">Tax Clearance <br> Access Number(TCAN):
                        </td>
                        <td style="display: flex;">
                            <?php
                            for ($i = 1; $i <= 6; $i++) {
                                ?>
                                <input type="text" maxlength="1" onkeypress="return isNumberKey(event)"
                                       class="form-control input_bar" id="bank_tcan" name="bank_tcan[]">
                                <?php
                            }
                            ?>
                        </td>
                    </tr>

                    </tbody>
                </table>

            </div>
        </section>
        <section class="bank_details etfSection">
            <h1>Bank Details</h1>
            <div>
                <table class="table" style="border-color: #212529">
                    <tbody>
                    <tr>
                        <td width="30%" colspan="" class="color-light-blue right-align">Name Of Bank:</td>
                        <td colspan="">
                            <input type="text" class="form-control datepicker" id="bank_name"
                                   name="bank_name">
                        </td>
                    </tr>

                    <tr>
                        <td width="30%" colspan="" class="color-light-blue right-align">Address Of Bank:</td>
                        <td colspan="">
                            <textarea id="bank_address" name="bank_address" rows="8" cols="100"></textarea>
                        </td>
                    </tr>
                    <tr>
                        <td width="" class="color-light-blue right-align">BIC:
                        </td>
                        <td style="display: flex;">
                            <?php
                            for ($i = 1; $i <= 8; $i++) {
                                ?>
                                <input type="text" maxlength="1" onkeypress="return isNumberKey(event)"
                                       class="form-control input_bar" id="bank_bic" name="bank_bic[]">
                                <?php
                            }
                            ?>
                        </td>
                    </tr>
                    <tr>
                        <td width="" class="color-light-blue right-align">IBAN:
                        </td>
                        <td style="display: flex;">
                            <?php
                            for ($i = 1; $i <= 6; $i++) {
                                for ($j = 1; $j <= 4; $j++) {
                                    if ($i == 6 && $j >= 3) {
                                        continue;
                                    }
                                    ?>
                                    <input type="text" maxlength="1" onkeypress="return isNumberKey(event)"
                                           class="form-control input_bar" id="bank_iban" name="bank_iban[]">
                                    <?php
                                    if($j==4)
                                    {
                                        echo '-';
                                    }
                                }
                            }
                            ?>
                        </td>
                    </tr>
                    <tr>
                        <td width="30%" colspan="" class="color-light-blue right-align">Bank Account Name:</td>
                        <td colspan="">
                            <input type="text" style="width: 100%" id="bank_acount_name" name="bank_acount_name" >
                        </td>
                    </tr>
                    </tbody>
                </table>

            </div>
        </section>
        <section class="management_committee etfSection">
            <div class="management_committee " >
                <p class="color-light-blue center-align text-bold">On Behalf of the Management Committee:</p>
                <p class="color-light-blue center-align" style="text-align: center">Complete in BLOCK capitals</p>
                <table class="table" style="border-color: #212529">
                    <tbody>
                    <tr>
                        <td  colspan="" class="color-light-blue right-align">Name</td>
                        <td colspan="">
                            <input type="text" class="form-control " id="name"
                                   name="name">
                        </td>
                        <td s colspan="" class="color-light-blue right-align">Position</td>
                        <td colspan="">
                            <input type="text" class="form-control " id="position"
                                   name="position">
                        </td>
                    </tr>
                    <tr>
                        <td  colspan="" class="color-light-blue right-align">Signed</td>
                        <td colspan="">
                            <input type="text" class="form-control " id="sign"
                                   name="sign">
                        </td>
                        <td s colspan="" class="color-light-blue right-align">date</td>
                        <td colspan="">
                            <input type="text" class="form-control datepicker" id="position"
                                   name="position">
                        </td>
                    </tr>

                    </tbody>
                </table>

            </div>
        </section>
    </div>
</div>
</body>
</html>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"></script>
<!--<script src="https://code.jquery.com/jquery-3.6.0.js"></script>-->
<script src="assets/index.js"></script>
<script>
    function isNumberKey(evt) {
        var charCode = (evt.which) ? evt.which : event.keyCode
        if (charCode > 31 && (charCode < 48 || charCode > 57))
            return false;

        return true;
    }
</script>