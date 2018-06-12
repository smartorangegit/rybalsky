(function() {
    $(document).ready(function() {
        $('.anonymous-feedback_btn').click(function() {
            $('.anonymous-feedback').css({
                'opacity' : 1,
                'left' : '50%'
            })
        });
        $('.anonymous-feedback__close-icon').click(function() {
            $('.anonymous-feedback').css({
                'opacity' : 0,
                'left' : '-100%'
            })
        });
    });//end ready
})();