<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/
Route::get('/', function () {
    return view('/index');
})->name('index');

Route::get('/privacy-polycy', function () {
    return view('privacy-policy');
})->name('privacy');

Route::get('/welcome', function () {
    return view('welcome');
})->name('welcome');

Route::get('/faq', function () {
    // LISTA FAQ COLONNA SINISTRA
    $faqs_left = [
      [
        'domanda' => 'Chi può fare il corso Boolean?',
        'risposta' => 'Chiunque abbia una forte curiosità verso il mondo della programmazione e voglia di imparare a fare il mestiere di sviluppatore.
        Età e curriculum non sono una discriminante: infatti, i nostri studenti hanno dai 18 ai 45 anni, sono giovani ragazzi senza alcuna esperienza lavorativa, ma anche affermati professionisti che vogliono cambiare settore.Se non hai mai programmato o se hai già seguito qualche corso ma senti di non aver approfondito abbastanza per diventare programmatore, Boolean è il corso che fa per te'
      ],
      [
        'domanda' => 'Che competenze devo avere per iniziare il corso?',
        'risposta' => 'Il corso parte da zero, quindi non serve alcuna competenza di programmazione, è necessario però superare il processo di selezione.'
      ],
      [
        'domanda' => 'In cosa consiste il processo di selezione?',
        'risposta' => 'Boolean è un corso intensivo che richiede impegno costante, dedizione e un’attitudine al problem solving. Per assicurarci che ogni studente abbia concrete possibilità di diventare uno sviluppatore e iniziare una nuova carriera, selezioniamo gli studenti tramite un test di logica a risposta multipla e un colloquio motivazionale. Contattaci per iniziare il tuo percorso o per saperne di più!'
      ],
      [
        'domanda' => 'Posso seguire il corso mentre lavoro o studio?',
        'risposta' => 'Il nostro corso è full-time e si svolge ogni giorno, dal lunedì al venerdì, occupando - tra le lezioni al mattino e le esercitazioni al pomeriggio - almeno 6 ore della giornata di ogni studente. Avere una seconda occupazione rende poco probabile che tu riesca a stare al passo con il resto della classe. Il nostro obiettivo è che, a fine corso, tu sia pronto a entrare nel mondo del lavoro: il tuo pressoché completo coinvolgimento è essenziale.'
      ],
      [
        'domanda' => 'Di cosa ho bisogno per seguire il corso?',
        'risposta' => 'Ti basta un PC, una webcam e una buona connessione Internet (non inferiore ai 5Mb/s).'
      ],
      [
        'domanda' => 'Questo corso è una valida alternativa alla laurea?',
        'risposta' => 'Sì, nel mondo della programmazione non ci sono percorsi di carriera che ti sono preclusi se non sei in possesso di una laurea. Le aziende alla ricerca di web developer sanno che degli studi universitari non rappresentano una garanzia nel saper programmare e, per questo motivo, valutano anche candidati non laureati.'
      ],
      [
        'domanda' => 'Quanto costa il corso?',
        'risposta' => 'Trovi tutte le informazioni sul prezzo nell\'apposita sezione della pagina corso'
      ],
    ];
    // LISTA FAQ COLONNA DESTRA
    $faqs_right = [
      [
        'domanda' => 'Ho la certezza di essere assunto?',
        'risposta' => 'Dipende tutto da te! Come dimostrano numerosi studi di settore, lo sviluppatore web è uno dei mestieri più ricercati in Italia e Boolean fornisce tutte le competenze richieste dalle aziende per iniziare a fare questo lavoro. Oltre a fornirti conoscenze di programmazione, ti presentiamo alle nostre aziende partner che assumono in tutta Italia e ti aiutiamo a prepararti al meglio per i colloqui!'
      ],
      [
        'domanda' => 'Terminato il corso, sono supportato nella ricerca del lavoro?',
        'risposta' => 'Certamente! Verrai presentato a oltre 50 aziende che operano nel settore Internet in Italia. Dalla multinazionale più quotata alla startup in ascesa, avrai l’occasione di presentare te stesso e le tue qualità da neo-sviluppatore. Inoltre, ti affianchiamo nella costruzione del CV, del portfolio di progetti e simuliamo insieme dei colloqui: il tuo successo è il nostro!'
      ],
      [
        'domanda' => 'Quanti dei vostri ex allievi hanno ricevuto offerte di lavoro?',
        'risposta' => 'Il 100%. Tutti gli studenti che hanno terminato il corso hanno ricevuto una o più offerte di lavoro. Il nostro corso fornisce solide basi di programmazione ed essendo il mestiere del developer molto ricercato, le aziende sono sempre ben disposte ad assumere persone competenti e volenterose.'
      ],
      [
        'domanda' => 'Posso fare lo sviluppatore freelance al termine del corso?',
        'risposta' => 'È una possibilità, ma sconsigliamo di intraprendere questa strada subito dopo il corso: per essere sviluppatori freelance l\'esperienza è fondamentale e difficilmente sono sufficienti 6 mesi. Se il tuo obiettivo è lavorare seguendo i tuoi ritmi, la strada è quella giusta: molte aziende si stanno aprendo al work from home e, con un po\' di esperienza in più, siamo certi che diventerai un ottimo sviluppatore freelance!'
      ],
      [
        'domanda' => 'Troverò un lavoro nella mia città?',
        'risposta' => 'Collaboriamo con tante aziende, ma non possiamo garantire un’opportunità di lavoro in una zona specifica: attualmente ci siamo concentrati sulle migliori aziende del settore, quelle che creano prodotti tecnologici di alta qualità e hanno team di sviluppo ben organizzati che permettono di fare esperienze formative. Certo è che, qualora le tue esigenze non combaciassero con le aree geografiche delle nostre aziende partner, sarà nostra cura aiutarti a ricercare soluzioni più vicine a te.'
      ],
      [
        'domanda' => 'Che tipo di attestato rilasciate?',
        'risposta' => 'Rilasciamo un attestato di frequenza che certifica il numero di ore di lezione frequentate e gli argomenti trattati (HTML, CSS, Javascript, MySql e PHP).'
      ]
    ];
    return view('faq', ['faqs_list_left' => $faqs_left], ['faqs_list_right' => $faqs_right] );
})->name('faq');
