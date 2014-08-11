<?php defined('SYSPATH') or die('No direct script access.');

class Controller_Widgets_Table extends Controller {

	public function action_index()
	{
        $id = (int)$this->request->param('id');
        $count = ORM::factory('Param')->where('status', '=', $id)->count_all();
        $pagination = Pagination::factory(array('total_items' => $count));
        $items = ORM::factory('Param')
            ->where('status', '=', $id)
            ->limit($pagination->items_per_page)
            ->offset($pagination->offset)
            ->find_all();
        $this->response->body(View::factory('widgets/in_table',array('items' => $items, 'pagination'=>$pagination)));
	}
}
