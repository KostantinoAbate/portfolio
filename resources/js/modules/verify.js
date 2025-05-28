jQuery(function(){
    const $input = $('#input-verify');
    const $btn = $('#submit-button');
    $input.on('input', function(){
        var value = $input.val();
        if(value === window.RANDOM_PHRASE) {
            $btn.prop('disabled', false);
        } else {
            $btn.prop('disabled', true);
        }
    });
});