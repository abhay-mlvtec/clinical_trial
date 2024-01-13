document.getElementById('frequency').addEventListener('change', function() {
    console.log('You selected: ', this.value);
    let frequency =  this.value;
    if(frequency == "Daily"){
        $(".divDailyFrequency").show();
    }
    else{
        $(".divDailyFrequency").hide();
    }
});
/*
$('#dob').datepicker({
    maxDate: 0
});
/**/