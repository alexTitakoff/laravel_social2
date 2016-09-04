@extends('layouts.master')



@section('title')

Wellcome!

@endsection



@section('content')

<div class="row">
    <div class="col-md-3">
        <h3>Sing up</h3>
        <form action="{{route('signup')}}" method="post" >

            <div class="form-group">
                <label for="email">Youe email</label>
                <input class="form-control" type="text" name="email" id="email">
            </div>


            <div class="form-group">
                <label for="firstname">Youe firstname</label>
                <input class="form-control" type="text" name="firstname" id="firstname">
            </div>



            <div class="form-group">
                <label for="password">Youe password</label>
                <input class="form-control" type="password" name="password" id="password">
            </div>

            <button type="submit" class="btn btn-primary" >Submit</button>
            <input type="hidden"  name="_token" value="{{ Session::token() }}">
            
        </form>
    </div>



    <div class="col-md-3">
        <h3>Sing in</h3>
        <form action="#" method="post" >

            <div class="form-group">
                <label for="email">Youe email</label>
                <input class="form-control" type="text" name="email" id="email">
            </div>


            <div class="form-group">
                <label for="password">Youe password</label>
                <input class="form-control" type="password" name="password" id="password">
            </div>

            <button type="submit" class="btn btn-primary" >Submit</button>
            
        </form>
    </div>

</div>

@endsection






