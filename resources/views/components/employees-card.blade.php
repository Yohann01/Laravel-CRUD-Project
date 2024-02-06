@props(['employee'])
        <tr class="text-secondary">
            <td>{{$employee->id}}</td>
            <td>{{$employee->employee_number}}</td>
            <td>{{$employee->first_name}}</td>
            <td>{{$employee->last_name}}</td>
            <td>{{$employee->birthdate}}</td>
            <td >{{$employee->contact_number}}</td>
            <td>{{$employee->email}}</td>
            <td class="text-center d-flex flex-row">
                <a class="btn btn-primary btn-sm editBtn" href="/employee/{{$employee->id}}/edit">Edit</a>
                <a class="btn btn-secondary btn-sm">Calculate</a>
                <a class="btn btn-danger btn-sm">Delete</a>
            </td>
            <td>{{$employee->created_at}}</td>
            <td>{{$employee->updated_at}}</td>
        </tr> 