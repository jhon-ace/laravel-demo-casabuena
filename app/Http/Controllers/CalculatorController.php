<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CalculatorController extends Controller
{
    public function showBlade() //for returning views
    { 
        return view('calculator.index', [
            'result' => null
        ]);
    }

    public function displaySum(Request $request)
    { 
        $validatedData = $request->validate([
            'number1' => 'required|numeric',
            'number2' => 'required|numeric'
        ]);

        $num1 = $validatedData['number1'];
        $num2 = $validatedData['number2'];

        // $num1 = $request->input('number1');
        // $num2 = $request->input('number2');

        $result = $num1 + $num2;

        
        return view('calculator.index' , [
            'result' => $result
        ]);
    }
}
