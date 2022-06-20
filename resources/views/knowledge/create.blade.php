@extends('layouts.main')

@section('head')
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">

@endsection

@section('content')
    <!-- content center -->
    <div class="col m6">
        <h2> ADD YOUR Code </h2>
        <form action="{{ route('codeKnowledge.store') }}" method="post">
            @csrf
            <div class="input-field col s12">
                <input type="text" name="title" required class="materialize-input " placeholder="title ...">
            </div>

            <div class="input-field col s12">
                <textarea name="description" required class="materialize-textarea " placeholder="description ..."></textarea>
            </div>

            <div class="input-field col s12">
                <select name="type" required>
                    <option value="simple_code">simple_code</option>
                    <option value="function">function</option>
                    <option value="class">class</option>
                    <option value="trait">trait</option>
                    <option value="interface">interface</option>
                    <option value="namespace">namespace</option>
                </select>
                <label>type </label>
            </div>

            <div class="input-field col s12">

                <select name="language_id" required>
                   @foreach($languages as $language)
                       <option  value="{{$language->id}}">{{$language->name}}</option>
                    @endforeach
                </select>
                <label>Program Language</label>
            </div>

            <div class="input-field col s12">
                <input type="text" name="version" required class="materialize-input " placeholder="version">
            </div>

            <div class="input-field col s12">
                <textarea class="form-control" rows="20" name="code" placeholder="add your code ..."></textarea>
            </div>


            <div class="modal-footer">
                <div class="input-field col s12">
                    <button type="submit" class="waves-effect waves-light btn-small">save</button>
                </div>
            </div>

        </form>
    </div>
@endsection

@section('footer')

@endsection
