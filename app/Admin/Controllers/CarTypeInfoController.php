<?php

namespace App\Admin\Controllers;

use App\Admin\Repositories\CarTypeInfo;
use Dcat\Admin\Form;
use Dcat\Admin\Grid;
use Dcat\Admin\Show;
use Dcat\Admin\Http\Controllers\AdminController;

class CarTypeInfoController extends AdminController
{
    protected $carTypeRepo;

    public function __construct(CarTypeInfo $carTypeInfo) {
        $this->carTypeRepo = $carTypeInfo;
    }

    /**
     * Make a grid builder.
     *
     * @return Grid
     */
    protected function grid()
    {
        return Grid::make(new CarTypeInfo(), function (Grid $grid) {
            $grid->export();
            $grid->disableFilterButton();
            $grid->showColumnSelector();
            // 禁用删除按钮
            $grid->disableDeleteButton();
            // 显示快捷编辑按钮
            $grid->showQuickEditButton();
            $grid->column('id')->sortable();
            $grid->column('typeName');
            $grid->column('created_at');
            $grid->column('updated_at')->sortable();

            $info = $this->carTypeRepo->getAllCarTypes()::all();
            if (count($info) >= 3) {
                $grid->disableCreateButton();
            }

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
        return Show::make($id, new CarTypeInfo(), function (Show $show) {
            $show->panel()
                ->tools(function ($tools) {
                    // $tools->disableEdit();
                    // $tools->disableList();
                    $tools->disableDelete();
                    // 显示快捷编辑按钮
                    $tools->showQuickEdit();

            });
            $show->field('id');
            $show->field('typeName');
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
        return Form::make(new CarTypeInfo(), function (Form $form) {
            $form->display('id');
            $form->text('typeName');

            $form->display('created_at');
            $form->display('updated_at');
        });
    }
}
