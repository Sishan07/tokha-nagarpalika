</body>

<script>

    //to edit the table data cell
    var editableCells = document.querySelectorAll('[contentEditable="true"]');

    editableCells.forEach(function(cell) {
        cell.addEventListener('blur', function() {
            var newValue = cell.textContent;
            console.log('Updated value:', newValue);
        });

        cell.addEventListener('keydown', function(event) {
            if (event.key === 'Enter') {
                event.preventDefault();

                cell.blur();
            }
        });
    });

    //functions to add row

    function addRow() {
    var table = document.getElementById("editableTable").getElementsByTagName('tbody')[0];
    var newRow = table.insertRow(table.rows.length);
    for (var i = 0; i < 52; i++) {
        var cell = newRow.insertCell(i);
        cell.contentEditable = true;
    }
    var deleteCell = newRow.insertCell(51);
    deleteCell.innerHTML = '<button type="button" onclick="removeRow(this)">Delete</button>';
    var updateCell = newRow.insertCell(52);
    updateCell.innerHTML = '<button onclick="updateRow(this)">Update</button>';
}
function removeRow(button) {
    var row = button.parentNode.parentNode;
    var table = row.parentNode;

    table.deleteRow(row.rowIndex);
    
    return false; 
}



    function updateRow(button) {
        
    }

</script>




</html>