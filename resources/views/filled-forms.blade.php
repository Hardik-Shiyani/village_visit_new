<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Filled Forms</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 20px;
        }
        h2 {
            font-size: 1.5em;
            margin-bottom: 20px;
            color: #007bff;
        }
        table {
            width: 100%;
            border-collapse: collapse;
            margin-bottom: 20px;
        }
        th, td {
            padding: 10px;
            text-align: left;
            border: 1px solid #ddd;
        }
        th {
            background-color: #007bff;
            color: #fff;
        }
        tr:nth-child(even) {
            background-color: #f2f2f2;
        }
        @media (max-width: 768px) {
            table {
                display: block;
                overflow-x: auto;
                white-space: nowrap;
            }
            th, td {
                display: block;
                text-align: right;
            }
            th {
                text-align: right;
            }
            td {
                text-align: right;
                position: relative;
                padding-left: 50%;
            }
            td::before {
                content: attr(data-label);
                position: absolute;
                left: 0;
                width: 45%;
                padding-left: 10px;
                font-weight: bold;
                text-align: left;
            }
        }
        .back-button {
            display: inline-block;
            padding: 10px 20px;
            margin-bottom: 20px;
            background-color: #007bff;
            color: #fff;
            text-decoration: none;
            border-radius: 5px;
            font-size: 16px;
        }
        .back-button:hover {
            background-color: #0056b3;
        }
    </style>
</head>
<body>
    <a href="{{ route('dashboard') }}" class="back-button">Back to Dashboard</a>
    <h2>ભરેલી વિગત: {{ Auth::user()->name }}</h2>
    <table>
        <thead>
            <tr>
                <th>ફોર્મ નામ</th>
                <th>તાલુકા નામ</th>
            </tr>
        </thead>
        <tbody>
            @foreach($filledTables as $table => $gujaratiName)
                @foreach($tableData[$table] as $record)
                    <tr>
                        <td>{{ $gujaratiName }}</td>
                        <td>
                            @php
                            $talukaId = $record->taluka_name;
                            $talukaName = '';

                            if ($talukaId == 'taluka1') {
                                $talukaName = 'ગાંધીનગર';
                            } elseif ($talukaId == 'taluka2') {
                                $talukaName = 'કલોલ';
                            } elseif ($talukaId == 'taluka3') {
                                $talukaName = 'દહેગામ';
                            } elseif ($talukaId == 'taluka4') {
                                $talukaName = 'મણસા';
                            } else {
                                $talukaName = '--';
                            }
                            @endphp
                            {{ $talukaName }}
                        </td>
                    </tr>
                @endforeach
            @endforeach
        </tbody>
    </table>
</body>
</html>
