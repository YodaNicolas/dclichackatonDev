@extends('Layouts.base')
@section('content')
    <br>
    <form action="{{ url('EditPerformance/') }}" method="POST" enctype="multipart/form-data">
        @csrf
        <input type="hidden" name="idUt" value="{{ Auth::user()->id }}">

        <div class="card contrange">
            <div class="card-header">
                <h3> Mettez à jour vos performances {{ $competence = Auth::user()->detail->fiche->code_competence }}</h3>
            </div>
            <div class="positionLot">
                <div class="card LotNumerique">
                    <div class="card-header ">
                        Connaissance dans le numérique
                    </div>
                    <div class="LotNiveau">
                        <div class="parentLot">
                            <div class="EnfantLot">



                                <div>
                                    <input class="range" type="range" name="html" value="{{ $competence[1] }}"
                                        min="0" max="9">Html
                                </div>

                                <div>
                                    <input class="range" type="range" name="css" value="{{ $competence[0] }}"
                                        min="0" max="9">Css
                                </div>

                                <div>
                                    <input class="range" type="range" name="javascript" value="{{ $competence[2] }}"
                                        min="0" max="9">Javascript
                                </div>

                                <div>
                                    <input class="range" type="range" name="php" value="{{ $competence[4] }}"
                                        min="0" max="9">Php
                                </div>

                                <div>
                                    <input class="range" type="range" name="laravel" value="{{ $competence[3] }}"
                                        min="0" max="9">Laravel
                                </div>
                                <div>
                                    <input class="range" type="range" name="python" value="{{ $competence[5] }}"
                                        min="0" max="9">Python
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="card LotNumerique">
                    <div class="card-header ">
                        Connaissance dans d'autre domaine
                    </div>
                    <div class="TitrGlobal">

                        <div class="EcriTitr">
                            <h5> Domaine </h5>
                            <h5> Niveau</h5>
                        </div>
                        <div class="DivAutreDom">
                            <input class=" TitreDomaine form-control form-control-sm" type="text"
                                placeholder="Que maitrisez vous d'autre?" aria-label=".form-control-sm example">
                            <input class="range" type="range" name="dom1" value="0" min="0"
                                max="9">
                        </div>
                        <br>
                        <div class="DivAutreDom">
                            <input class=" TitreDomaine form-control form-control-sm" type="text"
                                placeholder="Que maitrisez vous d'autre?" aria-label=".form-control-sm example">
                            <input class="range" type="range" name="dom2" value="0" min="0"
                                max="9">
                        </div>
                        <br>
                        <div class="DivAutreDom">
                            <input class=" TitreDomaine form-control form-control-sm" type="text"
                                placeholder="Que maitrisez vous d'autre?" aria-label=".form-control-sm example">
                            <input class="range" type="range" name="dom3" value="0" min="0"
                                max="9">
                        </div>
                        <br>
                    </div>
                </div>
                <div class="card LotNumerique">
                    <div class="card-header ">
                        Uploadez vos fichiers
                    </div>
                    <div class="TitrGlobal">
                        <div class="DivAutreDom">
                            <div class="mb-3">
                                <label for="formFile" class="form-label">CV</label>
                                <input class="form-control" name="pdf" type="file" id="formFile">
                            </div>
                        </div>
                        <div class="DivAutreDom">
                            <div class="mb-3">
                                <label for="formFile" class="form-label">DEMO</label>
                                <input class="form-control" name="video" type="file" accept=".mp4, .mov, .avi"
                                    id="formFile">
                            </div>
                        </div>
                        <br>
                    </div>
                </div>
                <button type="input" class="btn btn-primary" style=" height:45px !important; width:300px"> Mettre à
                    jour </button>
            </div>
        </div>
    </form>
@endsection
