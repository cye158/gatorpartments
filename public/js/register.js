  $(function(){

    var formError = 0;
    //Full Name Validation
    $('#fullName').blur(function(){
      $('#nameEmpty').hide();
      $('#nameInvalid').hide();
      $('#nameSuccess').hide();

      //Checks if field is empty
      if(!$(this).val()){
        $('#nameEmpty').show();
      } else

      //Checks that only alphabet letters are allowed
      if( !($(this).val().match( /^[a-zA-Z]*$/ )) ){
        $('#nameInvalid').show();
      } else {

      formError++;
      $('#nameSuccess').show();

      }

    });

    //Phone Number Validation
    $('#phoneNumber').blur(function(){
      $('#phoneNumberEmpty').hide();
      $('#phoneNumberInvalid').hide();
      $('#phoneNumberSuccess').hide();

      //Checks if field is empty
      if(!$(this).val()){
        $('#phoneNumberEmpty').show();
      } else

      //Checks that only alphabet letters are allowed
      if( !($(this).val().match(/^[\+]?[(]?[0-9]{3}[)]?[-\s\.]?[0-9]{3}[-\s\.]?[0-9]{4,6}$/im)) ){
        $('#phoneNumberInvalid').show();
      } else {
      
      formError++;
      $('#phoneNumberSuccess').show();

      }
    });

    //Email Validation
    $('#email').blur(function(){
      $('#emailSuccess').hide();
      $('#emailEmpty').hide();
      $('#emailInvalid').hide();

      //If field is empty, display "Email cannot be empty"
      if( !$(this).val() ){
        $('#emailEmpty').show();
      } else 

      //If field is not a valid Email string
      if( !$(this).val().match( /^(([^<>()\[\]\\.,;:\s@"]+(\.[^<>()\[\]\\.,;:\s@"]+)*)|(".+"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/ ) ){
        $('#emailInvalid').show();
      } else {

      formError++;
      $('#emailSuccess').show();

      }
    });

    //Username Validation
    $('#username').blur(function(){
      $('#usernameSuccess').hide();
      $('#usernameEmpty').hide();
      $('#usernameInvalid').hide();
      $('#usernameTaken').hide();
      $('#usernameInvalidLength').hide();

      //Check if username already exists in database
      var username = $(this).val();
      var usernameExistUrl = "//sfsuswe.com/~nhan/gatorpartments/user/checkUsernameExist/" + username ;

      function getData(){
        return $.ajax({
          url:usernameExistUrl,
          type: 'GET'
        });
      }

      function handleData(data){
        console.log(data);
        if(data == 1){
          $('#usernameTaken').show();
        }
      }

      getData().done(handleData);


      //If username is empty, display error
      if( !$(this).val() ){
        $('#usernameEmpty').show();
      } else

      //If username contains invalid characters, non alphanumeric characters, display error
      if( !$(this).val().match(/^[a-z0-9]+$/i) ){
        $('#usernameInvalid').show();
      } else

      //If username contains less than 6 characters, display errors
      if( $(this).val().length < 4 ){
        $('#usernameInvalidLength').show();
      } else {

      formError++;
      $('#usernameSuccess').show();

      }

      //Check if username already exists in database
      var username = $(this).val();
      var usernameExistUrl = "//sfsuswe.com/~nhan/gatorpartments/user/checkUsernameExist/" + username ;

      function getData(){
        return $.ajax({
          url:usernameExistUrl,
          type: 'GET'
        });
      }

      function handleData(data){
        console.log(data);
        if(data == 1){
          $('#usernameSuccess').hide();
          $('#usernameTaken').show();
        }
      }

      getData().done(handleData);


    });

    //PrePassword Validation
    $('#prePassword').blur(function(){
      $('#prePasswordEmpty').hide();
      $('#prePasswordInvalidLength').hide();
      $('#prePasswordSuccess').hide();

      if( !$(this).val() ){
        $('#prePasswordEmpty').show();
      } else

      if($(this).val().length < 6) {
        $('#prePasswordInvalidLength').show();
      } else {

      formError++; 
      $('#prePasswordSuccess').show();

      }
    });

    //Password Validation
    $('#password').blur(function(){
      $('#passwordSuccess').hide();
      $('#passwordInvalid').hide();

      if(!($(this).val() == $('#prePassword').val())){
        $('#passwordInvalid').show();
      } else {

      formError++;
      $('#passwordSuccess').show();

      }
    });


  });



