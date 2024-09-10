<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Calculator</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body>


    <div class="mx-auto bg-gray-500 text-center mt-5">
        <h1 class="text-center font-bold text-white">
            CALCULATOR NI SYA!!!
        </h1>
        <form action="{{ route('calculate') }}" class="mt-5">
            @csrf
            <label for="num1">Number 1:</label>
            <input type="text" name="number1" class="mb-6" id="num1" autofocus><br>
            @if ($errors->has('number1'))
                <span class="text-danger">{{ $errors->first('number1') }}</span>
            @endif
            <br>
            <label for="num2">Number 2:</label>
            <input type="text" name="number2" id="num2" >
            @if ($errors->has('number2'))
                <span class="text-danger">{{ $errors->first('number2') }}</span>
            @endif
            <br>
            <button type="submit" class="mt-5 mb-5 font-bold bg-blue-500 
                                        text-white px-4 py-2
                                        hover:bg-blue-800">
                Calculate
            </button>
        </form>
    </div>
    @if($result != null)
        <span class="text-xl">SUM: {{ $result }}</span>
    @else 
        <span class="text-xl">SUM: Not Yet Calculated!</span>
    @endif
    
</body>
</html>