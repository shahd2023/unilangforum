<?php
/**
*
* This file is part of Estonian phpBB translation.
* Copyright (c) 2008 - 2017 Estonian translation group.
*
*
* This program is distributed in the hope that it will be useful,
* but WITHOUT ANY WARRANTY; without even the implied warranty of
* MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE. See the
* GNU General Public License for more details.
*
*
* @package      Estonian
* @author       2016-10-02 phpBBeesti.net <et.translations@phpbbeesti.net>
* @copyright    phpBBeesti
* @license      @license http://opensource.org/licenses/gpl-2.0.php GNU General Public License v2
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

// DEVELOPERS PLEASE NOTE
//
// All language files should use UTF-8 as their encoding and the files must not contain a BOM.
//
// Placeholders can now contain order information, e.g. instead of
// 'Page %s of %s' you can (and should) write 'Page %1$s of %2$s', this allows
// translators to re-order the output of data while ensuring it remains correct
//
// You do not need this where single placeholders are used, e.g. 'Message %d' is fine
// equally where a string contains only two placeholders which are used to wrap text
// in a url you again do not need to specify an order e.g., 'Click %sHERE%s' is fine

$lang = array_merge($lang, array(
	'ACTION'				=> 'Tegevus',
	'ACTION_NOTE'			=> 'Tegevus/Märge',
	'ADD_FEEDBACK'			=> 'Lisa tagasiside',
	'ADD_FEEDBACK_EXPLAIN'	=> 'Kui sa tahad lisada raportit selle peale, siis palun täida järgnev  vorm. Kasuta ainult puhast teksti; HTML, BBkood jne. ei ole lubatud.',
	'ADD_WARNING'			=> 'Lisa hoiatus',
	'ADD_WARNING_EXPLAIN'	=> 'Et saata hoiatust kasutajale, tuleb täita järgnev vorm. Kasuta ainult puhast teksti; HTML, BBkood, jne. ei ole lubatud.',
	'ALL_ENTRIES'			=> 'Kõik sisestused',
	'ALL_NOTES_DELETED'		=> 'Kõik kasutaja märkmed on edukalt eemaldatud.',
	'ALL_REPORTS'			=> 'Kõik raportid',
	'ALREADY_REPORTED'		=> 'Sellest postitusest on juba raporteeritud.',
	'ALREADY_REPORTED_PM'	=> 'Sellest privaatsõnumist on juba raporteeritud.',
	'ALREADY_WARNED'		=> 'Sellele postitusele on juba esitatud hoiatus.',
	'APPROVE'				=> 'Luba',
	'APPROVE_POST'			=> 'Luba postitus',
	'APPROVE_POST_CONFIRM'	=> 'Kas oled kindel, et tahad lubada seda postitust?',
	'APPROVE_POSTS'			=> 'Luba postitused',
	'APPROVE_POSTS_CONFIRM'	=> 'Kas oled kindel, et tahad lubada valituid postitusi?',
	'APPROVE_TOPIC'			=> 'Luba teema',
	'APPROVE_TOPIC_CONFIRM'	=> 'Kas oled kindel, et tahad lubada seda teemat?',
	'APPROVE_TOPICS'		=> 'Luba teemad',
	'APPROVE_TOPICS_CONFIRM'=> 'Kas oled kindel, et tahad lubada valitud teemad?',

	'CANNOT_MOVE_SAME_FORUM'=> 'Sa ei saa liigutada teemat foorumise milles see juba on.',
	'CANNOT_WARN_ANONYMOUS'	=> 'Sa ei saa anda hoiatust registreerimata kasutajale - külalisele.',
	'CANNOT_WARN_SELF'		=> 'Sa ei saa anda hoiatust iseendale.',
	'CAN_LEAVE_BLANK'		=> 'See võib jääda tühjaks.',
	'CHANGE_POSTER'			=> 'Vaheta postitajat',
	'CLOSE_PM_REPORT'		=> 'Sulge PS-raport',
	'CLOSE_PM_REPORT_CONFIRM'	=> 'Kas oled kindel, et soovid valitud privaatsõnumi raporti sulgeda?',
	'CLOSE_PM_REPORTS'		=> 'Sulge PS-raportid',
	'CLOSE_PM_REPORTS_CONFIRM'	=> 'Kas oled kindel, et soovid sulgeda valitud privaatsõnumite raportid?',
	'CLOSE_REPORT'			=> 'Sulge raport',
	'CLOSE_REPORT_CONFIRM'	=> 'Kas oled kindel, et soovid valitud raporti sulgeda?',
	'CLOSE_REPORTS'			=> 'Sulge raportid',
	'CLOSE_REPORTS_CONFIRM'	=> 'Kas oled kindel, et soovid valitud raportid sulgeda?',

	'DELETE_PM_REPORT'			=> 'Kustuta PS-raport',
	'DELETE_PM_REPORT_CONFIRM'	=> 'Kas oled kindel, et soovid kustutada valitud privaatsõnumi raporti?',
	'DELETE_PM_REPORTS'			=> 'Kustuta PS-raportid',
	'DELETE_PM_REPORTS_CONFIRM'	=> 'Kas oled kindel, et soovid kustutada valitud privaatsõnumite raportid?',
	'DELETE_POSTS'				=> 'Kustuta postitused',
	'DELETE_REPORT'				=> 'Kustuta raport',
	'DELETE_REPORT_CONFIRM'		=> 'Kas oled kindel, et tahad kustutada valitud raporti?',
	'DELETE_REPORTS'			=> 'Kustuta raportid',
	'DELETE_REPORTS_CONFIRM'	=> 'Kas oled kindel, et tahad kustutada valitud raportid?',
	'DELETE_SHADOW_TOPIC'		=> 'Kustuta vari teemad',
	'DELETE_TOPICS'				=> 'Kustuta valitud teemad',
	'DISAPPROVE'				=> 'Mitte heaks kiitma',
	'DISAPPROVE_REASON'			=> 'Mitte heaks kiitmise põhjus',
	'DISAPPROVE_POST'			=> 'Mitte heaks kiidetud postitus',
	'DISAPPROVE_POST_CONFIRM'	=> 'Kas oled kindel, et tahad mitte heaks kiita antud postitust?',
	'DISAPPROVE_POSTS'			=> 'Ära kiida postitusi heaks',
	'DISAPPROVE_POSTS_CONFIRM'	=> 'Kas oled kindel, et soovid mitte heaks kiita valitud postitused?',
	'DISPLAY_LOG'				=> 'Näita vanemaid sisestusi',
	'DISPLAY_OPTIONS'			=> 'Näita valikuid',

	'EMPTY_REPORT'					=> 'Kui valid põhjuse, pead sisestama kirjelduse.',
	'EMPTY_TOPICS_REMOVED_WARNING'	=> 'Palun märgista üks või enam teemasid, et need oleksid eemaldatud andmebaasist sellepärast et need muutuvad tühjadeks.',

	'FEEDBACK'				=> 'Tagasiside',
	'FORK'					=> 'Kopeeri',
	'FORK_TOPIC'			=> 'Kopeeri teema',
	'FORK_TOPIC_CONFIRM'	=> 'Kas oled kindel, et tahad kopeerida seda teemat?',
	'FORK_TOPICS'			=> 'Kopeeri valitud teemad',
	'FORK_TOPICS_CONFIRM'	=> 'Kas oled kindel, et tahad kopeerida valitud teemad?',
	'FORUM_DESC'			=> 'Kirjeldus',
	'FORUM_NAME'			=> 'Foorumi nimi',
	'FORUM_NOT_EXIST'		=> 'Sinu valitud foorumit ei ole olemas.',
	'FORUM_NOT_POSTABLE'	=> 'Sinu valitud foorumisse ei saa postitada.',
	'FORUM_STATUS'			=> 'Foorumi olek',
	'FORUM_STYLE'			=> 'Foorumi stiil(kujundus)',

	'GLOBAL_ANNOUNCEMENT'	=> 'Üldteadaanne',

	'IP_INFO'				=> 'IP-aadressi informatsioon',
	'IPS_POSTED_FROM'		=> 'IP-aadressid, kust on see kasutaja postitanud',

	'LATEST_LOGS'				=> 'Viimased 5 logitud tegevust',
	'LATEST_REPORTED'			=> 'Viimased 5 raportit',
	'LATEST_REPORTED_PMS'		=> 'Viimased 5 PS-raportit',
	'LATEST_UNAPPROVED'			=> 'Viimased 5 postitust lubamise ootel',
	'LATEST_WARNING_TIME'		=> 'Viimane hoiatus tehti',
	'LATEST_WARNINGS'			=> 'Viimased 5 hoiatust',
	'LEAVE_SHADOW'				=> 'Jäta variteema paika',
	'LIST_REPORTS'				=> array(
		1	=> '%d raport',
		2	=> '%d raportit',
	),
	'LOCK'						=> 'Lukusta',
	'LOCK_POST_POST'			=> 'Lukusta postitus',
	'LOCK_POST_POST_CONFIRM'	=> 'Kas oled kindel, et tahad vältida selle postituse muutmist?',
	'LOCK_POST_POSTS'			=> 'Lukusta valitud postitused',
	'LOCK_POST_POSTS_CONFIRM'	=> 'Kas oled kindel, et tahad vältida valitud postituste muutmist?',
	'LOCK_TOPIC_CONFIRM'		=> 'Kas oled kindel, et tahad lukustada selle teema?',
	'LOCK_TOPICS'				=> 'Lukusta valitud teemad',
	'LOCK_TOPICS_CONFIRM'		=> 'Kas oled kindel, et tahad lukustada kõik valitud teemad?',
	'LOGS_CURRENT_TOPIC'		=> 'Hetkel vaatamas logisid teema kohta:',
	'LOGIN_EXPLAIN_MCP'			=> 'Et modereerida seda foorumit, pead olema sisse logitud.',
	'LOGVIEW_VIEWTOPIC'			=> 'Vaata teemat',
	'LOGVIEW_VIEWLOGS'			=> 'Vaata teema logi',
	'LOGVIEW_VIEWFORUM'			=> 'Vaata foorum(eid)',
	'LOOKUP_ALL'				=> 'Uuri(Lukusta) kõiki IP-aadresse',
	'LOOKUP_IP'					=> 'Uuri IP\'d',

	'MARKED_NOTES_DELETED'		=> 'Kõik märgistatud kasutaja märkmed on edukalt eemaldatud.',

	'MCP_ADD'						=> 'Lisa hoiatus',

	'MCP_BAN'					=> 'Keelustamine',
	'MCP_BAN_EMAILS'			=> 'Keela e-postiaadressid',
	'MCP_BAN_IPS'				=> 'Keela IP-aadressid',
	'MCP_BAN_USERNAMES'			=> 'Keela kasutajanimed',

	'MCP_LOGS'						=> 'Moderaatori logid',
	'MCP_LOGS_FRONT'				=> 'Esileht',
	'MCP_LOGS_FORUM_VIEW'			=> 'Foorumi logid',
	'MCP_LOGS_TOPIC_VIEW'			=> 'Teema logid',

	'MCP_MAIN'						=> 'Pea',
	'MCP_MAIN_FORUM_VIEW'			=> 'Vaata foorumit',
	'MCP_MAIN_FRONT'				=> 'Esileht',
	'MCP_MAIN_POST_DETAILS'			=> 'Postituse  detailid',
	'MCP_MAIN_TOPIC_VIEW'			=> 'Vaata teemat',
	'MCP_MAKE_ANNOUNCEMENT'			=> 'Muuda “teadaandeks”',
	'MCP_MAKE_ANNOUNCEMENT_CONFIRM'	=> 'Kas oled kindel, et soovid valitud teema muuta “Teadaandeks”?',
	'MCP_MAKE_ANNOUNCEMENTS'		=> 'Muuda “teadaanneteks”',
	'MCP_MAKE_ANNOUNCEMENTS_CONFIRM'=> 'Kas oled kindel, et soovid valitud teemad muuta “Teadaanneteks”?',
	'MCP_MAKE_GLOBAL'				=> 'Muuda “üldteadaandeks”',
	'MCP_MAKE_GLOBAL_CONFIRM'		=> 'Kas oled kindel, et soovid valitud teema muuta “Üldteadaandeks”?',
	'MCP_MAKE_GLOBALS'				=> 'Muuda “üldteadaanneteks”',
	'MCP_MAKE_GLOBALS_CONFIRM'		=> 'Kas oled kindel, et soovid valitud teemad muuta “Üldteadaanneteks”?',
	'MCP_MAKE_STICKY'				=> 'Muuda “kleebiseks”',
	'MCP_MAKE_STICKY_CONFIRM'		=> 'Kas oled kindel, et soovid valitud teema muuta “Kleebiseks”?',
	'MCP_MAKE_STICKIES'				=> 'Muuda “kleebisteks”',
	'MCP_MAKE_STICKIES_CONFIRM'		=> 'Kas oled kindel, et soovid valitud teemad muuta “Kleebisteks”?',
	'MCP_MAKE_NORMAL'				=> 'Muuda “tavaliseks teemaks”',
	'MCP_MAKE_NORMAL_CONFIRM'		=> 'Kas oled kindel, et soovid valitud teema muuta tagasi “Tavaliseks teemaks”?',
	'MCP_MAKE_NORMALS'				=> 'Muuda “tavalisteks teemadeks”',
	'MCP_MAKE_NORMALS_CONFIRM'		=> 'Kas oled kindel, et soovid valitud teemad muuta tagasi “Tavalisteks teemadeksStandard Topics”?',

	'MCP_NOTES'						=> 'Kasutajamärkmed',
	'MCP_NOTES_FRONT'				=> 'Esileht',
	'MCP_NOTES_USER'				=> 'Kasutaja detailid',

	'MCP_POST_REPORTS'				=> 'Selle postituse kohta olevad raportid',

	'MCP_PM_REPORTS'				=> 'Raporteeritud PS\'id',
	'MCP_PM_REPORT_DETAILS'			=> 'PS-raporti andmed',
	'MCP_PM_REPORTS_CLOSED'			=> 'Suletud PS-raportid',
	'MCP_PM_REPORTS_CLOSED_EXPLAIN'	=> 'See on nimekiri kõigist PS-raportitest, mis on hiljuti lahendatud.',
	'MCP_PM_REPORTS_OPEN'			=> 'Avatud PS-raportid',
	'MCP_PM_REPORTS_OPEN_EXPLAIN'	=> 'See on nimekiri kõigist PS-raportitest, mis tulevad veel lahendada.',

	'MCP_REPORTS'					=> 'Raporteeritud postitused',
	'MCP_REPORT_DETAILS'			=> 'Raporti detailid',
	'MCP_REPORTS_CLOSED'			=> 'Suletud raportid',
	'MCP_REPORTS_CLOSED_EXPLAIN'	=> 'See on nimekiri kõigist raporteeritud postitustest, mis on juba lahendatud.',
	'MCP_REPORTS_OPEN'				=> 'Avatud raportid',
	'MCP_REPORTS_OPEN_EXPLAIN'		=> 'See on nimekiri kõigist raporteeritud postitustest, mis on veel modereerimise järjekorras.',

	'MCP_QUEUE'								=> 'Modereerimise järjekord',
	'MCP_QUEUE_APPROVE_DETAILS'				=> 'Lubamise detailid',
	'MCP_QUEUE_UNAPPROVED_POSTS'			=> 'Postitused, mis ootavad lubamist',
	'MCP_QUEUE_UNAPPROVED_POSTS_EXPLAIN'	=> 'See on nimekiri kõigist postitustest, mis vajavad luba enne, kui need ilmuvad kasutajatele nähtavaks.',
	'MCP_QUEUE_UNAPPROVED_TOPICS'			=> 'Teemad mis ootavad lubamist',
	'MCP_QUEUE_UNAPPROVED_TOPICS_EXPLAIN'	=> 'See on nimekiri kõigist teemadest, mis vajavad luba enne, kui need ilmuvad kasutajatele nähtavaks.',
	'MCP_QUEUE_DELETED_POSTS'				=> 'Kustutatud postitused',
	'MCP_QUEUE_DELETED_POSTS_EXPLAIN'		=> 'See on nimekiri kõigist kustutatud postitustes. Siin asuvaid postitusi sa saad taastada või jäädavalt kustutada.',
	'MCP_QUEUE_DELETED_TOPICS'				=> 'Kustutatud teemad',
	'MCP_QUEUE_DELETED_TOPICS_EXPLAIN'		=> 'See on nimekiri kõigist kustutatud teemadest. Siin asuvaid teemasi sa saad taastada või jäädavalt kustutada.',

	'MCP_VIEW_USER'			=> 'Vaata kindla kasutaja hoiatusi',

	'MCP_WARN'				=> 'Hoiatused',
	'MCP_WARN_FRONT'		=> 'Esileht',
	'MCP_WARN_LIST'			=> 'Hoiatuste nimekiri',
	'MCP_WARN_POST'			=> 'Hoiata kindla postituse eest',
	'MCP_WARN_USER'			=> 'Hoiata kasutajat',

	'MERGE_POSTS_CONFIRM'	=> 'Kas oled kindel, et tahad ühendada valitud postitused?',
	'MERGE_TOPIC_EXPLAIN'	=> 'Selle tegevusega sa saad liigutada valitud postitused teise teemasse. Postitused eraldatkase sellest teemast ja ühendatakse teise teemaga.',
	'MERGE_TOPIC_ID'		=> 'Sihtpunkti teema id',
	'MERGE_TOPICS'			=> 'Ühenda teemad',
	'MERGE_TOPICS_CONFIRM'	=> 'Kas oled kindel, et tahad ühendada valitud teemad?',
	'MODERATE_FORUM'		=> 'Modereeri foorum(eid)',
	'MODERATE_TOPIC'		=> 'Modereeri teemat',
	'MODERATE_POST'			=> 'Modereeri postitust',
	'MOD_OPTIONS'			=> 'Moderaatori valikud',
	'MORE_INFO'				=> 'Täpsem informatsioon',
	'MOST_WARNINGS'			=> 'Kasutajad, kel on enim hoiatusi',
	'MOVE_TOPIC_CONFIRM'	=> 'Kas oled kindel, et tahad liigutada teema uude foorumisse?',
	'MOVE_TOPICS'			=> 'Liiguta valitud teemad',
	'MOVE_TOPICS_CONFIRM'	=> 'Kas oled kindel, et tahad liigutada valitud teemad uude foorumisse?',

	'NOTIFY_POSTER_APPROVAL'		=> 'Teavita postitajat heaks kiitmisest?',
	'NOTIFY_POSTER_DISAPPROVAL'		=> 'Teavita postitajat mitte heaks kiitmisest?',
	'NOTIFY_USER_WARN'				=> 'Teavita kasutajat hoiatusest?',
	'NOT_MODERATOR'					=> 'Sa pole selle foorumi moderaator.',
	'NO_DESTINATION_FORUM'			=> 'Palun vali foorum sihtpunktiks.',
	'NO_DESTINATION_FORUM_FOUND'	=> 'Pole kättesaadavat sihtpunkti foorumit.',
	'NO_ENTRIES'					=> 'Logi sisestused puuduvad.',
	'NO_FEEDBACK'					=> 'Tagasiside selle kasutaja kohta puudub.',
	'NO_FINAL_TOPIC_SELECTED'		=> 'Sa pead valima sihtpunkti teema postituste ühendamiseks.',
	'NO_MATCHES_FOUND'				=> 'Ei leitud ühtegi vastet.',
	'NO_POST'						=> 'Sa pead valima postituse, et hoiatada kasutajad postituse eest.',
	'NO_POST_REPORT'				=> 'Seda postitust pole raporteeritud.',
	'NO_POST_SELECTED'				=> 'Sa pead valima vähemalt ühe postituse, et sooritada seda tegevust.',
	'NO_POSTS_DELETED'				=> 'Pole ühtegi kustutatud postitust.',
	'NO_POSTS_QUEUE'				=> 'Pole postitusi, mis ootaksid heaks kiitmist.',
	'NO_REASON_DISAPPROVAL'			=> 'Palun anna mitte heaks kiitmiseks sobiv põhjus.',
	'NO_REPORT'						=> 'Ühtegi raportit leitud',
	'NO_REPORTS'					=> 'Ühtegi raportit leitud',
	'NO_REPORT_SELECTED'			=> 'Sa pead valima vähemalt ühe raporti, et sooritada seda tegevust.',
	'NO_TOPIC_ICON'					=> 'Pole',
	'NO_TOPIC_SELECTED'				=> 'Sa pead valima vähemalt ühe teema, et sooritada seda tegevust.',
	'NO_TOPICS_DELETED'				=> 'Pole ühtegi kustutatud teemat.',
	'NO_TOPICS_QUEUE'				=> 'Pole teemasid, mis ootaksid heaks kiitmist.',

	'ONLY_TOPIC'			=> 'Ainult teema “%s”',
	'OTHER_USERS'			=> 'Teised kasutajad, kes on postitanud sellelt IP-aadressilt',

	'QUICKMOD_ACTION_NOT_ALLOWED' => "%s quickmod pole lubatud",

	'PM_REPORT_CLOSED_SUCCESS'	=> 'Valitud PS-raport on edukalt suletud.',
	'PM_REPORT_DELETED_SUCCESS'	=> 'Valitud PS-raport on edukalt kustutatud.',
	'PM_REPORTED_SUCCESS'		=> 'Sellest privaatsõnumist on edukalt raporteeritud.',
	'PM_REPORTS_CLOSED_SUCCESS'	=> 'Valitud PS-raportid on suletud.',
	'PM_REPORTS_DELETED_SUCCESS'=> 'Valitud PS-raportid on kustutatud.',
	'PM_REPORTS_TOTAL'			=> array(
		0	=> 'Pole ühtegi PS-raportit ülevaatamiseks.',
		1	=> 'Kokku on <strong>1</strong> PS-raport üle vaadata.',
		2	=> 'Kokku on <strong>%d</strong> PS-raportit üle vaadata.',
	),
	'PM_REPORT_DETAILS'			=> 'Privaatsõnumi raporteerimise andmed',
	'POSTER'					=> 'Postitaja',
	'POSTS_APPROVED_SUCCESS'	=> 'Valitud postitused on lubatud.',
	'POSTS_DELETED_SUCCESS'		=> 'Valitud postitused on edukalt eemaldatud andmebaasist.',
	'POSTS_DISAPPROVED_SUCCESS'	=> 'Valitud postitused on keelatud.',
	'POSTS_LOCKED_SUCCESS'		=> 'Valitud postitused on edukalt lukustatud.',
	'POSTS_MERGED_SUCCESS'		=> 'Valitud postitused on ühendatud.',
	'POSTS_PER_PAGE'			=> 'Postitusi lehe kohta',
	'POSTS_PER_PAGE_EXPLAIN'	=> '(Vali 0, et näha kõiki postitusi.)',
	'POSTS_RESTORED_SUCCESS'	=> 'Valitud postitused on taastatud edukalt.',
	'POSTS_UNLOCKED_SUCCESS'	=> 'Valitud postitused on edukalt avatud.',
	'POST_APPROVED_SUCCESS'		=> 'Valitud postitus on heaks kiidetud.',
	'POST_DELETED_SUCCESS'		=> 'Valitud postitus on edukalt eemaldatud andmebaasist.',
	'POST_DISAPPROVED_SUCCESS'	=> 'Valitud postitus on mitte heaks kiidetud.',
	'POST_LOCKED_SUCCESS'		=> 'Postitus on edukalt lukustatud.',
	'POST_NOT_EXIST'			=> 'Sinu soovitud postitust ei eksisteeri.',
	'POST_REPORTED_SUCCESS'		=> 'Sellest postitusest on edukalt raporteeritud.',
	'POST_RESTORED_SUCCESS'		=> 'Postitus on edukalt taastatud.',
	'POST_UNLOCKED_SUCCESS'		=> 'Postitus on edukalt avatud.',

	'READ_USERNOTES'			=> 'Kasutaja märkmed',
	'READ_WARNINGS'				=> 'Kasutaja hoiatused',
	'REPORTER'					=> 'Raporteerija',
	'REPORTED'					=> 'Raporteeritud',
	'REPORTED_BY'				=> 'Raporteeris',
	'REPORTED_ON_DATE'			=> '-',
	'REPORTS_CLOSED_SUCCESS'	=> 'Valitud raportid on edukalt lukustatud.',
	'REPORTS_DELETED_SUCCESS'	=> 'Valitud raportid on edukalt kustutatud.',
	'REPORTS_TOTAL'				=> array(
		0	=> 'Pole ühtegi raportit üle vaatamiseks.',
		1	=> 'Kokku on <strong>1</strong> raport üle vaatamiseks.',
		2	=> 'Kokku on <strong>%d</strong> raportit üle vaatamiseks.',
	),
	'REPORT_CLOSED'				=> 'See raport on juba suletud.',
	'REPORT_CLOSED_SUCCESS'		=> 'Valitud raport on edukalt lukustatud.',
	'REPORT_DELETED_SUCCESS'	=> 'Valitud raport on edukalt kustutatud.',
	'REPORT_DETAILS'			=> 'Raporti detailid',
	'REPORT_MESSAGE'			=> 'Raporteeri seda sõnumit',
	'REPORT_MESSAGE_EXPLAIN'	=> 'Kasuta seda vormi, et raporteerida valitud privaatsõnumist. Raporteerimist peaksid kasutama ainult siis, kui sõnum rikub foorumi reegleid. <strong>Privaatsõnumi raporteerimine teeb selle sisu nähtavaks kõikidele moderaatoritele.</strong>',
	'REPORT_NOTIFY'				=> 'Teavita mind',
	'REPORT_NOTIFY_EXPLAIN'		=> 'Informeerib sind siis, kui sinu raportiga on tegeletud.',
	'REPORT_POST_EXPLAIN'		=> 'Kasuta seda vormi, et raporteerida valitud postitus foorumi moderaatoritele ja administraatoritele. Raporteerimist peaksid kasutama ainult siis, kui sõnum rikub foorumi reegleid.',
	'REPORT_REASON'				=> 'Raporti põhjus',
	'REPORT_TIME'				=> 'Raporti aeg',
	'RESTORE'					=> 'Taasta',
	'RESTORE_POST'				=> 'Taasta postitus',
	'RESTORE_POST_CONFIRM'		=> 'Kas oled kindel, et soovid taastada antud postitust?',
	'RESTORE_POSTS'				=> 'Taasta postitused',
	'RESTORE_POSTS_CONFIRM'		=> 'Kas oled kindel, et soovid taastada valitud postitused?',
	'RESTORE_TOPIC'				=> 'Taasta teema',
	'RESTORE_TOPIC_CONFIRM'		=> 'Kas oled kindel, et soovid taastada antud teema?',
	'RESTORE_TOPICS'			=> 'Taasta teemad',
	'RESTORE_TOPICS_CONFIRM'	=> 'Kas oled kindel, et soovid taastada valitud teemad?',
	'RESYNC'					=> 'Resünkroniseeri',
	'RETURN_MESSAGE'			=> '%sMine tagasi eelmisele lehele%s',
	'RETURN_NEW_FORUM'			=> '%sMine tagasi eelmisele lehele%s',
	'RETURN_NEW_TOPIC'			=> '%sMine tagasi eelmisele lehele%s',
	'RETURN_PM'					=> '%sMine tagasi privaatsõnumitesse%s',
	'RETURN_POST'				=> '%sMine tagasi eelmisele lehele%s',
	'RETURN_QUEUE'				=> '%sMine tagasi eelmisele lehele%s',
	'RETURN_REPORTS'			=> '%sMine tagasi eelmisele lehele%s',
	'RETURN_TOPIC_SIMPLE'		=> '%sMine tagasi eelmisele lehele%s',

	'SEARCH_POSTS_BY_USER'				=> 'Otsi postitusi kasutaja järgi',
	'SELECT_ACTION'						=> 'Vali soovitud tegevus',
	'SELECT_FORUM_GLOBAL_ANNOUNCEMENT'	=> 'Palun vali foorumi, kus sa tahad, et oleks näha see üldine teadaanne.',
	'SELECT_FORUM_GLOBAL_ANNOUNCEMENTS'	=> 'Üks või enam valitud teemadest on Üldised teadaanded. Palun vali foorumi, kus sa tahad, et need oleksid nähtavad.',
	'SELECT_MERGE'						=> 'Vali liitmiseks',
	'SELECT_TOPICS_FROM'				=> 'Vali teemad kust',
	'SELECT_TOPIC'						=> 'Vali teema',
	'SELECT_USER'						=> 'Vali kasutaja',
	'SORT_ACTION'						=> 'Logi tegevus',
	'SORT_DATE'							=> 'Kuupäev',
	'SORT_IP'							=> 'IP-aadress',
	'SORT_WARNINGS'						=> 'Hoiatused',
	'SPLIT_AFTER'						=> 'Poolita teema alates valitud postitusest edasi',
	'SPLIT_FORUM'						=> 'Foorum uue teema jaoks',
	'SPLIT_POSTS'						=> 'Poolita valitud postitused',
	'SPLIT_SUBJECT'						=> 'Uue teema pealkiri',
	'SPLIT_TOPIC_ALL'					=> 'Poolita teema alates valitud postitustest',
	'SPLIT_TOPIC_ALL_CONFIRM'			=> 'Kas oled kindel, et tahad poolitada seda teemat?',
	'SPLIT_TOPIC_BEYOND'				=> 'Poolita teema valitud postituse juurest',
	'SPLIT_TOPIC_BEYOND_CONFIRM'		=> 'Kas oled kindel, et tahad poolitada teemat valitud postituse juurest?',
	'SPLIT_TOPIC_EXPLAIN'				=> 'Kasutades allpool toodut vormi, saad poolitada teema kaheks, kas valid postitused individuaalselt või poolitad alatest mingist kindlast postitusest.',

	'THIS_PM_IP'				=> 'Selle privaatsõnumi IP-aadress',
	'THIS_POST_IP'				=> 'Selle postituse IP-aadress',
	'TOPICS_APPROVED_SUCCESS'	=> 'Valitud teemad on heaks kiidetud.',
	'TOPICS_DELETED_SUCCESS'	=> 'Valitud teemad on edukalt eemaldatud andmebaasist.',
	'TOPICS_DISAPPROVED_SUCCESS'=> 'Valitud teemad on mitte heaks kiidetud.',
	'TOPICS_FORKED_SUCCESS'		=> 'Valitud teemad on edukalt kopeeritud.',
	'TOPICS_LOCKED_SUCCESS'		=> 'Valitud teemad on edukalt lukustatud.',
	'TOPICS_MOVED_SUCCESS'		=> 'Valitud teemad on edukalt liigutatud.',
	'TOPICS_RESTORED_SUCCESS'	=> 'Valitud teemad on edukalt taastatud.',
	'TOPICS_RESYNC_SUCCESS'		=> 'Valitud teemad on resünkroniseeritud.',
	'TOPICS_TYPE_CHANGED'		=> 'Teema tüüp on edukalt muudetud.',
	'TOPICS_UNLOCKED_SUCCESS'	=> 'Valitud teemad on avatud.',
	'TOPIC_APPROVED_SUCCESS'	=> 'Valitud teema on heaks kiidetud.',
	'TOPIC_DELETED_SUCCESS'		=> 'Valitud teema on edukalt eemaldatud andmebaasist.',
	'TOPIC_DISAPPROVED_SUCCESS'	=> 'Valitud teema ei ole heaks kiidetud.',
	'TOPIC_FORKED_SUCCESS'		=> 'Valitud teema on edukalt kopeeritud.',
	'TOPIC_LOCKED_SUCCESS'		=> 'Valitud teema on edukalt lukustatud.',
	'TOPIC_MOVED_SUCCESS'		=> 'Valitud teema on edukalt liigutatud.',
	'TOPIC_NOT_EXIST'			=> 'Sinu valitud teema(sid) ei ole olemas.',
	'TOPIC_RESTORED_SUCCESS'	=> 'Valitud teema on edukalt taastatud.',
	'TOPIC_RESYNC_SUCCESS'		=> 'Valitud teema on edukalt resünkroniseeritud.',
	'TOPIC_SPLIT_SUCCESS'		=> 'Valitud teema on edukalt poolitatud.',
	'TOPIC_TIME'				=> 'Teema aeg',
	'TOPIC_TYPE_CHANGED'		=> 'Teema tüüp on edukalt muudetud.',
	'TOPIC_UNLOCKED_SUCCESS'	=> 'Valitud teema on avatud.',
	'TOTAL_WARNINGS'			=> 'Kokku hoiatusi',

	'UNAPPROVED_POSTS_TOTAL'		=> array(
		0	=> 'Ei ole ühtegi postitust, mis ootaks lubamist.',
		1	=> 'Kokku on <strong>1</strong> postitus, mis ootab lubamist.',
		2	=> 'Kokku on <strong>%d</strong> postitust, mis ootavad lubamist.',
	),
	'UNLOCK'						=> 'Ava',
	'UNLOCK_POST'					=> 'Ava postitus',
	'UNLOCK_POST_EXPLAIN'			=> 'Luba muutmine',
	'UNLOCK_POST_POST'				=> 'Ava postitus',
	'UNLOCK_POST_POST_CONFIRM'		=> 'Kas oled kindel, et tahad lubada muuta seda postitust?',
	'UNLOCK_POST_POSTS'				=> 'Ava valitud postitused',
	'UNLOCK_POST_POSTS_CONFIRM'		=> 'Kas oled kindel, et tahad lubada muuta valitud postitusi?',
	'UNLOCK_TOPIC'					=> 'Ava teema',
	'UNLOCK_TOPIC_CONFIRM'			=> 'Kas oled kindel, et tahad avada selle teema?',
	'UNLOCK_TOPICS'					=> 'Ava valitud teemad',
	'UNLOCK_TOPICS_CONFIRM'			=> 'Kas oled kindel, et tahad avada kõik valitud teemad?',
	'USER_CANNOT_POST'				=> 'Sa ei saa postitada selles foorumis.',
	'USER_CANNOT_REPORT'			=> 'Sa ei saa raporteerida postitusi siin foorumis.',
	'USER_FEEDBACK_ADDED'			=> 'Kasutaja tagasiside on edukalt lisatud.',
	'USER_WARNING_ADDED'			=> 'Kasutaja on edukalt hoiatatud.',

	'VIEW_DETAILS'			=> 'Vaata detaile',
	'VIEW_PM'				=> 'Vaata privaatsõnumit',
	'VIEW_POST'				=> 'Vaata postitust',

	'WARNED_USERS'			=> 'Hoiatatud kasutajad',
	'WARNED_USERS_EXPLAIN'	=> 'See on nimekiri kasutajatest, kellel on aegumata hoiatused.',
	'WARNING_PM_BODY'		=> 'Järgnev on hoiatus, mille on sulle andnud administraator või moderaator siit foorumist.[quote]%s[/quote]',
	'WARNING_PM_SUBJECT'	=> 'Hoiatus antud',
	'WARNING_POST_DEFAULT'	=> 'See on hoiatus sinu tehtud postituse eest: %s .',
	'NO_WARNINGS'	=> 'Hoiatused puuduvad.',

	'YOU_SELECTED_TOPIC'	=> 'Sa valisid teema numbri %d: %s.',

	'report_reasons'		=> array(
		'TITLE'	=> array(
			'WAREZ'		=> 'Piraatlus',
			'SPAM'		=> 'Rämpspost',
			'OFF_TOPIC'	=> 'Teemaväline jutt',
			'OTHER'		=> 'Muu',
		),
		'DESCRIPTION' => array(
			'WAREZ'		=> 'Postitus sisaldab linki illegaalsele või piraattarkvarale.',
			'SPAM'		=> 'Postituse ainus eesmärk on reklaamida teist veebilehte või toodet.',
			'OFF_TOPIC'	=> 'Postitus ei vasta antud teemale.',
			'OTHER'		=> 'Postitus ei sobi ühtegi kategooriasse, palun kasuta allpool olevat vormi, et sisestada täpsemat informatsiooni postituse kohta.',
		),
	),
));