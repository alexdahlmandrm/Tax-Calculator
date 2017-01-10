jQuery(document).ready(function($){
  
  function fcFormatDollar(x, french) {
	var num = parseFloat(x);
	if (isNaN(num))
		num = 0;
	var str = num.toFixed(2).toString().replace(/\B(?=(\d{3})+(?!\d))/g, ",");
	if (french)
		return str.replace(/,/g, ' ').replace(/\./, ',');
	else
		return str;
}

function fcStripDollar(text, french) {
    var valid = /^[0-9]+(,[0-9]{3})*[.][0-9]{2}$/,
        str = String(text).replace(/[^0-9.,]/g, '');

    if (french) {
        var match = str.match(/(.*)[,.]([0-9]{0,2})$/);
        if (match)
            var en = match[1].replace(/[.]/, '') + '.' + match[2];
        else
            var en = str.replace(/[.]/, '');
    } else {
        var en = str;
    }

    var withPossibleSep = String(en).replace(/[^0-9.]/g, ''),
        withSep = null;

    // Try a couple of things to make it valid
    if (valid.exec(withPossibleSep)) {
        withSep = withPossibleSep;
    } else if (valid.exec(withPossibleSep + '0')){
        withSep = withPossibleSep + '0';
    } else if (valid.exec(withPossibleSep + '00')){
        withSep = withPossibleSep + '00';
    } else if (valid.exec(withPossibleSep + '.00')){
        withSep = withPossibleSep + '.00';
    } else {
        return null;
    }
    var centsInt = parseInt(withSep.replace(/[^0-9]/g, ''));
    return centsInt/100;
  }
    var helpOpen = false;
    var amounts = [50, 100, 150, 200, 300, 400, 500, 750, 1000, 1500];
    $.each(amounts, function(key, val) {
        var amt = amounts[key];
        $('#table-fill').append('<div class="tc-row tc-content content-given"><div class="tc-cell">$' + fcFormatDollar(amt) + '</div><div class="tc-cell">$' + fcFormatDollar(amt - calc(amt, true)) + '</div><div class="tc-cell">$' + fcFormatDollar(calc(amt, true)) + '</div></div>');
        $('#table-fill').append('<div class="tc-row tc-content content-first" style="display: none;"><div class="tc-cell">$' + fcFormatDollar(amt) + '</div><div class="tc-cell">$' + fcFormatDollar(amt - calc(amt, false)) + '</div><div class="tc-cell">$' + fcFormatDollar(calc(amt, false)) + '</div></div>');
    });

    $('.tax-calc .tax-calc-sub-wrap button').click(function() {
	var helpShow = jQuery(this).val();
	if(helpShow == 'yes') {
            $('.tax-calc .tc-table .content-given').show();
            $('.tax-calc .tc-table .content-first').hide();
        } else {
            $('.tax-calc .tc-table .content-given').hide();
            $('.tax-calc .tc-table .content-first').show();
        }
    });

    $('.tax-calc#help-open').click(function() {
        if(helpOpen == false) {
            $('.tax-calc .tc-table').fadeIn();
                helpOpen = true;
        } else {
            $('.tax-calc .tc-table').fadeOut();
                helpOpen = false;
        }
    });

    $('.tax-calc #help-close').click(function() {
        $('.tax-calc .tc-table').fadeOut();
        helpOpen = false;
    });

    $('#tc-more-info').click(function() {
        $('.main-content').slideToggle();
        $('#tc-more-info span').toggleClass('arrow-up');
    });

    $('.have-donated button').on('click', function (e) {
        e.preventDefault();
        $(this).addClass('active').siblings('button').removeClass('active');
        $('#calculator_credit').text(fcFormatDollar(calc(jQuery('#donation_amount').val(), given())));
    });

    $('#donation_amount').on('keyup', function() {
	update($(this).val());
    });

    function update(a) {
        var amt = fcStripDollar(a);
        if (amt == null) amt = 0;
        $('#calculator_credit').text(fcFormatDollar(calc(amt, given())));
        $('.give-now-btn').val('Give $' + fcFormatDollar(amt));
        $('.help-amount').text(Math.floor(amt / 3.29));
    }
// .43 was the previous tax amount, but that was in non-freedom money.
    function calc(v, g) {
        var t = 0;
        v = fcStripDollar(v);

        if (g) {
            t = v * 0.15;
        } else {
            if (v > 200)
		t = (200 * 0.20) + ((v - 200) * 0.15);
	    else
		t = v * 0.20;
	}

        return v - t;
    }

    function given() {
        for (var i = 0; i < jQuery('.have-donated button').length; i++) {
            if (jQuery('.have-donated button').eq(i).val() == 'yes')
                return $('.have-donated button').eq(i).hasClass('active');
        }

        return false;
    }
  
  });
