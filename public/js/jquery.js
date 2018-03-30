$(document).ready(function () {
    //delete and save changes popup box
    $(document).on('click', '.ourItem', function (event) {
        var text = $(this).text();
        var id = $(this).find('#itemId').val();
        var text = $.trim(text); //text er pore jate space nite na pare.
        $('#title').text('Edit Item');
        $('#addItem').val(text);
        $('#saveChanges').show('400');
        $('#delete').show('400');
        $('#addButton').hide('400');
        $('#id').val(id);
        console.log(text);
    });
    //add item popup box
    $(document).on('click', '#addNew', function (event) {
        $('#title').text('Add New Item');
        $('#addItem').val("");
        $('#saveChanges').hide('400');
        $('#delete').hide('400');
        $('#addButton').show('400');
    });
    //data insert in the database
    $('#addButton').click(function (event) {
        var text = $('#addItem').val();
        if(text == ""){
            alert('Please type anything for Item');
        }else {
            $.post('list', {'text': text, '_token': $('input[name=_token]').val()}, function (data) {
                console.log(data);
                $('#items').load(location.href + ' #items');
            });
        }
    });
    //data delete
    $('#delete').click(function (event) {
        var id = $('#id').val();
        $.post('delete', {'id':id, '_token':$('input[name=_token]').val()}, function (data) {
            console.log(data);
            $('#items').load(location.href + ' #items');
        });
    })
    //data update
    $('#saveChanges').click(function (event) {
        var id = $('#id').val();
        var value = $('#addItem').val();
        $.post('update', {'id':id, 'value':value, '_token':$('input[name=_token]').val()}, function (data) {
            console.log(data);
            $('#items').load(location.href + ' #items');
        });
    })

    //autocomplete search box
    $( function() {
        var availableTags = [
            "ActionScript",
            "AppleScript",
            "Asp",
            "BASIC",
            "C",
            "C++",
            "Clojure",
            "COBOL",
            "ColdFusion",
            "Erlang",
            "Fortran",
            "Groovy",
            "Haskell",
            "Java",
            "JavaScript",
            "Lisp",
            "Perl",
            "PHP",
            "Python",
            "Ruby",
            "Scala",
            "Scheme"
        ];
        $( "#searchItem" ).autocomplete({
            source: 'http://127.0.0.1:8000/search'
        });
    } );

});