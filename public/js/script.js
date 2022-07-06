// $(document).ready(function () {
//     $(document).on('DOMContentLoaded', function () {
//       // Request desktop notifications permission on page load

//       if (!Notification) {
//         console.log('Desktop notifications are not available in your browser.');
//         return;
//       }

//       if (Notification.permission !== 'granted') {
//         Notification.requestPermission();
//       }
//     });

//     function showNotification() {
//       if (Notification.permission !== 'granted') {
//         Notification.requestPermission();
//       } else {
//         const options = {
//           body: 'Simple Chrome Desktop Notification',
//           dir: 'ltr',
//           image: 'reminder.jpg'
//         };
//         const notification = new Notification('Notification', options);

//         notification.onclick = function () {
//           window.open('https://www.google.com');
//         };
//       }
//     }

//     $('#btn-show-notification').on('click', showNotification);

// });

// function newPage() {
//     window.location.href = 'https://localhost/upload';
// }

// window.onload = setTimeout(function(){
//     alert('This is an alert');
//     window.location = 'http://www.example.com';
// }, 5000);

let location2 = window.location;

function alertUser() {
    if (location2.href != "http://localhost/") {
        alert("You are not on the correct page");
    } else {
        console.log(location2.href);
    }
}

window.onload = alertUser();
