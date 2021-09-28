<?php

namespace App\Admin\Controllers;

use App\Models\Etudiant;
use Encore\Admin\Controllers\AdminController;
use Encore\Admin\Form;
use Encore\Admin\Grid;
use Encore\Admin\Show;

class EtudiantController extends AdminController
{
    /**
     * Title for current resource.
     *
     * @var string
     */
    protected $title = 'Etudiant';

    /**
     * Make a grid builder.
     *
     * @return Grid
     */
    protected function grid()
    {
        $grid = new Grid(new Etudiant());

        $grid->column('id', __('Id'));
        $grid->column('name', __('Name'));
        $grid->column('num_carte', __('Num carte'));
        $grid->column('email', __('Email'));
        $grid->column('genre', __('Genre'));
        $grid->column('telephone', __('Telephone'));
        $grid->column('date_naiss', __('Date naiss'));
        $grid->column('password', __('Password'));
        $grid->column('address', __('Address'));
        $grid->column('remember_token', __('Remember token'));
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
        $show = new Show(Etudiant::findOrFail($id));

        $show->field('id', __('Id'));
        $show->field('name', __('Name'));
        $show->field('num_carte', __('Num carte'));
        $show->field('email', __('Email'));
        $show->field('genre', __('Genre'));
        $show->field('telephone', __('Telephone'));
        $show->field('date_naiss', __('Date naiss'));
        $show->field('password', __('Password'));
        $show->field('address', __('Address'));
        $show->field('remember_token', __('Remember token'));
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
        $form = new Form(new Etudiant());

        $form->text('name', __('Name'));
        $form->text('num_carte', __('Num carte'));
        $form->email('email', __('Email'));
        $form->text('genre', __('Genre'));
        $form->text('telephone', __('Telephone'));
        $form->date('date_naiss', __('Date naiss'))->default(date('Y-m-d'));
        $form->password('password', __('Password'));
        $form->text('address', __('Address'));
        $form->text('remember_token', __('Remember token'));

        return $form;
    }

}
