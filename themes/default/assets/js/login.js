$(function(){ $('#forgotpanel').hide(); })

var selectCountry = $('.lang-select :selected').val();
		updateCountryImage(selectCountry);	

$('.lang-select').change(function(e) {
	var selectCountry = $('.lang-select :selected').val();
		updateCountryImage(selectCountry);
});

function updateCountryImage(selectedCountry){
	$('.language-icon').attr('src', 'themes/default/images/'+selectedCountry+'.png' );
}
