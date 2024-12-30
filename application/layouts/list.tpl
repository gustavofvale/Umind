<!-- BEGIN PAGE CONTENT-->
<div class="row">
	<div class="col-md-12">
		<!-- BEGIN EXAMPLE TABLE PORTLET-->
		<div class="portlet box blue">
			<div class="portlet-title">
				<div class="caption">
					<i class="icon-edit"></i>
				</div>
				<div class="tools">
					<a href="javascript:;" class="collapse"></a>
					<a href="javascript:;" class="reload"></a>
					<a href="javascript:;" class="remove"></a>
				</div>                  
			</div>
			<div class="portlet-body">
				<div class="table-toolbar">
					<div class="btn-group">
						<a href="{$this->CreateUrl("form", NULL, NULL, [])}/" id="sample_editable_1_new" class="btn green">
							Add Novo <i class="icon-plus"></i>
						</a>
					</div>
				</div>				
				<table class="table table-striped table-hover table-bordered" id="sample_1">
					<thead>
						<tr>
							{foreach $_model->getCampo() as $column=>$value}
								{if $_model->getVisibility($column, 'list')}
									<th>
										{$value}
									</th>
								{/if}
							{/foreach}
							<th width="150">Opções</th>
						</tr>
					</thead>
					<tbody>
						{foreach from=$paginator item=row}
							<tr>
								{foreach $_model->getCampo() as $column=>$value}
									{if $_model->getVisibility($column, 'list')}
									<td>
										{$this->GetColumnValue($row, $column)}	
									</td>
									{/if}
								{/foreach}
								<td class="center">
									<a class="btn btn-sm yellow" href="{$this->CreateUrl("form", NULL, NULL, [])}/{$primary}/{$row[$primary]}">Edit <i class="icon-edit"></i></a>
									<a class="btn btn-sm red" href="{$this->CreateUrl("delete", NULL, NULL, [])}/{$primary}/{$row[$primary]}">Delete <i class="icon-remove"></i></a>
								</td>
							</tr>
						{/foreach}
					</tbody>
				</table>
			</div>
		</div>
	<!-- END EXAMPLE TABLE PORTLET-->
    </div>
</div>