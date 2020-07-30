@extends('layouts.app')

@section('title')
  Laravel - primi passi
@endsection

@section('content')

  <main>
    @include('/partials/jumbotron')

    <section id="section" class="bg-darkblue">
      <div class="container">
        <div class="row">

          <div class="info-box">
            <h2>98%</h2>
            <p>La percentuale dei nostri studenti che ora lavora come web developer, oltre la metà a tempo indeterminato.</p>
          </div>

          <div class="info-box">
            <h2>€ 23.000</h2>
            <p>Lo stipendio medio lordo di partenza degli studenti assunti dalle nostre aziende partner.</p>
          </div>

          <div class="info-box">
            <h2>#1</h2>
            <p>Siamo il primo istituto online in Italia per indice di gradimento e risultati conseguiti.</p>
          </div>

        </div>
      </div>
    </section>
  </main>

@endsection
