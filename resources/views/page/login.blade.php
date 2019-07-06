<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta http-equiv="X-UA-Compatible" content="ie=edge" />
    <title>Login</title>
    @include('partials/css')
  </head>
  <body>
    <section class="hero is-light is-bold is-fullheight">
      @include('partials/nav')

      <div class="container row align-items-center">
        <form method="get" action="/home">
          <div class="form-group">
            <label for="exampleInputEmail1">NIM</label>
            <input
              type="email"
              class="form-control"
              id="exampleInputEmail1"
              aria-describedby="emailHelp"
              placeholder="NIM"
            />
            <!-- <small id="emailHelp" class="form-text text-muted"
          >We'll never share your email with anyone else.</small
        > -->
          </div>
          <div class="form-group">
            <label for="exampleInputPassword1">Password</label>
            <input
              type="password"
              class="form-control"
              id="exampleInputPassword1"
              placeholder="Password"
            />
          </div>
          <!-- <div class="form-group form-check">
        <input type="checkbox" class="form-check-input" id="exampleCheck1" />
        <label class="form-check-label" for="exampleCheck1">Check me out</label>
      </div> -->
          <button type="submit" class="btn btn-primary">Login</button>
        </form>
      </div>
    </section>
    @include('partials/js')
  </body>
</html>
