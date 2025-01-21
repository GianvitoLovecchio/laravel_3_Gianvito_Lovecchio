<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ArticleController extends Controller
{
    public function goToArticoli() {

        $articoli = 
        [
            [
                'id'=>1,
                'nome'=>'Scolapasta',
                'prezzo'=>'2',
                'materiale'=>'plastica',
                'descrizione'=>'Resistente e leggero, ideale per scolare pasta, verdure e altro con praticità. Disponibile in colori vivaci per adattarsi a ogni cucina.',
                'immagine' => 'https://picsum.photos/201'
            ],
            [
                'id'=>2,
                'nome'=>'Coltello',
                'prezzo'=>'4',
                'materiale'=>'acciaio inox',
                'descrizione'=>'Lama affilata e durevole, perfetta per tagli precisi. Manico ergonomico per una presa comoda e sicura.',
                'immagine' => 'https://picsum.photos/202'
            ],
            [
                'id'=>3,
                'nome'=>'Tovaglia',
                'prezzo'=>'8',
                'materiale'=>'cotone' ,
                'descrizione'=>'Elegante e pratica, realizzata in cotone di alta qualità. Facile da lavare e perfetta per ogni occasione, dalla cena informale agli eventi speciali.',
                'immagine' => 'https://picsum.photos/203'
            ],
            [
                'id'=>4,
                'nome'=>'Pentola',
                'prezzo'=>'12',
                'materiale'=>'acciaio inox',
                'descrizione'=>'Robusta e versatile, garantisce una cottura uniforme grazie al fondo termico. Adatta a tutti i tipi di fornelli, inclusa l’induzione.',
                'immagine' => 'https://picsum.photos/204'
            ],
            [
                'id'=>5,
                'nome'=>'Bicchiere',
                'prezzo'=>'3',
                'materiale'=>'vetro',
                'descrizione'=>'Design classico e trasparente, perfetto per ogni tipo di bevanda. Resistente e facile da pulire, ideale per uso quotidiano.',
                'immagine' => 'https://picsum.photos/205'
            ],
            [
                'id'=>6,
                'nome'=>'Piatto',
                'prezzo'=>'5',
                'materiale'=>'ceramica',
                'descrizione'=>'Finitura liscia e raffinata, aggiunge un tocco di stile alla tua tavola. Adatto per microonde e lavastoviglie.',
                'immagine' => 'https://picsum.photos/206'
            ],
        ];

        return view('article.home_articoli', ['articoli'=> $articoli]);
}

public function goToDettaglioArticolo($id){
    $articoli = 
    [
        [
            'id'=>1,
            'nome'=>'Scolapasta',
            'prezzo'=>'2',
            'materiale'=>'plastica',
            'descrizione'=>'Resistente e leggero, ideale per scolare pasta, verdure e altro con praticità. Disponibile in colori vivaci per adattarsi a ogni cucina.',
            'immagine' => 'https://picsum.photos/201'
        ],
        [
            'id'=>2,
            'nome'=>'Coltello',
            'prezzo'=>'4',
            'materiale'=>'acciaio inox',
            'descrizione'=>'Lama affilata e durevole, perfetta per tagli precisi. Manico ergonomico per una presa comoda e sicura.',
            'immagine' => 'https://picsum.photos/202'
        ],
        [
            'id'=>3,
            'nome'=>'Tovaglia',
            'prezzo'=>'8',
            'materiale'=>'cotone' ,
            'descrizione'=>'Elegante e pratica, realizzata in cotone di alta qualità. Facile da lavare e perfetta per ogni occasione, dalla cena informale agli eventi speciali.',
            'immagine' => 'https://picsum.photos/203'
        ],
        [
            'id'=>4,
            'nome'=>'Pentola',
            'prezzo'=>'12',
            'materiale'=>'acciaio inox',
            'descrizione'=>'Robusta e versatile, garantisce una cottura uniforme grazie al fondo termico. Adatta a tutti i tipi di fornelli, inclusa l’induzione.',
            'immagine' => 'https://picsum.photos/204'
        ],
        [
            'id'=>5,
            'nome'=>'Bicchiere',
            'prezzo'=>'3',
            'materiale'=>'vetro',
            'descrizione'=>'Design classico e trasparente, perfetto per ogni tipo di bevanda. Resistente e facile da pulire, ideale per uso quotidiano.',
            'immagine' => 'https://picsum.photos/205'
        ],
        [
            'id'=>6,
            'nome'=>'Piatto',
            'prezzo'=>'5',
            'materiale'=>'ceramica',
            'descrizione'=>'Finitura liscia e raffinata, aggiunge un tocco di stile alla tua tavola. Adatto per microonde e lavastoviglie.',
            'immagine' => 'https://picsum.photos/206'
        ],
    ];
        foreach($articoli as $el){
            if($el['id']==$id){
                return view('article.dettaglio_articolo',['item'=>$el]);
            }
        }
}


}

