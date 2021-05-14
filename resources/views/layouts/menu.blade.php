<div class="row wpb_row page-margin-top-section">
    <div class="padding-right-30 wpb_column column_container col-sm-8 clearfix">
        <div class="menu-select">
            <div class="row">
                <label class="col-sm-1 col-form-label">Tra cứu triệu chứng: </label>
                <div class="col-sm-6">
                    <select name="benh" class="form-control" onchange="selectBenh(this)" >
                    @foreach ($benh as $row)
                    <option value="{{ $row->id_benh }}">{{ $row->ten }}</option>
                    @endforeach
                    </select>
                    
                </div>
            </div>
        </div>
        <div class="content-select simplebar-content">
            {!! $benh[0]->trieuchung !!}
        </div>
    </div>
    <div class="wpb_column column_container col-sm-4 clearfix">
        <div class="wpb_wrapper">
            <h2 class="box-header">Vì sao chọn chúng tôi</h2>
            {!! $option[5] !!}
        </div>
    </div>
</div>
<script>
  function selectBenh(elem){
    $.ajax({
      method: "get",
      url: "/ajax/index",
      data: {id: $(elem).val()},
      success: function(data){
          var json = JSON.parse(data);
        $(".content-select").html(json.trieuchung);
      }
    });
  }
  
</script>