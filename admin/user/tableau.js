// fichier tableau.js
$(document).ready(function() {
    $('#tab').DataTable();
});
$(document).ready(function() {
    $('#tab').DataTable({
        language: {
            url: "../DataTables/media/French.json"
        }
    });
});