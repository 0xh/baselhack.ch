@extends('frontend.layouts.app')

@section('styles')

@endsection

@section('content')

    @include('frontend.layouts.components._header')


    <section class="section">
        <div class="container">

            <div class="columns is-centered">

                <div class="column is-three-quarters">

                    <div class="content">


                        <h3>Haftungsausschluss</h3>

                        <p class="has-text-justified">

                            Der Autor übernimmt keinerlei Gewähr hinsichtlich der inhaltlichen Richtigkeit, Genauigkeit,
                            Aktualität, Zuverlässigkeit und Vollständigkeit der Informationen. Haftungsansprüche gegen
                            den Autor wegen Schäden materieller oder immaterieller Art, welche aus dem Zugriff oder der
                            Nutzung bzw. Nichtnutzung der veröffentlichten Informationen, durch Missbrauch der
                            Verbindung oder durch technische Störungen entstanden sind, werden ausgeschlossen. Alle
                            Angebote sind unverbindlich. Der Autor behält es sich ausdrücklich vor, Teile der Seiten
                            oder das gesamte Angebot ohne gesonderte Ankündigung zu verändern, zu ergänzen, zu löschen
                            oder die Veröffentlichung zeitweise oder endgültig einzustellen.
                        </p>


                        <h3>Haftung für Links</h3>

                        <p class="has-text-justified">

                            Verweise und Links auf Webseiten Dritter liegen ausserhalb unseres Verantwortungsbereichs.
                            Es wird jegliche Verantwortung für solche Webseiten abgelehnt. Der Zugriff und die Nutzung
                            solcher Webseiten erfolgen auf eigene Gefahr des Nutzers oder der Nutzerin.
                        </p>


                        <h3>Urheberrechte</h3>

                        <p class="has-text-justified">

                            Die Urheber- und alle anderen Rechte an Inhalten, Bildern, Fotos oder anderen Dateien
                            gehören ausschliesslich huusbeiz.ch oder den speziell genannten Rechtsinhabern. Für die
                            Reproduktion jeglicher Elemente ist die schriftliche Zustimmung der Urheberrechtsträger im
                            Voraus einzuholen. </p>

                    </div>
                </div>

            </div>


        </div>
    </section>


    @include('frontend.layouts.components._newsletter')





@endsection

@section('scripts')


@endsection