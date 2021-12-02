@extends('layouts.app')
@section('content')

    <div class="container">
        <div class="row">
            <div class="col-12">
                <form action="{{ route('category.store') }}" method="post">
                    @csrf
                    <div class="row">
                        <div class="col-4">
                            <input type="text" name="name" class="form-control d-inline-block">
                        </div>
                        <div class="col-4">
                            <button class="btn btn-primary">Add Category</button>

                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>

    @stop
