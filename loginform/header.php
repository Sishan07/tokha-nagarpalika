<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> <?php echo $page_title; ?> </title>
    <link rel="stylesheet" href="style.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.datatables.net/1.13.6/css/dataTables.bootstrap5.min.css">
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>

<script src="https://cdn.datatables.net/1.13.6/js/jquery.dataTables.min.js"></script>
<script src="https://cdn.datatables.net/1.13.6/js/dataTables.bootstrap5.min.js"></script>

<script>
   
    $(document).ready(function () {
        $('#search-form').submit(function (e) {
            e.preventDefault(); 

            var searchValue = $('#search-input').val(); 

            $.ajax({
                type: 'GET',
                url: 'search.php',
                data: { query: searchValue }, 
                success: function (response) {
                   $('#editableTable tbody').html(response);
                }
            });
        });
    });
</script>



</head>
<body>