
$(document).ready(function(){
  
  fetch_customer_data();

  function compare_tables(){
     var rowCountRight  = $('.right  >tbody >tr').length;
     var rowCountLeft   = $('.left >tbody >tr').length;

     if((rowCountRight > 1) && (rowCountLeft > 1)){

        var values = $(".damage").map(function () {
          return + $(this).text(); // convert to number
        }).get(); // convert to array
        var max = Math.max.apply(Math, values);
        var index = values.indexOf(max);
        $(".damage").eq(index).css('color', 'lightgreen').css('font-weight','bolder');
       

        var valuesAwards = $(".awards").map(function () {
          return +$(this).text(); // convert to number
        }).get(); // convert to array
        var max = Math.max.apply(Math, valuesAwards);
        var index = valuesAwards.indexOf(max);
        $(".awards").eq(index).css('color', 'lightgreen').css('font-weight','bolder');
       

        var values = $(".firerate").map(function () {
          return +$(this).text(); // convert to number
        }).get(); // convert to array
        var max = Math.max.apply(Math, values);
        var index = values.indexOf(max);
        $(".firerate").eq(index).css('color', 'lightgreen').css('font-weight','bolder');
        
        var values = $(".recoil_control").map(function () {
          return +$(this).text(); // convert to number
        }).get(); // convert to array
        var max = Math.max.apply(Math, values);
        var index = values.indexOf(max);
        $(".recoil_control").eq(index).css('color', 'lightgreen').css('font-weight','bolder');
       
        var values = $(".accurate_range").map(function () {
          return +$(this).text(); // convert to number
        }).get(); // convert to array
        var max = Math.max.apply(Math, values);
        var index = values.indexOf(max);
         $(".accurate_range").eq(index).css('color', 'lightgreen').css('font-weight','bolder');
       
        var values = $(".armor_penetration").map(function () {
          return +$(this).text(); 
        }).get(); 
        var max = Math.max.apply(Math, values);
        var index = values.indexOf(max);
        $(".armor_penetration").eq(index).css('color', 'lightgreen').css('font-weight','bolder');
       
     }
  }

  function fetch_customer_data(query = '', side = '') {
    if(side!==''){
      $.ajax({
          url: "{{route('gunsearch')}}",
          method: 'post',
          data: {gun: query, _token: $('input[name="_token"]').val()},
          dataType: 'json',
          success: function (data) {
              $("."+side).html(data.table_data);
          },complete: function(){
           
              compare_tables();
          }
      })
    }
  }
  $(document).on('keyup', '.gun', function () {
    var query = $(this).val();
    var data_attr = $(this).data('attr');
    
    fetch_customer_data(query, data_attr);
  });
});
