<?php
$filNavn = basename(__FILE__, '.php');
include("header.php");
?>
            <div class="topslider">
                <div class="container">
                    <div class="row sliderIndhold">
                        <div class="col s12 m12 l12">
                            <h1 class="sliderOverskrift">Kommunalvalg '17</h1>
                            <div class="findValgsted">Find dit nærmeste valgsted</div>
                        </div>
                    </div>
                </div>
                <div class="oel oelAnim"></div>
            </div>
            <div class="skumBund"></div>
            <div class="container stemmeLokation">
                <div class="row">
                    <div class="col s12 m12 l12">
                        <h1>Find dit nærmeste valgsted</h1>
                        <form action="" method="post" class="lokationForm">
                            <input type="number" name="postnr" data-validation="length" data-validation-length="4" placeholder="Indtast dit postnummer" data-validation-error-msg="Postnummeret skal være 4 tegn." required>
                            <input type="submit" value="Søg" name="findLokation">
                        </form>
                    </div>
                </div>
            </div>
            <div class="container top">
                <div class="row">
                    <div class="col s12 m8 l8 hvad">
                        <h1>HVORFOR ER DET NICE AT STEMME?</h1>
                        <p class="flow-text">
                            FORDI…..
                            Du får muligheden for at få 50% rabat på Grøn Koncert biletter 2018,
                            det er også muligt at vinde dem gratis, hvis du deltager i vores Instagram
                            Konkurrence – læs mere her! Derudover kan du slukke tørsten efter din
                            stemme ved at snuppe en gratis fadøl ved udgangen ved dit nærmeste valgsted.
                            Så KOM NED og stem for faén og skål med vennerne efter!
                        </p>
                        <h1>Hvad fuck er valg?</h1>
                        <p class="flow-text">Kommunalvalg bør interessere dig, hvis du ønsker flere billige ungdomsboliger i din kommune. Federe skaterbaner, sportsmuligheder og flere mødesteder, hvor i kan hænge ud. Bedre og større parkeringspladser til din øse, og ikke mindst flottere cykelstier, så turen bliver meget federe. Hvis du er træt af for få busforbindelser og for høje priser, og hvis du mangler et fritidsjob tæt på dit hjem! Hvis du uheldigvis står uden hjem eller har været igennem misbrug eller et liv i kriminalitet, så vil din indflydelse på kommunalvalget kunne gøre en forskel på de her ting ud af mange mange flere!</p>
                    </div>
                    <div class="col s12 m4 l4 info">
                        <?php
                            hentCitat($link);
                        ?>

                        <div class="gronBillet">
                            <div class="billetArtister">
                                <div class="billetArtister--overskrift">Grøn Koncert 20.-30. juli</div>
                                <div class="billetArtister--artist">Rasmus<br>Seebach</div>
                                <div class="billetArtister--artist">L.O.C.</div>
                                <div class="billetArtister--artist">Christopher</div>
                                <div class="billetArtister--artist">Scarlet Pleasure</div>
                                <div class="billetArtister--artist">S!vas//Ukendt<br>Kunstner</div>
                                <div class="billetArtister--artist">The Minds of 99</div>
                            </div>
                            <div class="billetBy">
                                <div class="billetBy--venstre">Denne billet gælder til:<br> torsdag den 20. Juli</div>
                                <div class="billetBy--hoejre">KØBENHAVN</div>
                                <div class="billetBy--clear"></div>
                            </div>
                            <div class="billetBund">
                                <div class="billetBund--overskrift">Forsalgsbillet i 7-eleven <span class="billetBund--overskrift--divider">l</span> kr. 250</div>
                                <div class="billetBund--info">&middot; Pladsen er åben fra kl. 13.00 - 21.30</div>
                                <div class="billetBund--venstre">&middot; Børn under 8 år<br>&nbsp;&nbsp;kommer gratis ind<br>
                                &middot; Billetten kan ikke<br>&nbsp;&nbsp;refunderes</div>
                                <div class="billetBund--hoejre"><img src="http://barcode.tec-it.com/barcode.ashx?data=BI0165C3B515&code=Code128&dpi=96"></div>
                                <div class="billetBund--clear"></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="container">
                <div class="row">
                    <div class="col s12 m12 l12 seneste">
                        <h2>#FADBAMSEVALG17</h2>
                    </div>
                </div>
                <div class="row">
                    <div class="col s12 m12 l4 insta">
                        <blockquote class="instagram-media" data-instgrm-captioned data-instgrm-version="7" style=" background:#FFF; border:0; border-radius:3px; box-shadow:0 0 1px 0 rgba(0,0,0,0.5),0 1px 10px 0 rgba(0,0,0,0.15); margin: 1px; max-width:658px; padding:0; width:99.375%; width:-webkit-calc(100% - 2px); width:calc(100% - 2px);"><div style="padding:8px;"> <div style=" background:#F8F8F8; line-height:0; margin-top:40px; padding:50.0% 0; text-align:center; width:100%;"> <div style=" background:url(data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAACwAAAAsCAMAAAApWqozAAAABGdBTUEAALGPC/xhBQAAAAFzUkdCAK7OHOkAAAAMUExURczMzPf399fX1+bm5mzY9AMAAADiSURBVDjLvZXbEsMgCES5/P8/t9FuRVCRmU73JWlzosgSIIZURCjo/ad+EQJJB4Hv8BFt+IDpQoCx1wjOSBFhh2XssxEIYn3ulI/6MNReE07UIWJEv8UEOWDS88LY97kqyTliJKKtuYBbruAyVh5wOHiXmpi5we58Ek028czwyuQdLKPG1Bkb4NnM+VeAnfHqn1k4+GPT6uGQcvu2h2OVuIf/gWUFyy8OWEpdyZSa3aVCqpVoVvzZZ2VTnn2wU8qzVjDDetO90GSy9mVLqtgYSy231MxrY6I2gGqjrTY0L8fxCxfCBbhWrsYYAAAAAElFTkSuQmCC); display:block; height:44px; margin:0 auto -44px; position:relative; top:-22px; width:44px;"></div></div> <p style=" margin:8px 0 0 0; padding:0 4px;"> <a href="https://www.instagram.com/p/BUZZpy7Dwak/" style=" color:#000; font-family:Arial,sans-serif; font-size:14px; font-style:normal; font-weight:normal; line-height:17px; text-decoration:none; word-wrap:break-word;" target="_blank">#fadbamsevalg17</a></p> <p style=" color:#c9c8cd; font-family:Arial,sans-serif; font-size:14px; line-height:17px; margin-bottom:0; margin-top:8px; overflow:hidden; padding:8px 0 7px; text-align:center; text-overflow:ellipsis; white-space:nowrap;">A post shared by Fadbamsevalg17 (@fadbamsevalg) on <time style=" font-family:Arial,sans-serif; font-size:14px; line-height:17px;" datetime="2017-05-22T13:49:18+00:00">May 22, 2017 at 6:49am PDT</time></p></div></blockquote> <script async defer src="//platform.instagram.com/en_US/embeds.js"></script>
                    </div>
                    <div class="col s12 m12 l4 insta">
                        <blockquote class="instagram-media" data-instgrm-captioned data-instgrm-version="7" style=" background:#FFF; border:0; border-radius:3px; box-shadow:0 0 1px 0 rgba(0,0,0,0.5),0 1px 10px 0 rgba(0,0,0,0.15); margin: 1px; max-width:658px; padding:0; width:99.375%; width:-webkit-calc(100% - 2px); width:calc(100% - 2px);"><div style="padding:8px;"> <div style=" background:#F8F8F8; line-height:0; margin-top:40px; padding:50.0% 0; text-align:center; width:100%;"> <div style=" background:url(data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAACwAAAAsCAMAAAApWqozAAAABGdBTUEAALGPC/xhBQAAAAFzUkdCAK7OHOkAAAAMUExURczMzPf399fX1+bm5mzY9AMAAADiSURBVDjLvZXbEsMgCES5/P8/t9FuRVCRmU73JWlzosgSIIZURCjo/ad+EQJJB4Hv8BFt+IDpQoCx1wjOSBFhh2XssxEIYn3ulI/6MNReE07UIWJEv8UEOWDS88LY97kqyTliJKKtuYBbruAyVh5wOHiXmpi5we58Ek028czwyuQdLKPG1Bkb4NnM+VeAnfHqn1k4+GPT6uGQcvu2h2OVuIf/gWUFyy8OWEpdyZSa3aVCqpVoVvzZZ2VTnn2wU8qzVjDDetO90GSy9mVLqtgYSy231MxrY6I2gGqjrTY0L8fxCxfCBbhWrsYYAAAAAElFTkSuQmCC); display:block; height:44px; margin:0 auto -44px; position:relative; top:-22px; width:44px;"></div></div> <p style=" margin:8px 0 0 0; padding:0 4px;"> <a href="https://www.instagram.com/p/BUZZpy7Dwak/" style=" color:#000; font-family:Arial,sans-serif; font-size:14px; font-style:normal; font-weight:normal; line-height:17px; text-decoration:none; word-wrap:break-word;" target="_blank">#fadbamsevalg17</a></p> <p style=" color:#c9c8cd; font-family:Arial,sans-serif; font-size:14px; line-height:17px; margin-bottom:0; margin-top:8px; overflow:hidden; padding:8px 0 7px; text-align:center; text-overflow:ellipsis; white-space:nowrap;">A post shared by Fadbamsevalg17 (@fadbamsevalg) on <time style=" font-family:Arial,sans-serif; font-size:14px; line-height:17px;" datetime="2017-05-22T13:49:18+00:00">May 22, 2017 at 6:49am PDT</time></p></div></blockquote> <script async defer src="//platform.instagram.com/en_US/embeds.js"></script>
                    </div>
                    <div class="col s12 m12 l4 insta">
                        <blockquote class="instagram-media" data-instgrm-captioned data-instgrm-version="7" style=" background:#FFF; border:0; border-radius:3px; box-shadow:0 0 1px 0 rgba(0,0,0,0.5),0 1px 10px 0 rgba(0,0,0,0.15); margin: 1px; max-width:658px; padding:0; width:99.375%; width:-webkit-calc(100% - 2px); width:calc(100% - 2px);"><div style="padding:8px;"> <div style=" background:#F8F8F8; line-height:0; margin-top:40px; padding:50.0% 0; text-align:center; width:100%;"> <div style=" background:url(data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAACwAAAAsCAMAAAApWqozAAAABGdBTUEAALGPC/xhBQAAAAFzUkdCAK7OHOkAAAAMUExURczMzPf399fX1+bm5mzY9AMAAADiSURBVDjLvZXbEsMgCES5/P8/t9FuRVCRmU73JWlzosgSIIZURCjo/ad+EQJJB4Hv8BFt+IDpQoCx1wjOSBFhh2XssxEIYn3ulI/6MNReE07UIWJEv8UEOWDS88LY97kqyTliJKKtuYBbruAyVh5wOHiXmpi5we58Ek028czwyuQdLKPG1Bkb4NnM+VeAnfHqn1k4+GPT6uGQcvu2h2OVuIf/gWUFyy8OWEpdyZSa3aVCqpVoVvzZZ2VTnn2wU8qzVjDDetO90GSy9mVLqtgYSy231MxrY6I2gGqjrTY0L8fxCxfCBbhWrsYYAAAAAElFTkSuQmCC); display:block; height:44px; margin:0 auto -44px; position:relative; top:-22px; width:44px;"></div></div> <p style=" margin:8px 0 0 0; padding:0 4px;"> <a href="https://www.instagram.com/p/BUZZpy7Dwak/" style=" color:#000; font-family:Arial,sans-serif; font-size:14px; font-style:normal; font-weight:normal; line-height:17px; text-decoration:none; word-wrap:break-word;" target="_blank">#fadbamsevalg17</a></p> <p style=" color:#c9c8cd; font-family:Arial,sans-serif; font-size:14px; line-height:17px; margin-bottom:0; margin-top:8px; overflow:hidden; padding:8px 0 7px; text-align:center; text-overflow:ellipsis; white-space:nowrap;">A post shared by Fadbamsevalg17 (@fadbamsevalg) on <time style=" font-family:Arial,sans-serif; font-size:14px; line-height:17px;" datetime="2017-05-22T13:49:18+00:00">May 22, 2017 at 6:49am PDT</time></p></div></blockquote> <script async defer src="//platform.instagram.com/en_US/embeds.js"></script>
                    </div>
                </div>
            </div>
<?php
include("footer.php");
?>