@extends('layouts.app')


@section('title', __('pages.hispaninc_initiative') . ' | AETH')
@section('meta-description', __('meta.description'))
@section('meta-keywords', __('meta.keywords'))

@section('content')
    <section class="page-title centred">
        <div class="bg-layer" style="background-image: url(assets/images/gallery/nish2.jpg);"></div>
        <div class="auto-container">
            <div class="content-box">
                <h1>{{ __('hispanic_initiative.grantees') }}</h1>
                <p class="lead" style="color:#fff"><b>{{ __('hispanic_initiative.subtitle') }}</b></p>
            </div>
        </div>
    </section>
    <div class="container py-5">
        <div class="text-center my-5">
            <h3><i class="bi bi-people-fill text-warning me-2"></i> {{ __('hispanic_initiative.grantee.verse') }}</h3>
        </div>

        <div class="row">
            <div class="container py-5">
                <div class="row">
                    <div class="col-md-4 mb-4">
                        <div class="card shadow-sm h-100" style="background-color:  #f6f3f9;">
                            <div class="card-body">
                                <p class="card-title text-primary"><strong>American Baptist Home Mission Societies</strong>
                                </p>
                                <ul class="list-unstyled">
                                    <li><strong>Abigail Medina Betancourt</strong><br><a
                                            href="mailto:abigail.medina@abhms.org"><i
                                                class="bi bi-envelope-fill text-secondary"></i> abigail.medina@abhms.org</a>
                                    </li>
                                    <li><strong>Abner Cotto-Bonilla</strong><br><a
                                            href="mailto:abner.cotto-bonilla@abhms.org"><i
                                                class="bi bi-envelope-fill text-secondary"></i>
                                            abner.cotto-bonilla@abhms.org</a></li>
                                    <li><strong>Alexzandria Sánchez</strong><br><a
                                            href="mailto:alexzandria.sanchez@abhms.org"><i
                                                class="bi bi-envelope-fill text-secondary"></i>
                                            alexzandria.sanchez@abhms.org</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>

                    <div class="col-md-4 mb-4">
                        <div class="card shadow-sm h-100" style="background-color:  #f6f3f9;">
                            <div class="card-body">
                                <p class="card-title text-primary"><strong>Assemblies of God</strong></p>
                                <ul class="list-unstyled">
                                    <li><strong>Andy Smith</strong><br><a href="mailto:asmith@cddcag.org"><i
                                                class="bi bi-envelope-fill text-secondary"></i> asmith@cddcag.org</a></li>
                                    <li><strong>Dennis J. Rivera</strong><br><a href="mailto:drivera@ag.org"><i
                                                class="bi bi-envelope-fill text-secondary"></i> drivera@ag.org</a></li>
                                    <li><strong>Raúl Sánchez, Jr.</strong><br><a
                                            href="mailto:rsanchez@centralpacificag.org"><i
                                                class="bi bi-envelope-fill text-secondary"></i>
                                            rsanchez@centralpacificag.org</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>

                    <div class="col-md-4 mb-4">
                        <div class="card shadow-sm h-100" style="background-color:  #f6f3f9;">
                            <div class="card-body">
                                <p class="card-title text-primary"><strong>Christian and Missionary Alliance</strong></p>
                                <ul class="list-unstyled">
                                    <li><strong>Iván Martí</strong><br><a href="mailto:martii@cmalliance.org"><i
                                                class="bi bi-envelope-fill text-secondary"></i> martii@cmalliance.org</a>
                                    </li>
                                    <li><strong>Jorge Cuevas</strong><br><a href="mailto:cuevasj@cmalliance.org"><i
                                                class="bi bi-envelope-fill text-secondary"></i> cuevasj@cmalliance.org</a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>

                    <div class="col-md-4 mb-4">
                        <div class="card shadow-sm h-100" style="background-color:  #f6f3f9;">
                            <div class="card-body">
                                <p class="card-title text-primary"><strong>Church of God</strong></p>
                                <ul class="list-unstyled">
                                    <li><strong>Abner Meléndez</strong><br><a href="mailto:abnermf7@yahoo.com"><i
                                                class="bi bi-envelope-fill text-secondary"></i> abnermf7@yahoo.com</a></li>
                                    <li><strong>Ángel B. Marcial Cordero</strong><br><a
                                            href="mailto:abmarcial1@hotmail.com"><i
                                                class="bi bi-envelope-fill text-secondary"></i> abmarcial1@hotmail.com</a>
                                    </li>
                                    <li><strong>Ángel E. Marcial Estades</strong><br><a
                                            href="mailto:amarcial25@hotmail.com"><i
                                                class="bi bi-envelope-fill text-secondary"></i> amarcial25@hotmail.com</a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>

                    <div class="col-md-4 mb-4">
                        <div class="card shadow-sm h-100" style="background-color:  #f6f3f9;">
                            <div class="card-body">
                                <p class="card-title text-primary"><strong>Esperanza, Inc.</strong></p>
                                <ul class="list-unstyled">
                                    <li><strong>Anthony Ramos</strong><br><a href="mailto:aramos@esperanza.us"><i
                                                class="bi bi-envelope-fill text-secondary"></i> aramos@esperanza.us</a></li>
                                    <li><strong>Ivelisse Vázquez-Figueroa</strong><br><a
                                            href="mailto:ivazquez-figueroa@esperanza.us"><i
                                                class="bi bi-envelope-fill text-secondary"></i>
                                            ivazquez-figueroa@esperanza.us</a></li>
                                    <li><strong>Rubén Ortiz</strong><br><a href="mailto:rortiz@esperanza.us"><i
                                                class="bi bi-envelope-fill text-secondary"></i> rortiz@esperanza.us</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4 mb-4">
                        <div class="card shadow-sm h-100" style="background-color:  #f6f3f9;">
                            <div class="card-body">
                                <p class="card-title text-primary"><strong>General Comission on Religion and Race UMC
                                        -(GCORR)</strong></p>
                                <ul class="list-unstyled">
                                    <li><strong>Enger Muteteke</strong><br><a href="mailto:emuteteke@gcorr.org"><i
                                                class="bi bi-envelope-fill text-secondary"></i> emuteteke@gcorr.org</a></li>
                                    <li><strong>Lydia Muñoz</strong><br><a href="mailto:lmunoz@elplanumc.org"><i
                                                class="bi bi-envelope-fill text-secondary"></i> lmunoz@elplanumc.org</a>
                                    </li>
                                    <li><strong>Zachary Anderson</strong><br><a
                                            href="mailto:zanderson@greatplainsumc.org"><i
                                                class="bi bi-envelope-fill text-secondary"></i>
                                            zanderson@greatplainsumc.org</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>

                    <div class="col-md-4 mb-4">
                        <div class="card shadow-sm h-100" style="background-color:  #f6f3f9;">
                            <div class="card-body">
                                <p class="card-title text-primary"><strong>Hispanic Access Foundation</strong></p>
                                <ul class="list-unstyled">
                                    <li><strong>Christine Tamara</strong><br><a href="mailto:ctamara@hispanicaccess.org"><i
                                                class="bi bi-envelope-fill text-secondary"></i>
                                            ctamara@hispanicaccess.org</a></li>
                                    <li><strong>Luke Arce Argleben</strong><br><a href="mailto:luke@hispanicaccess.org"><i
                                                class="bi bi-envelope-fill text-secondary"></i> luke@hispanicaccess.org</a>
                                    </li>
                                    <li><strong>Pablo Juárez</strong><br><a href="mailto:pablo@hispanicaccess.org"><i
                                                class="bi bi-envelope-fill text-secondary"></i> pablo@hispanicaccess.org</a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>

                    <div class="col-md-4 mb-4">
                        <div class="card shadow-sm h-100" style="background-color:  #f6f3f9;">
                            <div class="card-body">
                                <p class="card-title text-primary"><strong>Iglesia de Dios Pentecostal, MI</strong></p>
                                <ul class="list-unstyled">
                                    <li><strong>Gary Vázquez</strong><br><a href="mailto:gevazquez7@gmail.com"><i
                                                class="bi bi-envelope-fill text-secondary"></i> gevazquez7@gmail.com</a>
                                    </li>
                                    <li><strong>Jonathan García</strong><br><a href="mailto:jgr.jonathan@gmail.com"><i
                                                class="bi bi-envelope-fill text-secondary"></i> jgr.jonathan@gmail.com</a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>

                    <div class="col-md-4 mb-4">
                        <div class="card shadow-sm h-100" style="background-color:  #f6f3f9;">
                            <div class="card-body">
                                <p class="card-title text-primary"><strong>LABI College</strong></p>
                                <ul class="list-unstyled">
                                    <li><strong>Brianna Foley Aguayo</strong><br><a href="mailto:bfoley@labi.edu"><i
                                                class="bi bi-envelope-fill text-secondary"></i> bfoley@labi.edu</a></li>
                                    <li><strong>Gabriela Mora-Soto</strong><br><a href="mailto:galvarez@labi.edu"><i
                                                class="bi bi-envelope-fill text-secondary"></i> galvarez@labi.edu</a></li>
                                    <li><strong>Nehemías Romero</strong><br><a href="mailto:nromero@labi.edu"><i
                                                class="bi bi-envelope-fill text-secondary"></i> nromero@labi.edu</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4 mb-4">
                        <div class="card shadow-sm h-100" style="background-color:  #f6f3f9;">
                            <div class="card-body">
                                <p class="card-title text-primary"><strong>Latino Christian National Network</strong></p>
                                <ul class="list-unstyled">
                                    <li><strong>Carlos Carbajal</strong><br><a href="mailto:abforjesus@gmail.com"><i
                                                class="bi bi-envelope-fill text-secondary"></i> abforjesus@gmail.com</a>
                                    </li>
                                    <li><strong>Carlos L. Malavé</strong><br><a href="mailto:revmalave@lcnn.org"><i
                                                class="bi bi-envelope-fill text-secondary"></i> revmalave@lcnn.org</a></li>
                                    <li><strong>Josh Rincón</strong><br><a href="mailto:jrincon@idealcdc.com"><i
                                                class="bi bi-envelope-fill text-secondary"></i> jrincon@idealcdc.com</a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4 mb-4">
                        <div class="card shadow-sm h-100" style="background-color:  #f6f3f9;">
                            <div class="card-body">
                                <p class="card-title text-primary"><strong>Mission Talk</strong></p>
                                <ul class="list-unstyled">
                                    <li><strong>Agustín Quiles</strong><br><a href="mailto:agustinquiles3@gmail.com"><i
                                                class="bi bi-envelope-fill text-secondary"></i> agustinquiles3@gmail.com</a>
                                    </li>
                                    <li><strong>Lizelle Romero</strong><br><a href="mailto:lizelle@missiontalk.us"><i
                                                class="bi bi-envelope-fill text-secondary"></i> lizelle@missiontalk.us</a>
                                    </li>
                                    <li><strong>Harelyn Rodríguez</strong><br><a href="mailto:harelyn@missiontalk.us"><i
                                                class="bi bi-envelope-fill text-secondary"></i> harelyn@missiontalk.us</a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>

                    <div class="col-md-4 mb-4">
                        <div class="card shadow-sm h-100" style="background-color:  #f6f3f9;">
                            <div class="card-body">
                                <p class="card-title text-primary"><strong>National Hispanic Baptist Network<br>(Convención
                                        Bautista Hispana de Texas)</strong></p>
                                <ul class="list-unstyled">
                                    <li><strong>Bruno Molina</strong><br><a href="mailto:bmolina@rednbh.org"><i
                                                class="bi bi-envelope-fill text-secondary"></i> bmolina@rednbh.org</a></li>
                                    <li><strong>David Inestroza</strong><br><a href="mailto:dinestroza@rednbh.org"><i
                                                class="bi bi-envelope-fill text-secondary"></i> dinestroza@rednbh.org</a>
                                    </li>
                                    <li><strong>Jesse Rincones</strong><br><a href="mailto:jesse@convencionbautista.org"><i
                                                class="bi bi-envelope-fill text-secondary"></i>
                                            jesse@convencionbautista.org</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>

                    <div class="col-md-4 mb-4">
                        <div class="card shadow-sm h-100" style="background-color:  #f6f3f9;">
                            <div class="card-body">
                                <p class="card-title text-primary"><strong>National Hispanic Christian Leadership
                                        Conference</strong></p>
                                <ul class="list-unstyled">
                                    <li><strong>Israel Bermúdez</strong><br><a href="mailto:israelbermudes@nhclc.org"><i
                                                class="bi bi-envelope-fill text-secondary"></i> israelbermudes@nhclc.org</a>
                                    </li>
                                    <li><strong>Michael Messner</strong><br><a href="mailto:mike@mobiusgp.com"><i
                                                class="bi bi-envelope-fill text-secondary"></i> mike@mobiusgp.com</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>

                    <div class="col-md-4 mb-4">
                        <div class="card shadow-sm h-100" style="background-color:  #f6f3f9;">
                            <div class="card-body">
                                <p class="card-title text-primary"><strong>National Hispanic District of the Foursquare
                                        Churches</strong></p>
                                <ul class="list-unstyled">
                                    <li><strong>Martín Ruarte</strong><br><a href="mailto:mruarte@foursquare.org"><i
                                                class="bi bi-envelope-fill text-secondary"></i> mruarte@foursquare.org</a>
                                    </li>
                                    <li><strong>Ricky Navarro</strong><br><a href="mailto:mavarro@foursquare.org"><i
                                                class="bi bi-envelope-fill text-secondary"></i> mavarro@foursquare.org</a>
                                    </li>
                                    <li><strong>Wendy Suárez Ramos</strong><br><a href="mailto:wsuarez@foursquare.org"><i
                                                class="bi bi-envelope-fill text-secondary"></i> wsuarez@foursquare.org</a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>

                    <div class="col-md-4 mb-4">
                        <div class="card shadow-sm h-100" style="background-color:  #f6f3f9;">
                            <div class="card-body">
                                <p class="card-title text-primary"><strong>North American Division of Seventh-Day
                                        Adventists</strong></p>
                                <ul class="list-unstyled">
                                    <li><strong>Gerardo Oudri Varela</strong><br><a
                                            href="mailto:gerardrooudri@nadadventist.org"><i
                                                class="bi bi-envelope-fill text-secondary"></i>
                                            gerardrooudri@nadadventist.org</a></li>
                                    <li><strong>José Cortés Jr.</strong><br><a
                                            href="mailto:josecortesjr@nadadventist.org"><i
                                                class="bi bi-envelope-fill text-secondary"></i>
                                            josecortesjr@nadadventist.org</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>

                    <div class="col-md-4 mb-4">
                        <div class="card shadow-sm h-100" style="background-color:  #f6f3f9;">
                            <div class="card-body">
                                <p class="card-title text-primary"><strong>Seminario Evangélico de Puerto Rico</strong></p>
                                <ul class="list-unstyled">
                                    <li><strong>Adriana Millán Malavé</strong><br><a
                                            href="mailto:adriana.malave@se-pr.edu"><i
                                                class="bi bi-envelope-fill text-secondary"></i> adriana.malave@se-pr.edu</a>
                                    </li>
                                    <li><strong>Agustina Luvis Núñez</strong><br><a href="mailto:decanatura@se-pr.edu"><i
                                                class="bi bi-envelope-fill text-secondary"></i> decanatura@se-pr.edu</a>
                                    </li>
                                    <li><strong>Juan Ramón Mejías Ortiz</strong><br><a
                                            href="mailto:presidencia@se-pr.edu"><i
                                                class="bi bi-envelope-fill text-secondary"></i> presidencia@se-pr.edu</a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4 mb-4">
                        <div class="card shadow-sm h-100" style="background-color:  #f6f3f9;">
                            <div class="card-body">
                                <p class="card-title text-primary"><strong>The Gathering & National Latino Evangelical
                                        Coalition</strong></p>
                                <ul class="list-unstyled">
                                    <li><strong>Jeanette Salguero</strong><br><a href="mailto:salguerojvs@gmail.com"><i
                                                class="bi bi-envelope-fill text-secondary"></i> salguerojvs@gmail.com</a>
                                    </li>
                                    <li><strong>Samaris Hernández</strong><br><a href="mailto:shchevere@gmail.com"><i
                                                class="bi bi-envelope-fill text-secondary"></i> shchevere@gmail.com</a></li>
                                    <li><strong>Keila Y. Rivera</strong><br><a href="mailto:gathringorl@gmail.com"><i
                                                class="bi bi-envelope-fill text-secondary"></i> gathringorl@gmail.com</a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>

                    <div class="col-md-4 mb-4">
                        <div class="card shadow-sm h-100" style="background-color:  #f6f3f9;">
                            <div class="card-body">
                                <p class="card-title text-primary"><strong>Urban Strategies & National Alliance for Hispanic
                                        Families</strong></p>
                                <ul class="list-unstyled">
                                    <li><strong>Lisa Treviño Cummins</strong><br><a
                                            href="mailto:lisacummins@urbanstrategies.us"><i
                                                class="bi bi-envelope-fill text-secondary"></i>
                                            lisacummins@urbanstrategies.us</a></li>
                                    <li><strong>Rachel Aylor</strong><br><a href="mailto:raylor@nahf.us"><i
                                                class="bi bi-envelope-fill text-secondary"></i> raylor@nahf.us</a></li>
                                    <li><strong>Lymar A. Solá</strong><br><a href="mailto:lsola@urbanstrategies.us"><i
                                                class="bi bi-envelope-fill text-secondary"></i> lsola@urbanstrategies.us</a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection