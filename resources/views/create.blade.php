@extends('layout.Form-Layout')
@section('RegexForm')

                                                   <!---->
                                                <!-- Form -->
                                                   <!---->

<div class="container">

    <form class="row g-3">
                                                   <!--    -->
                                              <!-- Text Button -->
                                                   <!--    -->
        <div class="col-12">
            <label for="inputAddress" class="form-label">Text :</label>
            <input type="text" class="form-control" id="inputAddress" placeholder="plz enter your text">
        </div>







                                                   <!--      -->
                                              <!-- submit Button -->
                                                   <!--      -->
        <div class="col-12">
            <button type="submit" class="btn btn-primary">Sign in</button>
        </div>

    </form>
</div>
@endsection


