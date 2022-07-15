$(document).ready(function () {
    isTaxPurpose($('.is_tax_purpose'));
    summerProjectInsurance($('.summer_project_insurance'));
});


$(document).on('change', '.is_tax_purpose', function () {
    isTaxPurpose($(this))
});

function isTaxPurpose(that) {
    let value = that.val();
    if (value === 'yes') {
        $('.tr_number_row').removeClass('hide');
    } else {
        $('.tr_number_row').addClass('hide');
    }
}

$(document).on('change', '.is_public_liability', function () {
    isPublicLiability($(this))
});

function isPublicLiability(that) {
    let value = that.val();
    if (value === 'yes') {
        $('.insurance_indicates').show();
        $('.insurance_indicate_options').show();
    } else {
        $('.insurance_indicates').hide();
        $('.insurance_indicate_options').hide();
    }
}

$(document).on('change', '.summer_project_weeks', function () {
    let totalWeeks = $('.summer_project_weeks option:selected').val();
    let weekOptionsHtml = '';
    var i = 1;
    for (i = 1; i <= totalWeeks; i++) {
        weekOptionsHtml += `<tr class="weekly_report">
                                    <td class="bg-gray text-bold">
                                        Week${i}
                                    </td>
                                    <td>
                                    <select class="form-control form-select" id="week${i}days"
                                               name="week${i}days">
                                    <option value="1">1</option>
                                    <option value="2">2</option>
                                    <option value="3">3</option>
                                    <option value="4">4</option>
                                    <option value="5">5</option>
                                    <option value="6">6</option>
                                    <option value="7">7</option>
</select>
                                      
                                    </td>
                                    <td>
                                                     <select class="form-control form-select" id="week${i}hours"
                                               name="week${i}hours">
                                    <option value="1">1</option>
                                    <option value="2">2</option>
                                    <option value="3">3</option>
                                    <option value="4">4</option>
                                    <option value="5">5</option>
                                    <option value="6">6</option>
                                    <option value="7">7</option>
                                    <option value="8">8</option>
</select>
                                      
                                    </td>
                                    <td>
                                        <input type="text" class="form-control number" id="week${i}participants"
                                               name="week${i}participants">
                                    </td>
                                    <td>
                                    <div class="input-group">
  <div class="input-group-prepend">
    <span class="input-group-text" id="basic-addon1">€</span>
  </div>
  <input type="text" class="form-control weekTotal number"
                                               id="week.${i}.total"
                                               name="week.${i}.total">
</div>
                                        
                                    </td>
                                </tr>`
    }

    $('.week_detail_options').html(weekOptionsHtml);
});

$(document).on('change', '.summer_project_insurance', function () {
    summerProjectInsurance($(this))
});

function summerProjectInsurance(that) {
    let value = that.val();
    if (value === 'other') {
        $(".other_information").each(function () {
            $(this).show();
        });
    } else {
        $(".other_information").each(function () {
            $(this).hide();
        });
    }
}

//calculate total cost (for all weeks)
$(document).on('change', '.weekTotal', function () {
    let totalCost = 0;
    let eachWeekCost = 0;
    $(".weekTotal").each(function () {
        eachWeekCost = $(this).val() ? $(this).val() : 0;
        totalCost = totalCost + parseInt(eachWeekCost);
    });
    $('#total_cost').val(totalCost);
});

//date piker
$(function () {
    $(".datepicker").datepicker({dateFormat: 'dd-mm-yy'});
});

//open EFTFORM
$(document).on('change', '.is_bank_grant', function () {
    if ($(this).val() === 'yes') {
        $('#exampleModal').modal('show');
        ;
    } else {
        $('#exampleModal').modal('hide');
        ;
    }
});

// condition on same email
$(document).on('change', '#secretary_email', function () {
    watchEmail($(this));
});
$(document).on('change', '#group_email', function () {
    watchEmail($(this));
});

function watchEmail(that) {
    let secretaryEmail = $('#secretary_email').val();
    let groupEmail = $('#group_email').val();

    if (secretaryEmail === groupEmail) {
        that.val('');
        alert('Secretary email and group email cannot be same');
    }
}

//insert only number
function isNumberKey(evt) {
    var charCode = (evt.which) ? evt.which : event.keyCode
    if (charCode > 31 && (charCode < 48 || charCode > 57))
        return false;

    return true;
}

$(document).on('input','.number',function (e) {
        this.value = this.value.replace(/[^0.00-9.99]/g, '').replace(/(\..*)\./g, '$1');
    });

    $('.move-next').click(function () {
            var is_input_valid = $(this).closest('section').find('input').valid();
            if (!is_input_valid) {
                $('html, body').animate({
                    scrollTop: $('.error').first().offset().top - 100
                }, 100);
                return false;
            }
        });

    $(document).on('keyup keypress', 'form', function(e) {
  if(e.keyCode == 13) {
    e.preventDefault();
    return false;
  }
});