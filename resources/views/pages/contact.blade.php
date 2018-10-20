
@extends ('layouts.default')
@section ('content')


    <h1>contacts</h1>
    <p class="lead">Please use this form to contact the site owner</p>

    <form>
        <div class="form-group">
            <label for="email">Email address</label>
            <input name="email" type="email" class="form-control" id="email" placeholder="name@example.com">
        </div>
        <div class="form-group">
            <label for="body">Example textarea</label>
            <textarea name="body" class="form-control" id="body" rows="3"></textarea>
        </div>
    </form>

@endsection
