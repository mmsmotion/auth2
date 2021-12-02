@extends('layouts.app')
@section('content')

    <div class="container">
        <div class="row">
            <div class="col-12 col-lg-6">
                <div class="card">
                    <div class="card-header">
                        Edit Profile
                    </div>
                    <div class="card-body">
                        <form action="{{ route('home.update') }}" method="post" enctype="multipart/form-data">
                            @csrf
                            <div class="mb-3">
                                <label>Edit Phone</label>
                                <input type="text" name="phone" class="form-control" value="{{ Auth::user()->phone  }}">
                            </div>
                            <div class="mb-3">
                                <img src="{{ asset('storage/img/'.Auth::user()->photo) }}" height="50" alt="">
                                <br>
                                <label>Photo</label>
                                <input type="file" name="photo" class="form-control">
                            </div>

                            <button class="btn btn-primary">Update Info</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

    @stop
