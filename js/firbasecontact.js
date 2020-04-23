var rootref = firebase.database().ref().child("Contacts");
 rootref.on("child_added", snap =>{
     var Name = snap.child("name").val();
     var Job = snap.child("job").val();
     var Address = snap.child("address").val();
     var Phone = snap.child("phone").val();

     $("#table_body").append("<tr><td>" + Name + "</td><td>" + Job + "</td><td>" + Address + "</td><td>" + Phone + "</td></tr>");
 });

