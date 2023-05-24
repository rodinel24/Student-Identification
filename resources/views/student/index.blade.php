<!DOCTYPE html>
<html>
<head>
    <title>Student Information</title>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/FileSaver.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/tableexport.jquery.plugin@5.2.0/dist/js/tableexport.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/xlsx/dist/xlsx.full.min.js"></script>

    <style>
        /* Add your CSS styles here */

        table {
            border-collapse: collapse;
            width: 100%;
        }

        th, td {
            border: 1px solid #ddd;
            padding: 8px;
        }

        tr:nth-child(even) {
            background-color: #f2f2f2;
        }

        .edit-btn, .delete-btn {
            display: inline-block;
            padding: 6px 10px;
            background-color: #4CAF50;
            color: #fff;
            text-decoration: none;
            border-radius: 4px;
        }

        .delete-btn {
            background-color: #f44336;
        }

        .edit-btn:hover, .delete-btn:hover {
            background-color: #45a049;
        }
        .create-button {
        display: inline-block;
        padding: 10px 20px;
        background-color: #007bff;
        color: #fff;
        text-decoration: none;
        border-radius: 4px;
        border: none;
        cursor: pointer;
        }

        .create-button:hover {
        background-color: #0056b3;
        }
        .search-container {
  display: flex;
  justify-content: flex-end;
  margin-bottom:30px;
}

.search-input {
  padding: 8px;
  border: 1px solid #ccc;
  border-radius: 4px;
  margin-right: 5px;
}

.search-button {
  padding: 8px 15px;
  background-color: #007bff;
  color: #fff;
  border: none;
  border-radius: 4px;
  cursor: pointer;
}

.search-button:hover {
  background-color: #0056b3;
}

#export-btn{
    margin-bottom:10px;
}

    </style>
</head>
<body>

    <h2>Student Information</h2>
    <a href="{{ route('student.create') }}" class="create-button">Create</a>

    <form action="{{ route('student.index') }}" method="GET" class="search-form">
    <div class="search-container">
        <input type="text" name="search" placeholder="Search by ID number" class="search-input">
        <button type="submit" class="search-button">Search</button>
    </div>
    </form>

    <button id="export-btn" onclick="exportTableToExcel()">Export to Excel</button>






    <table id="student">
        <thead>
            <tr>
                <th>First Name</th>
                <th>Last Name</th>
                <th>Middle Name</th>
                <th>ID Number</th>
                <th>Section</th>
                <th>Year Level</th>
                <th>Address</th>
                <th>Actions</th>
                <th>Barcode</th>

            </tr>
        </thead>
        <tbody>
            @foreach ($students as $student)
            <tr>
            <td>{{ ucwords(strtolower($student->first_name)) }}</td>
            <td>{{ ucwords(strtolower($student->last_name)) }}</td>
            <td>{{ ucwords(strtolower($student->middle_name)) }}</td>
            <td>{{ strtoupper($student->id_number) }}</td>
            <td>{{ ucwords(strtolower($student->section)) }}</td>
            <td>{{ ucwords(strtolower($student->year_level)) }}</td>
            <td>{{ ucwords(strtolower($student->address)) }}</td>


                <td>
                    <a href="{{ route('student.update', $student->id) }}" class="edit-btn">Edit</a>

                    <form action="{{ route('student.destroy', $student->id) }}" method="POST" style="display: inline;">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="delete-btn" onclick="return confirm('Are you sure you want to delete this student?')">Delete</button>
                    </form>

                </td>
                <td>{!! $barcodeGenerator->getBarcode($student->id_number, $barcodeGenerator::TYPE_CODE_128) !!}</td>
            </tr>
            @endforeach
        </tbody>
    </table>
    <script>

    function exportTableToExcel() {
    // Get HTML table data
    var table = document.getElementById("student");
        var wb = XLSX.utils.table_to_book(table);

        // Save data to Excel file
        XLSX.writeFile(wb, "students_list.xlsx");
    };

</script>
</script>

</body>
</html>

