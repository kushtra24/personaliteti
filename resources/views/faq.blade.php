@extends('layouts.app')

@section('style')
<style>
    #faq h1, #faq>p{
        text-align: center;
    }
</style>
@endsection
@section('content')
<div class="container" id="faq">
    <h1>Pyetje më të shpeshta</h1>
    <p>Kliko në pyetje për të parë përgjigjen</p>
    <div class="row">
            <div class="panel-group" id="accordion" role="tablist" aria-multiselectable="true">
                    <div class="panel panel-default">
                      <div class="panel-heading" role="tab" id="headingOne">
                        <h4 class="panel-title">
                          <a role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                            Rezultatet që kam marr dallojnë nga ato që kam marr në faqe tjera në internet. Pse?
                          </a>
                        </h4>
                      </div>
                      <div id="collapseOne" class="panel-collapse collapse in" role="tabpanel" aria-labelledby="headingOne">
                        <div class="panel-body">
                                Ka shumë faktor që mund të mundësojnë vlerësim tjetër nga ofertuesit tjerë të një vlerësimi të personalitetit, nder tjerash është edhe mënyra e vlerësimit; Ne përdorim një algoritëm të veçantë ndryshe nga të tjerët, dhe pyetjet që kemi përpiluar janë të azhurnuar për opinionin shqiptarë.
                        </div>
                      </div>
                    </div>
                    <div class="panel panel-default">
                      <div class="panel-heading" role="tab" id="headingTwo">
                        <h4 class="panel-title">
                          <a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                            A duhet të regjistrohem për të bërë vlerësimin  e personalitetit?
                          </a>
                        </h4>
                      </div>
                      <div id="collapseTwo" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingTwo">
                        <div class="panel-body">
                            Jo nuk duhet vlerësimin mund ta bëni falas dhe pa asnjë kusht. Por nëse dëshironi të ruani rezultatet mund të regjistrohuni pa pagës dhe llogaria do të jetë e mbrojtur dhe e qasshme vetëm nga ju. 
                        </div>
                      </div>
                    </div>
                    <div class="panel panel-default">
                      <div class="panel-heading" role="tab" id="headingThree">
                        <h4 class="panel-title">
                          <a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                            Kam marr rezultat tjetër pasi bërë vlerësimin edhe një here. Pse?
                          </a>
                        </h4>
                      </div>
                      <div id="collapseThree" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingThree">
                        <div class="panel-body">
                            Një rezultat ka shumë faktor, dhe rrjedhoja përse mund të paraqitet ndryshe nga vlerësimet të tjera. Ndër tjerash është gjuha, gjendja emocionale, dhe lloji i pyetjeve që paraqiten në atë moment. 
                        </div>
                      </div>
                    </div>
                    <div class="panel panel-default">
                        <div class="panel-heading" role="tab" id="headingfour">
                            <h4 class="panel-title">
                            <a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapsefour" aria-expanded="false" aria-controls="collapsefour">
                            A kam të drejtën të shpërndaj rezultatet e mia?
                            </a>
                            </h4>
                        </div>
                        <div id="collapsefour" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingfour">
                            <div class="panel-body">
                                    Patjetër, mund të shpërndani ku të doni, dhe sa të doni. Na kishit ndihmuar nëse kishit mundësi të shpërndajeni edhe linkun për në faqen personalitetet.com
                            </div>
                        </div>
                    </div>

                    <div class="panel panel-default">
                            <div class="panel-heading" role="tab" id="headingfive">
                              <h4 class="panel-title">
                                <a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapsefive" aria-expanded="false" aria-controls="collapsefive">
                                A i shitini të dhënat personale kompanive të tjera?
                                </a>
                              </h4>
                            </div>
                            <div id="collapsefive" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingfive">
                              <div class="panel-body">
                                    Jo assesi, të dhënat dhe rezultatet që bëhen në faqen tonë mbesin në një baze të të dhënave e cila është e mbrojtur nga shumë faktor dhe nuk mund të komprometohet. 
                              </div>
                            </div>
                    </div>
                    <div class="panel panel-default">
                            <div class="panel-heading" role="tab" id="headingsix">
                              <h4 class="panel-title">
                                <a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapsesix" aria-expanded="false" aria-controls="collapsesix">
                                Si është ruajtur fjalëkalimi imë?
                                </a>
                              </h4>
                            </div>
                            <div id="collapsesix" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingsix">
                              <div class="panel-body">
                                Fjalëkalimi juaj është e enkoduar, sipas faktorit SHA, atë fjalëkalim nuk mund të shohin as administratoret e faqes. Dhe është ruajtur në një baze të të dhënave pa qasje direket.
                              </div>
                            </div>
                    </div>
                    <div class="panel panel-default">
                            <div class="panel-heading" role="tab" id="headingseven">
                              <h4 class="panel-title">
                                <a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseSeven" aria-expanded="false" aria-controls="collapseSeven">
                                Sa mund t’i besoj këtij vlerësimi?
                                </a>
                              </h4>
                            </div>
                            <div id="collapseSeven" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingseven">
                              <div class="panel-body">
                                    Në jemi në kontakt të vazhdueshëm me psikolog të kësaj fushe dhe përmirësojmë pyetjet dhe algoritmin vazhdimisht. Vlerësimi nuk jep rezultat të saktë shkencore sa mund të jepet nga seanca të shumta me një psikolog të dedikuar për vlerësimin më të saktë të personalitetit por ne mund të japim një indikator të personalitetit bazuar nga pyetësori i dhënë.
                              </div>
                            </div>
                    </div>
                    <div class="panel panel-default">
                            <div class="panel-heading" role="tab" id="headingEight">
                              <h4 class="panel-title">
                                <a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseEight" aria-expanded="false" aria-controls="collapseEight">
                                A ruani të dhëna në kompjuterin time?
                                </a>
                              </h4>
                            </div>
                            <div id="collapseEight" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingEight">
                              <div class="panel-body">
                                    Në shfletuesin tuaj ruajmë të dhëna bazuar në rezultatet e juaja të vlerësimit që kanë dal nga pyetësori. Ato të dhëna fshihen pas një kohe por mund të hiqni edhe vetë, duke ju referuar mënyrës së si shfletuesi juaj ruan Cookies.  
                              </div>
                            </div>
                    </div>
                    <div class="panel panel-default">
                            <div class="panel-heading" role="tab" id="headingNine">
                              <h4 class="panel-title">
                                <a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseNine" aria-expanded="false" aria-controls="collapseNine">
                                    A mund të bëhem pjesë e ekipit punues?
                                </a>
                              </h4>
                            </div>
                            <div id="collapseNine" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingNine">
                              <div class="panel-body">
                                    Po mund të na kontaktoni në emalin info@personalitetet.com dhe të na tregoni përse dëshironi të jeni pjesë e ekipit punues dhe çfarë mund të na ofroni. Ne do të gëzohemi për me tepër interesues në këtë fushë. 
                              </div>
                            </div>
                    </div>

                  </div>
</div>
@endsection