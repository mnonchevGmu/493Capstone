<fieldset class="mediaType-border border border-dark rounded p-2">
    <legend class="mediaType-border">Media Type</legend>

    <div class="form-check form-check-inline">
        <input class="form-check-input m-2" type="radio" name="customerMediaSelection" id="VideoOnly" value="VIDEO">
        <label class="form-check-label m-2" for="VideoOnly">Video</label>
    </div>
    <div class="form-check form-check-inline">
        <input class="form-check-input m-2" type="radio" name="customerMediaSelection" id="PhotosOnly" value="PHOTOS">
        <label class="form-check-label m-2" for="PhotosOnly">Photos</label>
    </div>
    <div class="form-check form-check-inline">
        <input class="form-check-input m-2" type="radio" name="customerMediaSelection" id="VideoAndPhotos"
            value="VIDEO+PHOTOS">
        <label class="form-check-label m-2" for="VideoAndPhotos">Video and Photos</label>
    </div>
    <div class="form-check form-check-inline">
        <input type="button" value="Clear Selection" id="ClearMediaType">

    </div>
</fieldset>