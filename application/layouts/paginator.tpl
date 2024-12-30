<div class="col-md-7 col-sm-12">
	<div class="dataTables_paginate paging_bootstrap">
		<ul class="pagination">
			<li class="prev"><a {if isset($previous)}href="{$this->url(['page' => $previous])}"{/if} class="no-border"><i class="icon-angle-left"></i></a></li>
			
			{foreach from=$pagesInRange item=page}
				{if $page != $this->current}
					<li>
						<a href="{$this->url(['page' => $page])}">{$page}</a>
					</li>
				{else}
					<li>
						<a class="active" href="{$this->url(['page' => $page])}">{$page}</a>
					</li>
				{/if}
			{/foreach}
			
			<li class="next"><a {if isset($next)}href="{$this->url(['page' => $next])}"{/if} class="no-border"><i class="icon-angle-right"></i></a></li>
		</ul>
	</div>
</div>
