@extends('base')

@section('content')
    <div class="p-5 mb-4 bg-light rounded-3 mt-5">

        <h1 class="display-3 text-center">Je parraine</h1>
        <div class="articles row justify-content-center ">

            <div class="col">
                <div class="card my-3">
                    <div class="card-body">
                        <h5 class="card-title ">Qu'est-ce que le parrainage d'enfant ?</h5>
                        <p>C’est l’aider, par une contribution financière, à pourvoir à des besoins essentiels qui lui
                            permettront de suivre une scolarité et espérer avoir un niveau de formation suffisant pour
                            sortir de la précarité. C’est aussi lui apporter un soutien moral et lui donner une lueur
                            d’espoir. <br>
                            Grâce aux parrainages, 45 élèves sont entrés au collège en 2017-2018.
                            En 2021-2022, ils ont passé l’épreuve du BEPC.<br />
                        <h5>Comment le parrainage est-il géré ?</h5>
                        <p>Notre association se charge de collecter les fonds qui sont ensuite versés à l’Association de
                            Parrainage créée à Kongodiana et regroupant les instituteurs, les parents d’élèves et les mères
                            éducatrices.</p>

                        </p>
                        <h5>Quel est le coût d’un parrainage ?</h5>
                        <p>Le montant d’un parrainage est de 150 euros par an, auxquels s’ajoutent 25 euros d’adhésion à
                            l’association.
                            L’association Kongodiana étant reconnue d’intérêt général, vous pouvez bénéficier d’une
                            déduction d’impôt de 66 %. Le parrainage ne vous revient ainsi qu’à 4.25 euros par mois !
                        </p>
                        <div class="text-center m-3"><span class="fw-bold fs-3 text">« Parrainer des enfants de Kongodiana,
                                c’est du bonheur à partager ! »
                            </span></div>
                        <p><span class="fw-bold">Vous</span> leur donnerez la possibilité de poursuivre leurs études après
                            l’école primaire, dans un collège ou dans un centre de formation pour l’apprentissage d’un
                            métier. </p>
                        <p><span class="fw-bold">Nous</span> vous informerons du suivi de la scolarité de vos filleuls. </p>
                        <p><span class="fw-bold">Ensemble,</span> nous oeuvrerons pour un projet humanitaire offrant aux
                            enfants de Kongodiana la possibilité d’envisager un avenir meilleur, et au village tout entier
                            de se développer.</p>

                        <a href="{{ asset('pdf/bulletin.pdf') }}">Le bulletin de parrainage</a>
                    </div>
                </div>
            </div>

        </div>
    </div>



@endsection
