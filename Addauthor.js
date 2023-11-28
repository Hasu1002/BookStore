function submitForm() {
    //document.contact-form.reset();
    /*var pString = 'Aname=' + document.getElementById('Aname').value + '&';
    pString += 'DOB=' + document.getElementById('DOB').value + '&';
    pString += 'Age=' + document.getElementById('Age').value + '&';

    var gender = document.getElementsByName('gender');
    for(var i=0; i<gender.length; i++) {
        if(gender[i].checked) {
            pString += 'gender=' + gender[i].value + '&';
            break;
        }
    }

    pString += 'Spec=' + document.getElementById('Spec').value + '&';
    pString += 'Post=' + document.getElementById('Post').value + '&';
    pString += 'Contact=' + document.getElementById('Contact').value + '&';
    pString += 'City=' + document.getElementById('City').value;

    alert(pString);*/

    var gender = document.getElementsByName('gender');
    for(var i=0; i<gender.length; i++) {
        if(gender[i].checked) {
            var agender = gender[i].value;
            break;
        }
    }

    var formData = new FormData();
    var imgFile = document.getElementById('Aimg');

    formData.append('image', imgFile.files[0]);
    formData.append('Aname', document.getElementById('Aname').value);
    formData.append('DOB', document.getElementById('DOB').value);
    formData.append('Age', document.getElementById('Age').value);
    formData.append('gender', agender);
    formData.append('Spec', document.getElementById('Spec').value);
    formData.append('Post', document.getElementById('Post').value);
    formData.append('Contact', document.getElementById('Contact').value);
    formData.append('City', document.getElementById('City').value);

    var xmlreq = new XMLHttpRequest();
    var url = "Be.php";
    xmlreq.open('POST', url, true);
    xmlreq.onload = function() {
        if(xmlreq.status==200) {
            alert(xmlreq.responseText);
        } else {
            alert('Something went wrong');
        }
    };

    xmlreq.send(formData);
}

function isNumber(evt) {
    if (evt.charCode < 48 && evt.charCode > 57){
        return false;
    }
    return true;
}
function isAlphabet(event) {
    if ((event.charCode > 64 && event.charCode < 91) || (event.charCode > 96 && event.charCode < 123) || event.charCode == 32) {
        return true;
    }
    return false;
}

function calculateAge(birthDate) {
    var today = new Date();
    var birthDate = new Date(birthDate);
    
    var age = today.getFullYear() - birthDate.getFullYear();
    var monthDiff = today.getMonth() - birthDate.getMonth();
    
    if (monthDiff < 0 || (monthDiff === 0 && today.getDate() < birthDate.getDate())) {
      age--;
    }
    //return age;
    document.getElementById('Age').value = age;
  }
  