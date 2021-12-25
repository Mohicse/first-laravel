


            <table align="center"cellspacing="0px" cellpadding="5px" border="2px solid black">
                <thead>
                <th>Name</th>
                <th>Email</th>
                <th>Designation</th>
                <th>password</th>
                </thead>

                <tbody>
                        @foreach ($data as $da )
                        <tr>
                        <td>{{$da->name}}</td>
                        <td>{{$da->email}}</td>
                        <td>{{$da->designation}}</td>
                       <td>{{$da->password}}</td>
                       <td><a href={{"delete/".$da['id']}}>Delete</a></td>
                       <td><a href={{"edit/".$da['id']}}>Edit</a></td>
                </tr>

                        @endforeach
                </tbody>

            </table>

        </div>
    </div>
</div>
