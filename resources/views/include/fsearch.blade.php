<style type="text/css">
    .dropbtn {
  background-color: #4CAF50;
  color: white;
  padding: 16px;
  font-size: 16px;
  border: none;
  cursor: pointer;
}

.dropbtn:hover, .dropbtn:focus {
  background-color: #3e8e41;
}

#search {
  float: left;
  border-box: box-sizing;
  background-image: url('../img/searchicon.png');
  background-position: 10px 8px;
  background-repeat: no-repeat;
  font-size: 16px;
  padding: 4px 0px 9px 50px;
  border: none;
  border-bottom: 1px solid #ddd;
  background-color: rgba(0,0,0,.075);
}

#search:focus {
  outline: 3px solid #ddd;}

.dropdown {
  position: relative;
  /*display: inline-block;*/
}

.dropdown-content {
  display: block;
  position: absolute;
  background-color: #f6f6f6;
  min-width: 230px;
  /*overflow: auto;*/
  /*border: 1px solid #ddd;*/
  z-index: 9;

  max-height: 500px;
}

.dropdown-content a {
  font-size: 14px;
  color: black;
  padding: 8px 10px;
  text-decoration: none;
  display: block;
  box-shadow: 0 0 1px 0px rgba(0,123,255,.5);
  border: 1px solid #d3e0e9;
    /*position: absolute;*/
}

.dropdown a:hover {background-color: #ddd;
    border-left: 4px solid #18d26e;;}

.show {display: block;}
</style>

<form action="{{route('showsearch')}}" method="get">

     <div class="col-lg-3 col-md-3"  style="float: left;"></div>
  
<div class="col-lg-6" style=" float: left;">
  <div class=" col-md-12 col-sm-12 col-xs-12" style="float: right; margin-top: 10px;">

     <input type="submit" class="btn btn-primary" value="Search" style="text-align: center; width: 30%">
     <input  type="text" placeholder="Search.." id="search" name="search" autocomplete="off" style="width: 70%;" required="">

        <div class="dropdown">
          <div id="myDropdown" class="dropdown-content " style=" width: 70%; overflow-y: scroll; max-height: 500px;">
           
               <div id="addnew">
               </div>
            </div>
        </div>

  </div>
  
</div>
</form>

<script>
$(document).ready(function(){
    $("#search").focusin(function(){
        $('#myDropdown #addnew a').css({'display':'block'});
      });

    $(document).on("click",".addemail", function(){
          dataid = $(this).data('id');
         $('#search').val(dataid);
         $('#search').focus();

 
         $('#myDropdown #addnew a').css({'display':'none'});
    
       });


    $(document).on('keyup','#search',function(){
        $value=$(this).val();
        if ($value) {
        }
         else{
            $value=false;
         }
        $.ajax({
         
        type : 'get',
         
        url : '{{route("getmysearch")}}',
         
        data:{'search': $value},
         
        success:function(data){
         
        $('#myDropdown #addnew').html(data);
        console.log($value);
         
        },
         error: function(){   
             return false;
            },
         
        });
    });

});
</script>

