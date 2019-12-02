@extends('backend.layouts.feedback')
   
@section('main-content')
    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h2>Edit Feedback</h2>
            </div>
            <div class="pull-right">
                <a class="btn btn-primary" href="{{ route('feedback.index') }}"> Back</a>
            </div>
        </div>
    </div>
   
    @if ($errors->any())
        <div class="alert alert-danger">
            <strong>Whoops!</strong> There were some problems with your input.<br><br>
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif
  
    <form action="{{ route('feedback.update',$feedback->id) }}" method="POST">
        @csrf
        @method('PUT')
   
        <div class="form-group">
            <strong>Nama:</strong>
            <input type="text" class="form-control" name="nama">
        </div>


        <div class="form-group">
            <strong>Email:</strong>
            <input type="text" class="form-control" name="email">
        </div>

        <div class="form-group">
            <strong>Feedback:</strong>
            <textarea type="text" class="form-control" name="feedback" style="height:150px"></textarea>
        </div>

        <button type="submit" class="btn btn-primary">Submit</button>
   
    </form>
@endsection