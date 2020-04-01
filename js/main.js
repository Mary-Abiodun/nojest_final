
// (function(){

//     $('#element-id').accordable();

// })();


// (function(){

//   $('.accordable').accordable();

// })();

$('#regis').submit(function(e){
  // console.log('submitted');
  e.preventDefault();
  // var fm = $('#regis').serialize();
  var fm = new FormData(this);
  $.ajax({
    type: 'POST',
    url: 'inc/reg.php',
    dataType: 'json',
    data: fm, 
    cache:false,
    contentType: false,
    processData: false,
    success: function(response){
    
      if(response == 0){
        swal({
          title: "Error!",
          text: "Couldnt insert into database",
          icon: "error",
        });
      }else if(response == 1){
        document.getElementById('regis').reset();
        
        swal({
          title: "Successful!",
          text: "Successfully registered",
          icon: "success", 
        });
        location.href = "thankyou.php";
      }else{
        swal({
          title: "Error!",
          text: response,
          icon: "error",
        });
 
      }
    }
  })
})

$('#metaform').submit(function(e){
  // console.log('submitted');
  e.preventDefault();
  // var fm = $('#regis').serialize();
  var fm = new FormData(this);
  $.ajax({
    type: 'POST',
    url: 'inc/metadata.php',
    dataType: 'json',
    data: fm, 
    cache:false,
    contentType: false,
    processData: false,
    success: function(response){
    
      if(response == 0){
        swal({
          title: "Error!",
          text: "Failed to upload metadata",
          icon: "error",
        });
      }else if(response == 1){
        document.getElementById('metaform').reset();
        swal({
          title: "Successful!",
          text: "Metadata Successfully Created",
          icon: "success", 
        });
        location.href = "uploadsubmissionfiles.php";
      }else{
        swal({
          title: "Error!",
          text: response,
          icon: "error",
        });
 
      }
    }
  })
})