<body>
    <table>
        <th>Group Name </th>
        <th>Number of Students</th>
        <th>Group Number</th>
        <th>Total Hours</th>
        <th>Day</th>
        <th>Time</th>
        <th>Venue</th>
        @foreach($classes as $class)
            <tr>
                <td>{{ $class['group_name'] }}</td>
                <td>{{ $class['number_of_students'] }}</td>
                <td>{{ $class['group_number'] }}</td>
                <td>{{ $class['total_hours'] }}</td>
                <td>{{ $class['day'] }}</td>
                <td>{{ $class['start_time'] . ' - '. $class['end_time']}}</td>
                <td>{{ $class['venue'] }}</td>
            </tr>
        @endforeach
    </table>
</body>
