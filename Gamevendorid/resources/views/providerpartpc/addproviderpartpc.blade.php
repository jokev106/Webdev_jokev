@extends('layout.app')
@section('content')
<div class="container" style="margin-top: 50px; margin-bottom: 50px">
    <div class="row">
        <h1 class="col">Insert Mentor Data</h1>
    </div>
    <div class="row">
        <div class="col">
            <form action="{{ route('providerpartpc.store') }}" method="POST">
                @csrf
                <div class="form-group">
                    <label>Provider Name :</label>
                    <input type="text" class="form-control" name="nama_provider" onmouseover="this.style.boxShadow='0px 0px 15px LightSkyBlue'" onmouseout="this.style.boxShadow='0px 0px 0px LightSkyBlue'">
                </div>
                <div class="form-group">
                    <label>Brand :</label>
                    <input type="text" class="form-control" name="merk_provider" onmouseover="this.style.boxShadow='0px 0px 15px LightSkyBlue'" onmouseout="this.style.boxShadow='0px 0px 0px LightSkyBlue'">
                </div>

                <button type="submit" class="btn btn-primary" onmouseover="this.style.boxShadow='0px 0px 15px LightSkyBlue'" onmouseout="this.style.boxShadow='0px 0px 0px LightSkyBlue'">Submit</button>
            </form>
        </div>
    </div>
</div>
@endsection
