<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
        <!-- Styles -->

    </head>
    <body>
        <div class="container">
          <div class="row">
            <div class="col-sm-8 mx-auto">
              <table class="table">
      <thead>
          <tr>
              <th>#</th>
              <th>Nombre</th>
              <th>Email</th>
              <th>&nbsp;</th>
          </tr>
      </thead>
      <tbody>
          @foreach($users as $user)
          <tr>
              <td>{{ $user->id }}</td>
              <td>{{ $user->name }}</td>
              <td>{{ $user->email }}</td>
              <td>
                  <form action="{{ route('users.destroy', $user) }}" method="POST">
                      @method('DELETE')
                      @csrf
                      <input
                          type="submit"
                          value="Eliminar"
                          class="btn btn-danger btn-sm"
                          onclick="return confirm('¿Desea eliminar?...')">
                  </form>
              </td>
          </tr>
          @endforeach
      </tbody>
  </table>
            </div>
          </div>
        </div>

    </body>
</html>
