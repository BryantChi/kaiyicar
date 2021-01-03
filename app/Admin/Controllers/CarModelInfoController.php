<?php

namespace App\Admin\Controllers;

use App\Admin\Repositories\CarModelInfo;
use Dcat\Admin\Form;
use Dcat\Admin\Grid;
use Dcat\Admin\Show;
use Dcat\Admin\Http\Controllers\AdminController;
use App\Models\CarTypeInfo;

class CarModelInfoController extends AdminController
{
    /**
     * Make a grid builder.
     *
     * @return Grid
     */
    protected function grid()
    {
        return Grid::make(new CarModelInfo(), function (Grid $grid) {
            $grid->export();
            $grid->disableFilterButton();
            $grid->showColumnSelector();
            $grid->column('id')->sortable();
            $grid->column('carTypeId')->display(function($carTypeId) {
                $typeInfo = CarTypeInfo::find($carTypeId);
                return $typeInfo->typeName;
            })->sortable();
            $grid->column('modelName');
            $grid->column('created_at');
            $grid->column('updated_at')->sortable();

            $grid->filter(function (Grid\Filter $filter) {
                $filter->equal('id');

            });
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
        return Show::make($id, new CarModelInfo(), function (Show $show) {
            $show->field('id');
            $show->field('carTypeId')->as(function($carTypeId) {
                $typeInfo = CarTypeInfo::find($carTypeId);
                return $typeInfo->typeName;
            });
            $show->field('modelName');
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
        return Form::make(new CarModelInfo(), function (Form $form) {
            $form->display('id');
            $form->select('carTypeId')->options('/api/getCarType')->required();
            $form->text('modelName');

            $form->display('created_at');
            $form->display('updated_at');
        });
    }
}
