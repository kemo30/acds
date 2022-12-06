require('./bootstrap');

import Alpine from 'alpinejs';

window.Alpine = Alpine;

Alpine.start();

window.Echo.private(`App.Models.Admin.${userId}`).notification(function (data){
    alert(data.body);
});
window.Echo.private(`App.Models.User.${userId}`).notification(function (data){
    alert(data.body);
});

