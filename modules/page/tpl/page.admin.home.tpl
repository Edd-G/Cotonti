<!-- BEGIN: MAIN -->
<h2>{PHP.L.Pages}</h2>
<div class="wrapper">
	<ul class="std">
		<li><a href="{ADMIN_HOME_URL}">{PHP.L.adm_valqueue}: {ADMIN_HOME_PAGESQUEUED}</a></li>
		<li><a href="{PHP|cot_url('page','m=add')}">{PHP.L.Add}</a></li>
		<li><a href="{PHP.db_pages|cot_url('admin','m=extrafields&n=$this')}">{PHP.L.home_ql_b2_2}</a></li>
	</ul>
</div>
<!-- END: MAIN -->