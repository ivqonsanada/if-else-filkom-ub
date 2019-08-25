@extends('layouts.app')

{{-- @section('title', 'Home') --}}

@section('content')

  {{-- <div id="app"> --}}
    {{-- <v-app>
      <v-content>
        <v-container>Hello world</v-container>
      </v-content>
    </v-app> --}}

    <form method="POST" style="background: pink">
      <textarea name="text" cols="30" rows="10" style="border: 2px solid white">\\n \\r &#013;&#010; hoo</textarea>
      <button type="submit">Hoo</button>
    </form>
  {{-- </div> --}}

@endsection

@section('extrascript')

  {{-- <script src="https://cdn.jsdelivr.net/npm/vue@2.x/dist/vue.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/vuetify@2.x/dist/vuetify.js"></script> --}}
  {{-- <script>
    new Vue({
      el: '#app',
      vuetify: new Vuetify(),
    })
  </script> --}}

@endsection