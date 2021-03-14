$( document ).ready(function() {
    var $categorie = $('#article_categorie');
    // ... retrieve the corresponding form.
    var $form = $('#form_api');
    // Simulate form data, but only include the selected categorie value.
    var data = {};
    data[$categorie.attr('name')] = $categorie.val();
    // Submit data via AJAX to the form's action path.
    $.ajax({
        url : $form.attr('action'),
        type: $form.attr('method'),
        data : data,
        success: function(html) {
            // Replace current genre field ...
            $('#article_genre').replaceWith(
                // ... with the returned one from the AJAX response.
                $(html).find('#article_genre')
            );
            // Genre field now displays the appropriate genres.
            // Replace current genre field ...
            $('#article_rubriques').replaceWith(
                // ... with the returned one from the AJAX response.
                $(html).find('#article_rubriques')
            );
            // Genre field now displays the appropriate genres.
        }
    });
});
