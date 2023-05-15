<!DOCTYPE html>
<html>
<head>
    <title>Form Data</title>
    <!-- Bootstrap -->
    <link rel="stylesheet" href="bootstrap.css">
    <script src="bootstrap.bundle.js"></script>
    <!-- jQuery -->
    <script src="jquery-3.7.0.min.js"></script>
</head>
<body><br>
    <div class="container">
        <center><h1>Form Data</h1></center>
        <form id="formzz">
            <div class="form-floating mb-3">
                <input type="text" class="form-control" id="floatingInput" name="text" placeholder="Budi" required>
                <label for="floatingInput" class="form-label">Nama</label>
            </div>
            <div class="form-floating mb-3">
                <input type="number" class="form-control" id="floatingInput" name="number" placeholder="205150600111001" required>
                <label for="floatingInput" class="form-label">NIM</label>
            </div>
            <button type="submit" class="btn btn-primary">Submit</button>
        </form>
        <!-- Table to display the response -->
        <br>
        <table class="table mt-3 table-fixed table-bordered" id="responseTable">
            <thead>
                <tr>
                    <th class="col-6 text-center">Nama</th>
                    <th class="col-6 text-center">NIM</th>
                </tr>
            </thead>
            <tbody></tbody>
        </table>
    </div>

    <!-- jQuery AJAX to submit the form data -->
    <script>
        $(document).ready(function() {
            $('#formzz').submit(function(event) {
                event.preventDefault();
                var formData = $(this).serialize();
                $.ajax({
                    type: 'POST',
                    url: 'b.php',
                    data: formData,
                    dataType: 'json',
                    success: function(response) {
                        // Add a row to the table with the response data
                        var newRow = $('<tr><td class="text-center">' + response.text + '</td><td class="text-center">' + response.number + '</td></tr>');
                        newRow.hide();
                        $('#responseTable tbody').append(newRow);
                        newRow.fadeIn('slow');

                    }
                });
            });
        });
    </script>
</body>
</html>
