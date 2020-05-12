@extends('layouts/layout', ["current" => "index"])


@section('content')

<section class="compare py-5 pb-5">

<div class="container">
    <div class="row">

      <div class="col-md-12 col-sm-12 col-xs-12">
        <div class="section-headline text-center">
          <h3>CS:GO Guns compare</h3>
          <p>Compare your favorite weapons</p>
        </div>
      </div>
    </div>

    {{ csrf_field() }}
    <div class="row">
     
        <div class="col-6 themed-grid-col">  
            <input class="gun form-control" type="text" placeholder="Type a gun to compare" data-attr="left">
          <br>
            <div class="compare-content">
              <div class="compare-box">
                <div class="compare-table">
                  <table id="display" class="left">
                    <tr>
                        <td>no items match your search</td>
                    </tr>
                  </table>
                </div>
              </div>
            </div>
        </div>

        <div class="col-6 themed-grid-col">  
            <input class="gun form-control" type="text" placeholder="Type a gun to compare" data-attr="right">
          <br>
            <div class="compare-content">
              <div class="compare-box">
                <div class="compare-table">
                  <table id="display" class="right">
                    <tr>
                      <td>no items match your search</td>
                    </tr>
                  </table>
                </div>
              </div>
            </div>
        </div>
      </div>
  
    </div>
   
  </section>
@endsection

@section('scripts')
<script type="text/javascript">
$(document).ready(function(){

  fetch_customer_data();

  function fetch_customer_data(query = '', side = '') {
    if(side!==''){
      $.ajax({
          url: "{{route('gunsearch')}}",
          method: 'post',
          data: {gun: query, _token: $('input[name="_token"]').val()},
          dataType: 'json',
          success: function (data) {
              $("."+side).html(data.table_data);
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

</script>
@endsection