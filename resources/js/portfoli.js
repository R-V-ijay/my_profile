import '../../node_modules/angular/angular';
import './bootstrap';
import './jQuery/jQuery';
import axios from 'axios';

var myApp = angular.module('myApp', []);

myApp.controller('MyProfile', [function ($scope) {
    var profile = this;
    let top;
    let offset;
    let height;
    let id;
    window.addEventListener("scroll", () => {
        var header = document.querySelector("#nav");
        var main_div = document.querySelector("#mainDiv");
        header.classList.toggle("stick", window.scrollY > 10);
    })


    $(document).ready(function () {
        $('a[href^="#"]').on('click', function (e) {
            e.preventDefault();

            var target = this.hash;
            var $target = $(target);

            $('html, body').stop().animate({
                'scrollTop': $target.offset().top
            }, 500, 'swing', function () {
                window.location.hash = target;
            });
        });
    });

    profile.formSubmite = (event) => {
        event.preventDefault();
        profile.emailValidation();
        profile.phoneValidation();

        if(profile.isEmail){
            let data={
                  first_name: profile.name,
                  last_name: profile.last_name,
                  email: profile.email,
                  phone: profile.phone,
                  message: profile.message,
              }

              axios.post('profile/clint_datas',data)
                  .then(function (response) {
                      if(response.data.is_email_exists){
                          $('.emailErr').text('Email is already exist')
                      }
                      if(response.data.is_phone_exists){
                          $('.phoneErr').text('phone number is already exist')
                      }
                      if(!response.data.is_email_exists && !response.data.is_phone_exists){
                        document.clint_deatil_form.reset();
                        $(".submit_popup").addClass('show');
                        setTimeout(()=>{
                            $(".submit_popup").removeClass('show');
                        },3000)
                      }

                  })
        }


    }
    profile.emailValidation = () => {
        profile.isEmail = String(profile.email)
            .toLowerCase()
            .match(
                /^(([^<>()[\]\\.,;:\s@"]+(\.[^<>()[\]\\.,;:\s@"]+)*)|.(".+"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/
            );

            if((!profile.isEmail && profile.email != "") || profile.email == "" || profile.email == undefined){
                profile.email == "" || profile.email == undefined? $('.emailErr').text('This filed is requred') :
                $('.emailErr').text('Enter Valid Email')
            }else{
                $('.emailErr').text('')
            }
    }

    profile.phoneValidation =() =>{
        profile.phone == undefined || profile.phone == "" || (profile.phone != "" && profile.phone.length < 10) ? $(".phoneErr").text("Please enter valid phone number") : $(".phoneErr").text("")
    }

    profile.navbarDisplay =()=>{
        $("#nav").toggleClass("nav_background_color");
    }
}]);
