
      <div class="table-responsive">
          <table id="filter_table" class="table table-bordered">
              <thead>
              <tr>
                  <th>ID</th>
                  <th>Статус</th>
                  <th>Link Site</th>
                  <th>Exchange</th>
                  <th>Started</th>
                  <th>Age</th>
                  <th>Expires</th>
                  <th>Project<br>
                  <?php echo Form::select('project', $project, isset($_GET['id'])?$_GET['id']:null, array('id' => 'project'));?>
                  </th>
                  <th>URL</th>
                  <th>Subjects</th>
                  <th>Anchor</th>
                  <th>Len</th>
                  <th>Comment</th>
                  <th>Price</th>
                  <th>PR</th>
                  <th>SM D/R</th>
                  <th>Ex</th>
                  <th>TF</th>
                  <th>CF</th>
                  <th>TFw</th>
                  <th>CFw</th>
                  <th>Domain Creation</th>
                  <th>Domain Age</th>
                  <th>Domain Expires</th>
                  <th> Google Index</th>
                  <th> Yandex Index</th>
                  <th>DMOZ</th>
                  <th>YACA</th>
                  <th>Alexa rank</th>


              </tr>
              </thead>
              <tbody>


              <?php

               function is_empty($res,$pr = false) {
                   if($pr && $res == 0){
                       return 0;
                   }
                  if($res == Parse_Helper::ERROR){
                      return 'Error';
                  }elseif($res == 0){
                      return '';
                  }elseif($res < 0){
                      return 'Error';
                  }
                  return  number_format($res, 0, ',', ' ');;
              }

              $ajax_url = URL::site('Main/edit');
              /**
               * @var $item Model_Param
               */
              foreach($items as $item){
                  $alexia = is_empty($item->alexa_rank);
                  $ya =  is_empty($item->yandex_index);
                  $google = is_empty($item->google_index);
                  $dmoz = !empty($item->dmoz) ?  $item->dmoz: 'Нет';
                  $yaca = !empty($item->yaca) ?  $item->yaca: 'Нет';
                  $age = $item->started_date > 0 ? Parse_Domain::age($item->started_date, time()): '';
                  $age2 = $item->domain_create > 0 ? Parse_Domain::age($item->domain_create, time()): '';
                  ?>
                  <tr id="item_<?php echo $item->id?>">
                      <td><?php echo $item->id; ?></td>
                      <td><?php echo Form::select('status-'.$item->id, Model_Param::getAllStuses(), $item->status, array(
                              'id' => 'status-'.$item->id,
                              'pk' => $item->id,
                              'post_name' => 'status-'.$item->id
                          ));?><br>
                      <?php echo HTML::anchor('', 'Удалить', array('class' => 'delete_item', 'del_id' => $item->id, "onclick" =>'return false;'));?>
                      <?php echo HTML::anchor('', 'Обновить', array('class' => 'update_item', 'update_id' => $item->link_site, 'site_id' => $item->id, "onclick" =>'return false;'));?>
                       <?php echo HTML::image('media/img/ajax.gif', array('class' => 'ajax_img' ));?>
                      </td>
                      <td><a href="#" id="link_site-<?php echo $item->id;?>" data-type="text" data-pk="<?php echo $item->id?>" data-url="<?php echo $ajax_url;?>" data-title=""><?php echo $item->link_site;?></a></td>
                      <td><a href="#" id="exchange-<?php echo $item->id;?>" data-type="text" data-pk="<?php echo $item->id?>" data-url="<?php echo $ajax_url;?>" data-title=""><?php echo is_empty($item->exchange);?></a></td>
                      <td><a href="#" id="started_date-<?php echo $item->id;?>" data-type="combodate" data-url="<?php echo $ajax_url;?>" data-value="<?php echo date('Y-m-d', $item->started_date);?>" data-format="YYYY-MM-DD" data-viewformat="DD/MM/YYYY" data-template="D / MMM / YYYY" data-pk="<?php echo $item->id?>" data-title="Select Date of birth" class="editable editable-click" data-original-title="" title=""><?php echo date('d/m/Y', $item->started_date);?></a></td>
                      <td><?php echo $age;?></td>
                      <td><a href="#" id="expires-<?php echo $item->id;?>" data-type="combodate" data-url="<?php echo $ajax_url;?>" data-value="<?php echo date('Y-m-d', $item->expires);?>" data-format="YYYY-MM-DD" data-viewformat="DD/MM/YYYY" data-template="D / MMM / YYYY" data-pk="<?php echo $item->id?>" data-title="Select Date of birth" class="editable editable-click" data-original-title="" title=""><?php echo date('d/m/Y', $item->expires);?></a></td>
                      <td><a href="#" id="project-<?php echo $item->id;?>" data-type="text" data-pk="<?php echo $item->id?>" data-url="<?php echo $ajax_url;?>" data-title="Проект"><?php echo $item->project;?></a></td>
                      <td><a href="#" id="url-<?php echo $item->id;?>" data-type="text" data-pk="<?php echo $item->id?>" data-url="<?php echo $ajax_url;?>" data-title="Url"><?php echo $item->url;?></a></td>
                      <td><a href="#" id="subject-<?php echo $item->id;?>" data-type="text" data-pk="<?php echo $item->id?>" data-url="<?php echo $ajax_url?>" data-title="Subject"><?php echo $item->subject;?></a></td>
                      <td><a href="#" id="anchor-<?php echo $item->id;?>" data-type="text" data-pk="<?php echo $item->id?>" data-url="<?php echo $ajax_url;?>" data-title="Анкор"><?php echo $item->anchor;?></a></td>
                      <td><?php echo strlen(strip_tags($item->anchor)); ?></td>
                      <td><a href="#" id="comment-<?php echo $item->id;?>" data-type="text" data-pk="<?php echo $item->id?>" data-url="<?php echo $ajax_url;?>" data-title="Комментарий"><?php echo $item->comment;?></a></td>
                      <td><a href="#" id="price-<?php echo $item->id;?>" data-type="text" data-pk="<?php echo $item->id?>" data-url="<?php echo $ajax_url;?>" data-title="Цена"><?php echo ($item->price ==0)?'':number_format($item->price, 0);?></a></td>
                      <td><?php echo (($item->fake_pr == 1)?'<b>'.is_empty($item->pr, true).'<br>':''); ?></a></td>

                      <td><?php echo is_empty($item->linkpad_donors).' / ' .is_empty($item->linkpad_recipients)?></td>
                      <td><?php echo $item->ex_link?></td>
                      <td><?php echo is_empty($item->majestic_tf)?></td>
                      <td><?php echo is_empty($item->majestic_cf)?></td>
                      <td><?php echo is_empty($item->majestic_tfw)?></td>
                      <td><?php echo is_empty($item->majestic_cfw)?></td>
                      <td><a href="#" id="domain_create-<?php echo $item->id;?>" data-type="combodate" data-url="<?php echo $ajax_url;?>" data-value="<?php echo date('Y-m-d', $item->domain_create);?>" data-format="YYYY-MM-DD" data-viewformat="DD/MM/YYYY" data-template="D / MMM / YYYY" data-pk="<?php echo $item->id?>" data-title="Select Date of birth" class="editable editable-click" data-original-title="" title=""><?php echo date('d/m/Y', $item->domain_create);?></a></td>

                      <td><?php echo $age2;?></td>
                      <td><a href="#" id="domain_expires-<?php echo $item->id;?>" data-type="combodate" data-url="<?php echo $ajax_url;?>" data-value="<?php echo date('Y-m-d', $item->domain_expires);?>" data-format="YYYY-MM-DD" data-viewformat="DD/MM/YYYY" data-template="D / MMM / YYYY" data-pk="<?php echo $item->id?>" data-title="Select Date of birth" class="editable editable-click" data-original-title="" title=""><?php echo date('d/m/Y', $item->domain_expires);?></a></td>
                      <td><?php echo $google; ?></td>
                      <td><?php echo $ya; ?></td>
                      <td style="white-space:normal;"><?php echo $dmoz?></td>
                      <td style="white-space:normal"><?php echo $yaca?></td>
                      <td><?php echo $alexia; ?></td>
                        </tr>

                  <script type="text/javascript">
                      $(document).ready(function(){
                          //anchor
                          $('#anchor-<?php echo $item->id;?>').editable();
                          $('#subject-<?php echo $item->id;?>').editable();
                          $('#comment-<?php echo $item->id;?>').editable();
                          $('#exchange-<?php echo $item->id;?>').editable();
                          $('#status-<?php echo $item->id;?>').change(function(){
                                var status = $(this);
                                var pk = status.attr('pk');
                                var val = status.val();
                                var name = status.attr('post_name');
                                $.post('<?php echo $ajax_url?>', {pk: pk, value:val, name:name}, function(data){
                                    if(data == 'ok'){
                                        $("#item_"+pk).remove();
                                    }
                                });
                          });
                          $('#price-<?php echo $item->id;?>').editable();
                          $('#project-<?php echo $item->id;?>').editable();
                          $('#link_site-<?php echo $item->id;?>').editable();
                          $('#url-<?php echo $item->id;?>').editable();
                          $('#expires-<?php echo $item->id;?>').editable({
                                format: 'yyyy-mm-dd hh:ii',
                                viewformat: 'dd/mm/yyyy hh:ii',
                                datetimepicker: {
                                        weekStart: 1
                                   }
                                });
                          $('#started_date-<?php echo $item->id;?>').editable({
                                   format: 'yyyy-mm-dd hh:ii',
                                   viewformat: 'dd/mm/yyyy hh:ii',
                                   datetimepicker: {
                                           weekStart: 1
                                      }
                                   });
                          $('#domain_create-<?php echo $item->id;?>').editable({
                              format: 'yyyy-mm-dd hh:ii',
                              viewformat: 'dd/mm/yyyy hh:ii',
                              datetimepicker: {
                                  weekStart: 1
                              }
                          });

                          $('#domain_expires-<?php echo $item->id;?>').editable({
                              format: 'yyyy-mm-dd hh:ii',
                              viewformat: 'dd/mm/yyyy hh:ii',
                              datetimepicker: {
                                  weekStart: 1
                              }
                          });

                      });

                  </script>
              <?php }?>
              </tbody>
          </table>
          <?php echo $pagination?>
      </div>
<script type="text/javascript">
    function setColor(){
        $("td").each(function() {
            var td = $(this);
            var href = td.find("a");
            if(href.html() == 'Empty' || href.html() == '31/12/1969' ||  href.html() == '01/01/1970'){
                href.css('color', 'white');
                href.css('border-bottom', 'white');
            }else{
                href.css('color', '#0088cc');
                href.css('border-bottom', 'dashed 1px #0088cc');
            }

        });
    }
    $(document).ajaxSuccess(function() {
        setColor();
     location.reload();
    });
    $(document).ready(function(){
        setColor();
        $(".ajax_img").hide();
        $("#project").change(function(){
            window.location = "<?php echo $search_uri.'?project='?>"
                + $("#project option:selected").text() + '&id='+$(this).val();
        });

        $(".delete_item").on('click', function(){
            var id = $(this).attr('del_id');

            if(confirm('Вы действительно хотите удалить запись?')){
                $.post('<?php echo URL::base().'main/delete'?>', {id: id}, function(data){
                    if(data ="ok"){
                        $("#item_"+id).remove();
                    }

                });
            }

        });

        $(".update_item").on('click', function () {
            var id = $(this).attr('update_id');
            var site_id = $(this).attr('site_id');
            var img = $(this).next();
            img.show();
            $.post('<?php echo URL::base().'link/ajaxupdate'?>', {urls: id, id:site_id}, function (data) {
                img.hide();
             location.reload();
            });


        });

    });

</script>