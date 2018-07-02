window.onload = function(){
    $("#sub_id_sanpham").empty();
    $.ajax({
        'url':'/api/danhsachtheloai_api',
        'type':'GET',
        success: function(data){

            var result = "<li class=>";
            result += "<a href=\"\\tatcasanpham\">";
            result += "<i class=\"menu-icon fa fa-caret-right\"></i>";
            result += "Tất cả";
            result += "</a>";
            result += "<b class=\"arrow\"></b>";
            result += "</li>";
            var t;
            for(var key in data){
                t = data[key];
            }
            t.forEach(function(entry) {
                var codeTheLoai = entry.id;
                var temp = '\\sanphamid\\'+codeTheLoai;
                result += "<li class=>";
                result += "<a href= "+temp+" >";
                result += "<i class=\"menu-icon fa fa-caret-right\"></i>";
                result += ""+entry.tentheloai+"";
                result += "</a>";
                result += "<b class=\"arrow\"></b>";
                result += "</li>";

            });
            $("#sub_id_sanpham").append(result);
            $("#flag").val(1);
        }
    })
};