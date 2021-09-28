<?php

namespace App\Admin\Controllers;

use App\Models\Event;
use Encore\Admin\Controllers\AdminController;
use Encore\Admin\Form;
use Encore\Admin\Grid;
use Encore\Admin\Show;

class EventController extends AdminController
{
    /**
     * Title for current resource.
     *
     * @var string
     */
    protected $title = 'Event';

    /**
     * Make a grid builder.
     *
     * @return Grid
     */
    protected function grid()
    {
        $grid = new Grid(new Event());

        $grid->column('id', __('Id'));
        $grid->column('nom_events', __('Nom events'));
        $grid->column('description', __('Description'));
        $grid->column('image', __('Image'));
        $grid->column('date_events', __('Date events'));
        $grid->column('typeevents', __('Typeevents'));
        $grid->column('created_at', __('Created at'));
        $grid->column('updated_at', __('Updated at'));

        return $grid;
    }

    /**
     * Make a show builder.
     *
     * @param mixed $id
     * @return Show
     */
    protected function detail($id)
    {
        $show = new Show(Event::findOrFail($id));

        $show->field('id', __('Id'));
        $show->field('nom_events', __('Nom events'));
        $show->field('description', __('Description'));
        $show->field('image', __('Image'));
        $show->field('date_events', __('Date events'));
        $show->field('typeevents', __('Typeevents'));
        $show->field('created_at', __('Created at'));
        $show->field('updated_at', __('Updated at'));

        return $show;
    }

    /**
     * Make a form builder.
     *
     * @return Form
     */
    protected function form()
    {
        $form = new Form(new Event());

        $form->text('nom_events', __('Nom events'));
        $form->textarea('description', __('Description'));
        $form->image('image', __('Image'));
        $form->date('date_events', __('Date events'))->default(date('Y-m-d'));
        $form->number('typeevents', __('Typeevents'));


        return $form;
    }
}
