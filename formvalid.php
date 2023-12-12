<!DOCTYPE html>
<html lang="en">
<head>
        <meta charset="UTF-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial=1.0">
        <title>Formvalidate</title>

    </head>
    <body> 
    <label for="name">Name</label>
  <div>
    <input type="text" name="name" id="name" value="">
  </div>

<label for="address">Address</label>
  <div>
    <input type="text" name="address" id="address" value="">
  </div>

<label for="email">Email</label>
  <div>
    <input type="text" name="email" id="email" value="">
  </div>

<label><h2>how many times you want</h2>
         <input type="radio" name="howMany" value="zero"> 0
</label> <br>
<label>
      <input type="radio" name="howMany" value="one"> 1
</label> <br>
<label>
     <input type="radio" name="howMany" value="two"> 2
</label> <br>
<label>
      <input type="radio" name="howMany" value="twoplus"> More than 2
</label> <br>

     <label for="favoriteFruit"><h3>My favorite fruit</h3></label>
<div>
  <select name="favoriteFruit[]" id="favoriteFruit" size="4" multiple="">
                  <option value="apple">Apple</option>
                       <option value="banana">Banana</option>
                         <option value="plum">Plum</option>
                           <option value="pomegranate">Pomegranate</option>
                               <option value="strawberry">Strawberry</option>
                                  <option value="watermelon">Watermelon</option>
  </select>
</div>
      <label for="brochure"><h4>Would you like a brochure?</h4></label>
<div>
       <input type="checkbox" name="brochure" id="brochure" value="Yes">
</div>
<div>
        <input type="submit" name="submit" value="Submit">
</div>
<?php
        echo "hello<br>\n";
        echo "Date is: " . date("d/m/y");
        ?>  <br>
<?php
       "<br>";//
        echo "Day is: " . date("l");
        ?>
    </body>
</html>
