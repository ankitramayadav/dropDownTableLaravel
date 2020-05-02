
  <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">

<div class="container">
   <div class="col-md-2"></div>
   <div class="col-md-10">
      <form action='welcome' method="post">
         {{csrf_field()}}
         <div class="col-md-12">
            <div class="form-group col-md-12">
               <div class="form-group col-md-8">
                  <label for="course">Course</label>
                  <select class="form-control" id="course" name="course">
                     <option>...Select Your Course</option>
                     <option value="FEG">FE</option>
                     <option value="DSE">DSE</option>
                     <option value="MEG">ME</option>
                     <option value="MCA">MCA</option>
                  </select>
               </div>
               <div class="form-group col-md-8">
                  <label for="event">Event</label>
                  <select class="form-control" id="event" name="event">
                     <option>...Select Your event</option>
                     <option value="ACAP">ACAP</option>
                     <option value="DTE">DTE</option>
                  </select>
               </div>
               <div class="form-group col-md-8">
                  <button type="submit" class="btn btn-primary" style="width: 100%;">Go</button>
               </div>
            </div>
         </div>
      </form>
   </div>
</div>
<br><br><br>