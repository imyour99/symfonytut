<?php
?>
<link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" rel="stylesheet"/>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
<div class="form-group">
    <label class="control-label col-md-2" for="Selection">Selection</label>
    <div class="col-md-10">
        <div class="radio">
            <label for="Selection-0">
                <input type="radio" name="Selection" id="Selection-0" value="Value-1" checked="checked">
                When this one selected, neither 'Selection' of the code below.
            </label>
        </div>
        <div class="radio">
            <label for="Selection-1">
                <input type="radio" name="Selection" id="Selection-1" value="Value-2">
                When this one selected, show Selection-1 only.
            </label>
        </div>
        <div class="radio">
            <label for="Selection-2">
                <input type="radio" name="Selection" id="Selection-2" value="Value-3">
                When this one selected, show Selection-2 only.
            </label>
        </div>
    </div>
</div>
<div id="Selection-1-container" class="hidden">
    <h4>Selection 1</h4>
    <hr>
    <div class="form-group">
        <label class="control-label col-md-2" for="Column1">Column1</label>
        <div class="col-md-10">
            <input class="form-control text-box single-line" id="Column1" name="Column1" type="text"
                   placeholder="Column1" required>
        </div>
    </div>
    <div class="form-group">
        <label class="control-label col-md-2" for="Column2">Column2</label>
        <div class="col-md-10">
            <input class="form-control text-box single-line" id="Column2" name="Column2" type="text"
                   placeholder="Column2" required>
        </div>
    </div>
    <div class="form-group">
        <label class="control-label col-md-2" for="Column3">Column3</label>
        <div class="col-md-10">
            <input class="form-control text-box single-line" id="Column3" name="Column3" type="text"
                   placeholder="Column3" required>
        </div>
    </div>
    <div class="form-group">
        <label class="control-label col-md-2" for="Column4">Column4</label>
        <div class="col-md-10">
            <input class="form-control text-box single-line" id="Column4" name="Column4" type="text"
                   placeholder="Column4" required>
        </div>
    </div>
    <div class="form-group">
        <label class="control-label col-md-2" for="Column5">Column5</label>
        <div class="col-md-10">
            <select class="form-control" id="Column5" name="Column5" required>
                <option value>Choose an option...</option>
                <option value>Option 1</option>
            </select>
        </div>
    </div>
</div>
<div id="Selection-2-container" class="hidden">
    <h4>Selection 2</h4>
    <hr>
    <div class="form-group">
        <label class="control-label col-md-2" for="Column6">Column6</label>
        <div class="col-md-10">
            <input class="form-control text-box single-line" id="Column6" name="Column6" type="text"
                   placeholder="Column6" required>
        </div>
    </div>
    <div class="form-group">
        <label class="control-label col-md-2" for="Column7">Column7</label>
        <div class="col-md-10">
            <input class="form-control text-box single-line" id="Column7" name="Column7" type="text"
                   placeholder="Column7" required>
        </div>
    </div>
    <div class="form-group">
        <label class="control-label col-md-2" for="Column8">Column7</label>
        <div class="col-md-10">
            <input class="form-control text-box single-line" id="Column8" name="Column8" type="text"
                   placeholder="Column8" required>
        </div>
    </div>
    <div class="form-group">
        <label class="control-label col-md-2" for="Column9">Column9</label>
        <div class="col-md-10">
            <input class="form-control text-box single-line" id="Column9" name="Column9" type="text"
                   placeholder="Column9" required>
        </div>
    </div>
    <div class="form-group">
        <label class="control-label col-md-2" for="Column10">Column10</label>
        <div class="col-md-10">
            <select class="form-control" id="Column10" name="Column10" required>
                <option value>Choose an option...</option>
                <option value>Option 1</option>
            </select>
        </div>
    </div>
</div>
<script>
    $(document).ready(function() {
        $('input[name="Selection"]').click(function() {
            if($(this).attr('id') == 'Selection-1')
            {
                $("#Selection-1-container").toggleClass('hidden');
            }
            else if($(this).attr('id') == 'Selection-2')
            {
                $("#Selection-2-container").toggleClass('hidden');
            }
        });
    });
</script>
