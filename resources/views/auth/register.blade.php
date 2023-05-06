<x-layout>
    <div class="container">
        <div class="row">
            <div class="col-12">
                <h1 class="text-center">Registrati</h1>
                <form method="POST" action="{{route('register')}}" >
                    @csrf
                    <div class="mb-3">
                      <label for="exampleInputEmail1" class="form-label">Email address</label>
                      <input type="email" name="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                      <label for="exampleInputUsername1" class="form-label">Username</label>
                      <input type="text" name="name" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                    </div>
                    <div class="mb-3">
                      <label for="exampleInputPassword1" class="form-label">Password</label>
                      <input type="password" name="password" class="form-control" id="exampleInputPassword1">
                    </div>
                    <div class="mb-3">
                      <label for="exampleInputPasswordConfirmation1" class="form-label">Password confirmation</label>
                      <input type="password" name="password_confirmation" class="form-control" id="exampleInputPasswordConfirmation1">
                    </div>
                    
                    <button type="submit" class="btn btn-primary">Submit</button>

                  </form>
            </div>
        </div>
    </div>
</x-layout>