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
    var formData = new FormData();
    var imgFile = document.getElementById('Cimg');

    formData.append('image', imgFile.files[0]);
    formData.append('Cname', document.getElementById('Cname').value);
    formData.append('Aname', document.getElementById('Aname').value);
    formData.append('CType', document.getElementById('Ctype').value);
    formData.append('Pdate', document.getElementById('Pdate').value);
    formData.append('Price', document.getElementById('Price').value);

    var xmlreq = new XMLHttpRequest();
    var url = "CBe.php";
    xmlreq.open('POST', url, true);
    xmlreq.onload = function() {
        if(xmlreq.status==200) {
            alert(xmlreq.responseText);
        } else {
            alert('Something went wrong');
        }
    };

    xmlreq.send(formData);

	document.getElementById("Cname").value="";
	document.getElementById("Aname").value="";
	document.getElementById("Cimg").value="NO FILE CHOSEN";
	document.getElementById("Ctype").value="";
	document.getElementById("Pdate").value="";
	document.getElementById("Price").value="";

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