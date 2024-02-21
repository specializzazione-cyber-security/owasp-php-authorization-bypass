<x-layout>
    <div class="container m-nav">
        <div class="row justify-content-center">
            <div class="col-6">
                @if ($errors->any())
                    <div class="alert alert-danger">
                        <ul>
                            @foreach ($errors->all() as $error)
                                <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                    </div>
                @endif
                <form method="POST" action="{{route('login')}}">
                    @csrf
                    <div class="mb-3">
                      <label for="exampleInputEmail1" class="form-label">Username</label>
                      <input name="name" type="text" class="form-control" id="exampleInputEmail1">
                    </div>
                    <div class="mb-3">
                      <label for="exampleInputPassword1" class="form-label">Password</label>
                      <input name="password" type="password" class="form-control" id="exampleInputPassword1">
                    </div>
                    <button type="submit" class="btn btn-primary">Submit</button>
                  </form>
            </div>
            <div class="col-4">
                <table class="table table-secondary table-striped mt-2">
                    <thead>
                      <tr>
                        <th scope="col">Username</th>
                        <th scope="col">Password</th>
                        <th scope="col">Ruoli</th>
                      </tr>
                    </thead>
                    <tbody>
                      <tr>
                        <th scope="row">Admin</th>
                        <td>password</td>
                        <td>Ruolo: Amministratore</td>
                      </tr>
                      <tr>
                        <th scope="row">User</th>
                        <td>password</td>
                        <td>Ruolo: Utente</td>
                      </tr>
                    </tbody>
                  </table>
            </div>
        </div>
    </div>
</x-layout>