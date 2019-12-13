    let thisPage = "index";

    $(document).ready(function() {
        $("#logout").removeClass("d-none");
        checkLanguage();
        $.ajax({
            type: 'POST',
            url: "QueryGestor.php",
            data: {query:"SELECT * FROM empresa"},
            success: function(data) {
                printTable(data);
            }});
    });

    function printTable(data) {
        $.each(JSON.parse(data), function (){
            let entry = '<tr>';
            $.each(this, function(){
                entry += '<td>'+this.toString()+'</td>';
            });
            entry += '<td><form method="get" action="productSpecifications.php"><input name="cif" value="'+this["CIF"].toString()+'" hidden><input type="submit" class="detailsButton" value="Details"></td>';
            entry += '</tr>';
            $('#company').append(entry);
        });
    }