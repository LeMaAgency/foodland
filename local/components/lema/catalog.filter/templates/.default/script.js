$(function() {
    $('.js-catalog-filter-btn').on('click', function(e) {
        e.preventDefault();

        $(this).closest('form').submit();

        return false;
    })
});