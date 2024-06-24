<?php

namespace App\Http\Controllers;

use App\Http\Requests\ProductFormRequest;

class ProductController extends Controller
{
    public function create()
    {
        return view('frontend.product-create');
    }

    public function store(ProductFormRequest $request)
    {
        $request->validated(); // RequestFormに記載しているのをここで実行

        // 以下はRequestを使用しないでべた書きする方法①
        // $validator = Validator::make($request->all(), [
        //     'name' => 'required|min:3|max:255|string',
        //     'description' => 'required|string',
        //     'price' => 'required|numeric',
        //     'stock' => 'required|numeric',
        //     'is_active' => 'boolean',
        // ]);

        // if ($validator->fails()) {
        //     return redirect()->back()->withErrors($validator->errors())->withInput();
        // }

        // 方法②
        // $request->validate([
        //     'name' => 'required|min:3|max:255|string',
        //     'description' => 'required|string',
        //     'price' => 'required|numeric',
        //     'stock' => 'required|numeric',
        //     'is_active' => 'boolean',
        // ], [
        //     'name.required' => 'この項目は必須です',
        //     'name.min' => '最低3文字以上の入力が必要です',
        // ]);
    }
}
