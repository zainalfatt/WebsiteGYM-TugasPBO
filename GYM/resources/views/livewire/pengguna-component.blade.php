<div class="d-flex justify-content-center">
         <div class="col-sm-12 col-xl-12">
                <div class="bg-light rounded h-100 p-4">
                    <h6 class="mb-4">Data Pengguna</h6>
                    <table class="table">
                        <thead>
                            <tr>
                                <th scope="col">#</th>
                                <th scope="col">Nama</th>
                                <th scope="col">Email</th>
                                <th scope="col">Role</th>
                                <th>

                                </th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($pengguna as $data )
                                <tr>
                                    <tr>
                                        <th scope="row">{{ $loop->iteration }}</th>
                                        <td>{{ $data->name }}</td>
                                        <td>{{ $data->email }}</td>
                                        <td>{{ $data->role }}</td>
                                        <td>

                                        </td>
                                    </tr>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
</div>
