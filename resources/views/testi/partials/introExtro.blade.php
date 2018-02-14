
        

        @foreach( $questions as $question)
        <div class="question form-group">
            <h3>{{ $question->question }}</h3>
            <fieldset  class="test-field pull-left" id="group1">
                <p>{{ $spajtohem }}</p>
                <input  type="radio"  name="q[{{ $question->purpose }}][{{$question->id}}]" id="q{{$question->id}}option1" class="left" value="-3">

                <input type="radio"  name="q[{{ $question->purpose }}][{{$question->id}}]" id="q{{$question->id}}option2" class="left" value="-2">

                <input type="radio"  name="q[{{ $question->purpose }}][{{$question->id}}]" id="q{{$question->id}}option3" class="left" value="-1">
                
                <input type="radio" name="q[{{ $question->purpose }}][{{$question->id}}]" id="q{{$question->id}}neotral1" value="0">
                
                <input type="radio" name="q[{{ $question->purpose }}][{{$question->id}}]" id="q{{$question->id}}option1r" class="right" value="1">
                
                <input type="radio" name="q[{{ $question->purpose }}][{{$question->id}}]" id="q{{$question->id}}option2r" class="right" value="2">
                
                <input type="radio" name="q[{{ $question->purpose }}][{{$question->id}}]" id="q{{$question->id}}option3r" class="right" value="3">
                <p>{{$pajtohem}}</p>
            </fieldset>
        </div>
        @endforeach

