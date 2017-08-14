jQuery(document).ready(function($){
  // Media Upload Button
    $('#uniconSEO-FB-image_button').click(function(e) {
        e.preventDefault();
        var image = wp.media({
            title: 'Upload Image',
            // mutiple: true if you want to upload multiple files at once
            multiple: false
        }).open()
        .on('select', function(e){
            // This will return the selected image from the Media Uploader, the result is an object
            var uploaded_image = image.state().get('selection').first();
            // We convert uploaded_image to a JSON object to make accessing it easier
            // Output to the console uploaded_image
            console.log(uploaded_image);
            var image_url = uploaded_image.toJSON().url;
            // Let's assign the url value to the input field
            $('#uniconSEO-Facebook-OG-IMG').val(image_url);
        });
    });
    // Media Upload Button
      $('#uniconSEO-TW-image_button').click(function(e) {
          e.preventDefault();
          var image = wp.media({
              title: 'Upload Image',
              // mutiple: true if you want to upload multiple files at once
              multiple: false
          }).open()
          .on('select', function(e){
              // This will return the selected image from the Media Uploader, the result is an object
              var uploaded_image = image.state().get('selection').first();
              // We convert uploaded_image to a JSON object to make accessing it easier
              // Output to the console uploaded_image
              console.log(uploaded_image);
              var image_url = uploaded_image.toJSON().url;
              // Let's assign the url value to the input field
              $('#uniconSEO-Twitter-Card-IMG').val(image_url);
          });
      });
    // Character Remaining - Page Title
    $('#page_title').keyup(function () {
      remaining = 70 - $(this).val().length;
      if(remaining <= 0){
        $("#page_title").addClass("uniconRed");
      } else {
        $("#page_title").removeClass("uniconRed");
      }
      $("#pageTitleLimit").text(remaining);
    });
    // Character Remaining - Page Description
    $('#page_description').keyup(function () {
      remaining = 160 - $(this).val().length;
      if(remaining <= 0){
        $("#page_description").addClass("uniconRed");
      } else {
        $("#page_description").removeClass("uniconRed");
      }
      $("#pageDescriptionLimit").text(remaining);
    });
});
