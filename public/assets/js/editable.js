$(document).ready(function() {
    //toggle `popup` / `inline` mode
    $.fn.editable.defaults.mode = 'popup';

    $('#username').editable();

    //make username editable
    $('#ambition').editable();
    
    $('#hoby').editable({
        type: 'select',
        title: 'Select status',
        placement: 'right',
        value: 2,
        source: [
            {value: 1, text: 'status 1'},
            {value: 2, text: 'status 2'},

        ]

    });

    $('#achievements').editable();


    $('#Educational-Goals').editable();


    $('#birth-date').editable();

    $('#birth-year').editable();

    $('#age').editable();

    $('#gender').editable({
        type: 'select',
        title: 'Select status',
        placement: 'right',
        value: 2,
        source: [
            {value: 1, text: 'Male'},
            {value: 2, text: 'Female'},
        ]

    });

    $('#membership').editable();

    $('#professional-skills').editable();

    $('#languages').editable({
        type: 'select',
        title: 'Select status',
        placement: 'right',
        value: 1,
        source: [
            {value: 1, text: 'Sinhala'},
            {value: 2, text: 'Tamil'},
            {value: 2, text: 'English'},


        ]

    });

    $('#schools').editable();

    $('#lived-places').editable();

    $('#phone').editable();

    $('#email').editable();

    $('#social-media').editable();

    $('#address').editable();

    $('#degree').editable();

    $('#certification').editable();

    $('#employment').editable();

    $('#internship').editable();

});
