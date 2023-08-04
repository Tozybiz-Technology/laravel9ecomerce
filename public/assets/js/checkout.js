$(document).ready(function(){

     $('.cardpay').click(function(e){
        e.preventDefault();
       var firstname = $('.firstname').val();
       var lastname = $('.lastname').val();
       var email= $('.email').val();
       var phone = $('.phone').val();
       var country = $('.country').val();
       var state = $('.state').val();
       var zipcode = $('.zipcode').val();
       var faddress = $('.faddress').val();
       var message = $('.message').val();

       if(!firstname){
        fname_error="First Name is Required";
        $('#fname_error').html('');
        $('#fname_error').html(fname_error);
       }
       else{
        fname_error="";
        $('#fname_error').html('');
       
       }
       if(!lastname){
        lname_error="Last Name is Required";
        $('#lname_error').html('');
        $('#lname_error').html(lname_error);
       }
       else{
        lname_error="";
        $('#lname_error').html('');
       
       }
       if(!email){
        email_error="Email is Required";
        $('#email_error').html('');
        $('#email_error').html(email_error);
       }
       else{
        email_error="";
        $('#email_error').html('');
       
       }
       if(!phone){
        phone_error="Phone Number is Required";
        $('#phone_error').html('');
        $('#phone_error').html(phone_error);
       }
       else{
        phone_error="";
        $('#phone_error').html('');
       
       }
       if(!country){
        country_error="Country is Required";
        $('#country_error').html('');
        $('#country_error').html(country_error);
       }
       else{
        country_error="";
        $('#country_error').html('');
       
       }
       if(!state){
        state_error="State is Required";
        $('#state_error').html('');
        $('#state_error').html(state_error);
       }
       else{
        state_error="";
        $('#state_error').html('');
       
       }
       if(!zipcode){
        zipcode_error="Zip code is Required";
        $('#zipcode_error').html('');
        $('#zipcode_error').html(zipcode_error);
       }
       else{
        zipcode_error="";
        $('#zipcode_error').html('');
       
       }
       if(!faddress){
        faddress_error="Full Address is Required";
        $('#faddress_error').html('');
        $('#faddress_error').html(faddress_error);
       }
       else{
        faddress_error="";
        $('#faddress_error').html('');
       
       }
      /* if(!message){
        message_error="Message is Required";
        $('#message_error').html('');
        $('#fname_error').html(message_error);
       }
       else{
        message_error="";
        $('#message_error').html('');
       
       }*/
       if(fname_error != '' || lname_error != ''|| email_error != '' || phone_error != '' || country_error!= '' || state_error != '' || zipcode_error != '' || faddress_error != '' ){
        return false;
       }
       else{
        var data={
            'firstname': firstname,
            'lastname': lastname,
            'email': email,
            'phone': phone,
            'country': country,
            'state': state,
            'zipcode': zipcode,
            'faddress': faddress,
           
        }

    
       
    }           

             });

         });