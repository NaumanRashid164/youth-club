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
        .media {
            margin: 20px 0 30px 0;
        }

        .logo1 img {
            height: 100px;
            padding-top: 20px;
        }

        .logo2 img {
            height: 100px;
        }
        .form-check-input {
            background: #C8C8C8;
        }
  
    </style>
</head>
<body class="antialiased">
<div class="container">
    <div class="summer_project">
        <header>
            <div class="media d-flex justify-content-around">
                <div class="logo1">
                    <img src="images/logo1.jpg">
                </div>
                <div class="logo2">
                    <img src="images/logo2.jpg">
                </div>
            </div>
            <h1>2021 SUMMER PROJECT GRANT SCHEME</h1>
            <h3> Application Form <span>(version: 2106)</span></h3>

            <p>Please review the Eligibility Criteria and Explanatory Notes before completing all section of this form.
                <br>
                <span>
            Closing Date For Application: 15th June 2021
        </span>
            </p>
        </header>
        <form>
            <section class="contact_detail section">
                <h1>Contact Details</h1>
                <div>
                    <table class="table table-bordered" style="border-color: #212529">
                        <tbody>
                        <tr>
                            <td width="40%" class="bg-gray text-bold">1. Name of Club/Group</td>
                            <td><input type="text" class="form-control" id="club_name" name="club_name"></td>
                        </tr>
                        <tr>
                            <td width="40%" class="bg-gray text-bold">2. Premises Address:<br><span>(where the club.group primarily operate from:)</span>
                            </td>
                            <td><input type="text" class="form-control" id="premises_address" name="premises_address">
                            </td>
                        </tr>
                        <tr>
                            <td width="40%" class="bg-gray text-bold">3. Premises Eircode Details</td>
                            <td><input type="text" class="form-control" id="premises_code" name="premises_code"></td>
                        </tr>
                        <tr>
                            <td width="100%" colspan="2" class="bg-gray text-bold">4. Contact detail of Club/Group
                                Secretary
                            </td>
                        </tr>
                        <tr>
                            <td width="40%" class="bg-gray text-align-right">Secretary's name</td>
                            <td><input type="text" class="form-control" id="secretary_name" name="secretary_name"></td>
                        </tr>
                        <tr>
                            <td width="40%" class="bg-gray text-align-right">Corresponding Address(Including Eircode)
                                <br> (All posted correspondence will goto this address)
                            </td>
                            <td><input type="text" class="form-control" id="corresponding_address"
                                       name="corresponding_address"></td>
                        </tr>
                        <tr>
                            <td width="40%" class="bg-gray text-align-right">Secretary's Email</td>
                            <td><input type="email" class="form-control" id="secretary_email" name="secretary_email">
                            </td>
                        </tr>
                        <tr>
                            <td width="40%" class="bg-gray text-align-right">Secretary's Contact Telephone Number
                            </td>
                            <td><input type="text" class="form-control number" id="secretary_contact_number"
                                       name="secretary_contact_number"></td>
                        </tr>
                        <tr>
                            <td width="40%" class="bg-gray text-align-right">Club/Group Generic Email: <br> (Not to
                                secretary email)
                            </td>
                            <td><input type="email" class="form-control" id="group_email" name="group_email"></td>
                        </tr>
                        <tr>
                            <td width="100%" colspan="2" class="bg-gray text-bold">5. Telephone Contact Detail of the
                                Co-ordinator of the Summer
                                Project
                            </td>
                        </tr>
                        <tr>
                            <td width="40%" class="bg-gray text-align-right">Coordinator's Email</td>
                            <td><input type="email" class="form-control" id="coordinator_email"
                                       name="coordinator_email">
                            </td>
                        </tr>
                        <tr>
                            <td width="40%" class="bg-gray text-align-right">Coordinator's Contact Telephone Number
                            </td>
                            <td><input type="text" class="form-control number" id="coordinator_contact_number"
                                       name="coordinator_contact_number"></td>
                        </tr>
                        </tbody>
                    </table>

                </div>
            </section>
            <section class="banking_detail section">
                <h1>Banking Details</h1>
                <div>
                    <table class="table table-bordered" style="border-color: #212529">
                        <tbody>
                        <tr>
                            <td width="60%" class="bg-gray text-bold">
                            </td>
                            <td width="20%">Yes
                            </td>
                            <td width="20%">No
                            </td>
                        </tr>
                        <tr>
                            <td width="60%" class="bg-gray text-bold">
                                Please Confirm if the bank account the grant is to be paid into has changed:
                            </td>
                            <td width="20%"><input class="form-check-input is_bank_grant" type="radio"
                                                   name="is_bank_grant"
                                                   value="yes"
                                                   id="is_bank_grant1">
                            </td>
                            <td width="20%"><input class="form-check-input is_bank_grant" type="radio"
                                                   name="is_bank_grant"
                                                   value="no"
                                                   id="is_bank_grant2">
                            </td>
                        </tr>
                        <tr>
                            <td width="40%" class="bg-gray text-bold">
                                Does the Club/Group use the bank account operated by an organization registered for tax
                                purposes?
                            </td>
                            <td width="20%"><input class="form-check-input is_tax_purpose" type="radio"
                                                   name="is_tax_purpose"
                                                   value="yes"
                                                   id="is_tax_purpose1">
                            </td>
                            <td width="20%"><input class="form-check-input is_tax_purpose" type="radio"
                                                   name="is_tax_purpose"
                                                   value="no"
                                                   id="is_tax_purpose2">
                            </td>
                        </tr>
                        <tr class="hide tr_number_row">
                            <td width="40%" class="bg-gray text-bold">
                                Tax Registration Number
                            </td>
                            <td colspan="2"><input type="text" class="form-control" id="tr_number" name="tr_number">
                            </td>
                        </tr>
                        </tbody>
                    </table>
                </div>
            </section>
            <section class="insurance_detail section">
                <h1>Insurance Details</h1>
                <div>
                    <table class="table table-bordered" style="border-color: #212529">
                        <tbody>
                        <tr>
                            <td width="60%" colspan="4" class="bg-gray text-bold">
                            </td>
                            <td width="20%">Yes
                            </td>
                            <td width="20%">No
                            </td>
                        </tr>
                        <tr>
                            <td width="60%" colspan="4" class="bg-gray text-bold">
                                Does Your Summer Project have Public Liability Insurance Cover
                            </td>
                            <td width="20%"><input class="form-check-input" type="radio"
                                                   name="is_public_liability"
                                                   value="yes"
                                                   id="is_public_liability1">
                            </td>
                            <td width="20%"><input class="form-check-input" type="radio"
                                                   name="is_public_liability"
                                                   value="no"
                                                   id="is_public_liability2">
                            </td>
                        </tr>
                        <tr>
                            <td width="100%" colspan="6" class="bg-gray text-bold">
                                Please Indicate If your Summer Project Insurance is covered by(insert yes in the
                                corresponding box)
                            </td>
                        </tr>
                        <tr>
                            <td class="bg-gray text-bold">
                                Crosscare
                            </td>
                            <td><input class="form-check-input summer_project_insurance" type="radio"
                                       name="summer_project_insurance"
                                       value="crosscare"
                                       id="summer_project_insurance1">
                            </td>
                            <td class="bg-gray text-bold">
                                Dublin City Council
                            </td>
                            <td><input class="form-check-input summer_project_insurance" type="radio"
                                       name="summer_project_insurance"
                                       value="dublin_city_council"
                                       id="summer_project_insurance2">
                            </td>
                            <td class="bg-gray text-bold">
                                Other
                            </td>
                            <td>
                                <input class="form-check-input summer_project_insurance" type="radio"
                                       name="summer_project_insurance"
                                       value="other"
                                       id="summer_project_insurance3">
                            </td>
                        </tr>

                        <tr class="other_information">
                            <td width="100%" colspan="6" class="bg-gray text-bold">
                                Please Fill the other details below
                            </td>
                        </tr>
                        <tr class="other_information">
                            <td colspan="2" class="bg-gray text-bold">Name of Insurance Company</td>
                            <td colspan="4"><input type="text" class="form-control" id="insurance_company_name"
                                                   name="insurance_company_name"></td>
                        </tr>
                        <tr class="other_information">
                            <td colspan="2" class="bg-gray text-bold">Type of Insurance Cover</td>
                            <td colspan="4"><input type="text" class="form-control" id="insurance_type"
                                                   name="insurance_type"></td>
                        </tr>
                        <tr class="other_information">
                            <td colspan="2" class="bg-gray text-bold">Policy Number</td>
                            <td colspan="4"><input type="text" class="form-control" id="policy_number"
                                                   name="policy_number"></td>
                        </tr>
                        <tr class="other_information">
                            <td colspan="2" class="bg-gray text-bold">Inclusive Dates Of Cover</td>
                            <td colspan="4"><input type="text" class="form-control datepicker" id="cover_date"
                                                   name="cover_date">
                            </td>
                        </tr>

                        </tbody>
                    </table>
                </div>
            </section>
            <section class="summer_project_detail section">
                <h1>Summer Project Details</h1>
                <div>
                    <table class="table table-bordered" style="border-color: #212529">
                        <tbody>
                        <tr>
                            <td width="60%" colspan="4" class="bg-gray text-bold">
                                How Many Weeks Does the Summer Project Last
                            </td>
                            <td colspan="2"><input type="text" class="form-control" id="summer_project_weeks"
                                                   name="summer_project_weeks"></td>
                        </tr>
                        <tr>
                            <td colspan="2" class="bg-gray text-bold">
                                What is Start Date?
                            </td>
                            <td><input type="text" class="form-control datepicker" id="week_start_date"
                                       name="week_start_date"></td>
                            <td class="bg-gray text-bold">
                                What is End Date?
                            </td>
                            <td><input type="text" class="form-control datepicker" id="week_end_date"
                                       name="week_end_date">
                            </td>
                        </tr>
                        <tr>
                            <td class="bg-gray text-bold">
                                Weeks
                            </td>
                            <td class="bg-gray text-bold">
                                Specify the total number of days the project will run for each week
                            </td>
                            <td class="bg-gray text-bold">
                                Specify the total number of hours the project will run for each day
                            </td>
                            <td class="bg-gray text-bold">
                                Specify the total number of Young People the project participating each day
                            </td>
                            <td class="bg-gray text-bold">
                                Specify cost of fees, materials and other associated costs
                            </td>
                        </tr>
                        <?php
                        for ($i = 1; $i <= 8; $i++) {
                            ?>
                            <tr class="weekly_report">
                                <td class="bg-gray text-bold">
                                    Week<?php echo $i ?>
                                </td>
                                <td>
                                    <input type="text" class="form-control number" id="week<?php echo $i ?>days"
                                           name="week<?php echo $i ?>days">
                                </td>
                                <td>
                                    <input type="text" class="form-control number" id="week<?php echo $i ?>hours"
                                           name="week<?php echo $i ?>hours">
                                </td>
                                <td>
                                    <input type="text" class="form-control number" id="week<?php echo $i ?>participants"
                                           name="week<?php echo $i ?>participants">
                                </td>
                                <td>
                                    <div class="input-group">
  <div class="input-group-prepend">
    <span class="input-group-text" id="basic-addon1">€</span>
  </div>
  <input type="text" class="form-control weekTotal number" id="week.<?php echo $i ?>.total"
                                           name="week.<?php echo $i ?>.total">
</div>
                                   
                                </td>
                            </tr>
                            <?php
                        }
                        ?>
                        <tr>
                            <td colspan="3" class="bg-gray text-bold">
                                if the programme is running for more than 8 weeks,
                                please include additional information on a separate sheet.
                                Grant available (subject to budget) is €200 per day for a minimum 7 hours per day,
                                up to a maximum 5 days.
                            </td>
                            <td class="">
                                <input type="file" class="form-control" id="week_report"
                                       name="week_report">
                            </td>
                            <td colspan="2" class="">
                                Total Cost = 
                                <div class="input-group">
  <div class="input-group-prepend">
    <span class="input-group-text" id="basic-addon1">€</span>
  </div>
    <input type="text" class="form-control" id="total_cost"
                                                    name="total_cost" readonly> 
</div>
                               
                            </td>
                        </tr>
                        </tbody>
                    </table>
                </div>
            </section>
            <section class="club_assurance_declaration section">
                <h1>Club /Group Declaration of Assurance</h1>
                <div>
                    <table class="table table-bordered" style="border-color: #212529">
                        <tbody>
                        <tr>
                            <td class="bg-gray text-bold" colspan="2">
                                The undersigned herby certifies on behalf of the Summer Project Club / Group that:
                            </td>
                        </tr>
                        <tr>
                            <td class="" colspan="2">
                                <ol>
                                    <?php
                                    foreach (groupAssurance() as $project) {
                                        ?>
                                        <li>
                                            <?php echo $project ?>
                                        </li>
                                        <?php
                                    }
                                    ?>
                                </ol>
                            </td>
                        </tr>
                        <tr>
                            <td class="bg-gray text-bold" colspan="2">
                                Signed on the behalf of the Summer Project Club/ Group
                            </td>
                        </tr>
                        <tr>
                            <td class="bg-gray text-bold">
                                Secretary's / Chairman's signatures
                            </td>
                            <td class="">
                                <input type="text" class="form-control" id="secretary_signature"
                                       name="secretary_signature">
                            </td>
                        </tr>
                        <tr>
                            <td class="bg-gray text-bold">
                                Date
                            </td>
                            <td class="">
                                <input type="text" class="form-control datepicker" id="group_assurance_date"
                                       name="group_assurance_date">
                            </td>
                        </tr>
                        </tbody>
                    </table>
                </div>
            </section>
            <section class="supporting_agency_declaration section">
                <h1>Supporting Agency Declaration</h1>
                <div>
                    <table class="table table-bordered" style="border-color: #212529">
                        <tbody>
                        <tr>
                            <td class="bg-gray text-bold" colspan="6">
                                This Application must be supported and countersigned by staff officer from one of the
                                following agencies;
                                <br>
                                Crosscare , Dublin City Council(DCC) and CDYSB
                                <br>
                                Please Indicate the staff officer's agency by inserting yes in the corresponding box:
                            </td>
                        </tr>
                        <tr>
                            <td class="bg-gray text-bold">
                                Crosscare
                            </td>
                            <td><input class="form-check-input satff_officer_agency" type="radio"
                                       name="satff_officer_agency"
                                       value="crosscare"
                                       id="satff_officer_agency1">
                            </td>
                            <td class="bg-gray text-bold">
                                DCC
                            </td>
                            <td><input class="form-check-input satff_officer_agency" type="radio"
                                       name="satff_officer_agency"
                                       value="dublin_city_council"
                                       id="satff_officer_agency2">
                            </td>
                            <td class="bg-gray text-bold">
                                CDYSB
                            </td>
                            <td>
                                <input class="form-check-input satff_officer_agency" type="radio"
                                       name="satff_officer_agency"
                                       value="cdysb"
                                       id="satff_officer_agency3">
                            </td>
                        </tr>
                        <tr>
                            <td class="bg-gray text-bold" colspan="2">
                                Staff Officer's Role
                            </td>
                            <td class="" colspan="4">
                                <input type="text" class="form-control" id="staff_officer_role"
                                       name="staff_officer_role">
                            </td>
                        </tr>
                        <tr>
                            <td class="bg-gray text-bold" colspan="2">
                                Staff Officer's Signature
                            </td>
                            <td class="" colspan="4">
                                <input type="text" class="form-control" id="staff_officer_signature"
                                       name="staff_officer_signature">
                            </td>
                        </tr>
                        <tr>
                            <td class="bg-gray text-bold" colspan="2">
                                date
                            </td>
                            <td class="" colspan="4">
                                <input type="text" class="form-control datepicker" id="agency_declaration_date"
                                       name="agency_declaration_date">
                            </td>
                        </tr>
                        </tbody>
                    </table>
                </div>
            </section>
            <section class="data_privacy_statement section">
                <h1>Data Privacy Statement</h1>
                <div>
                    <table class="table table-bordered" style="border-color: #212529">
                        <tbody>
                        <tr>
                            <td class="bg-gray text-bold" style="font-size: 14px;font-weight: normal;">
                                CDYSB/CDETB are responsible for the
                                administration and delivery of voluntary youth work grants on
                                behalf of the Department of Children, Equality, Disability, Integration and
                                Youth (DCEDIY). To fulfil regulatory and statutory obligations, we collect some personal
                                information from you, such as your contact information. This information may be shared
                                with
                                DCEDIY
                                as the accountable department for this funding.
                                <br>
                                Application forms and personal information submitted to CDYSB/CDETB will be kept only
                                for
                                purposes
                                relating to the administration of the funding. Personal information will be held on
                                systems
                                for as
                                long as is necessary for the relevant activity, or for as long as is set out in any
                                relevant
                                agreement.
                                Please only provide information that is needed for the completion of this application
                                for
                                funding.
                            </td>
                        </tr>
                        </tbody>
                    </table>
                </div>
            </section>
        </form>
        <section class="key_priciples ">
            <h2>Key Principles</h2>
            <div>
                <ul>
                    <?php
                    foreach (keyPrinciples() as $principle) {
                        ?>
                        <li><?php echo $principle ?></li>
                        <?php
                    }
                    ?>
                </ul>
            </div>
        </section>
        <section class="eligibility_criteria ">
            <h2>Eligibility Criteria and Guidance Notes:</h2>
            <div>
                <ul>
                    <?php
                    foreach (eligibilityCriteria() as $test) { ?>
                        <li> <?php
                            echo $test['mainLi'];
                            if (array_key_exists('childLi', $test)) {
                                ?>
                                <ul>
                                    <?php
                                    foreach ($test['childLi'] as $child) {
                                        ?>
                                        <li><?php echo $child ?></li>
                                        <?php
                                    }
                                    ?>
                                </ul>
                                <?php
                            }
                            ?></li>
                        <?php
                    }
                    ?>
                </ul>
            </div>
        </section>
        <section class="complete_form_instructions ">
            <h2>Completing the Application Form:</h2>
            <div>
                <ul>
                    <?php
                    foreach (completeInstructions() as $instructions) {
                        ?>
                        <li><?php echo $instructions ?></li>
                        <?php
                    }
                    ?>
                </ul>
            </div>
        </section>
    </div>
</div>


<div class="modal" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
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
                                        <td width="40%" colspan="2" class="bg-gray text-bold color-light-blue">CDYSB
                                            Internal Use Only
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
                                                       class="form-control input_bar" id="supplier_no"
                                                       name="supplier_no[]">
                                                <?php
                                            }
                                            ?>
                                        </td>
                                    </tr>
                                    <tr class="right-align">
                                        <td width="50%" class="color-light-blue">Remittance Email:
                                        </td>
                                        <td><input type="email" class="form-control" id="premises_address"
                                                   name="remittance_email"></td>
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
                                            <textarea id="group_address" name="group_address" rows="8"
                                                      cols="100"></textarea>
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
                                        <td width="" class="color-light-blue right-align">Tax Registration <br>
                                            Number(TRN):
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
                                        <td width="30%" colspan="" class="color-light-blue right-align">Name Of Bank:
                                        </td>
                                        <td colspan="">
                                            <input type="text" class="form-control datepicker" id="bank_name"
                                                   name="bank_name">
                                        </td>
                                    </tr>

                                    <tr>
                                        <td width="30%" colspan="" class="color-light-blue right-align">Address Of
                                            Bank:
                                        </td>
                                        <td colspan="">
                                            <textarea id="bank_address" name="bank_address" rows="8"
                                                      cols="100"></textarea>
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
                                                    <input type="text" maxlength="1"
                                                           onkeypress="return isNumberKey(event)"
                                                           class="form-control input_bar" id="bank_iban"
                                                           name="bank_iban[]">
                                                    <?php
                                                    if ($j == 4) {
                                                        echo '-';
                                                    }
                                                }
                                            }
                                            ?>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td width="30%" colspan="" class="color-light-blue right-align">Bank Account
                                            Name:
                                        </td>
                                        <td colspan="">
                                            <input type="text" style="width: 100%" id="bank_acount_name"
                                                   name="bank_acount_name">
                                        </td>
                                    </tr>
                                    </tbody>
                                </table>

                            </div>
                        </section>
                        <section class="management_committee etfSection">
                            <div class="management_committee ">
                                <p class="color-light-blue center-align text-bold">On Behalf of the Management
                                    Committee:</p>
                                <p class="color-light-blue center-align" style="text-align: center">Complete in BLOCK
                                    capitals</p>
                                <table class="table" style="border-color: #212529">
                                    <tbody>
                                    <tr>
                                        <td colspan="" class="color-light-blue right-align">Name</td>
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
                                        <td colspan="" class="color-light-blue right-align">Signed</td>
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
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                <button type="button" class="btn btn-primary">Save changes</button>
            </div>
        </div>
    </div>
</div>
</body>
</html>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"></script>
<!--<script src="https://code.jquery.com/jquery-3.6.0.js"></script>-->
<script src="assets/index.js"></script>