<h1>This is the view</h1>
<table cellspacing="0px" cellpadding="5px" border="2px solid black">
    <thead>

        <th>ID</th>
        <th>Name</th>
        <th>{{$emp->cat0}}</th>
        <th>{{$emp->cat0_attr}}</th>
        <th>{{$emp->cat1}}</th>
        <th>{{$emp->cat1_attr}}</th>
    </thead>
    <tbody>
        @foreach ($emp as $emp )
                <tr>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
               </tr>
        @endforeach
    </tbody>
</table>
