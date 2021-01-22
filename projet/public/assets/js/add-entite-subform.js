jQuery(document).ready(function() {
    // Get the div that holds the collection of tags
    var $entitesCollectionHolder = $('div.entites');
    // count the current form inputs we have (e.g. 2), use that as the new
    // index when inserting a new item (e.g. 2)
    $entitesCollectionHolder.data('index', $entitesCollectionHolder.find('input').length);

    $('body').on('click', '.add_item_link', function(e) {
        var $collectionHolderClass = $(e.currentTarget).data('collectionHolderClass');
        addFormToCollection($collectionHolderClass);
    })
});

function addFormToCollection($collectionHolderClass) {
    // Get the div that holds the collection of tags
    var $collectionHolder = $('.' + $collectionHolderClass);

    // Get the data-prototype
    var prototype = $collectionHolder.data('prototype');

    // get the new index
    var index = $collectionHolder.data('index');

    var newForm = prototype;

    // Replace '__name__label__' in the prototype's HTML to
    // instead be a number based on how many items we have
    newForm = newForm.replace(/__name__label__/g, index);

    // Replace '__name__' in the prototype's HTML to
    // instead be a number based on how many items we have
    newForm = newForm.replace(/__name__/g, index);

    // increase the index with one for the next item
    $collectionHolder.data('index', index + 1);

    // Display the form in the page before the "Add a tag" link
    var $newFormLi = $('<div class="entite-subform"></div>').append(newForm);
    // Add the new form at the end of the list
    $collectionHolder.append($newFormLi)
}