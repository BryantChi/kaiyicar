<?php

namespace App\Admin\Controllers;

use App\Admin\Repositories\AuthenticateInfo;
use Dcat\Admin\Form;
use Dcat\Admin\Grid;
use Dcat\Admin\Show;
use Dcat\Admin\Http\Controllers\AdminController;
use Intervention\Image\Facades\Image;

class AuthenticateInfoController extends AdminController
{
    /**
     * Make a grid builder.
     *
     * @return Grid
     */
    protected function grid()
    {
        return Grid::make(new AuthenticateInfo(), function (Grid $grid) {
            $grid->disableFilterButton();
            $grid->showColumnSelector();
            // 显示快捷编辑按钮
            $grid->showQuickEditButton();
            $grid->column('id')->sortable();
            $grid->column('authenticate_name')->sortable();
            $grid->column('authenticate_path')->image();
            $grid->column('created_at');
            $grid->column('updated_at')->sortable();

            $grid->filter(function (Grid\Filter $filter) {
                $filter->equal('id');

            });

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
        return Show::make($id, new AuthenticateInfo(), function (Show $show) {
            $show->panel()
                ->tools(function ($tools) {
                    // $tools->disableEdit();
                    // $tools->disableList();
                    // $tools->disableDelete();
                    // 显示快捷编辑按钮
                    $tools->showQuickEdit();

            });
            $show->field('id');
            $show->field('authenticate_name');
            $show->field('authenticate_path')->image();
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

        return Form::make(new AuthenticateInfo(), function (Form $form) {
            $form->display('id');
            $form->text('authenticate_name');
            $form->image('authenticate_path')->uniqueName()->move('images/authenticate/'.date('Ym'))->accept('jpg,jpeg,png,gif')->maxSize(1024);
            // ->saving(function ($paths) {
            //     // 可以转化为由 , 隔开的字符串格式
            //     // return implode(',', $paths);

            //     // 也可以转化为json
            //     return json_encode($paths);
            // });

            $form->display('created_at');
            $form->display('updated_at');
        });
    }
}
