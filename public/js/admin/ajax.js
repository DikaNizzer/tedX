$(document).ready(function () {
  $('body').on('click', '#show-subevent', function () {
    let pendaftaran_subevent_url = $(this).data('url');
    console.log(pendaftaran_subevent_url)
    $.get(pendaftaran_subevent_url, function (data) {
      // console.log(data.peserta)
      $('#showModal').modal('show');
        $('#peserta-nama').val(data.nama);
        $('#peserta-angkatan').val(data.angkatan);
        $('#peserta-fakultas').val(data.fakultas);
        // $('#peserta-alamat').val(data.alamat);
    });
  });
});

$('body').on('change', '.status', function () {
  // console.log(this)
  let statusVal = $(this).val();
  let id = $(this).attr('data-id')
  console.log(id)
  console.log(statusVal)

  // const data = {
  //   status: statusVal
  // }
  // console.log(data.status)

  $.ajaxSetup({
    headers: {
      'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
    }
  });

  $.ajax({
    type: "PUT",
    url: "/subevents/"+id,
    async: false,
    data: {status: statusVal},
    dataType: "json",
    success: function (response) {
      console.log("data berhasil dikirim")
    }
  })
  .fail(function(error, textStatus, errorThrown) {
    console.log(JSON.stringify(error));
    alert(textStatus);
    alert(errorThrown);
  })
  .always(function() {
    console.log("selesai")
  });
});
