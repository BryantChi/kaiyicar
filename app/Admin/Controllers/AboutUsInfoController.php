<?php

namespace App\Admin\Controllers;

use App\Admin\Repositories\AboutUsInfo;
use Dcat\Admin\Form;
use Dcat\Admin\Grid;
use Dcat\Admin\Show;
use Dcat\Admin\Http\Controllers\AdminController;
use App\Models\AboutUsInfo as AboutUs;

class AboutUsInfoController extends AdminController
{
    /**
     * Make a grid builder.
     *
     * @return Grid
     */
    protected function grid()
    {
        return Grid::make(new AboutUsInfo(), function (Grid $grid) {
            $grid->disableFilterButton();
            $grid->showColumnSelector();
            // $grid->column('id')->sortable();
            $grid->column('content');
            $grid->column('created_at');
            $grid->column('updated_at')->sortable();

            $grid->filter(function (Grid\Filter $filter) {
                $filter->equal('id');

            });

            $info = AboutUs::all();
            if (count($info) > 0) {
                $grid->disableCreateButton();
            }
            $grid->disableFilter();
        });
    }

    /**
     * Make a show builder.
     *
     * @param mixed $id
     *
     * @return Show
     */
    protected function detail($id)
    {
        return Show::make($id, new AboutUsInfo(), function (Show $show) {
            $show->field('id');
            $show->field('content');
            $show->field('created_at');
            $show->field('updated_at');
        });
    }

    /**
     * Make a form builder.
     *
     * @return Form
     */
    protected function form()
    {
        return Form::make(new AboutUsInfo(), function (Form $form) {
            $form->display('id');
            $form->textarea('content');

            $form->display('created_at');
            $form->display('updated_at');
        });
    }
}
