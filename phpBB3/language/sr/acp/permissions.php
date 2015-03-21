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
	'ACP_PERMISSIONS_EXPLAIN'	=> '
		<p>Дозволе су високо прецизне и груписане у четири главна одељка, и то:</p>

		<h2>Опште Дозволе</h2>
		<p>Користе се за контролу приступа на општем нивоу и примењују се на цео форум. Оне су даље подељене на Корисничке Дозволе, Групне Дозволе, Администратори и Општи Уредници.</p>

		<h2>Дозволе Основане на Форумима</h2>
		<p>Користе се за контролу приступа основано по форумима. Оне су даље подељене на Дозволе Форума, Уредници Форума, Корисничке Дозволе Форума и Групне Дозволе Форума.</p>

		<h2>Роле Дозвола</h2>
		<p>Користе се за прављење различитих комплета дозвола за различите типове дозвола касније омогућених за доделу на основи-рола. Подразумеване роле би требало да покривају администрацију форума, уосталом у сваком од четири огранка, можете додавати/учитавати/брисати роле по потреби.</p>

		<h2>Маске Дозвола</h2>
		<p>Користе се за преглед стварних дозвола додељених Корисницима, Уредницима (Месним и Општим), Администраторима или Форумима.</p>

		<br />

		<p>За више података о подешавању и управљању дозволама на вашем phpBB3 форуму, молимо погледајте одељак на <a href="https://www.phpbb.com/support/docs/en/3.1/ug/quickstart/permissions/">Setting permissions of our Quick Start Guide</a>.</p>
	',

	'ACL_NEVER'				=> 'Никада',
	'ACL_SET'				=> 'Поставке дозвола',
	'ACL_SET_EXPLAIN'		=> 'Дозволе су основане на простом <strong>ДА</strong>/<strong>НЕ</strong> систему. Постављањем поставке на <strong>НИКАДА</strong> за корисника или корисничку групу преписаће преко било које друге додељене вредности. Уколико не желите да доделите вредност за поставку овог корисника или групе одаберите <strong>НЕ</strong>. Уколико су вредности за ову поставку већ негде додељене онда ће оне бити и коришћене, у супротном се <strong>НИКАДА</strong> подразумева. Сви означени објекти (са кућицом испред њих) ће умножити комплет дозвола који сте одредили.',
	'ACL_SETTING'			=> 'Поставка',

	'ACL_TYPE_A_'			=> 'Дозволе администратора',
	'ACL_TYPE_F_'			=> 'Дозволе форума',
	'ACL_TYPE_M_'			=> 'Дозволе уредника',
	'ACL_TYPE_U_'			=> 'Дозволе корисника',

	'ACL_TYPE_GLOBAL_A_'	=> 'Дозволе администратора',
	'ACL_TYPE_GLOBAL_U_'	=> 'Дозволе корисника',
	'ACL_TYPE_GLOBAL_M_'	=> 'Дозволе Општег уредника',
	'ACL_TYPE_LOCAL_M_'		=> 'Дозволе Уредника форума',
	'ACL_TYPE_LOCAL_F_'		=> 'Дозволе форума',

	'ACL_NO'				=> 'Не',
	'ACL_VIEW'				=> 'Преглед дозвола',
	'ACL_VIEW_EXPLAIN'		=> 'Овде можете прегледати стварне дозволе које корисник/група има. Црвени квадрат означава да корисник/група нема дозволу, зелени квадрат означава да корисник/група има дозволу.',
	'ACL_YES'				=> 'Да',

	'ACP_ADMINISTRATORS_EXPLAIN'				=> 'Овде можете да доделите дозволе администратора корисницима или групама. Сви корисници са админ дозволама могу прегледати админ контролну плочу.',
	'ACP_FORUM_MODERATORS_EXPLAIN'				=> 'Овде можете да назначите кориснике и групе као уреднике форума. Да бисте корисницима доделили приступ форумима, за одређивање дозвола општег уредника или администратора молимо вас да користите одговарајућу страницу.',
	'ACP_FORUM_PERMISSIONS_EXPLAIN'				=> 'Овде можете мењати који корисници и групе могу приступати којим форумима. За доделу уредника или одређивање администратора молимо вас да користите одговарајућу страницу.',
	'ACP_FORUM_PERMISSIONS_COPY_EXPLAIN'		=> 'Овде можете да умножите дозволе форума из једног форума у други или више форума.',
	'ACP_GLOBAL_MODERATORS_EXPLAIN'				=> 'Овде можете да доделите дозволе општег уредника корисницима или групама. Ови уредници су као обични уредници осим што имају приступ свим форумима.',
	'ACP_GROUPS_FORUM_PERMISSIONS_EXPLAIN'		=> 'Овде можете доделити групама дозволе форума.',
	'ACP_GROUPS_PERMISSIONS_EXPLAIN'			=> 'Овде можете доделити опште дозволе групама - дозволе корисника, дозволе општих уредника и дозволе администратора. Дозволе корисника укључују могућности као што су коришћење грбова, слање приватних порука, и тако даље; дозволе општих уредника као одобравање порука, управљање темама, управљање забранама, и тако даље и на крају дозволе администратора као мењање дозвола, одређивање властитих ББКодова, управљање форумима, и тако даље. Појединачне дозволе корисника би требало да буду промењене само у ретким приликама, првенствени начин је постављање корисника у групе и додељивање групних дозвола.',
	'ACP_ADMIN_ROLES_EXPLAIN'					=> 'Овде можете управљати ролама дозвола администратора. Роле су стварне дозволе, уколико промените ролу ставке које имају додељену ову ролу ће променити своје дозволе такође.',
	'ACP_FORUM_ROLES_EXPLAIN'					=> 'Овде можете управљати ролама дозвола форума. Роле су стварне дозволе, уколико промените ролу ставке које имају додељену ову ролу ће променити своје дозволе такође.',
	'ACP_MOD_ROLES_EXPLAIN'						=> 'Овде можете управљати ролама дозвола уредника. Роле су стварне дозволе, уколико промените ролу ставке које имају додељену ову ролу ће променити своје дозволе такође.',
	'ACP_USER_ROLES_EXPLAIN'					=> 'Овде можете управљати ролама дозвола корисника. Роле су стварне дозволе, уколико промените ролу ставке које имају додељену ову ролу ће променити своје дозволе такође.',
	'ACP_USERS_FORUM_PERMISSIONS_EXPLAIN'		=> 'Овде можете доделити дозволе форума корисницима.',
	'ACP_USERS_PERMISSIONS_EXPLAIN'				=> 'Овде можете доделити опште дозволе корисницима - дозволе корисника, дозволе општих уредника и дозволе администратора. Дозволе корисника укључују могућности као што су коришћење грбова, слање приватних порука, и тако даље; дозволе општих уредника као одобравање порука, управљање темама, управљање забранама, и тако даље и на крају дозволе администратора као мењање дозвола, одређивање властитих ББКодова, управљање форумима, и тако даље. За мењање ових поставки великом броју корисника систем Групних дозвола је првенствени начин. Дозволе корисника би требало да буду промењене само у ретким приликама, првенствени начин је постављање корисника у групе и додељивање групних дозвола.',
	'ACP_VIEW_ADMIN_PERMISSIONS_EXPLAIN'		=> 'Овде можете прегледати стварне дозволе администратора додељене изабраним корисницима/групама.',
	'ACP_VIEW_GLOBAL_MOD_PERMISSIONS_EXPLAIN'	=> 'Овде можете прегледати дозволе општих уредника додељене изабраним корисницима/групама.',
	'ACP_VIEW_FORUM_PERMISSIONS_EXPLAIN'		=> 'Овде можете прегледати дозволе форума додељене изабраним корисницима/групама и форумима.',
	'ACP_VIEW_FORUM_MOD_PERMISSIONS_EXPLAIN'	=> 'Овде можете прегледати дозволе уредника форума додељене изабраним корисницима/групама и форумима.',
	'ACP_VIEW_USER_PERMISSIONS_EXPLAIN'			=> 'Овде можете прегледати стварне дозволе корисника додељене изабраним корисницима/групама.',

	'ADD_GROUPS'				=> 'Додај групе',
	'ADD_PERMISSIONS'			=> 'Додај дозволе',
	'ADD_USERS'					=> 'Додај кориснике',
	'ADVANCED_PERMISSIONS'		=> 'Напредне Дозволе',
	'ALL_GROUPS'				=> 'Изабери све групе',
	'ALL_NEVER'					=> 'Све <strong>НИКАДА</strong>',
	'ALL_NO'					=> 'Све <strong>НЕ</strong>',
	'ALL_USERS'					=> 'Изабери све кориснике',
	'ALL_YES'					=> 'Све <strong>ДА</strong>',
	'APPLY_ALL_PERMISSIONS'		=> 'Примени све дозволе',
	'APPLY_PERMISSIONS'			=> 'Примени дозволе',
	'APPLY_PERMISSIONS_EXPLAIN'	=> 'Дозволе и рола одређена за ову ставку ће бити примењене само на њу и све обележене ставке.',
	'AUTH_UPDATED'				=> 'Дозволе су ажуриране.',

	'COPY_PERMISSIONS_CONFIRM'				=> 'Да ли сигурно желите да изведете овај поступак? Молимо да будете пажљиви јер ће ово преписати преко постојећих дозвола изабраних мета.',
	'COPY_PERMISSIONS_FORUM_FROM_EXPLAIN'	=> 'Изворни форум из којега хоћете да умножите дозволе.',
	'COPY_PERMISSIONS_FORUM_TO_EXPLAIN'		=> 'Циљни форуми на које желите да примените умножене дозволе.',
	'COPY_PERMISSIONS_FROM'					=> 'Умножи дозволе из',
	'COPY_PERMISSIONS_TO'					=> 'Примени дозволе на',

	'CREATE_ROLE'				=> 'Направи ролу',
	'CREATE_ROLE_FROM'			=> 'Користи поставке из…',
	'CUSTOM'					=> 'Властито…',

	'DEFAULT'					=> 'Подразумевано',
	'DELETE_ROLE'				=> 'Обриши ролу',
	'DELETE_ROLE_CONFIRM'		=> 'Да ли сигурно желите да уклоните ово правило? Ставке које имају додељену ову ролу <strong>неће</strong> изгубити њихове поставке дозвола.',
	'DISPLAY_ROLE_ITEMS'		=> 'Преглед ставки које користе ову ролу',

	'EDIT_PERMISSIONS'			=> 'Учитај дозволе',
	'EDIT_ROLE'					=> 'Учитај ролу',

	'GROUPS_NOT_ASSIGNED'		=> 'Нема група којима је додељена ова рола',

	'LOOK_UP_GROUP'				=> 'Провера корисничке групе',
	'LOOK_UP_USER'				=> 'Провера корисника',

	'MANAGE_GROUPS'		=> 'Управљање групама',
	'MANAGE_USERS'		=> 'Управљање корисницима',

	'NO_AUTH_SETTING_FOUND'		=> 'Поставке дозвола нису одређене.',
	'NO_ROLE_ASSIGNED'			=> 'Нема додељене роле…',
	'NO_ROLE_ASSIGNED_EXPLAIN'	=> 'Поставка ове роле не мења дозволе са десне стране. Уколико желите да анулирате/уклоните све дозволе требало би да користите “Све <strong>НЕ</strong>” везу.',
	'NO_ROLE_AVAILABLE'			=> 'Рола није доступна',
	'NO_ROLE_NAME_SPECIFIED'	=> 'Молимо вас да дате роли назив.',
	'NO_ROLE_SELECTED'			=> 'Рола није пронађена.',
	'NO_USER_GROUP_SELECTED'	=> 'Нисте одабрали ниједног корисника или групу.',

	'ONLY_FORUM_DEFINED'	=> 'Одредили сте само форуме у вашем избору. Молимо вас да такође изаберете бар једног корисника или групу.',

	'PERMISSION_APPLIED_TO_ALL'		=> 'Дозволе и роле ће такође бити примењене на свим означеним објектима',
	'PLUS_SUBFORUMS'				=> '+Подфоруми',

	'REMOVE_PERMISSIONS'			=> 'Уклони дозволе',
	'REMOVE_ROLE'					=> 'Уклони ролу',
	'RESULTING_PERMISSION'			=> 'Резултујућа дозвола',
	'ROLE'							=> 'Рола',
	'ROLE_ADD_SUCCESS'				=> 'Рола је успешно додата.',
	'ROLE_ASSIGNED_TO'				=> 'Корисници/Групе додељени %s',
	'ROLE_DELETED'					=> 'Рола је успешно уклоњена.',
	'ROLE_DESCRIPTION'				=> 'Опис роле',

	'ROLE_ADMIN_FORUM'			=> 'Форум Админ',
	'ROLE_ADMIN_FULL'			=> 'Пуни Админ',
	'ROLE_ADMIN_STANDARD'		=> 'Обични Админ',
	'ROLE_ADMIN_USERGROUP'		=> 'Админ Корисник и Групе',
	'ROLE_FORUM_BOT'			=> 'Приступ Робота',
	'ROLE_FORUM_FULL'			=> 'Пуни Приступ',
	'ROLE_FORUM_LIMITED'		=> 'Ограничен Приступ',
	'ROLE_FORUM_LIMITED_POLLS'	=> 'Ограничен Приступ + Гласања',
	'ROLE_FORUM_NOACCESS'		=> 'Нема Приступ',
	'ROLE_FORUM_ONQUEUE'		=> 'На Чекању Одобрења',
	'ROLE_FORUM_POLLS'			=> 'Обични Приступ + Гласања',
	'ROLE_FORUM_READONLY'		=> 'Приступ Само за Читање',
	'ROLE_FORUM_STANDARD'		=> 'Обични Приступ',
	'ROLE_FORUM_NEW_MEMBER'		=> 'Приступ Ново Регистрованих Корисника',
	'ROLE_MOD_FULL'				=> 'Пуни Уредник',
	'ROLE_MOD_QUEUE'			=> 'Чекање Уредника',
	'ROLE_MOD_SIMPLE'			=> 'Једноставан Уредник',
	'ROLE_MOD_STANDARD'			=> 'Обичан Уредник',
	'ROLE_USER_FULL'			=> 'Све Могућности',
	'ROLE_USER_LIMITED'			=> 'Ограничене Могућности',
	'ROLE_USER_NOAVATAR'		=> 'Без Грба',
	'ROLE_USER_NOPM'			=> 'Без Приватних Порука',
	'ROLE_USER_STANDARD'		=> 'Обичне Могућности',
	'ROLE_USER_NEW_MEMBER'		=> 'Могућности Ново Регистрованих Корисника',

	'ROLE_DESCRIPTION_ADMIN_FORUM'			=> 'Може приступити управљању форумом и поставкама дозвола форума.',
	'ROLE_DESCRIPTION_ADMIN_FULL'			=> 'Има приступ свим функцијама администратора на овом форуму.<br />Није препоручљиво.',
	'ROLE_DESCRIPTION_ADMIN_STANDARD'		=> 'Има приступ већини функција администратора али није у могућности да користи сервер или алате везане за систем.',
	'ROLE_DESCRIPTION_ADMIN_USERGROUP'		=> 'Може управљати групама и корисницима: Може да мења дозволе, поставке, управља забранама, и управља чиновима.',
	'ROLE_DESCRIPTION_FORUM_BOT'			=> 'Ова рола је препоручљива за роботе и пауке претраживача.',
	'ROLE_DESCRIPTION_FORUM_FULL'			=> 'Може користити све могућности форума, укључујући писање саопштења и лепљивих. Може такође игнорисати ограничење поплаве.<br />Није препоручљиво за обичне кориснике.',
	'ROLE_DESCRIPTION_FORUM_LIMITED'		=> 'Може да користи неке могућности форума, али не може да додаје прилоге нити да користи иконице порука.',
	'ROLE_DESCRIPTION_FORUM_LIMITED_POLLS'	=> 'Као и за Ограничен Приступ али може да прави гласања.',
	'ROLE_DESCRIPTION_FORUM_NOACCESS'		=> 'Не може да прегледа нити да приступа форуму.',
	'ROLE_DESCRIPTION_FORUM_ONQUEUE'		=> 'Може да користи већину могућности форума укључујући прилоге, али поруке и теме треба да буду одобрене од уредника.',
	'ROLE_DESCRIPTION_FORUM_POLLS'			=> 'Као Стандардни Приступ али може да прави гласања.',
	'ROLE_DESCRIPTION_FORUM_READONLY'		=> 'Може да чита форум, али не може да шаље нове теме нити да одговара на поруке.',
	'ROLE_DESCRIPTION_FORUM_STANDARD'		=> 'Може да користи већину могућности форума укључујући прилоге и брисање сопствених тема, али не може да закључа сопствене теме, и не може да прави гласања.',
	'ROLE_DESCRIPTION_FORUM_NEW_MEMBER'		=> 'Рола за чланове посебне групе новорегистрованих корисника; садржи <strong>НИКАДА</strong> дозволе за закључавање могућности за нове кориснике.',
	'ROLE_DESCRIPTION_MOD_FULL'				=> 'Може да користи све могућности уредника, укључујући и забране.',
	'ROLE_DESCRIPTION_MOD_QUEUE'			=> 'Може да користи Чека на Одобрење уредника за потврђивање и учитавање порука, али ништа више.',
	'ROLE_DESCRIPTION_MOD_SIMPLE'			=> 'Може да користи само основне поступке са темом. Не може да шаље опомене нити да користи чекање на одобрење.',
	'ROLE_DESCRIPTION_MOD_STANDARD'			=> 'Може да користи већину алата уређивања, али не може да забрањује кориснике нити да мења аутора поруке.',
	'ROLE_DESCRIPTION_USER_FULL'			=> 'Може да користи све доступне могућности форума за кориснике, укључујући мењање имена корисника или игнорисање ограничења поплаве.<br />Није препоручљиво.',
	'ROLE_DESCRIPTION_USER_LIMITED'			=> 'Може приступити неким од могућности корисника. Прилози, мејлови, или тренутне поруке нису дозвољене.',
	'ROLE_DESCRIPTION_USER_NOAVATAR'		=> 'Има ограничен комплет могућности и није дозвољено да користи Грбове.',
	'ROLE_DESCRIPTION_USER_NOPM'			=> 'Има ограничен комплет могућности, и није дозвољено да користи Приватне Поруке.',
	'ROLE_DESCRIPTION_USER_STANDARD'		=> 'Може приступати многим али не свим могућностима. Не може мењати име корисника нити игнорисати ограничење поплаве, на пример.',
	'ROLE_DESCRIPTION_USER_NEW_MEMBER'		=> 'Рола за чланове посебне групе новорегистрованих корисника; садржи <strong>НИКАДА</strong> дозволе за закључавање могућности за нове кориснике.',

	'ROLE_DESCRIPTION_EXPLAIN'		=> 'Можете унети кратко објашњење шта ради рола или чему је намењена. Текст који овде унесете биће приказан на екрану са дозволама такође.',
	'ROLE_DESCRIPTION_LONG'			=> 'Опис роле је предугачак, молимо вас да га ограничите на 4000 знакова.',
	'ROLE_DETAILS'					=> 'Појединости роле',
	'ROLE_EDIT_SUCCESS'				=> 'Рола је успешно додата.',
	'ROLE_NAME'						=> 'Назив роле',
	'ROLE_NAME_ALREADY_EXIST'		=> 'Рола звана <strong>%s</strong> већ постоји за изабрани тип дозволе.',
	'ROLE_NOT_ASSIGNED'				=> 'Рола још увек није додељена.',

	'SELECTED_FORUM_NOT_EXIST'		=> 'Одабрани форум(и) не постоје.',
	'SELECTED_GROUP_NOT_EXIST'		=> 'Одабрана група(е) не постоје.',
	'SELECTED_USER_NOT_EXIST'		=> 'Одабрани корисник(ци) не постоје.',
	'SELECT_FORUM_SUBFORUM_EXPLAIN'	=> 'Форум који овде изаберете ће укључити све подфоруме у одабир.',
	'SELECT_ROLE'					=> 'Изаберите ролу…',
	'SELECT_TYPE'					=> 'Изаберите тип',
	'SET_PERMISSIONS'				=> 'Поставите дозволе',
	'SET_ROLE_PERMISSIONS'			=> 'Поставите роле дозвола',
	'SET_USERS_PERMISSIONS'			=> 'Поставите дозволе корисника',
	'SET_USERS_FORUM_PERMISSIONS'	=> 'Поставите корисничке дозволе форума',

	'TRACE_DEFAULT'					=> 'По подразумеваном свака дозвола је <strong>НЕ</strong> (анулирана). Тако да се преко дозволе може преписати другим поставкама.',
	'TRACE_FOR'						=> 'Праћење за',
	'TRACE_GLOBAL_SETTING'			=> '%s (глобално)',
	'TRACE_GROUP_NEVER_TOTAL_NEVER'	=> 'Дозвола ове групе је подешена на <strong>НИКАДА</strong> као укупан резултат тако да је стари резултат задржан.',
	'TRACE_GROUP_NEVER_TOTAL_NEVER_LOCAL'	=> 'Дозвола ове групе за овај форум је подешена на <strong>НИКАДА</strong> као укупан резултат тако да је стари резултат сачуван.',
	'TRACE_GROUP_NEVER_TOTAL_NO'	=> 'Дозвола ове групе је подешена на <strong>НИКАДА</strong> што постаје нова укупна вредност јер још није подешена (подешена на <strong>НЕ</strong>).',
	'TRACE_GROUP_NEVER_TOTAL_NO_LOCAL'	=> 'Дозвола ове групе за овај форум је подешена на <strong>НИКАДА</strong> што постаје нова укупна вредност јер још увек није подешена (подешена на <strong>НЕ</strong>).',
	'TRACE_GROUP_NEVER_TOTAL_YES'	=> 'Дозвола ове групе је подешена на <strong>НИКАДА</strong> што преписује преко укупног <strong>ДА</strong> у <strong>НИКАДА</strong> за овог корисника.',
	'TRACE_GROUP_NEVER_TOTAL_YES_LOCAL'	=> 'Дозвола ове групе за овај форум је подешена на <strong>НИКАДА</strong> што преписује преко укупног <strong>ДА</strong> у <strong>НИКАДА</strong> за овог корисника.',
	'TRACE_GROUP_NO'				=> 'Дозвола је <strong>НЕ</strong> за ову групу тако да је стара укупна вредност задржана.',
	'TRACE_GROUP_NO_LOCAL'			=> 'Дозвола је <strong>НЕ</strong> за ову групу у овом форуму тако да је стара укупна вредност задржана.',
	'TRACE_GROUP_YES_TOTAL_NEVER'	=> 'Дозвола ове групе је подешена на <strong>ДА</strong> али укупно <strong>НИКАДА</strong> не може бити преписано преко.',
	'TRACE_GROUP_YES_TOTAL_NEVER_LOCAL'	=> 'Дозвола ове групе за овај форум је подешена на <strong>ДА</strong> али укупно <strong>НИКАДА</strong> не може бити преписано преко.',
	'TRACE_GROUP_YES_TOTAL_NO'		=> 'Дозвола ове групе је подешена на <strong>ДА</strong> што постаје нова укупна вредност јер још увек није подешена (подешена на <strong>НЕ</strong>).',
	'TRACE_GROUP_YES_TOTAL_NO_LOCAL'	=> 'Дозвола ове групе за овај форум је подешена на <strong>ДА</strong> што постаје нова укупна вредност јер још увек није подешена (подешена на <strong>НЕ</strong>).',
	'TRACE_GROUP_YES_TOTAL_YES'		=> 'Дозвола ове групе је подешена на <strong>ДА</strong> и укупна дозвола је већ подешена на <strong>ДА</strong>, тако да је укупни резултат задржан.',
	'TRACE_GROUP_YES_TOTAL_YES_LOCAL'	=> 'Дозвола ове групе за овај форум је подешена на <strong>ДА</strong> и укупна дозвола је већ подешена на <strong>ДА</strong>, тако је је укупни резултат задржан.',
	'TRACE_PERMISSION'				=> 'Праћење дозволе - %s',
	'TRACE_RESULT'					=> 'Прати резултат',
	'TRACE_SETTING'					=> 'Праћење поставке',

	'TRACE_USER_GLOBAL_YES_TOTAL_YES'		=> 'Дозвола корисника независно од форума сматра се <strong>ДА</strong> али укупна дозвола је већ подешена на <strong>ДА</strong>, тако да је укупан резултат задржан. %sПраћење глобалне дозволе%s',
	'TRACE_USER_GLOBAL_YES_TOTAL_NEVER'		=> 'Дозвола корисника независно од форума сматра се <strong>ДА</strong> што преписује преко тренутног месног резултата <strong>НИКАДА</strong>. %sПраћење глобалне дозволе%s',
	'TRACE_USER_GLOBAL_NEVER_TOTAL_KEPT'	=> 'Дозвола корисника независно од форума сматра се <strong>НИКАДА</strong> што не утиче на месну дозволу. %sПраћење глобалне дозволе%s',

	'TRACE_USER_FOUNDER'					=> 'Корисник је оснивач, тако да су дозволе администратора увек подешене на <strong>ДА</strong>.',
	'TRACE_USER_KEPT'						=> 'Дозвола корисника је <strong>НЕ</strong> тако да је стара укупна вредност задржана.',
	'TRACE_USER_KEPT_LOCAL'					=> 'Дозвола корисника за овај форум је <strong>НЕ</strong> тако да је стара укупна вредност задржана.',
	'TRACE_USER_NEVER_TOTAL_NEVER'			=> 'Дозвола корисника је подешена на <strong>НИКАДА</strong> и укупна вредност је подешена на <strong>НИКАДА</strong>, тако да ништа није промењено.',
	'TRACE_USER_NEVER_TOTAL_NEVER_LOCAL'	=> 'Дозволе корисника за овај форум су подешене на <strong>НИКАДА</strong> и укупна вредност је подешена на <strong>НИКАДА</strong>, тако да ништа није промењено.',
	'TRACE_USER_NEVER_TOTAL_NO'				=> 'Дозвола корисника је подешена на <strong>НИКАДА</strong> што постаје укупна вредност зато што је била подешена на НЕ.',
	'TRACE_USER_NEVER_TOTAL_NO_LOCAL'		=> 'Дозвола корисника за овај форум је подешена на <strong>НИКАДА</strong> што постаје укупна вредност јер је била подешена на НЕ.',
	'TRACE_USER_NEVER_TOTAL_YES'			=> 'Дозвола корисника је подешена на <strong>НИКАДА</strong> и преписује преко претходног <strong>ДА</strong>.',
	'TRACE_USER_NEVER_TOTAL_YES_LOCAL'		=> 'Дозвола корисника за овај форум је подешена на <strong>НИКАДА</strong> и преписује преко претходног <strong>ДА</strong>.',
	'TRACE_USER_NO_TOTAL_NO'				=> 'Дозвола корисника је <strong>НЕ</strong> и укупна вредност је била подешена на НЕ тако да је подразумевано <strong>НИКАДА</strong>.',
	'TRACE_USER_NO_TOTAL_NO_LOCAL'			=> 'Дозвола корисника за овај форум је подешена на <strong>НЕ</strong> и укупна вредност је била подешена на НЕ тако да је подразумевано <strong>НИКАДА</strong>.',
	'TRACE_USER_YES_TOTAL_NEVER'			=> 'Дозвола корисника је подешена на <strong>ДА</strong> али преко укупног <strong>НИКАДА</strong> не може бити преписано.',
	'TRACE_USER_YES_TOTAL_NEVER_LOCAL'		=> 'Дозвола корисника за овај форум је подешена на <strong>ДА</strong> али преко укупног <strong>НИКАДА</strong> не може бити преписано.',
	'TRACE_USER_YES_TOTAL_NO'				=> 'Дозвола корисника је подешена на <strong>ДА</strong> што постаје укупна вредност јер је била подешена на <strong>НЕ</strong>.',
	'TRACE_USER_YES_TOTAL_NO_LOCAL'			=> 'Дозвола корисника за овај форум је подешена на <strong>ДА</strong> што постаје укупна вредност јер је била подешена на <strong>НЕ</strong>.',
	'TRACE_USER_YES_TOTAL_YES'				=> 'Дозвола корисника је подешена на <strong>ДА</strong> и укупна вредност је подешена на <strong>ДА</strong>, тако да ништа није промењено.',
	'TRACE_USER_YES_TOTAL_YES_LOCAL'		=> 'Дозвола корисника за овај форум је подешена на <strong>ДА</strong> и укупна вредност је подешена на <strong>ДА</strong>, тако да ништа није промењено.',
	'TRACE_WHO'								=> 'Ко',
	'TRACE_TOTAL'							=> 'Укупно',

	'USERS_NOT_ASSIGNED'			=> 'Ниједном кориснику није додељена ова рола',
	'USER_IS_MEMBER_OF_DEFAULT'		=> 'је члан следећих по-себних група',
	'USER_IS_MEMBER_OF_CUSTOM'		=> 'је члан следећих властитих група',

	'VIEW_ASSIGNED_ITEMS'	=> 'Преглед додељених ставки',
	'VIEW_LOCAL_PERMS'		=> 'Месне дозволе',
	'VIEW_GLOBAL_PERMS'		=> 'Глобалне дозволе',
	'VIEW_PERMISSIONS'		=> 'Преглед дозвола',

	'WRONG_PERMISSION_TYPE'				=> 'Одабран је погрешан тип дозволе.',
	'WRONG_PERMISSION_SETTING_FORMAT'	=> 'Поставке дозвола су у погрешном облику, phpBB не може исправно да их обради.',
));
