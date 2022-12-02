    <label for="add_fields_placeholder">Placeholder: </label>
    <select name="add_fields_placeholder" id="add_fields_placeholder">
        <option value="50">50</option>
        <option value="100">100</option>
        <option value="200">200</option>
        <option value="500">500</option>
        <option value="1000">1000</option>
        <option value="Other">Other</option>
    </select>

    <div id="add_fields_placeholderValue">
        Price:
        <select name="add_fields_placeholderValue" id="add_fields_placeholderValue">
        <option value="50">50</option>
        <option value="100">100</option>
        <option value="200">200</option>
        <option value="500">500</option>
        <option value="1000">1000</option>
        <option value="Other">Other</option>
    </select>
     </div>
     
     <div id="add_fields_placeholderValue2">
        Price:2
        <select name="add_fields_placeholderValue" id="add_fields_placeholderValue2">
        <option value="50">50</option>
        <option value="100">100</option>
        <option value="200">200</option>
        <option value="500">500</option>
        <option value="1000">1000</option>
        <option value="Other">Other</option>
    </select>
     </div>
     
     <div id="add_fields_placeholderValue3">
        Price:3
        <select name="add_fields_placeholderValue" id="add_fields_placeholderValue3">
        <option value="50">50</option>
        <option value="100">100</option>
        <option value="200">200</option>
        <option value="500">500</option>
        <option value="1000">1000</option>
        <option value="Other">Other</option>
    </select>
     </div>
<script>

$(document).ready(function()
                  {
                  $("#add_fields_placeholder").change(function()
        {
            if($(this).val() == "Other")
        {
            $("#add_fields_placeholderValue").show();
        }
        else
        {
            $("#add_fields_placeholderValue").hide();
            $("#add_fields_placeholderValue2").hide();
            $("#add_fields_placeholderValue3").hide();
        }
            });
            $("#add_fields_placeholderValue").hide();
            $("#add_fields_placeholderValue2").hide();
            $("#add_fields_placeholderValue3").hide();
});
</script>