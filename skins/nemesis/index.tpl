<!-- BEGIN: MAIN -->

		<div id="center" class="column">
			<div class="block">
				<h2 class="news">{PHP.L.News}</h2>
				{INDEX_NEWS}
			</div>
		</div>

		<div id="side" class="column">
<!-- IF {PHP.usr.isadmin} -->{FILE "skins/nemesis/inc/admin.tpl"}<!-- ENDIF -->
			<div class="block">
				<h2 class="polls">{PHP.L.Polls}</h2>
				{PLUGIN_INDEXPOLLS}
			</div>
			<div class="block">
				<h2 class="tags">{PHP.L.Tags}</h2>
				{INDEX_TAG_CLOUD}
			</div>
			<div class="block">
				<h2 class="online">{PHP.skinlang.index.Online}</h2>
				<p><a href="plug.php?e=whosonline">{PHP.out.whosonline}</a><!-- IF {PHP.out.whosonline_reg_list} -->:<br />{PHP.out.whosonline_reg_list}<!-- ENDIF --></p>
			</div>
		</div>

<!-- IF {PHP.cfg.plugin.recentitems.recentpages} && !{PHP.cfg.disable_page} --> 
		<div class="clear block">
			<h2 class="page">{PHP.skinlang.index.Recentadditions}</h2>
			<div>{PLUGIN_LATESTPAGES}</div>
		</div>
<!-- ENDIF -->
<!-- IF {PHP.cfg.plugin.recentitems.recentforums} && !{PHP.cfg.disable_forums} -->
		<div class="clear block">
			<h2 class="forums">{PHP.skinlang.index.Newinforums}</h2>
			<div>{PLUGIN_LATESTTOPICS}</div>
		</div>
<!-- ENDIF -->

<!-- END: MAIN -->