<!DOCTYPE html>
<html>
<head>
    <title>Foreach $_GET Implementation</title>
    <style>
        table {
            border-collapse: collapse;
        }

        th, td {
            padding: 8px;
            border-bottom: 1px solid #ddd;
        }

        tr:nth-child(even) {
            background-color: #f2f2f2;
        }
    </style>
</head>
<body>
    <h1>Foreach $_GET Implementation</h1>

    @if (count($urlVariables) > 0)
        <table>
            <tr>
                <th>Key</th>
                <th>Value</th>
            </tr>
            @foreach ($urlVariables as $key => $value)
                <tr>
                    <td>{{ $key }}</td>
                    <td>{{ $value }}</td>
                </tr>
            @endforeach
        </table>
    @else
        <p>No URL variables</p>
    @endif
</body>
</html>
