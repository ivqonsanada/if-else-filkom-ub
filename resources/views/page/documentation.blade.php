<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta http-equiv="X-UA-Compatible" content="ie=edge" />
    <title>Home</title>
    @include('partials/css')
  </head>

  <body>
    @include('partials/nav')

      <div class="hero-body">
        <div class="container has-text-centered">
          <h1 class="title">
            <span style="display: block;"
              ><span style="color:hsl(204, 86%, 53%)">IF</span>
              <span style="color:hsl(348, 100%, 61%)"> ELSE</span></span
            >
            <span>Coming Soon</span>
            <!-- <span style="font-size: 2.5rem;display: block">Outbound</span> -->
          </h1>
          <!-- <h2 class="subtitle">
            <a class="button is-black" style="margin-top: 5px;">Read more</a>
          </h2> -->
        </div>
      </div>
    </section>
    @include('partials/js')
  </body>
</html>