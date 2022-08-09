<?php


namespace App\Http\Validations;


use Illuminate\Http\Request;
use Egulias\EmailValidator\EmailValidator;
use Illuminate\Support\Facades\Validator;
use Illuminate\Contracts\Validation\Validator as V;
use Illuminate\Validation\Validator as ValidationValidator;
use Log;

class ReviewControllerValidations
{
    public function reviewsAdd(Request $request): V
    {
        $r = $request->all();
        $r['phone'] = preg_replace('/\s|\-|-|\(|\)/','', $r['phone']);

        $validator = Validator::make($r, [
            'review' => 'required|string',
            'name' => 'required|string',
            'email' => 'required|string|email|unique:App\Models\Review,email',
            'phone' => 'required|string|unique:App\Models\Review,phone',
        ]);

        
        $validator->after(function (ValidationValidator $validator) use ($r) {
            if (!$validator->errors()->messages()) {
                if (!preg_match('/((8|\+7)-?)?\(?\d{3,5}\)?-?\d{1}-?\d{1}-?\d{1}-?\d{1}-?\d{1}((-?\d{1})?-?\d{1})?/', $r['phone'])) {
                    $validator->errors()->add('phone', 'Поле с телефоном введено не верно!');
                }
            }
        });

        return $validator;
    }

    public function reviewsConfirm($request): V
    {

        $validator = Validator::make($request, [
            'code' => 'required|string|exists:App\Models\Review,code',
            'code_status' => 'required|integer|in:1,2',
        ]);

        return $validator;
    }
    
}