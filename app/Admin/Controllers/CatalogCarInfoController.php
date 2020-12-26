<?php

namespace App\Admin\Controllers;

use App\Admin\Repositories\CatalogCarInfo;
use Dcat\Admin\Form;
use Dcat\Admin\Grid;
use Dcat\Admin\Show;
use Dcat\Admin\Http\Controllers\AdminController;

class CatalogCarInfoController extends AdminController
{
    /**
     * Make a grid builder.
     *
     * @return Grid
     */
    protected function grid()
    {
        return Grid::make(new CatalogCarInfo(), function (Grid $grid) {
            $grid->export();
            $grid->column('id')->sortable();
            $grid->column('carName');
            $grid->column('carFrontCover');
            $grid->column('carType');
            $grid->column('carModel');
            $grid->column('carOptionals');
            $grid->column('carManufactureYear');
            $grid->column('price');
            $grid->column('priceShow');
            $grid->column('milage');
            $grid->column('milageUnit');
            $grid->column('carImageUrl');
            $grid->column('carFileUrl');
            $grid->column('carDiscription');
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
        return Show::make($id, new CatalogCarInfo(), function (Show $show) {
            $show->field('id');
            $show->field('carName');
            $show->field('carFrontCover');
            $show->field('carType');
            $show->field('carModel');
            $show->field('carOptionals');
            $show->field('carManufactureYear');
            $show->field('price');
            $show->field('priceShow');
            $show->field('milage');
            $show->field('milageUnit');
            $show->field('carImageUrl');
            $show->field('carFileUrl');
            $show->field('carDiscription');
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
        return Form::make(new CatalogCarInfo(), function (Form $form) {
            $form->display('id');
            $form->text('carName')->required();
            $form->image('carFrontCover')->move('images/'.date('Ym').'/frontCover')->uniqueName()->rules('mimes:jpg,jpeg,png,gif');
            $form->select('carType');
            $form->select('carModel')->required();

            $form->checkbox('carOptionals');

            $form->date('carManufactureYear')->format('YYYY-MM-DD')->required();
            $form->currency('price')->required();
            $form->radio('priceShow')->options([1 => '顯示', 0 => '不顯示'])->default(1)->required();
            $form->currency('milage')->symbol('')->required();
            $form->radio('milageUnit')->options(['miles' => 'miles', 'km' => 'km'])->default('miles')->required();
            $form->multipleImage('carImageUrl')->move('images/'.date('Ym'))->maxSize(1024)->uniqueName()->rules('mimes:jpg,jpeg,png,gif')->sortable();
            $form->file('carFileUrl')->move('files/certificate/'.date('Ym'))->uniqueName()->rules('mimes:pdf,doc,docx,txt|nullable');
            $form->editor('carDiscription')->options(['menubar' => false, 'toolbar' => ['code undo redo restoredraft | cut copy paste pastetext | forecolor backcolor bold italic underline strikethrough link anchor | alignleft aligncenter alignright alignjustify outdent indent | \
            styleselect formatselect fontselect fontsizeselect | bullist numlist | blockquote subscript superscript removeformat | \
            table charmap emoticons hr pagebreak insertdatetime print preview | fullscreen | bdmap indent2em lineheight formatpainter axupimgs']]);

            $form->display('created_at');
            $form->display('updated_at');
        });
    }
}

/* 'code undo redo restoredraft | cut copy paste pastetext | forecolor backcolor bold italic underline strikethrough link anchor | alignleft aligncenter alignright alignjustify outdent indent | \
styleselect formatselect fontselect fontsizeselect | bullist numlist | blockquote subscript superscript removeformat | \
table image media charmap emoticons hr pagebreak insertdatetime print preview | fullscreen | bdmap indent2em lineheight formatpainter axupimgs' */
