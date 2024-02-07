@extends('layouts.app')

@section('content')

    
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-md-8">
                    {{-- route('quiz.submit') }} --}}
                    <form action="" method="POST" class="mt-4">
                        @csrf
                        @if(Auth::user()->courses->isNotEmpty())
                        <h2 class="mb-4">{{ Auth::user()->courses->first()->name }} Quiz Form</h2>
                    @endif

                        <!-- Question 1 -->
                        <div class="form-group quizzBorder">
                            <label for="question1">Question 1: How do you start a PHP script?</label><br>
                            <div class="form-check">
                                <input type="radio" id="question1_option1" name="question1" value="Paris" class="form-check-input">
                                <label for="question1_option1" class="form-check-label">&lt;?php echo "Hello, World!"; ?&gt;</label>
                            </div>
                            <div class="form-check">
                                <input type="radio" id="question1_option2" name="question1" value="London" class="form-check-input">
                                <label for="question1_option2" class="form-check-label">&lt;?php start ?&gt; and &lt;?php end ?&gt;</label>
                            </div>
                            <div class="form-check">
                                <input type="radio" id="question1_option3" name="question1" value="Berlin" class="form-check-input">
                                <label for="question1_option3" class="form-check-label">&lt;?php?&gt;</label>
                            </div>
                        </div>
        
                        <!-- Question 2 -->
                        <div class="form-group quizzBorder">
                            <label for="question2">Question 2: What are PHP variables? How do you declare them?</label><br>
                            <div class="form-check">
                                <input type="radio" id="question2_option1" name="question2" value="3" class="form-check-input">
                                <label for="question2_option1" class="form-check-label">Variables in PHP are declared using the var keyword.</label>
                            </div>
                            <div class="form-check">
                                <input type="radio" id="question2_option2" name="question2" value="4" class="form-check-input">
                                <label for="question2_option2" class="form-check-label">Variables in PHP are declared using the let keyword.</label>
                            </div>
                            <div class="form-check">
                                <input type="radio" id="question2_option3" name="question2" value="5" class="form-check-input">
                                <label for="question2_option3" class="form-check-label">Variables in PHP are declared using the $ symbol followed by the variable name.</label>
                            </div>
                        </div>

                        <!-- Question 3 -->
                        <div class="form-group quizzBorder">
                            <label for="question3">Question 3: Explain the difference between == and === operators in PHP.</label><br>
                            <div class="form-check">
                                <input type="radio" id="question3_option1" name="question3" value="3" class="form-check-input">
                                <label for="question3_option1" class="form-check-label">Both compare value and type, but === does not perform type conversion.</label>
                            </div>
                            <div class="form-check">
                                <input type="radio" id="question3_option2" name="question3" value="4" class="form-check-input">
                                <label for="question3_option2" class="form-check-label">Both compare value and type, but == does not perform type conversion.</label>
                            </div>
                            <div class="form-check">
                                <input type="radio" id="question3_option3" name="question3" value="5" class="form-check-input">
                                <label for="question3_option3" class="form-check-label">== only compares value, while === compares both value and type.</label>
                            </div>
                        </div>

                        <!-- Question 4 -->
                        <div class="form-group quizzBorder">
                            <label for="question4">Question 4: Describe the difference between GET and POST methods in PHP.</label><br>
                            <div class="form-check">
                                <input type="radio" id="question4_option1" name="question4" value="3" class="form-check-input">
                                <label for="question4_option1" class="form-check-label">GET method sends data via URL, while POST method sends data via HTTP headers.</label>
                            </div>
                            <div class="form-check">
                                <input type="radio" id="question4_option2" name="question4" value="4" class="form-check-input">
                                <label for="question4_option2" class="form-check-label">GET method sends data via HTTP headers, while POST method sends data via URL.</label>
                            </div>
                            <div class="form-check">
                                <input type="radio" id="question4_option3" name="question4" value="5" class="form-check-input">
                                <label for="question4_option3" class="form-check-label">Both GET and POST methods send data via URL.</label>
                            </div>
                        </div>

                        <!-- Question 5 -->
                        <div class="form-group quizzBorder">
                            <label for="question5">Question 5: What is the purpose of the array_push() function in PHP?</label><br>
                            <div class="form-check">
                                <input type="radio" id="question5_option1" name="question5" value="3" class="form-check-input">
                                <label for="question5_option1" class="form-check-label">To remove an element from the end of an array.</label>
                            </div>
                            <div class="form-check">
                                <input type="radio" id="question5_option2" name="question5" value="4" class="form-check-input">
                                <label for="question5_option2" class="form-check-label">To add one or more elements to the end of an array.</label>
                            </div>
                            <div class="form-check">
                                <input type="radio" id="question5_option3" name="question5" value="5" class="form-check-input">
                                <label for="question5_option3" class="form-check-label">To sort the elements of an array in ascending order.</label>
                            </div>
                        </div>
        
                        
        
                        <button type="submit" class="btn btn-primary">Submit</button>
                    </form>
                </div>
            </div>
        </div>
    

@endsection
