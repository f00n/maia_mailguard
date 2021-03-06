<?php
    /*
     * $Id: welcome.php 538 2004-12-30 17:50:47Z dmorton $
     *
     * MAIA MAILGUARD LICENSE v.1.0
     *
     * Copyright 2004 by Robert LeBlanc <rjl@renaissoft.com>
     * All rights reserved.
     *
     * PREAMBLE
     *
     * This License is designed for users of Maia Mailguard
     * ("the Software") who wish to support the Maia Mailguard project by
     * leaving "Maia Mailguard" branding information in the HTML output
     * of the pages generated by the Software, and providing links back
     * to the Maia Mailguard home page.  Users who wish to remove this
     * branding information should contact the copyright owner to obtain
     * a Rebranding License.
     *
     * DEFINITION OF TERMS
     *
     * The "Software" refers to Maia Mailguard, including all of the
     * associated PHP, Perl, and SQL scripts, documentation files, graphic
     * icons and logo images.
     *
     * GRANT OF LICENSE
     *
     * Redistribution and use in source and binary forms, with or without
     * modification, are permitted provided that the following conditions
     * are met:
     *
     * 1. Redistributions of source code must retain the above copyright
     *    notice, this list of conditions and the following disclaimer.
     *
     * 2. Redistributions in binary form must reproduce the above copyright
     *    notice, this list of conditions and the following disclaimer in the
     *    documentation and/or other materials provided with the distribution.
     *
     * 3. The end-user documentation included with the redistribution, if
     *    any, must include the following acknowledgment:
     *
     *    "This product includes software developed by Robert LeBlanc
     *    <rjl@renaissoft.com>."
     *
     *    Alternately, this acknowledgment may appear in the software itself,
     *    if and wherever such third-party acknowledgments normally appear.
     *
     * 4. At least one of the following branding conventions must be used:
     *
     *    a. The Maia Mailguard logo appears in the page-top banner of
     *       all HTML output pages in an unmodified form, and links
     *       directly to the Maia Mailguard home page; or
     *
     *    b. The "Powered by Maia Mailguard" graphic appears in the HTML
     *       output of all gateway pages that lead to this software,
     *       linking directly to the Maia Mailguard home page; or
     *
     *    c. A separate Rebranding License is obtained from the copyright
     *       owner, exempting the Licensee from 4(a) and 4(b), subject to
     *       the additional conditions laid out in that license document.
     *
     * THIS SOFTWARE IS PROVIDED BY THE COPYRIGHT HOLDER AND CONTRIBUTORS
     * "AS IS" AND ANY EXPRESS OR IMPLIED WARRANTIES, INCLUDING, BUT NOT
     * LIMITED TO, THE IMPLIED WARRANTIES OF MERCHANTABILITY AND FITNESS
     * FOR A PARTICULAR PURPOSE ARE DISCLAIMED. IN NO EVENT SHALL THE
     * COPYRIGHT OWNER OR CONTRIBUTORS BE LIABLE FOR ANY DIRECT, INDIRECT,
     * INCIDENTAL, SPECIAL, EXEMPLARY, OR CONSEQUENTIAL DAMAGES (INCLUDING,
     * BUT NOT LIMITED TO, PROCUREMENT OF SUBSTITUTE GOODS OR SERVICES; LOSS
     * OF USE, DATA, OR PROFITS; OR BUSINESS INTERRUPTION) HOWEVER CAUSED AND
     * ON ANY THEORY OF LIABILITY, WHETHER IN CONTRACT, STRICT LIABILITY, OR
     * TORT (INCLUDING NEGLIGENCE OR OTHERWISE) ARISING IN ANY WAY OUT OF THE
     * USE OF THIS SOFTWARE, EVEN IF ADVISED OF THE POSSIBILITY OF SUCH DAMAGE.
     *
     */
    $lang['text_welcome_greeting'] = "Welkom bij Maia Mailguard!"; // says: Welcome to Maia Mailguard (Not all is Dutch yet!)
    $lang['text_welcome_first_time'] = "Welkom bij Maia Mailguard. Zo te zien is dit de eerste keer dat u hier inlogt. Neemt u even de tijd dit bericht helemaal te lezen,
                                        het zal u helpen te begrijpen hoe u kunt helpen in de strijd tegen ongewenste mail (SPAM).</p><p>Allereerst, om snel het spamfilter aan te zetten, selecteer een gewenst niveau van bescherming en klik op 'Wijzig niveau'. Let op: Niveau 'Hoog' is 
                                        volkomen veilig! Bovendien is deze aanbevolen. Kijk in de instellingen pagina om te zien welk effect een niveau heeft.</p><p>Maia Mailguard kan mail filteren en kan het gros van ongewenste mail tegenhouden voor het in uw mailbox belandt. Indien het systeem zich vergist, is het nog
                                        niet verloren, dankzij Maia Mailguard. Maia kan de mail in quarantaine plaatsen, waarna het toegankelijk wordt via deze pagina. U kunt vervolgens de e-mail reviewen en indien gewenst 'herstellen', ofwel
                                        alsnog af laten leveren, of rapporteren als SPAM aan betreffende autoriteiten. Tevens is er de mogelijkheid het filter te trainen. Als Spam onverhoopt toch doorgelaten wordt, komt het in de 'non-spam-buffer' (waar mail wordt opgeslagen dat niet als Spam is
                                        aangemerkt door het systeem). Indien hier dus een Spam bericht in is gekomen, kunt u deze alsnog als SPAM rapporteren.</p>";
    $lang['text_welcome_intro'] = "<p>Onderneem ook actie in de voortdurende strijd tegen ongewenste email met Maia Mailguard.  Als er mail staat in het overzicht rechtsonder, kan je
                                    Maia trainen in het herkennen van goede ('non-spam') en slechte ('spam') mail. Neem ajb de tijd om jezelf ervan te verzekeren dat alle berichten
                                    correct gerapporteerd zijn; indien u geen tijd hebt / wilt nemen, verwijder ze dan uit het overzicht in plaats van ze klakkeloos te rapporteren als non-spam of spam.<br>
                                    </p>
                                    <p>Houd in gedachten dat Maia de berichten, die als spam worden bevestigd, ZAL rapporteren aan derden
                                    (betreffende diensten en autoriteiten). Door actief deel te nemen helpt u mee in de strijd tegen spam.</p>";
    $lang['text_welcome_current_level'] = "Huidig beschermingsniveau:"; 
    $lang['text_welcome_custom_level'] = "**Aangepaste waarden ingevoerd:<br>Kijk in het instellingen scherm voor de waarden en te beheren, of kies een standaard niveau hier.";
    $lang['header_cache_contents'] = "Buffer Inhoud";

    $lang['text_suspected_spam_item']= "Vermeende Spam:";
    $lang['text_suspected_ham_item'] = "Vermeende non-spam (=niet-spam):";
    $lang['text_virus_item'] =  "Virus/Malware:";
    $lang['text_banned_file_item'] =  "Geweigerde bestanden:";
    $lang['text_bad_header_item'] =  "Berichten met malafide headers:";

    $lang['text_welcome_spam_blocked'] = "SPAM berichten zijn voor u geblokkeerd";
    $lang['text_welcome_virus_blocked'] = "Virussen zijn voor u tegengehouden";
    $lang['text_welcome_spam_blocked_system'] = "Spam berichten geblokkeerd, systeembreed";
    $lang['text_welcome_virus_blocked_system'] = "Virussen geblokkeerd, systeembreed";
    $lang['button_delete_all_items'] = "Verwijder alle berichten";
    $lang['button_change_protection'] = "Wijzig Niveau (zie instellingen voor waarden)";
    
    $lang['radio_protection'] = array(  'off' => "Uit",
                                        'low' => "Laag",
                                        'medium' => "Gemiddeld",
                                        'high' => "Hoog",
                                        'custom' => "Aangepast");
    
    $lang['banner_subtitle'] = "Welkom";
    
    $lang['text_cache_spam'] = "Er zitten <b>%d</b> berichten in uw spam buffer.  <br>Klik <a href=\"%s\">hier</a> om deze te rapporteren of abusievelijk als spam gemarkeerde post alsnog af te leveren.";
    $lang['text_cache_virus'] = "Er zitten <b>%d</b> berichten in uw virus buffer.  <br>Klik <a href=\"%s\">hier</a> om te verwijderen of om te herstellen indien abusievelijk geblokkerd.";
    $lang['text_cache_banned'] = "Er zitten <b>%d</b> berichten in uw geweigerde-bestanden buffer.  <br>Klik <a href=\"%s\">hier</a> om te verwijderen of alsnog af te leveren.";
    
    $lang['text_cache_header'] = "Er zitten <b>%d</b> berichten in uw 'malafide header' buffer.  <br>Klik <a href=\"%s\">hier</a> om te verwijderen of alsnog af te leveren.";
    $lang['text_cache_ham'] = "Er zitten <b>%d</b> berichten in uw non-spam ('niet-spam') buffer.  <br>Klik <a href=\"%s\">hier</a> om het filter te trainen of gemiste spam te rapporteren.";
    $lang['action_ham_cache']   = "Rapporteer/Bevestig";
    $lang['action_spam_cache']  = "Rapporteer/Herstel";
    $lang['action_virus_cache'] = "Verwijder/Herstel";
    $lang['action_banned_cache'] = "Verwijder/Herstel";
    $lang['action_header_cache'] = "Verwijder/Herstel";
?>
