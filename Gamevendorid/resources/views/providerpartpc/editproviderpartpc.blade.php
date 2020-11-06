@extends('layout.app')
@section('content')
    <div class="container" style="margin-top: 50px; margin-bottom: 50px">
        <div class="row">
            <h1 class="col">Edit Provider Part PC</h1>
        </div>
        <div class="row">
            <div class="col">
                <form action="{{ route('providerpartpc.update', $providermerkpartpc->id)}}" method="POST">
                    @csrf
                    <input type="hidden" name="_method" value="PATCH">
                    <div class="form-group">
                        <label>Provider Name :</label>
                        <input type="text" class="form-control" value="{{$providermerkpartpc->nama_provider}}" name="nama_provider" onmouseover="this.style.boxShadow='0px 0px 15px LightSkyBlue'" onmouseout="this.style.boxShadow='0px 0px 0px LightSkyBlue'">
                    </div>
                    <div class="form-group">
                        <label>Brand :</label>
                        <input type="text" class="form-control" value="{{$providermerkpartpc->merk_provider}}" name="merk_provider" onmouseover="this.style.boxShadow='0px 0px 15px LightSkyBlue'" onmouseout="this.style.boxShadow='0px 0px 0px LightSkyBlue'">
                    </div>

                    <button type="submit" class="btn btn-primary" onmouseover="this.style.boxShadow='0px 0px 15px LightSkyBlue'" onmouseout="this.style.boxShadow='0px 0px 0px LightSkyBlue'">Submit</button>
                </form>
            </div>
        </div>
    </div>
@endsection
