// Company & Joint details
$('#company, #joint').click(function() {
    var content = $(this).parent().parent().find('.content');

    if ($(this).is(':checked')) {
        content.removeClass('opacity');
        content.find('input, select').attr('required', true).removeAttr('disabled');
    }
    else {
        content.addClass('opacity');
        content.find('input, select').removeAttr('required').attr('disabled', true);
    }
});

// Type check
$('#pr-link').click(function() {
    $('#tdo, #sp').removeAttr('checked');
    $('#pr').attr('checked', 'checked');

    $('#pr_modal').removeClass('d-none');
    $('#tdo_modal, #sp_modal').addClass('d-none');
});
$('#tdo-link').click(function() {
    $('#pr, #sp').removeAttr('checked');
    $('#tdo').attr('checked', 'checked');

    $('#tdo_modal').removeClass('d-none');
    $('#sp_modal, #pr_modal').addClass('d-none');
});
$('#sp-link').click(function() {
    $('#pr, #tdo').removeAttr('checked');
    $('#sp').attr('checked', 'checked');

    $('#sp_modal').removeClass('d-none');
    $('#tdo_modal, #pr_modal').addClass('d-none');
});

// Calculator PR
$('.calculator-pr input').change(function() {
    let calculator = $(this).closest('.calculator');

    let number = calculator.find('.cal_number').val();
    let duration = parseFloat(calculator.find('input.cal_duration:checked').val());
    let price = calculator.find('.cal_price').val();
    let percent = 0;

    if (duration === 2) percent = 10;
    else if (duration === 3) percent = 11;
    else percent = 12;

    let cost = number * price;

    let profit = cost * (percent/100) * duration;

    let quarterly = profit / (duration * 4);

    calculator.find('.cal_investment').val('€ ' + cost.formatMoney(0, ',', ' '));
    calculator.find('.cal_profit').val('€ ' + profit.formatMoney(0, ',', ' '));
    calculator.find('.cal_quarterly').val('€ ' + quarterly.formatMoney(2, ',', ' '));
});

// Calculator TDO
$('.calculator-tdo input').change(function() {
    let calculator = $(this).closest('.calculator');

    let shares = calculator.find('.cal_shares').val();
    let investment = shares * 40000;
    let roi = 143000 * shares;

    calculator.find('.cal_investment').val('€ ' + investment.formatMoney(0, ',', ' '));
    calculator.find('.cal_roi').val('€ ' + roi.formatMoney(0, ',', ' '));
});




// Calculator SP
$('.calculator-sp input').change(function() {
    let calculator = $(this).closest('.calculator');

    let shares = calculator.find('.cal_shares').val();
    let investment = shares * 150000;
    let yearly_dividend = investment / 100 * 25;
    let roi = 900000 * shares;

    calculator.find('.cal_investment').val('€ ' + investment.formatMoney(0, ',', ' '));
    calculator.find('.cal_yearly_dividend').val('€ ' + yearly_dividend.formatMoney(0, ',', ' '));
    calculator.find('.cal_roi').val('€ ' + roi.formatMoney(0, ',', ' '));
});

//// Pred akciou
//// Calculator SP
//$('.calculator-sp input').change(function() {
//    let calculator = $(this).closest('.calculator');
//
//    let shares = calculator.find('.cal_shares').val();
//    let investment = shares * 40000;
//    let roi = 143000 * shares;
//
//    calculator.find('.cal_investment').val('€ ' + investment.formatMoney(0, ',', ' '));
//    calculator.find('.cal_roi').val('€ ' + roi.formatMoney(0, ',', ' '));
//});

// Button disable on form submit
$('#step1Form').submit(function() {
    $('#submitButton').attr('disabled', true).html('Working...');
});

// Helper functions
Number.prototype.formatMoney = function(c, d, t){
    var n = this,
        c = isNaN(c = Math.abs(c)) ? 2 : c,
        d = d == undefined ? "." : d,
        t = t == undefined ? "," : t,
        s = n < 0 ? "-" : "",
        i = String(parseInt(n = Math.abs(Number(n) || 0).toFixed(c))),
        j = (j = i.length) > 3 ? j % 3 : 0;
    return s + (j ? i.substr(0, j) + t : "") + i.substr(j).replace(/(\d{3})(?=\d)/g, "$1" + t) + (c ? d + Math.abs(n - i).toFixed(c).slice(2) : "");
};