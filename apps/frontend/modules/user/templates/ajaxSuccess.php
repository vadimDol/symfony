<div id="wrapper">
    <div id="container">
        <div id="status">
            <p>This is a insecure page.</p>
        </div>

        <div id="status">
            <select id="ajax">
                <option value="Flower">Flower</option>
                <option value="Car">Car</option>
                <option value="City">City</option>
                <option value="Country">Country</option>
            </select>
        </div>

        <div>
            <p>You selected: <span id="txtHint">Rose</span></p>
        </div>

    </div>
</div>

<script>
    $(document).on("change", function() {
        $.ajax({
            url: "http://mink_test/ajax",
            type: "GET",
            dataType: "text",
            data: 'item=' + $('#ajax').val(),
        })
        .done( function(response) {
            $('#txtHint').text(response);
            //alert(response);
        })
        .fail(function( xhr, status, errorThrown ) {
            alert( "Sorry, there was a problem!" );
            console.log( "Error: " + errorThrown );
            console.log( "Status: " + status );
            console.dir( xhr );
        })
    });
</script>