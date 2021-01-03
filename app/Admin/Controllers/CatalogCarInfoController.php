<?php

namespace App\Admin\Controllers;

use App\Admin\Repositories\CatalogCarInfo;
use Dcat\Admin\Form;
use Dcat\Admin\Grid;
use Dcat\Admin\Show;
use Dcat\Admin\Http\Controllers\AdminController;
use App\Models\CarTypeInfo;
use App\Models\CarModelInfo;
use App\Models\CarOptionalInfo;

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
            $grid->disableFilterButton();
            $grid->showColumnSelector();
            $grid->column('id')->sortable();
            $grid->column('carName');
            $grid->column('carFrontCover')->image();
            $grid->column('carType')->display(function($carTypeId) {
                $typeInfo = CarTypeInfo::find($carTypeId);
                return $typeInfo->typeName;
            })->sortable();
            $grid->column('carModel')->display(function($carModel) {
                $modelInfo = CarModelInfo::find($carModel);
                return $modelInfo->modelName;
            })->sortable();
            $grid->column('carOptionals')->display(function($carOptionals) {
                // $arr = explode(',', $carOptionals);
                $data = array();
                $info = CarOptionalInfo::get();
                foreach($info as $key=>$value) {
                    $data[] = $value->optionalName;
                }
                $result = array();
                foreach ($carOptionals as $key=>$value) {
                    $info = CarOptionalInfo::where('id', $value)->first();
                    $result[] = $info->optionalName;
                }

                // $carOptionals = array_map(function () {
                //     $CarOptionalInfo = CarOptionalInfo::get('optionalName')->;
                //     print($CarOptionalInfo);
                //     return "<span class='label label-success'>{$CarOptionalInfo['optionalName']}</span>";
                // }, $carOptionals);
                return $result;
            })->label('success');
            $grid->column('carManufactureYear');
            $grid->column('price');
            $grid->column('priceShow');
            $grid->column('milage');
            $grid->column('milageUnit');
            $grid->column('carImageUrl', __('圖片'))->image();
            $grid->column('carFileUrl')->downloadable();
            // $grid->column('carDiscription');
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
            $show->field('carFrontCover')->image();
            $show->field('carType')->as(function($carTypeId) {
                $typeInfo = CarTypeInfo::find($carTypeId);
                return $typeInfo->typeName;
            });
            $show->field('carModel')->as(function($carModel) {
                $modelInfo = CarModelInfo::find($carModel);
                return $modelInfo->modelName;
            });
            $show->field('carOptionals')->as(function($carOptionals) {
                // $data = json_decode();
                // $result = array();
                // foreach ($carOptionals as $key=>$value) {
                //     $result[] = $value->optionalName;
                // }
                $data = array();
                $info = CarOptionalInfo::get();
                foreach($info as $key=>$value) {
                    $data[] = $value->optionalName;
                }
                $result = array();
                foreach ($carOptionals as $key=>$value) {
                    $info = CarOptionalInfo::where('id', $value)->first();
                    $result[] = $info->optionalName;
                }

                // return implode(",", $result);
                return $result;
            })->label('success');
            $show->field('carManufactureYear');
            $show->field('price');
            $show->field('priceShow');
            $show->field('milage');
            $show->field('milageUnit');
            $show->field('carImageUrl')->image();
            $show->field('carFileUrl')->file();
            $show->field('carDiscription')->unescape()->as(function($carDiscription) {
                return $carDiscription;
            });
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
            $form->select('carType')->options('/api/getCarType')->load('carModel', '/api/getCarModel')->required();
            $form->select('carModel')->required();

            $form->divider('配備選擇');

            $form->radio('optionalType')
                ->options(CarTypeInfo::whereIn('id', array('1', '2', '3'))->pluck('typeName', 'id'))->default(1)
                ->when(1, function (Form $form) {

                    // $form->checkboxCard('carOptionals', __('配備'))->options(CarOptionalInfo::where('carTypeId', 1)->pluck('optionalName', 'id'))->canCheckAll();
                    $form->checkbox('carOptionals')->options(CarOptionalInfo::where('carTypeId', 1)->pluck('optionalName', 'id'))->canCheckAll();


                })->when(2, function (Form $form) {

                    // $form->checkboxCard('carOptionals', __('配備'))->options(CarOptionalInfo::where('carTypeId', 1)->pluck('optionalName', 'id'))->canCheckAll();
                    $form->checkbox('carOptionals')->options(CarOptionalInfo::where('carTypeId', 2)->pluck('optionalName', 'id'))->canCheckAll();


                });

            // $form->checkbox('carOptionals')->options(CarOptionalInfo::pluck('optionalName', 'id'))->canCheckAll()
            //     ->saving(function ($value) {
            //         // 转化成json字符串保存到数据库
            //         return json_encode($value);
            //     });

            $form->divider();

            $form->date('carManufactureYear')->format('YYYYMM')->required();
            $form->currency('price')->required();
            $form->radio('priceShow')->options([1 => '顯示', 0 => '不顯示'])->default(1)->required();
            $form->currency('milage')->symbol('')->required();
            $form->radio('milageUnit')->options(['miles' => 'miles', 'km' => 'km'])->default('miles')->required();
            $form->multipleImage('carImageUrl')->move('images/'.date('Ym'))->maxSize(1024)->uniqueName()->rules('mimes:jpg,jpeg,png,gif')->sortable();
            $form->file('carFileUrl')->move('files/certificate/'.date('Ym'))->uniqueName()->rules('mimes:pdf,doc,docx,txt|nullable');
            $form->editor('carDiscription')->options(['menubar' => false, 'toolbar' => ['code undo redo restoredraft | cut copy paste pastetext | forecolor backcolor bold italic underline strikethrough link anchor | alignleft aligncenter alignright alignjustify outdent indent | \
            styleselect formatselect fontselect fontsizeselect | bullist numlist | blockquote subscript superscript removeformat | \
            table image media charmap emoticons hr pagebreak insertdatetime print preview | fullscreen | bdmap indent2em lineheight formatpainter axupimgs']])->imageDirectory('editor/images');

            $form->display('created_at');
            $form->display('updated_at');

            // $form->saving(function (Form $form) {
            //     // 修改用户提交的数据
            //     // $form->author_id = 1;

            //     // 删除、忽略用户提交的数据
            //     $form->deleteInput('optionalType');
            // });

        });
    }
}

/* 'code undo redo restoredraft | cut copy paste pastetext | forecolor backcolor bold italic underline strikethrough link anchor | alignleft aligncenter alignright alignjustify outdent indent | \
styleselect formatselect fontselect fontsizeselect | bullist numlist | blockquote subscript superscript removeformat | \
table image media charmap emoticons hr pagebreak insertdatetime print preview | fullscreen | bdmap indent2em lineheight formatpainter axupimgs' */
