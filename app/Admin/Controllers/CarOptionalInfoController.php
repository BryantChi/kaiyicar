<?php

namespace App\Admin\Controllers;

use App\Admin\Repositories\CarOptionalInfo;
use Dcat\Admin\Form;
use Dcat\Admin\Grid;
use Dcat\Admin\Show;
use Dcat\Admin\Http\Controllers\AdminController;
use App\Models\CarTypeInfo;
use App\Models\CatalogCarInfo;
use Dcat\Admin\Widgets\Alert;

class CarOptionalInfoController extends AdminController
{
    /**
     * Make a grid builder.
     *
     * @return Grid
     */
    protected function grid()
    {
        return Grid::make(new CarOptionalInfo(), function (Grid $grid) {
            $grid->export();
            $grid->disableFilterButton();
            $grid->showColumnSelector();
            // 禁用删除按钮
            // $grid->disableDeleteButton();
            // 显示快捷编辑按钮
            $grid->showQuickEditButton();
            $grid->column('id')->sortable();
            $grid->column('carTypeId')->display(function($carTypeId) {
                $typeInfo = CarTypeInfo::find($carTypeId);
                return $typeInfo->typeName;
            })->sortable();
            $grid->column('optionalName');
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
        return Show::make($id, new CarOptionalInfo(), function (Show $show) {
            $show->panel()
                ->tools(function ($tools) {
                    // $tools->disableEdit();
                    // $tools->disableList();
                    // $tools->disableDelete();
                    // 显示快捷编辑按钮
                    $tools->showQuickEdit();

            });
            $show->field('id');
            $show->field('carTypeId')->as(function($carTypeId) {
                $typeInfo = CarTypeInfo::find($carTypeId);
                return $typeInfo->typeName;
            });
            $show->field('optionalName');
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
        return Form::make(new CarOptionalInfo(), function (Form $form) {
            $form->display('id');
            $form->select('carTypeId')->options('/api/getCarType')->required();
            $form->text('optionalName');

            $form->display('created_at');
            $form->display('updated_at');

            $form->deleting(function (Form $forms) {
                $datas = json_decode(json_encode($forms->model()->toArray()));
                $optionals = json_decode(CatalogCarInfo::get('carOptionals'));
                foreach ($datas as $value) {
                    foreach ($optionals as $val) {
                        if (in_array($value->id,$val->carOptionals)) {
                            return $forms->response()->error('數據使用中，不可刪除！！！');
                        }
                    }
                }
            });
        });
    }
}
