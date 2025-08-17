const saveDate = () => {
    let tglTerima = $('#tgl_terima').val();

    if(tglTerima == "" || tglTerima == null){
        $('#errorDate').show();
        $('#errorDate').text('Nggak boleh kosong tanggal penerimaan bro!')
    } else {
        $('#errorDate').text('Tanggal Penerimaan :' + tglTerima);
        localStorage.setItem("tgl_terima", tglTerima);
        window.location.href = "/penerimaan-create";
    }
}

$('#tgl_diterima').ready(function(){
    let savedDate = localStorage.getItem("tgl_terima");
    if(savedDate){
        $('#tgl_diterima').val(savedDate);
        // $('#tgl_terima').val(savedDate); 
        // atau kalau cuma mau nampilin:
        // $('#showTgl').text("Tanggal Penerimaan: " + savedDate);
    }
});

$('#selectToko').on('change', function(){
    let tokoId = $(this).val();
    if(tokoId){
        $.ajax({
            url : '/penerimaan-create/getJsonToko/'+tokoId,
            type : 'GET',
            data : 
            {
                "_token":"{{csrf_token()}}",
				"id":tokoId
            }
        })
    }
});