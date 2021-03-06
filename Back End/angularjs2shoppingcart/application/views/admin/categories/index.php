<section class="content">
  <div class="row">
    <div class="col-xs-12">
      <div class="box">
        <div class="box-header">
          <h3 class="box-title"><?php echo lang('admin_category_title')?></h3>
        </div>
        <!-- /.box-header -->

        <?php if($this->session->flashdata()){?>
                <h6 class="error"  style="color: red;"><?php echo $this->session->flashdata('message');?></h6>
        <?php }?>
        <div class="box-body">
          <div id="example1_wrapper"
            class="dataTables_wrapper form-inline dt-bootstrap">
         
            <div class="row">
              <div class="col-sm-12">
                <table id="example1"
                  class="table table-bordered table-striped dataTable"
                  role="grid" aria-describedby="example1_info">
                  <thead>
                    <tr role="row">
                      <th class="sorting_asc" tabindex="0" aria-controls="example1"
                        rowspan="1" colspan="1" aria-sort="ascending"
                        aria-label="Rendering engine: activate to sort column descending"
                        style="width: 181px;"><?php echo lang('admin_name')?></th>
                    
                      <th class="sorting" tabindex="0" aria-controls="example1"
                        rowspan="1" colspan="1"
                        aria-label="Platform(s): activate to sort column ascending"
                        style="width: 197px;"><?php echo lang('admin_status')?></th>
					<th class="sorting" tabindex="0" aria-controls="example1"
                        rowspan="1" colspan="1"
                        aria-label="Platform(s): activate to sort column ascending"
                        style="width: 197px;"><?php echo lang('admin_order_category')?></th>
                      <th class="sorting" tabindex="0" aria-controls="example1"
                        rowspan="1" colspan="1"
                        aria-label="Engine version: activate to sort column ascending"
                        style="width: 154px;"><?php echo lang('admin_category_parent')?></th>
                      <th class="sorting" tabindex="0" aria-controls="example1"
                        rowspan="1" colspan="1"
                        aria-label="Engine version: activate to sort column ascending"
                        style="width: 154px;"><?php echo lang('admin_action')?></th>
                    </tr>
                  </thead>
                  <tbody>
                    <?php foreach($data as $item){?>
                    <tr role="row" class="even">
                      <td class="sorting_1">
                        <?php echo $item->name?>
                      </td>
                     
					  
                      <td>
                        <?php if($item->status==1){?>
						<a href="<?php echo site_url('admin/categories/active/'.$item->id)?>">Active</a>
						<?php }else{?>
						<a href="<?php echo site_url('admin/categories/deactive/'.$item->id)?>">Deactive</a>
						<?php }?>
                      </td>
					  <td>
                        <?php echo $item->orders?>
                      </td>
                      <td><?php 
                        if($item->parentId==0){
                          echo 'None';
                        }else{
                          $parent=$this->categoriesmodel->findById($item->parentId);
                          echo  $parent[0]->name;
                        }?>
                      </td>
                      <td> 
                          <a href="<?php echo site_url('admin/categories/update/'.$item->id)?>"><?php echo lang('admin_edit')?></a> | 
                           <a href="<?php echo site_url('admin/categories/findByCategories/'.$item->id)?>"><?php echo lang('admin_articles')?></a> |
						   <a href="<?php echo site_url('admin/categories/delete/'.$item->id)?>" onclick="return confirm('Are you sure?')"><?php echo lang('admin_delete')?></a> 
                        </td>

                    </tr>
                    <?php }?>
                  </tbody>
                
                </table>
              </div>
            </div>
          
          </div>
        </div>
        <!-- /.box-body -->
      </div>
      <!-- /.box -->
    </div>
    <!-- /.col -->
  </div>
  <!-- /.row -->
</section>
