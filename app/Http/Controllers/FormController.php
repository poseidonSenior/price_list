<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\Form_Request;
use App\Models\Form;

class FormController extends Controller
{
    public function submit(Form_Request $req) {
        $form=new Form();
        $form->nameOfProduct=$req->input('nameOfProduct');
        $form->unitOfMeasurement=$req->input('unitOfMeasurement');
        $form->productPrice=$req->input('productPrice');
        $form->numberOfProducts=$req->input('numberOfProducts');

        $form->save();

        return redirect()->route('main')->with('success','Новый товар добавлен');
    }

    public function viewItems() {
        return view('pages/price-list',['items'=>Form::all()]);
    }

    public function showItem($idItem) {
        return view('pages/info-about-item',['item'=>Form::find($idItem)]);
    }

    public function updateItem($idItem) {
        return view('pages/update-item',['item'=>Form::find($idItem)]);
    }

    public function updateItemSubmit($idItem, Form_Request $req) {
        $form=Form::find($idItem);
        $form->nameOfProduct=$req->input('nameOfProduct');
        $form->unitOfMeasurement=$req->input('unitOfMeasurement');
        $form->productPrice=$req->input('productPrice');
        $form->numberOfProducts=$req->input('numberOfProducts');

        $form->save();

        return redirect()->route('info-about-item',$idItem)->with('success','Товар успешно обновлен');
    }

    public function deleteItem($idItem) {
       Form::find($idItem)->delete();

       return redirect()->route('price-list')->with('success','Товар успешно удален');
    }

}
