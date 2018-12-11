<!DOCTYPE html>
<html>
<body>
    <style>
        fieldset {
            overflow: hidden
        }
</style>
 
<!---form----> 
<form action="{{route('editReviewPage.store')}}" method="post" name="form_comment">
    {{csrf_field()}}

    Name: <input type="text" name="username"  > <br><br>
    <textarea rows="10" cols="70" name="comment" ></textarea>
    <td>
    <p>Rating</p>
    <select id="example-1to10" name="rating" autocomplete="off" >
        <option value="1">1</option>
        <option value="2">2</option>
        <option value="3">3</option>
        <option value="4">4</option>
        <option value="5">5</option>
        <option value="6">6</option>
        <option value="7" selected="selected">7</option>
        <option value="8">8</option>
        <option value="9">9</option>
        <option value="10">10</option>
    </select>
    </td>
    <td>
    <label for="one">
    <p>should buy? </p>
    
    <input type="radio" name="buy" value="buy" checked="checked"> buy!<br>
    <input type="radio" name="buy" value="bad"> shouldn't buy!<br>
   
    </label>
    <tr>
        <input type="submit" value="Send">
    </tr>
    </td>
</form>
 
 
             
 

<script type="text/javascript" src="js/script.js"></script>
<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.7.1/jquery.min.js" type="text/javascript"></script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.0/jquery.min.js"></script>
<script src="jquery.barrating.min.js"></script>

   
</body>
</html>
