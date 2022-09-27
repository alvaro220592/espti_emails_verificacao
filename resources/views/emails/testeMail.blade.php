<h1>Olá, {{ $user->name }}</h1>

Email: {{ $user->email }}

{{-- <img src="{{ $message->embed($image) }}" alt=""> --}}
<img src="{{ $message->embedData($imageBase64, 'picachu.png') }}" alt="">