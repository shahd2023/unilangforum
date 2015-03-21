<?php
/**
*
* This file is part of the phpBB Forum Software package.
*
* @copyright (c) phpBB Limited <https://www.phpbb.com>
* @license GNU General Public License, version 2 (GPL-2.0)
*
* For full copyright and license information, please see
* the docs/CREDITS.txt file.
*
 * CONTRIBUTORS - START
*
 *
 * ANČI - START
 * <NE izbrisuj i NE mijenjaj!>
* <!-- Danas će biti toplo i sunčano. -->
* @author Croatian language pack [Hrvatski jezični paket] (c) 2003-3003 Ančica Sečan
* http://ancica.sunceko.net
* <!-- Danas će biti toplo i sunčano. -->
* Ovaj prijevod, s engleskog [originalna verzija] na hrvatski,
* u potpunosti, napravila je Ančica Sečan.
* U kompletu, s prijevodom, dolaze i lokalizirane sličke.
* <!-- Danas će biti toplo i sunčano. -->
 * </NE izbrisuj i NE mijenjaj!>
 * ANČI - END
 *
*
 * CONTRIBUTORS - END
*
*/
/**
* DO NOT CHANGE
*/
if (!defined('IN_PHPBB'))
{
exit;
}

if (empty($lang) || !is_array($lang))
{
$lang = array();
}
$lang = array_merge($lang, array(
'ACTION'=>'Radnja',
'ACTION_NOTE'=>'Radnja/Bilješka',
'ADD_FEEDBACK'=>'Slanje povratnog odgovora',
'ADD_FEEDBACK_EXPLAIN'=>'Ukoliko želiš napisati nešto vezano uz gornje, ispuni donju formu.<br />Koristi običan [plain] tekst jer HTML, BBKod i sl. nisu dopušteni.',
'ADD_WARNING'=>'Upozoravanje korisnika/ca',
'ADD_WARNING_EXPLAIN'=>'Ukoliko želiš upozoriti korisnika/cu, ispuni donju formu.<br />Koristi običan [plain] tekst jer HTML, BBKod i sl. nisu dopušteni.',
'ALL_ENTRIES'=>'Svi upisi',
'ALL_NOTES_DELETED'=>'Bilješke su izbrisane.',
'ALL_REPORTS'=>'Sve prijave',
'ALREADY_REPORTED'=>'Post je već prijavljen.',
'ALREADY_REPORTED_PM'=>'Privatna poruka je već prijavljena.',
'ALREADY_WARNED'=>'Upozorenje za ovaj post je već dano.',
'APPROVE'=>'Odobri',
'APPROVE_POST'=>'Odobri post',
'APPROVE_POST_CONFIRM'=>'Jesi li siguran/na da želiš odobriti post?',
'APPROVE_POSTS'=>'Odobri postove',
'APPROVE_POSTS_CONFIRM'=>'Jesi li siguran/na da želiš odobriti postove?',
'APPROVE_TOPIC'=>'Odobri temu',
'APPROVE_TOPIC_CONFIRM'=>'Jesi li siguran/na da želiš odobriti temu?',
'APPROVE_TOPICS'=>'Odobri teme',
'APPROVE_TOPICS_CONFIRM'=>'Jesi li siguran/na da želiš odobriti teme?',
// <!-- Kocka je hičena! -->
'CANNOT_MOVE_SAME_FORUM'=>'Temu ne možeš premjestiti u forum u kojem se već nalazi.',
'CANNOT_WARN_ANONYMOUS'=>'Gosta/e ne možeš upozoriti.',
'CANNOT_WARN_SELF'=>'Samog/u sebe ne možeš upozoriti.',
'CAN_LEAVE_BLANK'=>'Može ostati praznim.',
'CHANGE_POSTER'=>'Promijeni autora/icu',
'CLOSE_PM_REPORT'=>'Zaključi prijavu',
'CLOSE_PM_REPORT_CONFIRM'=>'Jesi li siguran/na da želiš zaključiti prijavu?',
'CLOSE_PM_REPORTS'=>'Zaključi prijave',
'CLOSE_PM_REPORTS_CONFIRM'=>'Jesi li siguran/na da želiš zaključiti prijave?',
'CLOSE_REPORT'=>'Zaključi prijavu',
'CLOSE_REPORT_CONFIRM'=>'Jesi li siguran/na da želiš zaključiti prijavu?',
'CLOSE_REPORTS'=>'Zaključi prijave',
'CLOSE_REPORTS_CONFIRM'=>'Jesi li siguran/na da želiš zaključiti prijave?',
'DELETE_PM_REPORT'=>'Izbriši prijavu',
'DELETE_PM_REPORT_CONFIRM'=>'Jesi li siguran/na da želiš izbrisati prijavu?',
'DELETE_PM_REPORTS'=>'Izbriši prijave',
'DELETE_PM_REPORTS_CONFIRM'=>'Jesi li siguran/na da želiš izbrisati prijave?',
'DELETE_POSTS'=>'Izbriši postove',
//'DELETE_POSTS_CONFIRM'=>'Jesi li siguran/na da želiš izbrisati postove?',
//'DELETE_POST_CONFIRM'=>'Jesi li siguran/na da želiš izbrisati post?',
'DELETE_REPORT'=>'Izbriši prijavu',
'DELETE_REPORT_CONFIRM'=>'Jesi li siguran/na da želiš izbrisati prijavu?',
'DELETE_REPORTS'=>'Izbriši prijave',
'DELETE_REPORTS_CONFIRM'=>'Jesi li siguran/na da želiš izbrisati prijave?',
'DELETE_SHADOW_TOPIC'=>'Izbriši “posjenčanu” temu',
'DELETE_TOPICS'=>'Izbriši teme',
//'DELETE_TOPICS_CONFIRM'=>'Jesi li siguran/na da želiš izbrisati teme?',
//'DELETE_TOPIC_CONFIRM'=>'Jesi li siguran/na da želiš izbrisati temu?',
'DISAPPROVE'=>'Neodobri',
'DISAPPROVE_REASON'=>'Razlog neodobrenja',
'DISAPPROVE_POST'=>'Neodobri post',
'DISAPPROVE_POST_CONFIRM'=>'Jesi li siguran/na da želiš neodobriti post?',
'DISAPPROVE_POSTS'=>'Neodobri postove',
'DISAPPROVE_POSTS_CONFIRM'=>'Jesi li siguran/na da želiš neodobriti postove?',
'DISPLAY_LOG'=>'Prikaži zapise',
'DISPLAY_OPTIONS'=>'Opcije prikaza',
'EMPTY_REPORT'=>'Prilikom izbora razloga, trebaš navesti [i] objašnjenje.',
'EMPTY_TOPICS_REMOVED_WARNING'=>'Jedna ili više tema su izbrisane iz baze jer su bile/ostale prazne.',
'FEEDBACK'=>'Povratni odgovor(i)',
'FORK'=>'Kopiraj',
'FORK_TOPIC'=>'Kopiraj temu',
'FORK_TOPIC_CONFIRM'=>'Jesi li siguran/na da želiš kopirati temu?',
'FORK_TOPICS'=>'Kopiraj označene teme',
'FORK_TOPICS_CONFIRM'=>'Jesi li siguran/na da želiš kopirati teme?',
'FORUM_DESC'=>'Opis',
'FORUM_NAME'=>'Naziv',
'FORUM_NOT_EXIST'=>'Forum koji si izabrao/la ne postoji.',
'FORUM_NOT_POSTABLE'=>'Po forumu koji si izabrao/la se ne može postati.',
'FORUM_STATUS'=>'Status',
'FORUM_STYLE'=>'Stil',
'GLOBAL_ANNOUNCEMENT'=>'Globalna obavijest',
'IP_INFO'=>'IP info',
'IPS_POSTED_FROM'=>'[Ostale] IP adrese s kojih je ovaj/ova član/ica postao/la',
// <!-- Kocka je hičena! -->
'LATEST_LOGS'=>'Zadnjih 5 zapisanih radnji',
'LATEST_REPORTED'=>'Zadnjih 5 prijava',
'LATEST_REPORTED_PMS'=>'Zadnjih 5 prijava [PP]',
'LATEST_UNAPPROVED'=>'Zadnjih 5 postova koji čekaju odobrenje',
'LATEST_WARNING_TIME'=>'Zadnje dano upozorenje',
'LATEST_WARNINGS'=>'Zadnjih 5 upozorenja',
'LEAVE_SHADOW'=>'Neka tema/e ostane/u i u starom forumu.',
//'LIST_REPORT'=>'1 prijava',
//'LIST_REPORTS'=>'%d prijava/e',
'LIST_REPORTS'=> array(
1=>'%d prijava',
2=>'%d prijave',
3=>'%d prijava',
),
'LOCK'=>'Zaključaj',
'LOCK_POST_POST'=>'Zaključaj post',
'LOCK_POST_POST_CONFIRM'=>'Jesi li siguran/na da želiš zaključati [onemogućiti naknadno uređivanje] post?',
'LOCK_POST_POSTS'=>'Zaključaj post(ove)',
'LOCK_POST_POSTS_CONFIRM'=>'Jesi li siguran/na da želiš zaključati [onemogućiti naknadno uređivanje] postove?',
'LOCK_TOPIC_CONFIRM'=>'Jesi li siguran/na da želiš zaključati temu?',
'LOCK_TOPICS'=>'Zaključaj teme',
'LOCK_TOPICS_CONFIRM'=>'Jesi li siguran/na da želiš zaključati teme?',
'LOGS_CURRENT_TOPIC'=>'Pregledava zapisa od:',
'LOGIN_EXPLAIN_MCP'=>'Za moderiranje foruma, trebaš se prijaviti.',
'LOGVIEW_VIEWTOPIC'=>'Pogledaj temu',
'LOGVIEW_VIEWLOGS'=>'Pogledaj zapise',
'LOGVIEW_VIEWFORUM'=>'Pogledaj forum',
'LOOKUP_ALL'=>'Potraži sve IP adrese',
'LOOKUP_IP'=>'Potraži IP adresu',
'MARKED_NOTES_DELETED'=>'Bilješke su izbrisane.',
'MCP_ADD'=>'Upozori',
'MCP_BAN'=>'Isključivanje',
'MCP_BAN_EMAILS'=>'Adrese elektroničke pošte',
'MCP_BAN_IPS'=>'IP adrese',
'MCP_BAN_USERNAMES'=>'Korisnička imena',
'MCP_LOGS'=>'Zapisi',
'MCP_LOGS_FRONT'=>'Naslovna',
'MCP_LOGS_FORUM_VIEW'=>'Zapisi foruma',
'MCP_LOGS_TOPIC_VIEW'=>'Zapisi tema',
'MCP_MAIN'=>'Početna',
'MCP_MAIN_FORUM_VIEW'=>'Forumi',
'MCP_MAIN_FRONT'=>'Naslovna',
'MCP_MAIN_POST_DETAILS'=>'Detalji posta',
'MCP_MAIN_TOPIC_VIEW'=>'Teme',
'MCP_MAKE_ANNOUNCEMENT'=>'Promijeni u “Obavijest”',
'MCP_MAKE_ANNOUNCEMENT_CONFIRM'=>'Jesi li siguran/na da temu želiš promijeniti u “Obavijest”?',
'MCP_MAKE_ANNOUNCEMENTS'=>'Promijeni u “Obavijesti”',
'MCP_MAKE_ANNOUNCEMENTS_CONFIRM'=>'Jesi li siguran/na da teme želiš promijeniti u “Obavijesti”?',
'MCP_MAKE_GLOBAL'=>'Promijeni u “Globalnu obavijest”',
'MCP_MAKE_GLOBAL_CONFIRM'=>'Jesi li siguran/na da temu želiš promijeniti u “Globalnu obavijest”?',
'MCP_MAKE_GLOBALS'=>'Promijeni u “Globalne obavijesti”',
'MCP_MAKE_GLOBALS_CONFIRM'=>'Jesi li siguran/na da teme želiš promijeniti u “Globalne obavijesti”?',
'MCP_MAKE_STICKY'=>'Promijeni u “Važno”',
'MCP_MAKE_STICKY_CONFIRM'=>'Jesi li siguran/na da temu želiš promijeniti u “Važno”?',
'MCP_MAKE_STICKIES'=>'Promijeni u “Važno”',
'MCP_MAKE_STICKIES_CONFIRM'=>'Jesi li siguran/na da teme želiš promijeniti u “Važno”?',
'MCP_MAKE_NORMAL'=>'Promijeni u “Normalnu temu”',
'MCP_MAKE_NORMAL_CONFIRM'=>'Jesi li siguran/na da temu želiš promijeniti u “Normalnu temu”?',
'MCP_MAKE_NORMALS'=>'Promijeni u “Normalne teme”',
'MCP_MAKE_NORMALS_CONFIRM'=>'Jesi li siguran/na da teme želiš promijeniti u “Normalne teme”?',
'MCP_NOTES'=>'Korisnici/e',
'MCP_NOTES_FRONT'=>'Naslovna',
'MCP_NOTES_USER'=>'Detalji',
'MCP_POST_REPORTS'=>'Prijave vezane uz post',
'MCP_PM_REPORTS'=>'Prijave',
'MCP_PM_REPORT_DETAILS'=>'Detalji',
'MCP_PM_REPORTS_CLOSED'=>'Zaključene prijave [PP]',
'MCP_PM_REPORTS_CLOSED_EXPLAIN'=>'Lista prijava privatnih poruka koje su obrađene.',
'MCP_PM_REPORTS_OPEN'=>'Otvorene prijave [PP]',
'MCP_PM_REPORTS_OPEN_EXPLAIN'=>'Lista prijava privatnih poruka koje treba obraditi.',
'MCP_REPORTS'=>'Prijave',
'MCP_REPORT_DETAILS'=>'Detalji',
'MCP_REPORTS_CLOSED'=>'Zaključene prijave',
'MCP_REPORTS_CLOSED_EXPLAIN'=>'Lista prijava postova koje su obrađene.',
'MCP_REPORTS_OPEN'=>'Otvorene prijave',
'MCP_REPORTS_OPEN_EXPLAIN'=>'Lista prijava postova koje treba obraditi.',
'MCP_QUEUE'=>'Odobrenja',
'MCP_QUEUE_APPROVE_DETAILS'=>'Odobri detalje',
'MCP_QUEUE_UNAPPROVED_POSTS'=>'Postovi',
'MCP_QUEUE_UNAPPROVED_POSTS_EXPLAIN'=>'Lista postova koji čekaju odobrenje prije negoli postanu vidljivi ostalim korisnicima/ama.',
'MCP_QUEUE_UNAPPROVED_TOPICS'=>'Teme',
'MCP_QUEUE_UNAPPROVED_TOPICS_EXPLAIN'=>'Lista tema koje čekaju odobrenje prije negoli postanu vidljive ostalim korisnicima/ama.',
'MCP_QUEUE_DELETED_POSTS'=>'Izbrisani postovi',
'MCP_QUEUE_DELETED_POSTS_EXPLAIN'=>'Lista “prividno” izbrisanih postova. Možeš ih vratiti ili trajno izbrisati.',
'MCP_QUEUE_DELETED_TOPICS'=>'Izbrisane teme',
'MCP_QUEUE_DELETED_TOPICS_EXPLAIN'=>'Lista “prividno” izbrisanih tema. Možeš ih vratiti ili trajno izbrisati.',
'MCP_VIEW_USER'=>'Upozorenja određenom/oj korisniku/ci',
'MCP_WARN'=>'Upozorenja',
'MCP_WARN_FRONT'=>'Naslovna',
// <!-- Kocka je hičena! -->
'MCP_WARN_LIST'=>'Lista upozorenja',
'MCP_WARN_POST'=>'Upozorenja za određen post',
'MCP_WARN_USER'=>'Upozori',
//'MERGE_POSTS'=>'Spoji postove',
'MERGE_POSTS_CONFIRM'=>'Jesi li siguran/na da želiš spojiti postove?',
'MERGE_TOPIC_EXPLAIN'=>'Korištenjem donje forme možeš spojiti označene postove - pripojiti ih drugoj temi.<br />Postovi će biti pripojeni novoj temi na način da će izgledati kao da su tamo originalno postani.<br />Za izbor odredišne teme, trebaš upisati ID teme ili kliknuti na “Izaberi temu”.',
'MERGE_TOPIC_ID'=>'ID odredišne teme',
'MERGE_TOPICS'=>'Spoji teme',
'MERGE_TOPICS_CONFIRM'=>'Jesi li siguran/na da želiš spojiti teme?',
'MODERATE_FORUM'=>'Moderiranje tematskih foruma',
'MODERATE_TOPIC'=>'Moderiranje tema',
'MODERATE_POST'=>'Moderiranje postova',
'MOD_OPTIONS'=>'Moderatorske opcije',
'MORE_INFO'=>'Daljnje informacije',
'MOST_WARNINGS'=>'Korisnici/e s najviše upozorenja',
'MOVE_TOPIC_CONFIRM'=>'Jesi li siguran/na da želiš premjestiti temu u drugi forum?',
'MOVE_TOPICS'=>'Premjesti teme',
'MOVE_TOPICS_CONFIRM'=>'Jesi li siguran/na da želiš premjestiti teme u drugi forum?',
'NOTIFY_POSTER_APPROVAL'=>'Obavijesti autora/icu o odobrenju.',
'NOTIFY_POSTER_DISAPPROVAL'=>'Obavijesti autora/icu o neodobrenju.',
'NOTIFY_USER_WARN'=>'Obavijesti korisnika/cu o upozorenju.',
'NOT_MODERATOR'=>'Nisi moderator/ica ovog foruma.',
'NO_DESTINATION_FORUM'=>'Izaberi odredišni forum.',
'NO_DESTINATION_FORUM_FOUND'=>'Nema dostupnog odredišnog foruma.',
//'NO_ENTRIES'=>'Nema zapisa za ovaj period.',
'NO_ENTRIES'=>'Nema zapisa.',
'NO_FEEDBACK'=>'Nema povratnih odgovora za ovog/u korisnika/cu.',
'NO_FINAL_TOPIC_SELECTED'=>'Za spajanje postova, trebaš izabrati odredišnu temu.',
'NO_MATCHES_FOUND'=>'Ništa nije pronađeno.',
'NO_POST'=>'Izaberi post ukoliko želiš upozoriti korisnika/cu zbog posta.',
'NO_POST_REPORT'=>'Ovaj post nije prijavljen.',
'NO_POST_SELECTED'=>'Za izvršenje radnje, izaberi/odaberi najmanje jedan post.',
'NO_POSTS_DELETED'=>'Nema izbrisanih postova.',
'NO_POSTS_QUEUE'=>'Nema postova koji čekaju odobrenje.',
'NO_REASON_DISAPPROVAL'=>'Razlog neodobravanja treba biti smislen.',
'NO_REPORT'=>'Nema prijave.',
'NO_REPORTS'=>'Nema prijava.',
'NO_REPORT_SELECTED'=>'Za izvršenje radnje, izaberi/odaberi najmanje jednu prijavu.',
'NO_TOPIC_ICON'=>'/',
'NO_TOPIC_SELECTED'=>'Za izvršenje radnje, izaberi/odaberi najmanje jednu temu.',
'NO_TOPICS_DELETED'=>'Nema izbrisanih tema.',
'NO_TOPICS_QUEUE'=>'Nema tema koje čekaju odobrenje.',
'ONLY_TOPIC'=>'Samo tema/u “%s”',
'OTHER_USERS'=>'Korisnici/e koji/e [su] posta(li)ju s ove IP adrese',
'QUICKMOD_ACTION_NOT_ALLOWED'=> "%s nije dopušten/a/o kao <em>quickmod</em>",
'PM_REPORT_CLOSED_SUCCESS'=>'Prijava je zaključena.',
'PM_REPORT_DELETED_SUCCESS'=>'Prijava je izbrisana.',
'PM_REPORTED_SUCCESS'=>'Poruka je prijavljena.',
//'PM_REPORT_TOTAL'=>'Ukupno ima(š) za obraditi <strong>1</strong> prijavu.',
'PM_REPORTS_CLOSED_SUCCESS'=>'Prijave su zaključene.',
'PM_REPORTS_DELETED_SUCCESS'=>'Prijave su izbrisane.',
//'PM_REPORTS_TOTAL'=>'Ukupno ima(š) za obraditi <strong>%d</strong> prijave/a.',
//'PM_REPORTS_ZERO_TOTAL'=>'Nema prijava za obradu.',
'PM_REPORTS_TOTAL'=> array(
0=>'Nema prijava za obradu.',
1=>'Ukupno ima(š) za obraditi: <strong>1</strong> prijavu.',
2=>'Ukupno ima(š) za obraditi: <strong>%d</strong> prijave.',
3=>'Ukupno ima(š) za obraditi: <strong>%d</strong> prijava.',
),
'PM_REPORT_DETAILS'=>'Detalji',
'POSTER'=>'Poster/ica',
'POSTS_APPROVED_SUCCESS'=>'Postovi su odobreni.',
'POSTS_DELETED_SUCCESS'=>'Postovi su izbrisani iz baze.',
'POSTS_DISAPPROVED_SUCCESS'=>'Postovi su neodobreni.',
'POSTS_LOCKED_SUCCESS'=>'Postovi su zaključani.',
'POSTS_MERGED_SUCCESS'=>'Postovi su spojeni.',
'POSTS_PER_PAGE'=>'Postova po stranici',
'POSTS_PER_PAGE_EXPLAIN'=>'[0 = svi.]',
'POSTS_RESTORED_SUCCESS'=>'Postovi su vraćeni.',
'POSTS_UNLOCKED_SUCCESS'=>'Postovi su otključani.',
'POST_APPROVED_SUCCESS'=>'Post je odobren.',
'POST_DELETED_SUCCESS'=>'Post je izbrisan iz baze.',
'POST_DISAPPROVED_SUCCESS'=>'Post je neodobren.',
'POST_LOCKED_SUCCESS'=>'Post je zaključan.',
'POST_NOT_EXIST'=>'Post ne postoji.',
'POST_REPORTED_SUCCESS'=>'Post je prijavljen.',
'POST_RESTORED_SUCCESS'=>'Post je vraćen.',
'POST_UNLOCKED_SUCCESS'=>'Post je otključan.',
'READ_USERNOTES'=>'Bilješke',
'READ_WARNINGS'=>'Upozorenja',
'REPORTER'=>'Prijavljivač/ica',
'REPORTED'=>'Prijavljeno',
'REPORTED_BY'=>'Prijavio/la',
'REPORTED_ON_DATE'=>'dana',
'REPORTS_CLOSED_SUCCESS'=>'Prijave su zaključene.',
'REPORTS_DELETED_SUCCESS'=>'Prijave su izbrisane.',
//'REPORTS_TOTAL'=>'Ukupno ima(š) za obraditi <strong>%d</strong> prijave/a.',
//'REPORTS_ZERO_TOTAL'=>'Nema prijava za obradu.',
'REPORTS_TOTAL'=> array(
0=>'Nema prijava za obradu.',
1=>'Ukupno ima(š) za obraditi: <strong>1</strong> prijavu.',
2=>'Ukupno ima(š) za obraditi: <strong>%d</strong> prijave.',
3=>'Ukupno ima(š) za obraditi: <strong>%d</strong> prijava.',
),
'REPORT_CLOSED'=>'Prijava je već zaključena.',
'REPORT_CLOSED_SUCCESS'=>'Prijava je zaključena.',
'REPORT_DELETED_SUCCESS'=>'Prijava je izbrisana.',
'REPORT_DETAILS'=>'Detalji',
'REPORT_MESSAGE'=>'Prijavi',
'REPORT_MESSAGE_EXPLAIN'=>'Donjom formom možeš prijaviti poruku administratoru/ici.<br />Forma služi samo za prijavu poruka koje krše pravila foruma.<br />Prijavom poruke, sadržaj iste postat će vidljiv svim moderatori(ca)ma.',
'REPORT_NOTIFY'=>'Obavijesti me',
'REPORT_NOTIFY_EXPLAIN'=>'Dobit ćeš obavijest nakon što prijava bude obrađena.',
'REPORT_POST_EXPLAIN'=>'Donjom formom možeš prijaviti post administratoru/ici.<br />Forma služi samo za prijavu postova koji krše pravila foruma.',
'REPORT_REASON'=>'Razlog prijave',
'REPORT_TIME'=>'Vrijeme prijave',
//'REPORT_TOTAL'=>'Ukupno ima(š) za obraditi <strong>1</strong> prijavu.',
'RESTORE'=>'Vrati',
'RESTORE_POST'=>'Vrati post',
'RESTORE_POST_CONFIRM'=>'Jesi li siguran/na da želiš vratiti post?',
'RESTORE_POSTS'=>'Vrati postove',
'RESTORE_POSTS_CONFIRM'=>'Jesi li siguran/na da želiš vratiti postove?',
'RESTORE_TOPIC'=>'Vrati temu',
'RESTORE_TOPIC_CONFIRM'=>'Jesi li siguran/na da želiš vratiti temu?',
'RESTORE_TOPICS'=>'Vrati teme',
'RESTORE_TOPICS_CONFIRM'=>'Jesi li siguran/na da želiš vratiti teme?',
'RESYNC'=>'Resinkroniziraj',
'RETURN_MESSAGE'=>'Klikni %sovdje%s za povratak na poruku.',
'RETURN_NEW_FORUM'=>'Klikni %sovdje%s za odlazak na novi forum.',
'RETURN_NEW_TOPIC'=>'Klikni %sovdje%s za odlazak na novu temu.',
'RETURN_PM'=>'Klikni %sovdje%s za povratak na poruku.',
'RETURN_POST'=>'Klikni %sovdje%s za povratak na post.',
'RETURN_QUEUE'=>'Klikni %sovdje%s za povratak na moderiranje.',
// <!-- Kocka je hičena! -->
'RETURN_REPORTS'=>'Klikni %sovdje%s za povratak na prijave.',
'RETURN_TOPIC_SIMPLE'=>'Klikni %sovdje%s za povratak na temu.',
'SEARCH_POSTS_BY_USER'=>'Pretraživanje',
'SELECT_ACTION'=>'Izaberi radnju',
'SELECT_FORUM_GLOBAL_ANNOUNCEMENT'=>'Izaberi forum u kojem želiš prikazati globalnu obavijest.',
'SELECT_FORUM_GLOBAL_ANNOUNCEMENTS'=>'Jedna ili više odabranih tema su globalne obavijesti.<br />Izaberi forum u kojem ju/ih želiš prikazati.',
'SELECT_MERGE'=>'Izaberi za spajanje',
'SELECT_TOPICS_FROM'=>'Izaberi teme',
'SELECT_TOPIC'=>'Izaberi temu',
'SELECT_USER'=>'Izaberi korisnika/cu',
'SORT_ACTION'=>'Zapis(i)',
'SORT_DATE'=>'Datum',
'SORT_IP'=>'IP adresa',
'SORT_WARNINGS'=>'Upozorenja',
'SPLIT_AFTER'=>'Podijeli od označenog posta',
'SPLIT_FORUM'=>'Forum za novu temu',
'SPLIT_POSTS'=>'Podijeli označene postove',
'SPLIT_SUBJECT'=>'Novi naslov teme',
'SPLIT_TOPIC_ALL'=>'Podijeli od označenih postova',
'SPLIT_TOPIC_ALL_CONFIRM'=>'Jesi li siguran/na da želiš podijeliti temu?',
'SPLIT_TOPIC_BEYOND'=>'Podijeli temu na označenom postu',
'SPLIT_TOPIC_BEYOND_CONFIRM'=>'Jesi li siguran/na da želiš podijeliti temu?',
'SPLIT_TOPIC_EXPLAIN'=>'Korištenjem donje forme možeš podijeliti temu na dvije [označavanjem određenih postova ili dijeljenjem od označenog posta].',
'THIS_PM_IP'=>'IP poruke',
'THIS_POST_IP'=>'IP posta',
'TOPICS_APPROVED_SUCCESS'=>'Teme su odobrene.',
'TOPICS_DELETED_SUCCESS'=>'Teme su izbrisane iz baze.',
'TOPICS_DISAPPROVED_SUCCESS'=>'Teme su neodobrene.',
'TOPICS_FORKED_SUCCESS'=>'Teme su kopirane.',
'TOPICS_LOCKED_SUCCESS'=>'Teme su zaključane.',
'TOPICS_MOVED_SUCCESS'=>'Teme su premještene.',
'TOPICS_RESTORED_SUCCESS'=>'Teme su vraćene.',
'TOPICS_RESYNC_SUCCESS'=>'Teme su resinkronizirane.',
'TOPICS_TYPE_CHANGED'=>'Tip(ovi) teme(a) je(su) promijenjen(i).',
'TOPICS_UNLOCKED_SUCCESS'=>'Teme su otključane.',
'TOPIC_APPROVED_SUCCESS'=>'Tema je odobrena.',
'TOPIC_DELETED_SUCCESS'=>'Tema je izbrisana iz baze.',
'TOPIC_DISAPPROVED_SUCCESS'=>'Tema je neodobrena.',
'TOPIC_FORKED_SUCCESS'=>'Tema je kopirana.',
'TOPIC_LOCKED_SUCCESS'=>'Tema je zaključana.',
'TOPIC_MOVED_SUCCESS'=>'Tema je premještena.',
'TOPIC_NOT_EXIST'=>'Tema koju si izabrao/la ne postoji.',
'TOPIC_RESTORED_SUCCESS'=>'Tema je vraćena.',
'TOPIC_RESYNC_SUCCESS'=>'Tema je resinkronizirana.',
'TOPIC_SPLIT_SUCCESS'=>'Tema je podijeljena.',
'TOPIC_TIME'=>'Vrijeme',
'TOPIC_TYPE_CHANGED'=>'Tip teme je promijenjen.',
'TOPIC_UNLOCKED_SUCCESS'=>'Tip teme je promijenjen.',
'TOTAL_WARNINGS'=>'Ukupno upozorenja',
//'UNAPPROVED_POSTS_TOTAL'=>'Ukupno <strong>%d</strong> postova čeka odobrenje.',
//'UNAPPROVED_POSTS_ZERO_TOTAL'=>'Nema postova koji čekaju odobrenje.',
//'UNAPPROVED_POST_TOTAL'=>'Ukupno <strong>1</strong> post čeka odobrenje.',
'UNAPPROVED_POSTS_TOTAL'=> array(
0=>'Nema postova koji čekaju odobrenje.',
1=>'Ukupno: <strong>1</strong> post čeka odobrenje.',
2=>'Ukupno: <strong>%d</strong> posta čekaju odobrenje.',
3=>'Ukupno: <strong>%d</strong> postova čeka odobrenje.',
),
'UNLOCK'=>'Otključaj',
'UNLOCK_POST'=>'Otključaj post',
'UNLOCK_POST_EXPLAIN'=>'Dopusti uređivanje',
'UNLOCK_POST_POST'=>'Otključaj post',
'UNLOCK_POST_POST_CONFIRM'=>'Jesi li siguran/na da želiš dopustiti naknadno uređivanje posta?',
'UNLOCK_POST_POSTS'=>'Otključaj postove',
'UNLOCK_POST_POSTS_CONFIRM'=>'Jesi li siguran/na da želiš dopustiti naknadno uređivanje postova?',
'UNLOCK_TOPIC'=>'Otključaj temu',
'UNLOCK_TOPIC_CONFIRM'=>'Jesi li siguran/na da želiš otključati temu?',
'UNLOCK_TOPICS'=>'Otključaj teme',
'UNLOCK_TOPICS_CONFIRM'=>'Jesi li siguran/na da želiš otključati teme?',
'USER_CANNOT_POST'=>'Ne možeš postati po ovom forumu.',
'USER_CANNOT_REPORT'=>'Ne možeš prijavljivati postove na ovom forumu.',
'USER_FEEDBACK_ADDED'=>'Povratan odgovor poslan/dodan.',
'USER_WARNING_ADDED'=>'Korisnik/ca je upozoren/a.',
'VIEW_DETAILS'=>'Detalji',
'VIEW_PM'=>'Pogledaj poruku',
'VIEW_POST'=>'Pogledaj post',
'WARNED_USERS'=>'Upozoreni/e korisnici/e',
'WARNED_USERS_EXPLAIN'=>'Popis korisnika/ca s danim im upozorenjima.',
'WARNING_PM_BODY'=>'Donje je upozorenje koje ti je dao/la administrator(ica)/moderator(ica) foruma. [quote]%s[/quote]',
'WARNING_PM_SUBJECT'=>'Upozorenje od strane administratora(ice)/moderatora(ice) foruma',
'WARNING_POST_DEFAULT'=>'Ovo je upozorenje vezano uz tvoj post: %s.',
//'WARNINGS_ZERO_TOTAL'=>'Nema postojećih upozorenja.',
'NO_WARNINGS'=>'Nema upozorenja.',
'YOU_SELECTED_TOPIC'=>'Izabrao/la si temu broj %d: %s.',
'report_reasons'=> array(
'TITLE'=> array(
'WAREZ'=>'Warez',
'SPAM'=>'Spam',
'OFF_TOPIC'=>'Off topic',
'OTHER'=>'Ostalo',
),
'DESCRIPTION'=> array(
'WAREZ'=>'Post sadrži link(ove) na ilegalne/piratske programe.',
'SPAM'=>'Post je reklama Web stranice(a)/proizvoda.',
'OFF_TOPIC'=>'Post je off topic.',
'OTHER'=>'Post ne spada u niti jednu od postojećih kategorija.',
)
),
));
