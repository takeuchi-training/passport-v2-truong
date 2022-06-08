<x-layouts.app>
    <main class="container">
      <div class="row my-5">
        <div class="card p-5 col col-lg-8 offset-lg-2">

          <form method="POST" action="/oauth/clients">
            @csrf
            <h1 class="h3 mb-3 fw-normal">Create a client</h1>
        
            <div class="form-floating">
              <input type="name" class="form-control" id="name" name="name" value="{{ old('name') }}">
              <label for="name">Client name</label>
              @error('name')
                  <div class="alert alert-danger">{{ $message }}</div>
              @enderror
            </div>
            <div class="form-floating">
              <input type="redirect" class="form-control" id="redirect" name="redirect" placeholder="Redirect URL">
              <label for="redirect">Redirect URL</label>
              @error('redirect')
                  <div class="alert alert-danger">{{ $message }}</div>
              @enderror
            </div>
        
            <button class="w-100 btn btn-lg btn-primary mt-3" type="submit">Create</button>
          </form>
        </div>
      </div>
      </main>
</x-layouts.app>