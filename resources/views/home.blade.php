@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Dashboard</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    <form action="http://192.168.0.119:8000/api/hasil" method="POST" enctype="multipart/form-data" class="form-horizontal" >


                        <div class="preview"></div>
                         <div class="progress" style="display:none">
                          <div class="progress-bar" role="progressbar" aria-valuenow="0"
                          aria-valuemin="0" aria-valuemax="100" style="width:0%">
                            0%
                          </div>
                        </div>
        
        
                        <input type="file" name="file" class="form-control" />
                        <button class="btn btn-primary upload-image">Upload</button>
        
                        
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
