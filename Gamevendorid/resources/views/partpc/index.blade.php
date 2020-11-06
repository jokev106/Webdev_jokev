@extends('layout.app')
@section('content')
    <div class="container" style="margin-top: 50px; margin-bottom: 50px">
        <div class="row">
            <h1 class="col">List Part PC</h1>
        </div>
        <div class="row">
            <div class="col-md-2 offset-md-10">
                <a href="{{ route('partpc.create') }}" class="btn btn-primary btn-block" role="button"
                   aria-pressed="true" onmouseover="this.style.boxShadow='0px 0px 15px LightSkyBlue'" onmouseout="this.style.boxShadow='0px 0px 0px LightSkyBlue'">Add Another Part</a>
            </div>
        </div>
        <div class="row" style="margin-top: 30px;">
            <table class="table table-striped">
                <thead>
                <tr style="background-color: rgba(255, 255, 255, 0.8)">
                    <th scope="col">Part Name</th>
                    <th scope="col">Type</th>
                    <th scope="col">Brand</th>
                    <th scope="col">Description</th>
                    <th scope="col"></th>
                </tr>
                </thead>
                <tbody>
                @foreach($partpc as $partpcs)
                    <tr style="background-color: rgba(255, 255, 255, 0.5)">
                        <td><a href="{{ route('partpc.edit', $partpcs) }}" onmouseover="this.style.textShadow='0px 0px 15px LightSkyBlue'" onmouseout="this.style.textShadow='0px 0px 0px LightSkyBlue'">{{ $partpcs->nama_item}}</a></td>
                        <td>{{ $partpcs->tipe_item}}</td>
                        <td>{{ $partpcs->providermerkpartpc->merk_provider}}</td>
                        <td>{{ $partpcs->deskripsi_item}}</td>
                        <td>
                            <form action="{{ route('partpc.destroy', $partpcs) }}" method="post" onsubmit="return confirm('Are you sure? all the related data will also be deleted!')">
                                @csrf
                                <input type="hidden" name="_method" value="DELETE">
                                <button type="submit" class="btn btn-danger" onmouseover="this.style.boxShadow='0px 0px 15px HotPink'" onmouseout="this.style.boxShadow='0px 0px 0px HotPink'">Delete</button>
                            </form>
                        </td>
                    </tr>
                @endforeach
                </tbody>
            </table>

@endsection
