jQuery(function() {
    $('[search-input]').each(function(){
        $(this).on('input', function() {
            var searchValue = $(this).val().toLowerCase();
            var targetContainer = $(this).attr('search-within');
            if (!targetContainer) {targetContainer = ""};
            if (targetContainer) {
                $('#' + targetContainer + ' [search-target-box]').each(function() {
                    var targetBox = $(this);
                    var matchFound = false;
                    targetBox.find('[search-target-text]').each(function() {
                        var targetText = $(this).text().toLowerCase();
                        if (targetText.includes(searchValue)) {
                            matchFound = true;
                            return false;
                        }
                    });
                    if (matchFound || searchValue === '') {
                        targetBox.show();
                    } else {
                        targetBox.hide();
                    }
                });
            } else {
                $('[search-target-box]').each(function() {
                    var targetBox = $(this);
                    var matchFound = false;
                    targetBox.find('[search-target-text]').each(function() {
                        var targetText = $(this).text().toLowerCase();
                        if (targetText.includes(searchValue)) {
                            matchFound = true;
                            return false;
                        }
                    });
                    if (matchFound || searchValue === '') {
                        targetBox.show();
                    } else {
                        targetBox.hide();
                    }
                });
            }
        });
    });
});