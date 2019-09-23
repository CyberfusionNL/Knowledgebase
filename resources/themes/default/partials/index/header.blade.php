<!-- restyle : intro -->
<section class="jumbotron-fluid restyle intro box grid red d-flex align-items-center py-0">
    <div class="container-fluid">
        <div class="background"></div>

        <div class="row align-items-center justify-content-center my-3">
            <div class="col-md-5 mx-2">
                <h1>Knowledgebase</h1>
                <p>Find <strong>everything</strong> you need to know.</p>
            </div>
            <div class="col-md-5 d-flex align-self-end">
                <!-- Image -->
            </div>
        </div>
        <div class="row">
            <div class="col-md-12 p-0">
                <div class="box py-5">
                    <div class="row justify-content-around">
                        <div class="card col-md-3 mr-1 p-0">
                            <div class="card-header py-1">
                                <p class="text-center my-0">LEREN</p>
                            </div>
                            <div class="card-body justify-content-center hover-body">
                                <span>Aan de slag met de tutorials. Leer alles over ceaquia dolo de sumque quos
                                    eum numquasped que dolupta epelitiis inist pelest pari ut il miliqui dollit.</span>
                                <a class="btn btn-outline-primary btn-block d-block mt-5 mb-0"
                                   href="{{ route('article', ['type' => 'learn', 'slug' => $learn]) }}">Lees de
                                    artikelen</a>
                            </div>
                        </div>
                        <div class="card col-md-3 mr-1 p-0">
                            <div class="card-header py-1">
                                <p class="text-center my-0">ONTDEKKEN</p>
                            </div>
                            <div class="card-body justify-content-center hover-body">
                                Uitleg en algemene artikelen over nieuwe technieken pos adicima iorisimusdae vellam
                                ulparunt raepe expernat harum, sedi at aborepu dandae. Es res ma nam.
                                <a class="btn btn-outline-primary btn-block d-block mt-5 mb-0"
                                   href="{{ route('article', ['type' => 'explore', 'slug' => $explore]) }}">Lees de
                                    artikelen</a>
                            </div>
                        </div>
                        <div class="card col-md-3 mr-1 p-0">
                            <div class="card-header py-1">
                                <p class="text-center my-0">CHANGELOGS</p>
                            </div>
                            <div class="card-body justify-content-center hover-body">
                                Wat is er nieuw en onlangs bijgewerkt en wat genectur rerum dolut magnam nobite dolessim
                                reicia doloreperis vollique num sunt aliaspic tota vellend itatur alibusam
                                <a class="btn btn-outline-primary btn-block d-block mt-5 mb-0"
                                   href="{{ route('article', ['type' => 'changes', 'slug' => $changes]) }}">Lees de
                                    artikelen</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

</section>
