<?php

namespace App\Admin\Controllers;

use App\Admin\Repositories\CarWitnessInfo;
use Dcat\Admin\Form;
use Dcat\Admin\Grid;
use Dcat\Admin\Show;
use Dcat\Admin\Http\Controllers\AdminController;

class CarWitnessInfoController extends AdminController
{
    /**
     * Make a grid builder.
     *
     * @return Grid
     */
    protected function grid()
    {
        return Grid::make(new CarWitnessInfo(), function (Grid $grid) {
            // $grid->column('id')->sortable();
            // $grid->column('title');
            // $grid->column('witnessFrontCover');
            // $grid->column('content');
            // $grid->column('path');
            // $grid->column('created_at');
            // $grid->column('updated_at')->sortable();

            // $grid->filter(function (Grid\Filter $filter) {
            //     $filter->equal('id');
            // });
            $grid->export();
            $grid->disableFilterButton();
            $grid->showColumnSelector();
            $grid->column('id')->sortable();
            $grid->column('witnessFrontCover')->image();
            $grid->column('title')->sortable();
            // $grid->column('content');
            $grid->column('created_at')->sortable();
            $grid->column('updated_at')->sortable();

            $grid->actions(function ($actions) {
                // 去掉删除
                $actions->disableDelete();
            });

            $grid->batchActions(function ($batch) {
                // $batch->disableDelete();
            });

            $grid->quickSearch('title');

            $grid->filter(function($filter){

                // 去掉默认的id过滤器
                $filter->disableIdFilter();

                // 在这里添加字段过滤器
                // $filter->like('', '');

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
        return Show::make($id, new CarWitnessInfo(), function (Show $show) {
            $show->field('id');
            $show->field('title');
            $show->field('witnessFrontCover')->image();
            $show->field('content')->unescape()->as(function ($content) {
                return $content;
            });
            $show->field('path')->image();
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
        return Form::make(new CarWitnessInfo(), function (Form $form) {
            $form->display('id');
            $form->text('title')->required();
            $form->image('witnessFrontCover')->move('images/witness/'.date('Ym').'/frontCover')->uniqueName()->rules('mimes:jpg,jpeg,png,gif');
            $form->editor('content')->options(['menubar' => false, 'toolbar' => ['code undo redo restoredraft | cut copy paste pastetext | forecolor backcolor bold italic underline strikethrough link anchor | alignleft aligncenter alignright alignjustify outdent indent | \
            styleselect formatselect fontselect fontsizeselect | bullist numlist | blockquote subscript superscript removeformat | \
            table image media charmap emoticons hr pagebreak insertdatetime print preview | fullscreen | bdmap indent2em lineheight formatpainter axupimgs']])->imageDirectory('editor/images');
            $form->multipleImage('path')->move('images/witness/'.date('Ym'))->maxSize(3072)->uniqueName()->rules('mimes:jpg,jpeg,png,gif|nullable')->sortable();

            $form->display('created_at');
            $form->display('updated_at');
        });
    }
}
