//localStorage.setItem('notes')==0;

if (localStorage.getItem('topics') == undefined) {
    localStorage.setItem('topics',
        JSON.stringify({
            max_id: 0,
            topics: []
        }));
};

var topics = JSON.parse(localStorage.getItem(
    'topics'));

if (localStorage.getItem('notes') == undefined) {
    localStorage.setItem('notes',
        JSON.stringify({
            max_id: 0,
            notes: []
        }));
};

var notes = JSON.parse(localStorage.getItem(
    'notes'));
    

$('.btn-add-table').on('click', function () {
    $('.container').append('<table class="table table-striped"><thead><tr><th scope="col">NOTE</th></tr></thead><tbody id="notes-table"><tr id="notes"><td scope="row lead" contenteditable="true" placeholder="Add your notes here!" id="notes"></td><td><button class="btn-add-note"><i class="fas fa-plus"></i></button></td><td><button class="trash"><i class="far fa-trash-alt"></i></button></td></td></tr></tbody></table><button class="btn btn-primary btn-add-note">Add Note</button>');
    topics.max_id++;
    $(this).parent('tbody').append('<tr id="notes"><td scope="row lead" contenteditable="true" placeholder="Add your notes here!" id="notes"></td><td><button class="btn-add-note"><i class="fas fa-plus"></i></button></td><td><button class="trash"><i class="far fa-trash-alt"></i></button></td></td></tr>');
    topics.topics.push({
        id: topics.max_id,
        content: ''
    });
    
});

$.each(notes.notes, function (index, value) {
    $('#notes-table').append('<tr id="notes"><td scope="row lead" contenteditable="true" placeholder="Add your notes here!" data-nid="' + value.id + '">' + value.content + '</td><td><button class="btn-add-note"><i class="fas fa-plus"></i></button></td><td><button class="trash"><i class="far fa-trash-alt"></i></button></td></tr>');
});

//$('#notes').html(localStorage.getItem('notes'));

$('[contenteditable=true]').on('blur',
    function () {
        console.log($(this).text()); // Sending inputs into console.
        var note_id = $(this).data('nid');
        for (i = 0; i < notes.notes.length; i++) {
            if (notes.notes[i].id == note_id) notes.notes[i].content = $(this).html();
        };
        localStorage.setItem('notes', JSON.stringify(notes));
        /*if($(this).text().length==0) // if the text box is empty
        localStorage.setItem('notes',''); // inputs the placeholder when empty
        else localStorage.setItem('notes',$(this).html // otherwise set the field to whatever was saved in local storage
        ()); */
    });

var note_id = $(this).parent('tr');

$('.btn-add-note').on('click', function () { // Upon clicking the button with the class of btn-add-note
    notes.max_id++;
    $('#notes-table').append('<tr id="notes"><td scope="row lead" contenteditable="true" placeholder="Add your notes here!" id="notes"></td><td ><button class="btn-add-note"><i class="fas fa-plus"></i></button></td><td><button class="trash"><i class="far fa-trash-alt"></i></button></td></td></tr>');
    notes.notes.push({
        id: notes.max_id,
        content: ''
    });
    localStorage.setItem('notes', JSON.stringify(notes));
}); // Append the table information above to the field with the ID of notes-table.


$('.trash').on('click', function () { // Probably not optimal, the only way I could find a workable solution.
    $(this).closest('tr').remove();
    var nameOfTask = $(this).parent('tr').clone().children().remove().end().text().trim();
    var index = notes.notes.indexOf(nameOfTask);
    notes.notes.splice(index,1);
    localStorage.setItem('notes', JSON.stringify(notes));
});



/*$('.trash').on('click',function(){
    for(i=0;i<notes.notes.length;i++){
        if(notes.notes[i].id==note_id)
        $(this).closest('tr').remove();
        note_id.splice(i,1);
        localStorage.setItem('notes',JSON.stringify(notes));
    }; */