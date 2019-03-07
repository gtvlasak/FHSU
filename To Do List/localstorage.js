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
    
