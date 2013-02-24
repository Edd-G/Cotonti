<?php
/**
 * Russian Language File for URL management tool
 *
 * @package urleditor
 * @version 0.9.0
 * @author Cotonti Team
 * @copyright Copyright (c) Cotonti Team 2008-2013
 * @license BSD
 */

defined('COT_CODE') or die('Wrong URL.');

$L['adm_urls'] = 'Ссылки';
$L['adm_urls_area'] = 'Модуль';
$L['adm_urls_custom_htaccess'] = 'Дополнительные правила .htaccess';
$L['adm_urls_error_dat'] = 'Ошибка: datas/urltrans.dat недоступен для записи! Создайте его и установите CHMOD 666.';
$L['adm_urls_format'] = 'Формат';
$L['adm_urls_htaccess'] = 'Перезаписать .htaccess?';
$L['adm_urls_new'] = 'Новое правило';
$L['adm_urls_parameters'] = 'Параметры';
$L['adm_urls_rules'] = 'Правила преобразования URL';
$L['adm_urls_save'] = 'Сохранить';
$L['adm_urls_your'] = 'Ваш';
$L['adm_urls_callbacks'] = 'Правило содержит callback-вызовы';
$L['adm_urls_errors'] = 'Вам придется добавить опции rewrite для них вручную.';
$L['adm_help_urls'] = 'На этой странице вы можете настроить формат ссылок, используя простые правила преобразования. Удостоверьтесь в корректности и отсутствии повторяющихся правил. Не используйте пробелы, символы табуляции и прочие специальные символы в правилах. Разделы и параметры объяснены ниже.
<ol>
<li><strong>Модуль</strong> - название скрипта, к которому относится правило. Метасимвол (*) означает &laquo;любой скрипт&raquo;.</li>
<li><strong>Параметры</strong> - условие, проверяемое на параметрах ссылки. Это строка, содержащая пары имя-значение, разделенные символом &amp; и символом = между именем и значением. Знак вопроса (?) в начале строки ставить не следует. Если вы задаете здесь некоторую переменную, то для работы правила она должна присутствовать в параметрах ссылки. Символ * означает любое значение, одиночное значение или список возможных значений, разделенных вертикальной чертой (|). Все значения должны быть URL-кодированы. <em>Пример: name=Val|Josh&amp;id=124&amp;page=*</em>.</li>
<li><strong>Формат</strong> задает формат формирования ссылки. Это строка, содержащая специальные последовательности, заменяемые их значениями. Обычная последовательность выглядит как {$name}, где &quot;name&quot; - имя параметра ссылки (GET-переменной), значение которой будет вставлено в место этой последовательности (или {!$name} если ее вставка не требуется). Есть несколько специальных последовательностей, не содержащихся в параметрах ссылки (&quot;query string&quot;):
	<ul>
		<li><em>{$_area}</em> - имя скрипта;</li>
		<li><em>{$_host}</em> - имя хоста из главной ссылки сайта;</li>
		<li><em>{$_rhost}</em> - имя хоста из текущего HTTP-запроса;</li>
		<li><em>{$_path}</em> - путь сайта относительно корня сервера, / если сайт в корне.</li>
	</ul>
Вы можете также использовать параметризированные поддомены, если укажете абсолютную ссылку вида: <em>http://{$c}.site.com/{$al}.html</em>. На данный мамент поддомены поддерживаются только для серверов Apache.</li>
<li><strong>Новое правило</strong> - добавляет новое правило в таблицу.</li>
<li><strong>Порядок</strong> - помните, что порядок следования правил имеет значение. Алгоритм преобразования ссылок ищет подходящее правило следующим образом: сначала он ищет правила для текущего скрипта, потом он пробует найти <em>первое</em> правило, подходящее по параметрам; если подходящее правило не найдено, происходит возврат к универсальным правилам (модуль *) и первое подходящее правило ищется там. Рекомендуется правило по умолчанию (с * модулем и * параметрами) ставить последнем среди всех правил для *-модуля или даже последним в таблице.<br />
Вы можете поменять порядок правил простым перетаскиванием нужных строк в таблице. Рекомендуется сохранить новые правила перед изменением порядка, иначе перетаскивание для них работать не будет.</li>
<li><strong>Query String</strong> - это то, что вы видите в большинстве ссылок после знака вопроса. Она используется для передачи остальных GET-параметров, которые вы не использовали при составлении Формата, и автоматически присоединяется к ссылке в таком случае.</li>
<li><strong>Сохранить</strong> - эта кнопка сохранит правила, и изменения вступят в силу немедленно. Такжы будет изменен ваш .htaccess (если возможно), и вам будут предоставлены директивы для .htaccess/IsapiRewrite4.ini/nginx.conf (в зависимости от используемого сервера).</li>
</ol>';

$L['cfg_preset'] = array('Набор предустановок');
$L['cfg_preset_params'] = array(
	'handy' => 'Удобный',
	'compat' => 'Совместимый с Genoa/Seditio',
	'custom' => 'Собственный urltrans.dat',
	'none' => 'Отключено'
);

$L['info_desc'] = 'Преобразования URL\'ов и поддержка ЧПУ через файлы предустановок';

