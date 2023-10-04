

@section('content')
<div class="container">
    <div class="card">
        <div class="card-body">
        <meta property="og:title" content="{{ $information->name }} - {{ config('app.name') }}">
        <meta property="og:description" content="Email: {{ $information->email }} - Introduction: {{ $information->introduction }}">
        <meta property="og:image" content="{{ asset('storage/image/'.$information->profilepic) }}">
        <meta property="og:url" content="{{ route('information.show', $information->id) }}">
        <meta property="og:type" content="article">
        </div>
    </div>
</div>
@endsection
