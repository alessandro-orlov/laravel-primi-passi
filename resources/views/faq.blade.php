@extends('layouts.app')

@section('title')
  domande frequenti
@endsection


@section('content')
  <main>
    <div class="faq-jumbo">
      <h1>Domande frequenti</h1>
      <p>Le nostre risposte a tutte le tue domande. Non trovi la risposta che stai cercando? Contattaci e saremo felici di darti una mano.</p>
    </div>
    <div class="faq-box">
      <div class="col-50 bg-grey">
        <h2>Prima del corso</h3>
        @foreach ($faqs_list_left as $faq)
          <h3>{{ $faq['domanda'] }}</h3>
          <p>{{ $faq['risposta'] }}</p>
        @endforeach
      </div>
      <div class="col-50 bg-darkblue">
        <h2>Dopo il corso</h3>
        @foreach ($faqs_list_right as $faq)
          <h3>{{ $faq['domanda'] }}</h3>
          <p>{{ $faq['risposta'] }}</p>
        @endforeach
      </div>
    </div>
  </main>
@endsection
