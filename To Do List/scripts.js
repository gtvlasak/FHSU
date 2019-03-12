

//var notes = JSON.parse(localStorage.getItem(
    //'notes'));
    

/* $('.btn-add-table').on('click', function () {
    $('.container').append('<table class="table table-striped"><thead><tr><th scope="row" contenteditable="true" placeholder="TOPIC"></th></tr></thead><tbody id="notes-table"><tr id="notes"><td scope="row lead" contenteditable="true" placeholder="Add your notes here!" id="notes"></td><td><button class="btn-add-note"><i class="fas fa-plus"></i></button></td><td><button class="trash"><i class="far fa-trash-alt"></i></button></td></td></tr></tbody></table>');
    topics.max_id++;
    $(this).closest('table').children().append('<tr id="notes"><td scope="row lead" contenteditable="true" placeholder="Add your notes here!" id="notes"></td><td><button class="btn-add-note"><i class="fas fa-plus"></i></button></td><td><button class="trash"><i class="far fa-trash-alt"></i></button></td></tr>');
    topics.topics.push({
        id: topics.max_id,
        content: ''
    });
    
}); */

/* $('.btn-add-table').click(function(){
    $(".table-striped").clone().insertAfter(".container:last");
}); */

// Initializing the localStorage JSON String/Object if it is undefined.

if(localStorage.getItem('notes')==undefined){ 
    localStorage.setItem('notes',JSON.stringify({max_id:0,notes:[]}));
}

// Variable for parsing the JSON string for notes.
var notes=JSON.parse(localStorage.getItem('notes'));

// Script appending a new to do list item for each note that is stored in local value.  Identified values are loaded.
$.each(notes.notes,function(index,value){
    $('#notes-table').append('<tr id="notes"><td class="drag"><i class="fas fa-grip-lines-vertical"></i></td><td scope="row lead" class="input" contenteditable="true" placeholder="Add your notes here!" id="notes" data-nid="'+value.id+'">'+value.content+'</td><td><button class="btn-add-note"><i class="fas fa-plus"></i></button></td><td><button class="trash"><i class="far fa-trash-alt"></i></button></td></td></tr>');
});

// Pressing ENTER will push whatever value is typed to the notes key specified.

$(document).on('keypress', '#notes', function (e) {
    var key = e.which;
    if(key == 13) {
        console.log($(this).text());
    var note_id=$(this).data('nid');
    for(i=0;i<notes.notes.length;i++){
        if(notes.notes[i].id==note_id) notes.notes[i].content=$(this).html();
    };
    localStorage.setItem('notes',JSON.stringify(notes));
}});

// Script that appends a new to do item slot to the table, as well as pushes a new key/value pair to the JSON localStorage Object.

function addNote() {
    $(document).on('click', '.btn-add-note', function () { // Upon clicking the button with the class of btn-add-note
        notes.max_id++;
        console.log("hey");
        $(this).closest('tbody').append('<tr id="notes"><td class="drag"><i class="fas fa-grip-lines-vertical"></i></td><td scope="row lead" class=\"input\" contenteditable="true" placeholder="Add your notes here!" id="notes" data-nid=""></td><td><button class="btn-add-note"><i class="fas fa-plus"></i></button></td><td><button class="trash"><i class="far fa-trash-alt"></i></button></td></td></tr>');
        notes.notes.push({
            id: notes.max_id,
            content: ''
        });
        localStorage.setItem('notes', JSON.stringify(notes));
})};

addNote();

// Script that deletes a to do item from the table.  Am still working on a workable solution for removal from the localStorage.

function deleteNote() {
    $(document).on('click', '.trash', function () { // Probably not optimal, the only way I could find a workable solution.
        var nameOfTask = $(this).closest('tr').remove();
        //var nameOfTask = $(this).parent('tr').clone().children().remove().end().text().trim();
        var index = notes.notes.indexOf(nameOfTask);
        notes.notes.splice(index,1);
        localStorage.setItem('notes', JSON.stringify(notes));
    });
}

deleteNote();

// Script adding a new table to the page.

var section = 2;
function addTable() {
    $(document).on('click', '.btn-add-table', function(){
        $("<table class=\"table table-striped\"><thead><tr><th></th><th scope=\"row\" class=\"toDoHeader\" contenteditable=\"true\" placeholder=\"TOPIC\" ></th><th class=\"addTable\"><button class=\"btn-add-table\"><i class=\"fas fa-plus\"></i></button></th><th class=\"deleteTable\"><button class=\"trash2\"><i class=\"far fa-trash-alt\"></i></button></th></tr></thead><tbody id=\"notes-table\"><tr id=\"notes\"><td class=\"drag\"><i class=\"fas fa-grip-lines-vertical\"></i></td><td scope=\"row lead\" class=\"input\" contenteditable=\"true\" placeholder=\"Add your notes here!\" data-nid=\"\"></td><td><button class=\"btn-add-note\"><i class=\"fas fa-plus\"></i></button></td><td><button class=\"trash\"><i class=\"far fa-trash-alt\"></i></button></td></tr></tbody></table>").attr("id", "num" + section++).appendTo(".wrapper");
        
        return;
        });
    };
    
    addTable();

// Script removing the table from the page.

function deleteTable() {
    $(document).on('click', '.trash2', function () { // Probably not optimal, the only way I could find a workable solution.
        console.log("delete table");
        $(this).closest('table').remove();
        //var nameOfTask = $(this).parent('tr').clone().children().remove().end().text().trim();
        //var index = notes.notes.indexOf(nameOfTask);
       // notes.notes.splice(index,1);
        //localStorage.setItem('notes', JSON.stringify(notes));
    });
};

deleteTable();

// JQuery Sortable that is implemented via a bar on the left side of each todo item.
// Upon clicking the input field for the to do item, the sortable code is destroyed, otherwise typing wasn't allowed.
// Is causing console errors, but i haven't yet found a better workaround.

$('.drag').on('mousedown', function() {
    $('tbody').sortable({
        cursor: 'move'
    });
    $('.input').on('click', function() {
        $( "tbody" ).sortable( "destroy" );
    });
});



//$('#notes').html(localStorage.getItem('notes'));


        /*if($(this).text().length==0) // if the text box is empty
        localStorage.setItem('notes',''); // inputs the placeholder when empty
        else localStorage.setItem('notes',$(this).html // otherwise set the field to whatever was saved in local storage
        ()); */
   




/*$('.trash').on('click',function(){
    for(i=0;i<notes.notes.length;i++){
        if(notes.notes[i].id==note_id)
        $(this).closest('tr').remove();
        note_id.splice(i,1);
        localStorage.setItem('notes',JSON.stringify(notes));
    }; */